<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;


class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 50);
            $table->integer('faculty_id')->unsigned();
            /*Declaracao das Chaves Estrangeiras*/
            $table->foreign('faculty_id')->references('id')->on('faculties')->onDelete('cascade');
//            $table->timestamps();
        });
        DB::statement("ALTER TABLE departments AUTO_INCREMENT = 2;");

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departments');
    }
}
