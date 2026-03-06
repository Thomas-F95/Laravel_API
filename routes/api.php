<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/tutti-i-prodotti', [ProductController::class, 'product']);
Route::get('/tutti-i-prodotti/{id}', [ProductController::class, 'product_id']);
