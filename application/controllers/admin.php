<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('trang_admin');
	}

}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */