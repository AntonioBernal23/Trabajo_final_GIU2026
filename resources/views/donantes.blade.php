@extends('layouts.app')

@section('title', 'Donantes | Banco de Alimentos')

@section('content')
<section class="w-full max-w-[1050px]">

    <!-- Encabezado -->
    <div class="flex flex-wrap justify-between items-center mb-10 gap-4">
        <h1 class="bg-pill text-black font-semibold text-sm sm:text-base px-8 py-3 rounded-full uppercase">
            Directorio de aliados y donantes
        </h1>
        <button type="button" onclick="toggleFormulario()"
                class="bg-[#ee9082] hover:bg-[#e87b6a] text-black font-semibold text-sm sm:text-base px-8 py-3 rounded-full transition">
            [ + REGISTRO DE NUEVO DONANTES ]
        </button>
    </div>

    <!-- Formulario (oculto) -->
    <div id="seccionFormulario" class="hidden bg-white rounded-2xl p-6 mb-8 shadow-md border-2 border-cyanx">
        <h2 class="text-sm font-bold uppercase mb-4 pb-2 border-b">Registro de nuevo donante</h2>
        <form id="formNuevoDonante" onsubmit="guardarDonante(event)" class="space-y-4">
            <div>
                <label for="nombreEmpresa" class="block text-xs font-semibold mb-1">NOMBRE DE LA EMPRESA / ALIADO</label>
                <input type="text" id="nombreEmpresa" required class="w-full p-2.5 rounded-lg border border-slate-300 text-sm outline-none focus:border-cyanx">
            </div>
            <div>
                <label for="correoContacto" class="block text-xs font-semibold mb-1">CORREO DE CONTACTO</label>
                <input type="email" id="correoContacto" required class="w-full p-2.5 rounded-lg border border-slate-300 text-sm outline-none focus:border-cyanx">
            </div>
            <div>
                <label for="aporteKg" class="block text-xs font-semibold mb-1">APORTE ESTIMADO (EN KG)</label>
                <input type="number" id="aporteKg" min="0" required class="w-full p-2.5 rounded-lg border border-slate-300 text-sm outline-none focus:border-cyanx">
            </div>
            <div class="flex justify-end gap-3 pt-2">
                <button type="button" onclick="toggleFormulario()" class="bg-slate-400 text-white font-semibold text-sm px-5 py-2 rounded-full">Cancelar</button>
                <button type="submit" class="bg-greenx hover:bg-[#6cca48] text-black font-semibold text-sm px-5 py-2 rounded-full">Registrar donante</button>
            </div>
        </form>
    </div>

    <!-- Tarjetas -->
    <div id="contenedorDonantes" class="grid grid-cols-1 md:grid-cols-2 gap-8">
        @php
            $donantes = [
                ['SUPERMERCADO LA CADENA', 'JUAN@EMPACADORA.COM',    '4,500'],
                ['AGRICOLA DEL SUR',       'VENTAS@AGROSUR.COM',     '8,200'],
                ['EMPACADORA CENTRAL',     'CONTATO@EMPACADORA.COM', '1,100'],
                ['FUNDACION COMPARTIR',    'AYUDA@COMPARTIR.COM',    '950'],
            ];
        @endphp

        @foreach ($donantes as [$nombre, $correo, $kg])
            <article class="bg-gradient-to-r from-[#c9fbd6] to-[#93bcff] rounded-[2rem] px-6 py-10 text-center text-black shadow-sm min-h-[160px] flex flex-col items-center justify-center">
                <h2 class="font-semibold text-sm sm:text-base">[ LOGO ] {{ $nombre }}</h2>
                <p class="font-semibold text-sm sm:text-base">CONTACTO: {{ $correo }}</p>
                <p class="font-semibold text-sm sm:text-base">APORTE TOTAL: {{ $kg }} KG</p>
            </article>
        @endforeach
    </div>
</section>

@push('scripts')
<script>
    function toggleFormulario() {
        document.getElementById('seccionFormulario').classList.toggle('hidden');
    }

    function guardarDonante(e) {
        e.preventDefault();
        const nombre = document.getElementById('nombreEmpresa').value.trim().toUpperCase();
        const correo = document.getElementById('correoContacto').value.trim().toUpperCase();
        const kg = Number(document.getElementById('aporteKg').value).toLocaleString('en-US');

        const card = document.createElement('article');
        card.className = 'bg-gradient-to-r from-[#c9fbd6] to-[#93bcff] rounded-[2rem] px-6 py-10 text-center text-black shadow-sm min-h-[160px] flex flex-col items-center justify-center';

        // textContent evita inyección de HTML
        [`[ LOGO ] ${nombre}`, `CONTACTO: ${correo}`, `APORTE TOTAL: ${kg} KG`].forEach((txt, i) => {
            const el = document.createElement(i === 0 ? 'h2' : 'p');
            el.className = 'font-semibold text-sm sm:text-base';
            el.textContent = txt;
            card.appendChild(el);
        });

        document.getElementById('contenedorDonantes').appendChild(card);
        document.getElementById('formNuevoDonante').reset();
        toggleFormulario();
    }
</script>
@endpush
@endsection