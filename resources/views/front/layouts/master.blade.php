<!DOCTYPE html>
<html lang="en">
<!--suppress HtmlRequiredTitleElement -->
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!--seo-->
  @yield('seo-me')
    <!--end seo-->
    <!-- Favicons -->
    <link href="{{asset("front/img/favicon.png")}}" rel="icon">
    <link href="{{asset("front/img/apple-touch-icon.png")}}" rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900"
        rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="{{asset("front/vendor/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet">
    <link href="{{asset("front/vendor/icofont/icofont.min.css")}}" rel="stylesheet">
    <link href="{{asset("front/vendor/animate.css/animate.min.css")}}" rel="stylesheet">
    <link href="{{asset("front/vendor/font-awesome/css/font-awesome.min.css")}}" rel="stylesheet">
    <link href="{{asset("front/vendor/nivo-slider/css/nivo-slider.css")}}" rel="stylesheet">
    <link href="{{asset("front/vendor/owl.carousel/assets/owl.carousel.min.css")}}" rel="stylesheet">
    <link href="{{asset("front/vendor/venobox/venobox.css")}}" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="{{asset("front/css/style.css")}}" rel="stylesheet">
    <!-- =======================================================
    * Template Name: eBusiness - v2.2.1
    * Template URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
    <!-- add css -->
    @yield('css-me')
</head>
<body data-spy="scroll" data-target="#navbar-example">
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<!-- add content -->
@yield('content-me')
<div id="preloader"></div>
<!-- Vendor JS Files -->
<script src="{{asset("front/vendor/jquery/jquery.min.js")}}"></script>
<script src="{{asset("front/vendor/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
<script src="{{asset("front/vendor/jquery.easing/jquery.easing.min.js")}}"></script>
<script src="{{asset("front/vendor/php-email-form/validate.js")}}"></script>
<script src="{{asset("front/vendor/appear/jquery.appear.js")}}"></script>
<script src="{{asset("front/vendor/knob/jquery.knob.js")}}"></script>
<script src="{{asset("front/vendor/parallax/parallax.js")}}"></script>
<script src="{{asset("front/vendor/wow/wow.min.js")}}"></script>
<script src="{{asset("front/vendor/isotope-layout/isotope.pkgd.min.js")}}"></script>
<script src="{{asset("front/vendor/nivo-slider/js/jquery.nivo.slider.js")}}"></script>
<script src="{{asset("front/vendor/owl.carousel/owl.carousel.min.js")}}"></script>
<script src="{{asset("front/vendor/venobox/venobox.min.js")}}"></script>
<!-- Template Main JS File -->
<script src="{{asset("front/js/main.js")}}"></script>
<!-- add js -->
@yield('js-me')
</body>
</html>
