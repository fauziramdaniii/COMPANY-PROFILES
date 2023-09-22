<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title> @yield('title')
    </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/admin/images/favicon.png">
    <!-- Pignose Calender -->
    <link href="/admin/plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="/admin/plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="/admin/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <!-- Custom Stylesheet -->
    <link href="/admin/css/style.css" rel="stylesheet">

</head>

<body>

    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3"
                    stroke-miterlimit="10" />
            </svg>
        </div>
    </div>

    <div id="main-wrapper">

        <div class="nav-header">
            <div class="brand-logo">
                <a href="index.html">
                    {{-- <b class="logo-abbr"><img src="admin/images/logo.png" alt=""> </b> --}}
                    <span class="logo-compact"><img src="/admin/images/logo-compact.png" alt=""></span>
                    <span class="brand-title m-r-10 text-align-last: center" style="color: black">
                        {{ Auth::user()->email }}
                        {{-- <img src="admin/images/logo-text.png" alt=""> --}}
                    </span>
                </a>
            </div>
        </div>

        <div class="header">
            <div class="header-content clearfix">

                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="nk-sidebar">
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Welcome {{ Auth::user()->name }}</li>
                    <li>
                        <a href="/dashboard" aria-expanded="false">
                            <i class="icon-notebook menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="/" target="_blank" aria-expanded="false">
                            <i class="icon-screen-tablet menu-icon"></i><span class="nav-text">View Website</span>
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Data Master</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="sliders">Master Sliders</a></li>
                        </ul>
                        <ul aria-expanded="false">
                            <li><a href="/portfolios">Master Portfolios</a></li>
                        </ul>
                        <ul aria-expanded="false">
                            <li><a href="/testimonials">Master Testimoni</a></li>
                        </ul>
                        <ul aria-expanded="false">
                            <li><a href="/services">Master Services</a></li>
                        </ul>
                        <ul aria-expanded="false">
                            <li><a href="/clients">Master Clients</a></li>
                        </ul>
                        <ul aria-expanded="false">
                            <li><a href="/teams">Master Team</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="/about" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">About</span>
                        </a>
                    </li>
                    <li>
                        <a href="/contact" aria-expanded="false">
                            <i class="icon-note menu-icon"></i><span class="nav-text">Contact</span>
                        </a>
                    </li>
                    <li>
                        <a href="/" aria-expanded="false">
                            <i class="icon-globe-alt menu-icon"></i><span class="nav-text">Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="content-body">

            @yield('content')

        </div>

        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Quixlab</a>
                    {{ date('Y') }}</p>
            </div>
        </div>

    </div>

    <script src="/admin/plugins/common/common.min.js"></script>
    <script src="/admin/js/custom.min.js"></script>
    <script src="/admin/js/settings.js"></script>
    <script src="/admin/js/gleek.js"></script>
    <script src="/admin/js/styleSwitcher.js"></script>

    <!-- Chartjs -->
    <script src="/admin/plugins/chart.js/Chart.bundle.min.js"></script>
    <!-- Circle progress -->
    <script src="/admin/plugins/circle-progress/circle-progress.min.js"></script>
    <!-- Datamap -->
    <script src="/admin/plugins/d3v3/index.js"></script>
    <script src="/admin/plugins/topojson/topojson.min.js"></script>
    <!-- Morrisjs -->
    <script src="/admin/plugins/raphael/raphael.min.js"></script>
    <script src="/admin/plugins/morris/morris.min.js"></script>
    <!-- Pignose Calender -->
    <script src="/admin/plugins/moment/moment.min.js"></script>
    <script src="/admin/plugins/pg-calendar/js/pignose.calendar.min.js"></script>
    <!-- ChartistJS -->
    <script src="/admin/plugins/chartist/js/chartist.min.js"></script>
    <script src="/admin/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>
