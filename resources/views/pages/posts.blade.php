@extends('layouts.app')

@section('content')

<!-- category detail section -->
<div class="container py-5">

<div class="text-center mt-5">
<h3 class=""><b>Post Your Add Details </h3>
</div>

<div class="ml-full-width">
<div class="col-sm-8 ml-auto mr-auto">
 <div class="postadd">
        <div class="table-shows">
          <div class="fetaure-detail px-4">
<div class="row">
<div class="col-sm-12">

<form action="action_page.php">
 
<div class="">
  <div class="my-post-add-list">
  <element>Select Category*</element>
     <ul  class="myTabs nav nav-pills nav-justified my-post-add-list-tab" role="tablist" data-tabs="tabs">
     
       @foreach($category as $data)
    <li class="category"><input type="hidden" class="cat_id" value="{{$data->id}}"><a href="#car" class="active" data-toggle="tab">
   <!-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="30" height="30" style="color: rgb(80, 165, 25); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 36 36" class="iconify" data-icon="clarity:car-line" data-inline="false" data-width="30" data-height="30"><path class="clr-i-outline clr-i-outline-path-1" d="M15 17h3v2h-3z" fill="currentColor"></path><path class="clr-i-outline clr-i-outline-path-2" d="M26.45 14.17A22.1 22.1 0 0 0 19.38 7a9.64 9.64 0 0 0-9-.7a8.6 8.6 0 0 0-4.82 6.4c-.08.47-.14.92-.2 1.36A4 4 0 0 0 2 18v6.13a2 2 0 0 0 2 2V18a2 2 0 0 1 2-2h18.73A7.28 7.28 0 0 1 32 23.27V24h-2a4.53 4.53 0 1 0 .33 2H32a2 2 0 0 0 2-2v-.73a9.28 9.28 0 0 0-7.55-9.1zM11 14H6.93c0-.31.09-.63.15-1A6.52 6.52 0 0 1 11 8zm2 0V7.58a8.17 8.17 0 0 1 5.36 1.16A19 19 0 0 1 23.9 14zm12.8 14.38a2.5 2.5 0 1 1 2.5-2.5a2.5 2.5 0 0 1-2.5 2.5z" fill="currentColor"></path><path class="clr-i-outline clr-i-outline-path-3" d="M14.17 24a4.53 4.53 0 1 0 .33 2h5.3v-.25A6 6 0 0 1 20 24zM10 28.38a2.5 2.5 0 1 1 2.5-2.5a2.5 2.5 0 0 1-2.5 2.5z" fill="currentColor"></path></svg>-->
    <span>{{$data->name}}</span></a></li>
    @endforeach
  
  </ul>
  <div class="tab-content" id="category_content" style="display:none">
    <div role="tabpanel" class="tab-pane fade in active show"  >
    <div class="tab-list-tabs">
    <element>Types*</element>
     <ul class="myTabs nav nav-pills nav-justified" id="sub_category"  >
      

   <!--<li><a href="postyouradd.html">BMW</a></li>
   <li><a href="#">Audi</a></li>-->

  </ul>

</div>

    </div>
 
  </div>
</div>


</div>
</form>

</div>

</div>







        
          </div>




 </div>
</div>
</div>


</div>





<!-- Related Ads -->
  <div class="featured-profile">
    <h3 class="pt-4">Related Ads</h3>
    <div class="slider">
    @foreach($post as $value)
      <div class="item">
        <div class="table-shows">
        <h3>Featured</h3>
                  <a  class="wishlist"> <input type="hidden" value="{{$value->id}}" class="post_id"><div class="feature-heart"> <svg width="24px" height="24px" viewBox="0 0 1024 1024" data-aut-id="icon" class="" fill-rule="evenodd">
                <path class="rui-77aaa" d="M830.798 448.659l-318.798 389.915-317.828-388.693c-20.461-27.171-31.263-59.345-31.263-93.033 0-85.566 69.605-155.152 155.152-155.152 72.126 0 132.752 49.552 150.051 116.364h87.777c17.299-66.812 77.905-116.364 150.051-116.364 85.547 0 155.152 69.585 155.152 155.152 0 33.687-10.802 65.862-30.293 91.811zM705.939 124.121c-80.853 0-152.204 41.425-193.939 104.204-41.736-62.778-113.086-104.204-193.939-104.204-128.33 0-232.727 104.378-232.727 232.727 0 50.657 16.194 98.948 47.806 140.897l328.766 402.133h100.189l329.716-403.355c30.662-40.727 46.856-89.018 46.856-139.675 0-128.349-104.398-232.727-232.727-232.727z"></path>
                </svg> </div></a>
                 <a href="{{ route('td/productdetails',$value->slug) }}"> <div class="fetrur-new"><img src="{{ URL::asset('http://localhost:8080/thumbnail/'.TradeHelp::get_image($value->id))}}"></div>
                  <div class="fetaure-detail">
                 
                    <h4>Rs {{$value->post_price}}</h4>
                   <!-- <h5>{{TradeHelp::get_image($value->id)}}</h5>-->
                    <h5>{{$value->post_title}}</h5>
                    <div class="fetaure-text">
                      <div> Delhi </div>
                      <div class="sub-features"> today </div></a>
            </div>
          </div>
        </div>
      </div>
      @endforeach
      
    </div>
  </div>
  

  
  <!-- Featured Items -->

</div>
<div class="bottom-banner"> <img src="{{ URL::asset('trade/images/sell.jpg')}}"> </div>
    </div>
    @endsection
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script type="text/javascript">

$(document).ready(function() {
  


    $('.category').on('click', function() {


      var cat_id=$(this).closest("li").find('.cat_id').val();
     
     // alert(cat_id);
     $.ajax({
                url: '/get_subcategory/'+cat_id,
                type: "get",
                cache:false,
                
                success:function(data) {
                  var data=JSON.parse(data);
                  $('#category_content').show();
                   $('#sub_category').empty();
                  $.each( data, function( key, value ) {
                  console.log(value.name);
                  $('#sub_category').append('<li><a href="http://localhost:8000/addpost/'+value.id+'">'+value.name+'</a></li>');
                  });
                    
                }
                });
    });
});
</script>
