@extends('layouts.master')

@section('content')

	<div class="container search_filter wow fadeInDown" data-wow-duration="1s" data-wow-delay="200ms">
		<div class="row top-row">
			<form method="post">
				<div class="col-sm-10">
					<div class="row">
						<div class="col-sm-8">
							<input type="text" name="search" class="form-control project_search" placeholder="Search for a Project">
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
					<button style="background-color: #FE7235;border-color:#FE7235;border-radius:6px; " class="btn btn-lg btn-primary">Search</button>
				</div>
			</form>
		</div>
	</div>

	<div class="container publish-project-outer-page">
		<div class="row">			
			<div class="form-group">
				<div class="row">
					<div class="hover-container-holder">
						<div class="tender-tile-single">
							<div class="scaslerni tender-tiles new-project-tile hover-tile">
								<h2><a href="{{ url('/publish/project_dashboard') }}" style="">Publish<br> New<br> Project</a></h2>
							</div>
						</div>
						<div class="tender-tile-single">
							<div class="tender-tiles">
								<h2><a href="#">Canada Water Masterplan</a></h2>
								<div class="row table-tender-details">
									<div class="col-sm-6 table-left">
										<table class="table table-hover table-striped">
											<thead>
												<tr>
													<th>Active Tenders</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><a style="color: black;" href="{{ url('/publish/canada_hover') }}">
													Fire Engineer</a></td>
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
													<th>Drafted Tenders</th>
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
						<div class="tender-tile-single">
							<div class="tender-tiles">
								<h2><a href="#">Canada Water Masterplan</a></h2>
								<div class="row table-tender-details">
									<div class="col-sm-6 table-left">
										<table class="table table-hover table-striped">
											<thead>
												<tr>
													<th>Active Tenders</th>
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
													<th>Drafted Tenders</th>
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
						<div class="tender-tile-single">
							<div class="tender-tiles">
								<h2><a href="#">Canada Water Masterplan</a></h2>
								<div class="row table-tender-details">
									<div class="col-sm-6 table-left">
										<table class="table table-hover table-striped">
											<thead>
												<tr>
													<th>Active Tenders</th>
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
													<th>Drafted Tenders</th>
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

@endsection