@extends('layouts.app')

@section('title', 'Banco de Alimentos - Nuestro Impacto')

@section('content')

<div class="bg-gradient-to-br from-pink-50 via-white to-cyan-50 min-h-full">
    <main class="max-w-6xl mx-auto px-6 py-16 w-full">

        <section class="text-center max-w-2xl mx-auto mb-12">
            <h1 class="text-3xl md:text-5xl font-bold text-slate-800 mb-4">
                Resultados y Estadísticas
            </h1>
            <p class="text-gray-500 text-sm md:text-base leading-relaxed">
                Estos números reflejan el esfuerzo de voluntarios, donantes
                y aliados trabajando por una misma causa.
            </p>
        </section>

        {{-- Cifras principales --}}
        <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-16">
            <div class="bg-white rounded-lg shadow-sm p-8 text-center">
                <div class="text-5xl mb-4">🍎</div>
                <p class="text-3xl font-bold text-slate-800">120,000</p>
                <p class="text-sm text-gray-500 mt-2">Kilos de alimento rescatados</p>
            </div>

            <div class="bg-white rounded-lg shadow-sm p-8 text-center">
                <div class="text-5xl mb-4">👨‍👩‍👧</div>
                <p class="text-3xl font-bold text-slate-800">8,500</p>
                <p class="text-sm text-gray-500 mt-2">Familias beneficiadas</p>
            </div>

            <div class="bg-white rounded-lg shadow-sm p-8 text-center">
                <div class="text-5xl mb-4">🍽️</div>
                <p class="text-3xl font-bold text-slate-800">45</p>
                <p class="text-sm text-gray-500 mt-2">Comedores atendidos</p>
            </div>

            <div class="bg-white rounded-lg shadow-sm p-8 text-center">
                <div class="text-5xl mb-4">🤝</div>
                <p class="text-3xl font-bold text-slate-800">300+</p>
                <p class="text-sm text-gray-500 mt-2">Voluntarios activos</p>
            </div>
        </section>

        {{-- Avance por año --}}
        <section class="bg-white rounded-lg shadow-sm p-8 mb-16">
            <h2 class="text-xl font-bold text-slate-800 mb-6">Kilos rescatados por año</h2>

            @php
                $anios = [
                    '2023' => 35,
                    '2024' => 62,
                    '2025' => 85,
                    '2026' => 100,
                ];
            @endphp

            <div class="space-y-4">
                @foreach ($anios as $anio => $porcentaje)
                    <div>
                        <div class="flex justify-between text-sm text-gray-500 mb-1">
                            <span>{{ $anio }}</span>
                            <span>{{ $porcentaje }}%</span>
                        </div>
                        <div class="w-full bg-slate-100 rounded-full h-3">
                            <div class="bg-blue-600 h-3 rounded-full" style="width: {{ $porcentaje }}%"></div>
                        </div>
                    </div>
                @endforeach
            </div>
            <p class="text-xs text-gray-400 mt-4">Porcentaje relativo al año con mayor rescate.</p>
        </section>

        {{-- Cierre --}}
        <section class="bg-slate-800 text-white rounded-lg p-10 text-center">
            <h2 class="text-2xl font-bold mb-3">Tú también puedes sumar</h2>
            <p class="text-sm text-slate-300 mb-6 max-w-xl mx-auto">
                Dona, colabora como empresa o únete como voluntario para
                que estas cifras sigan creciendo.
            </p>
            <a href="{{ url('/como-donar') }}"
               class="inline-block bg-white text-slate-800 hover:bg-gray-100 font-medium px-6 py-2 text-sm rounded transition">
                Cómo donar
            </a>
        </section>

    </main>
</div>

@endsection