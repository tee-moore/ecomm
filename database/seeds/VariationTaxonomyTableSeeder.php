<?php

use Illuminate\Database\Seeder;

class VariationTaxonomyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('taxonomy_variation')->insert([
            ['taxonomy_id' => 1, 'variation_id' => 1],
            ['taxonomy_id' => 2, 'variation_id' => 1],
            ['taxonomy_id' => 1, 'variation_id' => 2],
            ['taxonomy_id' => 2, 'variation_id' => 2],
            ['taxonomy_id' => 1, 'variation_id' => 3],
            ['taxonomy_id' => 2, 'variation_id' => 3],
            ['taxonomy_id' => 1, 'variation_id' => 4],
            ['taxonomy_id' => 2, 'variation_id' => 4],
            ['taxonomy_id' => 3, 'variation_id' => 5],
            ['taxonomy_id' => 4, 'variation_id' => 5],
            ['taxonomy_id' => 6, 'variation_id' => 5],
            ['taxonomy_id' => 3, 'variation_id' => 6],
            ['taxonomy_id' => 4, 'variation_id' => 6],
            ['taxonomy_id' => 6, 'variation_id' => 6],
            ['taxonomy_id' => 3, 'variation_id' => 7],
            ['taxonomy_id' => 4, 'variation_id' => 7],
            ['taxonomy_id' => 6, 'variation_id' => 7],
            ['taxonomy_id' => 3, 'variation_id' => 8],
            ['taxonomy_id' => 4, 'variation_id' => 8],
            ['taxonomy_id' => 6, 'variation_id' => 8],
            ['taxonomy_id' => 13, 'variation_id' => 5],
            ['taxonomy_id' => 13, 'variation_id' => 6],
            ['taxonomy_id' => 14, 'variation_id' => 7],
            ['taxonomy_id' => 14, 'variation_id' => 8],
        ]);
    }
}
