@extends('layouts.master')

@section('content')
<div class="container below-header">
	<h1 class="project-title bid-page-title centerh">Project Dashboard</small></h1>
</div>
<div class="container" style="width: 95%;">
	<div class="row">
		<div class="col-sm-12">
			<div class="tender-container tendnew">
				<ul class="nav navs bid-form-nav">
					<li class="active"><a class="abut" data-toggle="tab" href="#section1">Project</a></li>
					<li><a class="abut" data-toggle="tab" href="#section2">Scope</a></li>
					<li><a class="abut" data-toggle="tab" href="#section3">Tenders</a></li>
					<li><a class="abut" data-toggle="tab" href="#section4">Create New Tender</a></li>
				</ul><br>
			</div>
		</div>
		<div class="col-sm-12 questionnaire-section">
			<div class="tab-content tabmargin" >
				<div id="section1" class="tab-pane fade in active tender-container" style="padding-top: 0;">
					<div class="row">
		    	<div class="below-header project-img-collection text-center projhead">
		    		<h1>Canada Water Masterplan</h1>
		    		<div class="project-image popup-gallery">
		    			<a href="../images/demo1.jpg"><img src="../images/demo1.jpg"/></a>
		    		</div>
		    		<div class="project-image popup-gallery">
		    			<a href="../images/demo2.jpg"><img src="../images/demo2.jpg"/></a>
		    		</div>
		    		<div class="project-image popup-gallery">
		    			<a href="../images/demo3.jpg"><img src="../images/demo3.jpg"/></a>
		    		</div>
		    		<div class="project-image popup-gallery">
		    			<a href="../images/demo4.jpg"../images/demo1.jpg><img src="../images/demo4.jpg"/></a>
		    		</div>
		    	</div>
		    </div>
		    <div class="row">
		    	<div class="">
		    		<div class="row">
		    			<div class="col-sm-12 project-anchor">
		    				<a href="#">Project Details</a>
		    				<a href="#">Tender Queries</a>
		    				<a href="#cprofile">Employer Details</a>
		    			</div>
		    		</div>
		    		<div class="tender-container">
		    			<div class="row">
		    				<div class="col-sm-12 active-tenders" id="cprofile">
		    					<h3>Project Information</h3>
		    				</div>			
		    				<div class="col-sm-12">
		    					<table class="table table-striped table-hover">
		    						<tr>
		    							<td>Project Title</td>
		    							<td><input class="inputproj" type="text" name="projectTitle" value="Canada Water Masterplan"></td>
		    						</tr>
		    						<tr>
		    							<td>Project ID</td>
		    							<td>1234567890</td>
		    						</tr>
		    						<tr>
		    							<td>Location</td>
		    							<td><input class="inputproj" type="text" name="location" value="Canada Water, London, SE16, United Kingdom"></td>
		    						</tr>
		    						<tr>
		    							<td colspan="2">
		    								<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9935.319359803168!2d-0.04969!3d51.49799!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3ae4946b67b18de7!2sCanada+Water!5e0!3m2!1sen!2snp!4v1525743556788" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
		    							</td>
		    						</tr>
		    						<tr>
		    							<td>Transport Links</td>
		    							<td>
		    								<table width="100%">
		    									<tr>
		    										<td>
		    											<p><b>Main Roads</b></p>
		    										</td>
		    										<td>
		    											<p><input class="inputproj" type="text" name="mainRoads" value="Surrey Quays Road"></p>
		    										</td>
		    									</tr>
		    									<tr>
		    										<td>
		    											<p><b>Tube Stations</b></p>
		    										</td>
		    										<td>
		    											<p><input class="inputproj" type="text" value="Canada Water 0.5km"></p>
		    											<p><input class="inputproj" type="text" value="Surrey Quays 1.5km"></p>
		    										</td>
		    									</tr>
		    									<tr>
		    										<td>
		    											<p><b>Bus Lines</b> </p>
		    										</td>
		    										<td>
		    											<p><input class="inputproj" type="text" name="bus_lines" value="701, 702, 851, 930"></p>
		    										</td>
		    									</tr>
		    								</table>
		    							</td>
		    						</tr>
		    						<tr>
		    							<td>Area Specific Information</td>
		    							<td>
		    								<table width="100%">
		    									<tr>
		    										<td>Adjacent Uses</td>
		    										<td><input class="inputproj" type="text" name="adjacent_use" value="Residential (High-End), Regeneration Space, Retail"></td>
		    									</tr>
		    									<tr>
		    										<td>History</td>
		    										<td><input class="inputproj" type="text" name="history" value="Former Docks and Warehouses"></td>
		    									</tr>
		    								</table>
		    							</td>
		    						</tr>
		    						<tr>
		    							<td>Constraints</td>
		    							<td>                               
		    								<p><input class="inputproj" type="text" value="Adjacent Tube Tunnel"></p>
		    								<p><input class="inputproj" type="text" value="Existing Buildings"></p>
		    								<p><input class="inputproj" type="text" value="Weak Ground Conditions"></p>
		    							</td>
		    						</tr>
		    						<tr>
		    							<td>Type of Development</td>
		    							<td><input name="dev_type" class="inputproj" type="text" value="New Built"></td>
		    						</tr>
		    						<tr>
		    							<td>Construction Value</td>
		    							<td><span>£</span><input name="const_value" class="inputproj"type="text" value="300,000,000"></td>
		    						</tr>
		    						<tr>
		    							<td>Types of Use</td>
		    							<td>
		    								<table width="100%">
		    									<tr>
		    										<td>Residential</td>
		    										<td><input class="inputproj"type="text" value="30,000m2"></td>
		    										<td><input class="inputproj"type="text" value="200 units"></td>
		    										<td><input class="inputproj"type="text" value="High-End"></td>
		    									</tr>
		    									<tr>
		    										<td>Residential</td>
		    										<td><input class="inputproj"type="text" value="10,000m2"></td>
		    										<td><input class="inputproj"type="text" value="70 units"></td>
		    										<td><input class="inputproj"type="text" value="Affordable"></td>
		    									</tr>
		    									<tr>
		    										<td>Office</td>
		    										<td><input class="inputproj"type="text" value="15,000m2"></td>
		    										<td></td>
		    										<td></td>
		    									</tr>
		    									<tr>
		    										<td>Retail</td>
		    										<td><input class="inputproj"type="text" value="15,000m2"></td>
		    										<td><input class="inputproj"type="text" value="5 units"></td>
		    										<td></td>
		    									</tr>
		    									<tr>
		    										<td>Total</td>
		    										<td><input class="inputproj"type="text" value="57,000m2"></td>
		    										<td></td>
		    										<td></td>
		    									</tr>
		    								</table>
		    							</td>
		    						</tr>
		    						<tr>
		    							<td>Milestones</td>
		    							<td>
		    								<table width="100%">
		    									<tr>
		    										<td>RIBA Stage 1 Completion</td>
		    										<td><input class="inputproj"type="text" value="01/03/2019"></td>
		    									</tr>
		    									<tr>
		    										<td>RIBA Stage 2 Completion</td>
		    										<td><input class="inputproj"type="text" value="01/07/2019"></td>
		    									</tr>
		    									<tr>
		    										<td>RIBA Stage 3 Completion</td>
		    										<td><input class="inputproj"type="text" value="01/10/2019"></td>
		    									</tr>
		    									<tr>
		    										<td>RIBA Stage 4 Completion</td>
		    										<td><input class="inputproj"type="text" value="01/12/2019"></td>
		    									</tr>
		    								</table>
		    							</td>								
		    						</tr>
		    						<tr>
		    							<td>Meetings</td>
		    							<td>
		    								<table width="100%">
		    									<tr>
		    										<td>Design Team Meeting</td>
		    										<td><input class="inputproj"type="text" value="Tuesday, 14:00 – 15:30, Weekly"></td>
		    									</tr>
		    									<tr>
		    										<td>Project Progress Meeting</td>
		    										<td><input class="inputproj"type="text" value="Tuesday, 15:30 – 16:30, Fortnightly"></td>
		    									</tr>
		    								</table>
		    							</td>
		    						</tr>
		    						<tr>
		    							<td>Procurement Route</td>
		    							<td><input class="inputproj"type="text" value="Design & Build"></td>
		    						</tr>
		    						<tr>
		    							<td>Project Team</td>
		    							<td>
		    								<table width="100%">
		    									<tr>
		    										<td>Architect</td>
		    										<td><input class="inputproj"type="text" value="Allies and Morrison"></td>
		    									</tr>
		    									<tr>
		    										<td>Structural Engineer</td>
		    										<td><input class="inputproj"type="text" value="AKT II"></td>
		    									</tr>
		    									<tr>
		    										<td>Services Engineer</td>
		    										<td><input class="inputproj"type="text" value="Sweco"></td>
		    									</tr>
		    									<tr>
		    										<td>Fire Engineer </td>
		    										<td><a href="#">Active Tender</a></td>
		    									</tr>
		    									<tr>
		    										<td>Acoustic Engineer</td>
		    										<td><a href="#">Active Tender</a></td>
		    									</tr>
		    								</table>
		    							</td>
		    						</tr>
		    						<tr>
		    							<td>Supporting Documents</td>
		    							<td>
		    								<p><a href="#">Site Plan <i class="fa fa-download"></i></a></p>
		    								<p><a href="#">Programme <i class="fa fa-download"></i></a></p>        
		    								<p><a href="#">H&S Policy <i class="fa fa-download"></i></a></p>
		    							</td>
		    						</tr>
		    					</table>						
		    				</div>
		    			</div>
		    		</div>
		    	</div>
		    </div>
				</div>
				<div id="section2" class="tab-pane fade tender-container">
					<div class="row">
						<div class="container">
							<h1 class="project-title bid-page-title">Design Responsibility Matrix</h1>
						</div>
					</div>
				</div>
				<div id="section3" class="tab-pane fade tender-container">
					<div class="row" style="margin: 25px;">
	    			<table class="table table-bordered">
    			    <thead class="thead">
  			        <tr>
  			        	<th>Services</th>
			            <th>Status</th>
			            <th>Start</th>
			            <th>End</th>
			            <th>Time Remaining</th>
			            <th>Number of Bids received</th>
			            <th>Number of Queries received (outstanding)</th>
			            <th></th>
			            <th></th>
  			        </tr>
    			    </thead>
    			    <tbody>
  			        <tr>
			            <td class="td">Fire Engineer <a><p>Edit Tender</p></a></td>
			            <td class="td">Active</td>
			            <td class="td">1/1/2018</td>
			            <td class="td">1/9/2018</td>
			            <td class="td">5 days</td>
			            <td class="td"><strong>3</strong><a data-toggle="modal" data-target="#viewBid"><p>View Bids</p></a></td>
			            <td class="td"><strong>7</strong><a data-toggle="modal" data-target="#viewQueries"><p>View Queries</p></a></td>
			            <td class="td"><button class="">Complete Tender Process</button></td>
			            <td class="td"></td>
  			        </tr>
  			        <tr>
			            <td class="td">Service Engineer <a><p>Edit Tender</p></a></td>
			            <td class="td">Drafted</td>
			            <td class="td">1/1/2018</td>
			            <td class="td">1/9/2018</td>
			            <td class="td">5 days</td>
			            <td class="td"></td>
			            <td class="td"></td>
			            <td class="td"></td>
			            <td class="td"></td>
  			        </tr>
  			        <tr>
			            <td class="td">Structural Engineer <a><p>Edit Tender</p></a></td>
			            <td class="td">Closed</td>
			            <td class="td">1/1/2018</td>
			            <td class="td">1/9/2018</td>
			            <td class="td">5 days</td>
			            <td class="td"><strong>3</strong><a data-toggle="modal" data-target="#viewBid"><p>View Bids</p></a></td>
			            <td class="td"><strong>7</strong><a data-toggle="modal" data-target="#viewQueries"><p>View Queries</p></a></td>
			            <td class="td"><button class="">Negotiate Scope and Appointment</button></td>
			            <td class="td"><button class="">Download Evaluation Report</button></td>
  			        </tr>
    			    </tbody>
	    			</table>
	    			<button class="btn">Print Report</button>
					</div>
					<div class="row" style="margin: 25px;">
	    			<table class="table table-bordered">
    			    <thead class="thead">
    			    	<tr><h4>Cashflow of selected tenderers</h4></tr>
  			        <tr>
			            <th>Services</th>
			            <th>Jan-18</th>
			            <th>Feb-18</th>
			            <th>Mar-18</th>
			            <th>Apr-18</th>
			            <th>May-18</th>
			            <th>Jun-18</th>
			            <th>Jul-18</th>
			            <th>Aug-18</th>
			            <th>Sep-18</th>
			            <th>Oct-18</th>
			            <th>Nov-18</th>
			            <th>Dec-18</th>
  			        </tr>
    			    </thead>
    			    <tbody>
  			        <tr>
			            <td class="td">Fire Engineer</td>
			            <td class="td">£1,000.00</td>
			            <td class="td">£1,000.00</td>
			            <td class="td">£1,000.00</td>
			            <td class="td">£1,000.00</td>
			            <td class="td">£1,000.00</td>
			            <td class="td">£1,000.00</td>
			            <td class="td">£1,000.00</td>
			            <td class="td">£1,000.00</td>
			            <td class="td">£1,000.00</td>
			            <td class="td">£1,000.00</td>
			            <td class="td">£1,000.00</td>
			            <td class="td">£1,000.00</td>
  			        </tr>
  			        <tr>
			            <td class="td">Architect</td>
			            <td class="td">£1,000.00</td>
			            <td class="td">£1,000.00</td>
			            <td class="td">£1,000.00</td>
			            <td class="td">£1,000.00</td>
			            <td class="td">£1,000.00</td>
			            <td class="td">£1,000.00</td>
			            <td class="td">£1,000.00</td>
			            <td class="td">£1,000.00</td>
			            <td class="td">£1,000.00</td>
			            <td class="td">£1,000.00</td>
			            <td class="td">£1,000.00</td>
			            <td class="td">£1,000.00</td>
  			        </tr>
  			        <tr>
			            <td class="td"><strong>Total</strong></td>
			            <td class="td"><strong>£ 2,000.00</strong></td>
			            <td class="td"><strong>£ 2,000.00</strong></td>
			            <td class="td"><strong>£ 2,000.00</strong></td>
			            <td class="td"><strong>£ 2,000.00</strong></td>
			            <td class="td"><strong>£ 2,000.00</strong></td>
			            <td class="td"><strong>£ 2,000.00</strong></td>
			            <td class="td"><strong>£ 2,000.00</strong></td>
			            <td class="td"><strong>£ 2,000.00</strong></td>
			            <td class="td"><strong>£ 2,000.00</strong></td>
			            <td class="td"><strong>£ 2,000.00</strong></td>
			            <td class="td"><strong>£ 2,000.00</strong></td>
			            <td class="td"><strong>£ 2,000.00</strong></td>
  			        </tr>
    			    </tbody>
	    			</table>
	    			<button class="btn">Export to MS Excel</button>
					</div>
				</div>	
				<div id="section4" class="tab-pane fade tender-container">
					<div class="row" style="margin: 25px;">
		    	<div class="">
		    		<div class="row">
		    			<div class="col-sm-4">
		    				<div class="tender-container">
		    					<ul class="nav bid-form-nav">
		    						<li class="active"><a data-toggle="tab" href="#section11">Scope</a></li>
		    						<li><a data-toggle="tab" href="#section21">Appointment</a></li>
		    						<li><a data-toggle="tab" href="#section31">Evaluation Settings</a></li>
		    						<li><a data-toggle="tab" href="#section41">Quality Assurance</a></li>
		    					</ul><br>
		    				</div>
		    			</div>
		    			<div class="col-sm-8 questionnaire-section">
		    				<div class="tab-content">
		    					<div id="section11" class="tab-pane fade in active tender-container">
		    						<h3 class="bid-form-title">Scope</h3>
		    					</div>
		    					<div id="section21" class="tab-pane fade tender-container">
		    						<h3 class="bid-form-title">Appointment</h3>
		    						<form method="post">
		    							<div class="row">
		    								<div class="col-sm-12">
		    									<div class="row">
		    										<div class="col-sm-6">
		    											<div class="form-group">
		    												Insurances
		    											</div>
		    										</div>
		    										<div class="col-sm-6">
		    											<div class="form-group">
															<select name="insurances[]"  class="form-control" >
																<option value="" disabled selected>Select Insurance</option>
																<?php
																$Service = array(
																	"Professional","Indemnity","Public  Liability","Products  Liability","Employers  Liability" 
																);
																sort($Service, SORT_NATURAL | SORT_FLAG_CASE);
																foreach ($Service as $key ) {
																    echo "<option value='".$key."'>".$key."</option>";
																}

																?>
																<option value="other">Other</option>
															</select>
															</div>
															<div class="form-group">
																<input type="number" placeholder="Insurance Level" name="insurance_level" class="form-control">
															</div>
															<div class="form-group">
																<div class="cnt_insurance">
																    <button class="btn btn-primary" id="cnt_insurance" >Add Another Insurance</button>
																</div>
															</div>
		    										</div>
		    									</div>
		    									<div class="row">
		    										<div class="col-sm-6">
		    											<div class="form-group">
		    												Bonds
		    											</div>
		    										</div>
		    										<div class="col-sm-6">
		    											<div class="form-group">
															<select name="bonds[]"  class="form-control" >
																<option value="" disabled selected>Select</option>
																<?php
																$Service = array(
																	"Performance Bond", "Parent Company Guarantee","Tender/Bid Bond", "On Demand Bond", "Conditional/On  Default Bond"
																);
																sort($Service, SORT_NATURAL | SORT_FLAG_CASE);
																foreach ($Service as $key ) {
																    echo "<option value='".$key."'>".$key."</option>";
																}

																?>
																<option value="other">Other</option>
															</select>
															</div>
															<div class="form-group">
																<div class="cnt_bond">
																    <button class="btn btn-primary" id="cnt_bond" >Add Another Bond</button>
																    <div></div>
																</div>
															</div>
		    										</div>
		    									</div>
		    									<div class="row">
		    										<div class="col-sm-6">
		    											<div class="form-group">
		    												Collateral Warranties / Third Parties 
		    											</div>
		    										</div>
		    										<div class="col-sm-6">
		    											<div class="form-group">
															<select name="bonds[]"  class="form-control" >
																<option value="" disabled selected>Select</option>
																<?php
																$Service = array(
																	"Collateral Warranties", "Third Party Rights", "Both"
																);
																sort($Service, SORT_NATURAL | SORT_FLAG_CASE);
																foreach ($Service as $key ) {
																    echo "<option value='".$key."'>".$key."</option>";
																}

																?>
															</select>
															</div>
															<div class="form-group">
																<div class="cnt_bond">
															    <button class="btn btn-primary" id="cnt_bond" >Add Another Bond</button>
															    <div></div>
																</div>
															</div>
		    										</div>
		    									</div>
		    									<div class="row">
		    										<div class="col-sm-6">
		    											<div class="form-group">
		    												Limit of Liability 
		    											</div>
		    										</div>
		    										<div class="col-sm-6">
		    											<div class="form-group">
															<input type="text" placeholder="Insert Limit of Liability " name="limit_of_liability" class="form-control">
															</div>
		    										</div>
		    									</div>
		    									<div class="row">
		    										<div class="col-sm-6">
		    											<div class="form-group">
		    												Execution 
		    											</div>
		    										</div>
		    										<div class="col-sm-6">
		    											<div class="form-group">
															<select name="execution[]"  class="form-control" >
																<option value="" disabled selected>Select</option>
																<?php
																$Service = array(
																	"Deed", "Under Hand"
																);
																sort($Service, SORT_NATURAL | SORT_FLAG_CASE);
																foreach ($Service as $key ) {
																    echo "<option value='".$key."'>".$key."</option>";
																}

																?>
															</select>
															</div>
		    										</div>
		    									</div>
		    									<div class="row">
		    										<div class="col-sm-6">
		    											<div class="form-group">
		    												Net Contribution Clause 
		    											</div>
		    										</div>
		    										<div class="col-sm-6">
		    											<div class="form-group">
															<select name="execution[]"  class="form-control" >
																<option value="" disabled selected>Select</option>
																<?php
																$Service = array(
																	"Yes", "No"
																);
																sort($Service, SORT_NATURAL | SORT_FLAG_CASE);
																foreach ($Service as $key ) {
																    echo "<option value='".$key."'>".$key."</option>";
																}

																?>
															</select>
															</div>
		    										</div>
		    									</div>
		    									<div class="row">
		    										<div class="col-sm-6">
		    											<div class="form-group">
		    												Form of Appointment 
		    											</div>
		    										</div>
		    										<div class="col-sm-6">
		    											<div class="form-group">
															<input type="file" class="form-control" name="net_contribution_clause">
															</div>
		    										</div>
		    									</div>
		    									<div class="row">
		    										<div class="col-sm-6">
		    											<div class="form-group">
		    												Documents for Signature 
		    											</div>
		    										</div>
		    										<div class="col-sm-6">
		    											<div class="form-group">
															<input type="text" placeholder="Enter Document Title" class="form-control" name="net_contribution_clause">
															</div>
															<div class="form-group">
															<input type="file" class="form-control" name="documents_for_signature">
															</div>
		    										</div>
		    									</div>
		    								</div>
		    							</div>
		    						</form>
		    					</div>
		    					<div id="section31" class="tab-pane fade tender-container">
		    						<h3 class="bid-form-title">Evaluation Settings</h3>
		    					</div>
		    					<div id="section41" class="tab-pane fade tender-container">
		    						<h3 class="bid-form-title">Quality Assurance</h3>
		    						<form method="post">
		    							<div class="row">
		    								<div class="col-sm-12">
		    									<div class="row">
		    										<div class="col-sm-6">
		    											<div class="form-group">
		    												Created by 
		    											</div>
		    										</div>
		    										<div class="col-sm-6">
		    											<div class="form-group">
															<input type="text" class="form-control" name="proj_fname" placeholder="First Name">
															</div>
															<div class="form-group">
															<input type="text" class="form-control" name="proj_lname"
															placeholder="Last Name">
															</div>
															<div class="input-group date form-group" id="datepicker2" data-date="02-2012" data-date-format="mm-yyyy">
																 <input class="form-control" type="text" readonly="readonly" name="date" >	  
																 <span class="input-group-addon add-on"><span class="fa fa-calendar"></span></span>	  
															</div>
		    										</div>
		    									</div>
		    								</div>
		    							</div>
		    							<div class="row">
		    								<div class="col-sm-12">
		    									<div class="row">
		    										<div class="col-sm-6">
		    											<div class="form-group">
		    												Checked by 
		    											</div>
		    										</div>
		    										<div class="col-sm-6">
		    											<div class="form-group">
															<input type="text" class="form-control" name="proj_cfname" placeholder="First Name">
															</div>
															<div class="form-group">
															<input type="text" class="form-control" name="proj_clname"
															placeholder="Last Name">
															</div>
															<div class="input-group date form-group" id="datepicker2" data-date="02-2012" data-date-format="mm-yyyy">
																 <input class="form-control" type="text" readonly="readonly" name="date" >	  
																 <span class="input-group-addon add-on"><span class="fa fa-calendar"></span></span>	  
															</div>
		    										</div>
		    									</div>
		    								</div>
		    							</div>
		    							<div class="row">
		    								<div class="col-sm-12">
		    									<div class="row">
		    										<div class="col-sm-6">
		    											<div class="form-group">
		    												Approved by 
		    											</div>
		    										</div>
		    										<div class="col-sm-6">
		    											<div class="form-group">
															<input type="text" class="form-control" name="proj_afname" placeholder="First Name">
															</div>
															<div class="form-group">
															<input type="text" class="form-control" name="proj_alname"
															placeholder="Last Name">
															</div>
															<div class="input-group date form-group" id="datepicker2" data-date="02-2012" data-date-format="mm-yyyy">
																 <input class="form-control" type="text" readonly="readonly" name="date" >	  
																 <span class="input-group-addon add-on"><span class="fa fa-calendar"></span></span>	  
															</div>
		    										</div>
		    									</div>
		    								</div>
		    							</div>
		    							<div class="row">
    										<div class="col-sm-6">
    											<div class="form-group">
    												Statements 
    											</div>
    										</div>
    										<div class="col-sm-6">
    											<div class="form-group">
													<select name="statements[]"  class="form-control" >
														<option value="" disabled selected>Select</option>
														<?php
														$Service = array(
															"I agree to XXX"
														);
														sort($Service, SORT_NATURAL | SORT_FLAG_CASE);
														foreach ($Service as $key ) {
														    echo "<option value='".$key."'>".$key."</option>";
														}

														?>
													</select>
													</div>
													<div class="form-group">
														<div class="cnt_statement">
													    <button class="btn btn-primary" id="cnt_statement" >Add another statement</button>
													    <div></div>
														</div>
													</div>
    										</div>
    									</div>
		    						</form>
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

<div class="modal fade" id="viewBid" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background-color: #fe7235;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">View Bids</h4>
      </div>
      <div class="modal-body">
        <table class="table table-bordered">
        	<thead class="thead">
        		<tr>
        			<th width="40%">Tenderer</th>
        			<th width="15%">Qualitative Score</th>
        			<th width="15%">Quantitative Score</th>
        			<th width="15%">Risk Score</th>
        			<th width="15%"></th>
        		</tr>
        	</thead>
        	<tbody>
        		<tr>
        			<td>Company 1</td>
        			<td>5</td>
        			<td>9</td>
        			<td>2</td>
        			<td><a>View Bid</a></td>
        		</tr>
        		<tr>
        			<td>Company 2</td>
        			<td>2</td>
        			<td>4</td>
        			<td>5</td>
        			<td><a>View Bid</a></td>
        		</tr>
        		<tr>
        			<td>Company 3</td>
        			<td>7</td>
        			<td>8</td>
        			<td>7</td>
        			<td><a>View Bid</a></td>
        		</tr>
        	</tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="viewQueries" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background-color: #fe7235;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">View Queries</h4>
      </div>
      <div class="modal-body">
        <table class="table table-bordered">
        	<thead class="thead">
        		<tr>
        			<th width="50%">Query</th>
        			<th width="25%">Receive</th>
        			<th width="25%">Time left to respond</th>
        		</tr>
        	</thead>
        	<tbody>
        		<tr>
        			<td>
        				<ul>
        					<li>Question 1</li>
        					<li>Question 2</li>
        					<li>Question 3</li>
        				</ul>
        			</td>
        			<td>01/01/18, 15:32</td>
        			<td>26 hours 14 minutes</td>
        		</tr>
        		<tr>
        			<td colspan="3">
        				<textarea></textarea>
        				<button class="pull-right btn btcol">Publish Response</button>
        			</td>
        		</tr>
        		<tr>
        			<td>
        				<ul>
        					<li>Question 1</li>
        					<li>Question 2</li>
        					<li>Question 3</li>
        				</ul>
        			</td>
        			<td>01/01/18, 15:55</td>
        			<td>26 hours 14 minutes</td>
        		</tr>
        		<tr>
        			<td colspan="3">
        				<textarea></textarea>
        				<button class="pull-right btn btcol">Publish Response</button>
        			</td>
        		</tr>       			
        	</tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endsection