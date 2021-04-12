<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParsingController;
use App\Http\Controllers\SpiderController;
use App\Http\Controllers\ArticleController;

Route::get('/', [ParsingController::class, 'index']);
Route::post('create_parsing_resource', [ParsingController::class, 'create_parsing_resource'])->name('create_parsing_resource');
Route::get('parse_resources', [SpiderController::class, 'parse_resources'])->name('parse_resources');
Route::get('/articles/{id}', [ArticleController::class, 'get_article'])->name('article');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
