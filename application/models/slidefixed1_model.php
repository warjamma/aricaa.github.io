<?php
//Cách tạo file nhớ là cimodel
defined('BASEPATH') OR exit('No direct script access allowed');

class slidefixed1_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
	}
	public function layDuLieuSlide()
	{
		$this->db->select('*');
		$this->db->where('tenthuoctinh', 'slide_fixed1');
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
		$this->db->where('tenthuoctinh', 'slide_fixed1');
		//Đưa ra mảng
		$duLieuChuanBi=array(
			'tenthuoctinh'=>'slide_fixed1',
			'giatrithuoctinh'=>$duLieuChuanBi
		);
		return $this->db->update('homepageattr', $duLieuChuanBi);
	}

}