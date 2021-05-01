<?php

use App\Http\Controllers\QueryController;
use App\Http\Controllers\ToolController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ToolController::class, 'index'])->name('index');

Route::get('/queries', [QueryController::class, 'getQueries']);
Route::get('/query/simple/{query}', [ToolController::class, 'query']);

Route::get('/query/advanced', [ToolController::class, 'advancedQuery']);
