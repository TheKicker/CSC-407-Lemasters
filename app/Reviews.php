<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    //
    protected $fillable = [
        'userID', 'movieID', 'kioskID', 'review'
    ];

    public function user(){
        return $this->belongsTo('App\User', 'userID');
    }

    public function movie(){
        return $this->belongsTo('App\Movie', 'movieID');
    }
}
