<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SCOPE</title>    
    <link href="https://fonts.googleapis.com/css?family=Crete+Round" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/masterslider.css">
    <link rel="stylesheet" type="text/css" href="../css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="../css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="../css/bxslider.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="shortcut icon" href="../images/logo.jpg">
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/masterslider.min.js"></script>
    <script type="text/javascript" src="../js/wow.min.js"></script>
    <script type="text/javascript" src="../js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="../js/functions.js"></script>
    <script type="text/javascript" src="../js//bxslider.js"></script>
</head>
<body>

	<header>
		<nav class="navbar">
			<div class="container">
				<div class="row">
					<div class="navbar-header">
						<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<i class="icon-bar"></i>
							<i class="icon-bar"></i>
							<i class="icon-bar"></i>
						</button>
						<a href="#" class="navbar-brand"><img src="../images/logo.png" width="120"></a>
					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="/">Home</a></li>
							<li><a href="/publish" class="highlight">Publish Projects</a></li>	
							<li><a href="/winwork" class="highlight">Win Work</a></li>
							<li><a href="index.html">How It Works</a></li>
							<li><a href="index.html">Pricing</a></li>
							<li><a href="index.html">About Scope</a></li>
							<li><a href="index.html">FAQ</a></li>					
							<li><a href="index.html">contact</a></li>
							<li><a data-toggle="modal" href="#myModal" class="highlight">Login/register</a></li>
						</ul>
					</div>
				</div>
			</div>
		</nav>
	</header>

	<div id="myModal" class="modal fade" role="dialog" tabindex='-1'>
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Login / Register</h4>
				</div>
				<div class="modal-body">
					<ul class="nav nav-tabs">
						<li class="active"><a data-toggle="tab" href="#login">Login</a></li>
						<li><a data-toggle="tab" href="#signup">Register</a></li>
					</ul>
					<div class="tab-content">
						<div id="login" class="tab-pane fade in active">
							<form method="post" class="form-horizontal" autocomplete="off">
								<div class="form-group">
									<label class="col-sm-3 control-label">Email</label>
									<div class="col-sm-8 ">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-user"></i></span>
											<input type="email" class="form-control" placeholder="Email address" name="" autocomplete="off" required="">
										</div>
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-3 control-label">Password</label>
									<div class="col-sm-8 ">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-lock"></i></span>
											<input type="password" class="form-control" placeholder="Password" name="" required="">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label"></label>
									<div class="col-sm-8 ">
										<input type="submit" class="btn btn-primary col-sm-12" value="LOGIN">
									</div>
								</div>

								<div class="form-group">   							
									<div class="col-sm-8 col-sm-offset-3 text-right">   
										<a href="#" class="forgot"><i class="fa fa-lock"></i> Forgot password</a>
									</div>
								</div>
							</form>
						</div>
						<div id="signup" class="tab-pane fade">
							<form method="post" class="form-horizontal" autocomplete="off">
								<div class="form-group has-feedback">
									<label class="col-sm-3 control-label">Full Name</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="name" required="" data-msg-required="Please enter your full  name">
									</div>
								</div>
								<div class="form-group has-feedback">
									<label class="col-sm-3 control-label">Company</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="company" required="" data-msg-required="Please enter your company name">
									</div>
								</div>
								<div class="form-group has-feedback">
									<label class="col-sm-3 control-label">Email</label>
									<div class="col-sm-8">
										<input type="email" class="form-control" name="email" required="" data-msg-required="Please enter your email">
									</div>
								</div>
								<div class="form-group has-feedback">
									<label class="col-sm-3 control-label">Phone</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="phone" required="" data-msg-required="Please enter your phone number">
									</div>
								</div>
								<div class="form-group has-feedback">
									<label class="col-sm-3 control-label">Password</label>
									<div class="col-sm-8">
										<input type="password" class="form-control" name="password" required="" data-msg-required="Please enter your password">
									</div>
								</div>
								<div class="form-group has-feedback">
									<label class="col-sm-3 control-label">Confirm Password</label>
									<div class="col-sm-8">
										<input type="password" class="form-control" name="cpassword" required="" data-msg-required="Please enter your password again">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label"></label>
									<div class="col-sm-8">
										<input type="submit" class="btn btn-primary col-sm-12" value="REGISTER">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="modal-footer">					
				</div>
			</div>
		</div>
	</div>  

	<div class="container-fluid below-header project-img-collection text-center">
		<h1>Canada Water Masterplan</h1>
		<div class="project-image popup-gallery">
			<a href="../images/demo1.jpg"><img src="../images/demo1.jpg"/></a>
		</div>
		<div class="project-image popup-gallery">
			<a href="../images/demo2.jpg"><img src="../images/demo2.jpg"/></a>
		</div>
		<div class="project-image popup-gallery">
			<a href="../images/demo3.jpg"><img src="../images/demo3.jpg"/></a>
		</div>
		<div class="project-image popup-gallery">
			<a href="../images/demo4.jpg"../images/demo1.jpg><img src="../images/demo4.jpg"/></a>
		</div>
	</div>	

<div class="container tender-details">
	<div class="row">
		<div class="col-sm-8">
			<div class="tender-container">
				<div class="row">
					<div class="col-sm-12 active-tenders">
						<h3>Active Tenders</h3>
					</div>
					<div class="col-sm-3">
						<div class="tender-box">
							<a href="/winwork/pds/bid"></a>
							<a href="#"></a>
							<a href="#"></a>
							<a href="#"></a>
							<div class="tender-btn">
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="tender-box">
							<a href="#"></a>
							<a href="#"></a>
							<a href="#"></a>
							<a href="#"></a>
							<div class="tender-btn">
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="tender-box">
							<a href="#"></a>
							<a href="#"></a>
							<a href="#"></a>
							<a href="#"></a>
							<div class="tender-btn">
							</div>
						</div>
					</div>
				</div>				
			</div>
			<div class="row">
				<div class="col-sm-12 project-anchor">
					<a href="#">Project Details</a>
					<a href="#">Tender Queries</a>
					<a href="#cprofile">Employer Details</a>
				</div>
			</div>
			<div class="tender-container">				
				<div class="row">
					<div class="col-sm-12 active-tenders">
						<h3>Project Vision and Brief</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</div>				
			</div>
			<div class="tender-container">
				<div class="row">
					<div class="col-sm-12 active-tenders" id="cprofile">
						<h3>Project Information</h3>
					</div>			
					<div class="col-sm-12">
						<table class="table table-striped table-hover">
							<tr>
								<td>Project Title</td>
								<td>Canada Water Masterplan</td>
							</tr>
							<tr>
								<td>Project ID</td>
								<td>1234567890</td>
							</tr>
							<tr>
								<td>Location</td>
								<td>Canada Water, London, SE16, United Kingdom</td>
							</tr>
							<tr>
								<td colspan="2">
									<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9935.319359803168!2d-0.04969!3d51.49799!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3ae4946b67b18de7!2sCanada+Water!5e0!3m2!1sen!2snp!4v1525743556788" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
								</td>
							</tr>
							<tr>
								<td>Transport Links</td>
								<td>
									<table width="100%">
										<tr>
											<td>
												<p><b>Main Roads</b></p>
											</td>
											<td>
												<p>Surrey Quays Road</p>
											</td>
										</tr>
										<tr>
											<td>
												<p><b>Tube Stations</b></p>
											</td>
											<td>
												<p>Canada Water 0.5km</p>
												<p>Surrey Quays 1.5km</p>
											</td>
										</tr>
										<tr>
											<td>
												<p><b>Bus Lines</b> </p>
											</td>
											<td>
												<p>701, 702, 851, 930</p>
											</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td>Area Specific Information</td>
								<td>
									<table width="100%">
										<tr>
											<td>Adjacent Uses</td>
											<td>Residential (High-End), Regeneration Space, Retail</td>
										</tr>
										<tr>
											<td>History</td>
											<td>Former Docks and Warehouses</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td>Constraints</td>
								<td>                               
									<p>Adjacent Tube Tunnel</p>
									<p>Existing Buildings</p>
									<p>Weak Ground Conditions</p>
								</td>
							</tr>
							<tr>
								<td>Type of Development</td>
								<td>New Built</td>
							</tr>
							<tr>
								<td>Construction Value</td>
								<td>£300,000,000</td>
							</tr>
							<tr>
								<td>Types of Use</td>
								<td>
									<table width="100%">
										<tr>
											<td>Residential</td>
											<td>30,000m2</td>
											<td>200 units</td>
											<td>High-End</td>
										</tr>
										<tr>
											<td>Residential</td>
											<td>10,000m2</td>
											<td>70 units</td>
											<td>Affordable</td>
										</tr>
										<tr>
											<td>Office</td>
											<td>15,000m2</td>
											<td></td>
											<td></td>
										</tr>
										<tr>
											<td>Retail</td>
											<td>15,000m2</td>
											<td>5 units</td>
											<td></td>
										</tr>
										<tr>
											<td>Total</td>
											<td>57,000m2</td>
											<td></td>
											<td></td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td>Milestones</td>
								<td>
									<table width="100%">
										<tr>
											<td>RIBA Stage 1 Completion</td>
											<td>01/03/2019</td>
										</tr>
										<tr>
											<td>RIBA Stage 2 Completion</td>
											<td>01/07/2019</td>
										</tr>
										<tr>
											<td>RIBA Stage 3 Completion</td>
											<td>01/10/2019</td>
										</tr>
										<tr>
											<td>RIBA Stage 4 Completion</td>
											<td>01/12/2019</td>
										</tr>
									</table>
								</td>								
							</tr>
							<tr>
								<td>Meetings</td>
								<td>
									<table width="100%">
										<tr>
											<td>Design Team Meeting</td>
											<td>Tuesday, 14:00 – 15:30, Weekly</td>
										</tr>
										<tr>
											<td>Project Progress Meeting</td>
											<td>Tuesday, 15:30 – 16:30, Fortnightly</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td>Procurement Route</td>
								<td>Design & Build</td>
							</tr>
							<tr>
								<td>Project Team</td>
								<td>
									<table width="100%">
										<tr>
											<td>Architect</td>
											<td>Allies and Morrison</td>
										</tr>
										<tr>
											<td>Structural Engineer</td>
											<td>AKT II</td>
										</tr>
										<tr>
											<td>Services Engineer</td>
											<td>Sweco</td>
										</tr>
										<tr>
											<td>Fire Engineer </td>
											<td><a href="#">Active Tender</a></td>
										</tr>
										<tr>
											<td>Acoustic Engineer</td>
											<td><a href="#">Active Tender</a></td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td>Supporting Documents</td>
								<td>
									<p><a href="#">Site Plan <i class="fa fa-download"></i></a></p>
									<p><a href="#">Programme <i class="fa fa-download"></i></a></p>        
									<p><a href="#">H&S Policy <i class="fa fa-download"></i></a></p>
								</td>
							</tr>
						</table>						
					</div>
				</div>
			</div>
			<div class="tender-container">
				<div class="row">
					<div class="col-sm-9 active-tenders">
						<h3>Tender Queries</h3>
						<div class="row">	
							<div class="col-sm-12">				
								<table class="table  table-hover">
									<tr>
										<td id="black">#</td>
										<td>Query</td>
										<td>Responses</td>

									</tr>
									<tr>
										<td id="black">1</td>
										<td>TextTextTextTextTextTextTextTextText</td>
										<td>TextTextTextTextTextTextTextTextTextTextTextText</td>
									</tr>
									<tr>
										<td id="black">2</td>
										<td>TextTextTextTextTextTextTextTextText</td>
										<td>TextTextTextTextTextTextTextTextTextTextTextText</td>
									</tr>
									<tr>
										<td id="black">3</td>
										<td>TextTextTextTextTextTextTextTextText</td>
										<td>TextTextTextTextTextTextTextTextTextTextTextText</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tender-container">
				<div class="row">
					<div class="col-sm-12 active-tenders">
						<h3>Employer Details</h3>
						<div class="row">	
							<div class="col-sm-9">				
								<table class="table  table-hover">
									<tr>
										<td>Employer</td>
										<td>British Land</td>
									</tr>
									<tr>
										<td>Registered Office Address</td>
										<td>100 Sample Road, London, W1 23Y, United Kingdom</td>
									</tr>
									<tr>
										<td>Industry</td>
										<td>Developer</td>
									</tr>
									<tr>
										<td>Year Established</td>
										<td>1955</td>
									</tr>
									<tr>
										<td>Number of Employees</td>
										<td>10-50</td>
									</tr>
								</table>
							</div>
							<div class="col-sm-3 company-quick-details">
								<p><img src="../images/logo-british.jpg"></p>
								<p>Active Projects <span class="badge">4</span></p>
								<p>Active Tenders <span class="badge">9</span></p>
								<p>Status 
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-4">				
			<div class="tender-container">
				<div class="active-tenders">
					<h3>Similar Projects</h3>
				</div>
				<div class="media">
					<a href="#">
						<div class="media-left">
							<img src="../images/construction.jpg" width="80">
						</div>
						<div class="media-body">
							<h3>Canada Water Masterplan</h3>
							<p>Fire Engineer and 9 others</p>
						</div>
					</a>
				</div>
				<div class="media">
					<a href="#">
						<div class="media-left">
							<img src="../images/construction.jpg" width="80">
						</div>
						<div class="media-body">
							<h3>Canada Water Masterplan</h3>
							<p>Fire Engineer and 9 others</p>
						</div>
					</a>
				</div>
				<div class="media">
					<a href="#">
						<div class="media-left">
							<img src="../images/construction.jpg" width="80">
						</div>
						<div class="media-body">
							<h3>Canada Water Masterplan</h3>
							<p>Fire Engineer and 9 others</p>
						</div>
					</a>
				</div>
				<div class="media">
					<a href="#">
						<div class="media-left">
							<img src="../images/construction.jpg" width="80">
						</div>
						<div class="media-body">
							<h3>Canada Water Masterplan</h3>
							<p>Fire Engineer and 9 others</p>
						</div>
					</a>
				</div>
				<div class="media">
					<a href="#">
						<div class="media-left">
							<img src="../images/construction.jpg" width="80">
						</div>
						<div class="media-body">
							<h3>Canada Water Masterplan</h3>
							<p>Fire Engineer and 9 others</p>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="owl-container">
		<div class="active-tenders">
			<h3>Other Projects From This Employer</h3>
		</div>
		<span class="prev"><i class="fa fa-angle-left"></i></span>
		<span class="next"><i class="fa fa-angle-right"></i></span>
		<div id="owl-carousel">
			<div class="owl-div">
				<a href="#">
					<div class="thumb-img thumbnail">
						<img src="../images/construction.jpg">
					</div>
					<div class="thumb-title">
						<h3>Canada Water Masterplan</h3>
						<p class="text-muted">Fire Engineer and 9 others</p>
					</div>
				</a>
			</div>
			<div class="owl-div">
				<a href="#">
					<div class="thumb-img thumbnail">
						<img src="../images/construction.jpg">
					</div>
					<div class="thumb-title">
						<h3>Canada Water Masterplan</h3>
						<p class="text-muted">Fire Engineer and 9 others</p>
					</div>
				</a>
			</div>
			<div class="owl-div">
				<a href="#">
					<div class="thumb-img thumbnail">
						<img src="../images/construction.jpg">
					</div>
					<div class="thumb-title">
						<h3>Canada Water Masterplan</h3>
						<p class="text-muted">Fire Engineer and 9 others</p>
					</div>
				</a>
			</div>
			<div class="owl-div">
				<a href="#">
					<div class="thumb-img thumbnail">
						<img src="../images/construction.jpg">
					</div>
					<div class="thumb-title">
						<h3>Canada Water Masterplan</h3>
						<p class="text-muted">Fire Engineer and 9 others</p>
					</div>
				</a>
			</div>
			<div class="owl-div">
				<a href="#">
					<div class="thumb-img thumbnail">
						<img src="../images/construction.jpg">
					</div>
					<div class="thumb-title">
						<h3>Canada Water Masterplan</h3>
						<p class="text-muted">Fire Engineer and 9 others</p>
					</div>
				</a>
			</div>
			<div class="owl-div">
				<a href="#">
					<div class="thumb-img thumbnail">
						<img src="../images/construction.jpg">
					</div>
					<div class="thumb-title">
						<h3>Canada Water Masterplan</h3>
						<p class="text-muted">Fire Engineer and 9 others</p>
					</div>
				</a>
			</div>
			<div class="owl-div">
				<a href="#">
					<div class="thumb-img thumbnail">
						<img src="../images/construction.jpg">
					</div>
					<div class="thumb-title">
						<h3>Canada Water Masterplan</h3>
						<p class="text-muted">Fire Engineer and 9 others</p>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>


<footer class="text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="200ms">
	<div class="col-sm-12">
		<p><img src="../images/logo.png"></p>
		<p>
			<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-twitter"></i></a>
			<a href="#"><i class="fa fa-linkedin"></i></a>
			<a href="#"><i class="fa fa-google-plus"></i></a>
		</p>
	</div>
</footer>
<div class="container-fluid text-center copyright">
	SCOPE Limited, registration number 12345678, 32 Hainton Close, London, E1 2QZ, United Kingdom
</div>

<!-- end -->

<script>
	$('.popup-gallery').magnificPopup({
		delegate: 'a',
		type: 'image',
		tLoading: 'Loading image #%curr%../images.',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',			
		}
	});
</script>
</body>
</html>

