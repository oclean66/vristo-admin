<?php

use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\UserController;
use App\Http\Livewire\AccountTree;
use App\Http\Livewire\Authorization\Permissions as AuthorizationPermissions;
use App\Http\Livewire\Authorization\Roles as AuthorizationRoles;
use App\Http\Livewire\Dashboard;
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
    Route::get('/dashboard', Dashboard::class)->name('dashboard');

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

    Route::view('/my-red', 'livewire.my-red.my-red-tree')->name('my-red');

    Route::prefix('apps')->group(function () {
        Route::prefix('invoice')->group(function () {
            Route::view('/add', 'apps.invoice.add')->name('apps.invoice.add');
            Route::view('/edit', 'apps.invoice.edit')->name('apps.invoice.edit');
            Route::view('/list', 'apps.invoice.list')->name('apps.invoice.list');
            Route::view('/preview', 'apps.invoice.preview')->name('apps.invoice.preview');
        });
        Route::view('/calendar', 'apps.calendar')->name('apps.calendar');
        Route::view('/chat', 'apps.chat')->name('apps.chat');
        Route::view('/contacts', 'apps.contacts')->name('apps.contacts');
        Route::view('/mailbox', 'apps.mailbox')->name('apps.mailbox');
        Route::view('/notes', 'apps.notes')->name('apps.notes');
        Route::view('/scrumboard', 'apps.scrumboard')->name('apps.scrumboard');
        Route::view('/todolist', 'apps.todolist')->name('apps.todolist');
    });
});

Route::get('locale/{lang}', LocalizationController::class);
