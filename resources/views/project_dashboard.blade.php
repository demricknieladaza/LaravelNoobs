@extends('layouts.master')

	<div class="container below-header">
				
	</div> 

	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<div class="tender-container">
					<ul class="nav bid-form-nav">
						<li class="active"><a data-toggle="tab" href="#section1">Pre-Qualification Questionnaire</a></li>
						<li><a   href="{{ url('/publish/project_dashboard/datasheet') }}">Project</a></li>
						<li><a data-toggle="tab" href="#section3">Tenders</a></li>
						<li><a data-toggle="tab" href="#section4">Create New Tender</a></li>
						<li><a data-toggle="tab" href="#section6">Appointment</a></li>
						<li><a data-toggle="tab" href="#section5">Quality Assurance</a></li>
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
												<div class="input_fields_piste">
												    <button class="btn btn-primary" id="add_field_piste">Add Another Award</button>
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
											<div class="input_fields_yawa">
											<button class="btn btn-primary" id="add_field_yawa">Add Another Accreditation</button>
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
												<div class="input_fields_addon">
												    <button class="btn btn-primary" id="add_field_addon">Add Another Award</button>
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
												<div class="input_fields_indus21">
												    <button class="btn btn-primary" id="add_field_indus21">Add Another Industry</button>
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
						<h6 class="bid-form-title">Edit Tender</h6>
						<form method="post">
							<div class="row">
								<div class="col-sm-12">
									<div class="row">
										<div class="col-sm-6"></div>
										<div class="col-sm-6">
												  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">View Bids </button>
											<div class="modal fade" id="myModal2" role="dialog">
												    <div class="modal-dialog">
										     <div class="modal-content">
												     <div class="modal-header">
												          <button type="button" class="close" data-dismiss="modal">&times;</button>
												          <h4 class="modal-title">View Bids</h4>
												      </div>
								             <div class="modal-body">  
												  <table class="table table-bordered">
												    <thead>
												      <tr>
												         <th>#</th>
												        <th>Tenderer</th>
												        <th>Qualitative Score</th>
												        <th>Quantitative Score</th>
												        <th>Risk Score</th>
												      </tr>
												    </thead>
												    <tbody>
												      <tr>
												       <td>1</td>
												        <td>Company 1</td>
												        <td>5</td>
												        <td>9</td>
												        <td>2</td>
												      </tr>	      
												    </tbody>
												    <tbody>
												      <tr>
												       <td>2</td>
												        <td>Company 2</td>
												        <td>2</td>
												        <td>4</td>
												        <td>5</td>
												      </tr>      
												    </tbody>
												        <tbody>
												      <tr>
												       <td>3</td>
												        <td>Company 3</td>
												        <td>7</td>
												        <td>8</td>
												        <td>7</td>
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
								</div>
								</div><br>
									 <div class="row">
										<div class="col-sm-6"></div>
										<div class="form-group">


												         
												  <table class="table table-bordered">
												    <thead>
												      <tr>
												         <th>Query</th>
												        <th>Received</th>
												        <th>Time left to respond</th>
												        <th>Respone</th>
												        
												      </tr>
												    </thead>
												    <tbody>
												      <tr>
												       <td>Question text Question text</td>
												        <td>01/01/18, 15:32</td>
												        <td>26 hours 14 minutes</td>
												        <td><div class="col-sm-6">

													  <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModal1">Respone</button>

													  <div class="modal fade" id="myModal1" role="dialog">
													    <div class="modal-dialog">
													    
													      <div class="modal-content">
													        <div class="modal-header">
													          <button type="button" class="close" data-dismiss="modal">&times;</button>
													          <h4 class="modal-title">Response</h4>
													        </div>
													        <div class="modal-body">
													          <textarea class="form-control" id="exampleTextarea" rows="3" cols="3" placeholder="Enter response here"></textarea>
													        </div>
													        <div class="modal-footer">
													        	   <button type="button" class="btn btn-warning" data-dismiss="modal">Publish Response</button>
													          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

													        </div>
													      </div>
													      
													    </div>
													  </div>
													  
													</div>
													</td>
												      </tr> 
												    </tbody>
												  </table>
												       
												  
												</div>
									</div><br>
                                   
											 <div class="row">
										<div class="col-sm-6"></div>
										<div class="form-group">


												         
												  <table class="table table-bordered">
												    <thead>
												      <tr>
												         <th>Query</th>
												        <th>Received</th>
												        <th>Time left to respond</th>
												        <th>Respone</th>
												        
												      </tr>
												    </thead>
												    <tbody>
												      <tr>
												       <td>Question text Question text</td>
												        <td>01/01/18, 15:32</td>
												        <td>26 hours 14 minutes</td>
												        <td><div class="col-sm-6">

													  <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModal7">Respone</button>

													  <div class="modal fade" id="myModal7" role="dialog">
													    <div class="modal-dialog">
													    
													      <div class="modal-content">
													        <div class="modal-header">
													          <button type="button" class="close" data-dismiss="modal">&times;</button>
													          <h4 class="modal-title">Response</h4>
													        </div>
													        <div class="modal-body">
													          <textarea class="form-control" id="exampleTextarea" rows="3" cols="3" placeholder="Enter response here"></textarea>
													        </div>
													        <div class="modal-footer">
													        	   <button type="button" class="btn btn-warning" data-dismiss="modal">Publish Response</button>
													          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

													        </div>
													      </div>
													      
													    </div>
													  </div>
													  
													</div>
													</td>
												      </tr> 
												    </tbody>
												  </table>
												       
												  
												</div>
									</div><br>
                                    <div class="row">
										<div class="col-sm-6"></div>
										<div class="form-group">


												         
												  <table class="table table-bordered">
												    <thead>
												      <tr>
												         <th>Query</th>
												        <th>Received</th>
												        <th>Time left to respond</th>
												        <th>Respone</th>
												        
												      </tr>
												    </thead>
												    <tbody>
												      <tr>
												       <td>Question text Question text</td>
												        <td>01/01/18, 15:32</td>
												        <td>26 hours 14 minutes</td>
												        <td><div class="col-sm-6">

													  <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModal8">Respone</button>

													  <div class="modal fade" id="myModal8" role="dialog">
													    <div class="modal-dialog">
													    
													      <div class="modal-content">
													        <div class="modal-header">
													          <button type="button" class="close" data-dismiss="modal">&times;</button>
													          <h4 class="modal-title">Response</h4>
													        </div>
													        <div class="modal-body">
													          <textarea class="form-control" id="exampleTextarea" rows="3" cols="3" placeholder="Enter response here"></textarea>
													        </div>
													        <div class="modal-footer">
													        	   <button type="button" class="btn btn-warning" data-dismiss="modal">Publish Response</button>
													          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

													        </div>
													      </div>
													      
													    </div>
													  </div>
													  
													</div>
													</td>
												      </tr> 
												    </tbody>
												  </table>
												       
												  
												</div>
									</div><br>
                                   	<div class="row">
										<div class="col-sm-6"></div>
										<div class="col-sm-6">
												  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal5">View Queries</button>

												  <!-- Modal -->
												  <div class="modal fade" id="myModal5" role="dialog">
												    <div class="modal-dialog">
												    
												      <!-- Modal content-->
												      <div class="modal-content">
												        <div class="modal-header">
												          <button type="button" class="close" data-dismiss="modal">&times;</button>
												          <h4 class="modal-title">View Queries</h4>
												        </div>
												        <div class="modal-body">

												         
												  <table class="table table-bordered">
												    <thead>
												      <tr>
												         <th>#</th>
												        <th>Query</th>
												        <th>Response</th>
												      </tr>
												    </thead>
												    <tbody>
												      <tr>
												       <td>1</td>
												        <td>Question text Question text Question text Question text Question text Question text Question text Question text Question text Question text Question text Question text Question text Question text</td>
												        <td>Response text Response text Response text Response text Response text Response text Response text Response text Response text Response text</td>
												        
												      </tr>
												      
												    </tbody>

												    <tbody>
												      <tr>
												       <td>2</td>
												        <td>Question text Question text Question text Question text Question text Question text Question text Question text Question text Question text Question text Question text Question text Question text</td>
												        <td>Response text Response text Response text Response text Response text Response text Response text Response text Response text Response text</td>
												      </tr>
												      
												    </tbody>
												       <tbody>
												      <tr>
												       <td>3</td>
												        <td>Question text Question text Question text Question text Question text Question text Question text Question text Question text Question text Question text Question text Question text Question text</td>
												        <td>Response text Response text Response text Response text Response text Response text Response text Response text Response text Response text</td>
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
								</div>
								</div><br>
								<div class="row">
									<div id="mode" class="modal fade">
									<div class="modal-dialog modal-confirm">
										<div class="modal-content">
											<div class="modal-head">
												<div class="icon-box">
													<i class="material-icons">&#xE5CD;</i>
												</div>				
												<h4 class="modal-title title1">Do you really want to award Company 1 as the Fire Engineer on the Canada Water Masterplan project? </h4>	
								                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
											</div>
											
											<div class="modal-footer">
												<button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
												<button type="button" class="btn btn-success">Yes</button>
											</div>
										</div>
									</div>
								</div>
									<div class="col-sm-6"></div>
									<div class="col-sm-6">
										
										<div class="dropdown">
											  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Tenderer
											  <span class="caret"></span></button>
											  <ul class="dropdown-menu dropdown1">
											    <li><a href="#mode" class="trigger-btn" data-toggle="modal">Company 1</a></li>
											    <li><a href="#">Company 2</a></li>
											    <li><a href="#">Company 3</a></li>
											  </ul>
											</div>
									</div>
								</div><br>
									<div class="row">
										<div class="col-sm-6"></div>
										<div class="col-sm-6">
												  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal5">View Feedback given</button>

												  <!-- Modal -->
												  <div class="modal fade" id="myModal5" role="dialog">
												    <div class="modal-dialog">
												    
												      <!-- Modal content-->
												      <div class="modal-content">
												        <div class="modal-header">
												          <button type="button" class="close" data-dismiss="modal">&times;</button>
												          <h4 class="modal-title">View Queries</h4>
												        </div>
												        <div class="modal-body">

												         
												  <table class="table table-bordered">
												    <thead>
												      <tr>
												         <th>#</th>
												        <th>Query</th>
												        <th>Response</th>
												      </tr>
												    </thead>
												    <tbody>
												      <tr>
												       <td>1</td>
												        <td>Question text Question text Question text Question text Question text Question text Question text Question text Question text Question text Question text Question text Question text Question text</td>
												        <td>Response text Response text Response text Response text Response text Response text Response text Response text Response text Response text</td>
												        
												      </tr>
												      
												    </tbody>

												    <tbody>
												      <tr>
												       <td>2</td>
												        <td>Question text Question text Question text Question text Question text Question text Question text Question text Question text Question text Question text Question text Question text Question text</td>
												        <td>Response text Response text Response text Response text Response text Response text Response text Response text Response text Response text</td>
												      </tr>
												      
												    </tbody>
												       <tbody>
												      <tr>
												       <td>3</td>
												        <td>Question text Question text Question text Question text Question text Question text Question text Question text Question text Question text Question text Question text Question text Question text</td>
												        <td>Response text Response text Response text Response text Response text Response text Response text Response text Response text Response text</td>
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
												</div>
												</div><br>
													<div class="row">
															<div id="mode1" class="modal fade">
													<div class="modal-dialog modal-confirm">
														<div class="modal-content">
															<div class="modal-head">
																<div class="icon-box1">
																	<i class="material-icons">done</i>
																</div>				
																<h4 class="modal-title">Complete Tender Process</h4>	
												                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
															</div>
															
															<div class="modal-footer">
																
																<button type="button" class="btn btn-success">Back</button>
															</div>
														</div>
													</div>
												</div>
										<div class="col-sm-6">
											<div class="form-group">
												Negotiate Scope and Appointment
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<a href="#mode1" class="btn btn-success" data-toggle="modal">Please click on</a>
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
												<input type="text" name="" class="form-control" placeholder="Last Name">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6"></div>
											<div class="col-sm-6">
											<div class="form-group">
												<div class="input-group date" id="datepicker17" data-date="02-2012" 
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
												<input type="text" name="" class="form-control" placeholder="Last Name">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6"></div>
											<div class="col-sm-6">
											<div class="form-group">
												<div class="input-group date" id="datepicker18" data-date="02-2012" 
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
												<input type="text" name="" class="form-control" placeholder="Last Name">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6"></div>
											<div class="col-sm-6">
											<div class="form-group">
												<div class="input-group date" id="datepicker19" data-date="02-2012" 
												         data-date-format="mm-yyyy">

													 <input class="form-control" type="text" placeholder="Select Year" readonly="readonly" name="date" >	  
													 <span class="input-group-addon add-on"><span class="fa fa-calendar"></span></span>	  
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">Statementt</div>
										<div class="col-sm-6">
											<div class="form-group">
												<select name="" class="form-control">
													<option value="" disabled selected>Select </option>
													<option>I afree to XXX</option>
												
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6"></div>
										<div class="col-sm-6">
											<div class="input_fields_state">
											<button class="btn btn-primary" id="add_field_state">Add Another Insurance</button>
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
					<div id="section6" class="tab-pane fade tender-container">
						<h3 class="bid-form-title">Appointment</h3>
						<form method="post">
							<div class="row">
								<div class="col-sm-12">
									<div class="row">
										<div class="col-sm-6">										
												Insurance		
										</div>
										<div class="col-sm-6">
												<select name="Sel"  class="form-control" >
													<option value="" disabled selected>Select
													<option>Professional</option>
													<option>Indemnity</option>
													<option>Public Liability</option>
													<option>Public Liability</option>
													<option>Products Liability</option>
													<option>Employers</option>
													<option>Liability</option>
													<option>Other</option>
												</select>
											
										</div>
									</div><br>
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
												<input type="text" name="" class="form-control" placeholder="Enter Bond Description">
											</div>
										</div>

									</div>
									<div class="row">
										<div class="col-sm-6"></div>
										<div class="col-sm-6">
											<div class="input_fields_insurance">
											<button class="btn btn-primary" id="add_field_insurance">Add Another Insurance</button>
											<div><input class="form-control" type="text" name="mytext[]"></div>
											</div>
										</div>
									</div><br>
									<div class="row">
										<div class="col-sm-6">										
												Bonds		
										</div>
										<div class="col-sm-6">
												<select name="Sel"  class="form-control" >
													<option value="" disabled selected>Select
													<option>Performance</option>
													<option>Bond</option>
													<option>Parent Company</option>
													<option>Guarantee</option>
													<option>Tender/Bid Bond</option>
													<option>On Demand Bond</option>
													<option>Condtional/on</option>
													<option>Default Bond</option>
													<option>Other</option>
												</select>
											
										</div>
									</div><br>
									<div class="row">
										<div class="col-sm-6"></div>
										<div class="col-sm-6">
											<div class="form-group">
												<input type="text" name="" class="form-control" placeholder="Enter Bond Description">
											</div>
										</div>
									</div>
										<div class="row">
										<div class="col-sm-6"></div>
										<div class="col-sm-6">
											<div class="input_fields_bond">
											<button class="btn btn-primary" id="add_field_bond">Add Another Bond</button>
											<div><input class="form-control" type="text" name="mytext[]"></div>
											</div>
										</div>
									</div><br>
									<div class="row">
										<div class="col-sm-6">										
												Collateral Warranties/Third parties		
										</div>
										<div class="col-sm-6">
												<select name="Sel"  class="form-control" >
													<option value="" disabled selected>Select
													<option>Collateral</option>
													<option>Warranties</option>
													<option>Third Party Rights</option>
													<option>Both</option>
													
												</select>
											
										</div>
									</div><br>
									<div class="row">
										<div class="col-sm-6">Limit Of Liability</div>
										<div class="col-sm-6">
											<div class="form-group">
												<input type="text" name="" class="form-control" placeholder="Insert Limit of Liability">
											</div>
										</div>
									</div>
										<div class="row">
										<div class="col-sm-6">										
												Execution	
										</div>
										<div class="col-sm-6">
												<select name="Sel"  class="form-control" >
													<option value="" disabled selected>Select
													<option>Deed</option>
													<option>Under Hand</option>	
												</select>
											
										</div>
									</div><br>
											<div class="row">
										<div class="col-sm-6">										
												Net Contribution clause	
										</div>
										<div class="col-sm-6">
												<select name="Sel"  class="form-control" >
													<option value="" disabled selected>Select
													<option>Yes</option>
													<option>No</option>	
												</select>
											
										</div>
									</div><br>
									<div class="row">
										<div class="col-sm-6">										
												Form of Appointment	
										</div>
										<div class="col-sm-6">
												<input type="file" name="submit" value="Submit" class="btn btn-primary">
											
										</div>
									</div><br>
									<div class="row">
										<div class="col-sm-6">Documents for Signature</div>
										<div class="col-sm-6">
											<div class="form-group">
												<input type="text" name="" class="form-control" placeholder="Enter Document Title">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6"></div>
										<div class="col-sm-6">
												<input type="file" name="submit" value="Submit" class="btn btn-primary">
											
										</div>
									</div><br>
									<div class="row">
										<div class="col-sm-6"></div>
										<div class="col-sm-6">
											<div class="input_fields_signature">
											<button class="btn btn-primary" id="add_field_signature">Add Another Accreditation</button>
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
												<div class="input-group date" id="datepicker1" data-date="02-2012" 
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




