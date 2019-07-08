<!--Đường dẫn để vào file sủa do_edit thành addSlide
 http://localhost:8080/bai6slide/do_edit
http://localhost:8080/phpmyadmin/
sql.php?server=1&db=bai4dulieu&table=homepageattr&pos=0
http://localhost:8080/bai6slide/Slides/
 -->
<?php
//Cách tạo file cicontroller
defined('BASEPATH') OR exit('No direct script access allowed');

class Slides extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Slides_model');

	}
	public function index(){
		$this->load->view('addData_view');
	}
	public function addSlide()
	{
		
		
		//Cap nhat du lieu-Lay du lieu tu cai truong slide_topbanner
		$dulieu=$this->Slides_model-> layDuLieuSlide();
		//Giải mã json
		$dulieu=json_decode($dulieu,true);
		
		//niếu không có thì nó bị lỗi
		// if($dulieu==null){
		// 	$dulieu=array();
		// }

		//Lấy dữ liệu từ view ngang từ đây là đang lấy dữ liệu từ view
		//Cách viết tắt _post
		
		//Xử lý với biến $slides_image
		//hàm load ảnh coppy trên w3school , vào w3school search get data from view to controller in php
		$target_dir = "uploads/";
		$target_file = $target_dir . basename($_FILES["slide_image"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		    $check = getimagesize($_FILES["slide_image"]["tmp_name"]);
		    if($check !== false) {
		        echo "File is an image - " . $check["mime"] . ".";
		        $uploadOk = 1;
		    } else {
		        echo "File is not an image.";
		        $uploadOk = 0;
		    }
		}
		// Check if file already exists
		if (file_exists($target_file)) {
		    echo "Sorry, file already exists.";
		    $uploadOk = 0;
		}
		// Check file size
		if ($_FILES["slide_image"]["size"] > 500000000) {
		    echo "Sorry, your file is too large.";
		    $uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		    $uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		    echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES["slide_image"]["tmp_name"], $target_file)) {
		    //     echo "The file ". basename( $_FILES["slides_image"]["name"]). " has been uploaded.";
		    } else {
		    //     echo "Sorry, there was an error uploading your file.";
		    }
		}
		$slide_image=base_url().'uploads/'.basename($_FILES["slide_image"]["name"]);
		$title =$this->input->post('title');
		$description=$this->input->post('description');
		$button_link=$this->input->post('button_link');
		$button_text=$this->input->post('button_text');
	
		// echo '<pre>';
		// var_dump($slide_image);
		// var_dump($title);
		// var_dump($button_link);
		// var_dump($button_text);
		// echo '</pre>';

		//Thêm dữ liệu vào json dùng hàm aray push json nhằm mục đích tối ưu bảng dữ liệu nó chỉ cần một dòng dữ liệu để chèn dữ liệu vào
			//Trường hợp ngược lại không dùng json thì sẽ phải tạo rất nhiều bảng từ đó rất lằng nhằng mất thời gian với web site thương mại điện tử bình thường
		$motSlideAnh=array(
			'title'=>$title
			,'description'=>$description
			,'button_link'=>$button_link
			,'button_text'=>$button_text
			,'slide_image'=>$slide_image		);
		//Mỗi lần thêm dùng hàm array_push để đẩy vào dữ liệu
		array_push($dulieu, $motSlideAnh);
		// echo '<pre>';
		// var_dump($dulieu);
		// echo '</pre>';

		//Mã hóa lại thành json
		$dulieu =json_encode($dulieu);
		echo $dulieu;
		//Đưa dữ liệu mới vào sau đó , upload lại
		if($this->Slides_model->upDateDuLieuSlide($dulieu)){
			$this->load->view('thanhCong');
		}
		
	}
	public function suaSlide()
	{
		//B1 Lấy về nội dung từ view
		//B2 Tạo một mảng "tât cả các slide"
		//Đổi thành json
		//Gọi model update dữ liệu
		

		///Bước 1 lấy nội dung từ view các chữ hiện sẵn là nó lấy hết
		$title =$this->input->post('title');
		$description=$this->input->post('description');
		$button_link=$this->input->post('button_link');
		$button_text=$this->input->post('button_text');
		
		//Bước 2 lấy về tất cả các ảnh, rồi upload lên
		//Upload bài trước là upload từng file đây là upload nguyên 1 loạt file
		//Tất cả các ảnh lấy về với $cacanh

		//Lưu trữ thật tmp_name có nghĩa là file tạm
		$cacanh =$_FILES['slide_image']['name'];//Lưu trữ trên file
		$fileThat = $_FILES['slide_image']['tmp_name'];
		//Mình phải khai báo ra cái mảng lưu trữ tên file
		$slide_image =array();
		//_post Tạo ra $slide_image_old nhằm lưu lại cái ảnh cũ khi người ta không chọn ảnh mới
		//Dùng hàm type="hiden" bên editSlide_view để ẩn đi
		$slide_image_old=$this->input->post('slide_image_old');

		// echo '</pre>';
		// 	var_dump($slide_image_old);
		// echo '<pre>';
		//B2 Duyet mảng để lấy tên từng file
		for($i=0; $i<count($cacanh);$i++)
		{
			
		if(empty($cacanh[$i]))//Dùng để kiểm tra cái mảng các ảnh có ảnh nào không niếu không thì lấy ảnh cũ  niếu có thì thay thế dùng hàm move ở w3school 
		{
			$slide_image[$i]=$slide_image_old[$i]; 
		}
		else {
			$duongdan='uploads/'.$cacanh[$i];
			move_uploaded_file($fileThat[$i], $duongdan);
			$slide_image[$i]=base_url()."uploads/".$cacanh[$i];
		} 
		
		//$slide_image chứa toàn bộ file mình cần
		}
					// echo '</pre>';
					// 	var_dump($slide_image);
					// echo '<pre>';
					// echo '</pre>';
					// 	var_dump($title);
					// echo '<pre>';
		//$Tạo một mảng "tatcaslide"
		$tatcaslide=array();
		for($i=0;$i<count($title);$i++){
			$tam=array();
			$tam['title']=	$title[$i];
			$tam['description']=$description[$i];
			$tam['button_text']=$button_text[$i];
			$tam['button_link']=$button_link[$i];
			$tam['slide_image']=$slide_image[$i];
			array_push($tatcaslide, $tam);
		}
		// echo '<pre>';
		// var_dump($tatcaslide);
		// echo '</pre>';
		$tatcaslide=json_encode($tatcaslide);

		//gọi model load dữ liệu
		$this->load->model('Slides_model');
		if($this->Slides_model->upDateDuLieuSlide($tatcaslide))
		{
			$this->Slides();
			//$this->load->view('thanhcongdanhmuctin');
		}
		else
		{
			$this->Slides();
		}

	}
}
