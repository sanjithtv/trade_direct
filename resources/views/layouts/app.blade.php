<!doctype html>
<html lang="en">
<head>
    @include('includes.head')

<header>
    @include('includes.header')
</header>
<body>
<div class="menu-lisiting-top">
@include('includes.menu')
</div>
@yield('content')
<div class="bottom-banner"> <img src="{{ URL::asset('public/trade/images/sell.jpg')}}"> </div>
<footer>
    @include('includes.footer')
</footer>
<div class="copy">
  <div class="container">
    <div class="copy-width">
      <div><b>Free Classifieds in India.</b> © 2006-2021 Trade Direct</div>
      <div><span><b>Powered by</b> - <a href="http://www.bqubetech.com/">BQube Technologies</a></span></div>
    </div>
  </div>
</div>    









<script src="{{ URL::asset('public/trade/js/jquery-3.4.0.min.js')}}"></script> 
<script src="{{ URL::asset('public/trade/js/bootstrap.min.js')}}"></script> 
<script src="{{ URL::asset('public/trade/js/slick.min.js')}}"></script> 
<script src="{{ URL::asset('public/trade/js/wow.min.js')}}"></script> 
<script src="{{ URL::asset('public/trade/js/custom.js')}}"></script>


</body>
</html>