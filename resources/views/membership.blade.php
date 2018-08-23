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
						<span>Membership</span>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="container" style="width: 100%;">
							<div class="row">
								<div class="col-sm-12">
									<div class="tender-container tendnew">
										<ul class="nav navs bid-form-nav">
											<li class="active"><a class="abut" data-toggle="tab" href="#section1">My  Subscription </a></li>
											<li><a class="abut" data-toggle="tab" href="#section2">My  Payment  Details </a></li>
										</ul><br>
									</div>
								</div>
								<div id="section1" class="tab-pane fade tender-container" style="padding-top:0;margin-left:auto;margin-right:auto;width:1040px;">
									<div class="row">
										<div class="container">
											<h1 class="project-title bid-page-title">Design Responsibility Matrix</h1>
										</div>
									</div>
								</div>
								<div id="section2" class="tab-pane fade tender-container" style="padding-top:0;margin-left:auto;margin-right:auto;width:1040px;">
									<div class="row">
										<div class="container">
											<h1 class="project-title bid-page-title">Design Responsibility Matrix</h1>
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


