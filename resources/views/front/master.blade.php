<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template">
<meta name="description" content="Unihub Global Immigration Consulting">
<meta name="author" content="https://unihubglobal.com/">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Unihub Global - International Education services</title>

<link rel="shortcut icon" href="{{asset('theme/images/favicon.png')}}">
<link rel="stylesheet" type="text/css" href="{{asset('theme/css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('theme/css/aos.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('theme/css/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('theme/css/font-awesome.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('theme/css/fontello.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('theme/css/flaticon.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('theme/css/flag-icon.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('theme/css/themify-icons.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('theme/css/slick.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('theme/css/prettyPhoto.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('theme/css/twentytwenty.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('theme/css/shortcodes.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('theme/css/main.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('theme/css/whatsApp.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('theme/css/megamenu.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('theme/css/responsive.css')}}">
<!-- REVOLUTION LAYERS STYLES -->
<link rel='stylesheet' id='rs-plugin-settings-css' href="{{asset('theme/revolution/css/rs6.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />


<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/64cb3e5b94cf5d49dc681fac/1h6sun67r';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->

</head>
<body>

    @include('front.whatsApp')

    <!-- page start -->
    <div class="page">

        <!-- header start -->
        <header id="masthead" class="header prt-header-style-02">
            <!-- site-header-menu -->
            <div id="site-header-menu" class="site-header-menu">
                <div class="site-header-menu-inner prt-stickable-header">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <!--site-navigation -->
                                <div class="site-navigation d-flex align-items-center">
                                    <div class="align-self-center">
                                        <!-- site-branding -->
                                        <div class="site-branding">
                                            <h1>
                                                <a class="home-link" href="{{url('/')}}/" title="Unihub Global" rel="home">
                                                    <img id="logo-img" class="img-left" src="{{url('/')}}/theme/images/logo-light.png" alt="UhG LOGO">
                                                    <img id="logo-dark" class="img-center stickylogo" src="{{url('/')}}/theme/images/logo-light.png" alt="UhG LOGO">
                                                </a>
                                            </h1>
                                        </div><!-- site-branding end -->
                                    </div>
                                    <div class="w-100 d-flex flex-row justify-content-between">
                                        <!-- menu -->
                                        <nav class="main-menu menu-mobile" id="menu">
                                            <ul class="menu">

                                                <li class="mega-menu-item active">
                                                    <a href="#" class="mega-menu-link">About Us</a>
                                                </li>

                                                <li class="mega-menu-item">
                                                    <a href="#" class="mega-menu-link">Study Abroad</a>
                                                    <ul class="mega-submenu">
                                                        <?php
                                                           $Studies = DB::table('studies')->get();
                                                        ?>
                                                        @foreach ($Studies as $studies)
                                                        <li><a href="{{url('/')}}/study-abroad/{{$studies->slung}}">{{$studies->title}}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-item">
                                                    <a href="#" class="mega-menu-link">Degree</a>
                                                </li>
                                                <li class="mega-menu-item">
                                                    <a href="#" class="mega-menu-link">Residency Services</a>
                                                </li>
                                                <li class="mega-menu-item">
                                                    <a href="#" class="mega-menu-link">Adventure Tours</a>
                                                </li>
                                                {{-- <li class="mega-menu-item">
                                                    <a href="#" class="mega-menu-link">Countries</a>
                                                    <ul class="mega-submenu">
                                                        <li><a href="#">New Zeeland</a></li>
                                                        <li><a href="#">Singapore</a></li>
                                                        <li><a href="#">UAE</a></li>
                                                        <li><a href="#">UK</a></li>
                                                        <li><a href="#">Australia</a></li>
                                                        <li><a href="#">Canada</a></li>
                                                        <li><a href="#">India</a></li>
                                                        <li><a href="#">Malta</a></li>
                                                    </ul>
                                                </li> --}}


                                                <li class="mega-menu-item">
                                                    <a href="#">Contact us</a>
                                                </li>
                                            </ul>
                                        </nav><!-- menu end -->
                                        <div class="btn-show-menu-mobile menubar menubar--squeeze">
                                            <span class="menubar-box">
                                                <span class="menubar-inner"></span>
                                            </span>
                                        </div>
                                        <!-- header_extra -->
                                        <div class="header_extra d-flex flex-row align-items-center justify-content-end">
                                            <div class="contact-info">
                                                <div class="prt-social-links-wrapper">
                                                    <ul class="social-icons d-flex">
                                                        <li>
                                                            <a class="prt-social-instagram" href="https://www.instagram.com//" rel="noopener" aria-label="instagram"><i class="icon-instagram"></i></a>
                                                        </li>
                                                        <li>
                                                            <a class="prt-social-facebook" href="https://www.facebook.com/" rel="noopener" aria-label="facebook"><i class="icon-facebook"></i></a></li>
                                                        <li>
                                                            <a class="prt-social-twitter" href="https://twitter.com/" rel="noopener" aria-label="twitter"><i class="icon-twitter"></i></a></li>
                                                        <li>
                                                            <a class="prt-social-linkedin" href="https://www.linkedin.com/company/" rel="noopener" aria-label="google"><i class="icon-linkedin"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="widget_info d-flex flex-row align-items-center bg-base-skin justify-content-end">
                                                    <div class="widget_icon text-base-white">
                                                        <i class="flaticon-phone-call"></i>
                                                    </div>
                                                    <div class="widget_content">
                                                        <h3 class="widget_title">Free Consultation</h3>
                                                        <p><a href="tel:1234567890">+351 913 531 537</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- header_extra end -->
                                    </div>
                                </div><!-- site-navigation end-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- site-header-menu end-->
        </header><!-- header end -->

        @yield('content')

        <!-- footer start -->
        <footer class="footer widget-footer clearfix">
            <div class="second-footer prt-bgimage-yes bg-footer prt-bg bg-base-dark">
                <div class="prt-row-wrapper-bg-layer prt-bg-layer"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6 widget-area">
                            <div class="widget">
                                <div class="widgte-text">
                                    <div class="widget-title">
                                        <h3>Imagine A Better Future</h3>
                                    </div>
                                    <p>Uni Hub Consultancy has been providing comprehensive support to students in achieving their global education.</p>

                                </div>
                                <div class="widget_nav_menu">
                                    <div class="widget-title">
                                        <h3>Quick Links</h3>
                                    </div>
                                    <ul class="menu-footer-quick-links">
                                        <?php
                                            $Study = DB::table('studies')->get();
                                        ?>
                                        @foreach ($Study as $study)
                                        <li><a href="{{url('/')}}/study-abroad/{{$study->slung}}"><i class="fa fa-plus"></i>{{$study->country}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="widget_social">
                                    <div class="social-icons social-hover">
                                        <ul class="social-icons d-flex">
                                            <li>
                                                <a class="prt-social-linkedin" href="https://www.linkedin.com/company/" rel="noopener" aria-label="google"><i class="icon-linkedin"></i></a>
                                            </li>
                                            <li>
                                                <a class="prt-social-instagram" href="https://www.instagram.com/" aria-label="instagram"><i class="icon-instagram"></i></a>
                                            </li>
                                            <li>
                                                <a class="prt-social-facebook" href="https://www.facebook.com/" rel="noopener" aria-label="facebook"><i class="icon-facebook"></i></a>
                                            </li>
                                            <li>
                                                <a class="prt-social-twitter" href="https://twitter.com/" rel="noopener" aria-label="twitter"><i class="icon-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a class="prt-social-instagram" href="https://youtube.com" rel="noopener" aria-label="youtube"><i class="icon-youtube"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 col-md-6 widget-area">
                            <div class="widget">
                                <div class="enhanced-text-widget">
                                    <div class="widget-title">
                                        <h3>Get In Touch</h3>
                                    </div>
                                    <div class="res-767-pb-18">
                                        <p>144, First Floor, 12 St Louis Cave, Portugal 6825.</p>
                                        <p>Front Desk: <strong><a href="tel:+351 913 531 537">+351 913 531 537</a></strong></p>
                                        <p>Email: <strong><a href="mailto:info@unihubglobal.com">info@unihubglobal.com</a></strong></p>
                                        <a class="prt-btn prt-btn-size-md fw-400 prt-btn-color-white btn-inline mt-25" href="{{url('/')}}/about-us"> view all countries </a>
                                    </div>
                                </div>
                                <div class="widget-form">
                                    <div class="widget-title">
                                        <h3 class="widget-title">Sign up to Latest Updates</h3>
                                    </div>
                                    <form id="subscribe-form" class="newsletter-form" method="post" action="#" data-mailchimp="true">
                                        <div class="mailchimp-inputbox clearfix" id="subscribe-content">
                                            <p><input type="email" name="email" placeholder="Enter Your email address.." required=""></p>
                                            <button class="submit" type="submit"><i class="fa fa-paper-plane"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 widget-area">
                            <div class="visa-consultation">
                                <div class="section-title">
                                    <div class="featured-title">
                                        <h3>Study Abroad Today</h3>
                                    </div>
                                    <div class="big-heading">
                                        <h3 style="text-transform: capitalize">Unihub Global</h3>
                                    </div>
                                </div>
                                <div class="description">
                                    <h3>Give Wings to Your Dream</h3>
                                    <p>Call Us On: <a href="tel:+351 913 531 537"> +351 913 531 537</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-footer-text prt-bg copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="text-left">
                                <span class="cpy-text"> Copyright © {{date('Y')}} <a href="{{url('/')}}/" class=" font-weight-500"> UniHub Global Limited </a>  All rights reserved
                                     {{-- |  Powered By <a href="{{url('/')}}/" class=" font-weight-500">Designekta Studios</a> --}}
                                    </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer><!-- footer end -->

        <!-- back-to-top start -->
        <a id="totop" href="#top">
            <i class="icon-angle-up"></i>
        </a>
        <!-- back-to-top end -->

    </div><!-- page end -->

    <!-- Javascript -->
    <script src="{{asset('theme/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('theme/js/jquery-migrate-3.3.2.min.js')}}"></script>
    <script src="{{asset('theme/js/bootstrap.bundle.js')}}"></script>
    <script src="{{asset('theme/js/aos.js')}}"></script>
    <script src="{{asset('theme/js/jquery-validate.js')}}"></script>
    <script src="{{asset('theme/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('theme/js/slick.min.js')}}"></script>
    <script src="{{asset('theme/js/jquery-waypoints.js')}}"></script>
    <script src="{{asset('theme/js/numinate.min.js')}}"></script>
    <script src="{{asset('theme/js/imagesloaded.min.js')}}"></script>
    <script src="{{asset('theme/js/jquery-isotope.js')}}"></script>
    <script src="{{asset('theme/js/jquery.twentytwenty.js')}}"></script>
    <script src="{{asset('theme/js/circle-progress.min.js')}}"></script>
    <script src="{{asset('theme/js/main.js')}}"></script>

    <!-- Revolution Slider -->
    <script src="{{asset('theme/revolution/js/revolution.tools.min.js')}}"></script>
    <script src="{{asset('theme/revolution/js/rs6.min.js')}}"></script>
    <script src="{{asset('theme/revolution/js/slider.js')}}"></script>
    <!-- Javascript end-->

    <script>
        $('#whatsappForm').on('submit', function () {
            $('#bookConsultationBtnwtsap').attr('disabled', 'true');
        });
    </script>

    <script>
        const enquiryContainer = document.getElementById('enquiryContainer')
        const maForm = document.getElementById('mailForm')
        const waForm = document.getElementById('whatsappForm')
        // const mabtn = document.getElementById('ma-bttn')
        // const wabtn = document.getElementById('wa-bttn')

        window.onload =function() {
            if(window.location.hash) {
                var hash = window.location.hash.substring(1);
                var msgSes = '@Session["message"]';
                //console.log(hash);
                // console.log(msgSes);
                if( (hash == "mailForm") && (msgSes != "") ){
                    maForm.classList.remove('d-none');
                }
            }
        }

        function enquiryToggle(button) {

            if (button === "ma-bttn") {
                // maForm.classList.toggle('d-none')
                waForm.classList.add('d-none')
            // console.log("mail in")

            } else if (button === "wa-bttn") {
                waForm.classList.toggle('d-none')
                // maForm.classList.add('d-none')
            // console.log("wassup in")

            }
        }


        // Close the forms when clicked outside
        window.addEventListener("click", (e) => {

            // console.log(e.target)

            if ($(e.target).is("#mailForm") || $(e.target).is("#whatsappForm") || $(e.target).is("#enquiryContainer")) {
                return;
            }

            // console.log('clicked outside')
            waForm.classList.add('d-none')
            // maForm.classList.add('d-none')


        });


        $("#enquiryContainer div").click(function (e) {
        // Do something
        e.stopPropagation();
        });
        $("#whatsappForm").click(function (e) {
        // Do something
        e.stopPropagation();
        });
        $("#mailForm").click(function (e) {
        // Do something
        e.stopPropagation();
        });

    </script>

</body>


</html>
