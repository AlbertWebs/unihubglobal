@extends('front.master')

@section('content')
@foreach ($Study as $study)


  <!-- page-title -->
  <div class="" style="position: relative; margin-top:180px">

        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="prt-page-title-row-heading">
                        <div class="page-title-heading" style="text-align: center; color:#365cf1 !important">
                            <h2 style="text-align: center; color:#365cf1 !important; font-weight:100" class="title">{{$study->title}}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>
<!-- page-title end -->

<!--site-main start-->
<div class="site-main">
    {{--  --}}
          <!-- about-us-section -->
          <section class="prt-row about01-about-section clearfix">
            <div class="container">
                <div class="row g-0">

                    <div class="col-lg-8 align-self-center" style="margin:0 auto;">
                        <div class="pl-50 res-1199-pr-15 res-1199-pl-30 res-991-pl-15 res-991-mt-30">
                            <!-- section title -->
                            <div class="section-title mb-15">
                                {{-- <div class="title-header">
                                    <h3>Why Choose Us</h3>
                                    <h2 class="title">Why choose truvik <span class="text-base-skin"> Visa ?</span></h2>
                                </div> --}}
                                <div class="title-desc">
                                    {!!html_entity_decode($study->content)!!}
                                    <p>

                                    </p>
                                </div>
                            </div><!-- section title end -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-us-section-end -->
    {{--  --}}

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
    <?php
        $Universities = DB::table('universities')->where('country',$study->country)->get();
    ?>

    @if($Universities->isEmpty())

    @else
    <!-- immigration-and-services-section -->
    <section class="prt-row home01-immigration-and-services-section clearfix">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-10 m-auto">
                    <!--section-title-->
                    <div class="section-title title-style-center_text">
                        <div class="title-header">
                            <h2 class="title" style="text-align: center; color:#365cf1 !important; font-weight:100">OUR {{$study->country}} PARTNERS <span> </span></h2>
                        </div>
                    </div><!--section-title end-->
                </div>
            </div>

            <div class="row mt_15">
                @foreach ($Universities as $uni)
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <!-- featured-imagebox -->
                    <div class="featured-imagebox featured-imagebox-portfolio style4" >
                        <div class="featured-imagebox-wrapper">
                            <div class="featured-thumbnail" style="border: none">
                                <img style="max-height:216px;" width="656" height="484" class="img-fluid" src="{{url('/')}}/uploads/universities/{{$uni->image}}" alt="image">
                            </div>
                        </div>
                    </div><!-- featured-imagebox end-->
                    <div style="text-align: center">
                        <h4 style="min-height: 60px;">{{$uni->name}}</h4>
                        <h6>
                            {{$uni->country}}
                        </h6>
                        <a class="prt-btn prt-btn-size-sm prt-btn-shape-square prt-btn-style-fill prt-btn-color-skincolor" href="{{url('/')}}/study-abroad/{{$study->country}}/{{$uni->slung}}" tabindex="0">Learn More</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- immigration-and-services-section-end -->
    @endif

</div><!-- site-main end-->
@endforeach
@endsection
