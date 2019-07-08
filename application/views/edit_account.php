<!-- http://bit.ly/ckeditorfedu -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Danh muc tin</title>
	<script type="text/javascript" src="<?php echo base_url() ?>vendor/bootstrap.js"></script>


 	<script type="text/javascript" src="<?php echo base_url() ?>vendor/isotope.pkgd.min.js"></script>
 	<script type="text/javascript" src="<?php echo base_url() ?>vendor/imagesloaded.pkgd.min.js"></script>
 	<script type="text/javascript" src="<?php echo base_url() ?>1.js"></script>

	<link rel="stylesheet" href="<?php echo base_url() ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>vendor/font-awesome.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>1.css">
	
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

	<script src="<?php echo base_url() ?>ckeditor/ckeditor.js"></script>
	<script src="<?php echo base_url() ?>ckeditor/ckfinder/ckfinder.js"></script>

</head>
<body>
	<?php foreach ($mangdl as $value): ?>
		
	
	<?php 
	if ($this->session->has_userdata('password') && ($this->session->userdata('password')==$value['password']) ) {
		redirect('tin/quanlytin','refresh');
		echo 'lỗi rồi';
	
	 ?>
	<!-- <div class="alert alert-primary|alert-secondary|alert-success|alert-danger|alert-warning|alert-info|alert-light|alert-dark" role="alert">
	  Bạn đã đăng nhập thành công <?php echo $this->session->userdata('suachua'); ?>
	</div> -->
	<?php } ?>

	<?php endforeach ?>




	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-4 push-sm-4">
				<div class="jumbotron">
				  <h1 class="display-4 text-center">Đăng nhập</h1>
				  <p class="lead text-center">Đăng nhập</p>
				</div>
				<form action="<?php echo base_url() ?>tintuc/login_validation" method="post" enctype="multipart/form-data">
				     <!--  <h2 for="inputEmail4" class="display-4 ">Thêm danh mục</h2> -->
				     
				      <fieldset>
				      		<label>User name</label>
				      		<input type="text" name="username" class="form-control" id="inputEmail4" placeholder="Tên đăng nhập">
				      </fieldset>
				      <fieldset>
				      		<label>Password</label>
				      		<input type="password" name="password" class="form-control" id="inputEmail4" placeholder="Password">
				      </fieldset>
				  <br>
				  <input type="submit" name="insert" class="btn btn-primary" value="Đăng nhập">
				</form>
			</div> <!-- END COT TRAI -->
		</div>
	</div>


</body>
</html>