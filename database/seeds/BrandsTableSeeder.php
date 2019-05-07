<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
            [
                'name' => 'Adidas',
                'slug' => Str::slug('Adidas'),
            ],
            [
                'name' => 'Collins',
                'slug' => Str::slug('Collins'),
            ],
            [
                'name' => 'Житомирские носки',
                'slug' => Str::slug('Житомирские носки'),
            ],
        ]);
    }
}
