<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;

Route::get('/', function () {
    return redirect('/usuarios');
});

Route::resource('/usuarios', UsuariosController::class);

