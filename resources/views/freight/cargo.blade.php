@extends('layout.master')
@section('title', 'Cargo Handling')
@section('links')
    @include('layout.links')
@stop
@section('body')
{{-- Navigation --}}
@section('breadcrumb', 'Cargo Handling')
    @include('layout.nav')

<!-- Section Start - Who We Are -->
<section class='whoweare padding-bottom-50' id='whoweare'>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 whoweare-pic">
                <img src="{{asset('img/cargo.jpg')}}" class="img-responsive" alt="Who We Are">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 whoweare-info">
                <h1 class="heading left-align">Cargo Handling</h1>
                <div class="headul left-align"></div>
                <p>Prime Safeguarding & Shipping handles cargo for all our network partners including airlines and shipping lines. If you want to assure the safety
                of your cargo to your client there are well tailored solutions for free hand handling and consolidation with our total insurance
                cover on goods in transit.</p>
                <p>Don’t leave your cargo unprotected. Cargo Insurance comes in different types with different exclusions and you need the proper
                insurance for your specific shipments. Prime Safeguarding & Shipping’s friendly and professional staff will take the complications out
                of insuring your cargo so you can be assured that your imports and exports are covered in the event of loss or damage.</p>
            </div>
        </div>
    </div>
</section>
<!-- Section End - Who We Are -->

<!-- Footer -->
    @include('layout.footer')
@stop
@section('scripts')
    @include('layout.scripts')
<script src="{{asset('js/customjs.js')}}"></script>




@stop
