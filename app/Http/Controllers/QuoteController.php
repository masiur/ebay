<?php

namespace App\Http\Controllers;

use App\Item;
use App\Member;
use App\Message;
use App\Quote;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class QuoteController extends Controller
{

    public function add($item_id){
        //return $item_id;
        $item = Item::findOrFail($item_id);

        $quote = new Quote();

        $quote->item_id = $item_id;
        $quote->seller_id = $item->seller_id;
        $quote->buyer_id = Member::where('user_id', Auth::user()->id)->first()->id;
        $quote->receiver_id = $item->seller_id;

        if($quote->save()){
            $message = new Message();

            $message->quote_id = $quote->id;
            $message->item_id = $item_id;
            $message->messager_id = $quote->buyer_id;
            $message->receiver_id = $quote->seller_id;

            $message->message = "I want to buy ".$item->name;

            if($message->save()){
                //return 1;
                //return $quote->message;
                return view('discussion')->with('message',$quote->message)->with('title', 'Conversation');
            }

            else{
                return "Something Went Wrong";
            }
        }

        else{
            return "Something Went Wrong";
        }
    }



    public function response(){

        $rules = [
            'id' => 'required',
            'message' => 'required'
        ];

        $data = Input::all();

        $validator = Validator::make($data, $rules);

        if($validator->fails()){
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $quote = Quote::findOrFail($data['id']);

        $member = Member::where('user_id', Auth::user()->id)->first();

        if($member->id == $quote->seller_id){
            $quote->receier_id = $quote->buyer_id;
            $other = $quote->buyer->name;
        }
        else{
            $quote->receiver_id = $quote->seller_id;
            $other = $quote->seller->name;
        }

        if($quote->save()){
            $message = new Message();

            $message->quote_id = $quote->id;
            $message->item_id = $quote->item_id;
            $message->messager_id = $member->id;

            if($member->id == $quote->seller_id){
                $message->receiver_id = $quote->buyer_id;
            }
            else{
                $message->receiver_id = $quote->seller_id;
            }

            $message->message = $data['message'];

            if($message->save()){
                return view('discussion')
                    ->with('message',$quote->message)
                    ->with('title', 'Conversation with '.$message->receiver_id)
                    ->with('other', $other);
            }

            else{
                return view('discussion')->with('error','Something Went Wrong. Try Again.')->with('title', 'Conversation');
            }
        }

        else{
            return view('discussion')->with('error','Something Went Wrong. Try Again.')->with('title', 'Conversation');
        }

    }










    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
