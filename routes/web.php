<?php

use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\UserController;
use App\Http\Livewire\Authorization\Permissions as AuthorizationPermissions;
use App\Http\Livewire\Authorization\Roles as AuthorizationRoles;
use App\Http\Livewire\Users\UsersData;
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

Route::view('/home', 'home')->name('home');

Route::middleware('auth')->group(function () {
    Route::view('/dashboard', 'dashboard')->name('dashboard');

    Route::prefix('users')->middleware('role:admin|super-admin|receptor')->group(function () {
        Route::get('/', UsersTable::class)->can('see-users')->name('users.table');
        Route::get('/create', [UserController::class, 'create'])->name('users.create');
        Route::post('/', [UserController::class, 'store'])->can('create-users')->name('users.store');
        Route::get('/{user}', UsersData::class)->name('users.data');
        Route::put('/{user}', [UserController::class, 'update'])->can('users-update')->name('users.update');
    });

    Route::prefix('authorization')->middleware('role:admin|super-admin')->group(function () {
        Route::get('/roles', AuthorizationRoles::class)->name('authorization.roles');
        Route::get('/permissions', AuthorizationPermissions::class)->name('authorization.permissions');
    });
});

Route::get('locale/{lang}', LocalizationController::class);
