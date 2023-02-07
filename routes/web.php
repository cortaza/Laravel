<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

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

Route::get('/', function () {return view('index');});


Route::get('/forms/', [FormController::class,'form'])->name('form');
Route::get('/forms/edit', [FormController::class,'edit'])->name('edit');
Route::get('/forms/create', [FormController::class,'create'])->name('create');

//DELETE
Route::get('forms/delete/{game_id}', [GameController::class,'delete'])->name('deleteprogram');

