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
    //image filter by color and product
    public function filterImg($c_id, $p_id){
        return $this->where('product_id',$p_id)->where('color_id', $c_id) ;
    }
    
}
