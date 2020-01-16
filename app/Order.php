<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Order extends Model
{
    public function products(){
       return $this->belongsToMany('App\Color','buskets')
                    ->withPivot('quantity')
                    ->withTimestamps();
    }
    
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function shipping(){
        return $this->hasOne('App\ShippingDetails');
    }
    public function payment_details(){
        return $this->hasOne('App\PaymentDetails');
    }
    public function generateOrderSlug() { 
        do { 
            $key = 'ORDER_' . Str::random(8); 
        } while (static::where('slug', $key)->exists()); 
        return $key;
     }
}
