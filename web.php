<?php

use App\Http\Controllers\PageController;

/* php -S localhost:8000 -t public\
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Route passing variables to view
/* Route::get('/', function(){
    return view('subview.master');
   }); //done
*/
Route::get('/', 'App\Http\Controllers\PageController@master');
Route::get('/about', 'App\Http\Controllers\PageController@about');
Route::get('/list', 'App\Http\Controllers\PageController@list');

//Route::get('/',  [PageController::class, 'about'] );

