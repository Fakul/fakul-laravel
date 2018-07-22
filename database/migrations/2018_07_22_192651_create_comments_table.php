<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;


class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->longText('comentario');
            $table->integer('resolution_id')->unsigned();
            //Omiti a coluna abaixo "comment_id" pois referencia a coluna "id" da mesma tabela
//            $table->integer('comment_id')->unsigned();
//            $table->timestamps();
            /*Declaracao das Chaves Estrangeiras*/
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('resolution_id')->references('id')->on('resolutions')->onDelete('cascade');
//            $table->foreign('comment_id')->references('id')->on('comments')->onDelete('cascade');
        });
        DB::statement("ALTER TABLE comments AUTO_INCREMENT = 2;");

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
