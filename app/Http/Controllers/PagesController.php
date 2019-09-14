<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class PagesController extends Controller
{
    public function index(){
        $x=1;

        $featuredProducts=Product::where('featured',$x)->randomProducts()->get();
        $onDealProducts=Product::where('on_deals',$x)->randomProducts()->get();

        $featuredCategories=Category::where('featured', $x)->randomCategories()->get();
        $hotCategories=Category::where('hot', $x)->randomCategories()->get();

        return view('index')->with([
            'featuredProducts' => $featuredProducts,
            'onDealProducts' => $onDealProducts,
            'featuredCategories' => $featuredCategories,
            'hotCategories' => $hotCategories
        ]);
    }
}
