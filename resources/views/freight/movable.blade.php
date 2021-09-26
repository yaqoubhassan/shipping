@extends('layout.master')
@section('title', 'Movable & Haulage')
@section('links')
    @include('layout.links')
@stop
@section('body')
{{-- Navigation --}}
@section('breadcrumb', 'Movable & Haulage')
    @include('layout.nav')

<!-- Section Start - Who We Are -->
<section class='whoweare padding-bottom-50' id='whoweare'>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 whoweare-pic">
                <img src="{{asset('img/movable.jpg')}}" class="img-responsive" alt="Who We Are">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 whoweare-info">
                <h1 class="heading left-align">Movable & Haulage</h1>
                <div class="headul left-align"></div>
                <p>We offer professional relocation services to diplomats, local and international companies such as mining etc. Our trusted
                moving experts undertakes safe handling of of your goods and properties to any destination national or international.</p>
                <p>At Prime Safeguarding & Shipping, we can manage the movement of your cargo from port to port, from port to door and from door to door. We deliver on time and be rest assured your shipment would arrive in the same piece it was shipped. We do not compromise on our integrity.</p>
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
