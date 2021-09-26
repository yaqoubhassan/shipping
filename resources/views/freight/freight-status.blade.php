<div class="stepwizard-row setup-panel">
    <div class="stepwizard-step">
        <a href="javascript:void(0)" type="button" class="btn btn-@yield('active1') btn-circle">Picked Up <i class="fas fa-box" style="margin-left: 10px; font-size: 15px;"></i></a>
    </div>
    <div class="stepwizard-step">
        <a href="javascript:void(0)" type="button" class="btn btn-@yield('active2') btn-circle" >@yield('current-status') <i class="fas fa-truck" style="margin-left: 10px; font-size: 15px;"></i></a>
    </div>
    <div class="stepwizard-step">
        <a href="javascript:void(0)" type="button" class="btn btn-@yield('active3') btn-circle" >Delivered <i class="fa fa-check" style="margin-left: 10px; font-size: 15px;"></i></a>
    </div>
</div>
