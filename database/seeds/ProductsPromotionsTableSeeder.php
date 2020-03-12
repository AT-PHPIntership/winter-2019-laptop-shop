<?php

use Illuminate\Database\Seeder;

class ProductsPromotionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ProductPromotion::class,10)->create();
    }
}
