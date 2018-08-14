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
						<span style="color: #D8652B;">Policies</span>
						<button class="btn btn-warning pull-right">Print Policies</button>
					</div>
				</div>
				<div class="row">					
					<div class="col-sm-12">
						<div class="shadow-wrapper">
							<div class="panel-group" id="accordion1">
								<div class="panel">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion2" href="#collapse6">Terms &amp; Conditions<span class="pull-right caret"></span></a>
										</h4>
									</div>
									<div id="collapse6" class="panel-collapse collapse in">
										<div class="panel-body">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
											quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
											consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
											cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
											proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
										</div>
									</div>
								</div>
								<div class="panel">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion2" href="#collapse7">Data Protection <span class="pull-right caret"></span></a>
										</h4>
									</div>
									<div id="collapse7" class="panel-collapse collapse">
										<div class="panel-body">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
											quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
											consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
											cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
											proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
										</div>
									</div>
								</div>
								<div class="panel">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion2" href="#collapse8">Cookies <span class="pull-right caret"></span></a>
										</h4>
									</div>
									<div id="collapse8" class="panel-collapse collapse">
										<div class="panel-body">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
											quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
											consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
											cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
											proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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