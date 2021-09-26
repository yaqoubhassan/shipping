@extends('layout.master')
@section('title', 'Home')
@section('links')
    @include('layout.links')
@stop
@section('body')
    {{-- Navigation --}}
    @section('breadcrumb', 'Security & Logistics')
    @section('add-tracking')
        @include('layout.tracking')
    @stop
    @include('layout.nav')

    <!-- Section Start - Features -->
    <section class='features' id='features'>
        <div class="container">
            <div class="row">
                <h1 class="heading">Features</h1>
                <div class="headul"></div>
                <p class="subheading">No job is too small or large for us. We specialize in international air and ocean freight, as well as domestic shipments. We comply with TSA regulations and offer custom export documentation</p>

                <div class="features">

                    <!-- Feature - Start -->
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 feature-block inviewport animated delay1" data-effect="fadeInUp">
                        <div class="icon-wrap">
                            <i class="icon icon-airplane68"></i>
                        </div>
                        <div class="info">
                            <h4 class="title">Air Freight Logistics</h4>
                            <p>The arrival and departure times of flights are highly reliable, as our airlines tend to be very on top
                                of their schedules.</p>
                        </div>
                    </div>
                    <!-- Feature - End -->


                    <!-- Feature - Start -->
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 feature-block inviewport animated delay2" data-effect="fadeInUp">
                        <div class="icon-wrap">
                            <i class="icon icon-frontal19"></i>
                        </div>
                        <div class="info">
                            <h4 class="title">Road Freight Logistics</h4>
                            <p>Road freight is the most widespread mode of goods transportation these days. Transporting your goods
                                by road freight has many merits.</p>
                        </div>
                    </div>
                    <!-- Feature - End -->


                    <!-- Feature - Start -->
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 feature-block inviewport animated delay1" data-effect="fadeInUp">
                        <div class="icon-wrap">
                            <i class="icon icon-train20"></i>
                        </div>
                        <div class="info">
                            <h4 class="title">Rail Freight Logistics</h4>
                            <p>We keep the goods moving, because they can be sent as soon as they are ready rather than waiting
                                until the container is full.</p>
                        </div>
                    </div>
                    <!-- Feature - End -->


                    <!-- Feature - Start -->
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 feature-block inviewport animated delay2" data-effect="fadeInUp">
                        <div class="icon-wrap">
                            <i class="icon icon-ocean3"></i>
                        </div>
                        <div class="info">
                            <h4 class="title">Ocean Freight Logistics</h4>
                            <p>We contribute to the price of transporting in the fact that trains have much more space and are
                                able to carry larger volumes of cargo.</p>
                        </div>
                    </div>
                    <!-- Feature - End -->

                </div>
            </div>

        </div>
    </section>
    <!-- Section End - Features -->

    <!-- Section Start - Our Mission -->
    <section class='mission' id='mission'>
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 text-area">
                    <h1 class="heading left-align">Our Mission</h1>
                    <div class="headul left-align"></div>
                    <p>Our business is only as good as our reputation, and our reputation was built on a solid foundation of honesty, integrity,
                    and dependability. We know that the only means to satisfying our customers' expectations is to provide them with exceptional
                    service, and we do this by cultivating strong relationships with the industry's most exceptional shippers and carriers that
                    share our passion for being the best at what they do.</p>
                    <a href="{{route('about')}}" class="btn btn-primary">Know More</a>
                </div>
            </div>

        </div>
    </section>
    <!-- Section End - Our Mission -->

    <!-- Section Start - Our Clients -->
    <section class='clients bg-primary white-text' id='clients'>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <h1 class="heading left-align">Our Clients</h1>
                    <div class="headul left-align"></div>
                    <p class="subheading left-align">Prime Safeguarding & Shipping is a unique venture as it provides technical advice on security, logistics and shipping – all under one roof.From a simple cargo survey to a complex admiralty claim, Prime Safeguarding & Shipping offers an unmatched product, price and personalised service.</p>

                    <!-- Client Image - Start -->
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 client inviewport animated delay1" data-effect="fadeInUp">
                        <h4><img alt="client-logo" src="img/client-1.png" class="img-responsive"></h4>
                    </div>
                    <!-- Client Image - End -->
                    <!-- Client Image - Start -->
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 client inviewport animated delay2" data-effect="fadeInUp">
                        <h4><img alt="client-logo" src="img/client-2.png" class="img-responsive"></h4>
                    </div>
                    <!-- Client Image - End -->
                    <!-- Client Image - Start -->
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 client inviewport animated delay3" data-effect="fadeInUp">
                        <h4><img alt="client-logo" src="img/client-3.png" class="img-responsive"></h4>
                    </div>
                    <!-- Client Image - End -->
                    <!-- Client Image - Start -->
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 client inviewport animated delay4" data-effect="fadeInUp">
                        <h4><img alt="client-logo" src="img/client-4.png" class="img-responsive"></h4>
                    </div>
                    <!-- Client Image - End -->

                </div>
            </div>

        </div>
    </section>
    <!-- Section End - Our Clients -->

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
                    <p>Prime Safeguarding & Shipping consists of a team of very talented, dedicated, and knowledgable freight shipping, logistics,
                    and supply-chain specialists. Manufacturers, growers, producers, distributors, retailers, security experts, industrial suppliers, military
                    factions, government factions .... businesses large and small .... all trust us with moving their goods from point A to point
                    B and beyond because they have confidence in that we know the ins and outs of moving and storing goods safely, securely,
                    and expeditiously throughout the U.S., Mexico, Canada, and worldwide.</p>
                    <a href="{{route('about')}}" class="btn btn-primary">Know More</a>
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



                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Section End - Features -->

    <!-- Section Start - Track Your Order -->
    <section class='track_order parallax ' id='track_order'>
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="track-order">
                    <div class="track-logo transition">
                        <i class="icon icon-logo"></i>
                    </div>
                    <h1 class="heading">Track Your Order</h1>
                    <p class="subheading">ENTER YOUR TRACK NUMBER FOR INSTANT SEARCH</p>

                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                        @include('layout.tracking')
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- Section End - Track Your Order -->

    <!-- Section Start - Service Estimate -->
    <section class='estimate' id='estimate'>
        <div class="estimate-wrap">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-sm-10  col-xs-offset-1 col-xs-10 ">
                    <h1 class="heading left-align">Service Estimate</h1>
                    <div class="headul left-align"></div>
                    <p class="subheading left-align">Contact us for your service estimates for all your shipping needs. We do not only provide competitve services but at costs to ease your stress. We have you covered, whatever your shipping need may be, we will help you choose the best service for you.c</p>
                </div>

                <div class="col-lg-4 col-md-4 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-sm-10  col-xs-offset-1 col-xs-10 ">

                    <!-- Estimate Form - Start -->
                    {{-- <div class='row'>
                        <form action='#' method='post'>
                            <div class='col-xs-12'><label>Load Type</label><input type='text' placeholder='' class='transition' id='est_load_type'></div>
                            <div class='col-xs-6'><label>Quantity</label><input type='text' placeholder='' class='transition' id='est_qty'></div>
                            <div class='col-xs-6'><label>Weight</label><input type='text' placeholder='' class='transition' id='est_weight'></div>
                            <div class='col-xs-4'><label>Length</label><input type='text' placeholder='' class='transition' id='est_length'></div>
                            <div class='col-xs-4'><label>Height</label><input type='text' placeholder='' class='transition' id='est_height'></div>
                            <div class='col-xs-4'><label>Width</label><input type='text' placeholder='' class='transition' id='est_width'></div>
                            <div class='col-xs-12'><label>Total (Auto Calculate)</label><input type='text' placeholder='' class='transition' id='est_total'></div>
                        </form>
                    </div> --}}
                    <!-- Estimate Form - End -->
                </div>

                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 pic">
                    <img src="img/estimate-fork-blue.jpg" class="img-responsive style-dependent" alt="Estimate Fork Image">
                </div>
            </div>
        </div>

    </section>
    <!-- Section End - Service Estimate -->

    <!-- Section Start - Testimonials -->
    <section class='testimonials parallax ' id='testimonials'>
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row">

                <h1 class="heading">Testimonials</h1>
                <div class="headul"></div>

                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                    <div class="row">

                        <!-- Testimonials Carousel - Start -->
                        <ul id="testimonial-carousel" class="owl-carousel">
                            <!-- Testimonial - Start -->
                            <li class="">
                                <h5 class="testi" data-id="testi-1">
                                    I used to think the best way to handle my freight was to go directly to the carriers to get rates and set up shipments.
                                    Boy was I wrong. My friend who introduced me to Prime Safeguarding & Shipping told me the best way to get rates and service was to work
                                    with a reputable third party logistics company and I have never regretted. </h5>
                                <div class="testi_by">
                                    <div class="pic">
                                        <img src="img/avatar-1.jpg" alt="User Avatar Image">
                                    </div>
                                    <div class="name">Kate Douglas</div>
                                    <div class="company">Aragon Co. In.</div>
                                </div>
                                <!-- <div class="tweet_by">Kate Douglas</div>
    	              <div class="tweet_time">1 day ago</div> -->
                            </li>
                            <!-- Testimonial - End -->
                            <!-- Testimonial - Start -->
                            <li class="">
                                <h5 class="testi" data-id="testi-2">
                                    When we started dealing with Prime Safeguarding & Shipping, I thought this was going to cost a lot of money, but in the end we saved over 11% on our previous shipping program and have
                                    incredible tools at our disposal to manage our freight. I felt like I had been driving a Pinto before and was now handed
                                    the keys to a Ferrari! </h5>
                                <div class="testi_by">
                                    <div class="pic">
                                        <img src="img/avatar-2.jpg" alt="User Avatar Image">
                                    </div>
                                    <div class="name">Jim Arthur</div>
                                    <div class="company">Mython Services Ltd.</div>
                                </div>
                                <!-- <div class="tweet_by">Jim Arthur</div>
    	              <div class="tweet_time">1 day ago</div> -->
                            </li>
                            <!-- Testimonial - End -->
                            <!-- Testimonial - Start -->
                            <li class="">
                                <h5 class="testi" data-id="testi-1">
                                    Prime Safeguarding & Shipping is one of the top logistics providers in the industry. and first class customer service and live by the
                                    'Never Say Never' attitude to accomplish every mission. </h5>
                                <div class="testi_by">
                                    <div class="pic">
                                        <img src="img/avatar-1.jpg" alt="User Avatar Image">
                                    </div>
                                    <div class="name">Kate Douglas</div>
                                    <div class="company">Aragon Co. In.</div>
                                </div>
                                <!-- <div class="tweet_by">Kate Douglas</div>
    	              <div class="tweet_time">1 day ago</div> -->
                            </li>
                            <!-- Testimonial - End -->
                            <!-- Testimonial - Start -->
                            <li class="">
                                <h5 class="testi" data-id="testi-2">
                                    Working with Prime Safeguarding & Shipping has truly been a blessing. Over the years we have worked with several companies competing
                                    for our freight. During that time I have had a lot of concern over my shipments. I must say that we now have a company now
                                    that really cares for and works for us unselfishly.</h5>
                                <div class="testi_by">
                                    <div class="pic">
                                        <img src="img/avatar-2.jpg" alt="User Avatar Image">
                                    </div>
                                    <div class="name">Jim Arthur</div>
                                    <div class="company">Mython Services Ltd.</div>
                                </div>
                                <!-- <div class="tweet_by">Jim Arthur</div>
    	              <div class="tweet_time">1 day ago</div> -->
                            </li>
                            <!-- Testimonial - End -->
                        </ul>
                        <!-- Testimonials Carousel - End -->
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- Section End - Testimonials -->

    <!-- Section Start - Get In Touch -->
    <section class='contact contact-small' id='contact'>
        <div class="container">
            <div class="row">
                <h1 class="heading">Get In Touch</h1>
                <div class="headul"></div>
                <p class="subheading">Do you have any Questions for us? Comments you would like to share with our company? Some concerns or you maybe want to share
                a feedback? Don't worry, we are here for you! We would love to hear from you! Fill out our application
                below and we will help. Prime Safeguarding & Shipping Freight will take care of all your freight needs fast and efficiently!</p>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">

                    <!-- Contact Form - Start -->
                    <div class='row'>
                        <form id="contactForm">
                            <div class='col-xs-6'><input required type='text' placeholder='Name' class='transition' name="name" id='c_name'></div>
                            <div class='col-xs-6'><input required type='email' placeholder='Email' class='transition' name="email" id='c_email'></div>
                            <div class='col-xs-12'><textarea required class='transition' placeholder='Message' name="message" id='c_message'></textarea></div>
                            <div id='response_email' class='col-xs-12'></div>
                            <div class='col-xs-4'><button type='button' class='btn btn-primary' id='sendContact' data-url="{{route('post-contact')}}" data-image="{{asset('img/pleasewait.gif')}}">Send Message</button></div>
                        </form>
                    </div>
                    <!-- Contact Form - End -->
                </div>



                <!--<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">-->
                <!--    <div class="contact-info">-->
                <!--        <i class="icon icon-envelope"></i>-->
                <!--        <div class="title">Email</div>-->
                <!--        <div class="value">info@primeservicesltd.com</div>-->
                <!--    </div>-->
                <!--    <div class="contact-info">-->
                <!--        <i class="icon icon-phone"></i>-->
                <!--        <div class="title">Phone</div>-->
                <!--        <div class="value">+(233) 207-294-641</div>-->
                <!--        <div class="value">+(233) 245-956-297</div>-->
                <!--    </div>-->
                <!--</div>-->


            </div>
        </div>
    </section>
    <!-- Section End - Get In Touch -->
    <!-- Footer -->
    @include('layout.footer')
@stop
@section('scripts')
    @include('layout.scripts')
    <script src="{{asset('js/customjs.js')}}"></script>
@stop
