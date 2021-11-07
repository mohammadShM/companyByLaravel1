@extends('front.layouts.master')
@section('content-me')
    <!-- ======= Header ======= -->
    @include('front.partials.menu')
    <!-- End Header -->
    <main id="main">
        <!-- ======= parallax section ======= -->
    @include('front.partials.post.parallaxPost')
    <!-- End parallax section -->
        <!-- ======= Post Section ======= -->
    @include('front.partials.showPost',['recent'=>$recentPost,'post'=>$singlePost])
    <!-- End Post Section -->
    </main>
    <!-- End #main -->
    <!-- ======= Footer ======= -->
    @include('front.partials.footer',['info'=>$info,'social'=>$social,'link'=>$link])
    <!-- End  Footer -->
@endsection
@section('css-me')
    <link rel="stylesheet" href="{{asset('css/front.css')}}">
@endsection
