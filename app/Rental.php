<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    //
    protected $fillable = [
        'userID', 'movieID', 'kioskID', 'format', 'rentalDate', 'returnDate',
    ];

    public function user(){
        return $this->belongsTo('App\User', 'userID');
    }

    public function movie(){
        return $this->belongsTo('App\Movie', 'movieID');
    }

    public function kiosk(){
        return $this->belongsTo('App\Kiosk', 'kioskID');
    }
}
