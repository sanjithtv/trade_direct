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

<div class="modal fade modalpop-ups-head modal-open" id="exampleModalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header-padding">
       
        <button type="button" class="modal-hd-close close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><svg width="25px" height="25px" viewBox="0 0 1024 1024" data-aut-id="icon" class="" fill-rule="evenodd"><path class="rui-22SD7" d="M878.336 85.333l-366.336 366.315-366.336-366.315h-60.331v60.331l366.336 366.336-366.336 366.336v60.331h60.331l366.336-366.336 366.336 366.336h60.331v-60.331l-366.315-366.336 366.315-366.336v-60.331z"></path></svg></span>
        </button>
      </div>
      <div class="modal-body">
  <p class="text-center"><img  class="t" src="{{ URL::asset('trade/images/logo.png')}}" width="150" align="center"><br>

        <div class="wrap-modal-slider">
          <div class="your-class">
            <div>
              <div class="modal-common-img">
              <p>
                
                <img src="{{ URL::asset('trade/images/git-modal.png')}}">
              
                Help make Trade Direct safer place to buy and sell
              </p>
              </div>
            </div>
            <div>
               <div class="modal-common-img">
                <img src="{{ URL::asset('trade/images/favorite-modal.png')}}">
              <p>
                Contact and close deals faster
              </p>
            </div>
            </div>
            <div>
               <div class="modal-common-img">
                <img src="{{ URL::asset('trade/images/pointChat-modal.png')}}">
              <p>
                Save all your favorite items in one place
              </p>
            </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-social-btns">   
<div id="message"></div>

        <div class="tab1"><h6>Loging with Your Email Address</h6>
        <form name="login" action="{{route('login')}}" method="post" id="login">
        {{csrf_field()}}
        @method('POST')
    <p><input placeholder="Enter email id..." oninput="this.className = ''" name="uname" id="email"></p>
    <p><input placeholder="Password..." oninput="this.className = ''" name="pwd" type="password" id="pwd"> </p>
  </div>  
        <button type="submit" id="save" style="background-color: #4CAF50;color: #ffffff;text-align: center;"></i>
         
        Submit</button>
</form>
 <div class="text-right"> <small class="text-center mb-4">  <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#exampleModalforgotpwd">Forgot password ?</a></small></div>
      </div>
    

      <div class="modal-footer-new">
<div class="login-email-modal">
<div class="modal-ft-small">If you continue, you are accepting <br>
  <a href="">Trade Direct Terms and Conditions and Privacy Policy</a></div>
  
      </div>
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



  
  $('#wishlist').on('click', function() {
    var session_id=$('#session_id').val();
    var member_id=$('#member_id').val();
    
    var post_id=$('.post_id').val();
    alert(post_id);
  
    alert(session_id);
    alert(member_id);
    
 
    /*if(session_id)
    {
      $.ajax({
        type: 'post',
        url: 'wishlist',
        dataType: 'json',
        data: {
          '_token': $('input[name=_token]').val(),
          'member_id': member_id,
          'post_id': post_id,
          
        },
        success: function (data) {
          console.log(data);
          if(data)
          {
            
            //alert('Product added to whishlist successfully.');
          }
          
        },
        
      });
    }
    else{
      $('#exampleModalLogin').modal('show');
    }*/
  });
  
  





</script>



<!--<script type="text/javascript">
       
            //var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $('#save').on('click', function() {
            var email=$('#email').val();
            var pwd=$('#pwd').val();
            var url=$('#login').attr('action');
            //alert(email);
            $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });
                $.ajax({
                    
                    url: url,
                    type: 'POST',
                
                    data: {email:email,password:pwd},
                    dataType: 'JSON',
                    
                    success: function (data) { 
                        //$(".writeinfo").append(data.msg); 
                        console.log(data);
                        if(data==1)
                        {
                          $('#message').html('success');
                        }
                        else if(data==0)
                        {
                          $('#message').html('invalid');
                        }
                    }
                }); 
            });
         
    </script>-->

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







</body>
</html>