<?php

Route::get('/login', function(){
    return 'Login';
})->name('login');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categoria/{flag}', function($flag){
    return "Produto da categoria: {$flag}";
});

Route::get('admin/dashboard', function(){
    return 'Home Admin';
})->middleware('auth');

Route::get('admin/financeiro', function(){
    return 'Financeiro Admin';
})->middleware('auth');

Route::get('admin/rh', function(){
    return 'RH Admin';
})->middleware('auth');