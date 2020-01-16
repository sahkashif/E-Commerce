<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class PaymentDetails extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function order(){
        return $this->belongsTo('App\Order');
    }
    public function payment_method(){
        return $this->belongsTo('App\PaymentMethod');
    }
    public function generate_transection_id() { 
        do {
             
            $key = 'INHOUSE_' . strtoupper(Str::random(10)); 
        } while (static::where('transection_id', $key)->exists()); 
        return $key;
     }
}
