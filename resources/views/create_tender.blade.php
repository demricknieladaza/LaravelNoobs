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
	.datepicker {
	    z-index: 9999999;
	}
	.dropdown-menu
	{
		margin-left: 0;
	}
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
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

	function addprequest()
	{
		var ival = $.trim($('input[name="quest"]').val());
		if( ival.length != "" ){
			ival = ival.toLowerCase().replace(/\b[a-z]/g, function(letter) {
			    return letter.toUpperCase();
			});
			var out = "<li><div class='form-check'><label><input disabled type='checkbox' checked name='prequest[]' value='"+ival+"'><span class='label-text'>"+ival+"</span></label></div></li>";
			$('ul#prequest').append(out);

			$('input[name="quest"]').val('');
		}
	}
</script>
<script type="text/javascript">
	$(document).ready(function (){
		$('#country_name').keyup(function(){
	       var query = $(this).val();
	       if(query != '')
	       {
	        var _token = $('input[name="_token"]').val();
	        $.ajax({
	         url:"{{ url('autocomplete') }}",
	         method:"POST",
	         data:{query:query, _token:_token},
	         success:function(data){
	            $('#countryList').fadeIn();  
	            $('#countryList').html(data);
	         }
	        });
	       }
	       else{
	       		$('#countryList').fadeOut();
	       }
	   });

	   $('.chos').click(function(){  
	       $('#country_name').val($(this).text());  
	       $('#countryList').fadeOut();  
	   });
		var scopesave = 0;
		$('#questionnaire_save').click(function(){
			// alert('QUESTIONNAIRE!');
			var question = "";
			jQuery("input[name='prequest[]']").each(function()
				{	
					question = question.concat($(this).val(),'^');
				}
			);
			// alert(question);
			if($('input[name="pre_id"]').val() == 0){
				jQuery.ajax({
					url: "{{ url('questionnaire') }}",
					method: 'post',
					data: {
						idd: jQuery("input[name='question_id']").val(),
						questions: question
					},
					success: function(result){
						console.log(result);
					}
				});
			}
			else{
				jQuery.ajax({
					url: "{{ url('questionnaireedit') }}",
					method: 'post',
					data: {
						idd: $('input[name="pre_id"]').val(),
						questions: question
					},
					success: function(result){
						console.log(result);
					}
				});
			}
			

		});
		$('#createservproj').click(function(){
			// alert('adsad');
			var serv = $('select[name="servicechoice"]').val();
			// $('#selectServe').toggle();	
			$('#serveprojtitle').html(serv);
			$('#tendserve').val(serv);
			jQuery.ajax({
				url: "{{ url('edit_tender_service') }}",
				method: 'post',
				data: {
					services: jQuery('#tendserve').val(),
					idd: jQuery('#idd').val()

				},
				success: function(result){
					alert(result.services['tender_id']);
					// jQuery('.alert').show();
					// jQuery('.alert').html(result.services);
					$('h3#serveprojtitle').attr('data-id',result.services['tender_id']);	
					// $('#tendid').val(result.services['tender_id']);
					$('tbody#tenderload').append('<tr><td style="text-align: left;font-weight:bolder; " calss="td">'+result.services['services']+'<a class="edit_tender" data-toggle="tab" href="#section4" aria-expanded="true" data-tender-id="'+result.services['tender_id']+'"><p>Edit Tender</p></a></td><td class="td">Drafted</td><td class="td">TBC</td><td class="td">TBC</td><td class="td">TBC</td><td class="td">TBC</td><td class="td">TBC</td><td class="td"></td><tr>');
					console.log(result.services);
					// alert(result.services);
				}
			});
		});
		$('.edit_tender').click(function(){
			var tender_id = $(this).attr('data-tender-id');
			var counter_name = 0;
			var counter_level = 0;
			var counter_col = 0
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
					$('h3#serveprojtitle').attr('data-id',result.tender['tender_id']);
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
					$(result.bonds).each(function(){
						$("input[id='"+result.bonds[counter_col]['bond_name']+"']").prop('checked', true);
						counter_col += 1;
					});
					//$("div#added_collateral").append('<input class="form-control" type="text" value="'+result.appointment[0]['collateral_warranties']+'" disabled/>');
					//$("div#added_limit").append('<input class="form-control" type="text" value="'+result.appointment[0]['limit_of_liability']+'" disabled/>');
					$("select[name='collateral_warranties']").val(result.appointment[0]['collateral_warranties']);
					console.log(result);
					// alert(result.services);
				}
			});
		});
		$('#quality_save').click(function(){
			var idd = $('#serveprojtitle').attr('data-id');
			jQuery.ajax({
				url:"{{ url('tender_quality_assurance') }}",
				method: 'post',
				data: {
					created_fname: jQuery("input[name='created_fname']").val(),
					created_lname: jQuery("input[name='created_lname']").val(),
					created_data: jQuery("input[name='created_date']").val(),
					checked_fname: jQuery("input[name='checked_fname']").val(),
					checked_lname: jQuery("input[name='checked_lname']").val(),
					checked_date: jQuery("input[name='checked_date']").val(),
					approved_fname: jQuery("input[name='approved_fname']").val(),
					approved_lname: jQuery("input[name='approved_lname']").val(),
					approved_date: jQuery("input[name='approved_date']").val()
				},
				success: function(result){

					console.log(result);
				}
			});
		});
		$('#appointment_save').click(function(){
			var idd = $('#serveprojtitle').attr('data-id');
			// alert($('#idd').val());
			var insurance_n = [];
			var insurance_l = [];
			var bond = [];
			// var dummy = 'Test';
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
					if($(this).prop('checked')){
						bond.push($(this).val());
					}
					
				}
			);
			jQuery.ajax({
				url:"{{ url('project_info_tender_appointment') }}",
				method: 'post',
				data: {
					insurance_name: insurance_n,
					insurance_level: insurance_l,
					current_tend: idd,
					bonds: bond,
					collateral_warranties: jQuery("select[name='collateral_warranties']").val(),
					limit_of_liability: jQuery("input[name='limit_of_liability']").val()
					// net_contribution_clause:jQuery("input[name='net_contribution_clause']").val(),
					form_of_appointment: 
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
		$('#start_tender').click(function(){
			alert('START!!!');
			var idd = $('#serveprojtitle').attr('data-id');
			var status = "Active"
			var end = "N/A";
			jQuery.ajax({
				url: "{{ url('start_tender_process') }}",
				method: 'post',
				data: {
					idd: idd,
					status: status,
					end: end,
					time_remaining: jQuery("select[name='days']").val()
				},
				success: function(result){
					console.log(result);
				}
			});

		});
		// $('#quality_save').click(function(){
		// 	jQuery.ajax({
		// 		url: "{{ url('tender_quality_assurance') }}",
		// 		method: 'post';
		// 		data: {

		// 		},
		// 		success: function(result){
		// 			console.log(result);
		// 		}
		// 	});
		// });
		$('#deliverables_save').click(function(e){
			var isValid = true;
			$('textarea').each(function() {
	            if ($.trim($(this).val()) == '') {
	                isValid = true;
	                $(this).css({
	                    "border": "1px solid red",
	                    "background": "#FFCECE"
	                });
	            }
	            else {
	                $(this).css({
	                    "border": "",
	                    "background": ""
	                });
	            }
	        });
	        // $('input[type="checkbox"]').each(function() {
	        //     if ($.trim($(this).val()) == '') {
	        //         isValid = false;
	        //         $(this).parents('.col-sm-12').css({
	        //             "border": "1px solid red",
	        //             "background": "#FFCECE"
	        //         });
	        //     }
	        //     else {
	        //         $(this).css({
	        //             "border": "",
	        //             "background": ""
	        //         });
	        //     }
	        // });
	        if (isValid == false)
	            e.preventDefault();
	        else{
			if (scopesave != 0){
				alert('you need to refresh the page to perform save');
			}
			else{
			scopesave++;
			var idd = $('#serveprojtitle').attr('data-id');
			var strat_raci = [];
			var strat_num = [];
			var programme_raci = [];
			var programme_num = [];
			var feas_raci = [];
			var feas_num = [];
			var des_raci = [];
			var des_num = [];
			var site_raci = [];
			var site_num = [];
			var inf_raci = [];
			var inf_num = [];
			var proj_raci = [];
			var proj_num = [];
			var ris_raci = [];
			var ris_num = [];
			var han_raci = [];
			var han_num = [];
			var exec_raci = [];
			var exec_num = [];
			var prop_raci = [];
			var prop_num = [];
			var pre_choice = [];
			var pre_num = [];
			var site_v_choice = [];
			var site_v_num = [];
			var riba_choice = [];
			var riba_num = [];
			var ins_choice = [];
			var ins_num = [];
			var a_one = [];
			var a_two = [];
			var a_three = [];
			var a_four = [];
			var a_five = [];
			var a_six = [];
			var m_one = [];
			var m_two = [];
			var m_three = [];
			var c_one = [];
			var c_two = [];
			var c_three = [];
			var c_four = [];
			var cor_one = [];
			var cor_two = [];
			var o_one = [];
			var o_two = [];
			var o_three = [];
			var o_four = [];

			jQuery("input[name='strategic_raci[]']").each(function()
				{	
					if($(this).prop('checked')){
						strat_raci.push($(this).val());
					}
					
				}
			);
			jQuery("input[name='strategic_num[]']").each(function()
				{	
					if($(this).prop('checked')){
						strat_num.push($(this).val());
					}
					
				}
			);
			jQuery("input[name='pprogramme_raci[]']").each(function()
				{	
					if($(this).prop('checked')){
						programme_raci.push($(this).val());
					}
					
				}
			);
			jQuery("input[name='pprogramme_num[]']").each(function()
				{	
					if($(this).prop('checked')){
						programme_num.push($(this).val());
					}
					
				}
			);
			jQuery("input[name='feasibility_raci[]']").each(function()
				{	
					if($(this).prop('checked')){
						feas_raci.push($(this).val());
					}
					
				}
			);
			jQuery("input[name='feasibility_num[]']").each(function()
				{	
					if($(this).prop('checked')){
						feas_num.push($(this).val());
					}
					
				}
			);
			jQuery("input[name='design_raci[]']").each(function()
				{	
					if($(this).prop('checked')){
						des_raci.push($(this).val());
					}
					
				}
			);
			jQuery("input[name='design_num[]']").each(function()
				{	
					if($(this).prop('checked')){
						des_num.push($(this).val());
					}
					
				}
			);
			jQuery("input[name='site_raci[]']").each(function()
				{	
					if($(this).prop('checked')){
						site_raci.push($(this).val());
					}
					
				}
			);
			jQuery("input[name='site_num[]']").each(function()
				{	
					if($(this).prop('checked')){
						site_num.push($(this).val());
					}
					
				}
			);
			jQuery("input[name='info_raci[]']").each(function()
				{	
					if($(this).prop('checked')){
						inf_raci.push($(this).val());
					}
					
				}
			);
			jQuery("input[name='info_num[]']").each(function()
				{	
					if($(this).prop('checked')){
						inf_num.push($(this).val());
					}
					
				}
			);
			jQuery("input[name='project_raci[]']").each(function()
				{	
					if($(this).prop('checked')){
						proj_raci.push($(this).val());
					}
					
				}
			);
			jQuery("input[name='project_num[]']").each(function()
				{	
					if($(this).prop('checked')){
						proj_num.push($(this).val());
					}
					
				}
			);
			jQuery("input[name='risk_raci[]']").each(function()
				{	
					if($(this).prop('checked')){
						ris_raci.push($(this).val());
					}
					
				}
			);
			jQuery("input[name='risk_num[]']").each(function()
				{	
					if($(this).prop('checked')){
						ris_num.push($(this).val());
					}
					
				}
			);
			jQuery("input[name='execution_raci[]']").each(function()
				{	
					if($(this).prop('checked')){
						exec_raci.push($(this).val());
					}
					
				}
			);
			jQuery("input[name='execution_num[]']").each(function()
				{	
					if($(this).prop('checked')){
						exec_num.push($(this).val());
					}
					
				}
			);
			jQuery("input[name='proposal_raci[]']").each(function()
				{	
					if($(this).prop('checked')){
						prop_raci.push($(this).val());
					}
					
				}
			);
			jQuery("input[name='proposal_num[]']").each(function()
				{	
					if($(this).prop('checked')){
						prop_num.push($(this).val());
					}
					
				}
			);
			jQuery("input[name='pre_app_choice[]']").each(function()
				{	
					if($(this).prop('checked')){
						pre_choice.push($(this).val());
					}
					
				}
			);
			jQuery("input[name='pre_app_num[]']").each(function()
				{	
					if($(this).prop('checked')){
						pre_num.push($(this).val());
					}
					
				}
			);
			jQuery("input[name='site_visits_choice[]']").each(function()
				{	
					if($(this).prop('checked')){
						site_v_choice.push($(this).val());
					}
					
				}
			);
			jQuery("input[name='site_visits_num[]']").each(function()
				{	
					if($(this).prop('checked')){
						site_v_num.push($(this).val());
					}
					
				}
			);
			jQuery("input[name='riba_choice[]']").each(function()
				{	
					if($(this).prop('checked')){
						riba_choice.push($(this).val());
					}
					
				}
			);
			jQuery("input[name='riba_num[]']").each(function()
				{	
					if($(this).prop('checked')){
						riba_num.push($(this).val());
					}
					
				}
			);
			jQuery("input[name='inspection_choice[]']").each(function()
				{	
					if($(this).prop('checked')){
						ins_choice.push($(this).val());
					}
					
				}
			);
			jQuery("input[name='inspection_num[]']").each(function()
				{	
					if($(this).prop('checked')){
						ins_num.push($(this).val());
					}
					
				}
			);
			jQuery("input[name='advise_one[]']").each(function()
				{	
					if($(this).prop('checked')){
						a_one.push($(this).val());
					}
					
				}
			);
			jQuery("input[name='advise_two[]']").each(function()
				{	
					if($(this).prop('checked')){
						a_two.push($(this).val());
					}
					
				}
			);
			jQuery("input[name='advise_three[]']").each(function()
				{	
					if($(this).prop('checked')){
						a_three.push($(this).val());
					}
					
				}
			);
			jQuery("input[name='advise_four[]']").each(function()
				{	
					if($(this).prop('checked')){
						a_four.push($(this).val());
					}
					
				}
			);
			jQuery("input[name='advise_five[]']").each(function()
				{	
					if($(this).prop('checked')){
						a_five.push($(this).val());
					}
					
				}
			);
			jQuery("input[name='advise_six[]']").each(function()
				{	
					if($(this).prop('checked')){
						a_six.push($(this).val());
					}
					
				}
			);
			jQuery("input[name='monitor_one[]']").each(function()
				{	
					if($(this).prop('checked')){
						m_one.push($(this).val());
					}
					
				}
			);
			jQuery("input[name='monitor_two[]']").each(function()
				{	
					if($(this).prop('checked')){
						m_two.push($(this).val());
					}
					
				}
			);
			jQuery("input[name='monitor_three[]']").each(function()
				{	
					if($(this).prop('checked')){
						m_three.push($(this).val());
					}
					
				}
			);
			jQuery("input[name='collab_one[]']").each(function()
				{	
					if($(this).prop('checked')){
						c_one.push($(this).val());
					}
					
				}
			);
			jQuery("input[name='collab_two[]']").each(function()
				{	
					if($(this).prop('checked')){
						c_two.push($(this).val());
					}
					
				}
			);
			jQuery("input[name='collab_three[]']").each(function()
				{	
					if($(this).prop('checked')){
						c_three.push($(this).val());
					}
					
				}
			);
			jQuery("input[name='collab_four[]']").each(function()
				{	
					if($(this).prop('checked')){
						c_four.push($(this).val());
					}
					
				}
			);
			jQuery("input[name='coordinate_one[]']").each(function()
				{	
					if($(this).prop('checked')){
						cor_one.push($(this).val());
					}
					
				}
			);
			jQuery("input[name='coordinate_two[]']").each(function()
				{	
					if($(this).prop('checked')){
						cor_two.push($(this).val());
					}
					
				}
			);
			jQuery("input[name='other_one[]']").each(function()
				{	
					if($(this).prop('checked')){
						o_one.push($(this).val());
					}
					
				}
			);
			jQuery("input[name='other_two[]']").each(function()
				{	
					if($(this).prop('checked')){
						o_two.push($(this).val());
					}
					
				}
			);
			jQuery("input[name='other_three[]']").each(function()
				{	
					if($(this).prop('checked')){
						o_three.push($(this).val());
					}
					
				}
			);
			jQuery("input[name='other_four[]']").each(function()
				{	
					if($(this).prop('checked')){
						o_four.push($(this).val());
					}
					
				}
			);
			

			var xarray = [];

			$("table tbody#addedDelivs tr#deliv").each(function () {

				var rac = [];
				var ribanum = [];
				
				/* look for all checkboes that have a class 'chk' attached to it and check if it was checked */
				$(this).find(".rac:checked").each(function() {
					rac.push($(this).val());
				});
				if(rac.length == 0)
				{
					 $(this).css({
	                    "border": "1px solid red",
	                    "background": "#FFCECE"
	                });
					e.preventDefault();
				}
				$(this).find(".ribanum:checked").each(function() {
					ribanum.push($(this).val());
				});
				
				/* we join the array separated by the comma */
				var selectedrac;
				var selectednum;
				selectedrac = rac.join(',') ;
				selectednum = ribanum.join(',') ;

			    // alert('name: ' + $(this).find('.named').val());
			    // alert('details: ' + $(this).find('.details').val());
			    // alert('raci: ' + selectedrac);
			    // alert('number: ' + selectednum);
			    var parr = {
			    	name : $(this).find('.named').val(),
			    	details : $(this).find('.details').val(),
			    	raci : selectedrac,
			    	number : selectednum,
			    	edit : $(this).attr('data-edit'),
			    	add_id : $(this).attr('data-addid')
			    };

			    xarray.push(parr);

			});

			var yarray = [];
			$("table tbody#addedmeet tr#meetclone").each(function () {
				var ribanum = [];
				var rac = [];
				
				/* look for all checkboes that have a class 'chk' attached to it and check if it was checked */
				$(this).find(".meetnum:checked").each(function() {
					ribanum.push($(this).val());
				});

				$(this).find(".arrange:checked").each(function() {
					rac.push($(this).val());
				});
				
				/* we join the array separated by the comma */
				var selectedrac;
				var selectednum;
				selectedrac = rac.join(',') ;
				selectednum = ribanum.join(',') ;

			    // alert('name: ' + $(this).find('.named').val());
			    // alert('details: ' + $(this).find('.details').val());
			    // alert('raci: ' + selectedrac);
			    // alert('number: ' + selectednum);
			    var parr = {
			    	name : $(this).find('.name').val(),
			    	purpose : $(this).find('.purpose').val(),
			    	attendees : $(this).find('.attendees').val(),
			    	duration : $(this).find('.duration').val(),
			    	reoccurence : $(this).find('.reoccurence').val(),
			    	arrange : selectedrac,
			    	number : selectednum,
			    	edit : $(this).attr('data-edit'),
			    	add_id : $(this).attr('data-addid')
			    };

			    yarray.push(parr);

			});

			var darray = [];
			$("table tbody#addedDesign tr#desclone").each(function () {
			    var parr = {
			    	name : $(this).find('.name').val(),
			    	question : $(this).find('.question').val(),
			    	edit : $(this).attr('data-edit'),
			    	add_id : $(this).attr('data-addid')
			    };

			    darray.push(parr);

			});

			var aarray = [];
			$("table tbody#addedadvise tr#adviseclone").each(function () {
				var rac = [];

				$(this).find(".advisenum:checked").each(function() {
					rac.push($(this).val());
				});
				
				/* we join the array separated by the comma */
				var selectedrac;
				selectedrac = rac.join(',') ;

			    var parr = {
			    	name : $(this).find('.name').val(),
			    	number : selectedrac,
			    	edit : $(this).attr('data-edit'),
			    	add_id : $(this).attr('data-addid')
			    };

			    aarray.push(parr);

			});
			console.log(xarray);
			// alert(strat_num);
			jQuery.ajax({
				url:"{{ url('tender_deliverables_save') }}",
				method: 'post',
				data: {
					idd: idd,
					addeddeliv: xarray,
					addedmeet: yarray,
					addeddes: darray,
					addedad: aarray,
					strategic_details: jQuery("textarea[name='strategic_details']").val(),
					pprogramme_details: jQuery("textarea[name='pprogramme_details']").val(),
					feasibility_details: jQuery("textarea[name='feasibility_details']").val(),
					design_details: jQuery("textarea[name='design_details']").val(),
					site_details: jQuery("textarea[name='site_details']").val(),
					info_details: jQuery("textarea[name='info_details']").val(),
					project_details: jQuery("textarea[name='project_details']").val(),
					risk_details: jQuery("textarea[name='risk_details']").val(),
					hand_details: jQuery("textarea[name='hand_details']").val(),
					execution_details: jQuery("textarea[name='execution_details']").val(),
					proposal_details: jQuery("textarea[name='proposal_details']").val(),
					strategic_raci: strat_raci,
					strategic_num: strat_num,
					pprogramme_raci: programme_raci,
					pprogramme_num: programme_num,
					feasibility_raci: feas_raci,
					feasibility_num: feas_num,
					design_raci: des_raci,
					design_num: des_num,
					site_raci: site_raci,
					site_num: site_num,
					info_raci: inf_raci,
					info_num: inf_num,
					project_raci: proj_raci,
					project_num: proj_num,
					risk_raci: ris_raci,
					risk_num: ris_num,
					handover_raci: han_raci,
					handover_num: han_num,
					execution_raci: exec_raci,
					execution_num: exec_num,
					proposal_raci: prop_raci,
					proposal_numn: prop_num,
					pre_app_purpose: jQuery("textarea[name='pre_app_purpose']").val(),
					pre_app_attendees: jQuery("textarea[name='pre_app_attendees']").val(),
					pre_app_assumed: jQuery("textarea[name='pre_app_assumed_duration']").val(),
					pre_app_reoccurence: jQuery("textarea[name='pre_app_reoccurence']").val(),
					site_visits_purpose: jQuery("textarea[name='site_visits_purpose']").val(),
					site_visists_attendees: jQuery("textarea[name='site_visits_attendees']").val(),
					site_visits_assumed: jQuery("textarea[name='site_visits_assumed_duration']").val(),
					site_visits_reoccurence: jQuery("textarea[name='site_visits_reoccurence']").val(),
					riba_purpose: jQuery("textarea[name='riba_purpose']").val(),
					riba_attendees: jQuery("textarea[name='riba_attendees']").val(),
					riba_assumed: jQuery("textarea[name='riba_assumed_duration']").val(),
					riba_reoccurence: jQuery("textarea[name='riba_reoccurence']").val(),
					inspection_purpose: jQuery("textarea[name='inspection_purpose']").val(),
					inspection_attendees: jQuery("textarea[name='inspection_attendees']").val(),
					inspection_assumed: jQuery("textarea[name='inspection_assumed_duration']").val(),
					inspection_reoccurence: jQuery("textarea[name='inspection_reoccurence']").val(),
					pre_app_choice: pre_choice,
					pre_app_num: pre_num,
					site_visits_choice: site_v_choice,
					site_visits_num: site_v_num,
					riba_choice: riba_choice,
					riba_num: riba_num,
					inspection_choice: ins_choice,
					inspection_num: ins_num,
					question_one: jQuery("textarea[name='question_one']").val(),
					question_two: jQuery("textarea[name='question_two']").val(),
					question_three: jQuery("textarea[name='question_three']").val(),
					question_four: jQuery("textarea[name='question_four']").val(),
					question_five: jQuery("textarea[name='question_five']").val(),
					question_six: jQuery("textarea[name='question_six']").val(),
					advise_one: a_one,
					advise_two: a_two,
					advise_three: a_three,
					advise_four: a_four,
					advise_five: a_five,
					advise_six: a_six,
					monitor_one: m_one,
					monitor_two: m_two,
					monitor_three: m_three,
					collab_one: c_one,
					collab_two: c_two,
					collab_three: c_three,
					collab_four: c_four,
					coordinate_one: cor_one,
					coordinate_two: cor_two,
					other_one: o_one,
					other_two: o_two,
					other_three: o_three,
					other_four: o_four
				},
				success: function(result){
					window.location.href = '{{ url('tenderget') }}'+'/'+idd;
				}
			})
			}
		}
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
<script>
	$(document).ready(function(){
		$(".dates").datepicker( {
		    format: "mm-yyyy",
		    viewMode: "months", 
		    minViewMode: "months",
		    orientation: 'auto'
		});

		$(".dateday").datepicker( {
			// container:'#datepicker4',
		    format: "mm-dd-yyyy",
		    viewMode: "days", 
		    minViewMode: "days",
		    orientation: 'auto'
		});

		// $('.addbutton').click(function(){
		// 	$('#addDeliverables').modal('toggle');
		// });
		// $('.addbuttonMeet').click(function(){
		// 	$('#addMeetings').modal('toggle');
		// });
		// $('.addbuttonDes').click(function(){
		// 	$('#addDesign').modal('toggle');
		// });
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
	    var wrapper         = $("#addedinsur"); //Fields wrapper
	    var add_button      = $("#addinsur"); //Add button ID
	    
	    var x = 1; //initlal text box count
	    $(add_button).click(function(){ //on add input button click

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
	    var wrapper         = $("#addedDeliv"); //Fields wrapper
	    var add_button      = $("#addDeliv"); //Add button ID
	    
	    
	    var x = 1; //initlal text box count
	    $('.addbutton').click(function(){ //on add input button click
	        // e.preventDefault();
	        // var named = $("input[name='deliverable']").val();
	        $("#deliv").clone().insertAfter("tbody#addedDelivs tr:last");

	        // if(x < max_fields){ //max input box allowed
	        //     x++; //text box increment
	        //     $('#addDeliverables').modal('toggle');
	        //     $("#addedDeliv").append(''); //add input box
	        // }
	        var $this = $(this),
	            $toElement      = $this.attr('data-scroll-to'),
	            $focusElement   = $this.attr('data-scroll-focus'),
	            $offset         = $this.attr('data-scroll-offset') * 1 || 0,
	            $speed          = $this.attr('data-scroll-speed') * 1 || 500;

	        var objDiv = document.getElementById("myscrol");
	        objDiv.scrollTop = objDiv.scrollHeight;
	    });

	    $('.addbuttonMeet').click(function(){ 
	        $("#meetclone").clone().insertAfter("tbody#addedmeet tr:last");

	        var objDiv = document.getElementById("myscrol2");
	        objDiv.scrollTop = objDiv.scrollHeight;
	    });

	    $('.addbuttonDes').click(function(){ //on add input button click
	        // e.preventDefault();

	        $("#desclone").clone().insertAfter("tbody#addedDesign tr:last");

	        var objDiv = document.getElementById("myscrol3");
	        objDiv.scrollTop = objDiv.scrollHeight;
	        
	    });

	    $('.addadvise').click(function(){ //on add input button click
	        // e.preventDefault();

	        $("#adviseclone").clone().insertAfter("tbody#addedadvise tr:last");

	        var objDiv = document.getElementById("myscrol4");
	        objDiv.scrollTop = objDiv.scrollHeight;
	        
	    });



	    
	    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
	        e.preventDefault(); $(this).parent('div').remove(); x--;
	    });
	});
</script>
<script type="text/javascript">
    var path = "{{ route('autocomplete') }}";
    $('input.typeahead').typeahead({
        source:  function (query, process) {
        return $.get(path, { query: query }, function (data) {
                return process(data);
            });
        }
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
		  {!! Form::open(['action' => 'TenderController@store', 'method' => 'POST'])!!}
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
				  <input type="hidden" name="" id="idd" value="0">
	        </div>
	        <div class="modal-footer" style="text-align: center;">
	          <button type="button" class="btn btn-primary" data-toggle="tab" data-backdrop="false" data-dismiss="modal" href="#section4" id="createservproj" >Create</button>
	          <button type="button" class="btn btn-primary butgrey">Go Back</button>
	        </div>
		  </div>
		  {!! Form::close() !!}   
	    </div>
	</div>
	<div class="modal fade" id="addDeliverables" role="dialog" tabindex="-1">
	    <div class="modal-dialog">
		  <!-- Modal content-->
	      <div class="modal-content" style="top: 83px;">
	        <div class="modal-header" style="border-top-left-radius: 6px;border-top-right-radius: 6px;">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h4 class="modal-title">
	          </h4>
	        </div>
	        <div class="modal-body">
	        	<div class="form-group">
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
			                <tr id="deliv" data-edit="no">
			                    <td class="zui-sticky-col2"><textarea id="delivname" class="hayt named" name="named" placeholder="Enter details here"></textarea></td>
			                    <td class="td "><textarea class="hayt details" name="deliv_details" placeholder="Enter details here"></textarea></td>
			                    <td class="td">
			                    	<div class="col-sm-12">
			                    		<div class="col-sm-3 form-check">
			                    			<label>
			                    				<input type="checkbox" name="strat_raci[]" value="R" class="rac"><span class="label-text">R</span>
			                    			</label>
			                    		</div>
			                    		<div class="col-sm-3 form-check">
			                    			<label>
			                    				<input type="checkbox" name="strat_raci[]" value="A" class="rac"><span class="label-text">A</span>
			                    			</label>
			                    		</div>
			                    		<div class="col-sm-3 form-check">
			                    			<label>
			                    				<input type="checkbox" name="strat_raci[]" value="C" class="rac"><span class="label-text">C</span>
			                    			</label>
			                    		</div>
			                    		<div class="col-sm-3 form-check">
			                    			<label>
			                    				<input type="checkbox" name="strat_raci[]" value="I" class="rac"><span class="label-text">I</span>
			                    			</label>
			                    		</div>
			                    	</div>
			                    </td>
			                    <td class="td">
			                    	<div class="form-check">
			                    		<label>
			                    			<input type="checkbox" name="strat_num[]" value="0" class="ribanum"><span class="label-text"></span>
			                    		</label>
			                    	</div>
			                    </td>
			                    <td class="td">
			                    	<div class="form-check">
			                    		<label>
			                    			<input type="checkbox" name="strat_num[]" value="1" class="ribanum"><span class="label-text"></span>
			                    		</label>
			                    	</div>
			                    </td>
			                    <td class="td">
			                    	<div class="form-check">
			                    		<label>
			                    			<input type="checkbox" name="strat_num[]" value="2" class="ribanum"><span class="label-text"></span>
			                    		</label>
			                    	</div>
			                    </td>
			                    <td class="td">
			                    	<div class="form-check">
			                    		<label>
			                    			<input type="checkbox" name="strat_num[]" value="3" class="ribanum"><span class="label-text"></span>
			                    		</label>
			                    	</div>
			                    </td>
			                    <td class="td">
			                    	<div class="form-check">
			                    		<label>
			                    			<input type="checkbox" name="strat_num[]" value="4" class="ribanum"><span class="label-text"></span>
			                    		</label>
			                    	</div>
			                    </td>
			                    <td class="td">
			                    	<div class="form-check">
			                    		<label>
			                    			<input type="checkbox" name="strat_num[]" value="5" class="ribanum"><span class="label-text"></span>
			                    		</label>
			                    	</div>
			                    </td>
			                    <td class="td">
			                    	<div class="form-check">
			                    		<label>
			                    			<input type="checkbox" name="strat_num[]" value="6" class="ribanum"><span class="label-text"></span>
			                    		</label>
			                    	</div>
			                    </td>
			                    <td class="td">
			                    	<div class="form-check">
			                    		<label>
			                    			<input type="checkbox" name="strat_num[]" value="7" class="ribanum"><span class="label-text"></span>
			                    		</label>
			                    	</div>
			                    </td>
			                </tr>
	        			</tbody>
	        		</table>
	        	</div>
	        </div>
	        <div class="modal-footer" style="text-align: center;">
	          <button type="button" class="btn btn-primary" id="addDeliv" >Add</button>
	        </div>
		  </div> 
	    </div>
	</div>

	<div class="modal fade" id="addMeetings" role="dialog" tabindex="-1">
	    <div class="modal-dialog">
		  <!-- Modal content-->
	      <div class="modal-content" style="top: 83px;">
	        <div class="modal-header" style="border-top-left-radius: 6px;border-top-right-radius: 6px;">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h4 class="modal-title">
	          </h4>
	        </div>
	        <div class="modal-body">
	        	<div class="form-group">
	        		<label>Meeting</label>
	        		<input type="text" class="form-control" name="meeting">
	        		<table>
	        			<thead>
	        				
	        			</thead>
	        			<tbody>
	        				<tr id="meetclone" data-edit="no">
	        				<td class="zui-sticky-col3"><textarea class="hayt3 name" name="name" placeholder="Enter details here"></textarea></td>
	        				<td class="td "><textarea class="hayt3 purpose" name="purpose" placeholder="Enter details here"></textarea></td>
	        				<td class="td"><textarea class="hayt3 attendees" name="attendees" placeholder="Enter details here"></textarea></td>
	        				<td class="td"><input style="box-sizing: border-box;border: none;border-bottom: 2px solid #FE7235;" type="text" class="duration" name="durations"></td>
	        				<td class="td"><input style="box-sizing: border-box;border: none;border-bottom: 2px solid #FE7235;" type="text"  class="reoccurence" name="reoccurences"></td>
	        				<td class="td">
	        					<div class="form-check">
	        						<label>
	        							<input type="checkbox" class="arrange" name="arrange[]" value="Arrange"><span class="label-text"></span>
	        						</label>
	        					</div>
	        				</td>
	        				<td class="td">
	        					<div class="form-check">
	        						<label>
	        							<input type="checkbox" class="arrange" name="arrange[]" value="Attend"><span class="label-text"></span>
	        						</label>
	        					</div>
	        				</td>
	        				<td class="td">
	        					<div class="form-check">
	        						<label>
	        							<input type="checkbox" class="arrange" name="arrange[]" value="Minute"><span class="label-text"></span>
	        						</label>
	        					</div>
	        				</td>
	        				<td class="td">
	        					<div class="form-check">
	        						<label>
	        							<input type="checkbox" name="num[]" class="meetnum" value="0"><span class="label-text"></span>
	        						</label>
	        					</div>
	        				</td>
	        				<td class="td">
	        					<div class="form-check">
	        						<label>
	        							<input type="checkbox" name="num[]" class="meetnum" value="1"><span class="label-text"></span>
	        						</label>
	        					</div>
	        				</td>
	        				<td class="td">
	        					<div class="form-check">
	        						<label>
	        							<input type="checkbox" name="num[]" class="meetnum" value="2"><span class="label-text"></span>
	        						</label>
	        					</div>
	        				</td>
	        				<td class="td">
	        					<div class="form-check">
	        						<label>
	        							<input type="checkbox" name="num[]" class="meetnum" value="3"><span class="label-text"></span>
	        						</label>
	        					</div>
	        				</td>
	        				<td class="td">
	        					<div class="form-check">
	        						<label>
	        							<input type="checkbox" name="num[]" class="meetnum" value="4"><span class="label-text"></span>
	        						</label>
	        					</div>
	        				</td>
	        				<td class="td">
	        					<div class="form-check">
	        						<label>
	        							<input type="checkbox" name="num[]" class="meetnum" value="5"><span class="label-text"></span>
	        						</label>
	        					</div>
	        				</td>
	        				<td class="td">
	        					<div class="form-check">
	        						<label>
	        							<input type="checkbox" name="num[]" class="meetnum" value="6"><span class="label-text"></span>
	        						</label>
	        					</div>
	        				</td>
	        				<td class="td">
	        					<div class="form-check">
	        						<label>
	        							<input type="checkbox" name="num[]" class="meetnum" value="7"><span class="label-text"></span>
	        						</label>
	        					</div>
	        				</td>
	        			</tr>
	        			</tbody>
	        		</table>
	        			
	        	</div>
	        </div>
	        <div class="modal-footer" style="text-align: center;">
	          <button type="button" class="btn btn-primary" id="addMeet" >Add</button>
	        </div>
		  </div> 
	    </div>
	</div>
	<div class="modal fade" id="addDesign" role="dialog" tabindex="-1">
	    <div class="modal-dialog">
		  <!-- Modal content-->
	      <div class="modal-content" style="top: 83px;">
	        <div class="modal-header" style="border-top-left-radius: 6px;border-top-right-radius: 6px;">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h4 class="modal-title">
	          </h4>
	        </div>
	        <div class="modal-body">
	        	<div class="form-group">
	        		<label>Design</label>
	        		<table>
	        			<thead>
	        				
	        			</thead>
	        			<tbody>
	        				<tr id="desclone" data-edit="no">
	        				    <td class="zui-sticky-col4"><textarea class="hayt4 name" name="question_name" placeholder="Enter details here"></textarea></td>
	        				    <td class="td "><textarea class="hayt4 question" name="question_one" placeholder="Enter details here"></textarea></td>
	        				</tr>
	        			</tbody>
	        		</table>
	        	</div>
	        </div>
	        <div class="modal-footer" style="text-align: center;">
	          <button type="button" class="btn btn-primary" id="addDes" >Add</button>
	        </div>
		  </div> 
	    </div>
	</div>

	<div class="modal fade" id="addAdvise" role="dialog" tabindex="-1">
	    <div class="modal-dialog">
		  <!-- Modal content-->
	      <div class="modal-content" style="top: 83px;">
	        <div class="modal-header" style="border-top-left-radius: 6px;border-top-right-radius: 6px;">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h4 class="modal-title">
	          </h4>
	        </div>
	        <div class="modal-body">
	        	<div class="form-group">
	        		<label>Design</label>
	        		<table>
	        			<thead>
	        				
	        			</thead>
	        			<tbody>
	        				<tr id="adviseclone" data-edit="no">
	        				    <td class="zui-sticky-col5"><textarea class="name"  style="border-radius: 6px;
    height: 70px;" name="question_one" placeholder="Enter details here"></textarea></td>
	        				    <td class="td">
	        				    	<div class="form-check">
	        				    		<label>
	        				    			<input type="checkbox" name="advisenum[]" class="advisenum" value="0"><span class="label-text"></span>
	        				    		</label>
	        				    	</div>
	        				    </td>
	        				    <td class="td">
	        				    	<div class="form-check">
	        				    		<label>
	        				    			<input type="checkbox" name="advisenum[]" class="advisenum" value="1"><span class="label-text"></span>
	        				    		</label>
	        				    	</div>
	        				    </td>
	        				    <td class="td">
	        				    	<div class="form-check">
	        				    		<label>
	        				    			<input type="checkbox" name="advisenum[]" class="advisenum" value="2"><span class="label-text"></span>
	        				    		</label>
	        				    	</div>
	        				    </td>
	        				    <td class="td">
	        				    	<div class="form-check">
	        				    		<label>
	        				    			<input type="checkbox" name="advisenum[]" class="advisenum" value="3"><span class="label-text"></span>
	        				    		</label>
	        				    	</div>
	        				    </td>
	        				    <td class="td">
	        				    	<div class="form-check">
	        				    		<label>
	        				    			<input type="checkbox" name="advisenum[]" class="advisenum" value="4"><span class="label-text"></span>
	        				    		</label>
	        				    	</div>
	        				    </td>
	        				    <td class="td">
	        				    	<div class="form-check">
	        				    		<label>
	        				    			<input type="checkbox" name="advisenum[]" class="advisenum" value="5"><span class="label-text"></span>
	        				    		</label>
	        				    	</div>
	        				    </td>
	        				    <td class="td">
	        				    	<div class="form-check">
	        				    		<label>
	        				    			<input type="checkbox" name="advisenum[]" class="advisenum" value="6"><span class="label-text"></span>
	        				    		</label>
	        				    	</div>
	        				    </td>
	        				    <td class="td">
	        				    	<div class="form-check">
	        				    		<label>
	        				    			<input type="checkbox" name="advisenum[]" class="advisenum" value="7"><span class="label-text"></span>
	        				    		</label>
	        				    	</div>
	        				    </td>
	        				</tr>
	        			</tbody>
	        		</table>
	        	</div>
	        </div>
	        <div class="modal-footer" style="text-align: center;">
	          <button type="button" class="btn btn-primary" id="addDes" >Add</button>
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
		          <p>Deadline</p><div class="form-group" >
					<div class="input-group dateday date" id="datepicker4" data-date-container="#datepicker4" data-date="02-2012" 
					         data-date-format="mm-yyyy">

						 <input class="form-control " type="text" placeholder="Select year" readonly="readonly" name="date" >	  
						 <span class="input-group-addon add-on"><span class="fa fa-calendar"></span></span>	  
					</div>
					
				</div>
			
		          <p>Feedback date<div class="form-group" >
					<div class="input-group dateday" id="datepicker41" data-date-container="#datepicker41" data-date="02-2012" 
					         data-date-format="mm-yyyy">

						 <input class="form-control " type="text" placeholder="Select year" readonly="readonly" name="date" >	  
						 <span class="input-group-addon add-on"><span class="fa fa-calendar"></span></span>	  
					</div>
					
				</div></p>
		          {{-- <input type="text" placeholder="Search.." name="search"> --}}
		          <input type="text" name="country_name" id="country_name" class=" " value=" " placeholder="Enter Company Name" />
		          <div id="countryList">
		          </div>
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
					<li class=""><a class="abut" href="{{ url('project_info/'. $tender['project_record_id'] . '/edit') }}" >Project</a></li>
					<li class="123"><a class="abut">Scope</a></li>
					<li class=""><a class="abut"  href="{{ url('tenders/'.$tender['project_record_id'].'/edit') }}">Tenders</a></li>
					<li class="active" id="cret" ><a class="abut" ><span >Create New Tender</span></a></li>
				</ul><br>
			</div>
		</div>
		<div class="col-sm-12 questionnaire-section">
			<div class="tab-content tabmargin" >
				<div id="section4" class="tab-pane fade in active tender-container" style="padding-top:0;margin-left:auto;margin-right:auto;">
					<div class="row" style="margin: 25px;">
		    	<div class="123">
		    		<div class="row">
		    			<div class="col-sm-3">
		    				<div class="tender-container" id="mama">
		    					<ul class="nav bid-form-nav">
									<h3 data-toggle="modal" data-target="#selectServe" data-id="{{ $tender->tender_id }}" style="margin-bottom: 10px; margin-top: 0;padding: 15px;border: 3px solid grey;border-radius: 6px;text-align: center;" id="serveprojtitle" class="header-title animate-pop-in">
										{{ $tender->services }}
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
		    						<div class="row">
		    							<div class="col-sm-12">
		    								<input type="hidden" name="pre_id" @if($questsid) value="{{ $questsid }}" @else value="0" @endif>
		    								
		    								<ul style="list-style: none;padding-left: 0;">
		    								@foreach($quests as $quest)
		    									<li><input type='text' name='prequest[]' class="form-control" value="{{ $quest }}"></li>
		    								@endforeach
		    								</ul>
		    								<ul id="prequest" style="list-style: none;padding-left: 0;">	
		    									
		    								</ul>
		    								<div class="form-group">
												<input class="form-control" type="" name="quest">
												<input type="hidden" name="question_id" value="{{ $tender->tender_id }}">
		    								</div>
		    								<div class="form-group">
		    									<button class="btn" onclick="addprequest()" style="background: rgba(254,114,53,1);color: white;width: 100px;">Add</button> <button type="button" class="btn btn-primary" id="questionnaire_save">Save</button>
		    								</div>
										</div>
										
		    							
		    						</div>	
		    						
		    					</div>
		    					<div id="section11" class="tab-pane tender-container">
		    						<h3 class="bid-form-title">Scope</h3>
		    						@if(sizeof($scopes) != 0)
		    						<div class="zui-wrapper2" id="myscrol">
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
		    						            <tbody id="addedDelivs" >
		    						                <tr class="addedDeliv">
		    						                    <td class="zui-sticky-col2">Strategic Brief</td>
		    						                    <input type="hidden" name="delivid" value="{{ $scopes[0]->deliverables_id	 }}">
		    						                    <td class="td "><textarea class="hayt" name="strategic_details" placeholder="Enter details here">@if($scopes[0]->strategic_brief) {{ $scopes[0]->strategic_brief }} @endif</textarea></td>
		    						                    <td class="td">
		    						                    	<div class="col-sm-12">
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" @if (strpos($scopes[0]['strategic_raci'],'R')!==false) checked  @endif name="strategic_raci[]" value="R"><span class="label-text">R</span>
		    						                    			</label>
		    						                    		</div>
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" @if (strpos($scopes[0]['strategic_raci'],'A')!==false) checked  @endif name="strategic_raci[]" value="A"><span class="label-text">A</span>
		    						                    			</label>
		    						                    		</div>
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" @if (strpos($scopes[0]['strategic_raci'],'C')!==false) checked  @endif name="strategic_raci[]" value="C"><span class="label-text">C</span>
		    						                    			</label>
		    						                    		</div>
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" @if (strpos($scopes[0]['strategic_raci'],'I')!==false) checked  @endif name="strategic_raci[]" value="I"><span class="label-text">I</span>
		    						                    			</label>
		    						                    		</div>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if (strpos($scopes[0]['strategic_num'],'0')!==false) checked  @endif name="strategic_num[]" value="0"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if (strpos($scopes[0]['strategic_num'],'1')!==false) checked  @endif name="strategic_num[]" value="1"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if (strpos($scopes[0]['strategic_num'],'2')!==false) checked  @endif name="strategic_num[]" value="2"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if (strpos($scopes[0]['strategic_num'],'3')!==false) checked  @endif name="strategic_num[]" value="3"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if (strpos($scopes[0]['strategic_num'],'4')!==false) checked  @endif name="strategic_num[]" value="4"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if (strpos($scopes[0]['strategic_num'],'5')!==false) checked  @endif name="strategic_num[]" value="5"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if (strpos($scopes[0]['strategic_num'],'6')!==false) checked  @endif name="strategic_num[]" value="6"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if (strpos($scopes[0]['strategic_num'],'7')!==false) checked  @endif name="strategic_num[]" value="7"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    
		    						                </tr>
		    						                <tr class="addedDeliv">
		    						                    <td class="zui-sticky-col2">Project Programme(Lead)</td>
		    						                    <td class="td "><textarea class="hayt" name="pprogramme_details" placeholder="Enter details here">@if ($scopes[0]['project_programme']) {{ $scopes[0]['project_programme'] }}  @endif</textarea></td>
		    						                    <td class="td">
		    						                    	<div class="col-sm-12">
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" @if (strpos($scopes[0]['pprogramme_raci'],'R')!==false) checked  @endif name="pprogramme_raci[]" value="R"><span class="label-text">R</span>
		    						                    			</label>
		    						                    		</div>
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" @if (strpos($scopes[0]['pprogramme_raci'],'A')!==false) checked  @endif name="pprogramme_raci[]" value="A"><span class="label-text">A</span>
		    						                    			</label>
		    						                    		</div>
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" @if (strpos($scopes[0]['pprogramme_raci'],'C')!==false) checked  @endif name="pprogramme_raci[]" value="C"><span class="label-text">C</span>
		    						                    			</label>
		    						                    		</div>
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" @if (strpos($scopes[0]['pprogramme_raci'],'I')!==false) checked  @endif name="pprogramme_raci[]" value="I"><span class="label-text">I</span>
		    						                    			</label>
		    						                    		</div>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if (strpos($scopes[0]['pprogramme_num'],'0')!==false) checked  @endif name="pprogramme_num[]" value="0"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if (strpos($scopes[0]['pprogramme_num'],'1')!==false) checked  @endif name="pprogramme_num[]" value="1"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if (strpos($scopes[0]['pprogramme_num'],'2')!==false) checked  @endif name="pprogramme_num[]" value="2"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if (strpos($scopes[0]['pprogramme_num'],'3')!==false) checked  @endif name="pprogramme_num[]" value="3"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if (strpos($scopes[0]['pprogramme_num'],'4')!==false) checked  @endif name="pprogramme_num[]" value="4"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if (strpos($scopes[0]['pprogramme_num'],'5')!==false) checked  @endif name="pprogramme_num[]" value="5"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if (strpos($scopes[0]['pprogramme_num'],'6')!==false) checked  @endif name="pprogramme_num[]" value="6"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if (strpos($scopes[0]['pprogramme_num'],'7')!==false) checked  @endif name="pprogramme_num[]" value="7"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                </tr>
		    						                <tr class="addedDeliv">
		    						                    <td class="zui-sticky-col2">Feasibility Study</td>
		    						                    <td class="td "><textarea class="hayt" name="feasibility_details" placeholder="Enter details here">@if ($scopes[0]['feasibility_study']) {{ $scopes[0]['feasibility_study'] }} @endif</textarea></td>
		    						                    <td class="td">
		    						                    	<div class="col-sm-12">
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" @if (strpos($scopes[0]['feasibility_raci'],'R')!==false) checked  @endif name="feasibility_raci[]" value="R"><span class="label-text">R</span>
		    						                    			</label>
		    						                    		</div>
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" @if (strpos($scopes[0]['feasibility_raci'],'A')!==false) checked  @endif name="feasibility_raci[]" value="A"><span class="label-text">A</span>
		    						                    			</label>
		    						                    		</div>
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" @if (strpos($scopes[0]['feasibility_raci'],'C')!==false) checked  @endif name="feasibility_raci[]" value="C"><span class="label-text">C</span>
		    						                    			</label>
		    						                    		</div>
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" @if (strpos($scopes[0]['feasibility_raci'],'I')!==false) checked  @endif name="feasibility_raci[]" value="I"><span class="label-text">I</span>
		    						                    			</label>
		    						                    		</div>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if (strpos($scopes[0]['feasibility_num'],'0')!==false) checked  @endif name="feasibility_num[]" value="0"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if (strpos($scopes[0]['feasibility_num'],'1')!==false) checked  @endif name="feasibility_num[]" value="1"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if (strpos($scopes[0]['feasibility_num'],'2')!==false) checked  @endif name="feasibility_num[]" value="2"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if (strpos($scopes[0]['feasibility_num'],'3')!==false) checked  @endif name="feasibility_num[]" value="3"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if (strpos($scopes[0]['feasibility_num'],'4')!==false) checked  @endif name="feasibility_num[]" value="4"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if (strpos($scopes[0]['feasibility_num'],'5')!==false) checked  @endif name="feasibility_num[]" value="5"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if (strpos($scopes[0]['feasibility_num'],'6')!==false) checked  @endif name="feasibility_num[]" value="6"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if (strpos($scopes[0]['feasibility_num'],'7')!==false) checked  @endif name="feasibility_num[]" value="7"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                </tr>
		    						                <tr class="addedDeliv">
		    						                    <td class="zui-sticky-col2">Design Responsibility<br> Matrix</td>
		    						                    <td class="td "><textarea class="hayt" name="design_details" placeholder="Enter details here">@if ($scopes[0]['design_responsibility']) {{ $scopes[0]['design_responsibility'] }}  @endif</textarea></td>
		    						                    <td class="td">
		    						                    	<div class="col-sm-12">
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" @if(strpos($scopes[0]['design_raci'],'R')!==false) checked  @endif name="design_raci[]" value="R"><span class="label-text">R</span>
		    						                    			</label>
		    						                    		</div>
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" @if(strpos($scopes[0]['design_raci'],'A')!==false) checked  @endif name="design_raci[]" value="A"><span class="label-text">A</span>
		    						                    			</label>
		    						                    		</div>
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" @if(strpos($scopes[0]['design_raci'],'C')!==false) checked  @endif name="design_raci[]" value="C"><span class="label-text">C</span>
		    						                    			</label>
		    						                    		</div>
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" @if(strpos($scopes[0]['design_raci'],'I')!==false) checked  @endif name="design_raci[]" value="I"><span class="label-text">I</span>
		    						                    			</label>
		    						                    		</div>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if(strpos($scopes[0]['design_num'],'0')!==false) checked  @endif name="design_num[]" value="0"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if(strpos($scopes[0]['design_num'],'1')!==false) checked  @endif name="design_num[]" value="1"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if(strpos($scopes[0]['design_num'],'2')!==false) checked  @endif name="design_num[]" value="2"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if(strpos($scopes[0]['design_num'],'3')!==false) checked  @endif name="design_num[]" value="3"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if(strpos($scopes[0]['design_num'],'4')!==false) checked  @endif name="design_num[]" value="4"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if(strpos($scopes[0]['design_num'],'5')!==false) checked  @endif name="design_num[]" value="5"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if(strpos($scopes[0]['design_num'],'6')!==false) checked  @endif name="design_num[]" value="6"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if(strpos($scopes[0]['design_num'],'7')!==false) checked  @endif name="design_num[]" value="7"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                </tr>
		    						                <tr class="addedDeliv">
		    						                    <td class="zui-sticky-col2">Site Information Report</td>
		    						                    <td class="td "><textarea class="hayt" name="site_details" placeholder="Enter details here">@if($scopes[0]['site_information']) {{ $scopes[0]['site_information'] }} @endif</textarea></td>
		    						                    <td class="td">
		    						                    	<div class="col-sm-12">
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" @if(strpos($scopes[0]['site_raci'],'R')!==false) checked  @endif name="site_raci[]" value="R"><span class="label-text">R</span>
		    						                    			</label>
		    						                    		</div>
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" @if(strpos($scopes[0]['site_raci'],'A')!==false) checked  @endif name="site_raci[]" value="A"><span class="label-text">A</span>
		    						                    			</label>
		    						                    		</div>
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" @if(strpos($scopes[0]['site_raci'],'C')!==false) checked  @endif name="site_raci[]" value="C"><span class="label-text">C</span>
		    						                    			</label>
		    						                    		</div>
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" @if(strpos($scopes[0]['site_raci'],'I')!==false) checked  @endif name="site_raci[]" value="I"><span class="label-text">I</span>
		    						                    			</label>
		    						                    		</div>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if(strpos($scopes[0]['site_num'],'0')!==false) checked  @endif name="site_num[]" value="0"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if(strpos($scopes[0]['site_num'],'1')!==false) checked  @endif name="site_num[]" value="1"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if(strpos($scopes[0]['site_num'],'2')!==false) checked  @endif name="site_num[]" value="2"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if(strpos($scopes[0]['site_num'],'3')!==false) checked  @endif name="site_num[]" value="3"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if(strpos($scopes[0]['site_num'],'4')!==false) checked  @endif name="site_num[]" value="4"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if(strpos($scopes[0]['site_num'],'5')!==false) checked  @endif name="site_num[]" value="5"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if(strpos($scopes[0]['site_num'],'6')!==false) checked  @endif name="site_num[]" value="6"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if(strpos($scopes[0]['site_num'],'7')!==false) checked  @endif name="site_num[]" value="7"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                </tr>
		    						                <tr class="addedDeliv">
		    						                    <td class="zui-sticky-col2">Information Exchange<br> Strategy</td>
		    						                    <td class="td "><textarea class="hayt" name="info_details" placeholder="Enter details here">@if($scopes[0]['information_exchange_strategy']) {{ $scopes[0]['information_exchange_strategy'] }}  @endif</textarea></td>
		    						                    <td class="td">
		    						                    	<div class="col-sm-12">
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" @if(strpos($scopes[0]['information_raci'],'R')!==false) checked  @endif name="info_raci[]" value="R"><span class="label-text">R</span>
		    						                    			</label>
		    						                    		</div>
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" @if(strpos($scopes[0]['information_raci'],'A')!==false) checked  @endif name="info_raci[]" value="A"><span class="label-text">A</span>
		    						                    			</label>
		    						                    		</div>
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" @if(strpos($scopes[0]['information_raci'],'C')!==false) checked  @endif name="info_raci[]" value="C"><span class="label-text">C</span>
		    						                    			</label>
		    						                    		</div>
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" @if(strpos($scopes[0]['information_raci'],'I')!==false) checked  @endif name="info_raci[]" value="I"><span class="label-text">I</span>
		    						                    			</label>
		    						                    		</div>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if(strpos($scopes[0]['information_num'],'0')!==false) checked  @endif name="info_num[]" value="0"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if(strpos($scopes[0]['information_num'],'1')!==false) checked  @endif name="info_num[]" value="1"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if(strpos($scopes[0]['information_num'],'2')!==false) checked  @endif name="info_num[]" value="2"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if(strpos($scopes[0]['information_num'],'3')!==false) checked  @endif name="info_num[]" value="3"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if(strpos($scopes[0]['information_num'],'4')!==false) checked  @endif name="info_num[]" value="4"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if(strpos($scopes[0]['information_num'],'5')!==false) checked  @endif name="info_num[]" value="5"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if(strpos($scopes[0]['information_num'],'6')!==false) checked  @endif name="info_num[]" value="6"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if(strpos($scopes[0]['information_num'],'7')!==false) checked  @endif name="info_num[]" value="7"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                </tr>
		    						                <tr class="addedDeliv">
		    						                    <td class="zui-sticky-col2">Project Brief</td>
		    						                    <td class="td "><textarea class="hayt" name="project_details" placeholder="Enter details here">@if($scopes[0]['project_brief']) {{ $scopes[0]['project_brief'] }}  @endif</textarea></td>
		    						                    <td class="td">
		    						                    	<div class="col-sm-12">
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" @if(strpos($scopes[0]['project_raci'],'R')!==false) checked  @endif name="project_raci[]" value="R"><span class="label-text">R</span>
		    						                    			</label>
		    						                    		</div>
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" @if(strpos($scopes[0]['project_raci'],'A')!==false) checked  @endif name="project_raci[]" value="A"><span class="label-text">A</span>
		    						                    			</label>
		    						                    		</div>
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" @if(strpos($scopes[0]['project_raci'],'C')!==false) checked  @endif name="project_raci[]" value="C"><span class="label-text">C</span>
		    						                    			</label>
		    						                    		</div>
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" @if(strpos($scopes[0]['project_raci'],'I')!==false) checked  @endif name="project_raci[]" value="I"><span class="label-text">I</span>
		    						                    			</label>
		    						                    		</div>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if(strpos($scopes[0]['project_num'],'0')!==false) checked  @endif name="project_num[]" value="0"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if(strpos($scopes[0]['project_num'],'1')!==false) checked  @endif name="project_num[]" value="1"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if(strpos($scopes[0]['project_num'],'2')!==false) checked  @endif name="project_num[]" value="2"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if(strpos($scopes[0]['project_num'],'3')!==false) checked  @endif name="project_num[]" value="3"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if(strpos($scopes[0]['project_num'],'4')!==false) checked  @endif name="project_num[]" value="4"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if(strpos($scopes[0]['project_num'],'5')!==false) checked  @endif name="project_num[]" value="5"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if(strpos($scopes[0]['project_num'],'6')!==false) checked  @endif name="project_num[]" value="6"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if(strpos($scopes[0]['project_num'],'7')!==false) checked  @endif name="project_num[]" value="7"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                </tr>	
		    						                <tr class="addedDeliv">
		    						                    <td class="zui-sticky-col2">Risk Assessment(Lead)</td>
		    						                    <td class="td "><textarea class="hayt" name="risk_details" placeholder="Enter details here">@if($scopes[0]['risk_assessment']) {{ $scopes[0]['risk_assessment'] }}  @endif</textarea></td>
		    						                    <td class="td">
		    						                    	<div class="col-sm-12">
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" @if(strpos($scopes[0]['risk_raci'],'R')!==false) checked  @endif name="risk_raci[]" value="R"><span class="label-text">R</span>
		    						                    			</label>
		    						                    		</div>
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" @if(strpos($scopes[0]['risk_raci'],'A')!==false) checked  @endif name="risk_raci[]" value="A"><span class="label-text">A</span>
		    						                    			</label>
		    						                    		</div>
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" @if(strpos($scopes[0]['risk_raci'],'C')!==false) checked  @endif name="risk_raci[]" value="C"><span class="label-text">C</span>
		    						                    			</label>
		    						                    		</div>
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" @if(strpos($scopes[0]['risk_raci'],'I')!==false) checked  @endif name="risk_raci[]" value="I"><span class="label-text">I</span>
		    						                    			</label>
		    						                    		</div>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if(strpos($scopes[0]['risk_num'],'0')!==false) checked  @endif name="risk_num[]" value="0"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if(strpos($scopes[0]['risk_num'],'1')!==false) checked  @endif name="risk_num[]" value="1"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if(strpos($scopes[0]['risk_num'],'2')!==false) checked  @endif name="risk_num[]" value="2"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if(strpos($scopes[0]['risk_num'],'3')!==false) checked  @endif name="risk_num[]" value="3"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if(strpos($scopes[0]['risk_num'],'4')!==false) checked  @endif name="risk_num[]" value="4"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if(strpos($scopes[0]['risk_num'],'5')!==false) checked  @endif name="risk_num[]" value="5"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if(strpos($scopes[0]['risk_num'],'6')!==false) checked  @endif name="risk_num[]" value="6"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if(strpos($scopes[0]['risk_num'],'7')!==false) checked  @endif name="risk_num[]" value="7"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                </tr>
		    						                 <tr class="addedDeliv">
		    						                    <td class="zui-sticky-col2">Handover Strategy(Lead)</td>
		    						                    <td class="td "><textarea class="hayt" name="hand_details" placeholder="Enter details here">@if($scopes[0]['handover_strategy']) {{ $scopes[0]['handover_strategy'] }} @endif</textarea></td>
		    						                    <td class="td">
		    						                    	<div class="col-sm-12">
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" @if(strpos($scopes[0]['handover_raci'],'R')!==false) checked  @endif name="hand_raci[]" value="R"><span class="label-text">R</span>
		    						                    			</label>
		    						                    		</div>
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" @if(strpos($scopes[0]['handover_raci'],'A')!==false) checked  @endif name="hand_raci[]" value="A"><span class="label-text">A</span>
		    						                    			</label>
		    						                    		</div>
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" @if(strpos($scopes[0]['handover_raci'],'C')!==false) checked  @endif name="hand_raci[]" value="C"><span class="label-text">C</span>
		    						                    			</label>
		    						                    		</div>
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" @if(strpos($scopes[0]['handover_raci'],'I')!==false) checked  @endif name="hand_raci[]" value="I"><span class="label-text">I</span>
		    						                    			</label>
		    						                    		</div>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if(strpos($scopes[0]['handover_num'],'0')!==false) checked  @endif name="hand_num[]" value="0"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if(strpos($scopes[0]['handover_num'],'1')!==false) checked  @endif name="hand_num[]" value="1"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if(strpos($scopes[0]['handover_num'],'2')!==false) checked  @endif name="hand_num[]" value="2"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if(strpos($scopes[0]['handover_num'],'3')!==false) checked  @endif name="hand_num[]" value="3"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if(strpos($scopes[0]['handover_num'],'4')!==false) checked  @endif name="hand_num[]" value="4"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if(strpos($scopes[0]['handover_num'],'5')!==false) checked  @endif name="hand_num[]" value="5"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if(strpos($scopes[0]['handover_num'],'6')!==false) checked  @endif name="hand_num[]" value="6"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if(strpos($scopes[0]['handover_num'],'7')!==false) checked  @endif name="hand_num[]" value="7"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                </tr>
		    						                 <tr class="addedDeliv">
		    						                    <td class="zui-sticky-col2">Project Execution Plan</td>
		    						                    <td class="td "><textarea class="hayt" name="execution_details" placeholder="Enter details here">@if($scopes[0]['project_execution_plan']) {{ $scopes[0]['project_execution_plan'] }}  @endif</textarea></td>
		    						                    <td class="td">
		    						                    	<div class="col-sm-12">
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" @if(strpos($scopes[0]['execution_raci'],'R')!==false) checked  @endif name="execution_raci[]" value="R"><span class="label-text">R</span>
		    						                    			</label>
		    						                    		</div>
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" @if(strpos($scopes[0]['execution_raci'],'A')!==false) checked  @endif name="execution_raci[]" value="A"><span class="label-text">A</span>
		    						                    			</label>
		    						                    		</div>
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" @if(strpos($scopes[0]['execution_raci'],'C')!==false) checked  @endif name="execution_raci[]" value="C"><span class="label-text">C</span>
		    						                    			</label>
		    						                    		</div>
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" @if(strpos($scopes[0]['execution_raci'],'I')!==false) checked  @endif name="execution_raci[]" value="I"><span class="label-text">I</span>
		    						                    			</label>
		    						                    		</div>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if(strpos($scopes[0]['execution_num'],'0')!==false) checked  @endif name="execution_num[]" value="0"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if(strpos($scopes[0]['execution_num'],'1')!==false) checked  @endif name="execution_num[]" value="1"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if(strpos($scopes[0]['execution_num'],'2')!==false) checked  @endif name="execution_num[]" value="2"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if(strpos($scopes[0]['execution_num'],'3')!==false) checked  @endif name="execution_num[]" value="3"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if(strpos($scopes[0]['execution_num'],'4')!==false) checked  @endif name="execution_num[]" value="4"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if(strpos($scopes[0]['execution_num'],'5')!==false) checked  @endif name="execution_num[]" value="5"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if(strpos($scopes[0]['execution_num'],'6')!==false) checked  @endif name="execution_num[]" value="6"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if(strpos($scopes[0]['execution_num'],'7')!==false) checked  @endif name="execution_num[]" value="7"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                </tr>
		    						                <tr class="addedDeliv">
		    						                    <td class="zui-sticky-col2">Design Proposals from<br> Design Team Members</td>
		    						                    <td class="td "><textarea class="hayt" name="proposal_details" placeholder="Enter details here">@if($scopes[0]['design_proposal']) {{ $scopes[0]['design_proposal'] }}  @endif</textarea></td>
		    						                    <td class="td">
		    						                    	<div class="col-sm-12">
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" @if(strpos($scopes[0]['proposal_raci'],'R')!==false) checked  @endif name="proposal_raci[]" value="R"><span class="label-text">R</span>
		    						                    			</label>
		    						                    		</div>
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" @if(strpos($scopes[0]['proposal_raci'],'A')!==false) checked  @endif name="proposal_raci[]" value="A"><span class="label-text">A</span>
		    						                    			</label>
		    						                    		</div>
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" @if(strpos($scopes[0]['proposal_raci'],'C')!==false) checked  @endif name="proposal_raci[]" value="C"><span class="label-text">C</span>
		    						                    			</label>
		    						                    		</div>
		    						                    		<div class="col-sm-3 form-check">
		    						                    			<label>
		    						                    				<input type="checkbox" @if(strpos($scopes[0]['proposal_raci'],'I')!==false) checked  @endif name="proposal_raci[]" value="I"><span class="label-text">I</span>
		    						                    			</label>
		    						                    		</div>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if(strpos($scopes[0]['proposal_num'],'0')!==false) checked  @endif name="proposal_num[]" value="0"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if(strpos($scopes[0]['proposal_num'],'1')!==false) checked  @endif name="proposal_num[]" value="1"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if(strpos($scopes[0]['proposal_num'],'2')!==false) checked  @endif name="proposal_num[]" value="2"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if(strpos($scopes[0]['proposal_num'],'3')!==false) checked  @endif name="proposal_num[]" value="3"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if(strpos($scopes[0]['proposal_num'],'4')!==false) checked  @endif name="proposal_num[]" value="4"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if(strpos($scopes[0]['proposal_num'],'5')!==false) checked  @endif name="proposal_num[]" value="5"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if(strpos($scopes[0]['proposal_num'],'6')!==false) checked  @endif name="proposal_num[]" value="6"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                    <td class="td">
		    						                    	<div class="form-check">
		    						                    		<label>
		    						                    			<input type="checkbox" @if(strpos($scopes[0]['proposal_num'],'7')!==false) checked  @endif name="proposal_num[]" value="7"><span class="label-text"></span>
		    						                    		</label>
		    						                    	</div>
		    						                    </td>
		    						                </tr>
		    						                @foreach($delivs as $deliv)
		    						                	<tr id="deliv" data-edit="yes" data-addid="{{ $deliv['added_id'] }}">
		    						                	    <td class="zui-sticky-col2"><textarea id="delivname" class="hayt named" name="named" placeholder="Enter details here">{{ $deliv['name'] }}</textarea></td>
		    						                	    <td class="td "><textarea class="hayt details" name="deliv_details" placeholder="Enter details here">{{ $deliv['details'] }}</textarea></td>
		    						                	    <td class="td">
		    						                	    	<div class="col-sm-12">
		    						                	    		<div class="col-sm-3 form-check">
		    						                	    			<label>
		    						                	    				<input type="checkbox" @if (strpos($deliv['raci'],'R')!==false) checked @else  @endif name="strat_raci[]" value="R" class="rac"><span class="label-text">R</span>
		    						                	    			</label>
		    						                	    		</div>
		    						                	    		<div class="col-sm-3 form-check">
		    						                	    			<label>
		    						                	    				<input type="checkbox" @if (strpos($deliv['raci'],'A')!==false) checked @else  @endif name="strat_raci[]" value="A" class="rac"><span class="label-text">A</span>
		    						                	    			</label>
		    						                	    		</div>
		    						                	    		<div class="col-sm-3 form-check">
		    						                	    			<label>
		    						                	    				<input type="checkbox" @if (strpos($deliv['raci'],'C')!==false) checked @else  @endif name="strat_raci[]" value="C" class="rac"><span class="label-text">C</span>
		    						                	    			</label>
		    						                	    		</div>
		    						                	    		<div class="col-sm-3 form-check">
		    						                	    			<label>
		    						                	    				<input type="checkbox" @if (strpos($deliv['raci'],'I')!==false) checked @else  @endif name="strat_raci[]" value="I" class="rac"><span class="label-text">I</span>
		    						                	    			</label>
		    						                	    		</div>
		    						                	    	</div>
		    						                	    </td>
		    						                	    <td class="td">
		    						                	    	<div class="form-check">
		    						                	    		<label>
		    						                	    			<input type="checkbox" @if (strpos($deliv['num'],'0')!==false) checked @else  @endif name="strat_num[]" value="0" class="ribanum"><span class="label-text"></span>
		    						                	    		</label>
		    						                	    	</div>
		    						                	    </td>
		    						                	    <td class="td">
		    						                	    	<div class="form-check">
		    						                	    		<label>
		    						                	    			<input type="checkbox" @if (strpos($deliv['num'],'1')!==false) checked @else  @endif name="strat_num[]" value="1" class="ribanum"><span class="label-text"></span>
		    						                	    		</label>
		    						                	    	</div>
		    						                	    </td>
		    						                	    <td class="td">
		    						                	    	<div class="form-check">
		    						                	    		<label>
		    						                	    			<input type="checkbox" @if (strpos($deliv['num'],'2')!==false) checked @else  @endif name="strat_num[]" value="2" class="ribanum"><span class="label-text"></span>
		    						                	    		</label>
		    						                	    	</div>
		    						                	    </td>
		    						                	    <td class="td">
		    						                	    	<div class="form-check">
		    						                	    		<label>
		    						                	    			<input type="checkbox" @if (strpos($deliv['num'],'3')!==false) checked @else  @endif name="strat_num[]" value="3" class="ribanum"><span class="label-text"></span>
		    						                	    		</label>
		    						                	    	</div>
		    						                	    </td>
		    						                	    <td class="td">
		    						                	    	<div class="form-check">
		    						                	    		<label>
		    						                	    			<input type="checkbox" @if (strpos($deliv['num'],'4')!==false) checked @else  @endif name="strat_num[]" value="4" class="ribanum"><span class="label-text"></span>
		    						                	    		</label>
		    						                	    	</div>
		    						                	    </td>
		    						                	    <td class="td">
		    						                	    	<div class="form-check">
		    						                	    		<label>
		    						                	    			<input type="checkbox" @if (strpos($deliv['num'],'5')!==false) checked @else  @endif name="strat_num[]" value="5" class="ribanum"><span class="label-text"></span>
		    						                	    		</label>
		    						                	    	</div>
		    						                	    </td>
		    						                	    <td class="td">
		    						                	    	<div class="form-check">
		    						                	    		<label>
		    						                	    			<input type="checkbox" @if (strpos($deliv['num'],'6')!==false) checked @else  @endif name="strat_num[]" value="6" class="ribanum"><span class="label-text"></span>
		    						                	    		</label>
		    						                	    	</div>
		    						                	    </td>
		    						                	    <td class="td">
		    						                	    	<div class="form-check">
		    						                	    		<label>
		    						                	    			<input type="checkbox" @if (strpos($deliv['num'],'7')!==false) checked @else  @endif name="strat_num[]" value="7" class="ribanum"><span class="label-text"></span>
		    						                	    		</label>
		    						                	    	</div>
		    						                	    </td>
		    						                	</tr>
		    						                @endforeach
		    						            </tbody>
		    						        </table>
		    						    </div>
		    						</div>
		    						<div class="col-sm-12">
		    							<div class="row">
		    								<div class="form-group">
		    									<button class="btn addbutton" data-scroll-to="#deliv"
        data-scroll-focus="#delivname"
        data-scroll-speed="700"
        data-scroll-offset="200" >Add</button>
		    								</div>
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
		    						<div class="zui-wrapper3" id="myscrol2" >
		    						    <div class="zui-scroller3" >
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
		    						            <tbody id="addedmeet">
		    						                <tr class="addedmeet">
		    						                    <td class="zui-sticky-col3">Pre-Application<br> Meetings</td>
		    						                    <td class="td "><textarea class="hayt3" name="pre_app_purpose" placeholder="Enter details here"></textarea></td>
		    						                    <td class="td"><textarea class="hayt3" name="pre_app_attendees" placeholder="Enter details here"></textarea></td>
		    						                    <td class="td"><input style="box-sizing: border-box;border: none;border-bottom: 2px solid #FE7235;" type="text name="pre_app_assumed_duration"></td>
		    						                    <td class="td"><input style="box-sizing: border-box;border: none;border-bottom: 2px solid #FE7235;" type="text" name="pre_app_reoccurence"></td>
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
		    						                <tr class="addedmeet">
		    						                    <td class="zui-sticky-col3">Site Visits</td>
		    						                    <td class="td "><textarea class="hayt3" name="site_visits_purpose" placeholder="Enter details here"></textarea></td>
		    						                    <td class="td"><textarea class="hayt3" name="site_visits_attendees" placeholder="Enter details here"></textarea></td>
		    						                    <td class="td"><input style="box-sizing: border-box;border: none;border-bottom: 2px solid #FE7235;" type="text" name="site_visits_assumed_duration"></td>
		    						                    <td class="td"><input style="box-sizing: border-box;border: none;border-bottom: 2px solid #FE7235;" type="text" name="site_visits_reoccurence"></td>
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
		    						                <tr class="addedmeet">
		    						                    <td class="zui-sticky-col3">Site/Project Meetings<br>(RIBA Stage 4/5)</td>
		    						                    <td class="td "><textarea class="hayt3" name="riba_purpose" placeholder="Enter details here"></textarea></td>
		    						                    <td class="td"><textarea class="hayt3" name="riba_attendees" placeholder="Enter details here"></textarea></td>
		    						                    <td class="td"><input style="box-sizing: border-box;border: none;border-bottom: 2px solid #FE7235;" type="text" name="riba_assumed_duration"></td>
		    						                    <td class="td"><input style="box-sizing: border-box;border: none;border-bottom: 2px solid #FE7235;" type="text" name="riba_reoccurence"></td>
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
		    						                <tr class="addedmeet">
		    						                    <td class="zui-sticky-col3">SC / PC Site<br> Inspection</td>
		    						                    <td class="td "><textarea class="hayt3" name="inspection_purpose" placeholder="Enter details here"></textarea></td>
		    						                    <td class="td"><textarea class="hayt3" name="inspection_attendees" placeholder="Enter details here"></textarea></td>
		    						                    <td class="td"><input style="box-sizing: border-box;border: none;border-bottom: 2px solid #FE7235;" type="text" name="inspection_assumed_duration"></td>
		    						                    <td class="td"><input style="box-sizing: border-box;border: none;border-bottom: 2px solid #FE7235;" type="text" name="inspection_reoccurence"></td>
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
		    						                @foreach($meetings as $meet)
		    						                	<tr id="meetclone" data-edit="yes" data-addid="{{ $meet['added_id'] }}">
		    						                		<td class="zui-sticky-col3"><textarea class="hayt3 name" name="name" placeholder="Enter details here">{{ $meet['name'] }}</textarea></td>
		    						                		<td class="td "><textarea class="hayt3 purpose" name="purpose" placeholder="Enter details here">{{ $meet['purpose'] }}</textarea></td>
		    						                		<td class="td"><textarea class="hayt3 attendees" name="attendees" placeholder="Enter details here">{{ $meet['attendees'] }}</textarea></td>
		    						                		<td class="td"><input style="box-sizing: border-box;border: none;border-bottom: 2px solid #FE7235;" type="text" value="{{ $meet['duration'] }} " class="duration" name="durations"></td>
		    						                		<td class="td"><input style="box-sizing: border-box;border: none;border-bottom: 2px solid #FE7235;" type="text" value="{{ $meet['reoccurence'] }}" class="reoccurence" name="reoccurences"></td>
		    						                		<td class="td">
		    						                			<div class="form-check">
		    						                				<label>
		    						                					<input type="checkbox" @if(strpos($meet['arrange'],'Arrange')!==false) checked @endif class="arrange" name="arrange[]" value="Arrange"><span class="label-text"></span>
		    						                				</label>
		    						                			</div>
		    						                		</td>
		    						                		<td class="td">
		    						                			<div class="form-check">
		    						                				<label>
		    						                					<input type="checkbox" @if(strpos($meet['arrange'],'Attend')!==false) checked @endif class="arrange" name="arrange[]" value="Attend"><span class="label-text"></span>
		    						                				</label>
		    						                			</div>
		    						                		</td>
		    						                		<td class="td">
		    						                			<div class="form-check">
		    						                				<label>
		    						                					<input type="checkbox" @if(strpos($meet['arrange'],'Minute')!==false) checked @endif class="arrange" name="arrange[]" value="Minute"><span class="label-text"></span>
		    						                				</label>
		    						                			</div>
		    						                		</td>
		    						                		<td class="td">
		    						                			<div class="form-check">
		    						                				<label>
		    						                					<input type="checkbox" @if(strpos($meet['num'],'0')!==false) checked @endif name="num[]" class="meetnum" value="0"><span class="label-text"></span>
		    						                				</label>
		    						                			</div>
		    						                		</td>
		    						                		<td class="td">
		    						                			<div class="form-check">
		    						                				<label>
		    						                					<input type="checkbox" @if(strpos($meet['num'],'1')!==false) checked @endif name="num[]" class="meetnum" value="1"><span class="label-text"></span>
		    						                				</label>
		    						                			</div>
		    						                		</td>
		    						                		<td class="td">
		    						                			<div class="form-check">
		    						                				<label>
		    						                					<input type="checkbox" @if(strpos($meet['num'],'2')!==false) checked @endif name="num[]" class="meetnum" value="2"><span class="label-text"></span>
		    						                				</label>
		    						                			</div>
		    						                		</td>
		    						                		<td class="td">
		    						                			<div class="form-check">
		    						                				<label>
		    						                					<input type="checkbox" @if(strpos($meet['num'],'3')!==false) checked @endif name="num[]" class="meetnum" value="3"><span class="label-text"></span>
		    						                				</label>
		    						                			</div>
		    						                		</td>
		    						                		<td class="td">
		    						                			<div class="form-check">
		    						                				<label>
		    						                					<input type="checkbox" @if(strpos($meet['num'],'4')!==false) checked @endif name="num[]" class="meetnum" value="4"><span class="label-text"></span>
		    						                				</label>
		    						                			</div>
		    						                		</td>
		    						                		<td class="td">
		    						                			<div class="form-check">
		    						                				<label>
		    						                					<input type="checkbox" @if(strpos($meet['num'],'5')!==false) checked @endif name="num[]" class="meetnum" value="5"><span class="label-text"></span>
		    						                				</label>
		    						                			</div>
		    						                		</td>
		    						                		<td class="td">
		    						                			<div class="form-check">
		    						                				<label>
		    						                					<input type="checkbox" @if(strpos($meet['num'],'6')!==false) checked @endif name="num[]" class="meetnum" value="6"><span class="label-text"></span>
		    						                				</label>
		    						                			</div>
		    						                		</td>
		    						                		<td class="td">
		    						                			<div class="form-check">
		    						                				<label>
		    						                					<input type="checkbox" @if(strpos($meet['num'],'7')!==false) checked @endif name="num[]" class="meetnum" value="7"><span class="label-text"></span>
		    						                				</label>
		    						                			</div>
		    						                		</td>
		    						                	</tr>
		    						                @endforeach
		    						            </tbody>
		    						        </table>
		    						    </div>
		    						</div>
		    						<div class="col-sm-12">
		    							<div class="row">
		    								<div class="form-group">
		    									<button class="btn addbuttonMeet" data-scroll-to="#deliv"
        data-scroll-focus="#delivname"
        data-scroll-speed="700"
        data-scroll-offset="200">Add</button>
		    								</div>
		    							</div>
		    						</div>

		    						<br>
		    						<br>

		    						<div class="zui-wrapper4" id="myscrol3">
		    						    <div class="zui-scroller4">
		    						        <table class="zui-table4">
		    						            <thead>
		    						                <tr>
		    						                    <th class="zui-sticky-col4"><center>Design Considerations</center></th>
		    						                    <th style="width: 500px; max-width: 500px; min-width: 500px;">Applies to</th>
		    						                </tr>
		    						            </thead>
		    						            <tbody id="addedDesign">
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
		    						                @foreach ($designs as $des)
		    						                	<tr id="desclone" data-edit="yes" data-addid="{{ $des['added_id'] }}" >
		    						                	    <td class="zui-sticky-col4"><textarea class="hayt4 name" name="question_name" placeholder="Enter details here">{{ $des['name'] }}</textarea></td>
		    						                	    <td class="td "><textarea class="hayt4 question" name="question_one" placeholder="Enter details here">{{ $des['question'] }}</textarea></td>
		    						                	</tr>
		    						                @endforeach
		    						            </tbody>
		    						        </table>
		    						    </div>
		    						</div>
		    						<div class="col-sm-12">
		    							<div class="row">
		    								<div class="form-group">
		    									<button class="btn addbuttonDes" >Add</button>
		    								</div>
		    							</div>
		    						</div>

		    						<br><br>

		    						<br>
		    						<br>

		    						<div class="zui-wrapper5" id="myscrol4">
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
		    						            <tbody id="addedadvise">
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
																	<input type="checkbox" name="monitor_one[]" value="7"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="monitor_one[]" value="1"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="monitor_one[]" value="2"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="monitor_one[]" value="3"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="monitor_one[]" value="4"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="monitor_one[]" value="5"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="monitor_one[]" value="6"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="monitor_one[]" value="7"><span class="label-text"></span>
																</label>
															</div>
														</td>
													</tr>
													<tr>
														<td class="zui-sticky-col5">Performance of Design Team.</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="monitor_two[]" value="0"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="monitor_two[]" value="1"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="monitor_two[]" value="2"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="monitor_two[]" value="3"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="monitor_two[]" value="4"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="monitor_two[]" value="5"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="monitor_two[]" value="6"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="monitor_two[]" value="7"><span class="label-text"></span>
																</label>
															</div>
														</td>
													</tr>
													<tr>
														<td class="zui-sticky-col5">Compliance with statutory and contract requirements.</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="monitor_three[]" value="0"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="monitor_three[]" value="1"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="monitor_three[]" value="2"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="monitor_three[]" value="3"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="monitor_three[]" value="4"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="monitor_three[]" value="5"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="monitor_three[]" value="6"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="monitor_three[]" value="7"><span class="label-text"></span>
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
																	<input type="checkbox" name="collab_one[]" value="0"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="collab_one[]" value="1"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="collab_one[]" value="2"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="collab_one[]" value="3"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="collab_one[]" value="4"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="collab_one[]" value="5"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="collab_one[]" value="6"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="collab_one[]" value="7"><span class="label-text"></span>
																</label>
															</div>
														</td>
													</tr>
													<tr>
														<td class="zui-sticky-col5">Planning authority to discuss the project</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="collab_two[]" value="0"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="collab_two[]" value="1"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="collab_two[]" value="2"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="collab_two[]" value="3"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="collab_two[]" value="4"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="collab_two[]" value="5"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="collab_two[]" value="6"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="collab_two[]" value="7"><span class="label-text"></span>
																</label>
															</div>
														</td>
													</tr>
													<tr>
														<td class="zui-sticky-col5">Statutory authorities on developing design.</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="collab_three[]" value="0"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="collab_three[]" value="1"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="collab_three[]" value="2"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="collab_three[]" value="3"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="collab_three[]" value="4"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="collab_three[]" value="5"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="collab_three[]" value="6"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="collab_three[]" value="7"><span class="label-text"></span>
																</label>
															</div>
														</td>
													</tr>
													<tr>
														<td class="zui-sticky-col5">Project Manager & Employer on significant design issues. (Lead)</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="collab_four[]" value="0"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="collab_four[]" value="1"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="collab_four[]" value="2"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="collab_four[]" value="3"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="collab_four[]" value="4"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="collab_four[]" value="5"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="collab_four[]" value="6"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="collab_four[]" value="7"><span class="label-text"></span>
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
																	<input type="checkbox" name="coordinate_one[]" value="0"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="coordinate_one[]" value="1"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="coordinate_one[]" value="2"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="coordinate_one[]" value="3"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="coordinate_one[]" value="4"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="coordinate_one[]" value="5"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="coordinate_one[]" value="6"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="coordinate_one[]" value="7"><span class="label-text"></span>
																</label>
															</div>
														</td>
													</tr>
													<tr>
														<td class="zui-sticky-col5">Reviewing design information provided by contractors <br>or specialists to establish whether that information <br>can be co-ordinated and integrated with other project information.</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="coordinate_two[]" value="0"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="coordinate_two[]" value="1"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="coordinate_two[]" value="2"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="coordinate_two[]" value="3"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="coordinate_two[]" value="4"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="coordinate_two[]" value="5"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="coordinate_two[]" value="6"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="coordinate_two[]" value="7"><span class="label-text"></span>
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
																	<input type="checkbox" name="other_one[]" value="0"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="other_one[]" value="1"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="other_one[]" value="2"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="other_one[]" value="3"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="other_one[]" value="4"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="other_one[]" value="5"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="other_one[]" value="6"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="other_one[]" value="7"><span class="label-text"></span>
																</label>
															</div>
														</td>
													</tr>
													<tr>
														<td class="zui-sticky-col5">Assisting building user during initial occupation period.</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="other_two[]" value="0"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="other_two[]" value="1"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="other_two[]" value="2"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="other_two[]" value="3"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="other_two[]" value="4"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="other_two[]" value="5"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="other_two[]" value="6"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="other_two[]" value="R7"><span class="label-text"></span>
																</label>
															</div>
														</td>
													</tr>
													<tr>
														<td class="zui-sticky-col5">Review all instructions and information about the Project,<br> provided by the Employer.</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="other_three[]" value="0"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="other_three[]" value="1"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="other_three[]" value="2"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="other_three[]" value="3"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="other_three[]" value="4"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="other_three[]" value="5"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="other_three[]" value="6"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="other_three[]" value="7"><span class="label-text"></span>
																</label>
															</div>
														</td>
													</tr>
													<tr>
														<td class="zui-sticky-col5">preparing and making submissions under building acts<br> and/or regulations or other statutory requirements.</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="other_four[]" value="0"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="other_four[]" value="1"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="other_four[]" value="2"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="other_four[]" value="3"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="other_four[]" value="4"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="other_four[]" value="5"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="other_four[]" value="6"><span class="label-text"></span>
																</label>
															</div>
														</td>
														<td class="td">
															<div class="form-check">
																<label>
																	<input type="checkbox" name="other_four[]" value="7"><span class="label-text"></span>
																</label>
															</div>
														</td>
													</tr>
		    						                @foreach ($advises as $advise)
		    						                	<tr id="adviseclone" data-edit="yes" data-addid="{{ $advise['added_id'] }}">
								        				    <td class="zui-sticky-col5"><textarea class="name"  style="border-radius: 6px;
							    height: 70px;" name="question_one" placeholder="Enter details here">{{ $advise['name'] }}</textarea></td>
								        				    <td class="td">
								        				    	<div class="form-check">
								        				    		<label>
								        				    			<input type="checkbox" @if(strpos($advise['num'], '0')!==false) checked @endif name="advisenum[]" class="advisenum" value="0"><span class="label-text"></span>
								        				    		</label>
								        				    	</div>
								        				    </td>
								        				    <td class="td">
								        				    	<div class="form-check">
								        				    		<label>
								        				    			<input type="checkbox" @if(strpos($advise['num'], '1')!==false) checked @endif name="advisenum[]" class="advisenum" value="1"><span class="label-text"></span>
								        				    		</label>
								        				    	</div>
								        				    </td>
								        				    <td class="td">
								        				    	<div class="form-check">
								        				    		<label>
								        				    			<input type="checkbox" @if(strpos($advise['num'], '2')!==false) checked @endif name="advisenum[]" class="advisenum" value="2"><span class="label-text"></span>
								        				    		</label>
								        				    	</div>
								        				    </td>
								        				    <td class="td">
								        				    	<div class="form-check">
								        				    		<label>
								        				    			<input type="checkbox" @if(strpos($advise['num'], '3')!==false) checked @endif name="advisenum[]" class="advisenum" value="3"><span class="label-text"></span>
								        				    		</label>
								        				    	</div>
								        				    </td>
								        				    <td class="td">
								        				    	<div class="form-check">
								        				    		<label>
								        				    			<input type="checkbox" @if(strpos($advise['num'], '4')!==false) checked @endif name="advisenum[]" class="advisenum" value="4"><span class="label-text"></span>
								        				    		</label>
								        				    	</div>
								        				    </td>
								        				    <td class="td">
								        				    	<div class="form-check">
								        				    		<label>
								        				    			<input type="checkbox" @if(strpos($advise['num'], '5')!==false) checked @endif name="advisenum[]" class="advisenum" value="5"><span class="label-text"></span>
								        				    		</label>
								        				    	</div>
								        				    </td>
								        				    <td class="td">
								        				    	<div class="form-check">
								        				    		<label>
								        				    			<input type="checkbox" @if(strpos($advise['num'], '6')!==false) checked @endif name="advisenum[]" class="advisenum" value="6"><span class="label-text"></span>
								        				    		</label>
								        				    	</div>
								        				    </td>
								        				    <td class="td">
								        				    	<div class="form-check">
								        				    		<label>
								        				    			<input type="checkbox" @if(strpos($advise['num'], '7')!==false) checked @endif name="advisenum[]" class="advisenum" value="7"><span class="label-text"></span>
								        				    		</label>
								        				    	</div>
								        				    </td>
								        				</tr>
		    						                @endforeach
		    						            </tbody>
		    						        </table>
		    						    </div>
		    						</div>
		    						@else
			    						<div class="zui-wrapper2" id="myscrol">
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
			    						            <tbody id="addedDelivs" >
			    						                <tr class="addedDeliv">
			    						                    <td class="zui-sticky-col2">Strategic Brief</td>
			    						                    <input type="hidden" name="delivid" value="0">
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
			    						                <tr class="addedDeliv">
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
			    						                <tr class="addedDeliv">
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
			    						                <tr class="addedDeliv">
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
			    						                <tr class="addedDeliv">
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
			    						                <tr class="addedDeliv">
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
			    						                <tr class="addedDeliv">
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
			    						                <tr class="addedDeliv">
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
			    						                 <tr class="addedDeliv">
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
			    						                 <tr class="addedDeliv">
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
			    						                <tr class="addedDeliv">
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
			    						                @foreach($delivs as $deliv)
			    						                	<tr id="deliv" data-edit="yes" data-addid="{{ $deliv['added_id'] }}">
			    						                	    <td class="zui-sticky-col2"><textarea id="delivname" class="hayt named" name="named" placeholder="Enter details here">{{ $deliv['name'] }}</textarea></td>
			    						                	    <td class="td "><textarea class="hayt details" name="deliv_details" placeholder="Enter details here">{{ $deliv['details'] }}</textarea></td>
			    						                	    <td class="td">
			    						                	    	<div class="col-sm-12">
			    						                	    		<div class="col-sm-3 form-check">
			    						                	    			<label>
			    						                	    				<input type="checkbox" @if (strpos($deliv['raci'],'R')!==false) checked @else  @endif name="strat_raci[]" value="R" class="rac"><span class="label-text">R</span>
			    						                	    			</label>
			    						                	    		</div>
			    						                	    		<div class="col-sm-3 form-check">
			    						                	    			<label>
			    						                	    				<input type="checkbox" @if (strpos($deliv['raci'],'A')!==false) checked @else  @endif name="strat_raci[]" value="A" class="rac"><span class="label-text">A</span>
			    						                	    			</label>
			    						                	    		</div>
			    						                	    		<div class="col-sm-3 form-check">
			    						                	    			<label>
			    						                	    				<input type="checkbox" @if (strpos($deliv['raci'],'C')!==false) checked @else  @endif name="strat_raci[]" value="C" class="rac"><span class="label-text">C</span>
			    						                	    			</label>
			    						                	    		</div>
			    						                	    		<div class="col-sm-3 form-check">
			    						                	    			<label>
			    						                	    				<input type="checkbox" @if (strpos($deliv['raci'],'I')!==false) checked @else  @endif name="strat_raci[]" value="I" class="rac"><span class="label-text">I</span>
			    						                	    			</label>
			    						                	    		</div>
			    						                	    	</div>
			    						                	    </td>
			    						                	    <td class="td">
			    						                	    	<div class="form-check">
			    						                	    		<label>
			    						                	    			<input type="checkbox" @if (strpos($deliv['num'],'0')!==false) checked @else  @endif name="strat_num[]" value="0" class="ribanum"><span class="label-text"></span>
			    						                	    		</label>
			    						                	    	</div>
			    						                	    </td>
			    						                	    <td class="td">
			    						                	    	<div class="form-check">
			    						                	    		<label>
			    						                	    			<input type="checkbox" @if (strpos($deliv['num'],'1')!==false) checked @else  @endif name="strat_num[]" value="1" class="ribanum"><span class="label-text"></span>
			    						                	    		</label>
			    						                	    	</div>
			    						                	    </td>
			    						                	    <td class="td">
			    						                	    	<div class="form-check">
			    						                	    		<label>
			    						                	    			<input type="checkbox" @if (strpos($deliv['num'],'2')!==false) checked @else  @endif name="strat_num[]" value="2" class="ribanum"><span class="label-text"></span>
			    						                	    		</label>
			    						                	    	</div>
			    						                	    </td>
			    						                	    <td class="td">
			    						                	    	<div class="form-check">
			    						                	    		<label>
			    						                	    			<input type="checkbox" @if (strpos($deliv['num'],'3')!==false) checked @else  @endif name="strat_num[]" value="3" class="ribanum"><span class="label-text"></span>
			    						                	    		</label>
			    						                	    	</div>
			    						                	    </td>
			    						                	    <td class="td">
			    						                	    	<div class="form-check">
			    						                	    		<label>
			    						                	    			<input type="checkbox" @if (strpos($deliv['num'],'4')!==false) checked @else  @endif name="strat_num[]" value="4" class="ribanum"><span class="label-text"></span>
			    						                	    		</label>
			    						                	    	</div>
			    						                	    </td>
			    						                	    <td class="td">
			    						                	    	<div class="form-check">
			    						                	    		<label>
			    						                	    			<input type="checkbox" @if (strpos($deliv['num'],'5')!==false) checked @else  @endif name="strat_num[]" value="5" class="ribanum"><span class="label-text"></span>
			    						                	    		</label>
			    						                	    	</div>
			    						                	    </td>
			    						                	    <td class="td">
			    						                	    	<div class="form-check">
			    						                	    		<label>
			    						                	    			<input type="checkbox" @if (strpos($deliv['num'],'6')!==false) checked @else  @endif name="strat_num[]" value="6" class="ribanum"><span class="label-text"></span>
			    						                	    		</label>
			    						                	    	</div>
			    						                	    </td>
			    						                	    <td class="td">
			    						                	    	<div class="form-check">
			    						                	    		<label>
			    						                	    			<input type="checkbox" @if (strpos($deliv['num'],'7')!==false) checked @else  @endif name="strat_num[]" value="7" class="ribanum"><span class="label-text"></span>
			    						                	    		</label>
			    						                	    	</div>
			    						                	    </td>
			    						                	</tr>
			    						                @endforeach
			    						            </tbody>
			    						        </table>
			    						    </div>
			    						</div>
			    						<div class="col-sm-12">
			    							<div class="row">
			    								<div class="form-group">
			    									<button class="btn addbutton" data-scroll-to="#deliv"
	        data-scroll-focus="#delivname"
	        data-scroll-speed="700"
	        data-scroll-offset="200" >Add</button>
			    								</div>
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
			    						<div class="zui-wrapper3" id="myscrol2" >
			    						    <div class="zui-scroller3" >
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
			    						            <tbody id="addedmeet">
			    						                <tr class="addedmeet">
			    						                    <td class="zui-sticky-col3">Pre-Application<br> Meetings</td>
			    						                    <td class="td "><textarea class="hayt3" name="pre_app_purpose" placeholder="Enter details here"></textarea></td>
			    						                    <td class="td"><textarea class="hayt3" name="pre_app_attendees" placeholder="Enter details here"></textarea></td>
			    						                    <td class="td"><input style="box-sizing: border-box;border: none;border-bottom: 2px solid #FE7235;" type="text name="pre_app_assumed_duration"></td>
			    						                    <td class="td"><input style="box-sizing: border-box;border: none;border-bottom: 2px solid #FE7235;" type="text" name="pre_app_reoccurence"></td>
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
			    						                <tr class="addedmeet">
			    						                    <td class="zui-sticky-col3">Site Visits</td>
			    						                    <td class="td "><textarea class="hayt3" name="site_visits_purpose" placeholder="Enter details here"></textarea></td>
			    						                    <td class="td"><textarea class="hayt3" name="site_visits_attendees" placeholder="Enter details here"></textarea></td>
			    						                    <td class="td"><input style="box-sizing: border-box;border: none;border-bottom: 2px solid #FE7235;" type="text" name="site_visits_assumed_duration"></td>
			    						                    <td class="td"><input style="box-sizing: border-box;border: none;border-bottom: 2px solid #FE7235;" type="text" name="site_visits_reoccurence"></td>
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
			    						                <tr class="addedmeet">
			    						                    <td class="zui-sticky-col3">Site/Project Meetings<br>(RIBA Stage 4/5)</td>
			    						                    <td class="td "><textarea class="hayt3" name="riba_purpose" placeholder="Enter details here"></textarea></td>
			    						                    <td class="td"><textarea class="hayt3" name="riba_attendees" placeholder="Enter details here"></textarea></td>
			    						                    <td class="td"><input style="box-sizing: border-box;border: none;border-bottom: 2px solid #FE7235;" type="text" name="riba_assumed_duration"></td>
			    						                    <td class="td"><input style="box-sizing: border-box;border: none;border-bottom: 2px solid #FE7235;" type="text" name="riba_reoccurence"></td>
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
			    						                <tr class="addedmeet">
			    						                    <td class="zui-sticky-col3">SC / PC Site<br> Inspection</td>
			    						                    <td class="td "><textarea class="hayt3" name="inspection_purpose" placeholder="Enter details here"></textarea></td>
			    						                    <td class="td"><textarea class="hayt3" name="inspection_attendees" placeholder="Enter details here"></textarea></td>
			    						                    <td class="td"><input style="box-sizing: border-box;border: none;border-bottom: 2px solid #FE7235;" type="text" name="inspection_assumed_duration"></td>
			    						                    <td class="td"><input style="box-sizing: border-box;border: none;border-bottom: 2px solid #FE7235;" type="text" name="inspection_reoccurence"></td>
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
			    						                @foreach($meetings as $meet)
			    						                	<tr id="meetclone" data-edit="yes" data-addid="{{ $meet['added_id'] }}">
			    						                		<td class="zui-sticky-col3"><textarea class="hayt3 name" name="name" placeholder="Enter details here">{{ $meet['name'] }}</textarea></td>
			    						                		<td class="td "><textarea class="hayt3 purpose" name="purpose" placeholder="Enter details here">{{ $meet['purpose'] }}</textarea></td>
			    						                		<td class="td"><textarea class="hayt3 attendees" name="attendees" placeholder="Enter details here">{{ $meet['attendees'] }}</textarea></td>
			    						                		<td class="td"><input style="box-sizing: border-box;border: none;border-bottom: 2px solid #FE7235;" type="text" value="{{ $meet['duration'] }} " class="duration" name="durations"></td>
			    						                		<td class="td"><input style="box-sizing: border-box;border: none;border-bottom: 2px solid #FE7235;" type="text" value="{{ $meet['reoccurence'] }}" class="reoccurence" name="reoccurences"></td>
			    						                		<td class="td">
			    						                			<div class="form-check">
			    						                				<label>
			    						                					<input type="checkbox" @if(strpos($meet['arrange'],'Arrange')!==false) checked @endif class="arrange" name="arrange[]" value="Arrange"><span class="label-text"></span>
			    						                				</label>
			    						                			</div>
			    						                		</td>
			    						                		<td class="td">
			    						                			<div class="form-check">
			    						                				<label>
			    						                					<input type="checkbox" @if(strpos($meet['arrange'],'Attend')!==false) checked @endif class="arrange" name="arrange[]" value="Attend"><span class="label-text"></span>
			    						                				</label>
			    						                			</div>
			    						                		</td>
			    						                		<td class="td">
			    						                			<div class="form-check">
			    						                				<label>
			    						                					<input type="checkbox" @if(strpos($meet['arrange'],'Minute')!==false) checked @endif class="arrange" name="arrange[]" value="Minute"><span class="label-text"></span>
			    						                				</label>
			    						                			</div>
			    						                		</td>
			    						                		<td class="td">
			    						                			<div class="form-check">
			    						                				<label>
			    						                					<input type="checkbox" @if(strpos($meet['num'],'0')!==false) checked @endif name="num[]" class="meetnum" value="0"><span class="label-text"></span>
			    						                				</label>
			    						                			</div>
			    						                		</td>
			    						                		<td class="td">
			    						                			<div class="form-check">
			    						                				<label>
			    						                					<input type="checkbox" @if(strpos($meet['num'],'1')!==false) checked @endif name="num[]" class="meetnum" value="1"><span class="label-text"></span>
			    						                				</label>
			    						                			</div>
			    						                		</td>
			    						                		<td class="td">
			    						                			<div class="form-check">
			    						                				<label>
			    						                					<input type="checkbox" @if(strpos($meet['num'],'2')!==false) checked @endif name="num[]" class="meetnum" value="2"><span class="label-text"></span>
			    						                				</label>
			    						                			</div>
			    						                		</td>
			    						                		<td class="td">
			    						                			<div class="form-check">
			    						                				<label>
			    						                					<input type="checkbox" @if(strpos($meet['num'],'3')!==false) checked @endif name="num[]" class="meetnum" value="3"><span class="label-text"></span>
			    						                				</label>
			    						                			</div>
			    						                		</td>
			    						                		<td class="td">
			    						                			<div class="form-check">
			    						                				<label>
			    						                					<input type="checkbox" @if(strpos($meet['num'],'4')!==false) checked @endif name="num[]" class="meetnum" value="4"><span class="label-text"></span>
			    						                				</label>
			    						                			</div>
			    						                		</td>
			    						                		<td class="td">
			    						                			<div class="form-check">
			    						                				<label>
			    						                					<input type="checkbox" @if(strpos($meet['num'],'5')!==false) checked @endif name="num[]" class="meetnum" value="5"><span class="label-text"></span>
			    						                				</label>
			    						                			</div>
			    						                		</td>
			    						                		<td class="td">
			    						                			<div class="form-check">
			    						                				<label>
			    						                					<input type="checkbox" @if(strpos($meet['num'],'6')!==false) checked @endif name="num[]" class="meetnum" value="6"><span class="label-text"></span>
			    						                				</label>
			    						                			</div>
			    						                		</td>
			    						                		<td class="td">
			    						                			<div class="form-check">
			    						                				<label>
			    						                					<input type="checkbox" @if(strpos($meet['num'],'7')!==false) checked @endif name="num[]" class="meetnum" value="7"><span class="label-text"></span>
			    						                				</label>
			    						                			</div>
			    						                		</td>
			    						                	</tr>
			    						                @endforeach
			    						            </tbody>
			    						        </table>
			    						    </div>
			    						</div>
			    						<div class="col-sm-12">
			    							<div class="row">
			    								<div class="form-group">
			    									<button class="btn addbuttonMeet" data-scroll-to="#deliv"
	        data-scroll-focus="#delivname"
	        data-scroll-speed="700"
	        data-scroll-offset="200">Add</button>
			    								</div>
			    							</div>
			    						</div>

			    						<br>
			    						<br>

			    						<div class="zui-wrapper4" id="myscrol3">
			    						    <div class="zui-scroller4">
			    						        <table class="zui-table4">
			    						            <thead>
			    						                <tr>
			    						                    <th class="zui-sticky-col4"><center>Design Considerations</center></th>
			    						                    <th style="width: 500px; max-width: 500px; min-width: 500px;">Applies to</th>
			    						                </tr>
			    						            </thead>
			    						            <tbody id="addedDesign">
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
			    						                @foreach ($designs as $des)
			    						                	<tr id="desclone" data-edit="yes" data-addid="{{ $des['added_id'] }}" >
			    						                	    <td class="zui-sticky-col4"><textarea class="hayt4 name" name="question_name" placeholder="Enter details here">{{ $des['name'] }}</textarea></td>
			    						                	    <td class="td "><textarea class="hayt4 question" name="question_one" placeholder="Enter details here">{{ $des['question'] }}</textarea></td>
			    						                	</tr>
			    						                @endforeach
			    						            </tbody>
			    						        </table>
			    						    </div>
			    						</div>
			    						<div class="col-sm-12">
			    							<div class="row">
			    								<div class="form-group">
			    									<button class="btn addbuttonDes" >Add</button>
			    								</div>
			    							</div>
			    						</div>

			    						<br><br>

			    						<br>
			    						<br>

			    						<div class="zui-wrapper5" id="myscrol4">
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
			    						            <tbody id="addedadvise">
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
			    						                    			<input type="checkbox" name="monitor_one[]" value="7"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="monitor_one[]" value="1"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="monitor_one[]" value="2"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="monitor_one[]" value="3"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="monitor_one[]" value="4"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="monitor_one[]" value="5"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="monitor_one[]" value="6"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="monitor_one[]" value="7"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                </tr>
			    						                <tr>
			    						                    <td class="zui-sticky-col5">Performance of Design Team.</td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="monitor_two[]" value="0"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="monitor_two[]" value="1"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="monitor_two[]" value="2"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="monitor_two[]" value="3"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="monitor_two[]" value="4"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="monitor_two[]" value="5"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="monitor_two[]" value="6"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="monitor_two[]" value="7"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                </tr>
			    						                <tr>
			    						                    <td class="zui-sticky-col5">Compliance with statutory and contract requirements.</td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="monitor_three[]" value="0"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="monitor_three[]" value="1"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="monitor_three[]" value="2"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="monitor_three[]" value="3"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="monitor_three[]" value="4"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="monitor_three[]" value="5"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="monitor_three[]" value="6"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="monitor_three[]" value="7"><span class="label-text"></span>
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
			    						                    			<input type="checkbox" name="collab_one[]" value="0"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="collab_one[]" value="1"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="collab_one[]" value="2"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="collab_one[]" value="3"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="collab_one[]" value="4"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="collab_one[]" value="5"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="collab_one[]" value="6"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="collab_one[]" value="7"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                </tr>
			    						                <tr>
			    						                    <td class="zui-sticky-col5">Planning authority to discuss the project</td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="collab_two[]" value="0"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="collab_two[]" value="1"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="collab_two[]" value="2"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="collab_two[]" value="3"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="collab_two[]" value="4"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="collab_two[]" value="5"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="collab_two[]" value="6"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="collab_two[]" value="7"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                </tr>
			    						                <tr>
			    						                    <td class="zui-sticky-col5">Statutory authorities on developing design.</td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="collab_three[]" value="0"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="collab_three[]" value="1"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="collab_three[]" value="2"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="collab_three[]" value="3"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="collab_three[]" value="4"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="collab_three[]" value="5"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="collab_three[]" value="6"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="collab_three[]" value="7"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                </tr>
			    						                <tr>
			    						                    <td class="zui-sticky-col5">Project Manager & Employer on significant design issues. (Lead)</td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="collab_four[]" value="0"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="collab_four[]" value="1"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="collab_four[]" value="2"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="collab_four[]" value="3"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="collab_four[]" value="4"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="collab_four[]" value="5"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="collab_four[]" value="6"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="collab_four[]" value="7"><span class="label-text"></span>
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
			    						                    			<input type="checkbox" name="coordinate_one[]" value="0"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="coordinate_one[]" value="1"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="coordinate_one[]" value="2"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="coordinate_one[]" value="3"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="coordinate_one[]" value="4"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="coordinate_one[]" value="5"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="coordinate_one[]" value="6"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="coordinate_one[]" value="7"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                </tr>
			    						                <tr>
			    						                    <td class="zui-sticky-col5">Reviewing design information provided by contractors <br>or specialists to establish whether that information <br>can be co-ordinated and integrated with other project information.</td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="coordinate_two[]" value="0"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="coordinate_two[]" value="1"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="coordinate_two[]" value="2"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="coordinate_two[]" value="3"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="coordinate_two[]" value="4"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="coordinate_two[]" value="5"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="coordinate_two[]" value="6"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="coordinate_two[]" value="7"><span class="label-text"></span>
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
			    						                    			<input type="checkbox" name="other_one[]" value="0"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="other_one[]" value="1"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="other_one[]" value="2"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="other_one[]" value="3"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="other_one[]" value="4"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="other_one[]" value="5"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="other_one[]" value="6"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="other_one[]" value="7"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                </tr>
			    						                <tr>
			    						                    <td class="zui-sticky-col5">Assisting building user during initial occupation period.</td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="other_two[]" value="0"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="other_two[]" value="1"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="other_two[]" value="2"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="other_two[]" value="3"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="other_two[]" value="4"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="other_two[]" value="5"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="other_two[]" value="6"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="other_two[]" value="R7"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                </tr>
			    						                <tr>
			    						                    <td class="zui-sticky-col5">Review all instructions and information about the Project,<br> provided by the Employer.</td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="other_three[]" value="0"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="other_three[]" value="1"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="other_three[]" value="2"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="other_three[]" value="3"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="other_three[]" value="4"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="other_three[]" value="5"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="other_three[]" value="6"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="other_three[]" value="7"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                </tr>
			    						                <tr>
			    						                    <td class="zui-sticky-col5">preparing and making submissions under building acts<br> and/or regulations or other statutory requirements.</td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="other_four[]" value="0"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="other_four[]" value="1"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="other_four[]" value="2"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="other_four[]" value="3"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="other_four[]" value="4"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="other_four[]" value="5"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="other_four[]" value="6"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                    <td class="td">
			    						                    	<div class="form-check">
			    						                    		<label>
			    						                    			<input type="checkbox" name="other_four[]" value="7"><span class="label-text"></span>
			    						                    		</label>
			    						                    	</div>
			    						                    </td>
			    						                </tr>
			    						                @foreach ($advises as $advise)
			    						                	<tr id="adviseclone" data-edit="yes" data-addid="{{ $advise['added_id'] }}">
									        				    <td class="zui-sticky-col5"><textarea class="name"  style="border-radius: 6px;
								    height: 70px;" name="question_one" placeholder="Enter details here">{{ $advise['name'] }}</textarea></td>
									        				    <td class="td">
									        				    	<div class="form-check">
									        				    		<label>
									        				    			<input type="checkbox" @if(strpos($advise['num'], '0')!==false) checked @endif name="advisenum[]" class="advisenum" value="0"><span class="label-text"></span>
									        				    		</label>
									        				    	</div>
									        				    </td>
									        				    <td class="td">
									        				    	<div class="form-check">
									        				    		<label>
									        				    			<input type="checkbox" @if(strpos($advise['num'], '1')!==false) checked @endif name="advisenum[]" class="advisenum" value="1"><span class="label-text"></span>
									        				    		</label>
									        				    	</div>
									        				    </td>
									        				    <td class="td">
									        				    	<div class="form-check">
									        				    		<label>
									        				    			<input type="checkbox" @if(strpos($advise['num'], '2')!==false) checked @endif name="advisenum[]" class="advisenum" value="2"><span class="label-text"></span>
									        				    		</label>
									        				    	</div>
									        				    </td>
									        				    <td class="td">
									        				    	<div class="form-check">
									        				    		<label>
									        				    			<input type="checkbox" @if(strpos($advise['num'], '3')!==false) checked @endif name="advisenum[]" class="advisenum" value="3"><span class="label-text"></span>
									        				    		</label>
									        				    	</div>
									        				    </td>
									        				    <td class="td">
									        				    	<div class="form-check">
									        				    		<label>
									        				    			<input type="checkbox" @if(strpos($advise['num'], '4')!==false) checked @endif name="advisenum[]" class="advisenum" value="4"><span class="label-text"></span>
									        				    		</label>
									        				    	</div>
									        				    </td>
									        				    <td class="td">
									        				    	<div class="form-check">
									        				    		<label>
									        				    			<input type="checkbox" @if(strpos($advise['num'], '5')!==false) checked @endif name="advisenum[]" class="advisenum" value="5"><span class="label-text"></span>
									        				    		</label>
									        				    	</div>
									        				    </td>
									        				    <td class="td">
									        				    	<div class="form-check">
									        				    		<label>
									        				    			<input type="checkbox" @if(strpos($advise['num'], '6')!==false) checked @endif name="advisenum[]" class="advisenum" value="6"><span class="label-text"></span>
									        				    		</label>
									        				    	</div>
									        				    </td>
									        				    <td class="td">
									        				    	<div class="form-check">
									        				    		<label>
									        				    			<input type="checkbox" @if(strpos($advise['num'], '7')!==false) checked @endif name="advisenum[]" class="advisenum" value="7"><span class="label-text"></span>
									        				    		</label>
									        				    	</div>
									        				    </td>
									        				</tr>
			    						                @endforeach
			    						            </tbody>
			    						        </table>
			    						    </div>
			    						</div>
		    						@endif
		    						<div class="form-group">
    									<button class="btn addadvise" >Add</button>
		    						</div>
		    						<div class="form-group">
    									<button type="button" class="btn btn-primary" id="deliverables_save">Save</button>
		    						</div>
		    					</div>
		    					<div id="section21" class="tab-pane fade tender-container">
		    						<h3 class="bid-form-title">Appointment</h3>
		    						<form method="post">
									{{-- {!! Form::open(['action' => 'TenderController@appointmentStore', 'method' => 'POST'])!!} --}}
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
															<input type="file" class="form-control" name="form_of_appointment">
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
															<input type="text" placeholder="Enter Document Title" class="form-control" name="document[]">
														</div>
														<div class="form-group">
															<input type="file" class="form-control" name="signature_files[]" multiple>
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
														<input id="appointment_save" type="submit" name="Save" value="Save" class="btn btn-primary butsize">
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
										<div class="col-sm-12" style="padding:0;">
											<div class="form-group" >
												<div class="input-group dates" id="datepicker2" data-date-container="#datepicker2" data-date="02-2012" 
												         data-date-format="mm-yyyy">
													 <input class="form-control" name="created_data" type="text" placeholder="Select year" readonly="readonly" name="date" >	  
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
												<div class="input-group dates form-group" id="datepicker2" data-date="02-2012" data-date-format="mm-yyyy">
																 <input class="form-control" name="checked_data" type="text" readonly="readonly" name="date" >	  
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
												<div class="input-group dates form-group" id="datepicker2" data-date="02-2012" data-date-format="mm-yyyy">
																 <input class="form-control" name="approved_date" type="text" readonly="readonly" name="date" >	  
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