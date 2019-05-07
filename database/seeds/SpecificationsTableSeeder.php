<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpecificationsTableSeeder extends Seeder
{
    protected static $table = 'specifications';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table(self::$table)->insert([
            [
                'attribute_id' => 1,
                'variation_id' => 1,
                'value_id'     => 2,
            ],
            [
                'attribute_id' => 1,
                'variation_id' => 2,
                'value_id'     => 1,
            ],
            [
                'attribute_id' => 1,
                'variation_id' => 3,
                'value_id'     => 3,
            ],
            [
                'attribute_id' => 1,
                'variation_id' => 4,
                'value_id'     => 2,
            ],
            [
                'attribute_id' => 1,
                'variation_id' => 5,
                'value_id'     => 2,
            ],
            [
                'attribute_id' => 2,
                'variation_id' => 5,
                'value_id'     => 4,
            ],
            [
                'attribute_id' => 1,
                'variation_id' => 6,
                'value_id'     => 2,
            ],
            [
                'attribute_id' => 2,
                'variation_id' => 6,
                'value_id'     => 6,
            ],
            [
                'attribute_id' => 1,
                'variation_id' => 7,
                'value_id'     => 1,
            ],
            [
                'attribute_id' => 2,
                'variation_id' => 7,
                'value_id'     => 4,
            ],
            [
                'attribute_id' => 1,
                'variation_id' => 8,
                'value_id'     => 1,
            ],
            [
                'attribute_id' => 2,
                'variation_id' => 8,
                'value_id'     => 6,
            ],
            [
                'attribute_id' => 2,
                'variation_id' => 9,
                'value_id'     => 4,
            ],
            [
                'attribute_id' => 2,
                'variation_id' => 10,
                'value_id'     => 5,
            ],
            [
                'attribute_id' => 2,
                'variation_id' => 11,
                'value_id'     => 6,
            ],
        ]);
    }
}
