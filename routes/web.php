<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\StudioController;
use App\Http\Controllers\DiscografiaController;
use App\Http\Controllers\BookingController;

Route::get('/', function () {
    return view('General.home');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/team', TeamController::class)->name('team');
Route::get('/studios', StudioController::class)->name('studios');
Route::get('/discografia', DiscografiaController::class)->name('discografia');
Route::get('/booking', BookingController::class)->name('booking');

require __DIR__.'/auth.php';
