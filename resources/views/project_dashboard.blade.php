@extends('layouts.master')

@section('content')
<style type="text/css">
	thead.thead tr th {
	  vertical-align: middle;
	}
	.widt th {
		width: 80px;
	}
	.zui-table {
	    border: none;
	    border-right: solid 1px #DDEFEF;
	    border-collapse: separate;
	    border-spacing: 0;
	}
	.zui-table thead th {
	    background-color: #fe7235;
	    border: none;
	    color: white;
	    padding: 10px;
	    text-align: left;
	    white-space: nowrap;
	    text-align: center;
	}
	.zui-table tbody td {
	    border-bottom: solid 1px #DDEFEF;
	    color: #333;
	    padding: 10px;
	    text-shadow: 1px 1px 1px #fff;
	    white-space: nowrap;
	}
	.zui-wrapper {
	    position: relative;
	}
	.zui-scroller {
	    margin-left: 141px;
	    overflow-x: scroll;
	    overflow-y: visible;
	    padding-bottom: 5px;
	}
	.zui-table .zui-sticky-col {
	    left: 0;
	    position: absolute;
	    top: auto;
	    border-right: 1px solid orange;
	    width: 141px;
	    text-align:center; 
	}
	table.zui-table tbody tr:nth-child(even){
		background: #fff8f3;
	}
	table.zui-table tbody tr:hover {
	    background-color: #ffc2a7 !important;
	}
	.btop td{
		border-top: 5px solid orange;
	}
</style>
<div class="container below-header">
	<h1 class="project-title bid-page-title centerh">Project Dashboard</small></h1>
</div>
<div class="container">
 <div class="modal fade" id="myModal2" role="dialog" tabindex="-1">
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
		          <p>Feedback date<div class="form-group">
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
		        <div class="modal-footer" style="text-align: center;">
		          <button type="button" class="btn btn-primary">Start Tender Process</button>
		          <button type="button" class="btn btn-primary butgrey">Go Back</button>
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
				<div id="section1" class="tab-pane fade in active tender-container" style="    background:transparent;border: none;padding-top:0;margin-left:auto;margin-right:auto;width:1040px;">
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
		    				<a href="#tend">Tender Queries</a>
		    				<a href="#emptab">Employer Details</a>
		    			</div>
		    		</div>
		    		<div class="tender-container">
		    			<div class="row">
		    				<div class="col-sm-12 active-tenders" id="cprofile">
		    						<h3>Project Information<button class="btn buts" onclick="myFunction()" style="float:right;margin-top:-14px;" ><i class="fa fa-edit" style="font-size:15px"></i>Edit</button></h3>
		    				</div>			
		    				<div class="col-sm-12">
		    					<form id="projform" action="{{ url('project_info')}}" method="POST">
		    						@csrf
		    					<table class="table table-striped table-hover">
		    						<tr>
		    							<td>Project Title
  											
										</td>
		    							<td><input id="water" type="text" name="project_title" class="form-control proje" placeholder="Canada Water Masterplan" readonly></td>
		    						</tr>
		    						<tr>
		    							<td>Project ID
			    							
		    							</td>
		    							<td><input type="number" name="project_id" class="form-control proje" placeholder="123456789" readonly></td>
		    						</tr>
		    						<tr>
		    							<td>Location
		    								
		    							</td>
		    							<td><input type="text" name="location" class="form-control proje" placeholder="Canada Water, London, SE16, United Kingdom" readonly></td>
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
		    											<input type="text" name="main_roads" class="form-control proje" placeholder="Surrey Quays Road" readonly>
		    										</td>
		    									</tr>
		    									<tr>
		    										<td>
		    											<p><b>Tube Stations</b></p>
		    										</td>
		    										<td>
		    											<input type="text" name="tube_station1" class="form-control proje" placeholder="Canada Water 0.5km" readonly>
		    											<input type="text" name="tube_station2" class="form-control proje" placeholder="Surrey Quays 1.5km" readonly>
		    										</td>
		    									</tr>
		    									<tr>
		    										<td>
		    											<p><b>Bus Lines</b> </p>
		    										</td>
		    										<td>
		    											<input type="text" name="bus_lines" class="form-control proje" placeholder="701, 702, 851, 930" readonly>
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
		    										<td><input type="text" name="adjacent_uses" class="form-control proje" placeholder="Residential (High-End), Regeneration Space, Retail" readonly></td>
		    									</tr>
		    									<tr>
		    										<td>History</td>
		    										<td><input type="text" name="history" class="form-control proje" placeholder="Residential (High-End), Former Docks and Warehouses" readonly></td>
		    									</tr>
		    								</table>
		    							</td>
		    						</tr>
		    						<tr>
		    							<td>Constraints
		    								
		    							</td>
		    							<td>                               
		    								<input type="text" name="cons1" class="form-control proje" placeholder="Adjacent Tube Tunnel" readonly>
		    								<input type="text" name="cons2" class="form-control proje" placeholder="Existing Buildings" readonly>
		    								<input type="text" name="cons3" class="form-control proje" placeholder="Weak Ground Conditions" readonly>
		    							</td>
		    						</tr>
		    						<tr>
		    							<td>Type of Development
		    								
		    							</td>
		    							<td><input type="text" name="type_of_development" class="form-control proje" placeholder="New Built" readonly></td>
		    						</tr>
		    						<tr>
		    							<td>Construction Value
		    								
		    							</td>
		    							<td><input type="text" name="construction_value" class="form-control proje" placeholder="£ 300,000,000" readonly></td>
		    						</tr>
		    						<tr>
		    							<td>Types of Use
		    								
		    							</td>
		    							<td>
		    								<table width="100%">
		    									<tr>
		    										<td>Residential</td>&nbsp
		    										<td><input type="text" name="res1_m1" class="form-control proje" placeholder="30,000m2" readonly></td>
		    										<td><input type="text" name="res1_units" class="form-control proje" placeholder="200 units" readonly></td>
		    										<td><input type="text" name="res1_type" class="form-control proje" placeholder="High-End" readonly></td>
		    									</tr>
		    									<tr>
		    										<td>Residential</td>
		    										<td><input type="text" name="res2_m1" class="form-control proje" placeholder="10,000m2" readonly></td>
		    										<td><input type="text" name="res2_units" class="form-control proje" placeholder="70 units" readonly></td>
		    										<td><input type="text" name="res2_type" class="form-control proje" placeholder="Affordable" readonly></td>
		    									</tr>
		    									<tr>
		    										<td>Office</td>
		    										<td><input type="text" name="office" class="form-control proje" placeholder="15,000m2" readonly></td>
		    										<td></td>
		    										<td></td>
		    									</tr>
		    									<tr>
		    										<td>Retail</td>
		    										<td><input type="text" name="ret_m2" class="form-control proje" placeholder="15,000m2" readonly></td>
		    										<td><input type="text" name="ret_units" class="form-control proje" placeholder="5 units" readonly></td>
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
		    										<td><input type="text" name="riba_s1comp" class="form-control proje" placeholder="01/03/2019" readonly></td>
		    									</tr>
		    									<tr>
		    										<td>RIBA Stage 2 Completion</td>
		    										<td><input type="text" name="riba_s2comp" class="form-control proje" placeholder="01/07/2019" readonly></td>
		    									</tr>
		    									<tr>
		    										<td>RIBA Stage 3 Completion</td>
		    										<td><input type="text" name="riba_s3comp" class="form-control proje" placeholder="01/10/2019" readonly></td>
		    									</tr>
		    									<tr>
		    										<td>RIBA Stage 4 Completion</td>
		    										<td><input type="text" name="riba_s4comp" class="form-control proje" placeholder="01/12/2019" readonly></td>
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
		    										<td><input type="text" name="design_team" class="form-control proje" placeholder="Tuesday, 14:00 – 15:30, Weekly" readonly></td>
		    									</tr>
		    									<tr>
		    										<td>Project Progress Meeting</td>
		    										<td><input type="text" name="project_progress" class="form-control proje" placeholder="Tuesday, 15:30 – 16:30, Fortnightly" readonly></td>
		    									</tr>
		    								</table>
		    							</td>
		    						</tr>
		    						<tr>
		    							<td>Procurement Route
		    								
		    							</td>
		    							<td><input type="text" name="procurement_nd_route" class="form-control proje" placeholder="Design & Build" readonly></td>
		    						</tr>
		    						<tr>
		    							<td>Project Team
		    								
		    							</td>
		    							<td>
		    								<table width="100%">
		    									<tr>
		    										<td>Architect</td>
		    										<td><input type="text" name="architect" class="form-control proje" placeholder="Allies and Morrison" readonly></td>
		    									</tr>
		    									<tr>
		    										<td>Structural Engineer</td>
		    										<td><input type="text" name="structural" class="form-control proje" placeholder="AKT II" readonly></td>
		    									</tr>
		    									<tr>
		    										<td>Services Engineer</td>
		    										<td><input type="text" name="services" class="form-control proje" placeholder="Sweco" readonly></td>
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
		    					<div style="text-align: center;">
		    						<button type="button" class="btn btn-default" style="color: white; background: gray;width: 120px;">Save</button>
		    						<button type="submit" class="btn btn-default">submit</button>
		    					</div>
		    					</form>				
		    				</div>
		    			</div>
		    		</div>
		    		<div class="tender-container" id="tend">
		    			<div class="row">
		    				<div class="col-sm-12 active-tenders">
		    					<h3>Tender Queries<button class="btn buts" onclick="myFunction1()" style="float: right;margin-top:-14px;"><i class="fa fa-edit" style="font-size:15px"></i>Edit</button></h3>
		    					<div class="row">	
		    						<div class="col-sm-12">				
		    							<table class="table table-striped table-hover" id="a">
		    								<tr>
		    									<td width="10%" style="font-weight: 600;">#</td>
		    									<td style="font-weight: 600;">Query</td>
		    									<td style="font-weight: 600;">Responses</td>

		    								</tr>
		    								<tr>
		    									<td>1</td>
		    									<td>TextTextTextTextTextTextTextTextText</td>
		    									<td>TextTextTextTextTextTextTextTextTextTextTextText</td>
		    								</tr>
		    								<tr>
		    									<td>2</td>
		    									<td>TextTextTextTextTextTextTextTextText</td>
		    									<td>TextTextTextTextTextTextTextTextTextTextTextText</td>
		    								</tr>
		    								<tr>
		    									<td>3</td>
		    									<td>TextTextTextTextTextTextTextTextText</td>
		    									<td>TextTextTextTextTextTextTextTextTextTextTextText</td>
		    								</tr>
		    							</table>
		    						</div>
		    					</div>
		    					<div style="text-align: center;">
		    						<button type="button" class="btn btn-default" style="color: white; background: gray;width: 120px;">Save</button>
		    					</div>
		    				</div>
		    			</div>
		    		</div>
					<div class="tender-container" id="emptab">
						<div class="row">
							<div class="col-sm-12 active-tenders">
								<h3>Employer Details<button class="btn buts" onclick="myFunction2()" style="float: right;margin-top:-14px;"><i class="fa fa-edit" style="font-size:15px"></i>Edit</button></h3>
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
										<p>Active Projects <span class="project1">4</span></p>
										<p>Active Tenders <span class="project1">9</span></p>
									

									</div>
								</div>
								<div style="text-align: center;">
									<button type="button" class="btn btn-default" style="color: white; background: gray;width: 120px;">Save</button>

								</div>
							</div>
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
			            <td style="text-align: left;font-weight:bolder; " class="td">Fire Engineer <a><p>Edit Tender</p></a></td>
			            <td class="td">Active</td>
			            <td class="td">1/1/2018</td>
			            <td class="td">1/9/2018</td>
			            <td class="td">5 days</td>
			            <td class="td"><strong style="font-size: 25px;">3</strong><a data-toggle="modal" data-backdrop="static" data-target="#viewBid"><p>View Bids</p></a></td>
			            <td class="td"><strong style="font-size: 25px;">7</strong><a data-toggle="modal" data-backdrop="static" data-target="#viewQueries"><p>View Answer/ Queries</p></a></td>
			            <td class="td"></button><button style="width: 101px;" class="btn btn-success">Complete <br>Tender  <br>Process</button></td>
  			        </tr>
  			        <tr>
			            <td style="text-align: left;font-weight:bolder; " class="td">Service Engineer <a><p>Edit Tender</p></a></td>
			            <td class="td">Drafted</td>
			            <td class="td">TBC</td>
			            <td class="td">TBC</td>
			            <td class="td">TBC</td>
			            <td class="td">TBC</td>
			            <td class="td">TBC</td>
			            <td class="td"></td>
  			        </tr>
  			        <tr>
			            <td style="text-align: left;font-weight:bolder; " class="td">Structural Engineer</td>
			            <td class="td">Closed</td>
			            <td class="td">1/1/2018</td>
			            <td class="td">1/9/2018</td>
			            <td class="td">5 days</td>
			            <td class="td"><strong style="font-size: 25px;">3</strong><a data-toggle="modal" data-backdrop="static" data-target="#viewBid"><p>View Bids</p></a></td>
			            <td class="td"><strong style="font-size: 25px;">7</strong><a data-toggle="modal" data-backdrop="static" data-target="#viewQueries"><p>View Answer/Queries</p></a></td>
			            <td class="td">
			              </button><button class="btn btn-primary" style="margin-bottom:10px;    width: 102px;">Dowload <br>Evalution<br>Report</button>
			            </button><button class="btn btn-warning">Negotiate <br>Scope and <br>Appointment</button></td>
			            
  			        </tr>
    			    </tbody>
	    			</table>
	    			<button class="btn">Print Report</button>
					</div>
					<div class="row" style="margin: 25px;">
						<h4 style="font-weight:bolder; ">Cashflow of selected tenderers</h4>
						
    			<div class="zui-wrapper">
    			    <div class="zui-scroller">
    			        <table class="zui-table">
    			            <thead>
    			                <tr>
    			                    <th class="zui-sticky-col">Services</th>
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
    			                    <th>Jan-19</th>
    			                    <th>Feb-19</th>
    			                    <th>Mar-19</th>
    			                </tr>
    			            </thead>
    			            <tbody>
    			                <tr>
    			                    <td class="zui-sticky-col">Fire Engineer</td>
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
    			                    <td class="td">£1,000.00</td>
    			                    <td class="td">£1,000.00</td>
    			                    <td class="td">£1,000.00</td>
    			                </tr>
    			                <tr>
    			                    <td class="zui-sticky-col">Architect</td>
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
    			                    <td class="td">£1,000.00</td>
    			                    <td class="td">£1,000.00</td>
    			                    <td class="td">£1,000.00</td>
    			                </tr>
    			                <tr class="btop">
    			                    <td class="zui-sticky-col"><strong>Total</strong></td>
    			                    <td class="td"><b>£2,000.00</b></td>
    			                    <td class="td"><b>£2,000.00</b></td>
    			                    <td class="td"><b>£2,000.00</b></td>
    			                    <td class="td"><b>£2,000.00</b></td>
    			                    <td class="td"><b>£2,000.00</b></td>
    			                    <td class="td"><b>£2,000.00</b></td>
    			                    <td class="td"><b>£2,000.00</b></td>
    			                    <td class="td"><b>£2,000.00</b></td>
    			                    <td class="td"><b>£2,000.00</b></td>
    			                    <td class="td"><b>£2,000.00</b></td>
    			                    <td class="td"><b>£2,000.00</b></td>
    			                    <td class="td"><b>£2,000.00</b></td>
    			                    <td class="td"><b>£2,000.00</b></td>
    			                    <td class="td"><b>£2,000.00</b></td>
    			                    <td class="td"><b>£2,000.00</b></td>
    			                </tr>
    			            </tbody>
    			        </table>
    			    </div>
    			</div><br>
	    			<button class="btn">Export to MS Excel</button>
					</div>
				</div>	
				<div id="section4" class="tab-pane fade tender-container" style="padding-top:0;margin-left:auto;margin-right:auto;">
					<div class="row" style="margin: 25px;">
		    	<div class="">
		    		<div class="row">
		    			<div class="col-sm-3">
		    				<div class="tender-container" id="mama">
		    					<ul class="nav bid-form-nav">
		    						<li class=""><a data-toggle="tab" href="#">Pre-Qualification Questionnaire</a></li>
		    						<li class="active"><a data-toggle="tab" href="#section11">Scope</a></li>
		    						<li><a data-toggle="tab" href="#section21">Appointment</a></li>
		    						<li><a data-toggle="tab" href="#section31">Evaluation Settings</a></li>
		    						<li><a data-toggle="tab" href="#section41">Quality Assurance</a></li><br>
		    						
		    					</ul><br>
		    				</div>
		    			</div>
		    			<div class="col-sm-9 questionnaire-section">
		    				<div class="tab-content">
		    					<div id="section11" class="tab-pane fade in active tender-container">
		    						<h3 class="bid-form-title">Scope</h3>

		    						<p style="padding: 18px; border: 1px solid grey;border-radius: 6px;">
		    						<b>Note: Read first!</b> <br>
		    						In order to complete this section, you have to download the excel file below. Afterwards, you have to fill out all the important information or fields needed. Please be informed that all the data you have  inputted will remain confidential.</p>
		    						{{-- 
		    						<div class="down">
		    							<a download="Book-Scope.xlsx" href="{{asset('css/scopexl/Book-Scope.xlsx')}} "><i class="fa fa-download"> Download</i></a>
		    						</div> --}}

		    						<div class="row downloader" style="    display: flex;     padding: 25px;">
		    						  <img
		    						  	style="width: 150px;height: 150px;"
		    						    alt="excel-logo"
		    						    class="excel"
		    						    src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/86/Microsoft_Excel_2013_logo.svg/2000px-Microsoft_Excel_2013_logo.svg.png" />
		    						  <div class="download_icon">
		    						    <p>
		    						     <a download="Emp_Book-Scope.xlsx" href="{{asset('css/scopexl/Emp_Book-Scope.xlsx')}} "><i class="fa fa-download"> Download</i></a>
		    						    </p>
		    						    <p class="download_para">
		    						      <small>Lorem <abbr title="Download">DL</abbr>.  It has survived not only five centuries, but also the leap into electronic typesetting</small>
		    						    </p>
		    						  </div>
		    						</div><br>

		    						<p style="padding: 18px; border: 1px solid grey;border-radius: 6px;">
		    						<b>Note: Almost there!</b> <br>
		    						Already done filling up the fields? Well you're almost done! Once, you have completed it. Kindly, submit or drag the excel file below. You are good to proceed now. Thank you!</p>

		    						<div class="row" style="padding: 30px; ">
		    							{{-- <form method="POSt" enctype="multipart/form-data" action="upload.php">
		    								<input type="file" name="file" value="Upload">
		    								<input type="submit" value="Upload">
		    							</form> --}}

		    							<form id="upload" action="index.html" method="POST" enctype="multipart/form-data">

		    							<fieldset>
		    							<legend>Upload Excel File</legend>

		    							<input type="hidden" id="MAX_FILE_SIZE" name="MAX_FILE_SIZE" value="300000" />

		    							<div>
		    								<label for="fileselect">File to upload:</label>
		    								<input type="file" id="fileselect" name="fileselect[]" />
		    								<div id="filedrag">or drop file here</div>
		    							</div>

		    							{{-- <div id="submitbutton">
		    								<button type="submit">Upload Files</button>
		    							</div> --}}

		    							</fieldset>

		    							</form>

		    							<div id="messages">
		    							<p>Status Messages</p>
		    							</div>

		    							<div class="form-group butcent">
								<input id="sec2" type="submit" data-toggle="tab"name="Next" value="Next" class="btn btn-primary butsize">
							</div>

		    						</div><br> 


		    						{{-- <div class="row" style="margin: 0;">	
		    						
								<div class="col-sm-12">
									<table id="Riba2">
											  <tr>
											    <th>Deliverable</th>
											    <th>Details / Contents</th>
											    <th style="border-left:3px solid #fe7235;border-top: ">R</th>
											    <th>A</th>
											    <th>C</th>
											    <th style="border-right:3px solid #fe7235; ">I</th>
											    <th>0</th>
											    <th>1</th>
											    <th>2</th>
											    <th>3</th>
											    <th>4</th>
											    <th>5</th>
											    <th>6</th>
											    <th>7</th>


											  </tr>
											  <tr>
											    <td>Strategic Brief</td>
											  <td contenteditable='true'></td>
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											    											
											  </tr>
											  <tr>
											    <td>Project Programme (Lead)</td>
											    
											    <td contenteditable='true'></td>
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  </tr>
											  <tr>
											    <td>Feasibility Study</td>
											    <td contenteditable='true'></td>
											   
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  </tr>
											  <tr>
											    <td>Design Responsibility Matrix</td>
											     <td contenteditable='true'></td>
											   
											   
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  </tr>
											  <tr>
											   <td>Site Information Report</td>
											     <td contenteditable='true'></td>
											     <td contenteditable='true'></td>
											     <td><div class="mama" onmouseup="mUp(this)"></div></td>
											     <td><div class="mama" onmouseup="mUp(this)"></div></td>
											     <td><div class="mama" onmouseup="mUp(this)"></div></td>
											    
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  </tr>
											  <tr>
											    <td>Information Exchange Strategy</td>
											     <td contenteditable='true'></td>
											     <td contenteditable='true'></td>
											    <td><div class="mama" onmouseup="mUp(this)"></div></td>
											    <td><div class="mama" onmouseup="mUp(this)"></div></td>
											    <td><div class="mama" onmouseup="mUp(this)"></div></td>
											    <td><div class="mama" onmouseup="mUp(this)"></div></td>
											    
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  </tr>
											  <tr>
											    <td>Project Brief</td>
											     <td contenteditable='true'></td>
											     <td contenteditable='true'></td>
											    <td><div class="mama" onmouseup="mUp(this)"></div></td>
											    <td><div class="mama" onmouseup="mUp(this)"></div></td>
											    <td><div class="mama" onmouseup="mUp(this)"></div></td>
											    <td><div class="mama" onmouseup="mUp(this)"></div></td>
											   
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  </tr>
											  <tr>
											    <td>Risk Assessment (Lead)</td>
											     <td contenteditable='true'></td>
											     <td contenteditable='true'></td>
											    <td><div class="mama" onmouseup="mUp(this)"></div></td>
											    <td><div class="mama" onmouseup="mUp(this)"></div></td>
											    <td><div class="mama" onmouseup="mUp(this)"></div></td>
											    <td><div class="mama" onmouseup="mUp(this)"></div></td>
											   

											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  </tr>
											  <tr>
											    <td>Handover Strategy (Lead)</td>
											     <td contenteditable='true'></td>
											     <td contenteditable='true'></td>
											    <td><div class="mama" onmouseup="mUp(this)"></div></td>
											    <td><div class="mama" onmouseup="mUp(this)"></div></td>
											    <td><div class="mama" onmouseup="mUp(this)"></div></td>
											    <td><div class="mama" onmouseup="mUp(this)"></div></td>
											    

											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  </tr>
											  <tr>
											    <td>Project Execution Plan</td>
											     <td contenteditable='true'></td>
											     <td contenteditable='true'></td>
											    <td><div class="mama" onmouseup="mUp(this)"></div></td>
											    <td><div class="mama" onmouseup="mUp(this)"></div></td>
											    <td><div class="mama" onmouseup="mUp(this)"></div></td>
											    <td><div class="mama" onmouseup="mUp(this)"></div></td>
											   
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  </tr>
											  <tr>
											    <td>Design Proposals from Design Team members</td>
											     <td contenteditable='true'></td>
											   <td><div class="mama" onmouseup="mUp(this)"></div></td>
											   <td><div class="mama" onmouseup="mUp(this)"></div></td>
											   <td><div class="mama" onmouseup="mUp(this)"></div></td>
											   <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  </tr>
											</table><br>
											 <button type="button" class="btn btn-info">Add another Lines</button>
								</div>
							</div><br>
							<div class="row">
								<div class="col-sm-12">
									<table id="Riba">
											  <tr>
											    <th> Meetings</th>
											    <th>Purpose</th>
											    <th>Attendees</th>
											    <th>Assumed Duration (hours)</th>
											    <th>Reoccurence / Number of Meetings</th>
											    <th>Arrange</th>
											    <th>Attend</th>
											    <th>1</th>
											    <th>2</th>
											    <th>3</th>
											    <th>4</th>
											    <th>5</th>
											    <th>6</th>
											    <th>7</th>
											  </tr>
											  <tr>
											    <td >Pre-Application Meetings</td>
											   <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											   <td><div class="mama" onmouseup="mUp(this)"></div></td>    
											  </tr>
											  <tr>
											    <td>Site Visits</td>
											     <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											   <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  </tr>
											  <tr>
											    <td>Site / Project Meetings (RIBA Stage 4/5)</td>
											    <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											   <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  </tr>
											  <tr>
											   <td>SC / PC Site Inspection</td>
											   <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											   <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  </tr>
											  <tr>
										</table><br>
										<button type="button" class="btn btn-primary">Add another Lines</button>
								</div>
							</div><br>
							<div class="row">
								<div class="col-sm-12">
									<table id="Content">
											  <tr>
											    <th> Design Considerations</th>
											    <th>Applies to</th>
											  </tr>
											 
											  <tr>
											   <td>Cost, programme, quality, health & safety during construction and operation, functionality, buildability, operation and maintenance.</td>
											    <td contenteditable='true'></td>
											  
											  </tr>
											   <tr>
											   <td>All information provided by other members of the Project Team.</td>
											      <td contenteditable='true'></td>
											  </tr>
											   <tr>
											   <td>Good Practice in the Selection of Construction Materials 2011 (British Council of Offices Publication.</td>
											     <td contenteditable='true'></td>
											  </tr>
											   <tr>
											   <td>Statutory standards</td>
											     <td contenteditable='true'></td>
											  </tr>
											   <tr>
											   <td>Co-ordination with structural and building services</td>
											     <td contenteditable='true'></td>
											  </tr>
										</table><br>
										<button type="button" class="btn btn-info">Add another Lines</button>
								</div>
							</div><br>
								<div class="row">
								<div class="col-sm-12">
									<table id="Stages">
											  <tr>
											    <th>Advise on</th>
											    <th>0</th>
											    <th>1</th>
											    <th>2</th>
											    <th>3</th>
											    <th>4</th>
											    <th>5</th>
											    <th>6</th>
											    <th>7</th>
											  </tr>
											  
										      <tr>
											  <td>Any products or materials, specified within the guidelines named in Item ???, that are relevant to the project and have been found to be deleterious or hazardous to health and safety.</td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  </tr>
											     <tr>
											  <td>Assembly of Project Team. (Lead)</td>
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  </tr>
											   <tr>
											  <td>Need for and the scope of services by consultants, specialists, sub-contractors or suppliers. (Lead)</td>
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  </tr>

											   <tr>
											  <td>Form and content of design outputs, their interfaces and a verification procedure. (Lead)</td>
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  </tr>

											   <tr>
											  <td>Resolution of defects.</td>
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  </tr>
											  <tr>
											  <td>Form and content of design outputs, their interfaces and a verification procedure. (Lead)</td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  </tr>

											   <tr>
											  <td>Relevant experience from previous projects.</td>
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  </tr>
											  <tr>
											    <th>Monitor</th>
											    <th></th>
											    <th></th>
											    <th></th>
											    <th></th>
											    <th></th>
											    <th></th>
											    <th></th>
											    <th></th>
											  </tr>

											  <tr>
											  <td>Work of the Designers Designers regarding…. [WHAT?]</td>
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  </tr>

											  <tr>
											  <td>Performance of Design Team.</td>
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
												</div></td>
											  </tr>										    
											 
											 <tr>
											  <td>Compliance with statutory and contract requirements.</td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  </tr>
											  <tr>
											    <th>Collaborate / Consult with</th>
											    <th></th>
											    <th></th>
											    <th></th>
											    <th></th>
											    <th></th>
											    <th></th>
											    <th></th>
											    <th></th>
											  </tr>
											  <tr>
											  <td>Relevant Third Parties as required.</td>
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  </tr>
											  <tr>
											  <td>Planning authority to discuss the project</td>
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  </tr>	
											  <tr>
											  <td>Statutory authorities on developing design.</td>
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  </tr>	
                                               <tr>
											  <td>Project Manager & Employer on significant design issues. (Lead).</td>
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  </tr>	
											  <tr>
											    <th>Co-ordinate</th>
											    <th></th>
											    <th></th>
											    <th></th>
											    <th></th>
											    <th></th>
											    <th></th>
											    <th></th>
											    <th></th>
											  </tr>
											  <tr>
											  <td>Collation of all planning submission documents.</td>
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  </tr>

											  <tr>
											  <td>Reviewing design information provided by contractors or specialists to establish whether that information can be co-ordinated and integrated with other project information.</td>
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  </tr>
											   <tr>
											    <th>Other</th>
											    <th></th>
											    <th></th>
											    <th></th>
											    <th></th>
											    <th></th>
											    <th></th>
											    <th></th>
											    <th></th>
											  </tr>
                                              
                                              <tr>
											  <td>Submit the [detailed / outline] planning application.</td>
                                              <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  </tr>

											   <tr>
											  <td>Assisting building user during initial occupation period.</td>
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  </tr>

											  <tr>
											  <td>Review all instructions and information about the Project, provided by the Employer.</td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  </tr>

											  <tr>
											  <td>preparing and making submissions under building acts and/or regulations or other statutory requirements.</td>
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											  </tr>


										</table><br>
										<button type="button" class="btn btn-success">Add another Lines</button>
								</div>
							</div><br> --}}
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
		    										<div class="form-group butcent">
														<input id="sec2" type="submit" data-toggle="tab"name="Next" value="Next" class="btn btn-primary butsize">
													</div>
		    									</div>
		    								</div>
		    							</div>
		    						</form>
		    					</div>
		    					<div id="section31" class="tab-pane fade tender-container">
		    						<h3 class="bid-form-title">Evaluation Settings</h3>
		    						
		    						<p style="padding: 18px; border: 1px solid grey;border-radius: 6px;">
		    						<b>Note: Read first!</b> <br>
		    						In order to complete this section, you have to download the excel file below. Afterwards, you have to fill out all the important information or fields needed. Please be informed that all the data you have  inputted will remain confidential.</p>
		    						{{-- 
		    						<div class="down">
		    							<a download="Book-Scope.xlsx" href="{{asset('css/scopexl/Book-Scope.xlsx')}} "><i class="fa fa-download"> Download</i></a>
		    						</div> --}}

		    						<div class="row downloader" style="    display: flex;     padding: 25px;">
		    						  <img
		    						  	style="width: 150px;height: 150px;"
		    						    alt="excel-logo"
		    						    class="excel"
		    						    src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/86/Microsoft_Excel_2013_logo.svg/2000px-Microsoft_Excel_2013_logo.svg.png" />
		    						  <div class="download_icon">
		    						    <p>
		    						     <a download="Evaluation Setting.xlsx" href="{{asset('css/scopexl/Evaluation Setting.xlsx')}} "><i class="fa fa-download"> Download</i></a>
		    						    </p>
		    						    <p class="download_para">
		    						      <small>Lorem <abbr title="Download">DL</abbr>.  It has survived not only five centuries, but also the leap into electronic typesetting</small>
		    						    </p>
		    						  </div>
		    						</div><br>

		    						<p style="padding: 18px; border: 1px solid grey;border-radius: 6px;">
		    						<b>Note: Almost there!</b> <br>
		    						Already done filling up the fields? Well you're almost done! Once, you have completed it. Kindly, submit or drag the excel file below. You are good to proceed now. Thank you!</p>

		    						<div class="row" style="padding: 30px;">
		    							{{-- <form method="POSt" enctype="multipart/form-data" action="upload.php">
		    								<input type="file" name="file" value="Upload">
		    								<input type="submit" value="Upload">
		    							</form> --}}

		    							<form id="upload" action="index.html" method="POST" enctype="multipart/form-data">

		    							<fieldset>
		    							<legend>Upload Excel File</legend>

		    							<input type="hidden" id="MAX_FILE_SIZE" name="MAX_FILE_SIZE" value="300000" />

		    							<div>
		    								<label for="fileselect">File to upload:</label>
		    								<input type="file" id="fileselect" name="fileselect[]" />
		    								<div id="filedrag">or drop file here</div>
		    							</div>

		    							{{-- <div id="submitbutton">
		    								<button type="submit">Upload Files</button>
		    							</div> --}}

		    							</fieldset>

		    							</form>

		    							<div id="messages">
		    							<p>Status Messages</p>
		    							</div><br>

		    							<div class="form-group butcent">
											<input id="sec2" type="submit" data-toggle="tab"name="Next" value="Next" class="btn btn-primary butsize">
										</div>
		    						</div><br> 

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
													    
														</div>
													</div>
    										</div>
    										<div class="form-group butcent">

    											<button type="button" class="btn btn-primary butsize" s data-toggle="modal"data-target="#myModal2">Start Tender Process</button>

											<input id="sec2" type="button" data-toggle="tab"name="Next" value="Next" class="btn btn-primary butsize">
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

<div class="modal fade" id="viewBid" role="dialog" tabindex="-1">
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

<div class="modal fade" id="viewQueries" role="dialog" tabindex="-1">
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
	   $('#projform input.proje').attr('readonly',false);
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
<script>
function mUp(obj) {
    obj.style.backgroundColor="none";
    obj.innerHTML="x";
}
</script>

@endsection