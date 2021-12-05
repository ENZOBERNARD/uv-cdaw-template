<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlaylistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PLAYLIST', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('TITRE',50)->nullable()->index();
            $table->string('VIGNETTE',150);
            $table->string('DESCRPTION',1000)->nullable();
            $table->boolean('OPTION')->nullable();
            $table->string('PSEUDO');
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
