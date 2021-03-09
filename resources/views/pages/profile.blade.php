@extends('layouts.app')

@section('content')

<!-- editprofile -->
<style type="text/css">
.profilebox{width: 100%;
overflow: hidden;
box-sizing: border-box;
background: #fff;
border: 1px solid rgba(0,47,52,.2);
border-radius: 4px;
margin-top: 100px;
}
.edithd{font-size: 20px;
line-height: 24px;padding-top:19px;padding-left: 15px;}
.basichd{font-size: 15px;
line-height: 24px;}
.inputarea{
    appearance: none;
    background: none;
    border: 1px solid #002f34;
    color: #002f34;
    display: block;
    font-size: 16px;
    height: 48px;
    box-sizing: border-box;
    outline: none;
    padding-left: 12px;
    padding-right: 12px;
    width: 80%;
    border-radius: 5px;
}
.inputarea2{
    appearance: none;
    background: none;
    border: 1px solid #002f34;
    color: #8c8c8c;
    display: block;
    font-size: 16px;
    height: 70px;
    box-sizing: border-box;
    outline: none;
    padding-left: 12px;
    padding-right: 12px;
    width: 80%;
    border-radius: 5px;
    margin-top: 10px;
}

.rui-1g6wu{
    flex-grow: 1;
}
.rui-2zbKc span {
    color: rgba(0,47,52,.64);
    font-size: 12px;
}
.rui-2zbKc .rui-1qqJ6 {
    color: rgba(0,47,52,.64);
    font-size: 12px;
    justify-content: flex-end;
    padding-left: 16px;
    white-space: nowrap;
    float: right;
}
.rui-2UspZ {
    flex: 0 0 33.33333%;
    max-width: 49.33333%;
}
._19KyJ {
    border: 1px solid rgba(0,47,52,.2);
    padding: 12px;
}
.rui-2I-bT {
    font-size: 14px;
    line-height: 20px;
}
.rui-CfFc1 {
    font-weight: 700;
}
.rui-3P6Ei {
    margin: 0;
}
._19KyJ ._1DQVw {
    font-size: 12px;
    line-height: 18px;
    color: rgba(0,47,52,.64);
    margin: 0;
}
.rui-3sTy6.rui-1umo3 {
    border-left: none;
}
.rui-3sTy6, .rui-3sTy6.rui-1umo3 {
    border-right: 1px solid rgba(0,47,52,.36);
}
.rui-3sTy6 {
    color: rgba(0,47,52,.36);
    height: 32px;
    line-height: 32px;
    padding-left: 12px;
    padding-right: 12px;
    white-space: nowrap;
}
.ideabox{padding-top:42px;}
.editsave_btn{color: #fff;
background-color: #538234;
border-radius: 4px;
border: 5px solid #538234;
padding: 5px 22px 5px 22px;
margin-bottom:10px;float: right;}
.connect_fb{
color: #538234;
border-radius: 4px;
border: 3px solid #538234;
width: 60%;padding: 10px;
background: transparent;
}
.connect_fb:hover{border: 6px solid #538234;padding: 10px;}
.disconnectbtn{margin-top: 10px;}
.rui-1ckrC{
    align-items: flex-start;
    display: flex;
    height: 16px;
    margin: 0 12px;
    position: absolute;
    right: 0;
    top: 62%;
    transform: translateY(-50%);
    margin-right:130px;
}
.rui-1ckrC.rui-2IRMD {
    left: auto;
    right: 0;
}
.rui-2zbKc .rui-V7eLx {
    display: flex;
    z-index: 2;
    cursor: pointer;
}
.row_each{padding: 18px;}
.contanctinfo_p p{color:#808080;margin-top: 20px;margin-left: -80px;}
.contacthd{
font-size: 15px;padding-top: 19px;padding-left: 17px;
line-height: 24px;
}
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 15px;
  border: 1px solid #888;
  width: 30%;
  height: 100%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
.phone_popup h1{text-align: center;}
.phone_popup h3{olor: #002f34;
font-size: 20px;
font-weight: 700;
text-align: center}
.phone_popup p{text-align: center;}
.p-two{text-align: center;color:  #808080;padding-top: 15px;}
.popup_next{width: 100%;padding: 10px;color: white;border-radius: 5px;border: 0;background:#538234;bottom:10%;position: static;}

.profile-pic {
    border-radius: 50%;
    height: 70px;
    width: 70px;
    background-size: cover;
    background-position: center;
    background-blend-mode: multiply;
    vertical-align: middle;
    text-align: center;
    color: transparent;
    transition: all .3s ease;
    text-decoration: none;
    cursor: pointer;
    margin-top: 10px;
}

.profile-pic:hover {
    background-color: rgba(0,0,0,.5);
    z-index: 10000;
    color: #fff;
    transition: all .3s ease;
    text-decoration: none;
}

.profile-pic span {
    /*display: inline-block;*/
    padding-top: 1em;
    /*padding-bottom: 4.5em;*/
}

form input[type="file"] {
          display: none;
          cursor: pointer;
 }
 .change_dp{font-size: 12px;}
 .fbunder_p{color: #808080;}
 .optional_info h6{color:#002f34;;}
.discard_btn{
  text-align: left;background: transparent;color: black;border: 0;
  padding: 5px 22px 5px 22px;
margin-bottom:10px;
}
@media (max-width: 991px){
._19KyJ{width:300px;} 
.rui-1ckrC{margin-right: 100px;}
.row_each{padding:0px;}
.contanctinfo_p p{margin-left: 3px;}
.modal-content{width: 90%;}
.profilebox{margin-left: 10px;}
.discard_btn{margin-top: 25px;}
.editsave_btn{margin-top: 25px;}
}
.box {
  width: 40%;
  margin: 0 auto;
  background: rgba(255,255,255,0.2);
  padding: 35px;
  border: 2px solid #fff;
  border-radius: 20px/50px;
  background-clip: padding-box;
  text-align: center;
}

.buttonpop {
  font-size: 1em;
  /*padding: 10px;*/
  color: #fff;
  /*border: 2px solid #06D85F;*/
  /*border-radius: 20px/50px;*/
  text-decoration: none;
  cursor: pointer;
  transition: all 0.3s ease-out;
}
.buttonpop:hover {
  /*background: #06D85F;*/
}

.overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}

.popup {
  margin: 70px auto;
  padding: 20px;
  background: #fff;
  border-radius: 5px;
  width: 30%;
  position: relative;
  transition: all 5s ease-in-out;
}

.popup h2 {
  margin-top: 0;
  color: #333;
  font-family: Tahoma, Arial, sans-serif;
}
.popup .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
.popup .close:hover {
  color: #06D85F;
}
.popup .content {
  max-height: 30%;
  overflow: auto;
}

@media screen and (max-width: 700px){
  .box{
    width: 70%;
  }
  .popup{
    width: 70%;
  }
}
</style>
<div class="container profilebox  mb-3">
  <div class="row">
  <div class="col-lg-6">
    <h4 class="edithd">User Profile</h4>
  </div>
  <div class="col-lg-6">
    <form action="{{route('updateprofile')}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
                @method('POST')
    <label for="fileToUpload">
  <div class="profile-pic" style="background-image: url('https://png.pngtree.com/png-vector/20190710/ourmid/pngtree-user-vector-avatar-png-image_1541962.jpg')">
      <span class="glyphicon glyphicon-camera"></span>
      <span class="change_dp">Change Image</span>
  </div>
  </label>
  <input type="File" name="fileToUpload" id="fileToUpload">

  </div>
</div>


  <hr class="my-2">
  <div class="row row_each" style="">
    
    <div class="col-lg-6">
    @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif
      <h4 class="basichd">Basic information</h4><br>
      <div class="rui-RcLUE"><div class="rui-3wYvC"><input type="text" class="inputarea" id="name" name="name" value="{{$member->name}}" autocomplete="off" placeholder="Name" class="rui-1ekfu rui-3oSYn" maxlength="30"><div class="rui-1ckrC"></div></div></div>

<!-- <div class="rui-1g6wu"><span class="rui-qvKkT" data-aut-id=""></span><span class="rui-1qqJ6">9 / 30</span></div> -->

      <div class=""><div class=""><input type="text" name="address" class="inputarea2"  value="{{$member->address}}" autocomplete="off" placeholder="Address" class="" maxlength="30"><div class="rui-1ckrC"></div></div></div>
    </div>
    <div class="col-lg-6 ideabox">
      <div class="rui-23EOE rui-2UspZ"><div class="_38UNB"><div class="_19KyJ" data-aut-id="tip"><div class="_1aGrQ"><svg width="25px" height="25px" viewBox="0 0 1024 1024" data-aut-id="icon" class="" fill-rule="evenodd"><path class="rui-77aaa" d="M318.061 279.272h-54.847l-61.517-61.517v-54.847h54.847l61.517 61.517v54.847zM512 240.485l-38.789-38.789v-77.575l38.789-38.789 38.789 38.789v77.575l-38.789 38.789zM938.667 473.211l-38.789 38.789h-77.575l-38.789-38.789 38.789-38.789h77.575l38.789 38.789zM201.697 434.425l38.789 38.789-38.789 38.789h-77.575l-38.789-38.789 38.789-38.789h77.575zM822.303 217.755l-61.517 61.517h-54.847v-54.847l61.517-61.517h54.847v54.847zM621.73 621.73c-13.848 13.809-29.867 24.747-47.67 32.505l-23.272 35.569v54.924h-77.575v-54.924l-23.272-35.53c-17.804-7.757-33.823-18.734-47.67-32.582-60.47-60.47-60.47-158.913 0-219.385 60.51-60.51 158.952-60.51 219.462 0 60.47 60.47 60.47 158.913 0 219.385zM473.211 861.091h77.575v-38.789h-77.575v38.789zM512 279.272c-62.177 0-120.63 24.204-164.538 68.19-90.764 90.725-90.764 238.351 0 329.115 14.507 14.469 30.643 26.919 48.174 37.043v186.259l38.789 38.789h155.151l38.789-38.789v-186.259c17.57-10.163 33.669-22.574 48.174-37.081 90.764-90.725 90.764-238.391 0-329.115-43.909-43.909-102.323-68.15-164.538-68.15z"></path></svg><span class="_21qHn"><h4 class="rui-3P6Ei rui-CfFc1 rui-2I-bT rui-1T2Y9">Why is it important?</h4></span></div><p class="_1DQVw" data-aut-id="text">Trade Direct is built on trust. Help other people get to know you. Tell them about the things you like. Share your favorite brands, books, movies, shows, music, food. And you will see the results…</p></div></div></div>
    </div>
  </div>
  <hr class="my-2">
  <h4 class="contacthd">Contact information</h4><br>
  <div class="row row_each">
    <div class="col-lg-6 ">
      <div class="rui-23EOE rui-1pm7-"><div class="_17JRt"><div class="rui-2zbKc"><label for="phone"></label><div class="rui-D-GoM rui-33EYo"><div class="rui-RcLUE rui-2gVGR"><div class="rui-3wYvC"><input class="inputarea" type="text" id="phone" name="phone" value="{{$member->phone}}" autocomplete="username" placeholder="Phone Number" class="rui-1ekfu rui-3oSYn"><div class="rui-1ckrC rui-2IRMD"><!--<div class="rui-V7eLx" tabindex="0" role="button"><svg width="16px" height="16px" viewBox="0 0 1024 1024" data-aut-id="icon" class="" fill-rule="evenodd" style=""id="myBtn"><path class="rui-2BsmJ" d="M277.333 85.333v60.331l366.336 366.336-366.336 366.336v60.331h60.331l409.003-408.981v-35.307l-409.003-409.045z"></path></svg></div>--></div></div></div></div><div class="rui-1g6wu"><span class="rui-qvKkT" data-aut-id=""></span></div></div></div></div>

    </div>
    <div class="col-lg-6 contanctinfo_p">
    <div class="rui-23EOE rui-1pm7-"><div class="_17JRt"><div class="rui-2zbKc"><label for="phone"></label><div class="rui-D-GoM rui-33EYo"><div class="rui-RcLUE rui-2gVGR"><div class="rui-3wYvC"><input class="inputarea" type="text" id="email" name="email" value="{{$member->email}}" autocomplete="username" placeholder="email" class="rui-1ekfu rui-3oSYn"><div class="rui-1ckrC rui-2IRMD"><!--<div class="rui-V7eLx" tabindex="0" role="button"><a class="buttonpop" href="#popup1"><svg width="16px" height="16px" viewBox="0 0 1024 1024" data-aut-id="icon" class="" fill-rule="evenodd" id="myBtn2"><path class="rui-2BsmJ" d="M277.333 85.333v60.331l366.336 366.336-366.336 366.336v60.331h60.331l409.003-408.981v-35.307l-409.003-409.045z"></a></path></svg></div>--></div></div></div></div><div class="rui-1g6wu"><span class="rui-qvKkT" data-aut-id=""></span></div></div></div></div>
    </div>
  </div>
  

  <!--<hr class="my-2">
  <div class="row row_each">
    <div class="col-lg-6 optional_info">
      <h4><b>Optional information</b></h4>
      <h6>Facebook</h6>
      <p class="fbunder_p">Sign in with Facebook and discover your trusted connections to buyers</p><br>
      <h6>Facebook</h6>
      <p class="fbunder_p">Sign in with Facebook and discover your trusted connections to buyers</p>
    </div>
    <div class="col-lg-6">
      <button class="connect_fb">Connect Facebook</button><br>
      <button class="connect_fb disconnectbtn">Disconnect</button>
    </div>
  </div>-->
  <hr class="my-2">
  
  <a href="" class="discard_btn"><b>Discard</b></a><button type="submit" class="editsave_btn">Save changes</button>
</div>
</form>

 <!-- The Modal -->
  <!-- Trigger/Open The Modal -->
<!-- <button >Open Modal</button> -->

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content phone_popup">
    <span class="close">&times;</span>
    <h1>Trade Direct</h1>
    <h3>Enter your phone to verify your account</h3>
    <p>We will send a confirmation code to your number</p>
    <div class="rui-23EOE rui-1pm7- ml-auto mr-auto" ><div class="_17JRt"><div class="rui-2zbKc"><label for="phone"></label><div class="rui-D-GoM rui-33EYo"><div class="rui-RcLUE rui-2gVGR"><div class="rui-3wYvC"><input class="inputarea" style="width: 100%" type="text" id="phone" name="phone" value="" autocomplete="username" placeholder="Phone Number" class="rui-1ekfu rui-3oSYn"><div class="rui-1ckrC rui-2IRMD"><div class="rui-V7eLx" tabindex="0" role="button"></div></div></div></div></div><div class="rui-1g6wu"><span class="rui-qvKkT" data-aut-id=""></span></div></div></div></div>
    <p class="p-two">The phone number you provide here is only used to verify your account. It will not be made public.</p>
    <button class="popup_next">NEXT</button>
  </div>

</div>



<div class="">
  
</div>

<div id="popup1" class="overlay">
  <div class="popup">
    
    <a class="close" href="#">&times;</a>
    <div class="content phone_popup">
      <h1>Trade Direct</h1>
    <h3>Enter your email to verify your account</h3>
    <p>We will send a confirmation code to your email</p>
    <div class="rui-23EOE rui-1pm7- ml-auto mr-auto" ><div class="_17JRt"><div class="rui-2zbKc"><label for="phone"></label><div class="rui-D-GoM rui-33EYo"><div class="rui-RcLUE rui-2gVGR"><div class="rui-3wYvC"><input class="inputarea" style="width: 100%" type="text" id="phone" name="phone" value="abcd@gmail.com" autocomplete="username" placeholder="email" class="rui-1ekfu rui-3oSYn"><div class="rui-1ckrC rui-2IRMD"><div class="rui-V7eLx" tabindex="0" role="button"></div></div></div></div></div><div class="rui-1g6wu"><span class="rui-qvKkT" data-aut-id=""></span></div></div></div></div>
    <p class="p-two">The email you provide here is only used to verify your account. It will not be made public.</p>
    <button class="popup_next">NEXT</button>
    </div>
  </div>
</div>
<!-- editprofileend -->

@endsection