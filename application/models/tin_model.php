<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class tin_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function insertDanhMuc($tendanhmuc)
	{
		$dl = [
		    'tendanhmuc' =>$tendanhmuc
		];
		return $this->db->insert('danhmuctin', $dl);
	}
	public function loadDanhMucTin()
	{
		$this->db->select('*');
		$dl=$this->db->get('danhmuctin');
		$dl=$dl->result_array();
		// var_dump($dl);
		return $dl;
	}
	public function getDataByID($id)
	{
		$this->db->select('*');
		$this->db->where('id', $id);
		$dl=$this->db->get('danhmuctin');
		$dl =$dl->result_array();
		return $dl;
		// var_dump($dl);

	}
	public function updateById($id,$tendanhmuc)
	{
		$dulieuupdate=array(
			'id'=>$id,
			'tendanhmuc'=>$tendanhmuc
		);
		$this->db->where('id', $id);
		return $this->db->update('danhmuctin', $dulieuupdate);
	}
	public function deleteById($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('danhmuctin');
	}

	public function insertTin($tieude,$iddanhmuc,$noidungtin,$anhtin,$trichdan)
	{
		$dulieu=[
			'tieude'=>$tieude,
			'iddanhmuc'=>$iddanhmuc,
			'noidungtin'=>$noidungtin,
			'anhtin'=>$anhtin,
			'trichdan'=>$trichdan

		];
		$this->db->insert('tintuc', $dulieu);
		return $this->db->insert_id();
	}
	public function danhsachtin()
	{
		$this->db->select('*');
		$dl=$this->db->get('tintuc');
		$dl=$dl->result_array();
		return $dl;
	}
	public function upadateTinById($id,$tieude,$iddanhmuc,$noidungtin,$anhtin,$trichdan)
	{
		$this->db->where('id', $id);
		$dulieu=[
			'id'=>$id,
			'tieude'=>$tieude,
			'iddanhmuc'=>$iddanhmuc,
			'noidungtin'=>$noidungtin,
			'anhtin'=>$anhtin,
			'trichdan'=>$trichdan
		];
		return $this->db->update('tintuc', $dulieu);

	}
	public function getTinById($id)
	{
		$this->db->select('*');
		$this->db->from('danhmuctin');
		$this->db->join('tintuc', 'tintuc.iddanhmuc = danhmuctin.id', 'left');
		$this->db->where('tintuc.id', $id);
		$ketqua=$this->db->get();
		$ketqua=$ketqua->result_array();
		return $ketqua;
	}
	public function getTenDanhMucByIdTin($id)
	{
		$this->db->select('*');
		$this->db->from('danhmuctin');
		$this->db->join('tintuc', 'tintuc.iddanhmuc = danhmuctin.id', 'left');
		$this->db->where('tintuc.id', $id);
		$ketqua=$this->db->get();
		$ketqua=$ketqua->result_array();
		// var_dump($ketqua);
		$ten=$ketqua[0]['tendanhmuc'];
		// var_dump($ten);
		return $ten;
	}
	public function deleteTinById($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('tintuc');
	}
	public function loadviewnews()
	{
		$soluongtintrenmottrang=2;
		$this->db->select('*');
		//$this->db->from('danhmuctin');
		//
		$this->db->join('tintuc', 'tintuc.iddanhmuc = danhmuctin.id', 'left');
		$ketqua=$this->db->get('danhmuctin',$soluongtintrenmottrang,0);
		$ketqua=$ketqua->result_array();
		//var_dump(count($ketqua));
		return $ketqua;
	}
	public function sotrang()
	{
		$soluongtintrenmottrang=2;
		$this->db->select('*');
		$ketqua2=$this->db->get('tintuc');
		$ketqua2=$ketqua2->result_array();
		$soluongtin=count($ketqua2);
		$sotrang=ceil($soluongtin/$soluongtintrenmottrang);// Ham ceil de lam tron len tren round lam tron xuong duoi
		// var_dump(count($ketqua2));
		// var_dump($sotrang);
		return $sotrang;
		die();
	}
	public function loadviewnewstrang($trang)
	{
		$soluongtintrenmottrang=2;
		$this->db->select('*');
		$this->db->join('tintuc', 'tintuc.iddanhmuc = danhmuctin.id', 'left');
		$ketqua=$this->db->get('danhmuctin',$soluongtintrenmottrang,$trang);
		$ketqua=$ketqua->result_array();

		return $ketqua;
	}
	public function loadtintheodanhmuc($iddanhmuc,$soluongtintrenmottrang)
	{
		$this->db->select('*');
		//$this->db->from('danhmuctin');
		$this->db->join('tintuc', 'tintuc.iddanhmuc = danhmuctin.id', 'left');
		$this->db->where('danhmuctin.id', $iddanhmuc);

		$ketqua=$this->db->get('danhmuctin', $soluongtintrenmottrang, 0);
		$ketqua=$ketqua->result_array();
		return $ketqua;

	}
	public function inserheader($dlheader)
	{
		$this->db->where('tenthuoctinh', 'quanlyheader');
		//Đưa ra mảng
		$dlheader=array(
			'tenthuoctinh'=>'quanlyheader',
			'giatrithuoctinh'=>$dlheader
		);
		return $this->db->update('homepageattr', $dlheader);
	}
	public function loadaccount()
	{
		$this->db->select('*');
		$ketqua=$this->db->get('login');
		$ketqua=$ketqua->result_array();
		return $ketqua;
		
	}



}

/* End of file tin_model.php */
/* Location: ./application/models/tin_model.php */