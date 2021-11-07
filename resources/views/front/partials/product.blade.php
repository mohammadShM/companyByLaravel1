<div id="product" class="blog-area">
    <div class="blog-inner area-padding">
        <div class="blog-overly"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xl-12">
                    <div class="section-headline text-center">
                        <h2>Product Company</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @forelse ($products as $item)
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="single-blog mb-2 mt-2 mr-1 card shadow p-3 border-5">
                            <div class="single-blog-img single-blog-img-for-me">
                                <a href="{{route('home.product',['id'=>$item->id])}}">
                                    <img src="{{asset("images/product/".$item->image)}}" alt="{{$item->alt}}">
                                </a>
                            </div>
                            <div class="blog-meta">
                                <span class="date-type">
                                    <i class="fa fa-calendar pl-1"></i>
                                    <span>{{$item->created_at}}</span>
                                </span>
                            </div>
                            <div class="blog-text">
                                <h4>
                                    {{$item->title}}
                                </h4>
                                <p>
                                    {{\Illuminate\Support\Str::limit($item->body,150)}}
                                </p>
                            </div>
                            <span>
                                <a href="{{route('home.product',['id'=>$item->id])}}"
                                   class="btn btn-info btn-block">Read more</a>
                            </span>
                        </div>
                    </div>
                @empty
                    <div class="col-10 offset-1">
                        <h2 class="text-center">no data</h2>
                    </div>
                @endforelse
            </div>
            <div class="row m-0">
                <section class="col-8 offset-2 mt-5">
                    <div class="d-flex justify-content-center">
                        {{$products->links()}}
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
