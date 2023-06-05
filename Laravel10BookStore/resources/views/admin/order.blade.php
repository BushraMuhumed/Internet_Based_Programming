<!DOCTYPE html>
<html lang="en">
  <head>
  @include('admin.css')

  <style type="text/css">
    .title_dsg
    {
        text-align:center;
        font-size:25px;
        padding-top:50px;
        font-weight:bold;
    }
    .table_dsg
    {
       border:2px solid white;
       width: 90%;
       margin:auto;
       
       text-align:center;
    }
    .th_dsg
    {
        background-color:#556B2F;
    }
    .img_size 
    {
        width:80px;
        height:60px;
    }
  </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
           <!-- partial -->
           <div class="main-panel">
          <div class="content-wrapper">

           <h1 class="title_dsg">All Orders</h1>
           <div style="padding-left:400px; padding-bottom:30px; padding-top:30px;">
            <form action="{{url('search')}}" method="get">
                @csrf
                <input style="color: black" type="text" name="search" placeholder="Search for something">
                <input type="submit" value="search" class="btn btn-outline-primary">

            </form>

           </div>
           
           
           
           <table class="table_dsg">
            <tr class="th_dsg">
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Product_title</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Payment Status</th>
                <th>Delivery status</th>
                <th>Image</th>
                <th>Delivered</th>
                
            </tr>


            @forelse($order as $order)
            <tr>
                <td>{{$order->name}}</td>
                <td>{{$order->email}}</td>
                <td>{{$order->address}}</td>
                <td>{{$order->phone}}</td>
                <td>{{$order->product_title}}</td>
                <td>{{$order->quantity}}</td>
                <td>{{$order->price}}</td>
                <td>{{$order->payment_status}}</td>
                <td>{{$order->delivery_status}}</td>
                <td>
                    <img class="img_size" src="/product/{{$order->image}}">
                </td>
                <td>
                    @if($order->delivery_status=='processing')
                    <a href="{{url('delivered',$order->id)}}" class="btn btn-primary">Delivered</a>
                  @else

                  <p style="color:green" >Delivered</p>


                @endif
                </td>
            </tr>


            @empty
            <tr>
                <td colspan="16">No Data Found</td>
            </tr>

            @endforelse
           </table>
        </div>
      </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="admin/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="admin/assets/js/off-canvas.js"></script>
    <script src="admin/assets/js/hoverable-collapse.js"></script>
    <script src="admin/assets/js/misc.js"></script>
    <script src="admin/assets/js/settings.js"></script>
    <script src="admin/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="admin/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>