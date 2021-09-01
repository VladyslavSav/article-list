<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::get('/article/add', [ArticleController::class, 'showAddView']);

Route::post('/article/add', [ArticleController::class, 'create']);

Route::get('/article/all', [ArticleController::class, 'getAll']);

Route::get('/article/{id}/edit', [ArticleController::class, 'showEditView']);

Route::post('/article/{id}/edit', [ArticleController::class, 'editById']);

Route::get('/article/{id}/delete', [ArticleController::class, 'deleteById']);

Route::get('/article/{id}', [ArticleController::class, 'getById']);
