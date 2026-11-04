document.addEventListener("DOMContentLoaded", function () {
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

    function filtrarPorCategoria(idBoton) {
        ocultarTodosLosArticulos();
        let boton = document.getElementById(idBoton);
        let nombreCategoria = boton.getAttribute("data-categoria");
        let articulosFiltrados = document.getElementsByClassName(nombreCategoria);
        for (let i = 0; i < articulosFiltrados.length; i++) {
            articulosFiltrados[i].classList.remove("oculto");
        }
    }

    function accionTodos() {
        activarBoton(btnTodos);
        mostrarTodosLosArticulos();
    }
    function accionDespensa() {
        activarBoton(btnDespensa);
        filtrarPorCategoria("btn-despensa");
    }
    function accionPerecederos() {
        activarBoton(btnPerecederos);
        filtrarPorCategoria("btn-perecederos");
    }
    function accionLacteos() {
        activarBoton(btnLacteos);
        filtrarPorCategoria("btn-lacteos");
    }
    function accionEnlatados() {
        activarBoton(btnEnlatados);
        filtrarPorCategoria("btn-enlatados");
    }

    function activarBoton(botonSeleccionado) {
        let botones = document.querySelectorAll('.btn-filtro');
        botones.forEach(b => b.classList.remove('active'));
        botonSeleccionado.classList.add('active');
    }

    let btnTodos = document.getElementById("btn-todos");
    let btnDespensa = document.getElementById("btn-despensa");
    let btnPerecederos = document.getElementById("btn-perecederos");
    let btnLacteos = document.getElementById("btn-lacteos");
    let btnEnlatados = document.getElementById("btn-enlatados");

    if (btnTodos) btnTodos.addEventListener("click", accionTodos);
    if (btnDespensa) btnDespensa.addEventListener("click", accionDespensa);
    if (btnPerecederos) btnPerecederos.addEventListener("click", accionPerecederos);
    if (btnLacteos) btnLacteos.addEventListener("click", accionLacteos);
    if (btnEnlatados) btnEnlatados.addEventListener("click", accionEnlatados);
});