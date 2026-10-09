@extends('layouts.app')

@section('title', 'Inventario | Banco de Alimentos')

@section('content')
@php
    // Datos de ejemplo (sustituir por datos reales del controlador)
    $productos = [
        ['ARROZ',       'GRANOS',    '1,200 KG', 'DISPONIBLE', 'text-green-700'],
        ['LECHE ENTERA','LACTEOS',   '400 LTS',  'STOCK BAJO', 'text-amber-600'],
        ['ATUN EN LATA','ENLATADOS', '0 KG',     'AGOTADO',    'text-red-600'],
    ];
@endphp

<section class="w-full max-w-[1000px]">

    <!-- Buscador -->
    <div class="mb-10">
        <label for="buscar" class="sr-only">Buscar alimentos</label>
        <div class="flex items-center justify-center bg-[#ffde59] rounded-full px-6 py-3 max-w-[700px]">
            <span aria-hidden="true" class="mr-2">🔍</span>
            <input type="search" id="buscar" placeholder="buscar alimentos por nombre o codigo..." oninput="filtrar()"
                   class="w-full bg-transparent text-center font-bold text-base outline-none placeholder-black/80">
        </div>
    </div>

    <!-- Tabla -->
    <div class="overflow-x-auto flex justify-center">
        <table class="border-2 border-black border-collapse text-center w-full max-w-[650px]">
            <thead>
                <tr class="bg-pill text-white font-bold text-sm">
                    <th class="border-2 border-black py-6 px-3">PRODUCTOS</th>
                    <th class="border-2 border-black py-6 px-3">CATEGORIAS</th>
                    <th class="border-2 border-black py-6 px-3">STOCK</th>
                    <th class="border-2 border-black py-6 px-3">ESTADO</th>
                </tr>
            </thead>
            <tbody id="tbodyInventario" class="text-sm bg-white/40">
                @foreach ($productos as [$nombre, $categoria, $stock, $estado, $color])
                    <tr>
                        <td class="border-2 border-black py-6 px-3">{{ $nombre }}</td>
                        <td class="border-2 border-black py-6 px-3">{{ $categoria }}</td>
                        <td class="border-2 border-black py-6 px-3">{{ $stock }}</td>
                        <td class="border-2 border-black py-6 px-3 font-semibold {{ $color }}">{{ $estado }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <p id="sinResultados" class="hidden text-center text-sm font-medium py-6">No se encontraron productos.</p>
</section>

@push('scripts')
<script>
    function filtrar() {
        const q = document.getElementById('buscar').value.trim().toUpperCase();
        let visibles = 0;
        document.querySelectorAll('#tbodyInventario tr').forEach(tr => {
            const ok = tr.textContent.toUpperCase().includes(q);
            tr.style.display = ok ? '' : 'none';
            if (ok) visibles++;
        });
        document.getElementById('sinResultados').classList.toggle('hidden', visibles > 0);
    }
</script>
@endpush
@endsection