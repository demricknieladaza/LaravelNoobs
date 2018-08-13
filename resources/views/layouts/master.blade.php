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
    <link rel="shortcut icon" href="{{asset('images/logo.jpg')}}">
    @if(Route::currentRouteName() != 'winwork'){
        <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
    }
    @endif
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
	<script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
	
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
                            @if(Route::currentRouteName()=='Landing')
                                <li><a href="#how-it-works">How It Works</a></li>
                                <li><a href="#pricing">Pricing</a></li>
                                <li><a href="#about-scope">About Scope</a></li>
                                <li><a href="#faqs">FAQ</a></li>                    
                                <li><a href="#contact">contact</a></li>
                            @endif
                                @if(Session::has('fullname'))
                                    <li><a href="logout" class="highlight">Logout</a></li>
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

<script type="text/javascript">
    jQuery(function ($) {
        var data4 = [12, 3, 4, 2, 12, 3, 4, 17, 22, 34, 54, 67];
        var data5 = [3, 9, 12, 14, 22, 32, 45, 12, 67, 45, 55, 7];
        var data3 = [23, 19, 11, 134, 242, 352, 435, 22, 637, 445, 555, 57];

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
    
    <script src="{{asset('js/pricerange.js')}}"></script>    

</body>
</html>