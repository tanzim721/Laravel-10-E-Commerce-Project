<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(){
        $products = Product::orderBy('category_at', 'DESC')->paginage(12);
        return view('shop', ['products'=>$products]);
    }
}
