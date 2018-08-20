@extends('layouts.master')

@section('content')

	<div class="container-fluid below-header">
		<h1 class="project-title bid-page-title">Canada Water Masterplan - <small>Structural Engineer</small></h1>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<div class="tender-container">
					<ul class="nav bid-form-nav">
						<li class="active"><a data-toggle="tab" href="#section1">Pre-Qualification Questionnaire</a></li>
						<li><a data-toggle="tab" href="#section2">Organisation</a></li>
						<li><a data-toggle="tab" href="#section3">Individuals</a></li>
						<li><a data-toggle="tab" href="#section4">Approach</a></li>
						<li><a data-toggle="tab" href="#section5">Scope</a></li>
						<li><a data-toggle="tab" href="#section6">Appointment</a></li>
						<li><a data-toggle="tab" href="#section7">Quality Assurance</a></li><br>

						<li><a class="btn btn-primary" href="#">Feeback received</a></li>

					</ul><br>
				</div>
				
			</div>
			<div class="col-sm-8 questionnaire-section">
				<div class="tab-content">
					<div id="section1" class="tab-pane fade in active tender-container">
						<h3 class="bid-form-title">Pre-Qualification Questionnaire</h3>
						<form method="post">
							<div class="form-group">
								<i class="fa fa-check-square fa-5x" aria-hidden="true" id="size"></i> <label for="check1">Lorem ipsum dolor sit amet, consectetur adipisicing elit?</label>
							</div>
							<div class="form-group">
								<i class="fa fa-check-square" aria-hidden="true" id="size"></i> <label for="check1">Lorem ipsum dolor sit amet, consectetur adipisicing elit?</label>
							</div>
							<div class="form-group">
								<i class="fa fa-check-square" aria-hidden="true" id="size"></i> <label for="check1">Lorem ipsum dolor sit amet, consectetur adipisicing elit?</label>
							</div>
							<div class="form-group">
								<i class="fa fa-check-square" aria-hidden="true" id="size"></i> <label for="check1">Lorem ipsum dolor sit amet, consectetur adipisicing elit?</label>
							</div>
							<div class="form-group">
								<i class="fa fa-check-square" aria-hidden="true" id="size"></i> <label for="check1">Lorem ipsum dolor sit amet, consectetur adipisicing elit?</label>
							</div>
							<div class="form-group">
								<i class="fa fa-check-square" aria-hidden="true" id="size"></i> <label for="check1">Lorem ipsum dolor sit amet, consectetur adipisicing elit?</label>
							</div>
							<div class="form-group">
								<i class="fa fa-check-square" aria-hidden="true" id="size"></i> <label for="check1">Lorem ipsum dolor sit amet, consectetur adipisicing elit?</label>
							</div>
							<div class="form-group">
								<i class="fa fa-check-square" aria-hidden="true" id="size"></i> <label for="check1">Lorem ipsum dolor sit amet, consectetur adipisicing elit?</label>
							</div>
							<div class="form-group">
								<i class="fa fa-check-square" aria-hidden="true" id="size"></i> <label for="check1">Lorem ipsum dolor sit amet, consectetur adipisicing elit?</label>
							</div>
							<div class="form-group">
								<i class="fa fa-check-square" aria-hidden="true" id="size"></i> <label for="check1">Lorem ipsum dolor sit amet, consectetur adipisicing elit?</label>
							</div>						
						</form>
					</div>
					<div id="section2" class="tab-pane fade tender-container">
						<h3 class="bid-form-title">Organisation</h3>
						<form method="post">
							<div class="row">
								<div class="col-sm-12">
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												Providing  the  required  Service  since
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<div class="box"><p><b>Data Here</b></p></div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												Offered Services
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<div class="box"><p><b>Selected Service</b></p></div>
											</div>
											<div class="form-group">
												<div class="box"><p><b>Optional. If you have another Service.</b></p></div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												Awards
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<div class="box"><p><b>Name of Award</b></p></div>
											</div>
											<div class="form-group">
												<div class="box"><p><b>Details of the Award</b></p></div>
											</div>
											<div class="form-group">
												<div class="box"><p><b>Awarded by ---</b></p></div>
											</div>
											<div class="form-group">
												<div class="box"><p><b>Year Awarded</b></p></div>
											</div>
											<div class="form-group">
												<div class="box"><p><b>Optional. If you have another Award.</b></p></div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												Track  Record  of  relevant  Projects
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<div class="box"><p><b>Profile Title</b></p></div>
											</div>
											<div class="form-group">
												<div class="box"><p><b>Construction Value</b></p></div>
											</div>

										<div class="form-group">
								               <i class="fa fa-check-square" aria-hidden="true" id="size"></i> <label for="check1">Value Confidential</label>
							              </div>
							              <div class="form-group">
												<div class="box"><p><b>Description of the Project blah blah</b></p></div>
											</div>
											<div class="form-group">
												<img src="{{asset('images/demo3.jpg')}}" alt="Trulli" width ="200" height= "200p">
						                    </div>
							
											<div class="form-group">
													<div class="box"><p><b>Selected Type of Use</b></p></div>
											</div>
											<div class="form-group">
												<div class="box"><p><b>Optional. If you have another type of Use.</b></p></div>
											</div>
											<div class="form-group">
												<div class="box"><p><b>Selected Service</b></p></div>
											</div>
											<div class="form-group">
												<div class="box"><p><b>Provide Service From</b></p></div>
											</div>
											<div class="form-group">
												<div class="box"><p><b>Provide Service Until</b></p></div>
											</div>
											<div class="form-group">
												<div class="box"><p><b>Optional. If you have another Service</b></p></div>
											</div>
											<div class="form-group">
												<div class="box"><p><b>Selected Type of Development</b></p></div>
											</div>
											<div class="input_fields_type">
												    <div class="box"><p><b>Optional. If you have another type of Development</b></p></div>
											</div><br>
													
											<div class="form-group">				<img src="{{asset('images/			demo3.jpg')}}" alt="Trulli" width =		"200" height= "200p">
						                    </div>
						                    <div class="form-group">
												<div class="box"><p><b>Selected Project Team Member</b></p></div>
											</div>
											<div class="form-group">
												<div class="box"><p><b>Selected Company</b></p></div>
											</div>
											<div class="form-group">
												<div class="box"><p><b>New Company Name</b></p></div>
											</div>
											<div class="form-group">
												<div class="box"><p><b>Optional. Project Team Member</b></p></div>
											</div>
											<div class="form-group">
												<div class="box"><p><b>Optional. Another Project.</b></p></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
					<div id="section3" class="tab-pane fade tender-container">
						<h3 class="bid-form-title">Individuals</h3>
						<form method="post">
							<div class="row">
								<div class="col-sm-12">
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												Name
											</div>
										</div>
										<div class="col-sm-6">
											<div class="box"><p><b>Full Name</b></p></div>
										</div>
									</div>
									<div class="row" style="padding-bottom: 10px;">
										<div class="col-sm-6">
											<div class="form-group">
												Image
											</div>
										</div>
										<div class="col-sm-6" >
											<div class="form-group">
												<img style="padding-top: 10px;" src="{{asset('images/demo3.jpg')}}" alt="Trulli" width ="200" height= "200p">
											</div>
								        </div>
						            </div>
						            <div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												Accreditations
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<div class="box"><p><b>Selected Accreditation</b></p></div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6"></div>
										<div class="col-sm-6">
											<div class="box"><p><b>Year Awarded</b></p></div>
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-sm-6"></div>
										<div class="col-sm-6">
											<div class="box"><p><b>Optional. Another Accreditation</b></p></div>
										</div>
									</div><br>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												Degrees
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<div class="box"><p><b>Selected Degree</b></p></div>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">	

											</div>
										</div>
										<div class="col-sm-6">
											<div class="box"><p><b>Year Awarded</b></p></div>
											<br>
											
											
										</div>
									</div>
								
										<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												Awards
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<input type="text" name="" class="form-control" placeholder="Enter Name Of Award ">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<input type="text" name="" class="form-control" placeholder="Awarded  by  Body  ">
											</div>
										</div>
									</div>
									
									<div class="row">
										<div class="col-sm-6"></div>
										<div class="col-sm-6">
											<div class="input-group date" id="datepickers6" data-date="02-2012" 
											 data-date-format="mm-yyyy">
											<input class="form-control" type="text" placeholder="Year Awarded" readonly="readonly" name="date" >	  
											<span class="input-group-addon add-on"><span class="fa fa-calendar"></span></span>	  
											</div>
										</div>
									</div><br>
									
							
									 <div class="row">
										<div class="col-sm-6">
											<div class="form-group">
											 Services
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<select name="Sel"  class="form-control" >
													<option value="" disabled selected>Select Service</option>
													<option>Architect</option>
													<option>Sturctural Engineed</option>
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
													<option>Quantity Surveyor</option>
													<option>Project Manager</option>
													<option>Other</option>
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											
										</div>
										<div class="col-sm-6">
												<div class="input_fields_serve1">
												    <button class="btn btn-primary" id="add_field_serve1">Add Another Service</button>
												    <div></div>
												</div>
											</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											
										</div>
									</div><br>
										<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												Project Exprerience
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<input type="text" name="" class="form-control" placeholder="Enter Project Title">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<input type="text" name="" class="form-control" placeholder="Value">
											</div>
										</div>

									</div>
									<div class="row">
										<div class="col-sm-6">
											
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<select name="Sel"  class="form-control" >
													<option value="" disabled selected>Select Type of Use</option>
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
													<option>Other</option>
												</select>
												
											</div>
										</div>
									</div>
										<div class="row">
										<div class="col-sm-6">
											
										</div>
										<div class="col-sm-6">
												<div class="input_fields_add">
												    <button class="btn btn-primary" id="add_field_add">Add Another type of use</button>
												    <div></div>
												</div>
											</div>
									</div><br>
							        		<div class="row">
										<div class="col-sm-6">
											
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<select name="Sel"  class="form-control" >
													<option value="" disabled selected>Select Service</option>
													<option>Architect</option>
													<option>Sturctural Engineed</option>
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
													<option>Quantity Surveyor</option>
													<option>Project Manager</option>
													<option>Other</option>
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											
										</div>
											<div class="col-sm-6">
												<div class="input-group date" id="datepicker7" data-date="02-2012" 
												         data-date-format="mm-yyyy">

													 <input class="form-control" type="text" placeholder="Provided this Service from" readonly="readonly" name="date" >	  
													 <span class="input-group-addon add-on"><span class="fa fa-calendar"></span></span>	  
												</div>
											</div>

									</div><br>
									<div class="row">
										<div class="col-sm-6">
											
										</div>
											<div class="col-sm-6">
												<div class="input-group date" id="datepicker8" data-date="02-2012" 
												         data-date-format="mm-yyyy">

													 <input class="form-control" type="text" placeholder="Provided this Service until" readonly="readonly" name="date" >	  
													 <span class="input-group-addon add-on"><span class="fa fa-calendar"></span></span>	  
												</div>
											</div>

									</div><br>
									<div class="row">
										<div class="col-sm-6">
											
										</div>
										<div class="col-sm-6">
												<div class="input_fields_serve2">
												    <button class="btn btn-primary" id="add_field_serve2">Add Another service</button>
												    <div></div>
												</div>
											</div>
									</div><br>
										<div class="row">
										<div class="col-sm-6">
											
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<select name="Sel"  class="form-control" >
													<option value="" disabled selected>Select Types of Development</option>
													<option>New Built</option>
													<option>Refurbishment</option>
													<option>Demolition</option>
													
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											
										</div>
										<div class="col-sm-6">
												<div class="input_fields_type1">
												    <button class="btn btn-primary" id="add_field_type1">Add Another service</button>
												    <div></div>
												</div>
											</div>
									</div><br>
									<div class="row">
										<div class="col-sm-6"></div>

										<div class="col-sm-6">
												<input type="text" name="" class="form-control" placeholder="Enter Description of the Project">
											</div>
									</div><br>

									<div class="row">
										<div class="col-sm-6"></div>
											<div class="col-sm-6">					<img id="uploadPreview1" style="width: 100px; height: 100px;" />
												<input id="uploadImage1" type="file" name="myPhoto" onchange="PreviewImage1();" />
							                </div>
									</div><br>
									<div class="row">
										<div class="col-sm-6">
											
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<select name="Sel"  class="form-control" >
													<option value="" disabled selected>Select Project Team Member</option>
													<option>Architect</option>
													<option>Sturctural Engineed</option>
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
													<option>Quantity Surveyor</option>
													<option>Project Manager</option>
													<option>Other</option>
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6"></div>

										<div class="col-sm-6">
												<input type="text" name="" class="form-control" placeholder="Enter new Company Name">
											</div>
									</div><br>
									<div class="row">
										<div class="col-sm-6">
											
										</div>
										<div class="col-sm-6">
												<div class="input_fields_member">
												    <button class="btn btn-primary" id="add_field_member">Add Another Project Team Member</button>
												    <div></div>
												</div>
											</div>
									</div><br>
									<div class="row">
										<div class="col-sm-6">
											
										</div>
										<div class="col-sm-6">
												<div class="input_fields_project1">
												    <button class="btn btn-primary" id="add_field_project1">Add Another Project</button>
												    <div></div>
												</div>
											</div>
									</div><br>
									<div class="form-group butcent">
										<input type="submit" name="submit" value="Submit" class="btn btn-primary butsize ">
										<input type="submit" name="Save" value="Save" class="btn btn-success butsize color ">
									</div>
								</div>
							</div>
						</form>
					</div>
					<div id="section4" class="tab-pane fade tender-container">
						<h3 class="bid-form-title">Approach</h3>
						<form method="post">
							<div class="row">
								<div class="col-sm-12">
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												Comments on Constraints and potential Issues
											</div>
										</div>
										<div class="col-sm-6">
											<div class="box"><p><b>Comments blah blah</b></p></div>
										</div>
									</div>
									<div class="row">
										<div class=" col-sm-6"></div>
										<div class="col-sm-6">
											<img style="padding-top: 10px;" src="{{asset('images/demo3.jpg')}}" alt="Trulli" width ="200" height= "200p">
						                </div>
									</div><br>
                                    <div class="row">
										<div class="col-sm-6">
											
										</div>
										<div class="col-sm-6">
											<div class="box"><p><b>Optional. Comments blah blah</b></p></div>
										</div>
									</div><br>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												Solutions
											</div>
										</div>
										<div class="col-sm-6">
											<div class="box"><p><b>Solutions Here</b></p></div>
										</div>
									</div>
									<div class="row">
										<div class=" col-sm-6"></div>
										<div class="col-sm-6">
											<img style="padding-top: 10px;" src="{{asset('images/demo3.jpg')}}" alt="Trulli" width ="200" height= "200p">
						                </div>
									</div><br>
									 <div class="row">
										<div class="col-sm-6">
											
										</div>
										<div class="col-sm-6">
											<div class="box"><p><b>Optional. Solutions Here</b></p></div>
										</div>
									</div><br>
								</div>
							</div>
						</form>
					</div>
					<div id="section5" class="tab-pane fade tender-container">
						<h3 class="bid-form-title">Scope</h3>
						<form method="post">
							<div class="row">
								<div class="col-sm-12">
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												Years of experience in the service required
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<input type="text" name="" class="form-control" placeholder="Experience in Years">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												Offered Services
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<select name="" class="form-control">
													<option>Service 1</option>
													<option>Service 2</option>
													<option>Service 3</option>
													<option>Service 4</option>
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												Track record of relevant projects
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<input type="text" name="" class="form-control" placeholder="Project Name">
											</div>
											<div class="form-group">
												<input type="text" name="" class="form-control" placeholder="Project Value">
											</div>
										</div>
									</div>
									<div class="form-group butcent">
										<input type="submit" name="submit" value="Submit" class="btn btn-primary butsize ">
										<input type="submit" name="Save" value="Save" class="btn btn-success butsize color">
									</div>
								</div>
							</div>
						</form>
					</div>
					<div id="section6" class="tab-pane fade tender-container">
						<h3 class="bid-form-title">Appointment</h3>
						<form method="post">
							<div class="row">
								<div class="col-sm-12">
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												Insurance
											</div>
										</div>
										<div class="col-sm-6">
											<div class="box"><p><b>Insurance Name</b></p></div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6"></div>
										<div class="col-sm-6">
											<div class="box"><p><b>Insurance Level</b></p></div>
										</div>

									</div>
									<div class="row">
										<div class="col-sm-6"></div>
										<div class="col-sm-6">
											<div class="form-group">
												<div class="box"><p><b>Premium Cost Uplift to achieve required Insurance Level</b></p></div>
											</div>
										</div>

									</div>
									<div class="row">
										<div class="col-sm-6"></div>
										<div class="col-sm-6">
											<div class="form-group">
												<img style="padding-top: 10px;" src="{{asset('images/demo3.jpg')}}" alt="Trulli" width ="200" height= "200p">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6"></div>
										<div class="col-sm-6">
											<div class="box"><p><b>As per selections by the employer</b></p></div>
										</div>
									</div><br>
									<div class="row">
										<div class="col-sm-6">Bonds</div>
										<div class="col-sm-6">
											<div class="box"><p><b>Selected Insurance</b></p></div>
										</div>
									</div><br>
										<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												Execution
											</div>
										</div>
										<div class="col-sm-6">
											<div class="box"><p><b>Either Deed or Under Hands as selected by the employer</b></p></div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6"></div>
										
										<div class="col-sm-6">
											<div class="box"><p><b>Agreed  To  be  negotiated or Rejected</b></p></div>
										</div>
									</div><br>
	
								    <div class="row">
										<div class="col-sm-6"></div>
										
										<div class="col-sm-6">
								            <div class="box"><p><b>Comments</b></p></div>
										</div>
									</div><br>
									<div class="row">
										<div class="col-sm-6">Collateral  Warranties  /  Third  Parties  </div>
										<div class="col-sm-6">
											<div class="box"><p><b>Either Deed or Under Hands as selected by the employer</b></p></div>
										</div>
									</div><br>
									<div class="row">
										<div class="col-sm-6"></div>
										
										<div class="col-sm-6">
								            <div class="box"><p><b>Agreed  To  be  negotiated or Rejected</b></p></div>
										</div>
									</div><br>
									<div class="row">
										<div class="col-sm-6"></div>
										
										<div class="col-sm-6">
								            <div class="box"><p><b>Comments</b></p></div>
										</div>
									</div><br>
									<div class="row">
										<div class="col-sm-6">Limit  of  Liability  </div>
										<div class="col-sm-6">
											<div class="box"><p><b>Either Deed or Under Hands as selected by the employer</b></p></div>
										</div><br>
                                        <div class="row">
										<div class="col-sm-6"></div>
										
										<div class="col-sm-6">
								            <div class="box"><p><b>Agreed  To  be  negotiated or Rejected</b></p></div>
										</div>
									</div><br>
                                     <div class="row">
										<div class="col-sm-6"></div>
										
										<div class="col-sm-6">
								            <div class="box"><p><b>Comments</b></p></div>
										</div>
									</div><br>
									</div>
									<div class="row">
										<div class="col-sm-6">
											
										</div>
										<div class="col-sm-6">
								            <i class="fa fa-check-square" aria-hidden="true" id="size"></i> <label for="check1">I Agree</label>
							              </div>
									</div>
									<div class="row">
                                    
										<div class="col-sm-6">	
												Form of Appointment
										</div>
											<div class="col-sm-6">
												<button class="btn"><i class="fa fa-download"></i> Download</button>
												<button type="button" class="btn btn-danger">View</button>
										</div>
									</div><br>
									<div class="row">
										<div class="col-sm-6">
											
										</div>
										<div class="col-sm-6">
											<div class="box"><p><b>Clause Here</b></p></div>
										</div>
									</div><br>
									<div class="row">
										<div class="col-sm-6">
											
										</div>
										<div class="col-sm-6">
											<div class="box"><p><b>New Suggested Work</b></p></div>
										</div>
									</div><br>
									<div class="row">
										<div class="col-sm-6">
											
										</div>
										<div class="col-sm-6">
											<div class="box"><p><b>Comments</b></p></div>
										</div>
									</div><br>
									 <div class="row">
										<div class="col-sm-6">
											
										</div>
										<div class="col-sm-6">
												<div class="box"><p><b>Optional.Comments blah blah</b></p></div>
											</div>
									</div><br>
									<div class="row">
										<div class="col-sm-6">
											
										</div>
										<div class="col-sm-6">
											<div class="box"><p><b>New Suggested Work Here</b></p></div>
										</div>
									</div><br>
									<div class="row">
										<div class="col-sm-6">
											Documents for Signature
										</div>
										<div class="col-sm-6">
											<div class="box"><p><b>Document Title</b></p></div>
										</div>
									</div><br>
									<div class="row">
										<div class="col-sm-6">	
												
										</div>
											<div class="col-sm-6">
												<button class="btn"><i class="fa fa-download"></i> Download</button>
												<button type="button" class="btn btn-info">Upload</button>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
					<div id="section7" class="tab-pane fade tender-container">
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
												<div class="box"><p><b>Full Name</b></p></div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6"></div>
											<div class="col-sm-6">
											<div class="form-group">
												<div class="box"><p><b>Year Selected</b></p></div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												Checked by
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<div class="box"><p><b>Full Name</b></p></div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6"></div>
											<div class="col-sm-6">
											<div class="form-group">
												<div class="box"><p><b>Year Selected</b></p></div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												Approved by
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<div class="box"><p><b>Full Name</b></p></div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6"></div>
											<div class="col-sm-6">
											<div class="form-group">
												<div class="box"><p><b>Year Selected</b></p></div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											Statements
										</div>
										<div class="col-sm-6">
								            <i class="fa fa-check-square" aria-hidden="true" id="size"></i> <label for="check1">Agree XXX</label>
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
	

	
	
	<!-- end -->


@endsection

