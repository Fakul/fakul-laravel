<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('role', 20)->nullable();
            $table->string('password', 100);
            $table->string('username', 30);
            $table->integer('role_id')->unsigned();
            $table->string('nome', 255);
            $table->integer('carea_id')->unsigned();
            $table->integer('level')->nullable();
            $table->string('path', 255);
            $table->dateTime('created')->nullable();
            $table->dateTime('modified')->nullable();
            $table->rememberToken();
//            $table->timestamps();
        });
        DB::statement("ALTER TABLE users AUTO_INCREMENT = 387;");

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
