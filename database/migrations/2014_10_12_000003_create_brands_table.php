<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('brands')) {
            Schema::create('brands', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name', 255)->unique();
                $table->string('slug', 255)->unique();
                $table->string('logo', 255)->default('');
                $table->text('description')->nullable();
                $table->integer('owner')->unsigned();
                $table->foreign('owner')->references('id')->on('users')->onDelete('restrict')->onUpdate('cascade');
                $table->integer('manager')->unsigned();
                $table->foreign('manager')->references('id')->on('users')->onDelete('restrict')->onUpdate('cascade');
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
        Schema::dropIfExists('brands');
    }
}
