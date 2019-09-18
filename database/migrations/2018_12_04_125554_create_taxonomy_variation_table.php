<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaxonomyVariationTable extends Migration
{
    protected static $table = 'taxonomy_variation';

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
                $table->foreign('variation_id')->references('id')->on('variations')->onDelete('restrict')->onUpdate('cascade');
                $table->bigInteger('taxonomy_id')->unsigned();
                $table->foreign('taxonomy_id')->references('id')->on('taxonomies')->onDelete('restrict')->onUpdate('cascade');
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
