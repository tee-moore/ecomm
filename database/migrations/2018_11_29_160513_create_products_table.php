<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('products')) {
            Schema::create('products', function (Blueprint $table) {
                    $table->increments('id');
                    $table->string('name', 255)->index();
                    $table->string('slug', 255)->unique();
                    $table->string('sku', 255)->default('');
                    $table->integer('brand_id')->unsigned();
                    $table->foreign('brand_id')->references('id')->on('brands')->onDelete('restrict')->onUpdate('cascade');
                    $table->integer('user_id')->unsigned();
                    $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict')->onUpdate('cascade');
                    $table->text('description')->nullable();
                    $table->text('gallery')->nullable();
                    $table->boolean('disabled')->default(0);
                    $table->boolean('deleted')->default(0);
                    $table->integer('product_type')->unsigned()->default(0);
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
        Schema::dropIfExists('products');
    }
}
