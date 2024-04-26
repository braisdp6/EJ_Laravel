<?php

use App\Http\Controllers\MessageController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home')->with('nombre', 'Brais');
});

Route::view('about', 'about')->name('about');

Route::view('contact', 'contact')->name('contact');
Route::post('contact', [MessageController::class, 'store'] );

Route::get('portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');
Route::get('portfolio/{id}', [PortfolioController::class, 'show'])->name('portfolio.show');

//Route::resource('projects', PortfolioController::class)->only(['index']); // note: recibe un array por parametro // elegimos cuales de los metodos de PortfolioController queremos que estén como rutas

