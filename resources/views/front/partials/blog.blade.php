<div id="blog" class="blog-area">
    <div class="blog-inner area-padding">
        <div class="blog-overly"></div>
        <div class="container ">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h2>Latest News</h2>
                    </div>
                </div>
            </div>
            <div class="row">
            @forelse ($post as $item)
                <!-- Start Left Blog -->
                    <div class="col-md-4 col-sm-4 col-xs-12 mb-5">
                        <div class="single-blog  card shadow-sm">
                            <div class="single-blog-img single-blog-img-for-me">
                                <a href="{{route('home.post',['id'=>$item->id])}}">
                                    <img src="{{asset("images/post/".$item->image)}}" alt="{{$item->alt}}">
                                </a>
                            </div>
                            <div class="blog-meta">
                  <span class="comments-type">
                    <i class="fa fa-comment-o"></i>
                    <a href="{{route('home.post',['id'=>$item->id])}}">13 comments</a>
                  </span>
                                <span class="date-type">
                    <i class="fa fa-calendar"></i>{{$item->created_at}}
                  </span>
                            </div>
                            <div class="blog-text p-2">
                                <h4>
                                    <a href="{{route('home.post',['id'=>$item->id])}}">{{$item->subject}}</a>
                                </h4>
                                <p>{{\Illuminate\Support\Str::limit($item->body,220)}}</p>
                            </div>
                            <span class="text-center pb-3">
                  <a href="{{route('home.post',['id'=>$item->id])}}" class="ready-btn">Read more</a>
                </span>
                        </div>
                        <!-- Start single blog -->
                    </div>
                    <!-- End Left Blog-->
                @empty
                    <h3>no data</h3>
                @endforelse
            </div>
            <div class="row m-0">
                <section class="col-8 offset-2 mt-5">
                    <div class="d-flex justify-content-center">
                        {{$post->links()}}
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
