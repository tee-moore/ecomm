<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpecificationsTable extends Migration
{
    protected static $table = 'specifications';

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
                $table->bigInteger('variation_id')->unsigned();
                $table->foreign('variation_id')->references('id')->on('variations');
                $table->bigInteger('attribute_id')->unsigned();
                $table->foreign('attribute_id')->references('id')->on('attributes');
                $table->bigInteger('value_id')->unsigned();
                $table->foreign('value_id')->references('id')->on('attribute_values');
                $table->engine    = 'InnoDB';
                $table->charset   = 'utf8';
                $table->collation = 'utf8_unicode_ci';
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
