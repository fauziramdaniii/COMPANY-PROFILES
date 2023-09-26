<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Skydash Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/admin_view/vendors/feather/feather.css">
    <link rel="stylesheet" href="/admin_view/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="/admin_view/vendors/ti-icons/css/themify-icons.css">
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap.min.css"> --}}

    <link rel="stylesheet" href="/admin_view/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="/admin_view/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:/admin_view/partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo mr-5" href="/admin_view/index.html"><img
                        src="/admin_view/images/logo.svg" class="mr-2" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="/admin_view/index.html"><img
                        src="/admin_view/images/logo-mini.svg" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="icon-menu"></span>
                </button>
                <ul class="navbar-nav mr-lg-2">
                    <li class="nav-item nav-search d-none d-lg-block">
                        <div class="input-group">
                            <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                                <span class="input-group-text" id="search">
                                    <i class="icon-search"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now"
                                aria-label="search" aria-describedby="search">
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <img src="/admin_view/images/faces/face28.jpg" alt="profile" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="profileDropdown">
                            <a class="dropdown-item">
                                <i class="ti-settings text-primary"></i>
                                Settings
                            </a>
                            <a class="dropdown-item" href="/logout">
                                <i class="ti-power-off text-primary"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="icon-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:/admin_view/partials/_settings-panel.html -->
            <div class="theme-setting-wrapper">
                <div id="settings-trigger"><i class="ti-settings"></i></div>
                <div id="theme-settings" class="settings-panel">
                    <i class="settings-close ti-close"></i>
                    <p class="settings-heading">SIDEBAR SKINS</p>
                    <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                        <div class="img-ss rounded-circle bg-light border mr-3"></div>Light
                    </div>
                    <div class="sidebar-bg-options" id="sidebar-dark-theme">
                        <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
                    </div>
                    <p class="settings-heading mt-2">HEADER SKINS</p>
                    <div class="color-tiles mx-0 px-4">
                        <div class="tiles success"></div>
                        <div class="tiles warning"></div>
                        <div class="tiles danger"></div>
                        <div class="tiles info"></div>
                        <div class="tiles dark"></div>
                        <div class="tiles default"></div>
                    </div>
                </div>
            </div>
            <!-- partial:/admin_view/partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/dashboard">
                            <i class="icon-grid menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/about">
                            <i class="icon-bar-graph menu-icon"></i>
                            <span class="menu-title">About</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/contact">
                            <i class="icon-head menu-icon"></i>
                            <span class="menu-title">Contact</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false"
                            aria-controls="icons">
                            <i class="icon-contract menu-icon"></i>
                            <span class="menu-title">Master Data</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="icons">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="/admin/sliders">Slider
                                    </a></li>
                            </ul>
                        </div>
                        <div class="collapse" id="icons">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="/admin/clients">Client
                                    </a></li>
                            </ul>
                        </div>
                        <div class="collapse" id="icons">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="/admin/portfolios">Portfolio</a>
                                </li>
                            </ul>
                        </div>
                        <div class="collapse" id="icons">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="/admin/services">Services</a></li>
                            </ul>
                        </div>
                        <div class="collapse" id="icons">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="/admin/teams">Team</a></li>
                            </ul>
                        </div>
                        <div class="collapse" id="icons">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="/admin/testimonials">Testimoni</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/" target="_blank">
                            <i class="icon-layout menu-icon"></i>
                            <span class="menu-title">View Website</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="icon-paper menu-icon"></i>
                            <span class="menu-title">Documentation</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                @yield('content')
                <!-- content-wrapper ends -->
                <!-- partial:/admin_view/partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center center-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2023.
                            <a href="https://www.instagram.com/fauzrmdnii/" target="_blank"> Fauzi Ramdani
                            </a> . All rights reserved.</span>
                    </div>
                </footer>
            </div>
        </div>
    </div>

    <script src="/admin_view/vendors/js/vendor.bundle.base.js"></script>
    <script src="/admin_view/js/off-canvas.js"></script>
    <script src="/admin_view/js/hoverable-collapse.js"></script>
    <script src="/admin_view/js/template.js"></script>
    <script src="/admin_view/js/settings.js"></script>
    <script src="/admin_view/js/todolist.js"></script>
    <script src="/admin_view/js/file-upload.js"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            new DataTable('#example');
        })
    </script> --}}
</body>

</html>
