<?php

//use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;

Route::get('/greetings/{name}', 
fn(string $name) => "Welcome, о долгожданный {$name}");

Route::get('/information', function () {
    return view('information');
});

Route::get('/news', function () {
    return view('News');
});