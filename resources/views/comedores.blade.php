@extends('layouts.app')

@section('title', 'Comedores | Banco de Alimentos')

@section('content')
<section class="w-full max-w-[1000px]">

    <!-- Título -->
    <div class="flex justify-center mb-8">
        <h1 class="bg-pill text-black font-semibold text-lg sm:text-xl px-8 py-3 rounded-full text-center">
            [ COMEDORES COMUNITARIOS REGISTRADOS ]
        </h1>
    </div>

    <!-- Herramientas -->
    <div class="flex flex-col sm:flex-row gap-3 mb-5">
        <input type="text" id="inputBuscar" placeholder="Buscar por nombre o dirección..." oninput="filtrarTabla()"
               class="flex-1 px-5 py-2.5 rounded-full border border-slate-300 text-sm outline-none focus:border-cyanx bg-white/80">
        <select id="selectFrecuencia" onchange="filtrarTabla()"
                class="px-5 py-2.5 rounded-full border border-slate-300 text-sm font-medium outline-none bg-white/80 cursor-pointer">
            <option value="TODAS">Todas las frecuencias</option>
            <option value="SEMANAL">Semanal</option>
            <option value="QUINCENAL">Quincenal</option>
            <option value="MENSUAL">Mensual</option>
        </select>
        <button type="button" onclick="toggleFormulario()"
                class="bg-cyanx hover:bg-[#22c3ee] text-black font-semibold text-sm px-6 py-2.5 rounded-full transition">
            + Registrar comedor
        </button>
    </div>

    <!-- Formulario (oculto) -->
    <div id="seccionFormulario" class="hidden bg-white rounded-2xl p-6 mb-6 shadow-md border-2 border-cyanx">
        <h2 class="text-sm font-bold uppercase mb-4 pb-2 border-b border-slate-200">Alta de comedor comunitario</h2>
        <form id="formNuevoComedor" onsubmit="guardarComedor(event)" class="space-y-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label for="nombreComedor" class="block text-xs font-semibold mb-1">NOMBRE DEL COMEDOR</label>
                    <input type="text" id="nombreComedor" placeholder="Ej. Comedor San Francisco" required
                           class="w-full p-2.5 rounded-xl border border-slate-300 text-sm outline-none focus:border-cyanx">
                </div>
                <div>
                    <label for="direccionComedor" class="block text-xs font-semibold mb-1">DIRECCIÓN</label>
                    <input type="text" id="direccionComedor" placeholder="Ej. Av. Hidalgo #123" required
                           class="w-full p-2.5 rounded-xl border border-slate-300 text-sm outline-none focus:border-cyanx">
                </div>
                <div>
                    <label for="beneficiarios" class="block text-xs font-semibold mb-1">BENEFICIARIOS</label>
                    <input type="text" id="beneficiarios" placeholder="Ej. 90 Niños" required
                           class="w-full p-2.5 rounded-xl border border-slate-300 text-sm outline-none focus:border-cyanx">
                </div>
                <div>
                    <label for="frecuenciaEntrega" class="block text-xs font-semibold mb-1">FRECUENCIA</label>
                    <select id="frecuenciaEntrega" required class="w-full p-2.5 rounded-xl border border-slate-300 text-sm outline-none bg-white">
                        <option value="SEMANAL">SEMANAL</option>
                        <option value="QUINCENAL">QUINCENAL</option>
                        <option value="MENSUAL">MENSUAL</option>
                    </select>
                </div>
            </div>
            <div class="flex justify-end gap-3 pt-2">
                <button type="button" onclick="toggleFormulario()" class="bg-slate-400 text-white font-semibold text-sm px-5 py-2 rounded-full">Cancelar</button>
                <button type="submit" class="bg-greenx hover:bg-[#6cca48] text-black font-semibold text-sm px-5 py-2 rounded-full">Guardar comedor</button>
            </div>
        </form>
    </div>

    <!-- Tabla -->
    <div class="overflow-x-auto">
        <table class="w-full border-2 border-black border-collapse text-center" id="tablaComedores">
            <thead>
                <tr class="bg-cyanx text-black font-bold text-sm">
                    <th class="border-2 border-black py-5 px-3">COMEDOR</th>
                    <th class="border-2 border-black py-5 px-3">DIRECCION</th>
                    <th class="border-2 border-black py-5 px-3">BENEFICIARIOS</th>
                    <th class="border-2 border-black py-5 px-3">FRECUENCIA</th>
                </tr>
            </thead>
            <tbody id="tbodyComedores" class="text-sm bg-white/40">
                <tr>
                    <td class="border-2 border-black py-5 px-4 text-left">COMEDOR SAN JOSE</td>
                    <td class="border-2 border-black py-5 px-3">CALLE 12 #4-20</td>
                    <td class="border-2 border-black py-5 px-3">120 NIÑOS</td>
                    <td class="border-2 border-black py-5 px-3">SEMANAL</td>
                </tr>
                <tr>
                    <td class="border-2 border-black py-5 px-4 text-left">HOGAR ADULTO MAYOR</td>
                    <td class="border-2 border-black py-5 px-3">AV. CENTRAL 45</td>
                    <td class="border-2 border-black py-5 px-3">80 ADULTOS</td>
                    <td class="border-2 border-black py-5 px-3">QUINCENAL</td>
                </tr>
                <tr>
                    <td class="border-2 border-black py-5 px-4 text-left">CENTRO ESPERANZA</td>
                    <td class="border-2 border-black py-5 px-3">CARRERA 8 #10</td>
                    <td class="border-2 border-black py-5 px-3">210 PERSONAS</td>
                    <td class="border-2 border-black py-5 px-3">SEMANAL</td>
                </tr>
            </tbody>
        </table>
        <p id="sinResultados" class="hidden text-center text-sm font-medium py-6">No se encontraron comedores.</p>
    </div>
</section>

@push('scripts')
<script>
    function toggleFormulario() {
        document.getElementById('seccionFormulario').classList.toggle('hidden');
    }

    function filtrarTabla() {
        const texto = document.getElementById('inputBuscar').value.trim().toUpperCase();
        const freq = document.getElementById('selectFrecuencia').value;
        let visibles = 0;
        document.querySelectorAll('#tbodyComedores tr').forEach(fila => {
            const coincideTexto = fila.cells[0].textContent.toUpperCase().includes(texto)
                               || fila.cells[1].textContent.toUpperCase().includes(texto);
            const coincideFreq = freq === 'TODAS' || fila.cells[3].textContent.trim().toUpperCase() === freq;
            const mostrar = coincideTexto && coincideFreq;
            fila.style.display = mostrar ? '' : 'none';
            if (mostrar) visibles++;
        });
        document.getElementById('sinResultados').classList.toggle('hidden', visibles > 0);
    }

    function guardarComedor(event) {
        event.preventDefault();
        const valores = [
            document.getElementById('nombreComedor').value,
            document.getElementById('direccionComedor').value,
            document.getElementById('beneficiarios').value,
            document.getElementById('frecuenciaEntrega').value,
        ].map(v => v.trim().toUpperCase());

        const tr = document.createElement('tr');
        valores.forEach((valor, i) => {
            const td = document.createElement('td');
            td.className = 'border-2 border-black py-5 px-3' + (i === 0 ? ' text-left px-4' : '');
            td.textContent = valor;           // textContent evita inyección de HTML
            tr.appendChild(td);
        });
        document.getElementById('tbodyComedores').appendChild(tr);

        document.getElementById('formNuevoComedor').reset();
        toggleFormulario();
        filtrarTabla();
    }
</script>
@endpush
@endsection