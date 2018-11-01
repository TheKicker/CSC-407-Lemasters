<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    //
    function get(){
        $movies = $this->connection->prepare("SELECT *, movies from movies");

    //use SoftDeletes;
    //protected $table='movies';

    //protected $fillable = ['title', 'length', 'description', 'genreID', 'isDVD', 'isBluRay'];
    //protected $dates = ['deleted_at'];
    //protected $guarded = [];
    //public function genre()
    //{
    //    return $this->belongsTo('App\Genre');
    //}
    //public function reviews()
    //{
    //    return $this->hasMany('\App\Review');
    //}
}
}
