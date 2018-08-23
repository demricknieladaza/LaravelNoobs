@extends('layouts.master')

@section('content')
	<style>
		ul.user {
		  list-style-type: none;
		  padding: 0;
		  margin: 0;
		}

		ul.user li {
		  border: 1px solid #ddd;
		  margin-top: -1px; /* Prevent double borders */
		  background-color: white;
		  padding: 12px;
		  text-decoration: none;
		  width: 200px;
		  font-size: 18px;
		  color: black;
		  display: block;
		  position: relative;
		}

		ul.user li:hover, ul.user li:active, ul.user li:focus {
		  background-color: #fe7235;
		  color: white;
		  font-size:bold;
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
					<div class="col-sm-12">
						<ul class="user">
						  <li>Europe</li>
						  	<ul class="dropdown-menu">
				  	      <li><a href="#">HTML</a></li>
				  	      <li><a href="#">CSS</a></li>
				  	      <li><a href="#">JavaScript</a></li>
				  	    </ul>
						  <li>Americas</li>
						  <li>Asia</li>
						  <li>Africa</li>
						  <li>Austria</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	
	
	<!-- end -->

	
@endsection


