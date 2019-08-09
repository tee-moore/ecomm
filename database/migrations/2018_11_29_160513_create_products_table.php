<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    protected static $table = 'products';

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
                $table->string('name', 255)->index();
                $table->string('slug', 255)->unique();
                $table->string('sku', 255)->default('');
                $table->integer('brand_id')->unsigned();
                $table->foreign('brand_id')->references('id')->on('brands')->onDelete('restrict')->onUpdate('cascade');
                $table->string('gallery', 30)->default('');
                $table->text('description')->nullable();
                $table->tinyInteger('product_type')->unsigned()->default(0);
                $table->boolean('active')->default(1);
                $table->tinyInteger('status')->unsigned()->default(0);
                $table->softDeletes();
                $table->timestamps();
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
