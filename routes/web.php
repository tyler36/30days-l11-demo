<?php

use App\Http\Controllers\JobController;

Route::view('/', 'home');

Route::resource('jobs', JobController::class);

Route::view('/contact', 'contact');
