<!DOCTYPE html>
  <html>
    @include('madmin.inc.h_script')
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      @include('madmin.inc.head')
      @include('madmin.inc.l_side')
      @yield('content')
      @include('madmin.inc.foot')
    </div>
    @include('madmin.inc.f_script')
  </body>
</html>
