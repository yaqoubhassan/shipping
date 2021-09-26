@extends('layout.master')
@section('title', 'About Us')
@section('links')
    @include('layout.links')
@stop
@section('body')
{{-- Navigation --}}
    @section('breadcrumb', 'About Us')
    @include('layout.nav')

    <!-- Section Start - Who We Are -->
    <section class='whoweare padding-bottom-50' id='whoweare'>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 whoweare-pic">
                    <img src="img/who-we-are.jpg" class="img-responsive" alt="Who We Are">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 whoweare-info">
                    <h1 class="heading left-align">Who We Are</h1>
                    <div class="headul left-align"></div>
                    <p>Prime Safeguarding & Shipping was founded to create a better way for people and businesses to ship freight as well as handle all security concerns of our clients. There were countless carriers
                    to choose from, but there was no way to compare them side by side. That meant you had to either spend hours online or on
                    the phone, comparing rates and carriers, or just book with one carrier and hope you chose the best possible option. We were
                    the first to solve this dilemma by developing our own patented technology. It disrupted the freight industry and forever
                    changed how people and businesses ship freight. Today, we’ve quoted more than 50 million shipments, delivering to virtually
                    every corner of North America.</p>
                    <p>For your shipping and security concerns, contact our team of competent experts to take care of you.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Section End - Who We Are -->

    <!-- Section Start - Features -->
    <section class='padding-top-0'>
        <div class="container">
            <div class="row">
                <div class="features-wrap features-small ">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="row">


                            <!-- Feature - Start -->
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 centered text-center feature inviewport animated delay1" data-effect="fadeInUp">
                                <h1 class="heading left-align">What we do</h1>
                                <div class="icon-wrap">
                                    <i class="icon icon-air6"></i>
                                </div>
                                <div class="info">
                                    <h5 class="title">Air Freight</h5>
                                    <p>We provide quality logistic and transport services.</p>
                                </div>
                            </div>
                            <!-- Feature - End -->



                            <!-- Feature - Start -->
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 centered text-center feature inviewport animated delay2" data-effect="fadeInUp">
                                <div class="icon-wrap">
                                    <i class="icon icon-boat17"></i>
                                </div>
                                <div class="info">
                                    <h5 class="title">Ocean Freight</h5>
                                    <p>We provide quality logistic and transport services.</p>
                                </div>
                            </div>
                            <!-- Feature - End -->



                            <!-- Feature - Start -->
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 centered text-center feature inviewport animated delay3" data-effect="fadeInUp">
                                <div class="icon-wrap">
                                    <i class="icon icon-delivery18"></i>
                                </div>
                                <div class="info">
                                    <h5 class="title">Road Freight</h5>
                                    <p>We provide quality logistic and transport services.</p>
                                </div>
                            </div>
                            <!-- Feature - End -->

                            <!-- Feature - Start -->
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 centered text-center feature inviewport animated delay2" data-effect="fadeInUp">
                                <div class="icon-wrap">
                                    <i class="icon icon-locked14"></i>
                                </div>
                                <div class="info">
                                    <h5 class="title">Asset Security</h5>
                                    <p>We secure your asset over the period you trust us with it.</p>
                                </div>
                            </div>
                            <!-- Feature - End -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Section End - Features -->

<!-- Footer -->
    @include('layout.footer')

@stop
@section('scripts')
    @include('layout.scripts')
<script src="{{asset('js/customjs.js')}}"></script>

@stop
