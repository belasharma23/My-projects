<!DOCTYPE html>

<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
	<meta charset="utf-8">
	<title>My Golf Club</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="stylesheet" href="css/bootstrap.min.css" media="all" />
	<link rel="stylesheet" href="css/font-awesome.css" media="all" />
	<link rel="stylesheet" href="css/themify-icons.css" media="all" />
	<link rel="stylesheet" href="css/slider-pro.min.css" media="all" />
	<link rel="stylesheet" href="css/superfish.css" media="all" /> 
	<link rel="stylesheet" href="css/datepicker.css" media="all" />
	<link rel="stylesheet" href="css/timepicker.css" media="all" />
	<link rel="stylesheet" href="css/owl.carousel.min.css" media="all" />
	<link rel="stylesheet" href="css/jquery.navgoco.css" media="all" />
	<link rel="stylesheet" href="css/animate.css" media="all" />

	<link rel="stylesheet" href="style.css" media="all" >

	<link rel="shortcut icon" href="img/icons/favicon.ico">
</head>
<body> 
	<div class="main-container">
		<?php include('header.php');?>
	<div class="main-content">
		<section class="kopa-area kopa-area-10 kopa-area-no-space">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<img src="images/p10/1.jpg" alt="">
					<div class="bg-green">
						<div class="container">
							<div class="kopa-breadcrumb">
								<h3>Dashboard</h3>
								<div class="breadcrumb-content">
									<span itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="">
										<a itemprop="url" href="#">
											<span itemprop="title">Home</span>
										</a>
									</span>
									<span itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="">
										<a itemprop="url" href="#">
											<span itemprop="title">Membership</span>
										</a>
									</span>
									<span itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="">
										<a itemprop="url" class="current-page">
											<span itemprop="title">Membership Enquiry Form</span>
										</a>
									</span>
								</div>
							</div>
							<!-- kopa-breadcrumb -->

						</div>
						<!-- container -->
					</div>
				</div>
				<!-- col-md-12 -->
			</div>
			<!-- row --> 
		</section>
		<!-- kopa-area-10 -->

		<section class="kopa-area sub-page kopa-area-11">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-5 col-xs-12 sidebar">
						<div class="widget millside-module-quick-link">
							<h3 class="widget-title style-04 ">Quick Links</h3>
							<div class="widget-content">
								<ul>
									<li>
										<a href="#">
											<span class="ti-star"></span>
											<span>Score</span>
											<span class="ct-icon-3 ti-angle-right"></span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="ti-star"></span>
											<span>Add my Score</span>
											<span class="ct-icon-3 ti-angle-right"></span>
										</a>
									</li>		
								</ul>
							</div>
						</div>
						<!-- widget --> 
					</div>
					<!-- col-md-4 -->
					<div class="main-col col-md-8 col-sm-7 col-xs-12">
						<div class="widget millside-module-form-1">
							<h3 class="widget-title style-04 ">
								Membership Enquiry Form
							</h3>
							<div class="widget-content">
								<p>
									We currently have membership opportunities available and are welcoming applications.<br/>
									If you would like to be considered for membership, just fill in the form below and we will contact you.
								</p>
								<form class="form-horizontal kopa-form kopa-form-02" action="#" method="POST" role="form">
									<div class="form-group">
										
									</div>
									<div class="form-group">
										<label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">Full name <span>*</span></label>
										<div class="col-md-6 col-sm-8 col-xs-12">
											<input type="text" class="form-control" id="name" name="name" placeholder="">
										</div>
									</div>
									
									<div class="form-group">
										<label class="control-label col-md-4 col-sm-4 col-xs-12" for="mobiphone">Mobile Number</label>
										<div class="col-md-6 col-sm-8 col-xs-12">
											<input type="text" class="form-control" id="mobiphone" name="mobiphone" placeholder="">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4 col-sm-4 col-xs-12" for="email">Email Address <span>*</span></label>
										<div class="col-md-6 col-sm-8 col-xs-12">
											<input type="text" class="form-control" id="email" name="email" placeholder="">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4 col-sm-4 col-xs-12" for="password">Password <span>*</span></label>
										<div class="col-md-6 col-sm-8 col-xs-12">
											<input type="text" class="form-control" id="password" name="password" placeholder="" required="">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4 col-sm-4 col-xs-12" for="password">Confirm Password <span>*</span></label>
										<div class="col-md-6 col-sm-8 col-xs-12">
											<input type="text" class="form-control" id="confirm-password" name="confirm-password" placeholder="" required="">
										</div>
									</div>
									
									<div class="form-group">
										<label class="control-label col-md-4 col-sm-4 col-xs-12" for="postcode">Postcode</label>
										<div class="col-md-6 col-sm-8 col-xs-12">
											<input type="text" class="form-control" id="postcode" name="postcode" placeholder="">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4 col-sm-4 col-xs-12" for="birth">Date of Birth</label>
										<div class="col-md-6 col-sm-8 col-xs-12">
											<input type="date" class="form-control date-picker" id="birth" name="birth" placeholder="">
										</div>
									</div>
									
									<div class="form-group">
										<label class="control-label col-md-4 col-sm-4 col-xs-5" for="checkbox">Keep in touch</label>
										<div class="col-md-2 col-sm-2 col-xs-2"> 
											<input type="checkbox" id="checkbox" checked>
										</div>
										<div class="col-md-4 col-sm-6 col-xs-12 text-right">
											<button type="submit" class="btn ct-btn-1">Submit</button>
										</div>
									</div>										

								</form>
							</div>
						</div>
						<!-- widget --> 
					</div>
					<!-- col-md-8 -->
				</div>
				<!-- row --> 
			</div>
			<!-- container -->
		</section>
		<!-- kopa-area-11 -->

		<section class="kopa-area kopa-area-12 kopa-area-no-space">
			<div class="container">
				<div class="widget millside-module-ads-5">
								<div class="widget-content">
									<img src="images/p11/1.jpg" alt="">
									<div class="bg-green-2">
										<div class="row">
											<div class="col-md-2 col-sm-3 col-xs-12 ">
												<div class="part-1">
													<p>Cloudy</p>
													<p>15<span>o</span><span>F</span></p>
												</div>
											</div>
											<!-- col-md-2 -->
											<div class="col-md-10 col-sm-9 col-xs-12">
												<div class=" part-2 ul-mh">
													<div class="icon-weather">
														<img src="images/p36/1.png" alt="">
													</div>
													<div>
														<p>Take advantage of tee times at a special price!</p>
														<p>Use the buttons on the right to check out our tee time specials</p>
													</div>
												</div>
											</div>
											<!-- col-md-10 -->
										</div>
										<!-- row --> 
									</div>
								</div>
							</div>
				<!-- widget --> 
			</div>
			<!-- container -->
		</section>
		<!-- kopa-area-12 -->

	</div>
	<!-- main content -->


	<?php include('footer.php');?>

</div>

<script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="js/superfish.min.js"></script>
<script type="text/javascript" src="js/jquery.sliderPro.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.matchHeight.js"></script>
<script src="http://maps.google.com/maps/api/js"></script>
<script src="js/gmaps.js"></script>
<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="js/bootstrap-timepicker.js"></script>	
<script type="text/javascript" src="js/masonry.pkgd.min.js"></script>	
<script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>	
<script type="text/javascript" src="js/owl.carousel.min.js"></script>	
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script type="text/javascript" src="js/jquery.navgoco.min.js"></script>

<script type="text/javascript" src="js/custom.js"></script>
</body>

<!-- Mirrored from dinhvankiem.com/demo/millside/html/membership-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Jan 2021 09:10:33 GMT -->
</html>