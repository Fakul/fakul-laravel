<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;


class CreateChairsCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chairs_courses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('chair_id')->unsigned();
            $table->integer('course_id')->unsigned();
            $table->integer('teacher_id')->unsigned();
            $table->integer('semester_id')->unsigned();
            $table->integer('level');
//            $table->timestamps();
            /*Declaracao das Chaves Estrangeiras*/
            $table->foreign('chair_id')->references('id')->on('chairs')->onDelete('cascade');
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
            $table->foreign('teacher_id')->references('id')->on('teachers')->onDelete('cascade');
            $table->foreign('semester_id')->references('id')->on('semesters')->onDelete('cascade');
        });
        DB::statement("ALTER TABLE chairs_courses AUTO_INCREMENT = 154;");

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chairs_courses');
    }
}
