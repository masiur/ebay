<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
	return Redirect::to('/home');
});

Route::get('/home', ['as'=>'home','uses' => 'FrontendController@home']);
	
Route::get('item/details/{id}',['as' => 'item.details', 'uses' => 'FrontendController@details']);

Route::group(['middleware' => 'guest'], function(){
	Route::controller('password', 'RemindersController');
	Route::get('login', ['as'=>'login','uses' => 'Auth\AuthController@login']);
	Route::get('register', ['as'=>'user.create','uses' => 'UserController@create']);
	Route::post('user/store', ['as'=>'user.store','uses' => 'UserController@store']);
	Route::post('login', array('uses' => 'Auth\AuthController@doLogin'));


	// social login route
	Route::get('login/fb', ['as'=>'login/fb','uses' => 'SocialController@loginWithFacebook']);
	Route::get('login/gp', ['as'=>'login/gp','uses' => 'SocialController@loginWithGoogle']);

});


Route::group(array('middleware' => 'auth'), function()
{
	Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@logout']);
	Route::get('profile', ['as' => 'profile', 'uses' => 'UserController@profile']);
	Route::get('dashboard', array('as' => 'dashboard', 'uses' => 'Auth\AuthController@dashboard'));
	Route::get('change-password', array('as' => 'password.change', 'uses' => 'Auth\AuthController@changePassword'));
	Route::post('change-password', array('as' => 'password.doChange', 'uses' => 'Auth\AuthController@doChangePassword'));

	// Item CRUD
	Route::get('myitem',['as' => 'item.indexForMember', 'uses' => 'ItemController@indexForMember']);
	Route::get('item/create',['as' => 'item.create', 'uses' => 'ItemController@create']);
	Route::post('item',['as' => 'item.store', 'uses' => 'ItemController@store']);
	Route::get('item/{id}/edit',['as' => 'item.edit', 'uses' => 'ItemController@edit']);
	Route::get('item/{id}/show',['as' => 'item.show', 'uses' => 'ItemController@show']);
	Route::put('item/{id}',['as' => 'item.update', 'uses' => 'ItemController@update']);


	// Quoted Item Management
	Route::get('item/quote/{item}', ['as' => 'item.quote.add', 'uses' => 'QuoteController@add']);

	Route::get('message',['as' => 'message', 'uses' => 'FrontendController@discussion']);

	Route::get('cart',['as'=>'cart.index', 'uses'=>'CartController@index']);
	Route::get('cart/add/{id?}',['as'=>'cart.create', 'uses'=>'CartController@create']);
	Route::post('cart/store',['as'=>'cart.store', 'uses'=>'CartController@store']);
	Route::get('cart/edit/{id}',['as'=>'cart.edit', 'uses'=>'CartController@edit']);
	Route::post('cart/update',['as'=>'cart.update', 'uses'=>'CartController@update']);
	Route::delete('cart/{id}',['as'=>'cart.delete', 'uses'=>'CartController@destroy']);
	Route::get('cart/checkout',['as'=>'cart.checkout', 'uses'=>'CartController@checkout']);

	// paypal 
Route::get('payment', array(
    'as' => 'payment',
    'uses' => 'PaypalController@postPayment',
));

// this is after make the payment, PayPal redirect back to your site
Route::get('payment/status', array(
    'as' => 'payment.status',
    'uses' => 'PaypalController@getPaymentStatus',
));

	
	// Route::get('order',['as' => 'order.index', 'uses' => 'OrderController@userOrders']);
	// Route::get('order/details/{id}',['as' => 'order.details', 'uses' => 'OrderController@orderDetails']);
	// Route::get('order/currentorder',['as' => 'order.currentorder', 'uses' => 'OrderController@currentOrder']);
	// Route::put('order/checkout',['as' => 'order.store.checkout', 'uses' => 'OrderController@checkout']);
	// Route::get('order/cards/images/{order_id}/{card_id}',['as' => 'order.cards.images', 'uses' => 'StockController@cardImages']);

	Route::group(['prefix' => 'admin', 'middleware' => 'role:admin'], function()
	{

		// Category CRUD
		Route::get('category',['as' => 'category.index', 'uses' => 'CategoryController@index']);
		Route::get('category/create',['as' => 'category.create', 'uses' => 'CategoryController@create']);
		Route::post('category',['as' => 'category.store', 'uses' => 'CategoryController@store']);
		Route::get('category/{id}/edit',['as' => 'category.edit', 'uses' => 'CategoryController@edit']);
		Route::get('category/{id}/show',['as' => 'category.show', 'uses' => 'CategoryController@show']);
		Route::put('category/{id}',['as' => 'category.update', 'uses' => 'CategoryController@update']);
		Route::delete('category/{id}',['as' => 'category.delete', 'uses' => 'CategoryController@destroy']);

		// SubCategory CRUD
		Route::get('subCategory',['as' => 'subCategory.index', 'uses' => 'SubCategoryController@index']);
		Route::get('subCategory/create',['as' => 'subCategory.create', 'uses' => 'SubCategoryController@create']);
		Route::post('subCategory',['as' => 'subCategory.store', 'uses' => 'SubCategoryController@store']);
		Route::get('subCategory/{id}/edit',['as' => 'subCategory.edit', 'uses' => 'SubCategoryController@edit']);
		Route::get('subCategory/{id}/show',['as' => 'subCategory.show', 'uses' => 'SubCategoryController@show']);
		Route::put('subCategory/{id}',['as' => 'subCategory.update', 'uses' => 'SubCategoryController@update']);
		Route::delete('subCategory/{id}',['as' => 'subCategory.delete', 'uses' => 'SubCategoryController@destroy']);

		// Package CRUD
		Route::get('package',['as' => 'package.index', 'uses' => 'PackageController@index']);
		Route::get('package/create',['as' => 'package.create', 'uses' => 'PackageController@create']);
		Route::post('package',['as' => 'package.store', 'uses' => 'PackageController@store']);
		Route::get('package/{id}/edit',['as' => 'package.edit', 'uses' => 'PackageController@edit']);
		Route::get('package/{id}/show',['as' => 'package.show', 'uses' => 'PackageController@show']);
		Route::put('package/{id}',['as' => 'package.update', 'uses' => 'PackageController@update']);
		Route::delete('package/{id}',['as' => 'package.delete', 'uses' => 'PackageController@destroy']);

		// Item CRUD
		Route::get('item',['as' => 'item.index', 'uses' => 'ItemController@index']);
		Route::delete('item/{id}',['as' => 'item.delete', 'uses' => 'ItemController@destroy']);

		Route::get('salesrecord',['as' => 'salesrecord.index', 'uses' => 'ItemController@salesrecord']);
		
		
	});

});















// Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function()
// {
// 	Route::get('dashboard', array('as' => 'dashboard', 'uses' => 'Auth\AuthController@dashboard'));
// });



