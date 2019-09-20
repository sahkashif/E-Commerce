<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //product relation
    public function product(){
        return $this->belongsTo('App\Product');
    }
    //product relation
    public function color(){
        return $this->belongsTo('App\Color');
    }
}
