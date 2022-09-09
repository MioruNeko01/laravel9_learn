<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\users;
use App\Http\Controllers\UsersController;

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


//-------------->Routing
Route::get('/', function () {
    return view('welcome'); //the string 'name' can be any
    //  return redirect('about'); // redirect user to another page 
});

Route::get('/about', function () {
    return view('about');
});

//------------->Simple form 
//Route::view("about",'about');
Route::view("contact", 'contact');


//---------->controller
//Route::get('url','controller file');
//Route::get('users/{name}',[users::class, 'index']);


//View

// -------------> Using Routing
// Route::get('/users/{username}', function ($username) {
//     return view('users', ['name' => $username]); //passing data to view 'name' is a variable
// });
//Route::view('users','users'); //here we cannot pass the data which is its limitation 

//-----------> Using Controller
//Route::get("users/{name}",[UsersController::class, 'getView']);


//----------->Component
//Route::view('users', 'users');


//------------>Blade Template
//Route::get("users",[UsersController::class, 'getView']);


//----------->Laravel 9 : Inline Blade Template
Route::get("products",[ProductController::class,'productList']);

//--------------> Submit HTML Form
Route::post('users',[UsersController::class,'getData']);
Route::view("login","users");