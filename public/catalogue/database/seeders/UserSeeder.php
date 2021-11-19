<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('USERS')->insert([
            ['PSEUDO'=> str::random(10),'EMAIL' => Str::random(10) , 'PHOTO' =>  Str::random(10) , 'PASSEWORD' =>  Str::random(10) ]
           ]);
    }
}
