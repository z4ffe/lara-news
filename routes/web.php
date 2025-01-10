<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'mainPage']);

Route::post('/news/create', [NewsController::class, 'createNews'])->name('news.create');
Route::delete('/news/remove/{id}', [NewsController::class, 'removeNews'])->name('news.remove');

Route::get('/contacts', function () {
    return view('pages.contacts');
});

require __DIR__ . '/auth.php';
