<?php


namespace App\Http\Services\Product;


use App\Http\Repositories\Product\ProductRepoInterface;

class ProductService implements ProductServiceInterface
{
    protected $productRepo;

    public function __construct(ProductRepoInterface $productRepo)
    {
        $this->productRepo = $productRepo;
    }

    public function getAll()
    {
        return $this->productRepo->getAll();
    }

    public function store($request)
    {
        // TODO: Implement store() method.
    }

    public function findById($id)
    {
        return $this->productRepo->findById($id);
    }

    public function update($request, $obj)
    {
        // TODO: Implement update() method.
    }

    public function destroy($obj)
    {
        // TODO: Implement destroy() method.
    }

    public function search($request)
    {
        // TODO: Implement search() method.
    }
}
