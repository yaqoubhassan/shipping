@extends('layout.master')
@section('title', 'Contact Us')
@section('links')
    @include('layout.links')
@stop
@section('body')
    <!-- Navigation -->
    @section('breadcrumb', 'Contact Us')
    @include('layout.nav')

    <!-- Section Start - Get In Touch -->
    <section class='contact' id='contact'>
        <div class="container">
            <div class="row">
                <h1 class="heading">Get In Touch</h1>
                <div class="headul"></div>
                <p class="subheading">Do you have any Questions for us? Comments you would like to share with our company? Some concerns or you maybe want to share
                a feedback? Don't worry, we are here for you! We would love to hear from you! Give us a quick call or fill out our application
                below and we will help. Prime Safekeeping & Shipping will take care of all your freight needs fast and efficiently!</p>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">

                    <!-- Contact Form - Start -->
                    <div class='row'>
                        <form id="contactForm">
                            <div class='col-xs-12'><input type='text' placeholder='Name' class='transition' id='c_name' name="name" required></div>
                            <div class='col-xs-12'><input type='email' placeholder='Email' class='transition' id='c_email' name="email" required></div>
                            <div class='col-xs-12'><textarea class='transition' placeholder='Message' required id='c_message' name="message" style="resize: none;"></textarea></div>
                            <div id='response_email'
                                class='col-xs-12'></div>
                            <div class='col-xs-4'><button type='button' class='btn btn-primary' id='sendContact' data-url="{{route('post-contact')}}" data-image="{{asset('img/pleasewait.gif')}}">Send Message</button></div>
                        </form>
                    </div>
                    <!-- Contact Form - End -->
                </div>



                <!--<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-0 contact-full-info">-->
                <!--    <h5>Main Office</h5>-->
                <!--    <p>-->
                <!--        25 Kwadaso Street,<br> Ayiduase-Kumasi,<br> Ghana, 00233<br> Email: info@primeservicesltd.com<br> Phone: +(233) 207-294-641-->
                <!--    </p>-->
                <!--    <br>-->
                <!--    <h5>Regional Office</h5>-->
                <!--    <p>-->
                <!--        Al Quoz Industrial,<br> Area City,<br> Dubai<br> Email: info@primeservicesltd.com<br> Phone: +(971) 559-965-758-->
                <!--    </p>-->
                <!--</div>-->


            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('layout.footer')
@stop
@section('scripts')
    @include('layout.scripts')
    <script src="{{asset('js/customjs.js')}}"></script>
@stop
