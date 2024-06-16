<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocumentoController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('documentos', DocumentoController::class);
Route::get('/tabla', [DocumentoController::class, 'index'])->name('tabla');

Route::get('/', [DocumentoController::class, 'showAdmission'])->name('home');