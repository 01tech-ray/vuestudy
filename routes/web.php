<?php

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
    return View::make('1');
});

Route::get('/2/1',function(){
    return View::make('2.1');
});

Route::get('/3/1',function(){
    return View::make('3.1');
});

Route::get('/4/1',function(){
    return View::make('4.1');
});

Route::get('/5/2',function(){
    return View::make('5.2');
});
Route::get('/6/1',function(){
    return View::make('6.1');
});