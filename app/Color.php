<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    //product relationship
    public function product(){
        return $this->belongsTo('App\Product');
    }
    //color relationship
    public function imgs(){
        return $this->hasMany('App\Color');
    }
   
}
