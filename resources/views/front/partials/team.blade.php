<div id="team" class="our-team-area area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <h2>Our special Team</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @forelse ($team as $item)
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="single-team-member">
                        <div class="team-img single-blog-img-for-me">
                            <a href="#">
                                <img src="{{asset("images/team/".$item->image)}}" alt="{{$item->alt}}">
                            </a>
                            <div class="team-social-icon text-center">
                                <ul>
                                    <li>
                                        <a href="{{$item->linkedin}}">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{$item->telegram}}">
                                            <i class="fa fa-telegram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{$item->instagram}}">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content text-center">
                            <h4>{{$item->fullName}}</h4>
                            <p>{{$item->job}}</p>
                        </div>
                    </div>
                </div>
            @empty
                <h3>no data</h3>
            @endforelse
        </div>
    </div>
</div>
