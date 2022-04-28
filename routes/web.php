<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $books = config('comics');
    $arrSectionBlu =  config('myArr.sectionBlu');

    $data = [
        'books' => $books,
        'arrSectionBlu' => $arrSectionBlu
    ];
    return view('home', $data);
})->name('home');

Route::get('/comics', function () {
    $books = config('comics');
    $arrSectionBlu =  config('myArr.sectionBlu');

    $data = [
        'books' => $books,
        'arrSectionBlu' => $arrSectionBlu
    ];
    return view('comics', $data);
})->name('comics');

Route::get('/characters', function () {
    $books = config('comics');
    $arrSectionBlu =  config('myArr.sectionBlu');

    $data = [
        'books' => $books,
        'arrSectionBlu' => $arrSectionBlu
    ];
    return view('characters', $data);
})->name('characters');

Route::get('/movies', function () {
    $books = config('comics');
    $arrSectionBlu =  config('myArr.sectionBlu');

    $data = [
        'books' => $books,
        'arrSectionBlu' => $arrSectionBlu
    ];
    return view('movies', $data);
})->name('movies');

Route::get('/tv', function () {
    $books = config('comics');
    $arrSectionBlu =  config('myArr.sectionBlu');

    $data = [
        'books' => $books,
        'arrSectionBlu' => $arrSectionBlu
    ];
    return view('tv', $data);
})->name('tv');

Route::get('/games', function () {
    $books = config('comics');
    $arrSectionBlu =  config('myArr.sectionBlu');

    $data = [
        'books' => $books,
        'arrSectionBlu' => $arrSectionBlu
    ];
    return view('games', $data);
})->name('games');

Route::get('/collectibles', function () {
    $books = config('comics');
    $arrSectionBlu =  config('myArr.sectionBlu');

    $data = [
        'books' => $books,
        'arrSectionBlu' => $arrSectionBlu
    ];
    return view('collectibles', $data);
})->name('collectibles');


Route::get('/single_comics', function () {
    $books = config('comics');
    $arrSectionBlu =  config('myArr.sectionBlu');

    $data = [
        'books' => $books,
        'arrSectionBlu' => $arrSectionBlu
    ];
    return view('single_comics', $data);
})->name('single_comics');
