<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voir extends Model
{
    use HasFactory;


    protected $table= 'VOIR';

    protected $guarded= ['ID_MEDIA','ID_USERS',];
    protected $hidden= [];
}