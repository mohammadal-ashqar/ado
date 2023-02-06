<?php

use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PollController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::prefix('admin')->middleware(['auth'])->name('admin.')->group(function () {

    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::get('/visits', [AdminController::class, 'visits'])->name('visits');
    Route::get('/profile', [AdminController::class, 'profile'])->name('profile');
    Route::resource('/polls', PollController::class);
    Route::resource('/team', TeamController::class);
    Route::resource('/client', ClientController::class);
    Route::resource('/service', ServiceController::class);
    Route::resource('/package', PackageController::class);
    Route::resource('/project', ProjectController::class);
    Route::resource('/blog', BlogController::class);
    Route::resource('/user', UserController::class);
    Route::resource('/role', RoleController::class);

});
