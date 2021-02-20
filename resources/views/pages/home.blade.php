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
  <div class="container">
    <div class="featured-profile">
      <h3>Your Latest Search</h3>
      <div class="slider">
        <div class="item">
          <div class="table-shows">
            <h3>Featured</h3>
            <div class="feature-heart"> <svg width="24px" height="24px" viewBox="0 0 1024 1024" data-aut-id="icon" class="" fill-rule="evenodd">
              <path class="rui-77aaa" d="M830.798 448.659l-318.798 389.915-317.828-388.693c-20.461-27.171-31.263-59.345-31.263-93.033 0-85.566 69.605-155.152 155.152-155.152 72.126 0 132.752 49.552 150.051 116.364h87.777c17.299-66.812 77.905-116.364 150.051-116.364 85.547 0 155.152 69.585 155.152 155.152 0 33.687-10.802 65.862-30.293 91.811zM705.939 124.121c-80.853 0-152.204 41.425-193.939 104.204-41.736-62.778-113.086-104.204-193.939-104.204-128.33 0-232.727 104.378-232.727 232.727 0 50.657 16.194 98.948 47.806 140.897l328.766 402.133h100.189l329.716-403.355c30.662-40.727 46.856-89.018 46.856-139.675 0-128.349-104.398-232.727-232.727-232.727z"></path>
              </svg> </div>
            <div class="fetrur-new"><img src="{{ URL::asset('trade/images/table.jpg')}}"></div>
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
            <div class="fetrur-new"><img src="{{ URL::asset('trade/images/cars.jpg')}}"></div>
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
            <div class="fetrur-new"><img src="{{ URL::asset('trade/images/levis.jpg')}}"></div>
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
              
            <div class="fetrur-new"><img src="{{ URL::asset('trade/images/bike1.jpg')}}"></div>
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
            <div class="fetrur-new"><img src="{{ URL::asset('trade/images/bike1.jpg')}}"></div>
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
            <div class="fetrur-new"><img src="{{ URL::asset('trade/images/cars.jpg')}}"></div>
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
    
    <!-- Google Banner -->
    <section>
      <div class="container px-0 mb-4"> <img class="img-fluid" src="{{ URL::asset('trade/images/googlead.jpg')}}"> </div>
    </section>
    
    <!-- Featured Items -->
    <section>
      <div class="recomment-profile">
        <h3 class="text-center">Featured Products</h3>
        <div class="slider-in">
          <div class="item">
            <div class="row">
            @foreach($post as $value)
              <div class="col-6 col-lg-3">
                <div class="table-shows">
                <h3>Featured</h3>
                  <a  id="wishlist"><div class="feature-heart"> <svg width="24px" height="24px" viewBox="0 0 1024 1024" data-aut-id="icon" class="" fill-rule="evenodd">
                <path class="rui-77aaa" d="M830.798 448.659l-318.798 389.915-317.828-388.693c-20.461-27.171-31.263-59.345-31.263-93.033 0-85.566 69.605-155.152 155.152-155.152 72.126 0 132.752 49.552 150.051 116.364h87.777c17.299-66.812 77.905-116.364 150.051-116.364 85.547 0 155.152 69.585 155.152 155.152 0 33.687-10.802 65.862-30.293 91.811zM705.939 124.121c-80.853 0-152.204 41.425-193.939 104.204-41.736-62.778-113.086-104.204-193.939-104.204-128.33 0-232.727 104.378-232.727 232.727 0 50.657 16.194 98.948 47.806 140.897l328.766 402.133h100.189l329.716-403.355c30.662-40.727 46.856-89.018 46.856-139.675 0-128.349-104.398-232.727-232.727-232.727z"></path>
                </svg> </div></a>
                 <a href="{{ route('td/productdetails',$value->slug) }}"> <div class="fetrur-new"><img src="{{ URL::asset('http://localhost:8080/thumbnail/'.TradeHelp::get_image($value->id))}}"></div>
                  <div class="fetaure-detail">
                  <input type="hidden" value="{{$value->id}}" class="post_id">
                    <h4>Rs {{$value->post_price}}</h4>
                   <!-- <h5>{{TradeHelp::get_image($value->id)}}</h5>-->
                    <h5>{{$value->post_title}}</h5>
                    <div class="fetaure-text">
                      <div> Delhi </div>
                      <div class="sub-features"> today </div>
                    </div>
                  </div>
                </div></a>
              </div>
              @endforeach
            
            </div>
          </div>
        </div>
      </div>
      <div class="container py-5">
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
    </section>
  </div>
  

  <!-- registration form modal -->
  <div class="modal fade modalpop-ups-head" id="exampleModalRegister" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header-padding">
       
        <button type="button" class="modal-hd-close close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><svg width="25px" height="25px" viewBox="0 0 1024 1024" data-aut-id="icon" class="" fill-rule="evenodd"><path class="rui-22SD7" d="M878.336 85.333l-366.336 366.315-366.336-366.315h-60.331v60.331l366.336 366.336-366.336 366.336v60.331h60.331l366.336-366.336 366.336 366.336h60.331v-60.331l-366.315-366.336 366.315-366.336v-60.331z"></path></svg></span>
        </button>
      </div>
      <div class="modal-body">
  <div class="text-center mb-4">
            <img src="{{ URL::asset('public/trade/images/logo.png')}}" width="150" align="center"><br><br>
                  <h3>Register with Trade Direct:</h3> </div>
      </div>
      <div class="modal-social-btns">          
        <form name="create_role" action="{{route('register') }}" method="POST">
        {{csrf_field()}}
                @method('POST')
    Name:
    <p><input placeholder="Name..."  name="fname" id="fname" required></p>
    Email:
    <p><input placeholder="Email..."  name="email_id" id="email_id" required></p>
    Contact Number:     
    <p><input placeholder="Enter Phone..." required id="phone" name="phone"></p>
    Password:     
    <p><input type="password" placeholder="Enter password..." required id="password" name="password"></p>
 
        <button type="submit"></i>Register</button>
</form>
</div>
      <div class="modal-footer-new">
<div class="login-email-modal">
<div class="modal-ft-small">While you registering, you are accepting <br>
  <a href="">Trade Direct Terms and Conditions and Privacy Policy</a></div>
      </div>
    </div>
  </div>
</div>

<!-- registration forms -->
<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>
  @endsection
 