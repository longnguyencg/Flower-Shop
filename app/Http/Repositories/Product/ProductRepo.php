<?php


namespace App\Http\Repositories\Product;


use App\Product;

class ProductRepo implements ProductRepoInterface
{
    protected $product;
    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function getAll()
    {
        return $this->product->all();
    }

    public function store($obj)
    {
        $obj->save();
    }

    public function findById($id)
    {
        return $this->product->findOrFail($id);
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
        // TODO: Implement search() method.
    }

    public function paginating()
    {
        return $this->product->paginate(9);
    }
}
