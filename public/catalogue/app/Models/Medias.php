<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medias extends Model
{
    use HasFactory;

    protected $table= 'MEDIA_TABLE';

    protected $guarded= ['ID'];
    protected $hidden= [];
}
