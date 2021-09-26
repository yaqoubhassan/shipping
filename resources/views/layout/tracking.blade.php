<!-- Header Tracking Box - Start -->
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 white-wrap hidden-xs">
    <div class="white-box">
        <div class="track-order">
            <div class="track-logo transition">
                <i class="icon icon-logo"></i>
            </div>
            <h3 class="box-heading">Track Your Order</h3>
            <p class="box-tagline">ENTER YOUR TRACK NUMBER FOR INSTANT SEARCH</p>
            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-0 col-xs-offset-0">
                <form class="track-form" id="tracking-form" data-url="{{route('track-shipment')}}" data-image="{{asset('img/pleasewait.gif')}}">
                    <input type="text" name='tracking_number' placeholder="Tracking NUMBER">
                    <i class="icon icon-magnify"></i>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Header Tracking Box - End -->
