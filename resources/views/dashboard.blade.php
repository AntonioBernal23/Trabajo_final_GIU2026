@extends('layouts.app')

@section('title', 'Inicio | Banco de Alimentos')

@section('content')
@php
    // Datos de ejemplo (sustituir por datos reales del controlador)
    $stats = [
        ['Stock total',               '12,450 Kg'],
        ['Donaciones este mes',       '3,200 Kg'],
        ['Alimentos próximos a vencer', '15 Lotes'],
    ];
    $categorias = [
        ['GRANOS',    34, '#4c7ff7'],
        ['LACTEOS',   14, '#b08df7'],
        ['ENSALADAS', 25, '#f4b96d'],
        ['FRUTAS',    27, '#ffde59'],
    ];
    $acumulado = 0;
    $tramos = [];
    foreach ($categorias as [$n, $p, $c]) {
        $tramos[] = "$c {$acumulado}% " . ($acumulado + $p) . '%';
        $acumulado += $p;
    }
    $gradiente = 'conic-gradient(' . implode(', ', $tramos) . ')';
@endphp

<section class="w-full max-w-[1100px] grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">

    <!-- Indicadores -->
    <div class="space-y-6">
        @foreach ($stats as [$titulo, $valor])
            <div class="flex items-center gap-6 sm:gap-8">
                <div class="w-[160px] shrink-0 bg-pill rounded-[1.75rem] px-4 py-5 text-center font-bold text-base sm:text-lg leading-tight">
                    {{ $titulo }}
                </div>
                <p class="text-brand font-bold text-lg sm:text-xl">{{ $valor }}</p>
            </div>
        @endforeach
    </div>

    <!-- Gráfica circular -->
    <aside class="flex flex-col items-center" aria-label="Stock por categoría">
        <div class="relative w-[260px] h-[260px] sm:w-[320px] sm:h-[320px] my-8">
            <div class="w-full h-full rounded-full" style="background: {{ $gradiente }}" role="img"
                 aria-label="Granos 34%, Frutas 27%, Ensaladas 25%, Lácteos 14%"></div>

            <span class="absolute -right-8 top-[12%] text-xs text-center">GRANOS<br>34%</span>
            <span class="absolute -right-2 -bottom-6 text-xs text-center">LACTEOS<br>14%</span>
            <span class="absolute -left-6 bottom-[8%] text-xs text-center">ENSALADAS<br>25%</span>
            <span class="absolute -left-6 top-[6%] text-xs text-center">FRUTAS<br>27%</span>
        </div>
    </aside>
</section>
@endsection