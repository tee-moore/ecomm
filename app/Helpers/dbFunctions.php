<?php

use Illuminate\Support\Facades\DB;

if (!function_exists('truncateAllTables')) {
    function truncateAllTables()
    {
        DB::statement("SET foreign_key_checks=0");
        $databaseName = env('DB_DATABASE', 'ecomm');

        $tables = DB::select("SELECT * FROM information_schema.tables WHERE table_schema = '$databaseName'");
        foreach ($tables as $table) {
            $name = $table->TABLE_NAME;
            if ($name == 'migrations') {
                continue;
            }
            DB::table($name)->truncate();
        }
        DB::statement("SET foreign_key_checks=1");
    }
}