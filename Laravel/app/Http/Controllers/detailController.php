<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class detailController extends Controller
{
    public function index($num)
    {
        $newproducts = Product::where('category','=',$num)->paginate(4);
        return view('filter')->with('newproducts', $newproducts);

    }

    public function show($slug)
    {
        $product = Product::where('slug',$slug)->firstOrFail();
        return view('detail')->with('product', $product);

    }
}
