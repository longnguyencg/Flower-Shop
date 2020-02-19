<?php


namespace App\Http\Services\Review;


use App\Http\Repositories\Review\ReviewRepository;
use App\Review;

class ReviewService implements ReviewServiceInterface
{
    protected $reviewRepo;

    public function __construct(ReviewRepository $reviewRepo)
    {
        $this->reviewRepo = $reviewRepo;

    }

    public function getAll()
    {
        return $this->reviewRepo->getAll();
    }

    public function store($request)
    {
        $review = new review();
        $review->review = $request->review;
        $this->reviewRepo->store($review);
    }

    public function findById($id)
    {
        return $this->reviewRepo->findById($id);
    }

    public function update($request, $obj)
    {;
        $obj->review = $request->review;
        $this->reviewRepo->update($obj);
    }

    public function destroy($obj)
    {
        $this->reviewRepo->destroy($obj);
    }

    public function search($request)
    {
        return $this->reviewRepo->search($request->key);
    }
}
