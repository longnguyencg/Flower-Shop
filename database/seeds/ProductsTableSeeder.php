<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product();
        $product->name = 'HCM0188888888';
        $product->description = 'ASDCSSDSADSA';
        $product->quantity = '1';
        $product->price = '490000';
        $product->sale = '450000';
        $product->size_id = '1';
        $product->form_id = '1';
        $product->save();

        $product = new Product();
        $product->name = 'HCM01';
        $product->description = 'ASDCSSDSADSA';
        $product->quantity = '1';
        $product->price = '490000';
        $product->sale = '450000';
        $product->size_id = '1';
        $product->form_id = '1';
        $product->save();

        $product = new Product();
        $product->name = 'HCM01666';
        $product->description = 'ASDCSSDSADSA';
        $product->quantity = '1';
        $product->price = '490000';
        $product->sale = '450000';
        $product->size_id = '1';
        $product->form_id = '1';
        $product->save();

        $product = new Product();
        $product->name = 'HCM01555';
        $product->description = 'ASDCSSDSADSA';
        $product->quantity = '1';
        $product->price = '490000';
        $product->sale = '450000';
        $product->size_id = '1';
        $product->form_id = '1';
        $product->save();

        $product = new Product();
        $product->name = 'HCM01444';
        $product->description = 'ASDCSSDSADSA';
        $product->quantity = '1';
        $product->price = '490000';
        $product->sale = '450000';
        $product->size_id = '1';
        $product->form_id = '1';
        $product->save();

        $product = new Product();
        $product->name = 'HCM01333';
        $product->description = 'ASDCSSDSADSA';
        $product->quantity = '1';
        $product->price = '490000';
        $product->sale = '450000';
        $product->size_id = '1';
        $product->form_id = '1';
        $product->save();

        $product = new Product();
        $product->name = 'HCM0122';
        $product->description = 'ASDCSSDSADSA';
        $product->quantity = '1';
        $product->price = '490000';
        $product->sale = '450000';
        $product->size_id = '1';
        $product->form_id = '1';
        $product->save();

        $product = new Product();
        $product->name = 'HCM01111111';
        $product->description = 'ASDCSSDSADSA';
        $product->quantity = '1';
        $product->price = '490000';
        $product->sale = '450000';
        $product->size_id = '1';
        $product->form_id = '1';
        $product->save();
    }
}
