@extends('layouts.app')

@section('title', 'Reportes | Banco de Alimentos')

@section('content')
@php
    // Datos de ejemplo (sustituir por datos reales del controlador)
    $meses = ['ENERO','FEBRERO','MARZO','ABRIL','MAYO','JUNIO','JULIO','AGOSTO','SEPTIEMBRE','OCTUBRE','NOVIEMBRE','DICIEMBRE'];
    $valores = [80, 100, 50, 120, 70, 68, 110, 45, 95, 78, 115, 150];
    $maxEje = 200;
    $entradas = 54.5;
    $salidas = 45.5;
@endphp

<section class="w-full max-w-[1150px]">

    <!-- Barra superior -->
    <form class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10 print:hidden" onsubmit="return false">
        <div class="bg-pill rounded-full px-8 py-4 flex items-center justify-center gap-3 font-bold text-lg sm:text-xl">
            <label for="filtro">FILTRO:</label>
            <span>[</span>
            <select id="filtro" class="bg-transparent font-bold outline-none cursor-pointer uppercase">
                <option>Ultimo mes</option>
                <option>Ultimos 3 meses</option>
                <option>Ultimo año</option>
            </select>
            <span>]</span>
        </div>
        <button type="button" onclick="window.print()"
                class="bg-pill hover:bg-[#b8c2cd] rounded-full px-8 py-4 font-bold text-lg sm:text-xl transition">
            [ BOTON: EXPORTAR A PDF ]
        </button>
    </form>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">

        <!-- Gráfica de barras -->
        <div>
            <div class="flex items-center gap-2 justify-center text-xs mb-4">
                <span class="w-3 h-3 rounded-full bg-[#4c7ff7]"></span> CANTIDAD DISTRIBUIDAD
            </div>

            <div class="flex gap-3">
                <!-- Eje Y -->
                <div class="flex flex-col-reverse justify-between h-[260px] text-xs text-right pr-1" aria-hidden="true">
                    @foreach ([0, 50, 100, 150, 200] as $t)
                        <span class="leading-none">{{ $t }}</span>
                    @endforeach
                </div>

                <!-- Barras -->
                <div class="flex-1">
                    <div class="relative h-[260px] border-b border-slate-300">
                        @foreach ([0, 25, 50, 75] as $g)
                            <div class="absolute left-0 right-0 border-t border-slate-300" style="bottom: {{ $g + 25 > 100 ? 100 : $g + 25 }}%"></div>
                        @endforeach

                        <div class="absolute inset-0 flex items-end gap-1.5">
                            @foreach ($meses as $i => $mes)
                                <div class="flex-1 bg-[#4c7ff7] rounded-t-md hover:bg-[#3a68d8] transition"
                                     style="height: {{ $valores[$i] / $maxEje * 100 }}%"
                                     title="{{ $mes }}: {{ $valores[$i] }}"></div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Etiquetas de meses -->
                    <div class="flex gap-1.5 mt-2">
                        @foreach ($meses as $mes)
                            <div class="flex-1 relative h-14">
                                <span class="absolute right-1/2 top-0 origin-top-right -rotate-45 text-[10px] whitespace-nowrap translate-x-1/2">{{ $mes }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- Gráfica circular -->
        <aside class="flex justify-center" aria-label="Entradas contra salidas">
            <div class="relative w-[260px] h-[260px] sm:w-[330px] sm:h-[330px]">
                <div class="w-full h-full rounded-full" role="img" aria-label="Entradas {{ $entradas }}%, Salidas {{ $salidas }}%"
                     style="background: conic-gradient(#4c7ff7 0 {{ $entradas }}%, #b08df7 {{ $entradas }}% 100%)"></div>
                <span class="absolute -right-14 top-1/2 text-xs text-center">ENTRADAS<br>{{ $entradas }}%</span>
                <span class="absolute -left-12 top-[40%] text-xs text-center">SALIDAS<br>{{ $salidas }}%</span>
            </div>
        </aside>
    </div>
</section>
@endsection