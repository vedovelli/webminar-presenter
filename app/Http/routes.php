<?php

Route::get('/', function () {
    $products = \App\Product::paginate(4);

    return view('welcome')->with(compact('products'));
});
