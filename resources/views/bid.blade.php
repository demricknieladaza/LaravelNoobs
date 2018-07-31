<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SCOPE</title>	
	<link href="https://fonts.googleapis.com/css?family=Crete+Round" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	{{-- <link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.0/css/bootstrap-combined.min.css"> --}}
	<link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/bootstrap.datepicker/0.1/css/datepicker.css">
	<link rel="stylesheet" type="text/css" href="../../css/animate.min.css">
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
	<link rel="shortcut icon" href="../../logo.jpg">
	<script type="text/javascript" src="../../js/jquery.min.js"></script>
	<script type="text/javascript" src="../../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../../js/wow.min.js"></script>
	<script type="text/javascript" src="http://cdn.jsdelivr.net/bootstrap.datepicker/0.1/js/bootstrap-datepicker.js"></script>

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
						<a href="#" class="navbar-brand"><img src="../../logo.png" width="120"></a>
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

	<div class="container below-header">
		<h1 class="project-title bid-page-title">Canada Water Masterplan - <small>Structural Engineer</small></h1>			
	</div> 

	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<div class="tender-container">
					<ul class="nav bid-form-nav">
						<li class="active"><a data-toggle="tab" href="#section1">Pre-Qualification Questionnaire</a></li>
						<li><a data-toggle="tab" href="#section2">Organization</a></li>
						<li><a data-toggle="tab" href="#section3">Individuals</a></li>
						<li><a data-toggle="tab" href="#section4">Approach</a></li>
						<li><a data-toggle="tab" href="#section5">Scope</a></li>
						<li><a data-toggle="tab" href="#section6">Appointment</a></li>
						<li><a data-toggle="tab" href="#section7">Quality Assurance</a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-8 questionnaire-section">
				<div class="tab-content">
					<div id="section1" class="tab-pane fade in active tender-container">
						<h3 class="bid-form-title">Pre-Qualification Questionnaire</h3>
						<form method="post">
							<div class="form-group">
								<input type="checkbox" name="" value="" class="filled-in" id="check1"> <label for="check1">Lorem ipsum dolor sit amet, consectetur adipisicing elit?</label>
							</div>
							<div class="form-group">
								<input type="checkbox" name="" value="" class="filled-in" id="check2"> <label for="check2">Lorem ipsum dolor sit amet, consectetur adipisicing elit?</label>
							</div>
							<div class="form-group">
								<input type="checkbox" name="" value="" class="filled-in" id="check3"> <label for="check3">Lorem ipsum dolor sit amet, consectetur adipisicing elit?</label>
							</div>
							<div class="form-group">
								<input type="checkbox" name="" value="" class="filled-in" id="check4"> <label for="check4">Lorem ipsum dolor sit amet, consectetur adipisicing elit?</label>
							</div>
							<div class="form-group">
								<input type="checkbox" name="" value="" class="filled-in" id="check5"> <label for="check5">Lorem ipsum dolor sit amet, consectetur adipisicing elit?</label>
							</div>
							<div class="form-group">
								<input type="checkbox" name="" value="" class="filled-in" id="check6"> <label for="check6">Lorem ipsum dolor sit amet, consectetur adipisicing elit?</label>
							</div>
							<div class="form-group">
								<input type="checkbox" name="" value="" class="filled-in" id="check7"> <label for="check7">Lorem ipsum dolor sit amet, consectetur adipisicing elit?</label>
							</div>
							<div class="form-group">
								<input type="checkbox" name="" value="" class="filled-in" id="check8"> <label for="check8">Lorem ipsum dolor sit amet, consectetur adipisicing elit?</label>
							</div>
							<div class="form-group">
								<input type="checkbox" name="" value="" class="filled-in" id="check9"> <label for="check9">Lorem ipsum dolor sit amet, consectetur adipisicing elit?</label>
							</div>
							<div class="form-group">
								<input type="checkbox" name="" value="" class="filled-in" id="check10"> <label for="check10">Lorem ipsum dolor sit amet, consectetur adipisicing elit?</label>
							</div>						
							<div class="form-group">
								<input type="submit" name="submit" value="Submit" class="btn btn-primary">
								<input type="submit" name="Save" value="Save" class="btn btn-success">
							</div>
						</form>
					</div>
					<div id="section2" class="tab-pane fade tender-container">
						<h3 class="bid-form-title">Organization</h3>
						<form method="post">
							<div class="row">
								<div class="col-sm-12">
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												Years of experience in the service required
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												{{-- <input type="text" name="" class="form-control" placeholder="Experience in Years"> --}}
												<div class="input-group date" id="datepicker" data-date="02-2012" 
												         data-date-format="mm-yyyy">

													 <input class="form-control" type="text" readonly="readonly" name="date" >	  
													 <span class="input-group-addon add-on"><span class="fa fa-calendar"></span></span>	  
												</div>
												{{-- <div class='input-group input-append date' id='datetimepicker1'>
												                    <input type='text' class="form-control" />
												                    <span class="input-group-addon add-on">
												                        <span class="fa fa-calendar"></span></span>
												                    </span>
												                </div> --}}
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												Offered Services
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<select name="" class="form-control">
													<option>Service 1</option>
													<option>Service 2</option>
													<option>Service 3</option>
													<option>Service 4</option>
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												Track record of relevant projects
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<input type="text" name="" class="form-control" placeholder="Project Name">
											</div>
											<div class="form-group">
												<input type="text" name="" class="form-control" placeholder="Project Value">
											</div>
										</div>
									</div>
									<div class="form-group">
										<input type="submit" name="submit" value="Submit" class="btn btn-primary">
										<input type="submit" name="Save" value="Save" class="btn btn-success">
									</div>
								</div>
							</div>
						</form>
					</div>
					<div id="section3" class="tab-pane fade tender-container">
						<h3 class="bid-form-title">Individuals</h3>
						<form method="post">
							<div class="row">
								<div class="col-sm-12">
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												Years of experience in the service required
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<input type="text" name="" class="form-control" placeholder="Experience in Years">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												Offered Services
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<select name="" class="form-control">
													<option>Service 1</option>
													<option>Service 2</option>
													<option>Service 3</option>
													<option>Service 4</option>
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												Track record of relevant projects
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<input type="text" name="" class="form-control" placeholder="Project Name">
											</div>
											<div class="form-group">
												<input type="text" name="" class="form-control" placeholder="Project Value">
											</div>
										</div>
									</div>
									<div class="form-group">
										<input type="submit" name="submit" value="Submit" class="btn btn-primary">
										<input type="submit" name="Save" value="Save" class="btn btn-success">
									</div>
								</div>
							</div>
						</form>
					</div>
					<div id="section4" class="tab-pane fade tender-container">
						<h3 class="bid-form-title">Approach</h3>
						<form method="post">
							<div class="row">
								<div class="col-sm-12">
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												Years of experience in the service required
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<input type="text" name="" class="form-control" placeholder="Experience in Years">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												Offered Services
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<select name="" class="form-control">
													<option>Service 1</option>
													<option>Service 2</option>
													<option>Service 3</option>
													<option>Service 4</option>
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												Track record of relevant projects
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<input type="text" name="" class="form-control" placeholder="Project Name">
											</div>
											<div class="form-group">
												<input type="text" name="" class="form-control" placeholder="Project Value">
											</div>
										</div>
									</div>
									<div class="form-group">
										<input type="submit" name="submit" value="Submit" class="btn btn-primary">
										<input type="submit" name="Save" value="Save" class="btn btn-success">
									</div>
								</div>
							</div>
						</form>
					</div>
					<div id="section5" class="tab-pane fade tender-container">
						<h3 class="bid-form-title">Scope</h3>
						<form method="post">
							<div class="row">
								<div class="col-sm-12">
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												Years of experience in the service required
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<input type="text" name="" class="form-control" placeholder="Experience in Years">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												Offered Services
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<select name="" class="form-control">
													<option>Service 1</option>
													<option>Service 2</option>
													<option>Service 3</option>
													<option>Service 4</option>
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												Track record of relevant projects
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<input type="text" name="" class="form-control" placeholder="Project Name">
											</div>
											<div class="form-group">
												<input type="text" name="" class="form-control" placeholder="Project Value">
											</div>
										</div>
									</div>
									<div class="form-group">
										<input type="submit" name="submit" value="Submit" class="btn btn-primary">
										<input type="submit" name="Save" value="Save" class="btn btn-success">
									</div>
								</div>
							</div>
						</form>
					</div>
					<div id="section6" class="tab-pane fade tender-container">
						<h3 class="bid-form-title">Appointment</h3>
						<form method="post">
							<div class="row">
								<div class="col-sm-12">
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												Years of experience in the service required
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<input type="text" name="" class="form-control" placeholder="Experience in Years">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												Offered Services
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<select name="" class="form-control">
													<option>Service 1</option>
													<option>Service 2</option>
													<option>Service 3</option>
													<option>Service 4</option>
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												Track record of relevant projects
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<input type="text" name="" class="form-control" placeholder="Project Name">
											</div>
											<div class="form-group">
												<input type="text" name="" class="form-control" placeholder="Project Value">
											</div>
										</div>
									</div>
									<div class="form-group">
										<input type="submit" name="submit" value="Submit" class="btn btn-primary">
										<input type="submit" name="Save" value="Save" class="btn btn-success">
									</div>
								</div>
							</div>
						</form>
					</div>
					<div id="section7" class="tab-pane fade tender-container">
						<h3 class="bid-form-title">Quality Assurance</h3>
						<form method="post">
							<div class="row">
								<div class="col-sm-12">
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												Years of experience in the service required
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<input type="text" name="" class="form-control" placeholder="Experience in Years">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												Offered Services
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<select name="" class="form-control">
													<option>Service 1</option>
													<option>Service 2</option>
													<option>Service 3</option>
													<option>Service 4</option>
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												Track record of relevant projects
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<input type="text" name="" class="form-control" placeholder="Project Name">
											</div>
											<div class="form-group">
												<input type="text" name="" class="form-control" placeholder="Project Value">
											</div>
										</div>
									</div>
									<div class="form-group">
										<input type="submit" name="submit" value="Submit" class="btn btn-primary">
										<input type="submit" name="Save" value="Save" class="btn btn-success">
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>			
		</div>
	</div>

	
<footer class="text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="200ms">
	<div class="col-sm-12">
		<p><img src="../../logo.png"></p>
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
	$("#datepicker").datepicker( {
		    format: "mm-yyyy",
		    viewMode: "months", 
		    minViewMode: "months"
		});
</script>
</body>
</html>

