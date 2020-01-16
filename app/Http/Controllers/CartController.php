<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Product;
use App\Item;
use App\Cart;
use App\Color;
use App\Image;
use App\ShippingMethod;
use Session;
use Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //Session::forget('cart');
        $shipping_methods = ShippingMethod::active();
        $cart= new Cart;
        
        if(Session::has('cart'))
        {
            $cart=(Session::get('cart'));
            $items=$cart->getitems();
            $products=$items;
            $numOfItems=$cart->numOfItems();
            $total=$cart->totalPrice();
            
            //dd($imgs);
            //$img = Image::where('product_id', )
            //dd($cart);
            return view('cart')->with([
                'products' => $products,
                'numOfItems' => $numOfItems,
                'total' => $total,
                'shipping_methods' => $shipping_methods
                ]);
        }
        return redirect()->back()->with('error', 'fuck man!! get up!');
        
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        
        $product = Product::find($id)->toArray();
        //$stock= Product::find($id)->get('stock')
        $id=Product::find($id,['id']);
        $color_id=Color::whereIn('product_id',$id)->filteredColor($request->color_id);
        
        if($request->input('quantity'))
        {
            $quantity=$request->input('quantity');
        }
        else{
            $quantity=1;
        }
        $price=$product['present_price'];
        $old_price = $product['price'];
        //dd($price);
        $newitem=new Item($id, $quantity, $price, $old_price, $color_id, $product);
        //dd($newitem->subtotalPrice());
        $cart=new Cart;
        $oldCart=Session::has('cart') ? Session::get('cart') : $cart;
        $cart=$oldCart;
        
        $items=$cart->getitems();
        for($i = 0; $i < $cart->numOfItems(); $i++)
        {
            
            if (array_key_exists($i, $items)) {
                if($items[$i]->getId()==$newitem->getId()){
                    return redirect()->back()->with('error', 'exists');
                }
            }else{
                continue;
            }
        }
       
        if($product['stock'] > $quantity){
            $cart->add($newitem,$id);   
            $request->session()->put('cart',$cart);
            return redirect()->back()->with('success', 'Added to Cart');

        }
        else{
            return redirect()->back()->with('error', 'limit exceed!!');
        }
        
        
    }

    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    
        $product=Product::find($id)->toArray();
        $id=Product::find($id,['id']);
        $quantity = $request->input('quantity');
        //dd($quantity);
        $cart=new Cart;
        $oldCart=Session::has('cart') ? Session::get('cart') : $cart;
        $cart=$oldCart;
        $cart->update($id, $quantity);
        
        $request->session()->put('cart',$cart);
        //dd($cart);
        return redirect()->back()->with('success', 'Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        //dd("hello");
        $cart=new Cart;
        $oldCart=Session::has('cart') ? Session::get('cart') : $cart;
        $cart=$oldCart;
        $product=Product::find($id)->toArray();
        $price=$product['present_price'];
        $items=$cart->getitems();
        
       
        for($i = 0; $i < $cart->numOfItems(); $i++)
        {
            
           
            if (array_key_exists($i, $items)) {
                if($items[$i]->getItem()==$product){
                    
                    array_splice($items, $i, 1);
                    $cart->numOfItems--;
                    break;
                }
            }else{
                //dd("hellow");
                continue;
            }
            
        }

        if($cart->numOfItems==0){
            Session::forget('cart');
            if(Session::has('shipping')){
                Session::forget('shipping');
            }
            return redirect('/shop')->with('success', 'Product is been removed');
        }else{
            $cart->setitems($items);
            $request->session()->put('cart',$cart);
            return redirect()->back()->with('success', 'Product is been removed');
        }

    }

   
    public function clearCart(Request $request){
        Session::forget('cart');
        return redirect()->back()->with('success', 'Cart cleared');
    }

}
