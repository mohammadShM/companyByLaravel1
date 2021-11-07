<div class="blog-page area-padding">
    <div class="container">
        <div class="row">
            <!-- start left sidebar -->
        @include('front.partials.post.recentPost',['recent'=>$recent])
        <!-- End left sidebar -->
            <!-- Start post blog -->
        @include('front.partials.post.singlePost',['post'=>$post])
        <!-- End post blog -->
        </div>
    </div>
</div>
@section('seo-me')
    @if (!empty($post))
        <title>{{$post->title}}</title>
        <meta name="keywords" content="{{$post->keywords}}"/>
        <meta name="description" content="{{$post->description}}"/>
        <meta name="author" content="{{$post->author}}"/>
        <meta name="robots" content="index,follow"/>
        <meta property="og:title" content="{{$post->subject}}"/>
        <meta property="og:site_name" content="{{$post->title}}"/>
        <meta property="og:description" content="{{$post->description}}"/>
        <meta property="og:keywords" content="{{$post->keywords}}"/>
        <meta property="og:image" content="{{asset('images/post/'.$post->image)}}"/>
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
