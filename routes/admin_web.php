<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
});

Route::view('login', 'doorsmeer.authentication.login_one')->name('login');
Route::prefix('dashboard')->group(function () {
	Route::view('dashboard', 'doorsmeer.dashboard')->name('dashboard-02');
});
