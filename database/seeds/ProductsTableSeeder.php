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
                'name'     => 'Originals Pharrell Williams',
                'slug'     => Str::slug('Originals Pharrell Williams'),
                'sku'      => Str::slug('Originals Pharrell Williams'),
                'brand_id' => 1,
                'type'     => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name'     => 'Yeezy Boost 750 OG',
                'slug'     => Str::slug('Yeezy Boost 750 OG'),
                'sku'      => Str::slug('Yeezy Boost 750 OG'),
                'brand_id' => 1,
                'type'     => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name'     => 'T-shirt',
                'slug'     => Str::slug('T-shirt'),
                'sku'      => Str::slug('T-shirt'),
                'brand_id' => 2,
                'type'     => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name'     => 'Shirt',
                'slug'     => Str::slug('Shirt'),
                'sku'      => Str::slug('Shirt'),
                'brand_id' => 2,
                'type'     => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'name'     => 'Зимние носки мужские Brawni',
                'slug'     => Str::slug('Зимние носки мужские Brawni'),
                'sku'      => Str::slug('Зимние носки мужские Brawni'),
                'brand_id' => 3,
                'type'     => 0,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name'     => 'Консерва-носок "Girl boss"',
                'slug'     => Str::slug('Консерва-носок "Girl boss"'),
                'sku'      => Str::slug('Консерва-носок "Girl boss"'),
                'brand_id' => 3,
                'type'     => 0,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
