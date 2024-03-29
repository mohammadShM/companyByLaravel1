<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="page-head-blog">
        <div class="single-blog-page">
            <!-- search option start -->
            <form action="#">
                <div class="search-option">
                    <input type="text" placeholder="Search...">
                    <button class="button" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </form>
            <!-- search option end -->
        </div>
        <div class="single-blog-page">
            <!-- recent start -->
            <div class="left-blog">
                <h4>recent post</h4>
                <div class="recent-post">
                    <!-- start single product -->
                    @forelse ($recent as $item)
                        <div class="recent-single-post">
                            <div class="post-img">
                                <a href="{{route('home.product',['id'=>$item->id])}}">
                                    <img src="{{asset('images/product/'.$item->image)}}" alt="{{$item->alt}}">
                                </a>
                            </div>
                            <div class="pst-content">
                                <p><a href="{{route('home.product',['id'=>$item->id])}}">
                                        {{\Illuminate\Support\Str::limit($item->body,100)}}</a></p>
                            </div>
                        </div>
                    @empty
                        <h2 class="text-center">no data</h2>
                @endforelse
                <!-- End single product -->
                </div>
            </div>
            <!-- recent end -->
        </div>
        <div class="single-blog-page">
            <div class="left-blog">
                <h4>categories</h4>
                <ul>
                    <li>
                        <a href="#">Portfolio</a>
                    </li>
                    <li>
                        <a href="#">Project</a>
                    </li>
                    <li>
                        <a href="#">Design</a>
                    </li>
                    <li>
                        <a href="#">wordpress</a>
                    </li>
                    <li>
                        <a href="#">Joomla</a>
                    </li>
                    <li>
                        <a href="#">Html</a>
                    </li>
                    <li>
                        <a href="#">Website</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="single-blog-page">
            <div class="left-blog">
                <h4>archive</h4>
                <ul>
                    <li>
                        <a href="#">07 July 2016</a>
                    </li>
                    <li>
                        <a href="#">29 June 2016</a>
                    </li>
                    <li>
                        <a href="#">13 May 2016</a>
                    </li>
                    <li>
                        <a href="#">20 March 2016</a>
                    </li>
                    <li>
                        <a href="#">09 Fabruary 2016</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="single-blog-page">
            <div class="left-tags blog-tags">
                <div class="popular-tag left-side-tags left-blog">
                    <h4>popular tags</h4>
                    <ul>
                        <li>
                            <a href="#">Portfolio</a>
                        </li>
                        <li>
                            <a href="#">Project</a>
                        </li>
                        <li>
                            <a href="#">Design</a>
                        </li>
                        <li>
                            <a href="#">wordpress</a>
                        </li>
                        <li>
                            <a href="#">Joomla</a>
                        </li>
                        <li>
                            <a href="#">Html</a>
                        </li>
                        <li>
                            <a href="#">Masonry</a>
                        </li>
                        <li>
                            <a href="#">Website</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
