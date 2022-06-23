<!DOCTYPE html>
<html class="no-js">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Jay | Mitra | Academic | Writer | Activist ">
    <meta name="description" content="JAYANTA MITRA">
    <meta name="author" content="Dcode Arena">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css" id="color-switcher-link">
    <link rel="stylesheet" href="assets/css/animations.css">
    <link rel="stylesheet" href="assets/css/fonts.css">
    <script src="assets/js/vendor/modernizr-2.6.2.min.js"></script>
    <!--Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@350&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amaranth&display=swap" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-Z1ZKTW6VPD"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-Z1ZKTW6VPD');
    </script>
</head>

<body>

    <div class="preloader">
        <div class="preloader_image"></div>
    </div>
    <div id="canvas">
        <div id="box_wrapper">
            <header class="page_header header_white affix-header table_section columns_padding_0 toggle_menu_right">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4 col-xs-6">
                            <a href="#" class="logo_text">
                                <img src="assets/images/log1.png">
                            </a>
                            <span class="toggle_menu">
                                <span></span>
                            </span>
                        </div>
                        <div class="col-md-8 text-center">
                            <!-- main nav start -->
                            <nav class="mainmenu_wrapper">
                                <ul class="mainmenu nav sf-menu">
                                    <li class="{{ request()->is('/*') ? 'active' : '' }}">
                                        <a href="{{ url('/') }}">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/gill') }}" target="blank">Gill</a>
                                    </li>
                                    <li class="{{ request()->is('about-me*') ? 'active' : '' }}">
                                        <a href="{{ url('/about-me') }}">About me</a>
                                    </li>
                                    <li class="{{ request()->is('positions*') ? 'active' : '' }}">
                                        <a href="{{ url('/positions') }}">Positions</a>
                                    </li>
                                    <li class="{{ request()->is('publications*') ? 'active' : '' }}">
                                        <a href="{{ url('/publications') }}">Publications</a>
                                    </li>
                                    <li class="{{ request()->is('impact-activities*') ? 'active' : '' }}">
                                        <a href="{{ url('/impact-activities') }}">Impact Activities</a>
                                    </li>
                                    <li class="{{ request()->is('refereed-journal-articles*') ? 'active' : '' }}">
                                        <a href="{{ url('/refereed-journal-articles') }}" target="blank">Journal</a>
                                    </li>
                                    <li>
                                        <a href="https://www.ieforums.org/" target="blank">IEF</a>
                                    </li>
                                    <li>
                                        <a href="https://www.ieforums.org/blog" target="blank">Blog</a>
                                    </li>
                                </ul>
                            </nav>
                            <!-- eof main nav -->

                        </div>
                        <div class="col-md-3 text-right">

                        </div>
                    </div>
                </div>
            </header>
            @yield('content')
            <section class="page_copyright ds section_padding_top_30 section_padding_bottom_15">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center margin_0">
                            <a href="#" class="logo">
                                <img src="assets/images/log1.png">
                            </a>
                        </div>
                        <div class="col-sm-12 text-center">
                            <p class="lato small-text">&copy; copyright 2020 all rights reserved. Developed with <i class="fa fa-heart" aria-hidden="true" style="color:red;"></i> by <a href="https://www.dcodearena.com" target="blank">Dcode Arena</a></p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <script src="assets/js/compressed.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>