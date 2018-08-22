@extends('layouts.master')

@section('content')

	<div id="myModal" class="modal fade" role="dialog" tabindex='-1'>
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Login / Register</h4>
				</div>
				<div class="modal-body">
					<ul class="nav nav-tabs">
						<li class="active"><a data-toggle="tab" href="#login">Login</a></li>
						<li><a data-toggle="tab" href="#signup">Register</a></li>
					</ul>
					<div class="tab-content">
						<div id="login" class="tab-pane fade in active">
							<form method="post" class="form-horizontal" autocomplete="off">
								<div class="form-group">
									<label class="col-sm-3 control-label">Email</label>
									<div class="col-sm-8 ">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-user"></i></span>
											<input type="email" class="form-control" placeholder="Email address" name="" autocomplete="off" required="">
										</div>
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-3 control-label">Password</label>
									<div class="col-sm-8 ">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-lock"></i></span>
											<input type="password" class="form-control" placeholder="Password" name="" required="">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label"></label>
									<div class="col-sm-8 ">
										<input type="submit" class="btn btn-primary col-sm-12" value="LOGIN">
									</div>
								</div>

								<div class="form-group">   							
									<div class="col-sm-8 col-sm-offset-3 text-right">   
										<a href="#" class="forgot"><i class="fa fa-lock"></i> Forgot password</a>
									</div>
								</div>
							</form>
						</div>
						<div id="signup" class="tab-pane fade">
							<form method="post" class="form-horizontal" autocomplete="off">
								<div class="form-group has-feedback">
									<label class="col-sm-3 control-label">Full Name</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="name" required="" data-msg-required="Please enter your full  name">
									</div>
								</div>
								<div class="form-group has-feedback">
									<label class="col-sm-3 control-label">Company</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="company" required="" data-msg-required="Please enter your company name">
									</div>
								</div>
								<div class="form-group has-feedback">
									<label class="col-sm-3 control-label">Email</label>
									<div class="col-sm-8">
										<input type="email" class="form-control" name="email" required="" data-msg-required="Please enter your email">
									</div>
								</div>
								<div class="form-group has-feedback">
									<label class="col-sm-3 control-label">Phone</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="phone" required="" data-msg-required="Please enter your phone number">
									</div>
								</div>
								<div class="form-group has-feedback">
									<label class="col-sm-3 control-label">Password</label>
									<div class="col-sm-8">
										<input type="password" class="form-control" name="password" required="" data-msg-required="Please enter your password">
									</div>
								</div>
								<div class="form-group has-feedback">
									<label class="col-sm-3 control-label">Confirm Password</label>
									<div class="col-sm-8">
										<input type="password" class="form-control" name="cpassword" required="" data-msg-required="Please enter your password again">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label"></label>
									<div class="col-sm-8">
										<input type="submit" class="btn btn-primary col-sm-12" value="REGISTER">

									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="modal-footer">					
				</div>
			</div>
		</div>
	</div> 

	<div class="container below-header">
		<h1 class="project-title bid-page-title">Canada Water Masterplan - <small>Structural Engineer</small></h1>			
	</div> 

	<div class="container">
		<div class="row">
			<div class="col-sm-4" style="position: fixed; width:400px;">
				<div class="tender-container">
					<ul class="nav bid-form-nav">
						<li class="active"><a data-toggle="tab" href="#section1">Pre-Qualification Questionnaire</a></li>
						<li><a data-toggle="tab" href="#section2">Organisation</a></li>
						<li><a data-toggle="tab" href="#section3">Individuals</a></li>
						<li><a data-toggle="tab" href="#section4">Approach</a></li>
						<li><a data-toggle="tab" href="#section5">Scope</a></li>
						<li><a data-toggle="tab" href="#section6">Appointment</a></li>
						<li><a data-toggle="tab" href="#section7">Quality Assurance</a></li>
					</ul><br>
				</div>
				<div class="form-group">
					<button type="button" class="btn btn-info btn-lg raise" id="but" data-toggle="modal" data-target="#Modal">Ask the Employer</button>
					<div class="modal fade" id="Modal" role="dialog">
					    <div class="modal-dialog">
					    
					      <!-- Modal content-->
					      <div class="modal-content">
					        <div class="modal-header inq">
					          <button type="button" class="close" data-dismiss="modal">&times;</button>
					          <h4 class="modal-title">Inquiries</h4>
					        </div>
					        <div class="modal-body">
					          <textarea placeholder="Enter your query here" rows="4" cols="50"></textarea>
					        </div>
					        <div class="modal-footer">
					          	<div class="text-center">
									<!-- Button HTML (to Trigger Modal) -->
									<a style="color: #fff;" href="#mode" class="trigger-btn" data-toggle="modal">Submit Tender Query</a>
								</div>
					          	<div id="mode" class="modal fade">
									<div class="modal-dialog modal-confirm">
										<div class="modal-content">
											<div class="modal-head">
												<div class="icon-box">
													<i class="material-icons">done</i>
												</div>				
												<h4 class="modal-title">Are  you  sure  you  want  to  submit  this  tender  query? </h4>	
								                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
											</div>
											<div class="modal-body">
												<p>Your  query  will  be  sent  to  the  Employer  and  published  on  the  project  page,  visible  for  everyone,  once  you  have  received  a  response. This process cannot be undone.</p>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-info" data-dismiss="modal">Go Back</button>
												<button type="button" class="btn btn-success">Submit</button>
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
			<div class="col-sm-8 questionnaire-section" style="margin-left: 400px;">
				<div class="tab-content">
					<div id="section1" class="tab-pane fade in active tender-container">
						<h3 class="bid-form-title">Pre-Qualification Questionnaire</h3>
						<form method="post">
							<div class="form-group">
								<input type="checkbox" name="" value="" class="filled-in" id="check1"> <label for="check1">Lorem ipsum dolor sit amet, consectetur adipisicing elit?</label>
							</div>
							<div class="form-group">
								<input type="checkbox" name="" value="" class="filled-in" id="check2"> <label for="check2">Lorem ipsum dolor sit amet, consectetur adipisicing elit?</label>
							</div>
							<div class="form-group">
								<input type="checkbox" name="" value="" class="filled-in" id="check3"> <label for="check3">Lorem ipsum dolor sit amet, consectetur adipisicing elit?</label>
							</div>
							<div class="form-group">
								<input type="checkbox" name="" value="" class="filled-in" id="check4"> <label for="check4">Lorem ipsum dolor sit amet, consectetur adipisicing elit?</label>
							</div>
							<div class="form-group">
								<input type="checkbox" name="" value="" class="filled-in" id="check5"> <label for="check5">Lorem ipsum dolor sit amet, consectetur adipisicing elit?</label>
							</div>
							<div class="form-group">
								<input type="checkbox" name="" value="" class="filled-in" id="check6"> <label for="check6">Lorem ipsum dolor sit amet, consectetur adipisicing elit?</label>
							</div>
							<div class="form-group">
								<input type="checkbox" name="" value="" class="filled-in" id="check7"> <label for="check7">Lorem ipsum dolor sit amet, consectetur adipisicing elit?</label>
							</div>
							<div class="form-group">
								<input type="checkbox" name="" value="" class="filled-in" id="check8"> <label for="check8">Lorem ipsum dolor sit amet, consectetur adipisicing elit?</label>
							</div>
							<div class="form-group">
								<input type="checkbox" name="" value="" class="filled-in" id="check9"> <label for="check9">Lorem ipsum dolor sit amet, consectetur adipisicing elit?</label>
							</div>
							<div class="form-group">
								<input type="checkbox" name="" value="" class="filled-in" id="check10"> <label for="check10">Lorem ipsum dolor sit amet, consectetur adipisicing elit?</label>
							</div>						
							<div class="form-group butcent">
								<input type="submit" name="Next" value="Next" class="btn btn-primary butsize">
								
							</div>
						</form>
					</div>
					<div id="section2" class="tab-pane fade tender-container">
						<div class="form-group" style="text-align: right;">
							<div class="input_fields_team">
								<button class="btn" id="button1 ">Complete Page using Profile Information</button>
							</div>
						</div>
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
												<div class="input-group date" id="datepicker" data-date="02-2012" 
												         data-date-format="mm-yyyy">

													 <input class="form-control" type="text" placeholder="Select Year" readonly="readonly" name="date" >	  
													 <span class="input-group-addon add-on"><span class="fa fa-calendar"></span></span>	  
												</div>
												
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
													<option>Quantity Survueyor</option>
													<option>Project Manager</option>
													<option>Project Manager</option>
													<option>Other</option>
												</select>
											</div>
											<div class="form-group">
												<div class="input_fields_service">
												    <button class="btn btn-primary" id="add_field_service">Add another Service</button>
												    <div></div>
												</div>
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
												<input type="text" name="" class="form-control" placeholder="Enter Name of Award">
											</div>
											<div class="form-group">
												<input type="text" name="" class="form-control" placeholder="Enter Details">
											</div>
											<div class="form-group">
												<input type="text" name="" class="form-control" placeholder="Awarded by Body">
											</div>
											<div class="form-group">
												<div class="input-group date" id="datepicker1" data-date="02-2012" 
												         data-date-format="mm-yyyy">

													 <input class="form-control" type="text" placeholder="Year Awarded  " readonly="readonly" name="date" >	  
													 <span class="input-group-addon add-on"><span class="fa fa-calendar"></span></span>	  
												</div>
											</div>
											<div class="form-group">
												<div class="input_fields_piste">
												    <button class="btn btn-primary" id="add_field_piste">Add another Award</button>
												    <div></div>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												Track Record of relevant Projects
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<input type="text" name="" class="form-control" placeholder="Enter Profile Title">
											</div>
											<div class="form-group">
												<input type="text" name="" class="form-control" placeholder="Construction Value ">
											</div>

										<div class="form-group">
								               <input type="checkbox" name="" value="" class="filled-in" id="check12" >     <label for="check12">Value Confidential </label>
							              </div>
							              <div class="form-group">
												<textarea cols="4" rows="5" id="textarea" maxlength="2000" placeholder="Enter Description of the Project  "></textarea>
  												<span id="rchars">2000</span> 
											</div>
											<div class="form-group">													
												<img id="uploadPreview7" style="width: 100px; height: 100px;" />
											<input id="uploadImage7" type="file" name="myPhoto" onchange="PreviewImage7();" />
						                    </div>
							
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
											<div class="form-group">
												<div class="input_fields_types">
												    <button class="btn btn-primary" id="add_field_types">Add another types of use</button>
												    <div></div>
												</div>
											</div>
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
													<option>Quantity Survueyor</option>
													<option>Project Manager</option>
													<option>Project Manager</option>
													<option>Other</option>
												</select>
											</div>
											<div class="form-group">
												<div class="input-group date" id="datepicker2" data-date="02-2012" 
												         data-date-format="mm-yyyy">

													 <input class="form-control" type="text" placeholder="Provided this Service from" readonly="readonly" name="date" >	  
													 <span class="input-group-addon add-on"><span class="fa fa-calendar"></span></span>	  
												</div>
										</div>
										<div class="form-group">
												<div class="input-group date" id="datepicker3" data-date="02-2012" 
												         data-date-format="mm-yyyy">

													 <input class="form-control" type="text" placeholder="Provided this Service until" readonly="readonly" name="date" >	  
													 <span class="input-group-addon add-on"><span class="fa fa-calendar"></span></span>	  
												</div>
											</div>
											<div class="form-group">
												<div class="input_fields_serve">
												    <button class="btn btn-primary" id="add_field_serve">Add another service</button>
												    <div></div>
												</div>
											</div>
											<div class="form-group">
												<select name="Sel"  class="form-control" >
													<option value="" disabled selected>Select Type of Development</option>
													<option>New Built</option>
													<option>Refurbishment</option>
													<option>Demolition</option>
												</select>
											</div>
											<div class="input_fields_type">
												    <button class="btn btn-primary" id="add_field_type">Add another Type</button>
												    <div></div>
											</div><br>
													
											<div class="form-group">									 <img id="uploadPreview8" style="width: 100px; height: 100px;" />
											     <input id="uploadImage8" type="file" name="myPhoto" onchange="PreviewImage8();" />
						                    </div>
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
													<option>Quantity Survueyor</option>
													<option>Project Manager</option>
													<option>Project Manager</option>
													<option>Other</option>
												</select>
											</div>
											<div class="form-group">
												<select name="Sel"  class="form-control" >
													<option value="" disabled selected>Select Company</option>
													<option>Architect</option>
													<option>Sturctural Engineed</option>
													<option>Service Engineer</option>
													<option>Other</option>
												</select>
											</div>
											<div class="form-group">
												<div class="form-group">
													<input type="text" name="" class="form-control" placeholder="Enter new Company Name">
												</div>
											</div>
											<div class="form-group">
												<div class="input_fields_team">
												    <button class="btn btn-primary" id="add_field_team">Add another Project Team Member</button>
												    <div></div>
												</div>
											</div>
											<div class="form-group">
												<div class="input_fields_project">
												    <button class="btn btn-primary" id="add_field_project">Add another Project</button>
												    <div></div>
												</div>
											</div>
										</div>
									</div>
									<div class="form-group butcent">
										<input type="submit" name="Next" value="Next" class="btn btn-primary butsize ">
										
									</div>
									
									</div>
								</div>
							<!-- </div> -->
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
										<div class="col-sm-3">
											<div class="form-group">
												<input type="text" name="" class="form-control" placeholder="First Name">
											</div>
										</div>
										<div class="col-sm-3">
											<div class="form-group">
												<input type="text" name="" class="form-control" placeholder="Surname">
											</div>
										</div>
									</div>
									<div class="row" style="padding-bottom: 10px;">
										<div class="col-sm-6">
											<div class="form-group">
												Image
											</div>
										</div>
										<div class="col-sm-6" >						
											<img id="uploadPreview" style="width: 100px; height: 100px;" />
											<input id="uploadImage" type="file" name="myPhoto" onchange="PreviewImage();" />
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
												<select name="" class="form-control">
													<option value="" disabled selected>Select Accrediatation</option>
													<option>ACABE</option>
													<option>ACIBSE</option>
													<option>ADPPA</option>
													<option>AIFireE</option>
													<option>AIIRSM</option>
													<option>AIOSH</option>
													<option>AMCIHT</option>
													<option>AMICE</option>
													<option>AMIHE</option>
													<option>AMIMechE</option>
													<option>AMIStructE</option>
													<option>APM ChPP</option>
													<option>APM  PFQ</option>
													<option>APM  PPQ</option>
													<option>APM  PQ </option>
													<option>APM  RPP</option>
													<option>AppIHE  </option>
													<option>AssocRICS  </option>
													<option>BREEAM  AP </option>
													<option>CEng  </option>
													<option>CEnv  </option>
													<option>CFIOSH  </option>
													<option>CIBSE  Licentiate </option>
													<option>CMIOSH  </option>
													<option>CSci  </option>
													<option>EI</option>
													<option>EngTech</option>
													<option>FCABE  </option>
													<option>FCIBSE  </option>
													<option>FCIHT  </option>
													<option>FCIWEM  </option>
													<option>FICE  </option>
													<option>FIET  </option>
													<option>FIFireE  </option>
													<option>FIHE  </option>
													<option>FIIRSM  </option>
													<option>FIStructE  </option>
													<option>FREng  </option>
													<option>FRICS  </option>
													<option>FSoPHE  </option>
													<option>GIFireE  </option>
													<option>GMICE  </option>
													<option>Grad  CABE</option>
													<option>Grad  IOSH</option>
													<option>GradCIHT  </option>
													<option>GradCIWEM  </option>
													<option>HonFIET  </option>
													<option>HonFREng  </option>
													<option>HonRICS  </option>
													<option>IEMA</option>
													<option>IEng </option>
													<option>IMechE</option>
													<option>IPMA  Level  A</option>
													<option>IPMA  Level  B </option>
													<option>LCC  </option>
													<option>LCEA  </option>
													<option>LEED  AP </option>
													<option>MAPM  </option>
													<option>MCABE  </option>
													<option>MCIArb  </option>
													<option>MCIHT    </option>
													<option>MCIOB    </option>
													<option>MCIWEM    </option>
													<option>MICE    </option>
													<option>MIET    </option>
													<option>MIFireE    </option>
													<option>MIHE    </option>
													<option>MIIRSM    </option>
													<option>MIStructE    </option>
													<option>MRICS    </option>
													<option>MSoPHE    </option>
													<option>OCDEA    </option>
													<option>RIBA    </option>
													<option>SFIIRSM    </option>
													<option>SIIRSM    </option>
													<option>SKA  Assessor   </option>
													<option>TechCIWEM    </option>
													<option>TIFireE  </option>
													<option>TIStructE  </option>
													<option>TMIET  </option>
													<option>WELL  AP  </option>
													<option>Other </option>
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6"></div>
										<div class="col-sm-6">
											<div class="input-group date" id="datepickers" data-date="02-2012" 
												         data-date-format="mm-yyyy">
											<input class="form-control" type="text" placeholder="Year Awarded" readonly="readonly" name="date" >	  
											<span class="input-group-addon add-on"><span class="fa fa-calendar"></span></span>	  
											</div>
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-sm-6"></div>
										<div class="col-sm-6">
											<div class="input_fields_yawa">
											<button class="btn btn-primary" id="add_field_yawa">Add another Accreditation</button>
											<div></div>
											</div>
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
												<select name="" class="form-control">
													<option value="" disabled selected>Select Degree</option>
													<option>BA</option>
													<option>BSA</option>
													<option>BAcy</option>
													<option>BAcc</option>
													<option>B.A.Sc.</option>
													<option>BArch </option>
													<option>BBA</option>
													<option>BCE</option>
													<option>BCom</option>
													<option>BCA</option>
													<option>BDes</option>
													<option>B.Des.Corp</option>
													<option>B.Des.Arch</option>
													<option>BEng</option>
													<option>BEC</option>
													<option>BEE</option>
													<option>BFA</option>
													<option>B.Hlth.Sci.</option>
													<option>BIT</option>
													<option>BIGS</option>
													<option>LLB</option>
													<option>BLAS</option>
													<option>BMath</option>
													<option>BME</option>
													<option>B.P.E.S.S</option>
													<option>B.Res.Ec</option>
													<option>BSc</option>
													<option>BS.EOH</option>
													<option>BSLS</option>
													<option>BTech</option>
													<option>BVA</option>
													<option>MA</option>
													<option>MBA</option>
													<option>MCom</option>
													<option>BCA</option>
													<option>MEM</option>
													<option>MEDM</option>
													<option>MFA</option>
													<option>MIS</option>
													<option>LLM</option>
													<option>MLA</option>
													<option>MPS</option>
													<option>MPA</option>
													<option>MPH</option>
													<option>MSc</option>
													<option>MSF</option>
													<option>MTech</option>
													<option>DLP</option>
													<option>Dr.mph.</option>
													<option>PhD</option>
													<option>PsyD</option>
													<option>DrPH</option>
													<option>DSc</option>
													<option>Other</option>
												</select>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">	

											</div>
										</div>
										<div class="col-sm-6">
											<div class="input-group date" id="datepickers5" data-date="02-2012" 
												         data-date-format="mm-yyyy">
											<input class="form-control" type="text" placeholder="Year Awarded" readonly="readonly" name="date" >	  
											<span class="input-group-addon add-on"><span class="fa fa-calendar"></span></span>	  
											</div>
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
												<input type="text" name="" class="form-control" placeholder="Enter Name of Award ">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<input type="text" name="" class="form-control" placeholder="Awarded by body  ">
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
												    <button class="btn btn-primary" id="add_field_serve1">Add another Service</button>
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
												    <button class="btn btn-primary" id="add_field_add">Add another type of use</button>
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
												    <button class="btn btn-primary" id="add_field_serve2">Add another service</button>
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
												    <button class="btn btn-primary" id="add_field_type1">Add another service</button>
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
												    <button class="btn btn-primary" id="add_field_member">Add another Project Team Member</button>
												    <div></div>
												</div>
											</div>
									</div><br>
									<div class="row">
										<div class="col-sm-6">
											
										</div>
										<div class="col-sm-6">
												<div class="input_fields_project1">
												    <button class="btn btn-primary" id="add_field_project1">Add another Project</button>
												    <div></div>
												</div>
											</div>
									</div><br>
									<div class="form-group butcent">
										<input type="submit" name="Next" value="Next" class="btn btn-primary butsize ">
										
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
												Comments on Constraints/Issues
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<textarea cols="4" rows="5" id="textareaap" maxlength="2000" placeholder="Enter here  "></textarea>
  												<span id="rchars1">2000</span> 
											</div>
										</div>
									</div>
									<div class="row">
										<div class=" col-sm-6"></div>
										<div class="col-sm-6">
											<img id="uploadPreview2" style="width:100px; height: 100px;" />
											<input id="uploadImage2" type="file" name="myPhoto" onchange="PreviewImage2();" />
						                </div>
									</div><br>
                                    <div class="row">
										<div class="col-sm-6">
											
										</div>
										<div class="col-sm-6">
												<div class="input_fields_com">
												    <button class="btn btn-primary" id="add_field_com">Add another Comment</button>
												    <div></div>
												</div>
											</div>
									</div><br>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												Solutions
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<textarea placeholder="Enter Text Here"></textarea>
											</div>
										</div>
									</div>
									<div class="row">
										<div class=" col-sm-6"></div>
										<div class="col-sm-6">
											<img id="uploadPreview3" style="width: 100px; height: 100px;" />
											<input id="uploadImage3" type="file" name="myPhoto" onchange="PreviewImage3();" />
						                </div>
									</div><br>
									 <div class="row">
										<div class="col-sm-6">
											
										</div>
										<div class="col-sm-6">
												<div class="input_fields_sul">
												    <button class="btn btn-primary" id="add_field_sul">Add another Solution</button>
												    <div></div>
												</div>
											</div>
									</div><br>
									
									<div class="form-group butcent">
										<input type="submit" name="Next" value="Next" class="btn btn-primary  butsize">
										
									</div>
								</div>
							</div>
						</form>
					</div>
					<div id="section5" class="tab-pane fade tender-container">
						<h3 class="bid-form-title">Scope</h3>
						<form method="post">
							<div class="row">
								<div class="col-sm-12">
									<table id="customers">
											  <tr>
											    <th>Deliverable</th>
											    <th>Details / Contents</th>
											    <th>RACI</th>
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
											     <td contenteditable='true'></td>
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
											    <td contenteditable='true'></td>
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
											     <td contenteditable='true'></td>
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
											     <td contenteditable='true'></td>
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
											  </tr>
											  <tr>
											    <td>Project Brief/td>
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
											  </tr>
											  <tr>
											    <td>Design Proposals from Design Team members</td>
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
											  </tr>
											</table><br>
											 <button type="button" class="btn btn-info">Add another Lines</button>
								</div>
							</div><br>
							<div class="row">
								<div class="col-sm-12">
									<table id="Riba" style="overflow-x:auto;">
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
											    <td>Pre-Application Meetings</td>
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
											     <td contenteditable='true'></td>
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
							</div><br>
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
											<div class="form-group">
												<input type="text" name="" class="form-control" placeholder="Enter Insurance Name">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6"></div>
										<div class="col-sm-6">
											<div class="form-group">
												<input type="text" name="" class="form-control" placeholder="Insurance Level">
											</div>
										</div>

									</div>
									<div class="row">
										<div class="col-sm-6"></div>
										<div class="col-sm-6">
											<div class="form-group">
												<input type="text" name="" class="form-control" placeholder="Premium Cost Uplift to achieve required Insurance Level">
											</div>
										</div>

									</div>
									<div class="row">
										<div class="col-sm-6"></div>
										<div class="col-sm-6">
											<div class="form-group">
												<img id="uploadPreview4" style="width: 100px; height: 100px;" />
												<input id="uploadImage4" type="file" name="myPhoto" onchange="PreviewImage4();" />
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6"></div>
										<div class="col-sm-6">
												<input type="text" name="" class="form-control" placeholder="As  per  selections  by  the  employer)">
										</div>
									</div><br>
									<div class="row">
										<div class="col-sm-6">Bonds</div>
										<div class="col-sm-6">
												<select name="Sel"  class="form-control" >
													<option value="" disabled selected>Select Insurance</option>
													
												</select>
										</div>
									</div><br>
										<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												Execution
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<input type="text" name="" class="form-control" placeholder="Either Deed or Under Hands as selected by the employer">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6"></div>
										
										<div class="col-sm-6">
								              <select name="Sel"  class="form-control" >
													<option value="" disabled selected>Select</option>
													<option>Agreed  To  be  negotiated</option>
													<option>Rejected  </option>
													
												</select>
							             
										</div>
									</div><br>
	
								    <div class="row">
										<div class="col-sm-6"></div>
										
										<div class="col-sm-6">
								             <textarea placeholder="Comments"></textarea>
							             
										</div>
									</div><br>
									<div class="row">
										<div class="col-sm-6">Collateral  Warranties  /  Third  Parties  </div>
										<div class="col-sm-6">
												<input type="text" name="" class="form-control" placeholder="Either Deed or Under Hands as selected by the employer">
										</div>
									</div><br>
									<div class="row">
										<div class="col-sm-6"></div>
										
										<div class="col-sm-6">
								              <select name="Sel"  class="form-control" >
													<option value="" disabled selected>Select</option>
													<option>Agreed  To  be  negotiated</option>
													<option>Rejected  </option>
													
												</select>
							             
										</div>
									</div><br>
									<div class="row">
										<div class="col-sm-6"></div>
										
										<div class="col-sm-6">
								             <textarea placeholder="Comments"></textarea>
							             
										</div>
									</div><br>
									<div class="row">
										<div class="col-sm-6">Limit  of  Liability  </div>
										<div class="col-sm-6">
												<input type="text" name="" class="form-control" placeholder="Either Deed or Under Hands as selected by the employer">
										</div>
                                        <div class="row">
										<div class="col-sm-6"></div>
										
										<div class="col-sm-6">
								              <select name="Sel"  class="form-control" >
													<option value="" disabled selected>Select</option>
													<option>Agreed  To  be  negotiated</option>
													<option>Rejected  </option>
													
												</select>
							             
										</div>
									</div><br>
                                     <div class="row">
										<div class="col-sm-6"></div>
										
										<div class="col-sm-6">
								             <textarea placeholder="Comments"></textarea>
							             
										</div>
									</div><br>
									</div>
									<div class="row">
										<div class="col-sm-6">
											
										</div>
										<div class="col-sm-6">
								               <input type="checkbox" name="" value="" class="filled-in" id="check14" >   <label for="check14">I Agree</label>
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
												<input type="text" name="" class="form-control" placeholder="Enter Clause Here">
										</div>
									</div><br>
									<div class="row">
										<div class="col-sm-6">
											
										</div>
										<div class="col-sm-6">
												<input type="text" name="" class="form-control" placeholder="Enter new suggested work here">
										</div>
									</div><br>
									<div class="row">
										<div class="col-sm-6">
											
										</div>
										<div class="col-sm-6">
												<textarea placeholder="Comments"></textarea>
										</div>
									</div><br>
									 <div class="row">
										<div class="col-sm-6">
											
										</div>
										<div class="col-sm-6">
												<div class="input_fields_comm">
												    <button class="btn btn-primary" id="add_field_comm">Add another Comment</button>
												    <div></div>
												</div>
											</div>
									</div><br>
									<div class="row">
										<div class="col-sm-6">
											
										</div>
										<div class="col-sm-6">
												<input type="text" name="" class="form-control" placeholder="Enter new suggested work here">
										</div>
									</div><br>
									<div class="row">
										<div class="col-sm-6">
											Documents for Signature
										</div>
										<div class="col-sm-6">
												<input type="text" name="" class="form-control" placeholder="Document Title">
									</div>
								</div><br>
									<div class="row">
										<div class="col-sm-6">	
												
										</div>
											<div class="col-sm-6">
												<button class="btn"><i class="fa fa-download"></i> Download</button>
												<button type="button" class="btn btn-info">Upload</button>
										</div>
									</div><br>
									
									<div class="form-group butcent">
										<input type="submit" name="Next" value="Next" class="btn btn-primary butsize ">
										
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
												<input type="text" name="" class="form-control" placeholder="First Name">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<input type="text" name="" class="form-control" placeholder="Surname">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6"></div>
											<div class="col-sm-6">
											<div class="form-group">
												<div class="input-group date" id="datepicker4" data-date="02-2012" 
												         data-date-format="mm-yyyy">

													 <input class="form-control" type="text" placeholder="Select Year" readonly="readonly" name="date" >	  
													 <span class="input-group-addon add-on"><span class="fa fa-calendar"></span></span>	  
												</div>
												
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
												<input type="text" name="" class="form-control" placeholder="First Name">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<input type="text" name="" class="form-control" placeholder="Surname">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6"></div>
											<div class="col-sm-6">
											<div class="form-group">
												<div class="input-group date" id="datepicker10" data-date="02-2012" 
												         data-date-format="mm-yyyy">

													 <input class="form-control" type="text" placeholder="Select Year" readonly="readonly" name="date" >	  
													 <span class="input-group-addon add-on"><span class="fa fa-calendar"></span></span>	  
												</div>
												
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
												<input type="text" name="" class="form-control" placeholder="First Name">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<input type="text" name="" class="form-control" placeholder="Surname">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6"></div>
											<div class="col-sm-6">
											<div class="form-group">
												<div class="input-group date" id="datepicker11" data-date="02-2012" 
												         data-date-format="mm-yyyy">

													 <input class="form-control" type="text" placeholder="Select Year" readonly="readonly" name="date" >	  
													 <span class="input-group-addon add-on"><span class="fa fa-calendar"></span></span>	  
												</div>
												
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											Statements
										</div>
										<div class="col-sm-6">
								               <input type="checkbox" name="" value="" class="filled-in" id="check13" >     <label for="check13">I Agree to XXX</label>
							              </div>
									</div>
									<div class="form-group butcent">
										<input type="submit" name="submit" value="Submit" class="btn btn-primary butsize ">
										<input type="submit" name="Save" value="Save" class="btn  butsize color">
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>			
		</div>
	</div>
<script>
function mUp(obj) {
    obj.style.backgroundColor="none";
    obj.innerHTML="x";
}
</script>
<script type="text/javascript">
	var maxLength = 2000;
$('textarea').keyup(function() {
  var textlen = maxLength - $(this).val().length;
  $('#rchars').text(textlen);
});

</script>
<script type="text/javascript">
	var maxLength1 = 2000;
	$('#textareaap').keyup(function() {
   var textlen1 = maxLength1 - $(this).val().length;
    $('#rchars1').text(textlen1);
	});

</script>
<!-- end -->

@endsection


