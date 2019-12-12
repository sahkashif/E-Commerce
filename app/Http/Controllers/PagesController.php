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
    public function services(){
        return view('pages.services');
    }

    public function courses(){
        return view('pages.courses');
    }

    public function studios(){
        return view('pages.studios');
    }

    public function aboutUs(){
        return view('pages.aboutUs');
    }
}
