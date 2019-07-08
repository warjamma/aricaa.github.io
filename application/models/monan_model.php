<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class monan_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function loadbuoian()
	{
		$this->db->select('*');
		$ketqua=$this->db->get('buoian');
		$ketqua=$ketqua->result_array();
		return $ketqua;
	}
	public function insertTin($tieudemonan,$gia,$mota,$tinhtrang,$idbuoian,$anhmon)
	{
		$monan=['tieudemonan'=>$tieudemonan,
				'gia'=>$gia,
				'mota'=>$mota,
				'new'=>$tinhtrang,
				'idbuoian'=>$idbuoian,
				'anhmon'=>$anhmon
				];
		return $this->db->insert('monan', $monan);
	}
	public function loaddsmonan()
	{
		$this->db->select('*');
		$ketqua=$this->db->get('monan');
		$ketqua=$ketqua->result_array();
		return $ketqua;

	}
	public function xoamonanById($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('monan');
	}
	public function getmonanById($id)
	{
		$this->db->select('*');
		$this->db->where('id', $id);
		$ketqua=$this->db->get('monan');
		$ketqua=$ketqua->result_array();
		return $ketqua;
	}
	public function getbuoianById($id)
	{
		$this->db->select('*');
		$this->db->from('buoian');
		$this->db->join('monan', 'monan.idbuoian = buoian.id', 'left');
		$this->db->where('monan.id', $id);
		$ketqua=$this->db->get();
		$ketqua=$ketqua->result_array();
		// var_dump($ketqua);	
		// die();
		$ten=$ketqua[0]['tenbuoian'];
		return $ten;
	}
	public function upadateTinById($id,$tieudemonan,$gia,$mota,$tinhtrang,$idbuoian,$anhmon)
	{
		$this->db->where('id', $id);
		$monan=[
				'id'=>$id,
				'tieudemonan'=>$tieudemonan,
				'gia'=>$gia,
				'mota'=>$mota,
				'new'=>$tinhtrang,
				'idbuoian'=>$idbuoian,
				'anhmon'=>$anhmon
				];
		return $this->db->update('monan', $monan);
	}
	public function getbuoianvamonan()
	{
		$this->db->select('*');
		$this->db->from('monan');
		$this->db->join('buoian', 'monan.idbuoian = buoian.id', 'left');
		$ketqua=$this->db->get();
		$ketqua=$ketqua->result_array();
		return $ketqua;
	}
	public function laysosanpham()
	{
		$this->db->select('*');
		$dulieu=$this->db->get('monan');
		$dulieu=$dulieu->result_array();
		$dem=count($dulieu);
		return $dem;
	}

}

/* End of file monan_model.php */
/* Location: ./application/models/monan_model.php */