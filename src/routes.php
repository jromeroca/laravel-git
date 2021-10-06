<?php

use Illuminate\Support\Facades\Route;

Route::get('laravel-git/main', 'Jromero\LaravelGit\Controllers\MainController@index');
Route::get('laravel-git/set-branch/{branch}', 'Jromero\LaravelGit\Controllers\MainController@setBranch');
