<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class createRolesTable extends Migration
{
    protected static $table = 'roles';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable(self::$table)) {
            Schema::create(self::$table, function (Blueprint $table)
            {
                $table->bigIncrements('id');
                $table->string('name', 255)->unique();
            });
        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(self::$table);
    }
}
