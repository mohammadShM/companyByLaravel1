<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Panel Website</title>
    <!-- ===================== link ===================== -->
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    @yield('css-me')
</head>
<body>
<!-- ===================== make panel ===================== -->
<section class="container-fluid p-0">
    <!-- ===================== make menu ===================== -->
    <section class="nav-menu">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <!-- ===================== Brand ===================== -->
            <a class="navbar-brand" target="_blank" href="{{route('home.page')}}">Home</a>
            <!-- ===================== Toggler/collapsibe Button ===================== -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- ===================== Navbar links ===================== -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{route('panel.show.data')}}">show seo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{route('panel.create')}}">create seo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{route('slider.index')}}">show slider</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{route('about.index')}}">show about</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{route('product.index')}}">show product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{route('team.index')}}">show team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{route('post.index')}}">show post</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{route('info.index')}}">show info</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{route('social.index')}}">show social</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{route('link.index')}}">show link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{route('contact.index')}}">show contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout-panel') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </nav>
    </section>
    <!-- ===================== make content ===================== -->
    <section class="content">
        @yield('content-me')
    </section>
    <!-- ===================== end make content ===================== -->
    <!-- ===================== end make menu ===================== -->
</section>
<!-- ===================== end make panel ===================== -->
<!-- ===================== link ===================== -->
<script src="{{asset("js/app.js")}}"></script>
@yield('js-me')
</body>
</html>
