<?php

use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            ['name' => 'Adidas', 'slug' => 'adidas'],
            ['name' => 'Collins', 'slug' => 'collins'],
            ['name' => 'Житомирские носки', 'slug' => 'zhytomyrskye_nosky'],
        ]);
    }
}
