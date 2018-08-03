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
	<link rel="shortcut icon" href="../images/logo.jpg">
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
						<a href="{{ url('/') }}" class="navbar-brand"><img src="../../images/logo.png" width="120"></a>
					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('/publish') }}" class="highlight">Publish Projects</a></li>    
                            <li><a href="{{ url('/winwork') }}" class="highlight">Win Work</a></li>
                            <li><a href="#how-it-works">How It Works</a></li>
                            <li><a href="#pricing">Pricing</a></li>
                            <li><a href="#about-scope">About Scope</a></li>
                            <li><a href="#faqs">FAQ</a></li>                    
                            <li><a href="#contact">contact</a></li>
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

	<div class="container-fluid below-header">
	</div>

	<div class="container-fluid lounge-wrapper">
		<div class="row">
			<div class="col-sm-2 lounge-menu">
				<div class="row">
					<div class="lounge-title">
						<h2>Scope<br> Business Lounge</h2>
					</div>
				</div>
				<div class="clearfix"></div>
				<ul class="nav lounge-nav">
					<li>
						<a href="{{ url('/dashboard') }}" class="menu-title policies-link">Dashboards</a>
						<ul>
							<li><a href="{{ url('dashboard/emp_dashboard') }}"><i class="fa fa-circle-o"></i> Employer Dashboard</a></li>
							<li><a href="{{ url('dashboard/tend_dashboard') }}"><i class="fa fa-circle-o"></i> Tenderer Dashboard</a></li>
							<li><a href="{{ url('dashboard/benchmark_dashboard') }}"><i class="fa fa-circle-o"></i> Benchmarking</a></li>
						</ul>
					</li>
					<li>
						<a href="#" class="menu-title policies-link">My Profile</a>
						<ul>
							<li><a href="#"><i class="fa fa-circle-o"></i> Organisation</a></li>
							<li><a href="#"><i class="fa fa-circle-o"></i> Individuals</a></li>
							<li><a href="#"><i class="fa fa-circle-o"></i> Users</a></li>
							<li><a href="#"><i class="fa fa-circle-o"></i> Membership</a></li>
						</ul>
					</li>
					<li>
						<a href="{{ url('dashboard/policies') }}" class="menu-title policies-link">Policies </a>			          
					</li>										
				</ul>
			</div>
			<div class="col-sm-10 col-sm-offset-2 lounge-main">
				<div class="row">
					<div class="col-sm-12 lounge-header">
						<span>Add New Project</span>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="shadow-wrapper">
							<form method="post" class="new-project-form">
								<label>Open Tenders For</label>
								<div class="form-group tenders-checkbox">
									<input type="checkbox" name="tender" value="fire" id="fire" class="filled-in"> <label for="fire">Fire Engineer</label>
									<input type="checkbox" name="tender" value="acoustic" id="acoustic" class="filled-in"> <label for="acoustic">Acoustic Engineer</label>
									<input type="checkbox" name="tender" value="facade" id="facade" class="filled-in"> <label for="facade">Facade Engineer</label>
								</div>
								<div class="form-group">
									<label>Enter Project Description</label>
									<textarea class="form-control" name="" rows="10"></textarea>
								</div>
								<div class="form-group">
									<label>Upload Images</label>
									<input type="file" name="" class="btn btn-warning">
								</div>
								<div class="form-group project-form-table">
									<table class="table table-striped table-hover">
										<tr>
											<td>Project Title</td>
											<td>
												<input type="text" name=" " class="form-control">
											</td>
										</tr>		
										<tr>
											<td>Location</td>
											<td>
												<input type="text" name="" class="form-control">
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
															<div class="nested-input">
																<input type="text" name="" class="form-control">
															</div>
														</td>
														<td><button class="btn btn-warning add-fields-btn"><i class="fa fa-plus"></i></button></td>
													</tr>
													<tr>
														<td>
															<p><b>Tube Stations</b></p>
														</td>
														<td>
															<div class="nested-input">
																<input type="text" name="" class="form-control">
															</div>
														</td>
														<td><button class="btn btn-warning add-fields-btn"><i class="fa fa-plus"></i></button></td>
													</tr>
													<tr>
														<td>
															<p><b>Bus Lines</b> </p>
														</td>
														<td>
															<div class="nested-input">
																<input type="text" name="" class="form-control">
															</div>
														</td>
														<td><button class="btn btn-warning add-fields-btn"><i class="fa fa-plus"></i></button></td>
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
														<td>
															<div class="nested-input">
																<input type="text" name="" class="form-control">
															</div>
														</td>
													</tr>
													<tr>
														<td>History</td>
														<td>
															<div class="nested-input">
																<input type="text" name="" class="form-control">
															</div>
														</td>
													</tr>
												</table>
											</td>
										</tr>
										<tr>
											<td>Types of Use</td>
											<td>
												<table width="100%">
													<tr>
														<td>
															<div class="col-sm-12">
																<div class="nested-input">
																	<select class="form-control">
																		<option>Residential</option>
																		<option>Office</option>
																		<option>Retail</option>
																	</select>
																</div>
															</div>
														</td>
														<td>
															<div class="nested-input">
																<input type="text" name="" class="form-control" placeholder="Area in m2">
															</div>
														</td>
														<td>
															<div class="col-sm-12">
																<div class="nested-input">
																	<input type="text" name="" class="form-control" placeholder="Area in Units">
																</div>
															</div>
														</td>
														<td>
															<div class="nested-input">
																<input type="text" name="" class="form-control" placeholder="Specifications">
															</div>
														</td>
														<td><button class="btn btn-warning add-fields-btn"><i class="fa fa-plus"></i></button></td>
													</tr>					
													<tr>
														<td>
															<div class="nested-input">
																Total
															</div>
														</td>
														<td colspan="4">
															<div class="nested-input">
																<input type="text" name="" class="form-control">
															</div>
														</td>
													</tr>
												</table>
											</td>
										</tr>
										<tr>
											<td>Type of Development</td>
											<td>
												<input type="text" name="" class="form-control">
											</td>
										</tr>
										<tr>
											<td>Procurement Route</td>
											<td>
												<input type="text" name="" class="form-control">
											</td>
										</tr>
										<tr>
											<td>Construction Value</td>
											<td>
												<input type="text" name="" class="form-control">
											</td>
										</tr>
										<tr>
											<td>Milestones</td>
											<td>
												<table width="100%">
													<tr>
														<td>RIBA Stage 1 Completion</td>
														<td>
															<div class="nested-input">
																<input type="date" name="" class="form-control">
															</div>
														</td>
													</tr>
													<tr>
														<td>RIBA Stage 2 Completion</td>
														<td>
															<div class="nested-input">
																<input type="date" name="" class="form-control">
															</div>
														</td>
													</tr>
													<tr>
														<td>RIBA Stage 3 Completion</td>
														<td>
															<div class="nested-input">
																<input type="date" name="" class="form-control">
															</div>
														</td>
													</tr>
													<tr>
														<td>RIBA Stage 4 Completion</td>
														<td>
															<div class="nested-input">
																<input type="date" name="" class="form-control">
															</div>
														</td>
													</tr>
													<tr>
														<td>RIBA Stage 5 Completion</td>
														<td>
															<div class="nested-input">
																<input type="date" name="" class="form-control">
															</div>
														</td>
													</tr>
													<tr>
														<td>RIBA Stage 5 Completion</td>
														<td>
															<div class="nested-input">
																<input type="date" name="" class="form-control">
															</div>
														</td>
													</tr>
													<tr>
														<td>RIBA Stage 7 Completion</td>
														<td>
															<div class="nested-input">
																<input type="date" name="" class="form-control">
															</div>
														</td>
													</tr>
												</table>
											</td>								
										</tr>
										<tr>
											<td>Meetings</td>
											<td>
												<table width="100%">
													<tr>
														<td>
															<div class="col-sm-12">
																<div class="nested-input">
																	<input type="text" name="" class="form-control">
																</div>
															</div>
														</td>
														<td>
															<div class="nested-input">
																<input type="text" name="" class="form-control">
															</div>
														</td>
														<td><button class="btn btn-warning add-fields-btn"><i class="fa fa-plus"></i></button></td>
													</tr>
												</table>
											</td>
										</tr>
										<tr>
											<td>Constraints</td>
											<td> 
												<table width="100%">
													<tr>
														<td colspan="2" width="90%">
															<div class="nested-input">
																<input type="text" name="" class="form-control">
															</div>
														</td>
														<td width="9%"><button class="btn btn-warning add-fields-btn"><i class="fa fa-plus"></i></button></td>
													</tr>
												</table>                             
											</td>
										</tr>
										<tr>
											<td>Supporting Documents</td>
											<td>
												<div class="nested-input">
													<input type="file" name="" class="btn btn-warning">
												</div>
											</td>
										</tr>
									</table>						
								</div>
								<div class="form-group">
									<input type="submit" name="" class="btn btn-warning">
								</div>
							</form>
						</div>
					</div>
				</div>
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
	$(document).ready(function(){
		
	});
</script>
</body>
</html>

