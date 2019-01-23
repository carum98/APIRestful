<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Buyer*/
Route::resource('buyers', 'Buyer\BuyerController', ['only'=>['index', 'show']]);

/*Catergory*/
Route::resource('categories', 'Category\CategoryController', ['except'  => ['create', 'edit']]);

/*Product*/
Route::resource('products', 'Product\ProductController', ['only'=>['index','show']]);

/*Transaction*/
Route::resource('transactions', 'Transaction\TransactionController', ['only'=> ['index', 'show']]);
Route::resource('transactions.categories', 'Transaction\TransactionCategoryController', ['only' => ['index']]);
Route::resource('transactions.sellers', 'Transaction\TransactionSellerController', ['only' => ['index']]);

/*Seller*/
Route::resource('sellers', 'Seller\SellerController', ['only'=>['index', 'show']]);

/*User*/
Route::resource('users', 'User\UserController', ['except'  => ['create', 'edit']]);
