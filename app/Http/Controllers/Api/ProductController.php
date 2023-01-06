<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\productResource;
use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = product::get();
        $products = productResource::collection($products);
        return response()->json($products,200);
    }
}
