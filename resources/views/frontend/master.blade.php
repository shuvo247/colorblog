@php
$allCategory = \App\Models\Category::orderByDesc('id')->get();
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    @include('frontend.partials.head')
</head>
<body>

<!-- LOADER -->
<div id="preloader">
    <img class="preloader" src="{{asset('frontend/images/loader.gif')}}" alt="">
</div><!-- end loader -->
<!-- END LOADER -->

<div id="wrapper">
    <div class="collapse top-search" id="collapseExample">
        <div class="card card-block">
            <div class="newsletter-widget text-center">
                <form action="{{route('search')}}" method="POST" class="form-inline">
                    @csrf
                    <input type="text" class="form-control" name="search" placeholder="What you are looking for?">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                </form>
            </div><!-- end newsletter -->
        </div>
    </div><!-- end top-search -->

    <div class="topbar-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 hidden-xs-down">
                    <div class="topsocial">
                        <a href="{{$site_settings->facebook_link}}" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>
                        <a href="{{$site_settings->youtube_link}}" data-toggle="tooltip" data-placement="bottom" title="Youtube"><i class="fa fa-youtube"></i></a>
                        <a href="{{$site_settings->twitter_link}}" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                        <a href="{{$site_settings->linked_link}}" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa-instagram"></i></a>
                    </div><!-- end social -->
                </div><!-- end col -->

                <div class="col-lg-4 hidden-md-down">
                    <div class="topmenu text-center">
                        <a href="{{url('/')}}"><img src="{{asset('uploads/logo/'.$site_settings->website_logo)}}" alt="" height="50px"></a>
                    </div><!-- end topmenu -->
                </div><!-- end col -->

                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="topsearch text-right">
                        <a data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-search"></i> Search</a>
                    </div><!-- end search -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end header-logo -->
    </div><!-- end topbar -->
    <header class="header">
        @include('frontend.partials.header')
    </header><!-- end header -->
        @yield('content')
        @include('frontend.partials.footer')
    <div class="dmtop">Scroll to Top</div>

</div><!-- end wrapper -->
    @include('frontend.partials.scripts')
</body>
</html>
