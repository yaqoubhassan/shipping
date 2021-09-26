@extends('layout.master')
@section('title', 'Hedge Accounting')
@section('links')
    @include('layout.links')
@stop
@section('body')
{{-- Navigation --}}
@section('breadcrumb', 'Hedge Accounting')
    @include('layout.nav')

<!-- Section Start - Who We Are -->
<section class='whoweare padding-bottom-50' id='whoweare'>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 whoweare-pic">
                <img src="{{asset('img/hedge.jpg')}}" class="img-responsive" alt="Who We Are">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 whoweare-info">
                <h1 class="heading left-align">Hedge Accounting</h1>
                <div class="headul left-align"></div>
                <p>Our hedge accounting team is dedicated to assisting clients in successfully navigating the complexities
                of ASC 815 (formerly FAS 133) or IAS 39 and helping them align the optimal economic hedging structures with the most appropriate
                and favorable accounting treatments. </p>
                <p>By matching the timing of the earnings recognition of the derivative with the hedged asset, liability, or forecasted transaction,
                companies can significantly reduce or eliminate earnings volatility that otherwise would be recognized in the financial statements.</p>
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
