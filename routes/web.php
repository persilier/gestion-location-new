<?php

use App\Livewire\Admin\Permissions\Permissions;
use App\Livewire\Admin\Roles\Roles;
use App\Livewire\Admin\Users\Users;
use App\Livewire\Profile\Profile;
use App\Livewire\Profile\Settings;
use App\Livewire\Settings\Agence;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/template', function () {
    return view('template');
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('template');
    })->name('dashboard');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', Profile::class)->name('profile');
    Route::get('/user/settings', Settings::class)->name('settings');
});
Route::middleware(['auth', 'verified'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('/roles', Roles::class)->name('roles.index');
    Route::get('/permissions', Permissions::class)->name('permissions.index');
    Route::get('/users', Users::class)->name('users.index');
});


Route::middleware(['auth', 'verified'])->name('manager.')->prefix('manager')->group(function () {
    Route::get('/settings', Agence::class)->name('agence.index');
});
