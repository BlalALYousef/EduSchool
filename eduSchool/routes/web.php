<?php

use App\Http\Controllers\Studentcontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});  
Route::get('/blal',function(){ return view('blalbage'); });
Route::resource('student', Studentcontroller::class);