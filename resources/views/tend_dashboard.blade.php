<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SCOPE</title>	
	<link href="https://fonts.googleapis.com/css?family=Crete+Round" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	{{-- <link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.0/css/bootstrap-combined.min.css"> --}}
	<link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/bootstrap.datepicker/0.1/css/datepicker.css">
	<link rel="stylesheet" type="text/css" href="../../css/animate.min.css">
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
	<link rel="shortcut icon" href="../images/logo.jpg">
	<script type="text/javascript" src="../../js/jquery.min.js"></script>
	<script type="text/javascript" src="../../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../../js/wow.min.js"></script>
	<script type="text/javascript" src="http://cdn.jsdelivr.net/bootstrap.datepicker/0.1/js/bootstrap-datepicker.js"></script>
	<link id="themecss" rel="stylesheet" type="text/css" href="//www.shieldui.com/shared/components/latest/css/light/all.min.css" />
    <script type="text/javascript" src="//www.shieldui.com/shared/components/latest/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="//www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
	<script type="text/javascript">
    jQuery(function ($) {
        var data1 = [12, 3, 4, 2, 12, 3, 4, 17, 22, 34, 54, 67];
        var data2 = [3, 9, 12, 14, 22, 32, 45, 12, 67, 45, 55, 7];
        var data3 = [23, 19, 11, 134, 242, 352, 435, 22, 637, 445, 555, 57];
            
        $(function () {            
            // $("#chart1").shieldChart({
            //     exportOptions: {
            //         image: false,
            //         print: false
            //     },
            //     axisY: {
            //         title: {
            //             text: "Break-Down for selected quarter"
            //         }
            //     },               
            //     dataSeries: [{
            //         seriesType: "line",                    
            //         data: data1
            //     }]
            // });

            $("#chart2").shieldChart({
                exportOptions: {
                    image: false,
                    print: false
                },
                axisY: {
                    title: {
                        text: "Break-Down for selected quarter"
                    }
                },               
                dataSeries: [{
                    seriesType: "line",                    
                    data: data1	
                }, {
                    seriesType: "line",
                    data: data2
                }, {
                    seriesType: "line",
                    data: data3
                }]
            });

       
        });
      
    });
</script>

<script type="text/javascript">
    jQuery(function ($) {
        var data4 = [12, 3, 4, 2, 12, 3, 4, 17, 22, 34, 54, 67];
        var data5 = [3, 9, 12, 14, 22, 32, 45, 12, 67, 45, 55, 7];
        var data3 = [23, 19, 11, 134, 242, 352, 435, 22, 637, 445, 555, 57];
            
        // $("#chart1").shieldChart({
        //     exportOptions: {
        //         image: false,
        //         print: false
        //     },
        //     axisY: {
        //         title: {
        //             text: "Break-Down for selected quarter"
        //         }
        //     },
        //     dataSeries: [{
        //         seriesType: "bar",
        //         data: data1
        //     }]
        // });

        $("#chart1").shieldChart({
            exportOptions: {
                image: false,
                print: false
            },
            axisY: {
                title: {
                    text: "Break-Down for selected quarter"
                }
            },
            dataSeries: [{
                seriesType: "bar",
                data: data4
            }, {
                seriesType: "bar",
                data: data5
            }, {
                seriesType: "bar",
                data: data3
            }]
        });
    });
</script>
<script type="text/javascript">
  window.onload = function () {
    var chart = new CanvasJS.Chart("chartContainer",
    {
      title:{
        text: "Understanding Legend"
      },

      
      
     data: [
     {
      type: "line",
      showInLegend: true,
      legendText: "Numbers",
      dataPoints: [
      {label: "Jan", y: 230 },
      {label: "Feb", y: 245},
      {label: "Mar", y: 345},
      {label: "Apr", y: 367 },
      {label: "May", y: 453 },
      {label: "Jun", y: 256 },
      {label: "Jul", y: 478},
      {label: "Aug", y: 543 },      
      {label: "Sep", y: 456 },
      {label: "Oct", y: 456 },
      {label: "Nov", y: 456 },
      {label: "Dec", y: 456 }
      ]
    }
    ]
  });

    chart.render();
  }
  </script>
  <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
        
</head>
<body class="theme-light">

	<header>
		<nav class="navbar">
			<div class="container">
				<div class="row">
					<div class="navbar-header">
						<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<i class="icon-bar"></i>
							<i class="icon-bar"></i>
							<i class="icon-bar"></i>
						</button>
						<a href="#" class="navbar-brand"><img src="../../images/logo.png" width="120"></a>
					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('/publish') }}" class="highlight">Publish Projects</a></li>    
                            <li><a href="{{ url('/winwork') }}" class="highlight">Win Work</a></li>
                            <li><a href="#how-it-works">How It Works</a></li>
                            <li><a href="#pricing">Pricing</a></li>
                            <li><a href="#about-scope">About Scope</a></li>
                            <li><a href="#faqs">FAQ</a></li>                    
                            <li><a href="#contact">contact</a></li>
                            <li><a data-toggle="modal" href="#myModal" class="highlight">Login/register</a></li>
						</ul>
					</div>
				</div>
			</div>
		</nav>
	</header>

	<div id="myModal" class="modal fade" role="dialog" tabindex='-1'>
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Login / Register</h4>
				</div>
				<div class="modal-body">
					<ul class="nav nav-tabs">
						<li class="active"><a data-toggle="tab" href="#login">Login</a></li>
						<li><a data-toggle="tab" href="#signup">Register</a></li>
					</ul>
					<div class="tab-content">
						<div id="login" class="tab-pane fade in active">
							<form method="post" class="form-horizontal" autocomplete="off">
								<div class="form-group">
									<label class="col-sm-3 control-label">Email</label>
									<div class="col-sm-8 ">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-user"></i></span>
											<input type="email" class="form-control" placeholder="Email address" name="" autocomplete="off" required="">
										</div>
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-3 control-label">Password</label>
									<div class="col-sm-8 ">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-lock"></i></span>
											<input type="password" class="form-control" placeholder="Password" name="" required="">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label"></label>
									<div class="col-sm-8 ">
										<input type="submit" class="btn btn-primary col-sm-12" value="LOGIN">
									</div>
								</div>

								<div class="form-group">   							
									<div class="col-sm-8 col-sm-offset-3 text-right">   
										<a href="#" class="forgot"><i class="fa fa-lock"></i> Forgot password</a>
									</div>
								</div>
							</form>
						</div>
						<div id="signup" class="tab-pane fade">
							<form method="post" class="form-horizontal" autocomplete="off">
								<div class="form-group has-feedback">
									<label class="col-sm-3 control-label">Full Name</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="name" required="" data-msg-required="Please enter your full  name">
									</div>
								</div>
								<div class="form-group has-feedback">
									<label class="col-sm-3 control-label">Company</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="company" required="" data-msg-required="Please enter your company name">
									</div>
								</div>
								<div class="form-group has-feedback">
									<label class="col-sm-3 control-label">Email</label>
									<div class="col-sm-8">
										<input type="email" class="form-control" name="email" required="" data-msg-required="Please enter your email">
									</div>
								</div>
								<div class="form-group has-feedback">
									<label class="col-sm-3 control-label">Phone</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="phone" required="" data-msg-required="Please enter your phone number">
									</div>
								</div>
								<div class="form-group has-feedback">
									<label class="col-sm-3 control-label">Password</label>
									<div class="col-sm-8">
										<input type="password" class="form-control" name="password" required="" data-msg-required="Please enter your password">
									</div>
								</div>
								<div class="form-group has-feedback">
									<label class="col-sm-3 control-label">Confirm Password</label>
									<div class="col-sm-8">
										<input type="password" class="form-control" name="cpassword" required="" data-msg-required="Please enter your password again">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label"></label>
									<div class="col-sm-8">
										<input type="submit" class="btn btn-primary col-sm-12" value="REGISTER">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="modal-footer">					
				</div>
			</div>
		</div>
	</div> 

	<div class="container-fluid below-header">
	</div>

	
	<div class="container-fluid lounge-wrapper">
		<div class="row">
			<div class="col-sm-2 lounge-menu">
				<div class="row">
					<div class="lounge-title">
						<h2>Scope<br> Business Lounge</h2>
					</div>
				</div>
				<div class="clearfix"></div>
				<ul class="nav lounge-nav">
					<li>
						<a href="{{ url('dashboard') }}" class="menu-title policies-link">Dashboards</a>
						<ul>
							<li><a href="{{ url('/dashboard/emp_dashboard') }}"><i class="fa fa-circle-o"></i> Employer Dashboard</a></li>
							<li><a href="{{ url('/dashboard/tend_dashboard') }}"><i class="fa fa-circle-o"></i> Tenderer Dashboard</a></li>
							<li><a href="{{ url('/dashboard/benchmark_dashboard') }}"><i class="fa fa-circle-o"></i> Benchmarking</a></li>
						</ul>
					</li>
					<li>
						<a href="#" class="menu-title policies-link">My Profile</a>
						<ul>
							<li><a href="#"><i class="fa fa-circle-o"></i> Organisation</a></li>
							<li><a href="#"><i class="fa fa-circle-o"></i> Individuals</a></li>
							<li><a href="#"><i class="fa fa-circle-o"></i> Users</a></li>
							<li><a href="#"><i class="fa fa-circle-o"></i> Membership</a></li>
						</ul>
					</li>
					<li>
						<a href="{{ url('/dashboard/policies') }}" class="menu-title policies-link">Policies </a>			          
					</li>										
				</ul>
			</div>
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
							<div class="form-group">
								<h1 style="color: #000; text-align: center; font-size: 20px;">There are<br><span style="color: #D8652B; font-size: 50px;">26</span><br>Opportunity Nearby
								</h1>
							</div>
							<div class="form-group" style="background: #D8652B; ">
								<div class="tender-tiles new-project-tile">
								<h2><a href="{{ url('/winwork') }}">Win Work</a></h2>
								</div>
							</div>
							<div class="col-sm-6 tab1">
								<div class="tender-tiles new-project-tile" style="background: #D8652B; padding: 2px; color: #fff; text-align: center; font-size: 20px;     padding-top: 20px; padding-bottom: 14px;">
									<h3><a href="{{ url('/winwork/pds') }}">Request for Proposal</a></h3>
								</div>
								<table >
									<tr class="col-sm-3">
										<div class="ex3">
											<p style="font-weight: bold; font-size: 20px; border-top: 2px black solid;padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #D8652B;">0</span> hours <span style="color: #D8652B;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #D8652B;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #D8652B;">23</span> hours <span style="color: #D8652B;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #D8652B;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #D8652B;">0</span> hours <span style="color: #D8652B;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #D8652B;">14/08/2018</span></p>
										</div>
									</tr>
								</table>
							</div>
							<div class="col-sm-6 tab2 pull-right">
								<div class="tender-tiles new-project-tile" style="background: #D8652B; padding: 2px; color: #fff; text-align: center; font-size: 20px;     padding-top: 20px; padding-bottom: 14px;">
									<h3><a href="{{ url('/winwork/pds') }}">Saved Opportunities</a> </h3>
								</div>
								<table >
									<tr class="col-sm-3">
										<div class="ex3">
											<p style="font-weight: bold; font-size: 20px; border-top: 2px black solid;padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #D8652B;">0</span> hours <span style="color: #D8652B;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #D8652B;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #D8652B;">23</span> hours <span style="color: #D8652B;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #D8652B;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #D8652B;">0</span> hours <span style="color: #D8652B;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #D8652B;">14/08/2018</span></p>
										</div>
									</tr>
								</table>
							</div>
							<div class="col-sm-6 tab1">
								<div class="tender-tiles new-project-tile" style="background: #D8652B; padding: 2px; color: #fff; text-align: center; font-size: 20px;     padding-top: 20px;    margin-top: 15px; padding-bottom: 14px;">
									<h3><a href="{{ url('/winwork/pds/bid') }}">Active</a> </h3>
								</div>
								<table >
									<tr class="col-sm-3">
										<div class="ex3">
											<p style="font-weight: bold; font-size: 20px; border-top: 2px black solid;padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #D8652B;">0</span> hours <span style="color: #D8652B;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #D8652B;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #D8652B;">23</span> hours <span style="color: #D8652B;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #D8652B;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #D8652B;">0</span> hours <span style="color: #D8652B;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #D8652B;">14/08/2018</span></p>
										</div>
									</tr>
								</table>
							</div>
							<div class="col-sm-6 tab2">
								<div class="tender-tiles new-project-tile" style="background: #D8652B; padding: 2px; color: #fff; text-align: center; font-size: 20px;     padding-top: 20px;    margin-top: 15px; padding-bottom: 14px;">
									<h3><a href="{{ url('/winwork/pds/bid') }}">Drafted</a> </h3>
								</div>
								<table >
									<tr class="col-sm-3 pull-right">
										<div class="ex3">
											<p style="font-weight: bold; font-size: 20px; border-top: 2px black solid;padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #D8652B;">0</span> hours <span style="color: #D8652B;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #D8652B;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #D8652B;">23</span> hours <span style="color: #D8652B;">14</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #D8652B;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #D8652B;">0</span> hours <span style="color: #D8652B;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #D8652B;">14/08/2018</span></p>
										</div>
									</tr>
								</table>
							</div>
							<div class="col-sm-6 tab1">
								<div class="tender-tiles new-project-tile" style="background: #D8652B; padding: 2px; color: #fff; text-align: center; font-size: 20px;     padding-top: 20px;    margin-top: 15px; padding-bottom: 14px;">
									<h3><a href="{{ url('/winwork/pds/bid') }}">Successful</a> </h3>
								</div>
								<table >
									<tr class="col-sm-3">
										<div class="ex3">
											<p style="font-weight: bold; font-size: 20px; border-top: 2px black solid;padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #D8652B;">0</span> hours <span style="color: #D8652B;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #D8652B;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #D8652B;">0</span> hours <span style="color: #D8652B;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #D8652B;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #D8652B;">0</span> hours <span style="color: #D8652B;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #D8652B;">14/08/2018</span></p>
										</div>
									</tr>
								</table>
							</div>
							<div class="col-sm-6 tab2">
								<div class="tender-tiles new-project-tile" style="background: #D8652B; padding: 2px; color: #fff; text-align: center; font-size: 20px;     padding-top: 20px;     margin-top: 15px; padding-bottom: 14px;">
									<h3><a href="{{ url('/winwork/pds/bid') }}">Unsuccessful</a> </h3>
								</div>
								<table >
									<tr class="col-sm-3">
										<div class="ex3">
											<p style="font-weight: bold; font-size: 20px; border-top: 2px black solid;padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #D8652B;">0</span> hours <span style="color: #D8652B;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #D8652B;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Green Lagune</p>
											<p>Closes in <span style="color: #D8652B;">0</span> hours <span style="color: #D8652B;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #D8652B;">14/08/2018</span></p>


											<p style="font-weight: bold; font-size: 20px; padding-top: 10px; ">Project Infinity Tree</p>
											<p>Closes in <span style="color: #D8652B;">0</span> hours <span style="color: #D8652B;">6</span> minutes<br></p>
											 <p style="border-bottom: 2px black solid;padding-bottom: 10px;">Feedback by <span style="color: #D8652B;">14/08/2018</span></p>
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
							            <div class="panel panel-default">
							                <div id="chart2" class="panel-body">
							                </div>
							            </div>
							        </div>
							    </div>
							</div>
							<div style="width: 1000px;" class="container">
							    <div class="row">
							        <div class="col-md-6">
							            <div class="panel panel-default">
							                <div id="chart1" class="panel-body">
							                </div>
							            </div>
							        </div>
							    </div>   
							</div>
							<div style="width: 1000px;" class="container">
							    <div class="row">
							        <div class="col-md-6">
							            <div class="panel panel-default">
							                <div id="chartContainer" style="height: 300px; width: 100%;">
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
	</div>
	

	
	<footer class="text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="200ms">
		<div class="col-sm-12">
			<p><img src="../../images/logo.png"></p>
			<p>
				<a style="margin-right: 3%;" href="#"><i class="fa fa-facebook"></i></a>
                <a style="margin-right: 3%;" href="#"><i class="fa fa-twitter"></i></a>
                <a style="margin-right: 3%;" href="#"><i class="fa fa-linkedin"></i></a>
				<a href="#"><i class="fa fa-google-plus"></i></a>
			</p>
		</div>
	</footer>
	<div class="container-fluid text-center copyright">
		SCOPE Limited, registration number 12345678, 32 Hainton Close, London, E1 2QZ, United Kingdom
	</div>

	<!-- end -->


</body>
</html>

