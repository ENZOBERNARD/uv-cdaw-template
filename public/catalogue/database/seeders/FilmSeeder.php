<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medias_table')->insert([
            ['Id'=> random_int(0,100),'Titre' => Str::random(10) , 'Description' =>  Str::random(10) , 'Date_de_sortie' =>  Str::random(10) ]
           ]);
    }
}
