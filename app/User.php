<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //wishlist relation
    public function products(){
        return $this->belongsToMany('App\Product','wish_lists','user_id','product_id');
    }

    //review relation
    public function reviews(){
        return $this->hasMany('App\Review');
    }

    public function shipping_details(){
        return $this->hasMany('App\ShippingDetails');
    }
    public function payment_details(){
        return $this->hasMany('App\PaymentDetails');
    }
    public function orders(){
        return $this->hasMany('App\Order');
    }
    public function roles(){
        return $this->belongsToMany('App\Role');
    }
}
