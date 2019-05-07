<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    protected static $table = 'roles';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table(self::$table)->insert([
            ['name' => 'admin'],
            ['name' => 'owner'],
            ['name' => 'manager'],
            ['name' => 'user'],
            ['name' => 'guest'],
        ]);
    }
}
