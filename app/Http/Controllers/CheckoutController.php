<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ShippingMethod;
use App\PaymentMethod;
use App\Shipping;
use Auth;
use Session;

class CheckoutController extends Controller
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
     * Display a listing of the shipping methods.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(Session::has('shipping')){
            return redirect('/checkout/payment-details');
        }
        $paymentMethods = PaymentMethod::all();
        $cart = Session::get('cart');
        $cart->shippingMethod = $request->input('shippingMethod');
        $shippingMethod = ShippingMethod::find($request->input('shippingMethod'));
        $cart->grandTotal = $cart->totalPrice()+$shippingMethod->charge;
        $request->session()->put('cart',$cart);


        return view('checkout.index')->with([
            'cart' => $cart,
            'shippingMethod' => $shippingMethod,
            'paymentMethods' => $paymentMethods
        ]);
    }

    /**
     * Show the form for creating a new payment.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cart = Session::get('cart');
        $shipping = Session::get('shipping');

        return view('checkout.payment')->with([
            'cart' => $cart,
            'shipping' => $shipping
        ]);
    }

    /**
     * Store a billing details resource in shipping session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function shipping(Request $request)
    {
        
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'postal_code' => 'required|max:4|min:4',
            'phone' => 'required|max:11|min:11'
            
        ]);

        $shipping_id = Session::get('cart')->shippingMethod;
        $user_id = Auth::user()->id;
        $name = $request->input('name');
        $address = $request->input('address');
        $city = $request->input('city');
        $postal_code = $request->input('postal_code');
        $phone = $request->input('phone');
        $notes = $request->input('notes');
        
        $shipping = new Shipping($user_id, $name, $shipping_id, $address, $city, $postal_code, $phone);

        if($notes != null){
            $shipping->set_order_notes($notes);
        }
        $request->session()->put('shipping',$shipping);
        
        if(Session::has('shipping')){
            return redirect('/checkout/payment-details');
        };
        return redirect()->back()->with('error', 'something went wrong');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return redirect()->route('payment.via.cod','cod');
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
}
