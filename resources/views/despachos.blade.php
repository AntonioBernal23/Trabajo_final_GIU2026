@extends('layouts.app')

@section('content')
<main class="flex-1 p-6 sm:p-10 bg-gradient-to-br from-[#f3e9ff] via-[#fff0f7] via-35% via-[#eafcff] via-70% to-[#dffff9] min-h-[85vh] flex flex-col items-center">
    <div class="w-full max-w-[850px] space-y-6">

        <!-- Fila 1 -->
        <div class="flex flex-col sm:flex-row items-center gap-4">
            <div class="w-full sm:w-[220px] flex justify-center shrink-0">
                <div class="bg-[#35c9ed] text-black font-bold text-xs py-2.5 px-4 rounded-full w-[200px] text-center">COMEDOR BENEFICIADO:</div>
            </div>
            <div class="w-full sm:w-auto">
                <select id="comedor" class="w-[300px] max-w-full bg-transparent font-bold text-lg outline-none cursor-pointer">
                    <option value="Comedor San José">Comedor San José</option>
                    <option value="Comedor Esperanza">Comedor Esperanza</option>
                    <option value="Comedor Santa María">Comedor Santa María</option>
                </select>
            </div>
        </div>

        <!-- Fila 2 -->
        <div class="flex flex-col sm:flex-row items-center gap-4">
            <div class="w-full sm:w-[220px] flex justify-center shrink-0">
                <div class="bg-[#35c9ed] text-black font-bold text-xs py-2.5 px-4 rounded-full w-[200px] text-center">FECHA DE DESPACHO</div>
            </div>
            <div class="w-full sm:w-auto">
                <input type="date" id="fecha" class="w-[300px] max-w-full bg-transparent font-bold text-lg outline-none cursor-pointer">
            </div>
        </div>

        <!-- Fila 3: Selección de productos -->
        <div class="flex flex-col sm:flex-row items-center gap-4">
            <div class="w-full sm:w-[220px] shrink-0"></div>
            <div class="relative w-full sm:w-auto">
                <button type="button" onclick="abrirProductos()" class="bg-[#35c9ed] hover:bg-[#22b9df] text-black font-bold text-xs py-2.5 px-7 rounded-full shadow-sm">
                    SELECCIONAR PRODUCTOS ▼
                </button>
                <div id="menuProductos" class="hidden absolute top-12 left-0 w-[280px] bg-white rounded-xl p-4 shadow-xl z-50 space-y-3">
                    <div class="flex justify-between items-center text-sm font-bold">
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="checkbox" id="arrozCheck" onchange="mostrarCantidad('arroz')" class="w-4 h-4"> Arroz
                        </label>
                        <input type="number" id="arrozCantidad" min="1" value="1" oninput="validarCantidad(this)" class="hidden w-16 border rounded p-1 font-bold">
                    </div>
                    <div class="flex justify-between items-center text-sm font-bold">
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="checkbox" id="frijolCheck" onchange="mostrarCantidad('frijol')" class="w-4 h-4"> Frijol
                        </label>
                        <input type="number" id="frijolCantidad" min="1" value="1" oninput="validarCantidad(this)" class="hidden w-16 border rounded p-1 font-bold">
                    </div>
                </div>
            </div>
        </div>

        <!-- Fila 4 -->
        <div class="flex flex-col sm:flex-row items-center gap-4">
            <div class="w-full sm:w-[220px] flex justify-center shrink-0">
                <div class="bg-gradient-to-r from-[#009fc2] to-[#75d34b] text-black font-bold text-xs py-3 px-4 rounded-3xl w-[180px] text-center">RESUMEN DE<br>ENTREGA</div>
            </div>
            <div class="w-full sm:w-auto font-bold text-base text-slate-800" id="resumen">No hay productos seleccionados</div>
        </div>

        <!-- Fila 5 -->
        <div class="flex flex-col sm:flex-row items-center gap-4">
            <div class="w-full sm:w-[220px] flex justify-center shrink-0">
                <div class="bg-[#64cf54] text-black font-bold text-xs py-2.5 px-4 rounded-full w-[180px] text-center">CAJA DE DESPACHO:</div>
            </div>
            <div class="w-full sm:w-auto font-bold text-base text-slate-800" id="pesoTotal">[ TOTAL A DESPACHAR: 0 KG ]</div>
        </div>

        <button onclick="confirmarDespacho()" class="block mx-auto mt-8 bg-[#70d34f] hover:bg-[#5fc340] text-black font-extrabold text-sm px-9 py-3 rounded-full transition shadow-sm">
            CONFIRMAR Y GENERAR GUIA
        </button>

    </div>
</main>

<script>
    function abrirProductos() { document.getElementById("menuProductos").classList.toggle("hidden"); }
    function mostrarCantidad(prod) {
        let chk = document.getElementById(prod + "Check");
        let qty = document.getElementById(prod + "Cantidad");
        chk.checked ? qty.classList.remove("hidden") : qty.classList.add("hidden");
        actualizarResumen();
    }
    function validarCantidad(el) { actualizarResumen(); }
    function actualizarResumen() {
        let res = []; let kg = 0;
        if(document.getElementById("arrozCheck")?.checked) { let v = parseInt(document.getElementById("arrozCantidad").value)||1; res.push("ARROZ: "+v+" KG"); kg+=v; }
        if(document.getElementById("frijolCheck")?.checked) { let v = parseInt(document.getElementById("frijolCantidad").value)||1; res.push("FRIJOL: "+v+" KG"); kg+=v; }
        document.getElementById("resumen").textContent = res.length ? res.join(" | ") : "No hay productos seleccionados";
        document.getElementById("pesoTotal").textContent = "[ TOTAL A DESPACHAR: " + kg + " KG ]";
    }
    function confirmarDespacho() {
        if(!document.getElementById("fecha").value) return alert("Selecciona una fecha de despacho.");
        alert("Despacho generado exitosamente.");
    }
</script>
@endsection