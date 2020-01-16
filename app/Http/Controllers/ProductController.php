<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductStoreRequest;
use Illuminate\Support\Facades\Storage;
use App\Category;
use App\SubCategory;
use App\Product;
use App\Color;
use App\Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with(['category', 'subcategory']);
        if(request()->v){
            switch(request()->v){
                case "featured" : $products = Product::where('featured',1)->activeProducts()->paginate(12);
            break;
                case "sale" : $products = Product::saleProducts()->activeProducts()->paginate(12);
            break;
                case "on-deals" : $products =  Product::where('on_deals',1)->activeProducts()->paginate(12);
            break;
            }
        }else{
            $products= $products->paginate(12);
        }
       
        
        
        
        return view('admin.list.products')->with([
            'products' => $products,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $subcategories = SubCategory::all();

        return view('admin.uploader.productUploader')->with([
            'categories' => $categories,
            'subcategories' => $subcategories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$request->validate();
        
        //dd($request->hasFile('img-1'));
        $product = new Product;
        $product->name = $request->input('name');
        $product->sku = $request->input('sku');
        $product->category_id = $request->input('category');
        $product->sub_category_id = $request->input('subcategory');
        $product->product_details = $request->input('details');
        $product->product_description = $request->input('description');
        $product->stock = $request->input('stock');
        $product->stock_mergin = $request->input('margin');
        $product->price = $request->input('price');
        if($request->input('present_price') != null){
            $product->present_price = $request->input('present_price');
            $product->sale_started_at = $request->input('sale_start_at');
            $product->sale_ended_at = $request->input('sale_end_at');
        }
        else{
            $product->present_price = $request->input('price');
        }
        if($request->input('active')){
            $product->active = 1;
        }
        if($request->input('on_deals')){
            $product->on_deals = 1;
        }
        if($request->input('featured')){
            $product->featured = 1;
        }

        $product->save();

        $color = new Color;
        $color->color = $request->input('color');
        $color->product()->associate($product);
        $color->default_color = 1;
        $color->save();

        //image save
        if($request->hasFile('img-1')){
            
            $fileWithExt = $request->file('img-1')->getClientOriginalName();
            $fileName = pathinfo('fileWithExt', PATHINFO_FILENAME);
            $extention = $request->file('img-1')->getClientOriginalExtension();
            $img_id = Image::count()+1;
            $fileNameToStore_1 = 'product_'.$product->id.'_'.$color->id.'_'.$img_id.'.jpg';
            
            $path = $request->file('img-1')->storeAs('public/images/product',$fileNameToStore_1);
            
        }else{
            $fileNameToStore_1 = 'noimage.jpg';
        }
        $img1 = new Image;
        $img1->img = $fileNameToStore_1;
        $img1->color()->associate($color);
        $img1->product()->associate($product);
        $img1->save();

        if($request->hasFile('img-2')){
            $fileWithExt = $request->file('img-2')->getClientOriginalName();
            $fileName = pathinfo('fileWithExt', PATHINFO_FILENAME);
            $extention = $request->file('img-2')->getClientOriginalExtension();
            $newName = 'product_'.$product->id.'_'.$color->id.'_'.$img_id.'.jpg';
            $img_id = Image::count()+1;
            
            $fileNameToStore_2 = 'product_'.$product->id.'_'.$color->id.'_'.$img_id.'.jpg';
            
            $path = $request->file('img-2')->storeAs('public/images/product/',$fileNameToStore_2);
            
        }else{
            $fileNameToStore_2 = 'noimage.jpg';
        }
        $img2 = new Image;
        $img2->img = $fileNameToStore_2;
        $img2->color()->associate($color);
        $img2->product()->associate($product);
        $img2->save();

        if($request->hasFile('img-3')){
            $fileWithExt = $request->file('img-3')->getClientOriginalName();
            $fileName = pathinfo('fileWithExt', PATHINFO_FILENAME);
            $extention = $request->file('img-3')->getClientOriginalExtension();
            $newName = 'product_'.$product->id.'_'.$color->id.'_'.$img_id.'.jpg';
            $img_id = Image::count()+1;
            
            $fileNameToStore_3 = 'product_'.$product->id.'_'.$color->id.'_'.$img_id.'.jpg';
            
            $path = $request->file('img-1')->storeAs('public/images/product',$fileNameToStore_3);
            
        }else{
            $fileNameToStore_3 = 'noimage.jpg';
        }

        $img3 = new Image;
        $img3->img = $fileNameToStore_3;
        $img3->color()->associate($color);
        $img3->product()->associate($product);
        $img3->save();

        if($request->hasFile('img-4')){
            $fileWithExt = $request->file('img-4')->getClientOriginalName();
            $fileName = pathinfo('fileWithExt', PATHINFO_FILENAME);
            $extention = $request->file('img-4')->getClientOriginalExtension();
            $newName = 'product_'.$product->id.'_'.$color->id.'_'.$img_id.'.jpg';
            $img_id = Image::count()+1;
            
            $fileNameToStore_4 = 'product_'.$product->id.'_'.$color->id.'_'.$img_id.'.jpg';
            
            $path = $request->file('img-4')->storeAs('public/images/product',$fileNameToStore_4);
            
        }else{
            $fileNameToStore_4 = 'noimage.jpg';
        }

        $img4 = new Image;
        $img4->img = $fileNameToStore_4;
        $img4->color()->associate($color);
        $img4->product()->associate($product);
        $img4->save();

        return redirect()->back()->with('success', 'product uploaded!');
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
        $product = Product::find($id);

        return view('admin.edit.product')->with([
            'product' => $product
        ]);
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
        $product = Product::find($id);
        if($request->has('category')){
            $product->category_id = $request->input('category');
        }
        if($request->has('subcategory')){
            $product->sub_category_id = $request->input('subcategory');
        }
        if($request->has('name')){
            $product->name = $request->input('name');
        }
        if($request->has('details')){
            $product->product_details = $request->input('details');
        }
        if($request->has('description')){
            $product->product_description = $request->input('description');
        }
       
        if($request->has('stock')){
            $product->name = $request->input('stock');
        }
        if($request->has('mergin')){
            $product->stock_mergin = $request->input('mergin');
        }
        if($request->has('price')){
            $product->price = $request->input('price');
        }
        if($request->has('present_price')){
            $product->present_price = $request->input('present_price');
        }
        if($request->has('sale_started_at')){
            $product->sale_started_at = $request->input('sale_started_at');
        }
        if($request->has('sale_ended_at')){
            $product->sale_ended_at = $request->input('sale_ended_at');
        }
        if($request->has('price')){
            $product->price = $request->input('price');
        }

        if($request->input('active')){
            $product->active = 1;
        }
        if($request->input('on_deals')){
            $product->on_deals = 1;
        }
        if($request->input('featured')){
            $product->featured = 1;
        }

        $product->save();

        return redirect()->back()->with('success', 'updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::find($id)->delete();
        return redirect()->back()->with('success', 'deleted!!!');
    }

    public function subcategories($category_id){
        $subcategories = SubCategory::where('category_id',$category_id)->get();
        //dd($stops);
        return ['subcategories' => $subcategories];
    }
}
