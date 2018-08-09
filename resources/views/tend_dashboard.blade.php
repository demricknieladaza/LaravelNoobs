@extends('layouts.master')

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
								<h1 style="color: #000; text-align: center; font-size: 20px;">There are<br><span style="color: #D8652B; font-size: 50px;">26</span><br>Opportunity Nearby
								</h1>
							</div>
							<div class="form-group" style="background: #D8652B; ">
								<div class="tender-tiles new-project-tile">
								<h2><a href="{{ url('/winwork') }}">Win Work</a></h2>
								</div>
							</div>
							<div class="col-sm-6 tab1">
								<div class="tender-tiles new-project-tile" style="background: #D8652B; padding: 2px; color: #fff; text-align: center; font-size: 20px;     padding-top: 20px; padding-bottom: 14px;">
									<h3><a href="{{ url('/winwork/pds') }}">Request for Proposal</a></h3>
								</div>
								<table >
									<tr class="col-sm-3">
										<div class="ex3">
											<p style="font-weight: bold; font-size: 20px; border-top: 2px black solid;padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #D8652B;">0</span> hours <span style="color: #D8652B;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #D8652B;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #D8652B;">23</span> hours <span style="color: #D8652B;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #D8652B;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #D8652B;">0</span> hours <span style="color: #D8652B;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #D8652B;">14/08/2018</span></p>
										</div>
									</tr>
								</table>
							</div>
							<div class="col-sm-6 tab2 pull-right">
								<div class="tender-tiles new-project-tile" style="background: #D8652B; padding: 2px; color: #fff; text-align: center; font-size: 20px;     padding-top: 20px; padding-bottom: 14px;">
									<h3><a href="{{ url('/winwork/pds') }}">Saved Opportunities</a> </h3>
								</div>
								<table >
									<tr class="col-sm-3">
										<div class="ex3">
											<p style="font-weight: bold; font-size: 20px; border-top: 2px black solid;padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #D8652B;">0</span> hours <span style="color: #D8652B;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #D8652B;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #D8652B;">23</span> hours <span style="color: #D8652B;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #D8652B;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #D8652B;">0</span> hours <span style="color: #D8652B;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #D8652B;">14/08/2018</span></p>
										</div>
									</tr>
								</table>
							</div>
							<div class="col-sm-6 tab1">
								<div class="tender-tiles new-project-tile" style="background: #D8652B; padding: 2px; color: #fff; text-align: center; font-size: 20px;     padding-top: 20px;    margin-top: 15px; padding-bottom: 14px;">
									<h3><a href="{{ url('/winwork/pds/bid') }}">Active</a> </h3>
								</div>
								<table >
									<tr class="col-sm-3">
										<div class="ex3">
											<p style="font-weight: bold; font-size: 20px; border-top: 2px black solid;padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #D8652B;">0</span> hours <span style="color: #D8652B;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #D8652B;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #D8652B;">23</span> hours <span style="color: #D8652B;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #D8652B;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #D8652B;">0</span> hours <span style="color: #D8652B;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #D8652B;">14/08/2018</span></p>
										</div>
									</tr>
								</table>
							</div>
							<div class="col-sm-6 tab2">
								<div class="tender-tiles new-project-tile" style="background: #D8652B; padding: 2px; color: #fff; text-align: center; font-size: 20px;     padding-top: 20px;    margin-top: 15px; padding-bottom: 14px;">
									<h3><a href="{{ url('/winwork/pds/bid') }}">Drafted</a> </h3>
								</div>
								<table >
									<tr class="col-sm-3 pull-right">
										<div class="ex3">
											<p style="font-weight: bold; font-size: 20px; border-top: 2px black solid;padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #D8652B;">0</span> hours <span style="color: #D8652B;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #D8652B;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #D8652B;">23</span> hours <span style="color: #D8652B;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #D8652B;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #D8652B;">0</span> hours <span style="color: #D8652B;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #D8652B;">14/08/2018</span></p>
										</div>
									</tr>
								</table>
							</div>
							<div class="col-sm-6 tab1">
								<div class="tender-tiles new-project-tile" style="background: #D8652B; padding: 2px; color: #fff; text-align: center; font-size: 20px;     padding-top: 20px;    margin-top: 15px; padding-bottom: 14px;">
									<h3><a href="{{ url('/winwork/pds/bid') }}">Successful</a> </h3>
								</div>
								<table >
									<tr class="col-sm-3">
										<div class="ex3">
											<p style="font-weight: bold; font-size: 20px; border-top: 2px black solid;padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #D8652B;">0</span> hours <span style="color: #D8652B;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #D8652B;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #D8652B;">0</span> hours <span style="color: #D8652B;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #D8652B;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #D8652B;">0</span> hours <span style="color: #D8652B;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #D8652B;">14/08/2018</span></p>
										</div>
									</tr>
								</table>
							</div>
							<div class="col-sm-6 tab2">
								<div class="tender-tiles new-project-tile" style="background: #D8652B; padding: 2px; color: #fff; text-align: center; font-size: 20px;     padding-top: 20px;     margin-top: 15px; padding-bottom: 14px;">
									<h3><a href="{{ url('/winwork/pds/bid') }}">Unsuccessful</a> </h3>
								</div>
								<table >
									<tr class="col-sm-3">
										<div class="ex3">
											<p style="font-weight: bold; font-size: 20px; border-top: 2px black solid;padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #D8652B;">0</span> hours <span style="color: #D8652B;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #D8652B;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #D8652B;">0</span> hours <span style="color: #D8652B;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #D8652B;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #D8652B;">0</span> hours <span style="color: #D8652B;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #D8652B;">14/08/2018</span></p>
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




