<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QueryController;
use App\Http\Controllers\ProblemController;

Route::get('/', [HomeController::class, 'index'])->name('main.index');

Route::controller(ProblemController::class)->group(function () {
    Route::get('problems/thex', 'thex')
        ->name('problems.thex');
    Route::get('problems/thex/generate', 'thexGenerate')
        ->name('problems.thex.generate');
    Route::get('problems/histogram/generate', 'histogramGenerate')
        ->name('problems.histogram.generate');
    Route::get('problems/histogram', 'histogram')
        ->name('problems.histogram');
    Route::get('problems/matriz/generate', 'matrizGenerate')
        ->name('problems.matriz.generate');
    Route::get('problems/matriz', 'matriz')
        ->name('problems.matriz');
});

Route::controller(QueryController::class)->group(function () {
    Route::get('querys/departments', 'queryDepartments')
        ->name('querys.departments');
    //Route::get();
    //Route::get();
    //Route::get();
});
