<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    //
    protected $fillable = [
        'title', 'length','description', 'genreID', 'isDisc','isBlueRay','coverPhoto',
    ];
}
