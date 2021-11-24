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
            $table->unsignedBigInteger('NOM');
            $table->unsignedBigInteger('ID_MEDIA');
            $table->primary(['ID_MEDIA','NOM']);
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
