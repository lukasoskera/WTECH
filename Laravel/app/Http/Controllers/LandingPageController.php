<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;



class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bestproducts = Product::inRandomOrder()->take(4)->get();
        $newproducts = Product::paginate(4);
        return view('home')->with('bestproducts', $bestproducts)->with('newproducts', $newproducts);

    }

    public function show($slug)
    {
        $product = Product::where('slug',$slug)->firstOrFail();
        return view('detail')->with('product', $product);

    }



}
