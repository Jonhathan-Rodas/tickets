
<!DOCTYPE html>
<!--
Item Name: Elisyam - Web App & Admin Dashboard Template
Version: 1.5
Author: SAEROX

** A license must be purchased in order to legally use this template for your project **
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Elisyam - Dashboard</title>
    <meta name="description" content="Elisyam is a Web App and Admin Dashboard Template built with Bootstrap 4">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Google Fonts -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
    <script>
        WebFont.load({
            google: {"families":["Montserrat:400,500,600,700","Noto+Sans:400,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ URL::asset('themes/elisyam/assets/vendors/css/base/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('themes/elisyam/assets/vendors/css/base/elisyam-1.5.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('themes/elisyam/assets/css/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('themes/elisyam/assets/css/owl-carousel/owl.theme.min.css') }}">
</head>
<body id="page-top">
<!-- Begin Preloader -->
<div id="preloader">
    <div class="canvas">
        <img src="{{ URL::asset('themes/elisyam/assets/img/logo.png') }}" alt="logo" class="loader-logo">        <div class="spinner"></div>
    </div>
</div>
<!-- End Preloader -->
<div class="page">
    <!-- Begin Header -->
    @include('admin.layouts.header')
    <!-- End Header -->
    <!-- Begin Page Content -->
    <div class="page-content d-flex align-items-stretch">
        @include('admin.layouts.sidebar')

        <div class="content-inner">
            <div class="container-fluid">
                <div class="row">
                    <div class="page-header">
                        <div class="d-flex align-items-center">
                            <h2 class="page-header-title">@yield('header-title')</h2>
                            <div>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/"><i class="ti ti-home"></i></a></li>
                                    @yield('breadcrumb')
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (\Session::has('success'))
                    <div class="alert alert-success">
                        <p>{{ \Session::get('success') }}</p>
                    </div><br />
                @endif


                <div class="row flex-row">
                    <div class="col-12">
                        <div class="widget has-shadow">
                            <div class="widget-body">
                                @yield('main')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Content -->
    </div>
    <!-- End Page Content -->
</div>
<!-- Begin Vendor Js -->
<script src="{{ URL::asset('themes/elisyam/assets/vendors/js/base/jquery.min.js') }}"></script>
<script src="{{ URL::asset('themes/elisyam/assets/vendors/js/base/core.min.js') }}"></script>
<!-- End Vendor Js -->
<!-- Begin Page Vendor Js -->
<script src="{{ URL::asset('themes/elisyam/assets/vendors/js/nicescroll/nicescroll.min.js') }}"></script>
<script src="{{ URL::asset('themes/elisyam/assets/vendors/js/chart/chart.min.js') }}"></script>
<script src="{{ URL::asset('themes/elisyam/assets/vendors/js/progress/circle-progress.min.js') }}"></script>
<script src="{{ URL::asset('themes/elisyam/assets/vendors/js/calendar/moment.min.js') }}"></script>
<script src="{{ URL::asset('themes/elisyam/assets/vendors/js/calendar/fullcalendar.min.js') }}"></script>
<script src="{{ URL::asset('themes/elisyam/assets/vendors/js/owl-carousel/owl.carousel.min.js') }}"></script>
<script src="{{ URL::asset('themes/elisyam/assets/vendors/js/app/app.js') }}"></script>

<!-- End Page Vendor Js -->
<!-- Begin Page Snippets -->
<script src="{{ URL::asset('themes/elisyam/assets/js/dashboard/db-default.js') }}"></script>
<!-- End Page Snippets -->
</body>
</html>