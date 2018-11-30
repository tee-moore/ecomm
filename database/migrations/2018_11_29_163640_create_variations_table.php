<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVariationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('variations')) {
            Schema::create('variations', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('product_id')->unsigned();
                $table->foreign('product_id')->references('id')->on('products')->onDelete('restrict')->onUpdate('cascade');
                $table->string('sku', 255)->default('');
                $table->string('image', 255)->default('');
                $table->decimal('price', 8, 2)->default(0);
                $table->decimal('discount_price', 8, 2)->default();
                $table->integer('quantity')->unsigned()->default(0);
                $table->boolean('disabled')->default(0);
                $table->boolean('deleted')->default(0);
                $table->timestamps();
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
        Schema::dropIfExists('variations');
    }
}
