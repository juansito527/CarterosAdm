<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;

Route::get("",[HomeController::class, 'index'])->name('adminp'); //esta ruta tiene el controlador home con la funcion index
Route::get("domicilioHistorial",[HomeController::class,'domiciliohistorial'])->name("domiciliohistori");
Route::get("paqueteria",[HomeController::class,'paqueteria'])->name("paqueteriavista");
Route::get("paqueteriaHistorial",[HomeController::class,'paqueteriahistorial'])->name("paqueteriahistori");
Route::get("carteros",[HomeController::class,'carterosvista'])->name("carteross");
Route::get("solicitudes",[HomeController::class,'carterosSolicitudvista'])->name("solicitudes");
Route::get("Balance",[HomeController::class,'balancevista'])->name("Balance");
