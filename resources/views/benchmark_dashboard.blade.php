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
						<span>Benchmarking</span>
						<button class="btn btn-warning pull-right">Print this report</button>
					</div>
				</div>
				<div class="benchmark-head">					
					<select name="service" class="my-select-form" id="selectservice">
				                             <option value="" disabled selected>Select Service
													<option>Architect</option>
													<option>Sturctural Engineer</option>
													<option>Service Engineer</option>
													<option>Fire Engineer</option>
													<option>Acoustic Engineer</option>
													<option>Principal Designer</option>
													<option>Fascade Engineer</option>
													<option>Building Control</option>
													<option>Lighting Consultant</option>
													<option>Security Consultant</option>
													<option>Plannning Consultant</option>
													<option>Sustainability Consultant</option>
													<option>BIM Consultant</option>
													<option>Quantity Survueyor</option>
													<option>Project Manager</option>
													<option>Project Manager</option>
													<option>Other</option>
					</select>
					<select name="service" class="my-select-form" id="selectlocation">
						<option value="0">Location</option>
						<option>Location 1</option>
						<option>Location 2</option>
						<option>Location 3</option>
						<option>Location 4</option>
					</select>
					<a href="#" class="btn btn-default apply-dash-filter" id="cvalues-btn">Construction Value &nbsp<i class="fa fa-caret-down"></i></a>
					<div class="dropdown-filter">
						<input type="text" name="cvaluefrom" class="my-select-form drop-cvalue" placeholder="From">
						<input type="text" name="cvalueto" class="my-select-form drop-cvalue" placeholder="To">
					</div>
					<select name="service" class="my-select-form" id="selecttype">
						<option value="" disabled selected>Select Type of Use
													<option>Residential</option>
													<option>Commercial </option>
													<option>Retail</option>
													<option>Leisure</option>
													<option>Sports and Venues</option>
													<option>Hotel</option>
													<option>Industrial</option>
													<option>Education</option>
													<option>Healthcare</option>
													<option>Defence</option>
													<option>Aviation</option>
													<option>Highways</option>
													<option>Bridges</option>
													<option>Rail</option>
													<option>Water</option>
													<option>Oil,Gas and Chemical</option>
					</select>
					<button class="btn btn-warning apply-dash-filter">Apply</button>
				</div>
				<div class="benchmark-dashboard">
					<div class="col-sm-12">
						<table class="table table-striped table-hover">
							<thead>
								<tr>
									<th>RIBA STAGE</th>
									<th>Lowest Fee</th>
									<th>Highest Fee</th>
									<th>Average Fee</th>
									<th>Percentage of Construction Value</th>
									<th>Share of Total Fee</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>0</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Percentage</td>
									<td>Percentage</td>
								</tr>
								<tr>
									<td>1</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Percentage</td>
									<td>Percentage</td>
								</tr>
								<tr>
									<td>2</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Percentage</td>
									<td>Percentage</td>
								</tr>
								<tr>
									<td>3</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Percentage</td>
									<td>Percentage</td>
								</tr>
								<tr>
									<td>4</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Percentage</td>
									<td>Percentage</td>
								</tr>
								<tr>
									<td>5</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Percentage</td>
									<td>Percentage</td>
								</tr>
								<tr>
									<td>6</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Percentage</td>
									<td>Percentage</td>
								</tr>
								<tr>
									<td>7</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Percentage</td>
									<td>Percentage</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="benchmark-dashboard">
					<h3><span>Dataset</span></h3>
					<div class="col-sm-12">						
						<table class="table table-striped table-hover">
							<thead style="color:black;">
								<tr>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
									<th style="text-align: right;">RIBA</th>
									<th style="text-align: left;">Stages</th>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
								</tr>
								<tr>
									<th>Project ID</th>
									<th>Location</th>
									<th>Construction Value</th>
									<th>0</th>
									<th>1</th>
									<th>2</th>
									<th>3</th>
									<th>4</th>
									<th>5</th>
									<th>6</th>
									<th>7</th>
									<th>Average Fee</th>
									<th>Scope of Service</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>00000</td>
									<td>Location</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td></td>
								</tr>
								<tr>
									<td>00001</td>
									<td>Location</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td></td>
								</tr>
								<tr>
									<td>00002</td>
									<td>Location</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td></td>
								</tr>
								<tr>
									<td>00003</td>
									<td>Location</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td></td>
								</tr>
								<tr>
									<td>00004</td>
									<td>Location</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td>Amount</td>
									<td></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>		
			</div>
		</div>
	</div>

	
	
	<!-- end -->

	
@endsection


