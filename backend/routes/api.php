<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/users', function () {
    return response()->json([
        ['id' => 1, 'name' => 'Hansel'],
        ['id' => 2, 'name' => 'Ritzlyn']
    ]);
});