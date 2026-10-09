@extends('layouts.app')

@section('title', 'Almacén central | Banco de Alimentos')

@section('content')
@php
    // Datos de ejemplo (sustituir por datos reales del controlador)
    $zonas = [
        ['ZONA SECA (ABARROTES / GRANOS)',   65],
        ['CAMARA FRIA 1 (LACTEOS / CARNES)', 85],
        ['CAMARA FRIA 2 (FRUTAS / VERDURAS)', 40],
    ];
    $areaEmpaque = 'EN OPERACION'; // LIBRE | EN OPERACION
@endphp

<section class="w-full max-w-[1000px]">

    <div class="flex justify-center mb-12">
        <h1 class="bg-pill text-black font-bold text-lg sm:text-xl px-10 py-3 rounded-full text-center">
            [ DISTRIBUCION FISICA DEL ALMACEN CENTRAL ]
        </h1>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 sm:gap-10">

        @foreach ($zonas as [$nombre, $pct])
            @php
                $color = $pct >= 80 ? 'bg-red-500' : ($pct >= 60 ? 'bg-amber-400' : 'bg-green-500');
            @endphp
            <article class="bg-gradient-to-r from-[#fff3a8] via-[#ffd5d5] to-[#ffadf7] rounded-[2rem] px-8 py-10 text-center min-h-[170px] flex flex-col justify-center">
                <h2 class="font-bold text-sm sm:text-base">{{ $nombre }}</h2>
                <p class="font-bold text-sm sm:text-base mb-3">CAPACIDAD: {{ $pct }}%</p>
                <div class="w-full h-3 bg-white/70 rounded-full overflow-hidden" role="progressbar"
                     aria-valuenow="{{ $pct }}" aria-valuemin="0" aria-valuemax="100">
                    <div class="h-full {{ $color }} rounded-full" style="width: {{ $pct }}%"></div>
                </div>
            </article>
        @endforeach

        <article class="bg-gradient-to-r from-[#fff3a8] via-[#ffd5d5] to-[#ffadf7] rounded-[2rem] px-8 py-10 text-center min-h-[170px] flex flex-col justify-center">
            <h2 class="font-bold text-sm sm:text-base">AREA DE EMPAQUE Y RECEPCION</h2>
            <p class="font-bold text-sm sm:text-base">
                ESTADO:
                <span class="{{ $areaEmpaque === 'LIBRE' ? 'text-green-700' : 'text-brand' }}">{{ $areaEmpaque }}</span>
            </p>
        </article>
    </div>
</section>
@endsection