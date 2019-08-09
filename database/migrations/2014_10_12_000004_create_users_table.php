<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    protected static $table = 'users';

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
                $table->string('name', 255);
                $table->string('email', 255)->unique();
                $table->timestamp('email_verified_at')->nullable();
                $table->string('password', 255);
                $table->integer('role_id')->unsigned()->default(0);
                $table->foreign('role_id')->references('id')->on('roles')->onDelete('restrict')->onUpdate('cascade');
                $table->integer('brand_id')->unsigned()->default(0);
                $table->foreign('brand_id')->references('id')->on('brands')->onDelete('restrict')->onUpdate('cascade');
                $table->rememberToken();
                $table->timestamps();
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
