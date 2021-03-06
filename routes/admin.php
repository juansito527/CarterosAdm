<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;

Route::get("",[HomeController::class, 'index'])->name('adminp'); //esta ruta tiene el controlador home con la funcion index


