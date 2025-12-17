<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MoviesLocation extends Model
{
    public $timestaps = 'false';

    protected $fillable = [
        'movie_id',
        'theater_id'
    ];
}
