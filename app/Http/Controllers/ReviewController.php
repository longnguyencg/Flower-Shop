<?php

namespace App\Http\Controllers;

use App\Http\Services\Review\ReviewService;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    protected $reviewService;

    public function __construct(ReviewService $reviewService)
    {
        $this->reviewService = $reviewService;
    }

    public function index()
    {
        $reviews = $this->reviewService->getAll();
        return view('admin.reviews.index',compact('reviews'));
    }

    public function store(Request $request)
    {
        $this->reviewService->store($request);
        return redirect()->route('review.index');
    }

    public function findById($id)
    {
        return $this->reviewService->findById($id);
    }

    public function update(Request $request, $id)
    {
        $review = $this->reviewService->findById($id);
        $this->reviewService->update($request,$review);
        return redirect()->route('review.index');
    }

    public function destroy($id)
    {
        $review = $this->reviewService->findById($id);
        $this->reviewService->destroy($review);
        return redirect()->route('review.index');
    }
}
