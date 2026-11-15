
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

    function normalizarTexto(texto) {
        return texto
            .toLowerCase()
            .normalize("NFD")
            .replace(/[\u0300-\u036f]/g, "")
            .trim()
            .replace(/\s+/g, "-");
    }

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

    // ---------- Nuevas transiciones y animaciones ----------

    // Función cuando el mouse entra al producto
    function accionMouseOver(productDiv) {
        // Borde rojo al entrar el mouse
        productDiv.classList.remove("border-gray-400");
        productDiv.classList.add("border-red-500");

        // Efecto 1: cambiar el fondo de la tarjeta
        productDiv.classList.remove("bg-white");
        productDiv.classList.add("bg-blue-50");

        // Obtener la imagen del producto
        let imagen = productDiv.getElementsByClassName("producto-img")[0];

        // Efecto 2: aumentar y girar ligeramente la imagen
        if (imagen) {
            imagen.classList.add("scale-110");
            imagen.classList.add("rotate-2");
        }

        // Obtener el título del producto
        let titulo = productDiv.getElementsByClassName("producto-titulo")[0];

        // Efecto 3: cambiar el color del título
        if (titulo) {
            titulo.classList.remove("text-slate-800");
            titulo.classList.add("text-blue-700");
        }
    }

    // Función cuando el mouse sale del producto
    function accionMouseOut(productDiv) {

        // Restaurar el fondo
        productDiv.classList.remove("bg-blue-50");
        productDiv.classList.add("bg-white");

        // Restaurar borde gris al salir el mouse
        productDiv.classList.remove("border-red-500");
        productDiv.classList.add("border-gray-400");

        // Obtener la imagen
        let imagen = productDiv.getElementsByClassName("producto-img")[0];

        // Restaurar tamaño y rotación
        if (imagen) {
            imagen.classList.remove("scale-110");
            imagen.classList.remove("rotate-2");
        }

        // Obtener el título
        let titulo = productDiv.getElementsByClassName("producto-titulo")[0];

        // Restaurar el color
        if (titulo) {
            titulo.classList.remove("text-blue-700");
            titulo.classList.add("text-slate-800");
        }
    }

    // Obtener todas las tarjetas mediante su clase
    let productos = document.getElementsByClassName("producto-card");

    // Agregar eventos a cada tarjeta
    for (let i = 0; i < productos.length; i++) {

        let productDiv = productos[i];

        productDiv.addEventListener("mouseover", function (evento) {

            // Evitar repetir el efecto al pasar por elementos internos
            if (!productDiv.contains(evento.relatedTarget)) {
                accionMouseOver(productDiv);
            }
        });

        productDiv.addEventListener("mouseout", function (evento) {

            // Restaurar solamente cuando se sale de toda la tarjeta
            if (!productDiv.contains(evento.relatedTarget)) {
                accionMouseOut(productDiv);
            }
        });
    }

    // ---------- Efecto adicional en el buscador ----------

    // Obtener el buscador mediante su ID
    if (buscador) {

        buscador.addEventListener("mouseover", function () {
            buscador.classList.add("bg-blue-50");
            buscador.classList.add("ring-2");
            buscador.classList.add("ring-blue-400");
        });

        buscador.addEventListener("mouseout", function () {
            buscador.classList.remove("bg-blue-50");
            buscador.classList.remove("ring-2");
            buscador.classList.remove("ring-blue-400");
        });
    }

});
