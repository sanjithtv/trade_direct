@extends('layouts.app')

@section('content')
<!-- Search section -->
<div class="search-width-items">
  <h2>Find Your Best Classified</h2>
  <h6>It is a long established fact that a reader will be distracted by the readable.</h6>

<div class="search-bar">
  <form class="form-inline col-6 ml-auto mr-auto my-lg-0  searching-inn">
    <select class="form-control curving-select">
      <option>All India</option>
    </select>
    <input class="form-control w-50" type="search" placeholder="Search" aria-label="Search">
    <button class="form-control search-inn-color" type="submit">Search</button>
  </form>
</div>
</div>
<!-- Search section ends-->

<div>
    <div class="recomment-profile">
      <div class="container">
      <div class="row">
      <div class="col-3">
     
    <h1 class="mt-4">Filters</h1>
      
   

    <h3 class="mt-2">Brands</h3>
    @foreach($attribute as $value)
    @if($value->name=='Brands')
    @foreach(json_decode($value->content) as $index=>$value1)
        <div class="form-check" >
            <input class="form-check-input try" type="checkbox" id="brandID" value="{{ $index }}"  >
            <label class="form-check-label" for="value{{ $index }}">
                {{ $value1}}({{App\td_classified_post_attributes::where([['attribute_value','=', $index],['deleted','=','0']])->count()}})
            </label>
        </div>
       
        @endforeach
         @endif
    @endforeach

   

      </div>
      <div class="col-9">
        <div class="main-container">
          <div class="swipe-tabs-container ">
            <div class="swipe-tab-content">
              <div class="card-body">
                <div class="row" id="updateDiv">
                
                @foreach($category as $value)
                  <div class="col-sm-4 col-lg-3 col-6 full-width">
                  <a href="{{ route('td/productdetails',$value->slug) }}"> <div class="table-shows">
                      @if($value->featured=='1')
                      
                  <h3>Featured</h3>
                  <div class="feature-heart"> <svg width="24px" height="24px" viewBox="0 0 1024 1024" data-aut-id="icon" class="" fill-rule="evenodd">
                <path class="rui-77aaa" d="M830.798 448.659l-318.798 389.915-317.828-388.693c-20.461-27.171-31.263-59.345-31.263-93.033 0-85.566 69.605-155.152 155.152-155.152 72.126 0 132.752 49.552 150.051 116.364h87.777c17.299-66.812 77.905-116.364 150.051-116.364 85.547 0 155.152 69.585 155.152 155.152 0 33.687-10.802 65.862-30.293 91.811zM705.939 124.121c-80.853 0-152.204 41.425-193.939 104.204-41.736-62.778-113.086-104.204-193.939-104.204-128.33 0-232.727 104.378-232.727 232.727 0 50.657 16.194 98.948 47.806 140.897l328.766 402.133h100.189l329.716-403.355c30.662-40.727 46.856-89.018 46.856-139.675 0-128.349-104.398-232.727-232.727-232.727z"></path>
                </svg> </div>
                @endif
                      <div class="fetrur-new"><img src="{{ URL::asset('http://localhost:8080/thumbnail/'.TradeHelp::get_image($value->id))}}"></div>
                      <div class="fetaure-detail">
                      <h4>Rs {{$value->post_price}}</h4>
                    <h5>{{$value->post_title}}</h5>
                      </div>
                    </div></a>
                  </div>
                  @endforeach
                 
              
              
          
                
              </div>
              <div class="pagination-one">
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
                </div>
              </div>
            </div>
            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> </div></div>
  @endsection

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script type="text/javascript">

$(document).ready(function() {
  


    $('.try').on('click', function() {


        
      var brand=[];
      $('.try').each(function(){
        if($(this).is(":checked")){
          brand.push($(this).val());
        }
        
        
        
      });
      Finalbrand=brand.toString();
      if(Finalbrand.length==0)
        {
          location.reload();
        }
      //console.log(Finalbrand);
      $.ajax({
                url: '',
                type: "GET",
                //dataType: "html",
                cache:false,
                data: "brand=" + Finalbrand,
                
                success:function(data) {
                 
               
                  var data=JSON.parse(data);
                    console.log(data);
                   
                    $('#updateDiv').empty();
                    
                    $.each( data, function( key, value ) {
                     
                      if(value.featured==1)
                      {
                        str= '<h3>Featured</h3><div class="feature-heart"> <svg width="24px" height="24px" viewBox="0 0 1024 1024" data-aut-id="icon" class="" fill-rule="evenodd"><path class="rui-77aaa" d="M830.798 448.659l-318.798 389.915-317.828-388.693c-20.461-27.171-31.263-59.345-31.263-93.033 0-85.566 69.605-155.152 155.152-155.152 72.126 0 132.752 49.552 150.051 116.364h87.777c17.299-66.812 77.905-116.364 150.051-116.364 85.547 0 155.152 69.585 155.152 155.152 0 33.687-10.802 65.862-30.293 91.811zM705.939 124.121c-80.853 0-152.204 41.425-193.939 104.204-41.736-62.778-113.086-104.204-193.939-104.204-128.33 0-232.727 104.378-232.727 232.727 0 50.657 16.194 98.948 47.806 140.897l328.766 402.133h100.189l329.716-403.355c30.662-40.727 46.856-89.018 46.856-139.675 0-128.349-104.398-232.727-232.727-232.727z"></path></svg> </div>';
                      }
                      else
                      {
                        str='';
                      }
                      
                    //console.log( key + ": " + value.post_title );
                    $('#updateDiv').append( '<div class="col-sm-4 col-lg-3 col-6 full-width"><a href="http://localhost:8000/td/productdetails/'+value.slug+'"> <div class="table-shows">'+ str +'<div class="fetrur-new"><img src="http://localhost:8080/thumbnail/'+value.photo+'"></div><div class="fetaure-detail"><h4>Rs'+ value.post_price+'</h4><h5>'+value.post_title+'</h5></div></div></a></div>'

                    );
                  });
                       
               
                }
            });
      
     
    });


});
</script>