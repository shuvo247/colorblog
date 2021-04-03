<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.partials.scripts')
    @include('admin.partials.head')
</head>
<body class="app sidebar-mini">
<!-- Navbar-->
@include('admin.partials.header')
<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    @include('admin.partials.aside_bar')
<main class="app-content">
    @yield('content')
</main>

</body>
</html>
