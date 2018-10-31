@extends('layouts.master')

@section('content')

<style type="text/css">
input[type="checkbox"] + .label-text:before{
	content: "\f096";
	font-family: "FontAwesome";
	speak: none;
	font-style: normal;
	font-weight: normal;
	font-variant: normal;
	text-transform: none;
	line-height: 1;
	-webkit-font-smoothing:antialiased;
	width: 1em;
	display: inline-block;
	margin-right: 5px;
}

input[type="checkbox"]:checked + .label-text:before{
	content: "\f14a";
	color: #fe7235;
	animation: effect 250ms ease-in;
}

input[type="checkbox"]:disabled + .label-text{
	color: #aaa;
}

input[type="checkbox"]:disabled + .label-text:before{
	content: "\f0c8";
	color: #ccc;
}

ul.servicelist {
	columns: 2;
	-webkit-columns: 2;
	-moz-columns: 2;
	padding: 0;
	list-style: none;
}
.hid.adserv {
	display: none;
}

ul.servicelistindi {
	columns: 2;
	-webkit-columns: 2;
	-moz-columns: 2;
	padding: 0;
	list-style: none;
}
.hid.adservindi {
	display: none;
}

ul.typeofuse {
	columns: 2;
	-webkit-columns: 2;
	-moz-columns: 2;
	padding: 0;
	list-style: none;
}
.hid.adtypeofuse {
	display: none;
}
ul.typeofdev {
	columns: 2;
	-webkit-columns: 2;
	-moz-columns: 2;
	padding: 0;
	list-style: none;
}
.hid.adtypeofdev {
	display: none;
}
.pointerev{
	pointer-events: none;
}
.alert-awrds{
	color: #fe7235;
	background-color: transparent;
	border-color: #fe7235;
}
.datepicker.dropdown-menu
{ 
	background: white;
}
.datepicker{z-index:9999 !important}

/*$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$*/


/*+++++++++++++++++++++++++++++++++++++++*/
.imageThumb {
	max-height: 75px;
	border: 2px solid;
	padding: 1px;
	cursor: pointer;
}
.pip {
	display: inline-block;
	margin: 10px 10px 0 0;
}
.remove {
	display: block;
	background: #444;
	border: 1px solid black;
	color: white;
	text-align: center;
	cursor: pointer;
}
.remove:hover {
	background: white;
	color: black;
}
</style>

<script type="text/javascript">
	function showadd(){
		$('.hid.adserv').css('display','block');
		$('.notherbut').css('display','none');
	}
	function addservice()
	{
		var ival = $.trim($('.adserv').val());
		if( ival.length != "" ){
			ival = ival.toLowerCase().replace(/\b[a-z]/g, function(letter) {
				return letter.toUpperCase();
			});
			var out = "<li><div class='form-check'><label><input type='checkbox' checked name='offeredservices[]' value='"+ival+"'><span class='label-text'>"+ival+"</span></label></div></li>";
			$('ul#servicelist').append(out);
		}

		$('.hid.adserv').css('display','none');
		$('.notherbut').css('display','block');
		$('.adserv').val('');
	}
</script>
<div class="container-fluid below-header">
</div>


<div class="container-fluid lounge-wrapper">
	<div class="row">
		@include('sidemenu')
		<div class="col-sm-10 col-sm-offset-2 lounge-main">
			<div class="row">
				<div class="col-sm-12 lounge-header">
					<span>Individuals</span>
					<button class="btn btn-warning pull-right">Print Company Information</button>
				</div>
			</div>
			<!-- Modal -->
			<div class="row">					
				<div class="col-sm-12">
					<div class="shadow-wrapper">

						<div class="clearfix"></div>
						<div class="panel-group" id="accordion1">
							<div class="panel">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion2" href="#collapse6">Add new Individual<span class="pull-right caret"></span></a>
									</h4>
								</div>
								<div id="collapse6" class="panel-collapse collapse in">
									<div class="panel-body">
										<div class="row">	
											<div class="col-sm-9">				
												<table class="table table-striped table-hover c-info-table">
													<tr>
														<td width="30%">Name</td>
														<td>
															<div class="col-sm-6" style="padding: 0;">
																<input type="text" name="" class="form-control" placeholder="First Name">
															</div>
															<div class="col-sm-6" style="padding: 0;">
																<input type="text" name="" class="form-control" placeholder="Last Name">
															</div>
														</td>
													</tr>
													<tr>
														<td>Accredation</td>
														<td>
															<div class="col-sm-6" style="padding: 0;">
																<select class="form-control">
																	<option value="" disabled selected>Select accredation</option> 
																	<?php $members = array("AMCIOB","AssocRICS","MRICS","FRICS","HonRICS","BREEAM","AP","RIBA");sort($members, SORT_NATURAL | SORT_FLAG_CASE);foreach ($members as $key ) {echo "<option value='".$key."'>".$key."</option>";}?>
																	<option value="Other">Other</option>
																</select>
															</div>
															<div class="col-sm-6" style="padding: 0;">
																<select name="year_awarded" class="form-control">
																	<option value="" disabled selected>Select year</option> 
																	<?php $cur_year = date('Y');$years = [];for ($i=0; $i<=50; $i++) { array_push($years,$cur_year--);}foreach ($years as $year ) {echo "<option value='".$year."'>".$year."</option>"; }?>
																</select>
															</div>
															<div class="col-sm-12" style="padding: 0">
																<button id="" class="btn btn-warning sakto" style="margin-top: 10px;"><span class="sakto2"><i class="fa fa-plus"></i> Add another accredation</span></button>
																<button id="" class="btn btn-warning sakto" style="display:none; margin-top: 10px;"><span class="sakto2"><i class="fa fa-plus"></i> Save</span></button>
															</div>
														</td>
													</tr>

													<tr>
														<td>
															<div class="col-sm-12" style="padding: 0;">Degrees</div>
															<div class="col-sm-12" style="padding: 0;">
																<ul id="addedserv" style="list-style: none;">
																</ul>
															</div>
														</td>
														<td>
															<div class="col-sm-6" style="padding: 0;">
																<select class="form-control">
																	<option value="" disabled selected>Select degree</option> 
																	<?php $members = array("BABSA","BAcy","BAcc","B.A.Sc.","BArch","BBA","BCE","BCom","BCA","BDes","B.Des.Comp.","B.Des.Arch.","BEng","BEC","BEE","BFA","B.Hlth.Sci.","BIT","BIGS","LLB","BLAS","BMath","BME","B.P.E.S.S.","B.Res.Ec.","BSc","BS.EOH","BSLS","BTech","BVA","MAMBA","MCom","MCA","MEM","MEDM","MFA","MIS","LLM","MLA","MPS","MPA","MPH","MSc","MSF","MTech","DLPDr.mph.","PhD","PsyD","DrPH","DSc");sort($members, SORT_NATURAL | SORT_FLAG_CASE);foreach ($members as $key ) {echo "<option value='".$key."'>".$key."</option>";}?>
																	<option value="Other">Other</option>
																</select>
															</div>
															<div class="col-sm-6" style="padding: 0;">
																<select name="year_awarded" class="form-control">
																	<option value="" disabled selected>Select year</option> 
																	<?php $cur_year = date('Y');$years = [];for ($i=0; $i<=50; $i++) { array_push($years,$cur_year--);}foreach ($years as $year ) {echo "<option value='".$year."'>".$year."</option>"; }?>
																</select>
															</div>
															<div class="col-sm-12" style="padding: 0; margin-top: 10px;">
																<input type="text" name="degree_name" placeholder="Name of degree" class="form-control">
															</div>
															<div class="col-sm-12" style="padding: 0">
																<button id="" class="btn btn-warning sakto" style="margin-top: 10px;"><span class="sakto2"><i class="fa fa-plus"></i> Add another degree</span></button>
																<button id="" class="btn btn-warning sakto" style="display:none; margin-top: 10px;"><span class="sakto2"><i class="fa fa-plus"></i> Save</span></button>
															</div>
														</td>
													</tr>
													<tr>
														<td>Seniority</td>
														<td>
															<div class="form-group">
																<input type="text" class="form-control" name="seniority_level" placeholder="Enter Level of Seniority">
															</div>
														</td>
													</tr>
													<tr>
														<td><div class="col-sm-12" style="padding: 0;">Awards</div>
															<div class="col-sm-12" style="padding: 0;">
																<ul id="addedawards" style="list-style: none;">
																</ul>
															</div>
														</td>
														<td>
															<div class="col-sm-6" style="padding: 0;">
																<input type="text" name="" placeholder="Name of award" class="form-control">
															</div>
															<div class="col-sm-6" style="padding: 0;">
																<input type="text" name="" placeholder="Awarded by" class="form-control">
															</div>
															<div class="col-sm-12" style="padding: 0;margin-top: 10px;">
																<div class="form-group">
																	<select name="year_awarded" class="form-control">
																		<option value="" disabled selected>Select year</option> 
																		<?php $cur_year = date('Y');$years = [];for ($i=0; $i<=50; $i++) { array_push($years,$cur_year--);}foreach ($years as $year ) {echo "<option value='".$year."'>".$year."</option>"; }?>
																	</select>
																</div>
															</div>
															<div class="col-sm-12" style="padding: 0;">
																<textarea class="form-control" placeholder="Enter details"></textarea>
															</div>
															<div class="col-sm-12" style="padding: 0;">
																<button id="" class="btn btn-warning sakto" style="margin-top: 10px;"><span class="sakto2"><i class="fa fa-plus"></i> Add another award</span></button>
																<button id="" class="btn btn-warning sakto" style="display:none; margin-top: 10px;"><span class="sakto2"><i class="fa fa-plus"></i> Save</span></button>
															</div>
														</td>
													</tr>
													<tr>
														<td>Services</td>
														<td>
															<div class="col-sm-12" style="padding: 0;">
																<ul id="servicelist" class="servicelist">
																	<?php
																	$Service = array(
																		"Architect", "Structural engineer", "Service engineer",
																		"Fire engineer", "Acoustic engineer", "Principal designer","Facade engineer" , "Building control", "Lighting consultant", "Security consultant", "Planning consultant" , "Sustainability consultant", "BIM consultant", "Quantity surveyor", "Project manager"
																	);
																	sort($Service, SORT_NATURAL | SORT_FLAG_CASE);
																	foreach ($Service as $key ) {
																		echo "<li><div class='form-check'>
																		<label>
																		<input type='checkbox' name='offeredservices[]' value='".$key."'><span class='label-text'>".$key."</span>
																		</label>
																		</div></li>";
																	}

																	?>
																</ul>
															</div>
															<div class="col-sm-12" style="padding: 0;">
																<div class="form-group divaddservbid">
																	<input type="text" class="form-control hid adserv" name="adserv">
																	<button type="button" class="btn btn-warning sakto notherbut" onclick="showadd()"><span class="sakto2"><i class="fa fa-plus"></i></span>Add another service</button>
																	<button type="button" class="btn btn-warning sakto hid adserv" id="addservicebut" onclick="addservice()"><span class="sakto2"><i class="fa fa-plus"></i></span>Add Service</button>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>Project Experience</td>
														<td>
															<div class="col-sm-6" style="padding: 0;">
																<div class="form-group">
																	<input type="text" name="" class="form-control" placeholder="Project title">
																</div>
															</div>
															<div class="col-sm-6" style="padding: 0;">
																<div class="form-group">
																	<input type="number" name="" class="form-control" placeholder="Project value">
																</div>
															</div>
															<div class="col-sm-6" style="padding: 0;">
																<select name="type_name" class="form-control sel" style="width: 100%;">
																	<option value="" disabled selected>Select type of use</option> 
																	<?php
																	$Service = array(
																		"Residential","Commercial ","Retail","Leisure","Sports and venues","Hotel","Industrial","Education","Healthcare","Defence","Aviation","Highways","Bridges","Rail","Water","Oil,gas and chemical", "Office"
																	);
																	sort($Service, SORT_NATURAL | SORT_FLAG_CASE);
																	foreach ($Service as $key ) {
																		echo "<option value='".$key."'>".$key."</option>";
																	}
																	?>
																</select>
															</div>
															<div class="col-sm-3" style="padding: 0;">
																<input type="number" name="area" class="form-control" placeholder="Area">
															</div>
															<div class="col-sm-3" style="padding: 0;">
																<input type="number" name="units" class="form-control" placeholder="Units">
															</div>
															<div class="col-sm-12" style="padding: 0;">
																<button id="" class="btn btn-warning sakto" style="margin-top: 10px;"><span class="sakto2"><i class="fa fa-plus"></i> Add another type of use</span></button>
																<button id="" class="btn btn-warning sakto" style="display:none; margin-top: 10px;"><span class="sakto2"><i class="fa fa-plus"></i> Save</span></button>
															</div>
															<label>Service Provided</label>
															<div class="col-sm-12" style="padding: 0;margin-bottom: 15px;">
																<select name="provservicechoice" class="form-control"> 
																	<option value="" disabled selected>Select service</option> 
																	<?php $members = array("Architect","Structural Engineer","Service Engineer","Fire Engineer","Acoustic Engineer","Principal Designer","Facade Engineer","Building Control","Lighting Consultant","Security Consultant","Planning Consultant","Sustainability Consultant","BIM Consultant","Quantity Surveyor","Project Manager");sort($members, SORT_NATURAL | SORT_FLAG_CASE);foreach ($members as $key ) {echo "<option value='".$key."'>".$key."</option>";}?>
																</select>
															</div>
															<div class="col-sm-5" style="width:47.5% !important; padding: 0;">
																<div class="input-group date dateday" id="datepicker43" data-date-container="#datepicker43" data-date="new Date()" 
																data-date-format="mm-dd-yyyy">
																<span class="input-group-addon add-on"><span class="fa fa-calendar"></span></span>
																<input class="form-control " type="text" placeholder="From" readonly="readonly" name="provdfrom" >	  
															</div>
														</div>
														<div class="col-sm-2" style="width:5% !important;padding: 0;text-align: center;vertical-align: middle;line-height: 2;">
															-
														</div>
														<div class="col-sm-5" style="width:47.5% !important;padding: 0;">
															<div class="input-group date dateday" id="datepicker43" data-date-container="#datepicker43" data-date="new Date()" 
															data-date-format="mm-dd-yyyy">
															<span class="input-group-addon add-on"><span class="fa fa-calendar"></span></span>
															<input class="form-control " type="text" placeholder="Until" readonly="readonly" name="provduntil" >	  

														</div>
													</div>
													<div class="col-sm-12" style="padding: 0;">
														<button id="" class="btn btn-warning sakto" style="margin-top: 10px;"><span class="sakto2"><i class="fa fa-plus"></i> Add another service</span></button>
														<button id="" class="btn btn-warning sakto" style="display:none; margin-top: 10px;"><span class="sakto2"><i class="fa fa-plus"></i> Save</span></button>
													</div>
													<div class="col-sm-12" style="padding: 0;">
														<label>Type of Development</label>
													</div>
													<div class="col-sm-12" style="padding: 0;">
														<input type="checkbox" name="development[]" class="filled-in" id="new"> <label for="new"> New built</label>
													</div>
													<div class="col-sm-12" style="padding: 0;">
														<input type="checkbox" name="development[]" class="filled-in" id="refurbishment"> <label for="refurbishment"> Refurbishment</label>
													</div>
													<div class="col-sm-12" style="padding: 0;">
														<input type="checkbox" name="development[]" class="filled-in" id="demolition"> <label for="demolition"> Demolition</label>
													</div>
													<div class="form-group">
														<textarea class="form-control" rows="10" placeholder="Enter Project Description"></textarea>
													</div>
													<div class="form-group">
														<input type="button" class="btn btn-warning sakto" id="loadFileXml" value="Upload images" onclick="document.getElementById('files').click();" />
											<input type="file" style="display:none;" id="files" accept="image/*" name="files"/>
													</div>
													<div class="form-group">
														<div class="col-sm-6" style="padding: 0;">
															<label>Project Team Member</label>
															<select name="member" class="form-control"> 
																<option value="" disabled selected>Select</option> 
																<?php $members = array("Architect","Structural Engineer","Service Engineer","Fire Engineer","Acoustic Engineer","Principal Designer","Facade Engineer","Building Control","Lighting Consultant","Security Consultant","Planning Consultant","Sustainability Consultant","BIM Consultant","Quantity Surveyor","Project Manager");sort($members, SORT_NATURAL | SORT_FLAG_CASE);foreach ($members as $key ) {echo "<option value='".$key."'>".$key."</option>";}?>
															</select>
														</div>
														<div class="col-sm-6" style="padding: 0;">
															<label>Company</label>
															<input type="text" name="compname" class="form-control" placeholder="Enter Company">
														</div>
													</div>
													<div class="form-group">
														<button id="addprojmem" class="btn btn-warning sakto" style="margin-top: 10px;"><span class="sakto2"><i class="fa fa-plus"></i> Add another project team member</span></button>
														<button id="edtprojmem" class="btn btn-warning sakto"style="margin-top: 10px;display: none;" ><span class="sakto2"><i class="fa fa-plus"></i> Save</span></button>
													</div>
													<div class="form-group">
														<button class="btn btn-warning sakto"><span class="sakto2"><i class="fa fa-plus"></i> Add another project</span></button>
													</div>
												</td>
											</tr>											
										</table>
									</div>
									<div class="col-sm-3 company-quick-details">
										<p><img src="{{ url('images/logo-british.jpg') }}"></p>
										<p>
											<input type="button" class="btn btn-warning sakto" id="loadFileXml" value="Upload image" onclick="document.getElementById('file').click();" />
											<input type="file" style="display:none;" id="file" accept="image/*" name="file"/>
										</p>
									</div>

												{{-- <div class="col-sm-3 company-quick-details">
														<p><img src="{{ url('images/logo-british.jpg') }}"></p>
														<p><button class="btn btn-warning">Change Logo</button></p>
													</div> --}}
												</div>
											</div>
										</div>
									</div>

									<h3 class="org-head"><button type="button" class="btn btn-primary" data-toggle="modal" data-backdrop="static" data-target="#exampleModalCenter"><span><i class="fa fa-plus-square"></i> </span> Add</button></h3>
								</div>
							</div>	
						</div>
					</div>		
				</div>
			</div>
		</div>




		<!-- end -->

		@endsection


