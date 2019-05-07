<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediaTable extends Migration
{
    protected static $table = 'media';

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
                $table->increments('id');
                $table->string('title', 255);
                $table->string('alt', 255)->default('');
                $table->string('url', 255);
                $table->text('description')->default('');
                $table->tinyInteger('type')->unsigned();
                $table->integer('parent_id')->unsigned();
                $table->tinyInteger('parent_type')->unsigned();
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
