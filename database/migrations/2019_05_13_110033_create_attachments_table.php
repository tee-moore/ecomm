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
                $table->bigInteger('media_id')->unsigned();
                $table->bigInteger('attached_to_id')->unsigned();
                $table->string('attached_to_type');
                $table->string('options')->default('');
                $table->boolean('main')->default(0);
                $table->boolean('hover')->default(0);
                $table->tinyInteger('order');
                $table->engine    = 'InnoDB';
                $table->charset   = 'utf8';
                $table->collation = 'utf8_unicode_ci';
                // TODO think about index for morph relation (parent_id and parent_type)
                // TODO: options field usage?
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
