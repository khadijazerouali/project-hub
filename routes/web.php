<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('index'); 
})->name('index');

Route::get('/mon-compte', function () {
    return view('mon_compte');
})->name('mon_compte');

Route::get('/Renouvelement', function () {
    return view('Renouvelement');
})->name('Renouvelement');

Route::get('/Renouvelment2', function () {
    return view('Renouvelment2');
})->name('Renouvelment2');

Route::get('/renouvelement3', function () {
    return view('renouvelement3');
})->name('renouvelement3');

Route::get('/contacter_nous', function () {
    return view('contacter_nous');
})->name('contacter_nous');

Route::get('/tutoriels', function () {
    return view('tutoriels');
})->name('tutoriels');

Route::get('/test_ipvt', function () {
    return view('test_ipvt');
})->name('test_ipvt');

Route::get('/chaines_vods', function () {
    return view('chaines_vods');
})->name('chaines_vods');

Route::get('/toturielSection', function () { 
    return view('toturielSection');
})->name('toturielSection');

Route::post('/login', [AuthController::class, 'loginSubmit'])->name('login.submit');
Route::post('/register', [AuthController::class, 'registerSubmit'])->name('register.submit');
Route::get('/dashboard', [AuthController::class, 'dashboard'])->middleware('auth')->name('dashboard');


