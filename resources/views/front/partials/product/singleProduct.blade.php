<div class="col-md-8 col-sm-8 col-xs-12">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <!-- single-blog start -->
            <article class="blog-post-wrapper">
                <div class="post-thumbnail">
                    <img class="imgSingle" src="{{asset('images/product/'.$single->image)}}" alt="{{$single->alt}}"/>
                </div>
                <div class="post-information">
                    <h2>{{$single->title}}</h2>
                    <div class="entry-meta">
                        <span class="author-meta"><i class="fa fa-user"></i> <a
                                href="#">admin</a></span>
                        <span><i class="fa fa-clock-o"></i> march 28, 2016</span>
                        <span class="tag-meta">
                        <i class="fa fa-folder-o"></i>
                        <a href="#">painting</a>,
                        <a href="#">work</a>
                      </span>
                        <span>
                        <i class="fa fa-tags"></i>
                        <a href="#">tools</a>,
                        <a href="#"> Humer</a>,
                        <a href="#">House</a>
                      </span>
                        <span><i class="fa fa-comments-o"></i> <a href="#">6 comments</a></span>
                    </div>
                    <div class="entry-content">
                        <p style="line-height: 30px" class="text-justify">{{$single->body}}</p>
                        <blockquote>
                            <p style="line-height: 30px" class="text-center">{{$single->description}}</p>
                        </blockquote>
                        <p style="line-height: 30px" class="text-center">{{$single->keywords}}</p>
                        <p style="line-height: 30px" class="text-center">{{$single->title_web}}</p>
                    </div>
                </div>
            </article>
            <div class="clear"></div>
            <div class="single-post-comments">
                <div class="comments-area">
                    <div class="comments-heading">
                        <h3>6 comments</h3>
                    </div>
                    <div class="comments-list">
                        <ul>
                            <li class="threaded-comments">
                                <div class="comments-details">
                                    <div class="comments-list-img">
                                        <img src="{{asset('front/img/blog/b02.jpg')}}" alt="post-author">
                                    </div>
                                    <div class="comments-content-wrap">
                              <span>
                                <b><a href="#">demo</a></b>
                                Post author
                                <span class="post-time">October 6, 2014 at 4:25 pm</span>
                                <a href="#">Reply</a>
                              </span>
                                        <p>Quisque semper nunc vitae erat pellentesque, ac placerat
                                            arcu consectetur</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="comments-details">
                                    <div class="comments-list-img">
                                        <img src="{{asset('front/img/blog/b02.jpg')}}" alt="post-author">
                                    </div>
                                    <div class="comments-content-wrap">
                              <span>
                                <b><a href="#">admin</a></b>
                                Post author
                                <span class="post-time">October 6, 2014 at 6:18 pm </span>
                                <a href="#">Reply</a>
                              </span>
                                        <p>Quisque orci nibh, porta vitae sagittis sit amet,
                                            vehicula vel mauris. Aenean at justo dolor. Fusce ac
                                            sapien bibendum, scelerisque libero nec</p>
                                    </div>
                                </div>
                            </li>
                            <li class="threaded-comments">
                                <div class="comments-details">
                                    <div class="comments-list-img">
                                        <img src="{{asset('front/img/blog/b02.jpg')}}" alt="post-author">
                                    </div>
                                    <div class="comments-content-wrap">
                              <span>
                                <b><a href="#">demo</a></b>
                                Post author
                                <span class="post-time">October 6, 2014 at 7:25 pm</span>
                                <a href="#">Reply</a>
                              </span>
                                        <p>Quisque semper nunc vitae erat pellentesque, ac placerat
                                            arcu consectetur</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="comment-respond">
                    <h3 class="comment-reply-title">Leave a Reply </h3>
                    <span
                        class="email-notes">Your email address will not be published. Required fields are marked *</span>
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <p>Name *</p>
                                <input type="text"/>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <p>Email *</p>
                                <input type="email"/>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <p>Website</p>
                                <input type="text"/>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 comment-form-comment">
                                <p>Website</p>
                                <textarea id="message-box" cols="30" rows="10"></textarea>
                                <input type="submit" value="Post Comment"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- single-blog end -->
        </div>
    </div>
</div>
