<?php

use App\Http\Controllers\ChipController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});