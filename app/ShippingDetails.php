<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShippingDetails extends Model
{
    public function shipping_method(){
        return $this->belongsTo('App\ShippingMethod');
    }
    public function order(){
        return $this->belongsTo('App\Order');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
}
