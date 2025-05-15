<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\percobaan;

Route::get('/percobaan', [percobaan::class, 'april']);
Route::post('/percobaan', [percobaan::class, 'april']);