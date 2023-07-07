<?php

use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Livewire\Authorization\AssignRoles;
use App\Http\Livewire\Authorization\CreateRole;
use App\Http\Livewire\Authorization\EditRole;
use App\Http\Livewire\Authorization\RoleTable;
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
        Route::get('/', UsersTable::class)->name('users.table');
        Route::get('/create', [UserController::class, 'create'])->name('users.create');
        Route::post('/', [UserController::class, 'store'])->name('users.store');
        Route::get('/{user}', UsersData::class)->name('users.data');
        Route::put('/{user}', [UserController::class, 'update'])->name('users.update');
    });

    Route::prefix('authorization')->group(function () {
        Route::prefix('roles')->group(function () {
            Route::get('/', RoleTable::class)->can('see-role')->name('authorization.roles');
            Route::get('/create', CreateRole::class)->can('store-role')->name('authorization.roles.create');
            Route::post('/{id}', [RoleController::class, 'store'])->can('store-role')->name('authorization.roles.store');
            Route::get('/edit/{id}', EditRole::class)->can('update-role')->name('authorization.roles.edit');
            Route::put('/{id}', [RoleController::class, 'update'])->can('update-role')->name('authorization.roles.update');
            Route::get('/assign-roles', AssignRoles::class)->can('assign-role')->name('authorization.assign-roles');
            Route::delete('/{id}', [RoleController::class, 'destroy'])->can('destroy-role')->name('authorization.roles.destroy');
        });
    });
});

Route::get('locale/{lang}', LocalizationController::class);
