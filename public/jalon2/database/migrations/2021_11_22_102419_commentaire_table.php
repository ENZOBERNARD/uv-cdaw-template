<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CommentaireTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('COMMENTAIRE', function (Blueprint $table) {
            $table->integer('ID_MEDIA')->unsigned();
            $table->foreign('ID_MEDIA')->references('ID')->on('MEDIA_TABLE');
            $table->foreignId('ID_USERS')->constrained('users');
            $table->primary(['ID_MEDIA','ID_USERS']);
            $table->string('CONTENU',650);
            $table->string('TITRE',60);
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
