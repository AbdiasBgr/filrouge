<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ConsultationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
     return view('home');
})->name('home');

Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');
Route::get('/contact/confirmation', [ContactController::class, 'showConfirmation'])->name('contact.confirmation');

//Consultation
Route::post('/consultation/submit', [ConsultationController::class, 'submit'])->name('consultation.submit');


Route::get('/consultation', function () {
    return view('pages.consultation');
})->name('pages.consultation');

Route::get('/videolfa', function () {
    return view('pages.videolfa');
})->name('videolfa');

Route::get('/videogfp', function () {
    return view('pages.videogfp');
})->name('videogfp');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
