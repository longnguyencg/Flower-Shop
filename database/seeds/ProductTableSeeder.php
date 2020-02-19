<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = new \App\Product();
        $products->name = "Rose";
        $products->description = "Đẹp và cuốn hút";
        $products->quantity = 1;
        $products->price = "100$";
        $products->sale = "12%";
        $products->image = "gfgfg.jpg";
        $products->size_id = 1;
        $products->form_id = 1;
        $products->save();
    }
}
