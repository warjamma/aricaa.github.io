<!DOCTYPE html>
<html lang="en"><head>
	<title> Artica-menu  </title>
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
  	<div class="logovamenu">
	    <nav class="navbar navbar-light  fontroboto">
	    	<div class="container">    	
			      <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#mtren">
			       
			      </button>
			      <div class="collapse navbar-toggleable-xs" id="mtren">
			        <a class="navbar-brand text-xs-center text-sm-left" href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>images/logo.png" alt=""></a>

			        <ul class="nav navbar-nav float-sm-right">
			          <li class="nav-item ">
			            <a class="nav-link" href="<?php echo base_url() ?>">Home  </a>
			          </li>
			          <li class="nav-item">
			            <a class="nav-link" href="<?php echo base_url() ?>trangchu/loadaboutview">About</a>
			          </li>
			          <li class="nav-item">
			            <a class="nav-link" href="<?php echo base_url() ?>tintuc/">News</a>
			          </li>
			          <li class="nav-item">
			            <a class="nav-link active " href="<?php echo base_url() ?>trangchu/loadthucdon">Menu</a>
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


	<div class="khoimenu wow fadeInUp bannerkieu2dong">  
 		<div class="tieudekhoimenu text-xs-center">
 			<div class="container">
 				<div class="row">
 					<div class="col-sm-8 push-sm-2">
 						<span class="tieudephu fontdancing">Taste The Best Dishes.</span>
 						<h3 class="tieudechinh fontroboto">Our Menu List</h3>
 					</div>
 				</div>
 			</div>
 			
 		</div>   <!-- HET TIEUDEKHOIMENU -->
 	</div>  <!-- HET KHOI MENU -->

 	<div class="thucdonct wow fadeInUp  tthucdon">
 		 <div class="container">
 		 	<div class="row">
 		 		<div class="col-sm-12 text-xs-center">
 		 			<div class="khoi2dong"> 
 		 				<p><img src="images/service1.jpg" alt="">						</p>
 						<span class="fontdancing">Great New Dishes </span>
 						<h2 class="fontoswarld">Discover Our Restaurant</h2>
 						 
  					</div>
 		 		</div>
 		 	</div>
 		 </div>
 		<div class="noidungct">
 			 <div class="container">
 			 	<div class="row nhieumon">
 			 		<?php foreach ($mangmonan as $value): ?>
 			 			
 			 		<?php 
 			 		if($value['tenbuoian']=='Sáng'){echo'  
 			 		<div class="col-xs-12 col-sm-6 col-md-4   motmon">
 			 			<div class="row">

 			 				<div class="col-xs-3 col-sm-4">
 			 					<div class="anhmon">
 			 						';
 			 						if($value['new']) echo '<div class="tagnew"> NEW</div><' ;
 			 						echo '<img src=" '; echo $value['anhmon']; echo'" alt="" class="img-fluid">
 			 						';
 			 						echo '
 			 					</div>
 			 				</div>
 			 				<div class="col-xs-9 col-sm-8">
 			 					<div class="tenmon">
 			 						<div class="tren">
 			 						';
 			 						echo'	<span class="float-xs-right">'; echo $value['gia']; echo'Đ </span>
 			 						';
 			 						echo'	<b class="ten">'; echo $value['tieudemonan']; echo '</b>
 			 						</div>
 			 						<div class="duoi">
 			 						';
 			 							echo $value['mota'] ;
 			 							echo '
 			 						</div>
 			 					</div>
 			 				</div>
 			 			</div> <!-- het row -->
 			 		</div>  <!-- het motmon --> 
 			 		';}
 			 		 ?>
 			 		


 			 		<?php endforeach ?>

 			 	</div> <!-- het row -->
 			 </div>  <!-- het container -->
 			 
 		</div>  <!-- het noidungct -->
 	</div>  <!-- HET THUCDONCT -->
   
	<div class="khoimenu wow fadeInUp bannerkieu2dong">  
 		<div class="tieudekhoimenu text-xs-center">
 			<div class="container">
 				<div class="row">
 					<div class="col-sm-8 push-sm-2">
 					 	<div><img src="images/3contom.png" alt=""></div>

 						<span class="tieudephu fontdancing">With Meat, Fish or Vegetables</span>
 						<h3 class="tieudechinh fontroboto">Special Lunch Menu Items</h3>
 					</div>
 				</div>
 			</div>
 			
 		</div>   <!-- HET TIEUDEKHOIMENU -->
 	</div>  <!-- HET KHOI MENU -->

 	<div class="thucdonct wow fadeInUp  tthucdon">
 		 
 		<div class="noidungct  mt-3">
 			 <div class="container">
 			 	<div class="row nhieumon">
 			 		<?php foreach ($mangmonan as $value): ?>
 			 			
 			 		<?php 
 			 		if($value['tenbuoian']=='Trưa'){echo'  
 			 		<div class="col-xs-12 col-sm-6 col-md-4   motmon">
 			 			<div class="row">

 			 				<div class="col-xs-3 col-sm-4">
 			 					<div class="anhmon">
 			 						';
 			 						if($value['new']) echo '<div class="tagnew"> NEW</div><' ;
 			 						echo '<img src=" '; echo $value['anhmon']; echo'" alt="" class="img-fluid">
 			 						';
 			 						echo '
 			 					</div>
 			 				</div>
 			 				<div class="col-xs-9 col-sm-8">
 			 					<div class="tenmon">
 			 						<div class="tren">
 			 						';
 			 						echo'	<span class="float-xs-right">'; echo $value['gia']; echo'Đ </span>
 			 						';
 			 						echo'	<b class="ten">'; echo $value['tieudemonan']; echo '</b>
 			 						</div>
 			 						<div class="duoi">
 			 						';
 			 							echo $value['mota'] ;
 			 							echo '
 			 						</div>
 			 					</div>
 			 				</div>
 			 			</div> <!-- het row -->
 			 		</div>  <!-- het motmon --> 
 			 		';}
 			 		 ?>
 			 		


 			 		<?php endforeach ?>
 			 	


 			 	</div> <!-- het row -->
 			 </div>  <!-- het container -->
 			 
 		</div>  <!-- het noidungct -->
 	</div>  <!-- HET THUCDONCT -->
   
	<div class="khoimenu wow fadeInUp bannerkieu2dong">  
 		<div class="tieudekhoimenu text-xs-center">
 			<div class="container">
 				<div class="row">
 					<div class="col-sm-8 push-sm-2">
 						<div><img src="images/nuocchanh.png" alt=""></div>
 						<span class="tieudephu fontdancing">Our Fresh And Healthy </span>
 						<h3 class="tieudechinh fontroboto">Special Dinner Menu Items</h3>
 					</div>
 				</div>
 			</div>
 			
 		</div>   <!-- HET TIEUDEKHOIMENU -->
 	</div>  <!-- HET KHOI MENU -->

 	<div class="thucdonct wow fadeInUp  tthucdon">
 		 
 		<div class="noidungct mt-3">
 			 <div class="container">
 			 	<div class="row nhieumon">
 			 		
 			 		<?php foreach ($mangmonan as $value): ?>
 			 			
 			 		<?php 
 			 		if($value['tenbuoian']=='Tối'){echo'  
 			 		<div class="col-xs-12 col-sm-6 col-md-4   motmon">
 			 			<div class="row">

 			 				<div class="col-xs-3 col-sm-4">
 			 					<div class="anhmon">
 			 						';
 			 						if($value['new']) echo '<div class="tagnew"> NEW</div><' ;
 			 						echo '<img src=" '; echo $value['anhmon']; echo'" alt="" class="img-fluid">
 			 						';
 			 						echo '
 			 					</div>
 			 				</div>
 			 				<div class="col-xs-9 col-sm-8">
 			 					<div class="tenmon">
 			 						<div class="tren">
 			 						';
 			 						echo'	<span class="float-xs-right">'; echo $value['gia']; echo'Đ </span>
 			 						';
 			 						echo'	<b class="ten">'; echo $value['tieudemonan']; echo '</b>
 			 						</div>
 			 						<div class="duoi">
 			 						';
 			 							echo $value['mota'] ;
 			 							echo '
 			 						</div>
 			 					</div>
 			 				</div>
 			 			</div> <!-- het row -->
 			 		</div>  <!-- het motmon --> 
 			 		';}
 			 		 ?>
 			 		


 			 		<?php endforeach ?>
 			 	
 			 	
 			 	</div> <!-- het row -->
 			 </div>  <!-- het container -->
 			 
 		</div>  <!-- het noidungct -->
 	</div>  <!-- HET THUCDONCT -->
   
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