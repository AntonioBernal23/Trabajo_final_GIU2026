document.addEventListener("DOMContentLoaded", function () {

    // ---------- Mostrar / ocultar ----------
    function mostrarTodosLosArticulos() {
        let todosLosArticulos = document.getElementsByClassName("articulo");
        for (let i = 0; i < todosLosArticulos.length; i++) {
            todosLosArticulos[i].classList.remove("oculto");
        }
    }

    function ocultarTodosLosArticulos() {
        let todosLosArticulos = document.getElementsByClassName("articulo");
        for (let i = 0; i < todosLosArticulos.length; i++) {
            todosLosArticulos[i].classList.add("oculto");
        }
    }

    // ---------- Checkbox ----------
    function desmarcarSubcategorias() {
        let checks = document.getElementsByClassName("filtro-check");
        for (let i = 0; i < checks.length; i++) {
            checks[i].checked = false;
        }
    }

    // Regresa un arreglo con los valores (nombres de clase) marcados de una categoría
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

    // INCLUSIÓN: dentro de una misma categoría basta con cumplir UNA subcategoría marcada.
    // Si no hay nada marcado en la categoría, no se filtra por ella.
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

    // ---------- Acciones ----------
    function accionTodos() {
        desmarcarSubcategorias();
        chkTodos.checked = true;
        mostrarTodosLosArticulos();
    }

    function accionFiltrar() {
        let tipos = obtenerSeleccionados("chk-tipo");
        let presentaciones = obtenerSeleccionados("chk-presentacion");
        let nutrientes = obtenerSeleccionados("chk-nutriente");

        // Ninguna marcada: se muestran todos
        if (tipos.length == 0 && presentaciones.length == 0 && nutrientes.length == 0) {
            chkTodos.checked = true;
            mostrarTodosLosArticulos();
            return;
        }

        chkTodos.checked = false;
        ocultarTodosLosArticulos();

        let articulos = document.getElementsByClassName("articulo");
        for (let i = 0; i < articulos.length; i++) {
            let articulo = articulos[i];

            // EXCLUSIÓN: debe cumplir TODAS las categorías que tengan algo marcado
            if (cumpleCategoria(articulo, tipos) &&
                cumpleCategoria(articulo, presentaciones) &&
                cumpleCategoria(articulo, nutrientes)) {
                articulo.classList.remove("oculto");
            }
        }
    }

    // ---------- Enlaces y eventos ----------
    let chkTodos = document.getElementById("chk-todos");
    if (chkTodos) chkTodos.addEventListener("click", accionTodos);

    let checks = document.getElementsByClassName("filtro-check");
    for (let i = 0; i < checks.length; i++) {
        checks[i].addEventListener("click", accionFiltrar);
    }
});