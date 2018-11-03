<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{

    // use SoftDeletes;
    protected $table='movies';

    protected $fillable = ['title', 'length', 'description', 'genreID', 'isDISC', 'isBLURAY'];
    protected $dates = ['deleted_at'];
    protected $guarded = [];
    public function genre()
    {
       return $this->belongsTo('App\Genre');
    }
    public function reviews()
    {
       return $this->hasMany('\App\Review');
    }

}
