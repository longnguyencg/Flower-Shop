<?php

namespace App\Http\Controllers;

use App\Http\Services\Color\ColorService;
use App\Http\Services\Form\FormService;
use App\Http\Services\Post\PostService;
use App\Http\Services\Product\ProductService;
use App\Http\Services\Size\SizeService;
use App\Http\Services\Theme\ThemeService;
use App\Http\Services\Type\TypeService;
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
    public function __construct(ProductService $productService, FormService $formService, TypeService $typeService, ColorService $colorService, SizeService $sizeService, PostService $postService, ThemeService $themeService )
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
