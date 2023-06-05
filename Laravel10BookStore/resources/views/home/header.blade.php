
         <!-- header section start -->
         <div class="header_section">
            <div class="container">
               <div class="containt_main">
                  <div id="mySidenav" class="sidenav">
                     <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                     <a href="index.html">Home</a>
                     <a href="fashion.html">Fiction</a>
                     <a href="electronic.html">Non-fiction</a>
                     <a href="jewellery.html">Poetry</a>
                  </div>
                  <span class="toggle_icon" onclick="openNav()"><img src="images/toggle-icon.png"></span>
                
                  <div class="main">
                     <!-- Another variation with a button -->
                     <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for books">
                        <div class="input-group-append">
                           <button class="btn btn-secondary" type="button" style="background-color: #f26522; border-color:#f26522 ">
                           <i class="fa fa-search"></i>
                           </button>
                        </div>
                     </div>
                  </div>
                  <div class="header_box">
                    
                     <div class="login_menu">
                        <ul>
                           <li><a href="{{url('show_cart')}}">
                              <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                              <span class="padding_10">Cart</span></a>
                           </li>


                           <li><a href="{{url('show_order')}}">
                              <i class="col-sm-12" aria-hidden="true"></i>
                              <span class="col-sm-12">Order</span></a>
                           </li>






                           @if (Route::has('login'))
                           @auth
                           <li>
                           <x-app-layout>

                           </x-app-layout>
                           </li>
                           @else

                           <li><a href="{{ route('login') }}">
                              <i class="fa fa-user" aria-hidden="true"></i>
                              <span class="padding_10">Login</span></a>
                           </li>
                           <li><a  href="{{ route('register') }}">
                              <i class="fa fa-user" aria-hidden="true"></i>
                              <span class="padding_10">Register</span></a>
                              @endauth
                              @endif
                              

                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- header section end -->

                <!-- banner section start -->
                
               
                <div class="banner_section layout_padding">
            <div class="container">
               <div id="my_slider" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="row">
                           <div class="col-sm-12">
                              <h5 class="banner_taital"> Reality may have its limits, <br> fiction does not.</h5>
                              <div class="buynow_bt"><a href="#">See More</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-sm-12">
                              <h1 class="banner_taital">You know everybody's ignorant,<br>just on different subjects.</h1>
                              <div class="buynow_bt"><a href="#">See More</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-sm-12">
                              <h1 class="banner_taital">Only the very weak-minded refuse to be influenced <br>by literature and poetry.</h1>
                              <div class="buynow_bt"><a href="#">See More</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                  <i class="fa fa-angle-left"></i>
                  </a>
                  <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                  <i class="fa fa-angle-right"></i>
                  </a>
               </div>
            </div>
         </div>

         <!-- banner section end -->

         

           

