<?php

use Illuminate\Database\Seeder;

class AtributeValuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('attribute_values')->insert([
            ['attribute_id' => 1, 'value' => 'Red'],
            ['attribute_id' => 1, 'value' => 'Blue'],
            ['attribute_id' => 1, 'value' => 'Green'],
            ['attribute_id' => 2, 'value' => 'Small'],
            ['attribute_id' => 2, 'value' => 'Medium'],
            ['attribute_id' => 2, 'value' => 'Large'],
        ]);
    }
}
