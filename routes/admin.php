<?php

use App\Http\Controllers\Admin\ProyectoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('admin.dashboard');
})->name('dashboard');

Route::resource('proyectos', ProyectoController::class);