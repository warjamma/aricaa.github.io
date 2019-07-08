<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class thongke extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('Slides_model');
		$this->load->model('monan_model');

	}

	public function index()
	{
		$this->load->model('monan_model');
		$dl=$this->monan_model->laysosanpham();
		$dl1=$this->Slides_model->laydulieudatbanhientai();
		$dem=count($dl1);
		// var_dump($dem);
		// die();
		$dl=['tongsomonan'=>$dl,'dem'=>$dem];
		$this->load->view('thongke_view', $dl, FALSE);

	}

}

/* End of file thongke.php */
/* Location: ./application/controllers/thongke.php */