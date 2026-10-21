@extends('layouts.app')

@section('title', 'Banco de Alimentos - Calidad y Seguridad')

@section('content')

<div class="bg-gradient-to-br from-pink-50 via-white to-cyan-50 min-h-full">
    <main class="max-w-6xl mx-auto px-6 py-16 w-full">

        <section class="text-center max-w-2xl mx-auto mb-12">
            <h1 class="text-3xl md:text-5xl font-bold text-slate-800 mb-4">
                Manejo Seguro de Alimentos
            </h1>
            <p class="text-gray-500 text-sm md:text-base leading-relaxed">
                Cada alimento que recibimos pasa por un proceso cuidadoso para
                garantizar que llegue en perfectas condiciones.
            </p>
        </section>

        {{-- Proceso --}}
        <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-16">
            <div class="bg-white rounded-lg shadow-sm p-8 text-center">
                <div class="text-5xl mb-4">🔍</div>
                <h3 class="text-lg font-bold text-slate-800 mb-2">1. Inspección</h3>
                <p class="text-sm text-gray-500 leading-relaxed">
                    Revisamos fechas de caducidad, empaques y estado general al recibirlos.
                </p>
            </div>

            <div class="bg-white rounded-lg shadow-sm p-8 text-center">
                <div class="text-5xl mb-4">🗂️</div>
                <h3 class="text-lg font-bold text-slate-800 mb-2">2. Clasificación</h3>
                <p class="text-sm text-gray-500 leading-relaxed">
                    Separamos por tipo de producto y nivel de perecibilidad.
                </p>
            </div>

            <div class="bg-white rounded-lg shadow-sm p-8 text-center">
                <div class="text-5xl mb-4">❄️</div>
                <h3 class="text-lg font-bold text-slate-800 mb-2">3. Almacenamiento</h3>
                <p class="text-sm text-gray-500 leading-relaxed">
                    Mantenemos la temperatura adecuada y áreas limpias y ordenadas.
                </p>
            </div>

            <div class="bg-white rounded-lg shadow-sm p-8 text-center">
                <div class="text-5xl mb-4">🚚</div>
                <h3 class="text-lg font-bold text-slate-800 mb-2">4. Distribución</h3>
                <p class="text-sm text-gray-500 leading-relaxed">
                    Transportamos en condiciones seguras hasta cada comedor.
                </p>
            </div>
        </section>

        {{-- Buenas prácticas --}}
        <section class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-16">
            <div class="bg-white rounded-lg shadow-sm p-8">
                <h3 class="text-lg font-bold text-slate-800 mb-4">🧼 Higiene del personal</h3>
                <ul class="space-y-2 text-sm text-gray-500 leading-relaxed list-disc list-inside">
                    <li>Lavado de manos antes y durante la manipulación.</li>
                    <li>Uso de guantes, cubrebocas y cofia.</li>
                    <li>Capacitación continua a voluntarios y personal.</li>
                </ul>
            </div>

            <div class="bg-white rounded-lg shadow-sm p-8">
                <h3 class="text-lg font-bold text-slate-800 mb-4">⚠️ Lo que no aceptamos</h3>
                <ul class="space-y-2 text-sm text-gray-500 leading-relaxed list-disc list-inside">
                    <li>Productos caducados o con empaque dañado.</li>
                    <li>Alimentos sin cadena de frío adecuada.</li>
                    <li>Productos sin etiquetado visible.</li>
                </ul>
            </div>
        </section>

        <section class="text-center">
            <p class="text-sm text-gray-500 mb-4">¿Tienes dudas sobre nuestros procesos?</p>
            <a href="{{ url('/contacto') }}"
               class="inline-block border border-gray-400 text-slate-700 hover:bg-gray-50 font-medium px-6 py-2 text-sm transition">
                Contáctanos
            </a>
        </section>

    </main>
</div>

@endsection