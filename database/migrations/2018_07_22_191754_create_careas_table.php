<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;


class CreateCareasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('careas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 255);
//            $table->timestamps();
        });
        DB::statement("ALTER TABLE careas AUTO_INCREMENT = 2;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('careas');
    }
}
