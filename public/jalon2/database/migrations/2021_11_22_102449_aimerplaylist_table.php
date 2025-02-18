<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AimerPlaylistTable extends Migration
{


    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('AIMER_PLAYLIST', function (Blueprint $table) {
            $table->integer('ID_PLAYLIST')->unsigned();
            $table->foreign('ID_PLAYLIST')->references('ID')->on('PLAYLIST');
            $table->foreignId('ID_USERS')->constrained('users');
            $table->primary(['ID_PLAYLIST','ID_USERS']);
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
        //
        Schema::dropIfExists('medias_table');
    }
}
