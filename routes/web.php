<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('welcome', [
        'name'    => 'Alya',
        'courses' => ['HTML', 'CSS', 'PHP', 'Laravel'],
    ]);
});

Route::get('/about', [PageController::class, 'about']);
Route::get('/contact', [PageController::class, 'contact']);

Route::get('/hello/{nama}', function ($nama) {
    return view('hello', ['nama' => $nama]);
});