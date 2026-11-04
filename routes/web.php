<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'public.home')->name('home');
Route::view('/nosotros', 'public.nosotros')->name('nosotros');
Route::view('/solicitar-ayuda', 'public.solicitar-ayuda')->name('solicitar.ayuda');
Route::view('/como-donar', 'public.como-donar')->name('donar');
Route::view('/centros-de-ayuda', 'public.centros-de-ayuda')->name('centros');
Route::view('/voluntariado', 'public.voluntariado')->name('voluntariado');
Route::view('/nuestro-impacto', 'public.nuestro-impacto')->name('impacto');
Route::view('/calidad-y-seguridad', 'public.calidad-y-seguridad')->name('calidad');
Route::view('/empresas-aliadas', 'public.empresas-aliadas')->name('aliados');
Route::view('/preguntas-frecuentes', 'public.preguntas-frecuentes')->name('faq');