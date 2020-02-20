<?php


namespace App\Http\Repositories\Review;


use App\Http\Repositories\Request;
use App\Review;

class ReviewRepository implements ReviewRepositoryInterface
{
    protected $review;

    public function __construct(Review $review)
    {
        $this->review = $review;
    }
    public function getByProduct($id){
        return Review::where('product_id','like',$id)->get();
    }

    public function getAll()
    {
        return $this->review->all();
    }

    public function store($obj)
    {
        $obj->save();
    }

    public function update($obj)
    {
        $obj->save();
    }

    public function destroy($obj)
    {
        $obj->delete();
    }

    public function search($key)
    {
        return $this->review->where('review', 'like', '%' . $key . '%')->get();
    }

    public function findById($id)
    {
        return $this->review->findOrFail($id);

    }
}
