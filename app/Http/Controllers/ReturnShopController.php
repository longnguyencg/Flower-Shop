<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReturnShopController extends Controller
{
    public function index()
    {
        return view('shop.index');
    }

    public function showShop()
    {
        return view('shop.shop');
    }

    public function showBlog()
    {
        return view('shop.blog');
    }

    public function showCart()
    {
        return view('shop.cart');
    }
}
