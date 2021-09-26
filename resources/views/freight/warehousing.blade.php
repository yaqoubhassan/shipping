@extends('layout.master')
@section('title', 'Warehousing Services')
@section('links')
    @include('layout.links')
@stop
@section('body')
{{-- Navigation --}}
@section('breadcrumb', 'Warehousing Services')
    @include('layout.nav')

<!-- Section Start - Who We Are -->
<section class='whoweare padding-bottom-50' id='whoweare'>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 whoweare-pic">
                <img src="{{asset('img/ware.jpg')}}" class="img-responsive" alt="Who We Are">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 whoweare-info">
                <h1 class="heading left-align">Warehousing Services</h1>
                <div class="headul left-align"></div>
                <p>Prime Safeguarding & Shipping has over 47000 square meters of covered warehouse and 80,000 square meters of open space warehouse with warehouse management
                system to warehouse your cargo as well as collateral management. Our warehouses are staffed with experienced and trained
                personnel for reliable service.</p>
                <p>Prime Safeguarding & Shipping is your complete one-stop-shop for international shipping. With our new warehousing services, your import
                and export goods are in good hands. We store your goods until you need them, handle fulfillment, Amazon FBA prep, and even
                have pick and pack services.</p>
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
