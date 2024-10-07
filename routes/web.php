<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PlaqueController;
use App\Http\Controllers\SearchPlaqueController;
use Illuminate\Support\Facades\Route;

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
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'doregister'])->name('doregister');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'dologin']);
Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');


Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/rechercher', [SearchPlaqueController::class, 'index'])->name('plaque.search');
    Route::get('/rechercher/{slug}--{plaque}', [SearchPlaqueController::class, 'show'])->name('plaque.show')->where([
        'property' => '[0-9]+',
        'slug' => '[0-9a-z\-]+' ]);
    Route::resource('/plaque', PlaqueController::class)->except(['show']);
});
