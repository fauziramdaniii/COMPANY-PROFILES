<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from inspirothemes.com/polo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Sep 2020 10:13:50 GMT -->

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="INSPIRO" />
    <meta name="description" content="Themeforest Template Polo, html template">
    <link rel="icon" type="image/png" href="template/images/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Prasmanan Solution</title>

    <link href="template/css/plugins.css" rel="stylesheet">
    <link href="template/css/style.css" rel="stylesheet">
</head>

<body>

    <div class="body-inner">

        <header id="header" data-transparent="true" data-fullwidth="true" class="dark submenu-light">
            <div class="header-inner">
                <div class="container">

                    <div id="logo">
                        <a href="template/index.html">
                            <span class="logo-default">PSM</span>
                            <span class="logo-dark">PSM</span>
                        </a>
                    </div>

                    <div id="mainMenu-trigger">
                        <a class="lines-button x"><span class="lines"></span></a>
                    </div>


                    <div id="mainMenu">
                        <div class="container">
                            <nav>
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li class="dropdown"><a href="#">About Us</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="/about">About</a></li>
                                            <li><a href="/testimonis">Testimoni</a></li>
                                            <li><a href="/faq">FAQ</a></li>
                                        </ul>
                                    </li>
                                    {{-- <li><a href="#client" class="scroll-to">Service</a></li> --}}
                                    <li><a href="/service">Service</a></li>
                                    <li><a href="/portfolio">Portfolio</a></li>
                                    <li><a href="/contact">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>
        </header>


        @yield('section')


        <footer id="footer">
            <div class="copyright-content">
                <div class="container">
                    <div class="copyright-text text-center">&copy; {{ date('Y') }} . All Rights Reserved.<a
                            href="http://www.inspiro-media.com/" target="_blank" rel="noopener"> Prasmanan Solution
                        </a>
                    </div>
                </div>
            </div>
        </footer>

    </div>


    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>

    <script src="template/js/jquery.js"></script>
    <script src="template/js/plugins.js"></script>
    <script src="template/js/functions.js"></script>

    <script src="template/plugins/particles/particles.js" type="text/javascript"></script>
    <script src="template/plugins/particles/particles-dots.js" type="text/javascript"></script>

    <script type='text/javascript' src='http://maps.googleapis.com/maps/api/js?key=AIzaSyBOksKHb9HyydVB-mcrqKUVfA_LeB79jcQ'>
    </script>
    <script type="text/javascript" src="template/plugins/gmap3/gmap3.min.js"></script>
    <script type="text/javascript" src="template/plugins/gmap3/map-styles.js"></script>
</body>

</html>
