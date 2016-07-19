<?php

namespace App\Http\Controllers;

use App\ProductCategory;
use App\ShopCategory;
use Illuminate\Http\Request;

use App\Category;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
class CategoryController extends Controller
{
    //////////////////// ----------------- SHOP CATEGORY ------------//////////////////////////



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function shop_index()
    {
        $categories = ShopCategory::all();
        return view('shop.category.index')
                        ->with('title', 'List of All Shop Categories')
                        ->with('shop_categories', $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function shop_create()
    {
        return view('shop.category.create')
                        ->with('title', 'Add Shop Category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function shop_store(Request $request)
    {
        $rules = [
            'name' => 'required'
            ];

        $data = $request->all();
        $validation = Validator::make($data, $rules);

        if ($validation->fails()) {
            return redirect()->back()->withInput()->withErrors($validation);
        }

        $category = new ShopCategory();
        $category->name = $data['name'];
        if($category->save()) {
            return redirect()->route('shop.category.index')->with('success','Category Successfully Added');
        } else {
            return redirect()->route('shop.category.index')->with('error','Something went wrong');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function shop_edit($id)
    {
        $category = ShopCategory::findOrFail($id);
        return view('shop.category.edit')
                        ->with('title', 'Edit Shop Categories')
                        ->with('shop_category', $category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function shop_update(Request $request, $id)
    {
        $rules = [
            'name' => 'required'
            ];

        $data = $request->all();
        $validation = Validator::make($data, $rules);

        if ($validation->fails()) {
            return redirect()->back()->withInput()->withErrors($validation);
        }

        $category = ShopCategory::findOrFail($id);
        $category->name = $data['name'];
        if($category->save()) {
            return redirect()->route('shop.category.index')->with('success','Category Successfully Updated');
        } else {
            return redirect()->route('shop.category.index')->with('error','Something went wrong');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function shop_destroy($id)
    {
        try{
            ShopCategory::destroy($id);

            return redirect()->route('shop.category.index')->with('success','Category Deleted Successfully.');

        }catch(Exception $ex){
            return redirect()->route('shop.category.index')->with('error','Something went wrong.Try Again.');
        }
    }





    //////////////////// ----------------- PRODUCT CATEGORY ------------//////////////////////////



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function product_index()
    {
        $categories = ProductCategory::all();
        return view('product.category.index')
            ->with('title', 'List of All Product Categories')
            ->with('product_categories', $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function product_create()
    {
        return view('product.category.create')
            ->with('title', 'Add Product Category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function product_store(Request $request)
    {
        $rules = [
            'name' => 'required'
        ];

        $data = $request->all();
        $validation = Validator::make($data, $rules);

        if ($validation->fails()) {
            return redirect()->back()->withInput()->withErrors($validation);
        }

        $category = new ProductCategory();
        $category->name = $data['name'];
        if($category->save()) {
            return redirect()->route('product.category.index')->with('success','Category Successfully Added');
        } else {
            return redirect()->route('product.category.index')->with('error','Something went wrong');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function product_edit($id)
    {
        $category = ProductCategory::findOrFail($id);
        return view('product.category.edit')
            ->with('title', 'Edit Product Categories')
            ->with('product_category', $category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function product_update(Request $request, $id)
    {
        $rules = [
            'name' => 'required'
        ];

        $data = $request->all();
        $validation = Validator::make($data, $rules);

        if ($validation->fails()) {
            return redirect()->back()->withInput()->withErrors($validation);
        }

        $category = ProductCategory::findOrFail($id);
        $category->name = $data['name'];
        if($category->save()) {
            return redirect()->route('product.category.index')->with('success','Category Successfully Updated');
        } else {
            return redirect()->route('product.category.index')->with('error','Something went wrong');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function product_destroy($id)
    {
        try{
            ProductCategory::destroy($id);

            return redirect()->route('product.category.index')->with('success','Category Deleted Successfully.');

        }catch(Exception $ex){
            return redirect()->route('product.category.index')->with('error','Something went wrong.Try Again.');
        }
    }
}
