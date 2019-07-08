<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class tin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('tin_model');
	}

	public function index()
	{
		
	}
	public function danhmuctin()
	{
		// goi danh muc tin model lay dư lieu
		$ketqua=$this->tin_model->loadDanhMucTin();
		$ketqua = ['dulieu' =>$ketqua ];
		// var_dump($ketqua);
		$this->load->view('danhmuctin_view',$ketqua);
	}
	public function themdanhmuc()
	{
		$tendanhmuc=$this->input->post('tendanhmuc');
		$this->load->model('tin_model');
		if ($tendanhmuc!='') {
			if($this->tin_model->insertDanhMuc($tendanhmuc))
			{
				$this->load->view('thanhcongdanhmuctin');
			}
			else
			{
				$this->load->view('thatbaidanhmuctin');
			}
		}
		else {
			echo 'Thất bại';
		}
		
	}
	public function suadanhmuc($iddanhmuc)
	{
		$dl=$this->tin_model->getDataByID($iddanhmuc);
		
		//$dl=array('mangdl'=>$dl); 
		$dl=['mangdl'=>$dl];

		$this->load->view('suatendanhmuc',$dl,false);

	}
	public function updatedanhmuc()
	{
		$id =$this->input->post('id');
		$tendanhmuc=$this->input->post('tendanhmuc');
		//$mangtrave=array('id'=>$id,'tendanhmuc'=>$tendanhmuc);
		if($this->tin_model->updateById($id,$tendanhmuc))
		{
			$this->danhmuctin();
		}
		else {
			$this->danhmuctin();
		}
		
		
	}
	public function xoadanhmuc($id)
	{
		// $id=$this->input->post('id');
		$this->tin_model->deleteById($id);
		$this->load->view('thanhcongdanhmuctin');
	}

	public function themmottin()
	{
		$target_dir = "uploads/";
		$target_file = $target_dir . basename($_FILES["anhtin"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		    $check = getimagesize($_FILES["anhtin"]["tmp_name"]);
		    if($check !== false) {
		        //echo "File is an image - " . $check["mime"] . ".";
		        $uploadOk = 1;
		    } else {
		        //echo "File is not an image.";
		        $uploadOk = 0;
		    }
		}
		// Check if file already exists
		if (file_exists($target_file)) {
		    //echo "Sorry, file already exists.";
		    $uploadOk = 0;
		}
		// Check file size
		if ($_FILES["anhtin"]["size"] > 500000000) {
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
		    if (move_uploaded_file($_FILES["anhtin"]["tmp_name"], $target_file)) {
		    //     echo "The file ". basename( $_FILES["slides_image"]["name"]). " has been uploaded.";
		    } else {
		    //     echo "Sorry, there was an error uploading your file.";
		    }
		}
		$anhtin=base_url().'uploads/'.basename($_FILES["anhtin"]["name"]);
		//var_dump($anhtin);

		$tieude=$this->input->post('tieude');
		$iddanhmuc=$this->input->post('iddanhmuc');
		$noidungtin=$this->input->post('noidungtin');
		$trichdan=$this->input->post('trichdan');

		if($tieude!='')
		{
			if ($this->tin_model->insertTin($tieude,$iddanhmuc,$noidungtin,$anhtin,$trichdan))
			{
				$this->quanlytin();
				//$this->load->view('thanhcongdanhmuctin');
			}
			else {
				$this->quanlytin();
				//$this->load->view('thatbaidanhmuctin');
			}
		}
		else {
			echo 'Thất bại';
		}
	}

	public function loaddanhsachtin()
	{
		$id=$this->input->post('id');
		$ketqua=$this->tin_model->danhsachtin();
		//$ketqua = ['dstin' =>$ketqua ];
		// var_dump($ketqua);
		//$this->load->view('tin_view',$ketqua);
	}
		public function quanlytin()
	{
		$ketqua=$this->tin_model->danhsachtin();
		$dl=$this->tin_model->loadDanhMucTin();
		$mangchung=['dulieudanhmuc'=>$dl,
					'dulieutin'=>$ketqua
			];

		$this->load->view('tin_view',$mangchung);
	}

	public function sua_tin($id)
	{
		//Lấy ra id
		
		$tentin=$this->tin_model->getTinById($id);
		$tendanhmuc=$this->tin_model->getTenDanhMucByIdTin($id);
		$danhmuctin=$this->tin_model->loadDanhMucTin();
		$ketquachung=['dulieutin' =>$tentin,'dulieudanhmuc'=>$tendanhmuc,'mangdanhmuctin'=>$danhmuctin];
		// var_dump($danhmuctin);
		// die();
		$this->load->view('tin_sua', $ketquachung);


	}
	public function luutin()
	{
		$anhtincu=$this->input->post('anhtincu');
		$anhtin=$_FILES['anhtin']['name'];
		$fileThat = $_FILES['anhtin']['tmp_name'];
		if(empty($anhtin))
		{
			$anhtin =$anhtincu;
		}
		else
		{
			$duongdan='uploads/'.$anhtin;
			move_uploaded_file($fileThat, $duongdan);
			$anhtin=base_url()."uploads/".$anhtin;


		}
		// var_dump($anhtin);
		// 	die();

		$tieude=$this->input->post('tieude');
		$iddanhmuc=$this->input->post('iddanhmuc');
		$noidungtin=$this->input->post('noidungtin');
		$trichdan=$this->input->post('trichdan');
		$id =$this->input->post('id');


		if ($this->tin_model->upadateTinById($id,$tieude,$iddanhmuc,$noidungtin,$anhtin,$trichdan)) 
		{
			$this->quanlytin();
			
		}
		else {
			$this->quanlytin();
		}

	}
	public function xoa_tin($id)
	{
		$this->tin_model->deleteTinById($id);
		//$this->load->view('thanhcongdanhmuctin');
		$this->quanlytin();
	}
	public function addjquerydanhmuc()
	{
		$tendanhmuc=$this->input->post('tendanhmuc');
		$this->load->model('tin_model');
		$this->tin_model->insertDanhMuc($tendanhmuc);
		//ham nay lay ve id xong truyen qua ajax
		echo json_encode($this->db->insert_id());
		

	}




}

/* End of file tin.php */
/* Location: ./application/controllers/tin.php */