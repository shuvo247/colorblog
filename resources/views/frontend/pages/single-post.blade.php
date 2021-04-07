@extends('frontend.master')
@section('title')
{{$site_settings->website_title}} | {{$getSinglePost->post_title}}
@endsection
@section('meta_title')
    {{$getSinglePost->post_title}}
@endsection
@section('meta_description')
    {!! $getSinglePost->post_description !!}
@endsection
@section('meta_image')
    {{asset('uploads/post/'.$getSinglePost->post_thumbnail)}}
@endsection
@section('content')
    <section class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-wrapper">
                        <div class="blog-title-area">
                            <ol class="breadcrumb hidden-xs-down">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{route('category.post',['category_slug' => $getSinglePost->category->category_slug])}}">{{$getSinglePost->category->category_name}}</a></li>
                                <li class="breadcrumb-item active">{{$getSinglePost->post_title}}</li>
                            </ol>

                            <span class="color-aqua"><a href="{{route('category.post',['category_slug' => $getSinglePost->category->category_slug])}}" title="">{{$getSinglePost->category->category_name}}</a></span>

                            <h3>{{$getSinglePost->post_title}}</h3>

                            <div class="blog-meta big-meta">
                                <small><a href="single.html" title="">{{$getSinglePost->created_at->toFormattedDateString()}}</a></small>
                            </div><!-- end meta -->

                            <div class="post-sharing">
                                <ul class="list-inline">
                                    <li><a href="https://www.facebook.com/sharer/sharer.php?u={{url('/single/post?post_slug=')}}{{ $getSinglePost->post_slug }}" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="down-mobile">Share on Facebook</span></a></li>
                                    <li><a href="https://twitter.com/share?url={{url('/single/post?post_slug=')}}{{ $getSinglePost->post_slug }}" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="down-mobile">Tweet on Twitter</span></a></li>
                                </ul>
                            </div><!-- end post-sharing -->
                        </div><!-- end title -->

                        <div class="single-post-media">
                            <img src="{{asset('uploads/post/'.$getSinglePost->post_thumbnail)}}" alt="" style="height: 600px !important;width: 800px !important;" class="img-fluid">
                        </div><!-- end media -->

                        <div class="blog-content">
                            {!! $getSinglePost->post_description !!}
                        </div><!-- end content -->

                        <div class="blog-title-area">
                            <div class="post-sharing">
                                <ul class="list-inline">
                                    <li><a href="https://www.facebook.com/sharer/sharer.php?u={{url('/single/post?post_slug=')}}{{ $getSinglePost->post_slug }}" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="down-mobile">Share on Facebook</span></a></li>
                                    <li><a href="https://twitter.com/share?url={{url('/single/post?post_slug=')}}{{ $getSinglePost->post_slug }}" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="down-mobile">Tweet on Twitter</span></a></li>
                                </ul>
                            </div><!-- end post-sharing -->
                        </div><!-- end title -->
                    </div><!-- end page-wrapper -->
                </div><!-- end col -->

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
                    </div><!-- end sidebar -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
@endsection
