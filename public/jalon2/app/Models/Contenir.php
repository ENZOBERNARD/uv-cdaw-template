<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contenir extends Model
{
    use HasFactory;



    protected $table= 'CONTENIR';

    protected $guarded= ['ID_MEDIA','ID_PLAYLIST',];
    protected $hidden= [];
}
