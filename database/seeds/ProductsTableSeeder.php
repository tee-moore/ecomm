<?php

use Illuminate\Database\Seeder;
use App\Models\Product;
use Illuminate\Support\Str;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name'         => 'Originals Pharrell Williams',
                'slug'         => Str::slug('Originals Pharrell Williams'),
                'sku'          => Str::slug('Originals Pharrell Williams'),
                'brand_id'     => 1,
                'gallery'      => '',
                'product_type' => 1,
            ],
            [
                'name'         => 'Yeezy Boost 750 OG',
                'slug'         => Str::slug('Yeezy Boost 750 OG'),
                'sku'          => Str::slug('Yeezy Boost 750 OG'),
                'brand_id'     => 1,
                'gallery'      => '',
                'product_type' => 1,
            ],
            [
                'name'         => 'T-shirt',
                'slug'         => Str::slug('T-shirt'),
                'sku'          => Str::slug('T-shirt'),
                'brand_id'     => 2,
                'gallery'      => '',
                'product_type' => 1,
            ],
            [
                'name'         => 'Shirt',
                'slug'         => Str::slug('Shirt'),
                'sku'          => Str::slug('Shirt'),
                'brand_id'     => 2,
                'gallery'      => '',
                'product_type' => 1,

            ],
            [
                'name'         => 'Зимние носки мужские Brawni',
                'slug'         => Str::slug('Зимние носки мужские Brawni'),
                'sku'          => Str::slug('Зимние носки мужские Brawni'),
                'brand_id'     => 3,
                'gallery'      => '',
                'product_type' => 0,
            ],
            [
                'name'         => 'Консерва-носок "Girl boss"',
                'slug'         => Str::slug('Консерва-носок "Girl boss"'),
                'sku'          => Str::slug('Консерва-носок "Girl boss"'),
                'brand_id'     => 3,
                'gallery'      => '',
                'product_type' => 0,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
