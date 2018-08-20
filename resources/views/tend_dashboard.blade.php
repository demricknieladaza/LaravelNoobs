@extends('layouts.master')

@section('content')

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
						<a href="{{ url('dashboard') }}" class="menu-title policies-link">Dashboards</a>
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
						<span>Tenderer Dashboard</span>
						<button class="btn btn-warning pull-right">Print this report</button>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="lounge-demo">
							<div class="form-group">
								<h1 style="color: #000; text-align: center; font-size: 20px;">There are<br><span style="color: #FE7235; font-size: 50px;">26</span><br>Opportunity Nearby
								</h1>
							</div>
							<div class="form-group" style="background: #FE7235; ">
								<div class="tender-tiles new-project-tile">
								<h2><a href="{{ url('/winwork') }}">Win Work</a></h2>
								</div>
							</div>
							<div class="col-sm-6 tab1">
								<div class="tender-tiles new-project-tile" style="background: #FE7235; padding: 2px; color: #fff; text-align: center; font-size: 20px;     padding-top: 20px; padding-bottom: 14px;">
									<h3><a href="{{ url('/winwork/pds') }}">Request for Proposal   <span  class="badge pull-right" style="color: #fe7235; background: #fff; border-radius: 50%;">3</span></a></h3>
								</div>
								<table >
									<tr class="col-sm-3">
										<div class="ex3">
											<a href="{{ url('/dashboard/tend_dashboard/active_page') }}"><p style="font-weight: bold; font-size: 20px; border-top: 2px black solid; color: #000; padding-top: 10px; ">Project Infinity Tree</p></a>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<a href="{{ url('/dashboard/tend_dashboard/active_page') }}"><p style="font-weight: bold; font-size: 20px; color: #000; padding-top: 10px; ">Project Green Lagune</p></a>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<a href="{{ url('/dashboard/tend_dashboard/active_page') }}"><p style="font-weight: bold; font-size: 20px; color: #000; padding-top: 10px; ">Project Infinity Tree</p></a>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>

											 <p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											 <ul class="pagination pages">
												<li><a href="#">«</a></li>
												<li class="active"><a href="#">1</a></li>
												<li><a href="#">2</a></li>
												<li><a href="#">3</a></li>
												<li><a href="#">4</a></li>
												<li><a href="#">»</a></li>
											</ul>
										</div>
									</tr>
								</table>
							</div>
							<div class="col-sm-6 tab2 pull-right">
								<div class="tender-tiles new-project-tile" style="background: #FE7235; padding: 2px; color: #fff; text-align: center; font-size: 20px;     padding-top: 20px; padding-bottom: 14px;">
									<h3>Saved Opportunities<span  class="badge pull-right" style="color: #fe7235; background: #fff; border-radius: 50%;">3</span></h3>
								</div>
								<table >
									<tr class="col-sm-3">
										<div class="ex3">
											<a href="{{ url('/winwork/pds') }}"><p style="font-weight: bold; font-size: 20px; border-top: 2px black solid; color: #000; padding-top: 10px; ">Project Infinity Tree</p></a>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<a href="{{ url('/winwork/pds') }}"><p style="font-weight: bold; font-size: 20px; color: #000; padding-top: 10px; ">Project Green Lagune</p></a>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<a href="{{ url('/winwork/pds') }}"><p style="font-weight: bold; font-size: 20px; color: #000; padding-top: 10px; ">Project Infinity Tree</p></a>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>

											 <p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>

											 <ul class="pagination pages">
												<li><a href="#">«</a></li>
												<li class="active"><a href="#">1</a></li>
												<li><a href="#">2</a></li>
												<li><a href="#">3</a></li>
												<li><a href="#">4</a></li>
												<li><a href="#">»</a></li>
											</ul>
										</div>
									</tr>
								</table>
							</div>
							<div class="col-sm-6 tab1">
								<div class="tender-tiles new-project-tile" style="background: #FE7235; padding: 2px; color: #fff; text-align: center; font-size: 20px;     padding-top: 20px;    margin-top: 15px; padding-bottom: 14px;">
									<h3>Active<span  class="badge pull-right" style="color: #fe7235; background: #fff; border-radius: 50%;">3</span></h3>
								</div>
								<table >
									<tr class="col-sm-3">
										<div class="ex3">
											<a href="{{ url('/dashboard/tend_dashboard/active_page') }}"><p style="font-weight: bold; font-size: 20px; border-top: 2px black solid; color: #000; padding-top: 10px; ">Project Infinity Tree</p></a>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<a href="{{ url('/dashboard/tend_dashboard/active_page') }}"><p style="font-weight: bold; font-size: 20px; color: #000;"><p style="font-weight: bold; font-size: 20px; color: #000; padding-top: 10px; ">Project Green Lagune</p></a>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<a href="{{ url('/dashboard/tend_dashboard/active_page') }}"><p style="font-weight: bold; font-size: 20px; color: #000;"><p style="font-weight: bold; color: #000; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p></a>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<a href="{{ url('/dashboard/tend_dashboard/active_page') }}"><p style="font-weight: bold; font-size: 20px; color: #000;"><p style="font-weight: bold; color: #000; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p></a>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<a href="{{ url('/dashboard/tend_dashboard/active_page') }}"><p style="font-weight: bold; font-size: 20px; color: #000;"><p style="font-weight: bold; color: #000; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p></a>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<a href="{{ url('/dashboard/tend_dashboard/active_page') }}"><p style="font-weight: bold; font-size: 20px; color: #000;"><p style="font-weight: bold; color: #000; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p></a>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>

											 <p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>

											 <ul class="pagination pages">
												<li><a href="#">«</a></li>
												<li class="active"><a href="#">1</a></li>
												<li><a href="#">2</a></li>
												<li><a href="#">3</a></li>
												<li><a href="#">4</a></li>
												<li><a href="#">»</a></li>
											</ul>
										</div>
									</tr>
								</table>
							</div>
							<div class="col-sm-6 tab2">
								<div class="tender-tiles new-project-tile" style="background: #FE7235; padding: 2px; color: #fff; text-align: center; font-size: 20px;     padding-top: 20px;    margin-top: 15px; padding-bottom: 14px;">
									<h3>Drafted<span  class="badge pull-right" style="color: #fe7235; background: #fff; border-radius: 50%;">3</span></h3>
								</div>
								<table >
									<tr class="col-sm-3 pull-right">
										<div class="ex3">
											<a href="{{ url('/winwork/pds/bid') }}"><p style="font-weight: bold; font-size: 20px; border-top: 2px black solid; color: #000; padding-top: 10px; ">Project Infinity Tree</p></a>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<a href="{{ url('/winwork/pds/bid') }}"><p style="font-weight: bold; font-size: 20px; color: #000; padding-top: 10px; ">Project Green Lagune</p></a>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<a href="{{ url('/winwork/pds/bid') }}"><p style="font-weight: bold; font-size: 20px; color: #000; padding-top: 10px; ">Project Infinity Tree</p></a>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>

											 <p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											 <ul class="pagination pages">
												<li><a href="#">«</a></li>
												<li class="active"><a href="#">1</a></li>
												<li><a href="#">2</a></li>
												<li><a href="#">3</a></li>
												<li><a href="#">4</a></li>
												<li><a href="#">»</a></li>
											</ul>
										</div>
									</tr>
								</table>
							</div>
							<div class="col-sm-6 tab1">
								<div class="tender-tiles new-project-tile" style="background: #FE7235; padding: 2px; color: #fff; text-align: center; font-size: 20px;     padding-top: 20px;    margin-top: 15px; padding-bottom: 14px;">
									<h3>Successful<span  class="badge pull-right" style="color: #fe7235; background: #fff; border-radius: 50%;">3</span></h3>
								</div>
								<table >
									<tr class="col-sm-3">
										<div class="ex3">
											<a href="{{ url('dashboard/tend_dashboard/success_page') }}"><p style="font-weight: bold; font-size: 20px; border-top: 2px black solid; color: #000; padding-top: 10px; ">Project Infinity Tree</p></a>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<a href="{{ url('dashboard/tend_dashboard/success_page') }}"><p style="font-weight: bold; font-size: 20px; color: #000; padding-top: 10px; ">Project Green Lagune</p></a>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<a href="{{ url('dashboard/tend_dashboard/success_page') }}"><p style="font-weight: bold; font-size: 20px; color: #000; padding-top: 10px; ">Project Infinity Tree</p></a>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>

											 <p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>

											 <ul class="pagination pages">
												<li><a href="#">«</a></li>
												<li class="active"><a href="#">1</a></li>
												<li><a href="#">2</a></li>
												<li><a href="#">3</a></li>
												<li><a href="#">4</a></li>
												<li><a href="#">»</a></li>
											</ul>
										</div>
									</tr>
								</table>
							</div>
							<div class="col-sm-6 tab2">
								<div class="tender-tiles new-project-tile" style="background: #FE7235; padding: 2px; color: #fff; text-align: center; font-size: 20px;     padding-top: 20px;     margin-top: 15px; padding-bottom: 14px;">
									<h3>Unsuccessful<span  class="badge pull-right" style="color: #fe7235; background: #fff; border-radius: 50%;">3</span></h3>
								</div>
								<table >
									<tr class="col-sm-3">
										<div class="ex3">
											<a href="{{ url('dashboard/tend_dashboard/unsuccess_page') }}"><p style="font-weight: bold; font-size: 20px; border-top: 2px black solid; color: #000; padding-top: 10px; ">Project Infinity Tree</p></a>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<a href="{{ url('dashboard/tend_dashboard/unsuccess_page') }}"><p style="font-weight: bold; font-size: 20px; color: #000; padding-top: 10px; ">Project Green Lagune</p></a>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<a href="{{ url('dashboard/tend_dashboard/unsuccess_page') }}"><p style="font-weight: bold; font-size: 20px; color: #000; padding-top: 10px; ">Project Infinity Tree</p></a>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>

											 <p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>

											 <ul class="pagination pages">
												<li><a href="#">«</a></li>
												<li class="active"><a href="#">1</a></li>
												<li><a href="#">2</a></li>
												<li><a href="#">3</a></li>
												<li><a href="#">4</a></li>
												<li><a href="#">»</a></li>
											</ul>
										</div>
									</tr>
								</table>
							</div>
						</div>	
					</div>
					<div class="col-sm-6 lounge-action">
						<div class="lounge-demo">
							<div style="width: 1000px;" class="container">
							    <div class="row">
							        <div class="col-md-6">
							            <div class="panel panel-default">
							                <div id="chart2" class="panel-body">
							                </div>
							            </div>
							        </div>
							    </div>
							</div>
							<div style="width: 1000px;" class="container">
							    <div class="row">
							        <div class="col-md-6">
							            <div class="panel panel-default">
							                <div id="chart1" class="panel-body">
							                </div>
							            </div>
							        </div>
							    </div>   
							</div>
							<div style="width: 1000px;" class="container">
							    <div class="row">
							        <div class="col-md-6">
							            <div class="panel panel-default">
							                <div id="chartContainer" style="height: 300px; width: 100%;">
							                </div>
							            </div>
							        </div>
							    </div>   
							</div>
						</div>
					</div>
				</div>			
			</div>
		</div>
	</div>
	

	
	
	<!-- end -->

@endsection


