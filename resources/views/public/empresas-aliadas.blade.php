@extends('layouts.app')

@section('title', 'Banco de Alimentos - Empresas Aliadas')

@section('content')

<div class="bg-gradient-to-br from-pink-50 via-white to-cyan-50 min-h-full">
    <main class="max-w-6xl mx-auto px-6 py-16 w-full">

        <section class="text-center max-w-2xl mx-auto mb-12">
            <h1 class="text-3xl md:text-5xl font-bold text-slate-800 mb-4">
                Empresas Aliadas
            </h1>
            <p class="text-gray-500 text-sm md:text-base leading-relaxed">
                Gracias a las empresas que se suman a nuestra causa, miles de
                alimentos llegan a quienes más los necesitan.
            </p>
        </section>

        {{-- Beneficios --}}
        <section class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-16">
            <div class="bg-white rounded-lg shadow-sm p-8 text-center">
                <div class="text-5xl mb-4">🌱</div>
                <h3 class="text-lg font-bold text-slate-800 mb-2">Reduce el desperdicio</h3>
                <p class="text-sm text-gray-500 leading-relaxed">
                    Recuperamos excedentes comestibles para darles un segundo uso.
                </p>
            </div>

            <div class="bg-white rounded-lg shadow-sm p-8 text-center">
                <div class="text-5xl mb-4">📄</div>
                <h3 class="text-lg font-bold text-slate-800 mb-2">Comprobante de donación</h3>
                <p class="text-sm text-gray-500 leading-relaxed">
                    Emitimos documentación para tus registros y beneficios fiscales.
                </p>
            </div>

            <div class="bg-white rounded-lg shadow-sm p-8 text-center">
                <div class="text-5xl mb-4">📈</div>
                <h3 class="text-lg font-bold text-slate-800 mb-2">Impacto medible</h3>
                <p class="text-sm text-gray-500 leading-relaxed">
                    Te compartimos reportes de cuánto lograste con tu aportación.
                </p>
            </div>
        </section>

        {{-- Nuestros aliados --}}
        <section class="mb-16">
            <h2 class="text-2xl font-bold text-slate-800 text-center mb-8">
                Nuestros aliados
            </h2>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                @foreach (['Supermercados del Valle', 'Panadería La Espiga', 'Distribuidora Fresca', 'Granja Los Pinos', 'Frutas del Campo', 'Lácteos Selecta', 'Abarrotes Central', 'Cadena Aurora'] as $aliado)
                    <div class="bg-white rounded-lg shadow-sm p-6 flex flex-col items-center justify-center text-center h-36">
                        <div class="w-12 h-12 rounded-full bg-slate-100 flex items-center justify-center text-xl mb-3">🏢</div>
                        <span class="text-sm font-medium text-slate-700">{{ $aliado }}</span>
                    </div>
                @endforeach
            </div>
        </section>

        {{-- Llamado a la acción --}}
        <section class="bg-slate-800 text-white rounded-lg p-10 text-center">
            <h2 class="text-2xl font-bold mb-3">¿Quieres que tu empresa sea aliada?</h2>
            <p class="text-sm text-slate-300 mb-6 max-w-xl mx-auto">
                Escríbenos y juntos diseñaremos la mejor forma de colaborar.
            </p>
            <a href="{{ url('/contacto') }}"
               class="inline-block bg-white text-slate-800 hover:bg-gray-100 font-medium px-6 py-2 text-sm rounded transition">
                Quiero ser aliado
            </a>
        </section>

    </main>
</div>

@endsection