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
						<a href="#" class="menu-title policies-link">Policies </a>			          
					</li>									
				</ul>
			</div>
			<div class="col-sm-10 col-sm-offset-2 lounge-main">
				<div class="row">
					<div class="col-sm-12 lounge-header">
						<span>Employer Dashboard</span>
						<button class="btn btn-warning pull-right">Print this report</button>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 lounge-action">
						<div class="shadow-wrapper">
							<div class="panel-group" id="accordion1">
								<div class="panel">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion1" href="#collapse5">Actions Required <span class="badge">2</span> <span class="pull-right caret"></span></a>
										</h4>
									</div>
									<div id="collapse5" class="panel-collapse collapse in">
										<div class="panel-body">
											<table style="table-layout: fixed;" class="table table-striped table-hover">
												<thead>
													<tr>
														<th>Project</th>
														<th>Issue</th>
														<th>Date Raised</th>
														<th>Date Required</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Canada Water Masterplan</td>
														<td>Request for information</td>
														<td>01 January 2018</td>
														<td>07 January 2018</td>
														<td><a style="    white-space: normal;" href="{{ url('/dashboard') }}" class="btn btn-warning">
															Deal now
														</a></td>
													</tr>
													<tr>
														<td>Hounslow Place</td>
														<td>Tenderer Feedback</td>
														<td>01 January 2018</td>
														<td>03 January 2018</td>
														<td><a style="    white-space: normal;" href="#" class="btn btn-warning">
															Deal now
														</a></td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>	
					</div>
					<div class="col-sm-6 lounge-action">
						<div class="shadow-wrapper">
							<div class="panel-group" id="accordion1">
								<div class="panel">
									
									<div id="collapse6" class="panel-collapse collapse in">
										<div class="panel-body" style="height: 265px;">
										<h6 style="font-size: 75px; margin-top:80px; "> New Section</h6>
										</div>
									</div>
								</div>
							</div>
						</div>	
					</div>
				</div>			
			</div>
			<div class="col-sm-10 col-sm-offset-2 lounge-main">
				<div class="row">
					<div class="col-sm-12">
						<div class="shadow-wrapper lounge-demo">
							<div class="form-group">
								<a href="#collapse1">Bid New Project <span class="btn btn-warning remaining-tenders">Remaining Tender Credits 2</span></a>
							</div>
							<div class="form-group">
								<h4>Active Projects  <span class="badge">2</span></h4>
								<div class="row">
									<div class="hover-container-holder">
										<div class="tender-tile-single">
											<div class="tender-tiles">
												<h2><a href="{{ url('/dashboard') }}">Canada Water Masterplan</a></h2>		
											</div>
										</div>
										<div class="tender-tile-single">
											<div class="tender-tiles">
												<h2><a href="{{ url('/dashboard') }}">Canada Water Masterplan</a></h2>
											</div>
										</div>
										<div class="tender-tile-single">
											<div class="tender-tiles">
												<h2><a href="{{ url('/dashboard') }}">Canada Water Masterplan</a></h2>
											</div>
										</div>
										<div class="row table-tender-details">
											<div class="col-sm-6 table-left">
												<table class="table table-hover table-striped">
													<thead>
														<tr>
															<th>Active Projects</th>
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
															<th>Drafted Projects</th>
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
							<div class="form-group">
								<h4>Closed Projects  <span class="badge">2</span></h4>
								<div class="row">
									<div class="hover-container-holder">
										<div class="tender-tile-single">
											<div class="tender-tiles">
												<h2><a href="{{ url('/dashboard') }}">Canada Water Masterplan</a></h2>		
											</div>
										</div>
										<div class="tender-tile-single">
											<div class="tender-tiles">
												<h2><a href="{{ url('/dashboard') }}">Canada Water Masterplan</a></h2>
											</div>
										</div>
										<div class="tender-tile-single">
											<div class="tender-tiles">
												<h2><a href="{{ url('/dashboard') }}">Canada Water Masterplan</a></h2>
											</div>
										</div>
										<div class="row table-tender-details">
											<div class="col-sm-6 table-left">
												<table class="table table-hover table-striped">
													<thead>
														<tr>
															<th>Active Projects</th>
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
															<th>Drafted Projects</th>
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
		</div>
	</div>

	
	
	<!-- end -->



@endsection
