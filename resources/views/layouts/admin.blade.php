
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Vendor styles -->
    <link rel="stylesheet" href="{{ URL::asset('theme_material/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css')  }}">
    <link rel="stylesheet" href="{{ URL::asset('theme_material/vendors/bower_components/animate.css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('theme_material/vendors/bower_components/jquery.scrollbar/jquery.scrollbar.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('theme_material/vendors/bower_components/fullcalendar/dist/fullcalendar.min.css')  }}">

    <!-- App styles -->
    <link rel="stylesheet" href="{{ URL::asset('theme_material/css/app.min.css') }}">
</head>

<body data-ma-theme="green">
<main class="main">
    <div class="page-loader">
        <div class="page-loader__spinner">
            <svg viewBox="25 25 50 50">
                <circle cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>

    <header class="header">
        <div class="navigation-trigger hidden-xl-up" data-ma-action="aside-open" data-ma-target=".sidebar">
            <div class="navigation-trigger__inner">
                <i class="navigation-trigger__line"></i>
                <i class="navigation-trigger__line"></i>
                <i class="navigation-trigger__line"></i>
            </div>
        </div>

        <div class="header__logo hidden-sm-down">
            <h1><a href="index.html">Bayit Systems</a></h1>
        </div>
    </header>

    <aside class="sidebar">
        <div class="scrollbar-inner">
            <div class="user">
                <div class="user__info" data-toggle="dropdown">
                    <img class="user__img" src="demo/img/profile-pics/8.jpg" alt="">
                    <div>
                        <div class="user__name">Malinda Hollaway</div>
                        <div class="user__email">malinda-h@gmail.com</div>
                    </div>
                </div>

                <div class="dropdown-menu">
                    <a class="dropdown-item" href="">View Profile</a>
                    <a class="dropdown-item" href="">Settings</a>
                    <a class="dropdown-item" href="">Logout</a>
                </div>
            </div>

            <ul class="navigation">
                <li><a href="{{ route('services.index') }}"><i class="zmdi zmdi-home"></i> Servicios</a></li>
                <li><a href="{{ route('ticket.index') }}"><i class="zmdi zmdi-home"></i> Tickets</a></li>
            </ul>
        </div>
    </aside>

    <section class="content">
        <div class="content__inner">
            @yield('main')
        </div>
    </section>
</main>

<!-- Older IE warning message -->
<!--[if IE]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade to any of the following web browsers to access this website.</p>

    <div class="ie-warning__downloads">
        <a href="http://www.google.com/chrome">
            <img src="img/browsers/chrome.png" alt="">
        </a>

        <a href="https://www.mozilla.org/en-US/firefox/new">
            <img src="img/browsers/firefox.png" alt="">
        </a>

        <a href="http://www.opera.com">
            <img src="img/browsers/opera.png" alt="">
        </a>

        <a href="https://support.apple.com/downloads/safari">
            <img src="img/browsers/safari.png" alt="">
        </a>

        <a href="https://www.microsoft.com/en-us/windows/microsoft-edge">
            <img src="img/browsers/edge.png" alt="">
        </a>

        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
            <img src="img/browsers/ie.png" alt="">
        </a>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->

<!-- Javascript -->
<!-- ../vendors -->
<script src="{{ URL::asset('theme_material/vendors/bower_components/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ URL::asset('theme_material/vendors/bower_components/popper.js/dist/umd/popper.min.js') }}"></script>
<script src="{{ URL::asset('theme_material/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('theme_material/vendors/bower_components/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
<script src="{{ URL::asset('theme_material/vendors/bower_components/jquery-scrollLock/jquery-scrollLock.min.js') }}"></script>

<script src="{{ URL::asset('theme_material/vendors/bower_components/flot/jquery.flot.js') }}"></script>
<script src="{{ URL::asset('theme_material/vendors/bower_components/flot/jquery.flot.resize.js') }}"></script>
<script src="{{ URL::asset('theme_material/vendors/bower_components/flot.curvedlines/curvedLines.js') }}"></script>
<script src="{{ URL::asset('theme_material/vendors/bower_components/jqvmap/dist/jquery.vmap.min.js') }}"></script>
<script src="{{ URL::asset('theme_material/vendors/bower_components/salvattore/dist/salvattore.min.js') }}"></script>
<script src="{{ URL::asset('theme_material/vendors/jquery.sparkline/jquery.sparkline.min.js') }}"></script>
<script src="{{ URL::asset('theme_material/vendors/bower_components/moment/min/moment.min.js') }}"></script>
<script src="{{ URL::asset('theme_material/vendors/bower_components/fullcalendar/dist/fullcalendar.min.js') }}"></script>


<!-- App functions and actions -->
<script src="{{ URL::asset('theme_material/js/app.min.js') }}"></script>
</body>
</html>