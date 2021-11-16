<?php

use App\Http\Controllers\CustomersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'welcome');
//Route::view('/customers', 'list');
//Route::get('/customers','App\Http\Controllers\CustomersController@list');
//Route::post('/','CustomersController@store');
Route::get('customers',[CustomersController::class,'list']);
Route::post('customers',[CustomersController::class,'store']);

// Route::group(['namespace' => '\App\Http\Controllers'], function(){
//     Route::get('/Customers', 'CustomersController@list');
//     Route::post('/Customers', 'CustomersController@store');
    
// });