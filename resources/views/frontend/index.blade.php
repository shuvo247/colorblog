@extends('frontend.master')
@section('title')
    {{$site_settings->website_title}}
@endsection
@php
    $allCategorySetting = \App\Models\CategorySetting::all();
@endphp
@section('content')
<section class="section">
    <div class="container">
        <div class="row">
            @foreach($allCategorySetting as $category_setting)
                @php
                    $getPost = \App\Models\Post::where('category_id',$category_setting->category_id)->orderByDesc('id')->take(6)->get();
                @endphp
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="section-title">
                        <h3 class="color-aqua"><a href="{{route('category.post',['category_slug' => $category_setting->category->category_slug])}}" title="">{{$category_setting->category->category_name}}</a></h3>
                    </div><!-- end title -->

                    <div class="row">
                        @foreach($getPost as $post)
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="blog-box">
                                    <div class="post-media">
                                        <a href="{{route('single.post',['post_slug' => $post->post_slug])}}" title="">
                                            <img src="{{asset('uploads/post/'.$post->post_thumbnail)}}" alt="" class="img-fluid" style="height: 300px;">
                                            <div class="hovereffect">
                                                <span></span>
                                            </div><!-- end hover -->
                                        </a>
                                    </div><!-- end media -->
                                    <div class="blog-meta">
                                        @php
                                            $value = Str::limit($post->post_description,100);
                                        @endphp
                                        <span class="bg-pink">{!! $value !!}</span>
                                        <h4><a href="{{route('single.post',['post_slug' => $post->post_slug])}}" title="">{{$post->post_title}}</a></h4>
                                        <small>{{$post->created_at->toFormattedDateString()}}</small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->
                                <hr class="invis">
                            </div><!-- end col -->
                        @endforeach
                    </div><!-- end row -->
                </div><!-- end col -->
            @endforeach
        </div><!-- end row -->
    </div><!-- end container -->
</section>
@endsection
