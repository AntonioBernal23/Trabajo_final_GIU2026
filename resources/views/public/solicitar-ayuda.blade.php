@extends('layouts.app')

@section('title', 'Necesito Ayuda - Banco de Alimentos')

@section('content')
<!-- Hero Section / Encabezado -->
<section class="py-12 text-center">
    <div class="max-w-6xl mx-auto px-4 py-3">
        <h1 class="text-4xl md:text-6xl font-bold text-blue-600 mb-4">Estamos para Apoyarte</h1>
        <p class="text-xl text-slate-500 max-w-3xl mx-auto">
            Brindamos asistencia alimentaria digna y nutricia a familias, comedores comunitarios e instituciones que lo necesiten.
        </p>
    </div>
</section>

<!-- ¿A quiénes apoyamos? -->
<section class="py-6">
    <div class="max-w-6xl mx-auto px-4">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold text-slate-900">¿A quiénes apoyamos?</h2>
            <p class="text-slate-500">Nuestra red de ayuda está destinada a atender a diversos sectores de la comunidad</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="h-full bg-white rounded-3xl shadow-sm text-center p-6 md:p-10 flex flex-col justify-center">
                <div class="text-5xl mb-4">👨‍👩‍👧‍👦</div>
                <h4 class="text-xl font-bold text-slate-900 mb-3">Familias y Regiones</h4>
                <p class="text-slate-500">
                    Hogares en vulnerabilidad social o personas en situación de pobreza que requieren una despensa básica periódica.
                </p>
            </div>
            <div class="h-full bg-white rounded-3xl shadow-sm text-center p-6 md:p-10 flex flex-col justify-center">
                <div class="text-5xl mb-4">🍲</div>
                <h4 class="text-xl font-bold text-slate-900 mb-3">Comedores Comunitarios</h4>
                <p class="text-slate-500">
                    Espacios que preparan platillos diarios para niños, adultos mayores o personas en situación de calle.
                </p>
            </div>
            <div class="h-full bg-white rounded-3xl shadow-sm text-center p-6 md:p-10 flex flex-col justify-center">
                <div class="text-5xl mb-4">🏢</div>
                <h4 class="text-xl font-bold text-slate-900 mb-3">Asilos y Organizaciones</h4>
                <p class="text-slate-500">
                    Casas hogar, asilos de ancianos y centros de rehabilitación registrados que brindan estancia y alimento.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Requisitos y Proceso -->
<section class="py-12">
    <div class="max-w-6xl mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 items-stretch">

            <!-- Requisitos -->
            <div class="h-full bg-white rounded-3xl shadow-sm p-6 md:p-10">
                <h3 class="text-2xl font-bold text-blue-600 mb-6">Requisitos Básicos</h3>
                <ul class="list-none p-0 space-y-4">
                    <li class="flex items-start">
                        <span class="text-2xl mr-3 text-green-600">✔️</span>
                        <div>
                            <strong>Identificación Oficial Vigente:</strong>
                            <p class="text-slate-500 text-sm">INE o identificación con fotografía del titular o representante.</p>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <span class="text-2xl mr-3 text-green-600">✔️</span>
                        <div>
                            <strong>Comprobante de Domicilio:</strong>
                            <p class="text-slate-500 text-sm">No mayor a 3 meses de antigüedad (Luz, Agua o Predial).</p>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <span class="text-2xl mr-3 text-green-600">✔️</span>
                        <div>
                            <strong>CURP de los integrantes:</strong>
                            <p class="text-slate-500 text-sm">De cada integrante del núcleo familiar (para solicitudes familiares).</p>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <span class="text-2xl mr-3 text-green-600">✔️</span>
                        <div>
                            <strong>Estudio Socioeconómico:</strong>
                            <p class="text-slate-500 text-sm">Entrevista presencial realizada por nuestro equipo de Trabajo Social.</p>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Proceso -->
            <div class="h-full bg-white rounded-3xl shadow-sm p-6 md:p-10">
                <h3 class="text-2xl font-bold text-blue-600 mb-6">¿Cómo es el Proceso?</h3>

                <div class="flex mb-6">
                    <div class="w-10 h-10 rounded-full bg-blue-600 text-white font-bold text-lg flex items-center justify-center mr-4 shrink-0">1</div>
                    <div>
                        <h5 class="font-bold text-slate-900 mb-1">Consulta de Requisitos y Documentos</h5>
                        <p class="text-slate-500 text-sm">Reúne tu documentación básica oficial (INE, CURP y Comprobante de domicilio).</p>
                    </div>
                </div>
                <div class="flex mb-6">
                    <div class="w-10 h-10 rounded-full bg-blue-600 text-white font-bold text-lg flex items-center justify-center mr-4 shrink-0">2</div>
                    <div>
                        <h5 class="font-bold text-slate-900 mb-1">Acude o Llama a Trabajo Social</h5>
                        <p class="text-slate-500 text-sm">Preséntate en nuestras oficinas o comunícate vía telefónica para agendar tu valoración.</p>
                    </div>
                </div>
                <div class="flex">
                    <div class="w-10 h-10 rounded-full bg-blue-600 text-white font-bold text-lg flex items-center justify-center mr-4 shrink-0">3</div>
                    <div>
                        <h5 class="font-bold text-slate-900 mb-1">Asignación de Apoyo</h5>
                        <p class="text-slate-500 text-sm">Una vez validada tu información, se asigna tu paquete alimentario o comedor cercano.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Canales de Atención Directa -->
<section class="py-12">
    <div class="max-w-6xl mx-auto px-4">
        <div class="bg-white rounded-3xl shadow-sm p-6 md:p-10 max-w-5xl mx-auto text-center">
            <h2 class="text-3xl font-bold text-slate-900 mb-2">Canales de Atención Directa</h2>
            <p class="text-slate-500 mb-8">Para iniciar tu trámite de apoyo alimentario, comunícate o acude directamente por los siguientes medios:</p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="h-full p-4 border border-slate-200 rounded-xl bg-slate-50">
                    <div class="text-3xl mb-2">📞</div>
                    <h5 class="text-lg font-bold text-slate-900">Atención Telefónica</h5>
                    <p class="text-slate-500 text-sm mb-2">(33) 3810-6595</p>
                    <span class="inline-block px-2 py-1 text-xs font-bold text-white bg-slate-500 rounded">Lun a Vie: 8:00 AM - 4:00 PM</span>
                </div>
                <div class="h-full p-4 border border-slate-200 rounded-xl bg-slate-50">
                    <div class="text-3xl mb-2">📍</div>
                    <h5 class="text-lg font-bold text-slate-900">Oficina de Trabajo Social</h5>
                    <p class="text-slate-500 text-sm mb-2">Av. Principal #123, Col. Centro</p>
                    <span class="inline-block px-2 py-1 text-xs font-bold text-white bg-slate-500 rounded">Atención Presencial Directa</span>
                </div>
                <div class="h-full p-4 border border-slate-200 rounded-xl bg-slate-50">
                    <div class="text-3xl mb-2">💬</div>
                    <h5 class="text-lg font-bold text-slate-900">WhatsApp Informativo</h5>
                    <p class="text-slate-500 text-sm mb-3">Respuesta a dudas frecuentes</p>
                    <a href="https://wa.me/523338106595" target="_blank"
                       class="inline-block bg-green-600 hover:bg-green-700 text-white text-sm font-bold no-underline rounded-full px-4 py-1.5 transition-colors">
                        Enviar Mensaje
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Cierre -->
<section class="pb-12 mb-6 text-center">
    <div class="max-w-6xl mx-auto px-4">
        <div class="bg-white rounded-3xl shadow-sm p-6 max-w-3xl mx-auto">
            <h4 class="text-xl font-bold text-slate-900 mb-2">¿Buscas un comedor comunitario cercano?</h4>
            <p class="text-slate-500 mb-4">Consulta la ubicación y horarios de la red de comedores y puntos de entrega.</p>
            <a href="{{ route('centros') }}"
               class="inline-block bg-blue-600 hover:bg-blue-700 text-white text-lg font-bold no-underline rounded-full px-8 py-3 transition-colors">
                📍 Ver Red de Centros de Ayuda y Comedores
            </a>
        </div>
    </div>
</section>
@endsection