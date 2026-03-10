<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/a-propos', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/blog', [PageController::class, 'blog'])->name('blog.index');
Route::get('/blog/{id}', [PageController::class, 'showArticle'])->name('blog.show');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
