<?php

use App\Http\Controllers\MangaController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/genres'); //! Ritorna alla pagina dei generi

Route::get('/genres', [MangaController::class, 'genres'])->name('rotta1');

Route::get('/genres/{id}', [MangaController::class, 'list'])->name('rotta2');



Route::get('/anime/{id}', [MangaController::class, 'show'])->name('rotta3');

