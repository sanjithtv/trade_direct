<?php
use App\td_classified_category;

//$category=td_classified_category::where('parent','0')->get();
$categories = td_classified_category::with('children')->where('parent','=',0)->get();
?>

<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <div class="top-right-menu text-center mobile-menu">
        <div class="div-over-left py-5"> <a href="#">Wholesalers / Manifactures</a> <a href="#">Auction</a> <a class="post-plus" href="">+ Post Ad</a> <a class="post-user-icon" href=""> <img src="images/user.jpg"> </a> <a class="post-messaging" href=""> <i class="fa fa-comment-o" aria-hidden="true"></i> </a> </div>
        <div class="div-over-right mb-4"> <a href="">Login</a> <a href="">Register</a> </div>
      </div>


        <ul class="navbar-nav mr-auto text-left">
          <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle nill-arrow" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> ALL CATEGORIES <span class="arrow"></span> </a>
            <div class="dropdown-menu mega-sub-menu" aria-labelledby="navbarDropdown">
              <div class="container-fluid">
                <div class="row">
                @foreach($categories as $item)
		          	@if($item->children->count() > 0)
                  <div class="col-md-3">
                    <ul class="nav flex-column">
                      <li class="nav-item"> <span class="nav-link active" href="#">{{$item->name}}</span> </li>
                      @foreach($item->children as $submenu)
                      <li class="nav-item"> <a class="nav-link" href="{{route('td/categorylist',$submenu->slug)}}">{{$submenu->name}}</a> </li>
                      @endforeach 
                    </ul>
                  </div>
                  @endif
                  @endforeach 
                 
                </div>
              </div>
              <!--  /.container  --> 
              
            </div>
          </li>
          @foreach($categories as $item)
          <li class="nav-item"> <a class="nav-link" href="#">{{$item->name}}</a> </li>

          @endforeach 
        </ul>
      </div>
    </nav>
  </div>