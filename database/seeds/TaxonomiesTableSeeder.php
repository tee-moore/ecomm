<?php

use Illuminate\Database\Seeder;

class TaxonomiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('taxonomies')->insert([
            ['name' => 'shoes', 'type' => 'cat', 'parent_id' => 0],
            ['name' => 'sneakers', 'type' => 'cat', 'parent_id' => 1],
            ['name' => 'clothes', 'type' => 'cat', 'parent_id' => 0],
            ['name' => 'tops', 'type' => 'cat', 'parent_id' => 3],
            ['name' => 'bottoms', 'type' => 'cat', 'parent_id' => 3],
            ['name' => 't-shirts', 'type' => 'cat', 'parent_id' => 4],
            ['name' => 'shirts', 'type' => 'cat', 'parent_id' => 4],
            ['name' => 'sandals', 'type' => 'cat', 'parent_id' => 1],
            ['name' => 'polos', 'type' => 'cat', 'parent_id' => 4],
            ['name' => 'jeans', 'type' => 'cat', 'parent_id' => 5],
            ['name' => 'pants', 'type' => 'cat', 'parent_id' => 5],
            ['name' => 'shorts', 'type' => 'cat', 'parent_id' => 5],
            ['name' => 'blue', 'type' => 'tag', 'parent_id' => 0],
            ['name' => 'red', 'type' => 'tag', 'parent_id' => 0],
            ['name' => 'green', 'type' => 'tag', 'parent_id' => 0],
        ]);
    }
}