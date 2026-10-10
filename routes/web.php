<?php

use Illuminate\Support\Facades\Route;

// Ruta Principal
Route::view('/', 'Home')->name('dashboard');

Route::view('/nosotros', 'Nosotros');
Route::view('/servicios', 'Servicios');

Route::view('/detalle/servicio/1', 'DetalleServicio1');
Route::view('/detalle/servicio/2', 'DetalleServicio2');
Route::view('/detalle/servicio/3', 'DetalleServicio3');

// Rutas de Oswaldo Maldonado
Route::view('/despachos', 'despachos')->name('despachos');
Route::view('/donantes', 'donantes')->name('donantes');
Route::view('/comedores', 'comedores')->name('comedores');

// Rutas de Fausto (Simplificadas con el mismo estilo)
Route::view('/reportes', 'reportes.index')->name('reportes');
Route::view('/almacen', 'almacen.index')->name('almacen');
Route::view('/perfil', 'perfil.index')->name('perfil');