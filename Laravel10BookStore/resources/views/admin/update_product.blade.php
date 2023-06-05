<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">


  @include('admin.css')

  <style type="text/css">
    .div_center
    {
        text-align:center;
        padding-top:40px;
    }
    .font_size
    {
        font-size:40px;
        padding-bottom:40px;
    }
    .text_color
    {
        color:black;
        padding-bottom:20px;
    }
    label 
    {
      display:inline-block;
      width:200px;
    }
    .div_design
    {
      padding-bottom:20px;
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

         <div class="div_center">
            <h1 class="font_size">Update Product</h1>
          
         <form action="{{url('/update_product_confirm',$product->id)}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="div_design">
            <label>Product Title : </label>
            <input class="text_color" type="text" name="title" placeholder="write a title" required="" value="{{$product->title}}">
          </div>

          <div class="div_design">
            <label>Product Author : </label>
            <input class="text_color" type="text" name="author" placeholder="write a author name" required="" value="{{$product->author}}">
          </div>

          <div class="div_design">
            <label>Product Genre : </label>
            <select class="text_color" required="" name="catagory" required="">
              <option value="{{$product->genre}}" selected="">{{$product->genre}}</option>
              @foreach($catagory as $catagory)
              
              <option value="{{$catagory->catagory_name}}">{{$catagory->catagory_name}}</option>
              
              @endforeach


            </select>
          </div>

          <div class="div_design">
            <label>Product Quantity : </label>
            <input class="text_color" type="number" min="0" name="quantity" placeholder="write a quantity" required="" value="{{$product->quantity}}">
          </div>

          <div class="div_design">
            <label>Product Price : </label>
            <input class="text_color" type="Number" name="price" placeholder="write a price" required="" value="{{$product->price}}">
          </div>

          <div class="div_design">
            <label>Discount Price : </label>
            <input class="text_color" type="number" name="dis_price" placeholder="write a discount price" value="{{$product->discount_price}}">
          </div>

          <div class="div_design">
            <label>Current Product Image Here : </label>
            <img style="margin:auto;" height="100" width="100" src="/product/{{$product->Image}}">
          </div>




          <div class="div_design">
            <label>Change Product Image Here : </label>
            <input  type="file" name="image" >
          </div>

          <div class="div_design">
            
            <input type="submit" value="Update Product" class="btn btn-primary">
          </div>
        </form>
            
       </div>


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