<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RdvController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;

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




Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/home', [AdminController::class, 'redirect'])->middleware('auth', 'verified');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



Route::get('/showuser', [UserController::class, 'showuser'])->name('showuser');

Route::get('/delete_user/{id}', [UserController::class, 'delete_user']);

Route::get('/update_user/{id}', [UserController::class, 'update_user']);







Route::get('/agent/register_view', [AgentController::class, 'agent_register_view'])->name('register_as_agent_view');

Route::post('/agent/register', [AgentController::class, 'agent_register'])->name('agent_register');

Route::get('/add_doctor_view', [AgentController::class, 'add_agent_view'])->name('add_agent_view');

Route::post('/upload_doctor', [AgentController::class, 'upload_doctor'])->name('upload_doctor');

Route::get('/delete_agent/{id}', [AgentController::class, 'delete_agent'])->name('delete_agent');

Route::get('/update_agent/{id}', [AgentController::class, 'update_agent'])->name('update_agent');

Route::post('/edit_agent/{id}', [AgentController::class, 'edit_agent'])->name('edit_agent');

Route::get('/showagent', [AgentController::class, 'show_agent'])->name('show_agent');



Route::get('/showrdv', [RdvController::class, 'show_rdv'])->name('show_rdv');

Route::get('/confirm_rdv/{id}', [RdvController::class, 'confirm_rdv']);

Route::get('/admin/annuler_rdv/{id}', [RdvController::class, 'annuler_rdv']);

Route::get('/notifier_rdv_view/{id}', [RdvController::class, 'notifier_rdv_view']);

Route::post('/notifier_rdv/{id}', [RdvController::class, 'notifier_rdv']);

Route::post('/rdv', [HomeController::class, 'rdv']);

Route::get('/mesrdv', [HomeController::class, 'mesrdv']);

Route::get('/annuler_rdv/{id}', [HomeController::class, 'annuler_rdv']);
