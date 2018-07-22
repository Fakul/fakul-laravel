<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;


class CreateResolutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resolutions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('exercicio', 8)->nullable();
            $table->mediumText('descricao')->nullable();
            $table->string('anexo', 255)->nullable();
            $table->integer('test_id')->unsigned()->nullable();
            $table->integer('user_id')->unsigned()->nullable();
            $table->dateTime('created');
            $table->string('fileType', 50)->nullable();
            $table->string('grupo', 50)->nullable();
            $table->string('numero', 50)->nullable();
            $table->string('alinea', 50)->nullable();
            $table->string('youtube_url', 255)->nullable();
            $table->string('modified', 50)->nullable();
//            $table->timestamps();
            /*Declaracao das Chaves Estrangeiras*/
            $table->foreign('test_id')->references('id')->on('test')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
        DB::statement("ALTER TABLE resolutions AUTO_INCREMENT = 10;");

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resolutions');
    }
}
