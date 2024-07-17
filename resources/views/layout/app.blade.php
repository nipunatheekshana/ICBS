<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ICBS International | @yield('title')</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/images/favicons/site.webmanifest') }}">

    <!-- plugin scripts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,500i,600,700,800%7CSatisfy&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free-5.11.2-web/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/kipso-icons/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vegas.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/toastr/toastr.min.css') }}">


    <script src="{{ url('admin/assets/js/custom/commonfeaturess.js') }}"></script>

    @yield('head')
</head>

<body>
    <div class="preloader"><span></span></div><!-- /.preloader -->
    <div class="page-wrapper">
        @include('includes.header')

        @yield('content')

        @include('includes.footer')

    </div><!-- /.page-wrapper -->

    @include('includes.search-popup')
    <script src={{ asset('assets/js/jquery.min.js') }}></script>
    <script src={{ asset('assets/js/bootstrap.bundle.min.js') }}></script>
    <script src={{ asset('assets/js/owl.carousel.min.js') }}></script>
    <script src={{ asset('assets/js/waypoints.min.js') }}></script>
    <script src={{ asset('assets/js/jquery.counterup.min.js') }}></script>
    <script src={{ asset('assets/js/TweenMax.min.js') }}></script>
    <script src={{ asset('assets/js/wow.js') }}></script>
    <script src={{ asset('assets/js/jquery.magnific-popup.min.js') }}></script>
    <script src={{ asset('assets/js/countdown.min.js') }}></script>
    <script src={{ asset('assets/js/vegas.min.js') }}></script>
    <script src={{ asset('assets/js/jquery.validate.min.js') }}></script>
    <script src={{ asset('assets/js/jquery.ajaxchimp.min.js') }}></script>
    <script src="{{ asset('admin/assets/vendors/toastr/toastr.min.js') }}"></script>

    <!-- template scripts -->
    <script src={{ asset('assets/js/theme.js') }}></script>

    @yield('script')
</body>

</html>
