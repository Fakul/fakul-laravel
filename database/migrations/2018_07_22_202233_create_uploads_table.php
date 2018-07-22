<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateUploadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uploads', function (Blueprint $table) {
            $table->increments('id');
            //Vinham como inteiros os name e type mas eu acho que devem ser strings
//            $table->integer('name');
//            $table->integer('type');
            $table->integer('size');
            $table->string('name', 255);
            $table->string('type', 255);
            $table->dateTime('created');
            $table->dateTime('modified');
//            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('uploads');
    }
}
