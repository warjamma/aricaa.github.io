<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class tintuc extends CI_Controller {
	private $sotintrenmottrang;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('tin_model');
		$this->sotintrenmottrang=2;
	}

	public function index()
	{
		$dl=$this->tin_model->loadviewnews();
		$trang=$this->tin_model->sotrang();
		$danhmuc=$this->tin_model->loadDanhMucTin();

		$kq=['mangdl'=>$dl,'sotrang'=>$trang,'mangdm'=>$danhmuc];
		$this->load->view('news', $kq, FALSE);
	}
	public function page($sotrang)
	{
		//echo $sotrang;
		$vitri=($sotrang-1)*$this->sotintrenmottrang;
		$trang=$this->tin_model->sotrang();
		$dl=$this->tin_model->loadviewnewstrang($vitri);
		$danhmuc=$this->tin_model->loadDanhMucTin();
		// $this->session->set_userdata('suachua','daylavitamik');
		// //$this->session->unset_userdata('suachua');
		$kq=['mangdl'=>$dl,'sotrang'=>$trang,'mangdm'=>$danhmuc];
		$this->load->view('news', $kq, FALSE);
	}
	public function chitiettin($idtin)
	{
		$dl=$this->tin_model->getTinById($idtin);
		$danhmuc=$this->tin_model->loadDanhMucTin();
		$dl=['mangdl'=>$dl,'mangdm'=>$danhmuc];
		$this->load->view('news_detail', $dl, FALSE);
	}
	public function danhmuc($iddanhmuc)
	{
		$dl=$this->tin_model->loadtintheodanhmuc($iddanhmuc,$this->sotintrenmottrang);
		$trang=$this->tin_model->sotrang();
		$danhmuc=$this->tin_model->loadDanhMucTin();
		$this->session->set_userdata('suachua','daylavitamik');
		//$this->session->unset_userdata('suachua');
		$kq=['mangdl'=>$dl,'sotrang'=>$trang,'mangdm'=>$danhmuc];
		$this->load->view('news', $kq, FALSE);
	}
	public function quanlyheader()
	{
		$linkfb='http';
		$linktwiter='http';
		$linkgoogleplus='http';
		$linkpinterest='http';
		$textdt='Gọi để đặt bàn';
		$sodatban='0396490264';
		$textgio='Giờ mở cưa';
		$thongtingio='9h - 8h';
		$logo='images/logo.png';
		$dlheader=['mangxh'=>['linkfb'=>$linkfb,'linktwiter'=>$linktwiter,'linkpinterest'=>$linkpinterest,'linkgoogleplus'=>$linkgoogleplus],
				   	'dienthoai'=>['textdt'=>$textdt,'sodatban'=>$sodatban],
				   	'giomocua'=>['textgio'=>$textgio,'thongtingio'=>$thongtingio],
				   	'logo'=>$logo
		];
		$dlheader=json_encode($dlheader);
		if($this->tin_model->inserheader($dlheader))
		{
			$this->load->view('thanhCong');
		}
	}
	

}

/* End of file tintuc.php */
/* Location: ./application/controllers/tintuc.php */