<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
    
        Schema::create('USERS', function (Blueprint $table) {
            $table->string('PSEUDO', 50)->primary();
            $table->string('EMAIL', 50);
            $table->string('PHOTO', 300);
            $table->string('PASSEWORD', 30);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    
}