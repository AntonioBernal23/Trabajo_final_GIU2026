@extends('layouts.app')

@section('content')
<main class="flex-1 py-[45px] px-[25px] bg-[linear-gradient(135deg,#f3e9ff,#fff0f7_35%,#eafcff_70%,#dffff9)] flex flex-col items-center max-md:py-[30px] max-md:px-[15px]">

    <!-- Fila 1 -->
    <div class="w-full max-w-[850px] flex items-center justify-start gap-[25px] mb-[25px] max-md:flex-col max-md:gap-2.5 max-md:text-center">
        <div class="w-[220px] shrink-0 flex justify-center max-md:w-full">
            <div class="bg-[#35c9ed] rounded-[30px] py-[9px] px-[15px] w-[200px] text-center text-[12px] font-bold">COMEDOR BENEFICIADO:</div>
        </div>
        <div class="flex-1 flex items-center justify-start relative max-md:w-full max-md:justify-center">
            <select class="w-[300px] max-w-full border-none bg-transparent text-[17px] font-bold p-[7px] cursor-pointer max-md:text-center" id="comedor">
                <option value="Comedor San José">Comedor San José</option>
                <option value="Comedor Esperanza">Comedor Esperanza</option>
                <option value="Comedor Santa María">Comedor Santa María</option>
            </select>
        </div>
    </div>

    <!-- Fila 2 -->
    <div class="w-full max-w-[850px] flex items-center justify-start gap-[25px] mb-[25px] max-md:flex-col max-md:gap-2.5 max-md:text-center">
        <div class="w-[220px] shrink-0 flex justify-center max-md:w-full">
            <div class="bg-[#35c9ed] rounded-[30px] py-[9px] px-[15px] w-[200px] text-center text-[12px] font-bold">FECHA DE DESPACHO</div>
        </div>
        <div class="flex-1 flex items-center justify-start relative max-md:w-full max-md:justify-center">
            <input type="date" id="fecha" class="w-[300px] max-w-full border-none bg-transparent text-[17px] font-bold p-[7px] cursor-pointer max-md:text-center">
        </div>
    </div>

    <!-- Fila 3: Selección de productos alineada a la derecha -->
    <div class="w-full max-w-[850px] flex items-center justify-start gap-[25px] mb-[25px] max-md:flex-col max-md:gap-2.5 max-md:text-center">
        <div class="w-[220px] shrink-0 flex justify-center max-md:w-full"></div>
        <div class="flex-1 flex items-center justify-start relative max-md:w-full max-md:justify-center">
            <div class="dropdown-productos">
                <button type="button" class="bg-[#35c9ed] border-none rounded-[25px] py-2.5 px-7 text-[13px] font-bold cursor-pointer hover:bg-[#22b9df]" onclick="abrirProductos()">
                    SELECCIONAR PRODUCTOS ▼
                </button>

                <div class="hidden [&.mostrar]:block absolute top-[45px] left-0 w-[280px] bg-white rounded-[10px] p-[15px] shadow-[0_4px_15px_rgba(0,0,0,0.2)] z-[100] max-md:left-1/2 max-md:-translate-x-1/2" id="menuProductos">
                    <div class="producto flex items-center justify-between gap-3 mb-3 text-[14px] font-bold last:mb-0">
                        <div class="flex items-center">
                            <input type="checkbox" id="arrozCheck" class="mr-2 w-4 h-4 cursor-pointer" onchange="mostrarCantidad('arroz')">
                            <label for="arrozCheck" class="cursor-pointer">Arroz</label>
                        </div>
                        <input type="number" id="arrozCantidad" class="hidden [&.mostrar]:block w-[75px] border border-[#aaa] rounded-md p-1 font-bold" min="1" max="100" value="1" oninput="validarCantidad(this)">
                    </div>

                    <div class="producto flex items-center justify-between gap-3 mb-3 text-[14px] font-bold last:mb-0">
                        <div class="flex items-center">
                            <input type="checkbox" id="frijolCheck" class="mr-2 w-4 h-4 cursor-pointer" onchange="mostrarCantidad('frijol')">
                            <label for="frijolCheck" class="cursor-pointer">Frijol</label>
                        </div>
                        <input type="number" id="frijolCantidad" class="hidden [&.mostrar]:block w-[75px] border border-[#aaa] rounded-md p-1 font-bold" min="1" max="100" value="1" oninput="validarCantidad(this)">
                    </div>

                    <div class="producto flex items-center justify-between gap-3 mb-3 text-[14px] font-bold last:mb-0">
                        <div class="flex items-center">
                            <input type="checkbox" id="aceiteCheck" class="mr-2 w-4 h-4 cursor-pointer" onchange="mostrarCantidad('aceite')">
                            <label for="aceiteCheck" class="cursor-pointer">Aceite</label>
                        </div>
                        <input type="number" id="aceiteCantidad" class="hidden [&.mostrar]:block w-[75px] border border-[#aaa] rounded-md p-1 font-bold" min="1" max="100" value="1" oninput="validarCantidad(this)">
                    </div>

                    <div class="producto flex items-center justify-between gap-3 mb-3 text-[14px] font-bold last:mb-0">
                        <div class="flex items-center">
                            <input type="checkbox" id="lentejasCheck" class="mr-2 w-4 h-4 cursor-pointer" onchange="mostrarCantidad('lentejas')">
                            <label for="lentejasCheck" class="cursor-pointer">Lentejas</label>
                        </div>
                        <input type="number" id="lentejasCantidad" class="hidden [&.mostrar]:block w-[75px] border border-[#aaa] rounded-md p-1 font-bold" min="1" max="100" value="1" oninput="validarCantidad(this)">
                    </div>

                    <div class="producto flex items-center justify-between gap-3 mb-3 text-[14px] font-bold last:mb-0">
                        <div class="flex items-center">
                            <input type="checkbox" id="azucarCheck" class="mr-2 w-4 h-4 cursor-pointer" onchange="mostrarCantidad('azucar')">
                            <label for="azucarCheck" class="cursor-pointer">Azúcar</label>
                        </div>
                        <input type="number" id="azucarCantidad" class="hidden [&.mostrar]:block w-[75px] border border-[#aaa] rounded-md p-1 font-bold" min="1" max="100" value="1" oninput="validarCantidad(this)">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Fila 4 -->
    <div class="w-full max-w-[850px] flex items-center justify-start gap-[25px] mb-[25px] max-md:flex-col max-md:gap-2.5 max-md:text-center">
        <div class="w-[220px] shrink-0 flex justify-center max-md:w-full">
            <div class="bg-[linear-gradient(90deg,#009fc2,#75d34b)] rounded-[25px] w-[180px] min-h-[55px] flex items-center justify-center text-center text-[14px] font-bold">RESUMEN DE<br>ENTREGA</div>
        </div>
        <div class="flex-1 flex items-center justify-start relative max-md:w-full max-md:justify-center">
            <div class="max-w-[450px] text-[16px] font-bold [overflow-wrap:anywhere]" id="resumen">No hay productos seleccionados</div>
        </div>
    </div>

    <!-- Fila 5 -->
    <div class="w-full max-w-[850px] flex items-center justify-start gap-[25px] mb-[25px] max-md:flex-col max-md:gap-2.5 max-md:text-center">
        <div class="w-[220px] shrink-0 flex justify-center max-md:w-full">
            <div class="bg-[#64cf54] rounded-[25px] py-[9px] px-3 w-[180px] text-center text-[12px] font-bold">CAJA DE DESPACHO:</div>
        </div>
        <div class="flex-1 flex items-center justify-start relative max-md:w-full max-md:justify-center">
            <div class="text-[16px] font-bold [overflow-wrap:anywhere]" id="pesoTotal">[ TOTAL A DESPACHAR: 0 KG ]</div>
        </div>
    </div>

    <button class="block mx-auto mt-[30px] mb-2.5 bg-[#70d34f] text-black border-none rounded-[30px] py-3 px-[35px] text-[15px] font-bold cursor-pointer hover:bg-[#5fc340]" onclick="confirmarDespacho()">
        CONFIRMAR Y GENERAR GUIA
    </button>

</main>

<script>
    function abrirProductos() {
        document.getElementById("menuProductos").classList.toggle("mostrar");
    }

    function mostrarCantidad(producto) {
        let checkbox = document.getElementById(producto + "Check");
        let cantidad = document.getElementById(producto + "Cantidad");

        if (checkbox.checked) {
            cantidad.classList.add("mostrar");
        } else {
            cantidad.classList.remove("mostrar");
        }

        actualizarResumen();
    }

    function validarCantidad(campo) {
        if (campo.value === "") {
            actualizarResumen();
            return;
        }

        let cantidad = parseInt(campo.value);

        if (cantidad > 100) campo.value = 100;
        if (cantidad < 1 || isNaN(cantidad)) campo.value = 1;

        actualizarResumen();
    }

    function actualizarResumen() {
        let productos = [];
        let totalKg = 0;
        let totalLitros = 0;

        const listaProductos = [
            { id: "arroz", nombre: "ARROZ", unidad: "KG" },
            { id: "frijol", nombre: "FRIJOL", unidad: "KG" },
            { id: "aceite", nombre: "ACEITE", unidad: "LTS" },
            { id: "lentejas", nombre: "LENTEJAS", unidad: "KG" },
            { id: "azucar", nombre: "AZÚCAR", unidad: "KG" }
        ];

        listaProductos.forEach(function(producto) {
            let checkbox = document.getElementById(producto.id + "Check");
            let campo = document.getElementById(producto.id + "Cantidad");

            if (checkbox.checked) {
                let cantidad = parseInt(campo.value);

                if (isNaN(cantidad) || cantidad < 1) return;

                productos.push(producto.nombre + ": " + cantidad + " " + producto.unidad);

                if (producto.unidad === "KG") {
                    totalKg += cantidad;
                } else {
                    totalLitros += cantidad;
                }
            }
        });

        document.getElementById("resumen").textContent =
            productos.length === 0
                ? "No hay productos seleccionados"
                : productos.join(" | ");

        let totalTexto = "[ TOTAL A DESPACHAR: " + totalKg + " KG";

        if (totalLitros > 0) {
            totalTexto += " + " + totalLitros + " LTS";
        }

        document.getElementById("pesoTotal").textContent = totalTexto + " ]";
    }

    function confirmarDespacho() {
        let comedor = document.getElementById("comedor").value;
        let fecha = document.getElementById("fecha").value;

        if (fecha === "") {
            alert("Selecciona una fecha de despacho.");
            return;
        }

        let seleccionados = document.querySelectorAll(
            '.producto input[type="checkbox"]:checked'
        );

        if (seleccionados.length === 0) {
            alert("Selecciona al menos un producto.");
            return;
        }

        alert(
            "Despacho preparado correctamente.\n\n" +
            "Comedor: " + comedor + "\n" +
            "Fecha: " + fecha + "\n\n" +
            document.getElementById("resumen").textContent + "\n" +
            document.getElementById("pesoTotal").textContent
        );
    }
</script>
@endsection