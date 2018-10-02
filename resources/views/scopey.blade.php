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
					$('h3#serveprojtitle').attr('data-id',result.services['tender_id']);	
					// $('#tendid').val(result.services['tender_id']);
					$('tbody#tenderload').append('<tr><td style="text-align: left;font-weight:bolder; " calss="td">'+result.services['services']+'<a data-tender-id="'+result.services['tender_id']+'"><p>Edit Tender</p></a></td><td class="td">Drafted</td><td class="td">TBC</td><td class="td">TBC</td><td class="td">TBC</td><td class="td">TBC</td><td class="td">TBC</td><td class="td"></td><tr>');
					console.log(result.services);
					// alert(result.services);
				}
			});
		});
		$('.edit_tender').click(function(){
			var tender_id = $(this).attr('data-tender-id');
			var counter_name = 0;
			var counter_level = 0;
			var couner_col = 0
			// $('#idd').val($(this).attr('data-id'));
			jQuery.ajax({
				url: "{{ url('tenderget') }}",
				method: 'get',
				data: {
					tendid: tender_id
				},
				success: function(result){
					alert(result.tender['services']);
					$('#serveprojtitle').html(result.tender['services']);
					// jQuery('.alert').show();
					// jQuery('.alert').html(result.services);
					// $('h3#serveprojtitle').attr('data-id',result.services);
					// $('tbody#tenderload').append('<tr><td style="text-align: left;font-weight:bolder; " calss="td">'+result.services['services']+'<a data-tender-id="'+result.services['tender_id']+'"><p>Edit Tender</p></a></td><td class="td">Drafted</td><td class="td">TBC</td><td class="td">TBC</td><td class="td">TBC</td><td class="td">TBC</td><td class="td">TBC</td><td class="td"></td><tr>');
					$("div#added_insurance_name").each(function(){
						$(this).append('<input class="form-control" type="text" value="'+result.appointment[counter_name]['insurance_name']+'" disabled/>');
						//$("#added_insurance_level").append('<input class="form-control" type="text" value="'+result.appointment['insurance_level']+'" disabled/>');
						counter_name += 1;
					});
					$("div#added_insurance_level").each(function(){
						$(this).append('<input class="form-control" type="text" value="'+result.appointment[counter_level]['insurance_level']+'" disabled/>');
						counter_level += 1;
					});
					$("div#added_collateral").append('<input class="form-control" type="text" value="'+result.appointment[0]['collateral_warranties']+'" disabled/>');
					$("div#added_limit").append('<input class="form-control" type="text" value="'+result.appointment[0]['limit_of_liability']+'" disabled/>');
					
					console.log(result);
					// alert(result.services);
				}
			});

		});
		$('#appointment_save').click(function(){
			var idd = $('#serveprojtitle').attr('data-id');
			// alert($('#idd').val());
			var insurance_n = [];
			var insurance_l = [];
			var bond = [];
			var dummy = 'Test';
			//alert('dasdad');
			jQuery("select[name='insurance_name[]']").each(function()
				{
					insurance_n.push($(this).val());
				}
			);
			jQuery("input[name='insurance_level[]']").each(function()
				{
					insurance_l.push($(this).val());
				}
			);
			jQuery("input[name='bonds[]']").each(function()
				{
					bond.push($(this).val());
				}
			);
			jQuery.ajax({
				url:"{{ url('project_info_tender_appointment') }}",
				method: 'post',
				data: {
					//id: {{ $project->project_record_id }},
					insurance_name: insurance_n,
					insurance_level: insurance_l,
					current_tend: idd,
					bonds: bond,
					collateral_warranties: jQuery("select[name='collateral_warranties']").val(),
					limit_of_liability: jQuery("input[name='limit_of_liability']").val(),
					// net_contribution_clause:jQuery("input[name='net_contribution_clause']").val(),
					// documents_for_signature:  jQuery("input[name='documents_for_signature']").val(),
					// signature_files: jQuery("input[name='signature_files']").val()
				},
				success: function(result){
					// jQuery('.alert').show();
					// jQuery('.alert').html(result.success);
					console.log(result);
				}
			});
		});

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
		        $(this).parent().append('<div class="form-group" ><input type="text" name="insurance_name[]" class="form-control"></div>');    
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

	<div class="container-fluid below-header">
	</div>

	
	<div class="container-fluid lounge-wrapper">
		<div id="section2" class="tab-pane fade tender-container" style="padding-top:0;margin-left:auto;margin-right:auto;width:1040px;">
			<div class="row">
				<div class="container">
					<h1 class="project-title bid-page-title">Design Responsibility Matrix</h1>
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
	

	
	
	<!-- end -->

@endsection


