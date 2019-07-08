<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class do_edit extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		//lấy dữ liệu lên
		$this->load->model('Slides_model');
		$dulieu=$this->Slides_model->layDuLieuSlide();


		//Giải mã JSON thành mảng
		$dulieu=json_decode($dulieu,true); //giá trị true nhằm biiees nó thành mảng luôn ko còn là đối tương
		$dulieu=array('mangdl'=>$dulieu);
		//truyền mảng này sang view
		// echo '<pre>';
		// var_dump($dulieu);
		// echo '</pre>';
		$this->load->view('editSlide_view', $dulieu, FALSE);
	}
	

}

/* End of file do_edit.php */
/* Location: ./application/controllers/do_edit.php */