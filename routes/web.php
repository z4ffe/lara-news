<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\NewsController;

Route::get('/', [MainController::class, 'mainPage'])->name('name.main');

Route::get('/news', function () {
    return view('pages.news');
});

Route::post('/news/create', [NewsController::class, 'createNews'])->name('news.create');
Route::delete('/news/remove/{id}', [NewsController::class, 'removeNews'])->name('news.remove');

Route::get('/contacts', function () {
    return view('pages.contacts');
});
