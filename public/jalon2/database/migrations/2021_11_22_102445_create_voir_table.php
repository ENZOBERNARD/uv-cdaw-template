<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoirTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('VOIR', function (Blueprint $table) {
            $table->unsignedBigInteger('PSEUDO');
            $table->unsignedBigInteger('ID_MEDIA');
            $table->primary(['ID_MEDIA','PSEUDO']);
            $table->date('DATE');
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
