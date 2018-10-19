@extends('layouts.master')

@section('content')
<style type="text/css">
	thead.thead tr th {
	  vertical-align: middle;
	}

	.datepicker {
		background: white;
	}

	.widt th {
		width: 80px;
	}
	.zui-table {
	    border: none;
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

/*^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^*/
.hayt{
	border-radius: 6px;
	height: 90px;
}
.zui-table2 {
	    border: none;
	    border-right: solid 1px #00B0F0;
	    border-collapse: separate;
	    border-spacing: 0;
	}
	.zui-table2 thead th {
	    background-color: #00B0F0;
	    border: none;
	    color: white;
	    padding: 10px;
	    text-align: left;
	    white-space: nowrap;
	    text-align: center;
	}
	.zui-table2 tbody td {
	    color: #333;
	    padding: 10px;
	    text-shadow: 1px 1px 1px #fff;
	    white-space: nowrap;
	}
	.zui-wrapper2 {
	    position: relative;
	    height: 600px;
	    max-height: 600px;
	    min-height: 600px;
	    overflow-x: scroll;
	    overflow-y: scroll;
	    padding-right: 5px;
	}
	.zui-scroller2 {
	    margin-left: 270px;
	    overflow-x: visible;
	    overflow-y: visible;
	    padding-bottom: 5px;
	    border-left: 2px solid #00B0F0;
	}
	.zui-table2 .zui-sticky-col2 {
	    left: 0;
	    position: absolute;
	    top: auto;
	    width: 270px;
	    text-align:center; 
	}
	table.zui-table2 tbody tr:nth-child(even){
		background: #fff8f3;
	}
	table.zui-table2 tbody tr:hover {
	    background-color: #ffc2a7 !important;
	}

/*^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^*/

/*^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^*/
.hayt3{
	border-radius: 6px;
	height: 90px;
}
.zui-table3 {
	    border: none;
	    border-collapse: separate;
	    border-spacing: 0;
	}
	.zui-table3 thead th {
	    background-color: #7030A0;
	    border: none;
	    color: white;
	    padding: 10px;
	    text-align: left;
	    white-space: nowrap;
	    text-align: center;
	}
	.zui-table3 tbody td {
	    color: #333;
	    padding: 10px;
	    text-shadow: 1px 1px 1px #fff;
	    white-space: nowrap;
	}
	.zui-wrapper3 {
	    position: relative;
	    height: 300px;
	    max-height: 300px;
	    min-height: 300px;
	    overflow-x: scroll;
	    overflow-y: scroll;
	    padding-right: 5px;
	}
	.zui-scroller3 {
	    margin-left: 270px;
	    overflow-x: visible;
	    overflow-y: visible;
	    padding-bottom: 5px;
	    border-left: 2px solid #7030A0;
	}
	.zui-table3 .zui-sticky-col3 {
	    left: 0;
	    position: absolute;
	    top: auto;
	    width: 270px;
	    text-align:center; 
	    height: 60px;
	}
	table.zui-table3 tbody tr:nth-child(even){
		background: #fff8f3;
	}
	table.zui-table3 tbody tr:hover {
	    background-color: #ffc2a7 !important;
	}

/*^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^*/

/*^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^*/
.hayt4{
	border-radius: 6px;
	height: 90px;
}
.zui-table4 {
	    border: none;
	    border-collapse: separate;
	    border-spacing: 0;
	}
	.zui-table4 thead th {
	    background-color: #00B050;
	    border: none;
	    color: white;
	    padding: 10px;
	    text-align: left;
	    white-space: nowrap;
	    text-align: center;
	}
	.zui-table4 tbody td {
	    color: #333;
	    padding: 10px;
	    text-shadow: 1px 1px 1px #fff;
	    white-space: nowrap;
	}
	.zui-wrapper4 {
	    position: relative;
	    height: 330px;
	    max-height: 330px;
	    min-height: 330px;
	    overflow-x: scroll;
	    overflow-y: scroll;
	    padding-right: 5px;
	}
	.zui-scroller4 {
	    margin-left: 460px;
	    overflow-x: visible;
	    overflow-y: visible;
	    padding-bottom: 5px;
	    border-left: 2px solid #00B050;
	}
	.zui-table4 .zui-sticky-col4 {
	    left: 0;
	    position: absolute;
	    top: auto;
	    width: 460px;
	    text-align:left; 
	}
	table.zui-table4 tbody tr:nth-child(even){
		background: #fff8f3;
	}
	table.zui-table4 tbody tr:hover {
	    background-color: #ffc2a7 !important;
	}

/*^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^*/

/*^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^*/
.zui-table5 {
	    border: none;
	    border-collapse: separate;
	    border-spacing: 0;
	    width: 612px;
	}
	.zui-table5 thead th {
	    background-color: #FFC000;
	    border: none;
	    color: white;
	    padding: 10px;
	    text-align: left;
	    white-space: nowrap;
	    text-align: center;
	}
	.zui-table5 tbody td {
	    color: #333;
	    padding: 10px;
	    text-shadow: 1px 1px 1px #fff;
	    white-space: nowrap;
	    height: 80px;
	}
	.zui-wrapper5 {
	    position: relative;
	    height: 500px;
	    max-height: 500px;
	    min-height: 500px;
	    overflow-x: scroll;
	    overflow-y: scroll;
	    padding-right: 5px;
	}
	.zui-scroller5 {
	    margin-left: 460px;
	    overflow-x: visible;
	    overflow-y: visible;
	    padding-bottom: 5px;
	    border-left: 2px solid #FFC000;
	}
	.zui-table5 .zui-sticky-col5 {
	    left: 0;
	    position: absolute;
	    top: auto;
	    width: 460px;
	    text-align:left; 
	}
	table.zui-table5 tbody tr:nth-child(even){
		background: #fff8f3;
	}
	table.zui-table5 tbody tr:hover {
	    background-color: #ffc2a7 !important;
	}

/*^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^*/

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
	.tdpad > tr > td{
		padding: 0 !important;
	}
	#section31 > table > tbody > tr > td > div > div > div > p {
	    line-height: 2.2;
	    font-size: small;
	}
	.tdpad input{
		border-top: 1px solid #fe7235;
		border-bottom: 1px solid #fe7235;
	}
	.spanliner span {
		position: absolute;
	    line-height: 2.3;
	    background: #fae1d6;
	    z-index: 0;
	    width: 188px;
	    margin-top: 1px;
	    padding-left: 4px;
	}
	.spanliner input:first-line:{
		background: gray;
	}
	.spanliner input {
		padding-left: 176px;
		text-align: right;
	}
	.hovertable:hover{
		transform: scale(1.02);
		box-shadow: 0 2px 4px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)!important;
	}
	.hovertable{
		background: white;
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

		$('input[type="number"]').on('input', function(){
			var quali = parseInt($('#quali').val());
			var quanti = parseInt($('#quanti').val());
			var risk = parseInt($('#risk').val());

			$('#total1').val(quali + quanti + risk+"%");

			var a1 = parseInt($('#a1').val());
			var a2 = parseInt($('#a2').val());

			$('#atotal').val(a1 + a2 +"%");

			var b1 = parseInt($('#b1').val());
			var b2 = parseInt($('#b2').val());
			var b3 = parseInt($('#b3').val());
			var b4 = parseInt($('#b4').val());
			var b5 = parseInt($('#b5').val());

			$('#btotal').val(b1 + b2 + b3 + b4 + b5 +"%");

			var c1 = parseInt($('#c1').val());
			var c2 = parseInt($('#c2').val());
			var c3 = parseInt($('#c3').val());
			var c4 = parseInt($('#c4').val());
			var c5 = parseInt($('#c5').val());

			$('#ctotal').val(c1 + c2 + c3 + c4 + c5 +"%");

			var d1 = parseInt($('#d1').val());
			var d2 = parseInt($('#d2').val());
			var d3 = parseInt($('#d3').val());
			var d4 = parseInt($('#d4').val());
			var d5 = parseInt($('#d5').val());
			var d6 = parseInt($('#d6').val());
			var d7 = parseInt($('#d7').val());
			var d8 = parseInt($('#d8').val());
			var d9 = parseInt($('#d9').val());
			var d10 = parseInt($('#d10').val());
			var d11 = parseInt($('#d11').val());
			var d12 = parseInt($('#d12').val());

			$('#dtotal').val(d1 + d2 + d3 + d4 + d5 + d6 + d7 + d8 + d9 + d10 + d11 + d12 + "%");

		});

		$('h3#serveprojtitle').click(function(){
			$('#idd').val($(this).attr('data-id'));
		});

		$('#cret').click(function(){
			$('#idd').val(0);
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
		        $(this).parent().append('<div class="form-group" ><input type="text" name="insurance_name[]" class="form-control"></div>');    
		    }
		});
</script>
<script>
	$(document).ready(function(){
		$(".date").datepicker( {
			    format: "mm-yyyy",
			    viewMode: "months", 
			    minViewMode: "months"
			});
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
					id: {{ $tenders[0]['project_record_id'] }},
					idd: jQuery('#idd').val()
				},
				success: function(result){
					// alert(result.services['tender_id']);
					var tid = '{{ url('tenderget') }}'+'/'+result.services['tender_id'];
					// alert(tid);
					// jQuery('.alert').show();
					// jQuery('.alert').html(result.services);
					// $('h3#serveprojtitle').attr('data-id',result.services['tender_id']);	
					// $('#tendid').val(result.services['tender_id']);
					// $('tbody#tenderload').append('<tr><td style="text-align: left;font-weight:bolder; " calss="td">'+result.services['services']+'<a class="edit_tender" data-toggle="tab" href="#section4" aria-expanded="true" data-tender-id="'+result.services['tender_id']+'"><p>Edit Tender</p></a></td><td class="td">Drafted</td><td class="td">TBC</td><td class="td">TBC</td><td class="td">TBC</td><td class="td">TBC</td><td class="td">TBC</td><td class="td"></td><tr>');
					console.log(result.services);
					window.location.href = tid;
					// alert(result.services);
				}
			});
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
	            $(wrapper).append('<div><div class="row" style="padding-bottom:10px;"><div class="col-sm-4"></div><div class="col-sm-8"><div class="form-group"><div class="col-sm-6" style="padding:0;"><select name="insurance_name[]" id="insurdrpdwn" class="form-control" ><option value="" disabled selected>Select insurance</option>'+yir+'</select></div><div class="col-sm-6" style="padding:0;padding-left: 15px;"><input type="number" placeholder="Insurance Level" name="insurance_level[]" class="form-control"></div></div></div></div><a href="#" class="remove_field">Remove</a></div>'); //add input box
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
	            $(wrapper).append('<div><div class="form-group"><input type="text" placeholder="Enter Document Title" class="form-control" name="documents_for_signature[]"></div><div class="form-group"><input type="file" class="form-control" name="signature_files[]"></div><a href="#" class="remove_field">Remove</a></div>'); //add input box
	        }
	    });
	    
	    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
	        e.preventDefault(); $(this).parent('div').remove(); x--;
	    });
	});
</script>
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

<div class="container below-header ">
	<h1 id="logo" class="project-title bid-page-title centerh" style="margin-left: 5%;
    margin-right: 5%;">Project Dashboard</small></h1>
</div>

<div class="container">
	<div class="modal fade" id="selectServe" role="dialog" tabindex="-1" >
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
				  <input type="input" name="" id="idd" value="0">
	        </div>
	        <div class="modal-footer" style="text-align: center;">
	          <button type="button" class="btn btn-primary" data-backdrop="false" data-dismiss="modal"  id="createservproj" >Create</button>
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
		          <button type="button" id="start_tender" class="btn btn-primary">Start Tender Process</button>
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
					<li class=""><a class="abut" href="{{ url('project_info/'. $tenders[0]['project_record_id'] . '/edit') }}" >Project</a></li>
					<li class="123"><a class="abut" >Scope</a></li>
					<li class="active"><a class="abut" >Tenders</a></li>
					<li class="123" id="cret" ><a class="abut" data-toggle="modal" data-target="#selectServe"><span>Create New Tender</span></a></li>
				</ul><br>
			</div>
		</div>
		<div class="col-sm-12 questionnaire-section">
			<div class="tab-content tabmargin" >
				<div id="section3" class="tab-pane fade in active tender-container" style="padding-top:0;margin-left:auto;margin-right:auto;width:1040px;">
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
						@foreach($tenders as $ten)
						<tr>
							@if($ten->status == "Closed")
								<td style="text-align: left;font-weight:bolder; " class="td">{{ $ten->services }} <a><p></p></a></td>
								<td class="td">{{ $ten->status }}</td>
								<td class="td">{{ date('d/m/Y', strtotime($ten->start)) }}</td>
								<td class="td">{{ $ten->end }}</td>
								<td class="td">{{ $ten->time_remaining }}</td>
								<td class="td">{{ $ten->bids_received }}</td>
								<td class="td">{{ $ten->queries_received }}</td>
								<td class="td">
								</button><button class="btn btn-primary" style="margin-bottom:10px;    width: 135px;">Dowload Evalution<br>Report</button>
							 	</button><button class="btn btn-warning" style="width: 135px;">Negotiate Scope <br>and Appointment</button></td>
							@elseif($ten->status == "Active")
								<td style="text-align: left;font-weight:bolder; " class="td">{{ $ten->services }} <a class="edit_tender" data-tender-id="{{ $ten->tender_id }}" data-toggle="tab" href="#section4"><p>Edit Tender<br></p></a></td>
								<td class="td">{{ $ten->status }}</td>
								<td class="td">{{ \Carbon\Carbon::parse($ten->start)->format('m/d/Y')}}</td>
								<td class="td">{{ $ten->end }}</td>
								<td class="td">{{ $ten->time_remaining }}</td>
								<td class="td"><strong style="font-size: 25px;">{{ $ten->bids_received }}</strong><a data-toggle="modal" data-backdrop="static" data-target="#viewBid"><p>View Bids</p></a></td>
								<td class="td">{{ $ten->queries_received }}</td>
								<td class="td"></button><button style="width: 135px;" class="btn btn-success">Complete Tender  <br>Process</button></td>
								{{-- </button><button class="btn btn-warning" style="width: 135px;">Negotiate Scope <br>and Appointment</button></td> --}}
							@else
								<td style="text-align: left;font-weight:bolder; " class="td">{{ $ten->services }} <a class="edit_tender" data-tender-id="{{ $ten->tender_id }}" href="{{ url('tenderget/'.$ten->tender_id.'') }}"><p>Edit Tender<br></p></a></td>
								<td class="td">{{ $ten->status }}</td>
								<td class="td">TBC</td>
								<td class="td">TBC</td>
								<td class="td">TBC</td>
								<td class="td">TBC</td>
								<td class="td">TBC</td>
								<td class="td">No Default Action!</td>
							@endif

						</tr>
						@endforeach
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
		    	<div class="123">
		    		<div class="row">
		    			<div class="col-sm-3">
		    				<div class="tender-container" id="mama">
		    					<ul class="nav bid-form-nav">
									<h3 data-toggle="modal" data-target="#selectServe" data-id="0" style="margin-bottom: 10px; margin-top: 0;padding: 15px;border: 3px solid grey;border-radius: 6px;text-align: center;" id="serveprojtitle" class="header-title animate-pop-in">
									</h3>
									<input type="hidden" name="" id="tendid">
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
		    						<div class="zui-wrapper2">
		    						    <div class="zui-scroller2">
		    						        <table class="zui-table2">
		    						            <thead>
		    						                <tr>
		    						                    <th class="zui-sticky-col2"><center>Deliverables</center></th>
		    						                    <th style="width: 300px;max-width: 300px;min-width: 300px;">
		    						                    Details/Contents</th>
		    						                    <th style="width: 250px;max-width: 250px;min-width: 250px;">RACI</th>
		    						                    <th>0</th>
		    						                    <th>1</th>
		    						                    <th>2</th>
		    						                    <th>3</th>
		    						                    <th>4</th>
		    						                    <th>5</th>
		    						                    <th>6</th>
		    						                    <th>7</th>
		    						                </tr>
		    						            </thead>
		    						            <tbody>
		    						                <tr>
		    						                    <td class="zui-sticky-col2">Strategic Brief</td>
		    						                    <td class="td "><textarea class="hayt" name="strategic_details" placeholder="Enter details here"></textarea></td>
		    						                    <td class="td">
		    						                    	<div class="col-sm-12">
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" name="strategic_raci[]" value="R"><span class="label-text">R</span>
		    						                    			</label>
		    						                    		</div>
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" name="strategic_raci[]" value="A"><span class="label-text">A</span>
		    						                    			</label>
		    						                    		</div>
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" name="strategic_raci[]" value="C"><span class="label-text">C</span>
		    						                    			</label>
		    						                    		</div>
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" name="strategic_raci[]" value="I"><span class="label-text">I</span>
		    						                    			</label>
		    						                    		</div>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="strategic_num[]" value="0"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="strategic_num[]" value="1"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="strategic_num[]" value="2"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="strategic_num[]" value="3"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="strategic_num[]" value="4"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="strategic_num[]" value="5"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="strategic_num[]" value="6"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="strategic_num[]" value="7"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    
		    						                </tr>
		    						                <tr>
		    						                    <td class="zui-sticky-col2">Project Programme(Lead)</td>
		    						                    <td class="td "><textarea class="hayt" name="pprogramme_details" placeholder="Enter details here"></textarea></td>
		    						                    <td class="td">
		    						                    	<div class="col-sm-12">
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" name="pprogramme_raci[]" value="R"><span class="label-text">R</span>
		    						                    			</label>
		    						                    		</div>
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" name="pprogramme_raci[]" value="A"><span class="label-text">A</span>
		    						                    			</label>
		    						                    		</div>
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" name="pprogramme_raci[]" value="C"><span class="label-text">C</span>
		    						                    			</label>
		    						                    		</div>
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" name="pprogramme_raci[]" value="I"><span class="label-text">I</span>
		    						                    			</label>
		    						                    		</div>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="pprogramme_num[]" value="0"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="pprogramme_num[]" value="1"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="pprogramme_num[]" value="2"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="pprogramme_num[]" value="3"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="pprogramme_num[]" value="4"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="pprogramme_num[]" value="5"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="pprogramme_num[]" value="6"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="pprogramme_num[]" value="7"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                </tr>
		    						                <tr>
		    						                    <td class="zui-sticky-col2">Feasibility Study</td>
		    						                    <td class="td "><textarea class="hayt" name="feasibility_details" placeholder="Enter details here"></textarea></td>
		    						                    <td class="td">
		    						                    	<div class="col-sm-12">
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" name="feasibility_raci[]" value="R"><span class="label-text">R</span>
		    						                    			</label>
		    						                    		</div>
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" name="feasibility_raci[]" value="A"><span class="label-text">A</span>
		    						                    			</label>
		    						                    		</div>
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" name="feasibility_raci[]" value="C"><span class="label-text">C</span>
		    						                    			</label>
		    						                    		</div>
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" name="feasibility_raci[]" value="I"><span class="label-text">I</span>
		    						                    			</label>
		    						                    		</div>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="0"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="feasibility_num[]" value="1"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="feasibility_num[]" value="2"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="feasibility_num[]" value="3"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="feasibility_num[]" value="4"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="feasibility_num[]" value="5"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="feasibility_num[]" value="6"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="feasibility_num[]" value="7"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                </tr>
		    						                <tr>
		    						                    <td class="zui-sticky-col2">Design Responsibility<br> Matrix</td>
		    						                    <td class="td "><textarea class="hayt" name="design_details" placeholder="Enter details here"></textarea></td>
		    						                    <td class="td">
		    						                    	<div class="col-sm-12">
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" name="design_raci[]" value="R"><span class="label-text">R</span>
		    						                    			</label>
		    						                    		</div>
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" name="design_raci[]" value="A"><span class="label-text">A</span>
		    						                    			</label>
		    						                    		</div>
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" name="design_raci[]" value="C"><span class="label-text">C</span>
		    						                    			</label>
		    						                    		</div>
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" name="design_raci[]" value="I"><span class="label-text">I</span>
		    						                    			</label>
		    						                    		</div>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="design_num[]" value="0"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="design_num[]" value="1"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="design_num[]" value="2"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="design_num[]" value="3"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="design_num[]" value="4"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="design_num[]" value="5"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="design_num[]" value="6"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="design_num[]" value="7"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                </tr>
		    						                <tr>
		    						                    <td class="zui-sticky-col2">Site Information Report</td>
		    						                    <td class="td "><textarea class="hayt" name="site_details" placeholder="Enter details here"></textarea></td>
		    						                    <td class="td">
		    						                    	<div class="col-sm-12">
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" name="site_raci[]" value="R"><span class="label-text">R</span>
		    						                    			</label>
		    						                    		</div>
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" name="site_raci[]" value="A"><span class="label-text">A</span>
		    						                    			</label>
		    						                    		</div>
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" name="site_raci[]" value="C"><span class="label-text">C</span>
		    						                    			</label>
		    						                    		</div>
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" name="site_raci[]" value="I"><span class="label-text">I</span>
		    						                    			</label>
		    						                    		</div>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="site_num[]" value="0"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="site_num[]" value="1"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="site_num[]" value="2"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="site_num[]" value="3"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="site_num[]" value="4"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="site_num[]" value="5"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="site_num[]" value="6"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="site_num[]" value="7"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                </tr>
		    						                <tr>
		    						                    <td class="zui-sticky-col2">Information Exchange<br> Strategy</td>
		    						                    <td class="td "><textarea class="hayt" name="info_details" placeholder="Enter details here"></textarea></td>
		    						                    <td class="td">
		    						                    	<div class="col-sm-12">
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" name="info_raci[]" value="R"><span class="label-text">R</span>
		    						                    			</label>
		    						                    		</div>
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" name="info_raci[]" value="A"><span class="label-text">A</span>
		    						                    			</label>
		    						                    		</div>
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" name="info_raci[]" value="C"><span class="label-text">C</span>
		    						                    			</label>
		    						                    		</div>
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" name="info_raci[]" value="I"><span class="label-text">I</span>
		    						                    			</label>
		    						                    		</div>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="info_num[]" value="0"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="info_num[]" value="1"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="info_num[]" value="2"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="info_num[]" value="3"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="info_num[]" value="4"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="info_num[]" value="5"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="info_num[]" value="6"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="info_num[]" value="7"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                </tr>
		    						                <tr>
		    						                    <td class="zui-sticky-col2">Project Brief</td>
		    						                    <td class="td "><textarea class="hayt" name="project_details" placeholder="Enter details here"></textarea></td>
		    						                    <td class="td">
		    						                    	<div class="col-sm-12">
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" name="project_raci[]" value="R"><span class="label-text">R</span>
		    						                    			</label>
		    						                    		</div>
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" name="project_raci[]" value="A"><span class="label-text">A</span>
		    						                    			</label>
		    						                    		</div>
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" name="project_raci[]" value="C"><span class="label-text">C</span>
		    						                    			</label>
		    						                    		</div>
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" name="project_raci[]" value="I"><span class="label-text">I</span>
		    						                    			</label>
		    						                    		</div>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="project_num[]" value="0"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="project_num[]" value="1"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="project_num[]" value="2"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="project_num[]" value="3"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="project_num[]" value="4"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="project_num[]" value="5"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="project_num[]" value="6"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="project_num[]" value="7"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                </tr>
		    						                <tr>
		    						                    <td class="zui-sticky-col2">Risk Assessment(Lead)</td>
		    						                    <td class="td "><textarea class="hayt" name="risk_details" placeholder="Enter details here"></textarea></td>
		    						                    <td class="td">
		    						                    	<div class="col-sm-12">
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" name="risk_raci[]" value="R"><span class="label-text">R</span>
		    						                    			</label>
		    						                    		</div>
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" name="risk_raci[]" value="A"><span class="label-text">A</span>
		    						                    			</label>
		    						                    		</div>
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" name="risk_raci[]" value="C"><span class="label-text">C</span>
		    						                    			</label>
		    						                    		</div>
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" name="risk_raci[]" value="I"><span class="label-text">I</span>
		    						                    			</label>
		    						                    		</div>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="risk_num[]" value="0"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="risk_num[]" value="1"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="risk_num[]" value="2"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="risk_num[]" value="3"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="risk_num[]" value="4"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="risk_num[]" value="5"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="risk_num[]" value="6"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="risk_num[]" value="7"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                </tr>
		    						                 <tr>
		    						                    <td class="zui-sticky-col2">Handover Strategy(Lead)</td>
		    						                    <td class="td "><textarea class="hayt" name="hand_details" placeholder="Enter details here"></textarea></td>
		    						                    <td class="td">
		    						                    	<div class="col-sm-12">
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" name="hand_raci[]" value="R"><span class="label-text">R</span>
		    						                    			</label>
		    						                    		</div>
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" name="hand_raci[]" value="A"><span class="label-text">A</span>
		    						                    			</label>
		    						                    		</div>
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" name="hand_raci[]" value="C"><span class="label-text">C</span>
		    						                    			</label>
		    						                    		</div>
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" name="hand_raci[]" value="I"><span class="label-text">I</span>
		    						                    			</label>
		    						                    		</div>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="hand_num[]" value="0"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="hand_num[]" value="1"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="hand_num[]" value="2"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="hand_num[]" value="3"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="hand_num[]" value="4"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="hand_num[]" value="5"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="hand_num[]" value="6"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="hand_num[]" value="7"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                </tr>
		    						                 <tr>
		    						                    <td class="zui-sticky-col2">Project Execution Plan</td>
		    						                    <td class="td "><textarea class="hayt" name="execution_details" placeholder="Enter details here"></textarea></td>
		    						                    <td class="td">
		    						                    	<div class="col-sm-12">
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" name="execution_raci[]" value="R"><span class="label-text">R</span>
		    						                    			</label>
		    						                    		</div>
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" name="execution_raci[]" value="A"><span class="label-text">A</span>
		    						                    			</label>
		    						                    		</div>
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" name="execution_raci[]" value="C"><span class="label-text">C</span>
		    						                    			</label>
		    						                    		</div>
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" name="execution_raci[]" value="I"><span class="label-text">I</span>
		    						                    			</label>
		    						                    		</div>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="execution_num[]" value="0"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="execution_num[]" value="1"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="execution_num[]" value="2"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="execution_num[]" value="3"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="execution_num[]" value="4"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="execution_num[]" value="5"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="execution_num[]" value="6"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="execution_num[]" value="7"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                </tr>
		    						                <tr>
		    						                    <td class="zui-sticky-col2">Design Proposals from<br> Design Team Members</td>
		    						                    <td class="td "><textarea class="hayt" name="proposal_details" placeholder="Enter details here"></textarea></td>
		    						                    <td class="td">
		    						                    	<div class="col-sm-12">
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" name="proposal_raci[]" value="R"><span class="label-text">R</span>
		    						                    			</label>
		    						                    		</div>
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" name="proposal_raci[]" value="A"><span class="label-text">A</span>
		    						                    			</label>
		    						                    		</div>
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" name="proposal_raci[]" value="C"><span class="label-text">C</span>
		    						                    			</label>
		    						                    		</div>
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" name="proposal_raci[]" value="I"><span class="label-text">I</span>
		    						                    			</label>
		    						                    		</div>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="proposal_num[]" value="0"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="proposal_num[]" value="1"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="proposal_num[]" value="2"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="proposal_num[]" value="3"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="proposal_num[]" value="4"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="proposal_num[]" value="5"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="proposal_num[]" value="6"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="proposal_num[]" value="7"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                </tr>
		    						            </tbody>
		    						        </table>
		    						    </div>
		    						</div>
		    						<br>
		    						<br>
		    						<!-- <div class="col-sm-12">
		    							<div class="col-sm-2"></div>
		    							<div class="col-sm-2"></div>
		    							<div class="col-sm-2"></div>
		    							<div class="col-sm-2"></div>
		    							<div class="col-sm-2"></div>
		    							<div class="col-sm-2">
						            		<h4>RIBA Stages</h4>
						            	</div>
		    						</div> -->
		    						<div class="zui-wrapper3">
		    						    <div class="zui-scroller3">
		    						        <table class="zui-table3">
		    						            <thead>
		    						                <tr>
		    						                    <th class="zui-sticky-col3"><center>Meetings</center></th>
		    						                    <th style="width: 300px;max-width: 300px;min-width: 300px;">
		    						                    Purpose</th>
		    						                    <th style="width: 250px;max-width: 250px;min-width: 250px;">Attendees</th>
		    						                    <th style="width: 250px;max-width: 250px;min-width: 250px;">Assumed Duration<br>(hours)</th>
		    						                    <th>Reoccurence/Number of<br>Meetings</th>
		    						                    <th>Arrange</th>
		    						                    <th>Attend</th>
		    						                    <th>Minute</th>
		    						                    <th>0</th>
		    						                    <th>1</th>
		    						                    <th>2</th>
		    						                    <th>3</th>
		    						                    <th>4</th>
		    						                    <th>5</th>
		    						                    <th>6</th>
		    						                    <th>7</th>
		    						                </tr>
		    						            </thead>
		    						            <tbody>
		    						                <tr>
		    						                    <td class="zui-sticky-col3">Pre-Application<br> Meetings</td>
		    						                    <td class="td "><textarea class="hayt3" name="pre_app_purpose" placeholder="Enter details here"></textarea></td>
		    						                    <td class="td"><textarea class="hayt3" name="pre_app_attendees" placeholder="Enter details here"></textarea></td>
		    						                    <td class="td"><input style="box-sizing: border-box;border: none;border-bottom: 2px solid #FE7235;" type="text" id="" name="pre_app_assumed_duration"></td>
		    						                    <td class="td"><input style="box-sizing: border-box;border: none;border-bottom: 2px solid #FE7235;" type="text" id="" name="pre_app_reoccurence"></td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="pre_app_choice[]" value="Arrange"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="pre_app_choice[]" value="Attend"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="pre_app_choice[]" value="Minute"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="pre_app_num[]" value="0"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="pre_app_num[]" value="1"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="pre_app_num[]" value="2"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="pre_app_num[]" value="3"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="pre_app_num[]" value="4"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="pre_app_num[]" value="5"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="pre_app_num[]" value="6"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="pre_app_num[]" value="7"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                </tr>
		    						                <tr>
		    						                    <td class="zui-sticky-col3">Site Visits</td>
		    						                    <td class="td "><textarea class="hayt3" name="site_visits_purpose" placeholder="Enter details here"></textarea></td>
		    						                    <td class="td"><textarea class="hayt3" name="site_visits_attendees" placeholder="Enter details here"></textarea></td>
		    						                    <td class="td"><input style="box-sizing: border-box;border: none;border-bottom: 2px solid #FE7235;" type="text" id="" name="site_visits_assumed_duration"></td>
		    						                    <td class="td"><input style="box-sizing: border-box;border: none;border-bottom: 2px solid #FE7235;" type="text" id="" name="site_visits_reoccurence"></td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="site_visits_choice[]" value="Arrange"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="site_visits_choice[]" value="Attend"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="site_visits_choice[]" value="Minute"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="site_visits_num[]" value="0"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="site_visits_num[]" value="1"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="site_visits_num[]" value="2"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="site_visits_num[]" value="3"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="site_visits_num[]" value="4"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="site_visits_num[]" value="5"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="site_visits_num[]" value="6"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="site_visits_num[]" value="7"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                </tr>
		    						                <tr>
		    						                    <td class="zui-sticky-col3">Site/Project Meetings<br>(RIBA Stage 4/5)</td>
		    						                    <td class="td "><textarea class="hayt3" name="riba_purpose" placeholder="Enter details here"></textarea></td>
		    						                    <td class="td"><textarea class="hayt3" name="riba_attendees" placeholder="Enter details here"></textarea></td>
		    						                    <td class="td"><input style="box-sizing: border-box;border: none;border-bottom: 2px solid #FE7235;" type="text" id="" name="riba_assumed_duration"></td>
		    						                    <td class="td"><input style="box-sizing: border-box;border: none;border-bottom: 2px solid #FE7235;" type="text" id="" name="riba_reoccurence"></td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="riba_choice[]" value="Arrange"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="riba_choice[]" value="Attend"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="riba_choice[]" value="Minute"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="riba_num[]" value="0"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="riba_num[]" value="1"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="riba_num[]" value="2"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="riba_num[]" value="3"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="riba_num[]" value="4"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="riba_num[]" value="5"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="riba_num[]" value="6"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="riba_num[]" value="7"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                </tr>
		    						                <tr>
		    						                    <td class="zui-sticky-col3">SC / PC Site<br> Inspection</td>
		    						                    <td class="td "><textarea class="hayt3" name="inspection_purpose" placeholder="Enter details here"></textarea></td>
		    						                    <td class="td"><textarea class="hayt3" name="inspection_attendees" placeholder="Enter details here"></textarea></td>
		    						                    <td class="td"><input style="box-sizing: border-box;border: none;border-bottom: 2px solid #FE7235;" type="text" id="" name="inspection_assumed_duration"></td>
		    						                    <td class="td"><input style="box-sizing: border-box;border: none;border-bottom: 2px solid #FE7235;" type="text" id="" name="inspection_reoccurence"></td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="inspection_choice[]" value="Arrange"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="inspection_choice[]" value="Attend"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="inspection_choice[]" value="Minute"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="inspection_num[]" value="0"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="inspection_num[]" value="1"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="inspection_num[]" value="2"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="inspection_num[]" value="3"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="inspection_num[]" value="4"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="inspection_num[]" value="5"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="inspection_num[]" value="6"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="inspection_num[]" value="7"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                </tr>
		    						            </tbody>
		    						        </table>
		    						    </div>
		    						</div>

		    						<br>
		    						<br>

		    						<div class="zui-wrapper4">
		    						    <div class="zui-scroller4">
		    						        <table class="zui-table4">
		    						            <thead>
		    						                <tr>
		    						                    <th class="zui-sticky-col4"><center>Design Considerations</center></th>
		    						                    <th style="width: 500px; max-width: 500px; min-width: 500px;">Applies to</th>
		    						                </tr>
		    						            </thead>
		    						            <tbody>
		    						                <tr>
		    						                    <td class="zui-sticky-col4">Cost, programme, quality, health & safety during construction and<br> operation, functionality, buildability, operation and maintenance.</td>
		    						                    <td class="td "><textarea class="hayt4" name="question_one" placeholder="Enter details here"></textarea></td>
		    						                </tr>
		    						                <tr>
		    						                    <td class="zui-sticky-col4">All information provided by other members of the Project Team.</td>
		    						                    <td class="td "><textarea class="hayt4" name="question_two" placeholder="Enter details here"></textarea></td> 
		    						                </tr>
		    						                <tr>
		    						                    <td class="zui-sticky-col4">Good Practice in the Selection of Construction Materials 2011<br> (British Council of Offices Publication).</td>
		    						                    <td class="td "><textarea class="hayt4" name="question_three" placeholder="Enter details here"></textarea></td>
		    						                </tr>
		    						                <tr>
		    						                    <td class="zui-sticky-col4">Statutory standards</td>
		    						                    <td class="td "><textarea class="hayt4" name="question_four" placeholder="Enter details here"></textarea></td>
		    						                </tr>
		    						                <tr>
		    						                    <td class="zui-sticky-col4">Co-ordination with structural and building services</td>
		    						                    <td class="td "><textarea class="hayt4" name="question_five" placeholder="Enter details here"></textarea></td>
		    						                </tr>
		    						            </tbody>
		    						        </table>
		    						    </div>
		    						</div>

		    						<br><br>

		    						<br>
		    						<br>

		    						<div class="zui-wrapper5">
		    						    <div class="zui-scroller5">
		    						        <table class="zui-table5">
		    						            <thead>
		    						                <tr>
		    						                    <th class="zui-sticky-col5"><center>Advise on</center></th>
		    						                    <th>0</th>
		    						                    <th>1</th>
		    						                    <th>2</th>
		    						                    <th>3</th>
		    						                    <th>4</th>
		    						                    <th>5</th>
		    						                    <th>6</th>
		    						                    <th>7</th>
		    						                </tr>
		    						            </thead>
		    						            <tbody>
		    						                <tr>
		    						                    <td class="zui-sticky-col5">Any products or materials, specified within the guidelines<br> named in Item<span style="color: red;">???</span> , that are relevant to the project and have been found<br> to be deleterious or hazardous to health and safety.</td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="advise_one[]" value="0"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="advise_one[]" value="1"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="advise_one[]" value="2"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="advise_one[]" value="3"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="advise_one[]" value="4"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="advise_one[]" value="5"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="advise_one[]" value="6"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="advise_one[]" value="7"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                </tr>
		    						                <tr>
		    						                    <td class="zui-sticky-col5">Assembly of Project Team. (Lead)</td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="advise_two[]" value="0"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="advise_two[]" value="1"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="advise_two[]" value="2"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="advise_two[]" value="3"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="advise_two[]" value="4"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="advise_two[]" value="5"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="advise_two[]" value="6"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="advise_two[]" value="7"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td> 
		    						                </tr>
		    						                <tr>
		    						                    <td class="zui-sticky-col5">Need for and the scope of services by consultants, specialists,<br> sub-contractors or suppliers. (Lead)</td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="advise_three[]" value="0"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="advise_three[]" value="1"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="advise_three[]" value="2"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="advise_three[]" value="3"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="advise_three[]" value="4"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="advise_three[]" value="5"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="advise_three[]" value="6"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="advise_three[]" value="7"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                </tr>
		    						                <tr>
		    						                    <td class="zui-sticky-col5">Resolution of defects.</td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="advise_four[]" value="0"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="advise_four[]" value="1"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="advise_four[]" value="2"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="advise_four[]" value="3"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="advise_four[]" value="4"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="advise_four[]" value="5"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="advise_four[]" value="6"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="advise_four[]" value="7"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                </tr>
		    						                <tr>
		    						                    <td class="zui-sticky-col5">Form and content of design outputs, their interfaces<br> and a verification procedure. (Lead)</td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="advise_five[]" value="0"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="advise_five[]" value="1"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="advise_five[]" value="2"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="advise_five[]" value="3"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="advise_five[]" value="4"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="advise_five[]" value="5"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="advise_five[]" value="6"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="advise_five[]" value="7"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                </tr>
		    						                <tr>
		    						                    <td class="zui-sticky-col5">Relevant experience from previous projects.</td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="advise_six[]" value="0"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="advise_six[]" value="1"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="advise_six[]" value="2"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="advise_six[]" value="3"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="advise_six[]" value="4"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="advise_six[]" value="5"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="advise_six[]" value="6"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="advise_six[]" value="7"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                </tr>
		    						                <tr style="background: #FFC000;">
		    						                    <td style="background: #FFC000; font-weight: bold; color: #fff;" class="zui-sticky-col5"><center>Monitor</center></td> <!-- background/bold -->
		    						                    <td></td>
		    						                    <td></td>
		    						                    <td></td>
		    						                    <td></td>
		    						                    <td></td>
		    						                    <td></td>
		    						                    <td></td>
		    						                    <td></td>
		    						                </tr>
		    						                <tr>
		    						                    <td class="zui-sticky-col5">Work of the Designers. <br><span style="color: red;">Designers regarding…. [WHAT?]</span></td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                </tr>
		    						                <tr>
		    						                    <td class="zui-sticky-col5">Performance of Design Team.</td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                </tr>
		    						                <tr>
		    						                    <td class="zui-sticky-col5">Compliance with statutory and contract requirements.</td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                </tr>
		    						                <tr style="background: #FFC000;">
		    						                    <td style="background: #FFC000; font-weight: bold; color: #fff;" class="zui-sticky-col5"><center>Collaborate / Consult with</center></td> <!-- background/bold -->
		    						                    <td></td>
		    						                    <td></td>
		    						                    <td></td>
		    						                    <td></td>
		    						                    <td></td>
		    						                    <td></td>
		    						                    <td></td>
		    						                    <td></td>
		    						                </tr>
		    						                <tr>
		    						                    <td class="zui-sticky-col5">Relevant Third Parties as required.</td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                </tr>
		    						                <tr>
		    						                    <td class="zui-sticky-col5">Planning authority to discuss the project</td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                </tr>
		    						                <tr>
		    						                    <td class="zui-sticky-col5">Statutory authorities on developing design.</td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                </tr>
		    						                <tr>
		    						                    <td class="zui-sticky-col5">Project Manager & Employer on significant design issues. (Lead)</td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                </tr>
		    						                <tr style="background: #FFC000;">
		    						                    <td style="background: #FFC000; font-weight: bold; color: #fff;" class="zui-sticky-col5"><center>Co-ordinate</center></td> <!-- background/bold -->
		    						                    <td></td>
		    						                    <td></td>
		    						                    <td></td>
		    						                    <td></td>
		    						                    <td></td>
		    						                    <td></td>
		    						                    <td></td>
		    						                    <td></td>
		    						                </tr>
		    						                <tr>
		    						                    <td class="zui-sticky-col5">Collation of all planning submission documents.</td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                </tr>
		    						                <tr>
		    						                    <td class="zui-sticky-col5">Reviewing design information provided by contractors <br>or specialists to establish whether that information <br>can be co-ordinated and integrated with other project information.</td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                </tr>
		    						                <tr style="background: #FFC000">
		    						                    <td style="background: #FFC000; font-weight: bold; color: #fff;" class="zui-sticky-col5"><center>Other</center></td> <!-- background/bold -->
		    						                    <td></td>
		    						                    <td></td>
		    						                    <td></td>
		    						                    <td></td>
		    						                    <td></td>
		    						                    <td></td>
		    						                    <td></td>
		    						                    <td></td>
		    						                </tr>
		    						                <tr>
		    						                    <td class="zui-sticky-col5">Submit the [detailed / outline] planning application.</td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                </tr>
		    						                <tr>
		    						                    <td class="zui-sticky-col5">Assisting building user during initial occupation period.</td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                </tr>
		    						                <tr>
		    						                    <td class="zui-sticky-col5">Review all instructions and information about the Project,<br> provided by the Employer.</td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                </tr>
		    						                <tr>
		    						                    <td class="zui-sticky-col5">preparing and making submissions under building acts<br> and/or regulations or other statutory requirements.</td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" name="" value="R"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                </tr>
		    						            </tbody>
		    						        </table>
		    						    </div>
		    						</div>
									<button type="button" class="btn btn-primary" id="deliverables_save">Save</button>
		    					</div>
		    					<div id="section21" class="tab-pane fade tender-container">
		    						<h3 class="bid-form-title">Appointment</h3>
		    						<form method="post">
									{{-- {!! Form::open(['action' => 'TenderController@store', 'method' => 'POST'])!!} --}}
										<input type="hidden" id="tendserve" name="services">
		    							<div class="row">
		    								<div class="col-sm-12">
		    									<div class="row" style="padding-bottom:10px;">
													<div class="col-sm-4">	Insurances</div>
													<div class="col-sm-8">
														{{-- Edit Information --}}
														<div id="added_insurance_name" class="col-sm-6" style="padding:0;">
															{{-- <input class="form-control" type="text" value="Test Values" disabled/> --}}
														</div>
														<div id="added_insurance_level" class="col-sm-6" style="padding:0;padding-left: 15px;">
															{{-- <input class="form-control" type="text" value="Test Values" disabled/> --}}
														</div>
														<div class="form-group">
															<div class="col-sm-6" style="padding:0;">
																<select name="insurance_name[]" id="insurdrpdwn" class="form-control" >
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
															<input type="number" placeholder="Insurance Level" name="insurance_level[]" id="ins_level" class="form-control">
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
		    												$Service = array("Select Bonds ","Performance Bond","Parent Company Guarantee","Tender/Bid Bond","On Demand Bond","Conditional/On Default Bond");
		    												sort($Service, SORT_NATURAL | SORT_FLAG_CASE);
		    												foreach ($Service as $key ) {
		    												    echo "<li><div class='form-check'>
		    															<label>
		    																<input type='checkbox' id='".$key."' name='bonds[]' value='".$key."'><span class='label-text'>".$key."</span>
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
													<div id="added_collateral" class="col-sm-8">
														{{-- <input class="form-control" type="text" value="Test values" disabled/> --}}
													</div>
		    										<div class="col-sm-8">
		    											<div class="form-group">
															<select name="collateral_warranties"  class="form-control" >
																<option value="" disabled selected>Select</option>
																<?php
																$Service = array(
																	"Collateral Warranties", "Third Party Rights", "Both"
																);
																sort($Service, SORT_NATURAL | SORT_FLAG_CASE);
																foreach ($Service as $key ) {
																    echo "<option id='".$key."' value='".$key."'>".$key."</option>";
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
													<div id="added_limit" class="col-sm-8">
														{{-- <input class="form-control" type="text" value="Test values" disabled/> --}}
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
															<input type="text" placeholder="Enter Document Title" class="form-control" name="documents_for_signature[]">
														</div>
														<div class="form-group">
															<input type="file" class="form-control" name="signature_files[]">
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
														<input id="sec2" type="button" data-toggle="tab"name="Next" value="Next" class="btn btn-primary butsize">
														<input id="appointment_save" type="button" name="Save" value="Save" class="btn btn-primary butsize">
													</div>
		    									</div>
		    								</div>
		    							</div>
									</form>
									{{-- {!! Form::close() !!} --}}
		    					</div>
		    					<div id="section31" class="tab-pane fade tender-container">
		    						<h3 class="bid-form-title">Evaluation Settings</h3>
		    							<table class="table">
		    								<thead>
			    								<tr>
			    									<td width="21.33%">Factors</td>
			    									<td width="12%">Importance</td>
			    									<td width="21.33%">Factors</td>
			    									<td width="12%">Importance</td>
			    									<td width="21.33%">Factors</td>
			    									<td width="12%">Importance</td>
			    								</tr>
			    							</thead>
			    							<tbody class="tdpad">
			    								<tr>
				    								<td colspan="2" >
				    									<div class="evalwquali hovertable" style="border: 1px solid #fe7235;">
				    										<div class="spanliner" style="margin-bottom: 650px;">
					    										<span>Qualitative</span>
					    										<input id="quali" placeholder="%" value="0" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" maxlength="3" class="form-control">
				    										</div>
				    										<div class="spanliner">
				    											<span>Quantitative</span>
				    											<input id="quanti" placeholder="%" value="0" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" maxlength="3" class="form-control">
				    										</div>
				    										<div class="spanliner" style="margin-bottom: 172px;margin-top: 1px;">
					    										<span>Risk</span>
					    										<input id="risk" placeholder="%" value="0" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" maxlength="3" class="form-control">
				    										</div>
				    										<div class="spanliner">
				    											<span>Total</span>
				    											<input id="total1" readonly placeholder="%" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="text" maxlength="3" class="form-control">
				    										</div>
				    									</div>
				    								</td>
				    								<td colspan="2">
				    									<div class="evalorga hovertable" style="border: 1px solid #fe7235;">
				    										<div class="spanliner" style="margin-bottom: 172px;">
				    											<span>Organisation</span>
				    											<input id="a1" placeholder="%" value="0" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" maxlength="3" class="form-control">
				    										</div>
				    										<div class="spanliner" style="margin-bottom: 408px;">
				    											<span>Individual</span>
				    											<input id="a2" placeholder="%" value="0" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" maxlength="3" class="form-control">
				    										</div>
				    										<div class="spanliner">
				    											<span>Total</span>
				    											<input id="atotal" readonly placeholder="%" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="text" maxlength="3" class="form-control">
				    										</div>
				    									</div>
				    									<div class="evalinsu hovertable" style="border: 1px solid #fe7235;margin-top: 35px;">
				    										<div class="spanliner">
				    											<span>Insurances</span>
				    											<input id="b1" placeholder="%" value="0" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" maxlength="3" class="form-control">
				    										</div>
				    										<div class="spanliner">
				    											<span>Bonds</span>
				    											<input id="b2" placeholder="%" value="0" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" maxlength="3" class="form-control">
				    										</div>
				    										<div class="spanliner">
				    											<span>3rd Parties</span>
				    											<input id="b3" placeholder="%" value="0" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" maxlength="3" class="form-control">
				    										</div>
				    										<div class="spanliner">
				    											<span>Limit of liability</span>
				    											<input id="b4" placeholder="%" value="0" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" maxlength="3" class="form-control">
				    										</div>
				    										<div class="spanliner">
				    											<span>Net contribution clause</span>
				    											<input id="b5" placeholder="%" value="0" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" maxlength="3" class="form-control">
				    										</div>
				    										<div class="spanliner">
				    											<span>Total</span>
				    											<input id="btotal" readonly placeholder="%" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="text" maxlength="3" class="form-control">
				    										</div>
				    									</div>
				    								</td>
				    								<td colspan="2">
				    									<div class="evalorgaproj hovertable" style="border: 1px solid #fe7235;">
				    										<div class="spanliner">
				    											<span>Project Experience</span>
				    											<input id="c1" placeholder="%" value="0" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" maxlength="3" class="form-control">
				    										</div>
				    										<div class="spanliner">
				    											<span>Variety of Services</span>
				    											<input id="c2" placeholder="%" value="0" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" maxlength="3" class="form-control">
				    										</div>
				    										<div class="spanliner">
				    											<span>Awards</span>
				    											<input id="c3" placeholder="%" value="0" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" maxlength="3" class="form-control">
				    										</div>
				    										<div class="spanliner">
				    											<span>Accreditations</span>
				    											<input id="c4" placeholder="%" value="0" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" maxlength="3" class="form-control">
				    										</div>
				    										<div class="spanliner">
				    											<span>Relationship to Employer</span>
				    											<input id="c5" placeholder="%" value="0" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" maxlength="3" class="form-control">
				    										</div>
				    										<div class="spanliner">
				    											<span>Total</span>
				    											<input id="ctotal" readonly placeholder="%" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="text" maxlength="3" class="form-control">
				    										</div>
				    									</div>
				    									<div class="evalindiproj hovertable" style="border: 1px solid #fe7235;">
				    										<div class="spanliner">
				    											<span>Project Experience</span>
				    											<input id="d1" placeholder="%" value="0" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" maxlength="3" class="form-control">
				    										</div>
				    										<div class="spanliner">
				    											<span>Years of relevant Experience</span>
				    											<input id="d2" placeholder="%" value="0" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" maxlength="3" class="form-control">
				    										</div>
				    										<div class="spanliner">
				    											<span>Industry Experience</span>
				    											<input id="d3" placeholder="%" value="0" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" maxlength="3" class="form-control">
				    										</div>
				    										<div class="spanliner">
				    											<span>Awards</span>
				    											<input id="d4" placeholder="%" value="0" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" maxlength="3" class="form-control">
				    										</div>
				    										<div class="spanliner">
				    											<span>Accreditaions</span>
				    											<input id="d5" placeholder="%" value="0" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" maxlength="3" class="form-control">
				    										</div>
				    										<div class="spanliner">
				    											<span>Relationship to Employer</span>
				    											<input id="d6" placeholder="%" value="0" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" maxlength="3" class="form-control">
				    										</div>
				    										<div class="spanliner">
				    											<span>Communication Skills</span>
				    											<input id="d7" placeholder="%" value="0" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" maxlength="3" class="form-control">
				    										</div>
				    										<div class="spanliner">
				    											<span>People Management</span>
				    											<input id="d8" placeholder="%" value="0" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" maxlength="3" class="form-control">
				    										</div>
				    										<div class="spanliner">
				    											<span>Time Management</span>
				    											<input id="d9" placeholder="%" value="0" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" maxlength="3" class="form-control">
				    										</div>
				    										<div class="spanliner">
				    											<span>Pro-Active</span>
				    											<input id="d10" placeholder="%" value="0" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" maxlength="3" class="form-control">
				    										</div>
				    										<div class="spanliner">
				    											<span>Social Behaviour</span>
				    											<input id="d11" placeholder="%" value="0" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" maxlength="3" class="form-control">
				    										</div>
				    										<div class="spanliner">
				    											<span>Technical 'Hard' Skills</span>
				    											<input id="d12" placeholder="%" value="0" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" maxlength="3" class="form-control">
				    										</div>
				    										<div class="spanliner">
				    											<span>Total</span>
				    											<input id="dtotal" readonly placeholder="%" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="text" maxlength="3" class="form-control">
				    										</div>
				    									</div>
				    								</td>
			    								</tr>
			    							</tbody>
		    							</table>
		    							
		    							<div class="form-group butcent">
											<input id="sec2" type="submit" data-toggle="tab"name="Next" value="Next" class="btn btn-primary butsize">
										</div>
		    						</div><br> 
		    					<div id="section41" class="tab-pane fade tender-container">
		    						<h3 class="bid-form-title">Quality Assurance</h3>
		    						<form method="post">
		    					<div class="row" style="padding-bottom:10px;">
								 	<div class="col-sm-4">	Created by</div>
										<div class="col-sm-8">
											<div class="form-group">
												<div class="col-sm-6" style="padding:0;">
													<input type="text" class="form-control" name="created_fname" placeholder="First Name">
											</div>
										<div class="col-sm-6" style="padding:0;padding-left: 15px;">
										<input type="text" class="form-control" name="created_lname"placeholder="Last Name">
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
													<input type="text" class="form-control" name="checked_fname" placeholder="First Name">
											</div>
										<div class="col-sm-6" style="padding:0;padding-left: 15px;">
										<input type="text" class="form-control" name="checked_lname"placeholder="Last Name">
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
													<input type="text" class="form-control" name="approved_fname" placeholder="First Name">
											</div>
										<div class="col-sm-6" style="padding:0;padding-left: 15px;">
										<input type="text" class="form-control" name="approved_lname"placeholder="Last Name">
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
													   {{--  <button class="btn btn-primary" id="cnt_statement" >Add another statement</button> --}}
													    
														</div>
													</div>
    										</div>
    										<div class="form-group butcent">

    											<button type="button" class="btn btn-primary butsize" s data-toggle="modal"data-target="#myModal2">Start Tender Process</button>

											
											<button type="button" id="quality_save" class="btn btn-primary butsize">Save</button>
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



<!-- Testing lang ni -->

@endsection