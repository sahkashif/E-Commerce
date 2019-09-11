<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class PagesController extends Controller
{
    public function index(){
        $featuredProducts=Product::where('featured',1)->all();
        $onDealProducts=Product::where('on_deals',1)->all();
        return view('index')->with([
            'featuredProducts' => $featuredProducts,
            'onDealProducts' => $onDealProducts
        ]);
    }
}
