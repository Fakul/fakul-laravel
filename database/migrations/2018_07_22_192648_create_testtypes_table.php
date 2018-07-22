<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;


class CreateTesttypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testtypes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('designacao', 20);
//            $table->timestamps();
        });
        DB::statement("ALTER TABLE testtypes AUTO_INCREMENT = 4;");

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('testtypes');
    }
}
