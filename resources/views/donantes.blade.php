@extends('layouts.app')

@section('content')
<style>
    .contenido-donantes {
        flex: 1;
        padding: 40px 20px;
        background: linear-gradient(135deg, #f3e9ff, #fff0f7 35%, #eafcff 70%, #dffff9);
        min-height: 85vh;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .contenedor-principal {
        width: 100%;
        max-width: 950px;
    }

    /* CABECERA CON BOTONES REDONDEADOS */
    .cabecera-donantes {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
        flex-wrap: wrap;
        gap: 15px;
    }

    .pill-titulo {
        background-color: #cbd5e1;
        color: #1e293b;
        font-weight: 800;
        font-size: 13px;
        padding: 10px 25px;
        border-radius: 30px;
        letter-spacing: 0.5px;
    }

    .btn-registro {
        background-color: #f87171;
        color: #000;
        font-weight: 800;
        font-size: 13px;
        padding: 10px 25px;
        border-radius: 30px;
        border: none;
        cursor: pointer;
        transition: all 0.2s ease-in-out;
    }

    .btn-registro:hover {
        background-color: #ef4444;
        color: #fff;
    }

    /* FORMULARIO DE REGISTRO OCULTO POR DEFECTO */
    .contenedor-formulario-oculto {
        display: none; /* Totalmente invisible por defecto */
        background: #ffffff;
        border-radius: 20px;
        padding: 25px;
        margin-bottom: 30px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
        border: 2px solid #35c9ed;
        animation: fadeIn 0.3s ease-in-out;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(-10px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .titulo-form {
        font-size: 16px;
        font-weight: 800;
        color: #1e293b;
        margin-bottom: 20px;
        text-transform: uppercase;
        border-bottom: 2px solid #e2e8f0;
        padding-bottom: 10px;
    }

    .campo-grupo {
        margin-bottom: 15px;
    }

    .campo-grupo label {
        display: block;
        font-size: 12px;
        font-weight: 800;
        color: #334155;
        margin-bottom: 5px;
    }

    .campo-grupo input {
        width: 100%;
        padding: 10px 15px;
        border-radius: 10px;
        border: 1px solid #cbd5e1;
        font-size: 13px;
        outline: none;
    }

    .campo-grupo input:focus {
        border-color: #35c9ed;
    }

    .acciones-form {
        display: flex;
        justify-content: flex-end;
        gap: 10px;
        margin-top: 20px;
    }

    .btn-cancelar {
        background-color: #94a3b8;
        color: #fff;
        border: none;
        padding: 8px 20px;
        border-radius: 20px;
        font-weight: 700;
        font-size: 12px;
        cursor: pointer;
    }

    .btn-guardar {
        background-color: #22c55e;
        color: #fff;
        border: none;
        padding: 8px 20px;
        border-radius: 20px;
        font-weight: 700;
        font-size: 12px;
        cursor: pointer;
    }

    /* TARJETAS CON GRADIENTE VERDE Y AZUL */
    .grid-donantes {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 25px;
        margin-bottom: 40px;
    }

    .card-donante {
        background: linear-gradient(135deg, #c6f6d5, #93c5fd);
        border-radius: 20px;
        padding: 25px 20px;
        text-align: center;
        color: #0f172a;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    /* ESTILO PARA LOS LOGOS */
    .logo-donante {
        max-height: 55px;
        max-width: 160px;
        object-fit: contain;
        margin-bottom: 12px;
    }

    .card-donante h5 {
        font-size: 14px;
        font-weight: 800;
        margin-bottom: 8px;
        text-transform: uppercase;
    }

    .card-donante p {
        font-size: 12px;
        font-weight: 700;
        margin: 2px 0;
    }

    /* SECCIÓN MULTIMEDIA (VIDEO OBLIGATORIO) */
    .seccion-video {
        background: rgba(255, 255, 255, 0.6);
        border-radius: 20px;
        padding: 20px;
        backdrop-filter: blur(5px);
        margin-top: 20px;
    }

    .seccion-video h4 {
        font-size: 15px;
        font-weight: 800;
        color: #1e293b;
        margin-bottom: 15px;
        text-align: center;
        text-transform: uppercase;
    }

    /* RESPONSIVO */
    @media (max-width: 768px) {
        .grid-donantes {
            grid-template-columns: 1fr;
        }

        .cabecera-donantes {
            justify-content: center;
            text-align: center;
        }
    }
</style>

<main class="contenido-donantes">
    <div class="contenedor-principal">

        <!-- Encabezado con Botones Redondeados -->
        <div class="cabecera-donantes">
            <div class="pill-titulo">
                DIRECTORIO DE ALIADOS Y DONANTES
            </div>
            <!-- Botón que muestra/oculta el formulario -->
            <button class="btn-registro" onclick="toggleFormulario()">
                [ + REGISTRO DE NUEVO DONANTES ]
            </button>
        </div>

        <!-- FORMULARIO DESPLEGABLE (OCULTO INICIALMENTE) -->
        <div class="contenedor-formulario-oculto" id="seccionFormulario">
            <div class="titulo-form">Registro de Nuevo Donante</div>
            <form id="formNuevoDonante" onsubmit="guardarDonante(event)">
                <div class="campo-grupo">
                    <label for="nombreEmpresa">NOMBRE DE LA EMPRESA / ALIADO</label>
                    <input type="text" id="nombreEmpresa" placeholder="Ej. Distribuidora del Norte" required>
                </div>

                <div class="campo-grupo">
                    <label for="correoContacto">CORREO DE CONTACTO</label>
                    <input type="email" id="correoContacto" placeholder="contacto@empresa.com" required>
                </div>

                <div class="campo-grupo">
                    <label for="aporteKg">APORTE ESTIMADO (EN KG)</label>
                    <input type="number" id="aporteKg" placeholder="Ej. 1500" min="1" required>
                </div>

                <div class="acciones-form">
                    <button type="button" class="btn-cancelar" onclick="toggleFormulario()">Cancelar</button>
                    <button type="submit" class="btn-guardar">Registrar Donante</button>
                </div>
            </form>
        </div>

        <!-- Tarjetas de Donantes en 2 Columnas -->
        <div class="grid-donantes" id="contenedorDonantes">
            <!-- Donante 1 -->
            <div class="card-donante">
                <img src="{{ asset('images/donantes/Mercado-logo.png') }}" alt="Supermercado La Cadena" class="logo-donante" onerror="this.style.display='none'">
                <h5>SUPERMERCADO LA CADENA</h5>
                <p>CONTACTO: JUAN@EMPACADORA.COM</p>
                <p>APORTE TOTAL: 4,500 KG</p>
            </div>

            <!-- Donante 2 -->
            <div class="card-donante">
                <img src="{{ asset('images/donantes/Agricola-logo.png') }}" alt="Agrícola del Sur" class="logo-donante" onerror="this.style.display='none'">
                <h5>AGRICOLA DEL SUR</h5>
                <p>CONTACTO: VENTAS@AGROSUR.COM</p>
                <p>APORTE TOTAL: 8,200 KG</p>
            </div>

            <!-- Donante 3 -->
            <div class="card-donante">
                <img src="{{ asset('images/donantes/Empacadora-logo.png') }}" alt="Empacadora Central" class="logo-donante" onerror="this.style.display='none'">
                <h5>EMPACADORA CENTRAL</h5>
                <p>CONTACTO: CONTATO@EMPACADORA.COM</p>
                <p>APORTE TOTAL: 1,100 KG</p>
            </div>

            <!-- Donante 4 -->
            <div class="card-donante">
                <img src="{{ asset('images/donantes/Fundacion-logo.png') }}" alt="Fundación Compartir" class="logo-donante" onerror="this.style.display='none'">
                <h5>FUNDACION COMPARTIR</h5>
                <p>CONTACTO: AYUDA@COMPARTIR.COM</p>
                <p>APORTE TOTAL: 950 KG</p>
            </div>
        </div>

        <!-- Requisito Multimedia: Video Institucional -->
        <div class="seccion-video">
            <h4>Impacto Institucional de Alianzas</h4>
            <div class="ratio ratio-16x9 rounded overflow-hidden shadow-sm">
                <iframe src="https://www.youtube.com/embed/wfbyHfnDatk" title="Video Institucional Donantes" allowfullscreen></iframe>
            </div>
        </div>

    </div>
</main>

<script>
    // Función para mostrar u ocultar el formulario
    function toggleFormulario() {
        let form = document.getElementById('seccionFormulario');
        if (form.style.display === 'none' || form.style.display === '') {
            form.style.display = 'block';
            form.scrollIntoView({ behavior: 'smooth' });
        } else {
            form.style.display = 'none';
        }
    }

    // Función para procesar y agregar el nuevo donante
    function guardarDonante(event) {
        event.preventDefault();

        let nombre = document.getElementById('nombreEmpresa').value.toUpperCase();
        let correo = document.getElementById('correoContacto').value.toUpperCase();
        let aporte = parseInt(document.getElementById('aporteKg').value).toLocaleString();

        let contenedor = document.getElementById('contenedorDonantes');
        let nuevaTarjeta = document.createElement('div');
        nuevaTarjeta.className = 'card-donante';
        nuevaTarjeta.innerHTML = `
            <h5>${nombre}</h5>
            <p>CONTACTO: ${correo}</p>
            <p>APORTE TOTAL: ${aporte} KG</p>
        `;

        contenedor.appendChild(nuevaTarjeta);

        alert(`¡Donante registrado exitosamente!\n\nEmpresa: ${nombre}\nContacto: ${correo}\nAporte: ${aporte} KG`);

        // Resetear y ocultar
        document.getElementById('formNuevoDonante').reset();
        toggleFormulario();
    }
</script>
@endsection