<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Book Store</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="home/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="home/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="home/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
      <!-- font awesome -->
      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--  -->
      <!-- owl stylesheets -->
      <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext" rel="stylesheet">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesoeet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   
   <style type="text/css">
    .center 
    {
        margin :auto;
        width:80%;
        padding:30px;
        text-align:center;
    }
    table,th,td 
    {
        border:1px solid black;
        color:black;
    }

    .th_dsg
    {
        padding:10px;
        background-color:burlywood;
        font-size:20px;
        font-weight:bold;

    }




   </style>
   
   
    </head>
   <body>
     <!-- banner bg main start -->
  
    

    <!-- header section start -->
    <div class="header_section"  style="background-color: 	silver">
   
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

         <!-- header top section start -->

      <div class="center">
        <table>
            <tr>
              <th class="th_dsg">Product Title</th> 
              <th class="th_dsg">Quantity</th>
              <th class="th_dsg">Price</th>
              <th class="th_dsg">Payment Status</th>
              <th class="th_dsg">Delivery Status</th>
              <th class="th_dsg">Image</th>
              <th class="th_dsg">Cancel Order</th>
               
            </tr>
            @foreach($order as $order)
            <tr>
                <td>{{$order->product_title}}</td>
                <td>{{$order->quantity}}</td>
                <td>{{$order->price}}</td>
                <td>{{$order->payment_status}}</td>
                <td>{{$order->delivery_status}}</td>
                <td>
                    <img height="100" width="100" src="product/{{$order->image}}">
                </td>
                <td> 
                    @if($order->delivery_status='processing')
                    <a onclick="return confirm('Are You Sure To Cancel This Order')" class="btn btn-danger" href="{{url('cancel_order',$order->id)}}">cancel order</a>
                  @else
                  <p color="blue">Not Allowed</p>
                @endif
                </td>
            </tr>
            @endforeach
        </table>
      </div>
      <!-- nonfiction section end -->
      <!-- poetry  section start -->
     
      <!-- poetry  section end -->
      <!-- footer section start -->
      @include('home.footer')
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">© 2020 All Rights Reserved. Design by <a href="https://html.design">Free html  Templates</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="home/js/jquery.min.js"></script>
      <script src="home/js/popper.min.js"></script>
      <script src="home/js/bootstrap.bundle.min.js"></script>
      <script src="home/js/jquery-3.0.0.min.js"></script>
      <script src="home/js/plugin.js"></script>
      <!-- sidebar -->
      <script src="home/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="home/js/custom.js"></script>
      <script>
         function openNav() {
           document.getElementById("mySidenav").style.width = "250px";
         }
         
         function closeNav() {
           document.getElementById("mySidenav").style.width = "0";
         }
      </script>
   </body>
</html>