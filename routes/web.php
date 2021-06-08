<?php

use App\Http\Controllers\QueryController;
use App\Http\Controllers\ToolController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ToolController::class, 'index'])->name('index');
Route::get('/documentation', [ToolController::class, 'docIndex'])->name('doc.index');

Route::get('/queries', [QueryController::class, 'getQueries']);
Route::get('/query/simple/{query}', [ToolController::class, 'query']);
Route::get('/query/advanced', [ToolController::class, 'advancedQuery']);

Route::get('/param/ibc', [ToolController::class, 'ibcParams']);
Route::get('/param/vdc', [ToolController::class, 'vdcParams']);
