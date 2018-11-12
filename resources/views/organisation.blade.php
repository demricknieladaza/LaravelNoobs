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
	var org = [];
	$(document).ready(function(){
		var serv = <?php echo $services; ?>;
		var awar = <?php echo $awards; ?>;
		<?php if(count($projects) > 0 ){ ?>
			var proj = <?php echo $projects; ?>; 
		<?php }
		 else{ 
			echo "var proj = [];";
		 } ?>
		
		if(serv.length > 0){
			$.each( serv, function( key, value ) {
				$("ul#addedserv").append('<li data-myid="'+value['os_id']+'" data-id="'+key+'" onclick="editservices('+key+')">'+value['service']+'</li>');
				var newservices = {
					name: value['service'],
					dfrom: value['from'],
					duntil: value['until'],
					editable: 'true',
					myid: value['os_id']
				};
				services.push(newservices);
				// alert(services.length);
			});
		}

		if(awar.length > 0){
			$.each( awar, function( key, value ) {
				$("ul#addedawards").append('<li data-myid="'+value['oa_id']+'" data-id="'+key+'" onclick="editaward('+key+')">'+value['award_name']+'</li>');
				var newservices = {
					name: value['award_name'],
					details: value['award_details'],
					year: value['award_year'],
					editable: 'true',
					myid: value['oa_id']
				};
				awards.push(newservices);
				// alert(services.length);
			});
		}
       
		// $('#project_img_btn').click(function(){
		// 	$('#project_img').click();
		// });
		$('#change_logo_btn').click(function(){
			$('#change_logo').click();
		});
		$('#orgSave').click(function(){
			var serv = JSON.stringify(services);
			var awa = JSON.stringify(awards);
			var type = JSON.stringify(typeofuse);
			var provserv = JSON.stringify(provservices);
			var projm = JSON.stringify(projmem);
			var devchecked = [];
			jQuery("input[name='development[]']").each(function()
				{	
					if($(this).prop('checked')){
						devchecked.push($(this).val());
					}
					
				}
			);
			var dev = JSON.stringify(devchecked);
			var orgData = new FormData(document.getElementById('orgForm'));
			orgData.append('services', serv);
			orgData.append('awards', awa);
			orgData.append('typeofuse', type);
			orgData.append('provservices', provserv);
			orgData.append('projmem', projm);
			orgData.append('development', dev);
			$.ajax({
				url: '{{ url("organisationStore") }}',
				type: 'POST',
				data: orgData,
				processData: false,
				contentType: false,
				success:function(result){
					// console.log(result);
					location.reload();
				}

			});
			// console.log(orgData);
		});
		$('#orgupdate').click(function(){
			var serv = JSON.stringify(services);
			var awa = JSON.stringify(awards);
			var type = JSON.stringify(typeofuse);
			var provserv = JSON.stringify(provservices);
			var projm = JSON.stringify(projmem);
			var devchecked = [];
			jQuery("input[name='development[]']").each(function()
				{	
					if($(this).prop('checked')){
						devchecked.push($(this).val());
					}
					
				}
			);
			var dev = JSON.stringify(devchecked);
			var orgData = new FormData(document.getElementById('orgForm'));
			orgData.append('services', serv);
			orgData.append('awards', awa);
			orgData.append('typeofuse', type);
			orgData.append('provservices', provserv);
			orgData.append('projmem', projm);
			orgData.append('development', dev);
			$.ajax({
				url: '{{ url("organisationupdate") }}',
				type: 'POST',
				data: orgData,
				processData: false,
				contentType: false,
				success:function(result){
					// console.log(result);
					location.reload();
					// console.log('Updated');
				}

			});
			// console.log(orgData);
		});

		$('#saveproj').click(function(){
			var serv = JSON.stringify(services);
			var awa = JSON.stringify(awards);
			var type = JSON.stringify(typeofuse);
			var provserv = JSON.stringify(provservices);
			var projm = JSON.stringify(projmem);
			var devchecked = [];
			jQuery("input[name='development[]']").each(function()
				{	
					if($(this).prop('checked')){
						devchecked.push($(this).val());
					}
					
				}
			);
			var dev = JSON.stringify(devchecked);
			var orgData = new FormData(document.getElementById('orgForm'));
			orgData.append('services', serv);
			orgData.append('awards', awa);
			orgData.append('typeofuse', type);
			orgData.append('provservices', provserv);
			orgData.append('projmem', projm);
			orgData.append('development', dev);
			$.ajax({
				url: '{{ url("updatemyproj") }}',
				type: 'POST',
				data: orgData,
				processData: false,
				contentType: false,
				success:function(result){
					// console.log(result);
					location.reload();
					// console.log('Updated');
				}

			});
			// console.log(orgData);
		});

		$('#addproj').click(function(){
			var serv = JSON.stringify(services);
			var awa = JSON.stringify(awards);
			var type = JSON.stringify(typeofuse);
			var provserv = JSON.stringify(provservices);
			var projm = JSON.stringify(projmem);
			var devchecked = [];
			jQuery("input[name='development[]']").each(function()
				{	
					if($(this).prop('checked')){
						devchecked.push($(this).val());
					}
					
				}
			);
			var dev = JSON.stringify(devchecked);
			var orgData = new FormData(document.getElementById('orgForm'));
			orgData.append('services', serv);
			orgData.append('awards', awa);
			orgData.append('typeofuse', type);
			orgData.append('provservices', provserv);
			orgData.append('projmem', projm);
			orgData.append('development', dev);
			$.ajax({
				url: '{{ url("addproject") }}',
				type: 'POST',
				data: orgData,
				processData: false,
				contentType: false,
				success:function(result){
					// console.log(result);
					// location.reload();
					// console.log('Updated');
				}

			});
			// console.log(orgData);
		});

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
				$("ul#addedserv").append('<li data-myid="-1" data-id="'+(services.length)+'" onclick="editservices('+(services.length)+')">'+$('select[name="servicechoice"]').val()+'</li>');
				var newservices = {
					name: $('select[name="servicechoice"]').val(),
					dfrom: $('input[name="servdatefrom"]').val(),
					duntil: $('input[name="servdateuntil"]').val(),
					editable: 'false'
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
				$('ul#addedserv li[data-id="'+id+'"]').text($('select[name="servicechoice"]').val());
				services[id]['name'] = $('select[name="servicechoice"]').val();
				services[id]['dfrom'] = $('input[name="servdatefrom"]').val();
				services[id]['duntil'] = $('input[name="servdateuntil"]').val();

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
				$("ul#addedawards").append('<li data-id="'+awards.length+'" onclick="editaward('+awards.length+')">'+$('input[name="award_name"]').val()+'</li>');
				var newaward = {
					name: $('input[name="award_name"]').val(),
					details: $('input[name="award_details"]').val(),
					year: $('select[name="year_awarded"]').val(),
					editable: 'false'
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
				$('ul#addedawards li[data-id="'+id+'"]').text($('input[name="award_name"]').val());
				awards[id]['name'] = $('input[name="award_name"]').val();
				awards[id]['details'] = $('input[name="award_details"]').val();
				awards[id]['year'] = $('select[name="year_awarded"]').val();
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
				$("ul#addedtype").append('<li data-id="'+typeofuse.length+'" onclick="edittype('+typeofuse.length+')">'+$('select[name="type_name"]').val()+'</li>');
				var newtype = {
					name: $('select[name="type_name"]').val(),
					area:$('input[name="area"]').val(),
					units: $('input[name="units"]').val(),
					editable: 'false'
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
				$('ul#addedtype li[data-id="'+id+'"]').text($('select[name="type_name"]').val());
				typeofuse[id]['name'] = $('select[name="type_name"]').val();
				typeofuse[id]['area'] = $('input[name="area"]').val();
				typeofuse[id]['units'] = $('input[name="units"]').val();

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
				$("ul#addedprovserv").append('<li data-id="'+provservices.length+'" onclick="editprovservices('+provservices.length+')">'+$('select[name="provservicechoice"]').val()+'</li>');
				var newservices = {
					name: $('select[name="provservicechoice"]').val(),
					dfrom: $('input[name="provdfrom"]').val(),
					duntil: $('input[name="provduntil"]').val(),
					editable: 'false'
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
				$('ul#addedprovserv li[data-id="'+id+'"]').text($('select[name="provservicechoice"]').val());
				provservices[id]['name'] = $('select[name="provservicechoice"]').val();
				provservices[id]['dfrom'] = $('input[name="provdfrom"]').val();
				provservices[id]['duntil'] = $('input[name="provduntil"]').val();

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
				$("ul#addedprojmem").append('<li data-id="'+projmem.length+'" onclick="editprojmem('+projmem.length+')">'+$('select[name="member"]').val()+'</li>');
				var newservices = {
					name: $('select[name="member"]').val(),
					compname: $('input[name="compname"]').val(),
					editable: 'false'
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
				$('ul#addedprojmem li[data-id="'+id+'"]').text($('select[name="member"]').val());
				projmem[id]['name'] = $('select[name="member"]').val();
				projmem[id]['compname']	= $('input[name="compname"]').val();

				$('select[name="member"]').val('');
				$('input[name="compname"]').val('');
				$('#edtprojmem').css('display','none');
				$('#addprojmem').css('display','block');
			}
			// console.log(services);
		});

		$('.editproj').click(function(){
			var projid = $(this).attr('data-id');
			$('#refre').css('display','none');
			$.ajax({
				url: '{{ url("getproj") }}'+'/'+projid,
				type: 'get',
				processData: false,
				contentType: false,
				success:function(result){
					
					$('#refre').load(document.URL +  ' #refre *')
					// $('#refre').ready(function(){
					// 	nalitysaproject(result);
					// });
					setTimeout(function() { nalitysaproject(result); }, 2000);
					// location.reload();
					// alert(url);
				}

			});
		});

	});

	function nalitysaproject(proj){
		console.log(proj);
		typeofuse = [];
		provservices = [];
		projmem = [];
		$('#descript').val('');
		$('input:checked').removeAttr('checked');
		$('input[name="project_title"]').val(proj['proj'][0]['project_title']);
		$('input[name="project_value"]').val(proj['proj'][0]['project_value']);
		$('input[name="projidedit"]').val(proj['proj'][0]['op_id']);
		$('#saveproj').css('display','block');
		$('#addproj').css('display','none');
		$('#refre').css('display','block');
		$('#image_preview').html('');
		if(proj['use'].length > 0){
			$.each( proj['use'], function( key, value ) {
				$("ul#addedtype").append('<li data-myid="'+value['opu_id']+'" data-id="'+key+'" onclick="edittype('+key+')">'+value['service']+'</li>');
				var newservices = {
					name: value['service'],
					area: value['area'],
					units: value['units'],
					editable: 'true',
					myid: value['opu_id']
				};
				typeofuse.push(newservices);
				// alert(services.length);
			});
		}
		if(proj['serv'].length > 0){
			$.each( proj['serv'], function( key, value ) {
				$("ul#addedprovserv").append('<li data-myid="'+value['ops_id']+'" data-id="'+key+'" onclick="editprovservices('+key+')">'+value['service']+'</li>');
				var newservices = {
					name: value['service'],
					dfrom: value['from'],
					duntil: value['until'],
					editable: 'true',
					myid: value['ops_id']
				};
				provservices.push(newservices);
				// alert(services.length);
			});
		}
		if(proj['team'].length > 0){
			$.each( proj['team'], function( key, value ) {
				$("ul#addedprojmem").append('<li data-myid="'+value['opt_id']+'" data-id="'+key+'" onclick="editprojmem('+key+')">'+value['position']+'</li>');
				var newservices = {
					name: value['position'],
					compname: value['company'],
					editable: 'true',
					myid: value['opt_id']
				};
				projmem.push(newservices);
				// alert(services.length);
			});
		}
		var arr = proj['proj'][0]['type_of_development'].split(',');
		$.each(arr, function(k,v)
		{
			$('input[name="development[]"][value="'+v+'"]').prop("checked",true);
		});
		$('#descript').val(proj['proj'][0]['project_description']);
		var img = proj['proj'][0]['project_images'].split('/');
		$.each(img, function(k,v)
		{
			var sors = '{{asset('storage/organisation/projectImages' )}}'+'/'+v;
			$('#image_preview').append("<div style='padding: 5px' class='col-sm-3'><img width='100px' height='100px' src='"+sors+"'></div>");
			// alert();
		});
	}

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
		$('#edttype').css('display','inline');
		$('#edttype').attr('data-id',id);
		$('#addtype').css('display','none');
	}

	function editprovservices(id){
		// console.log(services[id]);
		$('select[name="provservicechoice"]').val(provservices[id]['name']);
		$('input[name="provdfrom"]').val(provservices[id]['dfrom']);
		$('input[name="provduntil"]').val(provservices[id]['duntil']);
		$('#edtprovservices').css('display','inline');
		$('#edtprovservices').attr('data-id',id);
		$('#addprovservices').css('display','none');
	}

	function editprojmem(id){
		// console.log(services[id]);
		$('select[name="member"]').val(projmem[id]['name']);
		$('input[name="compname"]').val(projmem[id]['compname']);
		$('#edtprojmem').css('display','inline');
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
	function preview_image() 
		{
			$('#image_preview').html('');
			var total_file=document.getElementById("project_img").files.length;
			var filesni=document.getElementById("project_img").files;

			// $('#image_preview').load(document.URL +  ' #image_preview');
			if(total_file >= 10){
				alert("maximum upload file is 10 images only!");
			}
			else{
				for(var i=0;i<total_file;i++)
				{
					// console.log(filesni[i]['name']);
					// alert(total_file);
					$('#image_preview').append("<div style='padding: 5px' class='col-sm-3'><img width='100px' height='100px' src='"+URL.createObjectURL(event.target.files[i])+"'></div>");
				}
			}
			
			//<a class='alo' data-id='"+filesni[i]['name']+"'>Remove</a>
			// console.log(filesniss);
			// console.log(filesni);
			// runjq();
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
										<a data-toggle="collapse" data-parent="#accordion2" href="#collapse7">Organisation<span class="pull-right caret"></span></a>
									</h4>
								</div>
								<form id="orgForm">
								<div id="collapse7" class="panel-collapse collapse in">
									<div class="panel-body">
										<div class="row">	
											<div class="col-sm-9">				
												<table class="table table-striped table-hover c-info-table">
													<tr>
														<td width="35%">Company Name</td>
														<td><input type="text" @if (count($org)==1) value="{{ $org[0]->company_name }}" @endif name="company_name" class="form-control" placeholder="British Land"></td>
													</tr>
													<tr>
														<td>Registered Office Address</td>
														<td><input type="text" @if (count($org)==1) value="{{ $org[0]->office_address }}" @endif name="office_address" class="form-control" placeholder="100 Sample Road, London, W1 23Y, United Kingdom"></td>
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
																<button type="button" id="addservices" class="btn btn-warning sakto" style="margin-top: 10px;"><span class="sakto2"><i class="fa fa-plus"></i> Add another service</span></button>
																<button type="button" id="edtservices" class="btn btn-warning sakto" style="display:none; margin-top: 10px;"><span class="sakto2"><i class="fa fa-plus"></i> Save</span></button>
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
																<button id="addaward" type="button" class="btn btn-warning sakto" style="margin-top: 10px;"><span class="sakto2"><i class="fa fa-plus"></i> Add another award</span></button>
																<button id="edtaward" type="button" class="btn btn-warning sakto" style="display:none;margin-top: 10px;"><span class="sakto2"><i class="fa fa-plus"></i> Save</span></button>
															</td>
														</tr>
													</table>
												</td>
											</tr>
											<tr>
												<td>
													<div class="col-sm-12" style="padding: 0;">Track Record</div>
													<div class="col-sm-12" style="padding: 0;">
														<ul id="addedtrack" style="list-style: none;">
															@if (count($projects) > 0)
																@foreach ($projects as $proj)
																	<li data-id="{{$proj->op_id}}" class="editproj">{{$proj->project_title}}
																	</li>
																@endforeach
															@endif
															

															<li>
																<ul id="refre" style="">
																	<li>Type of use
																		<ul id="addedtype">
																		</ul>
																	</li>
																	<li>Service provided
																		<ul id="addedprovserv">
																		</ul>
																	</li>
																	<li>Project team
																		<ul id="addedprojmem">
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
														{{-- <label>Type of use</label>
														<ul id="addedtype" style="list-style: none;">
														</ul>
														<label>Service Provided</label>
														<ul id="addedprovserv" style="list-style: none;">
														</ul>
														<label>Project Team Member</label>
														<ul id="addedprojmem" style="list-style: none;">
														</ul> --}}
													</div>
												</td>
												<td>
													<div class="form-group">
														<input type="text" name="project_title" class="form-control" placeholder="Enter Project Title">
														<input type="hidden" name="projidedit" >
													</div>
													<div class="form-group">
														<input type="text" name="project_value" class="form-control" placeholder="Enter Project Value">
													</div>
													<div class="form-group">
														<div class="col-sm-6" style="padding: 0;">
															<select name="type_name" class="form-control sel" style="width: 100%;">
																<option value="" disabled selected>Select service</option> 
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
														<button id="addtype" type="button" class="btn btn-warning sakto" style="margin-top: 10px;"><span class="sakto2"><i class="fa fa-plus"></i> Add another type of use</span></button>
													</div>
													<div class="form-group">
														<button id="edttype" type="button" class="btn btn-warning sakto" style="display:none;margin-top: 10px;"><span class="sakto2"><i class="fa fa-plus"></i> Save</span></button>
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
											<button id="addprovservices" type="button" class="btn btn-warning sakto" style="margin-top: 10px;"><span class="sakto2"><i class="fa fa-plus"></i> Add another service</span></button>
											<button id="edtprovservices" type="button" class="btn btn-warning sakto" style="display:none;margin-top: 10px;"><span class="sakto2"><i class="fa fa-plus"></i> Save</span></button>
										</div>

										<label>Type of Development</label>

										<div class="form-group">
											<div class="col-sm-12" style="padding: 0;">
												<input type="checkbox" name="development[]" class="filled-in" id="new" value="New built"> <label for="new"> New built</label>
											</div>
											<div class="col-sm-12" style="padding: 0;">
												<input type="checkbox" name="development[]" class="filled-in" id="refurbishment" value="Refurbishment"> <label for="refurbishment"> Refurbishment</label>
											</div>
											<div class="col-sm-12" style="padding: 0;">
												<input type="checkbox" name="development[]" class="filled-in" id="demolition" value="Demolition"> <label for="demolition"> Demolition</label>
											</div>
										</div>
										<div class="form-group">
											<textarea id="descript" class="form-control" name="project_description" rows="10" placeholder="Enter Project Description"></textarea>
										</div>
										<div class="form-group">
											<div id="image_preview"></div>
											<button onclick="document.getElementById('project_img').click();" id="project_img_btn" type="button" class="btn btn-warning sakto"><span class="sakto2"><i class="fa fa-plus"></i> Upload Images</span></button>
											<input id="project_img" style="display: none;" type="file" accept="image/*" class="btn btn-warning sakto" name="project_images[]" onchange="preview_image();" multiple/>
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
											<button id="addprojmem" type="button" class="btn btn-warning sakto" style="margin-top: 10px;"><span class="sakto2"><i class="fa fa-plus"></i> Add another project team member</span></button>
											<button id="edtprojmem" type="button" class="btn btn-warning sakto"style="margin-top: 10px;display: none;" ><span class="sakto2"><i class="fa fa-plus"></i> Save</span></button>
										</div>
										<div class="form-group">
											<button type="button" id="saveproj" class="btn btn-warning sakto" style="display: none;"><span class="sakto2"> Save</span></button>
										</div>
										<div class="form-group">
											<input type="hidden" name="org_id" @if (count($org)==1) value="{{$org[0]['org_id']}}" @endif >
											<button type="button" id="addproj"class="btn btn-warning sakto save_current"><span class="sakto2"><i class="fa fa-plus"></i> Add another project</span></button>	
										</div>
									</td>
								</tr>											
							</table>
						
						</div>

						<div class="col-sm-3 company-quick-details">
							<p><img src="{{ url('images/logo-british.jpg') }}"></p>
							<p><button id="change_logo_btn" type="button" class="btn btn-warning sakto">Change Logo</button></p>
							<input type="file" id="change_logo" name="logo_img" style="display: none;"/>
							@if (count($org)==1)
								<button type="button" id="orgupdate" class="btn btn-warning sakto"><span class="sakto2"> Save Organisation</span></button>	
							@else
								<input type="button" id='orgSave' class="btn btn-primary" name='Save' value="Save"/>
							@endif
						</div>
					</form>
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


