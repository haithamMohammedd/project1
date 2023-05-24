<?php

use Illuminate\Support\Facades\Route;

Route::get('/',function(){
    return'Home page';
});
Route::get('/about',function(){
    return'About page';
});
Route::get('/User',function(){
    return'User page';
});

