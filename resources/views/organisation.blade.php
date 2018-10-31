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
.dropdown-menu
{
	margin-left: 0;
	min-width: 100%;
}
.table-condensed
{
    width: 100%;
}
#addedserv li{
	font-weight: 600;
} 

</style>

<script type="text/javascript">
	var services = [];
	var awards = [];
	var typeofuse = [];
	var provservices = [];
	var projmem = [];
	var counter = 0;
	var awardcounter = 0;
	var typecounter = 0;
	var provcounter = 0;
	var projcounter = 0;

	$(document).ready(function(){
		$('.date').datepicker({
			orientation: "bottom left",
			autoclose: true,
			format: 'mm-yyyy',
			minViewMode: 'months',
			viewMode: 'months'
		});
		//********************************************************************************************************************
		//=========ADD SERVICES=============
		$('#addservices').click(function(){
			if($('select[name="servicechoice"]').val() == null || $('input[name="servdatefrom"]').val() == "" || $('input[name="servdateuntil"]').val() == ""  ){
				alert('Lacking fields')
			}
			else{
				$("ul#addedserv").append('<li data-id="'+counter+'" onclick="editservices('+counter+')">'+$('select[name="servicechoice"]').val()+'</li>');
				var newservices = {
					name: $('select[name="servicechoice"]').val(),
					dfrom: $('input[name="servdatefrom"]').val(),
					duntil: $('input[name="servdateuntil"]').val()
				};
				services.push(newservices);
				$('select[name="servicechoice"]').val('');
				$('input[name="servdatefrom"]').val('');
				$('input[name="servdateuntil"]').val('');
				counter++;
			}
			// console.log(services);
		});

		//=========Edit SERVICES=============
		$('#edtservices').click(function(){
			if($('select[name="servicechoice"]').val() == null || $('input[name="servdatefrom"]').val() == "" || $('input[name="servdateuntil"]').val() == ""  ){
				alert('Lacking fields');
			}
			else{
				var id = $(this).attr('data-id');
				$('li[data-id="'+id+'"]').text($('select[name="servicechoice"]').val());
				services[id] = {
					name: $('select[name="servicechoice"]').val(),
					dfrom: $('input[name="servdatefrom"]').val(),
					duntil: $('input[name="servdateuntil"]').val()
				};
				$('select[name="servicechoice"]').val('');
				$('input[name="servdatefrom"]').val('');
				$('input[name="servdateuntil"]').val('');
				$('#edtservices').css('display','none');
				$('#addservices').css('display','block');
			}
			// console.log(services);
		});
		// ************************************************************************************************************************
		/*************************************************************************************************************************/
		//=========ADD Awards=============
		$('#addaward').click(function(){
			if($('input[name="award_name"]').val() == "" || $('input[name="award_details"]').val() == "" || $('select[name="year_awarded"]').val() == null  ){
				alert('Lacking fields')
			}
			else{
				$("ul#addedawards").append('<li data-id="'+awardcounter+'" onclick="editaward('+awardcounter+')">'+$('input[name="award_name"]').val()+'</li>');
				var newaward = {
					name: $('input[name="award_name"]').val(),
					details: $('input[name="award_details"]').val(),
					year: $('select[name="year_awarded"]').val()
				};
				awards.push(newaward);
				$('input[name="award_name"]').val('');
				$('input[name="award_details"]').val('');
				$('select[name="year_awarded"]').val('');
				awardcounter++;
			}
			// console.log(services);
		});

		//=========Edit award=============
		$('#edtaward').click(function(){
			if($('input[name="award_name"]').val() == "" || $('input[name="award_details"]').val() == "" || $('select[name="year_awarded"]').val() == null  ){
				alert('Lacking fields')
			}
			else{
				var id = $(this).attr('data-id');
				$('li[data-id="'+id+'"]').text($('input[name="award_name"]').val());
				awards[id] = {
					name: $('input[name="award_name"]').val(),
					details: $('input[name="award_details"]').val(),
					year: $('select[name="year_awarded"]').val()
				};
				$('input[name="award_name"]').val('');
				$('input[name="award_details"]').val('');
				$('select[name="year_awarded"]').val('');
				$('#edtaward').css('display','none');
				$('#addaward').css('display','block');
			}
			// console.log(services);
		});

		// ************************************************************************************************************************
		/*************************************************************************************************************************/
		//=========ADD type=============
		$('#addtype').click(function(){
			if($('select[name="type_name"]').val() == null || $('input[name="area"]').val() == "" || $('input[name="units"]').val() == ""  ){
				alert('Lacking fields')
			}
			else{
				$("ul#addedtype").append('<li data-id="'+typecounter+'" onclick="edittype('+typecounter+')">'+$('select[name="type_name"]').val()+'</li>');
				var newtype = {
					name: $('select[name="type_name"]').val(),
					area:$('input[name="area"]').val(),
					units: $('input[name="units"]').val()
				};
				typeofuse.push(newtype);
				$('select[name="type_name"]').val('');
				$('input[name="area"]').val('');
				$('input[name="units"]').val('');
				typecounter++;
			}
			// console.log(services);
		});

		//=========Edit type=============
		$('#edttype').click(function(){
			if($('select[name="type_name"]').val() == null || $('input[name="area"]').val() == "" || $('input[name="units"]').val() == ""  ){
				alert('Lacking fields')
			}
			else{
				var id = $(this).attr('data-id');
				$('li[data-id="'+id+'"]').text($('select[name="type_name"]').val());
				typeofuse[id] = {
					name: $('select[name="type_name"]').val(),
					area:$('input[name="area"]').val(),
					units: $('input[name="units"]').val()
				};
				$('select[name="type_name"]').val('');
				$('input[name="area"]').val('');
				$('input[name="units"]').val('');
				$('#edttype').css('display','none');
				$('#addtype').css('display','block');
			}
			// console.log(services);
		});

		// ************************************************************************************************************************
		/*************************************************************************************************************************/
		//=========ADD provided service=============
		$('#addprovservices').click(function(){
			if($('select[name="provservicechoice"]').val() == null || $('input[name="provdfrom"]').val() == "" || $('input[name="provduntil"]').val() == ""  ){
				alert('Lacking fields')
			}
			else{
				$("ul#addedprovserv").append('<li data-id="'+provcounter+'" onclick="editprovservices('+provcounter+')">'+$('select[name="provservicechoice"]').val()+'</li>');
				var newservices = {
					name: $('select[name="provservicechoice"]').val(),
					dfrom: $('input[name="provdfrom"]').val(),
					duntil: $('input[name="provduntil"]').val()
				};
				provservices.push(newservices);
				$('select[name="provservicechoice"]').val('');
				$('input[name="provdfrom"]').val('');
				$('input[name="provduntil"]').val('');
				provcounter++;
			}
			// console.log(services);
		});

		//=========Edit Provided SERVICES=============
		$('#edtprovservices').click(function(){
			if($('select[name="provservicechoice"]').val() == null || $('input[name="provdfrom"]').val() == "" || $('input[name="provduntil"]').val() == ""  ){
				alert('Lacking fields')
			}
			else{
				var id = $(this).attr('data-id');
				$('li[data-id="'+id+'"]').text($('select[name="provservicechoice"]').val());
				provservices[id] = {
					name: $('select[name="provservicechoice"]').val(),
					dfrom: $('input[name="provdfrom"]').val(),
					duntil: $('input[name="provduntil"]').val()
				};
				$('select[name="provservicechoice"]').val('');
				$('input[name="provdfrom"]').val('');
				$('input[name="provduntil"]').val('');
				$('#edtprovservices').css('display','none');
				$('#addprovservices').css('display','block');
			}
			// console.log(services);
		});

		// ************************************************************************************************************************
		/*************************************************************************************************************************/
		//=========ADD Proj member=============
		$('#addprojmem').click(function(){
			if($('select[name="member"]').val() == null || $('input[name="compname"]').val() == "" ){
				alert('Lacking fields')
			}
			else{
				$("ul#addedprojmem").append('<li data-id="'+projcounter+'" onclick="editprojmem('+projcounter+')">'+$('select[name="member"]').val()+'</li>');
				var newservices = {
					name: $('select[name="member"]').val(),
					compname: $('input[name="compname"]').val()
				};
				projmem.push(newservices);
				$('select[name="member"]').val('');
				$('input[name="compname"]').val('');
				projcounter++;
			}
			// console.log(services);
		});

		//=========Edit Proj member=============
		$('#edtprojmem').click(function(){
			if($('select[name="member"]').val() == null || $('input[name="compname"]').val() == "" ){
				alert('Lacking fields')
			}
			else{
				var id = $(this).attr('data-id');
				$('li[data-id="'+id+'"]').text($('select[name="member"]').val());
				projmem[id] = {
					name: $('select[name="member"]').val(),
					compname: $('input[name="compname"]').val()
				};
				$('select[name="member"]').val('');
				$('input[name="compname"]').val('');
				$('#edtprojmem').css('display','none');
				$('#addprojmem').css('display','block');
			}
			// console.log(services);
		});

	});

	// ================EDIT SERVICES============
	function editservices(id){
		// console.log(services[id]);
		$('select[name="servicechoice"]').val(services[id]['name']);
		$('input[name="servdatefrom"]').val(services[id]['dfrom']);
		$('input[name="servdateuntil"]').val(services[id]['duntil']);
		$('#edtservices').css('display','block');
		$('#edtservices').attr('data-id',id);
		$('#addservices').css('display','none');
	}

	// ================EDIT award============
	function editaward(id){
		// console.log(services[id]);
		$('input[name="award_name"]').val(awards[id]['name']);
		$('input[name="award_details"]').val(awards[id]['details']);
		$('select[name="year_awarded"]').val(awards[id]['year']);
		$('#edtaward').css('display','block');
		$('#edtaward').attr('data-id',id);
		$('#addaward').css('display','none');
	}

	// ================EDIT type============
	function edittype(id){
		// console.log(services[id]);
		$('select[name="type_name"]').val(typeofuse[id]['name']);
		$('input[name="area"]').val(typeofuse[id]['area']);
		$('input[name="units"]').val(typeofuse[id]['units']);
		$('#edttype').css('display','block');
		$('#edttype').attr('data-id',id);
		$('#addtype').css('display','none');
	}

	function editprovservices(id){
		// console.log(services[id]);
		$('select[name="provservicechoice"]').val(provservices[id]['name']);
		$('input[name="provdfrom"]').val(provservices[id]['dfrom']);
		$('input[name="provduntil"]').val(provservices[id]['duntil']);
		$('#edtprovservices').css('display','block');
		$('#edtprovservices').attr('data-id',id);
		$('#addprovservices').css('display','none');
	}

	function editprojmem(id){
		// console.log(services[id]);
		$('select[name="member"]').val(projmem[id]['name']);
		$('input[name="compname"]').val(projmem[id]['compname']);
		$('#edtprojmem').css('display','block');
		$('#edtprojmem').attr('data-id',id);
		$('#addprojmem').css('display','none');
	}


	function rundate(){
		$('.date').datepicker({
			orientation: "auto",
			autoclose: true,
			forceParse: true,
			format: 'mm-yyyy',
			language: 'en',
			minViewMode: 'months',
			viewMode: 'months'
		});

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
					<span>Organisation</span>
					<button class="btn btn-warning pull-right">Print Company Information</button>
				</div>
			</div>
			
			<div class="row">					
				<div class="col-sm-12">
					<div class="shadow-wrapper">

						<div class="clearfix"></div>
						<div class="panel-group" id="accordion1">
							<div class="panel">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion2" href="#collapse7">Add Organisation<span class="pull-right caret"></span></a>
									</h4>
								</div>
								<div id="collapse7" class="panel-collapse collapse">
									<div class="panel-body">
										<div class="row">	
											<div class="col-sm-9">				
												<table class="table table-striped table-hover c-info-table">
													<tr>
														<td width="30%">Company Name</td>
														<td><input type="text" name="" class="form-control" placeholder="British Land"></td>
													</tr>
													<tr>
														<td>Registered Office Address</td>
														<td><input type="text" name="" class="form-control" placeholder="100 Sample Road, London, W1 23Y, United Kingdom"></td>
													</tr>
													<tr>
														<td>
															<div class="col-sm-12" style="padding: 0;">Services</div>
															<div class="col-sm-12" style="padding: 0;">
																<ul id="addedserv" style="list-style: none;">
																</ul>
															</div>
														</td>
														<td>
															<table width="100%">
																<tr>
																	<td width="100%" colspan="3">
																		<div class="form-group">
																			<select name="servicechoice" class="form-control"> 
																				<option value="" disabled selected>Select service</option> 
																				<?php $members = array("Architect","Structural Engineer","Service Engineer","Fire Engineer","Acoustic Engineer","Principal Designer","Facade Engineer","Building Control","Lighting Consultant","Security Consultant","Planning Consultant","Sustainability Consultant","BIM Consultant","Quantity Surveyor","Project Manager");sort($members, SORT_NATURAL | SORT_FLAG_CASE);foreach ($members as $key ) {echo "<option value='".$key."'>".$key."</option>";}?>
																			</select>
																		</div>
																	</td>
																</tr>
																<tr >
																	<td width="47.5%">
																		<div class="input-group date" data-date="new Date()"  data-date-container="#datepicker41" id="datepicker41"
																		data-date-format="mm-yyyy">
																		<span class="input-group-addon add-on"><span class="fa fa-calendar"></span></span>
																		<input class="form-control " type="text" placeholder="From" readonly="readonly" name="servdatefrom" >	  

																	</div>
																</td>
																<td width="5%" style="text-align: center;vertical-align: middle;">-</td>
																<td width="47.5%">
																	<div class="input-group date" data-date="new Date()" 
																	data-date-container="#datepicker42" id="datepicker42" data-date-format="mm-yyyy">
																	<span class="input-group-addon add-on"><span class="fa fa-calendar"></span></span>
																	<input class="form-control " type="text" placeholder="Until" readonly="readonly" name="servdateuntil" >	  

																</div>
															</td>
														</tr>
														<tr>
															<td colspan="3">
																<button id="addservices" class="btn btn-warning sakto" style="margin-top: 10px;"><span class="sakto2"><i class="fa fa-plus"></i> Add another service</span></button>
																<button id="edtservices" class="btn btn-warning sakto" style="display:none; margin-top: 10px;"><span class="sakto2"><i class="fa fa-plus"></i> Save</span></button>
															</td>
														</tr>
													</table>
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
													<table width="100%">
														<tr>
															<td width="33.33%">
																<input type="text" name="award_name" class="form-control" placeholder="Award name">
															</td>	
															<td width="33.33%">
																<input type="text" name="award_details" class="form-control" placeholder="Details">
															</td>
															<td width="33.33%">
																<select name="year_awarded" class="form-control">
																	<option value="" disabled selected>Select year</option> 
																	<?php $cur_year = date('Y');$years = [];for ($i=0; $i<=50; $i++) { array_push($years,$cur_year--);}foreach ($years as $year ) {echo "<option value='".$year."'>".$year."</option>"; }?>
																</select>
															</td>
														</tr>
														<tr>
															<td colspan="3">
																<button id="addaward" class="btn btn-warning sakto" style="margin-top: 10px;"><span class="sakto2"><i class="fa fa-plus"></i> Add another award</span></button>
																<button id="edtaward" class="btn btn-warning sakto" style="display:none;margin-top: 10px;"><span class="sakto2"><i class="fa fa-plus"></i> Save</span></button>
															</td>
														</tr>
													</table>
												</td>
											</tr>
											<tr>
												<td>
													<div class="col-sm-12" style="padding: 0;">Track Record</div>
													<div class="col-sm-12" style="padding: 0;">
														<label>Type of use</label>
														<ul id="addedtype" style="list-style: none;">
														</ul>
														<label>Service Provided</label>
														<ul id="addedprovserv" style="list-style: none;">
														</ul>
														<label>Project Team Member</label>
														<ul id="addedprojmem" style="list-style: none;">
														</ul>
													</div>
												</td>
												<td>
													<div class="form-group">
														<input type="text" name="" class="form-control" placeholder="Enter Project Title">
													</div>
													<div class="form-group">
														<input type="text" name="" class="form-control" placeholder="Enter Project Value">
													</div>
													<div class="form-group">
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
													</div>
													<div class="form-group">
														<button id="addtype" class="btn btn-warning sakto" style="margin-top: 10px;"><span class="sakto2"><i class="fa fa-plus"></i> Add another type of use</span></button>
														<button id="edttype" class="btn btn-warning sakto" style="display:none;margin-top: 10px;"><span class="sakto2"><i class="fa fa-plus"></i> Save</span></button>
													</div>

													<label>Service Provided</label>
													<div class="form-group">
														<div class="col-sm-12" style="padding: 0;margin-bottom: 15px;">
															<select name="provservicechoice" class="form-control"> 
																<option value="" disabled selected>Select service</option> 
																<?php $members = array("Architect","Structural Engineer","Service Engineer","Fire Engineer","Acoustic Engineer","Principal Designer","Facade Engineer","Building Control","Lighting Consultant","Security Consultant","Planning Consultant","Sustainability Consultant","BIM Consultant","Quantity Surveyor","Project Manager");sort($members, SORT_NATURAL | SORT_FLAG_CASE);foreach ($members as $key ) {echo "<option value='".$key."'>".$key."</option>";}?>
															</select>
														</div>
													</div>
													<div class="form-group" >
														<div class="col-sm-5" style="width:47.5% !important; padding: 0;">
															<div class="input-group date dateday" id="datepicker43" data-date-container="#datepicker43" data-date="new Date()" 
															data-date-format="mm-dd-yyyy">
															<span class="input-group-addon add-on"><span class="fa fa-calendar"></span></span>
															<input class="form-control " type="text" placeholder="From" readonly="readonly" name="provdfrom" >	  

														</div>
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
										</div>
										<div class="form-group">
											<button id="addprovservices" class="btn btn-warning sakto" style="margin-top: 10px;"><span class="sakto2"><i class="fa fa-plus"></i> Add another service</span></button>
											<button id="edtprovservices" class="btn btn-warning sakto" style="display:none;margin-top: 10px;"><span class="sakto2"><i class="fa fa-plus"></i> Save</span></button>
										</div>

										<label>Type of Development</label>

										<div class="form-group">
											<div class="col-sm-12" style="padding: 0;">
												<input type="checkbox" name="development" class="filled-in" id="new"> <label for="new"> New built</label>
											</div>
											<div class="col-sm-12" style="padding: 0;">
												<input type="checkbox" name="development" class="filled-in" id="refurbishment"> <label for="refurbishment"> Refurbishment</label>
											</div>
											<div class="col-sm-12" style="padding: 0;">
												<input type="checkbox" name="development" class="filled-in" id="demolition"> <label for="demolition"> Demolition</label>
											</div>
										</div>
										<div class="form-group">
											<textarea class="form-control" rows="10" placeholder="Enter Project Description"></textarea>
										</div>
										<div class="form-group">
											<button class="btn btn-warning sakto"><span class="sakto2"><i class="fa fa-plus"></i> Upload Images</span></button>
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
							<p><button class="btn btn-warning sakto">Change Logo</button></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		{{-- <h3 class="org-head"><button type="button" class="btn btn-primary" data-toggle="modal" data-backdrop="static" data-target="#exampleModalCenter"><span><i class="fa fa-plus-square"></i> </span> Add</button></h3> --}}
	</div>
</div>	
</div>
</div>		
</div>
</div>
</div>




<!-- end -->

@endsection


