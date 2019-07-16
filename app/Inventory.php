<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    //
    protected $table='disc_inventory';
    protected $fillable = ['movieID', 'dvdInventory', 'blurayInventory'];

    public function movie()
    {
        return $this->belongsTo('App\Movie','movieID');
    }
}
