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
     public function category(){
        return $this->belongsTo('App\Category');
    }

    //subcategory relationship
    public function subcategory(){
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

    //return query based random products
    public function scopeRandomProducts($query)
    {
        return $query->where('active', 1)->inRandomOrder();
    }

    

    //returns rating of product
    public function rating(){
        $totalRating = $this->reviews()->sum('rating')*20;
        $totalNumberOfReview = $this->reviews()->count();

        if($totalNumberOfReview == 0)
        {
            $rating =0;
            return $rating;
        }

        $rating = $totalRating/$totalNumberOfReview;
        return $rating;
    }

    //checks if the product is on sale
    public function is_sale(){
        if($this->present_price < $this->price){
            return 1;
        }
        return 0;
    }

    public function scopeThiscategory($query, $category){
        return $query->where('category_id', $category);
    }


    public function scopeThissubcategory($query, $subcategory){
        return $query->where('sub_category_id', $subcategory);
    }
    
}
