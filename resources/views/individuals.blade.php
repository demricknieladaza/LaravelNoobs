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
	$(document).ready(function() {
  if (window.File && window.FileList && window.FileReader) {
    $("#file4").on("change", function(e) {
      var file4 = e.target.files,
        filesLength = file4.length;
      for (var i = 0; i < filesLength; i++) {
        var f = file4[i]
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;
          $("<span class=\"pip\">" +
            "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
            "<br/><span class=\"remove\">Remove image</span>" +
            "</span>").insertAfter("#file4");
          $(".remove").click(function(){
            $(this).parent(".pip").remove();
          });
          
          // Old code here
          /*$("<img></img>", {
            class: "imageThumb",
            src: e.target.result,
            title: file.name + " | Click to remove"
          }).insertAfter("#files").click(function(){$(this).remove();});*/
          
        });
        fileReader.readAsDataURL(f);
      }
    });
  } else {
    alert("Your browser doesn't support to File API")
  }
});
</script>

<script type="text/javascript">
	$(document).ready(function() {
  if (window.File && window.FileList && window.FileReader) {
    $("#file3").on("change", function(e) {
      var file3 = e.target.files,
        filesLength = file3.length;
      for (var i = 0; i < filesLength; i++) {
        var f = file3[i]
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;
          $("<span class=\"pip\">" +
            "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
            "<br/><span class=\"remove\">Remove image</span>" +
            "</span>").insertAfter("#file3");
          $(".remove").click(function(){
            $(this).parent(".pip").remove();
          });
          
          // Old code here
          /*$("<img></img>", {
            class: "imageThumb",
            src: e.target.result,
            title: file.name + " | Click to remove"
          }).insertAfter("#files").click(function(){$(this).remove();});*/
          
        });
        fileReader.readAsDataURL(f);
      }
    });
  } else {
    alert("Your browser doesn't support to File API")
  }
});
</script>

<script type="text/javascript">
	$(document).ready(function() {
  if (window.File && window.FileList && window.FileReader) {
    $("#file2").on("change", function(e) {
      var file2 = e.target.files,
        filesLength = file2.length;
      for (var i = 0; i < filesLength; i++) {
        var f = file2[i]
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;
          $("<span class=\"pip\">" +
            "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
            "<br/><span class=\"remove\">Remove image</span>" +
            "</span>").insertAfter("#file2");
          $(".remove").click(function(){
            $(this).parent(".pip").remove();
          });
          
          // Old code here
          /*$("<img></img>", {
            class: "imageThumb",
            src: e.target.result,
            title: file.name + " | Click to remove"
          }).insertAfter("#files").click(function(){$(this).remove();});*/
          
        });
        fileReader.readAsDataURL(f);
      }
    });
  } else {
    alert("Your browser doesn't support to File API")
  }
});
</script>

<script type="text/javascript">
	$(document).ready(function() {
	  if (window.File && window.FileList && window.FileReader) {
	    $("#file1").on("change", function(e) {
	      var file1 = e.target.files,
	        filesLength = file1.length;
	      for (var i = 0; i < filesLength; i++) {
	        var f = file1[i]
	        var fileReader = new FileReader();
	        fileReader.onload = (function(e) {
	          var file = e.target;
	          $("<span class=\"pip\">" +
	            "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
	            "<br/><span class=\"remove\">Remove image</span>" +
	            "</span>").insertAfter("#file1");
	          $(".remove").click(function(){
	            $(this).parent(".pip").remove();
	          });
	          
	          // Old code here
	          /*$("<img></img>", {
	            class: "imageThumb",
	            src: e.target.result,
	            title: file.name + " | Click to remove"
	          }).insertAfter("#files").click(function(){$(this).remove();});*/
	          
	        });
	        fileReader.readAsDataURL(f);
	      }
	    });
	  } else {
	    alert("Your browser doesn't support to File API")
	  }
	});
</script>

<script type="text/javascript">
	$(document).ready(function() {
	  if (window.File && window.FileList && window.FileReader) {
	    $("#files").on("change", function(e) {
	      var files = e.target.files,
	        filesLength = files.length;
	      for (var i = 0; i < filesLength; i++) {
	        var f = files[i]
	        var fileReader = new FileReader();
	        fileReader.onload = (function(e) {
	          var file = e.target;
	          $("<span class=\"pip\">" +
	            "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
	            "<br/><span class=\"remove\">Remove image</span>" +
	            "</span>").insertAfter("#files");
	          $(".remove").click(function(){
	            $(this).parent(".pip").remove();
	          });
	          
	          // Old code here
	          /*$("<img></img>", {
	            class: "imageThumb",
	            src: e.target.result,
	            title: file.name + " | Click to remove"
	          }).insertAfter("#files").click(function(){$(this).remove();});*/
	          
	        });
	        fileReader.readAsDataURL(f);
	      }
	    });
	  } else {
	    alert("Your browser doesn't support to File API")
	  }
	});
</script>
<script type="text/javascript">
	$(document).ready(function() {
	    var max_fields      = 10; //maximum input boxes allowed
	    var wrapper         = $("#indiaddedaward"); //Fields wrapper
	    var add_button      = $("#indiaddaward"); //Add button ID
	    var yir 			= "<?php $cur_year = date('Y');$years = [];for ($i=0; $i<=50; $i++) { array_push($years,$cur_year--);}foreach ($years as $year ) {echo "<option value='".$year."'>".$year."</option>"; }?>";
	    
	    var x = 1; //initlal text box count
	    $(add_button).click(function(e){ //on add input button click
	        e.preventDefault();
	        if(x < max_fields){ //max input box allowed
	            x++; //text box increment
	            $(wrapper).append('<div><div class="form-group"><input type="text" name="" class="form-control" placeholder="Enter name of award"></div><div class="form-group"><input type="text" name="" class="form-control" placeholder="Awarded by"></div><div class="form-group"><textarea cols="4" rows="5" id="textareaap" maxlength="3000" placeholder="Enter details"></textarea><p style="color: grey;"><span id="rchars1" >3000</span>/3000 words remaining</p></div><div class="form-group"><select name="yeard_awards" class="form-control"><option value="">Year awarded</option>'+yir+'</select></div><a href="#" class="remove_field">Remove</a></div>'); //add input box
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
	    var wrapper         = $("#addeddegree"); //Fields wrapper
	    var add_button      = $("#adddegree"); //Add button ID
	    var sele           	= "<?php $degree = array("BA","BSA","BAcy","BAcc","B.A.Sc.","BArch ","BBA","BCE","BCom","BCA","BDes","B.Des.Corp","B.Des.Arch","BEng","BEC","BEE","BFA","B.Hlth.Sci.","BIT","BIGS","LLB","BLAS","BMath","BME","B.P.E.S.S","B.Res.Ec","BSc","BS.EOH","BSLS","BTech","BVA","MA","MBA","MCom","BCA","MEM","MEDM","MFA","MIS","LLM","MLA","MPS","MPA","MPH","MSc","MSF","MTech","DLP","Dr.mph.","PhD","PsyD","DrPH","DSc");sort($degree,SORT_NATURAL | SORT_FLAG_CASE);foreach ($degree as $key) {echo "<option value='".$key."'>".$key."</option>";}?>";
	    var yir 			= "<?php $cur_year = date('Y');$years = [];for ($i=0; $i<=50; $i++) { array_push($years,$cur_year--);}foreach ($years as $year ) {echo "<option value='".$year."'>".$year."</option>"; }?>";
	    
	    var x = 1; //initlal text box count
	    $(add_button).click(function(e){ //on add input button click
	        e.preventDefault();
	        if(x < max_fields){ //max input box allowed
	            x++; //text box increment
	            $(wrapper).append('<div><div class="form-group"><select name="" class="form-control"><option value="" disabled selected>Select degree</option>'+sele+'<option>Other</option></select></div><div class="form-group"><input type="text" name="" class="form-control" placeholder="Name of Degree"></div><select name="degree_year" class="form-control"> <option value="">Year awarded</option>'+yir+'</select><a href="#" class="remove_field">Remove</a></div>'); //add input box
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
	    var wrapper         = $("#addedaccreditation"); //Fields wrapper
	    var add_button      = $("#addaccreditation"); //Add button ID
	    var sele           	= "<?php $Accre = array("MCIOD","AssocRICS","MRICS","FRICS","HonRICS","BREEAM AP","RIBA");sort($Accre,SORT_NATURAL | SORT_FLAG_CASE);foreach ($Accre as $key) { echo "<option value='".$key."'>".$key."</option>";}?>";
	    var yir 			= "<?php $cur_year = date('Y');$years = [];for ($i=0; $i<=50; $i++) { array_push($years,$cur_year--);}foreach ($years as $year ) {echo "<option value='".$year."'>".$year."</option>"; }?>";
	    
	    var x = 1; //initlal text box count
	    $(add_button).click(function(e){ //on add input button click
	        e.preventDefault();
	        if(x < max_fields){ //max input box allowed
	            x++; //text box increment
	            $(wrapper).append('<div><div class="form-group"><select name="ddlSelectYear" class="form-control"><option value="">Select Accreditation</option>'+sele+'<option>Others</option></select></div><div class="form-group"><select name="degree_year" class="form-control"><option value="">Year awarded</option>'+yir+'</select></div><a href="#" class="remove_field">Remove</a></div>'); //add input box
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
	    var wrapper         = $("#newprojmem"); //Fields wrapper
	    var add_button      = $("#addprojmember"); //Add button ID
	    var mem  			= "<?php $members = array("Architect","Structural Engineer","Service Engineer","Fire Engineer","Acoustic Engineer","Principal Designer","Facade Engineer","Building Control","Lighting Consultant","Security Consultant","Planning Consultant","Sustainability Consultant","BIM Consultant","Quantity Surveyor","Project Manager");sort($members, SORT_NATURAL | SORT_FLAG_CASE);foreach ($members as $key ) {echo "<option value='".$key."'>".$key."</option>";}?>";
	    var comp  			= "<?php $company = array("Architect","Structural Engineer","Service Engineer");sort($company,SORT_NATURAL | SORT_FLAG_CASE);foreach ($company as $key) {echo "<option value='".$key."'>".$key."</option>";}?>";
	    
	    var x = 1; //initlal text box count
	    $(add_button).click(function(e){ //on add input button click
	        e.preventDefault();
	        if(x < max_fields){ //max input box allowed
	            x++; //text box increment
	            $(wrapper).append('<div><div class="form-group"><select name="Sel"  class="form-control" ><option value="" disabled selected>Select project team member</option>'+mem+'</select></div><div class="form-group"><select name="Sel"  class="form-control" ><option value="" disabled selected>Select company</option>'+comp+'<option>Other</option></select></div><div class="form-group"><div class="form-group"><input type="text" name="" class="form-control" placeholder="Enter new company name"></div></div><a href="#" class="remove_field">Remove</a></div>'); //add input box
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
	    var wrapper         = $("#Awards"); //Fields wrapper
	    var add_button      = $("#add_award"); //Add button ID
	    var dateer  		= "<?php $cur_year = date('Y');$years = [];for ($i=0; $i<=50; $i++) {array_push($years,$cur_year--);}foreach ($years as $year ) { echo "<option value='".$year."'>".$year."</option>";}?>";
	    
	    var x = 1; //initlal text box count
	    $(add_button).click(function(e){ //on add input button click
	        e.preventDefault();
	        if(x < max_fields){ //max input box allowed
	            x++; //text box increment
	            $(wrapper).append('<div><div class="form-group"><input type="text" name="" class="form-control" placeholder="Enter name of award"></div><div class="form-group"><input type="text" name="" class="form-control" placeholder="Enter details"></div><div class="form-group"><input type="text" name="" class="form-control" placeholder="Awarded by"></div><div class="form-group"><select name="awards_year" class="form-control"><option value="">Year awarded</option>'+dateer+'</select></div><a href="#" class="remove_field">Remove</a></div>'); //add input box
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
	    var wrapper         = $("#addedservices"); //Fields wrapper
	    var add_button      = $("#addservices"); //Add button ID
	    var adddiv   		= "<?php $Services = array("Architect","Structural Engineer","Service Engineer","Fire Engineer","Acoustic Engineer","Principal Designer","Facade Engineer","Building Control","Lighting Consultant","Security Consultant","Planning Consultant","Sustainability Consultant","BIM Consultant","Quantity Surveyor","Project Manager");sort($Services, SORT_NATURAL | SORT_FLAG_CASE);foreach ($Services as $key ) {echo "<option value='".$key."'>".$key."</option>";} ?>";
	    
	    var x = 1; //initlal text box count
	    $(add_button).click(function(e){ //on add input button click
	        e.preventDefault();
	        if(x < max_fields){ //max input box allowed
	            x++; //text box increment
	            $(wrapper).append('<div><div class="form-group"><select name="Sel"  class="form-control" ><option value="" disabled selected>Select Service</option>'+adddiv+'<option value="other">Other</option></select></div><div class="row" style="padding-bottom:10px;"><div class="col-sm-12"><div class="form-group"><div class="col-sm-6" style="padding:0;"><div class="input-group date" id="datepickernichuy" data-date="02-2012"  data-date-format="mm-yyyy"><input class="form-control" disabled type="text" id="datepickernichuy" placeholder="Provided this service from" readonly="readonly" name="servefrom" ><span class="input-group-addon add-on"><span class="fa fa-calendar"></span></span></div></div><div class="col-sm-6" style="padding:0;padding-left: 15px;"><div class="input-group date" disabled id="datepicker8" data-date="02-2012" data-date-format="mm-yyyy"><input class="form-control" type="text" placeholder="Provided this service until" readonly="readonly" name="serveuntil" ><span class="input-group-addon add-on"><span class="fa fa-calendar"></span></span></div></div></div></div></div><a href="#" class="remove_field">Remove</a></div>'); //add input box
	        }
	        rundate();
	    });
	    
	    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
	        e.preventDefault(); $(this).parent('div').remove(); x--;
	    });

	    $('.date').datepicker({
	    	format: "mm-yyyy",
		    viewMode: "months", 
		    minViewMode: "months"
	    });

	    function rundate(){
    	    $('.date').datepicker({
    	    	format: "mm-yyyy",
    		    viewMode: "months", 
    		    minViewMode: "months"
    	    });
	    }

	  //   $('body').on('click',"#datepickernichuy", function(){
	  //       $(this).datepicker( {
			//     format: "mm-yyyy",
			//     viewMode: "months", 
			//     minViewMode: "months"
			// });
	  //   });
	});
</script>

<script type="text/javascript">
	$(document).ready(function() {
	    var max_fields      = 10; //maximum input boxes allowed
	    var wrapper         = $("#indiaddedawards"); //Fields wrapper
	    var add_button      = $("#indiaddawards"); //Add button ID
	    var yir 			= "<?php $cur_year = date('Y');$years = [];for ($i=0; $i<=50; $i++) {array_push($years,$cur_year--);}foreach ($years as $year ) {echo "<option value='".$year."'>".$year."</option>";}?>";
	    
	    var x = 1; //initlal text box count
	    $(add_button).click(function(e){ //on add input button click
	        e.preventDefault();
	        if(x < max_fields){ //max input box allowed
	            x++; //text box increment
	            $(wrapper).append('<div><div class="row" style=""><div class="col-sm-4"></div><div class="col-sm-8"><div class="form-group"><div class="col-sm-6" style="padding:0;"><input type="text" name="" class="form-control" placeholder="Enter name of award"></div><div class="col-sm-6" style="padding:0;padding-left: 15px;"><div class="form-group"><select name="awards_year" class="form-control"><option value="">Year awarded</option>'+yir+'</select></div></div></div></div></div><div class="row"><div class="col-sm-4"></div><div class="col-sm-8"><div class="form-group"><input type="text" name="" class="form-control" placeholder="Awarded by"></div></div></div><div class="row"><div class="col-sm-4"></div><div class="col-sm-8"><div class="form-group"><textarea id="text-input" cols="25" rows="3" placeholder="Enter details"></textarea><div class="word-counter"><label id="count-label">3000</label>/3000 words</div></div></div></div><a href="#" class="remove_field">Remove</a></div>'); //add input box
	        }
	    });
	    
	    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
	        e.preventDefault(); $(this).parent('div').remove(); x--;
	    });
	});
</script>
<script type="text/javascript">
	$(document).ready(function(){
    $("#Modal").on('shown.bs.modal', function(){
        $(this).find('#inputName').focus();
    	});
	});
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
				<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				  <div class="modal-dialog modal-dialog-centered" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalCenterTitle">Add Entity</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				       	<div class="row">	
				       		<div class="col-sm-9">				
				       				<table class="table table-striped table-hover c-info-table">
				       					<tr>
				       						<td>Company Name</td>
				       						<td><input type="text" name="" class="form-control" placeholder="British Land"></td>
				       					</tr>
				       					<tr>
				       						<td>Registered Office Address</td>
				       						<td><input type="text" name="" class="form-control" placeholder="100 Sample Road, London, W1 23Y, United Kingdom"></td>
				       					</tr>
				       					<tr>
				       						<td>Industry</td>
				       						<td><input type="text" name="" class="form-control" placeholder="Developer"></td>
				       					</tr>
				       					<tr>
				       						<td>Year Established</td>
				       						<td><input type="text" name="" class="form-control" placeholder="1955"></td>
				       					</tr>	
				       					<tr>
				       						<td>Number of Employees</td>
				       						<td><input type="text" name="" class="form-control" placeholder="10-50"></td>
				       					</tr>											
				       				</table>
				       		</div>
				       		<div class="col-sm-3 company-quick-details">
				       				<p><img src="{{ url('images/logo-british.jpg') }}"></p>
				       				<p><button class="btn btn-warning">Change Logo</button></p>
				       		</div>
				       	</div>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				        <button type="button" class="btn btn-primary">Save changes</button>
				      </div>
				    </div>
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
											<a data-toggle="collapse" data-parent="#accordion2" href="#collapse6">British Land<span class="pull-right caret"></span></a>
										</h4>
									</div>
									<div id="collapse6" class="panel-collapse collapse in">
										<div class="panel-body">
											<div class="row">	
												<div class="col-sm-9">
													{!! Form::open(['action' => 'IndividualsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data'])!!}				
													{{-- <div id="section3" class="tab-pane fade tender-container"> --}}
															<h3 class="bid-form-title">Individuals</h3>
																<div class="row" style="padding-bottom:10px;">
																	<div class="col-sm-4">
																		Name
																	</div>
																	<div class="col-sm-8">
																		<div class="form-group">
																			<div class="col-sm-6" style="padding:0;">
																				<input type="text" name="" class="form-control" placeholder="First name">
																			</div>
																			<div class="col-sm-6" style="padding:0;padding-left: 15px;">
																				<input type="text" name="" class="form-control" placeholder="Surname">
																			</div>
																		</div>
																	</div>
																</div>
															<div class="kuwestion">
																<div class="inputscheck">
																<div class="row">
																	<div class="col-sm-12">
																		<div class="row" style="padding-bottom: 10px;">
																			<div class="col-sm-4">
																				<div class="form-group">
																					Image
																				</div>
																			</div>
																			<div class="col-sm-8" >						
																				<div class="form-group">	
																					<div class="field" align="left">
																						<strong>Upload your images</strong>
																						<input type="file" id="file1" name="file1[]" multiple />
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="row" style="padding-bottom:10px;">
																						<div class="col-sm-4">
																						Accredation</div>
																						<div class="col-sm-8">
																						<div class="form-group">
																						<div class="col-sm-6" style="padding:0;">
																						<div class="autocomplete" >
																							<input id="myInput" class="form-control" type="text" name="accredation" placeholder="Accredation">
																							</div>
									
																						</div>
																						<div class="col-sm-6" style="padding:0;padding-left: 15px;">
																						<select name='degree_year' class="form-control">
																						<option value="">Year awarded</option>
																						<?php 
																						$cur_year = date('Y');
																						$years = [];
																						for ($i=0; $i<=50; $i++) {
																						array_push($years,$cur_year--);
																						}
																						foreach ($years as $year ) {
																						echo "<option value='".$year."'>".$year."</option>";
																						}
																						?>
																						</select>
																						</div>
																						</div>
																						</div>
																						</div>
									
																		
																		<div class="row">
																			<div class="col-sm-4">
																				
																			</div>
																			<div class="col-sm-8">
																				<div id="addedaccreditation">
																					
																				</div>
																				<div class="">
																					<button class="btn btn-primary" id="addaccreditation">Add another accreditation</button>
																					<div></div>
																				</div>
																			</div>
																		</div><br>
																			<div class="row" style="padding-bottom:10px;">
																						<div class="col-sm-4">
																						Degree</div>
																						<div class="col-sm-8">
																						<div class="form-group">
																						<div class="col-sm-6" style="padding:0;">
																						<div class="autocomplete1" >
																							<input id="myInput1" class="form-control" type="text" name="degree" placeholder="Degree">
																							</div>
									
																						</div>
																						<div class="col-sm-6" style="padding:0;padding-left: 15px;">
																							<select name='degree_year' class="form-control">
																					<option value="">Year awarded</option>
																					<?php 
																						$cur_year = date('Y');
																						$years = [];
																						for ($i=0; $i<=50; $i++) {
																							array_push($years,$cur_year--);
																						}
																						foreach ($years as $year ) {
																							echo "<option value='".$year."'>".$year."</option>";
																						}
																					?>
																				</select>
																						
																						</div>
																						</div>
																						</div>
																						</div>
									
									
																			
																		<div class="row">
																			<div class="col-sm-4"></div>
																			<div class="col-sm-8">
																				<input type="text" name="" class="form-control" placeholder="Name of degree">
																			</div>
																		</div>
																		<br>
																		<div class="row">
																			<div class="col-sm-4">
																				
																			</div>
																			<div class="col-sm-8">
																				<div id="addeddegree">
																					
																				</div>
																				<div class="">
																					<button type="button" class="btn btn-primary" id="adddegree">Add another degree</button>
																					<div></div>
																				</div>
																				</div>
																		</div><br>
																		<div class="row">
																			<div class="col-sm-4">
																				Seniority
																			</div>
																			<div class="col-sm-8">
									
																				<div class="form-group">
																					<input type="text" name="" class="form-control" placeholder="Enter level of seniority">
																				</div>
																			</div>
																		</div>
																									<div class="row" style="padding-bottom:10px;">
																	<div class="col-sm-4">
																	Awards
																	</div>
																	<div class="col-sm-8">
																		<div class="form-group">
																			<div class="col-sm-6" style="padding:0;">
																				<input type="text" name="" class="form-control" placeholder="Enter name of award">
																			</div>
																			<div class="col-sm-6" style="padding:0;padding-left: 15px;">
																				<input type="text" name="" class="form-control" placeholder="Awarded by">
																			</div>
																		</div>
																	</div>
																</div>
																<div class="row">
																	<div class="col-sm-4"></div>
																	<div class="col-sm-8">
																		<div class="form-group">
																			<select name="awards_year" class="form-control">
																							<option value="">Year awarded</option>
																						<?php 
																							$cur_year = date('Y');
																							$years = [];
																							for ($i=0; $i<=50; $i++) {
																								array_push($years,$cur_year--);
																							}
																							foreach ($years as $year ) {
																								echo "<option value='".$year."'>".$year."</option>";
																							}
																						?>
																						</select>
																		</div>
																	</div>
																</div>
																<div class="row">
																	<div class="col-sm-4"></div>
																	<div class="col-sm-8">
																		<div class="form-group">
																			<textarea id="text-input2" cols="25" rows="3" placeholder="Enter the details"></textarea>
																					<div class="word-counter">
																							<label id="count-label2">3000</label>/3000 words
																					</div>
																		</div>
																	</div>
																</div>
																<div class="row">
																	<div class="col-sm-4"></div>
																	<div class="col-sm-8">
																		<div class="form-group">
																		<div class="input_fields_piste">
																						<button type="button" class="btn btn-primary" id="add_award" >Add another award</button>
																					</div>
																		</div>
																	</div>
																</div>
																		<div class="row">
																			<div class="col-sm-4">
																				<div class="form-group">
																					Services offered
																				</div>
																			</div>
																			<div class="col-sm-8">
																				<div class="form-group">
																					<ul id="servicelistindi" class="servicelist">
																					<?php
																					$Service = array(
																						"Architect", "Structural engineer", "Service engineer",
																						"Fire engineer", "Acoustic engineer", "Principal designer","Facade engineer" , "Building control", "Lighting consultant", "Security consultant", "Planning consultant" , "Sustainability consultant", "BIM consultant", "Quantity surveyor", "Project manager"
																					);
																					sort($Service, SORT_NATURAL | SORT_FLAG_CASE);
																					foreach ($Service as $key ) {
																						echo "<li><div class='form-check'>
																								<label>
																									<input type='checkbox' name='offeredservicesindi[]' value='".$key."'><span class='label-text'>".$key."</span>
																								</label>
																							</div></li>";
																					}
									
																					?>
																					</ul>
																				</div>
																				<div class="form-group divaddservbid">
																					<input type="text" class="form-control hid adservindi" name="adserv">
																					<button type="button" class="btn btn-primary notherbutindi" onclick="showaddserindi()">Add another service</button>
																					<button type="button" class="btn btn-primary hid adservindi" id="addservicebutindi" onclick="addserviceindi()">Add service</button>
																				</div>
																			</div>
																		</div>
																		<div class="row">
																			<div class="col-sm-4">
																				Project Experience
																			</div>
																			<div class="col-sm-8">
																				<div class="form-group">
																					<input type="text" name="" id="consvalue1" class="form-control" placeholder="Enter project title ">
																				</div>
									
																			<div class="form-group">
																					<input type="checkbox" name="" value="cheked" class="filled-in" id="valconfi1" ><label for="valconfi1">Value confidential </label>
																				</div>
																			</div>
																		</div><br>
																		<div class="row">
																			<div class="col-sm-4">
																				<div class="form-group">
																					
																				</div>
																			</div>
																			<div class="col-sm-8">
																				<div class="form-group">
																					<select name="" class="form-control">
																						<option value="" disabled selected>Select types of uses</option>
																						<?php 
									
																						$uses = array("Residential",
																										"Commercial",
																										"Retial",
																										"Leisure",
																										"Sports and Venues",
																										"Hotel",
																										"Industrial",
																										"Education",
																										"Healthcare",
																										"Defence",
																										"Avaition",
																										"Highways",
																										"Bridges",
																										"Rail",
																										"Water",
																										"Power",
																										"Oil,Gas And Chemicals"
									
																									);
									
																						sort($uses,SORT_NATURAL | SORT_FLAG_CASE);
									
																						foreach ($uses as $key) {
																							echo "<option value='".$key."'>".$key."</option>";
																						}
									
																							?>
																						<option>Other</option>
																					</select>
																				</div>
																			</div>
																		</div>
																		<div class="row">
																			<div class="col-sm-4">
																				
																			</div>
																			<div class="col-sm-8">
																					<div class="input_fields_project1">
																						<button class="btn btn-primary" id="add_field_project1">Add another type of uses</button>
																						<div></div>
																					</div>
																				</div>
																		</div><br>
																		<div class="row">
																			<div class="col-sm-4">
																				<div class="form-group">
																					
																				</div>
																			</div>
																			<div class="col-sm-8">
																				<div class="form-group">
																					<select name="" class="form-control">
																						<option value="" disabled selected>Select service</option>
																						<?php 
																							$Services = array(
																								"Architect","Structural engineer","Service engineer","Fire engineer","Acoustic engineer","Principal Designer","Facade engineer","Building control","Lighting consultant","Security consultant","Planning consultant","Sustainability consultant","BIM consultant","Quantity Surveyor","Project manager"
																							);
																							sort($Services, SORT_NATURAL | SORT_FLAG_CASE);
																							foreach ($Services as $key ) {
																								echo "<option value='".$key."'>".$key."</option>";
																							}
									
																							?>
																						<option>Other</option>
																					</select>
																				</div>
																			</div>
																		</div>
																									<div class="row" style="padding-bottom:10px;">
																	<div class="col-sm-4">
																
																	</div>
																	<div class="col-sm-8">
																		<div class="form-group">
																			<div class="col-sm-6" style="padding:0;">
																				<div class="input-group date" id="datepicker7" data-date="02-2012" 
																								data-date-format="mm-yyyy">
									
																							<input class="form-control" type="text" placeholder="Provided this service from" readonly="readonly" name="date" >	  
																							<span class="input-group-addon add-on"><span class="fa fa-calendar"></span></span>	  
																					</div>
																			</div>
																			<div class="col-sm-6" style="padding:0;padding-left: 15px;">
																				<div class="input-group date" id="datepicker8" data-date="02-2012" 
																								data-date-format="mm-yyyy">
									
																							<input class="form-control" type="text" placeholder="Provided this service until" readonly="readonly" name="date" >	  
																							<span class="input-group-addon add-on"><span class="fa fa-calendar"></span></span>	  
																					</div>
																			</div>
																		</div>
																	</div>
																</div>
																
																		<div class="row">
																			<div class="col-sm-4">
																				
																			</div>
																			<div class="col-sm-8">
																					<div class="input_fields_project1">
																						<button class="btn btn-primary" id="add_field_project1">Add another service</button>
																						<div></div>
																					</div>
																				</div>
																			</div><br>
																		<div class="row">
																			<div class="col-sm-4">
																				<div class="form-group">
																					
																				</div>
																			</div>
																			<div class="col-sm-8">
																				<div class="form-group">
																					<select name="" class="form-control">
																						<option value="" disabled selected>Select type of development</option>
																						<?php 
																							$Services = array("New built","Refurbishment","Demolition"
																								
																							);
																							sort($Services, SORT_NATURAL | SORT_FLAG_CASE);
																							foreach ($Services as $key ) {
																								echo "<option value='".$key."'>".$key."</option>";
																							}
									
																							?>
																						<option>Other</option>
																					</select>
																				</div>
																			</div>
																		</div>
																	
																	<div class="row">
																			<div class="col-sm-4">
																				
																			</div>
																			<div class="col-sm-8">
																					<div class="input_fields_project1">
																						<button class="btn btn-primary" id="add_field_project1">Add another type of uses</button>
																						<div></div>
																					</div>
																				</div>
																		</div><br>
																		<div class="row">
																			<div class="col-sm-4"></div>
																			<div class="col-sm-8">
																						<textarea id="text-input3" cols="25" rows="3" placeholder="Enter project description"></textarea>
																					<div class="word-counter">
																							<label id="count-label3">3000</label>/3000 words
																					</div>
																			</div>
																		</div>
																		<div class="row">
																			<div class="col-sm-4">
									
																			</div>
																			<div class="col-sm-8" >	
																				<div class="form-group">	
																					<div class="field" align="left">
																						<strong>Upload your images</strong>
																						<input type="file" id="file2" name="file2[]" multiple />
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="row" style="padding-bottom:10px;">
																			<div class="col-sm-4"></div>
																	<div class="col-sm-8">
																		<div class="form-group">
																			<div class="col-sm-6" style="padding:0;">
																				<select name='ddlSelectYear' class="form-control">
																						<option value="">Select project team member</option>
																					<?php 
																							$Services = array(
																								"Architect","Structural engineer","Service engineer","Fire engineer","Acoustic engineer","Principal designer","Facade engineer","Building Control","Lighting consultant","Security consultant","Planning consultant","Sustainability consultant","BIM consultant","Quantity surveyor","Project manager"
																							);
																							sort($Services, SORT_NATURAL | SORT_FLAG_CASE);
																							foreach ($Services as $key ) {
																								echo "<option value='".$key."'>".$key."</option>";
																							}
									
																							?>
																							<option>Others</option>
																					</select>
																			</div>
																			<div class="col-sm-6" style="padding:0;padding-left: 15px;">
																					<select name='ddlSelectYear' class="form-control">
																						<option value="">Company name</option>
																					<?php 
																							$Services = array(
																								
																							);
																							sort($Services, SORT_NATURAL | SORT_FLAG_CASE);
																							foreach ($Services as $key ) {
																								echo "<option value='".$key."'>".$key."</option>";
																							}
									
																							?>
																							<option>Others</option>
																					</select>
																			</div>
																			</div>
																		</div>
																	</div>
																
									
																		
																		<div class="form-group butcent">
																			<button type="button" data-toggle="tab" href="#section4" id="checkinpbut" name="Next" class="btn btn-primary butsize ">Next</button>
																			<button type="button" name="Save" value="Save" class="btn  butsize color">Save</button>
																		</div>
																	</div>
																</div>
															</div>
														</div>
												</div>
												<div class="col-sm-3 company-quick-details">
														<p><img src="{{ url('images/logo-british.jpg') }}"></p>
														<p><button class="btn btn-warning">Change Logo</button></p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="panel">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion2" href="#collapse7">UK Land <span class="pull-right caret"></span></a>
										</h4>
									</div>
									<div id="collapse7" class="panel-collapse collapse">
										<div class="panel-body">
											<div class="row">	
												<div class="col-sm-9">				
														<table class="table table-striped table-hover c-info-table">
															<tr>
																<td>Company Name</td>
																<td><input type="text" name="" class="form-control" placeholder="British Land"></td>
															</tr>
															<tr>
																<td>Registered Office Address</td>
																<td><input type="text" name="" class="form-control" placeholder="100 Sample Road, London, W1 23Y, United Kingdom"></td>
															</tr>
															<tr>
																<td>Services</td>
																<td>
																	<table width="100%">
																		<tr>
																			<td width="50%">
																				<select name="" class="form-control">
																					<option>Service 1</option>
																					<option>Service 2</option>
																					<option>Service 3</option>
																				</select>
																			</td>
																			<td width="50%">
																				<input type="date" name="" class="form-control">
																			</td>
																		</tr>
																		<tr>
																			<td colspan="2">
																				<button class="btn btn-warning" style="margin-top: 10px;"><i class="fa fa-plus"></i> Add another service</button>
																			</td>
																		</tr>
																	</table>
																</td>
															</tr>
															<tr>
																<td>Awards</td>
																<td>
																	<table width="100%">
																		<tr>
																			<td width="33.33%">
																				<input type="text" name="" class="form-control" placeholder="Enter Name of Award">
																			</td>
																			<td width="33.33%">
																				<input type="text" name="" class="form-control" placeholder="Enter Details">
																			</td>
																			<td width="33.33%">
																				<input type="text" name="" class="form-control" placeholder="Year awarded">
																			</td>
																		</tr>
																		<tr>
																			<td colspan="3">
																				<button class="btn btn-warning" style="margin-top: 10px;"><i class="fa fa-plus"></i> Add another award</button>
																			</td>
																		</tr>
																	</table>
																</td>
															</tr>
															<tr>
																<td>Track Record</td>
																<td>
																	<div class="form-group">
																		<input type="text" name="" class="form-control" placeholder="Enter Project Title">
																	</div>
																	<div class="form-group">
																		<input type="text" name="" class="form-control" placeholder="Enter Project Value">
																	</div>
																	<div class="form-group">
																		<div class="col-sm-4" style="padding: 0;">
																			<select class="form-control">
																				<option>Type of Use</option>
																				<option>Residential</option>
																				<option>Office</option>
																				<option>Retail</option>
																				<option>Hotel</option>
																			</select>
																		</div>
																		<div class="col-sm-4" style="padding: 0;">
																			<input type="text" name="" class="form-control" placeholder="Area">
																		</div>
																		<div class="col-sm-4" style="padding: 0;">
																			<input type="text" name="" class="form-control" placeholder="Units">
																		</div>
																	</div>
																	<div class="form-group">
																		<button class="btn btn-warning sakto" style="margin-top: 10px;"><span class="sakto2"><i class="fa fa-plus"></i> Add another type of use</span></button>
																	</div>

																	<label>Service Provided</label>

																	<div class="form-group">
																		<div class="col-sm-4" style="padding: 0;">
																			<select class="form-control">
																				<option>Service</option>
																				<option>Service 1</option>
																				<option>Service 2</option>
																				<option>Service 3</option>
																			</select>
																		</div>
																		<div class="col-sm-4" style="padding: 0;">
																			<input type="date" name="" class="form-control" placeholder="Area">
																		</div>
																		<div class="col-sm-4" style="padding: 0;">
																			<input type="date" name="" class="form-control" placeholder="Units">
																		</div>
																	</div>
																	<div class="form-group">
																		<button class="btn btn-warning sakto" style="margin-top: 10px;"><span class="sakto2"><i class="fa fa-plus"></i> Add another service</span></button>
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
																			<select class="form-control">
																				<option>Project Team Member</option>
																				<option>Architect</option>
																				<option>MEP Engineer</option>
																				<option>Structural Engineer</option>
																			</select>
																		</div>
																		<div class="col-sm-6" style="padding: 0;">
																			<label>Company</label>
																			<input type="text" name="" class="form-control" placeholder="Enter Company">
																		</div>
																	</div>
																	<div class="form-group">
																		<button class="btn btn-warning sakto" style="margin-top: 10px;"><span class="sakto2"><i class="fa fa-plus"></i> Add another project team member</span></button>
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
														<p><button class="btn btn-warning">Change Logo</button></p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="panel">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion2" href="#collapse8">US Land <span class="pull-right caret"></span></a>
										</h4>
									</div>
									
									<div id="collapse8" class="panel-collapse collapse">
										<div class="panel-body">
											<div class="row">	
												<div class="col-sm-9">				
														<table class="table table-striped table-hover c-info-table">
															<tr>
																<td>Company Name</td>
																<td><input type="text" name="" class="form-control" placeholder="British Land"></td>
															</tr>
															<tr>
																<td>Registered Office Address</td>
																<td><input type="text" name="" class="form-control" placeholder="100 Sample Road, London, W1 23Y, United Kingdom"></td>
															</tr>
															<tr>
																<td>Services</td>
																<td>
																	<table width="100%">
																		<tr>
																			<td width="50%">
																				<select name="" class="form-control">
																					<option>Service 1</option>
																					<option>Service 2</option>
																					<option>Service 3</option>
																				</select>
																			</td>
																			<td width="50%">
																				<input type="date" name="" class="form-control">
																			</td>
																		</tr>
																		<tr>
																			<td colspan="2">
																				<button class="btn btn-warning" style="margin-top: 10px;"><i class="fa fa-plus"></i> Add another service</button>
																			</td>
																		</tr>
																	</table>
																</td>
															</tr>
															<tr>
																<td>Awards</td>
																<td>
																	<table width="100%">
																		<tr>
																			<td width="33.33%">
																				<input type="text" name="" class="form-control" placeholder="Enter Name of Award">
																			</td>
																			<td width="33.33%">
																				<input type="text" name="" class="form-control" placeholder="Enter Details">
																			</td>
																			<td width="33.33%">
																				<input type="text" name="" class="form-control" placeholder="Year awarded">
																			</td>
																		</tr>
																		<tr>
																			<td colspan="3">
																				<button class="btn btn-warning" style="margin-top: 10px;"><i class="fa fa-plus"></i> Add another award</button>
																			</td>
																		</tr>
																	</table>
																</td>
															</tr>
															<tr>
																<td>Track Record</td>
																<td>
																	<div class="form-group">
																		<input type="text" name="" class="form-control" placeholder="Enter Project Title">
																	</div>
																	<div class="form-group">
																		<input type="text" name="" class="form-control" placeholder="Enter Project Value">
																	</div>
																	<div class="form-group">
																		<div class="col-sm-4" style="padding: 0;">
																			<select class="form-control">
																				<option>Type of Use</option>
																				<option>Residential</option>
																				<option>Office</option>
																				<option>Retail</option>
																				<option>Hotel</option>
																			</select>
																		</div>
																		<div class="col-sm-4" style="padding: 0;">
																			<input type="text" name="" class="form-control" placeholder="Area">
																		</div>
																		<div class="col-sm-4" style="padding: 0;">
																			<input type="text" name="" class="form-control" placeholder="Units">
																		</div>
																	</div>
																	<div class="form-group">
																		<button class="btn btn-warning sakto" style="margin-top: 10px;"><span class="sakto2"><i class="fa fa-plus"></i> Add another type of use</span></button>
																	</div>

																	<label>Service Provided</label>

																	<div class="form-group">
																		<div class="col-sm-4" style="padding: 0;">
																			<select class="form-control">
																				<option>Service</option>
																				<option>Service 1</option>
																				<option>Service 2</option>
																				<option>Service 3</option>
																			</select>
																		</div>
																		<div class="col-sm-4" style="padding: 0;">
																			<input type="date" name="" class="form-control" placeholder="Area">
																		</div>
																		<div class="col-sm-4" style="padding: 0;">
																			<input type="date" name="" class="form-control" placeholder="Units">
																		</div>
																	</div>
																	<div class="form-group">
																		<button class="btn btn-warning sakto" style="margin-top: 10px;"><span class="sakto2"><i class="fa fa-plus"></i> Add another service</span></button>
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
																			<select class="form-control">
																				<option>Project Team Member</option>
																				<option>Architect</option>
																				<option>MEP Engineer</option>
																				<option>Structural Engineer</option>
																			</select>
																		</div>
																		<div class="col-sm-6" style="padding: 0;">
																			<label>Company</label>
																			<input type="text" name="" class="form-control" placeholder="Enter Company">
																		</div>
																	</div>
																	<div class="form-group">
																		<button class="btn btn-warning sakto" style="margin-top: 10px;"><span class="sakto2"><i class="fa fa-plus"></i> Add another project team member</span></button>
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
														<p><button class="btn btn-warning">Change Logo</button></p>
												</div>
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


