<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    //product relationship
    public function product(){
        return $this->belongsTo('App\Product');
    }
    //image relationship
    public function imgs(){
        return $this->hasMany('App\Image');
    }
    //default color
    public function scopeDefaultColor($query)
    {
        return $query->where('default_color', 1);
    }

    //filtered color
    public function scopeFilteredColor($query, $id)
    {
        return $query->find($id);
    }
   
}
