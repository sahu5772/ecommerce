<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

Use Hash;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorydata = Category::all();
        return view('Admin/Category.index', compact('categorydata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorydata= Category::all();
        return view('Admin/Category.create', compact('categorydata'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_cate = $request->all();
        // echo "<pre>";
        // print_r($new_cate);
        // die;
        $insert = Category::create($new_cate);
        if($request->hasFile('thumbnail_image') && $request->file('thumbnail_image')->isValid()){
            $insert->addMediaFromRequest('thumbnail_image')->toMediaCollection('thumbnail_image');
        }
        return redirect('admin/category')->withsuccess('Category created successfully.....' );
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
    public function edit(Category $Category)
    {
        $edit = $Category;
        $categorydata= Category::all();
        // echo "<pre>";
        // print_r($edit);
        // die;
        return view('Admin/Category.edit', compact('edit','categorydata'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $Category)
    {
        $edit_cate = $request->all();
        $insert = $request['thumbnail_image'];
        if($request->hasfile('thumbnail_image') && $request->file('thumbnail_image')->isvalid()){
            $Category->media()->delete();
            $Category->addMedia($insert)->toMediaCollection('thumbnail_image');
        }
        $Category->update($edit_cate);
        return redirect()->route('category.index')->withsuccess('Category edited successfully.....' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $Category)
    {
        $Category->delete();
        // echo"<pre>";
        // print_r($Category);
        // die;
        return redirect()->back()->withsuccess('Category deleted successfully.....' );
    }
}
