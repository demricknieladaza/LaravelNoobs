 @extends('layouts.master')

 @section('content')

	<div class="container-fluid below-header">
	</div>

	<div class="container-fluid lounge-wrapper">
		<div class="row">
			@include('sidemenu')
			<div class="col-sm-10 col-sm-offset-2 lounge-main">
				<div class="row">
					<div class="col-sm-12 lounge-header">
						<span>Employer Dashboard</span>
						<button class="btn btn-warning pull-right">Print this report</button>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 lounge-action">
						<div class="shadow-wrapper shadow-wrappernigids">
							<div class="panel-group" id="accordion1">
								<div class="panel">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a >Actions Required <span class="badge">2</span> <span class="pull-right"></span></a>
										</h4>
									</div>
									<div id="collapse5" class="panel-collapse collapse in">
										<div class="panel-body">
											<table style="table-layout: fixed;" class="table table-striped table-hover">
												<thead>
													<tr>
														<th style="color: black;">Project</th>
														<th style="color: black;">Issue</th>
														<th style="color: black;">Date Raised</th>
														<th style="color: black;">Date Required</th>
														<th style="color: black;">Action</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Canada Water Masterplan</td>
														<td>Request for information</td>
														<td>01 January 2018</td>
														<td>07 January 2018</td>
														<td><a style="    white-space: normal;" href="{{ url('/publish/project_dashboard') }}" class="btn btn-warning">
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
						<div class="shadow-wrapper col-cont shadow-wrappernigids">
							<div class="col-sm-8">
								<div class="row">
									<div class="col-sm-4">
										<div class="box">
											<p style="font-size: 1vw;">Increase Discount</p>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="box">
											<p style="font-size: 18px;">Go PRO+</p>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="box">
											<p>Top Up</p>
										</div>
									</div>
								</div>
								<div class="row" style="margin-top: 25px; padding-right: 10px; padding-left: 10px;">
									<div class="form-group">
										<input type="" name="" class="form-control" placeholder="Project Title" style="height: 40px; border: 3px solid black;">
									</div>
								</div>
								<div class="row" style="margin-top: 25px; padding-right: 10px; padding-left: 10px;">
									<div class="form-group">
										<button class="btn col-sm-12 pnp" style="height: 50px;"><strong>Publish New Project</strong></button>
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="titlehead">
									<h3>You have</h3>
								</div>
								<div class="titlebody">
									<div class="circ">
										<h3 style="padding: 40% 0;">129</h3>
									</div>
								</div>
								<div class="titlefooter">
									<h3>
										Tender Credits
									</h3>
								</div>
							</div>
						</div>
					</div>	
				</div>
					<div class="row" style="margin-top: 25px; ">
						<div class="col-sm-12">
							<div class="shadow-wrapper lounge-demo" style="padding-top: 30px;">
								<div class="form-group">
									<h4>Active Projects  <span class="badge">2</span></h4>
									<div class="row">
										<div class="hover-container-holder">
											<div class="tender-tile-single">
												<div class="tender-tiles">
													<h2><a href="{{ url('/publish/project_dashboard') }}">Canada Water Masterplan</a></h2>		
												</div>
											</div>
											<div class="tender-tile-single">
												<div class="tender-tiles">
													<h2><a href="{{ url('/publish/project_dashboard') }}">Canada Water Masterplan</a></h2>
												</div>
											</div>
											<div class="tender-tile-single">
												<div class="tender-tiles">
													<h2><a href="{{ url('/publish/project_dashboard') }}">Canada Water Masterplan</a></h2>
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
													<h2><a href="{{ url('/publish/project_dashboard') }}">Canada Water Masterplan</a></h2>		
												</div>
											</div>
											<div class="tender-tile-single">
												<div class="tender-tiles">
													<h2><a href="{{ url('/publish/project_dashboard') }}">Canada Water Masterplan</a></h2>
												</div>
											</div>
											<div class="tender-tile-single">
												<div class="tender-tiles">
													<h2><a href="{{ url('/publish/project_dashboard') }}">Canada Water Masterplan</a></h2>
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
			<div class="col-sm-10 col-sm-offset-2 lounge-main">
				
			</div>
		</div>
	</div>

	
	
	<!-- end -->



@endsection
