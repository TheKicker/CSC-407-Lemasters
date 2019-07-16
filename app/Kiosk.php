<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kiosk extends Model
{
    //    use SoftDeletes;
    protected $table='kiosks';
    protected $fillable = ['location', 'address'];

}
