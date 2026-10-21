@extends('layouts.app')

@section('title', 'Centros de Ayuda - Banco de Alimentos')

@section('content')
<!-- Hero Section / Encabezado -->
<section class="py-12 text-center">
    <div class="max-w-6xl mx-auto px-4 py-3">
        <h1 class="text-4xl md:text-6xl font-bold text-blue-600 mb-4">Red de Centros de Ayuda</h1>
        <p class="text-xl text-slate-500 max-w-3xl mx-auto">
            Consulta la ubicación, horarios y servicios de nuestras oficinas de atención, almacenes de acopio y comedores comunitarios afiliados.
        </p>
    </div>
</section>

<!-- Directorio de Centros -->
<section class="py-6">
    <div class="max-w-6xl mx-auto px-4">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold text-slate-900">Nuestras Ubicaciones</h2>
            <p class="text-slate-500">Encuentra el punto de atención o comedor más cercano a tu localidad</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            <!-- Centro 1: Sede Principal -->
            <div class="h-full bg-white rounded-3xl shadow-sm p-6 flex flex-col justify-between">
                <div>
                    <div class="flex items-center mb-4">
                        <span class="text-5xl mr-4">🏢</span>
                        <div>
                            <h4 class="text-xl font-bold text-slate-900">Oficina Central y Acopio</h4>
                            <span class="inline-block mt-1 px-2 py-1 text-xs font-bold text-white bg-blue-600 rounded">Sede Principal</span>
                        </div>
                    </div>
                    <p class="text-sm text-slate-500 mb-4">
                        Atiende trámites de estudio socioeconómico, recepción de alimentos en especie e informes generales.
                    </p>
                    <ul class="list-none p-0 text-sm text-slate-500 mb-6 space-y-2">
                        <li><strong>📍 Dirección:</strong> Av. Principal #123, Col. Centro</li>
                        <li><strong>📞 Teléfono:</strong> (33) 3810-6595</li>
                        <li><strong>⏰ Horario:</strong> Lun a Vie: 8:00 AM - 4:00 PM</li>
                        <li><strong>🍎 Servicio:</strong> Trabajo Social y Acopio</li>
                    </ul>
                </div>
                <a href="https://maps.google.com" target="_blank"
                   class="block w-full text-center border border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white text-sm font-bold no-underline rounded-full py-2 transition-colors">
                    📍 Ver en Mapa
                </a>
            </div>

            <!-- Centro 2: Comedor Comunitario -->
            <div class="h-full bg-white rounded-3xl shadow-sm p-6 flex flex-col justify-between">
                <div>
                    <div class="flex items-center mb-4">
                        <span class="text-5xl mr-4">🍲</span>
                        <div>
                            <h4 class="text-xl font-bold text-slate-900">Comedor Esperanza</h4>
                            <span class="inline-block mt-1 px-2 py-1 text-xs font-bold text-white bg-green-600 rounded">Comedor Comunitario</span>
                        </div>
                    </div>
                    <p class="text-sm text-slate-500 mb-4">
                        Ofrece raciones de alimento caliente preparadas diariamente para familias y adultos mayores de la zona.
                    </p>
                    <ul class="list-none p-0 text-sm text-slate-500 mb-6 space-y-2">
                        <li><strong>📍 Dirección:</strong> Calle Hidalgo #45, Col. San Juan</li>
                        <li><strong>📞 Teléfono:</strong> (33) 3810-6596</li>
                        <li><strong>⏰ Horario:</strong> Lun a Sáb: 12:00 PM - 3:00 PM</li>
                        <li><strong>🍲 Servicio:</strong> Alimentos calientes en sitio</li>
                    </ul>
                </div>
                <a href="https://maps.google.com" target="_blank"
                   class="block w-full text-center border border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white text-sm font-bold no-underline rounded-full py-2 transition-colors">
                    📍 Ver en Mapa
                </a>
            </div>

            <!-- Centro 3: Módulo de Entrega Sur -->
            <div class="h-full bg-white rounded-3xl shadow-sm p-6 flex flex-col justify-between">
                <div>
                    <div class="flex items-center mb-4">
                        <span class="text-5xl mr-4">📦</span>
                        <div>
                            <h4 class="text-xl font-bold text-slate-900">Centro Distribución Sur</h4>
                            <span class="inline-block mt-1 px-2 py-1 text-xs font-bold text-slate-900 bg-cyan-400 rounded">Entrega de Despensas</span>
                        </div>
                    </div>
                    <p class="text-sm text-slate-500 mb-4">
                        Punto de distribución de paquetes alimentarios periódicos para padrones de beneficiarios registrados.
                    </p>
                    <ul class="list-none p-0 text-sm text-slate-500 mb-6 space-y-2">
                        <li><strong>📍 Dirección:</strong> Av. Sur #789, Col. Bellavista</li>
                        <li><strong>📞 Teléfono:</strong> (33) 3810-6597</li>
                        <li><strong>⏰ Horario:</strong> Mar y Jue: 9:00 AM - 2:00 PM</li>
                        <li><strong>📦 Servicio:</strong> Entrega de paquetes básicos</li>
                    </ul>
                </div>
                <a href="https://maps.google.com" target="_blank"
                   class="block w-full text-center border border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white text-sm font-bold no-underline rounded-full py-2 transition-colors">
                    📍 Ver en Mapa
                </a>
            </div>

        </div>
    </div>
</section>

<!-- Recomendaciones para Beneficiarios -->
<section class="py-12">
    <div class="max-w-6xl mx-auto px-4">
        <div class="bg-white rounded-3xl shadow-sm p-6 md:p-10 max-w-5xl mx-auto">
            <h3 class="text-2xl font-bold text-slate-900 mb-3 text-center">Información Importante para Asistir</h3>
            <p class="text-slate-500 text-center mb-8">Te recomendamos tomar en cuenta las siguientes indicaciones antes de acudir a cualquier centro:</p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-left">
                <div class="flex items-start">
                    <span class="text-3xl mr-3 text-blue-600">📄</span>
                    <div>
                        <h6 class="font-bold text-slate-900 mb-1">Documentación</h6>
                        <p class="text-slate-500 text-sm">Si vas a realizar tu registro por primera vez, acude con tu INE y comprobante de domicilio impresos.</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <span class="text-3xl mr-3 text-blue-600">⏰</span>
                    <div>
                        <h6 class="font-bold text-slate-900 mb-1">Horarios de Atención</h6>
                        <p class="text-slate-500 text-sm">Respeta los horarios de cada centro para asegurar la disponibilidad de alimento o fichas de atención.</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <span class="text-3xl mr-3 text-blue-600">🛍️</span>
                    <div>
                        <h6 class="font-bold text-slate-900 mb-1">Bolsas o Contenedores</h6>
                        <p class="text-slate-500 text-sm">Para la entrega de despensas o comida para llevar, se recomienda acudir con bolsas reusables.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Cierre y Navegación Relacionada -->
<section class="pb-12 mb-12 text-center">
    <div class="max-w-6xl mx-auto px-4">
        <div class="bg-white rounded-3xl shadow-sm p-6 max-w-3xl mx-auto">
            <h4 class="text-xl font-bold text-slate-900 mb-2">¿Tienes dudas sobre los requisitos o trámites?</h4>
            <p class="text-slate-500 mb-4">Revisa la sección de requisitos o la lista de preguntas frecuentes para resolver tus dudas.</p>
            <div class="flex flex-wrap justify-center gap-3">
                <a href="{{ route('solicitar.ayuda') }}"
                   class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold no-underline rounded-full px-6 py-2 transition-colors">📋 Requisitos de Ayuda</a>
                <a href="{{ route('faq') }}"
                   class="inline-block border border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white font-bold no-underline rounded-full px-6 py-2 transition-colors">❓ Preguntas Frecuentes</a>
            </div>
        </div>
    </div>
</section>
@endsection