<?php

namespace App;


class Shipping
{
    private $user_id = 0;
    private $name;
    private $shipping_method_id = 0;
    private $address;
    private $city;
    private $postal_code;
    private $phone_number;
    private $order_note = null;

    public function __construct($user_id, $name, $shipping_method_id, $address, $city, $postal_code, $phone_number) {
        $this->name= $name;
        $this->user_id=$user_id;
        $this->shipping_method_id= $shipping_method_id;
        $this->address= $address;
        $this->city = $city;
        $this->postal_code = $postal_code;
        $this->phone_number = $phone_number;
    }

    public function set_name($name){
        $this->name = $name;
    }
    public function set_method($shipping_method_id){
        $this->shipping_method_id = $shipping_method_id;
    }
    public function set_address($address){
        $this->address = $address;
    }
    public function set_city($city){
        $this->city = $city;
    }
    public function set_postal_code($postal_code){
        $this->postal_code = $postal_code;
    }
    public function set_phone_number($phone_number){
        $this->phone_number = $phone_number;
    }
    public function set_order_notes($notes){
        $this->order_note = $notes;
    }


   
    public function get_name(){
        return $this->name;
    }
    public function get_method(){
        return $this->shipping_method_id;
    }
    public function get_address(){
        return $this->address;
    }
    public function get_city(){
        return $this->city;
    }
    public function get_postal_code(){
        return $this->postal_code;
    }
    public function get_phone_number(){
        return $this->phone_number;
    }
    
    public function get_order_note(){
        return $this->order_note;
    }
    

}
