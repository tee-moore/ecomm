<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AtributesTableSeeder extends Seeder
{
    protected static $table = 'attributes';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table(self::$table)->insert([
            ['name' => 'Color'],
            ['name' => 'Size'],
        ]);
    }
}
