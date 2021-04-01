
@include('admin.partials.head')
<body class="">
  <div class="wrapper ">
    @include('admin.partials.aside_bar')
    <div class="main-panel">
      <div class="content">
        <div class="container-fluid">
            @yield('content')
        </div>
      </div>
    @include('admin.partials.footer')
    </div>
  </div>
    @include('admin.partials.scripts')
</body>

</html>