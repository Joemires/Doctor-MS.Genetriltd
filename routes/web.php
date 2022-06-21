<?php

use App\Http\Controllers\{AccountController, DoctorController, PatientController, AppointmentController};
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
        return view('pages.backend.overview');
    })
    ->middleware(['auth'])
    ->name('dashboard');


Route::prefix('backend')->as('backend.')->group(function () {
    Route::get('overview', [AccountController::class, 'overview'])->name('overview');
    Route::get('profile/{tab?}', [AccountController::class, 'profile'])->name('profile');

    Route::get('profile/{user}/{tab?}', [AccountController::class, 'profile'])->name('user.profile');

    Route::resource('doctors', DoctorController::class);
    Route::resource('patients', PatientController::class);
    Route::resource('appointments', AppointmentController::class);
});

require __DIR__.'/auth.php';
