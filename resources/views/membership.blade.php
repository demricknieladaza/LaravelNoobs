@extends('layouts.master')

@section('content')
<style type="text/css">
  .pricingTable{
      border: 1px solid #e7e7e7;
      text-align: center;
      padding: 0 8px 8px;
      transition: all 0.5s ease 0s;
      border: 1px solid #c3bdbd;
      border-radius: 12px;
      font-weight: 700;
      background-image: radial-gradient(#f9f9f9,#ececec);
  }
  .pricingTable:hover{
      border: 1px solid #c3bdbd;
  }

  .propbg {
      background-image: radial-gradient(#2b2b2b,#000000);
  }

  .propbg .heading:after {
      border-color: #060606  rgba(0, 0, 0, 0) rgba(0, 0, 0, 0);
  }

  .propbg:after{
      border-color: rgba(0, 0, 0, 0) rgba(0, 0, 0, 0) rgba(0, 0, 0, 0) #060606;
  }

  .propbg:before{
      border-color: rgba(0, 0, 0, 0) rgba(0, 0, 0, 0) #060606;
  }

  .probg {
      background-image: radial-gradient(#fb783f,#ff6100);
  }

  .probg .heading:after {
      border-color: #fe650b  rgba(0, 0, 0, 0) rgba(0, 0, 0, 0);
  }

  .probg:after{
      border-color: rgba(0, 0, 0, 0) rgba(0, 0, 0, 0) rgba(0, 0, 0, 0) #a23c00;
  }

  .probg:before{
      border-color: rgba(0, 0, 0, 0) rgba(0, 0, 0, 0) #a23c00;
  }

  .basicbg .heading:after {
      border-color: #81c000 rgba(0, 0, 0, 0) rgba(0, 0, 0, 0);
  }

  .basicbg{
      background-image: radial-gradient(#81c000,#81c000);
  }

  .basicbg:after{
      border-color: rgba(0, 0, 0, 0) rgba(0, 0, 0, 0) rgba(0, 0, 0, 0) #5e8c01;
  }

  .basicbg:before{
      border-color: rgba(0, 0, 0, 0) rgba(0, 0, 0, 0) #5e8c01;
  }

  .pricingTable .pricingTable-header{
      width: 150px;
      color: #fff;
      margin: -15px auto 95px;
      padding-top: 18px;
      position: relative;
      filter : drop-shadow(0px 3px 4px rgba(70,70,70,1));
  }
  .pricingTable .pricingTable-header:before{
      content: "";
      border-width: 0 0 15px 10px;
      border-style: solid;
      position: absolute;
      top: 0;
      left: -10px;
  }
  .pricingTable .pricingTable-header:after{
      content: "";
      border-width: 15px 0 0 10px;
      border-style: solid;
      position: absolute;
      top: 0;
      right: -10px;
  }
  .pricingTable .heading{
      font-size: 32px;
      font-weight: 500;
      margin: 5px 0;
      text-transform: uppercase;
      position: relative;
  }
  .pricingTable .heading:after{
      content: "";
      border-width: 25px 75px 0;
      border-style: solid;
      position: absolute;
      top: 34px;
      bottom: -108px;
      z-index: -1;
      left: 0px;
  }
  .pricingTable .currency,
  .pricingTable .month{
      font-size: 20px;
  }
  .pricingTable .price-value{
      font-size: 30px;
  }
  .pricingTable .pricing-content ul{
      list-style: none;
      padding: 0;
      margin: 0 0 25px 0;
  }
  .pricingTable .pricing-content ul li{
      font-size: 14px;
      color: #334a6b;
      line-height: 30px;
  }
  .pricingTable .pricingTable-signup{
      display: inline-block;
      font-size: 14px;
      font-weight: 600;
      color: #334a6b;
      text-transform: capitalize;
      border: 2px solid #e7e7e7;
      padding: 10px 40px;
      transition: all 0.5s ease 0s;
  }
  .pricingTable .pricingTable-signup:hover{
      border: 2px solid #1ed193;
  }
  @media only screen and (max-width:990px){
      .pricingTable{ margin-bottom: 50px; }
  }

  .terms {
      margin-top: -75px;
  }

  .texal {
      text-align: left;
  }

  .texalpro {
      text-align: left;
  }

  .texalprop {
      text-align: left;
  }

  .texal li i {
      float: right;
  }

  .texalpro li i {
      float: right;
  }

  .texalprop li i {
      float: right;
  }

  .texal li {
      font-size: 14px;
      padding: 8px 0;
      color: #9da1ad;
      line-height: inherit !important;
  }

  .texalpro li {
      font-size: 14px;
      padding: 8px 0;
      color: #9da1ad;
      line-height: inherit !important;
  }

  .texalprop li {
      font-size: 14px;
      padding: 8px 0;
      color: #9da1ad;
      line-height: inherit !important;
  }

  .texal li .fa-check:before {
      color: #81c000;
  }

  .fa-times:before {
      color: grey;
  }

  .bsc {
      background-image: radial-gradient(#81c000,#81c000);
      color: white;
  }

  .probut {
      background-image: radial-gradient(#fb783f,#ff6100);
      color: white;
  }

  .propbot {
      background-image: radial-gradient(#2b2b2b,#000000);
      color: white;
  }

  .texalpro li .fa-check:before {
      color: #ff6100;
  }

  .texalprop li .fa-check:before {
      color: #000000;
  }

  .ppadd {
      padding-right: 1px;
      padding-left: 1px;
  }

  .line{
      border: 1px solid #e4e2e2;
      border-radius: 6px;
      background-image: radial-gradient(#2b2b2b,#000000);
  }
  .minus:after {
      content: "\2212";
      color: white;
  }
  input[type=range] {
    left: -103px ;
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
					<span>Membership</span>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 project-anchor" style="padding-bottom: 0;">
					<a>My Subscription</a>
				</div>
			</div>
			<div class="tender-container">
				<div id="section1" class="tab-pane fade in active" style="border:none;">
          <div class="row container" style="width: 1100px;">
                <div class="col-sm-3 khalifa">
                    <input type="range" class="sliderkhal" orient="vertical" name="range" id="range" min="0" max="20" value="1"/> 
                    <output for="range" class="output"></output>
                    <div class="discount0"></div>
                    <div class="plan-discount discount5">
                        <h3>Discount</h3> 
                        <p class="anp"></p>
                        <p class="mop"></p>
                    </div>
                </div>
                <div class="col-sm-8 col-sm-offset-1" style="margin-top: 5px;margin-bottom: 20px;">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 ppadd">
                                <div class="pricingTable">
                                    <div class="pricingTable-header basicbg">
                                        <h3 class="heading">BASIC</h3>
                                    </div>
                                    <div class="pricing-content terms">
                                        <div class="row">
                                            <div class="col-sm-6">
                                            <ul>
                                                <li>Monthly Plan (£/mo)</li>
                                                <li class="BMprice">985.00</li>
                                                <li class="BMdisc">1.5% Discount</li>
                                                <li><button class="btn bsc">Get Started</button></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6">
                                            <ul>
                                                <li>Annual Plan (£/mo)</li>
                                                <li class="BAprice">970.00</li>
                                                <li class="BAdisc">3.0% Discount</li>
                                                <li><button class="btn bsc">Get Started</button></li>
                                            </ul>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="pricing-content">
                                        <ul class="texal">
                                            <li>Internal Benchmarking <i class="fa fa-check" style="line-height: -1px !important;"></i></li>
                                            <div class="line"></div>
                                            <li>Tenderer Management <i class="fa fa-check"></i></li>
                                            <div class="line"></div>
                                            <li>Full Tenderer Functionalities <i class="fa fa-check"></i></li>
                                            <div class="line"></div>
                                            <li>Tenderer Dashboard <i class="fa fa-check"></i></li>
                                            <div class="line"></div>
                                            <li>Employer Dashboard <i class="fa fa-check"></i></li>
                                            <div class="line"></div>
                                            <li>Benchmarking Pro <i class="fa fa-times"></i></li>
                                            <div class="line"></div>
                                            <li>Scope of Services Tool <i class="fa fa-times"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 ppadd">
                                <div class="pricingTable">
                                    <div class="pricingTable-header probg">
                                        <h3 class="heading">PRO</h3>
                                    </div>
                                    <div class="pricing-content terms">
                                        <div class="row">
                                            <div class="col-sm-6">
                                            <ul>
                                                <li>Monthly Plan (£/mo)</li>
                                                <li class="PMprice">1,280.50</li>
                                                <li class="PMdisc">1.5% Discount</li>
                                                <li><button class="btn probut">Get Started</button></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6">
                                            <ul>
                                                <li>Annual Plan (£/mo)</li>
                                                <li class="PAprice">1,261.00</li>
                                                <li class="PAdisc">3.0% Discount</li>
                                                <li><button class="btn probut">Get Started</button></li>
                                            </ul>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="pricing-content">
                                        <ul class="texalpro">
                                            <li>Internal Benchmarking <i class="fa fa-check" style="line-height: -1px !important;"></i></li>
                                            <div class="line"></div>
                                            <li>Tenderer Management <i class="fa fa-check"></i></li>
                                            <div class="line"></div>
                                            <li>Full Tenderer Functionalities <i class="fa fa-check"></i></li>
                                            <div class="line"></div>
                                            <li>Tenderer Dashboard <i class="fa fa-check"></i></li>
                                            <div class="line"></div>
                                            <li>Employer Dashboard <i class="fa fa-check"></i></li>
                                            <div class="line"></div>
                                            <li>Benchmarking Pro <i class="fa fa-check"></i></li>
                                            <div class="line"></div>
                                            <li>Scope of Services Tool <i class="fa fa-times"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 ppadd">
                                <div class="pricingTable">
                                    <div class="pricingTable-header propbg">
                                        <h3 class="heading">PRO +</h3>
                                    </div>
                                    <div class="pricing-content terms">
                                        <div class="row">
                                            <div class="col-sm-6">
                                            <ul>
                                                <li>Monthly Plan (£/mo)</li>
                                                <li class="PpMprice">1,576.00</li>
                                                <li class="PpMdisc">1.5% Discount</li>
                                                <li><button class="btn propbot">Get Started</button></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6">
                                            <ul>
                                                <li>Annual Plan (£/mo)</li>
                                                <li class="PpAprice">1,552.00</li>
                                                <li class="PpAdisc">3.0% Discount</li>
                                                <li><button class="btn propbot">Get Started</button></li>
                                            </ul>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="pricing-content">
                                        <ul class="texalprop">
                                            <li>Internal Benchmarking <i class="fa fa-check" style="line-height: -1px !important;"></i></li>
                                            <div class="line"></div>
                                            <li>Tenderer Management <i class="fa fa-check"></i></li>
                                            <div class="line"></div>
                                            <li>Full Tenderer Functionalities <i class="fa fa-check"></i></li>
                                            <div class="line"></div>
                                            <li>Tenderer Dashboard <i class="fa fa-check"></i></li>
                                            <div class="line"></div>
                                            <li>Employer Dashboard <i class="fa fa-check"></i></li>
                                            <div class="line"></div>
                                            <li>Benchmarking Pro <i class="fa fa-check"></i></li>
                                            <div class="line"></div>
                                            <li>Scope of Services Tool <i class="fa fa-check"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="col-sm-12 flex" style="text-align: center;display: none;">
                        <div class="col-sm-6">
                            <div class="pricing-title" style="background: #285080;border: 1px solid #285080;">
                                <h4></h4>
                                <h4>FLEX</h4>
                            </div>
                            <div class="pricing-body">
                                <div class="col-sm-12" style="color: #00b050;font-weight: 700;">
                                    <div>
                                        <h4 style="">Pay as you tender <br>(£/mo)</h4>
                                    </div>
                                    <div>
                                        <h4 style="">150.00</h4>
                                    </div>
                                    <div>
                                        <h4 style="color: darkgray;">No discount</h4>
                                    </div>
                                    <div class="services">
                                        <p>Internal Benchmarking  1</p>
                                    </div>
                                    <div class="services">
                                        <p>Tenderer Management 1</p>
                                    </div>
                                    <div class="services">
                                        <p>Full Tenderer Functionalities 1</p>
                                    </div>
                                    <div class="services">
                                        <p>Tenderer Dashboard 1</p>
                                    </div>
                                    <div class="services" style="border-bottom:none;">
                                        <p>Employer Dashboard 1</p>
                                    </div>
                                    <div style="">
                                        <button class="btn col-sm-12" style=" border-radius: 5px;color: white;background: #285080;margin-bottom:25px;">Get Started</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6" style="margin-top: 10px;">
                            <div class="flexni">
                                Stay flexible
                            </div>
                            <div class="flexni">
                                or
                            </div>
                            <div class="flexni">
                                simply top up your plan without upgrading
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-12 project-anchor">
					<a>My Payment Details</a>
				</div>
			</div>
			<div class="tender-container">
				<div id="section1" class="tab-pane fade in active" style="border:none;">
          <div class="">
              <div class="row">
                  <div class="col-xs-12 col-md-4 col-md-offset-4">
                      <div class="panel panel-default" style="border-color: transparent; ">
                          <div class="panel-heading" style="background: transparent;color: transparent;">
                              <div class="row">
                                  <h3 class="text-center" style="color:black; margin-bottom: 5px;">Payment Details</h3>
                                  <div class="text-center">
                                    <img src="https://my.fastcomet.com/images/icons/payments/payment-AmericanExpress.png" height="50" width="60">
                                    <img src="https://my.fastcomet.com/images/icons/payments/payment-Visa.png" height="50" width="60">
                                    <img src="https://my.fastcomet.com/images/icons/payments/payment-MasterCard.png" height="50" width="60">
                                    <img src="https://my.fastcomet.com/images/icons/payments/payment-discover.png" height="50" width="60">
                                  </div>
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


