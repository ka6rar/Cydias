<?php

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


Route::get('/', [App\Http\Controllers\ToolsController::class, 'index'])->name('welcome');
// Route::get('/', [App\Http\Controllers\ToolsController::class, 'create'])->name('welcome');

Auth::routes();

Route::get('tools/create', [App\Http\Controllers\ToolsController::class, 'create'])->name('create');
Route::post('tools/store', [App\Http\Controllers\ToolsController::class, 'store'])->name('store');
