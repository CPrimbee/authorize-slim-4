<?php

declare(strict_types=1);

use App\Support\Route;
use App\Support\View;

Route::get('/', fn (View $view) => $view('welcome'));
Route::get('/register', fn (View $view) => $view('auth.register'));

Route::get('/welcome/{name}', 'WelcomeController@index');
Route::get('/welcome/{name}/{id}', 'WelcomeController@show');
