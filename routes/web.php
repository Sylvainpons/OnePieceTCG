<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/cards', function () {
    $cards = App\Models\Carte::with('rarity')->get();
    return view('cards.index', compact('cards'));
})->name('cards');

Route::get('/cards/{card}', function (App\Models\Carte $card) {
    return view('cards.show', compact('card'));
})->name('cards.show');
