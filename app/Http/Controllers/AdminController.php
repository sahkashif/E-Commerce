<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Category;
use App\Subcategory;
use App\Product;
use App\Color;
use App\Image;
use Auth;

class AdminController extends Controller
{
    /**
     * Display dashboard of admin.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::with(['shipping', 'payment_details'])->orderBy('created_at','desc')->paginate(12);
        $categories = Category::all();
        $subcategories = SubCategory::all();
        $products = Product::all();
        
        return view('admin.index')->with([
            'orders' => $orders,
            'categories' => $categories,
            'subcategories' => $subcategories,
            'products' => $products
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
}
