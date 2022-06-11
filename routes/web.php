<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProblemController;

Route::get('/', [HomeController::class, 'index'])->name('main.index');

Route::get('problems/thex', [ProblemController::class, 'thex'])
    ->name('problems.thex');
Route::get('problems/thex/generate', [ProblemController::class, 'thexGenerate'])
    ->name('problems.thex.generate');
Route::get('problems/histogram/generate', [ProblemController::class, 'histogramGenerate'])
    ->name('problems.histogram.generate');
Route::get('problems/histogram', [ProblemController::class, 'histogram'])
    ->name('problems.histogram');
