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
	.form-control {
		display: inline-block;
	}
	ul.bondslist {
	  columns: 2;
	  -webkit-columns: 2;
	  -moz-columns: 2;
	  padding: 0;
	  list-style: none;
	}
	.hid.adbondslist {
		display: none;
	}
</style>
<script type="text/javascript">
	function showaddbondslist(){
		$('.hid.adbondslist').css('display','block');
		$('.notherbutindi').css('display','none');
	};
	function addbondslist()
	{
		var ival = $.trim($('.adbondslist').val());
		if( ival.length != "" ){
			ival = ival.toLowerCase().replace(/\b[a-z]/g, function(letter) {
			    return letter.toUpperCase();
			});
			var out = "<li><div class='form-check'><label><input type='checkbox' checked name='bonds[]' value='"+ival+"'><span class='label-text'>"+ival+"</span></label></div></li>";
			$('ul#bondslist').append(out);
		}

		$('.hid.adbondslist').css('display','none');
		$('.notherbutindi').css('display','block');
		$('.adbondslist').val('');
	}
</script>
<script type="text/javascript">
	$(document).ready(function (){
		$('#createservproj').click(function(){
			// alert('adsad');
			var serv = $('select[name="servicechoice"]').val();
			// $('#selectServe').toggle();	
			$('#serveprojtitle').html(serv);
			$('#tendserve').val(serv);
			jQuery.ajax({
				url: "{{ url('project_info_tender') }}",
				method: 'post',
				data: {
					services: jQuery('#tendserve').val(),
					id: {{ $project->project_record_id }},
					idd: jQuery('#idd').val()

				},
				success: function(result){
					// jQuery('.alert').show();
					// jQuery('.alert').html(result.services);
					// $('h3#serveprojtitle').attr('data-id',result.services);
					$('tbody#tenderload').append('<tr><td style="text-align: left;font-weight:bolder; " calss="td">'+result.services['services']+'<a data-tender-id="'+result.services['tender_id']+'"><p>Edit Tender</p></a></td><td class="td">Drafted</td><td class="td">TBC</td><td class="td">TBC</td><td class="td">TBC</td><td class="td">TBC</td><td class="td">TBC</td><td class="td"></td><tr>');
					console.log(result.services);
					// alert(result.services);
				}
			});
		});

		$('h3#serveprojtitle').click(function(){
			$('#idd').val($(this).attr('data-id'));
		});

		$('#cret').click(function(){
			$('#idd').val(0);
		});

		// $('#tender_load').click(function(){
		// 	jQuery.ajax({
		// 		url: "{{ url('project_info_tender') }}",
		// 		method: 'get',
		// 		success:function(response){
		// 			var tender = [];
		// 			tender = response.tender;
		// 		}
		// 	});
		// });

		$('.upd').click(function(){
			var constr = [];
			var use_n = [];
			var use_a = [];
			var use_u = [];
			var use_t = [];
			var riba_s = [];
			var date = [];
			var member_p = [];
			var member_n = [];
			var idni = {{ $project->project_record_id }};
			jQuery("input[name='constraint[]']").each(function()
				{
					constr.push($(this).val());
				}
			);
			jQuery("input[name='use_name[]']").each(function()
				{
					use_n.push($(this).val());
				}
			);
			jQuery("input[name='use_area[]']").each(function()
				{
					use_a.push($(this).val());
				}
			);
			jQuery("input[name='use_u[]']").each(function()
				{
					use_u.push($(this).val());
				}
			);
			jQuery("input[name='use_t[]']").each(function()
				{
					use_t.push($(this).val());
				}
			);
			jQuery("input[name='riba_stage[]']").each(function()
				{
					riba_s.push($(this).val());
				}
			);
			jQuery("input[name='date[]']").each(function()
				{
					date.push($(this).val());
				}
			);
			jQuery("input[name='member_position[]']").each(function()
				{
					member_p.push($(this).val());
				}
			);
			jQuery("input[name='member_name[]']").each(function()
				{
					member_n.push($(this).val());
				}
			);
			//constr = JSON.stringify(constr);
			console.log(constr);
			saveFunction();
			alert(idni);
			jQuery.ajax({
				url: "{{ url('project_info/'.$project->project_record_id.'') }}",
				method: 'put',
				data: {
					project_title: jQuery("input[name='project_title']").val(),
					location: jQuery("input[name='location']").val(),
					type_of_development: jQuery("input[name='type_of_development']").val(),
					construction_value: jQuery("input[name='construction_value']").val(),
					procurement_route: jQuery("input[name='procurement_route']").val(),
					main_road: jQuery("input[name='main_road']").val(),
					tube_station_one: jQuery("input[name='tube_station_one']").val(),
					tube_station_two: jQuery("input[name='tube_station_two']").val(),
					bus_lines: jQuery("input[name='bus_lines']").val(),
					adjacent_uses: jQuery("input[name='adjacent_uses']").val(),
					history: jQuery("input[name='history']").val(),
					constraint: constr,
					use_name: use_n,
					use_area: use_a,
					use_units: use_u,
					use_type: use_t,
					riba_stage: riba_s,
					date: date,
					design_team_meeting: jQuery("input[name='design_team_meeting']").val(),
					project_progress_meeting: jQuery("input[name='project_progress_meeting']").val(),
					member_position: member_p,
					member_name: member_n
				},
				success: function(result){
					jQuery('.alert').show();
					jQuery('.alert').html(result.success);
				}
			});
		});
		

		$('#addother').click(function(){
			var insura = $('#ins').val();
			insura = insura.toLowerCase().replace(/\b[a-z]/g, function(letter) {
			    return letter.toUpperCase();
			});
			$('#drpinsu option:last').before('<option value="'+insura+'">'+insura+'</option>');
			var element = document.getElementById('showother');
			element.style.display='none';
		});

		$('#insurdrpdwn').change(function() {
		    if($(this).val()==="other"){ 
		        $(this).parent().append('<div class="form-group" ><input type="text" name="insurancename[]" class="form-control"></div>');    
		    }
		});
	});
</script>

<script type="text/javascript">
	$(document).ready(function() {
	    var max_fields      = 10; //maximum input boxes allowed
	    var wrapper         = $("#addedinsur"); //Fields wrapper
	    var add_button      = $("#addinsur"); //Add button ID
	    var yir 			= "<?php $insurance = array("Professional","Indemnity","Public Liability","Products Liability","Employers Liability");sort($insurance,SORT_NATURAL | SORT_FLAG_CASE);foreach ($insurance as $key) {echo "<option value='".$key."'>".$key."</option>";}?>";
	    
	    var x = 1; //initlal text box count
	    $(add_button).click(function(e){ //on add input button click
	        e.preventDefault();
	        if(x < max_fields){ //max input box allowed
	            x++; //text box increment
	            $(wrapper).append('<div><div class="row" style="padding-bottom:10px;"><div class="col-sm-4"></div><div class="col-sm-8"><div class="form-group"><div class="col-sm-6" style="padding:0;"><select name="insurancename[]" id="insurdrpdwn" class="form-control" ><option value="" disabled selected>Select insurance</option>'+yir+'</select></div><div class="col-sm-6" style="padding:0;padding-left: 15px;"><input type="number" placeholder="Insurance Level" name="insurance_level[]" class="form-control"></div></div></div></div><a href="#" class="remove_field">Remove</a></div>'); //add input box
	        }
	    });
	    
	    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
	        e.preventDefault(); $(this).parent('div').remove(); x--;
	    });
	});
</script>

<script type="text/javascript">
	$(document).ready(function() {
	    var max_fields      = 10; //maximum input boxes allowed
	    var wrapper         = $("#addedsig"); //Fields wrapper
	    var add_button      = $("#addsig"); //Add button ID
	    
	    var x = 1; //initlal text box count
	    $(add_button).click(function(e){ //on add input button click
	        e.preventDefault();
	        if(x < max_fields){ //max input box allowed
	            x++; //text box increment
	            $(wrapper).append('<div><div class="form-group"><input type="text" placeholder="Enter Document Title" class="form-control" name="net_contribution_clause[]"></div><div class="form-group"><input type="file" class="form-control" name="documents_for_signature[]"></div><a href="#" class="remove_field">Remove</a></div>'); //add input box
	        }
	    });
	    
	    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
	        e.preventDefault(); $(this).parent('div').remove(); x--;
	    });
	});
</script>
<div class="container below-header ">
	<h1 id="logo" class="project-title bid-page-title centerh" style="margin-left: 5%;
    margin-right: 5%;">Project Dashboard</small></h1>
</div>

<div class="container">
	<div class="modal fade" id="selectServe" role="dialog" tabindex="-1">
	    <div class="modal-dialog">
	      <!-- Modal content-->
	      <div class="modal-content" style="top: 83px;">
	        <div class="modal-header" style="border-top-left-radius: 6px;border-top-right-radius: 6px;">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h4 class="modal-title">
	          	Choose your service
	          </h4>
	        </div>
	        <div class="modal-body">
	            <p>Offered Services:
	            	<div class="form-group">
		          		<select name="servicechoice" class="form-control"> 
		          			<option value="" disabled selected>Select service</option> 
		          			<?php $members = array("Architect","Structural Engineer","Service Engineer","Fire Engineer","Acoustic Engineer","Principal Designer","Facade Engineer","Building Control","Lighting Consultant","Security Consultant","Planning Consultant","Sustainability Consultant","BIM Consultant","Quantity Surveyor","Project Manager");sort($members, SORT_NATURAL | SORT_FLAG_CASE);foreach ($members as $key ) {echo "<option value='".$key."'>".$key."</option>";}?>
		          		</select>
	          		</div>
				  </p>
				  {{-- TENDER ID --}}
				  <input type="hidden" name="tender_id" id="idd" value="0">
	        </div>
	        <div class="modal-footer" style="text-align: center;">
	          <button type="button" class="btn btn-primary" data-toggle="tab" data-backdrop="false" data-dismiss="modal" href="#section4" id="createservproj" >Create</button>
	          <button type="button" class="btn btn-primary butgrey">Go Back</button>
	        </div>
	      </div>   
	    </div>
	</div>
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
				<select name="days" class="form-control" onchange="Days(this.value);"> 
					<option value="" disabled selected>Select days</option> 
					<?php 
														$days = array(
															"1 days",
															"2 days","3 days","4 days","5 days","6 days","7 days","8 days",
															"9 days","10 days","11 days","12 days","13 days","14 days",
															"15 days","16 days","17 days","18 days","19 days","20 days","21 days","22 days",
															"23 days","24 days","25 days","26 days","27 days","28 days","29 days","30 days"
														);
														sort($days, SORT_NATURAL | SORT_FLAG_CASE);
														foreach ($days as $key ) {
														    echo "<option value='".$key."'>".$key."</option>";
														}

													 ?>
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
					<li class=""><a class="abut" data-toggle="tab" href="#section2">Scope</a></li>
					<li class=""><a class="abut" data-toggle="tab" href="#section3" id="tender_load">Tenders</a></li>
					<li class="" id="cret" ><a class="abut" data-toggle="modal" data-target="#selectServe"><span data-toggle="tab" href="#section4">Create New Tender</span></a></li>
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
		    						<h3>Project Information
		    						<button class="btn buts save_proj upd" style="display: none; float:right;margin-top:-14px;" onclick="saveFunction()"><i class="fa fa-save" style="font-size:15px" href=""></i>Save</button>
		    						<button class="btn buts" id="edit_proj" onclick="myFunction()" style="float:right;margin-top:-14px;" ><i class="fa fa-edit" style="font-size:15px"></i>Edit</button></h3>
		    				</div>			
		    				<div class="col-sm-12">
		    					<!--<form id="projform" action="{{ url('project_info')}}" method="POST">-->
		    						@csrf
								{!! Form::open(['action' => ['ProjectInformationController@update',  $project->project_record_id ], 'id' => 'projform', 'method' => 'POST'])!!}
								{!! Form::hidden('project_record_id', $project->project_record_id) !!}
								{{ Form::hidden('_method', 'PUT') }}
								<table class="table table-striped table-hover">
		    						<tr>
		    							<td>Project Title
  											
										</td>
		    							<td><input id="water" type="text" name="project_title" class="form-control proje" value="{{ $project->project_title }}" placeholder="Canada Water Masterplan" readonly></td>
		    						</tr>
		    						<tr>
		    							<td>Project ID
			    							
		    							</td>
		    							<td><input type="number" name="project_id" class="form-control proje" value="{{ $project->project_id }}" placeholder="123456789" readonly></td>
		    						</tr>
		    						<tr>
		    							<td>Location
		    								
		    							</td>
		    							<td><input type="text" name="location" class="form-control proje" value="{{ $project->location }}" placeholder="Canada Water, London, SE16, United Kingdom" readonly></td>
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
		    											<input type="text" name="main_road" class="form-control proje" value="{{ $transport->main_road }}" placeholder="Surrey Quays Road" readonly>
		    										</td>
		    									</tr>
		    									<tr>
		    										<td>
		    											<p><b>Tube Stations</b></p>
		    										</td>
		    										<td>
		    											<input type="text" name="tube_station_one" class="form-control proje" value="{{ $transport->tube_station_one }}" placeholder="Canada Water 0.5km" readonly>
		    											<input type="text" name="tube_station_two" class="form-control proje" value="{{ $transport->tube_station_two }}" placeholder="Surrey Quays 1.5km" readonly>
		    										</td>
		    									</tr>
		    									<tr>
		    										<td>
		    											<p><b>Bus Lines</b> </p>
		    										</td>
		    										<td>
		    											<input type="text" name="bus_lines" class="form-control proje" value="{{ $transport->bus_lines }}" placeholder="701, 702, 851, 930" readonly>
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
		    										<td><input type="text" name="adjacent_uses" class="form-control proje" value="{{ $area->adjacent_uses }}" placeholder="Residential (High-End), Regeneration Space, Retail" readonly></td>
		    									</tr>
		    									<tr>
		    										<td>History</td>
		    										<td><input type="text" name="history" class="form-control proje" value="{{ $area->history }}" placeholder="Residential (High-End), Former Docks and Warehouses" readonly></td>
		    									</tr>
		    								</table>
		    							</td>
		    						</tr>
		    						<tr>
		    							<td>Constraints
		    								
		    							</td>
		    							<td>
											@foreach($constraints as $const)
		    								<div class="form-group">                               
		    									<input type="text" name="constraint[]" class="form-control proje" value="{{ $const->constraint }}" placeholder="Adjacent Tube Tunnel" readonly>
											</div>
											@endforeach
		    								<div class="addedcons"></div>
		    								<div class="form-group">
		    									<input type="button" id="addconstraint" class="addbbutn btn form-control pull-right" style="width: 90px;background-color: #fe7235;color:white;" value="Add" disabled />
		    								</div>
		    								{{-- <input type="text" name="constraint_two" class="form-control proje" placeholder="Existing Buildings" readonly>
		    								<input type="text" name="constraint_three" class="form-control proje" placeholder="Weak Ground Conditions" readonly> --}}
		    							</td>
		    						</tr>
		    						<tr>
		    							<td>Type of Development
		    								
		    							</td>
		    							<td><input type="text" name="type_of_development" class="form-control proje" value="{{ $project->type_of_development }}" placeholder="New Built" readonly></td>
		    						</tr>
		    						<tr>
		    							<td>Construction Value
		    								
		    							</td>
		    							<td><input type="text" name="construction_value" class="form-control proje" value="{{ $project->construction_value }}" placeholder="£ 300,000,000" readonly></td>
		    						</tr>
		    						<tr>
		    							<td>Types of Use
		    								
		    							</td>
		    							<td>
		    								<table width="100%" id="addedtypeofuse" class="addedtype">
												@foreach($type as $use)
		    									<tr class="lastitem">
		    										<td><input type="text" name="use_name[]" class="form-control proje" value="{{ $use->use_name }}" placeholder="Residential" readonly></td>&nbsp
		    										<td><input type="text" name="use_area[]" class="form-control proje" value="{{ $use->use_area }}" placeholder="30,000m2" readonly></td>
		    										<td><input type="text" name="use_units[]" class="form-control proje" value="{{ $use->use_units }}" placeholder="200 units" readonly></td>
		    										<td><input type="text" name="use_type[]" class="form-control proje" value="{{ $use->use_type }}" placeholder="High-End" readonly></td>
												</tr>
												@endforeach

		    									<tr>
		    										<td>Total</td>
		    										<td id="total">57,000m2</td>
		    										<td></td>
		    										<td><div class="form-group">
		    									<input type="button" id="addtypeofuse" class="addbbutn btn form-control pull-right" style="background-color: #fe7235;color:white;width: 90px;" value="Add" disabled />
		    								</div></td>	
		    									</tr>
		    								</table>
		    							</td>
		    						</tr>
		    						<tr>
		    							<td>Milestones
		    								
		    							</td>
		    							<td>
		    								<table width="100%" class="addedriba">
												@foreach($milestones as $mile)
		    									<tr class="lastitemiba">
		    										<td><input type="text" name="riba_stage[]" class="form-control proje" value="{{ $mile->riba_stage }}" placeholder="RIBA Stage 1 Completion" readonly></td>
		    										<td><input type="text" name="date[]" class="form-control proje" value="{{ $mile->date }}" placeholder="01/03/2019" readonly></td>
												</tr>
												@endforeach
		    									{{-- <tr>
		    										<td>RIBA Stage 2 Completion</td>
		    										<td><input type="text" name="riba_stage_two" class="form-control proje" placeholder="01/07/2019" readonly></td>
		    									</tr>
		    									<tr>
		    										<td>RIBA Stage 3 Completion</td>
		    										<td><input type="text" name="riba_stage_three" class="form-control proje" placeholder="01/10/2019" readonly></td>
		    									</tr>
		    									<tr>
		    										<td>RIBA Stage 4 Completion</td>
		    										<td><input type="text" name="riba_stage_four" class="form-control proje" placeholder="01/12/2019" readonly></td>
		    									</tr> --}}

		    									<tr>
		    										<td colspan="2"><div class="form-group">
		    									<input type="button" id="addriba" class="addbbutn btn form-control pull-right" style="background-color: #fe7235;color:white;width: 90px;" value="Add" disabled />
		    								</div></td>
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
		    										<td><input type="text" name="design_team_meeting" class="form-control proje" value="{{ $meetings->design_team_meeting }}" placeholder="Tuesday, 14:00 – 15:30, Weekly" readonly></td>
		    									</tr>
		    									<tr>
		    										<td>Project Progress Meeting</td>
		    										<td><input type="text" name="project_progress_meeting" class="form-control proje" value="{{ $meetings->project_progress_meeting }}" placeholder="Tuesday, 15:30 – 16:30, Fortnightly" readonly></td>
		    									</tr>
		    								</table>
		    							</td>
		    						</tr>
		    						<tr>
		    							<td>Procurement Route
		    								
		    							</td>
		    							<td><input type="text" name="procurement_route" class="form-control proje" value="{{ $project->procurement_route }}" placeholder="Design & Build" readonly></td>
		    						</tr>
		    						<tr>
		    							<td>Project Team
		    								
		    							</td>
		    							<td>
		    								<table width="100%" class="addedproj">
												@foreach($team as $team)
		    									<tr class="lastitemproj">
		    										<td><input type="text" name="member_position[]" class="form-control proje" value="{{ $team->member_position }}" placeholder="Architect" readonly></td>
		    										<td><input type="text" name="member_name[]" class="form-control proje" value="{{ $team->member_name }}" placeholder="Allies and Morrison" readonly></td>
												</tr>
												@endforeach
		    									{{-- <tr>
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
		    									</tr> --}}
		    									<tr>
		    										<td colspan="2"><div class="form-group">
		    										<input type="button" id="addprojteam" class="addbbutn btn form-control pull-right" style="background-color: #fe7235;color:white;width: 90px;" value="Add" disabled />
		    										</div></td>
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
		    					<section id="tend">
		    						
		    					</section>		
		    					<div style="text-align: center;">
								</div>
								{!! Form::close() !!}			
		    				</div>
		    			</div>
		    		</div>
		    		<div class="tender-container" >
		    			<div class="row">
		    				<div class="col-sm-12 active-tenders">
		    					<h3 >Tender Queries
		    					<button class="btn buts save_proj1" style="display: none; float:right;margin-top:-14px;" onclick="saveFunction1()"><i class="fa fa-save" style="font-size:15px"></i>Save</button>
		    					<button class="btn buts" id="edit_proj1" onclick="myFunction1()" style="float: right;margin-top:-14px;"><i class="fa fa-edit" style="font-size:15px"></i>Edit</button></h3>
		    					<div class="row">	
		    						<div class="col-sm-12">	
		    							<table class="table table-striped table-hover tender_queries" id="a">
		    								<tr>
		    									<td width="10%" style="font-weight: 600;">#</td>
		    									<td style="font-weight: 600;">Query</td>
		    									<td style="font-weight: 600;">Responses</td>

		    								</tr>
		    								<tr>
		    									<td>1</td>
		    									<td>TextTextTextTextTextTextTextTextText</td>
		    									<td><input id="respo1" type="text" name="respo1" class="form-control proje" placeholder="TextTextTextTextTextTextTextTextTextTextTextText" readonly></td>
		    								</tr>
		    								<tr>
		    									<td>2</td>
		    									<td>TextTextTextTextTextTextTextTextText</td>
		    									<td><input id="respo2" type="text" name="respo2" class="form-control proje" placeholder="TextTextTextTextTextTextTextTextTextTextTextText" readonly></td>
		    								</tr>
		    								<tr>
		    									<td>3</td>
		    									<td>TextTextTextTextTextTextTextTextText</td>
		    									<td><input id="respo3" type="text" name="respo3" class="form-control proje" placeholder="TextTextTextTextTextTextTextTextTextTextTextText" readonly></td>
		    								</tr>
		    							</table>
		    						</div>
		    					</div>
		    					<section id="emptab">
		    						
		    					</section>
		    					<div style="text-align: center;">
		    					</div>
		    				</div>
		    			</div>
		    		</div>
					<div class="tender-container">
						<div class="row">
							<div class="col-sm-12 active-tenders">
								<h3>Project Information
		    						<button class="btn buts save_proj2" style="display: none; float:right;margin-top:-14px;" onclick="saveFunction2()"><i class="fa fa-save" style="font-size:15px"></i>Save</button>
		    						<button class="btn buts" id="edit_proj2" onclick="myFunction2()" style="float:right;margin-top:-14px;" ><i class="fa fa-edit" style="font-size:15px"></i>Edit</button></h3>
								<div class="row">	
									<div class="col-sm-9">				
										<table class="table table-striped table-hover emp_details">
											<tr>
												<td>Employer
													
												</td >
												<td><input id="emp1" type="text" name="emp1" class="form-control proje" placeholder="British Land" readonly></td>
											</tr>
											<tr>
												<td>Registered Office Address
													
												</td>
												<td><input id="emp2" type="text" name="emp2" class="form-control proje" placeholder="100 Sample Road, London, W1 23Y, United Kingdom" readonly></td>
											</tr>
											<tr>
												<td>Industry
													
												</td>
												<td><input id="emp3" type="text" name="emp3" class="form-control proje" placeholder="Developer" readonly></td>
											</tr>
											<tr>
												<td>Year Established
													
												</td>
												<td><input id="emp4" type="text" name="emp4" class="form-control proje" placeholder="1955" readonly></td>
											</tr>
											<tr>
												<td>Number of Employees
													
												</td>
												<td><input id="emp5" type="text" name="emp5" class="form-control proje" placeholder="10-50" readonly></td>
											</tr>
										</table>
									</div>

									<div class="col-sm-3 company-quick-details">
										<p><img src="../images/logo-british.jpg"></p>
										<p>Active Projects <span class="project1">4</span></p>
										<p>Active Tenders <span class="project1">9</span></p>
									

									</div>
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
  			        	<th class="kilid" style="width: 95px;">Services</th>
			            <th class="kilid" style="width: 95px;">Status</th>
			            <th class="kilid" style="width: 95px;">Start</th>
			            <th class="kilid" style="width: 95px;">End</th>
			            <th class="kilid" style="width: 95px;">Time Remaining</th>
			            <th class="kilid" style="width: 95px;">Bids received</th>
			            <th class="kilid" style="width: 95px;">Queries received (outstanding)</th>
			            <th class="kilid" style="width: 130px;">Actions</th>
  			        </tr>
    			    </thead>
    			    <tbody id="tenderload">
						@foreach($tender as $ten)
						<tr>
							{{-- <td style="text-align: left;font-weight:bolder; " class="td">{{ $ten->services }} <a><p>Edit Tender</p></a></td>
							<td class="td">{{ $ten->status }}</td>
							<td class="td">TBC</td>
							<td class="td">TBC</td>
							<td class="td">{{ $ten->time_remaining }}</td>
							<td class="td">TBC</td>
							<td class="td">TBC</td> --}}
							@if($ten->status == "Closed")
								<td style="text-align: left;font-weight:bolder; " class="td">{{ $ten->services }} <a><p></p></a></td>
								<td class="td">{{ $ten->status }}</td>
								<td class="td">TBC</td>
								<td class="td">TBC</td>
								<td class="td">{{ $ten->time_remaining }}</td>
								<td class="td">TBC</td>
								<td class="td">TBC</td>
								<td class="td">
								</button><button class="btn btn-primary" style="margin-bottom:10px;    width: 135px;">Dowload Evalution<br>Report</button>
							 	</button><button class="btn btn-warning" style="width: 135px;">Negotiate Scope <br>and Appointment</button></td>
							@else
								<td style="text-align: left;font-weight:bolder; " class="td">{{ $ten->services }} <a><p>Edit Tender</p></a></td>
								<td class="td">{{ $ten->status }}</td>
								<td class="td">TBC</td>
								<td class="td">TBC</td>
								<td class="td">{{ $ten->time_remaining }}</td>
								<td class="td">TBC</td>
								<td class="td">TBC</td>
							@endif

						</tr>
						@endforeach

  			        {{-- <tr>
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
			            <td class="td"><strong style="font-size: 25px;">7</strong><a data-toggle="modal" data-backdrop="static" data-target="#viewQueries"><p>View Answer/<br>Queries</p></a></td>
			            <td class="td">
			              </button><button class="btn btn-primary" style="margin-bottom:10px;    width: 135px;">Dowload Evalution<br>Report</button>
			            </button><button class="btn btn-warning" style="width: 135px;">Negotiate Scope <br>and Appointment</button></td>
			            
  			        </tr>  			        <tr>
			            <td style="text-align: left;font-weight:bolder; " class="td">Structural Engineer</td>
			            <td class="td">Closed</td>
			            <td class="td">1/1/2018</td>
			            <td class="td">1/9/2018</td>
			            <td class="td">5 days</td>
			            <td class="td"><strong style="font-size: 25px;">3</strong><a data-toggle="modal" data-backdrop="static" data-target="#viewBid"><p>View Bids</p></a></td>
			            <td class="td"><strong style="font-size: 25px;">7</strong><a data-toggle="modal" data-backdrop="static" data-target="#viewQueries"><p>View Answer/<br>Queries</p></a></td>
			            <td class="td">
			              </button><button class="btn btn-primary" style="margin-bottom:10px;    width: 135px;">Dowload Evalution<br>Report</button>
			            </button><button class="btn btn-warning" style="width: 135px;">Negotiate Scope <br>and Appointment</button></td>
			            
  			        </tr>  			        <tr>
			            <td style="text-align: left;font-weight:bolder; " class="td">Structural Engineer</td>
			            <td class="td">Closed</td>
			            <td class="td">1/1/2018</td>
			            <td class="td">1/9/2018</td>
			            <td class="td">5 days</td>
			            <td class="td"><strong style="font-size: 25px;">3</strong><a data-toggle="modal" data-backdrop="static" data-target="#viewBid"><p>View Bids</p></a></td>
			            <td class="td"><strong style="font-size: 25px;">7</strong><a data-toggle="modal" data-backdrop="static" data-target="#viewQueries"><p>View Answer/<br>Queries</p></a></td>
			            <td class="td">
			              </button><button class="btn btn-primary" style="margin-bottom:10px;    width: 135px;">Dowload Evalution<br>Report</button>
			            </button><button class="btn btn-warning" style="width: 135px;">Negotiate Scope <br>and Appointment</button></td>
			            
  			        </tr> --}}
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
									<h3 data-toggle="modal" data-target="#selectServe" data-id="0" style="margin-bottom: 10px; margin-top: 0;padding: 15px;border: 3px solid grey;border-radius: 6px;text-align: center;" id="serveprojtitle" class="header-title animate-pop-in">
									</h3>
									<input type="hidden" name="" id="">
		    						<li class="active"><a data-toggle="tab" href="#section01">Pre-Qualification Questionnaire</a></li>
		    						<li ><a data-toggle="tab" href="#section11">Scope</a></li>
		    						<li><a data-toggle="tab" href="#section21">Appointment</a></li>
		    						<li><a data-toggle="tab" href="#section31">Evaluation Settings</a></li>
		    						<li><a data-toggle="tab" href="#section41">Quality Assurance</a></li><br>
		    						
		    					</ul><br>
		    				</div>
		    			</div>
		    			<div class="col-sm-9 questionnaire-section">
		    				<div class="tab-content">
		    					<div id="section01" class="tab-pane fade in active tender-container">
		    						<h3 class="bid-form-title">Pre-Qualification Questionnaire</h3>
		    						
		    					</div>

		    					<div id="section11" class="tab-pane tender-container">
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
		    					</div>
		    					<div id="section21" class="tab-pane fade tender-container">
		    						<h3 class="bid-form-title">Appointment</h3>
		    						<form method="post">
										<input type="hidden" id="tendserve" name="services">
		    							<div class="row">
		    								<div class="col-sm-12">
		    									<div class="row" style="padding-bottom:10px;">
													<div class="col-sm-4">	Insurances</div>
													<div class="col-sm-8">
														<div class="form-group">
															<div class="col-sm-6" style="padding:0;">
																<select name="insurancename[]" id="insurdrpdwn" class="form-control" >
																		<option value="" disabled selected>Select insurance</option>
																		<?php 

																		$insurance = array(
																						"Professional",
																						"Indemnity",
																						"Public Liability",
																						"Products Liability",
																						"Employers Liability");

																		sort($insurance,SORT_NATURAL | SORT_FLAG_CASE);

																		foreach ($insurance as $key) {
																		  echo "<option value='".$key."'>".$key."</option>";
																		}

																		 ?>
																	
																		<option value="other" >Other</option>
																	</select>
															</div>
															<div class="col-sm-6" style="padding:0;padding-left: 15px;">
															<input type="number" placeholder="Insurance Level" name="insurance_level[]" class="form-control">
															</div>
															</div>
														</div>
													</div>
													<div id="addedinsur"></div>
		    									<div class="row" style="padding-bottom:10px;">
													<div class="col-sm-4">	</div>
														<div class="col-sm-8">
															<div class="form-group">
																<div class="col-sm-6" style="padding:0;">
																	<div class="form-group">
																		<div class="cnt_insurance">
																		    <button class="btn btn-primary" id="addinsur" >Add Another Insurance</button>
																		</div>
																	</div>
																</div>
															
																</div>
															</div>
														</div>
		    									<div class="row">
		    										<div class="col-sm-4">
		    											<div class="form-group">
		    												Bonds
		    											</div>
		    										</div>
		    										<div class="col-sm-8">
		    											<div class="form-group">
		    												<ul id="bondslist" class="bondslist">
		    												<?php
		    												$Service = array("Select Bonds ","Performance Bond","Parent Company Guarantee","Tender/Bid Bond","On Demand Bond","Conditional/On  Default Bond");
		    												sort($Service, SORT_NATURAL | SORT_FLAG_CASE);
		    												foreach ($Service as $key ) {
		    												    echo "<li><div class='form-check'>
		    															<label>
		    																<input type='checkbox' name='bonds[]' value='".$key."'><span class='label-text'>".$key."</span>
		    															</label>
		    														</div></li>";
		    												}

		    												?>
		    												</ul>
														</div>
														<div class="form-group divaddservbid">
															<input type="text" class="form-control hid adbondslist" name="adserv">
														    <button type="button" class="btn btn-primary notherbutindi" onclick="showaddbondslist()">Add another bond</button>
														    <button type="button" class="btn btn-primary hid adbondslist" id="adbondslist" onclick="addbondslist()">Add bond</button>
														</div>
													</div>
												</div>
		    									<div class="row">
		    										<div class="col-sm-4">
		    											<div class="form-group">
		    												Collateral Warranties / Third Parties 
		    											</div>
		    										</div>
		    										<div class="col-sm-8">
		    											<div class="form-group">
															<select name="collateral_warranties[]"  class="form-control" >
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
		    										<div class="col-sm-4">
		    											<div class="form-group">
		    												Limit of Liability 
		    											</div>
		    										</div>
		    										<div class="col-sm-8">
		    											<div class="form-group">
															<input type="number" placeholder="Insert Limit of Liability " name="limit_of_liability" class="form-control">
															</div>
		    										</div>
		    									</div>
		    									
		    									<div class="row">
		    										<div class="col-sm-4">
		    											<div class="form-group">
		    												Form of Appointment 
		    											</div>
		    										</div>
		    										<div class="col-sm-8">
		    											<div class="form-group">
															<input type="file" class="form-control" name="net_contribution_clause">
															</div>
		    										</div>
		    									</div>
		    									<div class="row">
		    										<div class="col-sm-4">
		    											<div class="form-group">
		    												Documents for Signature 
		    											</div>
		    										</div>
		    										<div class="col-sm-8">
		    											<div class="form-group">
															<input type="text" placeholder="Enter Document Title" class="form-control" name="net_contribution_clause[]">
														</div>
														<div class="form-group">
															<input type="file" class="form-control" name="documents_for_signature[]">
														</div>
		    										</div>
		    										<div class="col-sm-4">
		    											<div class="form-group">
		    											</div>
		    										</div>
		    										<div class="col-sm-8">
		    											<div id="addedsig">
		    												
		    											</div>
														<div class="form-group">
															<button type="button" id="addsig" class="btn btn-primary">Add another document </button>
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
		    					<div class="row" style="padding-bottom:10px;">
								 	<div class="col-sm-4">	Created by</div>
										<div class="col-sm-8">
											<div class="form-group">
												<div class="col-sm-6" style="padding:0;">
													<input type="text" class="form-control" name="proj_fname" placeholder="First Name">
											</div>
										<div class="col-sm-6" style="padding:0;padding-left: 15px;">
										<input type="text" class="form-control" name="proj_lname"placeholder="Last Name">
										</div>
										</div>
									</div>
								</div>
								<div class="row" style="padding-bottom:10px;">
	<div class="col-sm-4">	</div>
								<div class="col-sm-8">
									<div class="form-group">
										<div class="col-sm-12" style="padding:0;">
												<div class="input-group date form-group" id="datepicker2" data-date="02-2012" data-date-format="mm-yyyy">
																 <input class="form-control" type="text" readonly="readonly" name="date" >	  
																 <span class="input-group-addon add-on"><span class="fa fa-calendar"></span></span>	  
															</div>
										</div>
									
										</div>
									</div>
								</div>
								<div class="row" style="padding-bottom:10px;">
								 	<div class="col-sm-4">	Checked by</div>
										<div class="col-sm-8">
											<div class="form-group">
												<div class="col-sm-6" style="padding:0;">
													<input type="text" class="form-control" name="proj_fname" placeholder="First Name">
											</div>
										<div class="col-sm-6" style="padding:0;padding-left: 15px;">
										<input type="text" class="form-control" name="proj_lname"placeholder="Last Name">
										</div>
										</div>
									</div>
								</div>
								<div class="row" style="padding-bottom:10px;">
									<div class="col-sm-4">	</div>
								<div class="col-sm-8">
									<div class="form-group">
										<div class="col-sm-12" style="padding:0;">
												<div class="input-group date form-group" id="datepicker2" data-date="02-2012" data-date-format="mm-yyyy">
																 <input class="form-control" type="text" readonly="readonly" name="date" >	  
																 <span class="input-group-addon add-on"><span class="fa fa-calendar"></span></span>	  
															</div>
										</div>
									
										</div>
									</div>
								</div>

		    							
		    						<div class="row" style="padding-bottom:10px;">
								 	<div class="col-sm-4">	Approved by</div>
										<div class="col-sm-8">
											<div class="form-group">
												<div class="col-sm-6" style="padding:0;">
													<input type="text" class="form-control" name="proj_fname" placeholder="First Name">
											</div>
										<div class="col-sm-6" style="padding:0;padding-left: 15px;">
										<input type="text" class="form-control" name="proj_lname"placeholder="Last Name">
										</div>
										</div>
									</div>
								</div>
								<div class="row" style="padding-bottom:10px;">
									<div class="col-sm-4">	</div>
								<div class="col-sm-8">
									<div class="form-group">
										<div class="col-sm-12" style="padding:0;">
												<div class="input-group date form-group" id="datepicker2" data-date="02-2012" data-date-format="mm-yyyy">
																 <input class="form-control" type="text" readonly="readonly" name="date" >	  
																 <span class="input-group-addon add-on"><span class="fa fa-calendar"></span></span>	  
															</div>
										</div>
									
										</div>
									</div>
								</div>

		    							<div class="row">
    										<div class="col-sm-4">
    											<div class="form-group">
    												Statements 
    											</div>
    										</div>
    										<div class="col-sm-8">
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

<a href="#" id="scroll" style="display: none; z-index: 999;"><span></span></a>

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
	   $('#projform input.addbbutn').attr('disabled',false);
	   $('.save_proj').css('display', 'block');
	   $('#edit_proj').css('display', 'none');
	}
	function saveFunction() {
	   $('#projform input.proje').attr('readonly',true);
	   $('#projform input.addbbutn').attr('disabled',true);
	   $('.save_proj').css('display', 'none');
	   $('#edit_proj').css('display', 'block');
	   //$('#projform').submit();


	}
</script>
<script>
	function myFunction1() {
	   $('.tender_queries input.proje').attr('readonly',false);
	   $('.save_proj1').css('display', 'block');
	   $('#edit_proj1').css('display', 'none');
	}
	function saveFunction1() {
	   $('.tender_queries input.proje').attr('readonly',true);
	   $('.save_proj1').css('display', 'none');
	   $('#edit_proj1').css('display', 'block');
	}
</script>
<script>
	function myFunction2() {
	   $('.emp_details input.proje').attr('readonly',false);
	   $('.save_proj2').css('display', 'block');
	   $('#edit_proj2').css('display', 'none');
	}
	function saveFunction2() {
	   $('.emp_details input.proje').attr('readonly',true);
	   $('.save_proj2').css('display', 'none');
	   $('#edit_proj2').css('display', 'block');
	}
</script>


<script>
function mUp(obj) {
    obj.style.backgroundColor="none";
    obj.innerHTML="x";
}
</script>

<script>
$('a[href^="#"]').on('click', function(event) {

    var target = $(this.getAttribute('href'));

    if( target.length ) {
        event.preventDefault();
        $('html, body').stop().animate({
            scrollTop: target.offset().top
        }, 1000);
    }

});
</script>
<style type="text/css">
	.clearBtn {
	  position: absolute;
	  top: 0;
	  right: 5px;
	  transition: right 0.2s;
	}
</style>
<script type="text/javascript">
	$(document).ready(function(){ 
	    $(window).scroll(function(){
	        if ($(this).scrollTop() > 100) { 
	            $('#scroll').fadeIn(); 
	        } else { 
	            $('#scroll').fadeOut(); 
	        } 
	    }); 
	    $('#scroll').click(function(){ 
	        $("html, body").animate({ scrollTop: 0 }, 600); 
	        return false; 
	    }); 

	    $('#addconstraint').click(function(e){
	    	// e.preventDefault();
	    	$('.addedcons').append('<div class="form-group"><input type="text" name="constraint[]" class="form-control proje" style="display:inline-block;width:95%;"><a href="#" class="remove_field">x</a></div>');
	    });

	    $('.addedcons').on("click",".remove_field", function(e){ //user click on remove text
	        e.preventDefault(); $(this).parent('div').remove(); x--;
	    });

	    $('#addtypeofuse').click(function(e){
	    	// e.preventDefault();
	    	$('.addedtype tr:last').before('<a href="#" class="remove_field">x</a><tr><td><input type="text" name="use_name[]" class="form-control proje" placeholder="Residential" ></td>&nbsp<td><input type="text" name="use_area[]" class="form-control proje" placeholder="30,000m2" ></td><td><input type="text" name="use_units[]" class="form-control proje" placeholder="200 units" ></td><td><input type="text" name="use_type[]" class="form-control proje" placeholder="High-End" ></td></tr>');
	    });

	    $('.addedtype').on("click",".remove_field", function(e){ //user click on remove text
	        e.preventDefault(); $(this).parent('div').remove(); x--;
	    });
			
		$('#addriba').click(function(e){
	    	// e.preventDefault();
	    	$('.addedriba tr:last').before('<a href="#" class="remove_field">x</a><tr class="lastitemriba"><td><input type="text" name="riba_stage_name[]" class="form-control proje" placeholder="RIBA Stage 1 Completion" ></td><td><input type="text" name="riba_stage_date[]" class="form-control proje" placeholder="01/03/2019" ></td></tr>');
	    });

	    $('.addedriba').on("click",".remove_field", function(e){ //user click on remove text
	        e.preventDefault(); $(this).parent('div').remove(); x--;
	    }); 

		$('#addprojteam').click(function(e){
	    	// e.preventDefault();
	    	$('.addedproj tr:last').before('<a href="#" class="remove_field">x</a><tr class="lastitemproj"><td><input type="text" name="projteam_pos[]" class="form-control proje" placeholder="Architect"></td><td><input type="text" name="projteam_name[]" class="form-control proje" placeholder="Allies and Morrison" ></td></tr>');
	    });

	    $('.addedproj').on("click",".remove_field", function(e){ //user click on remove text
	        e.preventDefault(); $(this).parent('div').remove(); x--;
	    });

	});

</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

@endsection