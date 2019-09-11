<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     //image relationship
     public function imgs(){
        return $this->hasMany('App\Image');
    }
     //color relationship
     public function colors(){
        return $this->hasMany('App\Color');
    }

     //category relationship
     public function categories(){
        return $this->belongsTo('App\Category');
    }

    //subcategory relationship
    public function sub_categories(){
            return $this->belongsTo('App\SubCategory');
    }

    //review relatioship
    public function reviews(){
        return $this->hasMany('App\Review');
    }

    //wish list relationship
    public function users(){
        return $this->belongsToMany('App\User');
    }

}
