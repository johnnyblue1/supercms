<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('site_m');
	}

	public function index()
	{

		$this->load->library('pagination');
		$config['base_url'] = base_url() . 'blog/index';
		$config['total_rows'] = $this->site_m->count_results('blog');
		$config['per_page'] = 2;
		$this->pagination->initialize($config);

		$data['pagination'] = $this->pagination->create_links();

		$this->site_m->limit_results($config['per_page'], $this->uri->segment(3));
		$data['blog'] = $this->site_m->get('blog', FALSE, FALSE, 'date', 'desc');

		$this->load->view('site/blog', $data);
	}

}

/* End of file blog.php */
/* Location: ./application/controllers/blog.php */