<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->category){
            $products = Product::thiscategory(request()->category)->paginate(12)->appends('category', request()->category);
        }
        else if(request()->subcategory){
            $products = Product::thissubcategory(request()->subcategory)->paginate(12)->appends('sub_category', request()->subcategory);
        }
        else{
            $products = Product::randomProducts()->paginate(12);
        }

        return view('shop')->with([
            'products' => $products
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function filter(Request $request)
    {
        $request->validate([
            'min' => 'required',
            'max' => 'required'
        ]);
        if(request()->category){   
            $products=whereBetween('present_price', [ $request->input('min'), $request->input('max')])
                        ->paginate(12);
        }
        else if(request()->subcategory){
            $products=Product::whereBetween('present_price', [ $request->input('min'), $request->input('max')])
                        ->paginate(12);
        }
        else{
            $products=Product::whereBetween('present_price', [ $request->input('min'), $request->input('max')])
                                ->randomProducts()->paginate(12);
        }

        return view('shop.index')->with(['products'=> $products]);
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
