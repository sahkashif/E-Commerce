<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductStoreRequest;
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
        $products = Product::paginate(12);
        return view('admin.uploader.product')->with([
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
        dd($_FILES['img-1']['tmp_name']);
        dd(fopen($request->input('img-1'),"rb"));
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

        $img1 = new Image;
        $img1->img = base64_encode($request->file('img-1'));
        $img1->color()->associate($color);
        $img1->product()->associate($product);
        $img1->save();

        $img2 = new Image;
        $img2->img = base64_encode($request->file('img-2'));
        $img2->color()->associate($color);
        $img2->product()->associate($product);
        $img2->save();

        $img3 = new Image;
        $img3->img = base64_encode($request->file('img-3'));
        $img3->color()->associate($color);
        $img3->product()->associate($product);
        $img3->save();

        $img4 = new Image;
        $img4->img = base64_encode($request->file('img-4'));
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

    public function subcategories($category_id){
        $subcategories = SubCategory::where('category_id',$category_id)->get();
        //dd($stops);
        return ['subcategories' => $subcategories];
    }
}
