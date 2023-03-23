<?php

use App\Http\Controllers\BookController;
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
    return view('welcome');
});


// route index
Route::get('/book', [BookController::class, 'index'])->name('book.index');  //nampilin data buku
// route create
Route::get('/book/create', [BookController::class, 'create'])->name('book.create'); //buat halaman create
Route::post('/book/create', [BookController::class, 'store'])->name('book.store'); //proses membuat data
// route edit
Route::get('/book/edit/{id_buku}', [BookController::class, 'edit'])->name('book.edit'); //buat halaman edit
Route::patch('/book/edit/{id_buku}', [BookController::class, 'update'])->name('book.update'); //proses update
// route delete
Route::get('/book/destroy/{id_buku}', [BookController::class, 'destroy'])->name('book.destroy'); //Proses delete
// route klik detail
Route::get('/book/detail/{id_buku}', [BookController::class, 'detail'])->name('book.detail'); //detail data


