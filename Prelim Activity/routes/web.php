<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\TodoController;
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
    return view('home');
});

Route::get('/todos', [MainController::class, 'todolist'])->name('todos.index');
Route::get('/about', [MainController::class, 'about']);
Route::get('/contact', [MainController::class, 'contact']);
Route::get('/todos/create', [MainController::class, 'create'])->name('todos.create');
Route::post('/todos', [MainController::class, 'store'])->name('todos.store');
Route::get('/todos/{todo}/edit', [MainController::class, 'edit'])->name('todo.edit');
Route::put('/todos/{todo}/update', [MainController::class, 'update'])->name('todos.update');
Route::delete('/todos/{todo}/destroy', [MainController::class, 'destroy'])->name('todos.destroy');
