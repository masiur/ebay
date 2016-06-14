<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Cart;
use App\Item;
use Auth;
use View;
class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cart = Cart::whereBuyerId(Auth::user()->member->id)->first();
        // if($cart){
        //     $cart_details = CartDetails::with('cardInfo')->whereCartId($cart->id)->get();
        // }
        // else{
        //     $cart_details = [];
        // }
        // $total = 0.00;
        // $dollarToTaka = (float) MetaData::find(1)->value;
        // foreach ($cart_details as $key) {
        //     $key->card_info->price = (float) ($key->card_info->price * $key->amount * $dollarToTaka);
        //     $total +=  $key->card_info->price;
        // }
    
        // $balance = User::getBalance();
        
        return View::make('cart.cart')
                ->with('title', 'My Cart')
                ->with('cart', $cart);
                // ->with('total', $total)
                // ->with('balance', $balance)
                // ->with('cart_details', $cart_details);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id = 1)
    {
        // $item_id = $id;
        // $items = item::lists('title', 'id');
        $cart = Cart::whereBuyerId(Auth::user()->member->id)->first();
        $item = Item::find($id);
        // $item = Item::whereitemId($item->id)->whereUserId(null)->get()->count();
        $available = $item->amount_in_stock;
        if($cart == null){
            $cart = new Cart();
            $cart->item_id = $item->id;
            $cart->buyer_id = Auth::user()->member->id;
            $cart->seller_id = $item->seller_id;
            $cart->save();
        }
        // $cart_details = CartDetails::whereCartId($cart->id)->whereitemId($id)->first();
        return View::make('cart.create')
        ->with('title', 'Add To My Cart')
        ->with('item', $item);
        // ->with('item_id', $item_id);
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
// public function store()
//     {
//         $cart = Cart::whereUserId(Auth::user()->id)->whereStatus(0)->first();
//         if($cart == null){
//             $cart = new Cart();
//             $cart->user_id = Auth::user()->id;
//             $cart->save();
//         }

//         $rules = [
//             'card_id' => 'required|numeric',
//             'amount' => 'required|integer|min:1',
//             ];

//         $data = Input::all();
//         $validator = Validator::make($data, $rules);

//         if($validator->fails()){
//             return Redirect::back()->withInput()->withErrors($validator);
//         }
//         $available = Stock::whereCardId($data['card_id'])->whereUserId(null)->get()->count();

//         if($available < $data['amount']){
//             return Redirect::back()->with('error',"We have no enough Cards");
//         }
//         $cart_details = CartDetails::whereCartId($cart->id)->whereCardId($data['card_id'])->first();
//         if($cart_details){
//             // $cart_details->amount = $data['amount'];
//             return Redirect::back()->with('error',"Already Added Check Your Cart");
//         }
//         else{
//             $cart_details = new CartDetails;
//             $cart_details->card_id = $data['card_id'];
//             $cart_details->cart_id = $cart->id;
//             $cart_details->amount = $data['amount'];
//         }
        
//         if($cart_details->save()){
//             return Redirect::route('cart.index')->with('success',"Added Successfully.");
//         }
//         return Redirect::back()->with('error',"Something went wrong.Try again");

//     }

//     /**
//      * Display the specified resource.
//      * GET /carts/{id}
//      *
//      * @param  int  $id
//      * @return Response
//      */
//     public function show($id)
//     {
//         return $cart_details = CartDetails::with('cartInfo')->find($id);

//     }

//     /**
//      * Show the form for editing the specified resource.
//      * GET /carts/{id}/edit
//      *
//      * @param  int  $id
//      * @return Response
//      */
//     public function edit($id)
//     {
//         // $card_id = $id;
//          // $cards = Card::lists('title', 'id');
//         // $cart = Cart::whereUserId(Auth::user()->id)->whereStatus(0)->first();
        
//         // if($cart == null){
//         //  $cart = new Cart();
//         //  $cart->user_id = Auth::user()->id;
//         //  $cart->save();
//         // }
//         try {
//             $cart_details = CartDetails::find($id);
//             $card = Card::find($cart_details->card_id);
//             $card->available = Stock::whereCardId($card->id)->whereUserId(null)->get()->count();
            

//             return View::make('cart.edit')
//             ->with('title', 'Edit Cart')
//             ->with('card', $card)
//             ->with('cart_details', $cart_details);
//         } catch (Exception $e) {
//             return Redirect::route('home');
//         }
        
//     }

//     /**
//      * Update the specified resource in storage.
//      * PUT /carts/{id}
//      *
//      * @param  int  $id
//      * @return Response
//      */
//     public function update($id)
//     {
        

//         $rules = [
//             // 'card_id' => 'required',
//             'amount' => 'required|numeric|min:1',
//             ];

//         $data = Input::all();
//         $validator = Validator::make($data, $rules);

//         if($validator->fails()){
//             return Redirect::back()->withInput()->withErrors($validator);
//         }

//         $cart_details = CartDetails::find($id);

        
//         if($cart_details){
//             $available = Stock::whereCardId($cart_details->card_id)->whereUserId(null)->get()->count();

//             if($available < $data['amount']){
//                 return Redirect::back()->with('error',"We have not enough Cards");
//             }
//             $cart_details->amount = $data['amount'];
//             if($cart_details->save()){
//             return Redirect::route('cart.index')->with('success',"Updated Successfully.");
//         }
//         }
//         else{
//             return Redirect::back()->with('error',"Something went wrong.Try again");
//         }
        
//         return Redirect::back()->with('error',"Something went wrong.Try again");
//     }

//     /**
//      * Remove the specified resource from storage.
//      * DELETE /carts/{id}
//      *
//      * @param  int  $id
//      * @return Response
//      */
//     public function destroy($id)
//     {
//         try{
//             CartDetails::destroy($id);

//             return Redirect::route('cart.index')->with('success','Deleted Successfully.');

//         }catch(Exception $ex){
//             return Redirect::route('cart.index')->with('error','Something went wrong.Try Again.');
//         }
//     }

//     // Checkout
//     public function checkout()
//     {
//         return Redirect::route('cart.index')->with('success', 'Checkout Completed.');
//     }
// }