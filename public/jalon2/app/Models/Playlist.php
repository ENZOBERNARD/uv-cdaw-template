<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    use HasFactory;

    
    protected $table= 'PLAYLIST';

    protected $guarded= ['ID'];
    protected $hidden= [];
}
