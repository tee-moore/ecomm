<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VariationsTableSeeder extends Seeder
{
    protected static $table = 'variations';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table(self::$table)->insert([
            [
                'product_id' => 1,
                'sku' => 'originals-pharrell-williams-blue',
                'price' => 1500.00,
                'quantity' => 20,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'product_id' => 1,
                'sku' => 'originals-pharrell-williams-red',
                'price' => 1700.00,
                'quantity' => 15,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'product_id' => 2,
                'sku' => 'yeezy-boost-750-og-orange',
                'price' => 6500.00,
                'quantity' => 10,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'product_id' => 2,
                'sku' => 'yeezy-boost-750-og-blue',
                'price' => 6700.00,
                'quantity' => 12,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'product_id' => 3,
                'sku' => 't-shirt-blue-small',
                'price' => 1200.00,
                'quantity' => 30,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'product_id' => 3,
                'sku' => 't-shirt-blue-large',
                'price' => 999.00,
                'quantity' => 13,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'product_id' => 3,
                'sku' => 't-shirt-red-small',
                'price' => 1100.00,
                'quantity' => 40,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'product_id' => 3,
                'sku' => 't-shirt-red-large',
                'price' => 999.00,
                'quantity' => 43,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'product_id' => 4,
                'sku' => 'shirt-small',
                'price' => 2100.00,
                'quantity' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'product_id' => 4,
                'sku' => 'shirt-medium',
                'price' => 1999.00,
                'quantity' => 9,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'product_id' => 4,
                'sku' => 'shirt-large',
                'price' => 2999.00,
                'quantity' => 19,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'product_id' => 5,
                'sku' => 'zymnye-nosky-muzhskye-brawni',
                'price' => 130.00,
                'quantity' => 119,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'product_id' => 6,
                'sku' => 'konserva-nosok-girl-boss',
                'price' => 159.30,
                'quantity' => 150,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        ]);
    }
}
