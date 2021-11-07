@if (!empty($seo))
    <title>{{$seo->title}}</title>
    <meta name="keywords" content="{{$seo->keywords}}"/>
    <meta name="description" content="{{$seo->description}}"/>
    <meta name="author" content="{{$seo->author}}"/>
    <meta name="robots" content="index,follow"/>
    <meta property="og:title" content="{{$seo->title}}"/>
    <meta property="og:site_name" content="{{$seo->title}}"/>
    <meta property="og:description" content="{{$seo->description}}"/>
    <meta property="og:keywords" content="{{$seo->keywords}}"/>
    <meta property="og:image" content=""/>
@else
    <title>Home Page | Sample web site</title>
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
