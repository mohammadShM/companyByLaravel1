<div id="about" class="about-area area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <h2>{{$about->title}}</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- single-well start-->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="well-left">
                    <div class="single-well">
                        <a href="#">
                            <img src="{{asset("images/about/".$about->image)}}" alt="{{$about->alt}}">
                        </a>
                    </div>
                </div>
            </div>
            <!-- single-well end-->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="well-middle">
                    <div class="single-well">
                        <a href="#">
                            <h4 class="sec-head">{{$about->title}}</h4>
                        </a>
                        <p style="line-height: 30px;font-size: 15px;text-align: justify;">
                            {{$about->description}}</p>
                        <ul>
                            <li>
                                <i class="fa fa-check"></i> Interior design Package
                            </li>
                            <li>
                                <i class="fa fa-check"></i> Building House
                            </li>
                            <li>
                                <i class="fa fa-check"></i> Reparing of Residentail Roof
                            </li>
                            <li>
                                <i class="fa fa-check"></i> Renovaion of Commercial Office
                            </li>
                            <li>
                                <i class="fa fa-check"></i> Make Quality Products
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End col-->
        </div>
    </div>
</div>
