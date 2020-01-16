<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.uploader.category')->with('categories', $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.uploader.categoryUpload');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'sku' => 'required',
            'details' => 'required',
            'description' => 'required'
        ]);

        $category = new Category;
        $category->sku = $request->input('sku');
        $category->name = $request->input('name');
        $category->details = $request->input('details');
        $category->description = $request->input('description');
        if($request->input('active')){
            $category->active = 1;
        }
       
        if($request->input('featured')){
            $category->featured = 1;
        }
        
        if($request->input('hot')){
            $category->hot = 1;
        }
        $category->save();
        return redirect()->back()->with('success', 'successfully uploaded' );
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
        $category = Category::find($id);
        return view('admin.edit.category')->with([
            'category' => $category
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
        $category = Category::find($id);
        $category->sku = $request->input('sku');
        $category->name = $request->input('name');
        $category->details = $request->input('details');
        $category->description = $request->input('description');
        if($request->input('active')){
            $category->active = 1;
        }
       
        if($request->input('featured')){
            $category->featured = 1;
        }
        
        if($request->input('hot')){
            $category->hot = 1;
        }
        $category->save();
        return redirect('admin/category')->with('success', 'updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::find($id)->delete();
        return redirect()->back()->with('success', 'deleted!!!');
    }
}
