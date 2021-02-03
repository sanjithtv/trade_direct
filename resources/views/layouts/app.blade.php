<!doctype html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>
<header>
    @include('includes.header')
</header>
<div class="menu-lisiting-top">
@include('includes.menu')
</div>
@yield('content')
<div class="bottom-banner"> <img src="{{ URL::asset('trade/images/sell.jpg')}}"> </div>
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
<script src="{{ URL::asset('trade/js/jquery-3.4.0.min.js')}}"></script> 
<script src="{{ URL::asset('trade/js/bootstrap.min.js')}}"></script> 
<script src="{{ URL::asset('trade/js/slick.min.js')}}"></script> 
<script src="{{ URL::asset('trade/js/wow.min.js')}}"></script> 
<script src="{{ URL::asset('trade/js/custom.js')}}"></script>
<script type="text/javascript">
  
var searchHeight = $(".search-bar").outerHeight();
var offset = $(".search-bar").offset().top;
var totalHeight = searchHeight + offset;
console.log(totalHeight);
$(window).scroll(function(){
    if($(document).scrollTop() >= totalHeight) {
        $('.sticky-search').show();
    } else {
         $('.sticky-search').hide();
    }
});


</script>
</body>
</html>