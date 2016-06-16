<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Cart;
use App\Item;
use Auth;
use View;
use Redirect;
class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carts = Cart::whereBuyerId(Auth::user()->member->id)->get();
        $total = 0.00;
        foreach ($carts as $cart ) {
            $cart->item->price = (float) ($cart->item->price * $cart->amount);
            $total +=  $cart->item->price;
        }
        
        return View::make('cart.cart')
                ->with('title', 'My Cart')
                ->with('items', $carts)
                ->with('total', $total);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id = 1)
    {

        $cart = Cart::whereBuyerId(Auth::user()->member->id)->first();
        $item = Item::find($id);    
        $available = $item->amount_in_stock;

        if (!Cart::whereItemId($id)->exists()) {
            $cart = new Cart();
            $cart->item_id = $item->id;
            $cart->buyer_id = Auth::user()->member->id;
            $cart->seller_id = $item->seller_id;
            $cart->amount = 1;
            $cart->save();
            return redirect()->route('cart.index')->with('success', 'Item Added to Cart');
        } else {
            return redirect()->route('cart.index')->with('info', 'Item already Added to Cart');
        }
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
    public function update(Request $request)
    {
        try {
            $data = $request->all();
            $items = json_decode($request->input('items'));
            foreach ($items as $item ) {
                $cartPrevious = Cart::whereItemId($item->item_id)->first();
                $cartPrevious->amount = $request->input('item-quantityOfItemId'.$item->item_id);
                $cartPrevious->save();
            }
            return redirect()->route('cart.index')->with('success', 'Updated Successfully');
        } catch(Exception $ex) {
            return redirect()->route('cart.index')->with('error', 'Something went wrong.Try Again.');
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
            Cart::destroy($id);

            return Redirect::route('cart.index')->with('success','Item Removed Successfully.');

        }catch(Exception $ex){
            return Redirect::route('cart.index')->with('error','Something went wrong.Try Again.');
        }
    }

    public function checkout() {
        $carts = Cart::whereBuyerId(Auth::user()->member->id)->get();
        $total = 0.00;
        foreach ($carts as $cart ) {
            $cart->item->price = (float) ($cart->item->price * $cart->amount);
            $total +=  $cart->item->price;
        }
        return view('cart.checkout')
                ->with('title', 'Checkout')
                ->with('carts', $carts)
                ->with('total', $total);
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