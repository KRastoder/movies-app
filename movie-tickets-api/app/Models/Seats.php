<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seats extends Model
{

    // //            $table->foreignId('theater_id')->constrained()->cascadeOnDelete();
    //         $table->unsignedInteger('row_number');
    //         $table->unsignedInteger('seat_number');
    //         $table->unsignedInteger('type');

    public $timestaps = 'false';

    protected $fillable = [
        'theater_id',
        'row_number',
        'seat_number',
        'type'
    ];
}
