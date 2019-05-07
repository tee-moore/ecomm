<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            ['name'      => 'shoes',
             'type'      => 0,
             'parent_id' => 0,
            ],
            ['name'      => 'sneakers',
             'type'      => 0,
             'parent_id' => 1,
            ],
            ['name'      => 'clothes',
             'type'      => 0,
             'parent_id' => 0,
            ],
            ['name'      => 'tops',
             'type'      => 0,
             'parent_id' => 3,
            ],
            ['name'      => 'bottoms',
             'type'      => 0,
             'parent_id' => 3,
            ],
            ['name'      => 't-shirts',
             'type'      => 0,
             'parent_id' => 4,
            ],
            ['name'      => 'shirts',
             'type'      => 0,
             'parent_id' => 4,
            ],
            ['name'      => 'sandals',
             'type'      => 0,
             'parent_id' => 1,
            ],
            ['name'      => 'polos',
             'type'      => 0,
             'parent_id' => 4,
            ],
            ['name'      => 'jeans',
             'type'      => 0,
             'parent_id' => 5,
            ],
            ['name'      => 'pants',
             'type'      => 0,
             'parent_id' => 5,
            ],
            ['name'      => 'shorts',
             'type'      => 0,
             'parent_id' => 5,
            ],
            ['name'      => 'blue',
             'type'      => 1,
             'parent_id' => 0,
            ],
            ['name'      => 'red',
             'type'      => 1,
             'parent_id' => 0,
            ],
            ['name'      => 'green',
             'type'      => 1,
             'parent_id' => 0,
            ],
        ]);
    }
}