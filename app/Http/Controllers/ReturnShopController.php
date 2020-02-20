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

    public function __construct(ProductService $productService, FormService $formService, TypeService $typeService, ColorService $colorService, SizeService $sizeService, PostService $postService, ThemeService $themeService, CommentService $commentService)
    {
        $this->productService = $productService;
        $this->formService = $formService;
        $this->typeService = $typeService;
        $this->colorService = $colorService;
        $this->sizeService = $sizeService;
        $this->postService = $postService;
        $this->themeService = $themeService;
        $this->commentService = $commentService;
    }

    public function index()
    {
        $products = $this->productService->getEightProduct();
        return view('shop.index',compact('products'));
    }

    public function showShop()
    {
        $forms = $this->formService->getAll();
        $types = $this->typeService->getAll();
        $colors = $this->colorService->getAll();
        $sizes = $this->sizeService->getAll();
        $themes = $this->themeService->getAll();
        $products = $this->productService->paginating();
        return view('shop.shop',compact('products','forms','types','colors','sizes','themes'));
    }

    public function showBlog()
    {
        $posts = $this->postService->getAll();
        return view('shop.blog',compact('posts'));
    }

    public function singleBlog($id)
    {
        $comments = $this->commentService->findByPostId($id);
        $post = $this->postService->findById($id);
        return view('shop.singleBlog',compact('post','comments'));
    }

    public function search(Request $request)
    {
        $forms = $this->formService->getAll();
        $types = $this->typeService->getAll();
        $colors = $this->colorService->getAll();
        $sizes = $this->sizeService->getAll();
        $themes = $this->themeService->getAll();
        $products = $this->productService->search($request);
        return view('shop.shop',compact('products','forms','types','colors','sizes','themes'));
    }


    public function showCart()
    {
        return view('shop.cart');
    }

    public function findProductBySizeId($id)
    {
        $forms = $this->formService->getAll();
        $types = $this->typeService->getAll();
        $colors = $this->colorService->getAll();
        $sizes = $this->sizeService->getAll();
        $themes = $this->themeService->getAll();
        $products = $this->productService->findProductBySizeId($id);
        return view('shop.shop',compact('products','forms','types','colors','sizes','themes'));
    }

    public function findProductByFormId($id)
    {
        $forms = $this->formService->getAll();
        $types = $this->typeService->getAll();
        $colors = $this->colorService->getAll();
        $sizes = $this->sizeService->getAll();
        $themes = $this->themeService->getAll();
        $products = $this->productService->findProductByFormId($id);
        return view('shop.shop',compact('products','forms','types','colors','sizes','themes'));
    }

    public function findProductByThemeId($id)
    {
        $forms = $this->formService->getAll();
        $types = $this->typeService->getAll();
        $colors = $this->colorService->getAll();
        $sizes = $this->sizeService->getAll();
        $themes = $this->themeService->getAll();
        $products = $this->productService->findProductByThemeId($id);
        return view('shop.shop',compact('products','forms','types','colors','sizes','themes'));
    }

    public function findProductByTypeId($id)
    {
        $forms = $this->formService->getAll();
        $types = $this->typeService->getAll();
        $colors = $this->colorService->getAll();
        $sizes = $this->sizeService->getAll();
        $themes = $this->themeService->getAll();
        $products = $this->productService->findProductByTypeId($id);
        return view('shop.shop',compact('products','forms','types','colors','sizes','themes'));
    }


}
