<?php

use App\Http\Controllers\MessageController;
use App\Http\Controllers\PortfolioController;

//Route::get('/', function () {
//    return view('home')->with('nombre', 'Brais')
//    ->with('page', 'home'); // Añade el nombre de la página 'home'
//});
Route::get('/', function () {
    return view('home', ['nombre' => 'braisdp6']);
})->name('home');

Route::view('about', 'about')->name('about');

Route::get('portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');
Route::get('portfolio/{id}', [PortfolioController::class, 'show'])->name('portfolio.show');

Route::view('contact', 'contact')->name('contact');
Route::post('contact', [MessageController::class, 'store'] );

//Route::resource('projects', PortfolioController::class)->only(['index']); // note: recibe un array por parametro // elegimos cuales de los metodos de PortfolioController queremos que estén como rutas

