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
            $table->unsignedBigInteger('ID_PLAYLIST');
            $table->unsignedBigInteger('ID_MEDIA');
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
