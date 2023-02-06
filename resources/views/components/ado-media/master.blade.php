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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--Favicon-->
    <link rel="shortcut icon" href="{{ asset('assets/images/ado-dark-logo.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('assets/images/ado-dark-logo.png') }}" type="image/x-icon">

</head>
<style>
    .navbar .nav-item .nav-link {

        padding: 20px;
        font-size: 25px;

    }
</style>

<body>


    <header class="navigation fixed-top">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="{{ route('adomedia.ar.index', 'index') }}"><img
                    src="{{ asset('assets/images/ado-fulllogo.png') }}" alt="Egen" width="100px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <i class=" icon-lg   ti-menu  text-dark"></i>
            </button>


            <div class="collapse navbar-collapse text-center" id="navigation">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('adomedia.index', 'index') }}">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('adomedia.index', 'about') }}">About</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('adomedia.index', 'services') }}">Services</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('adomedia.index', 'blog') }}">Blog</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('adomedia.index', 'portfolio') }}">Portfolio</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('adomedia.index', 'contact') }}">Contact</a>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"><span class="ti-world"></span></a>
                        <div class="dropdown-menu" style="display: none; ">
                            <a class="dropdown-item" href="{{ route('adomedia.ar.index', 'index') }}">عربي</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    {{ $slot }}


    <!-- footer -->
    <footer class="bg-secondary position-relative ">
        <div class="pb-0">
            <div class="container ">
                <div class="row ">
                    <div class="col-md-6 text-center text-md-left p-lg-4">
                        <p class="text-light mb-0">Copyright &copy; {{ date('Y') }} a by <a
                                class="text-gradient-primary" href="#">ADO Media</a>
                        </p>
                    </div>
                    <div class="col-md-6 ">
                        <ul class="list-inline text-md-right text-center">
                            <li class="list-inline-item"><a class="d-block p-lg-4 text-white  " href="#"><i
                                        class="ti-facebook"></i></a></li>
                            <li class="list-inline-item"><a class="d-block p-lg-4 text-white " href="#"><i
                                        class="ti-twitter-alt"></i></a></li>
                            <li class="list-inline-item"><a class="d-block p-lg-4 text-white "
                                    href="https://www.instagram.com/adomedia.ps/"><i class="ti-instagram"></i></a></li>
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
