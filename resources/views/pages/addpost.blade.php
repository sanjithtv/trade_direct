@extends('layouts.app')

@section('content')

<!-- category detail section -->
<div class="container py-5">

    <div class="text-center mt-5">
    <h3 class=""><b>Post Your Add Details - {{TradeHelp::get_parent($post_category)}}</b> </h3>
    </div>
    
    <div class="row">
    <div class="col-sm-8 ml-auto mr-auto">
     <div class="postadd">
        <div class="pop-bread-crumbs">
        <a href="">Home</a>
    /
        <a href="">post-add-list</a>
    /
    <a href="">post-add-{{TradeHelp::get_parent($post_category)}}</a>
      </div>
            <div class="table-shows">
              <div class="fetaure-detail px-4">
                <h4><b>Include some more details</b></h4>
    
    <div class="col-sm-10 px-1 mt-4">
   
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif
    <form name="create_role" action="{{ route('savepost') }}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                @method('POST')
        <input type="hidden" value={{$post_category}} name="post_category">
    @if($category_attributes)
        @foreach($category_attributes as $attribute)
             @if($attribute->type==1)
             @php $post_attribute_value = "";@endphp
                    <div class="form-group">
                <label for="uname">{{$attribute->name}}</label>
                    <input type="text" class="form-control" id="name" placeholder="" name="{{$attribute->code}}-{{$attribute->id}}" required value=""> 
                </div>

                @elseif($attribute->type==2)
                        @php 
                            $attribute_values = json_decode($attribute->content);
                            $post_attribute_value = "";
                        @endphp

      <div class="form-group">
        <label for="email">{{$attribute->name}}</label>
           <select class="form-control" name="{{$attribute->code}}-{{$attribute->id}}" id="{{$attribute->code}}" required>
           @foreach($attribute_values as $key=>$value)
                <option value="{{$key}}">{{$value}}</option>
           @endforeach
           
         </select>
      </div>
      @elseif($attribute->type==3)
                        @php 
                            $attribute_values = json_decode($attribute->content);
                        @endphp
    
        <div class="form-group">
         <label for="uname">{{$attribute->name}}</label>
         @foreach($attribute_values as $key=>$value)
                            <label  for="{{$attribute->code}}" >{{$value}}
                                <input type="radio" name="{{$attribute->code}}-{{$attribute->id}}" id="{{$attribute->code}}" value="{{$key}}" />
                                <div class="control-indicator"></div>
                            </label>
                            @endforeach
                           
        </div>
        @endif
                        @endforeach

                        @endif
       
    
        <div class="form-group">
         <label for="uname">Ad Title :</label>
            <input type="text" class="form-control" id="name" placeholder="Enter Your Ad Title" name="post_title" required> 
            <small>Mention the key feature fo your items (eg: brand, model, age etc )</small>
        </div>
    
    
        <div class="form-group">
         <label for="uname">Description :</label>
             <textarea class="form-control" rows="3" id="comment"    placeholder="Please enter description details here ." name="post_description" ></textarea>
            <small>Include conditions features and reason for selling</small>
        </div>
    
    
    <hr class="my-5">
    
    
      <h4><b>Set a Price</b></h4>
    
    <div class="col-sm-10 px-1 mt-4">
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">₹</span>
        </div>
        <input type="text" class="form-control" placeholder="price" name="price">
      </div>
    </div>
    
    <hr class="my-5">
      <h4><b>Upload Photos here.....</b></h4>
    
    <div class="col-sm-11 px-1 mt-4 photo-margin camphoto">
    <div class="row">
    <div class="col-lg-3 col-sm-6 photo-field">
        <div class="input-file-container">  
        <input class="input-file" id="my-file" type="file" name="file[]">
        <label tabindex="0" for="my-file" class="input-file-trigger">
              
    <svg id="Capa_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><g><path d="m457 101h-100.188l-9.743-29.23c-6.136-18.405-23.293-30.77-42.692-30.77h-96.754c-19.399 0-36.556 12.365-42.691 30.77l-9.744 29.23h-24.188v-25c0-19.299-15.701-35-35-35h-20c-19.299 0-35 15.701-35 35v26.812c-23.568 6.208-41 27.698-41 53.188v260c0 30.327 24.673 55 55 55h402c30.327 0 55-24.673 55-55v-260c0-30.327-24.673-55-55-55zm-386-25c0-2.757 2.243-5 5-5h20c2.757 0 5 2.243 5 5v25h-30zm411 340c0 13.785-11.215 25-25 25h-402c-13.785 0-25-11.215-25-25v-260c0-13.785 11.215-25 25-25h111c6.456 0 12.188-4.131 14.23-10.257l13.162-39.486c2.046-6.135 7.764-10.257 14.231-10.257h96.754c6.467 0 12.186 4.122 14.23 10.256l13.162 39.487c2.043 6.126 7.775 10.257 14.231 10.257h111c13.785 0 25 11.215 25 25z"/><circle cx="436" cy="176" r="15"/><path d="m106 161h-30c-8.284 0-15 6.716-15 15s6.716 15 15 15h30c8.284 0 15-6.716 15-15s-6.716-15-15-15z"/><g><path d="m256 411c-74.439 0-135-60.561-135-135s60.561-135 135-135 135 60.561 135 135-60.561 135-135 135zm0-240c-57.897 0-105 47.103-105 105s47.103 105 105 105 105-47.103 105-105-47.103-105-105-105z"/></g><g><path d="m256 351c-41.355 0-75-33.645-75-75s33.645-75 75-75 75 33.645 75 75-33.645 75-75 75zm0-120c-24.813 0-45 20.187-45 45s20.187 45 45 45 45-20.187 45-45-20.187-45-45-45z"/></g></g></svg>
    <div class="add-empty">Add Photo</div>
        </label>
      </div>
      <p class="file-return"></p>
    </div>
    <div class="col-lg-3 col-sm-6 photo-field">
        <div class="input-file-container">  
        <input class="input-file" id="my-file1" type="file" name="file[]">
        <label tabindex="0" for="my-file1" class="input-file-trigger">
              
    <svg id="Capa_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><g><path d="m457 101h-100.188l-9.743-29.23c-6.136-18.405-23.293-30.77-42.692-30.77h-96.754c-19.399 0-36.556 12.365-42.691 30.77l-9.744 29.23h-24.188v-25c0-19.299-15.701-35-35-35h-20c-19.299 0-35 15.701-35 35v26.812c-23.568 6.208-41 27.698-41 53.188v260c0 30.327 24.673 55 55 55h402c30.327 0 55-24.673 55-55v-260c0-30.327-24.673-55-55-55zm-386-25c0-2.757 2.243-5 5-5h20c2.757 0 5 2.243 5 5v25h-30zm411 340c0 13.785-11.215 25-25 25h-402c-13.785 0-25-11.215-25-25v-260c0-13.785 11.215-25 25-25h111c6.456 0 12.188-4.131 14.23-10.257l13.162-39.486c2.046-6.135 7.764-10.257 14.231-10.257h96.754c6.467 0 12.186 4.122 14.23 10.256l13.162 39.487c2.043 6.126 7.775 10.257 14.231 10.257h111c13.785 0 25 11.215 25 25z"/><circle cx="436" cy="176" r="15"/><path d="m106 161h-30c-8.284 0-15 6.716-15 15s6.716 15 15 15h30c8.284 0 15-6.716 15-15s-6.716-15-15-15z"/><g><path d="m256 411c-74.439 0-135-60.561-135-135s60.561-135 135-135 135 60.561 135 135-60.561 135-135 135zm0-240c-57.897 0-105 47.103-105 105s47.103 105 105 105 105-47.103 105-105-47.103-105-105-105z"/></g><g><path d="m256 351c-41.355 0-75-33.645-75-75s33.645-75 75-75 75 33.645 75 75-33.645 75-75 75zm0-120c-24.813 0-45 20.187-45 45s20.187 45 45 45 45-20.187 45-45-20.187-45-45-45z"/></g></g></svg>
    <div class="add-empty">Add Photo</div>
        </label>
      </div>
      <p class="file-return"></p>
    </div>
    <div class="col-lg-3 col-sm-6 photo-field">
        <div class="input-file-container">  
        <input class="input-file" id="my-file2" type="file" name="file[]">
        <label tabindex="0" for="my-file2" class="input-file-trigger">
              
    <svg id="Capa_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><g><path d="m457 101h-100.188l-9.743-29.23c-6.136-18.405-23.293-30.77-42.692-30.77h-96.754c-19.399 0-36.556 12.365-42.691 30.77l-9.744 29.23h-24.188v-25c0-19.299-15.701-35-35-35h-20c-19.299 0-35 15.701-35 35v26.812c-23.568 6.208-41 27.698-41 53.188v260c0 30.327 24.673 55 55 55h402c30.327 0 55-24.673 55-55v-260c0-30.327-24.673-55-55-55zm-386-25c0-2.757 2.243-5 5-5h20c2.757 0 5 2.243 5 5v25h-30zm411 340c0 13.785-11.215 25-25 25h-402c-13.785 0-25-11.215-25-25v-260c0-13.785 11.215-25 25-25h111c6.456 0 12.188-4.131 14.23-10.257l13.162-39.486c2.046-6.135 7.764-10.257 14.231-10.257h96.754c6.467 0 12.186 4.122 14.23 10.256l13.162 39.487c2.043 6.126 7.775 10.257 14.231 10.257h111c13.785 0 25 11.215 25 25z"/><circle cx="436" cy="176" r="15"/><path d="m106 161h-30c-8.284 0-15 6.716-15 15s6.716 15 15 15h30c8.284 0 15-6.716 15-15s-6.716-15-15-15z"/><g><path d="m256 411c-74.439 0-135-60.561-135-135s60.561-135 135-135 135 60.561 135 135-60.561 135-135 135zm0-240c-57.897 0-105 47.103-105 105s47.103 105 105 105 105-47.103 105-105-47.103-105-105-105z"/></g><g><path d="m256 351c-41.355 0-75-33.645-75-75s33.645-75 75-75 75 33.645 75 75-33.645 75-75 75zm0-120c-24.813 0-45 20.187-45 45s20.187 45 45 45 45-20.187 45-45-20.187-45-45-45z"/></g></g></svg>
    <div class="add-empty">Add Photo</div>
        </label>
      </div>
      <p class="file-return"></p>
    </div>
    <div class="col-lg-3 col-sm-6 photo-field">
        <div class="input-file-container">  
        <input class="input-file" id="my-file3" type="file" name="file[]">
        <label tabindex="0" for="my-file3" class="input-file-trigger">
              
    <svg id="Capa_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><g><path d="m457 101h-100.188l-9.743-29.23c-6.136-18.405-23.293-30.77-42.692-30.77h-96.754c-19.399 0-36.556 12.365-42.691 30.77l-9.744 29.23h-24.188v-25c0-19.299-15.701-35-35-35h-20c-19.299 0-35 15.701-35 35v26.812c-23.568 6.208-41 27.698-41 53.188v260c0 30.327 24.673 55 55 55h402c30.327 0 55-24.673 55-55v-260c0-30.327-24.673-55-55-55zm-386-25c0-2.757 2.243-5 5-5h20c2.757 0 5 2.243 5 5v25h-30zm411 340c0 13.785-11.215 25-25 25h-402c-13.785 0-25-11.215-25-25v-260c0-13.785 11.215-25 25-25h111c6.456 0 12.188-4.131 14.23-10.257l13.162-39.486c2.046-6.135 7.764-10.257 14.231-10.257h96.754c6.467 0 12.186 4.122 14.23 10.256l13.162 39.487c2.043 6.126 7.775 10.257 14.231 10.257h111c13.785 0 25 11.215 25 25z"/><circle cx="436" cy="176" r="15"/><path d="m106 161h-30c-8.284 0-15 6.716-15 15s6.716 15 15 15h30c8.284 0 15-6.716 15-15s-6.716-15-15-15z"/><g><path d="m256 411c-74.439 0-135-60.561-135-135s60.561-135 135-135 135 60.561 135 135-60.561 135-135 135zm0-240c-57.897 0-105 47.103-105 105s47.103 105 105 105 105-47.103 105-105-47.103-105-105-105z"/></g><g><path d="m256 351c-41.355 0-75-33.645-75-75s33.645-75 75-75 75 33.645 75 75-33.645 75-75 75zm0-120c-24.813 0-45 20.187-45 45s20.187 45 45 45 45-20.187 45-45-20.187-45-45-45z"/></g></g></svg>
    <div class="add-empty">Add Photo</div>
        </label>
      </div>
      <p class="file-return"></p>
    </div>
    </div>
    </div>
    <h4><b>Confirm Your Location</b></h4>
    <div class="col-sm-12 px-1 mt-4">
      <div class="tab-list-pills">
        <!-- <ul id="myTabs" class="myTabs nav nav-pills nav-justified" role="tablist" data-tabs="tabs">
        <li class=""><a href="#state" class="active" data-toggle="tab">State</a></li>
        <li><a href="#district" data-toggle="tab">District</a></li>
        <li><a href="#city" data-toggle="tab">city</a></li>
       
      </ul>-->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade in active show" id="state">
             <label for="email">State*:</label>
           <select class="form-control" id="post_state" name="post_state">
               @foreach($state as $states)
           <option value="{{$states->id}}">{{$states->name}}</option>
           
           @endforeach
         </select>
         <div id="district" style="display:none">
         <label for="email">District*:</label>
           <select class="form-control" id="post_district" name="post_district">
           
           
         </select>
        </div>
        <div id="city" style="display:none">
         <label for="email">City*:</label>
           <select class="form-control" id="post_city" name="post_city">
           
           
         </select>
        </div>

       
      </div>
      <div  id="landmark" style="display:none">
         <label for="">Landmark* :</label>
            <input type="text" class="form-control" id="landmark" placeholder="Enter landmark" name="landmark" required > 
            
        </div>
       <!-- <div role="tabpanel" class="tab-pane fade" id="district">
          <label for="email">District*:</label>
           <select class="form-control" id="post_district" name="post_district">
           
           
         </select>
        </div>

        <div role="tabpanel" class="tab-pane fade" id="city">
          <label for="email">City*:</label>
           <select class="form-control" id="post_city" name="post_city">
           
           
         </select>
        </div>-->
        
      </div>
    </div>
    </div>
   
    
    
    <div class="col-sm-10 px-1 mt-4">
      <div class="row">
     
     </div>
       <div class="row">
    
     </div>
    
    </div>
    <div class="post-button">
      <button class="btn btn-primary" type="submit">Post now</button>
    </div>

  
    
    </form>
    
    </div>
              </div>

     </div>
    </div>
    </div>
    
    
    </div>
 
    
    
    
    
    <!-- Related Ads --
      <div class="featured-profile">
        <h3 class="pt-4">Related Ads</h3>
        <div class="slider">
          <div class="item">
            <div class="table-shows">
              <h3>Featured</h3>
              <div class="feature-heart"> <svg width="24px" height="24px" viewBox="0 0 1024 1024" data-aut-id="icon" class="" fill-rule="evenodd">
                <path class="rui-77aaa" d="M830.798 448.659l-318.798 389.915-317.828-388.693c-20.461-27.171-31.263-59.345-31.263-93.033 0-85.566 69.605-155.152 155.152-155.152 72.126 0 132.752 49.552 150.051 116.364h87.777c17.299-66.812 77.905-116.364 150.051-116.364 85.547 0 155.152 69.585 155.152 155.152 0 33.687-10.802 65.862-30.293 91.811zM705.939 124.121c-80.853 0-152.204 41.425-193.939 104.204-41.736-62.778-113.086-104.204-193.939-104.204-128.33 0-232.727 104.378-232.727 232.727 0 50.657 16.194 98.948 47.806 140.897l328.766 402.133h100.189l329.716-403.355c30.662-40.727 46.856-89.018 46.856-139.675 0-128.349-104.398-232.727-232.727-232.727z"></path>
                </svg> </div>
              <div class="fetrur-new"><img src="images/bike1.jpg"></div>
              <div class="fetaure-detail">
                <h4>Rs 500</h4>
                <h5>Brand New (6*6)</h5>
                <div class="fetaure-text">
                  <div> Delhi </div>
                  <div class="sub-features"> today </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="table-shows">
              <h3>Featured</h3>
              <div class="feature-heart"> <svg width="24px" height="24px" viewBox="0 0 1024 1024" data-aut-id="icon" class="" fill-rule="evenodd">
                <path class="rui-77aaa" d="M830.798 448.659l-318.798 389.915-317.828-388.693c-20.461-27.171-31.263-59.345-31.263-93.033 0-85.566 69.605-155.152 155.152-155.152 72.126 0 132.752 49.552 150.051 116.364h87.777c17.299-66.812 77.905-116.364 150.051-116.364 85.547 0 155.152 69.585 155.152 155.152 0 33.687-10.802 65.862-30.293 91.811zM705.939 124.121c-80.853 0-152.204 41.425-193.939 104.204-41.736-62.778-113.086-104.204-193.939-104.204-128.33 0-232.727 104.378-232.727 232.727 0 50.657 16.194 98.948 47.806 140.897l328.766 402.133h100.189l329.716-403.355c30.662-40.727 46.856-89.018 46.856-139.675 0-128.349-104.398-232.727-232.727-232.727z"></path>
                </svg> </div>
              <div class="fetrur-new"><img src="images/cars.jpg"></div>
              <div class="fetaure-detail">
                <h4>Rs 500</h4>
                <h5>Brand New (6*6)</h5>
                <div class="fetaure-text">
                  <div> Delhi </div>
                  <div class="sub-features"> today </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="table-shows">
              <h3>Featured</h3>
              <div class="feature-heart"> <svg width="24px" height="24px" viewBox="0 0 1024 1024" data-aut-id="icon" class="" fill-rule="evenodd">
                <path class="rui-77aaa" d="M830.798 448.659l-318.798 389.915-317.828-388.693c-20.461-27.171-31.263-59.345-31.263-93.033 0-85.566 69.605-155.152 155.152-155.152 72.126 0 132.752 49.552 150.051 116.364h87.777c17.299-66.812 77.905-116.364 150.051-116.364 85.547 0 155.152 69.585 155.152 155.152 0 33.687-10.802 65.862-30.293 91.811zM705.939 124.121c-80.853 0-152.204 41.425-193.939 104.204-41.736-62.778-113.086-104.204-193.939-104.204-128.33 0-232.727 104.378-232.727 232.727 0 50.657 16.194 98.948 47.806 140.897l328.766 402.133h100.189l329.716-403.355c30.662-40.727 46.856-89.018 46.856-139.675 0-128.349-104.398-232.727-232.727-232.727z"></path>
                </svg> </div>
              <div class="fetrur-new"><img src="images/levis.jpg"></div>
              <div class="fetaure-detail">
                <h4>Rs 500</h4>
                <h5>Brand New (6*6)</h5>
                <div class="fetaure-text">
                  <div> Delhi </div>
                  <div class="sub-features"> today </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="table-shows">
              <h3>Featured</h3>
              <div class="feature-heart"> <svg width="24px" height="24px" viewBox="0 0 1024 1024" data-aut-id="icon" class="" fill-rule="evenodd">
                <path class="rui-77aaa" d="M830.798 448.659l-318.798 389.915-317.828-388.693c-20.461-27.171-31.263-59.345-31.263-93.033 0-85.566 69.605-155.152 155.152-155.152 72.126 0 132.752 49.552 150.051 116.364h87.777c17.299-66.812 77.905-116.364 150.051-116.364 85.547 0 155.152 69.585 155.152 155.152 0 33.687-10.802 65.862-30.293 91.811zM705.939 124.121c-80.853 0-152.204 41.425-193.939 104.204-41.736-62.778-113.086-104.204-193.939-104.204-128.33 0-232.727 104.378-232.727 232.727 0 50.657 16.194 98.948 47.806 140.897l328.766 402.133h100.189l329.716-403.355c30.662-40.727 46.856-89.018 46.856-139.675 0-128.349-104.398-232.727-232.727-232.727z"></path>
                </svg> </div>
              <div class="fetrur-new"><img src="images/bike1.jpg"></div>
              <div class="fetaure-detail">
                <h4>Rs 500</h4>
                <h5>Brand New (6*6)</h5>
                <div class="fetaure-text">
                  <div> Delhi </div>
                  <div class="sub-features"> today </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="table-shows">
              <h3>Featured</h3>
              <div class="fetrur-new"><img src="images/bike1.jpg"></div>
              <div class="fetaure-detail">
                <h4>Rs 500</h4>
                <h5>Brand New (6*6)</h5>
                <div class="fetaure-text">
                  <div> Delhi </div>
                  <div class="sub-features"> today </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="table-shows">
              <h3>Featured</h3>
              <div class="fetrur-new"><img src="images/cars.jpg"></div>
              <div class="fetaure-detail">
                <h4>Rs 500</h4>
                <h5>Brand New (6*6)</h5>
                <div class="fetaure-text">
                  <div> Delhi </div>
                  <div class="sub-features"> today </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    
      
      <!-- Featured Items -->
    
    </div>
    <div class="bottom-banner"> <img src="{{ URL::asset('trade/images/sell.jpg')}}"> </div>
    @endsection

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script type="text/javascript">

$(document).ready(function() {
  


    $('#post_state').on('change', function() {
        
        
        var state = $('#post_state').val();
        //alert(state);

     
        if(state) {
            $.ajax({
                url: '/district/get/'+state,
                type: "GET",
                dataType: "json",
                cache:false,
                
                success:function(data) {
                    console.log(data);
                   
                    $('#district').show();
                    $('select[name="post_district"]').empty();
                  
                    
                   $.each(data, function(key, value) {
                      
                        
                        console.log(value);
                        
                       
                       $('#post_district').append($('<option value="'+ key +'">' + value + '</option>'));
                       
                                        
                   }); 
                    
                  
                     
                       
                   
                }
            });
        }else{
           
        }
    });

    $('#post_district').on('change', function() {
        
        
        var state = $('#post_district').val();
        //alert(state);

     
        if(state) {
            $.ajax({
                url: '/city/get/'+state,
                type: "GET",
                dataType: "json",
                cache:false,
                
                success:function(data) {
                    console.log(data);
                   
                    $('#city').show();
                    $('#landmark').show();
                    $('select[name="post_city"]').empty();
                  
                    
                   $.each(data, function(key, value) {
                      
                        
                        console.log(value);
                        
                       
                       $('#post_city').append($('<option value="'+ key +'">' + value + '</option>'));
                       
                                        
                   }); 
                    
                  
                     
                       
                   
                }
            });
        }else{
           
        }
    });



    
    


});
</script>