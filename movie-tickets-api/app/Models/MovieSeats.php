<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MovieSeats extends Model
{

    public $timestaps = 'false';
    protected $fillable = [
        'movie_location_id',
        'seat_id',
        'status',
    ];
}
