@extends('layouts.app')

@section('content')
<div class="category-items">

    <div class="container-fluid">
        <div class="popular-catrgy">
      
  </span>
    </div>
    <div class=" px-0 mb-4"> <img class="img-fluid" src="{{ URL::asset('trade/images/car-banner.jpg')}}"> </div>
    <div class="pop-bread-crumbs">
      <a href="">Home</a>
  /
  <a href="">{{$category->name}}</a>
    </div>
    <div class="row">
      <div class="col-md-3 col-lg-3 col-12">
        <div class="user-car-wrapper">
          <h3>Used {{$category->name}}</h3>
          <div class=" my-4">
      
      <!--Accordion wrapper-->
  <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
  
    <!-- Accordion card -->
    <div class="card">
  
      <!-- Card header -->
      <div class="card-header" role="tab" id="headingOne1">
        <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
          aria-controls="collapseOne1">
          <h5 class="mb-0">
           Categories <i class="fas fa-angle-down rotate-icon"></i>
          </h5>
        </a>
      </div>
  
      <!-- Card body -->
      <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
        data-parent="#accordionEx">
        <div class="card-body">
          <div class="wrap-collap-hd">
            @foreach($category_reverse_map as $key=>$value)
            <ul>
              <li>
                <a href="">
                <div class="flexy-bar">
                <div class="span-bar"></div>
                <span>All Categories</span>
                </div>
                </a>
            </li>
            <li>
                <a href="">
                <div class="flexy-bar">
                <div class="span-bar"></div>
                <span>{{$value['name']}}</span>
  
              </div>
              </a>
               <div class="wrap-links-catrgy">
                  <a class="wrap-select" href="">{{$value[$category->id]['name']}}</a>
                </div>
            </li>
            </ul>
            @endforeach
          </div>
        </div>
      </div>
  
    </div>
    <!-- Accordion card -->
  
    <!-- Accordion card -->
    <div class="card">
  
      <!-- Card header -->
      <div class="card-header" role="tab" id="headingTwo2">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2"
          aria-expanded="true" aria-controls="collapseTwo2">
          <h5 class="mb-0">
            Locations <i class="fas fa-angle-down rotate-icon"></i>
          </h5>
        </a>
      </div>
  
      <!-- Card body -->
      <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2"
        data-parent="#accordionEx">
        <div class="card-body">
                  <div class="wrap-collap-hd">
            <ul>
              <li>
                <a href="">
                <div class="flexy-bar">
                <div class="span-bar"></div>
                <span>Kerala</span>
              
              </div>
  
              </a>
               <div class="wrap-links-catrgy">
                <div class="flex-scroll scrollbar style-4">
                <div class="force-overflow">
                  <ul id="location">
                  @foreach($location_districts as $data)
                    <li data-value="{{$data->id}}"><a href="?l={{$data->id}}">{{$data->name}}</a></li>
                    @endforeach
                  </ul>
                </div>
                </div>
                  
                </div>
            </li>
       
            </ul>
          </div>
                        <div>
   
                </div>
        </div>
      </div>
  
    </div>


    @if(in_array('brands',$attribute_filters_map))
    <div class="card">
  
      <!-- Card header -->
      <div class="card-header" role="tab" id="headingThree3">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3"
          aria-expanded="true" aria-controls="collapseThree3">
          <h5 class="mb-0">
            Brands <i class="fas fa-angle-down rotate-icon"></i>
          </h5>
        </a>
      </div>
  
      <!-- Card body -->
      <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3"
        data-parent="#accordionEx">
        <div class="card-body">
          <div class="top-search-bar">
                         <div class="wrap-links-catrgy">
                                  <div class="flex-scroll scrollbar style-4">
        <div class="force-overflow">
            <div class="wrap-collap-checkbox">
          
          <ul>
            @foreach(json_decode($attribute_filters['brands']['content']) as $index=>$value1)
            @if($value1!="")
            <li>
                <div class="box-flex">
                  <div class="squrd-flx-box">
                    <input  name="make" type="checkbox" class="try"  id="make_{{ $index }}" value="{{ $index }}">
                  </div>
                  <span for="value{{ $index }}">{{ $value1}}({{App\td_classified_post_attributes::where([['attribute_value','=', $index],['deleted','=','0']])->count()}})</span>
                </div>
            </li>
            @endif
            @endforeach
                   
          </ul>
    
  
    </div>
        </div>
      </div>
                  
                </div>
          </div>
        </div>
      </div>
  
    </div>
    @endif
    <!-- Accordion card -->
    <div class="card">
  
      <!-- Card header -->
      <div class="card-header" role="tab" id="headingTwo4">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo4"
          aria-expanded="true" aria-controls="collapseTwo4">
          <h5 class="mb-0">
            budget <i class="fas fa-angle-down rotate-icon"></i>
          </h5>
        </a>
      </div>
  
      <!-- Card body -->
      <div id="collapseTwo4" class="collapse" role="tabpanel" aria-labelledby="headingTwo4"
        data-parent="#accordionEx">
        <div class="card-body">
              <div class="choose-budget">
                <element>Choose from options below</element>
                <ul>
                  <li>
                    <a href="">
                      <div class="choose-flex">
                        <div class="choose-flex-left">Below 1 Lac</div>
                        <div class="choose-flex-right">35,800+ items </div>
                      </div>
                    </a>
                  </li>
                                  <li>
                    <a href="">
                      <div class="choose-flex">
                        <div class="choose-flex-left">Below 2 Lac</div>
                        <div class="choose-flex-right">35,800+ items </div>
                      </div>
                    </a>
                  </li>
                                  <li>
                    <a href="">
                      <div class="choose-flex">
                        <div class="choose-flex-left">Below 3 Lac</div>
                        <div class="choose-flex-right">35,800+ items </div>
                      </div>
                    </a>
                  </li>
                                  <li>
                    <a href="">
                      <div class="choose-flex">
                        <div class="choose-flex-left">Below 4 Lac</div>
                        <div class="choose-flex-right">35,800+ items </div>
                      </div>
                    </a>
                  </li>
                                  <li>
                    <a href="">
                      <div class="choose-flex">
                        <div class="choose-flex-left">Below 5 Lac</div>
                        <div class="choose-flex-right">35,800+ items </div>
                      </div>
                    </a>
                  </li>
                                  <li>
                    <a href="">
                      <div class="choose-flex">
                        <div class="choose-flex-left">Below 6 Lac</div>
                        <div class="choose-flex-right">35,800+ items </div>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
                  <div class="wrapper">
                    <element>Choose a range below</element>
    <fieldset class="filter-price">
     
      <div class="price-field">
        <input type="range"  min="100" max="500" value="100" id="lower">
        <input type="range" min="100" max="500" value="500" id="upper">
      </div>
       <div class="price-wrap">
        
        <div class="price-wrap-1">
          <input id="one">
         
        </div>
        <div class="price-wrap_line">-</div>
        <div class="price-wrap-2">
          <input id="two">
         
        </div>
        <span class="price-title"><a href="">apply</a></span>
      </div>
    </fieldset> 
  </div>
        </div>
      </div>
  
    </div>
   
     <!-- Accordion card -->
    @if(in_array('year',$attribute_filters_map))
    <div class="card">
  
      <!-- Card header -->
      <div class="card-header" role="tab" id="headingTwo5">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo5"
          aria-expanded="true" aria-controls="collapseTwo5">
          <h5 class="mb-0">
            years <i class="fas fa-angle-down rotate-icon"></i>
          </h5>
        </a>
      </div>
  
      <!-- Card body -->
      <div id="collapseTwo5" class="collapse" role="tabpanel" aria-labelledby="headingTwo4"
        data-parent="#accordionEx">
        <div class="card-body">
              <div class="choose-budget">
                <element>Choose from options below</element>
                <ul>
                  <li>
                    <a href="">
                      <div class="choose-flex">
                        <div class="choose-flex-left">Less than 1 Year</div>
                      </div>
                    </a>
                  </li>
                                  <li>
                    <a href="">
                      <div class="choose-flex">
                        <div class="choose-flex-left">1 - 2 years</div>
                      </div>
                    </a>
                  </li>
                                  <li>
                    <a href="">
                      <div class="choose-flex">
                        <div class="choose-flex-left">2 - 5 years</div>
                      </div>
                    </a>
                  </li>
                                  <li>
                    <a href="">
                      <div class="choose-flex">
                        <div class="choose-flex-left">5 - 8 years</div>
                      </div>
                    </a>
                  </li>
                                  <li>
                    <a href="">
                      <div class="choose-flex">
                       <div class="choose-flex-left">More than 8 Years</div>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
        </div>
      </div>
  
    </div>
    @endif

    @if(in_array('noofowners',$attribute_filters_map))
     <div class="card">
  
      <!-- Card header -->
      <div class="card-header" role="tab" id="headingThree6">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree6"
          aria-expanded="true" aria-controls="collapseThree6">
          <h5 class="mb-0">
            No. of Owners <i class="fas fa-angle-down rotate-icon"></i>
          </h5>
        </a>
      </div>
  
      <!-- Card body -->
      <div id="collapseThree6" class="collapse" role="tabpanel" aria-labelledby="headingThree3"
        data-parent="#accordionEx">
        <div class="card-body">
          <div class="top-search-bar">
           <element>Choose from below options</element>
           
                         <div class="wrap-links-catrgy">
                                  <div class="flex-scroll scrollbar style-4">
        <div class="force-overflow">
            <div class="wrap-collap-checkbox">
           
          <ul>
           
            <li><a href="">
                <div class="box-flex">
                  <div class="squrd-flx-box">
                    <input  name="make" type="checkbox" class="" value="false">
                  </div>
                  <span>First (34,6790)</span>
                </div>
            </a></li>
                      <li><a href="">
                <div class="box-flex">
                  <div class="squrd-flx-box">
                    <input  name="make" type="checkbox" class="" value="false">
                  </div>
                  <span>Second (1,05,748)</span>
                </div>
            </a></li>
                      <li><a href="">
                <div class="box-flex">
                  <div class="squrd-flx-box">
                    <input  name="make" type="checkbox" class="" value="false">
                  </div>
                  <span>Third (31,136)</span>
                </div>
            </a></li>
                      <li><a href="">
                <div class="box-flex">
                  <div class="squrd-flx-box">
                    <input  name="make" type="checkbox" class="" value="false">
                  </div>
                  <span>Fourth (7,490)</span>
                </div>
            </a></li>
                      <li><a href="">
                <div class="box-flex">
                  <div class="squrd-flx-box">
                    <input  name="make" type="checkbox" class="" value="false">
                  </div>
                  <span>More than Four (3,839)</span>
                </div></a></li>
          </ul>
     
    </div>
        </div>
      </div>
    
                </div>
          </div>
        </div>
      </div>
  
    </div>
    @endif
    <!-- Accordion card -->
  </div>
  <!-- Accordion wrapper -->
  
  
    </div>
        </div>
    
      </div>
     
      <div class="col-sm-9 col-lg-9 col-12">
        <div class="used-car-category">
          <element>307,869 ads in <b>India</b></element>
          <div class="sort-by-add">
            <element><b>SORT BY:</b> Date Published <span class="user-arrow"></span></element>
              <div class="dropdown-sort bag-drop">
              <div class="items-in-bag">
                    <div class="items">
                      <div class="users-img">
                       <ul>
                         <li><a href="">Date Published</a></li>
                         <li><a href="">Relevance</a></li>
                         <li><a href="">Price: Low to High</a></li>
                         <li><a href="">Price: High to Low</a></li>
                         <li><a href="">Distance</a></li>
                       </ul>
                      </div>
                    </div>
                  </div>
                </div>
          </div>
          <input type="hidden" name="slug" id="slug" name="motorcycle-cid-6">
          <div class="row" id="updateDiv">
                       @foreach($category_posts as $value)
                  <div class="col-sm-4 col-6">
                   <div class="table-shows">
                      @if($value->featured=='1')
                      
                  <h3>Featured</h3>
                  <div class="feature-heart"> <svg width="24px" height="24px" viewBox="0 0 1024 1024" data-aut-id="icon" class="" fill-rule="evenodd">
                <path class="rui-77aaa" d="M830.798 448.659l-318.798 389.915-317.828-388.693c-20.461-27.171-31.263-59.345-31.263-93.033 0-85.566 69.605-155.152 155.152-155.152 72.126 0 132.752 49.552 150.051 116.364h87.777c17.299-66.812 77.905-116.364 150.051-116.364 85.547 0 155.152 69.585 155.152 155.152 0 33.687-10.802 65.862-30.293 91.811zM705.939 124.121c-80.853 0-152.204 41.425-193.939 104.204-41.736-62.778-113.086-104.204-193.939-104.204-128.33 0-232.727 104.378-232.727 232.727 0 50.657 16.194 98.948 47.806 140.897l328.766 402.133h100.189l329.716-403.355c30.662-40.727 46.856-89.018 46.856-139.675 0-128.349-104.398-232.727-232.727-232.727z"></path>
                </svg> </div>
                @else
                <div class="feature-heart"> <svg width="24px" height="24px" viewBox="0 0 1024 1024" data-aut-id="icon" class="" fill-rule="evenodd">
                <path class="rui-77aaa" d="M830.798 448.659l-318.798 389.915-317.828-388.693c-20.461-27.171-31.263-59.345-31.263-93.033 0-85.566 69.605-155.152 155.152-155.152 72.126 0 132.752 49.552 150.051 116.364h87.777c17.299-66.812 77.905-116.364 150.051-116.364 85.547 0 155.152 69.585 155.152 155.152 0 33.687-10.802 65.862-30.293 91.811zM705.939 124.121c-80.853 0-152.204 41.425-193.939 104.204-41.736-62.778-113.086-104.204-193.939-104.204-128.33 0-232.727 104.378-232.727 232.727 0 50.657 16.194 98.948 47.806 140.897l328.766 402.133h100.189l329.716-403.355c30.662-40.727 46.856-89.018 46.856-139.675 0-128.349-104.398-232.727-232.727-232.727z"></path>
                </svg> </div>
                
                @endif
                <a href="{{ route('td/productdetails',$value->slug) }}"> <div class="fetrur-new"><img src="{{ URL::asset('http://localhost:8080/thumbnail/'.TradeHelp::get_image($value->id))}}"></div>
                      <div class="fetaure-detail">
                      <h4>Rs {{$value->post_price}}</h4>
                    <h5>{{$value->post_title}}</h5>
                      </div>
                    </div></a>
                  </div>
                  @endforeach
                 
                  
                      
          </div>
        </div>
        
      </div>
    </div>
  </div>
  </div>
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

      if(Finalbrand.length>0)
        {
          window.location=url;
        }

       /* $("#location").on("click", "a", function(e){
        e.preventDefault();
        var $this = $(this).parent();
        place=$this.data("value");*/
    });


});
</script>
