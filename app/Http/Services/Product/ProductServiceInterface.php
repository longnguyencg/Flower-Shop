<?php


namespace App\Http\Services\Product;


use App\Http\Services\ServiceInterface;

interface ProductServiceInterface extends ServiceInterface
{
    public function paginating();

    public function getEightProduct();

}
