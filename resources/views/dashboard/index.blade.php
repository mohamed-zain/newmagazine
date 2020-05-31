<!doctype html>
<html class="no-js " lang="en">

<!-- Mirrored from thememakker.com/wrap-theme/square/html/light/dashboard-rtl.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Oct 2018 06:52:49 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="sQuare Bootstrap 4 Angular 5 admin dashboard with ui kit.">

    <title>لوحة التحكم - المجلة الإلكترونية</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets3/plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets3/plugins/jquery-datatable/dataTables.bootstrap4.min.css') }}" />
    <!-- Custom Css -->
    <link href="{{ asset('assets3/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('assets3/plugins/bootstrap-select/css/bootstrap-select.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets2/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets2/css/rtl.css') }}">
    <link rel="stylesheet" href="{{ asset('assets2/css/color_skins.css') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <style type="text/css">

        .content {
            margin: 95px 15px 15px 15px;
            -moz-transition: .5s;
            -o-transition: .5s;
            -webkit-transition: .5s;
            transition: .5s;
            /* z-index: 9; */
            position: relative;
            border-radius: .55rem;
        }
        .modal-backdrop{
            position: inherit!important;
        }
        /*
        .rtl .form-control {

            border-radius: 30px !important;
            border-left: transparent !important;

        }*/
        .menu > ul > li {
            float: right;
            padding: 0;
            margin: 0;
        }

        #myRecord_filter{
            text-align: left;
        }

        #myRecord_length{
            text-align: right;
        }

        @media (max-width: 767px){

            .table-responsive {
                display: block;
                width: 100%;
                overflow-x: auto;
                -ms-overflow-style: -ms-autohiding-scrollbar;
            }
        }


        @media (max-width: 480px){

            .table-responsive {
                display: block;
                width: 100%;
                overflow-x: auto;
                -ms-overflow-style: -ms-autohiding-scrollbar;
            }
        }
        .modal-open .modal{
            margin-top: 50px!important;
        }
    </style>

</head>
<body class="theme-cyan rtl">
<audio id="audioSuccess">
    <source class="audio" src="{{ asset('assets2/Notify/success.wav')}}" type="audio/mp3">
</audio>

<audio id="audioError">
    <source class="audio" src="{{ asset('assets2/Notify/error.wav')}}" type="audio/mp3">
</audio>
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="{{ asset('assets3/images/logo.svg') }}" width="48" height="48" alt="sQuare"></div>
        <p>الرجاء الإنتظار ... </p>
    </div>
</div>
@include('dashboard.layouts.shortcuts')
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- Top Bar -->
@include('dashboard.layouts.navbar')
<!-- Left Sidebar -->
@include('dashboard.layouts.aside')
<!-- Right Chatbar -->
@include('dashboard.layouts.chat')
<!-- Right Sidebar -->
@include('dashboard.layouts.settings')
<!-- Main Content -->
@yield('content')
<!-- Jquery Core Js -->
<script src="{{ asset('assets2/bundles/libscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js -->
<script src="{{ asset('assets2/bundles/vendorscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js -->
<script src="{{asset('assets2/bundles/datatablescripts.bundle.js')}}"></script>
<script src="{{ asset('assets3/plugins/momentjs/moment.js') }}"></script> <!-- Moment Plugin Js -->
<!-- Bootstrap Material Datetime Picker Plugin Js -->
<script src="{{ asset('assets3/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}"></script>


<script src="{{asset('assets2/js/pages/tables/jquery-datatable.js')}}"></script>
<script src="{{ asset('assets2/js/pages/rtl.js') }}"></script>
<script src="{{asset('assets2/jquery.compiler.js')}}"></script>
<script src="{{ asset('assets2/bundles/mainscripts.bundle.js') }}"></script>
</body>

</html>