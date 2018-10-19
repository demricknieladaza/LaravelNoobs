@extends('layouts.master')

@section('content')

	<div class="container-fluid below-header">
	</div>

	
	<div class="container-fluid lounge-wrapper">
		<div class="row">
			@include('sidemenu')
			<div class="col-sm-10 col-sm-offset-2 lounge-main">
				<div class="row">
					<div class="col-sm-12 lounge-header">
						<span>Tenderer Dashboard</span>
						<button class="btn btn-warning pull-right">Print this report</button>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="lounge-demo">
							<!-- <div class="form-group">
								<h1 style="color: #000; text-align: center; font-size: 20px;">There are<br><span style="color: #FE7235; font-size: 50px;">26</span><br>Opportunity Nearby
								</h1>
							</div>
							<div class="form-group ">
								<div class="tender-tiles new-project-tile rad">
								<h2><a href="{{ url('/winwork') }}">Win Work</a></h2>
								</div>
							</div> -->
							<div class="row" style=" margin-right: 0;
							    margin-left: 0;
							    margin-bottom: 15px;
							    padding: 10px;
							    border-radius: 6px;">
								<div class="col-sm-6">
									<h1 style="color: #000; text-align: center; font-size: 20px; margin-top: 4px;">There are<br><span style="color: #FE7235; font-size: 50px;">{{ count($oppur) }}</span><br>Opportunies
									</h1>
								</div>
								<div class="col-sm-6">
									<a href="{{ url('/winwork') }}" style="color: #fff; text-decoration: none;">
									<div class="overlay-ribbon">
										<div class="ribbon-content">
											<h2 style="transform: rotate(270deg); font-size: 28px; margin-top: 70px;">Win Work</h2>
										</div>
									</div>
									</a>
								</div>
							</div>
							<div class="col-sm-6 tab1">
								<div class="tender-tiles new-project-tile" style="background: #FE7235; color: #fff; text-align: center; font-size: 20px;     padding-top: 20px; padding-bottom: 14px;">
									<h3><a href="{{ url('/winwork/pds') }}">Request for Proposal   <span  class="project1 pull-right" style="color: #fe7235; background: #fff; border-radius: 50%;">3</span></a></h3>
								</div>
								<table >
									<tr class="col-sm-3">
										<div class="ex3">
											<a href="{{ url('/dashboard/tend_dashboard/active_page') }}"><p style="font-weight: bold; font-size: 20px; border-top: 2px black solid; color: #000; padding-top: 10px; ">Project Infinity Tree</p></a>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<a href="{{ url('/dashboard/tend_dashboard/active_page') }}"><p style="font-weight: bold; font-size: 20px; color: #000; padding-top: 10px; ">Project Green Lagune</p></a>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<a href="{{ url('/dashboard/tend_dashboard/active_page') }}"><p style="font-weight: bold; font-size: 20px; color: #000; padding-top: 10px; ">Project Infinity Tree</p></a>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>

											 <p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											 <ul class="pagination pages">
												<li><a href="#">«</a></li>
												<li class="active"><a href="#">1</a></li>
												<li><a href="#">2</a></li>
												<li><a href="#">3</a></li>
												<li><a href="#">4</a></li>
												<li><a href="#">»</a></li>
											</ul>
										</div>
									</tr>
								</table>
							</div>
							<div class="col-sm-6 tab2 pull-right">
								<div class="tender-tiles new-project-tile" style="background: #FE7235;  color: #fff; text-align: center; font-size: 20px;     padding-top: 20px; padding-bottom: 14px;">
									<h3>Saved Opportunities<span  class="project1 pull-right" style="color: #fe7235; background: #fff; border-radius: 50%;">{{ count($saved) }}</span></h3>
								</div>
								<table >
									<tr class="col-sm-3">
										<div class="ex3">
											@foreach($saved as $sv)
											<a href="{{ url('/winwork'.'/'.$sv->project_record_id.'/'.'edit') }}"><p style="font-weight: bold; font-size: 20px; border-top: 2px black solid; color: #000; padding-top: 10px; ">{{ $sv->project_title }}</p></a>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>
											@endforeach

											{{-- <a href="{{ url('/winwork/pds') }}"><p style="font-weight: bold; font-size: 20px; color: #000; padding-top: 10px; ">Project Green Lagune</p></a>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<a href="{{ url('/winwork/pds') }}"><p style="font-weight: bold; font-size: 20px; color: #000; padding-top: 10px; ">Project Infinity Tree</p></a>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>

											 <p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p> --}}

											 <ul class="pagination pages">
												<li><a href="#">«</a></li>
												<li class="active"><a href="#">1</a></li>
												<li><a href="#">2</a></li>
												<li><a href="#">3</a></li>
												<li><a href="#">4</a></li>
												<li><a href="#">»</a></li>
										</div>
									</tr>
								</table>
							</div>
							<div class="col-sm-6 tab1">
								<div class="tender-tiles new-project-tile" style="background: #FE7235;  color: #fff; text-align: center; font-size: 20px;     padding-top: 20px;    margin-top: 15px; padding-bottom: 14px;">
									<h3>Active<span  class="project1 pull-right" style="color: #fe7235; background: #fff; border-radius: 50%;">{{ count($active) }}</span></h3>
								</div>
								<table >
									<tr class="col-sm-3">
										<div class="ex3">
											@foreach($active as $ac)
												<a href="{{ url('/dashboard/tend_dashboard/active_page') }}"><p style="font-weight: bold; font-size: 20px; border-top: 2px black solid; color: #000; padding-top: 10px; ">{{ $ac->project_title }}</p></a>
												<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
												<p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>
											@endforeach

											{{-- <a href="{{ url('/dashboard/tend_dashboard/active_page') }}"><p style="font-weight: bold; font-size: 20px; color: #000;"><p style="font-weight: bold; font-size: 20px; color: #000; padding-top: 10px; ">Project Green Lagune</p></a>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<a href="{{ url('/dashboard/tend_dashboard/active_page') }}"><p style="font-weight: bold; font-size: 20px; color: #000;"><p style="font-weight: bold; color: #000; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p></a>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<a href="{{ url('/dashboard/tend_dashboard/active_page') }}"><p style="font-weight: bold; font-size: 20px; color: #000;"><p style="font-weight: bold; color: #000; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p></a>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<a href="{{ url('/dashboard/tend_dashboard/active_page') }}"><p style="font-weight: bold; font-size: 20px; color: #000;"><p style="font-weight: bold; color: #000; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p></a>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<a href="{{ url('/dashboard/tend_dashboard/active_page') }}"><p style="font-weight: bold; font-size: 20px; color: #000;"><p style="font-weight: bold; color: #000; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p></a>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>

											 <p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p> --}}

											 <ul class="pagination pages">
												<li><a href="#">«</a></li>
												<li class="active"><a href="#">1</a></li>
												<li><a href="#">2</a></li>
												<li><a href="#">3</a></li>
												<li><a href="#">4</a></li>
												<li><a href="#">»</a></li>
											</ul>
										</div>
									</tr>
								</table>
							</div>
							<div class="col-sm-6 tab2">
								<div class="tender-tiles new-project-tile" style="background: #FE7235;  color: #fff; text-align: center; font-size: 20px;     padding-top: 20px;    margin-top: 15px; padding-bottom: 14px;">
									<h3>Drafted<span  class="project1 pull-right" style="color: #fe7235; background: #fff; border-radius: 50%;">{{ count($drafted) }}</span></h3>
								</div>
								<table >
									<tr class="col-sm-3 pull-right">
										<div class="ex3">
											@foreach($drafted as $df)
											<a href="{{ url('/winwork/pds/bid') }}"><p style="font-weight: bold; font-size: 20px; border-top: 2px black solid; color: #000; padding-top: 10px; ">{{ $df->project_title }}</p></a>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											<p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>
											@endforeach

											{{-- <a href="{{ url('/winwork/pds/bid') }}"><p style="font-weight: bold; font-size: 20px; color: #000; padding-top: 10px; ">Project Green Lagune</p></a>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<a href="{{ url('/winwork/pds/bid') }}"><p style="font-weight: bold; font-size: 20px; color: #000; padding-top: 10px; ">Project Infinity Tree</p></a>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>

											 <p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">23</span> hours <span style="color: #FE7235;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p> --}}


											 <ul class="pagination pages">
												<li><a href="#">«</a></li>
												<li class="active"><a href="#">1</a></li>
												<li><a href="#">2</a></li>
												<li><a href="#">3</a></li>
												<li><a href="#">4</a></li>
												<li><a href="#">»</a></li>
											</ul>
										</div>
									</tr>
								</table>
							</div>
							<div class="col-sm-6 tab1">
								<div class="tender-tiles new-project-tile" style="background: #FE7235;  color: #fff; text-align: center; font-size: 20px;     padding-top: 20px;    margin-top: 15px; padding-bottom: 14px;">
									<h3>Successful<span  class="project1 pull-right" style="color: #fe7235; background: #fff; border-radius: 50%;">3</span></h3>
								</div>
								<table >
									<tr class="col-sm-3">
										<div class="ex3">
											<a href="{{ url('dashboard/tend_dashboard/success_page') }}"><p style="font-weight: bold; font-size: 20px; border-top: 2px black solid; color: #000; padding-top: 10px; ">Project Infinity Tree</p></a>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<a href="{{ url('dashboard/tend_dashboard/success_page') }}"><p style="font-weight: bold; font-size: 20px; color: #000; padding-top: 10px; ">Project Green Lagune</p></a>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<a href="{{ url('dashboard/tend_dashboard/success_page') }}"><p style="font-weight: bold; font-size: 20px; color: #000; padding-top: 10px; ">Project Infinity Tree</p></a>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>

											 <p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>

											 <ul class="pagination pages">
												<li><a href="#">«</a></li>
												<li class="active"><a href="#">1</a></li>
												<li><a href="#">2</a></li>
												<li><a href="#">3</a></li>
												<li><a href="#">4</a></li>
												<li><a href="#">»</a></li>
											</ul>
										</div>
									</tr>
								</table>
							</div>
							<div class="col-sm-6 tab2">
								<div class="tender-tiles new-project-tile" style="background: #FE7235;  color: #fff; text-align: center; font-size: 20px;     padding-top: 20px;     margin-top: 15px; padding-bottom: 14px;">
									<h3>Unsuccessful<span  class="project1 pull-right" style="color: #fe7235; background: #fff; border-radius: 50%;">3</span></h3>
								</div>
								<table >
									<tr class="col-sm-3">
										<div class="ex3">
											<a href="{{ url('dashboard/tend_dashboard/unsuccess_page') }}"><p style="font-weight: bold; font-size: 20px; border-top: 2px black solid; color: #000; padding-top: 10px; ">Project Infinity Tree</p></a>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<a href="{{ url('dashboard/tend_dashboard/unsuccess_page') }}"><p style="font-weight: bold; font-size: 20px; color: #000; padding-top: 10px; ">Project Green Lagune</p></a>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<a href="{{ url('dashboard/tend_dashboard/unsuccess_page') }}"><p style="font-weight: bold; font-size: 20px; color: #000; padding-top: 10px; ">Project Infinity Tree</p></a>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>

											 <p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #FE7235;">0</span> hours <span style="color: #FE7235;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #FE7235;">14/08/2018</span></p>

											 <ul class="pagination pages">
												<li><a href="#">«</a></li>
												<li class="active"><a href="#">1</a></li>
												<li><a href="#">2</a></li>
												<li><a href="#">3</a></li>
												<li><a href="#">4</a></li>
												<li><a href="#">»</a></li>
											</ul>
										</div>
									</tr>
								</table>
							</div>
						</div>	
					</div>
					<div class="col-sm-6 lounge-action">
						<div class="lounge-demo">
							<div style="width: 1000px;" class="container">
							    <div class="row">
							        <div class="col-md-6">
							        	<div class="form-inline" id="performanceDropDown" style="padding-bottom: 20px">
							        		<select id="dps" class="form-control" style="vertical-align: middle; display: inline-block; width:auto;">
							        		  <option value="100">6 months</option>
							        		  <option value="1000">1 year</option>
							        		  <option value="5000">2 years</option>
							        		  <option value="50000" selected="selected">5 years</option>
							        		</select>
							        		<button class="btn btn-success canvasjsEvent" id="renderChart" data-gaevent="{&quot;category&quot;:&quot;Misc&quot;, &quot;action&quot;: &quot;PerformanceTest&quot;, &quot;label&quot; : &quot;Render&quot;, &quot;value&quot;:1}">Render Chart</button>
							        	</div>
							            <div class="panel panel-default">
							                <div id="chartContainers" style="height: 300px; width: 110%;"></div>
							            </div>
							        </div>
							    </div>   
							</div>
							<div style="width: 1000px;" class="container">
							    <div class="row">
							        <div class="col-md-6">
							            <div class="panel panel-default">
							            	<div id="chartContainer" style="height: 300px; width: 110%;"></div>
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
	

	
	
	<!-- end -->

@endsection


