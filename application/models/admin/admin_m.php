<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_m extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function get_userID($email)
	{

		$this->db->where('email',$email);
		$query = $this->db->get('users');       
		foreach ($query->result() as $row)
		    {
		        $name = $row->name;
		    }
		    return $name;
	}

	public function count_pages()
    {
    	$data =  $this->db->count_all('pages');
        return $data;
    }

    public function info()
    {
        return 'info z modelu';
    }

}

/* End of file admin_m.php */
/* Location: ./application/models/admin_m.php */