<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Product;
use App\User;
use Auth;

class WishListController extends Controller
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
        $products=User::find(Auth::user()->id)->products()->paginate(5);
        return view('user.wishlist')->with('wishlist', $products);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {
        $now = Carbon::now()->toDateTimeString();
        $user_id=Auth::user()->id;

        $products=User::find($user_id)->products()->pluck('product_id');
        //checking if already is in the list
        foreach($products as $product)
        {
            if($product == $id)
            {
                return redirect()->back()->with('error', 'Already exist in wishlist');
            }  
        }
      
        $user= new User();
        $user->products()->attach($id,[
            'user_id' => $user_id,
            'created_at' => $now
        ]);
        
        return redirect()->back()->with('success', 'Added to wishlist');
    }

  

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user_id=Auth::user()->id;
        $product=User::find($user_id)->products()->detach($id);
        return redirect()->back()->with('success', 'Removed from wishlist');
    }
}
