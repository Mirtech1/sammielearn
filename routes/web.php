<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/task/add', [FrontendController::class, 'addTask'])->name('task.add');
Route::get('/task/list', [FrontendController::class, 'listTasks'])->name('task.list');
