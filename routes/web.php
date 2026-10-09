<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'dashboard')->name('dashboard');

Route::view('/inventario', 'inventario')->name('inventario.index');
Route::view('/inventario/vencimientos', 'vencimientos')->name('vencimientos.index');
Route::view('/almacen', 'almacen')->name('almacen.index');

Route::view('/donaciones/nueva', 'donaciones')->name('donaciones.create');
Route::view('/donantes', 'donantes')->name('donantes.index');

Route::view('/despachos', 'despachos')->name('despachos.index');
Route::view('/comedores', 'comedores')->name('comedores.index');
Route::view('/reportes', 'reportes')->name('reportes.index');

Route::view('/perfil', 'perfil')->name('perfil.edit');