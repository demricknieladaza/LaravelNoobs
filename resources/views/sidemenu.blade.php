<div class="col-sm-2 lounge-menu">
	<div class="row">
		<div class="lounge-title">
			<h2>Scope<br> Business Lounge</h2>
		</div>
	</div>
	<div class="clearfix"></div>
	<ul class="nav lounge-nav">
		<li>
			<a href="#" class="menu-title ">Dashboards</a>
			<ul>
				<li><a href="{{ url('/dashboard/emp_dashboard') }}"><i class="fa fa-circle-o"></i> Employer Dashboard</a></li>
				<li><a href="{{ url('/dashboard/tend_dashboard') }}"><i class="fa fa-circle-o"></i> Tenderer Dashboard</a></li>
				<li><a href="{{ url('/dashboard/benchmark_dashboard') }}"><i class="fa fa-circle-o"></i> Benchmarking</a></li>
			</ul>
		</li>
		
		<li>
			<a href="#" class="menu-title ">My Profile</a>
			<ul>
				<li><a href="{{ url('/dashboard/organisation') }}/{{ Session::get("id") }}"><i class="fa fa-circle-o"></i> Organisation</a></li>
				<li><a href="{{ url('/dashboard/individuals') }}/{{ Session::get("id") }}"><i class="fa fa-circle-o"></i> Individuals</a></li>
				<li><a href="{{ url('/dashboard/users') }}"><i class="fa fa-circle-o"></i> Users</a></li>
				<li><a href="{{ url('/dashboard/membership') }}"><i class="fa fa-circle-o"></i> Membership</a></li>
			</ul>
		</li>
		<li>
			<a href="{{ url('/dashboard/policies') }}" class="menu-title policies-link">Policies </a>			          
		</li>									
	</ul>
</div>