<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/', function () {
    return view('app');
});

Route::get('/trading', function(){
    return view('trading');
});
Route::get('/transaction', function(){
    return view('/transaction');
});
