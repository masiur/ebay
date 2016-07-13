<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\ExecutePayment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
use Redirect;
use Config;
use Input;
use URL;
use Auth;
class PaypalController extends Controller
{
    
    private $_api_context;

    public function __construct()
    {
        // ...
        // setup PayPal api context
        $paypal_conf = config('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential($paypal_conf['client_id'], $paypal_conf['secret']));
        $this->_api_context->setConfig($paypal_conf['settings']);
    }

    public function postPayment()
    {
        
        $carts = \App\Cart::whereBuyerId(Auth::user()->member->id)->get();
        if(!count($carts))
        {
            return redirect()->route('home'); //
        }

        $total = 0.00;
        $i = 1;
        $items = array();
        foreach ($carts as $cart ) {

            $price = (float) ($cart->item->price * $cart->amount);
            $productName = $cart->item->name;
            $amount = $cart->amount;

            $item = new Item();
            $item->setName($productName)
                ->setCurrency('USD')
                ->setQuantity($amount)
                ->setPrice($cart->item->price);
            $total +=  $price;
            $i++;
            $items[] = $item;
        }

        // return $items;
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        // $item_1 = new Item();
        // $item_1->setName('Item 1') // item name
        //     ->setCurrency('USD')
        //     ->setQuantity(2)
        //     ->setPrice('15'); // unit price

        // $item_2 = new Item();
        // $item_2->setName('Item 2')
        //     ->setCurrency('USD')
        //     ->setQuantity(4)
        //     ->setPrice('7');

        // $item_3 = new Item();
        // $item_3->setName('Item 3')
        //     ->setCurrency('USD')
        //     ->setQuantity(1)
        //     ->setPrice('20');

        // add item to list
        $item_list = new ItemList();
        $item_list->setItems($items);

        $amount = new Amount();
        $amount->setCurrency('USD')
            ->setTotal($total);

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($item_list)
            ->setDescription('Your transaction description');

        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(URL::route('payment.status'))
            ->setCancelUrl(URL::route('payment.status'));

        $payment = new Payment();
        $payment->setIntent('Sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirect_urls)
            ->setTransactions(array($transaction));
        try {

            $payment->create($this->_api_context);
        } catch (\PayPal\Exception\PPConnectionException $ex) {
            if (\Config::get('app.debug')) {
                echo "Exception: " . $ex->getMessage() . PHP_EOL;
                $err_data = json_decode($ex->getData(), true);
                exit;
            } else {
                die('Some error occur, sorry for inconvenient');
            }
        }

        foreach($payment->getLinks() as $link) {
            if($link->getRel() == 'approval_url') {
                $redirect_url = $link->getHref();
                break;
            }
        }

        // add payment ID to session
        session()->put('paypal_payment_id', $payment->getId());
        // Session::put('paypal_payment_id', $payment->getId());

        if(isset($redirect_url)) {
            // redirect to paypal
            return Redirect::away($redirect_url);
        }

        return Redirect::route('cart.checkout')
            ->with('error', 'Unknown error occurred');
    }

    public function getPaymentStatus()
    {
        // Get the payment ID before session clear
        $payment_id = Input::get('paymentId');
        // return session()->get('paypal_payment_id');
        // return $payment_id = Session::get('paypal_payment_id');

        // clear the session payment ID
        Session::forget('paypal_payment_id');

        if (empty(Input::get('PayerID')) || empty(Input::get('token'))) {
            return Redirect::route('cart.checkout')
                ->with('error', 'Payment failed');
        }
        
        $payment = Payment::get($payment_id, $this->_api_context);

        // PaymentExecution object includes information necessary 
        // to execute a PayPal account payment. 
        // The payer_id is added to the request query parameters
        // when the user is redirected from paypal back to your site
        $execution = new PaymentExecution();
        $execution->setPayerId(Input::get('PayerID'));
        
        //Execute the payment
        $result = $payment->execute($execution, $this->_api_context);
        
        // echo '<pre>';print_r($result);echo '</pre>';exit; // DEBUG RESULT, remove it later

        if ($result->getState() == 'approved') { // payment made

            /* code after payment is completed */
            $carts = \App\Cart::whereBuyerId(Auth::user()->member->id)->get();
            foreach ($carts as $cart) {

                $salesRecord = new \App\SalesRecord();
                $salesRecord->item_name = $cart->item->name;
                $salesRecord->buyer_id = Auth::user()->member->id;
                $salesRecord->seller_id = $cart->item->seller_id;
                $salesRecord->amount = $cart->amount;
                $salesRecord->price = $cart->item->price;
                $salesRecord->save();

                // decrease the item amount in main item table 
                $item = \App\Item::find($cart->item_id);
                $previousAmount = $item->amount_in_stock;
                $item->amount_in_stock = $previousAmount - $cart->amount;
                $item->save();
                
            }
            // for safety delete is recorded within another loop
            foreach ($carts as $cart) {
                \App\Cart::destroy($cart->id);
            }
            
            return Redirect::route('home')
                ->with('success', 'Payment success');
        }
        return Redirect::to('cart.checkout')
            ->with('error', 'Payment failed');
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
