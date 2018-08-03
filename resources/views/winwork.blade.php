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
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/masterslider.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/functions.js"></script>
    <script type="text/javascript" src="js/bxslider.js"></script>
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
						<a href="{{ url('/') }}" class="navbar-brand"><img src="../images/logo.png" width="120"></a>
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
					<button class="btn btn-lg btn-primary">Search</button>
				</div>
			</form>
		</div>
	</div>

	<div class="container-fluid search_results wow fadeInUp" data-wow-duration="1s" data-wow-delay="200ms">
		<div class="container">
			<div class="row">
				<div class="row">
					<div class="col-sm-3">
						<div class="more-search-filter">
							<form method="post">
								<h3>Filter By</h3>
								<p><b>Service</b></p>
								<?php

								$Service = array("Fire Engineer","Service Engineer","Principal Designer","Fascade Engineer","Building Control","Lighting Consulant","Security Consultant","Planning Consultant","Sustainability Consultant","BIM Consultant","Quantity Surveyor","Project Manager", "Architecture", "Acoustic Engineer"
								);
								sort($Service, SORT_NATURAL | SORT_FLAG_CASE);
								foreach ($Service as $key ) {
								    echo "<p><input type='checkbox' class='filled-in' name='".$key."' value='".$key."' id='".$key."'> <label for='".$key."'>".$key."</label></p>";
								}

								?>
								<p><input type="checkbox" class="filled-in" name="other" value="Other" id="other"> <label for="other">Architect</label></p>

								<p><b>Type of Use</b></p>
								<?php

								$Service = array("Leisure","Sports and Venue","Hotel","Industrial","Education","Healthcare","Defence","Aviation","Highways","Bridges","Rail","Water","Power","Oil,Gas and Chemical"
								);
								sort($Service, SORT_NATURAL | SORT_FLAG_CASE);
								foreach ($Service as $key ) {
								    echo "<p><input type='checkbox' class='filled-in' name='".$key."' value='".$key."' id='".$key."'> <label for='".$key."'>".$key."</label></p>";
								}

								?>
								<p><input type="checkbox" class="filled-in" name="other" value="other" id="other"> <label for="other">Other</label></p>
								<!-- <p><input type="checkbox" class="filled-in" name="architect" value="architect" id="architect"> <label for="architect">Architect</label></p>
								<p><input type="checkbox" class="filled-in" name="acoustic engineer" value="acoustic engineer" id="acoustic engineer"><label for="acoustic engineer">Acoustic Engineer</label></p>
								<p><input type="checkbox" class="filled-in" name="structural" value="structural" id="structural"> <label for="structural">Structural Engineer</label></p> -->
								<p><b>Project Value</b></p>
								<div class="row">
									<div class="form-group">

										<div class="col-sm-6">
											<input type="text" name="from" placeholder="From Value" class="form-control">
										</div>
										<div class="col-sm-6">
											<input type="text" name="to" placeholder="To Value" class="form-control">
										</div>
									</div>
								</div>
								<p></p>
								<p><b>Location</b></p>
								
								<!-- <p><input type="checkbox" class="filled-in" name="office" value="office" id="office"> <label for="office">Office</label></p>
								<p><input type="checkbox" class="filled-in" name="residential" value="residential" id="residential"> <label for="residential">Residential</label></p>
								<p><input type="checkbox" class="filled-in" name="retail" value="retail" id="retail"> <label for="retail">Retail</label></p> -->
								<div class="form-group">
									<select class="form-control project_location" name="location">
										<option>Enter your Location</option>
										<option>Within 50km</option>
										<option>Within 100km</option>
										<option>Within 500km</option>
										<option>Worldwide</option>
									</select>
								</div>	
								<p><input type="submit" name="submit" value="Apply Filter" class="btn btn-lg btn-primary"></p>
								
							</form>
						</div>
					</div>
					<div class="col-sm-9">
						<div class="col-sm-12 search_result_sort">
							<div class="row">
								<div class="col-sm-6 result_per_page">
									<select name="result_per_page">
										<option>10</option>
										<option>20</option>
									</select>
									<b>Showing 1 to 10 of 156 results</b>
								</div>
								<div class="col-sm-6">
									<ul class="pagination navbar-right">
										<li><a href="#">&laquo;</a></li>
										<li class="active"><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#">4</a></li>
										<li><a href="#">5</a></li>
										<li><a href="#">&raquo;</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-12 search_result_row">
							<div class="search_data">
								<div class="row">
									<div class="col-sm-3 project_image">
										<img src="../images/construction.jpg" width="100%">
									</div>
									<div class="col-sm-9 project-excerpt">
										<div class="row">
											<div class="col-sm-12">
												<h3>Canada Water Masterplan<small> - 9 days left</small></h3>
											</div>			
											<div class="col-sm-6">
												<h5>Fire Engineer and 9 Other Services</h5>
												<p>New-built located in Canada Water, London<br> 33,000 m2 office space, 5,500 m2 retail space</p>
											</div>
											<div class="col-sm-3 bid_section text-center">
												<p>Construction Value</p>
												<h3>£ 510K</h3>
											</div>
											<div class="col-sm-3 bid_section text-center">
												<p>Avg Bid</p>
												<h3>£ 310K</h3>
											</div>				
										</div>
									</div>							
								</div>						
							</div>
							<figcaption>
								<a href="/winwork/pds"><h3>Canada Water Masterplan</h3></a>
								<p>
									<a href="#" data-toggle="tooltip" title="Add to Favourites"><i class="fa fa-fw fa-star-o"></i></a>
									<a href="#" data-toggle="tooltip" title="Send Via Email"><i class="fa fa-fw fa-envelope-o"></i></a>
								</p>
							</figcaption>	
						</div>	
						<div class="col-sm-12 search_result_row">
							<div class="search_data">
								<div class="row">
									<div class="col-sm-3 project_image">
										<img src="../images/construction.jpg" width="100%">
									</div>
									<div class="col-sm-9 project-excerpt">
										<div class="row">
											<div class="col-sm-12">
												<h3>Canada Water Masterplan<small> - 9 days left</small></h3>
											</div>			
											<div class="col-sm-6">
												<h5>Fire Engineer and 9 Other Services</h5>
												<p>New-built located in Canada Water, London<br> 33,000 m2 office space, 5,500 m2 retail space</p>
											</div>
											<div class="col-sm-3 bid_section text-center">
												<p>Construction Value</p>
												<h3>£ 510K</h3>
											</div>
											<div class="col-sm-3 bid_section text-center">
												<p>Avg Bid</p>
												<h3>£ 310K</h3>
											</div>				
										</div>
									</div>							
								</div>						
							</div>
							<figcaption>
								<a href="#"><h3>Canada Water Masterplan</h3></a>
								<p>
									<a href="#" data-toggle="tooltip" title="Add to Favourites"><i class="fa fa-fw fa-star-o"></i></a>
									<a href="#" data-toggle="tooltip" title="Send Via Email"><i class="fa fa-fw fa-envelope-o"></i></a>
								</p>
							</figcaption>	
						</div>	
						<div class="col-sm-12 search_result_row">
							<div class="search_data">
								<div class="row">
									<div class="col-sm-3 project_image">
										<img src="../images/construction.jpg" width="100%">
									</div>
									<div class="col-sm-9 project-excerpt">
										<div class="row">
											<div class="col-sm-12">
												<h3>Canada Water Masterplan<small> - 9 days left</small></h3>
											</div>			
											<div class="col-sm-6">
												<h5>Fire Engineer and 9 Other Services</h5>
												<p>New-built located in Canada Water, London<br> 33,000 m2 office space, 5,500 m2 retail space</p>
											</div>
											<div class="col-sm-3 bid_section text-center">
												<p>Construction Value</p>
												<h3>£ 510K</h3>
											</div>
											<div class="col-sm-3 bid_section text-center">
												<p>Avg Bid</p>
												<h3>£ 310K</h3>
											</div>				
										</div>
									</div>							
								</div>						
							</div>
							<figcaption>
								<a href="#"><h3>Canada Water Masterplan</h3></a>
								<p>
									<a href="#" data-toggle="tooltip" title="Add to Favourites"><i class="fa fa-fw fa-star-o"></i></a>
									<a href="#" data-toggle="tooltip" title="Send Via Email"><i class="fa fa-fw fa-envelope-o"></i></a>
								</p>
							</figcaption>	
						</div>	
						<div class="col-sm-12 search_result_row">
							<div class="search_data">
								<div class="row">
									<div class="col-sm-3 project_image">
										<img src="../images/construction.jpg" width="100%">
									</div>
									<div class="col-sm-9 project-excerpt">
										<div class="row">
											<div class="col-sm-12">
												<h3>Canada Water Masterplan<small> - 9 days left</small></h3>
											</div>			
											<div class="col-sm-6">
												<h5>Fire Engineer and 9 Other Services</h5>
												<p>New-built located in Canada Water, London<br> 33,000 m2 office space, 5,500 m2 retail space</p>
											</div>
											<div class="col-sm-3 bid_section text-center">
												<p>Construction Value</p>
												<h3>£ 510K</h3>
											</div>
											<div class="col-sm-3 bid_section text-center">
												<p>Avg Bid</p>
												<h3>£ 310K</h3>
											</div>				
										</div>
									</div>							
								</div>						
							</div>
							<figcaption class="figcaption1">
								<a href="#"><h3>Canada Water Masterplan</h3></a>
								<p>
									<a href="#" data-toggle="tooltip" title="Add to Favourites"><i class="fa fa-fw fa-star-o"></i></a>
									<a href="#" data-toggle="tooltip" title="Send Via Email"><i class="fa fa-fw fa-envelope-o"></i></a>
								</p>
							</figcaption>	
						</div>	
						<div class="col-sm-12 search_result_row">
							<div class="search_data">
								<div class="row">
									<div class="col-sm-3 project_image">
										<img src="../images/construction.jpg" width="100%">
									</div>
									<div class="col-sm-9 project-excerpt">
										<div class="row">
											<div class="col-sm-12">
												<h3>Canada Water Masterplan<small> - 9 days left</small></h3>
											</div>			
											<div class="col-sm-6">
												<h5>Fire Engineer and 9 Other Services</h5>
												<p>New-built located in Canada Water, London<br> 33,000 m2 office space, 5,500 m2 retail space</p>
											</div>
											<div class="col-sm-3 bid_section text-center">
												<p>Construction Value</p>
												<h3>£ 510K</h3>
											</div>
											<div class="col-sm-3 bid_section text-center">
												<p>Avg Bid</p>
												<h3>£ 310K</h3>
											</div>				
										</div>
									</div>							
								</div>						
							</div>
							<figcaption class="figcaption1">
								<a href="#"><h3>Canada Water Masterplan</h3></a>
								<p>
									<a href="#" data-toggle="tooltip" title="Add to Favourites"><i class="fa fa-fw fa-star-o"></i></a>
									<a href="#" data-toggle="tooltip" title="Send Via Email"><i class="fa fa-fw fa-envelope-o"></i></a>
								</p>
							</figcaption>	
						</div>	
								<div class="col-sm-12 search_result_row">
							<div class="search_data">
								<div class="row">
									<div class="col-sm-3 project_image">
										<img src="../images/construction.jpg" width="100%">
									</div>
									<div class="col-sm-9 project-excerpt">
										<div class="row">
											<div class="col-sm-12">
												<h3>Canada Water Masterplan<small> - 9 days left</small></h3>
											</div>			
											<div class="col-sm-6">
												<h5>Fire Engineer and 9 Other Services</h5>
												<p>New-built located in Canada Water, London<br> 33,000 m2 office space, 5,500 m2 retail space</p>
											</div>
											<div class="col-sm-3 bid_section text-center">
												<p>Construction Value</p>
												<h3>£ 510K</h3>
											</div>
											<div class="col-sm-3 bid_section text-center">
												<p>Avg Bid</p>
												<h3>£ 310K</h3>
											</div>				
										</div>
									</div>							
								</div>						
							</div>
							<figcaption class="figcaption1">
								<a href="#"><h3>Canada Water Masterplan</h3></a>
								<p>
									<a href="#" data-toggle="tooltip" title="Add to Favourites"><i class="fa fa-fw fa-star-o"></i></a>
									<a href="#" data-toggle="tooltip" title="Send Via Email"><i class="fa fa-fw fa-envelope-o"></i></a>
								</p>
							</figcaption>	
						</div>
								<div class="col-sm-12 search_result_row">
							<div class="search_data">
								<div class="row">
									<div class="col-sm-3 project_image">
										<img src="../images/construction.jpg" width="100%">
									</div>
									<div class="col-sm-9 project-excerpt">
										<div class="row">
											<div class="col-sm-12">
												<h3>Canada Water Masterplan<small> - 9 days left</small></h3>
											</div>			
											<div class="col-sm-6">
												<h5>Fire Engineer and 9 Other Services</h5>
												<p>New-built located in Canada Water, London<br> 33,000 m2 office space, 5,500 m2 retail space</p>
											</div>
											<div class="col-sm-3 bid_section text-center">
												<p>Construction Value</p>
												<h3>£ 510K</h3>
											</div>
											<div class="col-sm-3 bid_section text-center">
												<p>Avg Bid</p>
												<h3>£ 310K</h3>
											</div>				
										</div>
									</div>							
								</div>						
							</div>
							<figcaption class="figcaption1">
								<a href="#"><h3>Canada Water Masterplan</h3></a>
								<p>
									<a href="#" data-toggle="tooltip" title="Add to Favourites"><i class="fa fa-fw fa-star-o"></i></a>
									<a href="#" data-toggle="tooltip" title="Send Via Email"><i class="fa fa-fw fa-envelope-o"></i></a>
								</p>
							</figcaption>	
						</div>
								<div class="col-sm-12 search_result_row">
							<div class="search_data">
								<div class="row">
									<div class="col-sm-3 project_image">
										<img src="../images/construction.jpg" width="100%">
									</div>
									<div class="col-sm-9 project-excerpt">
										<div class="row">
											<div class="col-sm-12">
												<h3>Canada Water Masterplan<small> - 9 days left</small></h3>
											</div>			
											<div class="col-sm-6">
												<h5>Fire Engineer and 9 Other Services</h5>
												<p>New-built located in Canada Water, London<br> 33,000 m2 office space, 5,500 m2 retail space</p>
											</div>
											<div class="col-sm-3 bid_section text-center">
												<p>Construction Value</p>
												<h3>£ 510K</h3>
											</div>
											<div class="col-sm-3 bid_section text-center">
												<p>Avg Bid</p>
												<h3>£ 310K</h3>
											</div>				
										</div>
									</div>							
								</div>						
							</div>
							<figcaption class="figcaption1">
								<a href="#"><h3>Canada Water Masterplan</h3></a>
								<p>
									<a href="#" data-toggle="tooltip" title="Add to Favourites"><i class="fa fa-fw fa-star-o"></i></a>
									<a href="#" data-toggle="tooltip" title="Send Via Email"><i class="fa fa-fw fa-envelope-o"></i></a>
								</p>
							</figcaption>	
						</div>
								<div class="col-sm-12 search_result_row">
							<div class="search_data">
								<div class="row">
									<div class="col-sm-3 project_image">
										<img src="../images/construction.jpg" width="100%">
									</div>
									<div class="col-sm-9 project-excerpt">
										<div class="row">
											<div class="col-sm-12">
												<h3>Canada Water Masterplan<small> - 9 days left</small></h3>
											</div>			
											<div class="col-sm-6">
												<h5>Fire Engineer and 9 Other Services</h5>
												<p>New-built located in Canada Water, London<br> 33,000 m2 office space, 5,500 m2 retail space</p>
											</div>
											<div class="col-sm-3 bid_section text-center">
												<p>Construction Value</p>
												<h3>£ 510K</h3>
											</div>
											<div class="col-sm-3 bid_section text-center">
												<p>Avg Bid</p>
												<h3>£ 310K</h3>
											</div>				
										</div>
									</div>							
								</div>						
							</div>
							<figcaption class="figcaption1">
								<a href="#"><h3>Canada Water Masterplan</h3></a>
								<p>
									<a href="#" data-toggle="tooltip" title="Add to Favourites"><i class="fa fa-fw fa-star-o"></i></a>
									<a href="#" data-toggle="tooltip" title="Send Via Email"><i class="fa fa-fw fa-envelope-o"></i></a>
								</p>
							</figcaption>	
						</div>
						<div class="col-sm-12 search_result_row">
							<div class="search_data">
								<div class="row">
									<div class="col-sm-3 project_image">
										<img src="../images/construction.jpg" width="100%">
									</div>
									<div class="col-sm-9 project-excerpt">
										<div class="row">
											<div class="col-sm-12">
												<h3>Canada Water Masterplan<small> - 9 days left</small></h3>
											</div>			
											<div class="col-sm-6">
												<h5>Fire Engineer and 9 Other Services</h5>
												<p>New-built located in Canada Water, London<br> 33,000 m2 office space, 5,500 m2 retail space</p>
											</div>
											<div class="col-sm-3 bid_section text-center">
												<p>Construction Value</p>
												<h3>£ 510K</h3>
											</div>
											<div class="col-sm-3 bid_section text-center">
												<p>Avg Bid</p>
												<h3>£ 310K</h3>
											</div>				
										</div>
									</div>							
								</div>						
							</div>
							<figcaption class="figcaption1">
								<a href="#"><h3>Canada Water Masterplan</h3></a>
								<p>
									<a href="#" data-toggle="tooltip" title="Add to Favourites"><i class="fa fa-fw fa-star-o"></i></a>
									<a href="#" data-toggle="tooltip" title="Send Via Email"><i class="fa fa-fw fa-envelope-o"></i></a>
								</p>
							</figcaption>	
						</div>	
						<div class="col-sm-12 search_result_sort">
							<div class="row">
								<div class="col-sm-6 result_per_page">
									<select name="result_per_page">
										<option>10</option>
										<option>20</option>
									</select>
									<b>Showing 1 to 10 of 156 results</b>
								</div>
								<div class="col-sm-6">
									<ul class="pagination navbar-right">
										<li><a href="#">&laquo;</a></li>
										<li class="active"><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#">4</a></li>
										<li><a href="#">5</a></li>
										<li><a href="#">&raquo;</a></li>
									</ul>
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

	<script type="text/javascript">
		new WOW().init();
	</script>		
	<script>
			$(document).ready(function(){
				$('[data-toggle="tooltip"]').tooltip(); 
			});
		</script>
</body>
</html>
