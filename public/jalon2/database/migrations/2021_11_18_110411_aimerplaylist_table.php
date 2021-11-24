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
            $table->unsignedBigInteger('PSEUDO');
            $table->unsignedBigInteger('ID_PLAYLIST');
            $table->primary(['ID_PLAYLIST','PSEUDO']);
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
