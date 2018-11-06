<?php

namespace App;

// use Illunminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    //
    //use SoftDeletes;
    protected $fillable = [
        'title', 'length','description', 'genereID', 'isDisc','isBlueRay','cover',
    ];
}
    // use SoftDeletes;
//    protected $table='movies';
//
//    protected $fillable = ['title', 'length', 'description', 'genreID', 'isDisc', 'isBluRay', 'cover',];
//    protected $dates = ['deleted_at'];
//    protected $guarded = [];
//
//    public function Movie()
//        return $this->belongsTo('App\Update');
//
//    public function genre()
//    {
//       return $this->belongsTo('App\Genre');
//    }
//    public function reviews()
//    {
//       return $this->hasMany('\App\Review');
//    }
//}
