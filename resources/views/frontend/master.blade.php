<!DOCTYPE html>
<html lang="en">
@include('frontend.partials.head')
<body>
<!-- Top Bar Start -->
<div class="top-bar">
    @include('frontend.inc.top-bar')
</div>
<!-- Top Bar Start -->

<!-- Brand Start -->
<div class="brand">
    @include('frontend.inc.topbar-brand')
</div>
<!-- Brand End -->

<!-- Nav Bar Start -->
<div class="nav-bar">
    @include('frontend.inc.top-navbar')
</div>
<!-- Nav Bar End -->

<!-- Top News Start-->
<div class="top-news">
    @include('frontend.inc.top-news')
</div>
<!-- Top News End-->

<!-- Category News Start-->
<div class="cat-news">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Sports</h2>
                <div class="row cn-slider">
                    <div class="col-md-6">
                        <div class="cn-img">
                            <img src="{{asset('frontend/img/news-350x223-1.jpg')}}" />
                            <div class="cn-title">
                                <a href="">Lorem ipsum dolor sit</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="cn-img">
                            <img src="{{asset('frontend/img/news-350x223-2.jpg')}}" />
                            <div class="cn-title">
                                <a href="">Lorem ipsum dolor sit</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="cn-img">
                            <img src="{{asset('fronend/img/news-350x223-3.jpg')}}" />
                            <div class="cn-title">
                                <a href="">Lorem ipsum dolor sit</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="cn-img">
                            <img src="{{asset('frontend/img/news-350x223-1.jpg')}}" />
                            <div class="cn-title">
                                <a href="">Lorem ipsum dolor sit</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="cn-img">
                            <img src="{{asset('frontend/img/news-350x223-1.jpg')}}" />
                            <div class="cn-title">
                                <a href="">Lorem ipsum dolor sit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Category News End-->

<!-- Category News Start-->
<div class="cat-news">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Business</h2>
                <div class="row cn-slider">
                    <div class="col-md-6">
                        <div class="cn-img">
                            <img src="img/news-350x223-5.jpg" />
                            <div class="cn-title">
                                <a href="">Lorem ipsum dolor sit</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="cn-img">
                            <img src="img/news-350x223-4.jpg" />
                            <div class="cn-title">
                                <a href="">Lorem ipsum dolor sit</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="cn-img">
                            <img src="img/news-350x223-3.jpg" />
                            <div class="cn-title">
                                <a href="">Lorem ipsum dolor sit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h2>Entertainment</h2>
                <div class="row cn-slider">
                    <div class="col-md-6">
                        <div class="cn-img">
                            <img src="img/news-350x223-2.jpg" />
                            <div class="cn-title">
                                <a href="">Lorem ipsum dolor sit</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="cn-img">
                            <img src="img/news-350x223-1.jpg" />
                            <div class="cn-title">
                                <a href="">Lorem ipsum dolor sit</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="cn-img">
                            <img src="img/news-350x223-3.jpg" />
                            <div class="cn-title">
                                <a href="">Lorem ipsum dolor sit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Category News End-->

<!-- Tab News Start-->
<div class="tab-news">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <ul class="nav nav-pills nav-justified">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="pill" href="#featured">Featured News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#popular">Popular News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#latest">Latest News</a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div id="featured" class="container tab-pane active">
                        <div class="tn-news">
                            <div class="tn-img">
                                <img src="img/news-350x223-1.jpg" />
                            </div>
                            <div class="tn-title">
                                <a href="">Lorem ipsum dolor sit amet</a>
                            </div>
                        </div>
                        <div class="tn-news">
                            <div class="tn-img">
                                <img src="img/news-350x223-2.jpg" />
                            </div>
                            <div class="tn-title">
                                <a href="">Lorem ipsum dolor sit amet</a>
                            </div>
                        </div>
                        <div class="tn-news">
                            <div class="tn-img">
                                <img src="img/news-350x223-3.jpg" />
                            </div>
                            <div class="tn-title">
                                <a href="">Lorem ipsum dolor sit amet</a>
                            </div>
                        </div>
                    </div>
                    <div id="popular" class="container tab-pane fade">
                        <div class="tn-news">
                            <div class="tn-img">
                                <img src="img/news-350x223-4.jpg" />
                            </div>
                            <div class="tn-title">
                                <a href="">Lorem ipsum dolor sit amet</a>
                            </div>
                        </div>
                        <div class="tn-news">
                            <div class="tn-img">
                                <img src="img/news-350x223-5.jpg" />
                            </div>
                            <div class="tn-title">
                                <a href="">Lorem ipsum dolor sit amet</a>
                            </div>
                        </div>
                        <div class="tn-news">
                            <div class="tn-img">
                                <img src="img/news-350x223-1.jpg" />
                            </div>
                            <div class="tn-title">
                                <a href="">Lorem ipsum dolor sit amet</a>
                            </div>
                        </div>
                    </div>
                    <div id="latest" class="container tab-pane fade">
                        <div class="tn-news">
                            <div class="tn-img">
                                <img src="img/news-350x223-2.jpg" />
                            </div>
                            <div class="tn-title">
                                <a href="">Lorem ipsum dolor sit amet</a>
                            </div>
                        </div>
                        <div class="tn-news">
                            <div class="tn-img">
                                <img src="img/news-350x223-3.jpg" />
                            </div>
                            <div class="tn-title">
                                <a href="">Lorem ipsum dolor sit amet</a>
                            </div>
                        </div>
                        <div class="tn-news">
                            <div class="tn-img">
                                <img src="img/news-350x223-4.jpg" />
                            </div>
                            <div class="tn-title">
                                <a href="">Lorem ipsum dolor sit amet</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <ul class="nav nav-pills nav-justified">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="pill" href="#m-viewed">Most Viewed</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#m-read">Most Read</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#m-recent">Most Recent</a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div id="m-viewed" class="container tab-pane active">
                        <div class="tn-news">
                            <div class="tn-img">
                                <img src="img/news-350x223-5.jpg" />
                            </div>
                            <div class="tn-title">
                                <a href="">Lorem ipsum dolor sit amet</a>
                            </div>
                        </div>
                        <div class="tn-news">
                            <div class="tn-img">
                                <img src="img/news-350x223-4.jpg" />
                            </div>
                            <div class="tn-title">
                                <a href="">Lorem ipsum dolor sit amet</a>
                            </div>
                        </div>
                        <div class="tn-news">
                            <div class="tn-img">
                                <img src="img/news-350x223-3.jpg" />
                            </div>
                            <div class="tn-title">
                                <a href="">Lorem ipsum dolor sit amet</a>
                            </div>
                        </div>
                    </div>
                    <div id="m-read" class="container tab-pane fade">
                        <div class="tn-news">
                            <div class="tn-img">
                                <img src="img/news-350x223-2.jpg" />
                            </div>
                            <div class="tn-title">
                                <a href="">Lorem ipsum dolor sit amet</a>
                            </div>
                        </div>
                        <div class="tn-news">
                            <div class="tn-img">
                                <img src="img/news-350x223-1.jpg" />
                            </div>
                            <div class="tn-title">
                                <a href="">Lorem ipsum dolor sit amet</a>
                            </div>
                        </div>
                        <div class="tn-news">
                            <div class="tn-img">
                                <img src="img/news-350x223-3.jpg" />
                            </div>
                            <div class="tn-title">
                                <a href="">Lorem ipsum dolor sit amet</a>
                            </div>
                        </div>
                    </div>
                    <div id="m-recent" class="container tab-pane fade">
                        <div class="tn-news">
                            <div class="tn-img">
                                <img src="img/news-350x223-4.jpg" />
                            </div>
                            <div class="tn-title">
                                <a href="">Lorem ipsum dolor sit amet</a>
                            </div>
                        </div>
                        <div class="tn-news">
                            <div class="tn-img">
                                <img src="img/news-350x223-5.jpg" />
                            </div>
                            <div class="tn-title">
                                <a href="">Lorem ipsum dolor sit amet</a>
                            </div>
                        </div>
                        <div class="tn-news">
                            <div class="tn-img">
                                <img src="img/news-350x223-1.jpg" />
                            </div>
                            <div class="tn-title">
                                <a href="">Lorem ipsum dolor sit amet</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Tab News Start-->

<!-- Main News Start-->
<div class="main-news">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-md-4">
                        <div class="mn-img">
                            <img src="img/news-350x223-1.jpg" />
                            <div class="mn-title">
                                <a href="">Lorem ipsum dolor sit</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mn-img">
                            <img src="img/news-350x223-2.jpg" />
                            <div class="mn-title">
                                <a href="">Lorem ipsum dolor sit</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mn-img">
                            <img src="img/news-350x223-3.jpg" />
                            <div class="mn-title">
                                <a href="">Lorem ipsum dolor sit</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mn-img">
                            <img src="img/news-350x223-4.jpg" />
                            <div class="mn-title">
                                <a href="">Lorem ipsum dolor sit</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mn-img">
                            <img src="img/news-350x223-5.jpg" />
                            <div class="mn-title">
                                <a href="">Lorem ipsum dolor sit</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mn-img">
                            <img src="img/news-350x223-1.jpg" />
                            <div class="mn-title">
                                <a href="">Lorem ipsum dolor sit</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mn-img">
                            <img src="img/news-350x223-2.jpg" />
                            <div class="mn-title">
                                <a href="">Lorem ipsum dolor sit</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mn-img">
                            <img src="img/news-350x223-3.jpg" />
                            <div class="mn-title">
                                <a href="">Lorem ipsum dolor sit</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mn-img">
                            <img src="img/news-350x223-4.jpg" />
                            <div class="mn-title">
                                <a href="">Lorem ipsum dolor sit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="mn-list">
                    <h2>Read More</h2>
                    <ul>
                        <li><a href="">Lorem ipsum dolor sit amet</a></li>
                        <li><a href="">Pellentesque tincidunt enim libero</a></li>
                        <li><a href="">Morbi id finibus diam vel pretium enim</a></li>
                        <li><a href="">Duis semper sapien in eros euismod sodales</a></li>
                        <li><a href="">Vestibulum cursus lorem nibh</a></li>
                        <li><a href="">Morbi ullamcorper vulputate metus non eleifend</a></li>
                        <li><a href="">Etiam vitae elit felis sit amet</a></li>
                        <li><a href="">Nullam congue massa vitae quam</a></li>
                        <li><a href="">Proin sed ante rutrum</a></li>
                        <li><a href="">Curabitur vel lectus</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main News End-->

@include('frontend.partials.footer')
<!-- Back to Top -->
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

@include('frontend.partials.scripts')
</body>
</html>
