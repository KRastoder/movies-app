<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Theaters extends Model
{
    public $timestaps = 'false';
    protected $fillable = [
        'name',
        'city',
    ];
    //
}
