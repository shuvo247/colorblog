<aside class="app-sidebar">
    <div class="app-sidebar__user">
        <div>
            <p class="app-sidebar__user-name">{{Auth::user()->name ? Auth::user()->name : "Color Ceramics"}}</p>
        </div>
    </div>
    <ul class="app-menu">
        <li><a class="app-menu__item active" href="/home">
                <i class="app-menu__icon fa fa-dashboard"></i>
                <span class="app-menu__label">Dashboard</span>
            </a>
        </li>
        <li><a class="app-menu__item" href="{{route('slider.list')}}">
                <i class="app-menu__icon fa fa-pie-chart"></i>
                <span class="app-menu__label">Slider</span>
            </a>
        </li>
        <li><a class="app-menu__item" href="{{route('category.list')}}">
                <i class="app-menu__icon fa fa-pie-chart"></i>
                <span class="app-menu__label">Category</span>
            </a>
        </li>
        <li><a class="app-menu__item" href="{{route('post.list')}}">
                <i class="app-menu__icon fa fa-pie-chart"></i>
                <span class="app-menu__label">Post</span>
            </a>
        </li>
        <li><a class="app-menu__item" href="{{route('setting.list')}}">
                <i class="app-menu__icon fa fa-pie-chart"></i>
                <span class="app-menu__label">Settings</span>
            </a>
        </li>
    </ul>
</aside>
