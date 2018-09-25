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
													<option>Structural Engineer</option>
													<option>Service Engineer</option>
													<option>Fire Engineer</option>
													<option>Acoustic Engineer</option>
													<option>Principal Designer</option>
													<option>Fascade Engineer</option>
													<option>Building Control</option>
													<option>Lighting Consultant</option>
													<option>Security Consultant</option>
													<option>Planning Consultant</option>
													<option>Sustainability Consultant</option>
													<option>BIM Consultant</option>
													<option>Quantity Surveyor</option>
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
						<table class="imomama">
							<thead style="color:black;">
								<tr>
									<b style="margin-left: 49%; font-size: 14px;"> RIBA  STAGES</b> 
								</tr>
								<tr class="imomama">
									<th>Project ID</th>
									<th>Location</th>
									<th>Construction Value</th>
								    <th class="ribs tender">0</th>
								    <th  class="ribs">1</th>
								    <th  class="ribs">2</th>
								    <th  class="ribs">3</th>
								    <th  class="ribs">4</th>
								    <th  class="ribs">5</th>
								    <th  class="ribs">6</th>
								    <th class="ribs backribs">7</th>

    									
							
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
				<!-- <div class="clearfix"></div> -->
				<div class="benchmark-dashboard">
					<div class="col-sm-12" style="padding-top: 15px;">
						<div class="row" style="background: #FE7235;color: #fff;padding: 5px;text-align: center;">
							<div class="col-sm-4">
								<div class="row">
								<div class="col-sm-6 waspad bordright">
									Factors
								</div>
								<div class="col-sm-6 waspad bordright">
									Importance
								</div>
								</div>
							</div>		
							<div class="col-sm-4">
								<div class="row">
								<div class="col-sm-6 waspad bordright">
									Factors
								</div>
								<div class="col-sm-6 waspad bordright">
									Importance
								</div>
								</div>						
							</div>	
							<div class="col-sm-4">
								<div class="row">
								<div class="col-sm-6 waspad bordright">
									Factors
								</div>
								<div class="col-sm-6 waspad">
									Importance
								</div>
								</div>
							</div>
						</div>	
						<div class="row" style="text-align: left; padding: 5px;">
							<div class="col-sm-12" style="border-bottom: 1px solid #FE7235; white-space: nowrap;box-shadow: none;padding: 0px 0px; border-left: 1px solid #FE7235;">
							<div class="col-sm-4 bordsatanan">
								<div class="row">
								<div class="col-sm-6 waspad ">
									Qualitative
								</div>
								<div class="col-sm-6 waspad backni ">
									<input type="text" name="qualitative" class="inputni" placeholder="30%">
								</div>
								</div>
							</div>	
							<div class="col-sm-4 bordsatanan">
								<div class="row">
								<div class="col-sm-6 waspad ">
									Organisation
								</div>
								<div class="col-sm-6 waspad backni">
									<input type="text" name="orga" class="inputni" placeholder="30%">
								</div>
								</div>						
							</div>	
							<div class="col-sm-4 bordsatanan">
								<div class="row">
								<div class="col-sm-6 waspad ">
									Project experience
								</div>
								<div class="col-sm-6 waspad backni">
									<input type="text" name="proj_experience" class="inputni">
								</div>
								</div>
							</div>
							</div>
							<div class="col-sm-12" style="white-space: nowrap;box-shadow: none;padding: 0px 0px; border-left: 1px solid #FE7235;">
							<div class="col-sm-4">
								<div class="row">
								<div class="col-sm-6 waspad ">
									
								</div>
								<div class="col-sm-6 waspad ">
									
								</div>
								</div>
							</div>	
							<div class="col-sm-4 lefty">
								<div class="row">
								<div class="col-sm-6 waspad ">
									
								</div>
								<div class="col-sm-6 waspad ">
								
								</div>
								</div>						
							</div>	
							<div class="col-sm-4 bordsatanan">
								<div class="row">
								<div class="col-sm-6 waspad ">
									Variety of services
								</div>
								<div class="col-sm-6 waspad backni">
									<input type="text" name="variety_service" class="inputni">
								</div>
								</div>
							</div>
							</div>
							<div class="col-sm-12" style="white-space: nowrap;box-shadow: none;padding: 0px 0px; border-left: 1px solid #FE7235;">
							<div class="col-sm-4">
								<div class="row">
								<div class="col-sm-6 waspad ">
									
								</div>
								<div class="col-sm-6 waspad ">
									
								</div>
								</div>
							</div>	
							<div class="col-sm-4 lefty">
								<div class="row">
								<div class="col-sm-6 waspad ">
									
								</div>
								<div class="col-sm-6 waspad ">
								
								</div>
								</div>						
							</div>	
							<div class="col-sm-4 bordsatanan">
								<div class="row">
								<div class="col-sm-6 waspad ">
									Awards
								</div>
								<div class="col-sm-6 waspad backni">
									<input type="text" name="awardst" class="inputni">
								</div>
								</div>
							</div>
							</div>
							<div class="col-sm-12" style="white-space: nowrap;box-shadow: none;padding: 0px 0px; border-left: 1px solid #FE7235;">
							<div class="col-sm-4">
								<div class="row">
								<div class="col-sm-6 waspad ">
									
								</div>
								<div class="col-sm-6 waspad ">
									
								</div>
								</div>
							</div>	
							<div class="col-sm-4 lefty">
								<div class="row">
								<div class="col-sm-6 waspad ">
									
								</div>
								<div class="col-sm-6 waspad ">
								
								</div>
								</div>						
							</div>	
							<div class="col-sm-4 bordsatanan">
								<div class="row">
								<div class="col-sm-6 waspad ">
									Accreditaions
								</div>
								<div class="col-sm-6 waspad backni">
									<input type="text" name="accredit" class="inputni">
								</div>
								</div>
							</div>
							</div>
							<div class="col-sm-12" style="white-space: nowrap;box-shadow: none;padding: 0px 0px; border-left: 1px solid #FE7235;">
							<div class="col-sm-4">
								<div class="row">
								<div class="col-sm-6 waspad ">
									
								</div>
								<div class="col-sm-6 waspad ">
									
								</div>
								</div>
							</div>	
							<div class="col-sm-4 lefty">
								<div class="row">
								<div class="col-sm-6 waspad ">
									
								</div>
								<div class="col-sm-6 waspad ">
								
								</div>
								</div>						
							</div>	
							<div class="col-sm-4 bordsatanan">
								<div class="row">
								<div class="col-sm-6 waspad ">
									Relationship to employer
								</div>
								<div class="col-sm-6 waspad backni">
									<input type="text" name="relation_emp" class="inputni">
								</div>
								</div>
							</div>
							</div>
							<div class="col-sm-12" style="white-space: nowrap;box-shadow: none;padding: 0px 0px; border-left: 1px solid #FE7235;">
							<div class="col-sm-4">
								<div class="row">
								<div class="col-sm-6 waspad ">
									
								</div>
								<div class="col-sm-6 waspad ">
									
								</div>
								</div>
							</div>	 
							<div class="col-sm-4 lefty">
								<div class="row">
								<div class="col-sm-6 waspad ">
									
								</div>
								<div class="col-sm-6 waspad ">
								
								</div>
								</div>						
							</div>	
							<div class="col-sm-4 bordsatanan">
								<div class="row">
								<div class="col-sm-6 waspad ">
									<strong>Total</strong>
								</div>
								<div class="col-sm-6 waspad backni">
									<strong><input type="text" name="total1" class="inputni" placeholder="100%"></strong>
								</div>
								</div>
							</div>
							</div>
							<div class="col-sm-12" style="white-space: nowrap;box-shadow: none;padding: 0px 0px; border-left: 1px solid #FE7235;">
							<div class="col-sm-4">
								<div class="row">
								<div class="col-sm-6 waspad ">
									
								</div>
								<div class="col-sm-6 waspad ">
									
								</div>
								</div>
							</div>	
							<div class="col-sm-4 bordsatanan lefty" style="border-bottom: 1px solid #FE7235;">
								<div class="row">
								<div class="col-sm-6 waspad ">
									Individuals
								</div>
								<div class="col-sm-6 waspad backni">
									<input type="text" name="individuals" class="inputni" placeholder="70%">
								</div>
								</div>						
							</div>	
							<div class="col-sm-4 bordsatanan">
								<div class="row">
								<div class="col-sm-6 waspad ">
									Project experience
								</div>
								<div class="col-sm-6 waspad backni">
									<input type="text" name="proj_experience2" class="inputni">
								</div>
								</div>
							</div>
							</div>
							<div class="col-sm-12" style="white-space: nowrap;box-shadow: none;padding: 0px 0px; border-left: 1px solid #FE7235;">
							<div class="col-sm-4">
								<div class="row">
								<div class="col-sm-6 waspad ">
									
								</div>
								<div class="col-sm-6 waspad ">
									
								</div>
								</div>
							</div>	
							<div class="col-sm-4 lefty">
								<div class="row">
								<div class="col-sm-6 waspad ">
									
								</div>
								<div class="col-sm-6 waspad ">
								
								</div>
								</div>						
							</div>	
							<div class="col-sm-4 bordsatanan">
								<div class="row">
								<div class="col-sm-6 waspad ">
									Years of relevant experience
								</div>
								<div class="col-sm-6 waspad backni">
									<input type="text" name="years_experience" class="inputni">
								</div>
								</div>
							</div>
							</div>
							<div class="col-sm-12" style="white-space: nowrap;box-shadow: none;padding: 0px 0px; border-left: 1px solid #FE7235;">
							<div class="col-sm-4">
								<div class="row">
								<div class="col-sm-6 waspad ">
									
								</div>
								<div class="col-sm-6 waspad ">
									
								</div>
								</div>
							</div>	
							<div class="col-sm-4 lefty">
								<div class="row">
								<div class="col-sm-6 waspad ">
									
								</div>
								<div class="col-sm-6 waspad ">
								
								</div>
								</div>						
							</div>	
							<div class="col-sm-4 bordsatanan">
								<div class="row">
								<div class="col-sm-6 waspad ">
									Industry experience
								</div>
								<div class="col-sm-6 waspad backni">
									<input type="text" name="industry_experience" class="inputni">
								</div>
								</div>
							</div>
							</div>
							<div class="col-sm-12" style="white-space: nowrap;box-shadow: none;padding: 0px 0px; border-left: 1px solid #FE7235;">
							<div class="col-sm-4">
								<div class="row">
								<div class="col-sm-6 waspad ">
									
								</div>
								<div class="col-sm-6 waspad ">
									
								</div>
								</div>
							</div>	
							<div class="col-sm-4 lefty">
								<div class="row">
								<div class="col-sm-6 waspad ">
									
								</div>
								<div class="col-sm-6 waspad ">
								
								</div>
								</div>						
							</div>	
							<div class="col-sm-4 bordsatanan">
								<div class="row">
								<div class="col-sm-6 waspad ">
									Awards
								</div>
								<div class="col-sm-6 waspad backni">
									<input type="text" name="awardst2" class="inputni">
								</div>
								</div>
							</div>
							</div>
							<div class="col-sm-12" style="white-space: nowrap;box-shadow: none;padding: 0px 0px; border-left: 1px solid #FE7235;">
							<div class="col-sm-4">
								<div class="row">
								<div class="col-sm-6 waspad ">
									
								</div>
								<div class="col-sm-6 waspad ">
									
								</div>
								</div>
							</div>	
							<div class="col-sm-4 lefty">
								<div class="row">
								<div class="col-sm-6 waspad ">
									
								</div>
								<div class="col-sm-6 waspad ">
								
								</div>
								</div>						
							</div>	
							<div class="col-sm-4 bordsatanan">
								<div class="row">
								<div class="col-sm-6 waspad ">
									Accreditations
								</div>
								<div class="col-sm-6 waspad backni">
									<input type="text" name="accredit2" class="inputni">
								</div>
								</div>
							</div>
							</div>
							<div class="col-sm-12" style="white-space: nowrap;box-shadow: none;padding: 0px 0px; border-left: 1px solid #FE7235;">
							<div class="col-sm-4">
								<div class="row">
								<div class="col-sm-6 waspad ">
									
								</div>
								<div class="col-sm-6 waspad ">
									
								</div>
								</div>
							</div>	
							<div class="col-sm-4 lefty">
								<div class="row">
								<div class="col-sm-6 waspad ">
									
								</div>
								<div class="col-sm-6 waspad ">
								
								</div>
								</div>						
							</div>	
							<div class="col-sm-4 bordsatanan">
								<div class="row">
								<div class="col-sm-6 waspad ">
									Relationship to employer
								</div>
								<div class="col-sm-6 waspad backni">
									<input type="text" name="relation_emp2" class="inputni">
								</div>
								</div>
							</div>
							</div>
							<div class="col-sm-12" style="white-space: nowrap;box-shadow: none;padding: 0px 0px; border-left: 1px solid #FE7235;">
							<div class="col-sm-4">
								<div class="row">
								<div class="col-sm-6 waspad ">
									
								</div>
								<div class="col-sm-6 waspad ">
									
								</div>
								</div>
							</div>	
							<div class="col-sm-4 lefty">
								<div class="row">
								<div class="col-sm-6 waspad ">
									
								</div>
								<div class="col-sm-6 waspad ">
								
								</div>
								</div>						
							</div>	
							<div class="col-sm-4 bordsatanan">
								<div class="row">
								<div class="col-sm-6 waspad ">
									Communication Skills
								</div>
								<div class="col-sm-6 waspad backni">
									<input type="text" name="com_skills" class="inputni">
								</div>
								</div>
							</div>
							</div>
							<div class="col-sm-12" style="white-space: nowrap;box-shadow: none;padding: 0px 0px; border-left: 1px solid #FE7235;">
							<div class="col-sm-4">
								<div class="row">
								<div class="col-sm-6 waspad ">
									
								</div>
								<div class="col-sm-6 waspad ">
									
								</div>
								</div>
							</div>	
							<div class="col-sm-4 lefty">
								<div class="row">
								<div class="col-sm-6 waspad ">
									
								</div>
								<div class="col-sm-6 waspad ">
								
								</div>
								</div>						
							</div>	
							<div class="col-sm-4 bordsatanan">
								<div class="row">
								<div class="col-sm-6 waspad ">
									People management
								</div>
								<div class="col-sm-6 waspad backni">
									<input type="text" name="people_manage" class="inputni">
								</div>
								</div>
							</div>
							</div>
							<div class="col-sm-12" style="white-space: nowrap;box-shadow: none;padding: 0px 0px; border-left: 1px solid #FE7235;">
							<div class="col-sm-4">
								<div class="row">
								<div class="col-sm-6 waspad ">
									
								</div>
								<div class="col-sm-6 waspad ">
									
								</div>
								</div>
							</div>	
							<div class="col-sm-4 lefty">
								<div class="row">
								<div class="col-sm-6 waspad ">
									
								</div>
								<div class="col-sm-6 waspad ">
								
								</div>
								</div>						
							</div>	
							<div class="col-sm-4 bordsatanan">
								<div class="row">
								<div class="col-sm-6 waspad ">
									Time management
								</div>
								<div class="col-sm-6 waspad backni">
									<input type="text" name="time_manage" class="inputni">
								</div>
								</div>
							</div>
							</div>
							<div class="col-sm-12" style="white-space: nowrap;box-shadow: none;padding: 0px 0px; border-left: 1px solid #FE7235;">
							<div class="col-sm-4">
								<div class="row">
								<div class="col-sm-6 waspad ">
									
								</div>
								<div class="col-sm-6 waspad ">
									
								</div>
								</div>
							</div>	
							<div class="col-sm-4 lefty">
								<div class="row">
								<div class="col-sm-6 waspad ">
									
								</div>
								<div class="col-sm-6 waspad ">
								
								</div>
								</div>						
							</div>	
							<div class="col-sm-4 bordsatanan">
								<div class="row">
								<div class="col-sm-6 waspad ">
									Pro-active
								</div>
								<div class="col-sm-6 waspad backni">
									<input type="text" name="pro_active" class="inputni">
								</div>
								</div>
							</div>
							</div>
							<div class="col-sm-12" style="white-space: nowrap;box-shadow: none;padding: 0px 0px; border-left: 1px solid #FE7235;">
							<div class="col-sm-4">
								<div class="row">
								<div class="col-sm-6 waspad ">
									
								</div>
								<div class="col-sm-6 waspad ">
									
								</div>
								</div>
							</div>	
							<div class="col-sm-4 lefty">
								<div class="row">
								<div class="col-sm-6 waspad ">
									
								</div>
								<div class="col-sm-6 waspad ">
								
								</div>
								</div>						
							</div>	
							<div class="col-sm-4 bordsatanan">
								<div class="row">
								<div class="col-sm-6 waspad ">
									Social Behaviour
								</div>
								<div class="col-sm-6 waspad backni">
									<input type="text" name="social_behaviour" class="inputni">
								</div>
								</div>
							</div>
							</div>
							<div class="col-sm-12" style="white-space: nowrap;box-shadow: none;padding: 0px 0px; border-left: 1px solid #FE7235;">
							<div class="col-sm-4">
								<div class="row">
								<div class="col-sm-6 waspad ">
									
								</div>
								<div class="col-sm-6 waspad ">
									
								</div>
								</div>
							</div>	
							<div class="col-sm-4 lefty">
								<div class="row">
								<div class="col-sm-6 waspad ">
									
								</div>
								<div class="col-sm-6 waspad ">
								
								</div>
								</div>						
							</div>	
							<div class="col-sm-4 bordsatanan">
								<div class="row">
								<div class="col-sm-6 waspad ">
									Technical "hard" skills
								</div>
								<div class="col-sm-6 waspad backni">
									<input type="text" name="tech_skill" class="inputni">
								</div>
								</div>
							</div>
							</div>
							<div class="col-sm-12" style="white-space: nowrap;box-shadow: none;padding: 0px 0px; border-left: 1px solid #FE7235;">
							<div class="col-sm-4">
								<div class="row">
								<div class="col-sm-6 waspad ">
									
								</div>
								<div class="col-sm-6 waspad ">
									
								</div>
								</div>
							</div>	
							<div class="col-sm-4 lefty">
								<div class="row">
								<div class="col-sm-6 waspad ">
									
								</div>
								<div class="col-sm-6 waspad ">
								
								</div>
								</div>						
							</div>	
							<div class="col-sm-4 bordsatanan" style="border-bottom: 1px solid #FE7235;">
								<div class="row">
								<div class="col-sm-6 waspad ">
									<strong>Total</strong>
								</div>
								<div class="col-sm-6 waspad backni">
									<strong><input type="text" name="total2" class="inputni" placeholder="100%"></strong>
								</div>
								</div>
							</div>
							</div>
							<div class="col-sm-12" style="white-space: nowrap;box-shadow: none;padding: 0px 0px; border-left: 1px solid #FE7235; border-right: 1px solid #FE7235;">
							<div class="col-sm-4 ">
								<div class="row">
								<div class="col-sm-6 waspad ">
									
								</div>
								<div class="col-sm-6 waspad ">
									
								</div>
								</div>
							</div>	
							<div class="col-sm-4 lefty bordsatanan" style="border-bottom: 1px solid #FE7235;">
								<div class="row">
								<div class="col-sm-6 waspad ">
									<strong>Total</strong>
								</div>
								<div class="col-sm-6 waspad backni">
									<strong><input type="text" name="total3" class="inputni" placeholder="100%"></strong>
								</div>
								</div>						
							</div>	
							<div class="col-sm-4 lefty">
								<div class="row">
								<div class="col-sm-6 waspad ">
									
								</div>
								<div class="col-sm-6 waspad">
									
								</div>
								</div>
							</div>
							</div>
							<div class="col-sm-12" style="white-space: nowrap;box-shadow: none;padding: 0px 0px; border-left: 1px solid #FE7235; border-right: 1px solid #FE7235;">
							<div class="col-sm-4" style="border: 1px solid #FE7235;margin-left: 1px;border-left: none; border-bottom: none;">
								<div class="row">
								<div class="col-sm-6 waspad ">
									Quantitative
								</div>
								<div class="col-sm-6 waspad backni">
									<input type="text" name="qualitative" class="inputni" placeholder="40%">
								</div>
								</div>
							</div>	
							<div class="col-sm-4 ">
								<div class="row">
								<div class="col-sm-6 waspad ">
									
								</div>
								<div class="col-sm-6 waspad ">
								
								</div>
								</div>						
							</div>	
							<div class="col-sm-4 ">
								<div class="row">
								<div class="col-sm-6 waspad ">
								
								</div>
								<div class="col-sm-6 waspad">
								
								</div>
								</div>
							</div>
							</div>
							<div class="col-sm-12" style="white-space: nowrap;box-shadow: none;padding: 0px 0px; border-left: 1px solid #FE7235; border-right: 1px solid #FE7235;">
							<div class="col-sm-4" style="border: 1px solid #FE7235;margin-left: 1px;border-left: none;">
								<div class="row">
								<div class="col-sm-6 waspad ">
									Risk
								</div>
								<div class="col-sm-6 waspad backni">
									<input type="text" name="risk" class="inputni" placeholder="30%">
								</div>
								</div>
							</div>	
							<div class="col-sm-4 bordsatanan" style="border-left: none;">
								<div class="row">
								<div class="col-sm-6 waspad ">
									Insurances
								</div>
								<div class="col-sm-6 waspad backni">
									<input type="text" name="insurance" class="inputni">
								</div>
								</div>						
							</div>	
							<div class="col-sm-4 ">
								<div class="row">
								<div class="col-sm-6 waspad ">
								
								</div>
								<div class="col-sm-6 waspad">
									
								</div>
								</div>
							</div>
							</div>
							<div class="col-sm-12" style="white-space: nowrap;box-shadow: none;padding: 0px 0px; border-left: 1px solid #FE7235; border-right: 1px solid #FE7235;">
							<div class="col-sm-4">
								<div class="row">
								<div class="col-sm-6 waspad ">
									
								</div>
								<div class="col-sm-6 waspad ">
									
								</div>
								</div>
							</div>	
							<div class="col-sm-4 bordsatanan">
								<div class="row">
								<div class="col-sm-6 waspad ">
									Bonds
								</div>
								<div class="col-sm-6 waspad backni">
									<input type="text" name="bonds" class="inputni">
								</div>
								</div>						
							</div>	
							<div class="col-sm-4 ">
								<div class="row">
								<div class="col-sm-6 waspad ">
									
								</div>
								<div class="col-sm-6 waspad">
								
								</div>
								</div>
							</div>
							</div>
							<div class="col-sm-12" style="white-space: nowrap;box-shadow: none;padding: 0px 0px; border-left: 1px solid #FE7235; border-right: 1px solid #FE7235;">
							<div class="col-sm-4">
								<div class="row">
								<div class="col-sm-6 waspad ">
									
								</div>
								<div class="col-sm-6 waspad ">
									
								</div>
								</div>
							</div>	
							<div class="col-sm-4 bordsatanan">
								<div class="row">
								<div class="col-sm-6 waspad ">
									3rd Parties
								</div>
								<div class="col-sm-6 waspad backni">
									<input type="text" name="third_parties" class="inputni">
								</div>
								</div>						
							</div>	
							<div class="col-sm-4 ">
								<div class="row">
								<div class="col-sm-6 waspad ">
									
								</div>
								<div class="col-sm-6 waspad">
									
								</div>
								</div>
							</div>
							</div>
							<div class="col-sm-12" style="white-space: nowrap;box-shadow: none;padding: 0px 0px; border-left: 1px solid #FE7235; border-right: 1px solid #FE7235;">
							<div class="col-sm-4">
								<div class="row">
								<div class="col-sm-6 waspad ">
									
								</div>
								<div class="col-sm-6 waspad ">
									
								</div>
								</div>
							</div>	
							<div class="col-sm-4 bordsatanan">
								<div class="row">
								<div class="col-sm-6 waspad ">
									Limit of liability
								</div>
								<div class="col-sm-6 waspad backni">
									<input type="text" name="limit_liability" class="inputni">
								</div>
								</div>						
							</div>	
							<div class="col-sm-4 ">
								<div class="row">
								<div class="col-sm-6 waspad ">
								
								</div>
								<div class="col-sm-6 waspad">
								
								</div>
								</div>
							</div>
							</div>
							<div class="col-sm-12" style="white-space: nowrap;box-shadow: none;padding: 0px 0px; border-left: 1px solid #FE7235; border-right: 1px solid #FE7235;">
							<div class="col-sm-4">
								<div class="row">
								<div class="col-sm-6 waspad ">
									
								</div>
								<div class="col-sm-6 waspad ">
									
								</div>
								</div>
							</div>	
							<div class="col-sm-4 bordsatanan">
								<div class="row">
								<div class="col-sm-6 waspad ">
									Net contribution clause
								</div>
								<div class="col-sm-6 waspad backni">
									<input type="text" name="net_clause" class="inputni">
								</div>
								</div>						
							</div>	
							<div class="col-sm-4 ">
								<div class="row">
								<div class="col-sm-6 waspad ">
								
								</div>
								<div class="col-sm-6 waspad">
								
								</div>
								</div>
							</div>
							</div>
							<div class="col-sm-12" style="white-space: nowrap;box-shadow: none;padding: 0px 0px; border-left: 1px solid #FE7235; border-right: 1px solid #FE7235;">
							<div class="col-sm-4">
								<div class="row">
								<div class="col-sm-6 waspad ">
									
								</div>
								<div class="col-sm-6 waspad ">
									
								</div>
								</div>
							</div>	
							<div class="col-sm-4 bordsatanan" style="border-bottom: 1px solid #FE7235;">
								<div class="row">
								<div class="col-sm-6 waspad ">
									<strong>Total</strong>
								</div>
								<div class="col-sm-6 waspad backni">
									<strong><input type="text" name="total4" class="inputni" placeholder="100%"></strong>
								</div>
								</div>						
							</div>	
							<div class="col-sm-4 ">
								<div class="row">
								<div class="col-sm-6 waspad ">
									
								</div>
								<div class="col-sm-6 waspad">
									
								</div>
								</div>
							</div>
							</div>
							<div class="col-sm-12" style="white-space: nowrap;box-shadow: none;padding: 0px 0px; border-left: 1px solid #FE7235; border-right: 1px solid #FE7235; border-bottom: 1px solid #FE7235;">
							<div class="col-sm-4" style="border: 1px solid #FE7235;margin-left: 1px;border-left: none; border-bottom: none;">
								<div class="row">
								<div class="col-sm-6 waspad ">
									<strong>Total</strong>
								</div>
								<div class="col-sm-6 waspad backni">
									<strong><input type="text" name="total5" class="inputni" placeholder="30%"></strong>
								</div>
								</div>
							</div>	
							<div class="col-sm-4">
								<div class="row">
								<div class="col-sm-6 waspad ">
									
								</div>
								<div class="col-sm-6 waspad ">
									
								</div>
								</div>						
							</div>	
							<div class="col-sm-4 ">
								<div class="row">
								<div class="col-sm-6 waspad ">
									
								</div>
								<div class="col-sm-6 waspad">
									
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


