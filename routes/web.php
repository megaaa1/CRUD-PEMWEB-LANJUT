<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BukuController;

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/books', function () {
//     return'Daftar buku';
// });

// route::get('/books', [BookController::class,'index']);
Route::resource('books', BukuController::class);
