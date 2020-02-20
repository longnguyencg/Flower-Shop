<?php


namespace App\Http\Services\WishListService;


use App\Http\Repositories\User\UserRepository;
use App\Http\Repositories\WishListRepo\WishListRepoInterface;
use Illuminate\Support\Facades\Auth;

class WishListService implements WishListServiceInterface
{

    protected $wishListRepo;

    public function __construct(WishListRepoInterface $wishListRepo)
    {
        $this->wishListRepo = $wishListRepo;
    }

    public function getAll()
    {
        // TODO: Implement getAll() method.
    }

    public function store($id)
    {
        $productsWishlist = Auth::user()->products;
        foreach($productsWishlist as $product)
            if($product->id == $id)
                return redirect()->back();
        Auth::user()->products()->attach($id);
    }

    public function findById($id)
    {
        // TODO: Implement findById() method.
    }

    public function update($request, $obj)
    {
        // TODO: Implement update() method.
    }

    public function destroy($id)
    {
        Auth::user()->products()->detach($id);
    }

    public function search($request)
    {
        // TODO: Implement search() method.
    }
}
