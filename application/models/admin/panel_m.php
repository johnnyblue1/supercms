<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Panel_m extends MY_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		$this->gallery_path = BASEPATH . '../images/';
		$this->gallery_path_url = base_url() . 'images/';
	}

	// operacje na plikach w galerii

	public function do_upload()
	{
		$config= array(
			'upload_path' => $this->gallery_path,
			'allowed_types' => 'gif|jpg|jpeg|png',
			'max_size'	=> '2048',
		);

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			echo $this->upload->display_errors();
		}
		else
		{
			$image_data = $this->upload->data();
			$this->load->library('image_lib');

			// stworzenie miniaturki
			$config['source_image'] = $image_data['full_path'];
			$config['new_image'] = $this->gallery_path . 'thumbs';
			$config['maintain_ratio'] = TRUE;
			$config['width'] = 640;
			$config['height'] = 640;

			$this->image_lib->initialize($config); 
			$this->image_lib->resize();

			//dociecie miniaturki
			$config['source_image'] = $this->gallery_path . 'thumbs/' . $image_data['file_name'];
			$config['maintain_ratio'] = FALSE;
			$config['width'] = 640;
			$config['height'] = 360;
			
			$this->image_lib->initialize($config); 
			$this->image_lib->crop();
		}
	}

	public function get_images()
	{
		$files = scandir($this->gallery_path);
		$diff = array('.', '..', 'thumbs');
		$files = array_diff($files, $diff);

		return $files;
	}

}

/* End of file users_m.php */
/* Location: ./application/models/users_m.php */