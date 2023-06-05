<!DOCTYPE html>
<html lang="en">
  <head>
  @include('admin.css')

  <style>
    .center 
    {
        margin:auto;
        width:100%;
        border:2px solid white;
        text-align:center;
        margin-top:40px;
    }
    
    .font_size
    {
        text-align:center;
        font-size:40px;
        padding-top:20px;

    }
    .img_size 
    {
        width:100px;
        height:100px;
    }
    .th_color 
    {
        background:#556B2F
    }
    .th_dsg 
    {
        padding:10px;
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

          @if(session()->has('message'))
          <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            {{session()->get('message')}}


          </div>

          @endif

          <h2 class="font_size"> All Products</h2>


           <table class="center">
            <tr class="th_color">
                <th class="th_dsg">Product Title</th>
                <th class="th_dsg">Author Name</th>
                <th class="th_dsg">Genre</th>
                <th class="th_dsg">Quantity</th>
                <th class="th_dsg">Price</th>
                <th class="th_dsg">Discount Price</th>
                <th class="th_dsg">Image</th>
                <th class="th_dsg">Delete</th>
                <th class="th_dsg">Edit</th>
            </tr>

           @foreach($product as $product) 

            <tr>
                <td>{{$product->title}}</td>
                <td>{{$product->author}}</td>
                <td>{{$product->genre}}</td>
                <td>{{$product->quantity}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->discount_price}}</td>
                <td>
                    <img class="img_size" src="/product/{{$product->Image}}">
                </td>
                <td>
                    <a class="btn btn-danger" onclick="return confirm('Are You Sure You Want To Delete This')" href="{{url('delete_product',$product->id)}}">Delete</a>
                </td>
                <td>
                <a class="btn btn-success" href="{{url('update_product',$product->id)}}">Edit</a>
                </td>
            </tr>
            @endforeach

 
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