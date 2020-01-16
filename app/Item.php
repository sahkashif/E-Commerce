<?php

namespace App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;
use Session;
use Auth;

class Item 
{
    private $id = 0; 
    private $totalQty = 0;
    private $color_id = null; 
    public $item = null;
    private $product_price = 0;
    private $old_price = 0;
    private $subtotal = 0;

    public function __construct($id, $totalQty, $product_price, $old_price, $color_id, $item){
        $this->id=$id;
        $this->totalQty= $totalQty;
        $this->product_price = $product_price;
        $this->old_price = $old_price;
        $this->color_id = $color_id;
        $this->item = $item;
        $this->subtotal = $product_price * $totalQty;
       
    }
    
    public function setOld_price($old_price){
        $this->old_price = $old_price;
    }
    
    public function getOld_price(){
        return $this->old_price;
    }

    public function setItem($item){
        $this->item = $item;
    }
    
    public function getItem(){
        return $this->item;
    }

    public function setId($id){
        $this->id=$id;
    }

    public function getId(){
        return $this->id;
    }

    public function getColor(){
        return $this->color_id;
    }

    public function getPrice(){
        return $this->product_price;
    }
    public function subtotalPrice(){
        $this->subtotal = 0;
        $this->subtotal = $this->product_price * $this->totalQty;
        return $this->subtotal;
    }
    
    public function setQty($newQty){
        $this->totalQty=$newQty;
    }

    public function getQty(){
        return $this->totalQty;
    }

    

}
