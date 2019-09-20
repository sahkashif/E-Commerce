<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Carbon\Carbon;
use App\Category;
use App\Product;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        $now = Carbon::now()->toDateTimeString();
        $on_deals=Product::where('sale_ended_at','<=', $now)->get();

        foreach($on_deals as $product){
            $product->present_price = $product->price;
            $product->on_deals = 0;
            $product->sale_started_at = null;
            $product->sale_ended_at = null;
            $product->save();
        }

        $categories=Category::all();
        View::share('categories',$categories);
    }
}
