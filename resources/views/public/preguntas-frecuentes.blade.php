@extends('layouts.app')

@section('title', 'Banco de Alimentos - Preguntas Frecuentes')

@section('content')

<div class="bg-gradient-to-br from-pink-50 via-white to-cyan-50 min-h-full">
    <main class="max-w-4xl mx-auto px-6 py-16 w-full">

        <!-- Título centrado -->
        <section class="text-center max-w-2xl mx-auto mb-12">
            <h1 class="text-3xl md:text-5xl font-bold text-slate-800 mb-4">
                Preguntas Frecuentes
            </h1>
            <p class="text-gray-500 text-sm md:text-base leading-relaxed">
                Resolvemos las dudas más comunes sobre cómo recibir ayuda,
                donar o unirte como voluntario.
            </p>
        </section>

        <!-- Acordeón interactivo adaptado -->
        <section class="space-y-4">

            <!-- Pregunta 1 -->
            <div class="bg-white rounded-lg shadow-sm p-6">
                <div id="pregunta1" class="flex items-center justify-between cursor-pointer font-semibold text-slate-800">
                    <span>🍎 ¿Quién puede recibir alimentos?</span>
                    <span class="text-blue-600">▾</span>
                </div>
                <div id="respuesta1" class="hidden mt-4 text-sm text-gray-500 leading-relaxed">
                    Cualquier persona o familia en situación de vulnerabilidad alimentaria.
                    Solo necesitas completar el registro y cumplir con los requisitos básicos
                    que encontrarás en la sección “Solicitar Ayuda”.
                </div>
            </div>

            <!-- Pregunta 2 -->
            <div class="bg-white rounded-lg shadow-sm p-6">
                <div id="pregunta2" class="flex items-center justify-between cursor-pointer font-semibold text-slate-800">
                    <span>🚚 ¿Cómo puedo donar alimentos o recursos?</span>
                    <span class="text-blue-600">▾</span>
                </div>
                <div id="respuesta2" class="hidden mt-4 text-sm text-gray-500 leading-relaxed">
                    Puedes donar alimentos no perecederos, productos frescos o aportaciones económicas.
                    Visita la sección “Cómo Donar” para conocer los puntos de acopio y los horarios.
                </div>
            </div>

            <!-- Pregunta 3 -->
            <div class="bg-white rounded-lg shadow-sm p-6">
                <div id="pregunta3" class="flex items-center justify-between cursor-pointer font-semibold text-slate-800">
                    <span>🤝 ¿Puedo ser voluntario?</span>
                    <span class="text-blue-600">▾</span>
                </div>
                <div id="respuesta3" class="hidden mt-4 text-sm text-gray-500 leading-relaxed">
                    Sí. Buscamos personas para clasificación de alimentos, logística y atención
                    en comedores. Llena el formulario en la sección “Voluntariado”.
                </div>
            </div>

            <!-- Pregunta 4 -->
            <div class="bg-white rounded-lg shadow-sm p-6">
                <div id="pregunta4" class="flex items-center justify-between cursor-pointer font-semibold text-slate-800">
                    <span>🛡️ ¿Cómo garantizan la calidad de los alimentos?</span>
                    <span class="text-blue-600">▾</span>
                </div>
                <div id="respuesta4" class="hidden mt-4 text-sm text-gray-500 leading-relaxed">
                    Todos los alimentos pasan por revisión, almacenamiento controlado y
                    protocolos de higiene antes de ser distribuidos.
                </div>
            </div>

            <!-- Pregunta 5 -->
            <div class="bg-white rounded-lg shadow-sm p-6">
                <div id="pregunta5" class="flex items-center justify-between cursor-pointer font-semibold text-slate-800">
                    <span>🏢 ¿Mi empresa puede ser aliada?</span>
                    <span class="text-blue-600">▾</span>
                </div>
                <div id="respuesta5" class="hidden mt-4 text-sm text-gray-500 leading-relaxed">
                    Claro. Trabajamos con empresas de todos los tamaños. Escríbenos desde la
                    sección “Empresas Aliadas” y te contactaremos.
                </div>
            </div>

        </section>

        <!-- Botón inferior -->
        <section class="text-center mt-12">
            <p class="text-sm text-gray-500 mb-4">¿No encontraste tu respuesta?</p>
            <a href="{{ url('/solicitar-ayuda') }}"
               class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-medium px-6 py-2 text-sm rounded transition">
                Contáctanos
            </a>
        </section>

    </main>
</div>

<!-- Script ejecutable de la Actividad 12 -->
<script src="{{ asset('js/faq.js') }}"></script>
@endsection