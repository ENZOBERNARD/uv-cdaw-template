<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateavoirgenreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('AVOIR_GENRE', function (Blueprint $table) {
            $table->integer('ID_MEDIA')->unsigned();
            $table->foreign('ID_MEDIA')->references('ID')->on('MEDIA_TABLE');
            $table->integer('ID_GENRE')->unsigned();
            $table->foreign('ID_GENRE')->references('ID')->on('GENRE');
            $table->primary(['ID_MEDIA','ID_GENRE']);
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
