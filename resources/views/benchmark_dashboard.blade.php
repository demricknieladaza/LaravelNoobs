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
						<a href="#" class="navbar-brand"><img src="../../images/logo.png" width="120"></a>
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
						<a href="{{ url('publish/dashboard') }}" class="menu-title policies-link">Dashboards</a>
						<ul>
							<li><a href="{{ url('/dashboard/emp_dashboard') }}"><i class="fa fa-circle-o"></i> Employer Dashboard</a></li>
							<li><a href="{{ url('/dashboard/tend_dashboard') }}"><i class="fa fa-circle-o"></i> Tenderer Dashboard</a></li>
							<li><a href="{{ url('/dashboard/benchmark_dashboard') }}"><i class="fa fa-circle-o"></i> Benchmarking</a></li>
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
						<a href="{{ url('/dashboard/policies') }}" class="menu-title policies-link">Policies </a>			          
					</li>										
				</ul>
			</div>
			<div class="col-sm-10 col-sm-offset-2 lounge-main">
				<div class="row">
					<div class="col-sm-12 lounge-header">
						<span>Benchmarking</span>
						<button class="btn btn-warning pull-right">Print this report</button>
					</div>
				</div>
				<div class="benchmark-head">					
					<select name="service" class="my-select-form" id="selectservice">
				                             <option value="" disabled selected>Select Service
													<option>Architect</option>
													<option>Sturctural Engineed</option>
													<option>Service Engineer</option>
													<option>Fire Engineer</option>
													<option>Acoustic Engineer</option>
													<option>Principal Designer</option>
													<option>Fascade Engineer</option>
													<option>Building Control</option>
													<option>Lighting Consultant</option>
													<option>Security Consultant</option>
													<option>Plannning Consultant</option>
													<option>Sustainability Consultant</option>
													<option>BIM Consultant</option>
													<option>Quantity Survueyor</option>
													<option>Project Manager</option>
													<option>Project Manager</option>
													<option>Other</option>
					</select>
					<select name="service" class="my-select-form" id="selectlocation">
						<option value="0">Location</option>
						<option>Location 1</option>
						<option>Location 2</option>
						<option>Location 3</option>
						<option>Location 4</option>
					</select>
					<a href="#" class="btn btn-default apply-dash-filter" id="cvalues-btn">Construction Values</a>
					<div class="dropdown-filter">
						<input type="text" name="cvaluefrom" class="my-select-form drop-cvalue" placeholder="From">
						<input type="text" name="cvalueto" class="my-select-form drop-cvalue" placeholder="To">
					</div>
					<select name="service" class="my-select-form" id="selecttype">
						<option value="" disabled selected>Select Type of Use
													<option>Residential</option>
													<option>Commercial </option>
													<option>Retail</option>
													<option>Leisure</option>
													<option>Sports and Venues</option>
													<option>Hotel</option>
													<option>Industrial</option>
													<option>Education</option>
													<option>Healthcare</option>
													<option>Defence</option>
													<option>Aviation</option>
													<option>Highways</option>
													<option>Bridges</option>
													<option>Rail</option>
													<option>Water</option>
													<option>Oil,Gas and Chemical</option>
					</select>
					<button class="btn btn-warning apply-dash-filter">Apply</button>
				</div>
				<div class="benchmark-dashboard">
					<div class="col-sm-12">
						<table class="table table-striped table-hover">
							<thead>
								<tr>
									<th>RIBA STAGE</th>
									<th>Lowest Fee</th>
									<th>Highest Fee</th>
									<th>Average Fee</th>
									<th>Percentage of Construction Value</th>
									<th>Share of Total Fee</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>0</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Percentage</td>
									<td>Percentage</td>
								</tr>
								<tr>
									<td>1</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Percentage</td>
									<td>Percentage</td>
								</tr>
								<tr>
									<td>2</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Percentage</td>
									<td>Percentage</td>
								</tr>
								<tr>
									<td>3</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Percentage</td>
									<td>Percentage</td>
								</tr>
								<tr>
									<td>4</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Percentage</td>
									<td>Percentage</td>
								</tr>
								<tr>
									<td>5</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Percentage</td>
									<td>Percentage</td>
								</tr>
								<tr>
									<td>6</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Percentage</td>
									<td>Percentage</td>
								</tr>
								<tr>
									<td>7</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Percentage</td>
									<td>Percentage</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="benchmark-dashboard">
					<h3><span>Dataset</span></h3>
					<div class="col-sm-12">						
						<table class="table table-striped table-hover">
							<thead>
								<tr>
									<th>Project ID</th>
									<th>Location</th>
									<th>Construction Value</th>
									<th>0</th>
									<th>1</th>
									<th>2</th>
									<th>3</th>
									<th>4</th>
									<th>5</th>
									<th>6</th>
									<th>7</th>
									<th>Average Fee</th>
									<th>Scope of Service</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>00000</td>
									<td>Location</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td></td>
								</tr>
								<tr>
									<td>00001</td>
									<td>Location</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td></td>
								</tr>
								<tr>
									<td>00002</td>
									<td>Location</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td></td>
								</tr>
								<tr>
									<td>00003</td>
									<td>Location</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td></td>
								</tr>
								<tr>
									<td>00004</td>
									<td>Location</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>		
			</div>
		</div>
	</div>

	
	<footer class="text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="200ms">
		<div class="col-sm-12">
			<p><img src="../../images/logo.png"></p>
			<p>
				<a style="margin-right: 3%;" href="#"><i class="fa fa-facebook"></i></a>
                <a style="margin-right: 3%;" href="#"><i class="fa fa-twitter"></i></a>
                <a style="margin-right: 3%;" href="#"><i class="fa fa-linkedin"></i></a>
				<a href="#"><i class="fa fa-google-plus"></i></a>
			</p>
		</div>
	</footer>
	<div class="container-fluid text-center copyright">
		SCOPE Limited, registration number 12345678, 32 Hainton Close, London, E1 2QZ, United Kingdom
	</div>

	<!-- end -->

	<script>
		$('#selectservice').change(function(){
			$('#selectservice').addClass('selected');
		});
		$('#selectlocation').change(function(){
			$('#selectlocation').addClass('selected');
		});	
		$('#selecttype').change(function(){
			$('#selecttype').addClass('selected');
		});
		$('#cvalues-btn').click(function(){
			$('.dropdown-filter').toggle();
		});
	</script>
</body>
</html>



