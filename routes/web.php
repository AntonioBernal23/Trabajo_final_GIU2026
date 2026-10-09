<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'Home');

Route::view('/nosotros', 'Nosotros');

Route::view('/servicios', 'Servicios');

Route::view('/detalle/servicio/1', 'DetalleServicio1');
Route::view('/detalle/servicio/2', 'DetalleServicio2');
Route::view('/detalle/servicio/3', 'DetalleServicio3');