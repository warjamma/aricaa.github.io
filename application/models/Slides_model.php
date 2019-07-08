<?php
//Cách tạo file nhớ là cimodel
defined('BASEPATH') OR exit('No direct script access allowed');

class Slides_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
	}
	public function layDuLieuSlide()
	{
		$this->db->select('*');
		$this->db->where('tenthuoctinh', 'slide_topbanner');
		$dl=$this->db->get('homepageattr');
		$dl=$dl->result_array();
		foreach ($dl as $value) {
			$bienTamThoi=$value['giatrithuoctinh'];
		}
		//Dùng để test
		// echo '<pre>';
		// var_dump($bienTamThoi);
		// echo '</pre>';
		return $bienTamThoi;

	}
	public function upDateDuLieuSlide($duLieuChuanBi)
	{
		$this->db->where('tenthuoctinh', 'slide_topbanner');
		//Đưa ra mảng
		$duLieuChuanBi=array(
			'tenthuoctinh'=>'slide_topbanner',
			'giatrithuoctinh'=>$duLieuChuanBi
		);
		return $this->db->update('homepageattr', $duLieuChuanBi);
	}
	public function updatedatban($tenkh,$email,$sdt,$ngaydatban,$giodatban,$songuoi)
	{
		$dban=['tenkh'=>$tenkh,'email'=>$email,'sdt'=>$sdt,
		'ngaydatban'=>$ngaydatban,'giodatban'=>$giodatban,'songuoi'=>$songuoi
		];
		return $this->db->insert('datban', $dban);
	}
	public function laydulieudatban()
	{
		$this->db->select('*');
		$ketqua=$this->db->get('datban');
		// var_dump($ketqua);
		// die();
		$ketqua=$ketqua->result_array();
		return $ketqua;
	}
	public function xoadulieudatban($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('datban');
	}
	public function updatetrangthaibyID($id,$trangthai)
	{
		$dll=array('id'=>$id,'trangthai'=>$trangthai);
		$this->db->where('id', $id);
		return $this->db->update('datban', $dll);
	}

	public function insertcontact($name,$email,$sdt,$web,$description)
	{
		$dl=['name'=>$name,'email'=>$email,'phone'=>$sdt,'website'=>$web,'description'=>$description];
		return $this->db->insert('contact', $dl);
	}
	public function laydulieudatbanhientai()
	{
		//$this->db->select('*');
		// $ngay=date("Y-m-d");
		
		// $ngay=['ngaydatban'=>$ngay];
		// echo $ngay;
		// die();
		// $string = serialize($array);
		$dl=$this->db->query('SELECT * FROM datban WHERE ngaydatban = CURDATE()');
		//$this->db->where('ngaydatban',$ngay);
		//$dl=$this->db->get('datban');
		// var_dump($dl);
		// die();
		$dl=$dl->result_array();
		//var_dump($dl);
		return $dl;
		
	}

}