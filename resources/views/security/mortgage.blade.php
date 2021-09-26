@extends('layout.master')
@section('title', 'Commercial Mortgage')
@section('links')
    @include('layout.links')
@stop
@section('body')
{{-- Navigation --}}
@section('breadcrumb', 'Commercial Mortgage')
    @include('layout.nav')

<!-- Section Start - Who We Are -->
<section class='whoweare padding-bottom-50' id='whoweare'>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 whoweare-pic">
                <img src="{{asset('img/mortgage.jpg')}}" class="img-responsive" alt="Who We Are">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 whoweare-info">
                <h1 class="heading left-align">Commercial Mortgage</h1>
                <div class="headul left-align"></div>
                <p>We are one of the leading boutique financial advisory firms, specializing in structuring the sale of performing, sub-performing,
                non-performing and charged-off residential, commercial, C&I and consumer loan portfolios, CRE debt and equity placement and
                providing cash sale and transaction management services.</p>
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
