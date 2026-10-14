@extends('layouts.app')

@section('content')
<main class="flex-1 w-full min-h-[calc(100vh-120px)] py-10 px-[75px] bg-[linear-gradient(135deg,#f3e9ff,#fff0f7_35%,#eafcff_70%,#dffff9)] flex flex-col items-center max-md:px-[15px]">

    <!-- Búsqueda -->
    <div class="w-full max-w-[1100px] mb-[50px]">
        <div class="w-full max-w-[520px] bg-[#ffdd5c] rounded-[30px] py-2.5 px-5 flex items-center justify-center gap-1.5 max-md:max-w-full">
            <span>🔍</span>
            <input type="text" id="inputBuscarInventario" class="flex-1 bg-transparent border-none outline-none text-[14px] font-bold text-black placeholder:text-black" placeholder="buscar alimentos por nombre o codigo..." onkeyup="filtrarInventario()">
        </div>

        <a href="{{ route('caducidad') }}" class="inline-block mt-4 bg-[#3dd5fb] rounded-[30px] py-2.5 px-5 text-[14px] font-bold text-black hover:opacity-80 transition">
            ⚠️ Ver alimentos próximos a vencer
        </a>
    </div>

    <!-- Tabla de inventario -->
    <div class="w-full max-w-[500px] overflow-x-auto">
        <table class="w-full border-collapse border-2 border-black" id="tablaInventario">
            <thead>
                <tr>
                    <th class="border-2 border-black bg-[#c9d1db] text-white text-[15px] font-bold py-5 px-4 text-center">PRODUCTOS</th>
                    <th class="border-2 border-black bg-[#c9d1db] text-white text-[15px] font-bold py-5 px-4 text-center">CATEGORIAS</th>
                    <th class="border-2 border-black bg-[#c9d1db] text-white text-[15px] font-bold py-5 px-4 text-center">STOCK</th>
                    <th class="border-2 border-black bg-[#c9d1db] text-white text-[15px] font-bold py-5 px-4 text-center">ESTADO</th>
                </tr>
            </thead>
            <tbody id="tbodyInventario">
                <tr>
                    <td class="border-2 border-black py-5 px-4 text-center text-[14px] text-black">ARROZ</td>
                    <td class="border-2 border-black py-5 px-4 text-center text-[14px] text-black">GRANOS</td>
                    <td class="border-2 border-black py-5 px-4 text-center text-[14px] text-black">1,200 KG</td>
                    <td class="border-2 border-black py-5 px-4 text-center text-[14px] text-black">DISPONIBLE</td>
                </tr>
                <tr>
                    <td class="border-2 border-black py-5 px-4 text-center text-[14px] text-black">LECHE ENTERA</td>
                    <td class="border-2 border-black py-5 px-4 text-center text-[14px] text-black">LACTEOS</td>
                    <td class="border-2 border-black py-5 px-4 text-center text-[14px] text-black">400 LTS</td>
                    <td class="border-2 border-black py-5 px-4 text-center text-[14px] text-black">STOCK BAJO</td>
                </tr>
                <tr>
                    <td class="border-2 border-black py-5 px-4 text-center text-[14px] text-black">ATUN EN LATA</td>
                    <td class="border-2 border-black py-5 px-4 text-center text-[14px] text-black">ENLATADOS</td>
                    <td class="border-2 border-black py-5 px-4 text-center text-[14px] text-black">0 KG</td>
                    <td class="border-2 border-black py-5 px-4 text-center text-[14px] text-black">AGOTADO</td>
                </tr>
            </tbody>
        </table>
    </div>

</main>

<script>
    // Filtrar el inventario por nombre o categoría
    function filtrarInventario() {
        let texto = document.getElementById('inputBuscarInventario').value.toUpperCase();
        let filas = document.querySelectorAll('#tbodyInventario tr');

        filas.forEach(fila => {
            let producto = fila.cells[0].textContent.toUpperCase();
            let categoria = fila.cells[1].textContent.toUpperCase();

            if (producto.includes(texto) || categoria.includes(texto)) {
                fila.style.display = '';
            } else {
                fila.style.display = 'none';
            }
        });
    }
</script>
@endsection