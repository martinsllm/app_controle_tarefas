<?php

use App\Mail\TemplateMail;
use Illuminate\Support\Facades\Mail;
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

Auth::routes(['verify' => true]);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('home')
    ->middleware('verified');

Route::get('tarefa/export/{extensao}', [App\Http\Controllers\TarefaController::class, 'export'])->name('tarefa.export');
Route::get('tarefa/export-pdf/', [App\Http\Controllers\TarefaController::class, 'exportPDF'])->name('tarefa.export-pdf');

Route::resource('/tarefa', App\Http\Controllers\TarefaController::class)
    ->middleware('verified');

