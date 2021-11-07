@extends('front.layouts.master')
@section('content-me')
    <!-- ======= Header ======= -->
    @include('front.partials.menu')
    <!-- End Header -->
    <!-- ======= Slider Section ======= -->
    @include('front.partials.slider',['sliders'=>$sliders])
    <!-- End Slider -->
    <main id="main">
        <!-- ======= About Section ======= -->
    @include('front.partials.about',['about'=>$about])
    <!-- End About Section -->
        <!-- ======= Services Section ======= -->
    @include('front.partials.service')
    <!-- End Services Section -->
        <!-- ======= Skills Section ======= -->
    @include('front.partials.skill')
    <!-- End Skills Section -->
        <!-- ======= Product Section ======= -->
    @include('front.partials.product',['products'=>$products])
    <!-- End Product Section -->
        <!-- ======= Team Section ======= -->
    @include('front.partials.team',['team'=>$team])
    <!-- End Team Section -->
        <!-- ======= Rviews Section ======= -->
    @include('front.partials.rview')
    <!-- End Rviews Section -->
        <!-- ======= Portfolio Section ======= -->
    @include('front.partials.portfolio')
    <!-- End Portfolio Section -->
        <!-- ======= Pricing Section ======= -->
    @include('front.partials.pricing')
    <!-- End Pricing Section -->
        <!-- ======= Testimonials Section ======= -->
    @include('front.partials.testimonial')
    <!-- End Testimonials Section -->
        <!-- ======= Blog Section ======= -->
    @include('front.partials.blog',['post'=>$post])
    <!-- End Blog Section -->
        <!-- ======= Suscribe Section ======= -->
    @include('front.partials.suscribe')
    <!-- End Suscribe Section -->
        <!-- ======= Contact Section ======= -->
    @include('front.partials.contact')
    <!-- End Contact Section -->
    </main>
    <!-- End #main -->
    <!-- ======= Footer ======= -->
    @include('front.partials.footer',['info'=>$info,'social'=>$social,'link'=>$link])
    <!-- End  Footer -->
@endsection
@section('seo-me')
    @include('front.partials.seo',['seo'=>$seo])
@endsection
@section('css-me')
    <link rel="stylesheet" href="{{asset('css/front.css')}}">
@endsection
