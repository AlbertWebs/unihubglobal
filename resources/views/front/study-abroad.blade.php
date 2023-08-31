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
                                <a title="Homepage" href="{{url('/')}}">Home</a>
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

    <!-- services01-second-section -->
    <section class="prt-row padding_top_zero-sectiond services01-second-section clearfix">
        <div class="container-fluid">
            <div class="row g-0 row-equal-height prt-vertical_sep style2">
                <div class="col-lg-3 col-md-4 col-sm-8 col-12">
                    <div class="featured-icon-box style10 bg-base-skin res-575-pt-40">
                        <div class="featured-icon">
                            <div class="prt-icon prt-icon_element-size-md">
                                <i class="fa fa-globe"></i>
                            </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3>GLOBAL EDGE</h3>
                            </div>
                            <div class="featured-desc">
                                <p>
                                    The quality of education provided by {{$study->country}} academic institutions is acknowledged worldwide.<br>
                                    The teaching forces of these institutions are leading authorities in their respective fields.<br>
                                    The quality of the research programs along with the resources available and the faculty ensures that the institutions have high standards.<br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-8 col-12">
                    <div class="featured-icon-box style10 bg-base-dark">
                        <div class="featured-icon">
                            <div class="prt-icon prt-icon_element-size-md">
                                <i class="fa fa-check"></i>
                            </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3>MORE CHOICE</h3>
                            </div>
                            <div class="featured-desc">
                                <p>
                                    More than 4000 institutions offer undergraduate, post graduate and doctorate degrees.<br>
                                    One can specialize in any desired area of focus.<br>
                                    The {{$study->country}} education system has variety of academic & social environments which allow the student to build up in all aspects.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-8 col-12">
                    <div class="featured-icon-box style10 bg-base-grey">
                        <div class="featured-icon">
                            <div class="prt-icon prt-icon_element-size-md">
                                <i class="fa fa-money"></i>
                            </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3>AFFORDABLE</h3>
                            </div>
                            <div class="featured-desc">
                                <p>
                                    A high-quality education provides excellent groundwork for one's future.<br>
                                    Gain practical experience alongside your studies with the opportunity to work part-time weekly during the course and full-time during breaks.<br>
                                    Various forms of financial support such as aid, scholarships, and assistantships make education more accessible.<br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-8 col-12">
                    <div class="featured-icon-box style10 bg-base-light res-575-pb-40">
                        <div class="featured-icon">
                            <div class="prt-icon prt-icon_element-size-md">
                                <i class="fa fa-lightbulb-o "></i>
                            </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3>FLEXIBLE</h3>
                            </div>
                            <div class="featured-desc">
                                <p>
                                    The education system in question offers great flexibility in selecting courses at the college or university level.<br>
                                    Students have the option to switch from one course or academic track to another, as well as transfer between different educational institutions.<br>
                                    This characteristic sets apart this education system from those in various other nations.<br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- services01-second-section-end -->

</div><!-- site-main end-->
@endforeach
@endsection
