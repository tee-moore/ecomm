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
            ['name' => 'Adidas', 'slug' => 'adidas', 'owner' => 2, 'manager' => 3],
            ['name' => 'Collins', 'slug' => 'collins', 'owner' => 4, 'manager' => 5],
            ['name' => 'Житомирские носки', 'slug' => 'zhytomyrskye_nosky', 'owner' => 6, 'manager' => 7],
        ]);
    }
}
