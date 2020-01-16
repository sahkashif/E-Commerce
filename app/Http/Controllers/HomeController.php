<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use Auth;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function orders(){
        $orders = Auth::user()->orders()->orderby('created_at','DESC')->paginate(6);
        return view('user.orderlist')->with([
            'orders' => $orders
        ]);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function order($id)
    {
        $order = Order::with('products')->find($id);
        
        return view('user.order')->with([
            'order' => $order,
        ]);
    }

    public function wishlist(){
        $wishlist = Auth::user()->products()->paginate(6);
        return view('user.wishlist')->with([
            'wishlist' => $wishlist
        ]);
    }
}
