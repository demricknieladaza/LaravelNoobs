<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SCOPE - {{Route::currentRouteName()}}</title>    
    <link href="https://fonts.googleapis.com/css?family=Crete+Round" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">
    <meta name="_token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/masterslider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/animate.min.css')}} ">
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.css')}} ">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bxslider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/proj_dash.css')}}">
    <link rel="shortcut icon" href="{{asset('images/logo.jpg')}}">
    {{-- @if(Route::currentRouteName() != 'winwork') --}}
        <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
    {{-- @endif --}}
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/masterslider.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/wow.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/functions.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bxslider.js')}}"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.0/css/bootstrap-combined.min.css"> -->
	<link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/bootstrap.datepicker/0.1/css/datepicker.css">
	<link rel="stylesheet" type="text/css" href="{{asset('css/animate.min.css')}}">
	<!-- <link rel="shortcut icon" href="{{asset('logo.jpg')}}"> -->
	<script type="text/javascript" src="http://cdn.jsdelivr.net/bootstrap.datepicker/0.1/js/bootstrap-datepicker.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link id="themecss" rel="stylesheet" type="text/css" href="//www.shieldui.com/shared/components/latest/css/light/all.min.css" />
	<!-- <script type="text/javascript" src="//www.shieldui.com/shared/components/latest/js/jquery-1.11.1.min.js"></script> -->
	<script type="text/javascript" src="//www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
	<link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.css')}}">
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

    <script>
    window.onload = function () {

    var chart = new CanvasJS.Chart("chartContainer",
        {
          title:{
            text: "Unsuccessful Tenders (Reasons)"
          
          },   
          data: [{        
            type: "column",
            name: "Quantitative",
            showInLegend: true,
            dataPoints: [
            { x: 10, y: 171 },
            { x: 20, y: 155},
            { x: 30, y: 150 },
            { x: 40, y: 165 },
            { x: 50, y: 195 },
            { x: 60, y: 168 },
            { x: 70, y: 128 },
            { x: 80, y: 134 },
            { x: 90, y: 114}
            ]
          },
          {        
            type: "column",
            name: "Qualitative",
            showInLegend: true,
            dataPoints: [
            { x: 10, y: 71 },
            { x: 20, y: 55},
            { x: 30, y: 50 },
            { x: 40, y: 65 },
            { x: 50, y: 95 },
            { x: 60, y: 68 },
            { x: 70, y: 28 },
            { x: 80, y: 34 },
            { x: 90, y: 14}
            ]
          },
          {        
            type: "column",
            name: "Risk",
            showInLegend: true,
            dataPoints: [
            { x: 10, y: 71 },
            { x: 20, y: 55},
            { x: 30, y: 50 },
            { x: 40, y: 65 },
            { x: 50, y: 95 },
            { x: 60, y: 68 },
            { x: 70, y: 28 },
            { x: 80, y: 34 },
            { x: 90, y: 14}
            ]
          }        
          ]
        });

        chart.render();

    var charter = new CanvasJS.Chart("chartContainers", {
        animationEnabled: true,
        title:{
            text: "Tenderer Overview"
        },
        axisX: {
            valueFormatString: "DD MMM,YY"
        },
        axisY: {
            title: "",
            includeZero: false,
            suffix: " "
        },
        legend:{
            cursor: "pointer",
            fontSize: 16,
            itemclick: toggleDataSeries
        },
        toolTip:{
            shared: true
        },
        data: [{
            name: "Successful",
            type: "spline",
            yValueFormatString: "#0.## ",
            showInLegend: true,
            dataPoints: [
                { x: new Date(2017,1,24), y: 31 },
                { x: new Date(2017,2,25), y: 31 },
                { x: new Date(2017,3,26), y: 29 },
                { x: new Date(2017,4,27), y: 29 },
                { x: new Date(2017,5,28), y: 31 },
                { x: new Date(2017,6,29), y: 30 },
                { x: new Date(2017,7,30), y: 21 },
                { x: new Date(2017,8,21), y: 20 },
                { x: new Date(2017,9,22), y: 26 },
                { x: new Date(2017,10,23), y: 20 },
                { x: new Date(2017,11,25), y: 22 },
                { x: new Date(2017,12,28), y: 24 }
            ]
        },
        {
            name: "Unuccessful",
            type: "spline",
            yValueFormatString: "#0.## ",
            showInLegend: true,
            dataPoints: [
                { x: new Date(2017,1,24), y: 40 },
                { x: new Date(2017,2,25), y: 30 },
                { x: new Date(2017,3,26), y: 21 },
                { x: new Date(2017,4,27), y: 24 },
                { x: new Date(2017,5,28), y: 32 },
                { x: new Date(2017,6,29), y: 38 },
                { x: new Date(2017,7,30), y: 29 },
                { x: new Date(2017,8,21), y: 22 },
                { x: new Date(2017,9,22), y: 18 },
                { x: new Date(2017,10,23), y: 10 },
                { x: new Date(2017,11,25), y: 35 },
                { x: new Date(2017,12,28), y: 31 }
            ]
        },
        {
            name: "Total",
            type: "spline",
            yValueFormatString: "#0.## ",
            showInLegend: true,
            dataPoints: [
                { x: new Date(2017,1,24), y: 31 },
                { x: new Date(2017,2,25), y: 22 },
                { x: new Date(2017,3,26), y: 26 },
                { x: new Date(2017,4,27), y: 15 },
                { x: new Date(2017,5,28), y: 11 },
                { x: new Date(2017,6,29), y: 20 },
                { x: new Date(2017,7,30), y: 11 },
                { x: new Date(2017,8,21), y: 10 },
                { x: new Date(2017,9,22), y: 16 },
                { x: new Date(2017,10,23), y: 18 },
                { x: new Date(2017,11,25), y: 20 },
                { x: new Date(2017,12,28), y: 22 }
            ]
        }]
    });
    charter.render();

    function toggleDataSeries(e){
        if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
            e.dataSeries.visible = false;
        }
        else{
            e.dataSeries.visible = true;
        }
        chart.render();
        }
    }
    </script>

    <script type="text/javascript">
        var densityCanvas = document.getElementById("densityChart");

        Chart.defaults.global.defaultFontFamily = "Lato";
        Chart.defaults.global.defaultFontSize = 18;

        var densityData = {
          label: 'Density of Planet (kg/m3)',
          data: [5427, 5243, 5514, 3933, 1326, 687, 1271, 1638],
          backgroundColor: 'rgba(0, 99, 132, 0.6)',
          borderWidth: 0,
          yAxisID: "y-axis-density"
        };

        var gravityData = {
          label: 'Gravity of Planet (m/s2)',
          data: [3.7, 8.9, 9.8, 3.7, 23.1, 9.0, 8.7, 11.0],
          backgroundColor: 'rgba(99, 132, 0, 0.6)',
          borderWidth: 0,
          yAxisID: "y-axis-gravity"
        };

        var planetData = {
          labels: ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune"],
          datasets: [densityData, gravityData]
        };

        var chartOptions = {
          scales: {
            xAxes: [{
              barPercentage: 1,
              categoryPercentage: 0.6
            }],
            yAxes: [{
              id: "y-axis-density"
            }, {
              id: "y-axis-gravity"
            }]
          }
        };

        var barChart = new Chart(densityCanvas, {
          type: 'bar',
          data: planetData,
          options: chartOptions
        });
    </script>
    

	<style>
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: rgba(0, 0, 0, 0.8);
            width: 98%;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.5);
            z-index: 1;
        }
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            height: 20px;
        }  
        .dropdown:hover .dropdown-content {display: block;}
    </style>
</head>
<body>
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
                    <a href="{{ url('/') }}" class="navbar-brand"><img src="{{asset('images/logo.png')}}" width="120"></a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/publish') }}" class="highlight">Publish Projects</a></li>    
                        <li><a href="{{ url('/winwork') }}" class="highlight">Win Work</a></li>
                        @if(Route::currentRouteName()=='Landing' )
                            <li><a href="#how-it-works">How It Works</a></li>
                            <li><a href="#pricing">Pricing</a></li>
                            <li><a href="#about-scope">About Scope</a></li>
                            <li><a href="#faqs">FAQ</a></li>                 
                            <li><a href="#contact">contact</a></li>
                        @else
                            <li><a href="{{ url('/') }}">How It Works</a></li>
                            <li><a href="{{ url('/') }}">Pricing</a></li>
                            <li><a href="{{ url('/') }}">About Scope</a></li>
                            <li><a href="{{ url('/') }}">FAQ</a></li>       
                            <li><a href="{{ url('/') }}">contact</a></li>
                        @endif
                        @if(Session::has('fullname'))
                            <li class="dropdown"><a href="" class="highlight">SCOPE Business Lounge</a>
                                <div class="dropdown-content">
                                  <a href="{{ url('/dashboard/emp_dashboard') }}">Employer Dashboard</a>
                                  <a href="{{ url('/dashboard/tend_dashboard') }}">Tenderer Dashboard</a>
                                  <a href="{{ url('/dashboard/benchmark_dashboard') }}">Benchmarking</a>
                                  <a href="#">Organisation</a>
                                  <a href="#">Individuals</a>
                                  <a href="{{ url('/dashboard/users') }}">Users</a>
                                  <a href="{{ url('/dashboard/membership') }}">Membership</a>
                                  <a href="{{ url('logout') }}">Logout</a>
                                </div>
                            </li>
                        @else
                            <li><a data-toggle="modal" href="#myModal" class="highlight">Login/register</a></li>
                        @endif
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
                            <div class="alert alertss alert-success" style="display:none"></div>
                            <form method="post" class="form-horizontal" id="logForm" autocomplete="off">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Email</label>
                                    <div class="col-sm-8 ">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <input type="email" id="lemail" class="form-control" placeholder="Email address" name="" autocomplete="off" required="">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Password</label>
                                    <div class="col-sm-8 ">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                            <input type="password" id="lpassword" class="form-control" placeholder="Password" name="" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label"></label>
                                    <div class="col-sm-8 ">
                                        <button type="submit" class="btn btn-primary col-sm-12" id="ajaxSubmits">LOGIN</button>
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
                            @if(count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                        <li>{{$error}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if(\Session::has('success'))
                            <div class="alert alert-success">
                                <p>{{ \Session::get('success') }}</p>
                            </div>
                            @endif
                            <div class="alert alerts alert-success" style="display:none"></div>
                            <form method="post" class="form-horizontal" id="regForm" autocomplete="off">
                                {{ csrf_field() }}
                                <div class="form-group has-feedback">
                                    <label class="col-sm-3 control-label">Full Name</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="fullname" name="fullname" required="" data-msg-required="Please enter your full  name">
                                    </div>
                                </div>
                                <div class="form-group has-feedback">
                                    <label class="col-sm-3 control-label">Company</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="company" name="company" required="" data-msg-required="Please enter your company name">
                                    </div>
                                </div>
                                <div class="form-group has-feedback">
                                    <label class="col-sm-3 control-label">Email</label>
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control" id="email" name="email" required="" data-msg-required="Please enter your email">
                                    </div>
                                </div>
                                <div class="form-group has-feedback">
                                    <label class="col-sm-3 control-label">Phone</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="phone" name="phone" required="" data-msg-required="Please enter your phone number">
                                    </div>
                                </div>
                                <div class="form-group has-feedback">
                                    <label class="col-sm-3 control-label">Password</label>
                                    <div class="col-sm-8">
                                        <input type="password" class="form-control" id="password" name="password" required="" data-msg-required="Please enter your password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label"></label>
                                    <div class="col-sm-8">
                                        <button type="submit" class="btn btn-primary col-sm-12" id="ajaxSubmit">REGISTER</button>
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
    @section('sidemenu')
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
                        <li><a href="{{ url('/dashboard/users') }}"><i class="fa fa-circle-o"></i> Users</a></li>
                        <li><a href="{{ url('/dashboard/membership') }}"><i class="fa fa-circle-o"></i> Membership</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="menu-title policies-link">Policies </a>                    
                </li>                                   
            </ul>
        </div>
    @endsection
    @yield('content')

<footer class="text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="200ms">
        <div class="col-sm-12">
            <p><img src="{{asset('images/scope-white.png')}}" width="80%"></p>
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



    <!-- Display Image -->
    <script type="text/javascript">
        function PreviewImage() {
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

            oFReader.onload = function (oFREvent) {
                document.getElementById("uploadPreview").src = oFREvent.target.result;
            };
        };

    </script>

    <script type="text/javascript">
        function PreviewImage1() {
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("uploadImage1").files[0]);

            oFReader.onload = function (oFREvent) {
                document.getElementById("uploadPreview1").src = oFREvent.target.result;
            };
        };

    </script>

    <script type="text/javascript">
        function PreviewImage2() {
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("uploadImage2").files[0]);

            oFReader.onload = function (oFREvent) {
                document.getElementById("uploadPreview2").src = oFREvent.target.result;
            };
        };

    </script>

    <script type="text/javascript">
        function PreviewImage3() {
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("uploadImage3").files[0]);

            oFReader.onload = function (oFREvent) {
                document.getElementById("uploadPreview3").src = oFREvent.target.result;
            };
        };

    </script>

    <script type="text/javascript">
        function PreviewImage4() {
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("uploadImage4").files[0]);

            oFReader.onload = function (oFREvent) {
                document.getElementById("uploadPreview4").src = oFREvent.target.result;
            };
        };

    </script>

    <script type="text/javascript">
        function PreviewImage5() {
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("uploadImage5").files[0]);

            oFReader.onload = function (oFREvent) {
                document.getElementById("uploadPreview5").src = oFREvent.target.result;
            };
        };

    </script>

    <script type="text/javascript">
        function PreviewImage6() {
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("uploadImage6").files[0]);

            oFReader.onload = function (oFREvent) {
                document.getElementById("uploadPreview6").src = oFREvent.target.result;
            };
        };

    </script>

     <script type="text/javascript">
        function PreviewImage7() {
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("uploadImage7").files[0]);

            oFReader.onload = function (oFREvent) {
                document.getElementById("uploadPreview7").src = oFREvent.target.result;
            };
        };

    </script>

    <script type="text/javascript">
        function PreviewImage8() {
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("uploadImage8").files[0]);

            oFReader.onload = function (oFREvent) {
                document.getElementById("uploadPreview8").src = oFREvent.target.result;
            };
        };

    </script>


    <!-- Tender -->
    <script>
		$('.popup-gallery').magnificPopup({
			delegate: 'a',
			type: 'image',
			tLoading: 'Loading image #%curr%../images.',
			mainClass: 'mfp-img-mobile',
			gallery: {
				enabled: true,
				navigateByImgClick: true,
				preload: [0,1] // Will preload 0 - before current, and 1 after the current image
			},
			image: {
				tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',			
			}
		});
	</script>

    <!-- Project Dashboard -->
    <script type="text/javascript">
		$(document).ready(function() {
	    var max_fields      = 10; //maximum input boxes allowed
	    var wrapper         = $(".input_fields_insurance"); //Fields wrapper
	    var add_button      = $("#add_field_insurance"); //Add button ID
	    
	    var x = 1; //initlal text box count
	    $(add_button).click(function(e){ //on add input button click
	        e.preventDefault();
	        if(x < max_fields){ //max input box allowed
	            x++; //text box increment
	            $(wrapper).append('<div><input type="text" name="mytext[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
	        }
	    });
	    
	    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
	        e.preventDefault(); $(this).parent('div').remove(); x--;
	    })
	});
	</script>
	<script type="text/javascript">
		$(document).ready(function() {
	    var max_fields      = 10; //maximum input boxes allowed
	    var wrapper         = $(".input_fields_signature"); //Fields wrapper
	    var add_button      = $("#add_field_signature"); //Add button ID
	    
	    var x = 1; //initlal text box count
	    $(add_button).click(function(e){ //on add input button click
	        e.preventDefault();
	        if(x < max_fields){ //max input box allowed
	            x++; //text box increment
	            $(wrapper).append('<div><input type="text" name="mytext[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
	        }
	    });
	    
	    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
	        e.preventDefault(); $(this).parent('div').remove(); x--;
	    })
	});
	</script>
	<script type="text/javascript">
		$(document).ready(function() {
	    var max_fields      = 10; //maximum input boxes allowed
	    var wrapper         = $(".input_fields_state"); //Fields wrapper
	    var add_button      = $("#add_field_state"); //Add button ID
	    
	    var x = 1; //initlal text box count
	    $(add_button).click(function(e){ //on add input button click
	        e.preventDefault();
	        if(x < max_fields){ //max input box allowed
	            x++; //text box increment
	            $(wrapper).append('<div><input type="text" name="mytext[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
	        }
	    });
	    
	    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
	        e.preventDefault(); $(this).parent('div').remove(); x--;
	    })
	});
	</script>
	<script type="text/javascript">
		$(document).ready(function() {
	    var max_fields      = 10; //maximum input boxes allowed
	    var wrapper         = $(".input_fields_bond"); //Fields wrapper
	    var add_button      = $("#add_field_bond"); //Add button ID
	    
	    var x = 1; //initlal text box count
	    $(add_button).click(function(e){ //on add input button click
	        e.preventDefault();
	        if(x < max_fields){ //max input box allowed
	            x++; //text box increment
	            $(wrapper).append('<div><input type="text" name="mytext[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
	        }
	    });
	    
	    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
	        e.preventDefault(); $(this).parent('div').remove(); x--;
	    })
	});
	</script>

	<script>
		$("#datepicker17").datepicker( {
			    format: "mm-yyyy",
			    viewMode: "months", 
			    minViewMode: "months"
			});
	</script>
	<script>
		$("#datepicker18").datepicker( {
			    format: "mm-yyyy",
			    viewMode: "months", 
			    minViewMode: "months"
			});
	</script>
	<script>
		$("#datepicker19").datepicker( {
			    format: "mm-yyyy",
			    viewMode: "months", 
			    minViewMode: "months"
			});
	</script>

    <!-- Datasheet -->
    <script>
		$('.popup-gallery').magnificPopup({
			delegate: 'a',
			type: 'image',
			tLoading: 'Loading image #%curr%../images.',
			mainClass: 'mfp-img-mobile',
			gallery: {
				enabled: true,
				navigateByImgClick: true,
				preload: [0,1] // Will preload 0 - before current, and 1 after the current image
			},
			image: {
				tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',			
			}
		});
	</script>


    <!-- Benchamrk -->
    <script>
		$('#selectservice').change(function(){
			$('#selectservice').addClass('selected');
		});
		$('#selectlocation').change(function(){
			$('#selectlocation').addClass('selected');
		});	
		$('#selecttype').change(function(){
			$('#selecttype').addClass('selected');
		});
		$('#cvalues-btn').click(function(){
			$('.dropdown-filter').toggle();
		});
	</script>


    <!-- Tender dashboard -->
    <script type="text/javascript">
    jQuery(function ($) {
        var data1 = [12, 3, 4, 2, 12, 3, 4, 17, 22, 34, 54, 67];
        var data2 = [3, 9, 12, 14, 22, 32, 45, 12, 67, 45, 55, 7];
        var data3 = [23, 19, 11, 134, 242, 352, 435, 22, 637, 445, 555, 57];
            
        $(function () {            

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




    <!-- Dashboard -->
    <script>
		$(document).ready(function(){
			
		});
	</script>

    
    <!-- PDS -->
    <script>
		$('.popup-gallery').magnificPopup({
			delegate: 'a',
			type: 'image',
			tLoading: 'Loading image #%curr%../images.',
			mainClass: 'mfp-img-mobile',
			gallery: {
				enabled: true,
				navigateByImgClick: true,
				preload: [0,1] // Will preload 0 - before current, and 1 after the current image
			},
			image: {
				tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',			
			}
		});
	</script>

    <!-- WIN WORK -->
    <script type="text/javascript">
		new WOW().init();
	</script>		
	<script type="text/javascript">
		$(document).ready(function(){
			$('[data-toggle="tooltip"]').tooltip(); 
		});
	</script>


	<!-- BID -->
    <script>
	$("#datepicker").datepicker( {
		    format: "mm-yyyy",
		    viewMode: "months", 
		    minViewMode: "months"
		});
	</script>
	<script>
		$("#datepicker11").datepicker( {
			    format: "mm-yyyy",
			    viewMode: "months", 
			    minViewMode: "months"
			});
	</script>
	<script>
		$("#datepicker10").datepicker( {
			    format: "mm-yyyy",
			    viewMode: "months", 
			    minViewMode: "months"
			});
	</script>
	<script>
		$("#datepicker4").datepicker( {
			    format: "mm-yyyy",
			    viewMode: "months", 
			    minViewMode: "months"
			});
	</script>
	<script>
		$("#datepicker3").datepicker( {
			    format: "mm-yyyy",
			    viewMode: "months", 
			    minViewMode: "months"
			});
	</script>
	<script>
		$("#datepicker7").datepicker( {
			    format: "mm-yyyy",
			    viewMode: "months", 
			    minViewMode: "months"
			});
	</script>
	<script>
		$("#datepicker2").datepicker( {
			    format: "mm-yyyy",
			    viewMode: "months", 
			    minViewMode: "months"
			});
	</script>
	<script>
		$("#datepicker1").datepicker( {
			    format: "mm-yyyy",
			    viewMode: "months", 
			    minViewMode: "months"
			});
	</script>
	<script>
		$("#datepicker8").datepicker( {
			    format: "mm-yyyy",
			    viewMode: "months", 
			    minViewMode: "months"
			});
	</script>
	<script>
		$("#datepickers").datepicker( {
			    format: "mm-yyyy",
			    viewMode: "months", 
			    minViewMode: "months"
			});
	</script>
	<script>
		$("#datepickers6").datepicker( {
			    format: "mm-yyyy",
			    viewMode: "months", 
			    minViewMode: "months"
			});
	</script>
	<script>
		$("#datepickers5").datepicker( {
			    format: "mm-yyyy",
			    viewMode: "months", 
			    minViewMode: "months"
			});
	</script>
	<script type="text/javascript">
		$(document).ready(function() {
	    var max_fields      = 10; //maximum input boxes allowed
	    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
	    var add_button      = $("#add_field_button"); //Add button ID
	    
	    var x = 1; //initlal text box count
	    $(add_button).click(function(e){ //on add input button click
	        e.preventDefault();
	        if(x < max_fields){ //max input box allowed
	            x++; //text box increment
	            $(wrapper).append('<div><input type="text" name="mytext[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
	        }
	    });
	    
	    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
	        e.preventDefault(); $(this).parent('div').remove(); x--;
	    })
	});
	</script>
	<script type="text/javascript">
		$(document).ready(function() {
	    var max_fields      = 10; //maximum input boxes allowed
	    var wrapper         = $(".input_fields_type1"); //Fields wrapper
	    var add_button      = $("#add_field_type1"); //Add button ID
	    
	    var x = 1; //initlal text box count
	    $(add_button).click(function(e){ //on add input button click
	        e.preventDefault();
	        if(x < max_fields){ //max input box allowed
	            x++; //text box increment
	            $(wrapper).append('<div><input type="text" name="mytext[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
	        }
	    });
	    
	    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
	        e.preventDefault(); $(this).parent('div').remove(); x--;
	    })
	});
	</script>
	<script type="text/javascript">
		$(document).ready(function() {
	    var max_fields      = 10; //maximum input boxes allowed
	    var wrapper         = $(".input_fields_sul"); //Fields wrapper
	    var add_button      = $("#add_field_sul"); //Add button ID
	    
	    var x = 1; //initlal text box count
	    $(add_button).click(function(e){ //on add input button click
	        e.preventDefault();
	        if(x < max_fields){ //max input box allowed
	            x++; //text box increment
	            $(wrapper).append('<div><input type="text" name="mytext[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
	        }
	    });
	    
	    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
	        e.preventDefault(); $(this).parent('div').remove(); x--;
	    })
	});
	</script>
	<script type="text/javascript">
		$(document).ready(function() {
	    var max_fields      = 10; //maximum input boxes allowed
	    var wrapper         = $(".input_fields_com"); //Fields wrapper
	    var add_button      = $("#add_field_com"); //Add button ID
	    
	    var x = 1; //initlal text box count
	    $(add_button).click(function(e){ //on add input button click
	        e.preventDefault();
	        if(x < max_fields){ //max input box allowed
	            x++; //text box increment
	            $(wrapper).append('<div><input type="text" name="mytext[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
	        }
	    });
	    
	    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
	        e.preventDefault(); $(this).parent('div').remove(); x--;
	    })
	});
	</script>
	<script type="text/javascript">
		$(document).ready(function() {
	    var max_fields      = 10; //maximum input boxes allowed
	    var wrapper         = $(".input_fields_serve2"); //Fields wrapper
	    var add_button      = $("#add_field_serve2"); //Add button ID
	    
	    var x = 1; //initlal text box count
	    $(add_button).click(function(e){ //on add input button click
	        e.preventDefault();
	        if(x < max_fields){ //max input box allowed
	            x++; //text box increment
	            $(wrapper).append('<div><input type="text" name="mytext[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
	        }
	    });
	    
	    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
	        e.preventDefault(); $(this).parent('div').remove(); x--;
	    })
	});
	</script>
	<script type="text/javascript">
		$(document).ready(function() {
	    var max_fields      = 10; //maximum input boxes allowed
	    var wrapper         = $(".input_fields_service"); //Fields wrapper
	    var add_button      = $("#add_field_service"); //Add button ID
	    
	    var x = 1; //initlal text box count
	    $(add_button).click(function(e){ //on add input button click
	        e.preventDefault();
	        if(x < max_fields){ //max input box allowed
	            x++; //text box increment
	            $(wrapper).append('<div><input type="text" name="mytext[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
	        }
	    });
	    
	    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
	        e.preventDefault(); $(this).parent('div').remove(); x--;
	    })
	});
	</script>
	<script type="text/javascript">
		$(document).ready(function() {
	    var max_fields      = 10; //maximum input boxes allowed
	    var wrapper         = $(".input_fields_indus"); //Fields wrapper
	    var add_button      = $("#add_field_indus"); //Add button ID
	    
	    var x = 1; //initlal text box count
	    $(add_button).click(function(e){ //on add input button click
	        e.preventDefault();
	        if(x < max_fields){ //max input box allowed
	            x++; //text box increment
	            $(wrapper).append('<div><input type="text" name="mytext[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
	        }
	    });
	    
	    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
	        e.preventDefault(); $(this).parent('div').remove(); x--;
	    })
	});
	</script>
	<script type="text/javascript">
		$(document).ready(function() {
	    var max_fields      = 10; //maximum input boxes allowed
	    var wrapper         = $(".input_fields_member"); //Fields wrapper
	    var add_button      = $("#add_field_member"); //Add button ID
	    
	    var x = 1; //initlal text box count
	    $(add_button).click(function(e){ //on add input button click
	        e.preventDefault();
	        if(x < max_fields){ //max input box allowed
	            x++; //text box increment
	            $(wrapper).append('<div><input type="text" name="mytext[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
	        }
	    });
	    
	    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
	        e.preventDefault(); $(this).parent('div').remove(); x--;
	    })
	});
	</script>
	<script type="text/javascript">
		$(document).ready(function() {
	    var max_fields      = 10; //maximum input boxes allowed
	    var wrapper         = $(".input_fields_project1"); //Fields wrapper
	    var add_button      = $("#add_field_project1"); //Add button ID
	    
	    var x = 1; //initlal text box count
	    $(add_button).click(function(e){ //on add input button click
	        e.preventDefault();
	        if(x < max_fields){ //max input box allowed
	            x++; //text box increment
	            $(wrapper).append('<div><input type="text" name="mytext[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
	        }
	    });
	    
	    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
	        e.preventDefault(); $(this).parent('div').remove(); x--;
	    })
	});
	</script>
	<script type="text/javascript">
		$(document).ready(function() {
	    var max_fields      = 10; //maximum input boxes allowed
	    var wrapper         = $(".input_fields_serve1"); //Fields wrapper
	    var add_button      = $("#add_field_serve1"); //Add button ID
	    
	    var x = 1; //initlal text box count
	    $(add_button).click(function(e){ //on add input button click
	        e.preventDefault();
	        if(x < max_fields){ //max input box allowed
	            x++; //text box increment
	            $(wrapper).append('<div><input type="text" name="mytext[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
	        }
	    });
	    
	    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
	        e.preventDefault(); $(this).parent('div').remove(); x--;
	    })
	});
	</script>
	<script type="text/javascript">
		$(document).ready(function() {
	    var max_fields      = 10; //maximum input boxes allowed
	    var wrapper         = $(".input_fields_types"); //Fields wrapper
	    var add_button      = $("#add_field_types"); //Add button ID
	    
	    var x = 1; //initlal text box count
	    $(add_button).click(function(e){ //on add input button click
	        e.preventDefault();
	        if(x < max_fields){ //max input box allowed
	            x++; //text box increment
	            $(wrapper).append('<div><input type="text" name="mytext[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
	        }
	    });
	    
	    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
	        e.preventDefault(); $(this).parent('div').remove(); x--;
	    })
	});
	</script>
	<script type="text/javascript">
		$(document).ready(function() {
	    var max_fields      = 10; //maximum input boxes allowed
	    var wrapper         = $(".input_fields_serve"); //Fields wrapper
	    var add_button      = $("#add_field_serve"); //Add button ID
	    
	    var x = 1; //initlal text box count
	    $(add_button).click(function(e){ //on add input button click
	        e.preventDefault();
	        if(x < max_fields){ //max input box allowed
	            x++; //text box increment
	            $(wrapper).append('<div><input type="text" name="mytext[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
	        }
	    });
	    
	    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
	        e.preventDefault(); $(this).parent('div').remove(); x--;
	    })
	});
	</script>
	<script type="text/javascript">
		$(document).ready(function() {
	    var max_fields      = 10; //maximum input boxes allowed
	    var wrapper         = $(".input_fields_type"); //Fields wrapper
	    var add_button      = $("#add_field_type"); //Add button ID
	    
	    var x = 1; //initlal text box count
	    $(add_button).click(function(e){ //on add input button click
	        e.preventDefault();
	        if(x < max_fields){ //max input box allowed
	            x++; //text box increment
	            $(wrapper).append('<div><input type="text" name="mytext[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
	        }
	    });
	    
	    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
	        e.preventDefault(); $(this).parent('div').remove(); x--;
	    })
	});
	</script>
	<script type="text/javascript">
		$(document).ready(function() {
	    var max_fields      = 10; //maximum input boxes allowed
	    var wrapper         = $(".input_fields_team"); //Fields wrapper
	    var add_button      = $("#add_field_team"); //Add button ID
	    
	    var x = 1; //initlal text box count
	    $(add_button).click(function(e){ //on add input button click
	        e.preventDefault();
	        if(x < max_fields){ //max input box allowed
	            x++; //text box increment
	            $(wrapper).append('<div><input type="text" name="mytext[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
	        }
	    });
	    
	    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
	        e.preventDefault(); $(this).parent('div').remove(); x--;
	    })
	});
	</script>
	<script type="text/javascript">
		$(document).ready(function() {
	    var max_fields      = 10; //maximum input boxes allowed
	    var wrapper         = $(".input_fields_project"); //Fields wrapper
	    var add_button      = $("#add_field_project"); //Add button ID
	    
	    var x = 1; //initlal text box count
	    $(add_button).click(function(e){ //on add input button click
	        e.preventDefault();
	        if(x < max_fields){ //max input box allowed
	            x++; //text box increment
	            $(wrapper).append('<div><input type="text" name="mytext[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
	        }
	    });
	    
	    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
	        e.preventDefault(); $(this).parent('div').remove(); x--;
	    })
	});
	</script>
	<script type="text/javascript">
		$(document).ready(function() {
	    var max_fields      = 10; //maximum input boxes allowed
	    var wrapper         = $(".input_fields_degree"); //Fields wrapper
	    var add_button      = $("#add_field_degree"); //Add button ID
	    
	    var x = 1; //initlal text box count
	    $(add_button).click(function(e){ //on add input button click
	        e.preventDefault();
	        if(x < max_fields){ //max input box allowed
	            x++; //text box increment
	            $(wrapper).append('<div><input type="text" name="mytext[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
	        }
	    });
	    
	    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
	        e.preventDefault(); $(this).parent('div').remove(); x--;
	    })
	});
	</script>
	<script type="text/javascript">
		$(document).ready(function() {
	    var max_fields      = 10; //maximum input boxes allowed
	    var wrapper         = $(".input_fields_add"); //Fields wrapper
	    var add_button      = $("#add_field_add"); //Add button ID
	    
	    var x = 1; //initlal text box count
	    $(add_button).click(function(e){ //on add input button click
	        e.preventDefault();
	        if(x < max_fields){ //max input box allowed
	            x++; //text box increment
	            $(wrapper).append('<div><input type="text" name="mytext[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
	        }
	    });
	    
	    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
	        e.preventDefault(); $(this).parent('div').remove(); x--;
	    })
	});
	</script>
	<script type="text/javascript">
		$(document).ready(function() {
	    var max_fields      = 10; //maximum input boxes allowed
	    var wrapper         = $(".input_fields_comm"); //Fields wrapper
	    var add_button      = $("#add_field_comm"); //Add button ID
	    
	    var x = 1; //initlal text box count
	    $(add_button).click(function(e){ //on add input button click
	        e.preventDefault();
	        if(x < max_fields){ //max input box allowed
	            x++; //text box increment
	            $(wrapper).append('<div><input type="text" name="mytext[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
	        }
	    });
	    
	    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
	        e.preventDefault(); $(this).parent('div').remove(); x--;
	    })
	});
	</script>
	<script type="text/javascript">
		$(document).ready(function() {
	    var max_fields      = 10; //maximum input boxes allowed
	    var wrapper         = $(".input_fields_yawa"); //Fields wrapper
	    var add_button      = $("#add_field_yawa"); //Add button ID
	    
	    var x = 1; //initlal text box count
	    $(add_button).click(function(e){ //on add input button click
	        e.preventDefault();
	        if(x < max_fields){ //max input box allowed
	            x++; //text box increment
	            $(wrapper).append('<div><input type="text" name="mytext[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
	        }
	    });
	    
	    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
	        e.preventDefault(); $(this).parent('div').remove(); x--;
	    })
	});
	</script>
	<script type="text/javascript">
		$(document).ready(function() {
	    var max_fields      = 10; //maximum input boxes allowed
	    var wrapper         = $(".input_fields_indus21"); //Fields wrapper
	    var add_button      = $("#add_field_indus21"); //Add button ID
	    
	    var x = 1; //initlal text box count
	    $(add_button).click(function(e){ //on add input button click
	        e.preventDefault();
	        if(x < max_fields){ //max input box allowed
	            x++; //text box increment
	            $(wrapper).append('<div><input type="text" name="mytext[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
	        }
	    });
	    
	    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
	        e.preventDefault(); $(this).parent('div').remove(); x--;
	    })
	});
	</script>
	<script type="text/javascript">
		$(document).ready(function() {
	    var max_fields      = 10; //maximum input boxes allowed
	    var wrapper         = $(".input_fields_addon"); //Fields wrapper
	    var add_button      = $("#add_field_addon"); //Add button ID
	    
	    var x = 1; //initlal text box count
	    $(add_button).click(function(e){ //on add input button click
	        e.preventDefault();
	        if(x < max_fields){ //max input box allowed
	            x++; //text box increment
	            $(wrapper).append('<div><input type="text" name="mytext[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
	        }
	    });
	    
	    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
	        e.preventDefault(); $(this).parent('div').remove(); x--;
	    })
	});
	</script>
	<script type="text/javascript">
	    $(function () {
	        $("#chart").shieldChart({
	            theme: "light",
	            exportOptions: {
	                image: false,
	                print: false
	            },
	            axisX: {
	                categoricalValues: ['2001', '2002', '2003', '2004', '2005', '2006', '2007', '2008', '2009', '2010', '2011', '2012']
	            },
	            axisY: {
	                axisTickText: {
	                    format: "{text:c}"
	                },
	                title: {
	                    text: "Price (EUR per kWh)"
	                }
	            },
	            tooltipSettings: {
	                chartBound: true
	            },
	            seriesSettings: {
	                line: {
	                    enablePointSelection: true,
	                    pointMark: {
	                        activeSettings: {
	                            pointSelectedState: {
	                                drawWidth: 4,
	                                drawRadius: 4
	                            }
	                        }
	                    }
	                }
	            },
	            primaryHeader: {
	                text: "Electricity prices"
	            },
	            dataSeries: [{
	                seriesType: 'line',
	                collectionAlias: 'Households',
	                data: [0.164, 0.173, 0.184, 0.167, 0.177, 0.189, 0.180, 0.183, 0.188, 0.160, 0.176, 0.178]
	            }, {
	                seriesType: 'line',
	                collectionAlias: 'Industry',
	                data: [0.103, 0.105, 0.112, 0.111, 0.102, 0.099, 0.110, 0.113, 0.117, 0.119, 0.123, 0.117]
	            }]
	        });
	    });
	</script>

    <script type="text/javascript">
        new WOW().init();

        var slider = new MasterSlider();
        slider.setup('mainSlider', {
            width: 1170,
            height: 580,
            autoplay: true,
            space: 1,
            loop: true,
            dir: "v",
            fullwidth: true,
            centerControls: false,
            speed: 60,
            preload: 0,
            view: 'scale',
            swipe: true
        });
        slider.control('arrows');
        slider.control('timebar', {color: "rgb(226, 100, 36)"});

        $('.slider').bxSlider({
            auto: true,
            pager: true,
            slideWidth: 1440,
            captions: false,
            controls: false,
        });
    </script>   
    <script>
        var acc = document.getElementsByClassName("accord");
        var i;
        

        for (i = 0; i < acc.length; i++) {
          acc[i].addEventListener("click", function() {
            this.classList.toggle("act");
            var panel1 = this.nextElementSibling;
            if (panel1.style.maxHeight){
              panel1.style.maxHeight = null;
            } else {
              panel1.style.maxHeight = panel1.scrollHeight + "px";
            } 
          });
        }
    </script>
    <script>
        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
        $(document).ready(function(){
        
        var $contactForm = $('#regForm');

        $contactForm.on('submit', function(e){
            e.preventDefault();
            
             jQuery.ajax({
                url: "{{ url('register') }}",
                method: 'post',
                data: {
                   fullname: jQuery('#fullname').val(),
                   company: jQuery('#company').val(),
                   email: jQuery('#email').val(),
                   phone: jQuery('#phone').val(),
                   password: jQuery('#password').val(),
                },
                success: function(result){
                   jQuery('.alerts').show();
                   jQuery('.alerts').html(result.success);
                   $("#regForm")[0].reset();
                }});
        });

        var $contactForms = $('#logForm');

        $contactForms.on('submit', function(e){
            e.preventDefault();
             jQuery.ajax({
                url: "{{ url('login') }}",
                method: 'get',
                data: {
                   email: jQuery('#lemail').val(),
                   password: jQuery('#lpassword').val()
                },
                success: function(result){
                   // jQuery('.alertss').show();
                   // jQuery('.alertss').html(result.success);
                   if(result.success=='naa'){
                        location.reload();
                   }
                   else
                   {
                        jQuery('.alertss').show();
                        jQuery('.alertss').html(result.success);
                   }
                   // $("#regForm")[0].reset();
                }});
        });
        // 
        //     jQuery('#ajaxSubmit').click(function(e){
        //         console.log('oy');
        //         if($("form")[0].checkValidity()) {

                    
                    
        //         };
        //     });
        });
        
    </script>
    <script>
        
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
        var max_fields      = 10; //maximum input boxes allowed
        var wrapper         = $(".cnt_insurance"); //Fields wrapper
        var add_button      = $("#cnt_insurance"); //Add button ID
        
        var x = 1; //initlal text box count
        $(add_button).click(function(e){ //on add input button click
            e.preventDefault();
            if(x < max_fields){ //max input box allowed
                x++; //text box increment
                $(wrapper).append('<div class="form-group" style="display:flex;"><input type="text" class="form-control" style="width:90%;" name="addInsurance[]"/><a href="#" class="remove_field">x</a></div>'); //add input box
            }
        });
        
        $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
            e.preventDefault(); $(this).parent('div').remove(); x--;
        })
    });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
        var max_fields      = 10; //maximum input boxes allowed
        var wrapper         = $(".cnt_bond"); //Fields wrapper
        var add_button      = $("#cnt_bond"); //Add button ID
        
        var x = 1; //initlal text box count
        $(add_button).click(function(e){ //on add input button click
            e.preventDefault();
            if(x < max_fields){ //max input box allowed
                x++; //text box increment
                $(wrapper).append('<div class="form-group" style="display:flex;"><input type="text" class="form-control" style="width:90%;" name="addBonds[]"/><a href="#" class="remove_field">x</a></div>'); //add input box
            }
        });
        
        $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
            e.preventDefault(); $(this).parent('div').remove(); x--;
        })
    });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
        var max_fields      = 10; //maximum input boxes allowed
        var wrapper         = $(".cnt_statement"); //Fields wrapper
        var add_button      = $("#cnt_statement"); //Add button ID
        
        var x = 1; //initlal text box count
        $(add_button).click(function(e){ //on add input button click
            e.preventDefault();
            if(x < max_fields){ //max input box allowed
                x++; //text box increment
                $(wrapper).append('<div class="form-group" style="display:flex;"><input type="text" class="form-control" style="width:90%;" name="addstatement[]"/><a href="#" class="remove_field">x</a></div>'); //add input box
            }
        });
        
        $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
            e.preventDefault(); $(this).parent('div').remove(); x--;
        })
    });
    </script>
    <script src="{{asset('js/pricerange.js')}}"></script>    

</body>
</html>