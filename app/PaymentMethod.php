<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    public function scopeActive($q){
        return $q->where('is_active',1)->get();
    }
    public function payment_details(){
        return $this->hasMany('App\PaymentMethod');
    }
}
