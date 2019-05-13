<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttachmentsTable extends Migration
{
    protected static $table = 'attachments';

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
                $table->integer('media_id')->unsigned();
                $table->foreign('media_id')->references('id')->on('media')->onDelete('restrict')->onUpdate('cascade');
                $table->integer('attached_to_id')->unsigned();
                $table->string('attached_to_type');
                $table->engine    = 'InnoDB';
                $table->charset   = 'utf8';
                $table->collation = 'utf8_unicode_ci';
                // TODO think about index for morph relation (parent_id and parent_type)
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
