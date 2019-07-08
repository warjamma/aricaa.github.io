<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class do_editslidefixed1 extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		//lấy dữ liệu lên
		$this->load->model('slidefixed1_model');
		$dulieu=$this->slidefixed1_model->layDuLieuSlide();

		//Giải mã JSON thành mảng
		$dulieu=json_decode($dulieu,true); //giá trị true nhằm biiees nó thành mảng luôn ko còn là đối tương
		$dulieu=array('mangdl'=>$dulieu);
		//truyền mảng này sang view
		// echo '<pre>';
		// var_dump($dulieu);
		// echo '</pre>';
		$this->load->view('suaslide_fixed1', $dulieu, FALSE);
	}
	public function suaSlidefixed1()
	{
		//B1 Lấy về nội dung từ view
		//B2 Tạo một mảng "tât cả các slide"
		//Đổi thành json
		//Gọi model update dữ liệu
		

		///Bước 1 lấy nội dung từ view các chữ hiện sẵn là nó lấy hết
		$title =$this->input->post('title');
		$description=$this->input->post('description');
		//$Tạo một mảng "tatcaslide"
		//
		
		$tatcaslide=array();
		for($i=0;$i<count($title);$i++){
			$tam=array();
			$tam['title']=	$title[$i];
			$tam['description']=$description[$i];
			array_push($tatcaslide, $tam);
		}



		// $tatcaslide=['title'=>$title,
		// 			'description'=>$description
		// 			];
		

		// echo '<pre>';
		// var_dump($tatcaslide);
		// echo '</pre>';
		$tatcaslide=json_encode($tatcaslide);

		//gọi model load dữ liệu
		$this->load->model('slidefixed1_model');
		if($this->slidefixed1_model->upDateDuLieuSlide($tatcaslide))
		{
			$this->index();
			//$this->load->view('thanhcongdanhmuctin');
		}
		else {
			$this->index();
		}


	}

}

/* End of file do_editslidefixed1.php */
/* Location: ./application/controllers/do_editslidefixed1.php */