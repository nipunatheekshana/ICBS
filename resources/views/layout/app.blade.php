<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ICBS International | @yield('title')</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset("assets/FrontEnd/images/favicons/apple-touch-icon.png")}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset("assets/FrontEnd/images/favicons/favicon-32x32.png")}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset("assets/FrontEnd/images/favicons/favicon-16x16.png")}}">
    <link rel="manifest" href="{{asset("assets/FrontEnd/images/favicons/site.webmanifest")}}">

    <!-- plugin scripts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,500i,600,700,800%7CSatisfy&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{asset("assets/FrontEnd/css/animate.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/FrontEnd/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/FrontEnd/css/owl.carousel.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/FrontEnd/css/owl.theme.default.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/FrontEnd/plugins/fontawesome-free-5.11.2-web/css/all.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/FrontEnd/plugins/kipso-icons/style.css")}}">
    <link rel="stylesheet" href="{{asset("assets/FrontEnd/css/magnific-popup.css")}}">
    <link rel="stylesheet" href="{{asset("assets/FrontEnd/css/vegas.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/FrontEnd/css/style.css")}}">
    <link rel="stylesheet" href="{{asset("assets/FrontEnd/css/responsive.css")}}">
</head>

<body>
    <div class="preloader"><span></span></div><!-- /.preloader -->
    <div class="page-wrapper">
        @include('includes.header')

        @yield('content')

        @include('includes.footer')

    </div><!-- /.page-wrapper -->

    @include('includes.search-popup')
    <script src={{asset("assets/FrontEnd/js/jquery.min.js")}}></script>
    <script src={{asset("assets/FrontEnd/js/bootstrap.bundle.min.js")}}></script>
    <script src={{asset("assets/FrontEnd/js/owl.carousel.min.js")}}></script>
    <script src={{asset("assets/FrontEnd/js/waypoints.min.js")}}></script>
    <script src={{asset("assets/FrontEnd/js/jquery.counterup.min.js")}}></script>
    <script src={{asset("assets/FrontEnd/js/TweenMax.min.js")}}></script>
    <script src={{asset("assets/FrontEnd/js/wow.js")}}></script>
    <script src={{asset("assets/FrontEnd/js/jquery.magnific-popup.min.js")}}></script>
    <script src={{asset("assets/FrontEnd/js/countdown.min.js")}}></script>
    <script src={{asset("assets/FrontEnd/js/vegas.min.js")}}></script>
    <script src={{asset("assets/FrontEnd/js/jquery.validate.min.js")}}></script>
    <script src={{asset("assets/FrontEnd/js/jquery.ajaxchimp.min.js")}}></script>
    <!-- template scripts -->
    <script src={{asset("assets/FrontEnd/js/theme.js")}}></script>
</body>

</html>
