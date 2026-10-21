@extends('layouts.app')

@section('title', 'Quiénes Somos - Banco de Alimentos')

@section('content')
<!-- Hero Section / Encabezado -->
<section class="py-12 text-center">
    <div class="max-w-6xl mx-auto px-4 py-3">
        <h1 class="text-4xl md:text-6xl font-bold text-green-700 mb-4">Unidos contra el Hambre y el Desperdicio</h1>
        <p class="text-xl text-slate-500 max-w-3xl mx-auto">
            Somos una organización sin fines de lucro dedicada a rescatar alimentos en buen estado para distribuirlos entre familias y comunidades vulnerables.
        </p>
    </div>
</section>

<!-- Historia -->
<section class="py-6">
    <div class="max-w-6xl mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 items-center gap-8">
            <div>
                <h2 class="text-3xl font-bold text-green-700 mb-4">Nuestra Historia</h2>
                <p class="text-slate-500 mb-4">
                    Desde nuestro origen, nos hemos comprometido a luchar activamente contra la inseguridad alimentaria. Trabajamos de la mano con agricultores, supermercados, empresas de la industria alimentaria y voluntarios para evitar el desperdicio de comida que aún es apta para el consumo humano.
                </p>
                <p class="text-slate-500">
                    A través de nuestra red logística, garantizamos que toneladas de alimentos nutritivos lleguen diariamente a comedores comunitarios, hogares de ancianos y familias que más lo necesitan.
                </p>
            </div>
            <div class="text-center">
                <img src="{{ asset('images/voluntarios.jpg') }}" alt="Voluntarios trabajando en el Banco de Alimentos"
                     class="w-full h-auto rounded-3xl shadow-sm">
            </div>
        </div>
    </div>
</section>

<!-- Misión, Visión y Valores -->
<section class="py-12">
    <div class="max-w-6xl mx-auto px-4">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold text-slate-900">Lo que nos Mueve</h2>
            <p class="text-slate-500">Nuestros principios fundamentales y rumbo estratégico</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="h-full bg-white rounded-3xl shadow-sm text-center p-6">
                <div class="text-5xl mb-4">🎯</div>
                <h4 class="text-xl font-bold text-slate-900 mb-3">Misión</h4>
                <p class="text-slate-500">
                    Rescatar alimentos aptos para el consumo, reduciendo el desperdicio y proporcionando asistencia alimentaria digna a personas en situación de vulnerabilidad.
                </p>
            </div>
            <div class="h-full bg-white rounded-3xl shadow-sm text-center p-6">
                <div class="text-5xl mb-4">👁️</div>
                <h4 class="text-xl font-bold text-slate-900 mb-3">Visión</h4>
                <p class="text-slate-500">
                    Ser una comunidad unida y autosostenible donde ningún alimento comestible se desperdicie y ninguna familia sufra por falta de nutrición básica.
                </p>
            </div>
            <div class="h-full bg-white rounded-3xl shadow-sm text-center p-6">
                <div class="text-5xl mb-4">🤝</div>
                <h4 class="text-xl font-bold text-slate-900 mb-3">Valores</h4>
                <p class="text-slate-500">
                    Solidaridad, Transparencia, Compromiso Social, Respeto y Equidad en la distribución justa de recursos.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Llamado a la Acción -->
<section class="py-12 mb-6">
    <div class="max-w-6xl mx-auto px-4">
        <div class="bg-white rounded-3xl shadow-sm p-6 md:p-10 text-center">
            <h2 class="text-3xl font-bold text-slate-900 mb-3">¿Quieres formar parte del cambio?</h2>
            <p class="text-xl text-slate-500 mb-6 max-w-2xl mx-auto">Tu apoyo como voluntario, donante o aliado es fundamental para alimentar a miles de familias.</p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="{{ route('donar') }}"
                   class="inline-block bg-blue-600 hover:bg-blue-700 text-white text-lg font-bold no-underline rounded-full px-8 py-3 transition-colors">Cómo Donar</a>
                <a href="{{ route('voluntariado') }}"
                   class="inline-block border-2 border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white text-lg font-bold no-underline rounded-full px-8 py-3 transition-colors">Únete como Voluntario</a>
            </div>
        </div>
    </div>
</section>
@endsection