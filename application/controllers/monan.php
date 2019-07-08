<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class monan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('monan_model');
	}

	public function index()
	{
		$this->load->view('monan_sua');
	}
	public function quanlymonan(){
		$dsmonan=$this->monan_model->loaddsmonan();
		$buoi=$this->monan_model->loadbuoian();
		$mang=['mangbuoian'=>$buoi,'mangmonan'=>$dsmonan];
		$this->load->view('monan_sua', $mang, FALSE);
	}
	public function themmonan()
	{
		$target_dir = "uploads/";
		$target_file = $target_dir . basename($_FILES["anhmon"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		    $check = getimagesize($_FILES["anhmon"]["tmp_name"]);
		    if($check !== false) {
		        //echo "File is an image - " . $check["mime"] . ".";
		        $uploadOk = 1;
		    } else {
		        echo "File is not an image.";
		        $uploadOk = 0;
		    }
		}
		// Check if file already exists
		if (file_exists($target_file)) {
		    //echo "Sorry, file already exists.";
		    $uploadOk = 0;
		}
		// Check file size
		if ($_FILES["anhmon"]["size"] > 500000000) {
		    //echo "Sorry, your file is too large.";
		    $uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		    //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		    $uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		    echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES["anhmon"]["tmp_name"], $target_file)) {
		    //     echo "The file ". basename( $_FILES["slides_image"]["name"]). " has been uploaded.";
		    } else {
		    //     echo "Sorry, there was an error uploading your file.";
		    }
		}
		$anhmon=base_url().'uploads/'.basename($_FILES["anhmon"]["name"]);
		//var_dump($anhmon);

		$tieudemonan=$this->input->post('tieudemonan');
		$gia=$this->input->post('gia');
		$mota=$this->input->post('mota');
		$tinhtrang=$this->input->post('tinhtrang');
		$idbuoian=$this->input->post('idbuoian');

		// var_dump($tieudemonan);
		// die();

		if ($this->monan_model->insertTin($tieudemonan,$gia,$mota,$tinhtrang,$idbuoian,$anhmon))
		{
			$this->quanlymonan();
			//$this->load->view('thanhcongdanhmuctin');
		}
		else {
			$this->quanlymonan();
			//$this->load->view('thatbaidanhmuctin');
		}	
	}
	
	public function xoa_monan($id)
	{
		$this->monan_model->xoamonanById($id);
		$this->quanlymonan();
		//$this->load->view('thanhcongdanhmuctin');
	}
	public function sua_monan($id)
	{
		$tenmonan=$this->monan_model->getmonanById($id);
		$tenbuoian=$this->monan_model->getbuoianById($id);
		$dsbuoian=$this->monan_model->loadbuoian();
		$ketquachung=['mangdl' =>$tenmonan , 'tenbuoian'=>$tenbuoian ,'mangbuoian'=>$dsbuoian];

		$this->load->view('sua_motmonan', $ketquachung);


	}
	public function luumonan()
	{
		$anhmoncu=$this->input->post('anhmoncu');
		$anhmon=$_FILES['anhmon']['name'];
		$fileThat = $_FILES['anhmon']['tmp_name'];
		if(empty($anhmon))
		{
			$anhmon =$anhmoncu;
		}
		else
		{
			$duongdan='uploads/'.$anhmon;
			move_uploaded_file($fileThat, $duongdan);
			$anhmon=base_url()."uploads/".$anhmon;


		}
		// var_dump($anhmon);
		// 	die();

		$tieudemonan=$this->input->post('tieudemonan');
		$gia=$this->input->post('gia');
		$mota=$this->input->post('mota');
		$tinhtrang=$this->input->post('tinhtrang');
		$idbuoian=$this->input->post('idbuoian');
		$id=$this->input->post('id');
		// echo $idbuoian;
		// die();

		if ($this->monan_model->upadateTinById($id,$tieudemonan,$gia,$mota,$tinhtrang,$idbuoian,$anhmon)) 
		{
			$this->quanlymonan();
		}
		else {
			$this->quanlymonan();
		}


	}
	

}

/* End of file monan.php */
/* Location: ./application/controllers/monan.php */