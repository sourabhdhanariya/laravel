<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Black;
use App\Http\Controllers\DemoData;
use App\Http\Controllers\Http;
use App\Http\Controllers\UserAuth;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index']);

// Route::view("home", "home");
// Route::get('/home/{name}', function ($name){
//         return view('home', ["home"=>$name]);
// });
Route::get('/demo/{user}', [DemoData::class, 'index']);
Route::view('seach', 'userseach');
// Route::livewire('routedata','routedata');
Route::view('hook', 'hook');
Route::view('nested', 'nested');
Route::view('registraction', 'registraction');

Route::view('connect_list', 'connect_list');


//htps request
Route::get('users',[Http::class,'textRequest']);


// middlreware
Route::view("noaccess", "noaccess");

//group middleware
Route::group(['middleware' => ['producted']], function () {
Route::view('registraction', 'registraction');
});
//Route middleware 
Route::view('connect_list', 'connect_list')
->middleware('filed');
//session 
Route::view('login', 'login');
Route::view('profile', 'profile');
// Route::get('/logout',function(){
//     if(session()->has('user')){
//         session()->pull('user', null);
//     }
//     return redirect('login');
// });
// Route::get('/login',function(){
//     if(session()->has('user')){
//         return redirect('profile');
//     }
//     return view('login');
// });

Route::post("users",[UserAuth::class,'userLogin']);