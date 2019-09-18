<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttributeValuesTable extends Migration
{
    protected static $table = 'attribute_values';

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
                $table->bigInteger('attribute_id')->unsigned();
                $table->foreign('attribute_id')->references('id')->on('attributes')->onDelete('restrict')->onUpdate('cascade');
                $table->string('value', 255);
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
