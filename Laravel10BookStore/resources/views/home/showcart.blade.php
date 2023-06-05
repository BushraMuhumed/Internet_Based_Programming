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
            margin:auto;
            width:60%;
            text-align:center;
            padding:30px;
        }
        table,th,td 
        {
            border: 1px solid gray;
            color:black;
            
        }
        .th_dsg 
        {
           font-size:17px;
           padding: 5px;
           background:burlywood;
           
           
        }
        .img_dsg 
        {
            height:100px;
            width:100px;
        }
        .total_dsg 
        {
            font-size:20px;
            padding:30px;
        }
       </style> 
   
    </head>
   <body>
     <!-- banner bg main start -->
    
      
         <!-- banner section end -->

         
     
      <!-- banner bg main end -->
       

         <div class="header_section"  style="background-color: 	silver">

<div class="container">
   <div class="containt_main">
      <div id="mySidenav" class="sidenav">
         <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
         <a href="{{url('/')}}">Home</a>
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
               <li><a href="#">
                  <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                  <span class="padding_10">Cart</span></a>
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

      <!-- fiction section start -->


      @if(session()->has('message'))
          <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            {{session()->get('message')}}


          </div>

          @endif
     
      <!-- fiction section end -->
      <!-- nonfiction section start -->
      <div class="center">
        <table>
            <tr>
                <th class="th_dsg">Product Title</th>
                <th class="th_dsg">Product Quantity</th>
                <th class="th_dsg">Price</th>
                <th class="th_dsg">Image</th>
                <th class="th_dsg">Action</th>
            </tr>

            <?php $totalprice=0; ?>


           @foreach($cart as $cart)
            <tr>
                
                
                <td>{{$cart->product_title}}</td>
                <td>{{$cart->quantity}}</td>
                <td>{{$cart->price}}</td>
                <td><img class="img_dsg" src="/product/{{$cart->image}}"></td>
                <td>
                    <a class="btn btn-danger" onclick="return confirm('Are You Sure To Remove This? ')" 
                    href="{{url('/remove_cart',$cart->id)}}" >Remove</a></td>

            </tr>

            <?php $totalprice=$totalprice + $cart->price; ?>

            @endforeach

          
        </table>
        <div>
            <h1 class="total_dsg">Total Price : $   {{$totalprice}}</h1>
        </div>

        <div>
            <h1 style="font-size: 25px; padding-bottom:15px;">Proceed To Order</h1>
            <a href="{{url('cash_order')}}" class="btn btn-danger" style="color:black;">Cash On Delivery</a>
            <a href="" class="btn btn-danger" style="color:black;">Pay Using Card</a>


        </div>

      </div>
  
      
      @include('home.footer')
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