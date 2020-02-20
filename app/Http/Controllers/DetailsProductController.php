<?php

namespace App\Http\Controllers;

use App\Http\Services\Product\ProductService;
use App\Http\Services\Review\ReviewService;
use App\Product;
use Illuminate\Http\Request;
use App\Cart;
use Illuminate\Support\Facades\Session;

class DetailsProductController extends Controller
{
    protected $reviewService;
    protected $productService;

    public function __construct(ReviewService $reviewService,ProductService $productService)
    {
        $this->reviewService = $reviewService;
        $this->productService = $productService;
    }

    public function index($id)
    {
        $cart = Session::get('cart');
        $product = $this->productService->findById($id);
        $reviews= $this->reviewService->getByProduct($id);
        $starResult=0;
        $avgStar=0;
        foreach ($reviews as $review){
            $starResult += $review->star;
        }
        if (count($reviews)!=0){
            $avgStar = $starResult/count($reviews);
        }
        return view('shop.details',compact('product','reviews','avgStar','cart'));
    }
    public function store(Request $request)
    {
        $this->reviewService->store($request);
        return back();
    }

    public function findById($id)
    {
        return $this->productService->findById($id);
    }

    public function update(Request $request, $id)
    {
        $review = $this->reviewService->findById($id);
        $this->reviewService->update($request,$review);
        return redirect()->route('shop.details');
    }

    public function destroy($id)
    {
        $review = $this->reviewService->findById($id);
        $this->reviewService->destroy($review);
        return redirect()->route('shop.details');
    }
}
