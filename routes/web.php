<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;

Route::resource('/usuarios', UsuariosController::class);

Route::get('/editar/{id}', [UsuariosController::class, 'edit']);
