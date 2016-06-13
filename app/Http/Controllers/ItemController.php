<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ItemRequest;
use App\Http\Controllers\Controller;
use App\Item;
use App\Member;
use Auth;
use App\Category;
use App\Subcategory;

class ItemController extends Controller
{
    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $items = Item::all();
        return view('admin.item.index')
                    ->with('title', 'List of All Items')
                    ->with('items', $items)
                    ->with('itemCounter', 0);
                    // ->with('categories', $categories)
                    // ->with('subcategories', $subcategories)
                    // ->with('seller', $seller)
                    // ->with('type', $type);
    }

    public function indexForMember()
    {
        $items = Item::where('seller_id', Auth::user()->member->id)->get();
        return view('admin.item.indexForMember')
                    ->with('title', 'List of My Items')
                    ->with('items', $items)
                    ->with('itemCounter', 0);
                  
    }
    
    public function details()
    {
        $item = Item::find($id);
        return view('item')
                ->with('title', "Item Details");
                ->with('item', $item);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::lists('name', 'id');
        $subcategories = Subcategory::lists('name', 'id');
        $seller = Member::lists('name', 'id');
        $type = [ 'buy' => 'buy', 'quote' => 'quote'];
        return view('admin.item.create')
                    ->with('title', 'Add an Item')
                    ->with('categories', $categories)
                    ->with('subcategories', $subcategories)
                    ->with('seller', $seller)
                    ->with('type', $type);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ItemRequest $request)
    {
        $data = $request->all();
        $name = $data['name'];

        $img_url = 'uploads/item/default.jpg';

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $destination = public_path().'/uploads/item/';
            $filename = time().$name.'.'.$file->getClientOriginalExtension();
            $file->move($destination, $filename);
            $img_url = '/uploads/item/'.$filename;
        }

        $item = new Item();
        $item->name = $name;
        $item->description = $data['description'];
        $item->category_id = $data['category_id'];
        $item->subcategory_id = $data['subcategory_id'];
        $item->seller_id = Auth::user()->member->id;
        $item->price = $data['price'];
        $item->amount_in_stock = $data['amount_in_stock'];
        $item->type = $data['type'];
        $item->img_url = $img_url;
        if($item->save()) {
            return redirect()->route('item.index')->with('success','Item Successfully Added');
        } else {
            return redirect()->route('item.index')->with('error','Something went wrong');
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
        $item = Item::findOrFail($id);
        $categories = Category::lists('name', 'id');
        $subcategories = Subcategory::lists('name', 'id');
        $seller = Member::lists('name', 'id');
        $type = [ 'bye' => 'buy', 'quote' => 'quote'];
        return view('admin.item.edit')
                    ->with('title', 'Edit Item')
                    ->with('item', $item)
                    ->with('categories', $categories)
                    ->with('subcategories', $subcategories)
                    ->with('seller', $seller)
                    ->with('type', $type);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ItemRequest $request, $id)
    {
        $data = $request->all();
        $name = $data['name'];

        $img_url = Item::where('id', $id)->pluck('img_url'); // fetch the previous img link 

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $destination = public_path().'/uploads/item/';
            $filename = time().$name.'.'.$file->getClientOriginalExtension();
            $file->move($destination, $filename);
            $img_url = '/uploads/item/'.$filename;
        }

        $item = new Item();
        $item->name = $name;
        $item->description = $data['description'];
        $item->category_id = $data['category_id'];
        $item->subcategory_id = $data['subcategory_id'];
        $item->price = $data['price'];
        $item->amount_in_stock = $data['amount_in_stock'];
        $item->type = $data['type'];
        $item->img_url = $img_url;
        if($item->save()) {
            return redirect()->route('item.index')->with('success','Item Successfully Updated');
        } else {
            return redirect()->route('item.index')->with('error','Something went wrong. Try again');
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
            Item::destroy($id);

            return redirect()->route('item.index')->with('success','Item Type Deleted Successfully.');

        }catch(Exception $ex){
            return redirect()->route('item.index')->with('error','Something went wrong.Try Again.');
        }
    }
}
