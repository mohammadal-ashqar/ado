<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>{{ config('app.name') }}</title>

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- ** assets/Plugins Needed for the Project ** -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/bootstrap.min.css') }}">
    <!-- slick slider -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/slick/slick.css') }}">
    <!-- themefy-icon -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/themify-icons/themify-icons.css') }}">
    <!-- venobox css -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/venobox/venobox.css') }}">
    <!-- card slider -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/card-slider/css/style.css') }}">

    <!-- Main Stylesheet -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!--Favicon-->
    <link rel="shortcut icon" href="{{ asset('assets/images/ado-dark-logo.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('assets/images/ado-dark-logo.png') }}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900;1000&family=Tajawal:wght@200;300;400;500;700;800;900&display=swap"
        rel="stylesheet">

</head>
<style>
    body {
        direction: rtl;
        font-family: 'Cairo', sans-serif;
        font-family: 'Tajawal', sans-serif;

    }

    .navbar .nav-item .nav-link {
        font-family: 'Cairo', sans-serif;
        font-family: 'Tajawal', sans-serif;
        padding: 20px;
        font-size: 18px;

    }

    p {
        font-family: 'Cairo', sans-serif;
        font-family: 'Tajawal', sans-serif;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {

        font-family: 'Cairo', sans-serif;
        font-family: 'Tajawal', sans-serif;

    }

    /* Button style */
    .btn {
        font-size: 25px;
        font-family: 'Cairo', sans-serif;
        font-family: 'Tajawal', sans-serif;


    }

    .font-primary {
        font-family: 'Cairo', sans-serif !important;
        font-family: 'Tajawal', sans-serif !important;
    }

    .font-secondary {

        font-family: 'Cairo', sans-serif !important;
        font-family: 'Tajawal', sans-serif !important;
    }
</style>

<body>


    <header class="navigation fixed-top">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="{{ route('adomedia.ar.index', 'index') }}"><img
                    src="{{ asset('assets/images/ado-fulllogo.png') }}" alt="Egen" width="80px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <i class=" icon-lg   ti-menu  text-dark"></i>
            </button>

            <div class="collapse navbar-collapse text-center" id="navigation" style="font-size: 30px; ">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('adomedia.ar.index', 'index') }}">????????????????</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('adomedia.ar.index', 'about') }}">???? ??????</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('adomedia.ar.index', 'services') }}">??????????????</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('adomedia.ar.index', 'blog') }}">??????????????</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('adomedia.ar.index', 'portfolio') }}">??????????????</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('adomedia.ar.index', 'contact') }}">???????? ????????</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('adomedia.index', 'index') }}"> <span class="ti-world"></span></a>
                    </li>
                    {{-- <li class="nav-item active dropdown">
                        <a class="nav-link " href="{{ route('adomedia.index', 'index') }}" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"><span class="ti-world"></span></a>
                        <div class="dropdown-menu" style="display: none;">
                            <a class="dropdown-item" href="{{ route('adomedia.index', 'index') }}">English</a>

                        </div>
                    </li> --}}
                </ul>
            </div>
        </nav>
    </header>

    {{ $slot }}


    <!-- footer -->
    <footer class="bg-secondary position-relative ">
        <img src="{{ asset('assets/images/backgrounds/map.png') }}" class="img-fluid overlay-image" alt="">
        <div class="pb-0">
            <div class="container ">
                <div class="row ">
                    <div class="col-md-6 text-center text-md-right p-3">
                        <p class="text-light mb-0">???????????? ???????????? &copy; {{ date('Y') }} ?????????? ???????? <a
                                class="text-gradient-primary" href="#">ADO Media</a>
                        </p>
                    </div>
                    <div class="col-md-6 ">
                        <ul class="list-inline text-md-left text-center">
                            <li class="list-inline-item"><a class="d-block p-lg-4 text-white  " href="#"><i
                                        class="ti-facebook"></i></a></li>
                            <li class="list-inline-item"><a class="d-block p-lg-4 text-white " href="#"><i
                                        class="ti-twitter-alt"></i></a></li>
                            <li class="list-inline-item"><a class="d-block p-lg-4 text-white "
                                    href="https://www.instagram.com/adomedia.ps/"><i class="ti-instagram"></i></a>
                            </li>
                            <li class="list-inline-item"><a class="d-block p-lg-4 text-white " href="#"><i
                                        class="ti-linkedin"></i></a></li>


                        </ul>
                    </div>


                </div>
            </div>
        </div>
    </footer>
    <!-- /footer -->

    <!-- jQuery -->
    <script src="{{ asset('assets/plugins/jQuery/jquery.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/plugins/bootstrap/bootstrap.min.js') }}"></script>
    <!-- slick slider -->
    <script src="{{ asset('assets/plugins/slick/slick.min.js') }}"></script>
    <!-- venobox -->
    <script src="{{ asset('assets/plugins/venobox/venobox.min.js') }}"></script>
    <!-- shuffle -->
    <script src="{{ asset('assets/plugins/shuffle/shuffle.min.js') }}"></script>
    <!-- apear js -->
    <script src="{{ asset('assets/plugins/counto/apear.js') }}"></script>
    <!-- counter -->
    <script src="{{ asset('assets/plugins/counto/counTo.js') }}"></script>
    <!-- card slider -->
    <script src="{{ asset('assets/plugins/card-slider/js/card-slider-min.js') }}"></script>


    <!-- Main Script -->
    <script src="{{ asset('assets/js/script.js') }}"></script>

</body>

</html>
