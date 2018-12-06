<?php

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
        DB::table('products')->insert([
            [
                'name' => 'Originals Pharrell Williams',
                'slug' => 'originals_pharrell_williams',
                'brand_id' => 1,
                'user_id' => 3,
                'gallery' => null,
            ],
            [
                'name' => 'Yeezy Boost 750 OG',
                'slug' => 'yeezy_boost_750_og',
                'brand_id' => 1,
                'user_id' => 3,
                'gallery' => null,
            ],
            [
                'name' => 'T-shirt',
                'slug' => 't_shirt',
                'brand_id' => 2,
                'user_id' => 4,
                'gallery' => null,
            ],
            [
                'name' => 'Shirt',
                'slug' => 'shirt',
                'brand_id' => 2,
                'user_id' => 4,
                'gallery' => 'collins/shirt.jpg',

            ],
            [
                'name' => 'Зимние носки мужские Brawni',
                'slug' => 'zymnye_nosky_muzhskye_brawni',
                'brand_id' => 3,
                'user_id' => 6,
                'gallery' => 'zhytomyrskye_nosky/zymnye_nosky_muzhskye_brawn1.jpg',
            ],
            [
                'name' => 'Консерва-носок "Girl boss"',
                'slug' => 'konserva_nosok_girl_boss',
                'brand_id' => 3,
                'user_id' => 6,
                'gallery' => null,
            ]
        ]);
    }
}
