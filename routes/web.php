<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

Route::view('/preguntas-frecuentes', 'preguntas-frecuentes');

Route::view('/empresas-aliadas', 'empresas-aliadas');

Route::view('/calidad-y-seguridad', 'calidad-y-seguridad');

Route::view('/nuestro-impacto', 'nuestro-impacto');