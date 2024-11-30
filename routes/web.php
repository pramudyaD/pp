<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halaman', function(){
 return view ('halaman');
})->name('halaman');

Route::get('/tabel', function(){
    return view ('tabel');
   })->name('tabel');

Route::get('/dashboard', function (){
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

    
Route::get('/berajah', function (){
    return view('berajah');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
