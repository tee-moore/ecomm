<?php

use Illuminate\Database\Seeder;

class VariationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('variations')->insert([
            [
                'product_id' => 1,
                'sku' => 'originals_pharrell_williams_blue',
                'price' => 1500.00,
                'quantity' => 20,
            ],
            [
                'product_id' => 1,
                'sku' => 'originals_pharrell_williams_red',
                'price' => 1700.00,
                'quantity' => 15,
            ],
            [
                'product_id' => 2,
                'sku' => 'yeezy_boost_750_og_green',
                'price' => 6500.00,
                'quantity' => 10,
            ],
            [
                'product_id' => 2,
                'sku' => 'yeezy_boost_750_og_blue',
                'price' => 6700.00,
                'quantity' => 12,
            ],
            [
                'product_id' => 3,
                'sku' => 't_shirt_blue_small',
                'price' => 1200.00,
                'quantity' => 30,
            ],
            [
                'product_id' => 3,
                'sku' => 't_shirt_blue_large',
                'price' => 999.00,
                'quantity' => 13,
            ],
            [
                'product_id' => 3,
                'sku' => 't_shirt_red_small',
                'price' => 1100.00,
                'quantity' => 40,
            ],
            [
                'product_id' => 3,
                'sku' => 't_shirt_red_large',
                'price' => 999.00,
                'quantity' => 43,
            ],
            [
                'product_id' => 4,
                'sku' => 'shirt_small',
                'price' => 2100.00,
                'quantity' => 5,
            ],
            [
                'product_id' => 4,
                'sku' => 'shirt_medium',
                'price' => 1999.00,
                'quantity' => 9,
            ],
            [
                'product_id' => 4,
                'sku' => 'shirt_large',
                'price' => 2999.00,
                'quantity' => 19,
            ],
            [
                'product_id' => 5,
                'sku' => 'zymnye_nosky_muzhskye_brawni',
                'price' => 130.00,
                'quantity' => 119,
            ],
            [
                'product_id' => 6,
                'sku' => 'konserva_nosok_girl_boss',
                'price' => 159.30,
                'quantity' => 150,
            ]
        ]);
    }
}