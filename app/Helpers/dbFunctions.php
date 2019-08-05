<?php

use Illuminate\Support\Facades\DB;

if (!function_exists('truncate')) {
    function truncate($tableName = null)
    {
        $database = env('DB_DATABASE', 'ecomm');

        if ($tableName) {
            $tables = DB::select("SELECT * FROM information_schema.tables WHERE table_name = '$tableName'");
        } else {
            $tables = DB::select("SELECT * FROM information_schema.tables WHERE table_schema = '$database'");
        }

        if ($tables) {
            DB::statement("SET foreign_key_checks=0");
            foreach ($tables as $table) {
                $name = $table->TABLE_NAME;
                if ($name == 'migrations') {
                    continue;
                }
                DB::table($name)->truncate();
            }
            DB::statement("SET foreign_key_checks=1");

            return true;
        } else {
            echo "truncate: Tables does not exist";
        }

        return false;
    }
}