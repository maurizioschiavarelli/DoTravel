<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;

Route::get('/', [PublicController::class,'homepage'])->name('homepage');

Route::get('/create/article',[ArticleController::class,'createArticle'])->name('article.create')->middleware('auth');
