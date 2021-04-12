<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParsingController;
use App\Http\Controllers\SpiderController;
use App\Http\Controllers\ArticleController;

Route::get('/', [ParsingController::class, 'index']);
Route::get('parse_resources', [SpiderController::class, 'parse_resources'])->name('parse_resources');
Route::get('/articles/{id}', [ArticleController::class, 'get_article'])->name('article');

Route::post('parsing_resource', [ParsingController::class, 'create'])->name('create_resource');
Route::get('read_resource/{id}', [ParsingController::class, 'read'])->name('read_resource');
Route::put('update_resource/{id}', [ParsingController::class, 'update'])->name('update_resource');
Route::delete('delete_resource/{id}', [ParsingController::class, 'delete'])->name('delete_resource');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
