<?php

use App\Http\Controllers\MytodoController; 
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('todos/index', [MytodoController::class, 'index'])->name('todos.index');

Route::get('todos/create', [MytodoController::class, 'create'])->name('todos.create');

Route::post('todos/store', [MytodoController::class, 'store'])->name('todos.store');

Route::get('todos/show/{id}', [MytodoController::class, 'show'])->name('todos.show');

