<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(){
        $products = Product::orderBy('create_at', 'DESC')->paginage(12);
        return view('shop', ['products'=>$products]);
    }
}
