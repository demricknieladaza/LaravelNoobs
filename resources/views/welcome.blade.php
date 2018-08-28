@extends('layouts.master')

@section('content')
    <style type="text/css">
        @font-face {
            font-family: bahnschrift;
            src: url('{{ public_path('css\fonts\bahnschrift._semibold.tff') }}');
        }
    </style>


    <div id="home" class="container-fluid">
        <div class="row">
            <div class="master-slider ms-skin-black-2 round-skin sliderloading" id="mainSlider">
                {{-- <div class="ms-slide slide-1" data-delay="3" style="z-index: 10">
                    <img src="../images/blank.gif" data-src="../images/slider-plain.jpg" />
                    <img src="../images/blank.gif" data-src="../images/scope-white.png" width="800" class="ms-layer" style="bottom:200px; left:200px;font-family:bahnschrift;" data-effect="bottom(100,500,true)" data-type="image" data-delay="0" data-duration="3500" data-ease="easeOutQuad" class="slider-logo" />  
                </div> --}}
                <div class="ms-slide slide-2" data-delay="3" style="z-index: 11">
                    <img src="../images/blank.gif" data-src="../images/Build Relationships.jpg" />
                    <h1 class="ms-layer bold-title"  style="left:47px; top:230px;font-family:bahnschrift;"
                    data-effect="skewleft(18,200,c)" data-duration="2500" data-delay="0" data-ease="easeOutExpo">Build Relationships</h1>
                    <h3 class="slide-4 ms-layer light-title"  style="left:47px; top:270px;font-family: bahnschrift;" data-effect="right(150)" data-duration="2500" data-delay="0" data-ease="easeOutExpo">Find the right partner to realise your dreams</h3>
                </div>
                <div class="ms-slide slide-2" data-delay="3" style="z-index: 11">
                    <img src="../images/blank.gif" data-src="../images/slider1.jpg" />
                    <h1 class="ms-layer bold-title"  style="left:47px; top:230px;font-family:bahnschrift;"
                    data-effect="skewleft(18,200,c)" data-duration="2500" data-delay="0" data-ease="easeOutExpo">Compare Apples with Apples</h1>
                    <h3 class="slide-4 ms-layer light-title"  style="left:47px; top:270px;font-family:bahnschrift;" data-effect="right(150)" data-duration="2500" data-delay="0" data-ease="easeOutExpo">Easy Like-for-Like Comparison of Tender Proposals</h3>
                </div>
                <div class="ms-slide slide-3" data-delay="3" style="z-index: 12">
                    <img src="../images/blank.gif" data-src="../images/slider2.jpg" />     
                    <h1 class="ms-layer bold-title"  style="left:47px; top:230px;font-family: bahnschrift;"
                    data-effect="skewleft(18,200,c)" data-duration="2500" data-delay="0" data-ease="easeOutExpo">Competitive Proposals</h1>
                    <h3 class="slide-4 ms-layer light-title"  style="left:47px; top:270px;font-family: bahnschrift;" data-effect="right(150)" data-duration="2500" data-delay="0" data-ease="easeOutExpo">Get more for your money by increasing competition</h3>
                </div>
                <div class="ms-slide slide-4" data-delay="3" style="z-index: 12">
                    <img src="../images/blank.gif" data-src="../images/slider5.jpg" />     
                    <h1 class="ms-layer bold-title"  style="left:47px; top:230px;font-family: bahnschrift;"
                    data-effect="skewleft(18,200,c)" data-duration="2500" data-delay="0" data-ease="easeOutExpo">Take the Shortcut</h1>
                    <h3 class="slide-4 ms-layer light-title"  style="left:47px; top:270px;font-family: bahnschrift;" data-effect="right(150)" data-duration="2500" data-delay="0" data-ease="easeOutExpo">Just a few simple steps to achieve your goals</h3>
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
            <a href="{{ url('/dashboard/emp_dashboard') }}" class="my-btn"><b>scope</b> business lounge</a>
        </div>

        <div class="row">
            <div class="col-sm-6 text-center first-on-scope">
                <div class="row">
                    <div class="image-holder">
                        <a href="{{ url('/log_reg') }}"><img src="../images/publish.jpg" width="100%"></a>
                        <div class="caption">
                            <h1><b>Publish</b> Projects</h1>
                            <p><img src="../images/pp-icon.png"></p>
                        </div>
                    </div>              
                </div>
            </div>
            <div class="col-sm-6 text-center">
                <div class="row">
                    <div class="image-holder">
                        <a href="#"><img src="../images/win.jpg" width="100%"></a>
                        <div class="caption">
                            <h1><b>Win</b> Work</h1>
                            <p><img src="../images/ww-icon.png"></p>
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

   

    <div class="container-fluid section-title text-center" id="pricing">
        <h1 class="welcome">pricing</h1>
        <div class="welcome-border"></div>
    </div>
    <div class="container-fluid price-section">
        <div class="container">
            <div class="row" style="margin-top:75px;">
                <div class="col-sm-3 khalifa">
                    <input type="range" orient="vertical" name="range" id="range" min="0" max="25" step="5" value="5"/> 
                    <output for="range" class="output"></output>
                    <div class="discount0"></div>
                    <div class="plan-discount discount5">   
                        <h3>Discount</h3> 
                        <p>Annual Plan 3.0% </p>
                        <p>Monthly Plan 1.5% </p>
                    </div>
                    <div class="plan-discount discount10">  
                        <h3>Discount</h3> 
                        <p>Annual Plan 6.0% </p>
                        <p>Monthly Plan 3.0% </p>
                    </div>
                    <div class="plan-discount discount15">  
                        <h3>Discount</h3> 
                        <p>Annual Plan 9.0% </p>
                        <p>Monthly Plan 4.5% </p>
                    </div>
                    <div class="plan-discount discount20">  
                        <h3>Discount</h3> 
                        <p>Annual Plan 12.0% </p>
                        <p>Monthly Plan 6.0% </p>
                    </div>
                    <div class="plan-discount discount25">  
                        <h3>Discount</h3> 
                        <p>Annual Plan 15.0% </p>
                        <p>Monthly Plan 7.5% </p>
                    </div>
                </div>
                <div class="col-sm-8 col-sm-offset-1" style="margin-top: 5px;margin-bottom: 20px;">
                    <div id="hider">
                    <div class="col-sm-4 basic" style="text-align: center;">
                        <div class="pricing-title" style="background: #285080;">
                            <h4></h4>
                            <h4>BASIC</h4>
                        </div>
                        <div class="pricing-body">
                            <div class="col-sm-6" style="border-right: 1px solid #00b050;">
                                <div class="pricing-body-title" >
                                    <h4>Monthly Plan (£/mo)</h4>
                                </div>
                                <div class="BMprice" id="grower">
                                    <p>985.00</p>
                                </div>
                                <div class="BMdisc" style="color: #00b050;font-weight: 700;">
                                    <p>1.5% Discount</p>
                                </div>
                                <div>
                                    <button class="btn pbtn">Get Started</button>
                                </div>
                            </div>
                            <div class="col-sm-6 ">
                                <div class="pricing-body-title">
                                    <h4>Annual Plan (£/mo)</h4>
                                </div>
                                <div class="BAprice" >
                                    <p>970.00</p>
                                </div>
                                <div class="BAdisc" style="color: #00b050;font-weight: 700;">
                                    <p>3.0% Discount</p>
                                </div>
                                <div>
                                    <button class="btn pbtn">Get Started</button>
                                </div>
                            </div>
                            <div class="col-sm-12" style="color: #00b050;font-weight: 700;">
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
                                <div class="services">
                                    <p>Employer Dashboard 1</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 PRO" style="text-align: center;margin-top: -39px;">
                        <h4 style="color: #FE7235;"> POPULAR </h4>
                        <div class="pricing-title" style="background: #FE7235">
                            <h4>PRO</h4>
                        </div>
                        <div class="pricing-body">
                            <div class="col-sm-6" style="border-right: 1px solid #00b050;">
                                <div class="pricing-body-title">
                                    <h4>Monthly Plan (£/mo)</h4>
                                </div>
                                <div class="PMprice">
                                    <p>1,280.50</p>
                                </div>
                                <div class="PMdisc" style="color: #00b050;font-weight: 700;">
                                    <p>1.5% Discount</p>
                                </div>
                                <div>
                                    <button class="btn pbtn">Get Started</button>
                                </div>
                            </div>
                            <div class="col-sm-6 ">
                                <div class="pricing-body-title">
                                    <h4>Annual Plan (£/mo)</h4>
                                </div>
                                <div class="PAprice" >
                                    <p>1,261.00</p>
                                </div>
                                <div class="PAdisc" style="color: #00b050;font-weight: 700;">
                                    <p>3.0% Discount</p>
                                </div>
                                <div>
                                    <button class="btn pbtn">Get Started</button>
                                </div>
                            </div>
                            <div class="col-sm-12" style="color: #00b050;font-weight: 700;">
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
                                <div class="services">
                                    <p>Employer Dashboard 1</p>
                                </div>
                                <div class="services">
                                    <p>Benchmarking Pro 1</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 PROp" style="text-align: center;">
                        <div class="pricing-title" style="background: #000;">
                            <h4></h4>
                            <h4>PRO+</h4>
                        </div>
                        <div class="pricing-body">
                            <div class="col-sm-6" style="border-right: 1px solid #00b050;">
                                <div class="pricing-body-title">
                                    <h4>Monthly Plan (£/mo)</h4>
                                </div>
                                <div class="PpMprice">
                                    <p>1,576.00</p>
                                </div>
                                <div class="PpMdisc" style="color: #00b050;font-weight: 700;">
                                    <p>1.5% Discount</p>
                                </div>
                                <div>
                                    <button class="btn pbtn">Get Started</button>
                                </div>
                            </div>
                            <div class="col-sm-6 ">
                                <div class="pricing-body-title">
                                    <h4>Annual Plan (£/mo)</h4>
                                </div>
                                <div class="PpAprice" >
                                    <p>1,552.00</p>
                                </div>
                                <div class="PpAdisc" style="color: #00b050;font-weight: 700;">
                                    <p>3.0% Discount</p>
                                </div>
                                <div>
                                    <button class="btn pbtn">Get Started</button>
                                </div>
                            </div>
                            <div class="col-sm-12" style="color: #00b050;font-weight: 700;">
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
                                <div class="services">
                                    <p>Employer Dashboard 1</p>
                                </div>
                                <div class="services">
                                    <p>Benchmarking Pro 1</p>
                                </div>
                                <div class="services">
                                    <p>Scope of Services Tool 1</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-sm-12 flex" style="text-align: center;display: none;">
                        <div class="col-sm-6">
                            <div class="pricing-title" style="background: #ffd710;">
                                <h4></h4>
                                <h4>FLEX</h4>
                            </div>
                            <div class="pricing-body">
                                <div class="col-sm-12" style="color: #00b050;font-weight: 700;">
                                    <div>
                                        <h4 style="color: #ffd710;">Pay as you tender <br>(£/mo)</h4>
                                    </div>
                                    <div>
                                        <h4 style="color: #ffd710;">150.00</h4>
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
                                    <div class="services">
                                        <p>Employer Dashboard 1</p>
                                    </div>
                                    <div class="">
                                        <button class="btn pbtn col-sm-12">Get Started</button>
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
            <div class="row" style="margin-top: 25px;">
                <div class="col-sm-6">
                    <div class="pcard">
                        <div class="card-head">
                            <h3>SCOPE's most powerful tool</h3>
                            <b style="margin-top:0; font-family: bahnschrift; font-size:39px;">BENCHMARKING</b>
                            <hr style="border: 1px solid #FE7235;">
                        </div>
                       
                        <div class="card-body">
                            <p style="text-align: justify;font-family:bahnschrift;font-size: 20px;padding-left: 20px; padding-right: 20px;">Over are the times of searching through hundreds of historic files, consulting colleagues and requesting peer reviews. All just to find out whether the proposal you have just received is too expensive.<br>
                            
                            SCOPE's Benchmarking tool allows you to filter through every single tender proposal you have ever received and offers you a strong basis for taking decisions and negotiating prices.<br>
                            
                            And it gets even better. By signing up to our Pro+ plan you don't only have access to your own tender data but a database fed by every single SCOPE user. An entire industry's benchmarking data at your finger tips!</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="pcard">
                        <div class="card-head">
                            <h3>Create watertight scopes with our</h3>
                            <b style="margin-top:0;font-family:bahnschrift;font-size:39px;">SCOPES OF SERVICES TOOL</b>
                            <hr style="border: 1px solid #FE7235; ">
                        </div>

                        <div class="card-body">
                            <p style="text-align:justify; font-family: bahnschrift;font-size:20px;padding-left: 20px; padding-right: 20px;">Creating a good scope can be a challenging task. This starts with the right approach to structuring scopes and ends with relevant content to achieve your goals.<br>
                            Our Scopes of Services tool leads you through a structured process of producing scopes without endless duplicates and unneccessary wording to prevent ambiguity.<br>
                            This tool has a great future. SCOPE keeps learning from the scopes you and your peers produce and will soon be able to do this job for you. Our end goal is to be able to automatically produce scopes of services tailored to the specifics of your project.</p>
                        </div>
                    </div>
                </div>
            </div>
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
                    <p>While offering our customers great functionality it was also very important for us to make this website aesthetically attractive. Because let’s be honest, procurement isn’t everyone’s favourite hobby. That's why we really wanted to give the user an amazing visual experience alongside smart and intuitive navigation.<br> <br><b>Thomas Schindler - Director</b></p>
                </div>
                <div class="col-sm-6">
                    <p>Scope is going to completely change the face of procurement practices in construction. The potential it holds in terms of benchmarking data and tenderer competitiveness is just incredible. Bringing procurement into the digital age has been long overdue.<br> <br> <b>Andreas Reger - Director</b></p>
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
                    <p>100% Free Access for Tenderers<br>to Drive Strong Competition<br>and Equal Opportunities for Every Business.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid parallax parallax4">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>SC<span>OP</span>E - Open Procurement</h1>
                    <p>Harnessing the Best Talents <br> by giving an Entire Industry the Opportunity<br>to Win Work on Private Projects.</p>
                </div>
                <div class="col-sm-6 text-right">
                    <h1>SCOP<span>E</span> - Experience</h1>
                    <p>An Eye for Detail and Great Design <br>to offer the user <br> an Aesthetically Amazing Experience.</p>
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
                <div class="row space">
                    <h1 class="faq-head">For Employers</h1>
                </div>
                    <button class="accord">What can SCOPE do for me? </button>
                    <div class="panel1">
                        <p>SCOPE can do a variety of great things for you. The core of SCOPE is to publish your projects and related tenders on a publicly accessible platform. That means that companies from your region as well as nationwide and international can submit proposals to your tenders. This way your company achieves great competitiveness and comparability.<br><br>
                        SCOPE also helps you to find out what a specific service in a defined location for a certain type of use usually costs. You can get this information using our brilliant Benchmarking Tool. That way you will be able to create more accurate cash flow forecasts, benchmark received tender proposals or support viability assessments for your development.<br><br>The third big thing is our Scope of Services Tool. This tool will support you in creating watertight Scopes. Following the award of the successful tenderer the tool will also allow you to track any changes to the Scope that are being negotiated and agreed between you and the tenderer. <b>Please note that this tool is currently at Beta stage, which means that it’s full functionality will be available in a few months.</b></p>
                    </div> 
                    <button class="accord">How much does it cost? </button>
                    <div class="panel1">
                        <p>This depends on the plan you have selected. A single tender credit without subscription is £150. If you subscribe to a monthly or annual plan the price per tender credit gets lower the more tender credits your plan includes. You can also choose between a BASIC, PRO or PRO+ membership. You can see all the additional benefits if you scroll up to the Pricing section.<br><b>Tip: If you select the annual plan you get double the discount compared to the monthly plan!</br></b></p>
                    </div> 
                    <button class="accord">What are tender credits? </button>
                    <div class="panel1">
                        <p>To tender a service you need tender credits. One tender credit equals one tender process.</p>
                    </div>
                    <button class="accord">How long are tender credit valid? </button>
                    <div class="panel1">
                        <p>From the date of purchase each tender credit is valid for 30 days.</p>
                    </div>
                    <button class="accord">What if I run out of tender credits? </button>
                    <div class="panel1">
                        <p>You upgrade your monthly or annual plan to include more tender credits anytime you want. Alternatively, you can purchase single tender credits.<br>
                            <b>Tip: Keep in mind that upgrading your plan will also increase your discount, while buying a single tender credit will not include a discount.</b></p>
                    </div>
                    <button class="accord">Can I use SCOPE without a recurring subscription? </button>
                    <div class="panel1">
                        <p>Yes. You can simply purchase single tender credits as and when you need them.</p>
                    </div>
                    <button class="accord">How can I cancel my subscription? </button>
                    <div class="panel1">
                        <p>It’s simple. All you have to do is go to your SCOPE Business Lounge. Under the heading My Profile click on Membership. Here you will be able to cancel your subscription at any time with at least two weeks’ notice prior to your next payment.</p>
                    </div>
                    <button class="accord">Where do I find my closed projects? </button>
                    <div class="panel1">
                        <p>You will find all your closed and active projects in your SCOPE Business Lounge in the Employer Dashboard.</p>
                    </div>
                    <button class="accord">Can I also use my account to submit tender proposals? </button>
                    <div class="panel1">
                        <p>Yes. With your account you can act as both Employer and Tenderer.</p>
                    </div>
                    <button class="accord">How do I make contact with the tenderers? </button>
                    <div class="panel1">
                        <p>Once you have selected a successful tenderer you can complete the tender process. You will then be given the successful tenderers full contact details.</p>
                    </div>
            </div>
            <div class="col-sm-6">
                <div class="row">
                    <h1 class="faq-head">For Tenderers</h1>
                </div>
                    <button class="accord">What can SCOPE do for me? </button>
                    <div class="panel1">
                        <p>SCOPE can do a variety of great things for you. The core of SCOPE is to publish your projects and related tenders on a publicly accessible platform. That means that you can search and submit proposals for jobs in your region as well as nationwide and international. The world is your oyster! <br>

                        SCOPE also helps you to find out what a specific service in a defined location for a certain type of use usually costs. You can get this information using our brilliant Benchmarking Tool. That way you will be able to submit more competitive tender proposals. <br>

                        The third big thing is our Scope of Services Tool. This tool will support you with adequate pricing suggestions for the tasks you’re asked to undertake. Once you have been successfully awarded the job the tool will also allow you to track any changes to the Scope that are being negotiated and agreed between you and the employer. <b>Please note that this tool is currently at Beta stage, which means that it’s full functionality will be available in a few months.</b></p>
                    </div>
                    <button class="accord">How much does it cost? </button>
                    <div class="panel1">
                        <p>Submitting tender proposals is 100% free.
                            If you want to use our Benchmarking Tool and Scope of Services Tool simply subscribe to our PRO or PRO+ membership selecting either a monthly or annual plan.<br>
                            <b>Tipp: If you select the annual plan you get double the discount compared to the monthly plan!</b></p>
                    </div>
                    <button class="accord">How many tender proposals can I submit? </button>
                    <div class="panel1">
                        <p>As many as you want! There is absolutely no limit as to how many proposals you can submit per day, per project or per discipline. Grab as many opportunities as you can!</p>
                    </div>
                    <button class="accord">Can I ask the employer for additional information? </button>
                    <div class="panel1">
                        <p>Yes. A Request for Information (RfI) tool is integrated in every tender process. Please be aware that your query and the Employers response will be publicly visible for everyone to ensure that all tenders have access to the same information.</p>
                    </div>
                    <button class="accord">How do I know if my tender proposal has been successful? </button>
                    <div class="panel1">
                        <p>After the submission deadline the Employer will have three weeks to respond to all tenderers and give feedback on why you have been successful or unsuccessful.</p>
                    </div>
                    <button class="accord">Where do I find my closed tenders? </button>
                    <div class="panel1">
                        <p>You will find all your closed and active tender proposals in your SCOPE Business Lounge in the Tenderer Dashboard.</p>
                    </div>
                    <button class="accord">Can I also use my account as an Employer to tender services? </button>
                    <div class="panel1">
                        <p>Yes. With your account you can act as both Tenderer and Employer.</p>
                    </div>
            </div>
        </div>
    </div>
    <div class="container-fluid white-bg">
        <div class="container">
            <div class="col-sm-12">
                <div class="row general">
                    <h1 class="faq-head">General</h1>
                </div>
                <div >
                    <button class="accord">How does the Benchmarking tool work? </button>
                    <div class="panel1">
                        <p>SCOPE helps you to find out what a specific service in a defined location for a certain type of use usually costs. As an employer you will be able to create more accurate cash flow forecasts, benchmark received tender proposals or support viability assessments for your development. As a tenderer you will be able to submit more competitive tender proposals.</p>
                    </div>
                    <button class="accord">How does the Scope of Services tool work? </button>
                    <div class="panel1">
                        <p>As an employer this tool will support you in creating watertight Scopes. If you are a tenderer this tool will support you with adequate pricing suggestions for the tasks you’re asked to undertake. Once the successful tenderer has been awarded the tool will allow both parties to track any changes to the Scope that are being negotiated and agreed. <b>Please note that this tool is currently at Beta stage, which means that it’s full functionality will be available in a few months.</b></p>
                    </div>
                    <button class="accord">What about data protection? </button>
                    <div class="panel1">
                        <p> *No answer yet*  </p>
                    </div>
                    <button class="accord">Is it possible to tender construction works? </button>
                    <div class="panel1">
                        <p>Not yet. Our team is currently working on implementing this feature.</p>
                    </div>
                    <button class="accord">Can Scope be used for both public (OJEU) and private projects? </button>
                    <div class="panel1">
                        <p>We are working on it! However, currently SCOPE cannot be used for public projects.</p>
                    </div>
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
</div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
      $(document).on('change', '#range', function() {
        var tenders = $(this).val();
        if(tenders == '5'){
            $('.BMprice p').text('985.00');
            $('.BAprice p').text('970.00');
            $('.BMdisc p').text('1.5% Discount');
            $('.BAdisc p').text('3.0% Discount');

            $('.PMprice p').text('1,280.50');
            $('.PAprice p').text('1,261.00');
            $('.PMdisc p').text('1.5% Discount');
            $('.PAdisc p').text('3.0% Discount');

            $('.PpMprice p').text('1,576.00');
            $('.PpAprice p').text('1,552.00');
            $('.PpMdisc p').text('1.5% Discount');
            $('.PpAdisc p').text('3.0% Discount');

            $('#hider').css('display','block');
            $('.flex').css('display','none');
        }
        else if(tenders == '10')
        {
            $('.BMprice p').text('1,940.00');
            $('.BAprice p').text('1,880.00');
            $('.BMdisc p').text('3.0% Discount');
            $('.BAdisc p').text('6.0% Discount');

            $('.PMprice p').text('2,522.00');
            $('.PAprice p').text('2,444.00');
            $('.PMdisc p').text('3.0% Discount');
            $('.PAdisc p').text('6.0% Discount');

            $('.PpMprice p').text('3,104.00');
            $('.PpAprice p').text('3,008.00');
            $('.PpMdisc p').text('3.0% Discount');
            $('.PpAdisc p').text('6.0% Discount');

            $('#hider').css('display','block');
            $('.flex').css('display','none');
        }
        else if(tenders == '15')
        {
            $('.BMprice p').text('2,865.00');
            $('.BAprice p').text('2,730.00');
            $('.BMdisc p').text('4.5% Discount');
            $('.BAdisc p').text('9.0% Discount');

            $('.PMprice p').text('3,724.50');
            $('.PAprice p').text('3,549.00');
            $('.PMdisc p').text('4.5% Discount');
            $('.PAdisc p').text('9.0% Discount');

            $('.PpMprice p').text('4,584.00');
            $('.PpAprice p').text('4,368.00');
            $('.PpMdisc p').text('4.5% Discount');
            $('.PpAdisc p').text('9.0% Discount');

            $('#hider').css('display','block');
            $('.flex').css('display','none');
        }
        else if(tenders == '20')
        {
            $('.BMprice p').text('3,760.00');
            $('.BAprice p').text('3,520.00');
            $('.BMdisc p').text('6.0% Discount');
            $('.BAdisc p').text('12.0% Discount');

            $('.PMprice p').text('4,888.00');
            $('.PAprice p').text('4,576.00');
            $('.PMdisc p').text('6.0% Discount');
            $('.PAdisc p').text('12.0% Discount');

            $('.PpMprice p').text('6,016.00');
            $('.PpAprice p').text('5,632.00');
            $('.PpMdisc p').text('6.0% Discount');
            $('.PpAdisc p').text('12.0% Discount');

            $('#hider').css('display','block');
            $('.flex').css('display','none');
        }
        else if(tenders == '25')
        {
            $('.BMprice p').text('4,625.00');
            $('.BAprice p').text('4,250.00');
            $('.BMdisc p').text('7.5% Discount');
            $('.BAdisc p').text('15.0% Discount');

            $('.PMprice p').text('6,012.50');
            $('.PAprice p').text('5,525.00');
            $('.PMdisc p').text('7.5% Discount');
            $('.PAdisc p').text('15.0% Discount');

            $('.PpMprice p').text('7,400.00');
            $('.PpAprice p').text('6,800.00');
            $('.PpMdisc p').text('7.5% Discount');
            $('.PpAdisc p').text('15.0% Discount');

            $('#hider').css('display','block');
            $('.flex').css('display','none');
        }
        else if(tenders == '0')
        {
            $('#hider').fadeOut("slow");
            $('#hider').css('display','none');
            $('.flex').css('display','block');
        }
      });
    });
</script>
@endsection