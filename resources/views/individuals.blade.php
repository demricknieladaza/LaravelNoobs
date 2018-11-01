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
</style>

<script type="text/javascript">
	var accredations = [];
	var degrees = [];
	var awards = [];
	var types = [];
	var provs = [];
	var projteam = [];
	$(document).ready(function(){
		$('.date').datepicker({
			orientation: "bottom left",
			autoclose: true,
			format: 'mm-yyyy',
			minViewMode: 'months',
			viewMode: 'months'
		});
		/*===================================================================================================================*/
		/*==================================Add Accreditaion=================================================================*/
		/*===================================================================================================================*/
		$('#addaccreditaion').click(function(){
			if($('select[name="accredation"]').val() == null || $('select[name="accreyear"]').val() == null){
				alert('Lacking fields')
			}
			else{
				$("ul#addedaccreditaion").append('<li data-id="'+accredations.length+'" onclick="editaccreditaion('+accredations.length+')">'+$('select[name="accredation"]').val()+'</li>');
				var newarray = {
					id: accredations.length,
					accredation: $('select[name="accredation"]').val(),
					year: $('select[name="accreyear"]').val()
				};
				accredations.push(newarray);
				$('select[name="accredation"]').val(''),
				$('select[name="accreyear"]').val('')
			}
		});
		/*==================================Edit Accreditaion=================================================================*/
		$('#editaccreditaion').click(function(){
			if($('select[name="accredation"]').val() == null || $('select[name="accreyear"]').val() == null){
				alert('Lacking fields')
			}
			else{
				var id = $(this).attr('data-id');
				$('ul#addedaccreditaion li[data-id="'+id+'"]').text($('select[name="accredation"]').val());
				accredations[id] = {
					accredation: $('select[name="accredation"]').val(),
					year: $('select[name="accreyear"]').val()
				};
				$('select[name="accredation"]').val(''),
				$('select[name="accreyear"]').val('')
				$('#editaccreditaion').css('display','none');
				$('#addaccreditaion').css('display','block');
			}
		});
		/*===================================================================================================================*/
		/*==============================================Add Degrees==========================================================*/
		/*===================================================================================================================*/
		$('#adddegrees').click(function(){
			if($('select[name="degree"]').val() == null || $('select[name="degree_year"]').val() == null || $('input[name="degree_name"]').val() == ""){
				alert('Lacking fields')
			}
			else{
				$("ul#addeddegree").append('<li data-id="'+degrees.length+'" onclick="editdegrees('+degrees.length+')">'+$('select[name="degree"]').val()+'</li>');
				var newarray = {
					id: degrees.length,
					degree: $('select[name="degree"]').val(),
					year: $('select[name="degree_year"]').val(),
					name: $('input[name="degree_name"]').val()
				};
				degrees.push(newarray);
				$('select[name="degree"]').val(''),
				$('select[name="degree_year"]').val(''),
				$('input[name="degree_name"]').val('')
			}
		});
		/*==================================Edit Degrees=================================================================*/
		$('#editdegrees').click(function(){
			if($('select[name="degree"]').val() == null || $('select[name="degree_year"]').val() == null || $('input[name="degree_name"]').val() == ""){
				alert('Lacking fields')
			}
			else{
				var id = $(this).attr('data-id');
				$('ul#addeddegree li[data-id="'+id+'"]').text($('select[name="degree"]').val());
				degrees[id] = {
					degree: $('select[name="degree"]').val(),
					year: $('select[name="degree_year"]').val(),
					name: $('input[name="degree_name"]').val()
				};
				$('select[name="degree"]').val(''),
				$('select[name="degree_year"]').val(''),
				$('input[name="degree_name"]').val('')
				$('#editdegrees').css('display','none');
				$('#adddegrees').css('display','block');
			}
		});
		/*===================================================================================================================*/
		/*==============================================Add Awards===========================================================*/
		/*===================================================================================================================*/
		$('#addawards').click(function(){
			if($('input[name="award_name"]').val() == "" || $('input[name="award_by"]').val() == "" || $('select[name="award_year"]').val() == null || $('textarea#award_details').val() == "" ){
				alert('Lacking fields');
			}
			else{
				$("ul#addedawards").append('<li data-id="'+awards.length+'" onclick="editawards('+awards.length+')">'+$('input[name="award_name"]').val()+'</li>');
				var newarray = {
					id: awards.length,
					name: $('input[name="award_name"]').val(),
					awarded_by: $('input[name="award_by"]').val(),
					award_year: $('select[name="award_year"]').val(),
					details: $('textarea#award_details').val()
				};
				awards.push(newarray);
				$('input[name="award_name"]').val('');
				$('input[name="award_by"]').val('');
				$('select[name="award_year"]').val('');
				$('textarea#award_details').val('');
			}
		});
		/*==================================Edit Degrees=================================================================*/
		$('#editawards').click(function(){
			if($('input[name="award_name"]').val() == "" || $('input[name="award_by"]').val() == "" || $('select[name="award_year"]').val() == null || $('textarea#award_details').val() == "" ){
				alert('Lacking fields');
			}
			else{
				var id = $(this).attr('data-id');
				$('ul#addedawards li[data-id="'+id+'"]').text($('input[name="award_name"]').val());
				awards[id] = {
					name: $('input[name="award_name"]').val(),
					awarded_by: $('input[name="award_by"]').val(),
					award_year: $('select[name="award_year"]').val(),
					details: $('textarea#award_details').val()
				};
				$('input[name="award_name"]').val('');
				$('input[name="award_by"]').val('');
				$('select[name="award_year"]').val('');
				$('textarea#award_details').val('');
				$('#editawards').css('display','none');
				$('#addawards').css('display','block');
			}
		});
		/*===================================================================================================================*/
		/*==================================Add another type of use==========================================================*/
		/*===================================================================================================================*/
		$('#adduse').click(function(){
			if($('select[name="type_name"]').val() == "" || $('input[name="area"]').val() == "" || $('input[name="units"]').val() == "" ){
				alert('Lacking fields');
			}
			else{
				$("ul#addedtype").append('<li data-id="'+types.length+'" onclick="edituse('+types.length+')">'+$('select[name="type_name"]').val()+'</li>');
				var newarray = {
					id: types.length,
					name: $('select[name="type_name"]').val(),
					area: $('input[name="area"]').val(),
					units: $('input[name="units"]').val()
				};
				types.push(newarray);
				$('select[name="type_name"]').val('');
				$('input[name="area"]').val('');
				$('input[name="units"]').val('');
			}
		});
		/*==================================Edit type of use=================================================================*/
		$('#edituse').click(function(){
			if($('select[name="type_name"]').val() == "" || $('input[name="area"]').val() == "" || $('input[name="units"]').val() == "" ){
				alert('Lacking fields');
			}
			else{
				var id = $(this).attr('data-id');
				$('ul#addedtype li[data-id="'+id+'"]').text($('select[name="type_name"]').val());
				types[id] = {
					name: $('select[name="type_name"]').val(),
					area: $('input[name="area"]').val(),
					units: $('input[name="units"]').val()
				};
				$('select[name="type_name"]').val('');
				$('input[name="area"]').val('');
				$('input[name="units"]').val('');
				$('#edituse').css('display','none');
				$('#adduse').css('display','block');
			}
		});
		/*===================================================================================================================*/
		/*==================================Add provided service=============================================================*/
		/*===================================================================================================================*/
		$('#addprov').click(function(){
			if($('select[name="provservicechoice"]').val() == null || $('input[name="provdfrom"]').val() == "" || $('input[name="provduntil"]').val() == "" ){
				alert('Lacking fields');
			}
			else{
				$("ul#addedprov").append('<li data-id="'+provs.length+'" onclick="editprov('+provs.length+')">'+$('select[name="provservicechoice"]').val()+'</li>');
				var newarray = {
					id: provs.length,
					name: $('select[name="provservicechoice"]').val(),
					from: $('input[name="provdfrom"]').val(),
					until: $('input[name="provduntil"]').val()
				};
				provs.push(newarray);
				$('select[name="provservicechoice"]').val('');
				$('input[name="provdfrom"]').val('');
				$('input[name="provduntil"]').val('');
			}
		});
		/*==================================Edit provided service=================================================================*/
		$('#editprov').click(function(){
			if($('select[name="provservicechoice"]').val() == null || $('input[name="provdfrom"]').val() == "" || $('input[name="provduntil"]').val() == "" ){
				alert('Lacking fields');
			}
			else{
				var id = $(this).attr('data-id');
				$('ul#addedprov li[data-id="'+id+'"]').text($('select[name="provservicechoice"]').val());
				provs[id] = {
					name: $('select[name="provservicechoice"]').val(),
					from: $('input[name="provdfrom"]').val(),
					until: $('input[name="provduntil"]').val()
				};
				$('select[name="provservicechoice"]').val('');
				$('input[name="provdfrom"]').val('');
				$('input[name="provduntil"]').val('');
				$('#editprov').css('display','none');
				$('#addprov').css('display','block');
			}
		});
		/*===================================================================================================================*/
		/*==================================Add Project team=================================================================*/
		/*===================================================================================================================*/
		$('#addteam').click(function(){
			if($('select[name="member"]').val() == null || $('input[name="compname"]').val() == "" ){
				alert('Lacking fields')
			}
			else{
				$("ul#addedproj").append('<li data-id="'+projteam.length+'" onclick="editteam('+projteam.length+')">'+$('select[name="member"]').val()+'</li>');
				var newarray = {
					id: projteam.length,
					name: $('select[name="member"]').val(),
					compname: $('input[name="compname"]').val()
				};
				projteam.push(newarray);
				$('select[name="member"]').val('');
				$('input[name="compname"]').val('');
			}
		});
		/*==================================Edit provided service=================================================================*/
		$('#editteam').click(function(){
			if($('select[name="member"]').val() == null || $('input[name="compname"]').val() == "" ){
				alert('Lacking fields')
			}
			else{
				var id = $(this).attr('data-id');
				$('ul#addedproj li[data-id="'+id+'"]').text($('select[name="member"]').val());
				projteam[id] = {
					name: $('select[name="member"]').val(),
					compname: $('input[name="compname"]').val()
				};
				$('select[name="member"]').val('');
				$('input[name="compname"]').val('');
				$('#editteam').css('display','none');
				$('#addteam').css('display','block');
			}
		});
		/*===================================================================================================================*/
		/*==================================Add Accreditaion=================================================================*/
		/*===================================================================================================================*/
	});
	function editaccreditaion(id){
		// console.log(services[id]);
		$('select[name="accredation"]').val(accredations[id]['accredation']);
		$('select[name="accreyear"]').val(accredations[id]['year']);
		$('#editaccreditaion').css('display','block');
		$('#editaccreditaion').attr('data-id',id);
		$('#addaccreditaion').css('display','none');
	}
	function editdegrees(id){
		// console.log(services[id]);
		$('select[name="degree"]').val(degrees[id]['degree']),
		$('select[name="degree_year"]').val(degrees[id]['year']),
		$('input[name="degree_name"]').val(degrees[id]['name'])
		$('#editdegrees').css('display','block');
		$('#editdegrees').attr('data-id',id);
		$('#adddegrees').css('display','none');
	}
	function editawards(id){
		// console.log(services[id]);
		$('input[name="award_name"]').val(awards[id]['name']);
		$('input[name="award_by"]').val(awards[id]['awarded_by']);
		$('select[name="award_year"]').val(awards[id]['award_year']);
		$('textarea#award_details').val(awards[id]['details']);
		$('#editawards').css('display','block');
		$('#editawards').attr('data-id',id);
		$('#addawards').css('display','none');
	}
	function edituse(id){
		// console.log(services[id]);
		$('select[name="type_name"]').val(types[id]['name']);
		$('input[name="area"]').val(types[id]['area']);
		$('input[name="units"]').val(types[id]['units']);
		$('#edituse').css('display','block');
		$('#edituse').attr('data-id',id);
		$('#adduse').css('display','none');
	}
	function editprov(id){
		// console.log(services[id]);
		$('select[name="provservicechoice"]').val(provs[id]['name']);
		$('input[name="provdfrom"]').val(provs[id]['from']);
		$('input[name="provduntil"]').val(provs[id]['until']);
		$('#editprov').css('display','block');
		$('#editprov').attr('data-id',id);
		$('#addprov').css('display','none');
	}
	function editteam(id){
		// console.log(services[id]);
		$('select[name="member"]').val(projteam[id]['name']);
		$('input[name="compname"]').val(projteam[id]['compname']);
		$('#editteam').css('display','block');
		$('#editteam').attr('data-id',id);
		$('#addteam').css('display','none');
	}
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
														<td width="40%">Name</td>
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
														<td><div class="col-sm-12" style="padding: 0;">Accredation</div>
															<div class="col-sm-12" style="padding: 0;">
																<ul id="addedaccreditaion">
																	
																</ul>
															</div>
														</td>
														<td>
															<div class="col-sm-6" style="padding: 0;">
																<select name="accredation" class="form-control">
																	<option value="" disabled selected>Select accredation</option> 
																	<?php $members = array("AMCIOB","AssocRICS","MRICS","FRICS","HonRICS","BREEAM","AP","RIBA");sort($members, SORT_NATURAL | SORT_FLAG_CASE);foreach ($members as $key ) {echo "<option value='".$key."'>".$key."</option>";}?>
																	<option value="Other">Other</option>
																</select>
															</div>
															<div class="col-sm-6" style="padding: 0;">
																<select name="accreyear" class="form-control">
																	<option value="" disabled selected>Select year</option> 
																	<?php $cur_year = date('Y');$years = [];for ($i=0; $i<=50; $i++) { array_push($years,$cur_year--);}foreach ($years as $year ) {echo "<option value='".$year."'>".$year."</option>"; }?>
																</select>
															</div>
															<div class="col-sm-12" style="padding: 0">
																<button id="addaccreditaion" class="btn btn-warning sakto" style="margin-top: 10px;"><span class="sakto2"><i class="fa fa-plus"></i> Add another accredation</span></button>
																<button id="editaccreditaion" class="btn btn-warning sakto" style="display:none; margin-top: 10px;"><span class="sakto2"><i class="fa fa-plus"></i> Save</span></button>
															</div>
														</td>
													</tr>

													<tr>
														<td>
															<div class="col-sm-12" style="padding: 0;">Degrees</div>
															<div class="col-sm-12" style="padding: 0;">
																<ul id="addeddegree" style="list-style: none;">
																</ul>
															</div>
														</td>
														<td>
															<div class="col-sm-6" style="padding: 0;">
																<select name="degree" class="form-control">
																	<option value="" disabled selected>Select degree</option> 
																	<?php $members = array("BABSA","BAcy","BAcc","B.A.Sc.","BArch","BBA","BCE","BCom","BCA","BDes","B.Des.Comp.","B.Des.Arch.","BEng","BEC","BEE","BFA","B.Hlth.Sci.","BIT","BIGS","LLB","BLAS","BMath","BME","B.P.E.S.S.","B.Res.Ec.","BSc","BS.EOH","BSLS","BTech","BVA","MAMBA","MCom","MCA","MEM","MEDM","MFA","MIS","LLM","MLA","MPS","MPA","MPH","MSc","MSF","MTech","DLPDr.mph.","PhD","PsyD","DrPH","DSc");sort($members, SORT_NATURAL | SORT_FLAG_CASE);foreach ($members as $key ) {echo "<option value='".$key."'>".$key."</option>";}?>
																	<option value="Other">Other</option>
																</select>
															</div>
															<div class="col-sm-6" style="padding: 0;">
																<select name="degree_year" class="form-control">
																	<option value="" disabled selected>Select year</option> 
																	<?php $cur_year = date('Y');$years = [];for ($i=0; $i<=50; $i++) { array_push($years,$cur_year--);}foreach ($years as $year ) {echo "<option value='".$year."'>".$year."</option>"; }?>
																</select>
															</div>
															<div class="col-sm-12" style="padding: 0; margin-top: 10px;">
																<input type="text" name="degree_name" placeholder="Name of degree" class="form-control">
															</div>
															<div class="col-sm-12" style="padding: 0">
																<button id="adddegrees" class="btn btn-warning sakto" style="margin-top: 10px;"><span class="sakto2"><i class="fa fa-plus"></i> Add another degree</span></button>
																<button id="editdegrees" class="btn btn-warning sakto" style="display:none; margin-top: 10px;"><span class="sakto2"><i class="fa fa-plus"></i> Save</span></button>
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
																<ul id="addedawards">
																</ul>
															</div>
														</td>
														<td>
															<div class="col-sm-6" style="padding: 0;">
																<input type="text" name="award_name" placeholder="Name of award" class="form-control">
															</div>
															<div class="col-sm-6" style="padding: 0;">
																<input type="text" name="award_by" placeholder="Awarded by" class="form-control">
															</div>
															<div class="col-sm-12" style="padding: 0;margin-top: 10px;">
																<div class="form-group">
																	<select name="award_year" class="form-control">
																		<option value="" disabled selected>Select year</option> 
																		<?php $cur_year = date('Y');$years = [];for ($i=0; $i<=50; $i++) { array_push($years,$cur_year--);}foreach ($years as $year ) {echo "<option value='".$year."'>".$year."</option>"; }?>
																	</select>
																</div>
															</div>
															<div class="col-sm-12" style="padding: 0;">
																<textarea id="award_details" class="form-control" placeholder="Enter details"></textarea>
															</div>
															<div class="col-sm-12" style="padding: 0;">
																<button id="addawards" class="btn btn-warning sakto" style="margin-top: 10px;"><span class="sakto2"><i class="fa fa-plus"></i> Add another award</span></button>
																<button id="editawards" class="btn btn-warning sakto" style="display:none; margin-top: 10px;"><span class="sakto2"><i class="fa fa-plus"></i> Save</span></button>
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
														<td>
															<div class="col-sm-12" style="padding: 0;">
																Project Experience
															</div>
															<div class="col-sm-12" style="padding: 0;">
																<ul>
																	<li>Project 1
																		<ul>
																			<li>Type of use
																				<ul id="addedtype">
																				</ul>
																			</li>
																			<li>Service provided
																				<ul id="addedprov">
																				</ul>
																			</li>
																			<li>Project team
																				<ul id="addedproj">
																				</ul>
																			</li>
																		</ul>
																	</li>
																</ul>
															</div>
														</td>
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
																<button id="adduse" class="btn btn-warning sakto" style="margin-top: 10px;"><span class="sakto2"><i class="fa fa-plus"></i> Add another type of use</span></button>
																<button id="edituse" class="btn btn-warning sakto" style="display:none; margin-top: 10px;"><span class="sakto2"><i class="fa fa-plus"></i> Save</span></button>
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
																<input class="form-control" type="text" placeholder="From" readonly="readonly" name="provdfrom" >	  
																</div>
															</div>
															<div class="col-sm-2" style="width:5% !important;padding: 0;text-align: center;vertical-align: middle;line-height: 2;">
																-
															</div>
															<div class="col-sm-5" style="width:47.5% !important;padding: 0;">
																<div class="input-group date dateday" id="datepicker43" data-date-container="#datepicker43" data-date="new Date()" 
																data-date-format="mm-dd-yyyy">
																<span class="input-group-addon add-on"><span class="fa fa-calendar"></span></span>
																<input class="form-control" type="text" placeholder="Until" readonly="readonly" name="provduntil">
															</div>
													</div>
													<div class="col-sm-12" style="padding: 0;">
														<button id="addprov" class="btn btn-warning sakto" style="margin-top: 10px;"><span class="sakto2"><i class="fa fa-plus"></i> Add another service</span></button>
														<button id="editprov" class="btn btn-warning sakto" style="display:none; margin-top: 10px;"><span class="sakto2"><i class="fa fa-plus"></i> Save</span></button>
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
														<div id="wrapper">
															<div id="image_preview"></div>
														  <input type="button" class="btn btn-warning sakto" id="loadFileXml" value="Upload images" onclick="document.getElementById('upload_file').click();" />
														  <input type="file" style="display:none;" accept="image/*" id="upload_file" name="upload_file[]" onchange="preview_image();" multiple/>
														 
														</div>
														
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
														<button id="addteam" class="btn btn-warning sakto" style="margin-top: 10px;"><span class="sakto2"><i class="fa fa-plus"></i> Add another project team member</span></button>
														<button id="editteam" class="btn btn-warning sakto"style="margin-top: 10px;display: none;" ><span class="sakto2"><i class="fa fa-plus"></i> Save</span></button>
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

	<script>
		var filesniss = [];
		$(document).ready(function() 
		{ 
			
		});

		function runjq()
		{
			$('.alo').click(function(){	
				$(this).parent('div').remove();
				var idx = "";
				var xs = $(this).attr('data-id');
				$.each(filesniss, function(key,value){
					if(value['name'] == xs){
						idx = key;
					}
				});
				// alert(idx);
				filesniss.splice(idx, 1);
			});

		}

		function removeimg(id)
		{
			alert(id);
		}

		function preview_image() 
		{
			var total_file=document.getElementById("upload_file").files.length;
			var filesni=document.getElementById("upload_file").files;
			
			for(var i=0;i<total_file;i++)
			{
				// console.log(filesni[i]['name']);
				$('#image_preview').append("<div style='padding: 5px' class='col-sm-3'><img width='100px' height='100px' src='"+URL.createObjectURL(event.target.files[i])+"'><a class='alo' data-id='"+filesni[i]['name']+"'>Remove</a></div>");
				filesniss.push(filesni[i]);
			}
			// console.log(filesniss);
			// console.log(filesni);
			runjq();
		}
	</script>


		<!-- end -->

@endsection


