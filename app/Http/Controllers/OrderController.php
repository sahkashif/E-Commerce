<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Product;
use App\Color;
use PDF;

class OrderController extends Controller
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
        $orders = Order::with(['shipping','payment_details'])->orderBy('created_at', 'desc')->paginate(12);
        
        return view('user.orderlist')->with([
            'orders' => $orders,
        ]);
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
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::with('products')->find($id);
        
        return view('user.order')->with([
            'order' => $order,
        ]);
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
        
        $order = Order::find($id);

        if($request->has('order_status')){
            if($request->input('order_status') == 'processed'){
                if($order->shipping->status == "delivered" && $order->payment_details->status == 1 ){
                    $order->order_status = $request->input('order_status');
                }
                else{
                    return redirect()->back()->with('error', 'Order is not deliverd or payment is due!');
                }
            }else{
                $order->order_status = $request->input('order_status');
            }
           
        }
        if($request->has('shipping_status')){
            $order->shipping()->update(['status' => $request->input('shipping_status')]);
        }
        if($request->has('payment_status')){
            $order->payment_details()->update(['status' => $request->input('payment_status')]);
        }
        $order->save();
        return redirect()->back()->with('success','updated!');
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

    public function print($id){
        $order = Order::with(['user','products.product','products.imgs','shipping.shipping_method', 'payment_details.payment_method'])->find($id)->toArray();
        //$shipping = $order->shipping()->get()->toArray();
        //dd($order);
        return view('pdf.invoice')->with(['order' => $order]);
        //$pdf = PDF::loadView('pdf.invoice', ['order' => $order]);
        //return $pdf->download('invoice.pdf');
    }
}
