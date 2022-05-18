<?php

use App\Http\Controllers\{DoctorController, PatientController};
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
    Route::get('overview', function () {
        $users =\App\Models\User::with('roles')->get()->groupBy( fn($user) => $user->getRoleNames()->first() ?? 'patient' );
        // dd($users->toArray());
        return view('pages.backend.overview', compact('users'));
    })->name('overview');

    Route::resource('doctors', DoctorController::class);
    Route::resource('patients', PatientController::class);
});

require __DIR__.'/auth.php';
