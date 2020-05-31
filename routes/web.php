<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Middleware\Authenticate ; 

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

// //login
// Route::get('/', function () {
//     return view('welcome');
// });

// //login
// Route::get('/login','LoginController@index');


/*
    admin backend
*/  

Route::prefix('admin')->group(function(){
    Route::middleware('auth:admin')->group(function(){
         //Dashboard
            
    Route::get('/','DashboardController@index');

    //Product
    Route::resource('/products','ProductController');

    //Order
    Route::resource('/orders', 'OrderController');
    Route::get('/confirm/{id}','OrderController@confirm')->name('orders.confirm');
    Route::get('/pending/{id}','OrderController@pending')->name('orders.pending');
    Route::get('/show/{id}','OrderController@show')->name('orders.show');

    //Users
    Route::resource('/users','UserListController');


    //logout
    Route::get('/logout','AdminUserController@logout');
    });

    // Admin login
    Route::get('/login','AdminUserController@index');
    Route::post('/login','AdminUserController@store');
});

/*
    fornt end
*/

Route::get('/','Front\HomeController@index');
Route::get('/categories','CategoriesController@index');
Route::get('/details/{id}','CategoriesController@details');
Route::get('/categoriesByPrice','CategoriesController@sortByPrice');
Route::get('/categoriesByName','CategoriesController@sortByName');
Route::post('/categoriesSearch','CategoriesController@searchProduct');

//login user
Route::get('/login', 'Front\UserController@index');
Route::post('/loginPost', 'Front\UserController@loginPost');
Route::get('/register', 'Front\UserController@register');
Route::post('/registerPost', 'Front\UserController@registerPost');
Route::get('/logout', 'Front\UserController@logout');

//user update profile
Route::get('/edit','Front\UserController@update_view');
Route::post('/edit','Front\UserController@update');


// user cart
// Route::middleware('auth:user')->group(function() {
//     Route::get('/cart','Front\CartController@index');
// });
Route::get('/cart','Front\CartController@index');
Route::post('/cart','Front\CartController@cart');
Route::post('/cart/remove/{id}','Front\CartController@destroy')->name('cart.remove');

Route::get('empty',function(){
    Cart::instance('default')->destroy();
});

//pages
Route::get('/apple','Front\PageController@apple');
Route::get('/dell','Front\PageController@dell');
Route::get('/microsoft','Front\PageController@microsoft');


//Order
Route::get('/order','Front\CartController@order');

//history
Route::get('/history','Front\UserController@history');
