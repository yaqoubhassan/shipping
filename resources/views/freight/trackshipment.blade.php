@extends('layout.master')
@section('title', 'Track Shipment')
@section('links')
    @include('layout.links')
@stop
@section('body')
<!-- Navigation -->

@section('breadcrumb', 'Track Shipment')
    @include('layout.nav')

<!-- Section Start - Tracking App -->
<section class='bg-lightgray' id='tracking-app-mobile'>
    <div class="container">
        <div class="row">
            <h1 class="heading">Tracking your shipment</h1>
            <div class="headul"></div>
            <p class="subheading">Track your LTL, truckload, or intermodal shipment by entering your tracking number below to get instant freight tracking information.
            </p>
        </div>
    </div>
</section>
<!-- Section End - Tracking App -->

<!-- Section Start - Track Your Order -->
<section class='track_order parallax ' id='track_order'>
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="track-order">
                <div class="track-logo transition">
                    <i class="icon icon-logo"></i>
                </div>
                <h1 class="heading">Track Your Shipment</h1>
                <p class="subheading">ENTER YOUR TRACKING NUMBER FOR INSTANT SEARCH</p>

                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                    @if(count($errors) > 0)
                        @foreach($errors->all() as $error)
                            <p class="text-danger text-center">{{$error}}</p>
                        @endforeach
                    @endif
                    <form class="track-form" id="tracking-form" data-url="{{route('track-shipment')}}" data-image="{{asset('img/pleasewait.gif')}}">
                        @if(count($errors) > 0)
                            <input type="text" name='tracking_number' placeholder="Tracking Number" value="{{$number}}">
                        @else
                            <input type="text" name='tracking_number' placeholder="Tracking Number">
                        @endif
                        <i class="icon icon-magnify"></i>
                    </form>
                </div>
            </div>

        </div>

    </div>
</section>
<!-- Section End - Track Your Order -->

<!-- Footer -->
    @include('layout.footer')
@stop
@section('scripts')
    @include('layout.scripts')
<script src="{{asset('js/customjs.js')}}"></script>

@stop
