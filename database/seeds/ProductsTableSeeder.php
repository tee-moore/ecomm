<?php

use Illuminate\Database\Seeder;
use App\Models\Product\Product;

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
                'name' => 'Originals Pharrell Williams',
                'slug' => 'originals_pharrell_williams',
                'brand_id' => 1,
                'user_id' => 3,
                'gallery' => null,
                'product_type' => 1,
            ],
            [
                'name' => 'Yeezy Boost 750 OG',
                'slug' => 'yeezy_boost_750_og',
                'brand_id' => 1,
                'user_id' => 3,
                'gallery' => null,
                'product_type' => 1,
            ],
            [
                'name' => 'T-shirt',
                'slug' => 't_shirt',
                'brand_id' => 2,
                'user_id' => 4,
                'gallery' => null,
                'product_type' => 1,
            ],
            [
                'name' => 'Shirt',
                'slug' => 'shirt',
                'brand_id' => 2,
                'user_id' => 4,
                'gallery' => 'collins/shirt.jpg',
                'product_type' => 1,

            ],
            [
                'name' => 'Зимние носки мужские Brawni',
                'slug' => 'zymnye_nosky_muzhskye_brawni',
                'brand_id' => 3,
                'user_id' => 6,
                'gallery' => 'zhytomyrskye_nosky/zymnye_nosky_muzhskye_brawn1.jpg',
                'product_type' => 0,
            ],
            [
                'name' => 'Консерва-носок "Girl boss"',
                'slug' => 'konserva_nosok_girl_boss',
                'brand_id' => 3,
                'user_id' => 6,
                'gallery' => null,
                'product_type' => 0,
            ],
        ];

        foreach($products as $product) {
            Product::create($product);
        }
    }
}
