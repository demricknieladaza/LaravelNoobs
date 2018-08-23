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
				<div class="col-sm-12 project-anchor">
					<a>My Subscription</a>
				</div>
			</div>
			<div class="tender-container">
				<div id="section1" class="tab-pane fade in active tender-container" style="border:none;">
				</div>
			</div>

			<div class="row">
				<div class="col-sm-12 project-anchor">
					<a>My Payment Details</a>
				</div>
			</div>
			<div class="tender-container">
				<div id="section1" class="tab-pane fade in active tender-container" style="border:none;">
          <div class="container">
              <div class="row">
                  <div class="col-xs-12 col-md-4 col-md-offset-4">
                      <div class="panel panel-default" style="border-color: transparent; ">
                          <div class="panel-heading" style="background: transparent;color: transparent;">
                              <div class="row">
                                  <h3 class="text-center">Payment Details</h3>
                                  <img class="img-responsive cc-img" src="http://www.prepbootstrap.com/Content/images/shared/misc/creditcardicons.png">
                              </div>
                          </div>
                          <div class="panel-body">
                              <form role="form">
                                  <div class="row">
                                      <div class="col-xs-12">
                                          <div class="form-group">
                                              <label>CARD NUMBER</label>
                                              <div class="input-group">
                                                  <input type="tel" class="form-control" placeholder="Valid Card Number" />
                                                  <span class="input-group-addon"><span class="fa fa-credit-card"></span></span>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-xs-7 col-md-7">
                                          <div class="form-group">
                                              <label><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
                                              <input type="tel" class="form-control" placeholder="MM / YY" />
                                          </div>
                                      </div>
                                      <div class="col-xs-5 col-md-5 pull-right">
                                          <div class="form-group">
                                              <label>CV CODE</label>
                                              <input type="tel" class="form-control" placeholder="CVC" />
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-xs-12">
                                          <div class="form-group">
                                              <label>CARD OWNER</label>
                                              <input type="text" class="form-control" placeholder="Card Owner Names" />
                                          </div>
                                      </div>
                                  </div>
                              </form>
                          </div>
                          <div class="panel-footer" style="background-color: transparent;border-top: none;">
                              <div class="row">
                                  <div class="col-xs-12">
                                      <button class="btn btn-warning btn-lg btn-block">Process payment</button>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <style>
              .cc-img {
                  margin: 0 auto;
              }
          </style>
				</div>
			</div>
		</div>
	</div>
</div>
	
	

	
	
	<!-- end -->

@endsection


