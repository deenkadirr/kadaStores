<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $products=Product::all();

        return view('front.home',compact('products'));
    }

    public function products()
    {
        $products=Product::all();
        return view('front.products',compact('products'));
    }

    public function product()
    {
        return view('front.product');
    }
}
