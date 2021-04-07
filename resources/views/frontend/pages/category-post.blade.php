@extends('frontend.master')
@section('title')
    {{$site_settings->website_title}} | {{$getPost[0]->category->category_name}}
@endsection
@section('meta_title')
    {{$getPost[0]->category->category_name}}
@endsection
@section('content')
    <section class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                    <div class="sidebar">
                        <div class="widget">
                            <h2 class="widget-title">Search</h2>
                            <form class="form-inline search-form">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Search on the site">
                                </div>
                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                            </form>
                        </div><!-- end widget -->

                        <div class="widget">
                            <h2 class="widget-title">Recent Posts</h2>
                            <div class="blog-list-widget">
                                <div class="list-group">
                                    @include('frontend.inc.recent-post')
                                </div>
                            </div><!-- end blog-list -->
                        </div><!-- end widget -->
                        <div class="widget">
                            <h2 class="widget-title">Popular Categories</h2>
                            <div class="link-widget">
                                <ul>
                                    <li><a href="#">Fahsion <span>(21)</span></a></li>
                                </ul>
                            </div><!-- end link-widget -->
                        </div><!-- end widget -->
                    </div><!-- end sidebar -->
                </div><!-- end col -->

                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-wrapper">
                        <hr class="invis">
                        <div class="portfolio row">
                            @foreach($getPost as $post)
                            <div class="pitem item-w1 item-h1">
                                <div class="blog-box">
                                    <div class="post-media">
                                        <a href="{{route('single.post',['post_slug' => $post->post_slug])}}" title="">
                                            <img src="{{asset('uploads/post/'.$post->post_thumbnail)}}" alt="" class="img-fluid" style="width: 300px;height: 300px;">
                                            <div class="hovereffect">
                                                <span></span>
                                            </div><!-- end hover -->
                                        </a>
                                    </div><!-- end media -->
                                    <div class="blog-meta">
                                        <span class="bg-pink">{{$post->category->category_name}}</span>
                                        <h4><a href="{{route('single.post',['post_id' => $post->id])}}" title="">{{$post->post_title}}</a></h4>
                                        <small>{{$post->created_at->toFormattedDateString()}}</small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->
                            </div><!-- end col -->
                            @endforeach
                        </div><!-- end portfolio -->
                    </div><!-- end page-wrapper -->

                    <hr class="invis">
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
@endsection
