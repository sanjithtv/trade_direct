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

<!-- category detail section -->
<div class="container py-5">

    <div class="text-center mt-5">
    <h3 class=""><b>Post Your Add Details</h3>
    </div>
    
    <div class="row">
    <div class="col-sm-8">
     <div class="postadd">
            <div class="table-shows">
              <div class="fetaure-detail px-4">
                <h4><b>Include some more details</b></h4>
    
    <div class="col-sm-10 px-1 mt-4">
    
    <form name="create_role" action="" method="POST">
                {{csrf_field()}}
                @method('POST')
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationServer01">{{__('common.category')}}</label>

                            <select class=" form-control" name="post_category" id="category_id" >
                             <option value="">Select</option>
                            @foreach($category as $catkey=>$catvalues)
                                @foreach($catvalues as $key=>$value)
                                    @if($key==0)        
                                        <option value="{{$key}}" disabled>{{$value}}</option>
                                    @elseif($key>0)
                                        <option value="{{$key}}">---{{$value}}</option>
                                    @endif

                                @endforeach    
                            @endforeach
                                                    
                                                </select>
                            
                        </div>
                    </div>

                    <button class="btn btn-primary" type="submit">{{__('common.next')}}</button>
                    <a href="{{ url('posts/listing')}}" class="btn btn-secondary" role="button">{{__('common.cancel')}}</a>
                </form>
    
    
       <!-- <div class="form-group">
         <label for="uname">Year* :</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required> 
        </div>
     
    
        <div class="form-group">
         <label for="uname">Fuel* :</label>
           <p><button class="btn btn-light border mr-2">CNG & Hybrids</button> 
            <button class="btn btn-light border mr-2">Disel</button>
            <button class="btn btn-light border mr-2">Electri</button>
            <button class="btn btn-light border mr-2">LPG</button>
            <button class="btn btn-light border mr-2">Petrol</button>
    
         </p>
        </div>
     
    
        <div class="form-group">
         <label for="uname">Transmission* :</label>
           <p><button class="btn btn-light border mr-2">Automatic</button> 
            <button class="btn btn-light border mr-2">Manual</button>
         </p>
        </div>
    
        <div class="form-group">
         <label for="uname">KM Driven* :</label>
            <input type="text" class="form-control" id="name" placeholder="Enter kilometer" name="name" required> 
        </div>
    
        <div class="form-group">
         <label for="uname">Number of Owners* :</label>
           <p><button class="btn btn-light border mr-2">1st</button> 
            <button class="btn btn-light border mr-2">2nd</button>
            <button class="btn btn-light border mr-2">3rd</button>
            <button class="btn btn-light border mr-2">4th</button>
            <button class="btn btn-light border mr-2">5th</button>
    
         </p>
        </div>
    
        <div class="form-group">
         <label for="uname">Ad Title :</label>
            <input type="text" class="form-control" id="name" placeholder="Enter Your Ad Title" name="name" required> 
            <small>Mention the key feature fo your items (eg: brand, model, age etc )</small>
        </div>
    
    
        <div class="form-group">
         <label for="uname">Description :</label>
             <textarea class="form-control" rows="3" id="comment"    placeholder="Please enter description details here ." ></textarea>
            <small>Include conditions features and reason for selling</small>
        </div>
    
    
    <hr class="my-5">
    
    
      <h4><b>Set a Price</b></h4>
    
    <div class="col-sm-10 px-1 mt-4">
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">₹</span>
        </div>
        <input type="text" class="form-control" placeholder="Username">
      </div>
    </div>-->
    
    
    
    
    <br><br>
    <br><br>
    
    <!--   <div class="form-group form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox"> Remember me
        </label>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button> -->
    </form>
    
    </div>
    
    
    
    
    
    
    
    
    
              <!--  Brand New (6*6)
                <div class="fetaure-text">
                  <div> Delhi </div>
                  <div class="sub-features"> today </div>
                </div>-->
              </div>
    
    
    
    
     </div>
    </div>
    </div>
    
    
    
    
    <div class="col-sm-4">
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
                <h4><b>₹ 75,000 - 4,550 km</b></h4>
    <h5><b>2020 - 4,550 km<br>
    Glamour year 2020<br></b></h5>
    
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
    
    
    
     <div class="seller-detail">
            <div class="table-shows">
              <h4>Seller Description</h4>
    
              <table>
                <tr>
                  <td width="30%"><a class="seller-icon" href=""> <img src="images/user.jpg" class="mr-4"> </a>  </td>
                   <td  width="70%"><b>P NARENDER MOTORS</b> <br>Member since Dec 2013</td>
    
                </tr>
    
    <tr><td height="84" colspan="2">
                  <button class="btn btn-primary btn-chat  btn-block">Chat with Sellter</button>
    </td>
    
    
    
                </tr>
    
    
    <tr style="text-align: center; margin: 10px 0;l">
    <td colspan="2" style="height:60px;">
    
    <a href="#">
       <svg width="24px" height="24px" viewBox="0 0 500 500" data-aut-id="icon" class="" fill-rule="evenodd"><g><path d="m367.988 512.021c-16.528 0-32.916-2.922-48.941-8.744-70.598-25.646-136.128-67.416-189.508-120.795s-95.15-118.91-120.795-189.508c-8.241-22.688-10.673-46.108-7.226-69.612 3.229-22.016 11.757-43.389 24.663-61.809 12.963-18.501 30.245-33.889 49.977-44.5 21.042-11.315 44.009-17.053 68.265-17.053 7.544 0 14.064 5.271 15.645 12.647l25.114 117.199c1.137 5.307-.494 10.829-4.331 14.667l-42.913 42.912c40.482 80.486 106.17 146.174 186.656 186.656l42.912-42.913c3.838-3.837 9.361-5.466 14.667-4.331l117.199 25.114c7.377 1.581 12.647 8.101 12.647 15.645 0 24.256-5.738 47.224-17.054 68.266-10.611 19.732-25.999 37.014-44.5 49.977-18.419 12.906-39.792 21.434-61.809 24.663-6.899 1.013-13.797 1.518-20.668 1.519zm-236.349-479.321c-31.995 3.532-60.393 20.302-79.251 47.217-21.206 30.265-26.151 67.49-13.567 102.132 49.304 135.726 155.425 241.847 291.151 291.151 34.641 12.584 71.866 7.64 102.132-13.567 26.915-18.858 43.685-47.256 47.217-79.251l-95.341-20.43-44.816 44.816c-4.769 4.769-12.015 6.036-18.117 3.168-95.19-44.72-172.242-121.772-216.962-216.962-2.867-6.103-1.601-13.349 3.168-18.117l44.816-44.816z"/></g></svg></i> ** *** ****Show number  
    
      </a> 
    
    
            
    </td> 
    
      
    </tr>
    
    
              </table>
    
            
    
          
    
    
    
    
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
    @endsection