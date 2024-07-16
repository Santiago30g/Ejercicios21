<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/travelers', [TravelerController::class, 'index'])->name('travelers.index');
Route::get('/travelers/create', [TravelerController::class, 'create'])->name('travelers.create');
Route::post('/travelers', [TravelerController::class, 'store'])->name('travelers.store');
Route::get('/travelers/{traveler}', [TravelerController::class, 'show'])->name('travelers.show');
Route::get('/travelers/{traveler}/edit', [TravelerController::class, 'edit'])->name('travelers.edit');
Route::put('/travelers/{traveler}', [TravelerController::class, 'update'])->name('travelers.update');
Route::delete('/travelers/{traveler}', [TravelerController::class, 'destroy'])->name('travelers.destroy');