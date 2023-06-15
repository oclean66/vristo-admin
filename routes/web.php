<?php

use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\UserController;
use App\Http\Livewire\Users\UsersTable;
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

Route::get('/', function () {
    return redirect()->route('home');
});

Route::view('/dashboard', 'dashboard')->middleware('auth')->name('dashboard');

Route::view('/home', 'home')->name('home');

Route::get('locale/{lang}', [LocalizationController::class, 'setLang']);

Route::prefix('users')->controller(UserController::class)->group(function () {
    Route::get('/', UsersTable::class)->name('users.index');
});
