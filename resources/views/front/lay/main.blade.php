<!DOCTYPE html>
<html lang="en">
    @include('front.inc.h_script')
<body>
    @include('front.inc.head')
    @yield('content')
  @include('front.inc.foot')
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>
 @include('front.inc.f_script')

</body>
</html>
