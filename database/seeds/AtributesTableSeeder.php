<?php

use Illuminate\Database\Seeder;

class AtributesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('attributes')->insert([
            ['name' => 'Color'],
            ['name' => 'Size']
        ]);
    }
}
