@extends('layouts.app')

@section('title', 'Mi perfil | Banco de Alimentos')

@section('content')
<section class="w-full max-w-[1000px]">

    <!-- Pestañas -->
    <div role="tablist" class="flex flex-wrap justify-center items-center gap-x-3 gap-y-2 font-bold text-xl sm:text-2xl mb-10">
        @php $tabs = ['perfil' => 'PERFIL', 'usuario' => 'USUARIO', 'permisos' => 'PERMISOS', 'notificaciones' => 'NOTIFICACIONES']; @endphp
        @foreach ($tabs as $id => $label)
            <button type="button" role="tab" data-tab="{{ $id }}"
                    class="tab px-2 rounded-lg hover:bg-white/50 transition">[{{ $label }}]</button>
            @if (!$loop->last)<span aria-hidden="true">,</span>@endif
        @endforeach
    </div>

    <form id="formPerfil" onsubmit="guardarCambios(event)">

        <!-- PERFIL (contenido principal, igual al diseño) -->
        <div data-panel="perfil" class="space-y-6">
            <div class="flex flex-col sm:flex-row sm:items-center gap-3 sm:gap-10">
                <div class="shrink-0 w-full sm:w-[300px] bg-pill font-bold text-sm py-3 px-6 rounded-full text-center">ICONO DE PERFIL:</div>
                <div class="flex items-center gap-5">
                    <div class="w-16 h-16 rounded-full bg-gradient-to-br from-[#4c7ff7] to-[#b08df7] text-white font-bold text-xl flex items-center justify-center" aria-hidden="true">CR</div>
                    <div class="text-lg sm:text-xl">
                        <p>[ <span id="nombreMostrado">CARLOS RODRIGUEZ</span> ]</p>
                        <p>[ ROL: ADMINISTRADOR DE INVENTARIO ]</p>
                    </div>
                </div>
            </div>

            <div class="flex flex-col sm:flex-row sm:items-center gap-3 sm:gap-10">
                <label for="correo" class="shrink-0 w-full sm:w-[300px] bg-pill font-bold text-sm py-3 px-6 rounded-full text-center">CORREO ELECTRONICO:</label>
                <div class="flex items-center gap-2 text-lg sm:text-xl flex-1">
                    <span>[</span>
                    <input type="email" id="correo" value="CARLOS.ADMIN@BANCOALIMENTOS.ORG" required
                           class="flex-1 min-w-0 bg-transparent outline-none border-b border-transparent focus:border-brand">
                    <span>]</span>
                </div>
            </div>

            <div class="flex flex-col sm:flex-row sm:items-center gap-3 sm:gap-10">
                <label for="avisosCaducidad" class="shrink-0 w-full sm:w-[300px] bg-pill font-bold text-sm py-3 px-6 rounded-full text-center">NOTIFICACIONES:</label>
                <label class="flex items-center gap-3 text-lg sm:text-xl cursor-pointer">
                    <span>[</span>
                    <input type="checkbox" id="avisosCaducidad" checked class="w-5 h-5 accent-[#0b6fd6]">
                    <span>RECIBIR AVISOS DE CADUCIDAD POR CORREO</span>
                    <span>]</span>
                </label>
            </div>
        </div>

        <!-- USUARIO -->
        <div data-panel="usuario" class="hidden space-y-6">
            <div class="flex flex-col sm:flex-row sm:items-center gap-3 sm:gap-10">
                <label for="nombre" class="shrink-0 w-full sm:w-[300px] bg-pill font-bold text-sm py-3 px-6 rounded-full text-center">NOMBRE:</label>
                <input type="text" id="nombre" value="CARLOS RODRIGUEZ" required
                       class="flex-1 bg-white/60 rounded-xl px-4 py-2 text-lg outline-none focus:ring-2 focus:ring-cyanx">
            </div>
            <div class="flex flex-col sm:flex-row sm:items-center gap-3 sm:gap-10">
                <label for="rol" class="shrink-0 w-full sm:w-[300px] bg-pill font-bold text-sm py-3 px-6 rounded-full text-center">ROL:</label>
                <input type="text" id="rol" value="ADMINISTRADOR DE INVENTARIO" disabled
                       class="flex-1 bg-white/40 rounded-xl px-4 py-2 text-lg text-slate-600">
            </div>
        </div>

        <!-- PERMISOS -->
        <div data-panel="permisos" class="hidden">
            <ul class="max-w-[500px] mx-auto bg-white/60 rounded-2xl p-6 space-y-2 text-lg">
                <li>✔ Gestionar inventario</li>
                <li>✔ Registrar donaciones</li>
                <li>✔ Generar despachos</li>
                <li>✔ Consultar reportes</li>
            </ul>
        </div>

        <!-- NOTIFICACIONES -->
        <div data-panel="notificaciones" class="hidden">
            <div class="max-w-[500px] mx-auto bg-white/60 rounded-2xl p-6 space-y-4 text-lg">
                <label class="flex items-center gap-3 cursor-pointer"><input type="checkbox" checked class="w-5 h-5 accent-[#0b6fd6]"> Avisos de caducidad</label>
                <label class="flex items-center gap-3 cursor-pointer"><input type="checkbox" class="w-5 h-5 accent-[#0b6fd6]"> Alertas de stock bajo</label>
                <label class="flex items-center gap-3 cursor-pointer"><input type="checkbox" class="w-5 h-5 accent-[#0b6fd6]"> Confirmación de despachos</label>
            </div>
        </div>

        <p id="mensajeOk" class="hidden text-center text-sm font-semibold text-green-700 mt-6">Cambios guardados correctamente.</p>

        <div class="flex justify-center pt-10">
            <button type="submit"
                    class="bg-gradient-to-r from-[#fff3a8] via-[#ffd5d5] to-[#ffadf7] hover:brightness-95 text-black font-extrabold text-2xl sm:text-3xl px-12 py-8 rounded-[2rem] transition">
                GUARDAR CAMBIOS
            </button>
        </div>
    </form>
</section>

@push('scripts')
<script>
    const tabs = document.querySelectorAll('.tab');
    const paneles = document.querySelectorAll('[data-panel]');

    function mostrarTab(id) {
        paneles.forEach(p => p.classList.toggle('hidden', p.dataset.panel !== id));
        tabs.forEach(t => {
            const activa = t.dataset.tab === id;
            t.setAttribute('aria-selected', activa);
            t.classList.toggle('bg-white/70', activa);
            t.classList.toggle('text-brand', activa);
        });
    }
    tabs.forEach(t => t.addEventListener('click', () => mostrarTab(t.dataset.tab)));
    mostrarTab('perfil');

    function guardarCambios(e) {
        e.preventDefault();
        document.getElementById('nombreMostrado').textContent =
            document.getElementById('nombre').value.trim().toUpperCase();
        const msg = document.getElementById('mensajeOk');
        msg.classList.remove('hidden');
        setTimeout(() => msg.classList.add('hidden'), 3000);
    }
</script>
@endpush
@endsection