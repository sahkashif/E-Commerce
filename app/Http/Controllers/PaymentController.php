<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;
use App\Product;
use App\Color;
use App\Order;
use App\PaymentDetails;
use App\ShippingDetails;
use App\ShippingMethod;

use Auth;

class PaymentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


     /**
     * Accepts payment for Cash On Delivery.
     *
     * @return \Illuminate\Http\Response
     */
    public function cod(Request $request){
        
        $cart = Session::get('cart');
        $shippingDetails = Session::get('shipping');
        //$faker = Faker\Factory::create();

        $order = new Order;
        $slug = $order->generateOrderSlug();
        $order->slug = $slug;
        $order->user_id = Auth::user()->id;
        $order->num_of_items = $cart->numOfItems;
        $order->sub_total = $cart->grandTotal;
        //dd($cart->grandTotal);
        $order->discount = $cart->discount;
        $order->total = $cart->grandTotal;
        $order->save();
        foreach($cart->getitems() as $item){
            $order->products()->attach($item->getColor(), ['quantity' => $item->getQty()]);
        }
        //$request->session()->forget('cart');
        //dd($cart);
        $shippingMethod = ShippingMethod::find($shippingDetails->get_method());
        $shipping = new ShippingDetails;
        $shipping->user()->associate(Auth::user());
        $shipping->receiver_name = $shippingDetails->get_name();
        $shipping->receiver_phone_number = $shippingDetails->get_phone_number();
        $shipping->order()->associate($order);
        $shipping->shipping_method()->associate($shippingMethod);
        $shipping->address = $shippingDetails->get_address();
        $shipping->city = $shippingDetails->get_city();
        $shipping->postal_code = $shippingDetails->get_postal_code();
        if($shippingDetails->get_order_note() != null){
            $shipping->notes = $shippingDetails->get_order_note();
        }
        $shipping->save();
        Session::forget('cart');
        Session::forget('shipping');
        //$paymentMethod = PaymentMethod::find(1);
        
        $payment =  new PaymentDetails;
        $payment->transection_id = $payment->generate_transection_id();
        $payment->user()->associate(Auth::user());
        $payment->order()->associate($order);
        $payment->payment_method_id = 1;
        $payment->payable_amount = $order->total;

        $payment->save();

        return redirect('/home')->with('success', 'successfull');
        
        
    }
}
