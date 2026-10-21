@extends('layouts.app')

@section('title', 'Cómo Donar - Banco de Alimentos')

@section('content')
<!-- Hero Section / Encabezado -->
<section class="py-12 text-center">
    <div class="max-w-6xl mx-auto px-4 py-3">
        <h1 class="text-4xl md:text-6xl font-bold text-green-700 mb-4">Tu Donación Transforma Vidas</h1>
        <p class="text-xl text-slate-500 max-w-3xl mx-auto">
            Gracias a tus aportaciones podemos rescatar toneladas de alimentos y llevar nutrición digna a miles de familias que lo necesitan.
        </p>
    </div>
</section>

<!-- Formas de Donar -->
<section class="py-6">
    <div class="max-w-6xl mx-auto px-4">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold text-slate-900">Formas de Apoyar</h2>
            <p class="text-slate-500">Elige la modalidad de donación que mejor se adapte a ti o a tu empresa</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="h-full bg-white rounded-3xl shadow-sm text-center p-6 md:p-10 flex flex-col justify-center">
                <div class="text-5xl mb-4">🍎</div>
                <h4 class="text-xl font-bold text-slate-900 mb-3">Donación en Especie</h4>
                <p class="text-slate-500">
                    Aceptamos alimentos no perecederos, granos, enlatados, frutas y verduras en buen estado directamente en nuestro centro de acopio.
                </p>
            </div>
            <div class="h-full bg-white rounded-3xl shadow-sm text-center p-6 md:p-10 flex flex-col justify-center">
                <div class="text-5xl mb-4">💳</div>
                <h4 class="text-xl font-bold text-slate-900 mb-3">Aportación Económica</h4>
                <p class="text-slate-500">
                    Tus donativos monetarios nos permiten cubrir los costos de logística, combustible y empaque para la distribución del alimento.
                </p>
            </div>
            <div class="h-full bg-white rounded-3xl shadow-sm text-center p-6 md:p-10 flex flex-col justify-center">
                <div class="text-5xl mb-4">🚜</div>
                <h4 class="text-xl font-bold text-slate-900 mb-3">Rescate Agrícola e Industrial</h4>
                <p class="text-slate-500">
                    Para supermercados, productores y empresas con mermas alimentarias o excedentes de producción aptos para el consumo.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Datos Bancarios y Acopio -->
<section class="py-12">
    <div class="max-w-6xl mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 items-stretch">

            <!-- Cuentas Bancarias -->
            <div class="h-full bg-white rounded-3xl shadow-sm p-6 md:p-10">
                <h3 class="text-2xl font-bold text-green-700 mb-6">💳 Datos Bancarios para Transferencia</h3>
                <p class="text-slate-500 text-sm mb-6">Puedes realizar tu donativo directamente a nuestras cuentas oficiales:</p>

                <div class="bg-slate-50 border border-slate-200 rounded-xl p-4 mb-4">
                    <strong class="block text-slate-900 mb-1">Banco Nacional de México</strong>
                    <p class="text-sm text-slate-500 mb-1"><strong>Cuenta:</strong> 1234-5678-90</p>
                    <p class="text-sm text-slate-500 mb-1"><strong>CLABE Interbancaria:</strong> 012 345 67890123456 7</p>
                    <p class="text-sm text-slate-500"><strong>Beneficiario:</strong> Banco de Alimentos Comunitario A.C.</p>
                </div>

                <div class="bg-green-100 border border-green-200 text-green-800 text-sm rounded-xl p-4" role="alert">
                    💡 <strong>Deducible de Impuestos:</strong> Expedimos recibos deducibles (CFDI) para todas tus aportaciones monetarias o en especie.
                </div>
            </div>

            <!-- Punto de Acopio -->
            <div class="h-full bg-white rounded-3xl shadow-sm p-6 md:p-10 flex flex-col justify-between">
                <div>
                    <h3 class="text-2xl font-bold text-green-700 mb-6">📦 Recepción de Alimentos en Especie</h3>
                    <p class="text-slate-500 text-sm mb-4">Si deseas llevar despensa o alimentos directos, te esperamos en nuestras instalaciones principales:</p>

                    <ul class="list-none p-0 mb-6 space-y-4">
                        <li>
                            <strong>📍 Dirección de Acopio:</strong>
                            <p class="text-slate-500 text-sm">Av. Principal #123, Col. Centro</p>
                        </li>
                        <li>
                            <strong>⏰ Horario de Recepción:</strong>
                            <p class="text-slate-500 text-sm">Lunes a Viernes de 8:00 AM a 4:00 PM</p>
                        </li>
                        <li>
                            <strong>🍏 Alimentos Prioritarios:</strong>
                            <p class="text-slate-500 text-sm">Arroz, frijol, aceite, atún en lata, avena, leche en polvo y artículos de higiene.</p>
                        </li>
                    </ul>
                </div>

                <div>
                    <span class="block w-full text-center text-xs font-bold text-white bg-slate-500 rounded py-2 px-2">
                        Recepción sin previa cita durante horario de almacén
                    </span>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Contacto de Donaciones -->
<section class="py-12">
    <div class="max-w-6xl mx-auto px-4">
        <div class="bg-white rounded-3xl shadow-sm p-6 md:p-10 max-w-5xl mx-auto text-center">
            <h2 class="text-3xl font-bold text-slate-900 mb-2">¿Tienes dudas o representas a una Empresa?</h2>
            <p class="text-slate-500 mb-8">Coordina la recolección de excedentes o solicita tu recibo deducible por estos medios:</p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="h-full p-4 border border-slate-200 rounded-xl bg-slate-50">
                    <div class="text-3xl mb-2">📞</div>
                    <h5 class="text-lg font-bold text-slate-900">Coordinación de Donantes</h5>
                    <p class="text-slate-500 text-sm mb-2">(33) 3810-6595 ext. 102</p>
                    <span class="inline-block px-2 py-1 text-xs font-bold text-white bg-slate-500 rounded">Lun a Vie: 8:00 AM - 4:00 PM</span>
                </div>
                <div class="h-full p-4 border border-slate-200 rounded-xl bg-slate-50">
                    <div class="text-3xl mb-2">✉️</div>
                    <h5 class="text-lg font-bold text-slate-900">Correo Electrónico</h5>
                    <p class="text-slate-500 text-sm mb-2">donaciones@bancodealimentos.org</p>
                    <span class="inline-block px-2 py-1 text-xs font-bold text-white bg-slate-500 rounded">Respuesta en 24h</span>
                </div>
                <div class="h-full p-4 border border-slate-200 rounded-xl bg-slate-50">
                    <div class="text-3xl mb-2">💬</div>
                    <h5 class="text-lg font-bold text-slate-900">WhatsApp Directo</h5>
                    <p class="text-slate-500 text-sm mb-3">Atención inmediata a donantes</p>
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
            <h4 class="text-xl font-bold text-slate-900 mb-2">¿Quieres sumarte como aliado o donar tu tiempo?</h4>
            <p class="text-slate-500 mb-4">Conoce a las empresas que hacen esto posible o intégrate a nuestro equipo de voluntarios.</p>
            <div class="flex flex-wrap justify-center gap-3">
                <a href="{{ route('aliados') }}"
                   class="inline-block border border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white font-bold no-underline rounded-full px-6 py-2 transition-colors">🏢 Empresas Aliadas</a>
                <a href="{{ route('voluntariado') }}"
                   class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold no-underline rounded-full px-6 py-2 transition-colors">🙋‍♂️ Ser Voluntario</a>
            </div>
        </div>
    </div>
</section>
@endsection