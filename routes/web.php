<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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




Route::get('/', [HomeController::class, 'index']);


Route::get('/home', [HomeController::class, 'redirect'])->middleware('auth', 'verified');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



Route::get('/add_doctor_view', [AdminController::class, 'addview']);



Route::post('/upload_doctor', [AdminController::class, 'uploaddoctor']);



Route::post('/rdv', [HomeController::class, 'rdv']);



Route::get('/mesrdv', [HomeController::class, 'mesrdv']);



Route::get('/annuler_rdv/{id}', [HomeController::class, 'annuler_rdv']);



Route::get('/showrdv', [AdminController::class, 'showrdv']);



Route::get('/confirm_rdv/{id}', [AdminController::class, 'confirm_rdv']);



Route::get('/annuler_rdv/{id}', [AdminController::class, 'annuler_rdv']);



Route::get('/showagent', [AdminController::class, 'showagent']);



Route::get('/delete_agent/{id}', [AdminController::class, 'delete_agent']);



Route::get('/update_agent/{id}', [AdminController::class, 'update_agent']);



Route::post('/edit_agent/{id}', [AdminController::class, 'edit_agent']);



Route::get('/notifier_rdv_view/{id}', [AdminController::class, 'notifier_rdv_view']);



Route::post('/notifier_rdv/{id}', [AdminController::class, 'notifier_rdv']);
