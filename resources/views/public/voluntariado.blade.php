@extends('layouts.app')

@section('title', 'Únete como Voluntario - Banco de Alimentos')

@section('content')
<!-- Hero Section / Encabezado -->
<section class="py-12 text-center">
    <div class="max-w-6xl mx-auto px-4 py-3">
        <h1 class="text-4xl md:text-6xl font-bold text-green-700 mb-4">Tu Tiempo y Manos Cambian Vidas</h1>
        <p class="text-xl text-slate-500 max-w-3xl mx-auto">
            El voluntariado es el corazón del Banco de Alimentos. Súmate a nuestro equipo y apóyanos en la selección, empaque y distribución de alimentos.
        </p>
    </div>
</section>

<!-- Modalidades -->
<section class="py-6">
    <div class="max-w-6xl mx-auto px-4">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold text-slate-900">¿Cómo puedes colaborar?</h2>
            <p class="text-slate-500">Tenemos distintas áreas donde tus habilidades y tiempo marcan la diferencia</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="h-full bg-white rounded-3xl shadow-sm text-center p-6 md:p-10 flex flex-col justify-center">
                <div class="text-5xl mb-4">📦</div>
                <h4 class="text-xl font-bold text-slate-900 mb-3">Selección y Almacén</h4>
                <p class="text-slate-500">
                    Clasificación de frutas, verduras y abarrotes en buen estado para armado de paquetes alimentarios en bodega.
                </p>
            </div>
            <div class="h-full bg-white rounded-3xl shadow-sm text-center p-6 md:p-10 flex flex-col justify-center">
                <div class="text-5xl mb-4">🚚</div>
                <h4 class="text-xl font-bold text-slate-900 mb-3">Logística y Rutas</h4>
                <p class="text-slate-500">
                    Acompañamiento en la recolección de excedentes en supermercados y entrega en comedores comunitarios.
                </p>
            </div>
            <div class="h-full bg-white rounded-3xl shadow-sm text-center p-6 md:p-10 flex flex-col justify-center">
                <div class="text-5xl mb-4">🎓</div>
                <h4 class="text-xl font-bold text-slate-900 mb-3">Escuelas y Empresas</h4>
                <p class="text-slate-500">
                    Jornadas de voluntariado corporativo, prácticas profesionales y liberación de servicio social universitario.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Requisitos y Pasos -->
<section class="py-12">
    <div class="max-w-6xl mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 items-stretch">

            <!-- Requisitos -->
            <div class="h-full bg-white rounded-3xl shadow-sm p-6 md:p-10">
                <h3 class="text-2xl font-bold text-green-700 mb-6">Requisitos para Participar</h3>
                <ul class="list-none p-0 space-y-4">
                    <li class="flex items-start">
                        <span class="text-2xl mr-3 text-green-600">✔️</span>
                        <div>
                            <strong>Edad Mínima:</strong>
                            <p class="text-slate-500 text-sm">Ser mayor de 16 años (menores acompañados por un tutor).</p>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <span class="text-2xl mr-3 text-green-600">✔️</span>
                        <div>
                            <strong>Disponibilidad de Tiempo:</strong>
                            <p class="text-slate-500 text-sm">Turnos flexibles de 3 a 4 horas (Turno Matutino o Vespertino).</p>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <span class="text-2xl mr-3 text-green-600">✔️</span>
                        <div>
                            <strong>Vestimenta Adecuada:</strong>
                            <p class="text-slate-500 text-sm">Pantalón cómodo, playera y calzado cerrado (tenis o botas de trabajo).</p>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <span class="text-2xl mr-3 text-green-600">✔️</span>
                        <div>
                            <strong>Actitud de Servicio:</strong>
                            <p class="text-slate-500 text-sm">Ganas de colaborar en equipo con entusiasmo y compromiso social.</p>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Pasos -->
            <div class="h-full bg-white rounded-3xl shadow-sm p-6 md:p-10">
                <h3 class="text-2xl font-bold text-green-700 mb-6">Pasos para Integrarte</h3>

                <div class="flex mb-6">
                    <div class="w-10 h-10 rounded-full bg-green-600 text-white font-bold text-lg flex items-center justify-center mr-4 shrink-0">1</div>
                    <div>
                        <h5 class="font-bold text-slate-900 mb-1">Contacto Directo</h5>
                        <p class="text-slate-500 text-sm">Comunícate por teléfono o WhatsApp con la coordinación de voluntariado.</p>
                    </div>
                </div>
                <div class="flex mb-6">
                    <div class="w-10 h-10 rounded-full bg-green-600 text-white font-bold text-lg flex items-center justify-center mr-4 shrink-0">2</div>
                    <div>
                        <h5 class="font-bold text-slate-900 mb-1">Elección de Turno y Área</h5>
                        <p class="text-slate-500 text-sm">Selecciona los días y horarios que mejor se adapten a tu agenda.</p>
                    </div>
                </div>
                <div class="flex">
                    <div class="w-10 h-10 rounded-full bg-green-600 text-white font-bold text-lg flex items-center justify-center mr-4 shrink-0">3</div>
                    <div>
                        <h5 class="font-bold text-slate-900 mb-1">Charla Inductiva e Inicio</h5>
                        <p class="text-slate-500 text-sm">Asiste a tu primera jornada, recibe tu inducción de seguridad y ¡empieza a ayudar!</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Coordinación de Voluntariado -->
<section class="py-12">
    <div class="max-w-6xl mx-auto px-4">
        <div class="bg-white rounded-3xl shadow-sm p-6 md:p-10 max-w-5xl mx-auto text-center">
            <h2 class="text-3xl font-bold text-slate-900 mb-2">Coordinación de Voluntariado</h2>
            <p class="text-slate-500 mb-8">Reserva tu fecha de asistencia o registra a tu grupo escolar/empresarial por estos medios:</p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="h-full p-4 border border-slate-200 rounded-xl bg-slate-50">
                    <div class="text-3xl mb-2">📞</div>
                    <h5 class="text-lg font-bold text-slate-900">Línea Directa</h5>
                    <p class="text-slate-500 text-sm mb-2">(33) 3810-6595 ext. 104</p>
                    <span class="inline-block px-2 py-1 text-xs font-bold text-white bg-slate-500 rounded">Lun a Vie: 8:00 AM - 4:00 PM</span>
                </div>
                <div class="h-full p-4 border border-slate-200 rounded-xl bg-slate-50">
                    <div class="text-3xl mb-2">✉️</div>
                    <h5 class="text-lg font-bold text-slate-900">Correo Electrónico</h5>
                    <p class="text-slate-500 text-sm mb-2">voluntarios@bancodealimentos.org</p>
                    <span class="inline-block px-2 py-1 text-xs font-bold text-white bg-slate-500 rounded">Respuesta en 24h</span>
                </div>
                <div class="h-full p-4 border border-slate-200 rounded-xl bg-slate-50">
                    <div class="text-3xl mb-2">💬</div>
                    <h5 class="text-lg font-bold text-slate-900">WhatsApp Directo</h5>
                    <p class="text-slate-500 text-sm mb-3">Coordinación de jornadas</p>
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
<section class="pb-12 mb-12 text-center">
    <div class="max-w-6xl mx-auto px-4">
        <div class="bg-white rounded-3xl shadow-sm p-6 max-w-3xl mx-auto">
            <h4 class="text-xl font-bold text-slate-900 mb-2">¿Quieres conocer las normas de inocuidad en el almacén?</h4>
            <p class="text-slate-500 mb-4">Revisa nuestras políticas de manejo e higiene seguro de los alimentos.</p>
            <div class="flex flex-wrap justify-center gap-3">
                <a href="{{ route('calidad') }}"
                   class="inline-block border border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white font-bold no-underline rounded-full px-6 py-2 transition-colors">🛡️ Calidad y Seguridad</a>
                <a href="{{ route('impacto') }}"
                   class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold no-underline rounded-full px-6 py-2 transition-colors">📊 Ver Nuestro Impacto</a>
            </div>
        </div>
    </div>
</section>
@endsection