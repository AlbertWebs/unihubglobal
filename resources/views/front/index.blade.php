@extends('front.master')

@section('content')
 <!-- START decfoxSlider 1 REVOLUTION SLIDER 6.5.9 --><p class="rs-p-wp-fix"></p>
 <rs-module-wrap id="rev_slider_2_1_wrapper" data-source="gallery">
    <rs-module id="rev_slider_2_1" style="" data-version="6.5.9">
        <rs-slides>

            <rs-slide data-key="rs-4" data-title="Slide" data-thumb="{{asset('theme/images/slides/sliderbg-003.jpg')}}" data-anim="f:slidebased;" data-in="o:1;y:(100%);m:true;row:5;" data-out="a:false;">

                <img src="{{asset('theme/images/slides/sliderbg-003.jpg')}}" title="slider-img-03.png')}}" width="1920" height="916" class="rev-slidebg tp-rs-img" data-no-retina>

                <rs-layer
                    id="slider-2-slide-2-layer-0"
                    data-type="text"
                    data-color="#365cf1"
                    data-rsp_ch="on"
                    data-xy="x:r,r,c,c;xo:22px,22px,0,0;yo:220px,220px,58px,53px;"
                    data-text="w:normal;s:65,65,50,32;l:80,80,65,41;fw:600;a:right,right,center,center;"
                    data-frame_0="y:100%;"
                    data-frame_1="e:power4.inOut;st:270;sp:800;sR:270;"
                    data-frame_999="o:0;st:w;sR:7930;"
                    style="z-index:9;font-family:'Playfair Display';"
                >Bringing Education <br><span class="text-base-skin">to you across </span>  <br>globe</span>
                </rs-layer>

                <rs-layer
                    id="slider-2-slide-2-layer-1"
                    data-type="shape"
                    data-rsp_ch="on"
                    data-xy="xo:50px,50px,0,0;yo:50px,50px,0,0;"
                    data-text="w:normal;s:20,20,11,6;l:0,0,14,8;"
                    data-dim="w:300px,300px,100%,100%;h:180px,180px,100%,100%;"
                    data-vbility="f,f,t,t"
                    data-frame_999="o:0;st:w;"
                    style="z-index:8;background-color:rgba(255,255,255,0.4);"
                >
                </rs-layer>

                <rs-layer
                    id="slider-2-slide-2-layer-2"
                    data-type="text"
                    data-color="#365cf1"
                    data-rsp_ch="on"
                    data-xy="x:c;xo:402px,402px,634px,460px;y:m;yo:121px,121px,-61px,-4px;"
                    data-text="w:normal;s:18,18,15,9;l:25,25,20,12;"
                    data-vbility="t,t,f,f"
                    data-frame_0="y:100%;"
                    data-frame_1="e:power4.inOut;st:270;sp:800;sR:270;"
                    data-frame_999="o:0;st:w;sR:7930;"
                    style="z-index:12;font-family:'Poppins';"
                >We help students achieve their career dreams by making<br> it easy for them to study abroad
                </rs-layer>

                <a
                    id="slider-2-slide-2-layer-3"
                    class="rs-layer"
                    href="{{url('/')}}/contact-us/" target="_self"
                    data-type="text"
                    data-rsp_ch="on"
                    data-xy="x:r,r,c,c;xo:19px,19px,-1px,0;y:m;yo:200px,200px,71px,56px;"
                    data-text="w:normal;s:14,14,14,13;l:25,25,18,13;fw:600;"
                    data-padding="t:8,8,10,9;r:30,30,30,25;b:8,8,10,9;l:30,30,30,25;"
                    data-border="bos:solid;boc:#6F8FAF;bow:2px,2px,2px,2px;bor:50px,50px,50px,50px;"
                    data-frame_0="y:100%;"
                    data-frame_1="e:power4.inOut;st:590;sp:600;sR:590;"
                    data-frame_999="o:0;st:w;sR:7910;"
                    data-frame_hover="c:#fff;bgc:#365cf1;boc:#365cf1;bor:50px,50px,50px,50px;bos:solid;bow:2px,2px,2px,2px;e:default;"
                    style="z-index:11;background-color:#6F8FAF;font-family:'Poppins';"
                ><span class="fa fa-calendar"></span> &nbsp;Free Consultation
                </a>

                <a
                    id="slider-2-slide-2-layer-4"
                    class="rs-layer"
                    href="{{url('/')}}/contact-us/" target="_self"
                    data-type="text"
                    data-color="#365cf1"
                    data-rsp_ch="on"
                    data-xy="x:r,r,c,c;xo:285px,225px,0,0;y:m;yo:200px,200px,133px,100px;"
                    data-text="w:normal;s:14,14,14,13;l:25,25,18,13;fw:600;"
                    data-vbility="t,t,t,f"
                    data-padding="t:8,8,10,9;r:30,30,30,25;b:8,8,10,9;l:30,30,30,25;"
                    data-border="bos:solid;boc:#365cf1;bow:2px,2px,2px,2px;bor:50px,50px,50px,50px;"
                    data-frame_0="y:100%;"
                    data-frame_1="e:power4.inOut;st:590;sp:600;sR:590;"
                    data-frame_999="o:0;st:w;sR:7910;"
                    data-frame_hover="c:#fff;bgc:#365cf1;boc:#365cf1;bor:50px,50px,50px,50px;bos:solid;bow:2px,2px,2px,2px;e:default;"
                    style="z-index:10;font-family:'Poppins';"
                >Conatct Us!
                </a>
            </rs-slide>
        </rs-slides>
    </rs-module>
</rs-module-wrap>
<!-- END REVOLUTION SLIDER -->


<!-- site-main start -->
<div class="site-main">

      <!--about-section-->
    <section class="prt-row home03-welcome-section clearfix">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-12">
                <div class="res-1199-mb-30">
                    <!--section-title -->
                    <div class="section-title">
                        <div class="title-header">
                            <h3>UHG HELPS YOU ACHIEVE YOUR DREAMS!</h3>
                            <h2 class="title">Global Leaders in International <br><span>Education </span> services</h2>
                        </div>
                        <div class="title-desc">
                            <p>
                                Uni Hub Consultancy has been providing comprehensive support to students in achieving their global education aspirations for over a decade. Our range of services includes academic advisory, seamless university application, expedited one-week application process approval, diploma recognition, assistance with accommodation, guidance on residence permit applications, and dedicated support for settling in. At Uni Hub Consultancy, we take immense pride in representing prestigious universities and colleges in Europe and the USA, guaranteeing exceptional service and unwavering support for all our candidates.
                            </p>
                        </div>

                    </div><!--section-title-end -->
                    <h5>
                        Every year, We help thousands of students find, compare, and connect with some of the best universities and schools around the world. Start with us today!
                    </h5>

                    <div class="d-block d-sm-flex mt-30 res-991-mt-20">
                        {{-- <div class="mr-30 res-575-mr-0">
                            <a class="prt-btn prt-btn-size-sm prt-btn-shape-round prt-btn-style-fill prt-btn-color-skincolor" href="services-1.html">Explore More</a>
                        </div> --}}
                        <div class="mr-30 res-575-mr-0">
                            <a class="prt-btn prt-btn-size-sm prt-btn-shape-round prt-btn-style-fill prt-btn-color-dark" href="#"><span class="fa fa-calendar"></span> &nbsp; Free Consultation</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12">
                <div class="col-bg-img-seven prt-bg prt-col-bgimage-yes col-bg-img-six">
                    <div class="prt-col-wrapper-bg-layer prt-bg-layer"></div>
                    <div class="layer-content"></div>
                </div>
                <img class="img-fluid prt-equal-height-image" style="border-radius:10px !important" src="{{asset('theme/images/unnamed.jpg')}}" alt="UniHub Global">
            </div>
        </div>
    </div>
    </section>
     <!--about-section end-->


    <!-- heading-section-end -->
    {{-- <hr> --}}

    <!-- top-section -->
    {{-- <section class="prt-row home02-top-section clearfix">
        <div class="container-fliud">
            <div class="row">
                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="featured-icon-box icon-align-top-content style2">
                        <div class="featured-icon">
                            <div class="prt-icon prt-icon_element-onlytxt prt-icon_element-color-skincolor prt-icon_element-size-md">
                                <i class="flaticon-essay"></i>
                            </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3><a href="ielts-coaching.html">IELTS Coaching</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="featured-icon-box icon-align-top-content style2">
                        <div class="featured-icon">
                            <div class="prt-icon prt-icon_element-onlytxt prt-icon_element-color-skincolor prt-icon_element-size-md">
                                <i class="flaticon-travel-agency"></i>
                            </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3><a href="toefl-coaching.html">TOEFL Coaching</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="featured-icon-box icon-align-top-content style2">
                        <div class="featured-icon">
                            <div class="prt-icon prt-icon_element-onlytxt prt-icon_element-color-skincolor prt-icon_element-size-md">
                                <i class="flaticon-graduated"></i>
                            </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3><a href="gre-coaching.html">GRE Coaching</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="featured-icon-box icon-align-top-content style2 bottom-box">
                        <div class="featured-icon">
                            <div class="prt-icon prt-icon_element-onlytxt prt-icon_element-color-skincolor prt-icon_element-size-md">
                                <i class="flaticon-instructor"></i>
                            </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3><a href="gma-coaching.html">GMA Coaching</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="featured-icon-box icon-align-top-content style2 bottom-box">
                        <div class="featured-icon">
                            <div class="prt-icon prt-icon_element-onlytxt prt-icon_element-color-skincolor prt-icon_element-size-md">
                                <i class="flaticon-visa"></i>
                            </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3><a href="sat-coaching.html">SAT Coaching</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="featured-icon-box icon-align-top-content style2 bottom-box">
                        <div class="featured-icon">
                            <div class="prt-icon prt-icon_element-onlytxt prt-icon_element-color-skincolor prt-icon_element-size-md">
                                <i class="flaticon-visa-1"></i>
                            </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3><a href="pte-coaching.html">PTE Coaching</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- top-section-end -->

      <!--service-type-third-section-->
      <section class="prt-row service-type04-third-section clearfix bg-base-grey ">
        <div class="container">
            {{-- <div class="row">
                <div class="col-lg-12">
                    <div class="service-title mb-30">
                        <div class="service-header">
                            <h3>Cources we offered</h3>
                        </div>
                        <div class="service-desc">
                            <p class="mb-0">You are nothing witout your set eyes care set  injury magna consectr elit, do eiusmod tempor incididunt or ut labore areas disease eyecare dolore aliqua. Ut enim adet minim veniam, and quis nostrud exercitation produrYou are nothing witout your set eyes care set  injury magna consectr.</p>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="row">
                <div class="col-lg-12">
                    <!--section-title -->
                    <div class="section-title title-style-center_text">
                        <div class="title-header">
                            <h2 class="title">Popular <span>International</span> Destinations </h2>
                        </div>
                    </div><!--section-title-end -->
                </div>
            </div>
            <div class="row slick_slider" data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows":true, "dots":false, "autoplay":true, "infinite":true, "responsive": [{"breakpoint":1024,"settings":{"slidesToShow": 2}} , {"breakpoint":991,"settings":{"slidesToShow": 2}}, {"breakpoint":575,"settings":{"slidesToShow": 1}}]}'>
                <div class="col-lg-4 col-md-6 project_item business Study student">
                    <!-- featured-imagebox -->
                    <div class="featured-imagebox featured-imagebox-tab">
                        <div class="featured-thumbnail">
                            <img class="img-fluid" width="656" height="484" src="{{asset('theme/images/pexels-josh-hild-2422588.jpg')}}" alt="gallery-img">
                            <div class="featured-flag-box">
                                <span class="img-thumbnail flag-icon-us flag-icon-squared"></span>
                            </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3><a href="france.html">USA</a></h3>
                            </div>
                            <div class="featured-desc">
                                <p>
                                    The USA has made a name for itself as a center of global education thanks to its illustrious colleges, varied culture, and limitless chances. Here are five strong arguments for why the United States should be at the top of your list if you're thinking about studying abroad.

                                </p>
                            </div>
                        </div>
                    </div><!-- featured-imagebox end-->
                </div>
                <div class="col-lg-4 col-md-6 project_item business education Placements">
                    <!-- featured-imagebox -->
                    <div class="featured-imagebox featured-imagebox-tab">
                        <div class="featured-thumbnail">
                            <img class="img-fluid" width="656" height="484" src="{{asset('theme/images/pexels-chris-czermak-2444403.jpg')}}" alt="gallery-img">
                            <div class="featured-flag-box">
                                <span class="img-thumbnail flag-icon-it flag-icon-squared"></span>
                            </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3><a href="#">Switzerland</a></h3>
                            </div>
                            <div class="featured-desc">
                                <p>Apply to travel, study, work or immigrate citizenship or PR,millions of decisions about who has the right to visit or stay.</p>
                            </div>
                        </div>
                    </div><!-- featured-imagebox end-->
                </div>
                <div class="col-lg-4 col-md-6 project_item business education student" >
                    <!-- featured-imagebox -->
                    <div class="featured-imagebox featured-imagebox-tab">
                        <div class="featured-thumbnail">
                            <img class="img-fluid" width="656" height="484" src="{{asset('theme/images/pexels-michael-block-3225528.jpg')}}" alt="gallery-img">
                            <div class="featured-flag-box">
                                <span class="img-thumbnail flag-icon-es flag-icon-squared"></span>
                            </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3><a href="#">Italy</a></h3>
                            </div>
                            <div class="featured-desc">
                                <p>Apply to travel, study, work or immigrate citizenship or PR,millions of decisions about who has the right to visit or stay.</p>
                            </div>
                        </div>
                    </div><!-- featured-imagebox end-->
                </div>
                <div class="col-lg-4 col-md-6 project_item business education Placements">
                    <!-- featured-imagebox -->
                    <div class="featured-imagebox featured-imagebox-tab">
                        <div class="featured-thumbnail">
                            <img class="img-fluid" width="656" height="484" style="min-height:296px" src="{{asset('theme/images/pexels-lisa-fotios-2061751.jpg')}}" alt="gallery-img">
                            <div class="featured-flag-box">
                                <span class="img-thumbnail flag-icon-pt flag-icon-squared"></span>
                            </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3><a href="#">Portugal</a></h3>
                            </div>
                            <div class="featured-desc">
                                <p>Apply to travel, study, work or immigrate citizenship or PR,millions of decisions about who has the right to visit or stay.</p>
                            </div>
                        </div>
                    </div><!-- featured-imagebox end-->
                </div>
                <div class="col-lg-4 col-md-6 project_item business education Placements">
                    <!-- featured-imagebox -->
                    <div class="featured-imagebox featured-imagebox-tab">
                        <div class="featured-thumbnail">
                            <img class="img-fluid" width="656" height="484" style="min-height:296px" src="{{asset('theme/images/pexels-alex-azabache-3254729.jpg')}}" alt="gallery-img">
                            <div class="featured-flag-box">
                                <span class="img-thumbnail flag-icon-es flag-icon-squared"></span>
                            </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3><a href="#">Spain</a></h3>
                            </div>
                            <div class="featured-desc">
                                <p>Apply to travel, study, work or immigrate citizenship or PR,millions of decisions about who has the right to visit or stay.</p>
                            </div>
                        </div>
                    </div><!-- featured-imagebox end-->
                </div>
            </div>
        </div>
    </section>
    <!--services-section end-->





    <!-- service-section -->
    {{-- <section class="prt-row home02-service-section bg-layer-equal-height clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 align-self-end">
                    <!-- section title -->
                    <div class="section-title style2 mb-15">
                        <div class="title-header">
                            <h3>UHG helps you achieve your dreams!</h3>
                            <h2 class="title">Global Leaders in International<br> Education<br> <span> Services.</span></h2>
                        </div>
                    </div><!-- section title end -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="featured-imagebox featured-imagebox-services style2">
                        <div class="prt-box-view-overlay prt-portfolio-box-view-overlay">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{asset('theme/images/services/services-1-896x590.png')}}" alt="">
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><a href="job-visa.html" tabindex="0">Skill-Based Courses</a></h3>
                                </div>
                                <div class="featured-desc">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                                        molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="featured-imagebox featured-imagebox-services style2">
                        <div class="prt-box-view-overlay prt-portfolio-box-view-overlay">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{asset('theme/images/services/services-3-896x590.png')}}" alt="">
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><a href="business-visa.html" tabindex="0">Undergraduate</a></h3>
                                </div>
                                <div class="featured-desc">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                                        molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="featured-imagebox featured-imagebox-services style2">
                        <div class="prt-box-view-overlay prt-portfolio-box-view-overlay">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{asset('theme/images/services/services-2-896x590.png')}}" alt="blog_img">
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><a href="student-visa.html" tabindex="0">Post Graduate</a></h3>
                                </div>
                                <div class="featured-desc">
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                                        molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="featured-imagebox featured-imagebox-services style2">
                        <div class="prt-box-view-overlay prt-portfolio-box-view-overlay">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{asset('theme/images/services/services-6-896x590.png')}}" alt="blog_img">
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><a href="free-visa.html" tabindex="0">Research </a></h3>
                                </div>
                                <div class="featured-desc">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                                        molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-15">
                    <div class="prt-bg prt-col-bgimage-yes col-bg-img-fourteen bg-base-dark spacing-10">
                        <div class="prt-col-wrapper-bg-layer prt-bg-layer">
                            <div class="prt-col-wrapper-bg-layer-inner"></div>
                        </div>
                        <div class="layer-content">
                            <div class="position-relative">
                                <h3>What you need?</h3>
                                <ul class="prt-list style2">
                                    <li>
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                        <span class="prt-list-li-content">Resident visa to a new passport.</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                        <span class="prt-list-li-content">A variation of your resident visa.</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                        <span class="prt-list-li-content">Transfer permanent resident visa</span>
                                    </li>
                                </ul>
                                <div class="mt-20">
                                    <a class="prt-btn prt-btn-size-xs prt-btn-shape-round prt-btn-style-fill prt-btn-color-skincolor" href="services-1.html">Explore More</a>
                                </div>
                                <div class="prt-image-plane">
                                    <img width="182" height="199" class="img-fluid" src="{{asset('theme/images/plane.png')}}" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- service-section-end -->

     <!-- service-type-second-section  -->
     <section class="prt-row service-type02-second-section clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="service-title bg-base-skin text-center mt-0">
                        <div class="service-header p-25">
                            <h3 class="text-base-white mb-0">Five Easy Steps:</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="prt-stepbox-wrapper bg-base-grey">
                        <div class="prt-stepbox">
                            <div class="row">
                                <div class="col-md-6 align-self-center">
                                    <div class="stepbox-content">
                                        <div class="stepbox-info">
                                            <span>Step One:</span>
                                            <div class="featured-title"><h3>Book a free professional consultation</h3></div>
                                            <div class="prt-box-description">
                                                <p>
                                                    Hence talk to one of our counselors for the best career option suitable for you. They will take into account your academic history, your goals, budget and preferences to recommend the best option suitable for you.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 align-self-center">
                                    <div class="prt-box-image">
                                        <div class="prt-stepbox-image">
                                            <img class="img-fluid" src="{{asset('uploads/steps/consultations.jpg')}}" alt="step-one">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="prt-stepbox">
                            <div class="row">
                                <div class="col-md-6 align-self-center">
                                    <div class="prt-box-image">
                                        <div class="prt-stepbox-image">
                                            <img class="img-fluid" src="{{asset('uploads/steps/documents.jpg')}}" alt="step-two">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 align-self-center">
                                    <div class="stepbox-content">
                                        <div class="stepbox-info">
                                            <span>Step Two:</span>
                                            <div class="featured-title"><h3>Get your application documents together</h3></div>
                                            <div class="prt-box-description">
                                                <p>
                                                    Our professional team will assist you with assembling your documents, and then complete the application for you, giving you the highest possibility of acceptance
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="prt-stepbox">
                            <div class="row">
                                <div class="col-md-6 align-self-center">
                                    <div class="stepbox-content">
                                        <div class="stepbox-info">
                                            <span>Step Three:</span>
                                            <div class="featured-title"><h3>Meet the conditions of your offer</h3></div>
                                            <div class="prt-box-description">
                                                <p>
                                                    We can assist with essay writing, interview preparation, and English language instruction. We can authenticate documents because most of our partners consider us to be a preferred agent.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 align-self-center">
                                    <div class="prt-box-image">
                                        <div class="prt-stepbox-image">
                                            <img class="img-fluid" src="{{asset('uploads/steps/conditions.jpg')}}" alt="step-three">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="prt-stepbox">
                            <div class="row">
                                <div class="col-md-6 align-self-center">
                                    <div class="prt-box-image">
                                        <div class="prt-stepbox-image">
                                            <img class="img-fluid" src="{{asset('theme/images/stepbox/01.png')}}" alt="step-four">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 align-self-center">
                                    <div class="stepbox-content">
                                        <div class="stepbox-info">
                                            <span>Step Four:</span>
                                            <div class="featured-title"><h3>Obtain a visa</h3></div>
                                            <div class="prt-box-description">
                                                <p>
                                                    To give you the best possibility of being approved, our skilled visa staff completes applications after going through a two-stage verification procedure.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="prt-stepbox">
                            <div class="row">
                                <div class="col-md-6 align-self-center">
                                    <div class="stepbox-content">
                                        <div class="stepbox-info">
                                            <span>Step Five:</span>
                                            <div class="featured-title"><h3>Book your accommodation and flights</h3></div>
                                            <div class="prt-box-description">
                                                <p>
                                                    Our staff is prepared to assist you choose a suitable place to stay, book a flight to the closest airport, and arrange transfers.

                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 align-self-center">
                                    <div class="prt-box-image">
                                        <div class="prt-stepbox-image">
                                            <img class="img-fluid" src="{{asset('uploads/steps/flights.jpg')}}" alt="step-three">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service-type-second-section-end -->


    <!-- why-us-section -->
    {{-- <section class="prt-row about01-why-us-section prt-bg prt-bgimage-yes bg-img2 bg-base-dark clearfix">
        <div class="prt-row-wrapper-bg-layer prt-bg-layer"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--section-title-->
                    <div class="section-title title-style-center_text">
                        <div class="title-header">
                            <h3>WHY CHOOSE US</h3>
                            <h2 class="title">Your first stop on <br>your <span> journey to study abroad</span></h2>
                        </div>
                    </div><!--section-title end-->
                </div>
            </div>
            <div class="row res-575-mt_25">
                <div class="col-lg-12">
                    <div class="featured-icon-box style6">
                        <div class="featured-icon-wrapper">
                            <div class="featured-icon">
                                <div class="prt-icon prt-icon_element-onlytxt prt-icon_element-size-lg prt-icon_element-color-skincolor">
                                    <i class="flaticon-passport-3"></i>
                                </div>
                            </div>
                            <div class="featured-title">
                                <h3>Book a free professional consultation</h3>
                            </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-desc">
                                <p>
                                    Hence talk to one of our counselors for the best career option suitable for you. They will take into account your academic history, your goals, budget and preferences to recommend the best option suitable for you.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="featured-icon-box style6">
                        <div class="featured-icon-wrapper">
                            <div class="featured-icon">
                                <div class="prt-icon prt-icon_element-onlytxt prt-icon_element-size-lg prt-icon_element-color-skincolor">
                                    <i class="flaticon-office-building"></i>
                                </div>
                            </div>
                            <div class="featured-title">
                                <h3>Get your application documents together</h3>
                            </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-desc">
                                <p>
                                    Our professional team will assist you with assembling your documents, and then complete the application for you, giving you the highest possibility of acceptance.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="featured-icon-box style6">
                        <div class="featured-icon-wrapper">
                            <div class="featured-icon">
                                <div class="prt-icon prt-icon_element-onlytxt prt-icon_element-size-lg prt-icon_element-color-skincolor">
                                    <i class="fa fa-check"></i>
                                </div>
                            </div>
                            <div class="featured-title">
                                <h3>
                                    Meet the conditions of your offer
                                </h3>
                            </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-desc">
                                <p>
                                    We can assist with essay writing, interview preparation, and English language instruction. We can authenticate documents because most of our partners consider us to be a preferred agent.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="featured-icon-box style6">
                        <div class="featured-icon-wrapper">
                            <div class="featured-icon">
                                <div class="prt-icon prt-icon_element-onlytxt prt-icon_element-size-lg prt-icon_element-color-skincolor">
                                    <i class="flaticon-visa"></i>
                                </div>
                            </div>
                            <div class="featured-title">
                                <h3>
                                    Obtain a visa
                                </h3>
                            </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-desc">
                                <p>
                                    To give you the best possibility of being approved, our skilled visa staff completes applications after going through a two-stage verification procedure.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="featured-icon-box style6">
                        <div class="featured-icon-wrapper">
                            <div class="featured-icon">
                                <div class="prt-icon prt-icon_element-onlytxt prt-icon_element-size-lg prt-icon_element-color-skincolor">
                                    <i class="fa fa-plane"></i>
                                </div>
                            </div>
                            <div class="featured-title">
                                <h3>
                                    Book your accommodation and flights
                                </h3>
                            </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-desc">
                                <p>
                                    Our staff is prepared to assist you choose a suitable place to stay, book a flight to the closest airport, and arrange transfers.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- why-us-section -->

    <section class="prt-row home02-service-section bg-layer-equal-height clearfix">
        <div class="container">

            <div class="row">

                <div class="col-lg-12 text-center">

                    <h2 class="txt-primary mb-4">Free Consultation to unlock your international education opportunities.</h2>

                    <a class="prt-btn prt-btn-size-sm prt-btn-shape-round prt-btn-style-fill prt-btn-color-dark" href="#"><span class="fa fa-calendar"></span> &nbsp; Free Consultation</a>

                </div>

            </div>

        </div>
    </section>





    <!-- client-section -->
    <div class="prt-row padding_zero-section home02-client-section bg-base-grey clearfix">
        <div class="container-fluid">
            <!-- row -->
            <div class="row text-center">
                <div class="col-md-12">
                    <!-- slick_slider -->
                    <div class="slick_slider row" data-slick='{"slidesToShow": 6, "slidesToScroll": 1, "arrows":false, "autoplay":false, "infinite":true, "responsive": [{"breakpoint":1200,"settings":{"slidesToShow": 5}}, {"breakpoint":1024,"settings":{"slidesToShow": 4}}, {"breakpoint":777,"settings":{"slidesToShow": 3}}, {"breakpoint":575,"settings":{"slidesToShow": 2}}, {"breakpoint":420,"settings":{"slidesToShow": 1}}]}'>
                        <div class="col-lg-12">
                            <div class="client-box style1">
                                <div class="client-thumbnail">
                                    <img class="img-fluid" src="{{asset('theme/images/client/1058810554.jpg')}}" alt="image">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="client-box style1">
                                <div class="client-thumbnail">
                                    <img class="img-fluid" src="{{asset('theme/images/client/download.jpg')}}" alt="image">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="client-box style1">
                                <div class="client-thumbnail">
                                    <img class="img-fluid" src="{{asset('theme/images/client/IADE_Logotipo.jpg')}}" alt="image">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="client-box style1">
                                <div class="client-thumbnail">
                                    <img class="img-fluid" src="{{asset('theme/images/client/universidad-europea-logo_poc9mEM.original.png')}}" alt="image">
                                </div>
                            </div>
                        </div>

                    </div><!-- slick_slider end -->
                </div>
            </div><!-- row end -->
        </div>
    </div>
    <!-- client-section-end -->

    <!-- blog-section -->
    <section class="prt-row home03-blog-section clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--section-title -->
                    <div class="section-title title-style-center_text style5">
                        <div class="title-header">
                            <h2 class="title">Latest<span>News</span></h2>
                        </div>
                    </div><!--section-title-end -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="featured-imagebox featured-imagebox-blog style3">
                        <div class="row g-0 row-equal-height">
                            <div class="col-sm-5">
                                <div class="prt-bg prt-col-bgimage-yes col-bg-img-ten spacing-8">
                                    <div class="prt-col-wrapper-bg-layer prt-bg-layer"></div>
                                    <div class="layer-content">
                                        <div class="prt-box-post-date">
                                            <span>15</span>
                                            <label>Aug</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="featured-content">
                                    <div class="post-meta">
                                        <a href="blog.html">
                                            <span>Albert</span>
                                        </a>
                                        <a href="blog.html">
                                            <span>0 comments</span>
                                        </a>
                                    </div>
                                    <div class="featured-title">
                                        <h3><a href="#">What is the cost of studying in popular study-abroad destinations for an international student?</a></h3>
                                    </div>
                                    <div class="featured-desc">
                                        <p>One of your most frequently asked questions, and one that demands well-researched and accurate answers, is the cost of studying abroad in your dream destination. From the bustling streets of Manhattan to the rolling meadows of Ireland, as attractive as these places are, they are only worth the investment if you plan your finances carefully.</p>
                                    </div>
                                    <div class="featured-bottom">
                                        <a class="prt-btn btn-inline prt-btn-size-md prt-icon-btn-right" href="#">View More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="featured-imagebox featured-imagebox-blog style3">
                        <div class="row g-0 row-equal-height">
                            <div class="col-sm-5">
                                <div class="prt-bg prt-col-bgimage-yes col-bg-img-eleven spacing-8">
                                    <div class="prt-col-wrapper-bg-layer prt-bg-layer"></div>
                                    <div class="layer-content">
                                        <div class="prt-box-post-date">
                                            <span>14</span>
                                            <label>Jul</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="featured-content">
                                    <div class="post-meta">
                                        <a href="blog.html">
                                            <span>Albert</span>
                                        </a>
                                        <a href="blog.html">
                                            <span>0 comments</span>
                                        </a>
                                    </div>
                                    <div class="featured-title">
                                        <h3><a href="#">How Can You Find Student Accommodation in Canada as an International Student?</a></h3>
                                    </div>
                                    <div class="featured-desc">
                                        <p>For most international students, finding accommodation in Canada proves to be one of the toughest tasks they have to do. International students intending to study in Canada have numerous possibilities to choose from. </p>
                                    </div>
                                    <div class="featured-bottom">
                                        <a class="prt-btn btn-inline prt-btn-size-md prt-icon-btn-right" href="#">View More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="featured-imagebox featured-imagebox-blog style3">
                        <div class="row g-0 row-equal-height">
                            <div class="col-sm-5">
                                <div class="prt-bg prt-col-bgimage-yes col-bg-img-twelve spacing-8">
                                    <div class="prt-col-wrapper-bg-layer prt-bg-layer"></div>
                                    <div class="layer-content">
                                        <div class="prt-box-post-date">
                                            <span>8</span>
                                            <label>Jun</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="featured-content">
                                    <div class="post-meta">
                                        <a href="blog.html">
                                            <span>Albert</span>
                                        </a>
                                        <a href="blog.html">
                                            <span>0 comments</span>
                                        </a>
                                    </div>
                                    <div class="featured-title">
                                        <h3><a href="#">All You Need to Know about the Canadian Student Visa Documentation Checklist</a></h3>
                                    </div>
                                    <div class="featured-desc">
                                        <p>Canada has become an increasingly popular destination for international students in recent years. It is a dream study abroad destination for thousands of students and immigrants. However, a Canadian student visa is one of several hurdles that students must overcome before travelling.</p>
                                    </div>
                                    <div class="featured-bottom">
                                        <a class="prt-btn btn-inline prt-btn-size-md prt-icon-btn-right" href="#">View More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="featured-imagebox featured-imagebox-blog style3">
                        <div class="row g-0 row-equal-height">
                            <div class="col-sm-5">
                                <div class="prt-bg prt-col-bgimage-yes col-bg-img-thirteen spacing-8">
                                    <div class="prt-col-wrapper-bg-layer prt-bg-layer"></div>
                                    <div class="layer-content">
                                        <div class="prt-box-post-date">
                                            <span>23</span>
                                            <label>May</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="featured-content">
                                    <div class="post-meta">
                                        <a href="blog.html">
                                            <span>Albert</span>
                                        </a>
                                        <a href="blog.html">
                                            <span>0 comments</span>
                                        </a>
                                    </div>
                                    <div class="featured-title">
                                        <h3><a href="#">How Can You Build a Student Profile on LinkedIn as an International Student?</a></h3>
                                    </div>
                                    <div class="featured-desc">
                                        <p>LinkedIn has been a go-to for professionals across the globe to network with each other ever since it emerged as a major social media platform. Assuming that it may not be for them however, numerous students generally do not get on to the platform. They choose to wait till they have complete their graduation in order to create their profiles.</p>
                                    </div>
                                    <div class="featured-bottom">
                                        <a class="prt-btn btn-inline prt-btn-size-md prt-icon-btn-right" href="#">View More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-section-end -->

          <!-- services02-second-section -->
          <section class="prt-row services02-second-section bg-base-grey clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12" style="margin:0 auto;">
                        <div class="service-title mb-20">
                            <center>
                                <div class="service-header">
                                    <h1 class="mb-5">Still Lost?</h1>
                                </div>
                                <div class="service-desc">
                                    <h3>Book a careers counselling session</h3>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8" style="margin:0 auto;">
                        <div id="comments" class="comments-area">
                            <div class="comment-respond">
                                <form action="#" method="post" id="commentform" class="comment-form">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="comment-form-author">
                                                <input id="author" placeholder="Enter your name" name="author" type="text" value="" size="30" aria-required="true">
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="comment-form-email">
                                                <input id="email" placeholder="Enter your email" name="email" type="text" value="" size="30" aria-required="true">
                                            </p>
                                        </div>
                                        <div class="col-md-12">
                                            <p class="comment-form-comment">
                                                <input id="phone-number" placeholder="Enter your number" name="number" type="text" size="30">
                                            </p>
                                        </div>

                                        <div class="col-md-12">
                                            <p class="comment-form-comment">
                                                <textarea id="comment" placeholder="Let us know what you are looking for" name="comment" cols="45" rows="4" aria-required="true"></textarea>
                                            </p>
                                        </div>
                                        <div class="col-md-12">
                                            <p class="comment-cookies">
                                                <input id="comment-cookies-consent" name="comment-cookies-consent" type="checkbox" value="yes" class="me-1">
                                                <label for="comment-cookies-consent">I confirm that I have already secured funding</label>
                                            </p>
                                            <p class="comment-cookies">
                                                <input id="comment-cookies-consent" name="comment-cookies-consent" type="checkbox" value="yes" class="me-1">
                                                <label for="comment-cookies-consent">I acknowledge that there are no full scholarships avaialible</label>
                                            </p>
                                        </div>
                                        <div class="col-md-12">
                                            <p class="form-submit">
                                                <button class="w-100 submit prt-btn prt-btn-size-md prt-btn-shape-round prt-btn-style-fill prt-btn-color-skincolor" type="submit">Contact Us</button>
                                            </p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- services02-second-section-end -->

         <!-- testimonial-section -->
    <section class="prt-row about01-testimonial-section bg-base-white clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--section-title-->
                    <div class="section-title title-style-center_text">
                        <div class="title-header">
                            <h3>Testimonials</h3>
                            <h2 class="title">What our students say <span>About us</span></h2>
                        </div>
                    </div><!--section-title end-->
                </div>
            </div>
            <div class="row slick_slider" data-slick='{"slidesToShow": 2, "slidesToScroll": 1, "arrows":false, "dots":false, "autoplay":false, "infinite":true, "responsive": [{"breakpoint":1200,"settings":{"slidesToShow": 2}} , {"breakpoint":992,"settings":{"slidesToShow": 1}}, {"breakpoint":768,"settings":{"slidesToShow": 1}}]}'>
                <div class="col-lg-6">
                    <div class="testimonials style2 bg-grey">
                        <div class="testimonial-wrapper">
                            <div class="testimonial-info">
                                <div class="testimonial-avatar">
                                    <div class="testimonial-img">
                                        <img class="img-fluid" src="{{asset('theme/images/testimonial/testimonial-6-150x150.jpg')}}" alt="testimonial-img" width="72" height="72">
                                    </div>
                                </div>
                                <div class="testimonial-caption">
                                    <h3>Dorline Daniels</h3>
                                    <label>Student</label>
                                    <div class="star-ratings prt-section-wrapper-cell">
                                        <div class="star-ratings">
                                            <ul class="rating">
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-content">
                                <blockquote class="testimonial-text">Keep up the good work Unihub and keep helping others to make their dreams be fulfilled! Very thankful to the team.....</blockquote>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonials style2 bg-grey">
                        <div class="testimonial-wrapper">
                            <div class="testimonial-info">
                                <div class="testimonial-avatar">
                                    <div class="testimonial-img">
                                        <img class="img-fluid" src="{{asset('theme/images/testimonial/testimonial-6-150x150.jpg')}}" alt="testimonial-img" width="72" height="72">
                                    </div>
                                </div>
                                <div class="testimonial-caption">
                                    <h3>Tonny Mikes</h3>
                                    <label>Student</label>
                                    <div class="star-ratings prt-section-wrapper-cell">
                                        <div class="star-ratings">
                                            <ul class="rating">
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-content">
                                <blockquote class="testimonial-text">Keep up the good work Unihub and keep helping others to make their dreams be fulfilled! Very thankful to the team.....</blockquote>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonials style2 bg-grey">
                        <div class="testimonial-wrapper">
                            <div class="testimonial-info">
                                <div class="testimonial-avatar">
                                    <div class="testimonial-img">
                                        <img class="img-fluid" src="{{asset('theme/images/testimonial/testimonial-6-150x150.jpg')}}" alt="testimonial-img" width="72" height="72">
                                    </div>
                                </div>
                                <div class="testimonial-caption">
                                    <h3>John Doe</h3>
                                    <label>Student</label>
                                    <div class="star-ratings prt-section-wrapper-cell">
                                        <div class="star-ratings">
                                            <ul class="rating">
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-content">
                                <blockquote class="testimonial-text">Keep up the good work Unihub and keep helping others to make their dreams be fulfilled! Very thankful to the team.....</blockquote>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonials style2 bg-grey">
                        <div class="testimonial-wrapper">
                            <div class="testimonial-info">
                                <div class="testimonial-avatar">
                                    <div class="testimonial-img">
                                        <img class="img-fluid" src="{{asset('theme/images/testimonial/testimonial-6-150x150.jpg')}}" alt="testimonial-img" width="72" height="72">
                                    </div>
                                </div>
                                <div class="testimonial-caption">
                                    <h3>Sofia moreen</h3>
                                    <label>Student</label>
                                    <div class="star-ratings prt-section-wrapper-cell">
                                        <div class="star-ratings">
                                            <ul class="rating">
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-content">
                                <blockquote class="testimonial-text">Keep up the good work Unihub and keep helping others to make their dreams be fulfilled! Very thankful to the team.....</blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial-section-end -->


</div><!-- site-main end-->
@endsection
