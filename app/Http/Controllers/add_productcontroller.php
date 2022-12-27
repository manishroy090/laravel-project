<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class add_productcontroller extends Controller
{
  
    public function store(Request $request)
    {
      
      //validate
        $request->validate([
            'email'=>'required',
            'Description'=>'required',
             'img'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
       
        //insert query
        $product = new Product;
        $product->email = $request['email'];
        $product->title = $request['title'];
        $product->summary = $request['summary'];
        $product->Description = $request['Description'];
        $product->quality = $request['quality'];
        $product->category= $request['category'];
        $product->expiry = $request['expiry'];
        $filename = time() . "product." . $request->file('img')->getClientOriginalExtension();
         $request->file('img')->storeAs('uploads',$filename,'public');
         $product->img = $filename;
        $product->save();
        return redirect("/view");

    }
    public function view(){
        $products=Product::all();
        $msg = "product added";
        $data = compact('products','msg');
        return view('layout.view_product')->with($data);

    }
   
}
