<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Article extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('site_m');
	}

	public function display_article($alias)
	{

		$this->site_m->count_views($alias);
		
		$where = array('alias' => $alias);
		$data['article'] = $this->site_m->get('blog', $where, TRUE);

		$this->load->view('site/article', $data);
	}

}

/* End of file page.php */
/* Location: ./application/controllers/page.php */