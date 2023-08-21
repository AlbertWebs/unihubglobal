@extends('front.master')

@section('content')
@foreach ($Study as $study)


  <!-- page-title -->
  <div class="prt-titlebar-wrapper prt-bg service-img" style="position: relative; margin-top:80px">
    <div class="prt-titlebar-wrapper-bg-layer prt-bg-layer"></div>
    <div class="prt-titlebar-wrapper-inner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="prt-page-title-row-heading">
                        <div class="page-title-heading">
                            <h2 class="title">{{$study->title}}</h2>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <i class="flaticon-home"></i>
                            <span>
                                <a title="Homepage" href="index.html">Home</a>
                            </span>
                            <div class="prt-sep"> - </div>
                            <span>services</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page-title end -->

<!--site-main start-->
<div class="site-main">

    <!--services-section-->
    <section class="prt-row service01-services-section clearfix">
        <div class="prt-row-wrapper-bg-layer prt-bg-layer"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- featured-imagebox-post -->
                    <div class="featured-imagebox featured-imagebox-services style1">
                        <!-- featured-thumbnail -->
                        <div class="featured-thumbnail">
                            <img class="img-fluid" src="images/services/services-1-896x590.png" alt="blog_img">
                        </div><!-- featured-thumbnail end-->
                        <div class="featured-details-wrap">
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><a href="job-visa.html" tabindex="0">Job Visa</a></h3>
                                </div>
                            </div>
                            <div class="featured-explore-more">
                                <a href="job-visa.html">explore more</a>
                            </div>
                        </div>
                        <div class="services-details-wrap">
                            <div class="services-details-box">
                                <div class="services-content">
                                    <div class="services-title">
                                        <h3><a href="job-visa.html" tabindex="0">Job Visa</a></h3>
                                    </div>
                                    <div class="services-desc">
                                        <p>Visa that grants the holder authorization to accept work employment in a foreign countries…</p>
                                    </div>
                                </div>
                                <div class="services-explore-more">
                                    <a href="job-visa.html">explore more</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- featured-imagebox-post end -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- featured-imagebox-post -->
                    <div class="featured-imagebox featured-imagebox-services style1">
                        <!-- featured-thumbnail -->
                        <div class="featured-thumbnail">
                            <img class="img-fluid" src="images/services/services-2-896x590.png" alt="blog_img">
                        </div><!-- featured-thumbnail end-->
                        <div class="featured-details-wrap">
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><a href="business-visa.html" tabindex="0">Business Visa</a></h3>
                                </div>
                            </div>
                            <div class="featured-explore-more">
                                <a href="business-visa.html">explore more</a>
                            </div>
                        </div>
                        <div class="services-details-wrap">
                            <div class="services-details-box">
                                <div class="services-content">
                                    <div class="services-title">
                                        <h3><a href="business-visa.html" tabindex="0">Business Visa</a></h3>
                                    </div>
                                    <div class="services-desc">
                                        <p>Generally intended for individuals entering a country for the purposes of conducting business…</p>
                                    </div>
                                </div>
                                <div class="services-explore-more">
                                    <a href="business-visa.html">explore more</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- featured-imagebox-post end -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- featured-imagebox-post -->
                    <div class="featured-imagebox featured-imagebox-services style1">
                        <!-- featured-thumbnail -->
                        <div class="featured-thumbnail">
                            <img class="img-fluid" src="images/services/services-3-896x590.png" alt="blog_img">
                        </div><!-- featured-thumbnail end-->
                        <div class="featured-details-wrap">
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><a href="diplomatic-visa.html" tabindex="0">Diplomatic Visa</a></h3>
                                </div>
                            </div>
                            <div class="featured-explore-more">
                                <a href="diplomatic-visa.html">explore more</a>
                            </div>
                        </div>
                        <div class="services-details-wrap">
                            <div class="services-details-box">
                                <div class="services-content">
                                    <div class="services-title">
                                        <h3><a href="diplomatic-visa.html" tabindex="0">Diplomatic Visa</a></h3>
                                    </div>
                                    <div class="services-desc">
                                        <p>Visa that grants the holder authorization to accept work employment in a foreign countries…</p>
                                    </div>
                                </div>
                                <div class="services-explore-more">
                                    <a href="diplomatic-visa.html">explore more</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- featured-imagebox-post end -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- featured-imagebox-post -->
                    <div class="featured-imagebox featured-imagebox-services style1">
                        <!-- featured-thumbnail -->
                        <div class="featured-thumbnail">
                            <img class="img-fluid" src="images/services/services-4-896x590.png" alt="blog_img">
                        </div><!-- featured-thumbnail end-->
                        <div class="featured-details-wrap">
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><a href="worker-visa.html" tabindex="0">Worker Visa</a></h3>
                                </div>
                            </div>
                            <div class="featured-explore-more">
                                <a href="worker-visa.html">explore more</a>
                            </div>
                        </div>
                        <div class="services-details-wrap">
                            <div class="services-details-box">
                                <div class="services-content">
                                    <div class="services-title">
                                        <h3><a href="worker-visa.html" tabindex="0">Worker Visa</a></h3>
                                    </div>
                                    <div class="services-desc">
                                        <p>Generally intended for individuals entering a country for the purposes of conducting business…</p>
                                    </div>
                                </div>
                                <div class="services-explore-more">
                                    <a href="worker-visa.html">explore more</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- featured-imagebox-post end -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- featured-imagebox-post -->
                    <div class="featured-imagebox featured-imagebox-services style1">
                        <!-- featured-thumbnail -->
                        <div class="featured-thumbnail">
                            <img class="img-fluid" src="images/services/services-2-896x590.png" alt="blog_img">
                        </div><!-- featured-thumbnail end-->
                        <div class="featured-details-wrap">
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><a href="free-visa.html" tabindex="0">Free Visa Enquiry</a></h3>
                                </div>
                            </div>
                            <div class="featured-explore-more">
                                <a href="free-visa.html">explore more</a>
                            </div>
                        </div>
                        <div class="services-details-wrap">
                            <div class="services-details-box">
                                <div class="services-content">
                                    <div class="services-title">
                                        <h3><a href="free-visa.html" tabindex="0">Free Visa Enquiry</a></h3>
                                    </div>
                                    <div class="services-desc">
                                        <p>Visa that grants the holder authorization to accept work employment in a foreign countries…</p>
                                    </div>
                                </div>
                                <div class="services-explore-more">
                                    <a href="free-visa.html">explore more</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- featured-imagebox-post end -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- featured-imagebox-post -->
                    <div class="featured-imagebox featured-imagebox-services style1">
                        <!-- featured-thumbnail -->
                        <div class="featured-thumbnail">
                            <img class="img-fluid" src="images/services/services-6-896x590.png" alt="blog_img">
                        </div><!-- featured-thumbnail end-->
                        <div class="featured-details-wrap">
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><a href="student-visa.html" tabindex="0">Student Visas</a></h3>
                                </div>
                            </div>
                            <div class="featured-explore-more">
                                <a href="student-visa.html">explore more</a>
                            </div>
                        </div>
                        <div class="services-details-wrap">
                            <div class="services-details-box">
                                <div class="services-content">
                                    <div class="services-title">
                                        <h3><a href="student-visa.html" tabindex="0">Student Visas</a></h3>
                                    </div>
                                    <div class="services-desc">
                                        <p>Generally intended for individuals entering a country for the purposes of conducting business…</p>
                                    </div>
                                </div>
                                <div class="services-explore-more">
                                    <a href="student-visa.html">explore more</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- featured-imagebox-post end -->
                </div>
            </div>
        </div>
    </section>
    <!--services-section end-->

</div><!-- site-main end-->
@endforeach
@endsection
