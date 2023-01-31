<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
<head>
	<meta charset="UTF-8">
	<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="Description" content=" Dashboard ">
	<meta name="Author" content="alama-branding">
	<meta name="Keywords" content="admin,admin dashboard" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- Title -->
	<title>{{config('app.name')}}{{ ' | login' }}</title>

	<!-- Favicon -->
	<link rel="icon" href="{{asset('cms/assets/img/icon-alama.png')}}" type="image/x-icon" />

	<!-- Icons css -->
	<link href="{{asset('cms/assets/css/icons.css')}}" rel="stylesheet">

	<!-- Bootstrap css -->
	<link href="{{asset('cms/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

	<!-- style css -->
	<link href="{{asset('cms/assets/css/style.css')}}" rel="stylesheet">

	<!--- Animations css-->
	<link href="{{asset('cms/assets/css/animate.css')}}" rel="stylesheet">

	<!---Switcher css-->
	<link href="{{asset('cms/assets/switcher/css/switcher.css')}}" rel="stylesheet">
	<link href="{{asset('cms/assets/switcher/demo.css')}}" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>


<body class="ltr main-body app sidebar-mini">

	<!-- Loader -->
	<div id="global-loader">
		<img src="{{asset('cms/assets/img/loader.svg')}}" class="loader-img" alt="Loader">
	</div>
	<!-- /Loader -->

    <!-- Page -->
    {{ $slot }}
    <!-- End Page -->

<!-- JQuery min js -->
<script src="{{asset('cms/assets/plugins/jquery/jquery.min.js')}}"></script>

<!-- Bootstrap Bundle js -->
<script src="{{asset('cms/assets/plugins/bootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('cms/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

<!-- Moment js -->
<script src="{{asset('cms/assets/plugins/moment/moment.js')}}"></script>

<!-- P-scroll js -->
<script src="{{asset('cms/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('cms/assets/plugins/perfect-scrollbar/p-scroll.js')}}"></script>

<!-- Sticky js -->
<script src="{{asset('cms/assets/js/sticky.js')}}"></script>

<!-- eva-icons js -->
<script src="{{asset('cms/assets/js/eva-icons.min.js')}}"></script>

<!-- Rating js-->
<script src="{{asset('cms/assets/plugins/ratings-2/jquery.star-rating.js')}}"></script>
<script src="{{asset('cms/assets/plugins/ratings-2/star-rating.js')}}"></script>

<!-- Sidebar js -->
<script src="{{asset('cms/assets/plugins/side-menu/sidemenu.js')}}"></script>

<!-- Right-sidebar js -->
<script src="{{asset('cms/assets/plugins/sidebar/sidebar.js')}}"></script>
<script src="{{asset('cms/assets/plugins/sidebar/sidebar-custom.js')}}"></script>

<!-- Switcher js -->
<script src="{{asset('cms/assets/switcher/js/switcher.js')}}"></script>

<!--themecolor js-->
<script src="{{asset('cms/assets/js/themecolor.js')}}"></script>

<!-- custom js -->
<script src="{{asset('cms/assets/js/custom-1.js')}}"></script>

</body>

</html>
