<?php

namespace App\Http\Controllers;

use App\Http\Services\Color\ColorService;
use App\Http\Services\Comment\CommentService;
use App\Http\Services\Form\FormService;
use App\Http\Services\Post\PostService;
use App\Http\Services\Product\ProductService;
use App\Http\Services\Size\SizeService;
use App\Http\Services\Theme\ThemeService;
use App\Http\Services\Type\TypeService;
use App\Cart;
use App\Http\Services\Weather\weatherService;
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
    protected $commentService;
    protected $weatherService;

    public function __construct(ProductService $productService, FormService $formService, TypeService $typeService,
                                ColorService $colorService, SizeService $sizeService, PostService $postService,
                                ThemeService $themeService, CommentService $commentService, weatherService $weatherService)
    {
        $this->productService = $productService;
        $this->formService = $formService;
        $this->typeService = $typeService;
        $this->colorService = $colorService;
        $this->sizeService = $sizeService;
        $this->postService = $postService;
        $this->themeService = $themeService;
        $this->commentService = $commentService;
        $this->weatherService = $weatherService;
    }

    public function index()
    {
        $products = $this->productService->getEightProduct();
        $cart = Session::get('cart');
        return view('shop.index', compact('products', 'cart'));
    }

    public function showShop()
    {
        $weather = $this->weatherService->listWeather();
//        dd($weather);
        $cart = Session::get('cart');
        $forms = $this->formService->getAll();
        $types = $this->typeService->getAll();
        $colors = $this->colorService->getAll();
        $sizes = $this->sizeService->getAll();
        $themes = $this->themeService->getAll();
        $products = $this->productService->paginating();
        return view('shop.shop', compact('products', 'forms', 'types', 'colors', 'sizes', 'themes', 'cart','weather'));
    }

    public function showBlog()
    {
        $cart = Session::get('cart');
        $posts = $this->postService->getAll();
        return view('shop.blog', compact('posts', 'cart'));
    }

    public function singleBlog($id)
    {
        $comments = $this->commentService->findByPostId($id);
        $post = $this->postService->findById($id);
        $cart = Session::get('cart');
        return view('shop.singleBlog', compact('post', 'comments', 'cart'));
    }

    public function search(Request $request)
    {
        $forms = $this->formService->getAll();
        $types = $this->typeService->getAll();
        $sizes = $this->sizeService->getAll();
        $themes = $this->themeService->getAll();
        $products = $this->productService->search($request);
        $cart = Session::get('cart');
        return view('shop.shop', compact('products', 'forms', 'types', 'sizes', 'themes', 'cart'));
    }

    public function findProductBySizeId($id)
    {
        $forms = $this->formService->getAll();
        $types = $this->typeService->getAll();
        $sizes = $this->sizeService->getAll();
        $themes = $this->themeService->getAll();
        $products = $this->productService->findProductBySizeId($id);
        $cart = Session::get('cart');
        return view('shop.shop', compact('products', 'forms', 'types', 'sizes', 'themes', 'cart'));
    }

    public function findProductByFormId($id)
    {
        $forms = $this->formService->getAll();
        $types = $this->typeService->getAll();
        $sizes = $this->sizeService->getAll();
        $themes = $this->themeService->getAll();
        $products = $this->productService->findProductByFormId($id);
        $cart = Session::get('cart');
        return view('shop.shop', compact('products', 'forms', 'types', 'sizes', 'themes', 'cart'));
    }

    public function findProductByThemeId($id)
    {
        $forms = $this->formService->getAll();
        $types = $this->typeService->getAll();
        $sizes = $this->sizeService->getAll();
        $themes = $this->themeService->getAll();
        $products = $this->productService->findProductByThemeId($id);
        $cart = Session::get('cart');
        return view('shop.shop', compact('products', 'forms', 'types', 'cart', 'sizes', 'themes'));
    }

    public function findProductByTypeId($id)
    {
        $forms = $this->formService->getAll();
        $types = $this->typeService->getAll();
        $sizes = $this->sizeService->getAll();
        $themes = $this->themeService->getAll();
        $products = $this->productService->findProductByTypeId($id);
        $cart = Session::get('cart');
        return view('shop.shop', compact('products', 'forms', 'types', 'cart', 'sizes', 'themes'));
    }


}
