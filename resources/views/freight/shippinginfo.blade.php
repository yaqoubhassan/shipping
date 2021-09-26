@extends('layout.master')
@section('title', 'Shipping Information')
@section('links')
    @include('layout.links')
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom1.scss')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
@stop
@section('body')
{{-- Navigation --}}
@section('breadcrumb', 'Shipping Information')
    @include('layout.nav')

<!-- Section Start - Who We Are -->
<section class='whoweare padding-bottom-50' id='whoweare'>
    <div class="container-fluid" style="margin-top: 100px;">
        <div class="row">
            <div class="jumbotron">
                <div class="row">
                    <div class="col-xs-offset-1">
                        <span class="myh3Colored">Tracking Number: </span><span style="font-size: 20px;">{{$information->tracking_number}}</span>
                    </div>
                </div>
                <div class="row">
                    @if(count($details) > 0)
                    <div class="col-xs-offset-1 col-xs-5">
                        <span class="myPara"><p style="margin-bottom: 25px; margin-top: 50px; font-size: 16px;">
                            @php $last = 0; @endphp
                            {{$details[$last]->note}}
                        </p></span>
                    </div>
                    <div class="col-xs-5">
                        <div class="row">
                            <span><p style="font-size: 23px; color: #336; font-weight: 700;">Status</p></span>
                        </div>
                        <div class="row">
                            <span class="{{$details[$last]->current_status == 'Delivery Exception' ? 'text-danger' : 'myh3Colored'}}" style="font-weight: 400; font-size: 20px;">{{$details[$last]->current_status}}</span>
                        </div>
                        <div class="row" style="margin-top: 18px;">
                            @php $date = \Carbon\Carbon::parse($details[$last]->date)->toFormattedDateString();
                            @endphp
                            <p style="font-family: 'HelveticaNeueW01', Helvetica, Arial, sans-serif;font-size: 15px;color: #595959;">{{$date}}, {{$details[$last]->time}}</p>
                            <p style="font-family: 'HelveticaNeueW01', Helvetica, Arial, sans-serif;font-size: 15px;color: #595959;">{{$details[$last]->current_status}}</p>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 25px; margin-bottom: 50px;">
                    <center>
                    {{--@php dd($details[$last]->current_status); @endphp --}}
                        @section('active1','primary')
                        @section('current-status','In-Transit')
                        @if($details[$last]->current_status == 'Delivered') @section('active2','primary') @endif
                        @if($details[$last]->current_status == 'Delivery Exception')
                            @section('active2','danger') @section('current-status', 'Delivery Exception') @endif
                        @if($details[$last]->current_status == 'In-Transit' || $details[$last]->current_status == 'Out For Deliever')
                            @section('current-status', 'In-Transit')
                            @section('active2','primary')
                        @else
                            @section('active2','default')
                        @endif
                        @if($details[$last]->current_status == 'Delivered')
                            {{-- @php dd($details[$last]->current_status) @endphp --}}
                            {{-- @section('active2','success') --}}
                            @section('active3','success')
                        @else
                            @section('active3','default')
                        @endif
                        @include('freight.freight-status')
                    </center>
                </div>
                <div class="row">
                    <div class="col-xs-8 col-xs-offset-2" style="background-color: #fff; border-radius: 5px; padding: 20px;">
                        @foreach($details as $detail)
                            @php $date = \Carbon\Carbon::parse($detail->date)->toFormattedDateString();
                            @endphp
                            <p style="color: #336; font-weight: 600; font-size: 16px;">{{$date}}, {{$detail->time}}</p>
                            <p style="color: #336; font-size: 14px;">{{$detail->note}}</p>
                            <p style="color: #336; font-size: 14px;">{{$detail->description}}</p>
                            <hr>
                        @endforeach
                    </div>
                </div>
                <div class="row">
                    <center style="margin-top: 50px;">
                        <span style="color: #336; font-weight: 600;">Postal Product: </span><span style="margin-right: 30px;">{{$information->postal_product}}</span>
                        <span style="color: #336; font-weight: 600;">Features: </span><span style="margin-right: 30px;">{{$information->product_features}}</span>
                        <span style="color: #336; font-weight: 600;">Destination: </span><span style="margin-right: 30px;">{{$information->final_destination}}</span>
                    </center>
                </div>
                <div class="row">
                    <center style="margin-top: 50px;">
                        <span style="color: #336; font-weight: 600;">Sender: </span><span style="margin-right: 30px;">{{$information->sender}}</span>
                        <span style="color: #336; font-weight: 600;">Sender's Address: </span><span style="margin-right: 30px;">{{$information->sender_address}}</span>
                    </center>
                </div>
                <div class="row">
                    <center style="margin-top: 50px;">
                        <span style="color: #336; font-weight: 600;">Receiver: </span><span style="margin-right: 30px;">{{$information->receiver}}</span>
                        <span style="color: #336; font-weight: 600;">Receiver's Address: </span><span style="margin-right: 30px;">{{$information->receiver_address}}</span>
                    </center>
                </div>
                @else
                    <p class=“text-center”>No shipping information currently available for {{$information->tracking_number}}</p>
                @endif
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