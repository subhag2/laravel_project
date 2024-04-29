<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AccountController;
use \App\Http\Controllers\UserController;
use \App\Http\Controllers\loginController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('welcome{name}', function ($name) {
    
//     return view('welcome',['name'=>$name]);
// });
// Route::get('hello', function () {
    
//     return view('hello');
// });

// Route::get('/', function(){
//     return view('welcome');
// });
Route::view("",'/welcome');
// Route::get('/hello', function(){
//     return view('hello');
// });
Route::view("hello",'/hello');

Route::get('/id/{name}', function($name){
    return view('about',['name'=>$name]);
});

Route::view("about",'/about');
// Route::get('hello2', function(Request $request){
//     return view('hello');
// $name = $request->name;
// })->name('hello2');

Route::get('/user/{user}', [AccountController::class, 'index']);
Route::get('/omee/{id}', [AccountController::class, 'subha']);
Route::get('cntlr',[UserController::class,'show']);
Route::post('login',[loginController::class,'Userlogin']);
route::view("/user",'user');