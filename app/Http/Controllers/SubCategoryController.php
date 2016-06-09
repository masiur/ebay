<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Subcategory;
use App\Category;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategories = Subcategory::all();
        return view('admin.subcategory.index')
                        ->with('title', 'List of all Sub Categories')
                        ->with('subcategories', $subcategories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::lists('name', 'id');
        return view('admin.subcategory.create')
                        ->with('title', 'Add Subcategory')
                        ->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required',
            'category_id' => 'required'
            ];

        $data = $request->all();
        $validation = Validator::make($data, $rules);

        if ($validation->fails()) {
            return redirect()->back()->withInput()->withErrors($validation);
        }

        $subcategory = new Subcategory();
        $subcategory->name = $data['name'];
        $subcategory->category_id = $data['category_id'];
        if($subcategory->save()) {
            return redirect()->route('subCategory.index')->with('success','SubCategory Successfully Added');
        } else {
            return redirect()->route('subCategory.index')->with('error','Something went wrong. Try again');
        }
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
        $categories = Category::lists('name', 'id');
        $subcategory = Subcategory::findOrFail($id);
        return view('admin.subcategory.edit')
                        ->with('title', 'Edit SubCategory')
                        ->with('categories', $categories)
                        ->with('subcategory', $subcategory);
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
        $rules = [
            'name' => 'required',
            'category_id' => 'required'
            ];

        $data = $request->all();
        $validation = Validator::make($data, $rules);

        if ($validation->fails()) {
            return redirect()->back()->withInput()->withErrors($validation);
        }

        $subcategory = Subcategory::findOrFail($id);
        $subcategory->name = $data['name'];
        $subcategory->category_id = $data['category_id'];
        if($subcategory->save()) {
            return redirect()->route('subCategory.index')->with('success','SubCategory Successfully Updated');
        } else {
            return redirect()->route('subCategory.index')->with('error','Something went wrong. Try again');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            Subcategory::destroy($id);

            return redirect()->route('subCategory.index')->with('success','SubCategory Deleted Successfully.');

        }catch(Exception $ex){
            return redirect()->route('subCategory.index')->with('error','Something went wrong. Try Again.');
        }
    }
}
