<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReturnShopController extends Controller
{
    public function index()
    {
        return view('layouts.shop.index');
    }

    public function showShop()
    {
        return view('layouts.shop.shop');
    }

    public function showBlog()
    {
        return view('layouts.shop.blog');
    }

    public function showCart()
    {
        return view('layouts.shop.cart');
    }
}
