<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\ProductImage;
use App\Category;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //MODELO FACTORIES
       // factory(Product::class,100)->make(); CREA OBJETOS
        factory(Category::class,5)->create();
    	factory(Product::class,100)->create(); //factory(class,cantidad)CREA OBJETOS Y LO GUARDA EN LA BD 
        factory(ProductImage::class,200)->create();
    }
}
