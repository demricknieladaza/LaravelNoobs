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
						<span>Company Information</span>
						<button class="btn btn-warning pull-right">Print Company Information</button>
					</div>
				</div>
				<div class="row">					
					<div class="col-sm-12">
						<div class="shadow-wrapper">
							<h3 class="org-head">Individuals <a href="{{ url('/dashboard/comp_indi') }}" class="btn btn-warning">Edit</a></h3>
							<div class="clearfix"></div>
							<div class="row">	
								<div class="col-sm-9">				
										<table class="table table-striped table-hover">
											<tr>
												<td>Employer</td>
												<td>British Land</td>
											</tr>
											<tr>
												<td>Registered Office Address</td>
												<td>100 Sample Road, London, W1 23Y, United Kingdom</td>
											</tr>
											<tr>
												<td>Industry</td>
												<td>Developer</td>
											</tr>
											<tr>
												<td>Year Established</td>
												<td>1955</td>
											</tr>
											<tr>
												<td>Number of Employees</td>
												<td>10-50</td>
											</tr>
										</table>
								</div>
								<div class="col-sm-3 company-quick-details">
										<p><img src="{{ url('images/logo-british.jpg') }}"></p>
										<p>Active Projects <span class="badge">4</span></p>
										<p>Active Tenders <span class="badge">9</span></p>
										<p>Status 
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</p>
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


