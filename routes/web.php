<?php
namespace App\Http\Controllers;



use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/movies', [HomeController::class, 'singleMovie'])->name('single.movie');

Route::get('/tvseries', [HomeController::class, 'singletvseries'])->name('single.tvseries');
Route::get('/animes', [HomeController::class, 'singleAnime'])->name('single.anime');




