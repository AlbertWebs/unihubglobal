@extends('front.master')

@section('content')
   <!-- page-title -->
   <div class="prt-titlebar-wrapper prt-bg" style="position: relative; margin-top:80px">
    <div class="prt-titlebar-wrapper-bg-layer prt-bg-layer"></div>
    <div class="prt-titlebar-wrapper-inner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="prt-page-title-row-heading">
                        <div class="page-title-heading">
                            <h2 class="title">Contact Us</h2>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <i class="flaticon-home"></i>
                            <span>
                                <a title="Homepage" href="{{url('/')}}">Home</a>
                            </span>
                            <div class="prt-sep"> - </div>
                            <span>Contact Us</span>
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

    <!-- contact-form-section -->
    <section class="prt-row padding_bottom_zero-section contact-us-contact-form-section clearfix">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6">
                    <div class="col-bg-img-thirty-seven prt-bg prt-col-bgimage-yes col-bg-img-six" style="background-image: url('theme/images/pexels-josh-hild-2422588.jpg'); background-position: 50% 50%; background-repeat: no-repeat; background-size: cover; border-top-left-radius:10px; border-bottom-left-radius:10px">
                        <div class="prt-col-wrapper-bg-layer prt-bg-layer"></div>
                        <div class="layer-content"></div>
                    </div>
                    <img class="img-fluid prt-equal-height-image" src="{{asset('theme/images/pexels-josh-hild-2422588.jpg')}}" alt="col-bgimage-37">
                </div>
                <div class="col-lg-6">
                    <div class="bg-base-grey spacing-25">
                        <!-- section title -->
                        <div class="section-title style7">
                            <div class="title-header">
                                <h2 class="title">Have be any question? <br>feel free to <span>Contact</span></h2>
                            </div>
                        </div><!-- section title end -->
                        <form action="#" class="contact_form clearfix" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <input name="name" type="text" value="" placeholder="Your Full Name" required="required">
                                </div>

                                <div class="col-md-12">
                                    <input name="email" type="text" value="" placeholder="Email Address" required="required">
                                </div>
                                <div class="col-md-12">
                                    <select id="selectbox">
                                        <option value="Direct Registration">Direct Registration</option>
                                        <option value="Migration">Migration</option>
                                        <option value="Visa Services">Visa Services</option>
                                        <option value="Placements">Placements</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <textarea name="message" rows="4" placeholder="Your Message" required="required"></textarea>
                                </div>
                                <div class="mt-5">
                                    <button class="submit prt-btn prt-btn-size-md prt-btn-shape-round prt-btn-style-fill prt-btn-color-skincolor" type="submit" value="submit">Submit Here</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-form-section-end -->

    <!-- contact-us-iconbox-section -->
    <section class="prt-row contact-us-iconbox-section clearfix">
        <div class="container">
            <div class="row g-0 prt-vertical_sep">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="featured-icon-box icon-align-top-content style19">
                        <div class="featured-icon">
                            <div class="prt-icon">
                                <i class="flaticon-phone-call"></i>
                            </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3>call us on</h3>
                            </div>
                            <div class="featured-desc">
                                <a href="tel:+351 931 371 105">+351 931 371 105</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="featured-icon-box icon-align-top-content style19">
                        <div class="featured-icon">
                            <div class="prt-icon">
                                <i class="flaticon-email"></i>
                            </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3>Email</h3>
                            </div>
                            <div class="featured-desc">
                                <a href="mailto:info@unihubglobal.com">info@unihubglobal.com</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="featured-icon-box icon-align-top-content style19">
                        <div class="featured-icon">
                            <div class="prt-icon">
                                <i class="flaticon-clock"></i>
                            </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3>Opening hours</h3>
                            </div>
                            <div class="featured-desc">
                                <span>Mon-Sat: 09.00 to 07.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="featured-icon-box icon-align-top-content style19">
                        <div class="featured-icon">
                            <div class="prt-icon">
                                <i class="flaticon-share"></i>
                            </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3>Share</h3>
                            </div>
                            <div class="featured-desc">
                                <span>Facebook, Twitter, Instagram</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-us-iconbox-section-end -->

    <!-- our-branches-section -->
    <section class="prt-row contact-us-our-branches-section bg-base-grey clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- section title -->
                    <div class="section-title title-style-center_text style5">
                        <div class="title-header">
                            <h2 class="title">10+ Across worldwide <span>Branches</span></h2>
                        </div>
                    </div><!-- section title end -->
                </div>
            </div>
            <div class="row mt_15">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="featured-imagebox featured-imagebox-contact">
                        {{-- <div class="featured-thumbnail">
                            <img class="img-fluid" src="images/contact-us/01.png" width="896" height="484" alt="contact-us-01">
                        </div> --}}
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3>New york hospital</h3>
                            </div>
                            <div class="featured-desc">
                                <ul class="prt-list style9">
                                    <li>
                                        <label>Address:</label><span>Nb St, Lisbon, Portugal</span>
                                    </li>
                                    <li>
                                        <label>Contact Number:</label><a href="tel:+351 931 371 105">+351 931 371 105</a>
                                    </li>
                                    <li>
                                        <label>Email Us:</label><a href="mailto:supportrt@example.com">supportrt@example.com</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="featured-bottom">
                                <a href="https://goo.gl/maps/q7ANcwsbA836pCaa9" class="prt-btn btn-inline"><span>View Directions</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="featured-imagebox featured-imagebox-contact">
                        {{-- <div class="featured-thumbnail">
                            <img class="img-fluid" src="images/contact-us/02.png" width="896" height="484" alt="contact-us-02">
                        </div> --}}
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3>Atlanta hospital</h3>
                            </div>
                            <div class="featured-desc">
                                <ul class="prt-list style9">
                                    <li>
                                        <label>Address:</label><span>Priana St Porto, Portugal</span>
                                    </li>
                                    <li>
                                        <label>Contact Number:</label><a href="tel:+351 931 371 105">+351 931 371 105</a>
                                    </li>
                                    <li>
                                        <label>Email Us:</label><a href="mailto:supportrt@example.com">supportrt@example.com</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="featured-bottom">
                                <a href="https://goo.gl/maps/q7ANcwsbA836pCaa9" class="prt-btn btn-inline"><span>View Directions</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our-branches-section end-->

</div><!-- site-main end-->
@endsection
