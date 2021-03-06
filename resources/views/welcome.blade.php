<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SCOPE</title>    
    <link href="https://fonts.googleapis.com/css?family=Crete+Round" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/masterslider.css">
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/bxslider.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="shortcut icon" href="../logo.jpg">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/masterslider.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/functions.js"></script>
    <script type="text/javascript" src="js/bxslider.js"></script>

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
                        <a href="#" class="navbar-brand"><img src="../logo.png" width="120"></a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="/">Home</a></li>
                            <li><a href="/publish" class="highlight">Publish Projects</a></li>    
                            <li><a href="/winwork" class="highlight">Win Work</a></li>
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

    <div id="home" class="container-fluid">
        <div class="row">
            <div class="master-slider ms-skin-black-2 round-skin" id="mainSlider">
                <div class="ms-slide slide-1" data-delay="4" style="z-index: 10">
                    <img src="../blank.gif" data-src="../slider-plain.jpg" />
                    <img src="../blank.gif" data-src="../scope-white.png" width="800" class="ms-layer" style="bottom:200px; left:200px;" data-effect="bottom(100,500,true)" data-type="image" data-delay="0" data-duration="3500" data-ease="easeOutQuad" class="slider-logo" />  
                </div>
                <div class="ms-slide slide-2" data-delay="4" style="z-index: 11">
                    <img src="../blank.gif" data-src="../Build Relationships.jpg" />
                    <h1 class="ms-layer bold-title"  style="left:47px; top:230px"
                    data-effect="skewleft(18,200,c)" data-duration="2500" data-delay="0" data-ease="easeOutExpo">Build Relationships</h1>
                    <h3 class="slide-4 ms-layer light-title"  style="left:47px; top:270px" data-effect="right(150)" data-duration="2500" data-delay="0" data-ease="easeOutExpo">Find the right partner to realise your dreams</h3>
                </div>
                <div class="ms-slide slide-2" data-delay="4" style="z-index: 11">
                    <img src="../blank.gif" data-src="../slider1.jpg" />
                    <h1 class="ms-layer bold-title"  style="left:47px; top:230px"
                    data-effect="skewleft(18,200,c)" data-duration="2500" data-delay="0" data-ease="easeOutExpo">Compare Apples with Apples</h1>
                    <h3 class="slide-4 ms-layer light-title"  style="left:47px; top:270px" data-effect="right(150)" data-duration="2500" data-delay="0" data-ease="easeOutExpo">Easy Like-for-Like Comparison of Tender Proposals</h3>
                </div>
                <div class="ms-slide slide-3" data-delay="4" style="z-index: 12">
                    <img src="../blank.gif" data-src="../slider2.jpg" />     
                    <h1 class="ms-layer bold-title"  style="left:47px; top:230px"
                    data-effect="skewleft(18,200,c)" data-duration="2500" data-delay="0" data-ease="easeOutExpo">Competitive Proposals</h1>
                    <h3 class="slide-4 ms-layer light-title"  style="left:47px; top:270px" data-effect="right(150)" data-duration="2500" data-delay="0" data-ease="easeOutExpo">Get more for your money by increasing competition</h3>
                </div>
                <div class="ms-slide slide-4" data-delay="4" style="z-index: 12">
                    <img src="../blank.gif" data-src="../slider5.jpg" />     
                    <h1 class="ms-layer bold-title"  style="left:47px; top:230px"
                    data-effect="skewleft(18,200,c)" data-duration="2500" data-delay="0" data-ease="easeOutExpo">Take the Shortcut</h4>
                    <h3 class="slide-4 ms-layer light-title"  style="left:47px; top:270px" data-effect="right(150)" data-duration="2500" data-delay="0" data-ease="easeOutExpo">Just a few simple steps to achieve your goals</h3>
                </div>
            </div>
        </div>
    </div>  

    <div class="container-fluid motto wow fadeInDown" data-wow-duration="1s" data-wow-delay="200ms" id="motto">
        <div class="row section-title text-center">
            <h1 class="welcome">welcome to scope</h1>
            <div class="welcome-border"></div>
        </div>
        <div class="row text-center" style="margin-bottom: 30px;">
            <a href="#" class="my-btn"><b>scope</b> business lounge</a>
        </div>

        <div class="row">
            <div class="col-sm-6 text-center first-on-scope">
                <div class="row">
                    <div class="image-holder">
                        <a href="#"><img src="../publish.jpg" width="100%"></a>
                        <div class="caption">
                            <h1><b>Publish</b> Projects</h1>
                            <p><img src="../pp-icon.png"></p>
                        </div>
                    </div>              
                </div>
            </div>
            <div class="col-sm-6 text-center">
                <div class="row">
                    <div class="image-holder">
                        <a href="#"><img src="../win.jpg" width="100%"></a>
                        <div class="caption">
                            <h1><b>Win</b> Work</h1>
                            <p><img src="../ww-icon.png"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="how-it-works" class="container-fluid section-title text-center wow fadeInDown" data-wow-duration="1s" data-wow-delay="200ms">
        <h1 class="welcome">How it works</h1>
        <div class="welcome-border"></div>
    </div>

    <div class="container-fluid how-it-works">
        <div class="container info-for-clients">            
            <div class="row">                   
                <div class="col-sm-6">
                    <div class="col-sm-12">
                        <h1 class="welcome"><span>publish projects</span></h1>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-sm-12">
                        <div class="media">
                            <div class="media-left">
                                <h1 class="media-first">
                                    01
                                    <div class="numbered-ribbon">
                                        Step One
                                    </div>
                                </h1>
                            </div>
                            <div class="media-body">
                                <h3>Create a new Project</h3>
                                <p>Suitable for any Size or Type of Project</p>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <h1 class="media-second">
                                    02
                                    <div class="numbered-ribbon">
                                        Step Two
                                    </div>
                                </h1>
                            </div>
                            <div class="media-body">
                                <h3>Publish Tenders</h3>
                                <p>Tender any Service You can Think of</p>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <h1 class="media-third">
                                    03
                                    <div class="numbered-ribbon">
                                        Step Three
                                    </div>
                                </h1>
                            </div>
                            <div class="media-body">
                                <h3>Easy Tender Management</h3>
                                <p>Receive and Respond to Tender Queries</p>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <h1 class="media-fourth">
                                    04
                                    <div class="numbered-ribbon">
                                        Step Four
                                    </div>
                                </h1>
                            </div>
                            <div class="media-body">
                                <h3>Customised Analysis</h3>
                                <p>Flexible Analysis Tools and Reports</p>
                            </div>
                        </div>  
                        <div class="media">
                            <div class="media-left">
                                <h1 class="media-ninth">
                                    05
                                    <div class="numbered-ribbon">
                                        Step five
                                    </div>
                                </h1>
                            </div>
                            <div class="media-body">
                                <h3>Benchmarking Data</h3>
                                <p>Benchmark Tender Returns against Industry Data</p>
                            </div>
                        </div>                  
                    </div>                  
                </div>
                <div class="col-sm-6">
                    <div class="col-sm-12">
                        <h1 class="welcome"><span>win work</span></h1>                      
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-sm-12">
                        <div class="media">
                            <div class="media-left">
                                <h1 class="media-fifth">
                                    01
                                    <div class="numbered-ribbon">
                                        Step One
                                    </div>
                                </h1>
                            </div>
                            <div class="media-body">
                                <h3>Find an Opportunity</h3>
                                <p>Search through Jobs of any Sector or Value</p>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <h1 class="media-sixth">
                                    02
                                    <div class="numbered-ribbon">
                                        Step Two
                                    </div>
                                </h1>
                            </div>
                            <div class="media-body">
                                <h3>Get Answers</h3>
                                <p>Send Tender Queries and Receive Quick Responses</p>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <h1 class="media-seventh">
                                    03
                                    <div class="numbered-ribbon">
                                        Step Three
                                    </div>
                                </h1>
                            </div>
                            <div class="media-body">
                                <h3>Submit your Proposal</h3>
                                <p>Unlimited Proposal Submissions for all Users</p>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <h1 class="media-eighth">
                                    04
                                    <div class="numbered-ribbon">
                                        Step Four
                                    </div>
                                </h1>
                            </div>
                            <div class="media-body">
                                <h3>Receive Detailed Feedback</h3>
                                <p>Understand the Strengths and Weaknesses of your Submission</p>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <h1 class="media-tenth">
                                    05
                                    <div class="numbered-ribbon">
                                        Step Five
                                    </div>
                                </h1>
                            </div>
                            <div class="media-body">
                                <h3>Benchmarking Data</h3>
                                <p>Analyse Past Submissions to Improve Future Proposals</p>
                            </div>
                        </div>
                    </div>                  
                </div>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>

    <!-- <div class="container-fluid section-title text-center wow fadeInDown" data-wow-duration="1s" data-wow-delay="200ms">
        <h1 class="welcome testimonial-header">“One Announcement, Multiple Options”</h1>
        <div class="welcome-border"></div>
    </div>

    <div class="container-fluid white-bg" style="padding-bottom: 60px;">
        <div class="container">
            <div class="row">
                <div class="slider">
                    <div class="text-center"><p>Scope helped us to find more work and to speed up the process”</p><p> –D. Duck. Duckcenter</p></div>
                    <div class="text-center"><p>“Scope helped us to get a perfect match with our employer”</p> <p>-T. Dog. Dogcompany</p></div>
                </div>
            </div>
        </div>
    </div> -->

    <div class="container-fluid section-title text-center" id="pricing">
        <h1 class="welcome">pricing</h1>
        <div class="welcome-border"></div>
    </div>
    <div class="container-fluid price-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 khalifa">
                    <input type="range" orient="vertical" name="range" id="range" min="0" max="25" step="5" value="5"/> 
                    <output for="range" class="output"></output>
                    <div class="discount0"></div>
                    <div class="plan-discount discount5">   
                        <h3>Discount</h3> 
                        <p>3.0% Annual Abonnement</p>
                        <p>1.5% Monthly Abonnement</p>
                    </div>
                    <div class="plan-discount discount10">  
                        <h3>Discount</h3> 
                        <p>10% Annual Abonnement</p>
                        <p>10% Monthly Abonnement</p>
                    </div>
                    <div class="plan-discount discount15">  
                        <h3>Discount</h3> 
                        <p>15% Annual Abonnement</p>
                        <p>15% Monthly Abonnement</p>
                    </div>
                    <div class="plan-discount discount20">  
                        <h3>Discount</h3> 
                        <p>20% Annual Abonnement</p>
                        <p>20% Monthly Abonnement</p>
                    </div>
                    <div class="plan-discount discount25">  
                        <h3>Discount</h3> 
                        <p>25% Annual Abonnement</p>
                        <p>25% Monthly Abonnement</p>
                    </div>
                </div>
                <div class="col-sm-8 col-sm-offset-1">
                    <div class="priceplan plan0">       
                    </div>
                    <div class="priceplan plan5">
                        <table class="table table-condensed table-bordered">
                            <thead>
                                <tr>
                                    <td class="empty-cell"></td>
                                    <th class="blue-cell">Monthly Abonnement</th>
                                    <th class="orange-cell">Annual Abonnement</th>
                                    <th class="grey-cell top-regular-price">Regular Price</th>
                                </tr>
                                <tr>
                                    <td class="empty-cell"></td>
                                    <td class="blue-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>&pound;/month</td>
                                                <td>&pound;/year</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td class="orange-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>&pound;/month</td>
                                                <td>&pound;/year</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td class="grey-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>&pound;/month</td>
                                                <td>&pound;/year</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><b>5 Tenders *</b></td>
                                    <td class="blue-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>738.75</td>
                                                <td>8,865.00</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td class="orange-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>727.50</td>
                                                <td>8,730.00</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td class="grey-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>750.00</td>
                                                <td>9,000.00</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-green"><b>Discount</b></td>
                                    <td class="text-green text-center">1.5%</td>
                                    <td class="text-green text-center">3%</td>
                                    <td class="grey-cell text-center">No Discount</td>
                                </tr>
                                <tr>
                                    <td class="text-green"><b>Internal Benchmarking Tool</b></td>
                                    <td colspan="2" class="text-green text-center">Included</td>
                                    <td class="grey-cell text-center">---</td>
                                </tr>
                                <tr>
                                    <td class="text-green"><b>Simple Tenderer Management</b></td>
                                    <td colspan="2" class="text-green text-center">Included</td>
                                    <td class="grey-cell text-center">---</td>
                                </tr>
                                <tr>
                                    <td class="text-green">Full Tender Functionalities</td>
                                    <td colspan="2" class="text-green text-center">Included</td>
                                    <td class="grey-cell text-center">---</td>
                                </tr>
                                <tr>
                                    <td class="text-green"><b>Tenderer Dashboard</b></td>
                                    <td colspan="2" class="text-green text-center">Included</td>
                                    <td class="grey-cell text-center">---</td>
                                </tr>
                                <tr>
                                    <td class="text-green"><b>Employer Dashboard</b></td>
                                    <td colspan="2" class="text-green text-center">Included</td>
                                    <td class="grey-cell text-center">---</td>
                                </tr>
                                <tr>
                                    <td><b>Add Industry Benchmarking Tool</b></td>
                                    <td class="blue-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>221.63</td>
                                                <td>2,659.50</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td class="orange-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>218.25</td>
                                                <td>2,619.00</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td class="grey-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>225.00</td>
                                                <td>2,700.00</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>Add Scope of Services Tool</b></td>
                                    <td class="blue-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>221.63</td>
                                                <td>2,659.50</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td class="orange-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>218.25</td>
                                                <td>2,619.00</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td class="grey-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>225.00</td>
                                                <td>2,700.00</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>Total</b></td>
                                    <td class="blue-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>1,182.00</td>
                                                <td>14,184.00</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td class="orange-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>1,164.00</td>
                                                <td>13,968.00</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td class="grey-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>1,200.00</td>
                                                <td>14,400.00</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <td class="empty-cell"></td>
                                <td class="green-cell text-center">Get Started !</td>
                                <td class="green-cell text-center">Get Started !</td>
                                <td class="empty-cell"></td>
                            </tfoot>
                        </table>
                    </div>
                    <div class="priceplan plan10">
                        <table class="table table-condensed table-bordered">
                            <thead>
                                <tr>
                                    <td class="empty-cell"></td>
                                    <th class="blue-cell">Monthly Abonnement</th>
                                    <th class="orange-cell">Annual Abonnement</th>
                                    <th class="grey-cell top-regular-price">Regular Price</th>
                                </tr>
                                <tr>
                                    <td class="empty-cell"></td>
                                    <td class="blue-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>&pound;/month</td>
                                                <td>&pound;/year</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td class="orange-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>&pound;/month</td>
                                                <td>&pound;/year</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td class="grey-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>&pound;/month</td>
                                                <td>&pound;/year</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><b>10 Tenders *</b></td>
                                    <td class="blue-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>738.75</td>
                                                <td>8,865.00</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td class="orange-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>727.50</td>
                                                <td>8,730.00</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td class="grey-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>750.00</td>
                                                <td>9,000.00</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-green"><b>Discount</b></td>
                                    <td class="text-green text-center">1.5%</td>
                                    <td class="text-green text-center">3%</td>
                                    <td class="grey-cell text-center">No Discount</td>
                                </tr>
                                <tr>
                                    <td class="text-green"><b>Internal Benchmarking Tool</b></td>
                                    <td colspan="2" class="text-green text-center">Included</td>
                                    <td class="grey-cell text-center">---</td>
                                </tr>
                                <tr>
                                    <td class="text-green"><b>Simple Tenderer Management</b></td>
                                    <td colspan="2" class="text-green text-center">Included</td>
                                    <td class="grey-cell text-center">---</td>
                                </tr>
                                <tr>
                                    <td class="text-green">Full Tender Functionalities</td>
                                    <td colspan="2" class="text-green text-center">Included</td>
                                    <td class="grey-cell text-center">---</td>
                                </tr>
                                <tr>
                                    <td class="text-green"><b>Tenderer Dashboard</b></td>
                                    <td colspan="2" class="text-green text-center">Included</td>
                                    <td class="grey-cell text-center">---</td>
                                </tr>
                                <tr>
                                    <td class="text-green"><b>Employer Dashboard</b></td>
                                    <td colspan="2" class="text-green text-center">Included</td>
                                    <td class="grey-cell text-center">---</td>
                                </tr>
                                <tr>
                                    <td><b>Add Industry Benchmarking Tool</b></td>
                                    <td class="blue-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>221.63</td>
                                                <td>2,659.50</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td class="orange-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>218.25</td>
                                                <td>2,619.00</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td class="grey-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>225.00</td>
                                                <td>2,700.00</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>Add Scope of Services Tool</b></td>
                                    <td class="blue-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>221.63</td>
                                                <td>2,659.50</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td class="orange-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>218.25</td>
                                                <td>2,619.00</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td class="grey-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>225.00</td>
                                                <td>2,700.00</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>Total</b></td>
                                    <td class="blue-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>1,182.00</td>
                                                <td>14,184.00</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td class="orange-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>1,164.00</td>
                                                <td>13,968.00</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td class="grey-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>1,200.00</td>
                                                <td>14,400.00</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <td class="empty-cell"></td>
                                <td class="green-cell text-center">Get Started !</td>
                                <td class="green-cell text-center">Get Started !</td>
                                <td class="empty-cell"></td>
                            </tfoot>
                        </table>
                    </div>
                    <div class="priceplan plan15">
                        <table class="table table-condensed table-bordered">
                            <thead>
                                <tr>
                                    <td class="empty-cell"></td>
                                    <th class="blue-cell">Monthly Abonnement</th>
                                    <th class="orange-cell">Annual Abonnement</th>
                                    <th class="grey-cell top-regular-price">Regular Price</th>
                                </tr>
                                <tr>
                                    <td class="empty-cell"></td>
                                    <td class="blue-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>&pound;/month</td>
                                                <td>&pound;/year</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td class="orange-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>&pound;/month</td>
                                                <td>&pound;/year</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td class="grey-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>&pound;/month</td>
                                                <td>&pound;/year</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><b>15 Tenders *</b></td>
                                    <td class="blue-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>738.75</td>
                                                <td>8,865.00</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td class="orange-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>727.50</td>
                                                <td>8,730.00</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td class="grey-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>750.00</td>
                                                <td>9,000.00</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-green"><b>Discount</b></td>
                                    <td class="text-green text-center">1.5%</td>
                                    <td class="text-green text-center">3%</td>
                                    <td class="grey-cell text-center">No Discount</td>
                                </tr>
                                <tr>
                                    <td class="text-green"><b>Internal Benchmarking Tool</b></td>
                                    <td colspan="2" class="text-green text-center">Included</td>
                                    <td class="grey-cell text-center">---</td>
                                </tr>
                                <tr>
                                    <td class="text-green"><b>Simple Tenderer Management</b></td>
                                    <td colspan="2" class="text-green text-center">Included</td>
                                    <td class="grey-cell text-center">---</td>
                                </tr>
                                <tr>
                                    <td class="text-green">Full Tender Functionalities</td>
                                    <td colspan="2" class="text-green text-center">Included</td>
                                    <td class="grey-cell text-center">---</td>
                                </tr>
                                <tr>
                                    <td class="text-green"><b>Tenderer Dashboard</b></td>
                                    <td colspan="2" class="text-green text-center">Included</td>
                                    <td class="grey-cell text-center">---</td>
                                </tr>
                                <tr>
                                    <td class="text-green"><b>Employer Dashboard</b></td>
                                    <td colspan="2" class="text-green text-center">Included</td>
                                    <td class="grey-cell text-center">---</td>
                                </tr>
                                <tr>
                                    <td><b>Add Industry Benchmarking Tool</b></td>
                                    <td class="blue-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>221.63</td>
                                                <td>2,659.50</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td class="orange-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>218.25</td>
                                                <td>2,619.00</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td class="grey-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>225.00</td>
                                                <td>2,700.00</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>Add Scope of Services Tool</b></td>
                                    <td class="blue-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>221.63</td>
                                                <td>2,659.50</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td class="orange-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>218.25</td>
                                                <td>2,619.00</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td class="grey-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>225.00</td>
                                                <td>2,700.00</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>Total</b></td>
                                    <td class="blue-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>1,182.00</td>
                                                <td>14,184.00</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td class="orange-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>1,164.00</td>
                                                <td>13,968.00</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td class="grey-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>1,200.00</td>
                                                <td>14,400.00</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <td class="empty-cell"></td>
                                <td class="green-cell text-center">Get Started !</td>
                                <td class="green-cell text-center">Get Started !</td>
                                <td class="empty-cell"></td>
                            </tfoot>
                        </table>
                    </div>
                    <div class="priceplan plan20">
                        <table class="table table-condensed table-bordered">
                            <thead>
                                <tr>
                                    <td class="empty-cell"></td>
                                    <th class="blue-cell">Monthly Abonnement</th>
                                    <th class="orange-cell">Annual Abonnement</th>
                                    <th class="grey-cell top-regular-price">Regular Price</th>
                                </tr>
                                <tr>
                                    <td class="empty-cell"></td>
                                    <td class="blue-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>&pound;/month</td>
                                                <td>&pound;/year</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td class="orange-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>&pound;/month</td>
                                                <td>&pound;/year</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td class="grey-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>&pound;/month</td>
                                                <td>&pound;/year</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><b>20 Tenders *</b></td>
                                    <td class="blue-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>738.75</td>
                                                <td>8,865.00</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td class="orange-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>727.50</td>
                                                <td>8,730.00</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td class="grey-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>750.00</td>
                                                <td>9,000.00</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-green"><b>Discount</b></td>
                                    <td class="text-green text-center">1.5%</td>
                                    <td class="text-green text-center">3%</td>
                                    <td class="grey-cell text-center">No Discount</td>
                                </tr>
                                <tr>
                                    <td class="text-green"><b>Internal Benchmarking Tool</b></td>
                                    <td colspan="2" class="text-green text-center">Included</td>
                                    <td class="grey-cell text-center">---</td>
                                </tr>
                                <tr>
                                    <td class="text-green"><b>Simple Tenderer Management</b></td>
                                    <td colspan="2" class="text-green text-center">Included</td>
                                    <td class="grey-cell text-center">---</td>
                                </tr>
                                <tr>
                                    <td class="text-green">Full Tender Functionalities</td>
                                    <td colspan="2" class="text-green text-center">Included</td>
                                    <td class="grey-cell text-center">---</td>
                                </tr>
                                <tr>
                                    <td class="text-green"><b>Tenderer Dashboard</b></td>
                                    <td colspan="2" class="text-green text-center">Included</td>
                                    <td class="grey-cell text-center">---</td>
                                </tr>
                                <tr>
                                    <td class="text-green"><b>Employer Dashboard</b></td>
                                    <td colspan="2" class="text-green text-center">Included</td>
                                    <td class="grey-cell text-center">---</td>
                                </tr>
                                <tr>
                                    <td><b>Add Industry Benchmarking Tool</b></td>
                                    <td class="blue-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>221.63</td>
                                                <td>2,659.50</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td class="orange-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>218.25</td>
                                                <td>2,619.00</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td class="grey-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>225.00</td>
                                                <td>2,700.00</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>Add Scope of Services Tool</b></td>
                                    <td class="blue-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>221.63</td>
                                                <td>2,659.50</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td class="orange-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>218.25</td>
                                                <td>2,619.00</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td class="grey-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>225.00</td>
                                                <td>2,700.00</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>Total</b></td>
                                    <td class="blue-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>1,182.00</td>
                                                <td>14,184.00</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td class="orange-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>1,164.00</td>
                                                <td>13,968.00</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td class="grey-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>1,200.00</td>
                                                <td>14,400.00</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <td class="empty-cell"></td>
                                <td class="green-cell text-center">Get Started !</td>
                                <td class="green-cell text-center">Get Started !</td>
                                <td class="empty-cell"></td>
                            </tfoot>
                        </table>
                    </div>
                    <div class="priceplan plan25">
                        <table class="table table-condensed table-bordered">
                            <thead>
                                <tr>
                                    <td class="empty-cell"></td>
                                    <th class="blue-cell">Monthly Abonnement</th>
                                    <th class="orange-cell">Annual Abonnement</th>
                                    <th class="grey-cell top-regular-price">Regular Price</th>
                                </tr>
                                <tr>
                                    <td class="empty-cell"></td>
                                    <td class="blue-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>&pound;/month</td>
                                                <td>&pound;/year</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td class="orange-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>&pound;/month</td>
                                                <td>&pound;/year</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td class="grey-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>&pound;/month</td>
                                                <td>&pound;/year</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><b>25 Tenders *</b></td>
                                    <td class="blue-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>738.75</td>
                                                <td>8,865.00</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td class="orange-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>727.50</td>
                                                <td>8,730.00</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td class="grey-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>750.00</td>
                                                <td>9,000.00</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-green"><b>Discount</b></td>
                                    <td class="text-green text-center">1.5%</td>
                                    <td class="text-green text-center">3%</td>
                                    <td class="grey-cell text-center">No Discount</td>
                                </tr>
                                <tr>
                                    <td class="text-green"><b>Internal Benchmarking Tool</b></td>
                                    <td colspan="2" class="text-green text-center">Included</td>
                                    <td class="grey-cell text-center">---</td>
                                </tr>
                                <tr>
                                    <td class="text-green"><b>Simple Tenderer Management</b></td>
                                    <td colspan="2" class="text-green text-center">Included</td>
                                    <td class="grey-cell text-center">---</td>
                                </tr>
                                <tr>
                                    <td class="text-green">Full Tender Functionalities</td>
                                    <td colspan="2" class="text-green text-center">Included</td>
                                    <td class="grey-cell text-center">---</td>
                                </tr>
                                <tr>
                                    <td class="text-green"><b>Tenderer Dashboard</b></td>
                                    <td colspan="2" class="text-green text-center">Included</td>
                                    <td class="grey-cell text-center">---</td>
                                </tr>
                                <tr>
                                    <td class="text-green"><b>Employer Dashboard</b></td>
                                    <td colspan="2" class="text-green text-center">Included</td>
                                    <td class="grey-cell text-center">---</td>
                                </tr>
                                <tr>
                                    <td><b>Add Industry Benchmarking Tool</b></td>
                                    <td class="blue-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>221.63</td>
                                                <td>2,659.50</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td class="orange-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>218.25</td>
                                                <td>2,619.00</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td class="grey-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>225.00</td>
                                                <td>2,700.00</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>Add Scope of Services Tool</b></td>
                                    <td class="blue-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>221.63</td>
                                                <td>2,659.50</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td class="orange-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>218.25</td>
                                                <td>2,619.00</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td class="grey-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>225.00</td>
                                                <td>2,700.00</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>Total</b></td>
                                    <td class="blue-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>1,182.00</td>
                                                <td>14,184.00</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td class="orange-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>1,164.00</td>
                                                <td>13,968.00</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td class="grey-cell">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>1,200.00</td>
                                                <td>14,400.00</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <td class="empty-cell"></td>
                                <td class="green-cell text-center">Get Started !</td>
                                <td class="green-cell text-center">Get Started !</td>
                                <td class="empty-cell"></td>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="container add-space">
            <div class="col-sm-8 col-sm-offset-2">
                <table class="table">
                    <tr>
                        <td class="orange-cell" width="25%">
                            <p>Running low on Tenders?</p>
                            <p>But don't want to upgrade your abonnement?</p>
                            <p>Just top up and keep saving. Nice one!</p>
                        </td>
                        <td width="50%">
                            <table class="table">
                                <tr>
                                    <td class="empty-cell"></td>
                                    <td>Pay as you Tender</td>
                                </tr>
                                <tr>
                                    <td class="empty-cell"></td>
                                    <td>1 Tender</td>
                                </tr>
                                <tr>
                                    <td class="empty-cell"></td>
                                    <td>&pound; 150</td>
                                </tr>
                                <tr>
                                    <td class="red-text">Discount</td>
                                    <td class="red-text">No Discount</td>
                                </tr>
                                <tr>
                                    <td class="green-text"><b>Internal Benchmarking Tool</b></td>
                                    <td class="green-text">Included**</td>
                                </tr>
                                <tr>
                                    <td class="green-text"><b>Simple Tenderer Management</b></td>
                                    <td class="green-text">Included</td>
                                </tr>
                                <tr>
                                    <td class="green-text"><b>Full Tenderer Functionalities</b></td>
                                    <td class="green-text">Included</td>
                                </tr>
                                <tr>
                                    <td class="green-text"><b>Tenderer Dashboard</b></td>
                                    <td class="green-text">Included</td>
                                </tr>
                                <tr>
                                    <td class="green-text"><b>Employer Dashboard</b></td>
                                    <td class="green-text">Included</td>
                                </tr>
                                <tr>
                                    <td class="empty-cell"></td>
                                    <td class="green-cell text-center">Get Started!</td>
                                </tr>
                            </table>
                        </td>
                        <td class="blue-cell" width="25%">
                            <p>Using Scope for the first time?</p>
                            <p>Try it for free.</p>
                            <p>Winning!</p>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div id="about-scope" class="container-fluid text-center section-title wow fadeInDown" data-wow-duration="1s" data-wow-delay="200ms">
        <h1 class="welcome">About Scope</h1>
        <div class="welcome-border"></div>
    </div>

    <div class="container-fluid parallax parallax1">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 text-center">
                    <h1>FOUNDERS</h1>
                    <p>Thomas Schindler and Andreas Reger have founded <br> SCOPE | Procurement Solutions with the ambition to create a tool that will drive competition and transparency in construction and other industries worldwide. For bigger and smaller businesses.</p>                 
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <p>“While offering our customers great functionality it was also very important for us to make this website aesthetically attractive. Because let’s be honest, procurement isn’t everyone’s favourite hobby. That's why we really wanted to give the user an amazing visual experience alongside smart and intuitive navigation." <br> - <b>Thomas Schindler - Director</b></p>
                </div>
                <div class="col-sm-6">
                    <p>“Scope is going to completely change the face of procurement practices in construction. The potential it holds in terms of benchmarking data and tenderer competitiveness is just incredible. Bringing procurement into the digital age has been long overdue." <br> - <b>Andreas Reger - Director</b></p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid parallax parallax2">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1><span>S</span>COPE - Smart</h1>
                    <p>Intuitive Navigation and Short Paths<br>Merged with<br> Powerful Tools that will make Your Life Easier.</p>
                </div>
                <div class="col-sm-6 text-right">
                    <h1>S<span>C</span>OPE - Competitive</h1>
                    <p>100% Free Access for Tenderers<br>to Drive Strong Competition<br>and Equal Opportunities forEvery Business.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid parallax parallax4">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>SC<span>OP</span>E - Open Procurement</h1>
                    <p>Harnessing the Best Talents by giving an Entire Industry<br>the Opportunity to Win Work<br>on <span>Public (OJEU) and</span> Private Projects.</p>
                </div>
                <div class="col-sm-6 text-right">
                    <h1>SCOP<span>E</span> - Experience</h1>
                    <p>An Eye for Detail and Great Design<br>to offer the user <br> an Aesthetically Amazing Experience<br>and make Procurement Sexy.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="container-fluid section-title text-center faq-section" id="faqs">
        <h1 class="welcome">faq</h1>
        <div class="welcome-border"></div>
        <p class="text-below-head">Have a look if you can find your question here.</p>
    </div>

    <div class="container-fluid white-bg">
        <div class="container">
            <div class="col-sm-6">
                <div class="row">
                    <h1 class="faq-head">For Employers</h1>
                </div>
                <div class="panel-group" id="accordion">
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">What can SCOPE do for me? <span class="pull-right caret"></span></a>
                            </h4>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse">
                            <div class="panel-body">SCOPE can do a variety of great things for you. The core of SCOPE is to publish your projects and related tenders on a publicly accessible platform. That means that companies from your region as well as nationwide and international can submit proposals to your tenders. This way your company achieves great competitiveness and comparability.<br><br>
                            SCOPE also helps you to find out what a specific service in a defined location for a certain type of use usually costs. You can get this information using our brilliant Benchmarking Tool. That way you will be able to create more accurate cash flow forecasts, benchmark received tender proposals or support viability assessments for your development.<br><br>The third big thing is our Scope of Services Tool. This tool will support you in creating watertight Scopes. Following the award of the successful tenderer the tool will also allow you to track any changes to the Scope that are being negotiated and agreed between you and the tenderer. <b>Please note that this tool is currently at Beta stage, which means that it’s full functionality will be available in a few months.</b>
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">How much does it cost? <span class="pull-right caret"></span></a>
                            </h4>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse">
                            <div class="panel-body">This depends on the plan you have selected. A single tender credit without subscription is £150. If you subscribe to a monthly or annual plan the price per tender credit gets lower the more tender credits your plan includes. You can also choose between a BASIC, PRO or PRO+ membership. You can see all the additional benefits if you scroll up to the Pricing section.<br><b>Tip: If you select the annual plan you get double the discount compared to the monthly plan!</br></b></div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">What are tender credits? <span class="pull-right caret"></span></a>
                            </h4>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse">
                            <div class="panel-body">To tender a service you need tender credits. One tender credit equals one tender process.</div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">How long are tender credit valid? <span class="pull-right caret"></span></a>
                            </h4>
                        </div>
                        <div id="collapse4" class="panel-collapse collapse">
                            <div class="panel-body">From the date of purchase each tender credit is valid for 30 days.</div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">What if I run out of tender credits? <span class="pull-right caret"></span></a>
                            </h4>
                        </div>
                        <div id="collapse5" class="panel-collapse collapse">
                            <div class="panel-body">You upgrade your monthly or annual plan to include more tender credits anytime you want. Alternatively, you can purchase single tender credits.<br>
                            <b>Tip: Keep in mind that upgrading your plan will also increase your discount, while buying a single tender credit will not include a discount.</b></div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">Can I use SCOPE without a recurring subscription? <span class="pull-right caret"></span></a>
                            </h4>
                        </div>
                        <div id="collapse6" class="panel-collapse collapse">
                            <div class="panel-body">Yes. You can simply purchase single tender credits as and when you need them.</div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">How can I cancel my subscription? <span class="pull-right caret"></span></a>
                            </h4>
                        </div>
                        <div id="collapse7" class="panel-collapse collapse">
                            <div class="panel-body">It’s simple. All you have to do is go to your SCOPE Business Lounge. Under the heading My Profile click on Membership. Here you will be able to cancel your subscription at any time with at least two weeks’ notice prior to your next payment.</div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse8">Where do I find my closed projects? <span class="pull-right caret"></span></a>
                            </h4>
                        </div>
                        <div id="collapse8" class="panel-collapse collapse">
                            <div class="panel-body">You will find all your closed and active projects in your SCOPE Business Lounge in the Employer Dashboard.</div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse9">Can I also use my account to submit tender proposals? <span class="pull-right caret"></span></a>
                            </h4>
                        </div>
                        <div id="collapse9" class="panel-collapse collapse">
                            <div class="panel-body">Yes. With your account you can act as both Employer and Tenderer.</div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse10">How do I make contact with the tenderers? <span class="pull-right caret"></span></a>
                            </h4>
                        </div>
                        <div id="collapse10" class="panel-collapse collapse">
                            <div class="panel-body">Once you have selected a successful tenderer you can complete the tender process. You will then be given the successful tenderers full contact details.</div>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="col-sm-6">
                <div class="row">
                    <h1 class="faq-head">For Tenderers</h1>
                </div>
                <div class="panel-group" id="accordion1">
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#collapse11">What can SCOPE do for me? <span class="pull-right caret"></span></a>
                            </h4>
                        </div>
                        <div id="collapse11" class="panel-collapse collapse">
                            <div class="panel-body">SCOPE can do a variety of great things for you. The core of SCOPE is to publish your projects and related tenders on a publicly accessible platform. That means that you can search and submit proposals for jobs in your region as well as nationwide and international. The world is your oyster! <br>

                            SCOPE also helps you to find out what a specific service in a defined location for a certain type of use usually costs. You can get this information using our brilliant Benchmarking Tool. That way you will be able to submit more competitive tender proposals. <br>

                            The third big thing is our Scope of Services Tool. This tool will support you with adequate pricing suggestions for the tasks you’re asked to undertake. Once you have been successfully awarded the job the tool will also allow you to track any changes to the Scope that are being negotiated and agreed between you and the employer. <b>Please note that this tool is currently at Beta stage, which means that it’s full functionality will be available in a few months.</b>
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#collapse12">How much does it cost? <span class="pull-right caret"></span></a>
                            </h4>
                        </div>
                        <div id="collapse12" class="panel-collapse collapse">
                            <div class="panel-body">Submitting tender proposals is 100% free.
                            If you want to use our Benchmarking Tool and Scope of Services Tool simply subscribe to our PRO or PRO+ membership selecting either a monthly or annual plan.<br>
                            <b>Tipp: If you select the annual plan you get double the discount compared to the monthly plan!</b>
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#collapse13">How many tender proposals can I submit? <span class="pull-right caret"></span></a>
                            </h4>
                        </div>
                        <div id="collapse13" class="panel-collapse collapse">
                            <div class="panel-body">As many as you want! There is absolutely no limit as to how many proposals you can submit per day, per project or per discipline. Grab as many opportunities as you can!</div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#collapse14">Can I ask the employer for additional information? <span class="pull-right caret"></span></a>
                            </h4>
                        </div>
                        <div id="collapse14" class="panel-collapse collapse">
                            <div class="panel-body">Yes. A Request for Information (RfI) tool is integrated in every tender process. Please be aware that your query and the Employers response will be publicly visible for everyone to ensure that all tenders have access to the same information.</div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#collapse15">How do I know if my tender proposal has been successful? <span class="pull-right caret"></span></a>
                            </h4>
                        </div>
                        <div id="collapse15" class="panel-collapse collapse">
                            <div class="panel-body">After the submission deadline the Employer will have three weeks to respond to all tenderers and give feedback on why you have been successful or unsuccessful.</div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#collapse16">Where do I find my closed tenders? <span class="pull-right caret"></span></a>
                            </h4>
                        </div>
                        <div id="collapse16" class="panel-collapse collapse">
                            <div class="panel-body">You will find all your closed and active tender proposals in your SCOPE Business Lounge in the Tenderer Dashboard.</div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#collapse17">Can I also use my account as an Employer to tender services? <span class="pull-right caret"></span></a>
                            </h4>
                        </div>
                        <div id="collapse17" class="panel-collapse collapse">
                            <div class="panel-body">Yes. With your account you can act as both Tenderer and Employer.</div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
    <div class="container-fluid white-bg">
        <div class="container">
            <div class="col-sm-12">
                <div class="row">
                    <h1 class="faq-head">General</h1>
                </div>
                <div class="panel-group" id="accordion3">
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion3" href="#collapse18">How does the Benchmarking tool work? <span class="pull-right caret"></span></a>
                            </h4>
                        </div>
                        <div id="collapse18" class="panel-collapse collapse">
                            <div class="panel-body">SCOPE helps you to find out what a specific service in a defined location for a certain type of use usually costs. As an employer you will be able to create more accurate cash flow forecasts, benchmark received tender proposals or support viability assessments for your development. As a tenderer you will be able to submit more competitive tender proposals.</div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion3" href="#collapse19">How does the Scope of Services tool work? <span class="pull-right caret"></span></a>
                            </h4>
                        </div>
                        <div id="collapse19" class="panel-collapse collapse">
                            <div class="panel-body">As an employer this tool will support you in creating watertight Scopes. If you are a tenderer this tool will support you with adequate pricing suggestions for the tasks you’re asked to undertake. Once the successful tenderer has been awarded the tool will allow both parties to track any changes to the Scope that are being negotiated and agreed. <b>Please note that this tool is currently at Beta stage, which means that it’s full functionality will be available in a few months.</b></div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion3" href="#collapse20">What about data protection? <span class="pull-right caret"></span></a>
                            </h4>
                        </div>
                        <div id="collapse20" class="panel-collapse collapse">
                            <div class="panel-body"> *No answer yet*  </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion3" href="#collapse21">Is it possible to tender construction works? <span class="pull-right caret"></span></a>
                            </h4>
                        </div>
                        <div id="collapse21" class="panel-collapse collapse">
                            <div class="panel-body">Not yet. Our team is currently working on implementing this feature.</div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion3" href="#collapse22">Can Scope be used for both public (OJEU) and private projects? <span class="pull-right caret"></span></a>
                            </h4>
                        </div>
                        <div id="collapse22" class="panel-collapse collapse">
                            <div class="panel-body"> *No answer yet*  </div>
                        </div>
                    </div>
                </div> 
            </div>

    <div class="container-fluid section-title text-center contacts-head" id="contact">
        <h1 class="welcome">contact us</h1>
        <div class="welcome-border"></div>
        <p class="text-below-head">No answer to your question? Simply get in touch using our short contact form below.</p>
    </div>  

    <div class="container-fluid white-bg">
        <div class="container contacts custom-spacinng">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <input type="text" name="" placeholder="Full Name" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="" placeholder="Phone" class="form-control">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <input type="text" name="" placeholder="Organisation" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="email" name="" placeholder="Email" class="form-control">
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <textarea name="" placeholder="Enter Your Message Here" class="form-control" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" value="Submit" class="btn btn-warning">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="200ms">
        <div class="col-sm-12">
            <p><img src="../scope-white.png" width="80%"></p>
            <p>
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
            </p>
        </div>
    </footer>
    <div class="container-fluid text-center copyright">
        SCOPE Limited, registration number 12345678, 32 Hainton Close, London, E1 2QZ, United Kingdom
    </div>

    <!-- end -->

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
    <script src="js/pricerange.js"></script>
</body>
</html>