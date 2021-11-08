<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('login');});
Route::get('/landing', 'App\Http\Controllers\LandingController@inicio');

Route::get('/startsurvey', [\App\Http\Controllers\EncuestaController::class, 'create'])->name('respuestas.create');
Route::post('/startsurvey', [\App\Http\Controllers\EncuestaController::class, 'store'])->name('respuestas.store');


Route::get('/register', 'App\Http\Controllers\RegistrationController@create');
Route::post('register', 'App\Http\Controllers\RegistrationController@store');

Route::get('/login', 'App\Http\Controllers\SessionController@create');
Route::post('/login', 'App\Http\Controllers\SessionController@store');
Route::get('/logout', 'App\Http\Controllers\SessionController@destroy');