 @extends('layouts.master')

 @section('content')
	<style>
	.dropbtn {
	    color: white;
	    padding: 16px;
	    font-size: 16px;
	    border: none;
	}

	.dropdown {
	    position: relative;
	    display: inline-block;
	}

	.dropdown-content {
	    display: none;
	    position: relative;
	    background-color: #f1f1f1;
	    min-width: 160px;
	    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	    z-index: 1;
	    margin-bottom: 15px;
	}

	.dropdown-content a {
	    color: black;
	    padding: 12px 16px;
	    text-decoration: none;
	    display: block;
	}

	.dropdown:hover .dropdown-content {display: block;}

	.dropdown:hover {
		transform: scale(1.1);
	}
	</style>
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
					<div class="col-sm-6 lounge-action" style="background: transparent;">
						<div class="shadow-wrapper shadow-wrappernigids">
							<div class="panel-group" id="accordioned">
								<div class="panel">
									<div class="panel-heading">
										<h4 class="panel-title">
											<h4>Actions Required  <span class="project1">2</span></h4>
										</h4>
									</div>
									<div id="collapse5" class="panel-collapse collapse in">
										<div class="panel-body linya">
											<table style="table-layout: fixed;" class="scroll table table-striped">
												<thead>
													<tr>
														<th style="color: black;" class="centerAlign">Project</th>
														<th style="color: black;" class="centerAlign">Issue</th>
														<th style="color: black;" class="centerAlign">Date Raised</th>
														<th style="color: black; width: 24%;" class="centerAlign">Date Required</th>
														<th style="color: black;" class="centerAlign">Action</th>
													</tr>
												</thead>
												<tbody class="bodyscroll">
													<tr>
														<td class="centerAlign">Canada Water Masterplan</td>
														<td class="centerAlign">Request for information</td>
														<td class="centerAlign">01 January 2018</td>
														<td class="centerAlign">07 January 2018</td>
														<td class="centerAlign"><a style="white-space: normal;" href="{{ url('/publish/project_dashboard') }}" class="btn btn-warning">
															Deal now
														</a></td>
													</tr>
													<tr>
														<td class="centerAlign">Hounslow Place</td>
														<td class="centerAlign">Tenderer Feedback</td>
														<td class="centerAlign">01 January 2018</td>
														<td class="centerAlign">03 January 2018</td>
														<td class="centerAlign"><a style="white-space: normal;" href="#" class="btn btn-warning">
															Deal now
														</a></td>
													</tr>
													<tr>
														<td class="centerAlign">Canada Water Masterplan</td>
														<td class="centerAlign">Request for information</td>
														<td class="centerAlign">01 January 2018</td>
														<td class="centerAlign">07 January 2018</td>
														<td class="centerAlign"><a style="white-space: normal;" href="{{ url('/publish/project_dashboard') }}" class="btn btn-warning">
															Deal now
														</a></td>
													</tr>
													<tr>
														<td class="centerAlign">Hounslow Place</td>
														<td class="centerAlign">Tenderer Feedback</td>
														<td class="centerAlign">01 January 2018</td>
														<td class="centerAlign">03 January 2018</td>
														<td class="centerAlign"><a style="white-space: normal;" href="#" class="btn btn-warning">
															Deal now
														</a></td>
													</tr>
													<tr>
														<td class="centerAlign">Canada Water Masterplan</td>
														<td class="centerAlign">Request for information</td>
														<td class="centerAlign">01 January 2018</td>
														<td class="centerAlign">07 January 2018</td>
														<td class="centerAlign"><a style="white-space: normal;" href="{{ url('/publish/project_dashboard') }}" class="btn btn-warning">
															Deal now
														</a></td>
													</tr>
													<tr>
														<td class="centerAlign">Hounslow Place</td>
														<td class="centerAlign">Tenderer Feedback</td>
														<td class="centerAlign">01 January 2018</td>
														<td class="centerAlign">03 January 2018</td>
														<td class="centerAlign"><a style="white-space: normal;" href="#" class="btn btn-warning">
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
										<button class="btn col-sm-12 pnp" style="height: 50px;box-shadow: 5px 5px #888888;"><strong>Publish New Project</strong></button>
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
									<h4>Active Projects  <span class="project1">2</span></h4>
									<div class="row">
										<div class="hover-container-holder">
											<div class="tender-tile-single dropdown">
												<div class="tender-tiles thin dropbtn">
													<h2><a href="{{ url('/publish/project_dashboard') }}">Canada Water Masterplan</a></h2>		
												</div>
												<div class="dropdown-content">
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
											<div class="tender-tile-single dropdown">
												<div class="tender-tiles thin dropbtn">
													<h2><a href="{{ url('/publish/project_dashboard') }}">Canada Water Masterplan</a></h2>
												</div>
												<div class="dropdown-content">
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
											<div class="tender-tile-single dropdown">
												<div class="tender-tiles thin dropbtn">
													<h2><a href="{{ url('/publish/project_dashboard') }}">Canada Water Masterplan</a></h2>
												</div>
												<div class="dropdown-content">
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
								<div class="form-group">
									<h4>Closed Projects  <span class="project1">2</span></h4>
									<div class="row">
										<div class="hover-container-holder">
											<div class="tender-tile-single dropdown">
												<div class="tender-tiles thin dropbtn">
													<h2><a href="{{ url('/publish/project_dashboard') }}">Canada Water Masterplan</a></h2>
												</div>
												<div class="dropdown-content">
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
											<div class="tender-tile-single dropdown">
												<div class="tender-tiles thin dropbtn">
													<h2><a href="{{ url('/publish/project_dashboard') }}">Canada Water Masterplan</a></h2>
												</div>
												<div class="dropdown-content">
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
											<div class="tender-tile-single dropdown">
												<div class="tender-tiles thin dropbtn">
													<h2><a href="{{ url('/publish/project_dashboard') }}">Canada Water Masterplan</a></h2>
												</div>
												<div class="dropdown-content">
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
			</div>
			<div class="col-sm-10 col-sm-offset-2 lounge-main">
				
			</div>
		</div>
	</div>

	
	<script type="text/javascript"></script>
	<!-- end -->



@endsection
