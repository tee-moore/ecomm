<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductsTableSeeder extends Seeder
{
    protected static $table = 'products';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table(self::$table)->insert([
            [
                'name'         => 'Originals Pharrell Williams',
                'slug'         => Str::slug('Originals Pharrell Williams'),
                'sku'          => Str::slug('Originals Pharrell Williams'),
                'brand_id'     => 1,
                'product_type' => 1,
            ],
            [
                'name'         => 'Yeezy Boost 750 OG',
                'slug'         => Str::slug('Yeezy Boost 750 OG'),
                'sku'          => Str::slug('Yeezy Boost 750 OG'),
                'brand_id'     => 1,
                'product_type' => 1,
            ],
            [
                'name'         => 'T-shirt',
                'slug'         => Str::slug('T-shirt'),
                'sku'          => Str::slug('T-shirt'),
                'brand_id'     => 2,
                'product_type' => 1,
            ],
            [
                'name'         => 'Shirt',
                'slug'         => Str::slug('Shirt'),
                'sku'          => Str::slug('Shirt'),
                'brand_id'     => 2,
                'product_type' => 1,

            ],
            [
                'name'         => 'Зимние носки мужские Brawni',
                'slug'         => Str::slug('Зимние носки мужские Brawni'),
                'sku'          => Str::slug('Зимние носки мужские Brawni'),
                'brand_id'     => 3,
                'product_type' => 0,
            ],
            [
                'name'         => 'Консерва-носок "Girl boss"',
                'slug'         => Str::slug('Консерва-носок "Girl boss"'),
                'sku'          => Str::slug('Консерва-носок "Girl boss"'),
                'brand_id'     => 3,
                'product_type' => 0,
            ],
        ]);
    }
}
