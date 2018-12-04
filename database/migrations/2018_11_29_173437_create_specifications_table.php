<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpecificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('specifications')) {
            Schema::create('specifications', function (Blueprint $table) {
                $table->integer('variation_id')->unsigned();
                $table->foreign('variation_id')->references('id')->on('variations');
                $table->integer('attribute_id')->unsigned();
                $table->foreign('attribute_id')->references('id')->on('attributes');
                $table->integer('value_id')->unsigned();
                $table->foreign('value_id')->references('id')->on('attribute_values');
                $table->engine = 'InnoDB';
                $table->charset = 'utf8';
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
        Schema::dropIfExists('specifications');
    }
}
