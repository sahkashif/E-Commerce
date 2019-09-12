<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
     //relationship with products
     public function products(){

        return $this->hasMany('App\Product');
    }

    //relationship with subcategory
    public function subcategories(){

        return $this->hasMany('App\SubCategory');
    }

     //return query based random Categories
     public function scopeRandomCategories($query)
     {
         return $query->where('active', 1)->inRandomOrder();
     }
}
