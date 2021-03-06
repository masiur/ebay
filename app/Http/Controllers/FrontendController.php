<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Item;
use App\Message;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     return view('home')->with('title', 'Home')->with();
    // }

    public function home()
    {
        $items = Item::all();
        $categories = Category::all();
        return view('home')
                ->with('title', 'Home')
                ->with('items', $items)
                ->with('categories', $categories);
    }

    public function category_filter($id)
    {
        $items = Item::where('category_id', $id)->get();
        $categories = Category::all();
        return view('home')
            ->with('title', 'Home')
            ->with('items', $items)
            ->with('categories', $categories);
    }

    public function discussion()
    {
        // $messages = Message::all();
        return view('discussion')
                ->with('title', 'Discussion');
                // ->with('messages', $messages);
    }

    public function details($id)
    {
        $item = Item::find($id);
        return view('item')
                ->with('title', "Item Details")
                ->with('item', $item);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
}
