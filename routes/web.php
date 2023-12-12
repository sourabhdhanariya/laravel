<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Black;
use App\Http\Controllers\DemoData;

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
Route::view('database-show-list', 'databaseshowlist');


