

<!--<div id="header" class="container-fluid fixed-top" style="background:white;">
    <div class="head-top-bar">
      <div class="logo-left-sec"> <a href="index.html"><img src="{{ URL::asset('trade/images/logo.jpg')}}"></a>
     <div class="sticky-search">

  <form class="form-inline col-6   searching-inn">
    <select class="form-control border curving-select">
      <option>All India</option>
    </select>
    <input class="form-control border w-50" type="search" placeholder="Search" aria-label="Search">
    <button class="form-control search-inn-color" type="submit">Search</button>
  </form>

     
    </div>

      <a class="post-plus mobile-view" href="">+ Post Ad</a> 
      </div>
      <div class="top-right-menu laptop-menu">
        @if(empty(session()->get('member_id')))
      <div class="div-over-right"> <a href="login.html" data-dismiss="modal" data-toggle="modal" data-target="#exampleModalLogin">Login</a> <a href="registration.html"  data-toggle="modal" data-target="#exampleModalRegister">Register</a> </div>
        @else
      <div class="div-over-left"> <!--<a href="{{ route('td/wholesalers') }}">Wholesalers / Manifactures</a> <a href="#">Auction</a> -->
      <!--  <a class="post-plus laptop-view" href="{{ route('td/posts') }}">+ Post Ad</a> 
        <a href="{{route('chatinbox',session()->get('member_id'))}}" >Chat</a>
          <a class="post-user-icon" href="{{route('profile')}}"> <img src="{{ URL::asset('trade/images/user.jpg')}}"> </a>
         <!--  <a class="post-messaging" href=""> <i class="fa fa-comment-o" aria-hidden="true"></i> </a> --
           </div>

           
        <!-- <div class="div-over-right"> <a href="">Login</a> <a href="">Register</a> </div> --
        @endif
        
      </div>
    </div>
  </div>-->

<?php

?>

  <div id="header" class="container-fluid fixed-top" style="background:white;">
    <div class="head-top-bar">
      <div class="logo-left-sec"> <a href="index.html"><img src="{{ URL::asset('trade/images/logo.jpg')}}"></a>
     <div class="sticky-search">

  <form class="form-inline col-6   searching-inn">
    <select class="form-control border curving-select">
      <option>All India</option>
    </select>
    <input class="form-control border w-50" type="search" placeholder="Search" aria-label="Search">
    <button class="form-control search-inn-color" type="submit">Search</button>
  </form>

     
    </div>

      <!--<a class="post-plus mobile-view" href="">+ Post Ad</a> -->
      </div>
      <div class="top-right-menu laptop-menu">
        <div class="div-over-left"> <a href="{{ route('td/wholesalers') }}">Wholesalers / Manifactures</a> <!--<a href="#">Auction</a>--> 
        
        @if(session()->get('member_id'))
        <a class="post-plus laptop-view" href="{{ route('td/posts') }}">+ Post Ad</a><a class="post-messaging" href="{{route('chatinbox',session()->get('member_id'))}}"> <i class="fa fa-comment-o" aria-hidden="true">Chat</i> </a> 
                 <element class="hover-drops"><span class="post-user-icon"> <img src="{{ URL::asset('trade/images/user.jpg')}}"> <span class="user-arrow"></span></span>
            <div class="dropdown-div bag-drop">
            <div class="items-in-bag">
                  <div class="items">
                    <div class="users-img">
                      <img class="img-fluid" src="{{ URL::asset('trade/images/user.jpg')}}" alt="image">
                      <span>
                        <h5>Hello,</h5>
                        <h3>{{session()->get('user_name')}}</h3>
                        <a href="{{route('profile')}}">view and edit profile</a>
                      </span>
                    </div>
                    <hr>
                    <div class="item-detail">
                      <ul>
                        <li><a href="">

<svg id="_x31_" enable-background="new 0 0 24 24" height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg"><path d="m20.5 24h-12c-1.378 0-2.5-1.121-2.5-2.5v-15c0-1.379 1.122-2.5 2.5-2.5h12c1.378 0 2.5 1.121 2.5 2.5v15c0 1.379-1.122 2.5-2.5 2.5zm-12-19c-.827 0-1.5.673-1.5 1.5v15c0 .827.673 1.5 1.5 1.5h12c.827 0 1.5-.673 1.5-1.5v-15c0-.827-.673-1.5-1.5-1.5z"/><path d="m4.5 21h-1c-1.378 0-2.5-1.121-2.5-2.5v-16c0-1.379 1.122-2.5 2.5-2.5h12c1.378 0 2.5 1.121 2.5 2.5 0 .276-.224.5-.5.5s-.5-.224-.5-.5c0-.827-.673-1.5-1.5-1.5h-12c-.827 0-1.5.673-1.5 1.5v16c0 .827.673 1.5 1.5 1.5h1c.276 0 .5.224.5.5s-.224.5-.5.5z"/><path d="m18.5 17h-8c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h8c.276 0 .5.224.5.5s-.224.5-.5.5z"/><path d="m18.5 21h-8c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h8c.276 0 .5.224.5.5s-.224.5-.5.5z"/><path d="m18.5 13h-8c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h8c.276 0 .5.224.5.5s-.224.5-.5.5z"/><path d="m18.5 9h-8c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h8c.276 0 .5.224.5.5s-.224.5-.5.5z"/></svg>
                        My Ads
                      </a></li>
                        <li><a href="">

<svg id="light" enable-background="new 0 0 24 24" height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg"><g><path d="m21.5 22h-19c-1.4 0-2.5-1.1-2.5-2.5v-12c0-1.4 1.1-2.5 2.5-2.5h19c1.4 0 2.5 1.1 2.5 2.5v12c0 1.4-1.1 2.5-2.5 2.5zm-19-16c-.8 0-1.5.7-1.5 1.5v12c0 .8.7 1.5 1.5 1.5h19c.8 0 1.5-.7 1.5-1.5v-12c0-.8-.7-1.5-1.5-1.5z"/></g><g><path d="m15.5 6c-.3 0-.5-.2-.5-.5v-2c0-.3-.2-.5-.5-.5h-5c-.3 0-.5.2-.5.5v2c0 .3-.2.5-.5.5s-.5-.2-.5-.5v-2c0-.8.7-1.5 1.5-1.5h5c.8 0 1.5.7 1.5 1.5v2c0 .3-.2.5-.5.5z"/></g><g><path d="m12 14c-.1 0-.1 0-.2 0l-11.5-4c-.2-.1-.4-.4-.3-.7.1-.2.4-.4.7-.3l11.3 4 11.3-4c.3-.1.5 0 .6.3s0 .5-.3.6l-11.5 4c0 .1 0 .1-.1.1z"/></g></svg>
                        buy business packages
                      </a></li>
                        <li><a href="">
                                                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
   viewBox="0 0 500.204 500.204" style="enable-background:new 0 0 500.204 500.204;" xml:space="preserve">
  <path d="M396.319,0H103.884C87.254,0,73.723,13.53,73.723,30.161v439.882c0,16.631,13.53,30.161,30.161,30.161H342.86
    c2.785,0,5.455-1.107,7.425-3.075l73.12-73.121c1.969-1.969,3.075-4.64,3.075-7.424V30.161C426.48,13.53,412.95,0,396.319,0z
     M353.361,464.353v-28.109c0-5.051,4.109-9.161,9.161-9.161h28.109L353.361,464.353z M103.884,21h292.435
    c5.052,0,9.161,4.109,9.161,9.161v32.452H94.723V30.161C94.723,25.109,98.833,21,103.884,21z M94.723,470.043V83.613H405.48v322.47
    h-42.958c-16.631,0-30.161,13.53-30.161,30.161v42.96H103.884C98.833,479.204,94.723,475.094,94.723,470.043z"/>
  <path d="M137.952,161.361h137.5c5.799,0,10.5-4.701,10.5-10.5s-4.701-10.5-10.5-10.5h-137.5c-5.799,0-10.5,4.701-10.5,10.5
    S132.153,161.361,137.952,161.361z"/>
  <path d="M317.452,161.361h35.5c5.799,0,10.5-4.701,10.5-10.5s-4.701-10.5-10.5-10.5h-35.5c-5.799,0-10.5,4.701-10.5,10.5
    S311.653,161.361,317.452,161.361z"/>
  <path d="M137.952,244.736h137.5c5.799,0,10.5-4.701,10.5-10.5s-4.701-10.5-10.5-10.5h-137.5c-5.799,0-10.5,4.701-10.5,10.5
    S132.153,244.736,137.952,244.736z"/>
  <path d="M317.452,244.736h35.5c5.799,0,10.5-4.701,10.5-10.5s-4.701-10.5-10.5-10.5h-35.5c-5.799,0-10.5,4.701-10.5,10.5
    S311.653,244.736,317.452,244.736z"/>
  <path d="M285.952,317.611c0-5.799-4.701-10.5-10.5-10.5h-137.5c-5.799,0-10.5,4.701-10.5,10.5s4.701,10.5,10.5,10.5h137.5
    C281.251,328.111,285.952,323.41,285.952,317.611z"/>
  <path d="M317.452,328.111h35.5c5.799,0,10.5-4.701,10.5-10.5s-4.701-10.5-10.5-10.5h-35.5c-5.799,0-10.5,4.701-10.5,10.5
    S311.653,328.111,317.452,328.111z"/>
  <path d="M352.952,388.111c5.799,0,10.5-4.701,10.5-10.5s-4.701-10.5-10.5-10.5h-100c-5.799,0-10.5,4.701-10.5,10.5
    s4.701,10.5,10.5,10.5H352.952z"/>
</svg>
                        Bought Package & billing
                      </a></li>
                        <hr>
                        <li><a href="">
                          <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
   viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
      <circle cx="256" cy="378.5" r="25"/>
      <path d="M256,0C114.516,0,0,114.497,0,256c0,141.484,114.497,256,256,256c141.484,0,256-114.497,256-256
        C512,114.516,397.503,0,256,0z M256,472c-119.377,0-216-96.607-216-216c0-119.377,96.607-216,216-216
        c119.377,0,216,96.607,216,216C472,375.377,375.393,472,256,472z"/>
      <path d="M256,128.5c-44.112,0-80,35.888-80,80c0,11.046,8.954,20,20,20s20-8.954,20-20c0-22.056,17.944-40,40-40
        c22.056,0,40,17.944,40,40c0,22.056-17.944,40-40,40c-11.046,0-20,8.954-20,20v50c0,11.046,8.954,20,20,20
        c11.046,0,20-8.954,20-20v-32.531c34.466-8.903,60-40.26,60-77.469C336,164.388,300.112,128.5,256,128.5z"/>
    </svg>

                        Help</a></li>
                        <li><a href="">
                          <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
   viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
  <g>
    <path d="M490.667,405.333h-56.811C424.619,374.592,396.373,352,362.667,352s-61.931,22.592-71.189,53.333H21.333
      C9.557,405.333,0,414.891,0,426.667S9.557,448,21.333,448h270.144c9.237,30.741,37.483,53.333,71.189,53.333
      s61.931-22.592,71.189-53.333h56.811c11.797,0,21.333-9.557,21.333-21.333S502.464,405.333,490.667,405.333z M362.667,458.667
      c-17.643,0-32-14.357-32-32s14.357-32,32-32s32,14.357,32,32S380.309,458.667,362.667,458.667z"/>
  </g>

  <g>
    <path d="M490.667,64h-56.811c-9.259-30.741-37.483-53.333-71.189-53.333S300.736,33.259,291.477,64H21.333
      C9.557,64,0,73.557,0,85.333s9.557,21.333,21.333,21.333h270.144C300.736,137.408,328.96,160,362.667,160
      s61.931-22.592,71.189-53.333h56.811c11.797,0,21.333-9.557,21.333-21.333S502.464,64,490.667,64z M362.667,117.333
      c-17.643,0-32-14.357-32-32c0-17.643,14.357-32,32-32s32,14.357,32,32C394.667,102.976,380.309,117.333,362.667,117.333z"/>
  </g>

  <g>
    <path d="M490.667,234.667H220.523c-9.259-30.741-37.483-53.333-71.189-53.333s-61.931,22.592-71.189,53.333H21.333
      C9.557,234.667,0,244.224,0,256c0,11.776,9.557,21.333,21.333,21.333h56.811c9.259,30.741,37.483,53.333,71.189,53.333
      s61.931-22.592,71.189-53.333h270.144c11.797,0,21.333-9.557,21.333-21.333C512,244.224,502.464,234.667,490.667,234.667z
       M149.333,288c-17.643,0-32-14.357-32-32s14.357-32,32-32c17.643,0,32,14.357,32,32S166.976,288,149.333,288z"/>
  </g>
</svg>
                        Settings</a></li>
                        <hr>
                        <li><a href="">
                          <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
   viewBox="0 0 477.867 477.867" style="enable-background:new 0 0 477.867 477.867;" xml:space="preserve">

  <g>
    <path d="M443.733,307.2c-9.426,0-17.067,7.641-17.067,17.067v102.4c0,9.426-7.641,17.067-17.067,17.067H68.267
      c-9.426,0-17.067-7.641-17.067-17.067v-102.4c0-9.426-7.641-17.067-17.067-17.067s-17.067,7.641-17.067,17.067v102.4
      c0,28.277,22.923,51.2,51.2,51.2H409.6c28.277,0,51.2-22.923,51.2-51.2v-102.4C460.8,314.841,453.159,307.2,443.733,307.2z"/>
  </g>

  <g>
    <path d="M335.947,295.134c-6.614-6.387-17.099-6.387-23.712,0L256,351.334V17.067C256,7.641,248.359,0,238.933,0
      s-17.067,7.641-17.067,17.067v334.268l-56.201-56.201c-6.78-6.548-17.584-6.36-24.132,0.419c-6.388,6.614-6.388,17.099,0,23.713
      l85.333,85.333c6.657,6.673,17.463,6.687,24.136,0.031c0.01-0.01,0.02-0.02,0.031-0.031l85.333-85.333
      C342.915,312.486,342.727,301.682,335.947,295.134z"/>
  </g>
</svg>

                        Install</a></li>
                        <hr>
             <!--            <li class="login-modal-head">
                          <button type="button" data-toggle="modal" data-target="#exampleModalCenter">
  Login
</button>
                        </li> -->
                        <li>
                          <a href="{{route('logout')}}">
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
   viewBox="0 0 490.667 490.667" style="enable-background:new 0 0 490.667 490.667;" xml:space="preserve">

  <g>
    <path d="M330.667,192c5.888,0,10.667-4.779,10.667-10.667v-128C341.333,23.936,317.419,0,288,0H53.333C23.915,0,0,23.936,0,53.333
      v384c0,29.397,23.915,53.333,53.333,53.333H288c29.419,0,53.333-23.936,53.333-53.333v-128c0-5.888-4.779-10.667-10.667-10.667
      S320,303.445,320,309.333v128c0,17.643-14.357,32-32,32H53.333c-17.643,0-32-14.357-32-32v-384c0-17.643,14.357-32,32-32H288
      c17.643,0,32,14.357,32,32v128C320,187.221,324.779,192,330.667,192z"/>
  </g>

  <g>
    <path d="M480,234.667H138.667c-5.888,0-10.667,4.779-10.667,10.667S132.779,256,138.667,256H480
      c5.888,0,10.667-4.779,10.667-10.667S485.888,234.667,480,234.667z"/>
  </g>
  <g>
    <path d="M487.531,237.824l-64-64c-4.16-4.16-10.923-4.16-15.083,0c-4.16,4.16-4.16,10.923,0,15.083l56.448,56.448l-56.448,56.448
      c-4.16,4.16-4.16,10.923,0,15.083c2.091,2.069,4.821,3.115,7.552,3.115c2.731,0,5.461-1.045,7.531-3.093l64-64
      C491.691,248.747,491.691,241.984,487.531,237.824z"/>
  </g>
</svg>

                          logout</a>
                        </li>
                      </ul>
                    </div>
                   
                  </div>
                </div>
              </div> 
          </element>
          @else
          <!-- <a class="post-messaging" href=""> <i class="fa fa-comment-o" aria-hidden="true"></i> </a> -->
           <a href="login.html" data-dismiss="modal" data-toggle="modal" data-target="#exampleModalLogin">Login</a>&nbsp;&nbsp;&nbsp;<b>|</b><a href="registration.html"  data-toggle="modal" data-target="#exampleModalRegister">Register</a>
          @endif
        </div>
          
           
           </div> 
     
    </div>
   
  </div>
  


 