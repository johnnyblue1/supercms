<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('site_m');
		$data['loggedin'] = $this->loggedin();
		$data['pages'] = $this->site_m->get('pages', FALSE, FALSE, 'order', 'desc');
		$this->load->vars($data);
	}

	public function loggedin()
	{
		return $this->session->userdata('loggedin');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('admin/panel');
	}

}

/* End of file MY_Controller.php */
/* Location: ./application/controllers/MY_Controller.php */