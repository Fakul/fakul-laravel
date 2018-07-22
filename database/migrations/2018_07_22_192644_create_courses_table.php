<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;


class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 50);
            $table->integer('department_id')->unsigned();
            $table->integer('carea_id')->unsigned();
//            $table->timestamps();
            /*Declaracao das Chaves Estrangeiras*/
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
            $table->foreign('carea_id')->references('id')->on('careas')->onDelete('cascade');
        });
        DB::statement("ALTER TABLE courses AUTO_INCREMENT = 6;");

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
