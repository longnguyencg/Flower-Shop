<?php

namespace App\Http\Controllers;

use App\Http\Services\Color\ColorService;
use App\Http\Services\Form\FormService;
use App\Http\Services\Post\PostService;
use App\Http\Services\Product\ProductService;
use App\Http\Services\Size\SizeService;
use App\Http\Services\Theme\ThemeService;
use App\Http\Services\Type\TypeService;
use App\Cart;
use Illuminate\Support\Facades\Session;
use App\Product;
use Illuminate\Http\Request;

class ReturnShopController extends Controller
{
    protected $productService;
    protected $formService;
    protected $typeService;
    protected $colorService;
    protected $sizeService;
    protected $postService;
    protected $themeService;

    public function __construct(ProductService $productService, FormService $formService, TypeService $typeService, ColorService $colorService, SizeService $sizeService, PostService $postService, ThemeService $themeService)
    {
        $this->productService = $productService;
        $this->formService = $formService;
        $this->typeService = $typeService;
        $this->colorService = $colorService;
        $this->sizeService = $sizeService;
        $this->postService = $postService;
        $this->themeService = $themeService;
    }

    public function index()
    {
        $products = $this->productService->getEightProduct();
        $cart = Session::get('cart');


        return view('shop.index', compact('products', 'cart'));
    }

    public function showShop()
    {
        $cart = Session::get('cart');
        return view('shop.shop',compact('cart'));
    }

    public function showBlog()
    {
        $cart = Session::get('cart');
        return view('shop.blog',compact('cart'));
    }

}
