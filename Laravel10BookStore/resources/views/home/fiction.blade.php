<div class="fashion_section">
         <div id="main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <h1 class="fashion_taital">Our Books</h1>
                     <div class="fashion_section_2">
                        <div class="row">
                           @foreach($product as $products)
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                              <div class="tshirt_img"><img src="product/{{$products->Image}}"></div>
                                 <h4 class="shirt_text">{{$products->title}}</h4>
                                 
                                 
                                 @if($products->discount_price!=null)
                                 <br><p class="price_text">Discount: <span style="color: #262626;">$ {{$products->discount_price}}</span></p>
                                 <p class="price_text">Price  <span style="text-decoration: line-through;  color: #262626;">$ {{$products->price}}</span></p>
                                @else
                                <p class="price_text">Price  <span style="color: #262626;">$ {{$products->price}}</span></p>
                                
                                
                                 @endif
                                 <div class="btn_main">
                                 <form action="{{url('add_cart',$products->id)}}"   method="POST">
                                 @csrf
                                 <div class="col-md-4">
                                  <input type="number" name="quantity" value="0" min="1" style="width:50px"></div>
                                  <div class="buy_bt">
                                    
                                    <div class="buy_bt">
                                    <input type="submit"  value="Add To Cart"class="btn btn-inline-primary"></div>
                                    </form>
                                   </div>
                                    <div class="seemore_bt"><a href="{{url('product_details',$products->id)}}">See More</a></div>
                                 </div>
                              </div>
                           </div>
                           @endforeach
                           {!!$product->withQueryString()->links('pagination::bootstrap-5')!!}

                           
                           
                        </div>
                     </div>
                  </div>
               </div>
  
            </div>
            
         </div>
      </div>