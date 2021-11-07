@extends('admin.layouts.master')
@section('content-me')
    <section class="row m-0">
        <section class="col-10 offset-1 mt-5 p-5 main-section-for-me">
            <h1 class="text-white text-center h1-title-for-me">Welcome To Your Website!</h1>
            <h4 class="mt-2 h4-title-for-me">welcome to your website and take data in the website ,
                please click down button ,tanks</h4>
            <a href="{{route('panel.create')}}"
               class="btn btn-block btn-info text-capitalize text-white mt-5">go to seo page</a>
        </section>
    </section>
@endsection
@section('css-me')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection
