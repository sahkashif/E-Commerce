<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Color;
use App\Category;
use App\SubCategory;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = new Product; 
        
       
        if( request()->has('lowPrice')){
            $products = $products->where('present_price', '>=', request()->lowPrice);
        }

        if( request()->has('highPrice')){
            $products = $products->where('present_price', '<=', request()->highPrice);
        }

        $products = $products->randomProducts()->paginate(12)->appends(['present_price'=> request()->highPrice,
                                                                        'present_price'=> request()->lowPrice]);

        return view('shop')->with([
            'products' => $products
        ]);
    }

    /**
     * Display a listing of the categorized resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function category($id)
    {
        $products = new Product;
        $products=$products->thisCategory($id);

        if( request()->has('lowPrice')){
            $products = $products->where('present_price', '>=', request()->lowPrice);
        }

        if( request()->has('highPrice')){
            $products = $products->where('present_price', '<=', request()->highPrice);
        }

        $products = $products->randomProducts()->paginate(12)->appends(['present_price'=> request()->highPrice,
                                                                        'present_price'=> request()->lowPrice]);

        
        
        return view('shop')->with([
            'products' => $products
        ]);
    }

    /**
     * Display a listing of the sub-categorized resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function subcategory($id)
    {
        $products = new Product;
        $products=$products->thissubcategory($id);

        if( request()->has('lowPrice')){
            $products = $products->where('present_price', '>=', request()->lowPrice);
        }

        if( request()->has('highPrice')){
            $products = $products->where('present_price', '<=', request()->highPrice);
        }

        $products = $products->randomProducts()->paginate(12)->appends(['present_price'=> request()->highPrice,
                                                                        'present_price'=> request()->lowPrice]);
        return view('shop')->with([
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
        $product=Product::find($id);
        if(request()->color){
            $imgs=Product::find($id)->colors()->filteredColor(request()->color)->imgs()->get();
        }
        else{
            $imgs=Product::find($id)->colors()->defaultColor()->first()->imgs()->get(); 
        }

        $subcategory_id = $product->sub_category_id;
        $category_id = $product->category_id;
        
        $relatedProducts = Product::where('sub_category_id',  $subcategory_id)->randomProducts()->get();  
        $upsellProducts = Product::where('category_id',$category_id)->where('id','!=', $id)->saleProducts()->get();
         
        return view('product')->with(['product' => $product, 
                                    'imgs'=> $imgs,
                                    'relatedProducts' => $relatedProducts,
                                    'upsellProducts' => $upsellProducts]);
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
