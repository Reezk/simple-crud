<?php

use App\Http\Controllers\ComputerController;
use App\Http\Controllers\StaticController;
use Illuminate\Support\Facades\Route;
use Whoops\Run;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [StaticController::class, 'index'])->name('home.index');
Route::get('/about', [StaticController::class, 'about'])->name('home.about');
Route::get('/contact', [StaticController::class, 'contact'])->name('home.contact');
Route::resource('computers', ComputerController::class);
