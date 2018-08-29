@extends('layouts.master')

@section('content')
<div class="container below-header">
	<h1 class="project-title bid-page-title centerh">Project Dashboard</small></h1>
</div>
<div class="container">
 <div class="modal fade" id="myModal2" role="dialog">
									    <div class="modal-dialog">
									      <!-- Modal content-->
									      <div class="modal-content">
									        <div class="modal-header">
									          <button type="button" class="close" data-dismiss="modal">&times;</button>
									          <h4 class="modal-title"></h4>
									        </div>
									        <div class="modal-body">
									          <p>Deadline<div class="form-group">
												<div class="input-group date" id="datepicker4" data-date="02-2012" 
												         data-date-format="mm-yyyy">

													 <input class="form-control" type="text" placeholder="Select year" readonly="readonly" name="date" >	  
													 <span class="input-group-addon add-on"><span class="fa fa-calendar"></span></span>	  
												</div>
												
											</div>
										</p>
									          <p>Feedback Time<div class="form-group">
															<select name="days" class="form-control" onchange='Days(this.value);'> 
											 <option value="" disabled selected>Select Days</option> 
											 <option>1 days</option>
											 <option>2 days</option>
											 <option>3 days</option>
											 <option>4 days</option>
											 <option>5 days</option>
											 <option>6 days</option>
											 <option>7 days</option>
											 <option>8 days</option>
											 <option>9 days</option>
											 <option>10 days</option>
											 <option>11 days</option>
											 <option>12 days</option>
											 <option>13 days</option>
											 <option>14 days</option>
											 <option>15 days</option>
											 <option>16 days</option>
											 <option>17 days</option>
											 <option>18 days</option>
											 <option>19 days</option>
											 <option>20 days</option>
											 <option>21 days</option>
											 <option>22 days</option>
											 <option>23 days</option>
											 <option>24 days</option>
											 <option>25 days</option>
											 <option>26 days</option>
											 <option>27 days</option>
											 <option>28 days</option>
											 <option>29 days</option>
											 <option>30 days</option>
											</select>
															</div></p>
									          <input type="text" placeholder="Search.." name="search">
									      <button type="submit">Add</button>
									        </div>
									        <div class="modal-footer">
									          <button type="button" class="btn btn-success">Submit</button>
									          <button type="button" class="btn btn-primary">Go Back</button>
									        </div>
									      </div>   
									    </div>
									  </div>
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
				<div id="section1" class="tab-pane fade in active tender-container" style="padding-top:0;margin-left:auto;margin-right:auto;width:1040px;">
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
		    						<h3>Project Information<button onclick="myFunction()" style="float:right;margin-top:-10px;" ><i class="fa fa-edit" style="font-size:24px"></i>Edit</button></h3>
		    				</div>			
		    				<div class="col-sm-12">
		    					<table class="table table-striped table-hover">
		    						<tr>
		    							<td>Project Title
  											
										</td>
		    							<td><p id="water">Canada Water Masterplan</p></td>
		    						</tr>
		    						<tr>
		    							<td>Project ID
			    							
		    							</td>
		    							<td><p id="number">123456789</p></td>
		    						</tr>
		    						<tr>
		    							<td>Location
		    								
		    							</td>
		    							<td><p id="location">Canada Water, London, SE16, United Kingdom</p></td>
		    						</tr>
		    						<tr>
		    							<td colspan="2">
		    								<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9935.319359803168!2d-0.04969!3d51.49799!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3ae4946b67b18de7!2sCanada+Water!5e0!3m2!1sen!2snp!4v1525743556788" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
		    							</td>
		    						</tr>
		    						<tr>
		    							<td>Transport Links
		    								
		    							</td>
		    							<td>
		    								<table width="100%">
		    									<tr>
		    										<td>
		    											<p><b>Main Roads</b></p>
		    										</td>
		    										<td>
		    											<p id="survey">Surrey Quays Road</p>
		    										</td>
		    									</tr>
		    									<tr>
		    										<td>
		    											<p><b>Tube Stations</b></p>
		    										</td>
		    										<td>
		    											<p id="tube">Canada Water 0.5km</p>
		    											<p id="tube1">Surrey Quays 1.5km</p>
		    										</td>
		    									</tr>
		    									<tr>
		    										<td>
		    											<p><b>Bus Lines</b> </p>
		    										</td>
		    										<td>
		    											<p id="bus">701, 702, 851, 930</p>
		    										</td>
		    									</tr>
		    								</table>
		    							</td>
		    						</tr>
		    						<tr>
		    							<td>Area Specific Information
		    								
		    							</td>
		    							<td>
		    								<table width="100%">
		    									<tr>
		    										<td>Adjacent Uses</td>
		    										<td id="Adjacent">Residential (High-End), Regeneration Space, Retail</td>
		    									</tr>
		    									<tr>
		    										<td>History</td>
		    										<td id="history">Former Docks and Warehouses</td>
		    									</tr>
		    								</table>
		    							</td>
		    						</tr>
		    						<tr>
		    							<td>Constraints
		    								
		    							</td>
		    							<td>                               
		    								<p id="cons1">Adjacent Tube Tunnel</p>
		    								<p id="cons2">Existing Buildings</p>
		    								<p id="cons3">Weak Ground Conditions</p>
		    							</td>
		    						</tr>
		    						<tr>
		    							<td>Type of Development
		    								
		    							</td>
		    							<td id="type">New Built</td>
		    						</tr>
		    						<tr>
		    							<td>Construction Value
		    								
		    							</td>
		    							<td><span>£</span><p id="value">300,000,000</p></td>
		    						</tr>
		    						<tr>
		    							<td>Types of Use
		    								
		    							</td>
		    							<td>
		    								<table width="100%">
		    									<tr>
		    										<td>Residential</td>&nbsp
		    										<td id="red1">30,000m2</td>
		    										<td id="red2">200 units</td>
		    										<td id="red3">High-End</td>
		    									</tr>
		    									<tr>
		    										<td>Residential</td>
		    										<td id="res1">10,000m2</td>
		    										<td id="res2">70 units</td>
		    										<td id="res3">Affordable</td>
		    									</tr>
		    									<tr>
		    										<td>Office</td>
		    										<td id="office">15,000m2</td>
		    										<td></td>
		    										<td></td>
		    									</tr>
		    									<tr>
		    										<td>Retail</td>
		    										<td id="ret1">15,000m2</td>
		    										<td id="ret2">5 units</td>
		    										<td></td>
		    									</tr>
		    									<tr>
		    										<td>Total</td>
		    										<td id="total">57,000m2</td>
		    										<td></td>
		    										<td></td>
		    									</tr>
		    								</table>
		    							</td>
		    						</tr>
		    						<tr>
		    							<td>Milestones
		    								
		    							</td>
		    							<td>
		    								<table width="100%">
		    									<tr>
		    										<td>RIBA Stage 1 Completion</td>
		    										<td id="rib1">01/03/2019</td>
		    									</tr>
		    									<tr>
		    										<td>RIBA Stage 2 Completion</td>
		    										<td id="rib2">01/07/2019</td>
		    									</tr>
		    									<tr>
		    										<td>RIBA Stage 3 Completion</td>
		    										<td id="rib3">01/10/2019</td>
		    									</tr>
		    									<tr>
		    										<td>RIBA Stage 4 Completion</td>
		    										<td id="rib4">01/12/2019</td>
		    									</tr>
		    								</table>
		    							</td>								
		    						</tr>
		    						<tr>
		    							<td>Meetings
		    								
		    							</td>
		    							<td>
		    								<table width="100%">
		    									<tr>
		    										<td>Design Team Meeting</td>
		    										<td id="met1">Tuesday, 14:00 – 15:30, Weekly</td>
		    									</tr>
		    									<tr>
		    										<td>Project Progress Meeting</td>
		    										<td id="met2">Tuesday, 15:30 – 16:30, Fortnightly</td>
		    									</tr>
		    								</table>
		    							</td>
		    						</tr>
		    						<tr>
		    							<td>Procurement Route
		    								
		    							</td>
		    							<td id="pro">Design & Build</td>
		    						</tr>
		    						<tr>
		    							<td>Project Team
		    								
		    							</td>
		    							<td>
		    								<table width="100%">
		    									<tr>
		    										<td>Architect</td>
		    										<td id="arc">Allies and Morrison</td>
		    									</tr>
		    									<tr>
		    										<td>Structural Engineer</td>
		    										<td id="struc">AKT II</td>
		    									</tr>
		    									<tr>
		    										<td>Services Engineer</td>
		    										<td id="ing">Sweco</td>
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
		    							<td>Supporting Documents
		    								
		    							</td>
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
		    		<div class="tender-container">
						<div class="row">
							<div class="col-sm-12 active-tenders">
								<h3>Tender Queries<button onclick="myFunction1()" style="float: right;margin-top:-10px;"><i class="fa fa-edit" style="font-size:24px"></i>Edit</button></h3>
								<div class="row">	
									<div class="col-sm-12">				
										<table class="table table-striped table-hover">
											<tr>
												<td id="black"><span style="    margin-left: 10px;
												    ">#</span></td>
												<td>Query</td>
												<td>Responses</td>

											</tr>
											<tr>
												<td id="black"><span style="    margin-left: 10px;
												    font-size: 20px;">1</span>
													
												</td>
												<td id="que1">TextTextTextTextTextTextTextTextText</td>
												<td id="que2">TextTextTextTextTextTextTextTextTextTextTextText</td>
											</tr>
											<tr>
												<td id="black"><span style="    margin-left: 10px;
												    font-size: 20px;">2</span>
													
												</td>
												<td id="que3">TextTextTextTextTextTextTextTextText"></td>
												<td id="que4">TextTextTextTextTextTextTextTextTextTextTextText</td>
											</tr>
											<tr>
												<td id="black"><span style="    margin-left: 10px;
												    font-size: 20px;">3</span>
													
												</td>
												<td id="que5">TextTextTextTextTextTextTextTextText</td>
												<td id="que6">TextTextTextTextTextTextTextTextTextTextTextText</td>
											</tr>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tender-container">
						<div class="row">
							<div class="col-sm-12 active-tenders">
								<h3>Employer Details<button onclick="myFunction2()" style="float: right;margin-top:-10px;"><i class="fa fa-edit" style="font-size:24px"></i>Edit</button></h3>
								<div class="row">	
									<div class="col-sm-9">				
										<table class="table table-striped table-hover">
											<tr>
												<td>Employer
													
												</td >
												<td id="emp1">British Land</td>
											</tr>
											<tr>
												<td>Registered Office Address
													
												</td>
												<td id="emp2">100 Sample Road, London, W1 23Y, United Kingdom</td>
											</tr>
											<tr>
												<td>Industry
													
												</td>
												<td id="emp3">Developer</td>
											</tr>
											<tr>
												<td>Year Established
													
												</td>
												<td id="emp4">1955</td>
											</tr>
											<tr>
												<td>Number of Employees
													
												</td>
												<td id="emp5">10-50</td>
											</tr>
										</table>
									</div>

									<div class="col-sm-3 company-quick-details">
										<p><img src="../images/logo-british.jpg"></p>
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
							<button style="margin-left: 40px;height: 35px;width: 90px;}" type="button" class="btn btn-success">Save</button>

						</div>
					</div>

		    	</div>

		    </div>

				</div>
				<div id="section2" class="tab-pane fade tender-container" style="padding-top:0;margin-left:auto;margin-right:auto;width:1040px;">
					<div class="row">
						<div class="container">
							<h1 class="project-title bid-page-title">Design Responsibility Matrix</h1>
						</div>
					</div>
				</div>

				<div id="section3" class="tab-pane fade tender-container" style="padding-top:0;margin-left:auto;margin-right:auto;width:1040px;">
					<div class="row" style="margin: 25px;">
	    			<table class="table table-bordered">
    			    <thead class="thead">
  			        <tr>
  			        	<th>Services</th>
			            <th>Status</th>
			            <th>Start</th>
			            <th>End</th>
			            <th>Time Remaining</th>
			            <th>Bids received</th>
			            <th>Queries received (outstanding)</th>
			            <th>Actions</th>
  			        </tr>
    			    </thead>
    			    <tbody>
  			        <tr>
			            <td style="text-align: left;" class="td">Fire Engineer <a><p>Edit Tender</p></a></td>
			            <td class="td">Active</td>
			            <td class="td">1/1/2018</td>
			            <td class="td">1/9/2018</td>
			            <td class="td">5 days</td>
			            <td class="td"><strong style="font-size: 25px;">3</strong><a data-toggle="modal" data-target="#viewBid"><p>View Bids</p></a></td>
			            <td class="td"><strong style="font-size: 25px;">7</strong><a data-toggle="modal" data-target="#viewQueries"><p>View Answer/ Queries</p></a></td>
			            <td class="td"><button class="">Complete Tender Process</button></td>
  			        </tr>
  			        <tr>
			            <td style="text-align: left;" class="td">Service Engineer <a><p>Edit Tender</p></a></td>
			            <td class="td">Drafted</td>
			            <td class="td">TBC</td>
			            <td class="td">TBC</td>
			            <td class="td">TBC</td>
			            <td class="td">TBC</td>
			            <td class="td">TBC</td>
			            <td class="td"><button class="">Download Evaluation Report</button></td>
  			        </tr>
  			        <tr>
			            <td style="text-align: left;" class="td">Structural Engineer <a><p>Edit Tender</p></a></td>
			            <td class="td">Closed</td>
			            <td class="td">1/1/2018</td>
			            <td class="td">1/9/2018</td>
			            <td class="td">5 days</td>
			            <td class="td"><strong style="font-size: 25px;">3</strong><a data-toggle="modal" data-target="#viewBid"><p>View Bids</p></a></td>
			            <td class="td"><strong style="font-size: 25px;">7</strong><a data-toggle="modal" data-target="#viewQueries"><p>View Answer/Queries</p></a></td>
			            <td class="td"><button class="">Negotiate Scope and Appointment</button></td>
			            
  			        </tr>
    			    </tbody>
	    			</table>
	    			<button class="btn">Print Report</button>
					</div>
					<div class="row" style="margin: 25px;">
	    			<table class="table table-bordered">
	    			<table class="table table-striped table-hover">
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
	    			</table>
	    			<button class="btn">Export to MS Excel</button>
					</div>
				</div>	
				<div id="section4" class="tab-pane fade tender-container" style="padding-top:0;margin-left:auto;margin-right:auto;width:1390px;">
					<div class="row" style="margin: 25px;">
		    	<div class="">
		    		<div class="row">
		    			<div class="col-sm-3">
		    				<div class="tender-container" id="mama">
		    					<ul class="nav bid-form-nav">
		    						<li class="active"><a data-toggle="tab" href="#section11">Scope</a></li>
		    						<li><a data-toggle="tab" href="#section21">Appointment</a></li>
		    						<li><a data-toggle="tab" href="#section31">Evaluation Settings</a></li>
		    						<li><a data-toggle="tab" href="#section41">Quality Assurance</a></li><br>
		    						<li>
  										<!-- Trigger the modal with a button -->
									  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">Start Tender Process</button>
									  <!-- Modal -->
									 
									 </li>
		    					</ul><br>
		    				</div>
		    			</div>
		    			<div class="col-sm-9 questionnaire-section">
		    				<div class="tab-content">
		    					<div id="section11" class="tab-pane fade in active tender-container">
		    						<h3 class="bid-form-title">Scope</h3>
		    						<div class="row" style="margin: 0;">
		    						<table class="table table-bordered tabsl" style="table-layout: unset;">
		    							<thead class="thead" style="color: white;">
		    								<tr>
		    									<td>Deliverable</td>
		    									<td>Details / Contents</td>
		    									<td>RACI</td>
		    									<td>0</td>
		    									<td>1</td>
		    									<td>2</td>
		    									<td>3</td>
		    									<td>4</td>
		    									<td>5</td>
		    									<td>6</td>
		    									<td>7</td>
		    								</tr>
		    							</thead>
		    							<tbody class="tbod">
		    								<tr>
		    									<td><p>Strategic Brief</p></td>
		    									<td style="padding: 0;">
		    										<textarea class='autoExpand'></textarea>
		    									</td>
		    									<td style="padding: 0;">
		    										<textarea class='autoExpand' maxlength="1"></textarea>
		    									</td>
		    									<td>
		    										<div class="custom-control custom-checkbox">
		    										  <input type="checkbox" class="custom-control-input" id="defaultChecked2" >
		    										  <label class="custom-control-label" for="defaultChecked2"></label>
		    										</div>
		    									</td>
		    									<td></td>
		    									<td></td>
		    									<td></td>
		    									<td></td>
		    									<td></td>
		    									<td></td>
		    									<td></td>
		    								</tr>
		    								<tr>
		    									<td><p>Project Programme (Lead)<p></td>
		    									<td style="padding: 0;">
		    										<textarea class='autoExpand'></textarea>
		    									</td>
		    									<td></td>
		    									<td></td>
		    									<td></td>
		    									<td></td>
		    									<td></td>
		    									<td></td>
		    									<td></td>
		    									<td></td>
		    									<td></td>
		    								</tr>
		    							</tbody>
		    						</table>
		    						</div>
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
															<select name="insurance" class="form-control" onchange='Insurance(this.value);'> 
																    <option value="" disabled selected>Select Insurance</option>  
																    <option value="professional">Professional</option>
																    <option value="indemnity">Indemnity</option>
																    <option value="public liability">Public Liability</option>
																    <option value="products liability">Products Liability</option>
																    <option value="employers liability">Employers Liability</option>
																    <option value="others">Others</option>
																  </select>
																  <input type="text" name="bonds" id="insurance" style='display:none;'/>
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
															<select name="bonds" class="form-control" onchange='Bonds(this.value);'> 
														    <option value="" disabled selected>Select Bonds </option>  
														    <option value="performance bond">Performance Bond</option>
														    <option value="parent company guarantee">Parent Company Guarantee</option>
														    <option value="tender/bid bond">Tender/Bid Bond</option>
														    <option value="on demand bond">On Demand Bond</option>
														    <option value="conditional/on  default bond">Conditional/On  Default Bond</option>
														    <option value="others">Others</option>
														  </select>
														  <input type="text" name="bonds" id="bonds" style='display:none;'/>
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
															<!-- <div class="form-group">
																<div class="cnt_bond">
															    <button class="btn btn-primary" id="cnt_bond" >Add Another Bond</button>
															    <div></div>
																</div>
															</div> -->
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
															<input type="number" placeholder="Insert Limit of Liability " name="limit_of_liability" class="form-control">
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
															<div class="form-group">
																<button type="button" class="btn btn-danger">Add another document </button>
															</div>
		    										</div>
		    									</div>
		    								</div>
		    							</div>
		    						</form>
		    					</div>
		    					<div id="section31" class="tab-pane fade tender-container">
		    						<h3 class="bid-form-title">Evaluation Settings</h3>
		    						<table class="table table-striped table-hover gids" id="customers">
									  <tr>
									    <th>Factors</th>
									    <th>Importance</th>
									    <th>Factors</th>
									    <th>Importance</th>
									    <th>Factors</th>
									    <th>Importance</th>
									  </tr>
									  <tr>
									  	<td class="qua" style="color: black;">Qualitative</td>
									  	<td>30%</td>
									  	<td>Oraganisation</td>
									    <td>30%</td>
									    <td>Project Experience</td>
									    <td></td>
									  </tr>
									  <tr>
									  	<td rowspan="19"></td>
									  	<td rowspan="19"></td>
									  	<td rowspan="5"></td>
									    <td rowspan="5"></td>
									    <td>Variety of Services</td>
									    <td></td>
									  </tr>
									  <tr>
									  	{{-- <td></td>
									  	<td></td> --}}
									  	{{-- <td></td>
									    <td></td> --}}
									    <td>Awards</td>
									    <td></td>
									  </tr>
									  <tr>
									  	{{-- <td></td>
									  	<td></td> --}}
									  	{{-- <td></td>
									    <td></td> --}}
									    <td>Accreditations</td>
									    <td></td>
									  </tr>
									  <tr>
									  	{{-- <td></td>
									  	<td></td> --}}
									  	{{-- <td></td>
									    <td></td> --}}
									    <td>Relationship to<br>Employer</td>
									    <td></td>
									  </tr>
									  <tr>
									  	{{-- <td></td>
									  	<td></td> --}}
									  	{{-- <td></td>
									    <td></td> --}}
									    <td><b>Total</b></td>
									    <td><b>100%</b></td>
									  </tr>
									  <tr>
									  	{{-- <td></td>
									  	<td></td> --}}
									  	<td>Individuals</td>
									    <td>70%</td>
									    <td>Project Experience</td>
									    <td></td>
									  </tr>
									  <tr>
									  	{{-- <td></td>
									  	<td></td> --}}
									  	<td rowspan="12"></td>
									    <td rowspan="12"></td>
									    <td>Years of relevant<br>Experience</td>
									    <td></td>
									  </tr>
									  <tr>
									  	{{-- <td></td>
									  	<td></td> --}}
									  	{{-- <td></td>
									    <td></td> --}}
									    <td>Industry Experience</td>
									    <td></td>
									  </tr>
									  <tr>
									  	{{-- <td></td>
									  	<td></td> --}}
									  	{{-- <td></td>
									    <td></td> --}}
									    <td>Awards</td>
									    <td></td>
									  </tr>
									  <tr>
									  	{{-- <td></td>
									  	<td></td> --}}
									  	{{-- <td></td>
									    <td></td> --}}
									    <td>Accreditations</td>
									    <td></td>
									  </tr>
									  <tr>
									  {{-- 	<td></td>
									  	<td></td> --}}
									  	{{-- <td></td>
									    <td></td> --}}
									    <td>Relationship to<br>Employer</td>
									    <td></td>
									  </tr>
									  <tr>
									  	{{-- <td></td>
									  	<td></td> --}}
									  	{{-- <td></td>
									    <td></td> --}}
									    <td>Communication Skills</td>
									    <td></td>
									  </tr>
									  <tr>
									  	{{-- <td></td>
									  	<td></td> --}}
									  	{{-- <td></td>
									    <td></td> --}}
									    <td>People Management</td>
									    <td></td>
									  </tr>
									  <tr>
									  	{{-- <td></td>
									  	<td></td> --}}
									  	{{-- <td></td>
									    <td></td> --}}
									    <td>Time Management</td>
									    <td></td>
									  </tr>
									  <tr>
									  	{{-- <td></td>
									  	<td></td> --}}
									  	{{-- <td></td>
									    <td></td> --}}
									    <td>Pro-Active</td>
									    <td></td>
									  </tr>
									  <tr>
									  	{{-- <td></td>
									  	<td></td> --}}
									  	{{-- <td></td>
									    <td></td> --}}
									    <td>Social Behaviour</td>
									    <td></td>
									  </tr>
									  <tr>
									  	{{-- <td></td>
									  	<td></td> --}}
									  	{{-- <td></td>
									    <td></td> --}}
									    <td>Technical 'Hard' Skills</td>
									    <td></td>
									  </tr>
									  <tr>
									  	{{-- <td></td>
									  	<td></td> --}}
									  	{{-- <td></td>
									    <td></td> --}}
									    <td><b>Total</b></td>
									    <td><b>100%</b></td>
									  </tr>
									  <tr>
									  	{{-- <td></td>
									  	<td></td> --}}
									  	<td><b>Total</b></td>
									    <td><b>100%</b></td>
									    <td rowspan="9"></td>
									    <td rowspan="9"></td>
									  </tr>
									  <tr>
									  	<td>Quantitave</td>
									  	<td>40%</td>
									  	<td></td>
									    <td></td>
									    {{-- <td></td>
									    <td></td> --}}
									  </tr>
									  <tr>
									  	<td>Risk</td>
									  	<td>30%</td>
									  	<td></td>
									    <td></td>
									    {{-- <td></td>
									    <td></td> --}}
									  </tr>
									  <tr>
									  	<td rowspan="6"></td>
									  	<td rowspan="6"></td>
									  	<td>Insurances</td>
									    <td></td>
									    {{-- <td></td>
									    <td></td> --}}
									  </tr>
									  <tr>
									  	{{-- <td></td>
									  	<td></td> --}}
									  	<td>Bonds</td>
									    <td></td>
									    {{-- <td></td>
									    <td></td> --}}
									  </tr>
									  <tr>
									  	{{-- <td></td>
									  	<td></td> --}}
									  	<td>3rd Parties</td>
									    <td></td>
									    {{-- <td></td>
									    <td></td> --}}
									  </tr>
									  <tr>
									  	{{-- <td></td>
									  	<td></td> --}}
									  	<td>Limit of <br>Liability</td>
									    <td></td>
									    {{-- <td></td>
									    <td></td> --}}
									  </tr>
									  <tr>
									  	{{-- <td></td>
									  	<td></td> --}}
									  	<td>Net<br>Contribution<br>Clause</td>
									    <td></td>
									    {{-- <td></td>
									    <td></td> --}}
									  </tr>
									  <tr>
									  	{{-- <td></td>
									  	<td></td> --}}
									  	<td rowspan="1"><b>Total</b></td>
									    <td rowspan="1"><b>100%</b></td>
									    {{-- <td></td>
									    <td></td> --}}
									  </tr>
									  <tr>
									  	<td><b>Total</b></td>
									  	<td><b>100%</b></td>
									  	{{-- <td></td>
									    <td></td> --}}
									    {{-- <td></td>
									    <td></td> --}}
									  </tr>
									</table>
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
<script type="text/javascript">
	function edits(name) {
    document.getElementById(name).addClass('active');
};
</script>
<script type="text/javascript">
	$(document)
	    .one('focus.autoExpand', 'textarea.autoExpand', function(){
	        var savedValue = this.value;
	        this.value = '';
	        this.baseScrollHeight = this.scrollHeight;
	        this.value = savedValue;
	    })
	    .on('input.autoExpand', 'textarea.autoExpand', function(){
	        var minRows = this.getAttribute('data-min-rows')|0, rows;
	        this.rows = minRows;
	        rows = Math.ceil((this.scrollHeight - this.baseScrollHeight) / 16);
	        this.rows = minRows + rows;
	    });
</script>
<script type="text/javascript">
	function Insurance(val){
 var element=document.getElementById('insurance');
 if(val=='Select Insurance'||val=='others')
   element.style.display='block';
 else  
   element.style.display='none';
	}
</script>
<script type="text/javascript">
function Bonds(val){
var element=document.getElementById('bonds');
 if(val=='Select Bonds'||val=='others')
   element.style.display='block';
 else  
   element.style.display='none';
	}
</script>
<script>
function myFunction() {
   document.getElementById("water").contentEditable = true;
   document.getElementById("number").contentEditable = true;
   document.getElementById("location").contentEditable = true;
   document.getElementById("survey").contentEditable = true;
   document.getElementById("tube").contentEditable = true;
   document.getElementById("tube1").contentEditable = true;
   document.getElementById("bus").contentEditable = true;
   document.getElementById("Adjacent").contentEditable = true;
   document.getElementById("history").contentEditable = true;
   document.getElementById("cons1").contentEditable = true;
   document.getElementById("cons2").contentEditable = true;
   document.getElementById("cons3").contentEditable = true;
   document.getElementById("type").contentEditable = true;
   document.getElementById("value").contentEditable = true;
   document.getElementById("red1").contentEditable = true;
   document.getElementById("red2").contentEditable = true;
   document.getElementById("red3").contentEditable = true;
   document.getElementById("res1").contentEditable = true;
   document.getElementById("res2").contentEditable = true;
   document.getElementById("res3").contentEditable = true;
   document.getElementById("office").contentEditable = true;
   document.getElementById("ret1").contentEditable = true;
   document.getElementById("ret2").contentEditable = true;
   document.getElementById("total").contentEditable = true;
   document.getElementById("rib1").contentEditable = true;
   document.getElementById("rib2").contentEditable = true;
   document.getElementById("rib3").contentEditable = true;
   document.getElementById("rib4").contentEditable = true;
   document.getElementById("met1").contentEditable = true;
   document.getElementById("met2").contentEditable = true;
   document.getElementById("pro").contentEditable = true;
   document.getElementById("arc").contentEditable = true;
   document.getElementById("struc").contentEditable = true;
   document.getElementById("ing").contentEditable = true;
}
</script>
<script type="text/javascript">
	function myFunction1(){	
   document.getElementById("que1").contentEditable = true;
   document.getElementById("que2").contentEditable = true;
   document.getElementById("que3").contentEditable = true;
   document.getElementById("que4").contentEditable = true;
   document.getElementById("que5").contentEditable = true;
   document.getElementById("que6").contentEditable = true;
	}
</script>

<script type="text/javascript">
	function myFunction2(){
    document.getElementById("emp1").contentEditable = true;
   document.getElementById("emp2").contentEditable = true;
   document.getElementById("emp3").contentEditable = true;
   document.getElementById("emp4").contentEditable = true;
   document.getElementById("emp5").contentEditable = true;
	}
</script>
@endsection