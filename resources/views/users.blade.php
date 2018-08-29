@extends('layouts.master')

@section('content')
<style>
	.dropdown-submenu {
	  position: relative;
	}

	.dropdown-submenu .dropdown-menu {
    margin-left: 100%;
    top:0;
    width: 100%;
	}
</style>
	<div class="container-fluid below-header">
	</div>

	<div class="container-fluid lounge-wrapper">
		<div class="row">
			@include('sidemenu')
			<div class="col-sm-10 col-sm-offset-2 lounge-main">
				<div class="row">
					<div class="col-sm-12 lounge-header">
						<span>Users</span>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="col-sm-3">
							<div class="form-group">
							  <label for="sel1"></label>
							  <select class="form-control" id="country">
							  	<option></option>
							  	<option value="Europe">Europe</option>
							  	<option value="Asia">Asia</option>
							  </select>
							</div>
							<div class="addblock1" style="display: none;">
							<form method="post" class="form-horizontal" id="addCount" autocomplete="off">
                                {{ csrf_field() }}
								<input type="text" name="data_name" id="data_name">
								<input type="hidden" name="uid" id="uid" value="{{ Session::get('id') }}">
								<button >
								Add
								</button>
							</form>
							</div>
							<a id="showadd" style="color:#fe7235">+ Add</a>
						</div>
						<div id="Countryblock" class="col-sm-3" style="display: none;">
							<div class="form-group">
							  <label for="sel2"></label>
							  <select class="form-control" id="sel2">
							    <option></option>
							    <option value="2" >Germany</option>
							    <option value="3" >France</option>
							    <option value="4" >United Kingdom</option>
							  </select>
							</div>
							<a id="showadd" style="color:#fe7235">+ Add</a>
						</div>
						<div id="Cityblock" class="col-sm-3" style="display: none;">
							<div class="form-group">
							  <label for="sel3"></label>
							  <select class="form-control" id="sel3">
							    <option></option>
							    <option value="2" >London - Aldgate</option>
							    <option value="3" >London - Wimbledon</option>
							    <option value="4" >Manchester</option>
							  </select>
							</div>
							<a id="showadd" style="color:#fe7235">+ Add</a>
						</div>
						<div id="tendblock" class="col-sm-3" style="display: none;">
							<div class="form-group">
							  <label for="sel4"></label>
							  <select class="form-control" id="sel4">
							    <option></option>
							    <option value="2" >Architecture</option>
							    <option value="3" >Structural Engineering</option>
							    <option value="4" >Fire Engineer</option>
							  </select>
							</div>
							<a id="showadd" style="color:#fe7235">+ Add</a>
						</div>
						<div id="add" class="col-sm-3" style="display: none;">
							<a id="showadd" style="color:#fe7235">+ Add</a>
						</div>
					</div>
				</div>
				<div class="usertable container-fluid" style="display: none;">
					<div class="col-sm-12 text-center">
						<div class="pull-right" style="margin-bottom: 15px">
							<button type="button" class="btn btn-success" data-toggle="modal" data-target="#adduser"><i class="fa fa-user"></i>Add User</button>
						</div>
						<table class="table table-bordered" style="border: 1px solid #ddd;">
							<thead>
								<tr>
									<th width="10%">No.</th>
									<th width="30%">First Name</th>
									<th width="20%">Surname</th>
									<th width="20%">Email</th>
									<th width="20%">Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>001</td>
									<td>John</td>
									<td>Doe</td>
									<td>johndoe@gmail.com</td>
									<td><button type="button" class="btn del"><i class="fa fa-trash"></i>Delete</button></td>
								</tr>
								<tr>
									<td>002</td>
									<td>Test</td>
									<td>Test</td>
									<td>Test@gmail.com</td>
									<td><button type="button" class="btn del"><i class="fa fa-trash"></i>Delete</button></td>
								</tr>
								<tr>
									<td>003</td>
									<td>First Name</td>
									<td>Surname</td>
									<td>fns@yahoo.com</td>
									<td><button type="button" class="btn del"><i class="fa fa-trash"></i>Delete</button></td>
								</tr>
							</tbody>
						</table>
						<div class="utablu">
			                <div class="row">
			                  <div class="col col-xs-4" style="text-align: left;">Page 1 of 5
			                  </div>
			                  <div class="col col-xs-8">
			                    <ul class="pagination hidden-xs pull-right">
			                      <li><a href="#">1</a></li>
			                      <li><a href="#">2</a></li>
			                      <li><a href="#">3</a></li>
			                      <li><a href="#">4</a></li>
			                      <li><a href="#">5</a></li>
			                    </ul>
			                    <ul class="pagination visible-xs pull-right">
			                        <li><a href="#">«</a></li>
			                        <li><a href="#">»</a></li>
			                    </ul>
			                  </div>
			                </div>
			              </div>
					</div>

				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="adduser" role="dialog">
	  <div class="modal-dialog">
	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header" style="background-color: #fe7235;">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">Add User</h4>
	      </div>
	      <div class="modal-body">
	        <form>
	        	<div class="form-group">
	        		<label>First Name</label>
	        		<input type="text" name="fname" class="form-control">
	        	</div>
	        	<div class="form-group">
	        		<label>Surname</label>
	        		<input type="text" name="lname" class="form-control">
	        	</div>
	        	<div class="form-group">
	        		<label>Email</label>
	        		<input type="text" name="email" class="form-control">
	        	</div>
	        </form>
	      </div>
	      <div class="modal-footer">
	        <button type="submit" class="btn btn-success" >Save</button>
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>
	<script>
		// $(document).ready(function(){
		
		// var $contactForm = $('#addCountry');

		// $contactForm.on('submit', function(e){
	 //    e.preventDefault();
	    
	 //     jQuery.ajax({
	 //        url: "",
	 //        method: 'post',
	 //        data: {
	 //          data_name: jQuery('#name').val(),
	 //          uid: jQuery('#uid').val(),
	 //          status: 'active'
	 //        },
	 //        success: function(result){
	 //        	alert('ok');
	 //           $("#addCountry")[0].reset();
	 //        }});
		// });
		// });

	</script>
	<script>
	$(document).ready(function(){
	  $('.test').on("click", function(e){
	    $(this).next('ul').toggle();
	    e.stopPropagation();
	    e.preventDefault();
	  });
	});
	</script>
	<script>
		$(function() {
		$('#showadd').click(function(){
		  $('.addblock1').css("display", "block");
		  $(this).css("display", "none");
		});
		$('#btnAddtoList').click(function(){
		  var text = $('#inputAddtoList').val();
			var newDiv = $('<li class="dropdown-submenu"><a class="test" href="#">'+text+'</a><ul class="dropdown-menu"></ul></li>');
		  //newDiv.style.background = "#000";
		  $('.user').append(newDiv);
		  $('#inputAddtoList').val('');
		  $('.addblock1').css("display", "none");
		  $('#showadd').css("display", "block");
		});
		});
	</script>
	<!-- end -->
	<script>
		$(function() {
		    $('#ndblock').hide(); 
		    $('#country').change(function(){
		        if($('#country').val() == 'Europe') {
		            $('#Countryblock').show(); 
		            $('#add').hide();
		            $('.usertable').hide(); 
		        }
		        else if($('#country').val() == 'Asia') {
		           $('#Countryblock').hide(); 
		           $('#tendblock').hide(); 
		           $('#Cityblock').hide();
		           $('.usertable').hide();  
		           $('#add').show(); 
		        }
		        else if($('#country').val() == '') {
		           $('#ndblock').hide(); 
		           $('#Countryblock').hide(); 
		           $('#tendblock').hide(); 
		           $('#Cityblock').hide();
		           $('.usertable').hide(); 
		           $('#add').hide(); 
		        } else {
		            $('#ndblock').hide(); 
		        } 
		    });
		    $('#sel2').change(function(){
		        if($('#sel2').val() == '4') {
		            $('#Cityblock').show(); 
		            $('#add').hide();
		            $('.usertable').hide(); 
		        }
		        else if($('#sel2').val() == '2') {
		           $('#tendblock').hide(); 
		           $('#Cityblock').hide();
		           $('.usertable').hide(); 
		           $('#add').show();  
		        }
		        else if($('#sel2').val() == '3') {
		           $('#tendblock').hide(); 
		           $('#Cityblock').hide();
		           $('.usertable').hide(); 
		           $('#add').show(); 
		        }
		        else if($('#sel2').val() == '') {
		           $('#tendblock').hide(); 
		           $('.usertable').hide(); 
		           $('#Cityblock').hide();
		           $('#add').hide(); 
		        } else {
		            $('#ndblock').hide(); 
		        } 
		    });
		    $('#sel3').change(function(){
		        if($('#sel3').val() == '4') {
		            $('#tendblock').show(); 
		            $('.usertable').hide(); 
		            $('#add').hide();
		        }
		        else if($('#sel3').val() == '2') {
		           $('#tendblock').hide(); 
		           $('.usertable').hide(); 
		           $('#add').show();  
		        }
		        else if($('#sel3').val() == '3') {
		           $('#tendblock').hide(); 
		           $('.usertable').hide(); 
		           $('#add').show(); 
		        }else if($('#sel3').val() == '') {
		           $('#tendblock').hide(); 
		           $('.usertable').hide(); 
		           $('#add').hide(); 
		        } else {
		            $('#ndblock').hide(); 
		        } 
		    });
		    $('#sel4').change(function(){
		        if($('#sel4').val() == '2') {
		            $('.usertable').show(); 
		            $('#add').hide();
		        }
		        else if($('#sel4').val() == '4') {
		           $('.usertable').hide();  
		        }
		        else if($('#sel4').val() == '3') {
		           $('.usertable').hide(); 
		        }else if($('#sel4').val() == '') {
		           $('.usertable').hide(); 
		           $('#add').hide(); 
		        } else {
		            $('.usertable').hide(); 
		        } 
		    });
		});
	</script>
	
@endsection

{{-- <div class="row" style="background: white; margin:5px;padding-top: 15px;padding-bottom: 15px;box-shadow: 0 2px 4px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)!important">
	<div class="col-sm-3">
		<ul class="user">
	  	<li class="dropdown-submenu">
	  		<a class="test" href="#">Europe</a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="#">Germany</a></li>
          <li class="dropdown-submenu">
            <a class="test" href="#">United Kingdom</a>
            <ul class="dropdown-menu">
              <li><a href="#">London - Aldgate</a></li>
              <li><a href="#">London - Wimbleton</a></li>
              <li class="dropdown-submenu">
                <a class="test" href="#">Manchester</a>
                <ul class="dropdown-menu">
                  <li><a href="#">Architecture</a></li>
                  <li><a href="#">Structural Engineering</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a tabindex="-1" href="#">France</a></li>
        </ul>
      </li>
      <li class="dropdown-submenu">
	  		<a class="test" href="#">Americas</a>
        <ul class="dropdown-menu">
        </ul>
      </li>
      <li class="dropdown-submenu">
	  		<a class="test" href="#">Asia</a>
        <ul class="dropdown-menu">
        </ul>
      </li>
      <li class="dropdown-submenu">
	  		<a class="test" href="#">Africa</a>
        <ul class="dropdown-menu">
        </ul>
      </li>
		</ul>
		<div class="addblock1" style="display: none;">
			<input type="text" id="inputAddtoList">
			<button id="btnAddtoList">
			Add to list
			</button>
		</div>
		<a id="showadd" style="color:#fe7235">+ Add</a>
	</div>
</div> --}}

