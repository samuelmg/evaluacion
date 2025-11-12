<?php

use App\Http\Controllers\AulaController;
use App\Http\Controllers\EdificioController;
use App\Http\Controllers\TareaController;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/bienvenida', function () {
    return view('bienvenida');
})->name('bienvenida');

Route::resource('tarea', TareaController::class);//->middleware('auth');

Route::post('agregar-mobiliario', [AulaController::class, 'agregarMobiliario'])
    ->name('aula.agregar-mobiliario');

Route::resource('aula', AulaController::class)->middleware('auth');
Route::resource('edificio', EdificioController::class)->middleware('auth');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('profile.edit');
    Volt::route('settings/password', 'settings.password')->name('password.edit');
    Volt::route('settings/appearance', 'settings.appearance')->name('appearance.edit');

    Volt::route('settings/two-factor', 'settings.two-factor')
        ->middleware(
            when(
                Features::canManageTwoFactorAuthentication()
                    && Features::optionEnabled(Features::twoFactorAuthentication(), 'confirmPassword'),
                ['password.confirm'],
                [],
            ),
        )
        ->name('two-factor.show');
});

require __DIR__.'/auth.php';
