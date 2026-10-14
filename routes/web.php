<?php

use Illuminate\Support\Facades\Route;

// Ruta Principal
Route::view('/', 'dashboard')->name('dashboard');
Route::view('/inventario', 'inventario')->name('inventario');
Route::view('/donaciones/registro', 'registroDonaciones')->name('donaciones.registro');
Route::view('/caducidad', 'caducidad')->name('caducidad');

// Rutas de Oswaldo Maldonado
Route::view('/despachos', 'despachos')->name('despachos');
Route::view('/donantes', 'donantes')->name('donantes');
Route::view('/comedores', 'comedores')->name('comedores');

// Rutas de Fausto (Simplificadas con el mismo estilo)
Route::view('/reportes', 'reportes/reportes')->name('reportes');
Route::view('/almacen', 'almacen/almacen')->name('almacen');
Route::view('/perfil', 'perfil/perfil')->name('perfil');