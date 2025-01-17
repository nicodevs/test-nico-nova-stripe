<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/nova/login');
});

Route::get('/nova', function () {
    return redirect('/nova/login');
});
