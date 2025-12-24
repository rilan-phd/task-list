<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //return view('welcome');
    return 'Main Page';
});

Route::get('/hello', function (){
   return 'Hello';
})->name('hello.pas');

Route::get('/halo', function (){
    return redirect()->route('hello.pas');
});

Route::get('/greet/{name}', function ($name){
   return 'Greetings ' . $name;
});
