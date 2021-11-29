<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AimerMedia extends Model
{
    use HasFactory;



    protected $table= 'AIMER_MEDIA';

    protected $guarded= ['ID_MEDIA','ID_USERS',];
    protected $hidden= [];
}
