<div id="home" class="slider-area slider-for-me">
    <div class="bend niceties preview-2 slider-for-me">
        <div id="ensign-nivoslider" class="slides slider-for-me">
            @foreach ($sliders as $value=>$item)
                <img src="{{asset("images/slider/".$item->image)}}" alt="{{$item->alt}}"
                     title="#slider-direction-{{$value+1}}"/>
            @endforeach
        </div>
        <!-- direction  -->
        @foreach ($sliders as $value=>$item)
            <div id="slider-direction-{{$value+1}}" class="slider-direction slider-one slider-for-me">
                <div class="container slider-for-me">
                    <div class="row slider-for-me">
                        <div class="col-md-12 col-sm-12 col-xs-12 slider-for-me">
                            <div class="slider-content slider-for-me">
                                <!-- layer 1 -->
                                <div class="layer-1-1 hidden-xs wow animate__slideInDown animate__animated"
                                     data-wow-duration="2s" data-wow-delay=".2s">
                                    <h2 class="title1">{{$item->title}}</h2>
                                </div>
                                <!-- layer 2 -->
                                <div class="layer-1-2 wow animate__fadeIn animate__animated" data-wow-duration="2s"
                                     data-wow-delay=".2s">
                                    <h1 class="title2">{{$item->caption}}</h1>
                                </div>
                                <!-- layer 3 -->
                                <div class="layer-1-3 hidden-xs wow animate__slideInUp animate__animated"
                                     data-wow-duration="2s" data-wow-delay=".2s">
                                    <a class="ready-btn right-btn page-scroll" href="#services">See Services</a>
                                    <a class="ready-btn page-scroll" href="#about">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
