<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catagory;

use App\Models\Product;
use App\Models\Order;

class AdminController extends Controller
{
    public function view_catagory()
    {
        $data=catagory::all();

        return view('admin.catagory',compact('data'));
       

    }
    public function add_catagory(Request $request )
    {
       
        $data=new catagory;
        $data -> catagory_name =$request->catagory;
        $data->save();

        return redirect()->back()->with('message','Catagory Added Successfully');

    }

    public function delete_catagory($id)
    {
        $data=catagory::find($id);

        $data->delete();

        return redirect()->back()->with('message','Catagory Deleted Successfully');

    }

    public function view_product()
    {
        $catagory=catagory::all();
        return view('admin.product',compact('catagory'));
    }

    public function add_product(Request $request)
    {
        $product=new product;
         $product->title=$request->title;
         $product->author=$request->author;
         $product->genre=$request->catagory;
         $product->quantity=$request->quantity;
         $product->price=$request->price;
         $product->discount_price=$request->dis_price;
        
        
         $Image=$request->image;
         $imagename=time().'.'.$Image->getClientOriginalExtension();
         $request->image->move('product',$imagename);
            
         $product->Image=$imagename;
            
         

         $product->save();


         return redirect()->back()->with('message','Product Added Successfully');

        
    }

    public function show_product()
    {
        $product=product::all();
        return view('admin.show_product',compact('product'));
    }

    public function delete_product($id)
    {
        $product=product::find($id);
        $product->delete();
        return redirect()->back()->with('message','Product Deleted Successfully');

    }

    public function update_product($id)
    {
        $product=product::find($id);

        $catagory=catagory::all();

        return view('admin.update_product',compact('product','catagory'));
    }

    public function update_product_confirm(Request $request,  $id)
    {
        $product=product::find($id);

        $product->title=$request->title;
        $product->author=$request->author;
        $product->genre=$request->catagory;
        $product->quantity=$request->quantity;
        $product->price=$request->price;
        $product->discount_price=$request->dis_price;
        
        
        $Image=$request->image;

        if($Image)
        {
            $imagename=time().'.'.$Image->getClientOriginalExtension();
            $request->image->move('product',$imagename);
    
            $product->Image=$imagename;

        }
       

        $product->save();
        return redirect()->back()->with('message','Product Updated Successfully');
    }

    public function order()
    {
        $order=order::all();

        return view('admin.order',compact('order'));
    }

    public function delivered($id)
    {
        $order=order::find($id);

        $order->delivery_status="delivered";
        $order->payment_status='paid';
        
        $order->save();

        return redirect()->back();
    }

    public function searchdata(Request $request)
    {
        $searchtext=$request->search;

        $order=order::where('name','LIKE',"%$searchtext%")->orWhere('phone','LIKE',"%$searchtext%")->orWhere('product_title','LIKE',"%$searchtext%")->get();
    
        return view('admin.order',compact('order'));
    }

}
