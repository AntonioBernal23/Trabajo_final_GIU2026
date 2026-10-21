@extends('layouts.app')

@section('content')

<!-- 1. SECCIÓN HERO (Con botones CTA) -->
<section class="py-12 text-center max-w-6xl mx-auto px-4 w-full">
    <div class="py-4 flex justify-center">
        <div class="w-full max-w-3xl">
            <h1 class="text-5xl md:text-6xl font-bold text-slate-900 mb-4">Banco de Alimentos</h1>
            <p class="text-xl text-slate-500 mb-6">
                Rescatamos alimentos y nos aseguramos de que lleguen a las comunidades que más lo necesitan.
                Trabajamos unidos para combatir el hambre y reducir el desperdicio.
            </p>

            <!-- BOTONES DE ACCIÓN (CTA) -->
            <div class="flex flex-wrap justify-center gap-4 mb-6">
                <a href="{{ route('donar') }}"
                   class="inline-block bg-blue-600 hover:bg-blue-700 text-white text-lg font-bold no-underline rounded-full px-8 py-3 shadow-sm transition-colors">
                    Quiero Donar
                </a>
                <a href="{{ route('solicitar.ayuda') }}"
                   class="inline-block border-2 border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white text-lg font-bold no-underline rounded-full px-8 py-3 transition-colors">
                    Necesito Ayuda
                </a>
            </div>
        </div>
    </div>
</section>

<!-- 2. TARJETAS DE SERVICIOS -->
<section class="py-6 max-w-6xl mx-auto px-4 w-full">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        <div class="h-full bg-white rounded-3xl shadow-sm p-6 text-center">
            <div class="text-5xl mb-2">🍏</div>
            <h5 class="text-xl font-bold text-slate-900 mb-2">Rescate de Comida</h5>
            <p class="text-sm text-slate-500">Recuperamos excedentes comestibles en buen estado directamente de comercios y productores.</p>
        </div>

        <div class="h-full bg-white rounded-3xl shadow-sm p-6 text-center">
            <div class="text-5xl mb-2">🚚</div>
            <h5 class="text-xl font-bold text-slate-900 mb-2">Nuestra Red de Apoyo</h5>
            <p class="text-sm text-slate-500">Entregamos los insumos a comedores comunitarios e instituciones que atienden a personas vulnerables.</p>
        </div>

        <div class="h-full bg-white rounded-3xl shadow-sm p-6 text-center">
            <div class="text-5xl mb-2">🤝</div>
            <h5 class="text-xl font-bold text-slate-900 mb-2">Donar Alimentos</h5>
            <p class="text-sm text-slate-500">Facilitamos que personas y empresas entreguen donaciones de manera rápida y segura.</p>
        </div>

    </div>
</section>

<!-- 3. SECCIÓN DE CIFRAS DE IMPACTO -->
<section class="py-12 bg-white shadow-sm mt-12">
    <div class="max-w-6xl mx-auto px-4 text-center">
        <h3 class="text-3xl font-bold text-slate-900 mb-6">Nuestro Impacto en Cifras</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div>
                <h2 class="text-5xl font-bold text-blue-600 mb-1">+15,000 Kg</h2>
                <p class="text-slate-500 font-semibold">De alimento rescatado este año</p>
            </div>
            <div>
                <h2 class="text-5xl font-bold text-blue-600 mb-1">+45</h2>
                <p class="text-slate-500 font-semibold">Comedores comunitarios apoyados</p>
            </div>
            <div>
                <h2 class="text-5xl font-bold text-blue-600 mb-1">+1,200</h2>
                <p class="text-slate-500 font-semibold">Familias beneficiadas</p>
            </div>
        </div>
    </div>
</section>

@endsection