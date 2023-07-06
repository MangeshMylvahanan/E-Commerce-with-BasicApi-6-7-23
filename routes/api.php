<?php

use App\Http\Controllers\Api\ItemsCartController;
use App\Http\Controllers\Api\ItemsController;
use App\Http\Controllers\Api\OrdersController;
use App\Http\Controllers\Api\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


//register and login
Route::post('/userregister',[RegisterController::class,'UserRegister']);
Route::post('/login',[RegisterController::class,'Login']);
Route::post('/sellerregister',[RegisterController::class,'registerSeller']);
//productsadd
Route::post('/Addproducts',[ItemsController::class,'createProduct']);
//cart
Route::post('addtocart',[ItemsCartController::class,'addToCart']);
//billing details
Route::post('/billing',[OrdersController::class,'store']);
//get routes
Route::get('/homepage',[ItemsController::class,'home']);
Route::get('/product/{id}', [ItemsController::class, 'Productdetails']);
Route::get('/searchproduct', [ItemsController::class, 'SearchProduct']);
Route::get('/cart-product-list',[ItemsCartController::class,'CartList']);
Route::delete('/removeCart/{id}', [ItemsCartController::class, 'removeCart']);


//register and login
// Route::post('/userregister',[RegisterController::class,'UserRegister']);
// Route::post('/login',[RegisterController::class,'Login']);
// Route::post('/sellerregister',[RegisterController::class,'registerSeller']);


// Route::group(['middleware' => ['auth:sanctum']], function () {
//     // Routes that require authentication using Sanctum

//     // Add products
//     Route::post('/Addproducts', [ItemsController::class, 'createProduct']);

//     // Cart
//     Route::post('addtocart', [ItemsCartController::class, 'addToCart']);

//     // Billing details
//     Route::post('/billing', [OrdersController::class, 'store']);
// });