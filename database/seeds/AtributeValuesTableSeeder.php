<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AtributValuesTableSeeder extends Seeder
{
    protected static $table = 'attribute_values';

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
                'value'        => 'Red',
            ],
            [
                'attribute_id' => 1,
                'value'        => 'Blue',
            ],
            [
                'attribute_id' => 1,
                'value'        => 'Green',
            ],
            [
                'attribute_id' => 2,
                'value'        => 'Small',
            ],
            [
                'attribute_id' => 2,
                'value'        => 'Medium',
            ],
            [
                'attribute_id' => 2,
                'value'        => 'Large',
            ],
        ]);
    }
}
