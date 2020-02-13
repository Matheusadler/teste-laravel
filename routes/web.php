<?php

Route::resource('/products', 'ProductController');
/*
Route::get('/products', 'ProductController@index')->name('products.index');
Route::get('/products/create', 'ProductController@create')->name('products.create');
Route::get('/products/{id}', 'ProductController@show')->name('products.show');
Route::get('/products/{id}/edit', 'ProductController@edit')->name('products.edit');
Route::post('/products', 'ProductController@store')->name('products.store');
Route::put('/products/{id}', 'ProductController@update')->name('products.update');
Route::delete('/products/{id}', 'ProductController@destroy')->name('products.destroy');



Route::get('/login', function () {
    return 'Login';
})->name('login');

Route::get('/welcome', function () {
    return view('welcome');
});

/*
Route::middleware([])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', function () {
            return 'Home Admin';
        });

        Route::get('/financeiro', function () {
            return 'Financeiro Admin';
        });

        Route::get('/rh', function () {
            return 'RH Admin';
        });

        Route::get('/', 'Admin\TestController@teste');
    });
});

    Route::group([
        'middleware' => ['auth'],
        'prefix' => 'admin',
        'namespace' => 'Admin'
    ], function () {
        Route::get('/dashboard', 'TestController@teste');
        Route::get('/financeiro', 'TestController@teste');
        Route::get('/rh', 'TestController@teste');
        Route::get('/', function () {
            return redirect('/dashboard');
        });
    });*/