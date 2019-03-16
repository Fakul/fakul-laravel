<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseRelatedTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fields', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
        });

        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('field_id')->unsigned();
            $table->foreign('field_id')->references('id')->on('fields');
            $table->timestamps();
        });

        Schema::create('chairs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')  ;
        });

        Schema::create('chair_courses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('chair_id')->unsigned();
            $table->foreign('chair_id')->references('id')->on('chairs');
            $table->integer('course_id')->unsigned();
            $table->foreign('course_id')->references('id')->on('courses');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
        Schema::dropIfExists('fields');
        Schema::dropIfExists('chairs');
        Schema::dropIfExists('chair_courses');
    }
}
