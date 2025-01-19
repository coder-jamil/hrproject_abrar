<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'admin'],function(){
    Route::get('dashboard',[AdminController::class, 'index']);

    Route::get('employee',[EmployeeController::class, 'index']);
});




Route::group(['middleware'=>'guest'],function(){
    Route::get('signin',[AuthController::class, 'signin']);
});

//Route::get('countries', function(){
    //$countries=file_get_contents(public_path(). '/countries/countries.json');
    //$countries_array= json_decode($countries,true);

    //echo "<pre>";
    
        
    //print_r(array_column($countries_array,'name'));

    //echo "</pre>"; ttttt

//});

Route::get('countries',fn() => "hello");

Route::get('/ami',fn() => "hello");
    
