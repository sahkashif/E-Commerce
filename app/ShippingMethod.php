<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShippingMethod extends Model
{
    public function scopeActive($q){
        return $q->where('is_active',1)->get();
    }
}
