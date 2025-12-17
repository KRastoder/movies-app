<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    public $timestaps = 'false';

    protected $fillable = [
        'name',
        'description',
        'cover_path',
        'release_date',
    ];
}
