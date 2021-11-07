<div class="blog-page area-padding">
    <div class="container">
        <div class="row">
            <!-- start left sidebar -->
        @include('front.partials.product.recentProduct',['recent'=>$recent])
        <!-- End left sidebar -->
            <!-- Start single blog -->
        @include('front.partials.product.singleProduct',['single'=>$single])
        <!-- End single blog -->
        </div>
    </div>
</div>
@section('seo-me')
    @if (!empty($single))
        <title>{{$single->title_web}}</title>
        <meta name="keywords" content="{{$single->keywords}}"/>
        <meta name="description" content="{{$single->description}}"/>
        <meta name="robots" content="index,follow"/>
        <meta property="og:title" content="{{$single->title_web}}"/>
        <meta property="og:site_name" content="{{$single->title_web}}"/>
        <meta property="og:description" content="{{$single->description}}"/>
        <meta property="og:keywords" content="{{$single->keywords}}"/>
        <meta property="og:image" content="{{asset('images/product/'.$single->image)}}"/>
    @else
        <title>Product Page | Sample web site</title>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <meta name="author" content=""/>
        <meta name="robots" content="index,follow"/>
        <meta property="og:title" content=""/>
        <meta property="og:site_name" content=""/>
        <meta property="og:description" content=""/>
        <meta property="og:keywords" content=""/>
        <meta property="og:image" content=""/>
    @endif
@endsection
