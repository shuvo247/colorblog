<div class="container">
    <nav class="navbar navbar-inverse navbar-toggleable-md">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#cloapediamenu" aria-controls="cloapediamenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-md-center" id="cloapediamenu">
            <ul class="navbar-nav">
                @foreach($allCategory as $category)
                    <li class="nav-item">
                        <a class="nav-link color-pink-hover" href="{{route('category.post',['category_slug' => $category->category_slug])}}">{{$category->category_name}}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </nav>
</div><!-- end container -->
