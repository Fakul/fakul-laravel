<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;


class CreateTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('enunciado', 100);
            $table->integer('ano');
            $table->integer('shift_id')->unsigned();
            $table->integer('testtype_id')->unsigned();
            $table->string('path', 255)->nullable();
            $table->string('professores', 500)->nullable();
            $table->string('escola', 500)->nullable();
            // $table->string('guiao', 500)->unsigned()->nullable();
            $table->string('guiao', 500)->nullable();
            $table->string('chair_id', 500)->unsigned()->nullable();
            $table->string('course_id', 500)->unsigned()->nullable();
//            $table->timestamps();
            /*Declaracao das Chaves Estrangeiras*/
            $table->foreign('shift_id')->references('id')->on('shifts')->onDelete('cascade');
            $table->foreign('testtype_id')->references('id')->on('testtypes')->onDelete('cascade');
            $table->foreign('chair_id')->references('id')->on('chairs')->onDelete('cascade');
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
        });
        DB::statement("ALTER TABLE tests AUTO_INCREMENT = 206;");

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tests');
    }
}
