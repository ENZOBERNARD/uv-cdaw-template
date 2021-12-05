<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MediasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MEDIA_TABLE', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('TITRE',100);
            $table->string('DESCRIPTION',3000);
            $table->date('DATE_DE_SORTIE');
            $table->integer('DUREE')->default(0);
            $table->string('ACTEURS',300);
            $table->string('REALISATEUR',100);
            $table->string('PAYS',50);
            $table->string('AFFICHE',300);
            $table->integer('NOTE')->default(0);
            $table->integer('NOMBRE_EPISODE')->default(0);
            $table->string('GENRE',300);
            $table->string('TYPE',20);
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
