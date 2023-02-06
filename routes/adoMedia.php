<?php

use App\Http\Controllers\AdomediaArController;
use App\Http\Controllers\AdomediaController;
use Illuminate\Support\Facades\Route;


Route::get('/',[AdomediaArController::class,'home'])->name('home');
Route::prefix('/en')->name('adomedia.')->group( function (){

    Route::get('/{page}',[AdomediaController::class,'index'])->name('index');
    Route::get('/service/{id}',[AdomediaController::class,'service'])->name('service');
    Route::get('/portfolio/{id}',[AdomediaController::class,'portfolio'])->name('portfolio');
    Route::get('/blog/{id}',[AdomediaController::class,'blog'])->name('blog');
});
Route::prefix('/ar')->name('adomedia.ar.')->group( function (){

    Route::get('/{page}',[AdomediaArController::class,'index'])->name('index');
    Route::get('/service/{id}',[AdomediaArController::class,'service'])->name('service');
    Route::get('/portfolio/{id}',[AdomediaArController::class,'portfolio'])->name('portfolio');
    Route::get('/blog/{id}',[AdomediaArController::class,'blog'])->name('blog');
});

