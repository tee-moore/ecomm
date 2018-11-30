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
                'shop_id' => 1,
                'author_id' => 2,
            ],
            [
                'name' => 'Yeezy Boost 750 OG',
                'slug' => 'yeezy_boost_750_og',
                'shop_id' => 1,
                'author_id' => 2,
            ],
            [
                'name' => 'T-shirt',
                'slug' => 't_shirt',
                'shop_id' => 2,
                'author_id' => 2,
            ],
            [
                'name' => 'Shirt',
                'slug' => 'shirt',
                'shop_id' => 1,
                'author_id' => 2,
            ],
            [
                'name' => 'Зимние носки мужские Brawni',
                'slug' => 'zymnye_nosky_muzhskye_brawni',
                'shop_id' => 3,
                'author_id' => 2,
            ],
            [
                'name' => 'Консерва-носок "Girl boss"',
                'slug' => 'konserva_nosok_girl_boss',
                'shop_id' => 3,
                'author_id' => 2,
            ]
        ]);
    }
}
