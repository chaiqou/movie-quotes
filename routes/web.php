<?php

use App\Models\Quote;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\AdminQuoteController;
use App\Http\Middleware\CheckLocale;


    // Log In

    Route::get('login', [SessionController::class, 'create'])->name('login.create');
    Route::post('login', [SessionController::class, 'store'])->name('login.store');;


	Route::group(['middleware' => 'check.locale'], function(){


   // static dashboard

    Route::view('dashboard', 'dashboard')->name('dashboard');



    // admin movies


	Route::get('/movies', [AdminController::class, 'index'])->name('movies');
	Route::get('/movies/create', [AdminController::class, 'create'])->name('movie.create');
	Route::post('/movies', [AdminController::class, 'store'])->name('movie.store');
	Route::delete('/movies/{movie}', [AdminController::class, 'destroy'])->name('movie.destroy');
	Route::patch('/movies/{movie}', [AdminController::class, 'update'])->name('movie.update');
	Route::get('/movies/{movie}/edit', [AdminController::class, 'edit'])->name('movie.edit');




    // admin quotes


	Route::get('/quotes', [AdminQuoteController::class, 'index'])->name('quotes');
	Route::get('/quotes/create', [AdminQuoteController::class, 'create'])->name('quote.create');
	Route::post('/quotes', [AdminQuoteController::class, 'store'])->name('quote.store');
	Route::delete('/quotes/{quote}', [AdminQuoteController::class, 'destroy'])->name('quote.destroy');
	Route::patch('/quotes/{quote}', [AdminQuoteController::class, 'update'])->name('quote.update');
	Route::get('/quotes/{quote}/edit', [AdminQuoteController::class, 'edit'])->name('quote.edit');

    // pages

    Route::get('/', [MovieController::class, 'index'])->name('home');
    Route::get('/{movie}', [QuoteController::class, 'index'])->name('movie');




    });






// set language locale

    Route::get('set-locale/{locale}', function ($locale) {
           session()->put('locale', $locale);
           return redirect()->back();
          })->middleware('check.locale')->name('locale.setting');





