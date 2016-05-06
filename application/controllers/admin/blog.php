<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/panel_m');

		$this->loggedin() == TRUE || redirect('admin/panel/login');
	}

	public function index()
	{	
		$data['blog'] = $this->panel_m->get('blog', FALSE, FALSE, 'date', 'desc');
		$this->load->view('admin/blog/index', $data);
	}

	// Metoda tworzenia użytkowników
	public function create()
	{
		// Jeśli formularz zostanie przesłany
		if(!empty($_POST))
		{
			$config = array(
				'required' => 'Pole %s jest wymagane',
				'is_unique' => 'Inna strona ma już taki alias',
			);

			$this->form_validation->set_message($config);

			if ( $this->input->post('alias') == '' )
			{
				$_POST['alias'] = alias($this->input->post('title'));
			}

			if ($this->form_validation->run('blog_create') == TRUE)
			{
				// Jeśli walidacja zadziałała

				$data = array(
					'title' => $this->input->post('title'),
					'alias' => alias($this->input->post('alias')),
					'date' => $this->input->post('date'),
					'content' => $this->input->post('content'),
				);

				$this->panel_m->create('blog', $data);

				redirect('admin/blog');
			}

		}

		// Widok formularza tworzenia użytkowników
		$this->load->view('admin/blog/create');
	}

	public function edit()
	{
		$id = $this->uri->segment(4);
		$where = array('id' => $id);
		$data['article'] = $this->panel_m->get('blog', $where, TRUE);
		$id = $data['article']->id;

		// Jeśli formularz zostanie przesłany
		if(!empty($_POST))
		{
			$config = array(
				'required' => 'Pole %s jest wymagane',
			);

			$this->form_validation->set_message($config);

			if ( $this->input->post('alias') == '' )
			{
				$_POST['alias'] = alias($this->input->post('title'));
			}

			if ($this->form_validation->run('blog_edit') == TRUE)
			{
				// Jeśli walidacja zadziałała

				$data = array(
					'title' => $this->input->post('title'),
					'alias' => alias($this->input->post('alias')),
					'date' => $this->input->post('date'),
					'content' => $this->input->post('content'),
				);

				$where = array('id' => $id);
				$this->panel_m->update('blog', $where, $data);

				redirect('admin/blog');
			}


		}
		$this->load->view('admin/blog/edit', $data);

	}

	public function delete()
	{
		$id = $this->uri->segment(4);
		$where = array('id' => $id);
		$this->panel_m->delete('blog', $where);
		redirect('admin/blog');
	}

	function _unique_alias()
	{
		$id = $this->uri->segment(4);
		$alias = $this->input->post('alias');

		$where = array('alias' => $alias);
		$this->panel_m->unique($id, $where);

		if( $this->panel_m->get('blog') )
		{
			$this->form_validation->set_message('_unique_alias', 'Alias jest już w użyciu');
			return FALSE;
		}

		return TRUE;
	}

}

/* End of file blog.php */
/* Location: ./application/controllers/blog.php */