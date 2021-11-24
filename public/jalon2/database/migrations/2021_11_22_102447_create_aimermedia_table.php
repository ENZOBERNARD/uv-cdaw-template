<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAimerMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('AIMER_MEDIA', function (Blueprint $table) {
            $table->integer('ID_MEDIA')->unsigned();
            $table->foreign('ID_MEDIA')->references('ID')->on('MEDIA_TABLE');
            $table->foreignId('ID_USERS')->constrained('users');
            $table->primary(['ID_MEDIA','ID_USERS']);
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
