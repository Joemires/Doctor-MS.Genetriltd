<?php

use App\Http\Controllers\{OverviewController, DoctorController, PatientController};
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
})->middleware(['auth'])->name('dashboard');


Route::prefix('backend')->as('backend.')->group(function () {
    Route::get('overview', [OverviewController::class, 'index'])->name('overview');

    Route::resource('doctors', DoctorController::class);
    Route::resource('patients', PatientController::class);
});

require __DIR__.'/auth.php';
