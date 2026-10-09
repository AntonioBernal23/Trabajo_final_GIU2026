@extends('layouts.app')

@section('content')
<style>
    .contenido {
        flex: 1;
        padding: 45px 25px;
        background: linear-gradient(135deg, #f3e9ff, #fff0f7 35%, #eafcff 70%, #dffff9);
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    /* FILAS ALINEADAS EN DOS COLUMNAS */
    .fila {
        width: 100%;
        max-width: 850px;
        display: flex;
        align-items: center;
        justify-content: flex-start;
        gap: 25px;
        margin-bottom: 25px;
    }

    .etiqueta-col {
        width: 220px;
        flex-shrink: 0;
        display: flex;
        justify-content: center;
    }

    .valor-col {
        flex: 1;
        display: flex;
        align-items: center;
        justify-content: flex-start;
        position: relative;
    }

    .etiqueta-cyan {
        background-color: #35c9ed;
        border-radius: 30px;
        padding: 9px 15px;
        width: 200px;
        text-align: center;
        font-size: 12px;
        font-weight: bold;
    }

    .select-comedor,
    .select-fecha {
        width: 300px;
        max-width: 100%;
        border: none;
        background-color: transparent;
        font-size: 17px;
        font-weight: bold;
        padding: 7px;
        cursor: pointer;
    }

    /* BOTÓN Y MENÚ DE PRODUCTOS */
    .boton-productos {
        background-color: #35c9ed;
        border: none;
        border-radius: 25px;
        padding: 10px 28px;
        font-size: 13px;
        font-weight: bold;
        cursor: pointer;
    }

    .boton-productos:hover {
        background-color: #22b9df;
    }

    .menu-productos {
        display: none;
        position: absolute;
        top: 45px;
        left: 0;
        width: 280px;
        background-color: white;
        border-radius: 10px;
        padding: 15px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        z-index: 100;
    }

    .menu-productos.mostrar {
        display: block;
    }

    .producto {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 12px;
        margin-bottom: 12px;
        font-size: 14px;
        font-weight: bold;
    }

    .producto:last-child {
        margin-bottom: 0;
    }

    .producto-nombre {
        display: flex;
        align-items: center;
    }

    .producto-nombre input {
        margin-right: 8px;
        width: 16px;
        height: 16px;
        cursor: pointer;
    }

    .producto-nombre label {
        cursor: pointer;
    }

    .cantidad {
        width: 75px;
        border: 1px solid #aaa;
        border-radius: 6px;
        padding: 4px;
        font-weight: bold;
        display: none;
    }

    .cantidad.mostrar {
        display: block;
    }

    /* RESUMEN */
    .etiqueta-resumen {
        background: linear-gradient(90deg, #009fc2, #75d34b);
        border-radius: 25px;
        width: 180px;
        min-height: 55px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        font-size: 14px;
        font-weight: bold;
    }

    .resumen-texto {
        max-width: 450px;
        font-size: 16px;
        font-weight: bold;
        overflow-wrap: anywhere;
    }

    /* TOTAL */
    .etiqueta-despacho {
        background-color: #64cf54;
        border-radius: 25px;
        padding: 9px 12px;
        width: 180px;
        text-align: center;
        font-size: 12px;
        font-weight: bold;
    }

    .total {
        font-size: 16px;
        font-weight: bold;
        overflow-wrap: anywhere;
    }

    /* BOTÓN CONFIRMAR */
    .boton-confirmar {
        display: block;
        margin: 30px auto 10px;
        background-color: #70d34f;
        color: #000;
        border: none;
        border-radius: 30px;
        padding: 12px 35px;
        font-size: 15px;
        font-weight: bold;
        cursor: pointer;
    }

    .boton-confirmar:hover {
        background-color: #5fc340;
    }

    /* RESPONSIVO */
    @media (max-width: 768px) {
        .contenido {
            padding: 30px 15px;
        }

        .fila {
            flex-direction: column;
            gap: 10px;
            text-align: center;
        }

        .etiqueta-col, .valor-col {
            width: 100%;
            justify-content: center;
        }

        .select-comedor, .select-fecha {
            text-align: center;
        }

        .menu-productos {
            left: 50%;
            transform: translateX(-50%);
        }
    }
</style>

<main class="contenido">

    <!-- Fila 1 -->
    <div class="fila">
        <div class="etiqueta-col">
            <div class="etiqueta-cyan">COMEDOR BENEFICIADO:</div>
        </div>
        <div class="valor-col">
            <select class="select-comedor" id="comedor">
                <option value="Comedor San José">Comedor San José</option>
                <option value="Comedor Esperanza">Comedor Esperanza</option>
                <option value="Comedor Santa María">Comedor Santa María</option>
            </select>
        </div>
    </div>

    <!-- Fila 2 -->
    <div class="fila">
        <div class="etiqueta-col">
            <div class="etiqueta-cyan">FECHA DE DESPACHO</div>
        </div>
        <div class="valor-col">
            <input type="date" id="fecha" class="select-fecha">
        </div>
    </div>

    <!-- Fila 3: Selección de productos alineada a la derecha -->
    <div class="fila">
        <div class="etiqueta-col"></div>
        <div class="valor-col">
            <div class="dropdown-productos">
                <button type="button" class="boton-productos" onclick="abrirProductos()">
                    SELECCIONAR PRODUCTOS ▼
                </button>

                <div class="menu-productos" id="menuProductos">
                    <div class="producto">
                        <div class="producto-nombre">
                            <input type="checkbox" id="arrozCheck" onchange="mostrarCantidad('arroz')">
                            <label for="arrozCheck">Arroz</label>
                        </div>
                        <input type="number" id="arrozCantidad" class="cantidad" min="1" max="100" value="1" oninput="validarCantidad(this)">
                    </div>

                    <div class="producto">
                        <div class="producto-nombre">
                            <input type="checkbox" id="frijolCheck" onchange="mostrarCantidad('frijol')">
                            <label for="frijolCheck">Frijol</label>
                        </div>
                        <input type="number" id="frijolCantidad" class="cantidad" min="1" max="100" value="1" oninput="validarCantidad(this)">
                    </div>

                    <div class="producto">
                        <div class="producto-nombre">
                            <input type="checkbox" id="aceiteCheck" onchange="mostrarCantidad('aceite')">
                            <label for="aceiteCheck">Aceite</label>
                        </div>
                        <input type="number" id="aceiteCantidad" class="cantidad" min="1" max="100" value="1" oninput="validarCantidad(this)">
                    </div>

                    <div class="producto">
                        <div class="producto-nombre">
                            <input type="checkbox" id="lentejasCheck" onchange="mostrarCantidad('lentejas')">
                            <label for="lentejasCheck">Lentejas</label>
                        </div>
                        <input type="number" id="lentejasCantidad" class="cantidad" min="1" max="100" value="1" oninput="validarCantidad(this)">
                    </div>

                    <div class="producto">
                        <div class="producto-nombre">
                            <input type="checkbox" id="azucarCheck" onchange="mostrarCantidad('azucar')">
                            <label for="azucarCheck">Azúcar</label>
                        </div>
                        <input type="number" id="azucarCantidad" class="cantidad" min="1" max="100" value="1" oninput="validarCantidad(this)">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Fila 4 -->
    <div class="fila">
        <div class="etiqueta-col">
            <div class="etiqueta-resumen">RESUMEN DE<br>ENTREGA</div>
        </div>
        <div class="valor-col">
            <div class="resumen-texto" id="resumen">No hay productos seleccionados</div>
        </div>
    </div>

    <!-- Fila 5 -->
    <div class="fila">
        <div class="etiqueta-col">
            <div class="etiqueta-despacho">CAJA DE DESPACHO:</div>
        </div>
        <div class="valor-col">
            <div class="total" id="pesoTotal">[ TOTAL A DESPACHAR: 0 KG ]</div>
        </div>
    </div>

    <button class="boton-confirmar" onclick="confirmarDespacho()">
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