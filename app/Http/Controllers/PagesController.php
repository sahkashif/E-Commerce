<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class PagesController extends Controller
{
    public function index(){
        $x=1;
        $featuredProducts=Product::where('featured',$x)->randomProducts()->get();
        $onDealProducts=Product::where('on_deals',$x)->randomProducts()->get();
        return view('index')->with([
            'featuredProducts' => $featuredProducts,
            'onDealProducts' => $onDealProducts
        ]);
    }
}
