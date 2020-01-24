<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manga extends Model
{
    protected $fillable = [

        'preview',
        'title',
        'autor',
        'publication',
        'rating',
        'votes',
        
    ];
}
