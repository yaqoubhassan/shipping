@extends('admin.layout.master')
@section('title','Dashboard')
@section('links')
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('css/lib/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('css/helper.css')}}" rel="stylesheet">
    <link href="{{asset('css/style 2.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('js/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css')}}"
    />
@stop

@section('body')
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
    			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        @include('admin.layout.nav')
        <!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <br><br><br>
                        <li> <a href="{{route('admin.page')}}" aria-expanded="false"><i class="fa fa-envelope"></i><span class="hide-menu">Dashboard</span></a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Details</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Home</li>
                        <li class="breadcrumb-item active">Details</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <!-- /# column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-title">
                                <h4>Details </h4>

                            </div>
                            <div class="text-center">
                                <button class="btn btn-success" style="margin-bottom: 30px;" id="addDetail">Add Details <i class='fa fa-plus-circle'></i></button>
                                <button class="btn btn-primary" style="margin-bottom: 30px;" onclick="location.href='{{route('admin.page')}}'"><i class='fa fa-arrow-left'></i> Back</button>
                            </div>
                            <div class="card-body" id="detailsTable">
                                @include('admin.view-details')
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /# row -->
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            @include('admin.layout.footer')
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    @include('admin.modal.detail')
    @include('admin.modal.confirm-detailsDelete')
    @include('admin.modal.edit-detail')
    @include('admin.modal.change-password')
@stop

@section('scripts')
    <script src="{{asset('js/lib/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('js/lib/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('js/lib/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{asset('js/jquery.slimscroll.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('js/sidebarmenu.js')}}"></script>
    <!--stickey kit -->
    <script src="{{asset('js/lib/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('js/scripts.js')}}"></script>
    <script src="{{asset('assets/js/admin.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bower_components/moment/min/moment.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js')}}"></script>
@stop