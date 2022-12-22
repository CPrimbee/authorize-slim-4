<?php

declare(strict_types=1);

use App\Support\Route;

Route::get('/welcome/{name}', 'WelcomeController@index');
Route::get('/welcome/{name}/{id}', 'WelcomeController@show');
