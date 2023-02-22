<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\ProductCategory;




use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productdata= Product::all();
        return view('Admin/Product.index', compact('productdata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $CategoryData=Category::all();
        return view('Admin/product.create', compact('CategoryData'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_product = $request->all();
        // echo "<pre>";
        // print_r($new_product );
        // die;
        $categoryIds = $new_product['category'];
        $new_product['category']=implode(",", $new_product['category']);

        $product = Product::create($new_product );
        foreach ($categoryIds as $key => $_cId) {
           ProductCategory::insert(['product_id'=> $product->id, 'category_id'=> $_cId]);
        }
        return redirect('admin/product')->withsuccess('Product created successfully.....' );
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
    public function edit(Product $Product)
    {
        $edit = $Product;
        $CategoryData=Category::all();
        return view('Admin/Product.edit', compact('edit','CategoryData'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $Product)
    {
        $edit_product = $request->all(); 
        // p($edit_product);
        $productdata=$Product['id'];
        $categoryIds = $edit_product['category'];
        $edit_product['category']=implode(",", $edit_product['category']);
        ProductCategory::where('product_id', $productdata)->delete();
        foreach ($categoryIds as $key => $_cId) {
            ProductCategory::insert(['product_id'=> $productdata, 'category_id'=> $_cId]);
         }
         return redirect('admin/product')->withsuccess('Product edit successfully.....' );
     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $Product)
    {
        // echo "<pre>";
        // print_r($Product);
        // die;
        $productdata=$Product['id'];
        // p($productdata);
        
        ProductCategory::where('product_id', $productdata)->delete();
        $Product->delete(); 
        // echo"<pre>";
        // print_r($Product);
        // die;
        return redirect()->back()->withsuccess('Product deleted successfully.....' );
    }
}
