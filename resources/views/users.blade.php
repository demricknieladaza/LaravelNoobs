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
				<div class="row" style="background: white; margin:5px;padding-top: 15px;padding-bottom: 15px;box-shadow: 0 2px 4px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)!important">
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
				</div>
			</div>
		</div>
	</div>

	
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

	
@endsection


