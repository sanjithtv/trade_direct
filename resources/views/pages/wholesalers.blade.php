
@extends('layouts.app')

@section('content')

<div>
  <div class="recomment-profile">
    <div class="container">
      <div class="sub-header ">
        <div class="swipe-tabs">
        <div class="swipe-tab"><li class="category"  style="list-style-type:none"><input type="hidden" class="cat_id" value="0">All</li></div>
          @foreach($category as $value)
         <div class="swipe-tab"> <li class="category"  style="list-style-type:none"><input type="hidden" class="cat_id" value="{{$value->id}}">{{$value->name}}</li></div>
          @endforeach
         <!-- <div class="swipe-tab">Furniture</div>
          <div class="swipe-tab">Toys</div>
          <div class="swipe-tab">Electronics</div>
          <div class="swipe-tab">Cars</div>
          <div class="swipe-tab">Bike</div>-->
        </div>
      </div>
      <div class="main-container">
        <div class="swipe-tabs-container ">
          <div class="swipe-tab-content">
            <div class="card-body">
              <div class="row" id="suppliers">
                @foreach($suppliers as $data)
                <div class="col-sm-4 col-lg-3 col-6 full-width">
                  <div class="table-shows">
                    <div class="fetrur-new"><img src="{{ URL::asset('trade/images/favorite-modal.PNG')}}"></div>
                    <div class="fetaure-detail">
                      <h5>Company: {{$data->name}}</h5>
                      <h5>Phone: {{$data->phone}}</h5>
                      <!--<h5>Web: www.levis.in</h5>-->
                    </div>
                  </div>
                </div>
                @endforeach
                
              </div>
             <!-- <div class="pagination-one">
                <nav aria-label="Page navigation example">
                  <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link
      active" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                  </ul>
                </nav>
              </div>-->
            </div>
          </div>
        
          
          
          
          
        </div>
      </div>
    </div>
  </div>
</div>
<div class="bottom-banner"> <img src="{{ URL::asset('trade/images/sell.jpg')}}"> </div>
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script type="text/javascript">

$(document).ready(function() {
  


    $('.category').on('click', function() {


      var cat_id=$(this).closest("li").find('.cat_id').val();
     
      //alert(cat_id);
     $.ajax({
                url: '/get_suppliers/'+cat_id,
                type: "get",
                cache:false,
                
                success:function(data) {
                  var data=JSON.parse(data);
                  
                   $('#suppliers').empty();
                  $.each( data, function( key, value ) {
                  console.log(value.name);
                  $('#suppliers').append('<div class="col-sm-4 col-lg-3 col-6 full-width"><div class="table-shows"><div class="fetrur-new"><img src="http://localhost:8000/trade/images/favorite-modal.PNG"></div><div class="fetaure-detail"><h5>Company:'+value.name+'</h5><h5>Phone: '+value.phone+'</h5></div></div></div>');
                  });
                    
                }
                });
    });
});
</script>