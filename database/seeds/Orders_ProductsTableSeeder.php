<?php

use Illuminate\Database\Seeder;

class Orders_ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Order_Product::class,10)->create();
    }
}
