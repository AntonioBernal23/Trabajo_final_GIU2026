@extends('layouts.app')

@section('title', 'Despachos | Banco de Alimentos')

@section('content')
<section class="w-full max-w-[1000px]">
    <form id="formDespacho" onsubmit="confirmarDespacho(event)" class="space-y-6">

        <!-- Comedor -->
        <div class="flex flex-col sm:flex-row sm:items-center gap-3 sm:gap-8">
            <label for="comedor" class="shrink-0 w-full sm:w-[320px] bg-cyanx text-black font-bold text-sm py-3 px-6 rounded-full text-center">
                COMEDOR BENEFICIADO:
            </label>
            <div class="flex items-center gap-2 text-xl sm:text-2xl font-bold">
                <span>[</span>
                <select id="comedor" required class="bg-transparent outline-none cursor-pointer font-bold">
                    <option value="">seleccionar...</option>
                    <option value="comedor san jose" selected>comedor san jose</option>
                    <option value="hogar adulto mayor">hogar adulto mayor</option>
                    <option value="centro esperanza">centro esperanza</option>
                </select>
                <span>]</span>
            </div>
        </div>

        <!-- Fecha -->
        <div class="flex flex-col sm:flex-row sm:items-center gap-3 sm:gap-8">
            <label for="fecha" class="shrink-0 w-full sm:w-[320px] bg-cyanx text-black font-bold text-sm py-3 px-6 rounded-full text-center">
                FECHA DE DESPACHO
            </label>
            <div class="flex items-center gap-2 text-xl sm:text-2xl font-bold">
                <span>[</span>
                <input type="date" id="fecha" required class="bg-transparent outline-none cursor-pointer font-bold">
                <span>]</span>
            </div>
        </div>

        <!-- Selector de productos -->
        <div class="sm:pl-[352px]">
            <div class="relative inline-block">
                <button type="button" id="btnProductos" aria-expanded="false"
                        class="bg-cyanx hover:bg-[#22c3ee] text-black font-semibold text-xs py-2.5 px-7 rounded-full transition">
                    SELECCIONAR PRODUCTOS ▼
                </button>
                <div id="menuProductos" class="hidden absolute top-12 left-0 w-[300px] bg-white rounded-2xl p-4 shadow-xl z-40 space-y-3"></div>
            </div>
        </div>

        <!-- Resumen -->
        <div class="flex flex-col sm:flex-row sm:items-center gap-3 sm:gap-8">
            <div class="shrink-0 w-full sm:w-[320px] flex sm:justify-center">
                <div class="mx-auto sm:mx-0 bg-gradient-to-r from-[#009fc2] to-[#75d34b] text-black font-bold text-xl leading-tight py-5 px-10 rounded-[2rem] text-center">
                    RESUMEN DE<br>ENTREGA
                </div>
            </div>
            <div id="resumen" class="text-xl sm:text-2xl font-bold">No hay productos seleccionados</div>
        </div>

        <!-- Caja -->
        <div class="flex flex-col sm:flex-row sm:items-center gap-3 sm:gap-8">
            <div class="shrink-0 w-full sm:w-[320px] flex sm:justify-center">
                <div class="mx-auto sm:mx-0 bg-gradient-to-r from-[#009fc2] to-[#75d34b] text-black font-bold text-sm py-3 px-8 rounded-full text-center">
                    CAJA DE DESPACHO:
                </div>
            </div>
            <div id="pesoTotal" class="text-xl sm:text-2xl font-bold">[ PESO TOTAL A DESPACHAR: 0 KG ]</div>
        </div>

        <div class="pt-4 flex justify-center">
            <button type="submit" class="bg-greenx hover:bg-[#6cca48] text-black font-bold text-xl sm:text-2xl px-12 py-3 rounded-full transition">
                CONFIRMAR Y GENERAR GUIA
            </button>
        </div>
    </form>
</section>

@push('scripts')
<script>
    // Catálogo de productos (reemplazar por datos del inventario real)
    const PRODUCTOS = [
        { id: 'arroz',  nombre: 'Arroz',  unidad: 'KG',  porDefecto: 100 },
        { id: 'frijol', nombre: 'Frijol', unidad: 'KG',  porDefecto: 50  },
        { id: 'aceite', nombre: 'Aceite', unidad: 'LTS', porDefecto: 30  },
    ];

    const menu = document.getElementById('menuProductos');
    const btn = document.getElementById('btnProductos');

    PRODUCTOS.forEach(p => {
        const fila = document.createElement('div');
        fila.className = 'flex justify-between items-center text-sm font-semibold gap-3';
        fila.innerHTML = `
            <label class="flex items-center gap-2 cursor-pointer">
                <input type="checkbox" id="chk-${p.id}" class="w-4 h-4 accent-[#0b6fd6]" checked>
                <span class="chk-nombre"></span>
            </label>
            <span class="flex items-center gap-1">
                <input type="number" id="qty-${p.id}" min="1" value="${p.porDefecto}"
                       class="w-20 border border-slate-300 rounded-lg p-1 text-right font-semibold">
                <span class="text-xs text-slate-500">${p.unidad}</span>
            </span>`;
        fila.querySelector('.chk-nombre').textContent = p.nombre;
        menu.appendChild(fila);

        fila.querySelector(`#chk-${p.id}`).addEventListener('change', actualizarResumen);
        fila.querySelector(`#qty-${p.id}`).addEventListener('input', actualizarResumen);
    });

    btn.addEventListener('click', e => {
        e.stopPropagation();
        const abierto = menu.classList.toggle('hidden') === false;
        btn.setAttribute('aria-expanded', abierto);
    });
    menu.addEventListener('click', e => e.stopPropagation());
    document.addEventListener('click', () => menu.classList.add('hidden'));

    function seleccionados() {
        return PRODUCTOS
            .filter(p => document.getElementById('chk-' + p.id).checked)
            .map(p => {
                const cant = parseInt(document.getElementById('qty-' + p.id).value, 10);
                return { ...p, cantidad: Number.isFinite(cant) && cant > 0 ? cant : 0 };
            })
            .filter(p => p.cantidad > 0);
    }

    function actualizarResumen() {
        const items = seleccionados();
        const total = items.reduce((s, p) => s + p.cantidad, 0);
        document.getElementById('resumen').textContent = items.length
            ? '[' + items.map(p => `${p.nombre.toUpperCase()}: ${p.cantidad} ${p.unidad}`).join('   ') + ']'
            : 'No hay productos seleccionados';
        document.getElementById('pesoTotal').textContent = `[ PESO TOTAL A DESPACHAR: ${total} KG ]`;
    }

    function confirmarDespacho(e) {
        e.preventDefault();
        if (!seleccionados().length) return alert('Selecciona al menos un producto.');
        alert('Despacho generado exitosamente.');
    }

    actualizarResumen();
</script>
@endpush
@endsection