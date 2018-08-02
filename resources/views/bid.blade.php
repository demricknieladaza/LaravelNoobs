@extends('layouts.temp')

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
			<div class="col-sm-4">
				<div class="tender-container">
					<ul class="nav bid-form-nav">
						<li class="active"><a data-toggle="tab" href="#section1">Pre-Qualification Questionnaire</a></li>
						<li><a data-toggle="tab" href="#section2">Organization</a></li>
						<li><a data-toggle="tab" href="#section3">Individuals</a></li>
						<li><a data-toggle="tab" href="#section4">Approach</a></li>
						<li><a data-toggle="tab" href="#section5">Scope</a></li>
						<li><a data-toggle="tab" href="#section6">Appointment</a></li>
						<li><a data-toggle="tab" href="#section7">Quality Assurance</a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-8 questionnaire-section">
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
							<div class="form-group">
								<input type="submit" name="submit" value="Submit" class="btn btn-primary">
								<input type="submit" name="Save" value="Save" class="btn btn-success">
							</div>
						</form>
					</div>
					<div id="section2" class="tab-pane fade tender-container">
						<div class="form-group" style="text-align: right;">
							<div class="input_fields_team">
								<button class="btn" id="button1 ">Complete Page using Profile Information</button>
							</div>
						</div>
						<h3 class="bid-form-title">Organization</h3>
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
													<option value="" disabled selected>Select Service
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
												    <button class="btn btn-primary" id="add_field_service">Add Another Service</button>
												    <div><input class="form-control" type="text" name="mytext[]"></div>
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
												<input type="text" name="" class="form-control" placeholder="Enter Name of Awar">
											</div>
											<div class="form-group">
												<input type="text" name="" class="form-control" placeholder="Enter Details">
											</div>
											<div class="form-group">
												<input type="text" name="" class="form-control" placeholder="Awarded By">
											</div>
											<div class="form-group">
												<div class="input-group date" id="datepicker1" data-date="02-2012" 
												         data-date-format="mm-yyyy">

													 <input class="form-control" type="text" placeholder="Select Year" readonly="readonly" name="date" >	  
													 <span class="input-group-addon add-on"><span class="fa fa-calendar"></span></span>	  
												</div>
											</div>
											<div class="form-group">
												<div class="input_fields_wrap">
												    <button class="btn btn-primary" id="add_field_button">Add Another Award</button>
												    <div><input class="form-control" type="text" name="mytext[]"></div>
												</div>
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
												<input type="text" name="" class="form-control" placeholder="Enter Profile Title">
											</div>
											<div class="form-group">
												<input type="text" name="" class="form-control" placeholder="Value">
											</div>
											<div class="form-group">
													<select name="Sel"  class="form-control" >
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
													<option>Other</option>
												</select>
											</div>
											<div class="form-group">
												<div class="input_fields_types">
												    <button class="btn btn-primary" id="add_field_types">Add another types of use</button>
												    <div><input class="form-control" type="text" name="mytext[]"></div>
												</div>
											</div>
											<div class="form-group">
												<select name="Sel"  class="form-control" >
													<option value="" disabled selected>Select Service
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

													 <input class="form-control" type="text" placeholder="Provides this Service from" readonly="readonly" name="date" >	  
													 <span class="input-group-addon add-on"><span class="fa fa-calendar"></span></span>	  
												</div>
										</div>
										<div class="form-group">
												<div class="input-group date" id="datepicker3" data-date="02-2012" 
												         data-date-format="mm-yyyy">

													 <input class="form-control" type="text" placeholder="Provides this Service until" readonly="readonly" name="date" >	  
													 <span class="input-group-addon add-on"><span class="fa fa-calendar"></span></span>	  
												</div>
											</div>
											<div class="form-group">
												<div class="input_fields_serve">
												    <button class="btn btn-primary" id="add_field_serve">Add another service</button>
												    <div><input class="form-control" type="text" name="mytext[]"></div>
												</div>
											</div>
											<div class="form-group">
												<select name="Sel"  class="form-control" >
													<option value="" disabled selected>Select Type of Development
													<option>New Built</option>
													<option>Refurbishment</option>
													<option>Demolition</option>
												</select>
											</div>
											<div class="input_fields_type">
												    <button class="btn btn-primary" id="add_field_type">Add another Type</button>
												    <div><input class="form-control" type="text" name="mytext[]"></div>
												</div>
													
											<div class="form-group">													
												<div class="btn-sm btn-primary">
							       	                 <input type="file" name="file"/ placeholder="upload images">
							                    </div>
						                    </div>
						                    <div class="form-group">
												<select name="Sel"  class="form-control" >
													<option value="" disabled selected>Select Project Team Member
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
													<option value="" disabled selected>Select Company
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
												    <button class="btn btn-primary" id="add_field_team">Add Another Project Team Member</button>
												    <div><input class="form-control" type="text" name="mytext[]"></div>
												</div>
											</div>
											<div class="form-group">
												<div class="input_fields_project">
												    <button class="btn btn-primary" id="add_field_project">Add Another Project</button>
												    <div><input class="form-control" type="text" name="mytext[]"></div>
												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<input type="submit" name="submit" value="Submit" class="btn btn-primary">
										<input type="submit" name="Save" value="Save" class="btn btn-success">
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
											<div class="btn-sm btn-primary">
								       	        <input type="file" name="file"/ placeholder="upload images">
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
												<select name="" class="form-control">
													<option value="" disabled selected>Select Accrediatation</option>
													<option>MCIOB</option>
													<option>AssocRICS</option>
													<option>MRICS</option>
													<option>FRICS</option>
													<option>HonRICS</option>
													<option>BREEAM AP</option>
													<option>RIBA</option>
													<option>Other</option>
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
											<div class="input_fields_wrap">
											<button class="btn btn-primary" id="add_field_button">Add Another Accreditation</button>
											<div><input class="form-control" type="text" name="mytext[]"></div>
											</div>
										</div>
									</div><br>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												
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
											<div class="form-group">
												<input type="text" name="" class="form-control" placeholder="Name of Degree">
											</div>
											<div class="input-group date" id="datepickers5" data-date="02-2012" 
												         data-date-format="mm-yyyy">
											<input class="form-control" type="text" placeholder="Year Awarded" readonly="readonly" name="date" >	  
											<span class="input-group-addon add-on"><span class="fa fa-calendar"></span></span>	  
											</div>
											<br>
											<div class="form-group">
												<div class="input_fields_degree">
												    <button class="btn btn-primary" id="add_field_degree">Add Another Project</button>
												    <div><input class="form-control" type="text" name="mytext[]"></div>
												</div>
											</div>
											
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												Seniority
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<input type="text" name="" class="form-control" placeholder="Enter Level of Seniority">
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
												<input type="text" name="" class="form-control" placeholder="Enter Name Of Awards">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<input type="text" name="" class="form-control" placeholder="Awarded by">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<input type="text" name="" class="form-control" placeholder="Enter Details">
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
											
										</div>
										<div class="col-sm-6">
												<div class="input_fields_degree">
												    <button class="btn btn-primary" id="add_field_degree">Add Another Award</button>
												    <div><input class="form-control" type="text" name="mytext[]"></div>
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
												<select name="" class="form-control">
													<option value="" disabled selected>Select Industry</option>
													<option>Construction</option>
													<option>Others</option>
													
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
											<div class="form-group">
												<select name="Sel"  class="form-control" >
													<option value="" disabled selected>Select Service
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
												    <div><input class="form-control" type="text" name="mytext[]"></div>
												</div>
											</div>
									</div><br>
									<div class="row">
										<div class="col-sm-6">
											
										</div>
										<div class="col-sm-6">
												<div class="input_fields_indus">
												    <button class="btn btn-primary" id="add_field_indus1">Add Another Industry</button>
												    <div><input class="form-control" type="text" name="mytext[]"></div>
												</div>
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
												    <div><input class="form-control" type="text" name="mytext[]"></div>
												</div>
											</div>
									</div><br>
							        		<div class="row">
										<div class="col-sm-6">
											
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<select name="Sel"  class="form-control" >
													<option value="" disabled selected>Select Service
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
												    <div><input class="form-control" type="text" name="mytext[]"></div>
												</div>
											</div>
									</div><br>
										<div class="row">
										<div class="col-sm-6">
											
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<select name="Sel"  class="form-control" >
													<option value="" disabled selected>Select Types of Development
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
												    <div><input class="form-control" type="text" name="mytext[]"></div>
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
										<div class="col-sm-6">													
												<div class="btn-sm btn-primary">
							       	                 <input type="file" name="file"/ placeholder="upload images">
							                    </div>
						                    </div>
									</div><br>
									<div class="row">
										<div class="col-sm-6">
											
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<select name="Sel"  class="form-control" >
													<option value="" disabled selected>Select Project Team Member
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
												    <div><input class="form-control" type="text" name="mytext[]"></div>
												</div>
											</div>
									</div><br>
									<div class="row">
										<div class="col-sm-6">
											
										</div>
										<div class="col-sm-6">
												<div class="input_fields_project1">
												    <button class="btn btn-primary" id="add_field_project1">Add Another Project</button>
												    <div><input class="form-control" type="text" name="mytext[]"></div>
												</div>
											</div>
									</div><br>
									<div class="form-group">
										<input type="submit" name="submit" value="Submit" class="btn btn-primary">
										<input type="submit" name="Save" value="Save" class="btn btn-success">
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
									<div class="form-group">
										<input type="submit" name="submit" value="Submit" class="btn btn-primary">
										<input type="submit" name="Save" value="Save" class="btn btn-success">
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
									<div class="form-group">
										<input type="submit" name="submit" value="Submit" class="btn btn-primary">
										<input type="submit" name="Save" value="Save" class="btn btn-success">
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

									<div class="form-group">
										<input type="submit" name="submit" value="Submit" class="btn btn-primary">
										<input type="submit" name="Save" value="Save" class="btn btn-success">
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
									<div class="form-group">
										<input type="submit" name="submit" value="Submit" class="btn btn-primary">
										<input type="submit" name="Save" value="Save" class="btn btn-success">
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



