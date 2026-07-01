<?php

use App\Support\Route;
use App\Http\Middleware\RedirectIfGuestMiddleware as RedirectIfGuest;
use App\Http\Middleware\RedirectIfAuthenticatedMiddleware as RedirectIfAuthenticated;

Route::get('/logout', 'LoginController@logout')->add(RedirectIfGuest::class);
Route::get('/login', 'LoginController@show')->add(RedirectIfAuthenticated::class);
Route::post('/login', 'LoginController@store')->add(RedirectIfAuthenticated::class);

Route::get('/crud', 'CrudController@show');//->add(RedirectIfGuest::class);
Route::post('/crud', 'CrudController@store');//->add(RedirectIfGuest::class);