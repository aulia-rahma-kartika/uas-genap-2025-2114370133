<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::get('/', fn() => redirect('/articles'));
Route::resource('articles', ArticleController::class);