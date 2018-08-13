<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SCOPE</title>    
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
    <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
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
            <header style="background: none;">
                <div style="background-color: #909090;" class="bg">
                    <a href="{{ url('/') }}" class="navbar-brand"><img src="{{asset('images/logo.png')}}" width="120" style="margin-left: 100px;"></a>
                </div>
            </header>
            <div class="container-fluid below-header">
            </div>
           
                <div class="modal-dialog" style="padding-top: 130px; padding-bottom: 40px; height: 100vh;">
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
                                    <form method="post" class="form-horizontal" id="logForm" autocomplete="off" style="margin-top: 25px;">
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
                                    <form method="post" class="form-horizontal" id="regForm" autocomplete="off" style="margin-top: 25px;">
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
                        window.location.replace("/");
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
</body>
</html>