<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <div class="widget">
                    <h2 class="widget-title">Recent Posts</h2>
                    <div class="blog-list-widget">
                        <div class="list-group">
                            @include('frontend.inc.recent-post')
                        </div>
                    </div><!-- end blog-list -->
                </div><!-- end widget -->
            </div><!-- end col -->

            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <div class="widget">
                    <h2 class="widget-title">Popular Posts</h2>
                    <div class="blog-list-widget">
                        <div class="list-group">
                            <a href="single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                <div class="w-100 justify-content-between">
                                    <img src="{{asset('frontend')}}/upload/blog_square_04.jpg" alt="" class="img-fluid float-left">
                                    <h5 class="mb-1">Banana-chip chocolate cake recipe with customs</h5>
                                    <span class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                </div>
                            </a>

                            <a href="single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                <div class="w-100 justify-content-between">
                                    <img src="{{asset('frontend')}}/upload/blog_square_07.jpg" alt="" class="img-fluid float-left">
                                    <h5 class="mb-1">10 practical ways to choose organic vegetables</h5>
                                    <span class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                </div>
                            </a>

                            <a href="single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                <div class="w-100 last-item justify-content-between">
                                    <img src="{{asset('frontend')}}/upload/blog_square_06.jpg" alt="" class="img-fluid float-left">
                                    <h5 class="mb-1">We are making homemade ravioli, nice and good</h5>
                                    <span class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                </div>
                            </a>
                        </div>
                    </div><!-- end blog-list -->
                </div><!-- end widget -->
            </div><!-- end col -->

            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <div class="widget">
                    <h2 class="widget-title">Popular Categories</h2>
                    <div class="link-widget">
                        <ul>
                            <li><a href="#">Fahsion <span>(21)</span></a></li>
                            <li><a href="#">Lifestyle <span>(15)</span></a></li>
                            <li><a href="#">Art & Design <span>(31)</span></a></li>
                            <li><a href="#">Health Beauty <span>(22)</span></a></li>
                            <li><a href="#">Clothing <span>(66)</span></a></li>
                            <li><a href="#">Entertaintment <span>(11)</span></a></li>
                            <li><a href="#">Food & Drink <span>(87)</span></a></li>
                        </ul>
                    </div><!-- end link-widget -->
                </div><!-- end widget -->
            </div><!-- end col -->
        </div><!-- end row -->

        <hr class="invis1">

        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="widget">
                    <div class="footer-text text-center">
                        <a href="index.html"><img src="{{asset('uploads/logo/'.$site_settings->website_logo)}}" alt="" class="img-fluid"></a>
                        <p style="text-align: justify">We Color Ceramics Ltd. Pleased to introduce ourselves as an offline and online sales and reseller of All Type of ceramics product, ceramics related products and building materials product in Bangladesh. This is first time in history we are going to start our business operation in online platform. Our goal is to make first step advance digital multi-vendor "ceramics" e-commerce web site. Determined to build a digital Bangladesh and It feels so good to be a collaborator.</p>
                        <div class="social">
                            <a href="{{$site_settings->facebook_link}}" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a href="{{$site_settings->youtube_link}}" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-youtube"></i></a>
                            <a href="{{$site_settings->twitter_link}}" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                            <a href="{{$site_settings->linked_link}}" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa-instagram"></i></a>
                        </div>
                        <hr class="invis">
                    </div><!-- end footer-text -->
                </div><!-- end widget -->
            </div><!-- end col -->
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <br>
                <div class="copyright">&copy; {{$site_settings->copywrite_text}}.</div>
            </div>
        </div>
    </div><!-- end container -->
</footer><!-- end footer -->
