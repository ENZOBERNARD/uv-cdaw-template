<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContenirTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CONTENIR', function (Blueprint $table) {
            $table->integer('ID_PLAYLIST')->unsigned();
            $table->integer('ID_MEDIA')->unsigned();
            $table->foreign('ID_MEDIA')->references('ID')->on('MEDIA_TABLE');
            $table->foreign('ID_PLAYLIST')->references('ID')->on('PLAYLIST');
            $table->primary(['ID_MEDIA','ID_PLAYLIST']);
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
        Schema::dropIfExists('PLAYLIST');
    }
}
