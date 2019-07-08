<!DOCTYPE html>
<html lang="en"><head>
	<title> Artica-home  </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700&amp;subset=vietnamese" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700" rel="stylesheet">


	<script type="text/javascript" src="<?php echo base_url() ?>vendor/bootstrap.js"></script>


 	<script type="text/javascript" src="<?php echo base_url() ?>vendor/isotope.pkgd.min.js"></script>
 	<script type="text/javascript" src="<?php echo base_url() ?>vendor/imagesloaded.pkgd.min.js"></script>
 	<script type="text/javascript" src="<?php echo base_url() ?>1.js"></script>

	<link rel="stylesheet" href="<?php echo base_url() ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>vendor/font-awesome.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>1.css">
 </head>
<body >

	<header>
 	<div class="topheader">
 		<div class="container">
 			<div class="row">
 				<div class="col-sm-6 wow jello">
 					<div class="mangxh float-sm-left text-xs-center text-sm-left">
						<a href=""><i class="fa fa-facebook"></i></a>
						<a href=""><i class="fa fa-twitter"></i></a>
						<a href=""><i class="fa fa-pinterest"></i></a>
						<a href=""><i class="fa fa-google-plus"></i></a>
 					 </div>
 					<div class="datban">
 						Call for reservation: +011 29 345 678
 					 </div>
 				</div>
 				<div class="col-sm-6 ">
 					<div class="datban openingtop float-sm-right text-sm-left text-xs-center">
 						Opening Hours : 9:00am - 10:00pm
 					</div>
 				</div>
 			</div> <!-- het row -->
 		</div> <!-- het container -->
 	</div> <!-- het topheader  -->
 	</header><!-- /header -->
 	<div class="logovamenu">
	    <nav class="navbar navbar-light  fontroboto">
	    	<div class="container">    	
			      <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#mtren">
			       
			      </button>
			      <div class="collapse navbar-toggleable-xs" id="mtren">
			        <a class="navbar-brand text-xs-center text-sm-left" href="<?php echo base_url() ?>"><img src="images/logo.png" alt=""></a>

			        <ul class="nav navbar-nav float-sm-right">
			          <li class="nav-item ">
			            <a class="nav-link active" href="<?php echo base_url() ?>">Home  </a>
			          </li>
			          <li class="nav-item">
			            <a class="nav-link " href="<?php echo base_url() ?>trangchu/loadaboutview">About</a>
			          </li>
			          <li class="nav-item">
			            <a class="nav-link" href="<?php echo base_url() ?>tintuc/">News</a>
			          </li>
			          <li class="nav-item">
			            <a class="nav-link " href="<?php echo base_url() ?>trangchu/loadthucdon">Menu</a>
			          </li>
			          <li class="nav-item ">
			            <a class="nav-link" href="<?php echo base_url() ?>trangchu/loadresrervation">Booking</a>
			          </li>
			          <li class="nav-item ">
			            <a class="nav-link" href="<?php echo base_url() ?>trangchu/loadcontact">Contact</a>
			          </li>
			         <li class="nav-item datbanmenu">
			            <a class="nav-link btn btn-warning wow bounce" data-wow-iteration="3" href="<?php echo base_url() ?>trangchu/loadresrervation" >Reservation</a>
			          </li>
			        </ul>
			      </div>
	      </div> <!-- het container -->
	    </nav>
 	</div> <!-- het logo va menu -->
 	
<div class="slide">
 	<div id="slidehome" class="carousel slide slidecon" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#slidehome" data-slide-to="0" class="active"></li>
				<li data-target="#slidehome" data-slide-to="1"></li>
				<li data-target="#slidehome" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				
				<?php $dem=1; ?>
				 <?php foreach ($mangdl1 as $key=>$value): ?>
				 	
				<!--  <?php
				 // echo '<pre>';
				 // var_dump($value['title']);
				 // var_dump($value['description']);
				 // var_dump($value['button_link']);
				 // var_dump($value['button_text']);
				 // var_dump($value['slide_image']);

				 	//<?= if($dem==1){echo "active";} else {$dem++} ?>
				 echo '</pre>'; ?> -->
 						<div class="wow fadeInUp carousel-item <?php if($dem==1) {echo "active";$dem++;} ?>	">
 							<div class="chu">
 								<h2 class=" fontoswarld"><?= $value['title'] ?></h2>
 								<p><?= $value['description'] ?></p>
 								<a href="<?= $value['button_link'] ?>" class="nutslide fontoswarld btn btn-warning"><?= $value['button_text'] ?></a>
 							</div>
 							<img src="<?= $value['slide_image'] ?>" alt="">
 						</div>
 					<?php endforeach ?>
 		
			</div>
			<a class="left carousel-control" href="#slidehome" role="button" data-slide="prev">
				<span class="icon-prev" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#slidehome" role="button" data-slide="next">
				<span class="icon-next" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		 

 
 	</div> <!-- het slide  -->
 	<div class="badichvu">
 		<div class="container ">
 			<div class="row">
 				<div class="col-sm-4 wow flipInY">
 					<a href=""><img src="images/3dichvu.jpg" alt="" class="img-fluid"></a>
 					<h3><a href="">Our Restaruant Story</a></h3>
 					<p>Sed ut perspiciatis unde omnis iste natus errorsit voluptatem accusantium doloremque laudantium thes hatles tooest surf totam rem aperiam.</p>
 					<a href="" class="readmore">Read More</a>
 				</div>
				<div class="col-sm-4 wow flipInY" data-wow-delay="0.2s">
 					<a href=""><img src="images/3dichvu.jpg" alt="" class="img-fluid"></a>
 					<h3><a href="">Our Restaruant Story</a></h3>
 					<p>Sed ut perspiciatis unde omnis iste natus errorsit voluptatem accusantium doloremque laudantium thes hatles tooest surf totam rem aperiam.</p>
 					<a href="" class="readmore">Read More</a>
 				</div>
				<div class="col-sm-4 wow flipInY" data-wow-delay="0.4s">
 					<a href=""><img src="images/3dichvu.jpg" alt="" class="img-fluid"></a>
 					<h3><a href="">Our Restaruant Story</a></h3>
 					<p>Sed ut perspiciatis unde omnis iste natus errorsit voluptatem accusantium doloremque laudantium thes hatles tooest surf totam rem aperiam.</p>
 					<a href="" class="readmore">Read More</a>	
 				</div>				
 			</div> <!-- het row -->
 		</div> <!--  het container -->
 	</div>  <!-- het badichvu -->
  	<div class="khoimenu wow fadeInUp">  
 		<div class="tieudekhoimenu text-xs-center">
 			<div class="container">
 				<div class="row">
 					<?php $dem=1 ?>
 						 <?php foreach ($mangdl2 as $key  => $value): ?>
 					<div class="col-sm-8 push-sm-2">  
 						<span class="tieudephu fontdancing"><?php if($dem==1) {echo $value['title'];} ?></span>
 						<h3 class="tieudechinh fontroboto"><?php if($dem==1) {echo $value['description'];$dem++;} ?></h3>
 						
 					</div>
 					<?php endforeach ?>
 					
 				</div>
 			</div>
 			
 		</div>   <!-- HET TIEUDEKHOIMENU -->
 	</div>  <!-- HET KHOI MENU -->

 	<div class="thucdonct wow fadeInUp">
 		<div class="tieudect text-xs-center fontroboto">
 			<a href="" data-monan="*">All </a>
 			<a href="" data-monan=".sang">Breakfast</a>
 			<a href="" data-monan=".trua">Lunch</a>
 			<a href="" data-monan=".toi">Dinner</a> 
 		</div>
 		<div class="noidungct">
 			 <div class="container">
 			 	<div class="row nhieumon">
					<?php foreach ($mangmonan as $value): ?>

 			 		<div class="col-xs-12 col-sm-6 col-md-4   motmon <?php if($value['tenbuoian']=='Sáng'){echo 'sang';} else if($value['tenbuoian']=='Trưa'){echo 'trua';} else if($value['tenbuoian']=='Tối'){echo 'toi';}?>">
 			 			<div class="row">

 			 				<div class="col-xs-3 col-sm-4">
 			 					<div class="anhmon">
 			 						<?php if($value['new']) echo '<div class="tagnew"> NEW</div>' ; ?>
 			 						
 			 						<img src="<?= $value['anhmon'] ?>" alt="" class="img-fluid">
 			 					</div>
 			 				</div>
 			 				<div class="col-xs-9 col-sm-8">
 			 					<div class="tenmon">
 			 						<div class="tren">
 			 							<span class="float-xs-right"><?= $value['gia'] ?>Đ</span>
 			 							<b class="ten"><?= $value['tieudemonan'] ?></b>
 			 						</div>
 			 						<div class="duoi">
 			 							<?= $value['mota'] ?>
 			 						</div>
 			 					</div>
 			 				</div>
 			 			</div> <!-- het row -->
 			 		</div>  <!-- het motmon -->

 			 		<?php endforeach ?>



 			 	</div> <!-- het row -->
 			 </div>  <!-- het container -->
 			 
 		</div>  <!-- het noidungct -->
 	</div>  <!-- HET THUCDONCT -->
  	<div class="slidemonan  wow fadeInUp">
 		<div class="container">
 			<div class="row">
 				<div class="col-sm-12">
 					<h4> Our special Dishes</h4>
 				</div>
 			</div>

 			<div class="row">
 			<div class="col-sm-12">
 						<div id="slidemonanduoi" data-interval="3000" class="carousel slide" data-ride="carousel">
 							<ol class="carousel-indicators">
 								<li data-target="#slidemonanduoi" data-slide-to="0" class="active"></li>
 								<li data-target="#slidemonanduoi" data-slide-to="1"></li>
 								<li data-target="#slidemonanduoi" data-slide-to="3"></li>
 							</ol>
 							<div class="carousel-inner" role="listbox">
 								<div class="carousel-item active">
 									<div class="row">
 										<div class="sanpham">
 											<img src="images/1.jpg" alt="" class="anhspslide">
 											<div class="tensp">
 												<div class="gia float-xs-right">$100</div>
 												<div class="ten">Trio Sauce</div>
 											</div>
 											<div class="tencongthuc">
 												Mussel with tomato sauce, wine
 											</div>
 										</div> <!-- SAN PHAM -->

 										<div class="sanpham">
 											<img src="images/1.jpg" alt="" class="anhspslide">
 											<div class="tensp">
 												<div class="gia float-xs-right">$100</div>
 												<div class="ten">Trio Sauce</div>
 											</div>
 											<div class="tencongthuc">
 												Mussel with tomato sauce, wine
 											</div>
 										</div> <!-- SAN PHAM -->

 										<div class="sanpham">
 											<img src="images/1.jpg" alt="" class="anhspslide">
 											<div class="tensp">
 												<div class="gia float-xs-right">$100</div>
 												<div class="ten">Trio Sauce</div>
 											</div>
 											<div class="tencongthuc">
 												Mussel with tomato sauce, wine
 											</div>
 										</div> <!-- SAN PHAM -->

 										<div class="sanpham">
 											<img src="images/1.jpg" alt="" class="anhspslide">
 											<div class="tensp">
 												<div class="gia float-xs-right">$100</div>
 												<div class="ten">Trio Sauce</div>
 											</div>
 											<div class="tencongthuc">
 												Mussel with tomato sauce, wine
 											</div>
 										</div> <!-- SAN PHAM -->

 										<div class="sanpham">
 											<img src="images/1.jpg" alt="" class="anhspslide">
 											<div class="tensp">
 												<div class="gia float-xs-right">$100</div>
 												<div class="ten">Trio Sauce</div>
 											</div>
 											<div class="tencongthuc">
 												Mussel with tomato sauce, wine
 											</div>
 										</div> <!-- SAN PHAM -->

 										
 									</div> <!-- het row -->

 								</div>  <!-- HET CAROUSEL ITEM -->
 								 <div class="carousel-item ">
 									<div class="row">
 										<div class="sanpham">
 											<img src="images/1.jpg" alt="" class="anhspslide">
 											<div class="tensp">
 												<div class="gia float-xs-right">$100</div>
 												<div class="ten">Trio Sauce</div>
 											</div>
 											<div class="tencongthuc">
 												Mussel with tomato sauce, wine
 											</div>
 										</div> <!-- SAN PHAM -->

 										<div class="sanpham">
 											<img src="images/1.jpg" alt="" class="anhspslide">
 											<div class="tensp">
 												<div class="gia float-xs-right">$100</div>
 												<div class="ten">Trio Sauce</div>
 											</div>
 											<div class="tencongthuc">
 												Mussel with tomato sauce, wine
 											</div>
 										</div> <!-- SAN PHAM -->

 										<div class="sanpham">
 											<img src="images/1.jpg" alt="" class="anhspslide">
 											<div class="tensp">
 												<div class="gia float-xs-right">$100</div>
 												<div class="ten">Trio Sauce</div>
 											</div>
 											<div class="tencongthuc">
 												Mussel with tomato sauce, wine
 											</div>
 										</div> <!-- SAN PHAM -->

 										<div class="sanpham">
 											<img src="images/1.jpg" alt="" class="anhspslide">
 											<div class="tensp">
 												<div class="gia float-xs-right">$100</div>
 												<div class="ten">Trio Sauce</div>
 											</div>
 											<div class="tencongthuc">
 												Mussel with tomato sauce, wine
 											</div>
 										</div> <!-- SAN PHAM -->

 										<div class="sanpham">
 											<img src="images/1.jpg" alt="" class="anhspslide">
 											<div class="tensp">
 												<div class="gia float-xs-right">$100</div>
 												<div class="ten">Trio Sauce</div>
 											</div>
 											<div class="tencongthuc">
 												Mussel with tomato sauce, wine
 											</div>
 										</div> <!-- SAN PHAM -->

 										
 									</div> <!-- het row -->

 								</div>  <!-- HET CAROUSEL ITEM -->
								<div class="carousel-item ">
 									<div class="row">
 										<div class="sanpham">
 											<img src="images/1.jpg" alt="" class="anhspslide">
 											<div class="tensp">
 												<div class="gia float-xs-right">$100</div>
 												<div class="ten">Trio Sauce</div>
 											</div>
 											<div class="tencongthuc">
 												Mussel with tomato sauce, wine
 											</div>
 										</div> <!-- SAN PHAM -->

 										<div class="sanpham">
 											<img src="images/1.jpg" alt="" class="anhspslide">
 											<div class="tensp">
 												<div class="gia float-xs-right">$100</div>
 												<div class="ten">Trio Sauce</div>
 											</div>
 											<div class="tencongthuc">
 												Mussel with tomato sauce, wine
 											</div>
 										</div> <!-- SAN PHAM -->

 										<div class="sanpham">
 											<img src="images/1.jpg" alt="" class="anhspslide">
 											<div class="tensp">
 												<div class="gia float-xs-right">$100</div>
 												<div class="ten">Trio Sauce</div>
 											</div>
 											<div class="tencongthuc">
 												Mussel with tomato sauce, wine
 											</div>
 										</div> <!-- SAN PHAM -->

 										<div class="sanpham">
 											<img src="images/1.jpg" alt="" class="anhspslide">
 											<div class="tensp">
 												<div class="gia float-xs-right">$100</div>
 												<div class="ten">Trio Sauce</div>
 											</div>
 											<div class="tencongthuc">
 												Mussel with tomato sauce, wine
 											</div>
 										</div> <!-- SAN PHAM -->

 										<div class="sanpham">
 											<img src="images/1.jpg" alt="" class="anhspslide">
 											<div class="tensp">
 												<div class="gia float-xs-right">$100</div>
 												<div class="ten">Trio Sauce</div>
 											</div>
 											<div class="tencongthuc">
 												Mussel with tomato sauce, wine
 											</div>
 										</div> <!-- SAN PHAM -->

 										
 									</div> <!-- het row -->

 								</div>  <!-- HET CAROUSEL ITEM -->
 								 
 							</div>
 							<a class="left carousel-control" href="#slidemonanduoi" role="button" data-slide="prev">
 								<span class="icon-prev" aria-hidden="true"></span>
 								<span class="sr-only">Previous</span>
 							</a>
 							<a class="right carousel-control" href="#slidemonanduoi" role="button" data-slide="next">
 								<span class="icon-next" aria-hidden="true"></span>
 								<span class="sr-only">Next</span>
 							</a>
 						</div>
 				</div> <!-- het colsm12 cu monan -->
 			</div>  <!-- HET ROW -->
 		</div> <!-- HET CONTAINER -->

 	</div>  <!-- HET SLIDE MON AN -->


 	<div class="gioithieudaubep  wow fadeInUp">
 		<div class="container">
 			<div class="row">
 				<div class="col-sm-4">
 					<img src="<?php echo base_url() ?>images/master-chef.png" alt="" class="img-fluid">
 				</div>
 				<div class="col-sm-7 push-sm-1 ">
 					<div class="thongtin">
 						<h2 class="fontoswarld">Stevan Smith</h2>
 						<span class="fontdancing">The Master of Cooking</span>
 						<p>
 							Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt.
 						</p>
 					</div> <!-- het thong tin -->
 					<div class="daubepcontact">
 						<a href="" class="icondb"><i class="fa fa-facebook"></i></a>
 						<a href="" class="icondb"><i class="fa fa-vimeo"></i></a>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div><!--  HET GIOI THIEU DAU BEP	 -->

	<div class="sloganhome wow fadeInUp">
		<div class="container text-xs-center">
		 	 <div class="row">
 						 <?php foreach ($mangdl2 as $key  => $value): ?>
		 	 	<div class="col-sm-8 push-sm-2">
		 	 		<!-- <?php var_dump($key); ?> -->
		 	 		<h3 class="fontdancing"> <?php if($key==1) {echo $value['title'];} ?></h3>
					<span class="fontroboto"><?php if($key==1) {echo $value['description'];} ?></span>
		 	 	</div>
		 	 	<?php endforeach ?>
		 	 </div>
			
		</div>
	</div> <!-- het slogan home  -->

	<div class="khoidatban text-xs-center wow fadeInUp" data-wow-delay="0s">
		<form action="<?= base_url() ?>trangchu/booking" method="POST">
		<div class="container">

		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<div class="thongtindatban fontroboto">
					<h2 class="fontroboto">Make A Reservation</h2>
					<p class="tt ">Booking a table has never been so easy with free   instant online restaurant reservations, booking now!!</p>
					<p class="giodb">Monday to Friday   <span class="vang"> 9:00 am - 23:00 pm </span> Saturday to Sunday <span class="vang"> 10:00 am - 22:00 pm</span>
	Note: Arctica Restaurant is closed on holidays.</p>
					<div class="dtdb fontoswarld">0844.335.1211</div>
				</div>
				

			</div>
			<div class="col-sm-3"></div>

			<div class="col-sm-10 push-sm-1">
			
				<div class="formdatban">
					<div class="row">
						<div class="col-sm-12">
							<h2 class="text-xs-center fontroboto">Book Your Table Online</h2>

						</div>
						
						<div class="col-sm-4">						 
								<div class="form-group">								 
									<input name="tenkh" type="text" class="form-control" placeholder="Your Name * ">
								</div>	 
						</div>
						<div class="col-sm-4">						 
								<div class="form-group">								 
									<input name="email" type="email" class="form-control" placeholder="Your Email * ">
								</div>	 
						</div>
						<div class="col-sm-4">						 
								<div class="form-group">								 
									<input name="sdt" type="number" class="form-control" placeholder="Your Mobile * ">
								</div>	 
						</div>
						<div class="col-sm-4">						 
								<div class="form-group">								 
									<input name="ngaydatban" type="date" class="form-control" placeholder="Date * ">
								</div>	 
						</div>
						
						<div class="col-sm-4">						 
								<div class="form-group">								 
									<input name="giodatban" type="time" class="form-control" placeholder="Time * ">
								</div>	 
						</div>
						<div class="col-sm-4">						 
								<div class="form-group">								 
									<input name="songuoi" type="number" class="form-control" placeholder="No. of person * ">
								</div>	 
						</div>

						<div class="col-sm-12 text-xs-center">
							<input  type="submit" class="btn btn-warning datban2" value="Book table Now">
						</div>
						

					</div>
					 
				</div> <!-- het form dat ban -->
			</div>
		</div> <!-- het row -->
			
		</div><!--  het container -->
		</form>

	</div>  <!-- HET DAT BAN -->

	<div class="phanhoinguoidung wow  fadeInUp" data-wow-delay="0s" action="trangchu/hienthidulieuslide">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 push-sm-1 text-xs-center">
					<div id="slidetestimnial" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<!-- <li data-target="#slidetestimnial" data-slide-to="0" class="active"></li>
							<li data-target="#slidetestimnial" data-slide-to="1"></li> -->
							<li data-target="#slidetestimnial" data-slide-to="2" class="active"></li>
							<li data-target="#slidetestimnial" data-slide-to="3"></li>
							<li data-target="#slidetestimnial" data-slide-to="4"></li>
						</ol>
						<div class="carousel-inner" role="listbox">
							<?php $dem=1 ?>
							<?php foreach ($mangdl2 as $key  => $value): ?>
							<div class="carousel-item <?php if($dem==1) {echo "active";$dem++;} ?>">
							 	 <i class="fa fa-quote-right"></i>
							 	 <div class="quote">
							 	 	<?= $value['title'] ?>
							 	 </div>
							 	 <b class="fontdancing tennguoi"><?= $value['description'] ?> </b>

							</div> 
							<?php endforeach ?>

						</div>
						 
					</div>
				</div>
			</div>
		</div>
	</div>  <!-- HET PHAN HOI NGUOI DUNG -->

	<div class="tintuchome wow   " data-wow-delay="0s">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-xs-center wow  flipInY" data-wow-delay="0s">
					<div class="tdtintuchome">
						<span class="fontdancing">Our Blog</span>
						<h2 class="fontroboto">Lastest News Update</h2>
					</div>
				</div>

				<div class="col-md-4 col-sm-6 col-xs-12 wow  flipInY" data-wow-delay="0s">

					<div class="mottinchuan">
						<a href=""><img src="images/f1.jpg" alt=""></a>
						<a href="" class="tieudetin1 fontoswarld">The Best Tips For Tasty Food</a>
						<div class="ngaythang1">10 June 2016  by <span class="vang"> Peter Parker</span></div>
						<p class="fontroboto">Curabitur quas nets lacusets nulat iaculis loremis etis nisle varius vitae seditum fugiatum ligul aliquam qui sequi nets lacusets nulat </p>

						<div class="docthem mb-2">
							<div class="like float-xs-right fontroboto">10 like</div>
							<a href="" class="rm fontroboto">Read More</a>
						</div>
					</div>
				</div> 
				<div class="col-md-4 col-sm-6 col-xs-12 wow  flipInY" data-wow-delay="0s">
					<div class="mottinchuan">

						<a href=""><img src="images/f1-03.jpg" alt=""></a>
						<a href="" class="tieudetin1 fontoswarld">The Best Tips For Tasty Food</a>
						<div class="ngaythang1">10 June 2016  by <span class="vang"> Peter Parker</span></div>
						<p class="fontroboto">Curabitur quas nets lacusets nulat iaculis loremis etis nisle varius vitae seditum fugiatum ligul aliquam qui sequi nets lacusets nulat </p>

						<div class="docthem mb-2">
							<div class="like float-xs-right fontroboto">10 like</div>
							<a href="" class="rm fontroboto">Read More</a>
						</div> 
					</div> 

				</div> 
				<div class="col-md-4 col-sm-6 col-xs-12 wow  flipInY" data-wow-delay="0s">
					<div class="mottinchuan">

						<a href=""><img src="images/f1-02.jpg" alt=""></a>
						<a href="" class="tieudetin1 fontoswarld">The Best Tips For Tasty Food</a>
						<div class="ngaythang1">10 June 2016  by <span class="vang"> Peter Parker</span></div>
						<p class="fontroboto">Curabitur quas nets lacusets nulat iaculis loremis etis nisle varius vitae seditum fugiatum ligul aliquam qui sequi nets lacusets nulat </p>

						<div class="docthem mb-2">
							<div class="like float-xs-right fontroboto">10 like</div>
							<a href="" class="rm fontroboto">Read More</a>
						</div>
					</div>

				</div> 

			</div>
		</div>

	</div>  <!-- HET TIN TUC O TRANG HOME -->

	<div class="footertop">
		<div class="container">
			<div class="row">
				<div class="col-sm-3 cotf1 mb-2 wow fadeInUp" data-wow-delay="0s">
					<a href=""><img src="images/logofoot.png" alt="" class="logof"></a>
					<p>Marsh mallow muffin soufflé jelly-o tart cake Marshmallow macaroon jelly jubes dont tiramisu croissant cake.</p>
					<div class="motdong">
						<i class="fa fa-paper-plane-o"></i>
						<span class="textmd">Address : 44 New Design Street,<br>
						Melbourne 005</span>
					</div>
					<div class="motdong">
						<i class="fa fa-phone"></i>
						<span class="textmd">Phone : (01) 800 433 633</span>
					</div>
					<div class="motdong">
						<i class="fa fa-envelope-o"></i>
						<span class="textmd">Email : info@Example.com</span>
					</div>
					

				</div>  <!-- HET COTF1 -->
				<div class="col-sm-2 push-sm-1 cotf2 mb-2  wow fadeInUp" data-wow-delay="0.1s">
					<h2 class="tdft">Userfull Link </h2>
					<ul>
						<li><a href="">About company </a></li>
						<li><a href="">Reservation  </a></li>
						<li><a href="">Help center  </a></li>
						<li><a href="">Our Blog  </a></li>
						<li><a href="">Careers  </a></li>
						<li><a href="">Contact us  </a></li>
					</ul>
				</div>  <!-- HET COTF2 -->
				<div class="col-sm-3  cotf3 mb-2 wow  fadeInUp" data-wow-delay="0.2s">
					<h2 class="tdft">Userfull Link 2 </h2>
					<ul>
						<li><a href="">About company </a></li>
						<li><a href="">Reservation  </a></li>
						<li><a href="">Help center  </a></li>
						<li><a href="">Our Blog  </a></li>
						<li><a href="">Careers  </a></li>
						<li><a href="">Contact us  </a></li>
					</ul>
				</div>  <!-- HET COTF3 -->
				<div class="col-sm-3  cotf4 wow  fadeInUp" data-wow-delay="0.3s">
					<h2 class="tdft">Openning hours </h2>
					<div class="openning1">
						<div class="phai float-xs-right">9:00 am - 23:00 pm</div>
						<div class="trai">Mon — Fri</div>
					</div>
					 <div class="openning1">
						<div class="phai float-xs-right">10:00 am - 23:00 pm</div>
						<div class="trai">Saturday </div>
					</div>
					 <div class="openning1">
						<div class="phai float-xs-right">10:00 am - 23:00 pm</div>
						<div class="trai">Sunday   </div>
					</div>
					 
					<p>Note: Arctica Restaurant is closed on holidays.</p>
				</div>  <!-- HET COTF4 -->
				
			</div>
		</div>
	</div>  <!-- HET FOOTERTOP -->

	<div class="footerbottom text-xs-center fontroboto wow  fadeInUp" data-wow-delay="0s">
		 Copyrights © 2015  All Rights Reserved. 
	</div>

</body>
</html>