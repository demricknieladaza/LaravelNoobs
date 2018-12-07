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
	/*========================================================*/
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
	.chos{
		padding: 5px;
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
	.inputwidth{
		width: 100px;
	}
	.dropdown-menu{
		margin-left: 0;
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
<script>
	$(document).ready(function(){
		$('#bid_scope').click(function(){
			alert('clicked!');
			var strats = new Array();
			var progs = new Array();
			var feas = new Array();
			var des = new Array();
			var sits = new Array();
			var infs = new Array();
			var projs = new Array();
			var risks = new Array();
			var hands = new Array();
			var execs = new Array();
			var props = new Array();

			var preapp = new Array();
			$.each($('input[name="pre_app_num_ans[]"]'),function(v,k){
				preapp.push(k['value']);
			});

			var sitev = new Array();
			$.each($('input[name="site_visits_num_ans[]"]'),function(v,k){
				sitev.push(k['value']);
			});

			var ribast = new Array();
			$.each($('input[name="riba_num_ans[]"]'),function(v,k){
				ribast.push(k['value']);
			});

			var inspect = new Array();
			$.each($('input[name="inspection_num_ans[]"]'),function(v,k){
				inspect.push(k['value']);
			});

			var adone = new Array();
			$.each($('input[name="advise_one_ans[]"]'),function(v,k){
				adone.push(k['value']);
			});

			var adtwo = new Array();
			$.each($('input[name="advise_two_ans[]"]'),function(v,k){
				adtwo.push(k['value']);
			});

			var adthree = new Array();
			$.each($('input[name="advise_three_ans[]"]'),function(v,k){
				adthree.push(k['value']);
			});

			var adfour = new Array();
			$.each($('input[name="advise_four_ans[]"]'),function(v,k){
				adfour.push(k['value']);
			});

			var adfive = new Array();
			$.each($('input[name="advise_five_ans[]"]'),function(v,k){
				adfive.push(k['value']);
			});

			var adsix = new Array();
			$.each($('input[name="advise_six_ans[]"]'),function(v,k){
				adsix.push(k['value']);
			});

			var colone = new Array();
			$.each($('input[name="collab_one_ans[]"]'),function(v,k){
				colone.push(k['value']);
			});

			var coltwo = new Array();
			$.each($('input[name="collab_two_ans[]"]'),function(v,k){
				coltwo.push(k['value']);
			});

			var colthree = new Array();
			$.each($('input[name="collab_three_ans[]"]'),function(v,k){
				colthree.push(k['value']);
			});

			var colfour = new Array();
			$.each($('input[name="collab_four_ans[]"]'),function(v,k){
				colfour.push(k['value']);
			});

			var corone = new Array();
			$.each($('input[name="coordinate_one_ans[]"]'),function(v,k){
				corone.push(k['value']);
			});

			var cortwo = new Array();
			$.each($('input[name="coordinate_two_ans[]"]'),function(v,k){
				cortwo.push(k['value']);
			});

			var othone = new Array();
			$.each($('input[name="other_one_ans[]"]'),function(v,k){
				othone.push(k['value']);
			});

			var othtwo = new Array();
			$.each($('input[name="other_two_ans[]"]'),function(v,k){
				othtwo.push(k['value']);
			});

			var oththree = new Array();
			$.each($('input[name="other_three_ans[]"]'),function(v,k){
				oththree.push(k['value']);
			});

			var othfour = new Array();
			$.each($('input[name="other_four_ans[]"]'),function(v,k){
				othfour.push(k['value']);
			});
			

			$.each($('input[name="strategic_num_ans[]"]'),function(v,k){
				strats.push(k['value']);
			});
			$.each($('input[name="pprogramme_num_ans[]"]'),function(v,k){
				progs.push(k['value']);
			});
			$.each($('input[name="feasibility_num_ans[]"]'),function(v,k){
				feas.push(k['value']);
			});
			$.each($('input[name="design_num_ans[]"]'),function(v,k){
				des.push(k['value']);
			});
			$.each($('input[name="site_num_ans[]"]'),function(v,k){
				sits.push(k['value']);
			});
			$.each($('input[name="info_num_ans[]"]'),function(v,k){
				infs.push(k['value']);
			});
			$.each($('input[name="project_num_ans[]"]'),function(v,k){
				projs.push(k['value']);
			});
			$.each($('input[name="risk_num_ans[]"]'),function(v,k){
				risks.push(k['value']);
			});
			$.each($('input[name="hand_num_ans[]"]'),function(v,k){
				hands.push(k['value']);
			});	
			$.each($('input[name="execution_num_ans[]"]'),function(v,k){
				execs.push(k['value']);
			});	
			$.each($('input[name="proposal_num_ans[]"]'),function(v,k){
				props.push(k['value']);
			});	
			$.ajax({
				url: '{{ url("bid_scope") }}',
				method: 'post',
				data: { 
					strat: strats,
					prog: progs,
					fea: feas,
					de: des,
					sit: sits,
					inf: infs,
					proj: projs,
					risk: risks,
					hand: hands,
					exec: execs,
					prop: props,
					preapp: preapp,
					sitev: sitev,
					ribast: ribast,
					inspect: inspect,
					adone: adone,
					adtwo: adtwo,
					adthree: adthree,
					adfour: adfour,
					adfive: adfive,
					adsix: adsix,
					colone: colone,
					coltwo: coltwo,
					colthree: colthree,
					colfour: colfour,
					corone: corone,
					cortwo: cortwo,
					othone: othone,
					othtwo: othtwo,
					oththree: oththree,
					othfour: othfour,
					tender_id: jQuery("input[name='tender_id']").val()
				},
				success: function(result){
					// console.log(result);
				}
			}) 	
		});
		$('#submit_query').click(function(){
			// var idd = $('#serveprojtitle').attr('data-id');
			if(jQuery("textarea[name='query']").val()==""){

			}
			else{
				jQuery.ajax({
				url:"{{ url('tender_queries') }}",
				method: 'post',
				data: {
					project_record_id: jQuery("input[name='project_record_id']").val(),
					tender_id: jQuery("input[name='tender_id']").val(),
					question: jQuery("textarea[name='query']").val()
				},
				success: function(result){
					console.log(result);
					location.reload();
				}
			});
			}
		});
		$('#add_field_coms').click(function(){
			$('#commnts').append('<textarea id="text-input4" name="comments_constraints[]" cols="25" rows="3" placeholder="Enter here.."></textarea><div class="word-counter"><label id="count-label4">3000</label>/3000 words</div>');
		});
		$('#add_field_sols').click(function(){
			$('#soltions').append('<textarea id="text-input5" name="solutions[]" cols="25" rows="3" placeholder="Enter text here"></textarea><div class="word-counter"><label id="count-label5">3000</label>/3000 words </div>');
		});
		$('#ind_save').click(function(){
			alert('clicked!');
			var ind = [];
			jQuery("input[name='individuals[]']").each(function()
				{	
					if($(this).prop('checked')){
						ind.push($(this).val());
					}
					
				}
			);
			$.ajax({
				url:"{{ url('bid_ind') }}",
				method: 'post',
				data: {
					individual: ind,
					tender_id: jQuery("input[name='tender_id']").val()
				},
				success: function(result){
					console.log(result);
				}
			});
		});
		$('#approach_save').click(function(){
			var approachData = new FormData(document.getElementById('approachForm'));
			$.ajax({
				url:"{{ url('bid_approach') }}",
				method: 'post',
				data: approachData,
				dataType: 'json',
				processData: false,
				contentType: false,
				success: function(result){
					console.log(result);
				}
			});
		});
		$('#appointment_save').click(function(){
			var appointmentData = new FormData(document.getElementById('appointmentForm'));
			$.ajax({
				url:"{{ url('bid_appointment') }}",
				method: 'post',
				data: appointmentData,
				dataType: 'json',
				processData: false,
				contentType: false,
				success: function(result){
					console.log(result);
				}
			});
		});
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

		$('#datepicker4').datepicker({
	    	format: "mm-yyyy",
		    viewMode: "months", 
		    minViewMode: "months"
	    });
	    $('#datepicker10').datepicker({
	    	format: "mm-yyyy",
		    viewMode: "months", 
		    minViewMode: "months"
	    });
	    $('#datepicker11').datepicker({
	    	format: "mm-yyyy",
		    viewMode: "months", 
		    minViewMode: "months"
	    });

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
</script>


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
						<button type="button" id="submit_query" class="btn btn-success" style="color: #fff;background-color: #fe7235;">Submit</button>
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
	          <textarea name="query" placeholder="Enter your query here" rows="4" cols="50" active></textarea>
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
					<button type="button"  class="btn btn-info" data-dismiss="modal">Go Back</button>
					<button type="button" id="submitBid" class="btn btn-success">Submit</button>
				</div>
			</div>
		</div>
	</div>
	<div class="container below-header" style="padding-right: 0;">
		<h1 class="project-title bid-page-title" style="margin-right:0;margin-left:0;width: 100%;">{{ $project->project_title }} - <small>{{ $tender->services }}</small></h1>			
	</div> 

	<div class="container">
		<div class="row">
				@if (count($tr)!=0)
					<div class="alert alert-warning" id="danger-alerts" >
					    <strong>Sorry!</strong> you already submitted a bid to this tender.
					</div>
				@endif
			<div id="d" class="col-sm-4" style="position: fixed; width:355px;" >
				<div class="tender-container" style="border-radius: 6px;">
					<ul class="nav bid-form-nav">
						<li @if (count($tr)!=0)class="disd totop" @else class="active totop" @endif ><a data-toggle="tab" href="#section1">Pre-Qualification Questionnaire<i class="fa fa-check checkerg hidecheck" style="line-height: -1px !important;"></i></a></li>
						{{-- <li class="disda totop" ><a data-toggle="tab" href="#section2">Organisation<i class="fa fa-check checkerg hidecheck" style="line-height: -1px !important;"></i></a></li> --}}
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
			<div @if (count($tr)!=0)class="col-sm-8 questionnaire-section disd" @else class="col-sm-8 questionnaire-section" @endif  style="margin-left: 338px; width: 845px;">
				<div class="tab-content">
					<div id="section1" class="tab-pane fade in active tender-container" style="border-radius: 6px;min-height: 600px;">
						<h3 class="bid-form-title">Pre-Qualification Questionnaire</h3>
							<div class="inputscheck">
								<?php
							
									$q = explode("^", $pre_qual->question);
									$counter = 1;
									foreach($q as $qu){
										echo '<div class="form-group">
													<input type="checkbox" name="" value="'.$qu.'" class="tata filled-in" id="check'.$counter.'"> <label for="check'.$counter.'">'.$qu.'</label>
											</div>';
										$counter++;
									}	
							
								?>
							</div>						
							<div class="form-group butcent">
								<input id="sec2" type="submit" data-toggle="tab" href="#section3" name="Next" value="Next" class="nbtn disabled btn btn-primary butsize pointerev">
							</div>
						
					</div>
					
					{{-- <input type="button" id="next" value="Next" onclick="validateFormSection()" /> --}}
					<div id="section2" class="tab-pane fade tender-container" style="min-height: 600px;">
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
							<div class="row" style="">
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
							<div id="indiaddedawards"></div>
							<div class="row">
								<div class="col-sm-4"></div>
								<div class="col-sm-8">
									<div class="form-group">
										<div class="input_fields_piste">
											<button type="button" class="btn btn-primary" id="indiaddawards" >Add another award</button>
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
											<div class="row" style="padding-bottom:10px;">
								<div class="col-sm-12">
									<div class="form-group">
										<div class="col-sm-6" style="padding:0;">
											<input type="text" name="" class="form-control" placeholder="Enter profile title">
										</div>
										<div class="col-sm-6" style="padding:0;padding-left: 15px;">
											<span style="position: absolute;line-height: 2.5;left: 24px;">£ </span>
											<input style="padding-left: 20px;" type="number" name="" id="consvalue" class="form-control" placeholder="Construction value ">  
										</div>
										</div>
									</div>
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
						                    
											<div class="row" style="padding-bottom:10px;">
								<div class="col-sm-12">
									<div class="form-group">
										<div class="col-sm-6" style="padding:0;">
										
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
										<div class="col-sm-6" style="padding:0;padding-left: 15px;">
											
												<select name="Sel"  class="form-control" >
													<option value="" disabled selected>Select company</option>
													<?php 

													$company = array(
																	"Architect",
																"Structural Engineer",
																"Service Engineer");

													sort($company,SORT_NATURAL | SORT_FLAG_CASE);

													foreach ($company as $key) {
													  echo "<option value='".$key."'>".$key."</option>";
													}

													 ?>
												
													<option>Other</option>
												</select>
											 
										</div>
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
					<div id="section3" class="tab-pane fade tender-container" style="min-height: 600px;">
					
						<h3 class="bid-form-title">Individuals</h3>
						<ul id="servicelistindi" class="servicelist">
							<?php
							foreach ($individuals as $key ) {
								echo "<li><div class='form-check'>
										<label>
											<input type='checkbox' name='individuals[]' value='".$key->ind_id."'><span class='label-text'>".$key->first_name."".' '."".$key->last_name."</span>
										</label>
									</div></li>";
							}

							?>
						</ul>
									
						<div class="form-group butcent">
							<button type="button" data-toggle="tab" href="#section4" id="checkinpbut" name="Next" class="btn btn-primary butsize ">Next</button>
							<button type="button" id="ind_save" name="Save" value="Save" class="btn butsize color">Save</button>
						</div>
						
					</div>
					<div id="section4" class="tab-pane fade tender-container" style="min-height: 600px;">
						<form id='approachForm'>
							@csrf
						<h3 class="bid-form-title">Approach</h3>
						<input type="hidden" name="tender_id" value="{{ $tender->tender_id }}">
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
											<div id="commnts" class="form-group">
												<textarea id="text-input4" name="comments_constraints[]" cols="25" rows="3" placeholder="Enter here.."></textarea>
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
												  <input type="file" id="file4" name="comments_images[]" accept="image/*" multiple />
												</div>
						                    </div>
						                </div>
									</div><br>
                                    <div class="row">
										<div class="col-sm-4">
										</div>
										<div class="col-sm-8">
												<div class="input_fields_com">
												    <button class="btn btn-primary" type="button" id="add_field_coms">Add another comment</button>
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
											<div id="soltions" class="form-group">
													<textarea id="text-input5" name="solutions[]" cols="25" rows="3" placeholder="Enter text here"></textarea>
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
												  <input type="file" id="file3" name="solutions_images[]" multiple />
												</div>
						                    </div>
						                </div>
									</div><br>
									 <div class="row">
										<div class="col-sm-4">
											
										</div>
										<div class="col-sm-8">
												<div class="input_fields_sul">
												    <button class="btn btn-primary" type="button" id="add_field_sols">Add another solution</button>
												    <div></div>
												</div>
											</div>
									</div><br>
									
									<div class="form-group butcent">
										<button type="button" data-toggle="tab" href="#section5" id="checkinpbut3" name="Next" class="btn btn-primary butsize ">Next</button>
										<button type="button" id="approach_save" name="Save" value="Save" class="btn  butsize color">Save</button>
										
									</div>
								</div>
							</div>
						</div>
					</div>
						</form>
						
					</div>
					<div id="section5" class="tab-pane fade tender-container" style="min-height: 600px;">
						<h3 class="bid-form-title">Scope</h3>

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
						                    <input type="hidden" disabled name="delivid" value="{{ $scopes[0]->deliverables_id }}">
						                    <td class="td "><textarea disabled class="hayt" name="strategic_details" placeholder="Enter details here">@if($scopes[0]->strategic_brief) {{ $scopes[0]->strategic_brief }} @endif</textarea></td>
						                    <td class="td">
						                    	<div class="col-sm-12">
						                    		{{$scopes[0]['strategic_raci']}}
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopes[0]['strategic_num'],'0')!==false)
						                    				<input type="number" name="strategic_num_ans[]" class="inputwidth strat" >
						                    			@else
						                    				<input type="checkbox" disabled name="strategic_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopes[0]['strategic_num'],'1')!==false)
						                    				<input type="number" name="strategic_num_ans[]" class="inputwidth strat" >
						                    			@else
						                    				<input type="checkbox" disabled name="strategic_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopes[0]['strategic_num'],'2')!==false)
						                    				<input type="number" name="strategic_num_ans[]" class="inputwidth strat" >
						                    			@else
						                    				<input type="checkbox" disabled name="strategic_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopes[0]['strategic_num'],'3')!==false)
						                    				<input type="number" name="strategic_num_ans[]" class="inputwidth strat" >
						                    			@else
						                    				<input type="checkbox" disabled name="strategic_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopes[0]['strategic_num'],'4')!==false)
						                    				<input type="number" name="strategic_num_ans[]" class="inputwidth strat" >
						                    			@else
						                    				<input type="checkbox" disabled name="strategic_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopes[0]['strategic_num'],'5')!==false)
						                    				<input type="number" name="strategic_num_ans[]" class="inputwidth strat" >
						                    			@else
						                    				<input type="checkbox" disabled name="strategic_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopes[0]['strategic_num'],'6')!==false)
						                    				<input type="number" name="strategic_num_ans[]" class="inputwidth strat" >
						                    			@else
						                    				<input type="checkbox" disabled name="strategic_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopes[0]['strategic_num'],'7')!==false)
						                    				<input type="number" name="strategic_num_ans[]" class="inputwidth strat" >
						                    			@else
						                    				<input type="checkbox" disabled name="strategic_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    
						                </tr>
						                <tr class="addedDeliv">
						                    <td class="zui-sticky-col2">Project Programme(Lead)</td>
						                    <td class="td "><textarea disabled class="hayt" name="pprogramme_details" placeholder="Enter details here">@if ($scopes[0]['project_programme']) {{ $scopes[0]['project_programme'] }}  @endif</textarea></td>
						                    <td class="td">
						                    	<div class="col-sm-12">
						                    		{{$scopes[0]['pprogramme_raci']}}
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopes[0]['pprogramme_num'],'0')!==false) 
						                    				<input type="number" name="pprogramme_num_ans[]" class="inputwidth" >
						                    			@else
						                    				<input type="checkbox" disabled name="pprogramme_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopes[0]['pprogramme_num'],'1')!==false) 
						                    				<input type="number" name="pprogramme_num_ans[]" class="inputwidth" >
						                    			@else
						                    				<input type="checkbox" disabled name="pprogramme_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopes[0]['pprogramme_num'],'2')!==false) 
						                    				<input type="number" name="pprogramme_num_ans[]" class="inputwidth" >
						                    			@else
						                    				<input type="checkbox" disabled name="pprogramme_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopes[0]['pprogramme_num'],'3')!==false) 
						                    				<input type="number" name="pprogramme_num_ans[]" class="inputwidth" >
						                    			@else
						                    				<input type="checkbox" disabled name="pprogramme_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopes[0]['pprogramme_num'],'4')!==false) 
						                    				<input type="number" name="pprogramme_num_ans[]" class="inputwidth" >
						                    			@else
						                    				<input type="checkbox" disabled name="pprogramme_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopes[0]['pprogramme_num'],'5')!==false) 
						                    				<input type="number" name="pprogramme_num_ans[]" class="inputwidth" >
						                    			@else
						                    				<input type="checkbox" disabled name="pprogramme_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopes[0]['pprogramme_num'],'6')!==false) 
						                    				<input type="number" name="pprogramme_num_ans[]" class="inputwidth" >
						                    			@else
						                    				<input type="checkbox" disabled name="pprogramme_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopes[0]['pprogramme_num'],'7')!==false) 
						                    				<input type="number" name="pprogramme_num_ans[]" class="inputwidth" >
						                    			@else
						                    				<input type="checkbox" disabled name="pprogramme_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                </tr>
						                <tr class="addedDeliv">
						                    <td class="zui-sticky-col2">Feasibility Study</td>
						                    <td class="td "><textarea disabled class="hayt" name="feasibility_details" placeholder="Enter details here">@if ($scopes[0]['feasibility_study']) {{ $scopes[0]['feasibility_study'] }} @endif</textarea></td>
						                    <td class="td">
						                    	<div class="col-sm-12">
						                    		{{$scopes[0]['feasibility_raci']}}
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopes[0]['feasibility_num'],'0')!==false)
						                    				<input type="number" name="feasibility_num_ans[]" class="inputwidth" >
						                    			@else
						                    				<input type="checkbox" disabled name="feasibility_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopes[0]['feasibility_num'],'1')!==false)
						                    				<input type="number" name="feasibility_num_ans[]" class="inputwidth" >
						                    			@else
						                    				<input type="checkbox" disabled name="feasibility_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopes[0]['feasibility_num'],'2')!==false)
						                    				<input type="number" name="feasibility_num_ans[]" class="inputwidth" >
						                    			@else
						                    				<input type="checkbox" disabled name="feasibility_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopes[0]['feasibility_num'],'3')!==false)
						                    				<input type="number" name="feasibility_num_ans[]" class="inputwidth" >
						                    			@else
						                    				<input type="checkbox" disabled name="feasibility_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopes[0]['feasibility_num'],'4')!==false)
						                    				<input type="number" name="feasibility_num_ans[]" class="inputwidth" >
						                    			@else
						                    				<input type="checkbox" disabled name="feasibility_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopes[0]['feasibility_num'],'5')!==false)
						                    				<input type="number" name="feasibility_num_ans[]" class="inputwidth" >
						                    			@else
						                    				<input type="checkbox" disabled name="feasibility_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopes[0]['feasibility_num'],'6')!==false)
						                    				<input type="number" name="feasibility_num_ans[]" class="inputwidth" >
						                    			@else
						                    				<input type="checkbox" disabled name="feasibility_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopes[0]['feasibility_num'],'7')!==false)
						                    				<input type="number" name="feasibility_num_ans[]" class="inputwidth" >
						                    			@else
						                    				<input type="checkbox" disabled name="feasibility_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                </tr>
						                <tr class="addedDeliv">
						                    <td class="zui-sticky-col2">Design Responsibility<br> Matrix</td>
						                    <td class="td "><textarea disabled class="hayt" name="design_details" placeholder="Enter details here">@if ($scopes[0]['design_responsibility']) {{ $scopes[0]['design_responsibility'] }}  @endif</textarea></td>
						                    <td class="td">
						                    	<div class="col-sm-12">
						                    		{{$scopes[0]['design_raci']}}
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if(strpos($scopes[0]['design_num'],'0')!==false) 
						                    				<input type="number" name="design_num_ans[]" class="inputwidth" >
						                    			@else 
						                    				<input type="checkbox" disabled name="design_num[]" value="0"><span class="label-text"></span> 
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if(strpos($scopes[0]['design_num'],'1')!==false) 
						                    				<input type="number" name="design_num_ans[]" class="inputwidth" >
						                    			@else 
						                    				<input type="checkbox" disabled name="design_num[]" value="0"><span class="label-text"></span> 
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if(strpos($scopes[0]['design_num'],'2')!==false) 
						                    				<input type="number" name="design_num_ans[]" class="inputwidth" >
						                    			@else 
						                    				<input type="checkbox" disabled name="design_num[]" value="0"><span class="label-text"></span> 
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if(strpos($scopes[0]['design_num'],'3')!==false) 
						                    				<input type="number" name="design_num_ans[]" class="inputwidth" >
						                    			@else 
						                    				<input type="checkbox" disabled name="design_num[]" value="0"><span class="label-text"></span> 
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if(strpos($scopes[0]['design_num'],'4')!==false) 
						                    				<input type="number" name="design_num_ans[]" class="inputwidth" >
						                    			@else 
						                    				<input type="checkbox" disabled name="design_num[]" value="0"><span class="label-text"></span> 
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if(strpos($scopes[0]['design_num'],'5')!==false) 
						                    				<input type="number" name="design_num_ans[]" class="inputwidth" >
						                    			@else 
						                    				<input type="checkbox" disabled name="design_num[]" value="0"><span class="label-text"></span> 
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if(strpos($scopes[0]['design_num'],'6')!==false) 
						                    				<input type="number" name="design_num_ans[]" class="inputwidth" >
						                    			@else 
						                    				<input type="checkbox" disabled name="design_num[]" value="0"><span class="label-text"></span> 
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if(strpos($scopes[0]['design_num'],'7')!==false) 
						                    				<input type="number" name="design_num_ans[]" class="inputwidth" >
						                    			@else 
						                    				<input type="checkbox" disabled name="design_num[]" value="0"><span class="label-text"></span> 
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                </tr>
						                <tr class="addedDeliv">
						                    <td class="zui-sticky-col2">Site Information Report</td>
						                    <td class="td "><textarea disabled class="hayt" name="site_details" placeholder="Enter details here">@if($scopes[0]['site_information']) {{ $scopes[0]['site_information'] }} @endif</textarea></td>
						                    <td class="td">
						                    	<div class="col-sm-12">
						                    		{{$scopes[0]['site_raci']}}
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if(strpos($scopes[0]['site_num'],'0')!==false) 
						                    				<input type="number" name="site_num_ans[]" class="inputwidth" >
						                    			@else  
						                    				<input type="checkbox" disabled name="site_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if(strpos($scopes[0]['site_num'],'1')!==false) 
						                    				<input type="number" name="site_num_ans[]" class="inputwidth" >
						                    			@else  
						                    				<input type="checkbox" disabled name="site_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if(strpos($scopes[0]['site_num'],'2')!==false) 
						                    				<input type="number" name="site_num_ans[]" class="inputwidth" >
						                    			@else  
						                    				<input type="checkbox" disabled name="site_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if(strpos($scopes[0]['site_num'],'3')!==false) 
						                    				<input type="number" name="site_num_ans[]" class="inputwidth" >
						                    			@else  
						                    				<input type="checkbox" disabled name="site_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if(strpos($scopes[0]['site_num'],'4')!==false) 
						                    				<input type="number" name="site_num_ans[]" class="inputwidth" >
						                    			@else  
						                    				<input type="checkbox" disabled name="site_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if(strpos($scopes[0]['site_num'],'5')!==false) 
						                    				<input type="number" name="site_num_ans[]" class="inputwidth" >
						                    			@else  
						                    				<input type="checkbox" disabled name="site_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if(strpos($scopes[0]['site_num'],'6')!==false) 
						                    				<input type="number" name="site_num_ans[]" class="inputwidth" >
						                    			@else  
						                    				<input type="checkbox" disabled name="site_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if(strpos($scopes[0]['site_num'],'7')!==false) 
						                    				<input type="number" name="site_num_ans[]" class="inputwidth" >
						                    			@else  
						                    				<input type="checkbox" disabled name="site_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                </tr>
						                <tr class="addedDeliv">
						                    <td class="zui-sticky-col2">Information Exchange<br> Strategy</td>
						                    <td class="td "><textarea disabled class="hayt" name="info_details" placeholder="Enter details here">@if($scopes[0]['information_exchange_strategy']) {{ $scopes[0]['information_exchange_strategy'] }}  @endif</textarea></td>
						                    <td class="td">
						                    	<div class="col-sm-12">
						                    		{{$scopes[0]['information_raci']}}
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if(strpos($scopes[0]['information_num'],'0')!==false) 
						                    				<input type="number" name="info_num_ans[]" class="inputwidth" >
						                    			@else  
						                    				<input type="checkbox" disabled name="info_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if(strpos($scopes[0]['information_num'],'1')!==false) 
						                    				<input type="number" name="info_num_ans[]" class="inputwidth" >
						                    			@else  
						                    				<input type="checkbox" disabled name="info_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if(strpos($scopes[0]['information_num'],'2')!==false) 
						                    				<input type="number" name="info_num_ans[]" class="inputwidth" >
						                    			@else  
						                    				<input type="checkbox" disabled name="info_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if(strpos($scopes[0]['information_num'],'3')!==false) 
						                    				<input type="number" name="info_num_ans[]" class="inputwidth" >
						                    			@else  
						                    				<input type="checkbox" disabled name="info_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if(strpos($scopes[0]['information_num'],'4')!==false) 
						                    				<input type="number" name="info_num_ans[]" class="inputwidth" >
						                    			@else  
						                    				<input type="checkbox" disabled name="info_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if(strpos($scopes[0]['information_num'],'5')!==false) 
						                    				<input type="number" name="info_num_ans[]" class="inputwidth" >
						                    			@else  
						                    				<input type="checkbox" disabled name="info_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if(strpos($scopes[0]['information_num'],'6')!==false) 
						                    				<input type="number" name="info_num_ans[]" class="inputwidth" >
						                    			@else  
						                    				<input type="checkbox" disabled name="info_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if(strpos($scopes[0]['information_num'],'7')!==false) 
						                    				<input type="number" name="info_num_ans[]" class="inputwidth" >
						                    			@else  
						                    				<input type="checkbox" disabled name="info_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                </tr>
						                <tr class="addedDeliv">
						                    <td class="zui-sticky-col2">Project Brief</td>
						                    <td class="td "><textarea disabled class="hayt" name="project_details" placeholder="Enter details here">@if($scopes[0]['project_brief']) {{ $scopes[0]['project_brief'] }}  @endif</textarea></td>
						                    <td class="td">
						                    	<div class="col-sm-12">
						                    		{{$scopes[0]['project_raci']}}
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if(strpos($scopes[0]['project_num'],'0')!==false) 
						                    				<input type="number" name="project_num_ans[]" class="inputwidth" >
						                    			@else 
						                    				<input type="checkbox" disabled name="project_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if(strpos($scopes[0]['project_num'],'1')!==false) 
						                    				<input type="number" name="project_num_ans[]" class="inputwidth" >
						                    			@else 
						                    				<input type="checkbox" disabled name="project_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if(strpos($scopes[0]['project_num'],'2')!==false) 
						                    				<input type="number" name="project_num_ans[]" class="inputwidth" >
						                    			@else 
						                    				<input type="checkbox" disabled name="project_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if(strpos($scopes[0]['project_num'],'3')!==false) 
						                    				<input type="number" name="project_num_ans[]" class="inputwidth" >
						                    			@else 
						                    				<input type="checkbox" disabled name="project_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if(strpos($scopes[0]['project_num'],'4')!==false) 
						                    				<input type="number" name="project_num_ans[]" class="inputwidth" >
						                    			@else 
						                    				<input type="checkbox" disabled name="project_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if(strpos($scopes[0]['project_num'],'5')!==false) 
						                    				<input type="number" name="project_num_ans[]" class="inputwidth" >
						                    			@else 
						                    				<input type="checkbox" disabled name="project_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if(strpos($scopes[0]['project_num'],'6')!==false) 
						                    				<input type="number" name="project_num_ans[]" class="inputwidth" >
						                    			@else 
						                    				<input type="checkbox" disabled name="project_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if(strpos($scopes[0]['project_num'],'7')!==false) 
						                    				<input type="number" name="project_num_ans[]" class="inputwidth" >
						                    			@else 
						                    				<input type="checkbox" disabled name="project_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                </tr>	
						                <tr class="addedDeliv">
						                    <td class="zui-sticky-col2">Risk Assessment(Lead)</td>
						                    <td class="td "><textarea disabled class="hayt" name="risk_details" placeholder="Enter details here">@if($scopes[0]['risk_assessment']) {{ $scopes[0]['risk_assessment'] }}  @endif</textarea></td>
						                    <td class="td">
						                    	<div class="col-sm-12">
						                    		{{$scopes[0]['risk_raci']}}
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if(strpos($scopes[0]['risk_num'],'0')!==false)
						                    				<input type="number" name="risk_num_ans[]" class="inputwidth" >
						                    			@else
						                    				<input type="checkbox" disabled name="risk_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if(strpos($scopes[0]['risk_num'],'1')!==false)
						                    				<input type="number" name="risk_num_ans[]" class="inputwidth" >
						                    			@else
						                    				<input type="checkbox" disabled name="risk_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if(strpos($scopes[0]['risk_num'],'2')!==false)
						                    				<input type="number" name="risk_num_ans[]" class="inputwidth" >
						                    			@else
						                    				<input type="checkbox" disabled name="risk_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if(strpos($scopes[0]['risk_num'],'3')!==false)
						                    				<input type="number" name="risk_num_ans[]" class="inputwidth" >
						                    			@else
						                    				<input type="checkbox" disabled name="risk_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if(strpos($scopes[0]['risk_num'],'4')!==false)
						                    				<input type="number" name="risk_num_ans[]" class="inputwidth" >
						                    			@else
						                    				<input type="checkbox" disabled name="risk_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if(strpos($scopes[0]['risk_num'],'5')!==false)
						                    				<input type="number" name="risk_num_ans[]" class="inputwidth" >
						                    			@else
						                    				<input type="checkbox" disabled name="risk_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if(strpos($scopes[0]['risk_num'],'6')!==false)
						                    				<input type="number" name="risk_num_ans[]" class="inputwidth" >
						                    			@else
						                    				<input type="checkbox" disabled name="risk_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if(strpos($scopes[0]['risk_num'],'7')!==false)
						                    				<input type="number" name="risk_num_ans[]" class="inputwidth" >
						                    			@else
						                    				<input type="checkbox" disabled name="risk_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                </tr>
						                 <tr class="addedDeliv">
						                    <td class="zui-sticky-col2">Handover Strategy(Lead)</td>
						                    <td class="td "><textarea disabled class="hayt" name="hand_details" placeholder="Enter details here">@if($scopes[0]['handover_strategy']) {{ $scopes[0]['handover_strategy'] }} @endif</textarea></td>
						                    <td class="td">
						                    	<div class="col-sm-12">
						                    		{{$scopes[0]['handover_raci']}}
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if(strpos($scopes[0]['handover_num'],'0')!==false)
						                    				<input type="number" name="hand_num_ans[]" class="inputwidth" >
						                    			@else
						                    				<input type="checkbox" disabled name="hand_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if(strpos($scopes[0]['handover_num'],'1')!==false)
						                    				<input type="number" name="hand_num_ans[]" class="inputwidth" >
						                    			@else
						                    				<input type="checkbox" disabled name="hand_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if(strpos($scopes[0]['handover_num'],'2')!==false)
						                    				<input type="number" name="hand_num_ans[]" class="inputwidth" >
						                    			@else
						                    				<input type="checkbox" disabled name="hand_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if(strpos($scopes[0]['handover_num'],'3')!==false)
						                    				<input type="number" name="hand_num_ans[]" class="inputwidth" >
						                    			@else
						                    				<input type="checkbox" disabled name="hand_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if(strpos($scopes[0]['handover_num'],'4')!==false)
						                    				<input type="number" name="hand_num_ans[]" class="inputwidth" >
						                    			@else
						                    				<input type="checkbox" disabled name="hand_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if(strpos($scopes[0]['handover_num'],'5')!==false)
						                    				<input type="number" name="hand_num_ans[]" class="inputwidth" >
						                    			@else
						                    				<input type="checkbox" disabled name="hand_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if(strpos($scopes[0]['handover_num'],'6')!==false)
						                    				<input type="number" name="hand_num_ans[]" class="inputwidth" >
						                    			@else
						                    				<input type="checkbox" disabled name="hand_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if(strpos($scopes[0]['handover_num'],'7')!==false)
						                    				<input type="number" name="hand_num_ans[]" class="inputwidth" >
						                    			@else
						                    				<input type="checkbox" disabled name="hand_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                </tr>
						                 <tr class="addedDeliv">
						                    <td class="zui-sticky-col2">Project Execution Plan</td>
						                    <td class="td "><textarea disabled class="hayt" name="execution_details" placeholder="Enter details here">@if($scopes[0]['project_execution_plan']) {{ $scopes[0]['project_execution_plan'] }}  @endif</textarea></td>
						                    <td class="td">
						                    	<div class="col-sm-12">
						                    		{{$scopes[0]['execution_raci']}}
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if(strpos($scopes[0]['execution_num'],'0')!==false) 
						                    				<input type="number" name="execution_num_ans[]" class="inputwidth" >
						                    			@else
						                    				<input type="checkbox" disabled name="execution_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if(strpos($scopes[0]['execution_num'],'1')!==false) 
						                    				<input type="number" name="execution_num_ans[]" class="inputwidth" >
						                    			@else
						                    				<input type="checkbox" disabled name="execution_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if(strpos($scopes[0]['execution_num'],'2')!==false) 
						                    				<input type="number" name="execution_num_ans[]" class="inputwidth" >
						                    			@else
						                    				<input type="checkbox" disabled name="execution_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if(strpos($scopes[0]['execution_num'],'3')!==false) 
						                    				<input type="number" name="execution_num_ans[]" class="inputwidth" >
						                    			@else
						                    				<input type="checkbox" disabled name="execution_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if(strpos($scopes[0]['execution_num'],'4')!==false) 
						                    				<input type="number" name="execution_num_ans[]" class="inputwidth" >
						                    			@else
						                    				<input type="checkbox" disabled name="execution_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if(strpos($scopes[0]['execution_num'],'5')!==false) 
						                    				<input type="number" name="execution_num_ans[]" class="inputwidth" >
						                    			@else
						                    				<input type="checkbox" disabled name="execution_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if(strpos($scopes[0]['execution_num'],'6')!==false) 
						                    				<input type="number" name="execution_num_ans[]" class="inputwidth" >
						                    			@else
						                    				<input type="checkbox" disabled name="execution_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if(strpos($scopes[0]['execution_num'],'7')!==false) 
						                    				<input type="number" name="execution_num_ans[]" class="inputwidth" >
						                    			@else
						                    				<input type="checkbox" disabled name="execution_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                </tr>
						                <tr class="addedDeliv">
						                    <td class="zui-sticky-col2">Design Proposals from<br> Design Team Members</td>
						                    <td class="td "><textarea disabled class="hayt" name="proposal_details" placeholder="Enter details here">@if($scopes[0]['design_proposal']) {{ $scopes[0]['design_proposal'] }}  @endif</textarea></td>
						                    <td class="td">
						                    	<div class="col-sm-12">
						                    		{{$scopes[0]['proposal_raci']}}
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if(strpos($scopes[0]['proposal_num'],'0')!==false)
						                    				<input type="number" name="proposal_num_ans[]" class="inputwidth" >
						                    			@else
						                    				<input type="checkbox" disabled name="proposal_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if(strpos($scopes[0]['proposal_num'],'1')!==false)
						                    				<input type="number" name="proposal_num_ans[]" class="inputwidth" >
						                    			@else
						                    				<input type="checkbox" disabled name="proposal_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if(strpos($scopes[0]['proposal_num'],'2')!==false)
						                    				<input type="number" name="proposal_num_ans[]" class="inputwidth" >
						                    			@else
						                    				<input type="checkbox" disabled name="proposal_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if(strpos($scopes[0]['proposal_num'],'3')!==false)
						                    				<input type="number" name="proposal_num_ans[]" class="inputwidth" >
						                    			@else
						                    				<input type="checkbox" disabled name="proposal_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if(strpos($scopes[0]['proposal_num'],'4')!==false)
						                    				<input type="number" name="proposal_num_ans[]" class="inputwidth" >
						                    			@else
						                    				<input type="checkbox" disabled name="proposal_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if(strpos($scopes[0]['proposal_num'],'5')!==false)
						                    				<input type="number" name="proposal_num_ans[]" class="inputwidth" >
						                    			@else
						                    				<input type="checkbox" disabled name="proposal_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if(strpos($scopes[0]['proposal_num'],'6')!==false)
						                    				<input type="number" name="proposal_num_ans[]" class="inputwidth" >
						                    			@else
						                    				<input type="checkbox" disabled name="proposal_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if(strpos($scopes[0]['proposal_num'],'7')!==false)
						                    				<input type="number" name="proposal_num_ans[]" class="inputwidth" >
						                    			@else
						                    				<input type="checkbox" disabled name="proposal_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                </tr>
						                @foreach($delivs as $deliv)
						                	<tr id="deliv" data-edit="yes" data-addid="{{ $deliv['added_id'] }}">
						                	    <td class="zui-sticky-col2"><textarea disabled id="delivname" class="hayt named" name="named" placeholder="Enter details here">{{ $deliv['name'] }}</textarea></td>
						                	    <td class="td "><textarea disabled class="hayt details" name="deliv_details" placeholder="Enter details here">{{ $deliv['details'] }}</textarea></td>
						                	    <td class="td">
						                	    	<div class="col-sm-12">
						                	    		{{$deliv['raci']}}
						                	    	</div>
						                	    </td>
						                	    <td class="td">
						                	    	<div class="form-check">
						                	    		<label>
						                	    			@if (strpos($deliv['num'],'0')!==false)
						                	    				<input type="number" name="strat_num_ans[]" class="inputwidth" >
						                	    			@else  
						                	    				<input type="checkbox" disabled name="strat_num[]" value="0" class="ribanum"><span class="label-text"></span>
						                	    			@endif
						                	    		</label>
						                	    	</div>
						                	    </td>
						                	    <td class="td">
						                	    	<div class="form-check">
						                	    		<label>
						                	    			@if (strpos($deliv['num'],'1')!==false)
						                	    				<input type="number" name="strat_num_ans[]" class="inputwidth" >
						                	    			@else  
						                	    				<input type="checkbox" disabled name="strat_num[]" value="0" class="ribanum"><span class="label-text"></span>
						                	    			@endif
						                	    		</label>
						                	    	</div>
						                	    </td>
						                	    <td class="td">
						                	    	<div class="form-check">
						                	    		<label>
						                	    			@if (strpos($deliv['num'],'2')!==false)
						                	    				<input type="number" name="strat_num_ans[]" class="inputwidth" >
						                	    			@else  
						                	    				<input type="checkbox" disabled name="strat_num[]" value="0" class="ribanum"><span class="label-text"></span>
						                	    			@endif
						                	    		</label>
						                	    	</div>
						                	    </td>
						                	    <td class="td">
						                	    	<div class="form-check">
						                	    		<label>
						                	    			@if (strpos($deliv['num'],'3')!==false)
						                	    				<input type="number" name="strat_num_ans[]" class="inputwidth" >
						                	    			@else  
						                	    				<input type="checkbox" disabled name="strat_num[]" value="0" class="ribanum"><span class="label-text"></span>
						                	    			@endif
						                	    		</label>
						                	    	</div>
						                	    </td>
						                	    <td class="td">
						                	    	<div class="form-check">
						                	    		<label>
						                	    			@if (strpos($deliv['num'],'4')!==false)
						                	    				<input type="number" name="strat_num_ans[]" class="inputwidth" >
						                	    			@else  
						                	    				<input type="checkbox" disabled name="strat_num[]" value="0" class="ribanum"><span class="label-text"></span>
						                	    			@endif
						                	    		</label>
						                	    	</div>
						                	    </td>
						                	    <td class="td">
						                	    	<div class="form-check">
						                	    		<label>
						                	    			@if (strpos($deliv['num'],'5')!==false)
						                	    				<input type="number" name="strat_num_ans[]" class="inputwidth" >
						                	    			@else  
						                	    				<input type="checkbox" disabled name="strat_num[]" value="0" class="ribanum"><span class="label-text"></span>
						                	    			@endif
						                	    		</label>
						                	    	</div>
						                	    </td>
						                	    <td class="td">
						                	    	<div class="form-check">
						                	    		<label>
						                	    			@if (strpos($deliv['num'],'6')!==false)
						                	    				<input type="number" name="strat_num_ans[]" class="inputwidth" >
						                	    			@else  
						                	    				<input type="checkbox" disabled name="strat_num[]" value="0" class="ribanum"><span class="label-text"></span>
						                	    			@endif
						                	    		</label>
						                	    	</div>
						                	    </td>
						                	    <td class="td">
						                	    	<div class="form-check">
						                	    		<label>
						                	    			@if (strpos($deliv['num'],'7')!==false)
						                	    				<input type="number" name="strat_num_ans[]" class="inputwidth" >
						                	    			@else  
						                	    				<input type="checkbox" disabled name="strat_num[]" value="0" class="ribanum"><span class="label-text"></span>
						                	    			@endif
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
									{{-- <button class="btn addbutton" data-scroll-to="#deliv"
	data-scroll-focus="#delivname"
	data-scroll-speed="700"
	data-scroll-offset="200" >Add</button> --}}
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
						                    <td class="td "><textarea disabled class="hayt3" name="pre_app_purpose" placeholder="Enter details here">@if($scopesm[0]['pre_app_purpose']) {{ $scopesm[0]['pre_app_purpose'] }} @endif</textarea></td>
						                    <td class="td"><textarea disabled class="hayt3" name="pre_app_attendees" placeholder="Enter details here">@if($scopesm[0]['pre_app_attendees']) {{ $scopesm[0]['pre_app_attendees'] }}  @endif</textarea></td>
						                    <td class="td"><input disabled style="box-sizing: border-box;border: none;border-bottom: 2px solid #FE7235;" value="{{ $scopesm[0]['pre_app_assumed_duration'] }}" type="text" name="pre_app_assumed_duration"></td>
						                    <td class="td"><input disabled style="box-sizing: border-box;border: none;border-bottom: 2px solid #FE7235;" value="{{ $scopesm[0]['pre_app_reoccurence'] }}" type="text" name="pre_app_reoccurence"></td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesm[0]['pre_app_choice'],'Arrange')!==false) 
						                    				<input type="checkbox" disabled name="pre_app_choice_ans[]" value="Arrange"><span class="label-text"></span>
						                    			@else  
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesm[0]['pre_app_choice'],'Attend')!==false) 
						                    				<input type="checkbox" disabled name="pre_app_choice_ans[]" value="Attend"><span class="label-text"></span>
						                    			@else  
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesm[0]['pre_app_choice'],'Minute')!==false) 
						                    				<input type="checkbox" disabled name="pre_app_choice_ans[]" value="Minute"><span class="label-text"></span>
						                    			@else  
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesm[0]['pre_app_num'],'0')!==false) 
						                    				<input type="number" name="pre_app_num_ans[]" class="inputwidth">
						                    			@else  
						                    				<input type="checkbox" disabled name="pre_app_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesm[0]['pre_app_num'],'1')!==false) 
						                    				<input type="number" name="pre_app_num_ans[]" class="inputwidth">
						                    			@else  
						                    				<input type="checkbox" disabled name="pre_app_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesm[0]['pre_app_num'],'2')!==false) 
						                    				<input type="number" name="pre_app_num_ans[]" class="inputwidth">
						                    			@else  
						                    				<input type="checkbox" disabled name="pre_app_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesm[0]['pre_app_num'],'3')!==false) 
						                    				<input type="number" name="pre_app_num_ans[]" class="inputwidth">
						                    			@else  
						                    				<input type="checkbox" disabled name="pre_app_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesm[0]['pre_app_num'],'4')!==false) 
						                    				<input type="number" name="pre_app_num_ans[]" class="inputwidth">
						                    			@else  
						                    				<input type="checkbox" disabled name="pre_app_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesm[0]['pre_app_num'],'5')!==false) 
						                    				<input type="number" name="pre_app_num_ans[]" class="inputwidth">
						                    			@else  
						                    				<input type="checkbox" disabled name="pre_app_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesm[0]['pre_app_num'],'6')!==false) 
						                    				<input type="number" name="pre_app_num_ans[]" class="inputwidth">
						                    			@else  
						                    				<input type="checkbox" disabled name="pre_app_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesm[0]['pre_app_num'],'7')!==false) 
						                    				<input type="number" name="pre_app_num_ans[]" class="inputwidth">
						                    			@else  
						                    				<input type="checkbox" disabled name="pre_app_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                </tr>
						                <tr class="addedmeet">
						                    <td class="zui-sticky-col3">Site Visits</td>
						                    <td class="td "><textarea disabled class="hayt3" name="site_visits_purpose" placeholder="Enter details here">@if($scopesm[0]['site_visits_purpose']) {{ $scopesm[0]['site_visits_purpose'] }}  @endif</textarea></td>
						                    <td class="td"><textarea disabled class="hayt3" name="site_visits_attendees" placeholder="Enter details here">@if($scopesm[0]['site_visits_attendees']) {{ $scopesm[0]['site_visits_attendees'] }}  @endif</textarea></td>
						                    <td class="td"><input disabled style="box-sizing: border-box;border: none;border-bottom: 2px solid #FE7235;" type="text" value="{{$scopesm[0]['site_visits_assumed_duration']}}" name="site_visits_assumed_duration"></td>
						                    <td class="td"><input disabled style="box-sizing: border-box;border: none;border-bottom: 2px solid #FE7235;" type="text"  value="{{$scopesm[0]['site_visits_reoccurence']}}" name="site_visits_reoccurence"></td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesm[0]['site_visits_choice'],'Arrange')!==false)
						                    				<input type="checkbox" disabled name="site_visits_choice_ans[]" value="Arrange"><span class="label-text"></span>
						                    			@else 
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesm[0]['site_visits_choice'],'Attend')!==false)
						                    				<input type="checkbox" disabled name="site_visits_choice_ans[]" value="Attend"><span class="label-text"></span>
						                    			@else 
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesm[0]['site_visits_choice'],'Minute')!==false)
						                    				<input type="checkbox" disabled name="site_visits_choice_ans[]" value="Minute"><span class="label-text"></span>
						                    			@else 
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesm[0]['site_visits_num'],'0')!==false) 
						                    				<input type="number" name="site_visits_num_ans[]" class="inputwidth">
						                    			@else  
						                    				<input type="checkbox" disabled name="site_visits_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesm[0]['site_visits_num'],'1')!==false) 
						                    				<input type="number" name="site_visits_num_ans[]" class="inputwidth">
						                    			@else  
						                    				<input type="checkbox" disabled name="site_visits_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesm[0]['site_visits_num'],'2')!==false) 
						                    				<input type="number" name="site_visits_num_ans[]" class="inputwidth">
						                    			@else  
						                    				<input type="checkbox" disabled name="site_visits_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesm[0]['site_visits_num'],'3')!==false) 
						                    				<input type="number" name="site_visits_num_ans[]" class="inputwidth">
						                    			@else  
						                    				<input type="checkbox" disabled name="site_visits_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesm[0]['site_visits_num'],'4')!==false) 
						                    				<input type="number" name="site_visits_num_ans[]" class="inputwidth">
						                    			@else  
						                    				<input type="checkbox" disabled name="site_visits_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesm[0]['site_visits_num'],'5')!==false) 
						                    				<input type="number" name="site_visits_num_ans[]" class="inputwidth">
						                    			@else  
						                    				<input type="checkbox" disabled name="site_visits_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesm[0]['site_visits_num'],'6')!==false) 
						                    				<input type="number" name="site_visits_num_ans[]" class="inputwidth">
						                    			@else  
						                    				<input type="checkbox" disabled name="site_visits_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesm[0]['site_visits_num'],'7')!==false) 
						                    				<input type="number" name="site_visits_num_ans[]" class="inputwidth">
						                    			@else  
						                    				<input type="checkbox" disabled name="site_visits_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                </tr>
						                <tr class="addedmeet">
						                    <td class="zui-sticky-col3">Site/Project Meetings<br>(RIBA Stage 4/5)</td>
						                    <td class="td "><textarea disabled class="hayt3" name="riba_purpose" placeholder="Enter details here">@if($scopesm[0]['riba_purpose']) {{ $scopesm[0]['riba_purpose'] }}  @endif</textarea></td>
						                    <td class="td"><textarea disabled class="hayt3" name="riba_attendees" placeholder="Enter details here">@if($scopesm[0]['riba_attendees']) {{ $scopesm[0]['riba_attendees'] }}  @endif</textarea></td>
						                    <td class="td"><input disabled style="box-sizing: border-box;border: none;border-bottom: 2px solid #FE7235;" value="{{ $scopesm[0]['riba_assumed_duration'] }}" type="text" name="riba_assumed_duration"></td>
						                    <td class="td"><input disabled style="box-sizing: border-box;border: none;border-bottom: 2px solid #FE7235;" value="{{ $scopesm[0]['riba_reoccurence'] }}" type="text" name="riba_reoccurence"></td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesm[0]['riba_choice'],'Arrange')!==false) 
						                    				<input type="checkbox" disabled name="riba_choice_ans[]" value="Arrange"><span class="label-text"></span>
						                    			@else 
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesm[0]['riba_choice'],'Attend')!==false) 
						                    				<input type="checkbox" disabled name="riba_choice_ans[]" value="Attend"><span class="label-text"></span>
						                    			@else 
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesm[0]['riba_choice'],'Minute')!==false) 
						                    				<input type="checkbox" disabled name="riba_choice_ans[]" value="Minute"><span class="label-text"></span>
						                    			@else 
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesm[0]['riba_num'],'0')!==false) 
						                    				<input type="number" name="riba_num_ans[]" class="inputwidth">
						                    			@else 
						                    				<input type="checkbox" disabled name="riba_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesm[0]['riba_num'],'1')!==false) 
						                    				<input type="number" name="riba_num_ans[]" class="inputwidth">
						                    			@else 
						                    				<input type="checkbox" disabled name="riba_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesm[0]['riba_num'],'2')!==false) 
						                    				<input type="number" name="riba_num_ans[]" class="inputwidth">
						                    			@else 
						                    				<input type="checkbox" disabled name="riba_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesm[0]['riba_num'],'3')!==false) 
						                    				<input type="number" name="riba_num_ans[]" class="inputwidth">
						                    			@else 
						                    				<input type="checkbox" disabled name="riba_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesm[0]['riba_num'],'4')!==false) 
						                    				<input type="number" name="riba_num_ans[]" class="inputwidth">
						                    			@else 
						                    				<input type="checkbox" disabled name="riba_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesm[0]['riba_num'],'5')!==false) 
						                    				<input type="number" name="riba_num_ans[]" class="inputwidth">
						                    			@else 
						                    				<input type="checkbox" disabled name="riba_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesm[0]['riba_num'],'6')!==false) 
						                    				<input type="number" name="riba_num_ans[]" class="inputwidth">
						                    			@else 
						                    				<input type="checkbox" disabled name="riba_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesm[0]['riba_num'],'7')!==false) 
						                    				<input type="number" name="riba_num_ans[]" class="inputwidth">
						                    			@else 
						                    				<input type="checkbox" disabled name="riba_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                </tr>
						                <tr class="addedmeet">
						                    <td class="zui-sticky-col3">SC / PC Site<br> Inspection</td>
						                    <td class="td "><textarea disabled class="hayt3" name="inspection_purpose" placeholder="Enter details here">@if($scopesm[0]['inspection_purpose']) {{ $scopesm[0]['inspection_purpose'] }}  @endif</textarea></td>
						                    <td class="td"><textarea disabled class="hayt3" name="inspection_attendees" placeholder="Enter details here">@if($scopesm[0]['inspection_attendees']) {{ $scopesm[0]['inspection_attendees'] }} @endif</textarea></td>
						                    <td class="td"><input disabled style="box-sizing: border-box;border: none;border-bottom: 2px solid #FE7235;" value="{{ $scopesm[0]['inspection_assumed_duration'] }}" type="text" name="inspection_assumed_duration"></td>
						                    <td class="td"><input disabled style="box-sizing: border-box;border: none;border-bottom: 2px solid #FE7235;" value="{{ $scopesm[0]['inspection_reoccurence'] }}" type="text" name="inspection_reoccurence"></td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesm[0]['site_inspection_choice'],'Arrange')!==false) 
						                    				<input type="checkbox" disabled name="inspection_choice_ans[]" value="Arrange"><span class="label-text"></span>
						                    			@else 
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesm[0]['site_inspection_choice'],'Attend')!==false) 
						                    				<input type="checkbox" disabled name="inspection_choice_ans[]" value="Attend"><span class="label-text"></span>
						                    			@else 
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesm[0]['site_inspection_choice'],'Minute')!==false) 
						                    				<input type="checkbox" disabled name="inspection_choice_ans[]" value="Minute"><span class="label-text"></span>
						                    			@else 
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesm[0]['site_inspection_num'],'0')!==false)
						                    				<input type="number" name="inspection_num_ans[]" class="inputwidth">
						                    			@else 
						                    				<input type="checkbox" disabled name="inspection_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesm[0]['site_inspection_num'],'1')!==false)
						                    				<input type="number" name="inspection_num_ans[]" class="inputwidth">
						                    			@else 
						                    				<input type="checkbox" disabled name="inspection_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesm[0]['site_inspection_num'],'2')!==false)
						                    				<input type="number" name="inspection_num_ans[]" class="inputwidth">
						                    			@else 
						                    				<input type="checkbox" disabled name="inspection_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesm[0]['site_inspection_num'],'3')!==false)
						                    				<input type="number" name="inspection_num_ans[]" class="inputwidth">
						                    			@else 
						                    				<input type="checkbox" disabled name="inspection_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesm[0]['site_inspection_num'],'4')!==false)
						                    				<input type="number" name="inspection_num_ans[]" class="inputwidth">
						                    			@else 
						                    				<input type="checkbox" disabled name="inspection_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesm[0]['site_inspection_num'],'5')!==false)
						                    				<input type="number" name="inspection_num_ans[]" class="inputwidth">
						                    			@else 
						                    				<input type="checkbox" disabled name="inspection_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesm[0]['site_inspection_num'],'6')!==false)
						                    				<input type="number" name="inspection_num_ans[]" class="inputwidth">
						                    			@else 
						                    				<input type="checkbox" disabled name="inspection_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesm[0]['site_inspection_num'],'7')!==false)
						                    				<input type="number" name="inspection_num_ans[]" class="inputwidth">
						                    			@else 
						                    				<input type="checkbox" disabled name="inspection_num[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                </tr>
						                @foreach($meetings as $meet)
						                	<tr id="meetclone" data-edit="yes" data-addid="{{ $meet['added_id'] }}">
						                		<td class="zui-sticky-col3"><textarea disabled class="hayt3 name" name="name" placeholder="Enter details here">{{ $meet['name'] }}</textarea></td>
						                		<td class="td "><textarea disabled class="hayt3 purpose" name="purpose" placeholder="Enter details here">{{ $meet['purpose'] }}</textarea></td>
						                		<td class="td"><textarea disabled class="hayt3 attendees" name="attendees" placeholder="Enter details here">{{ $meet['attendees'] }}</textarea></td>
						                		<td class="td"><input disabled style="box-sizing: border-box;border: none;border-bottom: 2px solid #FE7235;" type="text" value="{{ $meet['duration'] }} " class="duration" name="durations"></td>
						                		<td class="td"><input disabled style="box-sizing: border-box;border: none;border-bottom: 2px solid #FE7235;" type="text" value="{{ $meet['reoccurence'] }}" class="reoccurence" name="reoccurences"></td>
						                		<td class="td">
						                			<div class="form-check">
						                				<label>
						                					@if(strpos($meet['arrange'],'Arrange')!==false) 
						                						<input type="checkbox" disabled class="arrange" name="arrange_ans[]" value="Arrange"><span class="label-text"></span>
						                					@else 
						                					@endif
						                				</label>
						                			</div>
						                		</td>
						                		<td class="td">
						                			<div class="form-check">
						                				<label>
						                					@if(strpos($meet['arrange'],'Attend')!==false) 
						                						<input type="checkbox" disabled class="arrange" name="arrange_ans[]" value="Attend"><span class="label-text"></span>
						                					@else 
						                					@endif
						                				</label>
						                			</div>
						                		</td>
						                		<td class="td">
						                			<div class="form-check">
						                				<label>
						                					@if(strpos($meet['arrange'],'Minute')!==false) 
						                						<input type="checkbox" disabled class="arrange" name="arrange_ans[]" value="Minute"><span class="label-text"></span>
						                					@else 
						                					@endif
						                				</label>
						                			</div>
						                		</td>
						                		<td class="td">
						                			<div class="form-check">
						                				<label>
						                					@if(strpos($meet['num'],'0')!==false) 
						                						<input type="number" name="num_ans[]" class="inputwidth">
						                					@else 
						                						<input type="checkbox" disabled name="num[]" class="meetnum" value="0"><span class="label-text"></span>
						                					@endif
						                				</label>
						                			</div>
						                		</td>
						                		<td class="td">
						                			<div class="form-check">
						                				<label>
						                					@if(strpos($meet['num'],'1')!==false) 
						                						<input type="number" name="num_ans[]" class="inputwidth">
						                					@else 
						                						<input type="checkbox" disabled name="num[]" class="meetnum" value="0"><span class="label-text"></span>
						                					@endif
						                				</label>
						                			</div>
						                		</td>
						                		<td class="td">
						                			<div class="form-check">
						                				<label>
						                					@if(strpos($meet['num'],'2')!==false) 
						                						<input type="number" name="num_ans[]" class="inputwidth">
						                					@else 
						                						<input type="checkbox" disabled name="num[]" class="meetnum" value="0"><span class="label-text"></span>
						                					@endif
						                				</label>
						                			</div>
						                		</td>
						                		<td class="td">
						                			<div class="form-check">
						                				<label>
						                					@if(strpos($meet['num'],'3')!==false) 
						                						<input type="number" name="num_ans[]" class="inputwidth">
						                					@else 
						                						<input type="checkbox" disabled name="num[]" class="meetnum" value="0"><span class="label-text"></span>
						                					@endif
						                				</label>
						                			</div>
						                		</td>
						                		<td class="td">
						                			<div class="form-check">
						                				<label>
						                					@if(strpos($meet['num'],'4')!==false) 
						                						<input type="number" name="num_ans[]" class="inputwidth">
						                					@else 
						                						<input type="checkbox" disabled name="num[]" class="meetnum" value="0"><span class="label-text"></span>
						                					@endif
						                				</label>
						                			</div>
						                		</td>
						                		<td class="td">
						                			<div class="form-check">
						                				<label>
						                					@if(strpos($meet['num'],'5')!==false) 
						                						<input type="number" name="num_ans[]" class="inputwidth">
						                					@else 
						                						<input type="checkbox" disabled name="num[]" class="meetnum" value="0"><span class="label-text"></span>
						                					@endif
						                				</label>
						                			</div>
						                		</td>
						                		<td class="td">
						                			<div class="form-check">
						                				<label>
						                					@if(strpos($meet['num'],'6')!==false) 
						                						<input type="number" name="num_ans[]" class="inputwidth">
						                					@else 
						                						<input type="checkbox" disabled name="num[]" class="meetnum" value="0"><span class="label-text"></span>
						                					@endif
						                				</label>
						                			</div>
						                		</td>
						                		<td class="td">
						                			<div class="form-check">
						                				<label>
						                					@if(strpos($meet['num'],'7')!==false) 
						                						<input type="number" name="num_ans[]" class="inputwidth">
						                					@else 
						                						<input type="checkbox" disabled name="num[]" class="meetnum" value="0"><span class="label-text"></span>
						                					@endif
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
									{{-- <button class="btn addbuttonMeet" data-scroll-to="#deliv"
	data-scroll-focus="#delivname"
	data-scroll-speed="700"
	data-scroll-offset="200">Add</button> --}}
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
						                    <td class="td "><textarea disabled class="hayt4" name="question_one" placeholder="Enter details here">@if($scopesd[0]['question_one_applies_to']) {{ $scopesd[0]['question_one_applies_to'] }} @endif</textarea></td>
						                </tr>
						                <tr>
						                    <td class="zui-sticky-col4">All information provided by other members of the Project Team.</td>
						                    <td class="td "><textarea disabled class="hayt4" name="question_two" placeholder="Enter details here">@if($scopesd[0]['question_two_applies_to']) {{ $scopesd[0]['question_two_applies_to'] }} @endif</textarea></td> 
						                </tr>
						                <tr>
						                    <td class="zui-sticky-col4">Good Practice in the Selection of Construction Materials 2011<br> (British Council of Offices Publication).</td>
						                    <td class="td "><textarea disabled class="hayt4" name="question_three" placeholder="Enter details here">@if($scopesd[0]['question_three_applies_to']) {{ $scopesd[0]['question_three_applies_to'] }} @endif</textarea></td>
						                </tr>
						                <tr>
						                    <td class="zui-sticky-col4">Statutory standards</td>
						                    <td class="td "><textarea disabled class="hayt4" name="question_four" placeholder="Enter details here">@if($scopesd[0]['question_four_applies_to']) {{ $scopesd[0]['question_four_applies_to'] }} @endif</textarea></td>
						                </tr>
						                <tr>
						                    <td class="zui-sticky-col4">Co-ordination with structural and building services</td>
						                    <td class="td "><textarea disabled class="hayt4" name="question_five" placeholder="Enter details here">@if($scopesd[0]['question_five_applies_to']) {{ $scopesd[0]['question_five_applies_to'] }} @endif</textarea></td>
						                </tr>
						                @foreach ($designs as $des)
						                	<tr id="desclone" data-edit="yes" data-addid="{{ $des['added_id'] }}" >
						                	    <td class="zui-sticky-col4"><textarea disabled class="hayt4 name" name="question_name" placeholder="Enter details here">{{ $des['name'] }}</textarea></td>
						                	    <td class="td "><textarea disabled class="hayt4 question" name="" placeholder="Enter details here">{{ $des['question'] }}</textarea></td>
						                	</tr>
						                @endforeach
						            </tbody>
						        </table>
						    </div>
						</div>
						<div class="col-sm-12">
							<div class="row">
								<div class="form-group">
									{{-- <button class="btn addbuttonDes" >Add</button> --}}
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
						                    			@if (strpos($scopesa[0]['advise_one'],'0')!==false) 
						                    				<input type="number" name="advise_one_ans[]" class="inputwidth">
						                    			@else 
						                    				<input type="checkbox" disabled name="advise_one_ans[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesa[0]['advise_one'],'1')!==false) 
						                    				<input type="number" name="advise_one_ans[]" class="inputwidth">
						                    			@else 
						                    				<input type="checkbox" disabled name="advise_one_ans[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesa[0]['advise_one'],'2')!==false) 
						                    				<input type="number" name="advise_one_ans[]" class="inputwidth">
						                    			@else 
						                    				<input type="checkbox" disabled name="advise_one_ans[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesa[0]['advise_one'],'3')!==false) 
						                    				<input type="number" name="advise_one_ans[]" class="inputwidth">
						                    			@else 
						                    				<input type="checkbox" disabled name="advise_one_ans[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesa[0]['advise_one'],'4')!==false) 
						                    				<input type="number" name="advise_one_ans[]" class="inputwidth">
						                    			@else 
						                    				<input type="checkbox" disabled name="advise_one_ans[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesa[0]['advise_one'],'5')!==false) 
						                    				<input type="number" name="advise_one_ans[]" class="inputwidth">
						                    			@else 
						                    				<input type="checkbox" disabled name="advise_one_ans[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesa[0]['advise_one'],'6')!==false) 
						                    				<input type="number" name="advise_one_ans[]" class="inputwidth">
						                    			@else 
						                    				<input type="checkbox" disabled name="advise_one_ans[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesa[0]['advise_one'],'7')!==false) 
						                    				<input type="number" name="advise_one_ans[]" class="inputwidth">
						                    			@else 
						                    				<input type="checkbox" disabled name="advise_one_ans[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                </tr>
						                <tr>
						                    <td class="zui-sticky-col5">Assembly of Project Team. (Lead)</td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesa[0]['advise_two'],'0')!==false) 
						                    				<input type="number" name="advise_two_ans[]" class="inputwidth">
						                    			@else 
						                    				<input type="checkbox" disabled name="advise_two[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesa[0]['advise_two'],'1')!==false) 
						                    				<input type="number" name="advise_two_ans[]" class="inputwidth">
						                    			@else 
						                    				<input type="checkbox" disabled name="advise_two[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesa[0]['advise_two'],'2')!==false) 
						                    				<input type="number" name="advise_two_ans[]" class="inputwidth">
						                    			@else 
						                    				<input type="checkbox" disabled name="advise_two[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesa[0]['advise_two'],'3')!==false) 
						                    				<input type="number" name="advise_two_ans[]" class="inputwidth">
						                    			@else 
						                    				<input type="checkbox" disabled name="advise_two[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesa[0]['advise_two'],'4')!==false) 
						                    				<input type="number" name="advise_two_ans[]" class="inputwidth">
						                    			@else 
						                    				<input type="checkbox" disabled name="advise_two[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesa[0]['advise_two'],'5')!==false) 
						                    				<input type="number" name="advise_two_ans[]" class="inputwidth">
						                    			@else 
						                    				<input type="checkbox" disabled name="advise_two[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesa[0]['advise_two'],'6')!==false) 
						                    				<input type="number" name="advise_two_ans[]" class="inputwidth">
						                    			@else 
						                    				<input type="checkbox" disabled name="advise_two[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesa[0]['advise_two'],'7')!==false) 
						                    				<input type="number" name="advise_two_ans[]" class="inputwidth">
						                    			@else 
						                    				<input type="checkbox" disabled name="advise_two[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td> 
						                </tr>
						                <tr>
						                    <td class="zui-sticky-col5">Need for and the scope of services by consultants, specialists,<br> sub-contractors or suppliers. (Lead)</td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesa[0]['advise_three'],'0')!==false) 
						                    				<input type="number" name="advise_three_ans[]" class="inputwidth">
						                    			@else 
						                    				<input type="checkbox" disabled name="advise_three_ans[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesa[0]['advise_three'],'1')!==false) 
						                    				<input type="number" name="advise_three_ans[]" class="inputwidth">
						                    			@else 
						                    				<input type="checkbox" disabled name="advise_three_ans[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesa[0]['advise_three'],'2')!==false) 
						                    				<input type="number" name="advise_three_ans[]" class="inputwidth">
						                    			@else 
						                    				<input type="checkbox" disabled name="advise_three_ans[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesa[0]['advise_three'],'3')!==false) 
						                    				<input type="number" name="advise_three_ans[]" class="inputwidth">
						                    			@else 
						                    				<input type="checkbox" disabled name="advise_three_ans[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesa[0]['advise_three'],'4')!==false) 
						                    				<input type="number" name="advise_three_ans[]" class="inputwidth">
						                    			@else 
						                    				<input type="checkbox" disabled name="advise_three_ans[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesa[0]['advise_three'],'5')!==false) 
						                    				<input type="number" name="advise_three_ans[]" class="inputwidth">
						                    			@else 
						                    				<input type="checkbox" disabled name="advise_three_ans[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesa[0]['advise_three'],'6')!==false) 
						                    				<input type="number" name="advise_three_ans[]" class="inputwidth">
						                    			@else 
						                    				<input type="checkbox" disabled name="advise_three_ans[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesa[0]['advise_three'],'7')!==false) 
						                    				<input type="number" name="advise_three_ans[]" class="inputwidth">
						                    			@else 
						                    				<input type="checkbox" disabled name="advise_three_ans[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                </tr>
						                <tr>
						                    <td class="zui-sticky-col5">Resolution of defects.</td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesa[0]['advise_four'],'0')!==false) 
						                    				<input type="number" name="advise_four_ans[]" class="inputwidth">
						                    			@else 
						                    				<input type="checkbox" disabled name="advise_four[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesa[0]['advise_four'],'1')!==false) 
						                    				<input type="number" name="advise_four_ans[]" class="inputwidth">
						                    			@else 
						                    				<input type="checkbox" disabled name="advise_four[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesa[0]['advise_four'],'2')!==false) 
						                    				<input type="number" name="advise_four_ans[]" class="inputwidth">
						                    			@else 
						                    				<input type="checkbox" disabled name="advise_four[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesa[0]['advise_four'],'3')!==false) 
						                    				<input type="number" name="advise_four_ans[]" class="inputwidth">
						                    			@else 
						                    				<input type="checkbox" disabled name="advise_four[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesa[0]['advise_four'],'4')!==false) 
						                    				<input type="number" name="advise_four_ans[]" class="inputwidth">
						                    			@else 
						                    				<input type="checkbox" disabled name="advise_four[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesa[0]['advise_four'],'5')!==false) 
						                    				<input type="number" name="advise_four_ans[]" class="inputwidth">
						                    			@else 
						                    				<input type="checkbox" disabled name="advise_four[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesa[0]['advise_four'],'6')!==false) 
						                    				<input type="number" name="advise_four_ans[]" class="inputwidth">
						                    			@else 
						                    				<input type="checkbox" disabled name="advise_four[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesa[0]['advise_four'],'7')!==false) 
						                    				<input type="number" name="advise_four_ans[]" class="inputwidth">
						                    			@else 
						                    				<input type="checkbox" disabled name="advise_four[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                </tr>
						                <tr>
						                    <td class="zui-sticky-col5">Form and content of design outputs, their interfaces<br> and a verification procedure. (Lead)</td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesa[0]['advise_five'],'0')!==false) 
						                    				<input type="number" name="advise_five_ans[]" class="inputwidth">
						                    			@else 
						                    				<input type="checkbox" disabled name="advise_five[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesa[0]['advise_five'],'1')!==false) 
						                    				<input type="number" name="advise_five_ans[]" class="inputwidth">
						                    			@else 
						                    				<input type="checkbox" disabled name="advise_five[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesa[0]['advise_five'],'2')!==false) 
						                    				<input type="number" name="advise_five_ans[]" class="inputwidth">
						                    			@else 
						                    				<input type="checkbox" disabled name="advise_five[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesa[0]['advise_five'],'3')!==false) 
						                    				<input type="number" name="advise_five_ans[]" class="inputwidth">
						                    			@else 
						                    				<input type="checkbox" disabled name="advise_five[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesa[0]['advise_five'],'4')!==false) 
						                    				<input type="number" name="advise_five_ans[]" class="inputwidth">
						                    			@else 
						                    				<input type="checkbox" disabled name="advise_five[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesa[0]['advise_five'],'5')!==false) 
						                    				<input type="number" name="advise_five_ans[]" class="inputwidth">
						                    			@else 
						                    				<input type="checkbox" disabled name="advise_five[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesa[0]['advise_five'],'6')!==false) 
						                    				<input type="number" name="advise_five_ans[]" class="inputwidth">
						                    			@else 
						                    				<input type="checkbox" disabled name="advise_five[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesa[0]['advise_five'],'7')!==false) 
						                    				<input type="number" name="advise_five_ans[]" class="inputwidth">
						                    			@else 
						                    				<input type="checkbox" disabled name="advise_five[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                </tr>
						                <tr>
						                    <td class="zui-sticky-col5">Relevant experience from previous projects.</td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesa[0]['advise_six'],'0')!==false) 
						                    				<input type="number" name="advise_six_ans[]" class="inputwidth">
						                    			@else 
						                    				<input type="checkbox" disabled name="advise_six[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesa[0]['advise_six'],'1')!==false) 
						                    				<input type="number" name="advise_six_ans[]" class="inputwidth">
						                    			@else 
						                    				<input type="checkbox" disabled name="advise_six[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesa[0]['advise_six'],'2')!==false) 
						                    				<input type="number" name="advise_six_ans[]" class="inputwidth">
						                    			@else 
						                    				<input type="checkbox" disabled name="advise_six[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesa[0]['advise_six'],'3')!==false) 
						                    				<input type="number" name="advise_six_ans[]" class="inputwidth">
						                    			@else 
						                    				<input type="checkbox" disabled name="advise_six[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesa[0]['advise_six'],'4')!==false) 
						                    				<input type="number" name="advise_six_ans[]" class="inputwidth">
						                    			@else 
						                    				<input type="checkbox" disabled name="advise_six[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesa[0]['advise_six'],'5')!==false) 
						                    				<input type="number" name="advise_six_ans[]" class="inputwidth">
						                    			@else 
						                    				<input type="checkbox" disabled name="advise_six[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesa[0]['advise_six'],'6')!==false) 
						                    				<input type="number" name="advise_six_ans[]" class="inputwidth">
						                    			@else 
						                    				<input type="checkbox" disabled name="advise_six[]" value="0"><span class="label-text"></span>
						                    			@endif
						                    		</label>
						                    	</div>
						                    </td>
						                    <td class="td">
						                    	<div class="form-check">
						                    		<label>
						                    			@if (strpos($scopesa[0]['advise_six'],'7')!==false) 
						                    				<input type="number" name="advise_six_ans[]" class="inputwidth">
						                    			@else 
						                    				<input type="checkbox" disabled name="advise_six[]" value="0"><span class="label-text"></span>
						                    			@endif
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
														@if (strpos($scopesa[0]['monitor_one'],'0')!==false)
															<input type="number" name="monitor_one_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="monitor_one[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['monitor_one'],'1')!==false)
															<input type="number" name="monitor_one_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="monitor_one[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['monitor_one'],'2')!==false)
															<input type="number" name="monitor_one_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="monitor_one[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['monitor_one'],'3')!==false)
															<input type="number" name="monitor_one_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="monitor_one[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['monitor_one'],'4')!==false)
															<input type="number" name="monitor_one_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="monitor_one[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['monitor_one'],'5')!==false)
															<input type="number" name="monitor_one_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="monitor_one[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['monitor_one'],'6')!==false)
															<input type="number" name="monitor_one_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="monitor_one[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['monitor_one'],'7')!==false)
															<input type="number" name="monitor_one_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="monitor_one[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
										</tr>
										<tr>
											<td class="zui-sticky-col5">Performance of Design Team.</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['monitor_two'],'0')!==false) 
															<input type="number" name="monitor_two_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="monitor_two[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['monitor_two'],'1')!==false) 
															<input type="number" name="monitor_two_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="monitor_two[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['monitor_two'],'2')!==false) 
															<input type="number" name="monitor_two_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="monitor_two[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['monitor_two'],'3')!==false) 
															<input type="number" name="monitor_two_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="monitor_two[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['monitor_two'],'4')!==false) 
															<input type="number" name="monitor_two_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="monitor_two[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['monitor_two'],'5')!==false) 
															<input type="number" name="monitor_two_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="monitor_two[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['monitor_two'],'6')!==false) 
															<input type="number" name="monitor_two_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="monitor_two[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['monitor_two'],'7')!==false) 
															<input type="number" name="monitor_two_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="monitor_two[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
										</tr>
										<tr>
											<td class="zui-sticky-col5">Compliance with statutory and contract requirements.</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['monitor_three'],'0')!==false) 
															<input type="number" name="monitor_three_ans[]" class="inputwidth">
														@else
															<input type="checkbox" disabled name="monitor_three[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['monitor_three'],'1')!==false) 
															<input type="number" name="monitor_three_ans[]" class="inputwidth">
														@else
															<input type="checkbox" disabled name="monitor_three[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['monitor_three'],'2')!==false) 
															<input type="number" name="monitor_three_ans[]" class="inputwidth">
														@else
															<input type="checkbox" disabled name="monitor_three[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['monitor_three'],'3')!==false) 
															<input type="number" name="monitor_three_ans[]" class="inputwidth">
														@else
															<input type="checkbox" disabled name="monitor_three[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['monitor_three'],'4')!==false) 
															<input type="number" name="monitor_three_ans[]" class="inputwidth">
														@else
															<input type="checkbox" disabled name="monitor_three[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['monitor_three'],'5')!==false) 
															<input type="number" name="monitor_three_ans[]" class="inputwidth">
														@else
															<input type="checkbox" disabled name="monitor_three[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['monitor_three'],'6')!==false) 
															<input type="number" name="monitor_three_ans[]" class="inputwidth">
														@else
															<input type="checkbox" disabled name="monitor_three[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['monitor_three'],'7')!==false) 
															<input type="number" name="monitor_three_ans[]" class="inputwidth">
														@else
															<input type="checkbox" disabled name="monitor_three[]" value="0"><span class="label-text"></span>
														@endif
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
														@if (strpos($scopesa[0]['collab_one'],'0')!==false) 
															<input type="number" name="collab_one_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="collab_one[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['collab_one'],'1')!==false) 
															<input type="number" name="collab_one_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="collab_one[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['collab_one'],'2')!==false) 
															<input type="number" name="collab_one_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="collab_one[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['collab_one'],'3')!==false) 
															<input type="number" name="collab_one_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="collab_one[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['collab_one'],'4')!==false) 
															<input type="number" name="collab_one_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="collab_one[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['collab_one'],'5')!==false) 
															<input type="number" name="collab_one_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="collab_one[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['collab_one'],'6')!==false) 
															<input type="number" name="collab_one_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="collab_one[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['collab_one'],'7')!==false) 
															<input type="number" name="collab_one_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="collab_one[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
										</tr>
										<tr>
											<td class="zui-sticky-col5">Planning authority to discuss the project</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['collab_two'],'0')!==false) 
															<input type="number" name="collab_two_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="collab_two[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['collab_two'],'1')!==false) 
															<input type="number" name="collab_two_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="collab_two[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['collab_two'],'2')!==false) 
															<input type="number" name="collab_two_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="collab_two[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['collab_two'],'3')!==false) 
															<input type="number" name="collab_two_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="collab_two[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['collab_two'],'4')!==false) 
															<input type="number" name="collab_two_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="collab_two[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['collab_two'],'5')!==false) 
															<input type="number" name="collab_two_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="collab_two[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['collab_two'],'6')!==false) 
															<input type="number" name="collab_two_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="collab_two[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['collab_two'],'7')!==false) 
															<input type="number" name="collab_two_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="collab_two[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
										</tr>
										<tr>
											<td class="zui-sticky-col5">Statutory authorities on developing design.</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['collab_three'],'0')!==false) 
															<input type="number" name="collab_three_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="collab_three[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['collab_three'],'1')!==false) 
															<input type="number" name="collab_three_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="collab_three[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['collab_three'],'2')!==false) 
															<input type="number" name="collab_three_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="collab_three[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['collab_three'],'3')!==false) 
															<input type="number" name="collab_three_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="collab_three[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['collab_three'],'4')!==false) 
															<input type="number" name="collab_three_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="collab_three[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['collab_three'],'5')!==false) 
															<input type="number" name="collab_three_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="collab_three[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['collab_three'],'6')!==false) 
															<input type="number" name="collab_three_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="collab_three[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['collab_three'],'7')!==false) 
															<input type="number" name="collab_three_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="collab_three[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
										</tr>
										<tr>
											<td class="zui-sticky-col5">Project Manager & Employer on significant design issues. (Lead)</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['collab_four'],'0')!==false) 
															<input type="number" name="collab_four_ans[]" class="inputwidth">
														@else
															<input type="checkbox" disabled name="collab_four[]" value="0"><span class="label-text"></span>
														@endif 
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['collab_four'],'1')!==false) 
															<input type="number" name="collab_four_ans[]" class="inputwidth">
														@else
															<input type="checkbox" disabled name="collab_four[]" value="0"><span class="label-text"></span>
														@endif 
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['collab_four'],'2')!==false) 
															<input type="number" name="collab_four_ans[]" class="inputwidth">
														@else
															<input type="checkbox" disabled name="collab_four[]" value="0"><span class="label-text"></span>
														@endif 
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['collab_four'],'3')!==false) 
															<input type="number" name="collab_four_ans[]" class="inputwidth">
														@else
															<input type="checkbox" disabled name="collab_four[]" value="0"><span class="label-text"></span>
														@endif 
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['collab_four'],'4')!==false) 
															<input type="number" name="collab_four_ans[]" class="inputwidth">
														@else
															<input type="checkbox" disabled name="collab_four[]" value="0"><span class="label-text"></span>
														@endif 
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['collab_four'],'5')!==false) 
															<input type="number" name="collab_four_ans[]" class="inputwidth">
														@else
															<input type="checkbox" disabled name="collab_four[]" value="0"><span class="label-text"></span>
														@endif 
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['collab_four'],'6')!==false) 
															<input type="number" name="collab_four_ans[]" class="inputwidth">
														@else
															<input type="checkbox" disabled name="collab_four[]" value="0"><span class="label-text"></span>
														@endif 
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['collab_four'],'7')!==false) 
															<input type="number" name="collab_four_ans[]" class="inputwidth">
														@else
															<input type="checkbox" disabled name="collab_four[]" value="0"><span class="label-text"></span>
														@endif 
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
														@if (strpos($scopesa[0]['coordinate_one'],'0')!==false) 
															<input type="number" name="coordinate_one_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="coordinate_one[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['coordinate_one'],'1')!==false) 
															<input type="number" name="coordinate_one_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="coordinate_one[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['coordinate_one'],'2')!==false) 
															<input type="number" name="coordinate_one_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="coordinate_one[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['coordinate_one'],'3')!==false) 
															<input type="number" name="coordinate_one_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="coordinate_one[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['coordinate_one'],'4')!==false) 
															<input type="number" name="coordinate_one_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="coordinate_one[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['coordinate_one'],'5')!==false) 
															<input type="number" name="coordinate_one_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="coordinate_one[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['coordinate_one'],'6')!==false) 
															<input type="number" name="coordinate_one_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="coordinate_one[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['coordinate_one'],'7')!==false) 
															<input type="number" name="coordinate_one_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="coordinate_one[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
										</tr>
										<tr>
											<td class="zui-sticky-col5">Reviewing design information provided by contractors <br>or specialists to establish whether that information <br>can be co-ordinated and integrated with other project information.</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['coordinate_two'],'0')!==false) 
															<input type="number" name="coordinate_two_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="coordinate_two[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['coordinate_two'],'1')!==false) 
															<input type="number" name="coordinate_two_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="coordinate_two[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['coordinate_two'],'2')!==false) 
															<input type="number" name="coordinate_two_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="coordinate_two[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['coordinate_two'],'3')!==false) 
															<input type="number" name="coordinate_two_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="coordinate_two[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['coordinate_two'],'4')!==false) 
															<input type="number" name="coordinate_two_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="coordinate_two[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['coordinate_two'],'5')!==false) 
															<input type="number" name="coordinate_two_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="coordinate_two[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['coordinate_two'],'6')!==false) 
															<input type="number" name="coordinate_two_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="coordinate_two[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['coordinate_two'],'7')!==false) 
															<input type="number" name="coordinate_two_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="coordinate_two[]" value="0"><span class="label-text"></span>
														@endif
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
														@if (strpos($scopesa[0]['other_one'],'0')!==false) 
															<input type="number" name="other_one_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="other_one[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['other_one'],'1')!==false) 
															<input type="number" name="other_one_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="other_one[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['other_one'],'2')!==false) 
															<input type="number" name="other_one_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="other_one[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['other_one'],'3')!==false) 
															<input type="number" name="other_one_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="other_one[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['other_one'],'4')!==false) 
															<input type="number" name="other_one_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="other_one[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['other_one'],'5')!==false) 
															<input type="number" name="other_one_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="other_one[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['other_one'],'6')!==false) 
															<input type="number" name="other_one_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="other_one[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['other_one'],'7')!==false) 
															<input type="number" name="other_one_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="other_one[]" value="0"><span class="label-text"></span>
														@endif													
													</label>
												</div>
											</td>
										</tr>
										<tr>
											<td class="zui-sticky-col5">Assisting building user during initial occupation period.</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if(strpos($scopesa[0]['other_two'],'0')!==false) 
															<input type="number" name="other_two_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="other_two[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if(strpos($scopesa[0]['other_two'],'1')!==false) 
															<input type="number" name="other_two_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="other_two[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if(strpos($scopesa[0]['other_two'],'2')!==false) 
															<input type="number" name="other_two_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="other_two[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if(strpos($scopesa[0]['other_two'],'3')!==false) 
															<input type="number" name="other_two_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="other_two[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if(strpos($scopesa[0]['other_two'],'4')!==false) 
															<input type="number" name="other_two_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="other_two[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if(strpos($scopesa[0]['other_two'],'5')!==false) 
															<input type="number" name="other_two_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="other_two[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if(strpos($scopesa[0]['other_two'],'6')!==false) 
															<input type="number" name="other_two_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="other_two[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if(strpos($scopesa[0]['other_two'],'7')!==false) 
															<input type="number" name="other_two_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="other_two[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
										</tr>
										<tr>
											<td class="zui-sticky-col5">Review all instructions and information about the Project,<br> provided by the Employer.</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['other_three'],'0')!==false) 
															<input type="number" name="other_three_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="other_three[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['other_three'],'1')!==false) 
															<input type="number" name="other_three_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="other_three[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['other_three'],'2')!==false) 
															<input type="number" name="other_three_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="other_three[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['other_three'],'3')!==false) 
															<input type="number" name="other_three_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="other_three[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['other_three'],'4')!==false) 
															<input type="number" name="other_three_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="other_three[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['other_three'],'5')!==false) 
															<input type="number" name="other_three_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="other_three[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['other_three'],'6')!==false) 
															<input type="number" name="other_three_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="other_three[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['other_three'],'7')!==false) 
															<input type="number" name="other_three_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="other_three[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
										</tr>
										<tr>
											<td class="zui-sticky-col5">preparing and making submissions under building acts<br> and/or regulations or other statutory requirements.</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['other_four'],'0')!==false) 
															<input type="number" name="other_four_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="other_four[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['other_four'],'1')!==false) 
															<input type="number" name="other_four_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="other_four[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['other_four'],'2')!==false) 
															<input type="number" name="other_four_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="other_four[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['other_four'],'3')!==false) 
															<input type="number" name="other_four_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="other_four[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['other_four'],'4')!==false) 
															<input type="number" name="other_four_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="other_four[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['other_four'],'5')!==false) 
															<input type="number" name="other_four_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="other_four[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['other_four'],'6')!==false) 
															<input type="number" name="other_four_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="other_four[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
											<td class="td">
												<div class="form-check">
													<label>
														@if (strpos($scopesa[0]['other_four'],'7')!==false) 
															<input type="number" name="other_four_ans[]" class="inputwidth">
														@else 
															<input type="checkbox" disabled name="other_four[]" value="0"><span class="label-text"></span>
														@endif
													</label>
												</div>
											</td>
										</tr>
						                @foreach ($advises as $advise)
						                	<tr id="adviseclone" data-edit="yes" data-addid="{{ $advise['added_id'] }}">
					        				    <td class="zui-sticky-col5"><textarea disabled class="name"  style="border-radius: 6px;
				    height: 70px;" name="" placeholder="Enter details here">{{ $advise['name'] }}</textarea></td>
					        				    <td class="td">
					        				    	<div class="form-check">
					        				    		<label>
					        				    			@if(strpos($advise['num'], '0')!==false) 
					        				    				<input type="number" name="advisenum_ans[]" class="inputwidth">
					        				    			@else 
					        				    				<input type="checkbox" disabled name="advisenum[]" class="advisenum" value="0"><span class="label-text"></span>
					        				    			@endif
					        				    		</label>
					        				    	</div>
					        				    </td>
					        				    <td class="td">
					        				    	<div class="form-check">
					        				    		<label>
					        				    			@if(strpos($advise['num'], '1')!==false) 
					        				    				<input type="number" name="advisenum_ans[]" class="inputwidth">
					        				    			@else 
					        				    				<input type="checkbox" disabled name="advisenum[]" class="advisenum" value="0"><span class="label-text"></span>
					        				    			@endif
					        				    		</label>
					        				    	</div>
					        				    </td>
					        				    <td class="td">
					        				    	<div class="form-check">
					        				    		<label>
					        				    			@if(strpos($advise['num'], '2')!==false) 
					        				    				<input type="number" name="advisenum_ans[]" class="inputwidth">
					        				    			@else 
					        				    				<input type="checkbox" disabled name="advisenum[]" class="advisenum" value="0"><span class="label-text"></span>
					        				    			@endif
					        				    		</label>
					        				    	</div>
					        				    </td>
					        				    <td class="td">
					        				    	<div class="form-check">
					        				    		<label>
					        				    			@if(strpos($advise['num'], '3')!==false) 
					        				    				<input type="number" name="advisenum_ans[]" class="inputwidth">
					        				    			@else 
					        				    				<input type="checkbox" disabled name="advisenum[]" class="advisenum" value="0"><span class="label-text"></span>
					        				    			@endif
					        				    		</label>
					        				    	</div>
					        				    </td>
					        				    <td class="td">
					        				    	<div class="form-check">
					        				    		<label>
					        				    			@if(strpos($advise['num'], '4')!==false) 
					        				    				<input type="number" name="advisenum_ans[]" class="inputwidth">
					        				    			@else 
					        				    				<input type="checkbox" disabled name="advisenum[]" class="advisenum" value="0"><span class="label-text"></span>
					        				    			@endif
					        				    		</label>
					        				    	</div>
					        				    </td>
					        				    <td class="td">
					        				    	<div class="form-check">
					        				    		<label>
					        				    			@if(strpos($advise['num'], '5')!==false) 
					        				    				<input type="number" name="advisenum_ans[]" class="inputwidth">
					        				    			@else 
					        				    				<input type="checkbox" disabled name="advisenum[]" class="advisenum" value="0"><span class="label-text"></span>
					        				    			@endif
					        				    		</label>
					        				    	</div>
					        				    </td>
					        				    <td class="td">
					        				    	<div class="form-check">
					        				    		<label>
					        				    			@if(strpos($advise['num'], '6')!==false) 
					        				    				<input type="number" name="advisenum_ans[]" class="inputwidth">
					        				    			@else 
					        				    				<input type="checkbox" disabled name="advisenum[]" class="advisenum" value="0"><span class="label-text"></span>
					        				    			@endif
					        				    		</label>
					        				    	</div>
					        				    </td>
					        				    <td class="td">
					        				    	<div class="form-check">
					        				    		<label>
					        				    			@if(strpos($advise['num'], '7')!==false) 
					        				    				<input type="number" name="advisenum_ans[]" class="inputwidth">
					        				    			@else 
					        				    				<input type="checkbox" disabled name="advisenum[]" class="advisenum" value="0"><span class="label-text"></span>
					        				    			@endif
					        				    		</label>
					        				    	</div>
					        				    </td>
					        				</tr>
						                @endforeach
						            </tbody>
								</table>
							</div>
						</div>
						<button type="button" id="bid_scope" class="btn btn-primary" href="">Save</button>
					</div>

					<div id="section6" class="tab-pane fade tender-container" style="min-height: 600px;">
						<form id="appointmentForm">
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
										@foreach($insur as $elem)
										<div class="col-sm-6">
											<div class="form-group">
												<p>{{$elem['name']}}</p>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<input type="text" name="" disabled class="form-control" value="{{$elem['level']}}" >
											</div>
										</div>
										@endforeach
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
										<div class="col-sm-4">
											<div class="form-group">
												Bonds
											</div>
										</div>

										<div class="col-sm-8">
											<div class="form-group">
												<p>{{$appointment->bonds}}</p>
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
												<p>{{$appointment->collateral_warranties}}</p>
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
												<p>{{$appointment->limit_of_liability}}</p>
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
												<p>{{$appointment->execution}}</p>
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
												<p >{{$appointment->net_contrib}}</p>
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
										<button type="button" id="appointment_save" name="Save" value="Save" class="btn  butsize color">Save</button>
										
									</div>
								</div>
							</div>
						</div>
					</div>
					</form>
					</div>
					<div id="section7" class="tab-pane fade tender-container" style="margin-bottom: 117px;min-height: 600px;">
						<form method="POST" action="{{ url('winwork/bid/'.$tender->tender_id.'/save') }}">
						<input type="hidden" name="project_record_id" value="{{ $project->project_record_id }}" id=""/>
							@csrf
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
													<input type="text" name="created_by_fname" class="form-control" placeholder="First name">
												</div>
												<div class="col-sm-6" style="padding:0;padding-left: 15px;">
													<input type="text" name="created_by_sname" class="form-control" placeholder="Surname">
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
												<div class="input-group date" id="datepicker4" data-date-container="#datepicker4" data-date="date()" 
												         data-date-format="mm-yyyy">
													 <input class="form-control" name="created_by_date" type="text" placeholder="Select year" readonly="readonly" name="date" >	  
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
													<input type="text" name="checked_by_fname" class="form-control" placeholder="First name">
												</div>
												<div class="col-sm-6" style="padding:0;padding-left: 15px;">
													<input type="text" name="checked_by_sname" class="form-control" placeholder="Surname">
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
												<div class="input-group date" id="datepicker10" data-date-container="#datepicker10"  data-date="02-2012" 
												         data-date-format="mm-yyyy">

													 <input class="form-control" name="checked_by_date" type="text" placeholder="Select year" readonly="readonly" name="date" >	  
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
													<input type="text" name="approved_by_fname" class="form-control" placeholder="First name">
												</div>
												<div class="col-sm-6" style="padding:0;padding-left: 15px;">
													<input type="text" name="approved_by_sname" class="form-control" placeholder="Surname">
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
												<div class="input-group date" id="datepicker11" data-date-container="#datepicker11"  data-date="02-2012" 
												         data-date-format="mm-yyyy">

													 <input class="form-control" name="approved_by_date" type="text" placeholder="Select year" readonly="readonly" name="date" >	  
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
										<button id="submitfrm" type="button" name="submit" class="btn btn-primary butsize ">Submit</button>
										<button type="submit" name="Save" value="Save" class="btn  butsize color">Save</button>
									</div>
								</div>
							</div>
						</form>
					</div>
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

		$('#submitBid').click(function()
		{
			alert('clicked!');
			$.ajax({
				url: "{{ url('submit_bid') }}",
				method: 'post',
				data: {
					project_id: jQuery("input[name='project_record_id']").val(),
					tender_id: jQuery("input[name='tender_id']").val()
				},
				success: function(result){
					console.log(result);
				}
			});
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


