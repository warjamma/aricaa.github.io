<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class trangchu extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('slidefixed1_model');
		$this->load->model('Slides_model');
		$this->load->model('monan_model');
	}

	public function index()
	{

		$dl=$this->Slides_model->layDuLieuSlide();
		$dulieu=$this->slidefixed1_model->layDuLieuSlide();
		$monan=$this->monan_model->getbuoianvamonan();
		$dl=json_decode($dl,true);
		$dulieu=json_decode($dulieu,true);

		$dlchung=['mangdl1'=>$dl,'mangdl2'=>$dulieu, 'mangmonan'=>$monan];
		$this->load->view('view_slide', $dlchung);
	}
	public function booking()
	{
		$tenkh=$this->input->post('tenkh');
		$email=$this->input->post('email');
		$sdt=$this->input->post('sdt');
		$ngaydatban=$this->input->post('ngaydatban');
		$giodatban=$this->input->post('giodatban');

		$a=(string)$ngaydatban;
		$b=(string)$giodatban;
		$giodatban=$a." ".$b;
		$songuoi=$this->input->post('songuoi');
		// var_dump($tenkh);
		// die();
		//$this->Slides_model->updatedatban($tenkh,$email,$sdt,$ngaydatban,$giodatban,$songuoi);
		$this->load->model('datban_model');
		if($tenkh!='' && $email!=''||$sdt!='')
			if($this->Slides_model->updatedatban($tenkh,$email,$sdt,$ngaydatban,$giodatban,$songuoi))
			{
				//$this->index();
				echo 'that baisssssskkkkkkkkk';
			}
			else {
			
				//$this->load->view('thanhCong');
				$this->loadresrervation();
			}
		else
			{
				echo 'Thất bại';
			}
		}
	public function quanlydatban()
	{
		$dl=$this->Slides_model->laydulieudatban();
		$data=['dulieudatban'=>$dl];
		// die();
		$this->load->view('datban_view.php', $data);
	}
	public function xoadatban($id)
	{
		if ($this->Slides_model->xoadulieudatban($id)) {
			$this->quanlydatban();
		}
		else {
			$this->quanlydatban();
		}
	}
	public function suadatban($id)
	{
		var_dump($id);
		$trangthai='1';
		if($this->Slides_model->updatetrangthaibyID($id,$trangthai))
		{
			echo "thành công";
		}
		else {
			echo 'Thất bại';
		}
	}
	public function dm()
	{
		echo date("Y-m-d h:i:pm") . "<br>";
	}
	public function loadresrervation()
	{
		$this->load->view('reservation_view');
	}
	public function loadthucdon()
	{
		$monan=$this->monan_model->getbuoianvamonan();
		//var_dump($monan) ;
		$dlchung=['mangmonan'=>$monan];
		// var_dump($dlchung);
		// die();
		$this->load->view('thucdon_view', $dlchung, FALSE);
	}
	public function loadaboutview()
	{
		$this->load->view('arica_about');
		
	}
	public function loadcontact()
	{
		$this->load->view('arica_contact');
	}
	public function contact()
	{
		$name=$this->input->post('name');
		$email=$this->input->post('email');
		$sdt=$this->input->post('phone');
		$website=$this->input->post('website');
		$description=$this->input->post('description');
		// var_dump($name);
		// var_dump($email);
		// var_dump($sdt);
		// var_dump($website);
		// var_dump($description);
		if($name!='')
		{
			$this->Slides_model->insertcontact($name,$email,$sdt,$website,$description);
			// if($this->Slides_model->insertcontact($name,$email,$sdt,$website,$description))
			// {

			// 	$this->loadcontact();
			// }
			// else
			// {
			// 	echo 'that bai';
			// }
		}
		else {
			echo 'thatbai';
		}

	}
	public function currentdate()
	{
		$dl=$this->Slides_model->laydulieudatbanhientai();
		$data=['dulieudatban'=>$dl];
		// die();
		$this->load->view('datban_view.php', $data);
	}
	public function addbookingajax()
	{
		$tenkh=$this->input->post('tenkh');
		// echo $tenkh;
		// die();
		$email=$this->input->post('email');
		$sdt=$this->input->post('sdt');
		$ngaydatban=$this->input->post('ngaydatban');
		$giodatban=$this->input->post('giodatban');

		$a=(string)$ngaydatban;
		$b=(string)$giodatban;
		$giodatban=$a." ".$b;
		$songuoi=$this->input->post('songuoi');
		// var_dump($tenkh);
		// die();
		if($tenkh!='' && $email!=''||$sdt!='')
			if($this->Slides_model->updatedatban($tenkh,$email,$sdt,$ngaydatban,$giodatban,$songuoi))
			{
				$this->loadresrervation();
			}
			else {
			
				//$this->load->view('thanhCong');
				$this->loadresrervation();
			}
		//$this->Slides_model->updatedatban($tenkh,$email,$sdt,$ngaydatban,$giodatban,$songuoi);
	}

}

/* End of file trangchu.php */
/* Location: ./application/controllers/trangchu.php */