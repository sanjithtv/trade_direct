@extends('layouts.app')

@section('content')
@if(session('success'))
<script>
$(function() {
    $('#exampleModalLogin').modal('show');
});
</script>
@endif

<!-- category detail section -->
<div class="container">
    <!-- page navigation -->
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">{{TradeHelp::get_parent($parent)}}</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{TradeHelp::get_parent($post->post_category)}}</li>
      </ol>
    </nav>
    <!-- page navigation ends-->
    <div class="row">
    <div class="col-sm-7">
     <div class="product-detail">
            <div class="table-shows pb-5">
            
    <div class="container my-4 mb-5">
    
        <!--Carousel Wrapper-->
        <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
          <!--Slides-->
          <div class="carousel-inner" role="listbox">
          @foreach($media as $key=>$value)
            <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
              <img class="d-block w-100" src="{{ URL::asset('http://localhost:8080/images/'.$value->td_file_name)}}" alt="First slide">
            </div>
            @endforeach
           <!-- <div class="carousel-item">
              <img class="d-block w-100" src="images/bike2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="images/bike3.jpg" alt="Third slide">
            </div>-->
          </div>
          <!--/.Slides-->
          <!--Controls-->
          <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
          <!--/.Controls-->
          <ol class="carousel-indicators">
          @foreach($media as $key => $banner)
            <li data-target="#carousel-thumb" data-slide-to="{{$key}}" class="carousel-1"> 
              <img class="d-block" style="width: 300px !important;" src="{{ URL::asset('http://localhost:8080/images/'.$banner->td_file_name)}}" class="img-fluid"></li>
          <!--  <li data-target="#carousel-thumb" data-slide-to="1"><img class="d-block w-100" src="images/bike2.jpg"
                class="img-fluid"></li>
            <li data-target="#carousel-thumb" data-slide-to="2"><img class="d-block w-100" src="images/bike3.jpg"
                class="img-fluid"></li>-->
                @endforeach
          </ol>
        </div>
        <!--/.Carousel Wrapper-->
    
      </div>
    
            </div>
    </div>
    
    
     <div class="product-detail-price ">
       <div class="table-shows"> 
     
    <h4 class="description-title border-0 p-0"><span>Description</span></h4>
    
    <p>
    {{$post->post_description}}
    </p>
    
   
    
    
    
    
    
         </div>
    </div>
    
    
    
    
    </div>
    <div class="col-sm-5">
      <!-- product price box -->
     <div class="product-detail-price bg-gray">
            <div class="table-shows">
                   <div class="feature-heart mr-4"> 
                <a href="#"> <svg width="24px" height="24px" viewBox="0 0 550 550" data-aut-id="icon" class="" fill-rule="evenodd">
               
                <path d="M406,332c-29.636,0-55.969,14.402-72.378,36.571l-141.27-72.195C194.722,288.324,196,279.809,196,271
          c0-11.931-2.339-23.324-6.574-33.753l148.06-88.958C354.006,167.679,378.59,180,406,180c49.626,0,90-40.374,90-90
          c0-49.626-40.374-90-90-90c-49.626,0-90,40.374-90,90c0,11.47,2.161,22.443,6.09,32.54l-148.43,89.18
          C157.152,192.902,132.941,181,106,181c-49.626,0-90,40.374-90,90c0,49.626,40.374,90,90,90c30.122,0,56.832-14.876,73.177-37.666
          l140.86,71.985C317.414,403.753,316,412.714,316,422c0,49.626,40.374,90,90,90c49.626,0,90-40.374,90-90
          C496,372.374,455.626,332,406,332z M406,30c33.084,0,60,26.916,60,60s-26.916,60-60,60s-60-26.916-60-60S372.916,30,406,30z
           M106,331c-33.084,0-60-26.916-60-60s26.916-60,60-60s60,26.916,60,60S139.084,331,106,331z M406,482c-33.084,0-60-26.916-60-60
          s26.916-60,60-60s60,26.916,60,60S439.084,482,406,482z"/>
                </svg> </a>
              </div>
    
              <div class="feature-heart ml-4"> 
                <svg width="24px" height="24px" viewBox="0 0 1024 1024" data-aut-id="icon" class="" fill-rule="evenodd">
                <path class="rui-77aaa" d="M830.798 448.659l-318.798 389.915-317.828-388.693c-20.461-27.171-31.263-59.345-31.263-93.033 0-85.566 69.605-155.152 155.152-155.152 72.126 0 132.752 49.552 150.051 116.364h87.777c17.299-66.812 77.905-116.364 150.051-116.364 85.547 0 155.152 69.585 155.152 155.152 0 33.687-10.802 65.862-30.293 91.811zM705.939 124.121c-80.853 0-152.204 41.425-193.939 104.204-41.736-62.778-113.086-104.204-193.939-104.204-128.33 0-232.727 104.378-232.727 232.727 0 50.657 16.194 98.948 47.806 140.897l328.766 402.133h100.189l329.716-403.355c30.662-40.727 46.856-89.018 46.856-139.675 0-128.349-104.398-232.727-232.727-232.727z"></path>
                </svg> 
              </div>          
              <div class="fetaure-detail px-2">
              <h4><b>₹ {{$post->post_price}} </b></h4>
                @foreach($attribute as $values) 
                 
    <h5><b> @if($values->attribute_name=='Kms Driven') {{$values->attribute_name}} : {{$values->attribute_value}} km @endif
    @endforeach
    <h5>Kukatpally, Hyderabad, Telangana</h5>
    Jan 23
    
    
                Brand New (6*6)
                <div class="fetaure-text">
                  <div> Delhi </div>
                  <div class="sub-features"> today </div>
                </div>
              </div>
    
            </div>
    </div>
      <!-- product price box ends -->
    
    <!-- Product Details -->
     <div class="table-shows">
    
    <h4> Details <br>
              </h4>
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    @foreach($attribute as $value)
                  <td align="left"><strong>{{$value->attribute_name}}</strong></td>
                 
                  @endforeach
                </tr>
                <tr>
        
                  @foreach($attribute as $attributes)
                  <td align="left">{{$attributes->attribute_value}}</td>
                 
                  @endforeach
                </tr>
              </table>
              <h4>&nbsp; </h4>
    </div>
    
    <!-- Product Details Ends-->
    
    
    
     <div class="seller-detail">
            <div class="table-shows">
              <h4>Seller Description</h4>
              <?php 
                foreach($seller as $data)
                {
                  $datetime = $data->created_at;
                  list($date, $time)=explode(' ', $datetime);
                  list($year, $month, $day)=explode('-', $date); 
                  //$m=date('M',$month);

                  ?>
    
              <table>
                <tr>
                  <td width="30%"><a class="seller-icon" href=""> <img src="{{ URL::asset('trade/images/user.jpg')}}" class="mr-4"> </a>  </td>
                   <td  width="70%"><b>{{$data->name}}</b> <br>Member since {{date("M", mktime(0, 0, 0, $month, 10))}} {{$year}}</td>
    
                </tr>
    
    <tr><td height="84" colspan="2">
      <form action="{{route('chat')}}" method="post" id="chat_msg">
      {{csrf_field()}}
                @method('POST')
        <input type="hidden" value="{{$post->id}}" name="post_id" id="post_id">
        <!--<input type="hidden" value="{{$data->name}}" name="member_name" id="member_name">-->
        <input type="hidden" value="{{$post->post_title}}" name="post_title" id="post_title">
                  <button type="submit" class="btn btn-primary btn-chat  btn-block" id="chat">Chat with Seller</button>
                </form>
    </td>
    
    
    
                </tr>
    
    
    <tr style="text-align: center; margin: 10px 0;l">
    <td colspan="2" style="height:60px;">
    
    
       <svg width="24px" height="24px" viewBox="0 0 500 500" data-aut-id="icon" class="" fill-rule="evenodd"><g><path d="m367.988 512.021c-16.528 0-32.916-2.922-48.941-8.744-70.598-25.646-136.128-67.416-189.508-120.795s-95.15-118.91-120.795-189.508c-8.241-22.688-10.673-46.108-7.226-69.612 3.229-22.016 11.757-43.389 24.663-61.809 12.963-18.501 30.245-33.889 49.977-44.5 21.042-11.315 44.009-17.053 68.265-17.053 7.544 0 14.064 5.271 15.645 12.647l25.114 117.199c1.137 5.307-.494 10.829-4.331 14.667l-42.913 42.912c40.482 80.486 106.17 146.174 186.656 186.656l42.912-42.913c3.838-3.837 9.361-5.466 14.667-4.331l117.199 25.114c7.377 1.581 12.647 8.101 12.647 15.645 0 24.256-5.738 47.224-17.054 68.266-10.611 19.732-25.999 37.014-44.5 49.977-18.419 12.906-39.792 21.434-61.809 24.663-6.899 1.013-13.797 1.518-20.668 1.519zm-236.349-479.321c-31.995 3.532-60.393 20.302-79.251 47.217-21.206 30.265-26.151 67.49-13.567 102.132 49.304 135.726 155.425 241.847 291.151 291.151 34.641 12.584 71.866 7.64 102.132-13.567 26.915-18.858 43.685-47.256 47.217-79.251l-95.341-20.43-44.816 44.816c-4.769 4.769-12.015 6.036-18.117 3.168-95.19-44.72-172.242-121.772-216.962-216.962-2.867-6.103-1.601-13.349 3.168-18.117l44.816-44.816z"/></g></svg></i> <span id="number">***********Show number</span><span style="display:none" id="view">{{$data->phone}}</span> 
    
      
    
    
            
    </td> 
    
      
    </tr>
    
    
              </table>
    
            <?php
                }
                ?>
    
            
    
          
    
    
    
    
    </div>
    
     <div class="product-location bg-gray">
            <div class="table-shows">
              <h4>Posted in</h4>
               
               Pukattupady, Kakkanad, Kerala
    
    <div class="map">
    
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d125706.2248761645!2d76.3527168!3d10.0728832!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1612078978807!5m2!1sen!2sin" width="100%" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    
    
    
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
        @foreach($featured as $value)
          <div class="item">
            <div class="table-shows">
              @if($value->featured=='1')
              <h3>Featured</h3>
             
              <div class="feature-heart"> <svg width="24px" height="24px" viewBox="0 0 1024 1024" data-aut-id="icon" class="" fill-rule="evenodd">
                <path class="rui-77aaa" d="M830.798 448.659l-318.798 389.915-317.828-388.693c-20.461-27.171-31.263-59.345-31.263-93.033 0-85.566 69.605-155.152 155.152-155.152 72.126 0 132.752 49.552 150.051 116.364h87.777c17.299-66.812 77.905-116.364 150.051-116.364 85.547 0 155.152 69.585 155.152 155.152 0 33.687-10.802 65.862-30.293 91.811zM705.939 124.121c-80.853 0-152.204 41.425-193.939 104.204-41.736-62.778-113.086-104.204-193.939-104.204-128.33 0-232.727 104.378-232.727 232.727 0 50.657 16.194 98.948 47.806 140.897l328.766 402.133h100.189l329.716-403.355c30.662-40.727 46.856-89.018 46.856-139.675 0-128.349-104.398-232.727-232.727-232.727z"></path>
                </svg> </div>@endif
                <a href="{{ route('td/productdetails',$value->slug) }}"> <div class="fetrur-new"><img src="{{ URL::asset('http://localhost:8080/thumbnail/'.TradeHelp::get_image($value->id))}}"></div>
              <div class="fetaure-detail">
                <h4>Rs {{$value->post_price}}</h4>
                <h5>{{$value->post_title}}</h5>
               <!-- <h5>Brand New (6*6)</h5></a>-->
                <div class="fetaure-text">
                  <div> Delhi </div>
                  <div class="sub-features"> today </div>
                </div>
              </div></a>
            </div>
          </div>
          @endforeach
          
         
          
        </div>
      </div>
      
    
      
      <!-- Featured Items -->
    
    </div>
    <div class="bottom-banner"> <img src="{{ URL::asset('trade/images/sell.jpg')}}"> </div>
    @endsection
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script type="text/javascript">

$(document).ready(function() {
  


    $('#number').on('click', function() {
        
      $('#number').hide();
      $('#view').show();
       
    });
    $('#view').on('click', function() {
        
        $('#view').hide();
        $('#number').show();
         
      });


      $('#chat').on('click', function() {
  
    var session_id=$('#session_id').val();
    var post_id=$('#post_id').val();
    var post_title=$('#post_title').val();
   
    
    if(session_id)
    {
     
      var data={
                        "_token":$('input[name=_token]').val(),
                        'post_id': post_id,
                        'post_title': post_title,
                    };
      $.ajax({
        type: 'post',
        url: 'chat',
        dataType: 'json',
        cache:false,
        data: data,
        
    }
        success: function (data) {
         
          
        },
        error : function(er){
          console.log(er.data)
        }
        
      });
    }
    else{
      $('#exampleModalLogin').modal('show');
    }


  });


});



  
  
</script>