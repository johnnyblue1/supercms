<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class GetLogin extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/admin_m');
	}

	public function getlogin()
	{       
	    $query = $this->admin_m->validate();

	    if($query) 
	    {
	        $user_id= $this->admin_m->get_userID($this->input->post('email'));

	        $data = array(
	            'users' => $this->input->post('name'),
	            'name' => $name
	        );
	        $this->session->set_userdata($data);
	        $this->load->view('admin/include/header');
	    }
	    else
	    {
	        $this->index();
	    }
	}   

}

/* End of file getlogin.php */
/* Location: ./application/controllers/getlogin.php */