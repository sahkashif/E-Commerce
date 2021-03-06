<?php

namespace App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Item;
use Session;
use Auth;

class Cart
{
    public $numOfItems=0;
    public $totalPrice=0;
    public $shippingMethod;
    public $grandTotal = 0;
    public $discount = 0;
    public $items = null;

    public function _construct(){

    }

    public function numOfItems(){
        return $this->numOfItems;
    }

    public function setNumOfItems($num){
        $this->numOfItems=$num;
    }
    
    public function totalPrice(){
        $this->totalPrice=0;
        foreach($this->items as $item)
        {
            $this->totalPrice = $this->totalPrice + $item->subtotalPrice();
        }
        return $this->totalPrice;
    }

    public function setitems($items){
        $this->items=$items;
    }

    public function getitems(){
         return $this->items;
    }

    public function getitem($id){
       foreach($this->items as $item)
       {
           if($item->getId() == $id)
           {
               return true;
           }
       }
       return false;
   }

    public function update($id,$newQty){
       foreach($this->items as $item)
       {
           if($item->getId() == $id)
           {
               $item->setQty($newQty);
               $item->subtotalPrice();
               return true;
               
           }
       }
       return false;
    }

    public function add($newItem, $id)
    {
       
        $this->items[$this->numOfItems]=$newItem;
        $this->items[$this->numOfItems]->setId($id);
        $this->numOfItems++;
       

        return true;
    }

    
    
}
