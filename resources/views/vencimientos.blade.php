@extends('layouts.app')

@section('title', 'Donaciones | Banco de Alimentos')

@section('content')
<section class="w-full max-w-[900px]">
    <h1 class="text-center font-bold text-xl sm:text-2xl uppercase mb-10">
        Registro de nuevas donaciones de alimentos
    </h1>

    <form id="formDonacion" onsubmit="guardarDonacion(event)" class="space-y-5">

        <div class="flex flex-col sm:flex-row sm:items-center gap-3 sm:gap-10">
            <label for="donante" class="shrink-0 w-full sm:w-[300px] bg-[#5ee3e8] text-black font-bold text-sm py-3 px-6 rounded-full text-center">
                Donantes:
            </label>
            <select id="donante" required
                    class="flex-1 bg-white/60 sm:bg-transparent text-xl rounded-xl px-3 py-2 outline-none cursor-pointer focus:ring-2 focus:ring-cyanx">
                <option value="" disabled selected>[Ejemplo: Supermercado Exito]</option>
                <option>Supermercado La Cadena</option>
                <option>Agrícola del Sur</option>
                <option>Empacadora Central</option>
                <option>Fundación Compartir</option>
            </select>
        </div>

        <div class="flex flex-col sm:flex-row sm:items-center gap-3 sm:gap-10">
            <label for="categoria" class="shrink-0 w-full sm:w-[300px] bg-[#ffbe5c] text-black font-bold text-sm py-3 px-6 rounded-full text-center">
                Categoria de alimentos
            </label>
            <select id="categoria" required
                    class="flex-1 bg-white/60 sm:bg-transparent text-xl rounded-xl px-3 py-2 outline-none cursor-pointer focus:ring-2 focus:ring-cyanx">
                <option value="" disabled selected>Seleccionar: Granos/Lacteos/Enlatados</option>
                <option>Granos</option>
                <option>Lácteos</option>
                <option>Enlatados</option>
                <option>Frutas</option>
                <option>Ensaladas</option>
            </select>
        </div>

        <div class="flex flex-col sm:flex-row sm:items-center gap-3 sm:gap-10">
            <label for="cantidad" class="shrink-0 w-full sm:w-[300px] bg-[#ff69c3] text-black font-bold text-sm py-3 px-6 rounded-full text-center">
                Cantidad (Kg)
            </label>
            <input type="number" id="cantidad" min="1" step="1" required placeholder="250 KG"
                   class="flex-1 bg-white/60 sm:bg-transparent text-xl rounded-xl px-3 py-2 outline-none focus:ring-2 focus:ring-cyanx">
        </div>

        <div class="flex flex-col sm:flex-row sm:items-center gap-3 sm:gap-10">
            <label for="caducidad" class="shrink-0 w-full sm:w-[300px] bg-[#ffde59] text-black font-bold text-sm py-3 px-6 rounded-full text-center">
                Fecha de Caducidad:
            </label>
            <input type="date" id="caducidad" required
                   class="flex-1 bg-white/60 sm:bg-transparent text-xl rounded-xl px-3 py-2 outline-none cursor-pointer focus:ring-2 focus:ring-cyanx">
        </div>

        <p id="mensajeOk" class="hidden text-center text-sm font-semibold text-green-700"></p>

        <div class="flex justify-center pt-6">
            <button type="submit"
                    class="bg-greenx hover:bg-[#6cca48] text-black font-bold text-base px-14 py-6 rounded-[1.75rem] transition">
                Guardar Donacion
            </button>
        </div>
    </form>
</section>

@push('scripts')
<script>
    // La fecha de caducidad no puede ser anterior a hoy
    (function () {
        const hoy = new Date();
        hoy.setMinutes(hoy.getMinutes() - hoy.getTimezoneOffset());
        document.getElementById('caducidad').min = hoy.toISOString().slice(0, 10);
    })();

    function guardarDonacion(e) {
        e.preventDefault();
        const donante = document.getElementById('donante').value;
        const kg = document.getElementById('cantidad').value;
        const msg = document.getElementById('mensajeOk');
        msg.textContent = `Donación de ${kg} KG registrada para ${donante}.`;
        msg.classList.remove('hidden');
        e.target.reset();
    }
</script>
@endpush
@endsection