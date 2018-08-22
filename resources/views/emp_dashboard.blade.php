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
						<div class="shadow-wrapper">
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
						<div class="shadow-wrapper">
							<div class="panel-group pip" id="accordi">
								<div class="panel">
									<div id="collapse6" class="panel-collapse collapse in">
										<div class="panel-body " style="height: 265px;">
										<div class="col-sm-9">
											<div class="angkol">
												<a href=""><h2>Increase<br>  Discount</h2></a>
											</div>
											<div class="ante">
												<a href=""><h2>Go<br>PRO+</h2></a>
											</div>
											    <div class="ate">
												<a href=""><h2>Top<br>Up</h2></a>
											</div>
											 <div class="">
												<input class="kuya" type="text" name="project" placeholder="Project Title">
											</div>
											 <div class="">
												<button class="button">Publish New Project</button>
											</div>
										</div>
										<div class="col-sm-3">
											 <div class="">
											 	<label>You have</label>
												<button class="button5">129</button>
												<label class="manghud">Tender Credits</label>
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
	</div>

	
	
	<!-- end -->



@endsection
