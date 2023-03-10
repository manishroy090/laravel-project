<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductCollection;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;

class add_productcontroller extends Controller
{

    public function store(Request $request)
    {

      //validate
        $request->validate([
            'email'=>'required|email',
            'title'=>'required',
             'description'=>'required',
             'summary'=>'required',
             'quality'=>'required',
             'img'=>'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
             'category'=>'required'
        ], [
            'email.required' => 'Email is required'
        ]);


        //insert query
        $product = new Product;
        $product->email = $request['email'];
        $product->title = $request['title'];
        $product->summary = $request['summary'];
        $product->description = $request['description'];
        $product->quality = $request['quality'];
        $getcatereq=$request->category;
        $category=implode(',',$getcatereq);
        $product->category= $category;
        $product->expiry = $request['expiry'];
        $filename = time() . "product." . $request->file('img')->guessExtension();;
        $request->file('img')->storeAs('uploads',$filename,'public');
        $product->img = $filename;
        $product->save();
        //return redirect("");
        return redirect()->intended('view')->with('msg', 'Product added');

    }
    public function view(){
        $products=Product::all();
        $product = productResource::collection($products);
        return response()->json($product);
        $msg = "product added";
        $data = compact('products','msg');
        return view('layout.view_product')->with($data);

    }

}
