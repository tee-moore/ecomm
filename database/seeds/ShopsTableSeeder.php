<?php

use Illuminate\Database\Seeder;

class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert([
            ['name' => 'Adidas', 'slug' => 'adidas'],
            ['name' => 'Collins', 'slug' => 'collins'],
            ['name' => 'Житомирские носки', 'slug' => 'zhytomyrskye_nosky'],
        ]);
    }
}
