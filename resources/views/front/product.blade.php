@extends('front.layouts.master')
@section('content-me')
    <!-- ======= Header ======= -->
    @include('front.partials.menu')
    <!-- End Header -->
    <main id="main">
        <!-- ======= parallax section ======= -->
    @include('front.partials.product.parallaxProduct')
    <!-- End parallax section -->
        <!-- ======= Product Section ======= -->
    @include('front.partials.showProduct',['recent'=>$recentProduct,'single'=>$singleProduct])
    <!-- End Product Section -->
    </main>
    <!-- End #main -->
    <!-- ======= Footer ======= -->
    @include('front.partials.footer',['info'=>$info,'social'=>$social,'link'=>$link])
    <!-- End  Footer -->
@endsection
@section('css-me')
    <link rel="stylesheet" href="{{asset('css/front.css')}}">
@endsection
