<?php


namespace App\Http\Services\Product;


use App\Http\Repositories\Product\ProductRepoInterface;
use App\Product;
use Illuminate\Support\Facades\Storage;

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
        $product = new Product();
        $product->name = $request->name;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->sale= $request->sale;
        $product->size_id = $request->size;
        $product->form_id = $request->form;
        $product->description = $request->description;
        $productThemesId = $request->theme;
        $productTypesId = $request->type;

        if (!$request->hasFile('image')) {
            $product->image = $request->image;
        } else {
            $image = $request->image;
            $imageName = date('Y-m-d H:i:s') . $image->getClientOriginalName();
            $request->image->storeAs('public/images/products', $imageName);
            $product->image = $imageName;
        }
        $this->productRepo->store($product);
        $product->themes()->attach($productThemesId);
        $product->types()->attach($productTypesId);

    }

    public function findById($id)
    {
        return $this->productRepo->findById($id);
    }

    public function update($request, $id)
    {
        $product = $this->productRepo->findById($id);
        $product->name = $request->name;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->sale= $request->sale;
        $product->size_id = $request->size;
        $product->form_id = $request->form;
        $product->description = $request->description;
        $product->themes()->detach();
        $product->types()->detach();
        $productThemesId = $request->theme;
        $productTypesId = $request->type;

        if ($request->hasFile('image')) {
            $currentImage = $product->image;
            if ($currentImage)
            {
                Storage::delete('public/images/products/'.$currentImage);
            }
            $image = $request->image;
            $imageName = date('Y-m-d H:i:s') . $image->getClientOriginalName();
            $request->image->storeAs('public/images/products', $imageName);
            $product->image = $imageName;
        }
        $this->productRepo->store($product);
        $product->themes()->attach($productThemesId);
        $product->types()->attach($productTypesId);
    }

    public function destroy($id)
    {
        $product = $this->productRepo->findById($id);

        $currentImage = $product->image;
        if($currentImage){
            Storage::delete('public/images/products/'.$currentImage);
        }
        $product->themes()->detach();
        $product->types()->detach();
        $this->productRepo->destroy($product);
    }

    public function search($request)
    {
        // TODO: Implement search() method.
    }

    public function getEightProduct()
    {
        return $this->productRepo->getEightProduct();
    }
}
