<!DOCTYPE html>
<html lang="en"><head>
	<title> Artica-booking  </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700&amp;subset=vietnamese" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700" rel="stylesheet">


	

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
			            <a class="nav-link" href="<?php echo base_url() ?>trangchu/loadthucdon">Menu</a>
			          </li>
			          <li class="nav-item active">
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
 

	<div class="khoidatban text-xs-center wow fadeInUp" data-wow-delay="0s">
	<!-- <form action="<?= base_url() ?>trangchu/booking" method="POST"> -->
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
					<div class="row bbbbb">
						<div class="col-sm-12">
							<h2 class="text-xs-center fontroboto">Book Your Table Online</h2>

						</div>
						
						<div class="col-sm-4">
								<div class="form-group">
									<input name="tenkh" id="tenkh" type="text" class="form-control" placeholder="Your Name * ">
								</div>	 
						</div>
						<div class="col-sm-4">						 
								<div class="form-group">								 
									<input name="email" id="email" type="email" class="form-control" placeholder="Your Email * ">
								</div>	 
						</div>
						<div class="col-sm-4">						 
								<div class="form-group">								 
									<input name="sdt" id="sdt" type="number" class="form-control" placeholder="Your Mobile * ">
								</div>	 
						</div>
						<div class="col-sm-4">						 
								<div class="form-group">								 
									<input name="ngaydatban" id="ngaydatban" type="date" class="form-control" placeholder="Date * ">
								</div>	 
						</div>
						
						<div class="col-sm-4">
								<div class="form-group">
									<input name="giodatban" id="giodatban" type="time" class="form-control" placeholder="Time * ">
								</div>	 
						</div>
						<div class="col-sm-4">
								<div class="form-group">
									<input name="songuoi" id="songuoi" type="number" class="form-control" placeholder="No. of person * ">
								</div>	 
						</div>

						<div class="col-sm-12 text-xs-center">
							<!-- <input  type="submit" class="btn btn-warning datban2" value="Book table Now"> -->
							<input  type="button" id="nutthemdanhmuc" class=" nutthemdanhmuc btn btn-warning datban2" value="Book table Now">
							<!-- <button type="button" id="nutthemdanhmuc" class="nutthem btn btn-primary push-sm-3">
                                                    <i class="fa fa-check-square-o"></i> Book table Now
                                                </button> -->
						</div>
						

					</div>
					 
				</div> <!-- het form dat ban -->
			</div>
		</div> <!-- het row -->
			
		</div><!--  het container -->
	<!-- </form>
 -->
	</div>  <!-- HET DAT BAN -->
	<div class="footertop">
		<div class="container">
			<div class="row">
				<div class="col-sm-3 cotf1 mb-2 wow fadeInUp" data-wow-delay="0s">
					<a href=""><img src="<?php echo base_url() ?>images/logofoot.png" alt="" class="logof"></a>
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

	<script type="text/javascript" src="<?php echo base_url() ?>vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="<?php echo base_url() ?>vendor/isotope.pkgd.min.js"></script>
 	<script type="text/javascript" src="<?php echo base_url() ?>vendor/imagesloaded.pkgd.min.js"></script>
 	<script type="text/javascript" src="<?php echo base_url() ?>1.js"></script>
 	<script>
 		$(function () {
 			// body...
 			duongdan='<?php echo base_url() ?>trangchu/addbookingajax';
 			$('#nutthemdanhmuc').click(function(event) {
 				/* Act on the event */
 				// console.log(tenkh);
 				// console.log('hêlloo');
 				// ten=$('#tenkh').val();
 				// console.log(ten);
 				// ha=duongdan;
 				// console.log(ha);
 				$.ajax({
 					url: duongdan,
 					type: 'POST',
 					dataType: 'json',
 					data: {
 						tenkh: $('#tenkh').val(),
 						sdt: $('#sdt').val(),
 						email: $('#email').val(),
 						ngaydatban: $('#ngaydatban').val(),
 						giodatban: $('#giodatban').val(),
 						songuoi: $('#songuoi').val()

 					},
 				})
 				.done(function() {
 					console.log("success");
 				})
 				.fail(function() {
 					console.log("error");
 				})
 				.always(function() {
 					console.log("complete");
 				});
 			});

 		})
 	</script>
</body>
</html>