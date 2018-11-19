<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    //
    protected $fillable = [
        'userID', 'movieID', 'rentalDate', 'returnDate',
    ];
}
