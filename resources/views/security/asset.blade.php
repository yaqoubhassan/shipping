@extends('layout.master')
@section('title', 'Asset Security')
@section('links')
    @include('layout.links')
@stop
@section('body')
{{-- Navigation --}}
@section('breadcrumb', 'Asset Security')
    @include('layout.nav')

<!-- Section Start - Who We Are -->
<section class='whoweare padding-bottom-50' id='whoweare'>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 whoweare-pic">
                <img src="{{asset('img/asset.jpg')}}" class="img-responsive" alt="Who We Are">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 whoweare-info">
                <h1 class="heading left-align">Asset Security</h1>
                <div class="headul left-align"></div>
                <p>We provide trusted security solutions and scalable technology solutions that help protect assets under our care. Asset Security
                aims to provide exceptional Service and Value in designing and implementing world-class security solutions that exceeds Client
                Satisfaction. </p>
                <p>We protect assests with te latest technology that makes it easy to step trace assets-in-safes. We already understand that
                assets in our care has appreciating values and therefore needs to be protect and this is stated in our code of operation.</p>
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
