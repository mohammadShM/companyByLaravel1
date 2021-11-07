<div class="col-md-4 col-sm-4 col-xs-12">
    <div class="footer-content">
        <div class="footer-head">
            <h4>Relational Links</h4>
             <div class="flicker-img">
                {{-- <a href="#"><img src="{{asset("front/img/portfolio/1.jpg")}}" alt=""></a> --}}
                {{-- <a href="#"><img src="{{asset("front/img/portfolio/2.jpg")}}" alt=""></a> --}}
                {{-- <a href="#"><img src="{{asset("front/img/portfolio/3.jpg")}}" alt=""></a> --}}
                {{-- <a href="#"><img src="{{asset("front/img/portfolio/4.jpg")}}" alt=""></a> --}}
                {{-- <a href="#"><img src="{{asset("front/img/portfolio/5.jpg")}}" alt=""></a> --}}
                {{-- <a href="#"><img src="{{asset("front/img/portfolio/6.jpg")}}" alt=""></a> --}}
                 <div class="row">
                @forelse ($link as $item)
                      <div class="col-12 mt-2">
                          <a class="nav-item" href="{{$item->link}}">{{$item->name}}</a>
                      </div>
                @empty
                    <h3>no data</h3>
                @endforelse
                 </div>
            </div>
        </div>
    </div>
</div>
