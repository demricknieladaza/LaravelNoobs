<!DOCTYPE html>
<html>
<head>
	    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SCOPE</title>    
    <link href="https://fonts.googleapis.com/css?family=Crete+Round" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/masterslider.css">
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/bxslider.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    <link rel="shortcut icon" href="images/logo.jpg">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/masterslider.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/functions.js"></script>
    <script type="text/javascript" src="js/bxslider.js"></script>

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

	<div class="container search_filter wow fadeInDown" data-wow-duration="1s" data-wow-delay="200ms">
		<div class="row top-row">
			<form method="post">
				<div class="col-sm-10">
					<div class="row">
						<div class="col-sm-8">
							<input type="text" name="search" class="form-control project_search" placeholder="Search Keyword">
							<i class="fa fa-search"></i>					
						</div>						
						<div class="col-sm-4">
							<select class="form-control project_sort">
								<option>Sort By</option>
								<option>Published Date (&uarr;)</option>
								<option>Published Date (&darr;)</option>
								<option>Deadline (&uarr;)</option>
								<option>Deadline (&darr;)</option>
								<option>Project Value (&uarr;)</option>
								<option>Project Value (&darr;)</option>
								<option>Alphabetical (&uarr;)</option>
								<option>Alphabetical (&darr;)</option>
							</select>
							<i class="fa fa-sort-amount-desc"></i>
						</div>
					</div>
				</div>
				<div class="col-sm-2">
					<button style="background-color: #D8652B;border-color:#D8652B;" class="btn btn-lg btn-primary">Search</button>
				</div>
			</form>
		</div>
	</div>

	<div class="container publish-project-outer-page">
		<div class="row">			
			<div class="form-group">
				<div class="row">
					<div class="hover-container-holder">
						<div class="tender-tile-single">
							<div class="tender-tiles new-project-tile">
								<h2><a href="publish/dashboard">Publish<br> New<br> Project</a></h2>
							</div>
						</div>
						<div class="tender-tile-single">
							<div class="tender-tiles">
								<h2><a href="#">Canada Water Masterplan</a></h2>
								<div class="row table-tender-details">
									<div class="col-sm-6 table-left">
										<table class="table table-hover table-striped">
											<thead>
												<tr>
													<th>Active Tenders</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Fire Engineer</td>
												</tr>
												<tr>
													<td>Structural Engineer</td>
												</tr>
												<tr>
													<td>Service Engineer</td>
												</tr>
												<tr>
													<td>Architect</td>
												</tr>
												<tr>
													<td>Facede Engineer</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="col-sm-6 table-right">
										<table class="table table-hover table-striped">
											<thead>
												<tr>
													<th>Drafted Tenders</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Acoustic Engineer</td>
												</tr>			
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="tender-tile-single">
							<div class="tender-tiles">
								<h2><a href="#">Canada Water Masterplan</a></h2>
								<div class="row table-tender-details">
									<div class="col-sm-6 table-left">
										<table class="table table-hover table-striped">
											<thead>
												<tr>
													<th>Active Tenders</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Fire Engineer</td>
												</tr>
												<tr>
													<td>Structural Engineer</td>
												</tr>
												<tr>
													<td>Service Engineer</td>
												</tr>
												<tr>
													<td>Architect</td>
												</tr>
												<tr>
													<td>Facede Engineer</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="col-sm-6 table-right">
										<table class="table table-hover table-striped">
											<thead>
												<tr>
													<th>Drafted Tenders</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Acoustic Engineer</td>
												</tr>			
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="tender-tile-single">
							<div class="tender-tiles">
								<h2><a href="#">Canada Water Masterplan</a></h2>
								<div class="row table-tender-details">
									<div class="col-sm-6 table-left">
										<table class="table table-hover table-striped">
											<thead>
												<tr>
													<th>Active Tenders</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Fire Engineer</td>
												</tr>
												<tr>
													<td>Structural Engineer</td>
												</tr>
												<tr>
													<td>Service Engineer</td>
												</tr>
												<tr>
													<td>Architect</td>
												</tr>
												<tr>
													<td>Facede Engineer</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="col-sm-6 table-right">
										<table class="table table-hover table-striped">
											<thead>
												<tr>
													<th>Drafted Tenders</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Acoustic Engineer</td>
												</tr>			
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</div>

	
	<footer class="text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="200ms">
		<div class="col-sm-12">
			<p><img src="images/logo.png"></p>
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


</body>
</html>
