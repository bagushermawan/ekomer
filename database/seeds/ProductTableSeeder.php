<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    public function run()
    {
        factory(App\Product::class, 5)->create();                
        
    }
}
