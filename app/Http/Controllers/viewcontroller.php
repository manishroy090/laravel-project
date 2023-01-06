<?php

namespace App\Http\Controllers;

use App\Models\Product;

use Illuminate\Http\Request;

class viewcontroller extends Controller
{
    public function delete($id)
    {
        $product= Product::where("Product_id", $id);
        $product->delete();
        return redirect('view');
    }
    public function edit($id)
    {
        $product= Product::where("Product_id", $id);
        if (is_null($product)){
            return redirect('view');
        } else {
            $product= Product::where("Product_id", $id)->first();

            $url =url('/update') ."/". $id;
            $title = "UPdate Proudct";
            $data = compact('product', 'url', 'title');
            return view('layout.EditProduct')->with($data);
        }
    }
    public function update($id, Request $request)
    {
        $product= Product::find($id);
        $product->email = $request['email'];
        $product->title = $request['title'];
        $product->summary = $request['summary'];
        $product->description = $request['description'];
        $product->quality = $request['quality'];
        $getcatereq=$request->category;
        $category=implode(',', $getcatereq);
        $product->category= $category;
        $product->expiry = $request['expiry'];
        if ($request->hasFile('img')) {
            $filename = time() . "product." . $request->file('img')->guessExtension();
            ;
            $request->file('img')->storeAs('uploads', $filename, 'public');
            $product->img = $filename;
        }

        $product->save();
        return redirect('view');
    }
}
