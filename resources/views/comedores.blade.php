@extends('layouts.app')

@section('content')
<style>
    .contenido-comedores {
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

    /* CABECERA CON BOTONES Y PÍLDORA DE TÍTULO */
    .cabecera-comedores {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 25px;
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
        background-color: #35c9ed;
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
        background-color: #22b9df;
    }

    /* TARJETAS DE INDICADORES / ESTADÍSTICAS */
    .grid-stats {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 15px;
        margin-bottom: 25px;
    }

    .card-stat {
        background: rgba(255, 255, 255, 0.7);
        border-radius: 15px;
        padding: 15px;
        text-align: center;
        backdrop-filter: blur(5px);
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.03);
    }

    .card-stat h6 {
        font-size: 11px;
        font-weight: 800;
        color: #64748b;
        margin-bottom: 5px;
        text-transform: uppercase;
    }

    .card-stat p {
        font-size: 20px;
        font-weight: 800;
        color: #0f172a;
        margin: 0;
    }

    /* BARRA DE FILTROS Y BÚSQUEDA */
    .barra-herramientas {
        display: flex;
        justify-content: space-between;
        gap: 15px;
        margin-bottom: 20px;
        flex-wrap: wrap;
    }

    .input-busqueda {
        flex: 1;
        min-width: 250px;
        padding: 10px 18px;
        border-radius: 25px;
        border: 1px solid #cbd5e1;
        font-size: 13px;
        outline: none;
        background: #ffffff;
    }

    .input-busqueda:focus {
        border-color: #35c9ed;
    }

    .select-filtro {
        padding: 10px 18px;
        border-radius: 25px;
        border: 1px solid #cbd5e1;
        font-size: 13px;
        outline: none;
        background: #ffffff;
        font-weight: 700;
        cursor: pointer;
    }

    /* FORMULARIO DE REGISTRO DESPLEGABLE */
    .contenedor-formulario-oculto {
        display: none;
        background: #ffffff;
        border-radius: 20px;
        padding: 25px;
        margin-bottom: 25px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
        border: 2px solid #35c9ed;
        animation: fadeIn 0.3s ease-in-out;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(-10px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .titulo-form {
        font-size: 15px;
        font-weight: 800;
        color: #1e293b;
        margin-bottom: 15px;
        text-transform: uppercase;
        border-bottom: 2px solid #e2e8f0;
        padding-bottom: 8px;
    }

    .grid-form {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 15px;
    }

    .campo-grupo {
        margin-bottom: 10px;
    }

    .campo-grupo label {
        display: block;
        font-size: 11px;
        font-weight: 800;
        color: #334155;
        margin-bottom: 5px;
    }

    .campo-grupo input, .campo-grupo select {
        width: 100%;
        padding: 9px 12px;
        border-radius: 10px;
        border: 1px solid #cbd5e1;
        font-size: 13px;
        outline: none;
    }

    .acciones-form {
        display: flex;
        justify-content: flex-end;
        gap: 10px;
        margin-top: 15px;
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

    /* ESTILO DE LA TABLA ESTILIZADA CON EL TEMA */
    .tabla-contenedor {
        background: rgba(255, 255, 255, 0.85);
        border-radius: 20px;
        padding: 10px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        overflow-x: auto;
        backdrop-filter: blur(5px);
    }

    .tabla-comedores {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0 10px;
    }

    .tabla-comedores th {
        background-color: transparent;
        color: #1e293b;
        font-size: 12px;
        font-weight: 800;
        padding: 12px 15px;
        text-align: left;
        border-bottom: 2px solid #cbd5e1;
    }

    .tabla-comedores tbody tr {
        background: linear-gradient(135deg, #ffffff, #f1f5f9);
        border-radius: 12px;
        transition: transform 0.2s, box-shadow 0.2s;
    }

    .tabla-comedores tbody tr:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
    }

    .tabla-comedores td {
        padding: 14px 15px;
        font-size: 13px;
        color: #334155;
        vertical-align: middle;
    }

    .tabla-comedores td:first-child {
        border-top-left-radius: 12px;
        border-bottom-left-radius: 12px;
        font-weight: 800;
        color: #0f172a;
    }

    .tabla-comedores td:last-child {
        border-top-right-radius: 12px;
        border-bottom-right-radius: 12px;
    }

    /* BADGES / INSIGNIAS PERSONALIZADAS */
    .badge-frecuencia {
        padding: 6px 14px;
        border-radius: 20px;
        font-size: 11px;
        font-weight: 800;
        display: inline-block;
        text-align: center;
    }

    .badge-semanal {
        background-color: #bbf7d0;
        color: #166534;
    }

    .badge-quincenal {
        background-color: #fef08a;
        color: #854d0e;
    }

    .badge-mensual {
        background-color: #e0e7ff;
        color: #3730a3;
    }

    /* RESPONSIVO */
    @media (max-width: 768px) {
        .grid-stats, .grid-form {
            grid-template-columns: 1fr;
        }

        .cabecera-comedores {
            justify-content: center;
            text-align: center;
        }

        .barra-herramientas {
            flex-direction: column;
        }
    }
</style>

<main class="contenido-comedores">
    <div class="contenedor-principal">

        <!-- Encabezado Principal -->
        <div class="cabecera-comedores">
            <div class="pill-titulo">
                COMEDORES COMUNITARIOS REGISTRADOS
            </div>
            <button class="btn-registro" onclick="toggleFormulario()">
                [ + REGISTRAR NUEVO COMEDOR ]
            </button>
        </div>

        <!-- Indicadores / Estadísticas rápidas -->
        <div class="grid-stats">
            <div class="card-stat">
                <h6>Comedores Atendidos</h6>
                <p id="totalComedoresCount">5</p>
            </div>
            <div class="card-stat">
                <h6>Total Beneficiarios</h6>
                <p id="totalBeneficiariosCount">710</p>
            </div>
            <div class="card-stat">
                <h6>Atención Semanal</h6>
                <p>60%</p>
            </div>
        </div>

        <!-- Barra de Búsqueda y Filtro -->
        <div class="barra-herramientas">
            <input type="text" id="inputBuscar" class="input-busqueda" placeholder="Buscar por nombre o dirección..." onkeyup="filtrarTabla()">
            <select id="selectFrecuencia" class="select-filtro" onchange="filtrarTabla()">
                <option value="TODAS">Todas las Frecuencias</option>
                <option value="SEMANAL">Semanal</option>
                <option value="QUINCENAL">Quincenal</option>
                <option value="MENSUAL">Mensual</option>
            </select>
        </div>

        <!-- FORMULARIO DE REGISTRO OCULTO POR DEFECTO -->
        <div class="contenedor-formulario-oculto" id="seccionFormulario">
            <div class="titulo-form">Alta de Comedor Comunitario</div>
            <form id="formNuevoComedor" onsubmit="guardarComedor(event)">
                <div class="grid-form">
                    <div class="campo-grupo">
                        <label for="nombreComedor">NOMBRE DEL COMEDOR</label>
                        <input type="text" id="nombreComedor" placeholder="Ej. Comedor San Francisco" required>
                    </div>

                    <div class="campo-grupo">
                        <label for="direccionComedor">DIRECCIÓN</label>
                        <input type="text" id="direccionComedor" placeholder="Ej. Av. Hidalgo #123, Col. Centro" required>
                    </div>

                    <div class="campo-grupo">
                        <label for="beneficiarios">BENEFICIARIOS (DESGLOSE)</label>
                        <input type="text" id="beneficiarios" placeholder="Ej. 90 Niños y 30 Adultos" required>
                    </div>

                    <div class="campo-grupo">
                        <label for="frecuenciaEntrega">FRECUENCIA DE ENTREGA</label>
                        <select id="frecuenciaEntrega" required>
                            <option value="SEMANAL">SEMANAL</option>
                            <option value="QUINCENAL">QUINCENAL</option>
                            <option value="MENSUAL">MENSUAL</option>
                        </select>
                    </div>
                </div>

                <div class="acciones-form">
                    <button type="button" class="btn-cancelar" onclick="toggleFormulario()">Cancelar</button>
                    <button type="submit" class="btn-guardar">Guardar Comedor</button>
                </div>
            </form>
        </div>

        <!-- TABLA DE COMEDORES -->
        <div class="tabla-contenedor">
            <table class="tabla-comedores" id="tablaComedores">
                <thead>
                    <tr>
                        <th>COMEDOR</th>
                        <th>DIRECCIÓN</th>
                        <th>BENEFICIARIOS</th>
                        <th>FRECUENCIA</th>
                    </tr>
                </thead>
                <tbody id="tbodyComedores">
                    <tr>
                        <td>COMEDOR SAN JOSÉ</td>
                        <td>Calle 12 #4-20, Col. Centro</td>
                        <td>120 Niños / 30 Adultos</td>
                        <td><span class="badge-frecuencia badge-semanal">SEMANAL</span></td>
                    </tr>
                    <tr>
                        <td>HOGAR ADULTO MAYOR</td>
                        <td>Av. Central #45, Col. Jardines</td>
                        <td>80 Adultos Mayores</td>
                        <td><span class="badge-frecuencia badge-quincenal">QUINCENAL</span></td>
                    </tr>
                    <tr>
                        <td>CENTRO ESPERANZA</td>
                        <td>Carrera 8 #10-50, Col. Esperanza</td>
                        <td>150 Niños / 60 Adultos</td>
                        <td><span class="badge-frecuencia badge-semanal">SEMANAL</span></td>
                    </tr>
                    <tr>
                        <td>COMEDOR SANTA MARÍA</td>
                        <td>Calle Los Olivos #88</td>
                        <td>95 Niños</td>
                        <td><span class="badge-frecuencia badge-semanal">SEMANAL</span></td>
                    </tr>
                    <tr>
                        <td>CASA DEL MIGRANTE</td>
                        <td>Av. Ferrocarril #502</td>
                        <td>175 Personas en tránsito</td>
                        <td><span class="badge-frecuencia badge-mensual">MENSUAL</span></td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</main>

<script>
    // Mostrar/ocultar formulario
    function toggleFormulario() {
        let form = document.getElementById('seccionFormulario');
        if (form.style.display === 'none' || form.style.display === '') {
            form.style.display = 'block';
            form.scrollIntoView({ behavior: 'smooth' });
        } else {
            form.style.display = 'none';
        }
    }

    // Filtrar tabla por búsqueda de texto y/o selector de frecuencia
    function filtrarTabla() {
        let textoBusqueda = document.getElementById('inputBuscar').value.toUpperCase();
        let filtroFrecuencia = document.getElementById('selectFrecuencia').value;
        let filas = document.querySelectorAll('#tbodyComedores tr');

        filas.forEach(fila => {
            let comedor = fila.cells[0].textContent.toUpperCase();
            let direccion = fila.cells[1].textContent.toUpperCase();
            let frecuencia = fila.cells[3].textContent.trim().toUpperCase();

            let coincideTexto = comedor.includes(textoBusqueda) || direccion.includes(textoBusqueda);
            let coincideFrecuencia = (filtroFrecuencia === 'TODAS') || (frecuencia === filtroFrecuencia);

            if (coincideTexto && coincideFrecuencia) {
                fila.style.display = '';
            } else {
                fila.style.display = 'none';
            }
        });
    }

    // Guardar nuevo comedor dinámicamente
    function guardarComedor(event) {
        event.preventDefault();

        let nombre = document.getElementById('nombreComedor').value.toUpperCase();
        let direccion = document.getElementById('direccionComedor').value;
        let beneficiarios = document.getElementById('beneficiarios').value;
        let frecuencia = document.getElementById('frecuenciaEntrega').value;

        // Determinar clase de badge según frecuencia
        let claseBadge = 'badge-semanal';
        if (frecuencia === 'QUINCENAL') claseBadge = 'badge-quincenal';
        if (frecuencia === 'MENSUAL') claseBadge = 'badge-mensual';

        let tbody = document.getElementById('tbodyComedores');
        let nuevaFila = document.createElement('tr');
        nuevaFila.innerHTML = `
            <td>${nombre}</td>
            <td>${direccion}</td>
            <td>${beneficiarios}</td>
            <td><span class="badge-frecuencia ${claseBadge}">${frecuencia}</span></td>
        `;

        tbody.prepend(nuevaFila);

        // Actualizar indicador
        let totalCount = document.getElementById('totalComedoresCount');
        totalCount.textContent = parseInt(totalCount.textContent) + 1;

        alert(`¡Comedor registrado con éxito!\n\nNombre: ${nombre}\nFrecuencia: ${frecuencia}`);

        // Limpiar y ocultar
        document.getElementById('formNuevoComedor').reset();
        toggleFormulario();
    }
</script>
@endsection