<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Countpage extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/admin_m');
	}

	function index()
	{
		//$data['id'] = $this->admin_m->count_pages();

		//$data = array(); 
		//$data['id'] = $this->admin_m->info();

		//echo $data['id'];

		//$data = $this->load->view( "myfile ',' ', true);
	    
	    $data['test'] = 'xyz';
	    $this->load->view('admin/include/header', $data);
	}


}

/* End of file countpage.php */
/* Location: ./application/controllers/countpage.php */

