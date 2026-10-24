document.addEventListener("DOMContentLoaded", function () {
    
    // 1. Obtención de elementos mediante getElementById
    let p1 = document.getElementById("pregunta1");
    let r1 = document.getElementById("respuesta1");

    let p2 = document.getElementById("pregunta2");
    let r2 = document.getElementById("respuesta2");

    let p3 = document.getElementById("pregunta3");
    let r3 = document.getElementById("respuesta3");

    let p4 = document.getElementById("pregunta4");
    let r4 = document.getElementById("respuesta4");

    let p5 = document.getElementById("pregunta5");
    let r5 = document.getElementById("respuesta5");

    // 2. Función toggle usando classList para alternar 'hidden'
    function toggle(respuesta) {
        respuesta.classList.toggle("hidden");
    }

    // 3. Asignación de eventos mediante addEventListener
    if (p1 && r1) p1.addEventListener("click", function () { toggle(r1); });
    if (p2 && r2) p2.addEventListener("click", function () { toggle(r2); });
    if (p3 && r3) p3.addEventListener("click", function () { toggle(r3); });
    if (p4 && r4) p4.addEventListener("click", function () { toggle(r4); });
    if (p5 && r5) p5.addEventListener("click", function () { toggle(r5); });
});