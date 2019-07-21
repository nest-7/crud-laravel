<?php

Route::get('/', function () {
    return redirect()->route('product.index');
});

Route::resource('product','ProductController');

Auth::routes();
