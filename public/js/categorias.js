
document.addEventListener("DOMContentLoaded", function () {

    // ---------- Mostrar / ocultar ----------

    function mostrarTodosLosArticulos() {
        let articulos = document.getElementsByClassName("articulo");

        for (let i = 0; i < articulos.length; i++) {
            articulos[i].classList.remove("oculto");
        }
    }

    function ocultarTodosLosArticulos() {
        let articulos = document.getElementsByClassName("articulo");

        for (let i = 0; i < articulos.length; i++) {
            articulos[i].classList.add("oculto");
        }
    }

    // ---------- Checkbox ----------

    function desmarcarSubcategorias() {
        let checks = document.getElementsByClassName("filtro-check");

        for (let i = 0; i < checks.length; i++) {
            checks[i].checked = false;
        }
    }

    function obtenerSeleccionados(claseCategoria) {
        let checks = document.getElementsByClassName(claseCategoria);
        let seleccionados = [];

        for (let i = 0; i < checks.length; i++) {
            if (checks[i].checked) {
                seleccionados.push(checks[i].value);
            }
        }

        return seleccionados;
    }

    // ---------- Filtros por categoría ----------

    function cumpleCategoria(articulo, seleccionados) {

        if (seleccionados.length == 0) {
            return true;
        }

        for (let i = 0; i < seleccionados.length; i++) {
            if (articulo.classList.contains(seleccionados[i])) {
                return true;
            }
        }

        return false;
    }

    // ---------- Buscador por nombre ----------

    // Convertir el texto para compararlo con las clases
    function normalizarTexto(texto) {
        return texto
            .toLowerCase()
            .normalize("NFD")
            .replace(/[\u0300-\u036f]/g, "")
            .trim()
            .replace(/\s+/g, "-");
    }

    // Comprobar si el producto coincide con la búsqueda
    function cumpleBusqueda(articulo, textoBusqueda) {

        if (textoBusqueda == "") {
            return true;
        }

        let nombreClase = articulo.className.toLowerCase();

        return nombreClase.includes(textoBusqueda);
    }

    // ---------- Acciones ----------

    function accionTodos() {
        desmarcarSubcategorias();

        buscador.value = "";

        chkTodos.checked = true;

        mostrarTodosLosArticulos();
    }

    // Aplicar filtros y búsqueda
    function accionFiltrar() {

        let tipos = obtenerSeleccionados("chk-tipo");
        let presentaciones = obtenerSeleccionados("chk-presentacion");
        let nutrientes = obtenerSeleccionados("chk-nutriente");

        // Obtener texto del buscador
        let textoBusqueda = normalizarTexto(buscador.value);

        let hayFiltros =
            tipos.length > 0 ||
            presentaciones.length > 0 ||
            nutrientes.length > 0;

        // Activar Todos si no hay filtros ni búsqueda
        chkTodos.checked = !hayFiltros && textoBusqueda == "";

        ocultarTodosLosArticulos();

        let articulos = document.getElementsByClassName("articulo");

        for (let i = 0; i < articulos.length; i++) {

            let articulo = articulos[i];

            // Revisar categorías
            let cumpleFiltros =
                cumpleCategoria(articulo, tipos) &&
                cumpleCategoria(articulo, presentaciones) &&
                cumpleCategoria(articulo, nutrientes);

            // Revisar nombre del producto
            let cumpleNombre = cumpleBusqueda(articulo, textoBusqueda);

            // Mostrar solamente si cumple ambas condiciones
            if (cumpleFiltros && cumpleNombre) {
                articulo.classList.remove("oculto");
            }
        }
    }

    // ---------- Enlaces y eventos ----------

    let chkTodos = document.getElementById("chk-todos");

    let buscador = document.getElementById("buscador-productos");

    let checks = document.getElementsByClassName("filtro-check");

    // Evento del checkbox Todos
    if (chkTodos) {
        chkTodos.addEventListener("change", accionTodos);
    }

    // Eventos de filtros
    for (let i = 0; i < checks.length; i++) {
        checks[i].addEventListener("change", accionFiltrar);
    }

    // Evento del buscador
    if (buscador) {
        buscador.addEventListener("input", accionFiltrar);
    }

    // ---------- Eventos del mouse ----------

// Función para resaltar un producto
function resaltarProducto(productDiv) {

    productDiv.style.transform = "scale(1.05)";

    productDiv.classList.remove("border-gray-400");
    productDiv.classList.add("border-red-500");

    productDiv.classList.add("shadow-lg");

    productDiv.classList.remove("rounded-md");
    productDiv.classList.add("rounded-xl");
}

// Función para restaurar el producto
function restaurarProducto(productDiv) {

    productDiv.style.transform = "scale(1)";

    productDiv.classList.remove("border-red-500");
    productDiv.classList.add("border-gray-400");

    productDiv.classList.remove("shadow-lg");

    productDiv.classList.remove("rounded-xl");
    productDiv.classList.add("rounded-md");
}

// Obtener todas las tarjetas
let productos = document.getElementsByClassName("producto-card");

// Agregar eventos a cada tarjeta
for (let i = 0; i < productos.length; i++) {

    let productDiv = productos[i];

    productDiv.addEventListener("mouseenter", function () {
        resaltarProducto(productDiv);
    });

    productDiv.addEventListener("mouseleave", function () {
        restaurarProducto(productDiv);
    });
}
});
