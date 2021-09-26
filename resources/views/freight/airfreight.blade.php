@extends('layout.master')
@section('title', 'Sea & Air Freight')
@section('links')
    @include('layout.links')
@stop
@section('body')
{{-- Navigation --}}
@section('breadcrumb', 'Sea & Air Freight')
    @include('layout.nav')

<!-- Section Start - Who We Are -->
<section class='whoweare padding-bottom-50' id='whoweare'>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 whoweare-pic">
                <img src="{{asset('img/air.jpg')}}" class="img-responsive" alt="Who We Are">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 whoweare-info">
                <h1 class="heading left-align">Sea & Air Freight</h1>
                <div class="headul left-align"></div>
                <p>At Prime Safeguarding & Shipping we understand the importance of providing a reliable and consistent international freight service. At Prime Safeguarding & Shipping, we
                have developed our full range of freight forwarding services over so many years, and can organise the transportation and
                management of your cargo.</p>
                <p>The fastest and safest way to import and export goods internationally is by air. Prime Safeguarding & Shipping’s air cargo specialists
                will assess your specific needs and customize our air services for your large-scale project or smaller express shipment door
                to door, terminal to terminal, or anything in-between.</p>
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
