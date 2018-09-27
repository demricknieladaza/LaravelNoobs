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
	            $(wrapper).append('<div><div class="row"><div class="col-sm-6" style="padding-right: 0;"><div class="form-group"><select name="Sel"  class="form-control" ><option value="" disabled selected>Select project team member</option>'+mem+'</select></div></div><div class="col-sm-6"><div class="form-group"><input type="text" name="compname" class="form-control" placeholder="Company name"></div></div></div><a href="#" class="remove_field">Remove</a></div>'); //add input box
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
	$(document).ready(function(){
    $("#Modal").on('shown.bs.modal', function(){
        $(this).find('#inputName').focus();
    });
</script>

{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> --}}

<div class="modal fade" id="awards" role="dialog">
	  <div class="modal-dialog">
	  
	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">Add Awards</h4>
	      </div>
	      <div class="modal-body">
	        <div class="form-group">
	        	<input type="text" name="awrd_name" class="form-control awrd_name" placeholder="Enter name of award">
	        </div>
	        <div class="form-group">
	        	<input type="text" name="awrd_details" class="form-control awrd_details" placeholder="Enter details">
	        </div>
	        <div class="form-group">
	        	<input type="text" name="awrd_by" class="form-control awrd_by" placeholder="Awarded by">
	        </div>
	        <div class="form-group">
	        <div class="input-group date" id="datepicker1" data-date="02-2012" data-date-format="mm-yyyy">
	        <input class="form-control awrd_date" type="text" placeholder="Year awarded  " readonly="readonly" name="awrd_date" >	  
	        <span class="input-group-addon add-on"><span class="fa fa-calendar"></span></span>	  
	        </div>
	        </div>
	      </div>
	      <div class="modal-footer">
	        <button type="Submit" class="btn btn-success addawrd">Add</button>
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>
	<div id="mode" class="modal fade" tabindex="-1" style="padding-left: 0;	z-index: 9999999;">
		<div class="modal-confirm">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-head">
						<div class="icon-box" style="color:#1ce62b;">
							<i class="material-icons" style="color:#1ce62b;">done</i>
						</div>				
						<h4 class="modal-title">Are  you  sure  you  want  to  submit  this  tender  query? </h4>	
		                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<p>Your  query  will  be  sent  to  the  Employer  and  published  on  the  project  page,  visible  for  everyone,  once  you  have  received  a  response. This process cannot be undone.</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-info" data-dismiss="modal">Go Back</button>
						<button type="button" class="btn btn-success" style="color: #fff;background-color: #fe7235;">Submit</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="Modal" tabindex="-1" role="dialog">
	    <div class="modal-dialog">
	    
	      <!-- Modal content-->
	      <div class="modal-content">
	        <div class="modal-header inq">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h4 class="modal-title">Ask the Employer</h4>
	        </div>
	        <div class="modal-body">
	          <textarea placeholder="Enter your query here" rows="4" cols="50" active></textarea>
	        </div>
	        <div class="modal-footer">
					<!-- Button HTML (to Trigger Modal) -->
				<div style="text-align:center;">
					<button type="button" style="color: #fff;background-color: #fe7235;border-radius: 6px;" href="#mode"  class="btn" data-backdrop="false" data-toggle="modal">Submit Tender Query</button>
				</div>
	          	
	        </div>
	      </div>
	      
	    </div>
	</div>
  	<div id="pngsubmit" class="modal fade">
		<div class="modal-dialog modal-confirm">
			<div class="modal-content" style="margin-right: auto;margin-left: auto;width: 40%;">
				<div class="modal-head">
					<div class="icon-box">
						<i class="material-icons">done</i>
					</div>				
					<h4 class="modal-title">Success! </h4>	
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<p>Your  query  will  be  sent  to  the  Employer  and  published  on  the  project  page,  visible  for  everyone,  once  you  have  received  a  response. This process cannot be undone.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-info" data-dismiss="modal">Go Back</button>
					<button type="button" class="btn btn-success">Submit</button>
				</div>
			</div>
		</div>
	</div>

	<div class="container below-header" style="padding-right: 0;">
		<h1 class="project-title bid-page-title" style="margin-right:0;margin-left:0;width: 100%;">Canada Water Masterplan - <small>Structural Engineer</small></h1>			
	</div> 

	<div class="container">
		<div class="row">
			<div id="d" class="col-sm-4" style="position: fixed; width:355px;">
				<div class="tender-container" style="border-radius: 6px;">
					<ul class="nav bid-form-nav">
						<li class="active totop"><a data-toggle="tab" href="#section1">Pre-Qualification Questionnaire<i class="fa fa-check checkerg hidecheck" style="line-height: -1px !important;"></i></a></li>
						<li class="disd totop" ><a data-toggle="tab" href="#section2">Organisation<i class="fa fa-check checkerg hidecheck" style="line-height: -1px !important;"></i></a></li>
						<li class="disd totop"><a data-toggle="tab" href="#section3">Individuals<i class="fa fa-check checkerg hidecheck" style="line-height: -1px !important;"></i></a></li>
						<li class="disd totop"><a data-toggle="tab" href="#section4">Approach<i class="fa fa-check checkerg hidecheck" style="line-height: -1px !important;"></i></a></li>
						<li class="disd totop"><a data-toggle="tab" href="#section5">Scope<i class="fa fa-check checkerg hidecheck" style="line-height: -1px !important;"></i></a></li>
						<li class="disd totop"><a data-toggle="tab" href="#section6">Appointment<i class="fa fa-check checkerg hidecheck" style="line-height: -1px !important;"></i></a></li>
						<li class="disd totop"><a data-toggle="tab" href="#section7">Quality Assurance<i class="fa fa-check checkerg hidecheck" style="line-height: -1px !important;"></i></a></li>
					</ul><br>
				</div>
				<div class="form-group">
					<button type="button" class="btn" style="width:100%;line-height: .8em;" id="but" data-toggle="modal" data-backdrop="static" data-target="#Modal">Ask the Employer</button>
					
				</div>
			</div>
			<div class="col-sm-8 questionnaire-section" style="margin-left: 338px; width: 845px;">
				<form>
				<div class="tab-content">
					<div id="section1" class="tab-pane fade in active tender-container" style="border-radius: 6px;">
						<h3 class="bid-form-title">Pre-Qualification Questionnaire</h3>
							<div class="inputscheck">
							<div class="form-group">
								<input type="checkbox" name="" value="" class="tata filled-in" id="check1"> <label for="check1">Lorem ipsum dolor sit amet, consectetur adipisicing elit?</label>
							</div>
							<div class="form-group">
								<input type="checkbox" name="" value="" class="tata filled-in" id="check2"> <label for="check2">Lorem ipsum dolor sit amet, consectetur adipisicing elit?</label>
							</div>
							<div class="form-group">
								<input type="checkbox" name="" value="" class="tata filled-in" id="check3"> <label for="check3">Lorem ipsum dolor sit amet, consectetur adipisicing elit?</label>
							</div>
							<div class="form-group">
								<input type="checkbox" name="" value="" class="tata filled-in" id="check4"> <label for="check4">Lorem ipsum dolor sit amet, consectetur adipisicing elit?</label>
							</div>
							<div class="form-group">
								<input type="checkbox" name="" value="" class="tata filled-in" id="check5"> <label for="check5">Lorem ipsum dolor sit amet, consectetur adipisicing elit?</label>
							</div>
							<div class="form-group">
								<input type="checkbox" name="" value="" class="tata filled-in" id="check6"> <label for="check6">Lorem ipsum dolor sit amet, consectetur adipisicing elit?</label>
							</div>
							<div class="form-group">
								<input type="checkbox" name="" value="" class="tata filled-in" id="check7"> <label for="check7">Lorem ipsum dolor sit amet, consectetur adipisicing elit?</label>
							</div>
							<div class="form-group">
								<input type="checkbox" name="" value="" class="tata filled-in" id="check8"> <label for="check8">Lorem ipsum dolor sit amet, consectetur adipisicing elit?</label>
							</div>
							<div class="form-group">
								<input type="checkbox" name="" value="" class="tata filled-in" id="check9"> <label for="check9">Lorem ipsum dolor sit amet, consectetur adipisicing elit?</label>
							</div>
							<div class="form-group">
								<input type="checkbox" name="" value="" class="tata filled-in" id="check10"> <label for="check10">Lorem ipsum dolor sit amet, consectetur adipisicing elit?</label>
							</div>
							</div>						
							<div class="form-group butcent">
								<input id="sec2" type="submit" data-toggle="tab" href="#section2" name="Next" value="Next" class="nbtn disabled btn btn-primary butsize pointerev">
							</div>
						
					</div>
					{{-- <input type="button" id="next" value="Next" onclick="validateFormSection()" /> --}}
					<div id="section2" class="tab-pane fade tender-container">
						<!-- <div class="form-group" style="text-align: right;">
							<div class="input_fields_team">
								<button class="btn" id="button1 ">Complete Page using Profile Information</button>
							</div>
						</div> -->
						<h3 class="bid-form-title">Organisation<button class="btn" id="button1 " style="margin-left: 48%; background: #FE7235;">Complete Page using Profile Information</button></h3>
						<div class="kuwestion">
							<div class="inputscheck">
							<div class="row">
								<div class="col-sm-12">
									<div class="row">
										<div class="col-sm-4">
											<div class="form-group">
												Providing the required service since
											</div>
										</div>
										<div class="col-sm-8">
											<div class="form-group">
												{{-- <div class="input-group date" id="datepicker" data-date="02-2012" 
												         data-date-format="mm-yyyy">

													 <input class="form-control" type="text" placeholder="Select Year" readonly="readonly" name="date" >	  
													 <span class="input-group-addon add-on"><span class="fa fa-calendar"></span></span>	  
												</div> --}}
												<select name='providedsince' class="form-control">
										            <option value="">Select year</option>
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
										<div class="col-sm-4">
											<div class="form-group">
												Offered services
											</div>
										</div>
										<div class="col-sm-8">
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
											{{-- <div class="form-check">
												<label>
													<input type="checkbox" name="other"> <span class="label-text">Other</span>
												</label>
											</div> --}}
											<div class="form-group divaddservbid">
												<input type="text" class="form-control hid adserv" name="adserv">
											    <button type="button" class="btn btn-primary notherbut" onclick="showadd()">Add another service</button>
											    <button type="button" class="btn btn-primary hid adserv" id="addservicebut" onclick="addservice()">Add Service</button>
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
								</div>
							</div>
							<div class="row">
								<div class="col-sm-4"></div>
								<div class="col-sm-8">
									<div class="form-group">
									<input type="text" name="" class="form-control" placeholder="Awarded by">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-4"></div>
								<div class="col-sm-8">
									<div class="form-group">
										<textarea id="text-input" cols="25" rows="3" placeholder="Enter details"></textarea>
												<div class="word-counter">
												     <label id="count-label">3000</label>/3000 words
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
												Track Record of relevant Projects
											</div>
										</div>
										<div class="col-sm-8">
											<div class="form-group">
												<input type="text" name="" class="form-control" placeholder="Enter profile title">
											</div>
											<div class="form-group">
												<span style="position: absolute;left: 24px;line-height: 2.5;font-weight: 700;">£ </span>
												<input type="number" style="padding-left: 24px;" name="" id="consvalue" class="form-control" placeholder="Construction value ">
											</div>

										
						                    <label for="typeofuse"><strong>Type of use</strong></label>
											<ul id="typeofuse" class="typeofuse">
											<?php
											$Service = array(
												"Residential","Commercial ","Retail","Leisure","Sports and venues","Hotel","Industrial","Education","Healthcare","Defence","Aviation","Highways","Bridges","Rail","Water","Oil,gas and chemical"
											);
											sort($Service, SORT_NATURAL | SORT_FLAG_CASE);
											foreach ($Service as $key ) {
											    echo "<li><div class='form-check'>
														<label>
															<input type='checkbox' name='typeofuse[]' value='".$key."'><span class='label-text'>".$key."</span>
														</label>
													</div></li>";
											}

											?>
											</ul>
											
											<div class="form-group divaddservtypeofuse">
												<input type="text" class="form-control hid adtypeofuse" name="adserv">
											    <button type="button" class="btn btn-primary notherbuttypeofuse" onclick="showaddtype()">Add another type of use</button>
											    <button type="button" class="btn btn-primary hid adtypeofuse" id="addservicebut" onclick="addtypeofuse()">Add type of use</button>
											</div>
											
											<label for="typeofdev"><strong>Select type of development</strong></label>
											<ul id="typeofdev" class="typeofdev">
											<?php
											$Service = array(
												"New built","Refurbishment ","Demolition"
											);
											sort($Service, SORT_NATURAL | SORT_FLAG_CASE);
											foreach ($Service as $key ) {
											    echo "<li><div class='form-check'>
														<label>
															<input type='checkbox' name='typeofdev[]' value='".$key."'><span class='label-text'>".$key."</span>
														</label>
													</div></li>";
											}

											?>
											</ul>
										
													
											<div class="form-group">
												
												<textarea id="text-input1" cols="25" rows="3" placeholder="Enter details"></textarea>
												<div class="word-counter">
												     <label id="count-label1">3000</label>/3000 words
												</div>
												
											</div>
											<div class="form-group">	
												<div class="field" align="left">
												  <strong>Upload your images</strong>
												  <input type="file" id="files" name="files[]" multiple />
												</div>
						                    </div>
						                    <div class="row">
						                    	<div class="col-sm-6" style="padding-right: 0;">
						                    <div class="form-group">
												<select name="Sel"  class="form-control" >
													<option value="" disabled selected>Select project team member</option>
													<?php 
														$members = array(
															"Architect","Structural engineer","Service engineer","Fire engineer","Acoustic engineer","Principal designer","Facade engineer","Building control","Lighting consultant","Security consultant","Planning consultant","Sustainability consultant","BIM consultant","Quantity surveyor","Project manager"
														);
														sort($members, SORT_NATURAL | SORT_FLAG_CASE);
														foreach ($members as $key ) {
														    echo "<option value='".$key."'>".$key."</option>";
														}
													 ?>
												</select>
											</div>
											</div>
											<div class="col-sm-6">
											<div class="form-group">
												<input type="text" name="compname" class="form-control" placeholder="Company name">
											
											</div>
											</div>
											</div>
											<div id="newprojmem">
												
											</div>
											<div class="form-group">
												<div class="input_fields_team">
												    <button class="btn btn-primary" id="addprojmember">Add another project team member</button>
												    <div></div>
												</div>
											</div>
											<div class="form-group">
												<select name="Sel"  class="form-control" >
													<option value="" disabled selected>Select service</option>
													<?php 
														$Services = array(
															"Architect","Structural engineer","Service engineer","Fire engineer","Acoustic engineer","Principal designer","Facade engineer","Building control","Lighting consultant","Security consultant","Planning consultant","Sustainability consultant","BIM consultant","Quantity surveyor","Project manager"
														);
														sort($Services, SORT_NATURAL | SORT_FLAG_CASE);
														foreach ($Services as $key ) {
														    echo "<option value='".$key."'>".$key."</option>";
														}

													 ?>

													<option>Other</option>
												</select>
											</div>
							<div class="row" style="padding-bottom:10px;">
								<div class="col-sm-12">
									<div class="form-group">
										<div class="col-sm-6" style="padding:0;">
											<div class="input-group date" id="datepickernichuy" data-date="02-2012"  data-date-format="mm-yyyy">
												<input class="form-control" disabled type="text" id="datepickernichuy" placeholder="Provided this service from" readonly="readonly" name="date" >	  
												<span class="input-group-addon add-on"><span class="fa fa-calendar"></span></span>	  
											</div>
										</div>
										<div class="col-sm-6" style="padding:0;padding-left: 15px;">
											<div class="input-group date" disabled id="datepicker8" data-date="02-2012" data-date-format="mm-yyyy">
													<input class="form-control" type="text" placeholder="Provided this service until" readonly="readonly" name="date" >	  
													<span class="input-group-addon add-on"><span class="fa fa-calendar"></span></span>	  
												</div>
										</div>
									</div>
								</div>
							</div>
							
											<div id="addedservices">
												
											</div>
											<div class="form-group">
												<div class="input_fields_serve">
												    <button type="button" class="btn btn-primary" id="addservices">Add another service</button>
												    <div></div>
												</div>
											</div>
											<div class="form-group">
												<div class="input_fields_project">
												    <button type="button" class="btn btn-primary" id="" >Add another project</button>
												    <div></div>
												</div>
											</div>
											{{-- <div class="form-group">
												<div class="input_fields_project">
												    <button class="btn btn-primary" id="add_field_project">Add another XXX</button>
												    <div></div>
												</div>
											</div> --}}<br>
										</div>
									</div>
									<div class="form-group butcent">
										<button type="button" data-toggle="tab" href="#section3" id="checkinpbut2" name="Next" class="btn btn-primary butsize ">Next</button>
										<button type="button" name="Save" value="Save" class="btn  butsize color">Save</button>
									</div>
									
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="section3" class="tab-pane fade tender-container">
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
													<input type="text" name="" class="form-control" placeholder="Name of degree">
													</div>
													</div>
													</div>
													</div>


                                       <div class="row">
										<div class="col-sm-4">
											
										</div>
										<div class="col-sm-8">

											<div class="form-group">
												<input type="text" name="" class="form-control" placeholder="Name of Degree">
											</div>

										</div>
									</div>
									<div class="row">
										<div class="col-sm-4"></div>
										<div class="col-sm-8">
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

										{{-- <div class="form-group">
								               <input type="checkbox" name="" value="cheked" class="filled-in" id="valconfi1" ><label for="valconfi1">Value confidential </label>
							              </div> --}}
										</div>
									</div>
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
						            <div class="row">
										<div class="col-sm-4">
											<div class="form-group">
												
											</div>
										</div>
										<div class="col-sm-8">
											<div class="form-group">
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
										</div>
									</div>
									<div class="row">
										<div class="col-sm-4">
											<div class="form-group">
												
											</div>
										</div>
										<div class="col-sm-8">
											<div class="form-group">
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
									<div class="row">
										<div class="col-sm-4">
											
										</div>
										<div class="col-sm-8">
											<div class="form-group">
												<input type="text" name="" id="" class="form-control" placeholder="Enter new company name ">
											</div>
										</div>
									</div><br>
									
									<div class="form-group butcent">
										<button type="button" data-toggle="tab" href="#section4" id="checkinpbut" name="Next" class="btn btn-primary butsize ">Next</button>
										<button type="button" name="Save" value="Save" class="btn  butsize color">Save</button>
									</div>
								</div>
							</div>
						</div>
					</div>
						
					</div>
					<div id="section4" class="tab-pane fade tender-container">
						<h3 class="bid-form-title">Approach</h3>
						<div class="kuwestion">
							<div class="inputscheck">
							<div class="row">
								<div class="col-sm-12">
									<div class="row">
										<div class="col-sm-4">
											<div class="form-group">
												Comments on Constraints/Issues
											</div>
										</div>
										<div class="col-sm-8">
											<div class="form-group">
													<textarea id="text-input4" cols="25" rows="3" placeholder="Enter here.."></textarea>
												<div class="word-counter">
												     <label id="count-label4">3000</label>/3000 words
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class=" col-sm-4"></div>
										<div class="col-sm-8">
											<div class="form-group">	
												<div class="field" align="left">
												  <strong>Upload your images</strong>
												  <input type="file" id="file4" name="file4[]" multiple />
												</div>
						                    </div>
						                </div>
									</div><br>
                                    <div class="row">
										<div class="col-sm-4">
											
										</div>
										<div class="col-sm-8">
												<div class="input_fields_com">
												    <button class="btn btn-primary" id="add_field_com">Add another comment</button>
												    <div></div>
												</div>
											</div>
									</div><br>
									<div class="row">
										<div class="col-sm-4">
											<div class="form-group">
												Solutions
											</div>
										</div>
										<div class="col-sm-8">
											<div class="form-group">
													<textarea id="text-input5" cols="25" rows="3" placeholder="Enter text here"></textarea>
												<div class="word-counter">
												     <label id="count-label5">3000</label>/3000 words
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class=" col-sm-4"></div>
										<div class="col-sm-8">
											<div class="form-group">	
												<div class="field" align="left">
												  <strong>Upload your images</strong>
												  <input type="file" id="file3" name="file3[]" multiple />
												</div>
						                    </div>
						                </div>
									</div><br>
									 <div class="row">
										<div class="col-sm-4">
											
										</div>
										<div class="col-sm-8">
												<div class="input_fields_sul">
												    <button class="btn btn-primary" id="add_field_sul">Add another solution</button>
												    <div></div>
												</div>
											</div>
									</div><br>
									
									<div class="form-group butcent">
										<button type="button" data-toggle="tab" href="#section5" id="checkinpbut3" name="Next" class="btn btn-primary butsize ">Next</button>
										<button type="button" name="Save" value="Save" class="btn  butsize color">Save</button>
										
									</div>
								</div>
							</div>
						</div>
					</div>
						
					</div>
					<div id="section5" class="tab-pane fade tender-container">
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
						     <a download="Book-Scope.xlsx" href="{{asset('css/scopexl/Book-Scope.xlsx')}} "><i class="fa fa-download"> Download</i></a>
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
							</div>

						</div><br> 




							{{-- <div class="row">
								<div class="col-sm-12">
									<table id="customers1">
											  <tr>
											    <th>Deliverable</th>
											    <th>Details / Contents</th>
											    <th>RACI</th>
											    <th>0</th>
											    <th>1</th>
											    <th>2</th>
											    <th>3</th>
											    <th>4</th>
											    <th>5</th>
											    <th>6</th>
											    <th>7</th>
											    <th>Total</th>
											  </tr>
											  <tr>
											    <td>Strategic Brief</td>
											  <td contenteditable='true'></td>
											  <td contenteditable='true'></td>
											   <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											     <td contenteditable='true'></td>
											      <td contenteditable='true'></td>
											       <td contenteditable='true'></td>
											        <td contenteditable='true'></td>
											         <td contenteditable='true'></td>
											          <td contenteditable='true'></td>
											          <td contenteditable='true'></td>
											    											
											  </tr>
											  <tr>
											    <td>Project Programme (Lead)</td>
											     <td contenteditable='true'></td>
											  <td contenteditable='true'></td>
											   <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											     <td contenteditable='true'></td>
											      <td contenteditable='true'></td>
											       <td contenteditable='true'></td>
											        <td contenteditable='true'></td>
											         <td contenteditable='true'></td>
											          <td contenteditable='true'></td>
											          <td contenteditable='true'></td>
											  </tr>
											  <tr>
											    <td>Feasibility Study</td>
											    <td contenteditable='true'></td>
											  <td contenteditable='true'></td>
											   <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											     <td contenteditable='true'></td>
											      <td contenteditable='true'></td>
											       <td contenteditable='true'></td>
											        <td contenteditable='true'></td>
											         <td contenteditable='true'></td>
											          <td contenteditable='true'></td>
											          <td contenteditable='true'></td>
											  <tr>
											    <td>Design Responsibility Matrix</td>
											    <td contenteditable='true'></td>
											  <td contenteditable='true'></td>
											   <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											     <td contenteditable='true'></td>
											      <td contenteditable='true'></td>
											       <td contenteditable='true'></td>
											        <td contenteditable='true'></td>
											         <td contenteditable='true'></td>
											          <td contenteditable='true'></td>
											          <td contenteditable='true'></td>
											  </tr>
											  <tr>
											   <td>Site Information Report</td>
											     <td contenteditable='true'></td>
											  <td contenteditable='true'></td>
											   <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											     <td contenteditable='true'></td>
											      <td contenteditable='true'></td>
											       <td contenteditable='true'></td>
											        <td contenteditable='true'></td>
											         <td contenteditable='true'></td>
											          <td contenteditable='true'></td>
											          <td contenteditable='true'></td>
											  </tr>
											  <tr>
											    <td>Information Exchange Strategy</td>
											     <td contenteditable='true'></td>
											  <td contenteditable='true'></td>
											   <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											     <td contenteditable='true'></td>
											      <td contenteditable='true'></td>
											       <td contenteditable='true'></td>
											        <td contenteditable='true'></td>
											         <td contenteditable='true'></td>
											          <td contenteditable='true'></td>
											          <td contenteditable='true'></td>
											  </tr>
											  <tr>
											    <td>Project Brief/td>
											    <td contenteditable='true'></td>
											  <td contenteditable='true'></td>
											   <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											     <td contenteditable='true'></td>
											      <td contenteditable='true'></td>
											       <td contenteditable='true'></td>
											        <td contenteditable='true'></td>
											         <td contenteditable='true'></td>
											          <td contenteditable='true'></td>
											          <td contenteditable='true'></td>
											  </tr>
											  <tr>
											    <td>Risk Assessment (Lead)</td>
											     <td contenteditable='true'></td>
											  <td contenteditable='true'></td>
											   <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											     <td contenteditable='true'></td>
											      <td contenteditable='true'></td>
											       <td contenteditable='true'></td>
											        <td contenteditable='true'></td>
											         <td contenteditable='true'></td>
											          <td contenteditable='true'></td>
											          <td contenteditable='true'></td>
											  </tr>
											  <tr>
											    <td>Handover Strategy (Lead)</td>
											    <td contenteditable='true'></td>
											  <td contenteditable='true'></td>
											   <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											     <td contenteditable='true'></td>
											      <td contenteditable='true'></td>
											       <td contenteditable='true'></td>
											        <td contenteditable='true'></td>
											         <td contenteditable='true'></td>
											          <td contenteditable='true'></td>
											          <td contenteditable='true'></td>
											  </tr>
											  <tr>
											    <td>Project Execution Plan</td>
											     <td contenteditable='true'></td>
											  <td contenteditable='true'></td>
											   <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											     <td contenteditable='true'></td>
											      <td contenteditable='true'></td>
											       <td contenteditable='true'></td>
											        <td contenteditable='true'></td>
											         <td contenteditable='true'></td>
											          <td contenteditable='true'></td>
											          <td contenteditable='true'></td>
											  </tr>
											  <tr>
											    <td>Design Proposals from Design Team members</td>
											    <td contenteditable='true'></td>
											  <td contenteditable='true'></td>
											   <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											     <td contenteditable='true'></td>
											      <td contenteditable='true'></td>
											       <td contenteditable='true'></td>
											        <td contenteditable='true'></td>
											         <td contenteditable='true'></td>
											          <td contenteditable='true'></td>
											          <td contenteditable='true'></td>
											  </tr>
											</table><br>
											 <button type="button" class="btn btn-info">Add another Lines</button>
								</div>
							</div><br> --}}
							{{-- <div class="row">
								<div class="col-sm-12">
									<table id="Riba1" style="overflow-x:auto;">
											  <tr>
											    <th> Meetings</th>
											    <th>Purpose</th>
											    <th>Attendees</th>
											    <th>Assumed Duration (hours)</th>
											    <th>Reoccurence / Number of Meetings</th>
											    <th>Arrange</th>
											    <th>Attend</th>
											    <th>Minute</th>
											    <th>1</th>
											    <th>2</th>
											    <th>3</th>
											    <th>4</th>
											    <th>5</th>
											    <th>6</th>
											    <th>7</th>
											  </tr>
											  <tr>
											    <td>Pre-Application Meetings</td>
											   <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											   
											 
											    
											  </tr>
											  <tr>
											    <td>Site Visits</td>
											     <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											   
											  </tr>
											  <tr>
											    <td>Site / Project Meetings (RIBA Stage 4/5)</td>
											    <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											    
											  </tr>
											  <tr>
											   <td>SC / PC Site Inspection</td>
											   <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td><div class="mama" onmouseup="mUp(this)"></div></td>
											 <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											    
											  </tr>
											  <tr>
										</table><br>
										<button type="button" class="btn btn-primary">Add another Lines</button>
								</div>
							</div><br> --}}
							{{-- <div class="row">
								<div class="col-sm-12">
									<table id="Content">
											  <tr>
											    <th> Design Considerations</th>
											    <th>Applies to</th>
											  </tr>
											 
											  <tr>
											   <td>Cost, programme, quality, health & safety during construction and operation, functionality, buildability, operation and maintenance.</td>
											    <td contenteditable='true'></td>
											  
											  </tr>
											   <tr>
											   <td>All information provided by other members of the Project Team.</td>
											      <td contenteditable='true'></td>
											  </tr>
											   <tr>
											   <td>Good Practice in the Selection of Construction Materials 2011 (British Council of Offices Publication.</td>
											     <td contenteditable='true'></td>
											  </tr>
											   <tr>
											   <td>Statutory standards</td>
											     <td contenteditable='true'></td>
											  </tr>
											   <tr>
											   <td>Co-ordination with structural and building services</td>
											     <td contenteditable='true'></td>
											  </tr>
										</table><br>
										<button type="button" class="btn btn-info">Add another Lines</button>
								</div>
							</div><br> --}}
								{{-- <div class="row">
								<div class="col-sm-12">
									<table id="Stages1">
											  <tr>
											    <th>Advise on</th>
											    <th>0</th>
											    <th>1</th>
											    <th>2</th>
											    <th>3</th>
											    <th>4</th>
											    <th>5</th>
											    <th>6</th>
											    <th>7</th>
											  </tr>
											  
										      <tr>
											  <td>Any products or materials, specified within the guidelines named in Item ???, that are relevant to the project and have been found to be deleterious or hazardous to health and safety.</td>
											  <td contenteditable='true'></td>
											   <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											     <td contenteditable='true'></td>
											      <td contenteditable='true'></td>
											       <td contenteditable='true'></td>
											        <td contenteditable='true'></td>
											         <td contenteditable='true'></td>
											  </tr>
											     <tr>
											  <td>Assembly of Project Team. (Lead)</td>
										        <td contenteditable='true'></td>
										         <td contenteditable='true'></td>
										          <td contenteditable='true'></td>
										           <td contenteditable='true'></td>
										            <td contenteditable='true'></td>
										             <td contenteditable='true'></td>
										              <td contenteditable='true'></td>
										               <td contenteditable='true'></td>
											  </tr>
											   <tr>
											  <td>Need for and the scope of services by consultants, specialists, sub-contractors or suppliers. (Lead)</td>
											   <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											     <td contenteditable='true'></td>
											      <td contenteditable='true'></td>
											       <td contenteditable='true'></td>
											        <td contenteditable='true'></td>
											         <td contenteditable='true'></td>
											          <td contenteditable='true'></td>
											  </tr>

											   <tr>
											  <td>Form and content of design outputs, their interfaces and a verification procedure. (Lead)</td>
											  <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											     <td contenteditable='true'></td>
											      <td contenteditable='true'></td>
											       <td contenteditable='true'></td>
											        <td contenteditable='true'></td>
											         <td contenteditable='true'></td>
											          <td contenteditable='true'></td>
											  </tr>

											   <tr>
											  <td>Resolution of defects.</td>
											  <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											     <td contenteditable='true'></td>
											      <td contenteditable='true'></td>
											       <td contenteditable='true'></td>
											        <td contenteditable='true'></td>
											         <td contenteditable='true'></td>
											          <td contenteditable='true'></td>
											  </tr>
											  <tr>
											  <td>Form and content of design outputs, their interfaces and a verification procedure. (Lead)</td>
											  <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											     <td contenteditable='true'></td>
											      <td contenteditable='true'></td>
											       <td contenteditable='true'></td>
											        <td contenteditable='true'></td>
											         <td contenteditable='true'></td>
											          <td contenteditable='true'></td>
											  </tr>

											   <tr>
											  <td>Relevant experience from previous projects.</td>
											  <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											     <td contenteditable='true'></td>
											      <td contenteditable='true'></td>
											       <td contenteditable='true'></td>
											        <td contenteditable='true'></td>
											         <td contenteditable='true'></td>
											          <td contenteditable='true'></td>
											  </tr>
											  <tr>
											    <th>Monitor</th>
											    <th></th>
											    <th></th>
											    <th></th>
											    <th></th>
											    <th></th>
											    <th></th>
											    <th></th>
											    <th></th>
											  </tr>

											  <tr>
											  <td>Work of the Designers Designers regarding…. [WHAT?]</td>
											  <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											     <td contenteditable='true'></td>
											      <td contenteditable='true'></td>
											       <td contenteditable='true'></td>
											        <td contenteditable='true'></td>
											         <td contenteditable='true'></td>
											          <td contenteditable='true'></td>
											  </tr>

											  <tr>
											  <td>Performance of Design Team.</td>
											  <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											     <td contenteditable='true'></td>
											      <td contenteditable='true'></td>
											       <td contenteditable='true'></td>
											        <td contenteditable='true'></td>
											         <td contenteditable='true'></td>
											          <td contenteditable='true'></td>
												
											  </tr>										    
											 
											 <tr>
											  <td>Compliance with statutory and contract requirements.</td>
											 <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											     <td contenteditable='true'></td>
											      <td contenteditable='true'></td>
											       <td contenteditable='true'></td>
											        <td contenteditable='true'></td>
											         <td contenteditable='true'></td>
											          <td contenteditable='true'></td>
											  </tr>
											  <tr>
											    <th>Collaborate / Consult with</th>
											    <th></th>
											    <th></th>
											    <th></th>
											    <th></th>
											    <th></th>
											    <th></th>
											    <th></th>
											    <th></th>
											  </tr>
											  <tr>
											  <td>Relevant Third Parties as required.</td>
											   <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											     <td contenteditable='true'></td>
											      <td contenteditable='true'></td>
											       <td contenteditable='true'></td>
											        <td contenteditable='true'></td>
											         <td contenteditable='true'></td>
											          <td contenteditable='true'></td>
											  </tr>
											  <tr>
											  <td>Planning authority to discuss the project</td>
											   <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											     <td contenteditable='true'></td>
											      <td contenteditable='true'></td>
											       <td contenteditable='true'></td>
											        <td contenteditable='true'></td>
											         <td contenteditable='true'></td>
											          <td contenteditable='true'></td>
											  </tr>	
											  <tr>
											  <td>Statutory authorities on developing design.</td>
											   <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											     <td contenteditable='true'></td>
											      <td contenteditable='true'></td>
											       <td contenteditable='true'></td>
											        <td contenteditable='true'></td>
											         <td contenteditable='true'></td>
											          <td contenteditable='true'></td>
											  </tr>	
                                               <tr>
											  <td>Project Manager & Employer on significant design issues. (Lead).</td>
											  <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											     <td contenteditable='true'></td>
											      <td contenteditable='true'></td>
											       <td contenteditable='true'></td>
											        <td contenteditable='true'></td>
											         <td contenteditable='true'></td>
											          <td contenteditable='true'></td>
											  </tr>	
											  <tr>
											    <th>Co-ordinate</th>
											    <th></th>
											    <th></th>
											    <th></th>
											    <th></th>
											    <th></th>
											    <th></th>
											    <th></th>
											    <th></th>
											  </tr>
											  <tr>
											  <td>Collation of all planning submission documents.</td>
											  <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											     <td contenteditable='true'></td>
											      <td contenteditable='true'></td>
											       <td contenteditable='true'></td>
											        <td contenteditable='true'></td>
											         <td contenteditable='true'></td>
											          <td contenteditable='true'></td>
											  </tr>

											  <tr>
											  <td>Reviewing design information provided by contractors or specialists to establish whether that information can be co-ordinated and integrated with other project information.</td>
											   <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											     <td contenteditable='true'></td>
											      <td contenteditable='true'></td>
											       <td contenteditable='true'></td>
											        <td contenteditable='true'></td>
											         <td contenteditable='true'></td>
											          <td contenteditable='true'></td>
											  </tr>
											   <tr>
											    <th>Other</th>
											    <th></th>
											    <th></th>
											    <th></th>
											    <th></th>
											    <th></th>
											    <th></th>
											    <th></th>
											    <th></th>
											  </tr>
                                              
                                              <tr>
											  <td>Submit the [detailed / outline] planning application.</td>
                                               <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											     <td contenteditable='true'></td>
											      <td contenteditable='true'></td>
											       <td contenteditable='true'></td>
											        <td contenteditable='true'></td>
											         <td contenteditable='true'></td>
											          <td contenteditable='true'></td>
											  </tr>

											   <tr>
											  <td>Assisting building user during initial occupation period.</td>
											  <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											     <td contenteditable='true'></td>
											      <td contenteditable='true'></td>
											       <td contenteditable='true'></td>
											        <td contenteditable='true'></td>
											         <td contenteditable='true'></td>
											          <td contenteditable='true'></td>
											  </tr>

											  <tr>
											  <td>Review all instructions and information about the Project, provided by the Employer.</td>
											  <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											     <td contenteditable='true'></td>
											      <td contenteditable='true'></td>
											       <td contenteditable='true'></td>
											        <td contenteditable='true'></td>
											         <td contenteditable='true'></td>
											          <td contenteditable='true'></td>
											  </tr>

											  <tr>
											  <td>preparing and making submissions under building acts and/or regulations or other statutory requirements.</td>
											   <td contenteditable='true'></td>
											    <td contenteditable='true'></td>
											     <td contenteditable='true'></td>
											      <td contenteditable='true'></td>
											       <td contenteditable='true'></td>
											        <td contenteditable='true'></td>
											         <td contenteditable='true'></td>
											          <td contenteditable='true'></td>
											  </tr>


										</table><br>
										<button type="button" class="btn btn-success">Add another Lines</button>
								</div>
								
							</div><br> --}}

							<div class="form-group butcent">
								<button type="button" data-toggle="tab" href="#section6" id="checkinpbut4" name="Next" class="btn btn-primary butsize ">Next</button>
								<button type="button" name="Save" value="Save" class="btn  butsize color">Save</button>
							</div>
						
					</div>

					<div id="section6" class="tab-pane fade tender-container">
						<h3 class="bid-form-title">Appointment</h3>
						<div class="kuwestion">
							<div class="inputscheck">
							<div class="row">
								<div class="col-sm-12">
									<div class="row">
										<div class="col-sm-4">
											<div class="form-group">
												Insurance
											</div>
										</div>
										<div class="col-sm-8">
											<div class="form-group">
												<p >Professional indemnity insurance</p>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-4"></div>
										<div class="col-sm-8">
											<div class="form-group">
												<input type="text" name="" class="form-control" placeholder="Insurance level">
											</div>
										</div>

									</div>
									<div class="row">
										<div class="col-sm-4"></div>
										<div class="col-sm-8">
											<div class="form-group">
												<input type="text" name="" class="form-control" placeholder="Premium cost uplift to achieve required insurance level">
											</div>
										</div>

									</div>
									<div class="row">
										<div class="col-sm-4"></div>
										<div class="col-sm-8">
											<div class="form-group">
												{{-- <img id="uploadPreview4" style="width: 100px; height: 100px;" /> --}}
												<label for="uploadImage7s"><strong>Upload insurance certificate</strong></label>
												<input id="uploadImage4" type="file" name="myPhoto" onchange="PreviewImage4();" />
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-4"></div>
										<div class="col-sm-8">
												<select name="Sel" class="form-control" >
													<option  disabled selected>Select insurance</option>
													<option  value="test">Test</option>
													
												</select>
										</div>
									</div><br>
									<div class="row">
										<div class="col-sm-4">Execution</div>
										<div class="col-sm-8">
											<div class="form-group">
												<input type="text" name="" class="form-control" placeholder="Fixed text">
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
												<p >Parent company guarantee</p>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-4"></div>
										
										<div class="col-sm-8">
								              <select name="Sel"  class="form-control" >
													<option value="" disabled selected>Select</option>
													<option value="test">Agreed</option>
													<option value="test">To be negotiated</option>
													<option value="test">Rejected</option>
													
												</select>
							             
										</div>
									</div><br>
	
								    <div class="row">
										<div class="col-sm-4"></div>
										
										<div class="col-sm-8">
								           	<textarea id="text-input6" cols="25" rows="3" placeholder="Enter text here"></textarea>
												<div class="word-counter">
												     <label id="count-label6">3000</label>/3000 words
												</div>
										</div>
									</div><br>
									<div class="row">
										<div class="col-sm-4">Collateral  Warranties  /  Third  Parties  </div>
										<div class="col-sm-8">
												<p>Collateral Warranties</p>
										</div>
									</div><br>
									<div class="row">
										<div class="col-sm-4"></div>
										
										<div class="col-sm-8">
								              <select name="Sel"  class="form-control" >
													<option value="" disabled selected>Select</option>
													<option value="test">Agreed</option>
													<option value="test">To be negotiated</option>
													<option value="test">Rejected</option>
													
												</select>
							             
										</div>
									</div><br>
									<div class="row">
										<div class="col-sm-4"></div>
										
										<div class="col-sm-8">
								            	<textarea id="text-input7" cols="25" rows="3" placeholder="Comments"></textarea>
												<div class="word-counter">
												     <label id="count-label7">3000</label>/3000 words
												</div>
							             
										</div>
									</div><br>
									<div class="row">
										<div class="col-sm-4">Limit  of  Liability  </div>
										<div class="col-sm-8">
												<p>Collateral Warranties</p>
										</div>
                                       </div><br>
                                       <div class="row">
										<div class="col-sm-4"></div>
										
										<div class="col-sm-8">
								              <select name="Sel"  class="form-control" >
													<option disabled selected>Select</option>
													<option value="test">Agreed</option>
													<option value="test">To be negotiated</option>
													<option value="test">Rejected  </option>
													
												</select>
							             
										</div>
									</div><br>
                                     <div class="row">
										<div class="col-sm-4"></div>
										
										<div class="col-sm-8">
								            	<textarea id="text-input8" cols="25" rows="3" placeholder="Comments"></textarea>
												<div class="word-counter">
												     <label id="count-label8">3000</label>/3000 words
												</div>
							             
										</div>
									</div><br>
										<div class="row">
										<div class="col-sm-4">Execution</div>
										<div class="col-sm-8">
												<p>Collateral Warranties</p>
										</div>
                                      </div><br>
									<div class="row">
										<div class="col-sm-4"></div>
										<div class="col-sm-8">
								               <input type="checkbox" name="" value="test" class="filled-in" id="check14" >   <label for="check14">I Agree</label>
							             </div>
									</div><br>
									<div class="row">
										<div class="col-sm-4">Net  contribution  clause </div>
										<div class="col-sm-8">
												<p >Yes</p>
										</div>
                                       </div><br>
                                       <div class="row">
										<div class="col-sm-4"></div>
										
										<div class="col-sm-8">
								              <select name="Sel"  class="form-control" >
													<option value="" disabled selected>Select</option>
													<option value="test" >Agreed</option>
													<option value="test" >To be negotiated</option>
													<option value="test" >Rejected</option>
													
												</select>
							             
										</div>
									</div><br>
									<div class="row">
                                    
										<div class="col-sm-4">	
												Form of Appointment
										</div>
											<div class="col-sm-8">
												<button class="btn"><i class="fa fa-download"></i> Download</button>
												<button type="button" class="btn btn-danger">View</button>
										</div>
									</div><br>
									<div class="row">
										<div class="col-sm-4">
											
										</div>
										<div class="col-sm-8">
												<input type="text" name="" class="form-control" placeholder="Enter clause here">
										</div>
									</div><br>
									  
									<div class="row">
										<div class="col-sm-4">
											
										</div>
										<div class="col-sm-8">
												<textarea id="text-input9" cols="25" rows="3" placeholder="Comments"></textarea>
												<div class="word-counter">
												     <label id="count-label9">3000</label>/3000 words
												</div>
										</div>
									</div><br>
									 <div class="row">
										<div class="col-sm-4">
											
										</div>
										<div class="col-sm-8">
												<div class="input_fields_comm">
												    <button class="btn btn-primary" id="add_field_comm">Add another comment</button>
												    <div></div>
												</div>
											</div>
									</div><br>
									<div class="row">
										<div class="col-sm-4">
											
										</div>
										<div class="col-sm-8">
												<input type="text" name="" class="form-control" placeholder="Enter new suggested work here">
										</div>
									</div><br>
									<div class="row">
										<div class="col-sm-4">
											Documents for Signature
										</div>
										<div class="col-sm-8">
												<input type="text" name="" class="form-control" placeholder="Document title">
									</div>
								</div><br>
									<div class="row">
										<div class="col-sm-4">	
												
										</div>
											<div class="col-sm-8">
												<button class="btn"><i class="fa fa-download"></i> Download</button>
												<button type="button" class="btn btn-info">Upload</button>
										</div>
									</div><br>
									
									<div class="form-group butcent">
										<button type="button" data-toggle="tab" href="#section7" id="checkinpbut5" name="Next" class="btn btn-primary butsize ">Next</button>
										<button type="button" name="Save" value="Save" class="btn  butsize color">Save</button>
										
									</div>
								</div>
							</div>
						</div>
					</div>
					</div>
					<div id="section7" class="tab-pane fade tender-container" style="margin-bottom: 117px;">
						<h3 class="bid-form-title">Quality Assurance</h3>
						
							<div class="row">
								<div class="col-sm-12">
									<div class="row">
										<div class="col-sm-4">
											<div class="form-group">
												Created by
											</div>
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
									<div class="row">
										<div class="col-sm-4">
											<div class="form-group">
												
											</div>
										</div>
										<div class="col-sm-8">
											
										</div>
									</div>
									<div class="row">
										<div class="col-sm-4"></div>
											<div class="col-sm-8">
											<div class="form-group">
												<div class="input-group date" id="datepicker4" data-date="02-2012" 
												         data-date-format="mm-yyyy">

													 <input class="form-control" type="text" placeholder="Select year" readonly="readonly" name="date" >	  
													 <span class="input-group-addon add-on"><span class="fa fa-calendar"></span></span>	  
												</div>
												
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-4">
											<div class="form-group">
												Checked by
											</div>
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
									<div class="row">
										<div class="col-sm-4">
											<div class="form-group">
												
											</div>
										</div>
										<div class="col-sm-8">
											
										</div>
									</div>
									<div class="row">
										<div class="col-sm-4"></div>
											<div class="col-sm-8">
											<div class="form-group">
												<div class="input-group date" id="datepicker10" data-date="02-2012" 
												         data-date-format="mm-yyyy">

													 <input class="form-control" type="text" placeholder="Select year" readonly="readonly" name="date" >	  
													 <span class="input-group-addon add-on"><span class="fa fa-calendar"></span></span>	  
												</div>
												
											</div>
										</div>
									</div>
										<div class="row">
										<div class="col-sm-4">
											<div class="form-group">
												Approved by
											</div>
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
									<div class="row">
										<div class="col-sm-4">
											<div class="form-group">
												
											</div>
										</div>
										<div class="col-sm-8">
											
										</div>
									</div>
									<div class="row">
										<div class="col-sm-4"></div>
											<div class="col-sm-8">
											<div class="form-group">
												<div class="input-group date" id="datepicker11" data-date="02-2012" 
												         data-date-format="mm-yyyy">

													 <input class="form-control" type="text" placeholder="Select year" readonly="readonly" name="date" >	  
													 <span class="input-group-addon add-on"><span class="fa fa-calendar"></span></span>	  
												</div>
												
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-4">
											Statements
										</div>
										<div class="col-sm-8">
								               <input type="checkbox" name="" value="" class="filled-in" id="check13" >     <label for="check13">I Agree to XXX</label>
							              </div>
									</div>
									<div class="form-group butcent">
										<button id="submitfrm" type="submit" name="submit" class="btn btn-primary butsize ">Submit</button>
										<button name="Save" value="Save" class="btn  butsize color">Save</button>
									</div>
								</div>
							</div>
					</div>
					</form>
				</div>
			</div>			
		</div>
	</div>
<script>
function mUp(obj) {
    obj.style.backgroundColor="none";
    obj.innerHTML="x";
}
</script>
<script type="text/javascript">
	var maxLength = 3000;
$('textarea').keyup(function() {
  var textlen = maxLength - $(this).val().length;
  $('#rchars').text(textlen);
});

</script>
<script type="text/javascript">
	var maxLength1 = 3000;
	$('#textareaap').keyup(function() {
   var textlen1 = maxLength1 - $(this).val().length;
    $('#rchars1').text(textlen1);
	});

</script>
<script type="text/javascript">
	var maxLength2 = 3000;
	$('#textarea2').keyup(function() {
   var textlen2 = maxLength2 - $(this).val().length;
    $('#rchars2').text(textlen2);
	});

</script>
<script type="text/javascript">
	var maxLength3 = 3000;
	$('#textarea3').keyup(function() {
   var textlen3 = maxLength3 - $(this).val().length;
    $('#rchars3').text(textlen3);
	});

</script>
<script type="text/javascript">
	var maxLength4 = 3000;
	$('#textarea4').keyup(function() {
   var textlen4 = maxLength4 - $(this).val().length;
    $('#rchars4').text(textlen4);
	});

</script>
<script type="text/javascript">
	var maxLength5 = 3000;
	$('#textarea5').keyup(function() {
   var textlen5 = maxLength5 - $(this).val().length;
    $('#rchars5').text(textlen5);
	});

</script>
<script type="text/javascript">
	var maxLength6 = 3000;
	$('#textarea6').keyup(function() {
   var textlen6 = maxLength6 - $(this).val().length;
    $('#rchars6').text(textlen6);
	});

</script>
<script type="text/javascript">
	$(window).scroll(function () { 

	// distance from top of footer to top of document
	footertotop = ($('#footr').position().top);
	// distance user has scrolled from top, adjusted to take in height of sidebar (570 pixels inc. padding)
	scrolltop = $(document).scrollTop()+720;
	// difference between the two
	difference = scrolltop-footertotop;

	// if user has scrolled further than footer,
	// pull sidebar up using a negative margin

	if (scrolltop > footertotop) {

	$('#d').css('margin-top',  0-difference);
	}

	else  {
	$('#d').css('margin-top', 0);
	}


	});
</script>

<script type="text/javascript">
	$(document).ready(function() {
		$('.tata').click(function()
			{
				var ch = $('.tata:checked').length == $('.tata').length;
				if(ch){
					// alert('okna');
					$(".nbtn").removeClass("disabled");
					$(".nbtn").removeClass("pointerev");
					// display sa modal
					// $("#pngnext").modal('toggle');
				}
			}
		);
		$('#sec2').click(function(){
			$("li.disd").next().removeClass("disd");
			var list = $("li.active");
			$("li.active a i.checkerg").removeClass("hidecheck");
			$("li.active").next('li').addClass("active");
			$("li.active").next().removeClass("disd");
			list.removeClass("active");

			$(".tender-container.active.in").find('.inputscheck').addClass("disd");
			jQuery('html,body').animate({scrollTop:0},0);
			

		});

		$('#checkinpbut').click(function(e)
		{
			// var validation = validateFormSection();
			// if(validation){
				var list = $("li.active");
				// $("li.active a i.checkerg").removeClass("hidecheck");
				$("li.active").next('li').addClass("active");
				list.removeClass("active");

				// $(".tender-container.active.in").find('.inputscheck').addClass("");

				

				var divi = $(".tender-container.active.in");
				$(".tender-container.active.in").next().addClass("active");
				$(".tender-container.active.in").next().addClass("in");
				divi.removeClass("active");
				divi.removeClass("in");
				jQuery('html,body').animate({scrollTop:0},0);


			// }
		});

		$('#checkinpbut2').click(function()
		{
				var list = $("li.active");
				// $("li.active a i.checkerg").removeClass("hidecheck");
				$("li.active").next('li').addClass("active");
				list.removeClass("active");

				// $(".tender-container.active.in").find('.inputscheck').addClass("");

				var divi = $(".tender-container.active.in");
				$(".tender-container.active.in").next().addClass("active");
				$(".tender-container.active.in").next().addClass("in");
				divi.removeClass("active");
				divi.removeClass("in");
				jQuery('html,body').animate({scrollTop:0},0);

		});

		$('#checkinpbut3').click(function()
		{
				var list = $("li.active");
				// $("li.active a i.checkerg").removeClass("hidecheck");
				$("li.active").next('li').addClass("active");
				list.removeClass("active");

				// $(".tender-container.active.in").find('.inputscheck').addClass("");

				var divi = $(".tender-container.active.in");
				$(".tender-container.active.in").next().addClass("active");
				$(".tender-container.active.in").next().addClass("in");
				divi.removeClass("active");
				divi.removeClass("in");
				jQuery('html,body').animate({scrollTop:0},0);

		});

		$('#checkinpbut4').click(function()
		{
			var list = $("li.active");
			$("li.active").next().removeClass("disd");
			// $("li.active a i.checkerg").removeClass("hidecheck");
			$("li.active").next('li').addClass("active");
			list.removeClass("active");

			// $(".tender-container.active.in").find('.inputscheck').addClass("");

			var divi = $(".tender-container.active.in");
			$(".tender-container.active.in").next().addClass("active");
			$(".tender-container.active.in").next().addClass("in");
			divi.removeClass("active");
			divi.removeClass("in");
			jQuery('html,body').animate({scrollTop:0},0);
		});

		$('#checkinpbut5').click(function(e)
		{
				var list = $("li.active");
				// $("li.active a i.checkerg").removeClass("hidecheck");
				$("li.active").next('li').addClass("active");
				list.removeClass("active");

				// $(".tender-container.active.in").find('.inputscheck').addClass("");

				var divi = $(".tender-container.active.in");
				$(".tender-container.active.in").next().addClass("active");
				$(".tender-container.active.in").next().addClass("in");
				divi.removeClass("active");
				divi.removeClass("in");
				jQuery('html,body').animate({scrollTop:0},0);

		});

		$('.totop').click(function(e)
		{
			jQuery('html,body').animate({scrollTop:0},0);
		});

		$('#valconfi').click(function(e)
			{
				if ($(this).is(':checked')) {
					$('#consvalue').prop('readonly', true);
				}
				else{
					$('#consvalue').prop('readonly', false);
				}
			});

		$('#uploadImage7s').change(function()
		{
			var $fileUpload = $("#uploadImage7s");
            if (parseInt($fileUpload.get(0).files.length) > 10){
                alert("You are only allowed to upload a maximum of 10 files");
                $("#uploadImage7s").val('');
            }
            else{
            	var fileup = $("#uploadImage7s")[0].files;
            	var i;
            	for (i = 0; i < fileup.length; i++) { 
            	    var imgname = fileup[i].name.split('.').pop().toLowerCase();;
            	    if($.inArray(imgname, ['gif','png','jpg','jpeg']) == -1)
            	    {
            	    	alert("Invalid file type");
            	    	$("#uploadImage7s").val('');
            	    }
            	}
            }
		});

		$('#submitfrm').click(function()
		{
			$("#pngsubmit").modal('toggle');
		});
	
	function validateFormSection() {
        var valid = true; //As long as it's true, we may continue
        var section = $('.tender-container.active.in').find('.kuwestion'); //Find the active section
        var inputs = section.find('input, select, textarea'); //Get all its inputs, of all types
        //We'll save the first validated element in here
        //We have to define it here, not inside the `inputs.each()` loop
        //So we have access to it outside that loop
        var focusElem;
        // alert(inputs.length);
        inputs.each(function(index, el) {
            var elem = $(el); //Current element we're working with
            //alert(elem.val());
            if( elem.val() === 'null'){
            	valid = false;
            }
            else{
            	// alert(elem.val().length);
            	if ( elem.val().length === 0 ) {
            		// alert(elem.val().length);
            		// alert(elem);
	                valid = false;
	                // alert('Please fill mandatory fields');
	                return valid;
	                // elem.addClass('active');
	                if ( ! focusElem ) { //Only save when it's empty (first time around)
	                    focusElem = elem;
	                }
	            }
            }
        });
        if ( ! valid ) {
            alert('Please fill mandatory fields');
            // focusElem.focus();

        }
        else if(valid){
        	$("li.active").next().removeClass("");
        }
        jQuery('html,body').animate({scrollTop:0},0);
        return valid;
    }
    });
</script>
<script type="text/javascript">
	function showadd(){
		$('.hid.adserv').css('display','block');
		$('.notherbut').css('display','none');
	};
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

	function showaddserindi(){
		$('.hid.adservindi').css('display','block');
		$('.notherbutindi').css('display','none');
	};
	function addserviceindi()
	{
		var ival = $.trim($('.adservindi').val());
		if( ival.length != "" ){
			ival = ival.toLowerCase().replace(/\b[a-z]/g, function(letter) {
			    return letter.toUpperCase();
			});
			var out = "<li><div class='form-check'><label><input type='checkbox' checked name='offeredservicesindi[]' value='"+ival+"'><span class='label-text'>"+ival+"</span></label></div></li>";
			$('ul#servicelistindi').append(out);
		}

		$('.hid.adservindi').css('display','none');
		$('.notherbutindi').css('display','block');
		$('.adservindi').val('');
	}

	function showaddtype(){
		$('.hid.adtypeofuse').css('display','block');
		$('.notherbuttypeofuse').css('display','none');
	};
	function addtypeofuse()
	{
		var ival = $.trim($('.adtypeofuse').val());
		if( ival.length != "" ){
			ival = ival.toLowerCase().replace(/\b[a-z]/g, function(letter) {
			    return letter.toUpperCase();
			});
			var out = "<li><div class='form-check'><label><input type='checkbox' checked name='typeofuse[]' value='"+ival+"'><span class='label-text'>"+ival+"</span></label></div></li>";
			$('ul#typeofuse').append(out);
		}

		$('.hid.adtypeofuse').css('display','none');
		$('.notherbuttypeofuse').css('display','block');
		$('.adtypeofuse').val('');
	}

	function showaddtypedev(){
		$('.hid.adtypeofdev').css('display','block');
		$('.notherbuttypeofdev').css('display','none');
	};
	function addtypeofdev()
	{
		var ival = $.trim($('.adtypeofdev').val());
		if( ival.length != "" ){
			ival = ival.toLowerCase().replace(/\b[a-z]/g, function(letter) {
			    return letter.toUpperCase();
			});
			var out = "<li><div class='form-check'><label><input type='checkbox' checked name='typeofdev[]' value='"+ival+"'><span class='label-text'>"+ival+"</span></label></div></li>";
			$('ul#typeofdev').append(out);
		}

		$('.hid.adtypeofdev').css('display','none');
		$('.notherbuttypeofdev').css('display','block');
		$('.adtypeofdev').val('');
	}
</script>
<!-- end -->


<script type="text/javascript">
	(function() {

		// getElementById
		function $id(id) {
			return document.getElementById(id);
		}


		// output information
		function Output(msg) {
			var m = $id("messages");
			m.innerHTML = msg + m.innerHTML;
		}


		// file drag hover
		function FileDragHover(e) {
			e.stopPropagation();
			e.preventDefault();
			e.target.className = (e.type == "dragover" ? "hover" : "");
		}


		// file selection
		function FileSelectHandler(e) {

			// cancel event and hover styling
			FileDragHover(e);

			// fetch FileList object
			var files = e.target.files || e.dataTransfer.files;

			// process all File objects
			for (var i = 0, f; f = files[i]; i++) {
				ParseFile(f);
			}

		}


		// output file information
		function ParseFile(file) {

			Output(
				"<p>File information: <strong>" + file.name +
				"</strong> type: <strong>" + file.type +
				"</strong> size: <strong>" + file.size +
				"</strong> bytes</p>"
			);

		}


		// initialize
		function Init() {

			var fileselect = $id("fileselect"),
				filedrag = $id("filedrag"),
				submitbutton = $id("submitbutton");

			// file select
			fileselect.addEventListener("change", FileSelectHandler, false);

			// is XHR2 available?
			var xhr = new XMLHttpRequest();
			if (xhr.upload) {

				// file drop
				filedrag.addEventListener("dragover", FileDragHover, false);
				filedrag.addEventListener("dragleave", FileDragHover, false);
				filedrag.addEventListener("drop", FileSelectHandler, false);
				filedrag.style.display = "block";

				// remove submit button
				submitbutton.style.display = "none";
			}

		}

		// call initialization file
		if (window.File && window.FileList && window.FileReader) {
			Init();
		}


	})();
</script>
<script type="text/javascript">
	$(document).ready(function(){
	    $(".addawrd").click(function(){
	    var name = $('.awrd_name').val();
	    var detail = $('.awrd_details').val();
	    var by = $('.awrd_by').val();
	    var datew = $('.awrd_date').val();
	    $('.addeditem').append('<div onclick="showedit()" class="alert alert-awrds alert-dismissible itemadd"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>'+name+'</strong><input type="hidden" name="award[name]" value="'+name+'"><input type="hidden" name="award[details]" value="'+detail+'"><input type="hidden" name="award[by]" value="'+by+'"><input type="hidden" name="award[datew]" value="'+datew+'"></div>');
	    $('.awrd_name').val('');
	    $('.awrd_details').val('');
	    $('.awrd_by').val('');
	    $('.awrd_date').val('');
	    $('#awards').modal('toggle');
	    });


	});
</script>
<script type="text/javascript">
	var limitWord = 3000;
$("#text-input").keyup(function () {
    $this = $(this);
    var regex = /\s+/gi;
    var wordcount = jQuery.trim($this.val()).replace(regex, ' ').split(' ').length;
    if (wordcount <= limitWord) {
        chars = $this.val().length;
    } else {
        var text = $(this).val();
        var new_text = text.substr(0, chars);
        $(this).val(new_text);
        wordcount--;
    }
    $("#count-label").html(limitWord - wordcount);
});
</script>
<script type="text/javascript">
	var limitWord = 3000;
$("#text-input1").keyup(function () {
    $this = $(this);
    var regex = /\s+/gi;
    var wordcount = jQuery.trim($this.val()).replace(regex, ' ').split(' ').length;
    if (wordcount <= limitWord) {
        chars = $this.val().length;
    } else {
        var text = $(this).val();
        var new_text = text.substr(0, chars);
        $(this).val(new_text);
        wordcount--;
    }
    $("#count-label1").html(limitWord - wordcount);
});
</script>
<script type="text/javascript">
	var limitWord = 3000;
$("#text-input2").keyup(function () {
    $this = $(this);
    var regex = /\s+/gi;
    var wordcount = jQuery.trim($this.val()).replace(regex, ' ').split(' ').length;
    if (wordcount <= limitWord) {
        chars = $this.val().length;
    } else {
        var text = $(this).val();
        var new_text = text.substr(0, chars);
        $(this).val(new_text);
        wordcount--;
    }
    $("#count-label2").html(limitWord - wordcount);
});
</script>
<script type="text/javascript">
	var limitWord = 3000;
$("#text-input3").keyup(function () {
    $this = $(this);
    var regex = /\s+/gi;
    var wordcount = jQuery.trim($this.val()).replace(regex, ' ').split(' ').length;
    if (wordcount <= limitWord) {
        chars = $this.val().length;
    } else {
        var text = $(this).val();
        var new_text = text.substr(0, chars);
        $(this).val(new_text);
        wordcount--;
    }
    $("#count-label3").html(limitWord - wordcount);
});
</script>
<script type="text/javascript">
	var limitWord = 3000;
$("#text-input4").keyup(function () {
    $this = $(this);
    var regex = /\s+/gi;
    var wordcount = jQuery.trim($this.val()).replace(regex, ' ').split(' ').length;
    if (wordcount <= limitWord) {
        chars = $this.val().length;
    } else {
        var text = $(this).val();
        var new_text = text.substr(0, chars);
        $(this).val(new_text);
        wordcount--;
    }
    $("#count-label4").html(limitWord - wordcount);
});
</script>
<script type="text/javascript">
	var limitWord = 3000;
$("#text-input5").keyup(function () {
    $this = $(this);
    var regex = /\s+/gi;
    var wordcount = jQuery.trim($this.val()).replace(regex, ' ').split(' ').length;
    if (wordcount <= limitWord) {
        chars = $this.val().length;
    } else {
        var text = $(this).val();
        var new_text = text.substr(0, chars);
        $(this).val(new_text);
        wordcount--;
    }
    $("#count-label5").html(limitWord - wordcount);
});
</script>
<script type="text/javascript">
	var limitWord = 3000;
$("#text-input5").keyup(function () {
    $this = $(this);
    var regex = /\s+/gi;
    var wordcount = jQuery.trim($this.val()).replace(regex, ' ').split(' ').length;
    if (wordcount <= limitWord) {
        chars = $this.val().length;
    } else {
        var text = $(this).val();
        var new_text = text.substr(0, chars);
        $(this).val(new_text);
        wordcount--;
    }
    $("#count-label5").html(limitWord - wordcount);
});
</script>
<script type="text/javascript">
	var limitWord = 3000;
$("#text-input6").keyup(function () {
    $this = $(this);
    var regex = /\s+/gi;
    var wordcount = jQuery.trim($this.val()).replace(regex, ' ').split(' ').length;
    if (wordcount <= limitWord) {
        chars = $this.val().length;
    } else {
        var text = $(this).val();
        var new_text = text.substr(0, chars);
        $(this).val(new_text);
        wordcount--;
    }
    $("#count-label6").html(limitWord - wordcount);
});
</script>
<script type="text/javascript">
	var limitWord = 3000;
$("#text-input7").keyup(function () {
    $this = $(this);
    var regex = /\s+/gi;
    var wordcount = jQuery.trim($this.val()).replace(regex, ' ').split(' ').length;
    if (wordcount <= limitWord) {
        chars = $this.val().length;
    } else {
        var text = $(this).val();
        var new_text = text.substr(0, chars);
        $(this).val(new_text);
        wordcount--;
    }
    $("#count-label7").html(limitWord - wordcount);
});
</script>
<script type="text/javascript">
	var limitWord = 3000;
$("#text-input5").keyup(function () {
    $this = $(this);
    var regex = /\s+/gi;
    var wordcount = jQuery.trim($this.val()).replace(regex, ' ').split(' ').length;
    if (wordcount <= limitWord) {
        chars = $this.val().length;
    } else {
        var text = $(this).val();
        var new_text = text.substr(0, chars);
        $(this).val(new_text);
        wordcount--;
    }
    $("#count-label5").html(limitWord - wordcount);
});
</script>
<script type="text/javascript">
	var limitWord = 3000;
$("#text-input8").keyup(function () {
    $this = $(this);
    var regex = /\s+/gi;
    var wordcount = jQuery.trim($this.val()).replace(regex, ' ').split(' ').length;
    if (wordcount <= limitWord) {
        chars = $this.val().length;
    } else {
        var text = $(this).val();
        var new_text = text.substr(0, chars);
        $(this).val(new_text);
        wordcount--;
    }
    $("#count-label8").html(limitWord - wordcount);
});
</script>
<script type="text/javascript">
	var limitWord = 3000;
$("#text-input9").keyup(function () {
    $this = $(this);
    var regex = /\s+/gi;
    var wordcount = jQuery.trim($this.val()).replace(regex, ' ').split(' ').length;
    if (wordcount <= limitWord) {
        chars = $this.val().length;
    } else {
        var text = $(this).val();
        var new_text = text.substr(0, chars);
        $(this).val(new_text);
        wordcount--;
    }
    $("#count-label9").html(limitWord - wordcount);
});
</script>
<script>
function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}

/*An array containing all the country names in the world:*/
var countries = ["MCIOD",
													"AssocRICS",
													"MRICS",
													"FRICS",
													"HonRICS",
													"BREEAM AP",
													"RIBA"];

/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("myInput"), countries);
</script>
<script>
function autocomplete1(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}

/*An array containing all the country names in the world:*/
var countries = ["BA",
															"BSA","BAcy","BAcc","B.A.Sc.","BArch ","BBA",
															"BCE","BCom","BCA","BDes","B.Des.Corp","B.Des.Arch",
															"BEng","BEC","BEE","BFA","B.Hlth.Sci.","BIT","BIGS",
															"LLB","BLAS","BMath","BME","B.P.E.S.S","B.Res.Ec","BSc",
															"BS.EOH","BSLS","BTech","BVA","MA","MBA","MCom","BCA","MEM",
															"MEDM","MFA","MIS","LLM","MLA","MPS","MPA","MPH","MSc","MSF",
															"MTech","DLP","Dr.mph.","PhD","PsyD","DrPH","DSc"];

/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete1(document.getElementById("myInput1"), countries);
</script>

@endsection


