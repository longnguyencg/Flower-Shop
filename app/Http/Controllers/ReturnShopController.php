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
        return view('shop.index',compact('products'));
    }

    public function showShop()
    {
        $products = $this->productService->paginating();
        return view('shop.shop',compact('products'));
    }

    public function showBlog()
    {
        $posts = $this->postService->getAll();
        return view('shop.blog',compact('posts'));
    }

    public function showCart()
    {
        return view('shop.cart');
    }

}
