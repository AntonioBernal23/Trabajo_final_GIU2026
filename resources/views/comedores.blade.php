@extends('layouts.app')

@section('content')
<style>
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(-10px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>

<main class="contenido-comedores flex-1 py-10 px-5 bg-[linear-gradient(135deg,#f3e9ff,#fff0f7_35%,#eafcff_70%,#dffff9)] min-h-[85vh] flex flex-col items-center">
    <div class="w-full max-w-[950px]">

        <!-- Encabezado Principal -->
        <div class="flex justify-between items-center mb-[25px] flex-wrap gap-[15px] max-md:justify-center max-md:text-center">
            <div class="bg-[#cbd5e1] text-[#1e293b] font-extrabold text-[13px] py-2.5 px-[25px] rounded-[30px] tracking-[0.5px]">
                COMEDORES COMUNITARIOS REGISTRADOS
            </div>
            <button class="bg-[#35c9ed] text-black font-extrabold text-[13px] py-2.5 px-[25px] rounded-[30px] border-none cursor-pointer transition-all duration-200 ease-in-out hover:bg-[#22b9df]" onclick="toggleFormulario()">
                [ + REGISTRAR NUEVO COMEDOR ]
            </button>
        </div>

        <!-- Indicadores / Estadísticas rápidas -->
        <div class="grid grid-cols-3 gap-[15px] mb-[25px] max-md:grid-cols-1">
            <div class="bg-white/70 rounded-[15px] p-[15px] text-center backdrop-blur-[5px] shadow-[0_4px_10px_rgba(0,0,0,0.03)]">
                <h6 class="text-[11px] font-extrabold text-[#64748b] mb-[5px] uppercase">Comedores Atendidos</h6>
                <p id="totalComedoresCount" class="text-[20px] font-extrabold text-[#0f172a] m-0">5</p>
            </div>
            <div class="bg-white/70 rounded-[15px] p-[15px] text-center backdrop-blur-[5px] shadow-[0_4px_10px_rgba(0,0,0,0.03)]">
                <h6 class="text-[11px] font-extrabold text-[#64748b] mb-[5px] uppercase">Total Beneficiarios</h6>
                <p id="totalBeneficiariosCount" class="text-[20px] font-extrabold text-[#0f172a] m-0">710</p>
            </div>
            <div class="bg-white/70 rounded-[15px] p-[15px] text-center backdrop-blur-[5px] shadow-[0_4px_10px_rgba(0,0,0,0.03)]">
                <h6 class="text-[11px] font-extrabold text-[#64748b] mb-[5px] uppercase">Atención Semanal</h6>
                <p class="text-[20px] font-extrabold text-[#0f172a] m-0">60%</p>
            </div>
        </div>

        <!-- Barra de Búsqueda y Filtro -->
        <div class="flex justify-between gap-[15px] mb-5 flex-wrap max-md:flex-col">
            <input type="text" id="inputBuscar" class="flex-1 min-w-[250px] py-2.5 px-[18px] rounded-[25px] border border-[#cbd5e1] text-[13px] outline-none bg-white focus:border-[#35c9ed]" placeholder="Buscar por nombre o dirección..." onkeyup="filtrarTabla()">
            <select id="selectFrecuencia" class="py-2.5 px-[18px] rounded-[25px] border border-[#cbd5e1] text-[13px] outline-none bg-white font-bold cursor-pointer" onchange="filtrarTabla()">
                <option value="TODAS">Todas las Frecuencias</option>
                <option value="SEMANAL">Semanal</option>
                <option value="QUINCENAL">Quincenal</option>
                <option value="MENSUAL">Mensual</option>
            </select>
        </div>

        <!-- FORMULARIO DE REGISTRO OCULTO POR DEFECTO -->
        <div class="hidden bg-white rounded-[20px] p-[25px] mb-[25px] shadow-[0_8px_20px_rgba(0,0,0,0.08)] border-2 border-[#35c9ed] animate-[fadeIn_0.3s_ease-in-out]" id="seccionFormulario">
            <div class="text-[15px] font-extrabold text-[#1e293b] mb-[15px] uppercase border-b-2 border-[#e2e8f0] pb-2">Alta de Comedor Comunitario</div>
            <form id="formNuevoComedor" onsubmit="guardarComedor(event)">
                <div class="grid grid-cols-2 gap-[15px] max-md:grid-cols-1">
                    <div class="mb-2.5">
                        <label for="nombreComedor" class="block text-[11px] font-extrabold text-[#334155] mb-[5px]">NOMBRE DEL COMEDOR</label>
                        <input type="text" id="nombreComedor" class="w-full py-[9px] px-3 rounded-[10px] border border-[#cbd5e1] text-[13px] outline-none" placeholder="Ej. Comedor San Francisco" required>
                    </div>

                    <div class="mb-2.5">
                        <label for="direccionComedor" class="block text-[11px] font-extrabold text-[#334155] mb-[5px]">DIRECCIÓN</label>
                        <input type="text" id="direccionComedor" class="w-full py-[9px] px-3 rounded-[10px] border border-[#cbd5e1] text-[13px] outline-none" placeholder="Ej. Av. Hidalgo #123, Col. Centro" required>
                    </div>

                    <div class="mb-2.5">
                        <label for="beneficiarios" class="block text-[11px] font-extrabold text-[#334155] mb-[5px]">BENEFICIARIOS (DESGLOSE)</label>
                        <input type="text" id="beneficiarios" class="w-full py-[9px] px-3 rounded-[10px] border border-[#cbd5e1] text-[13px] outline-none" placeholder="Ej. 90 Niños y 30 Adultos" required>
                    </div>

                    <div class="mb-2.5">
                        <label for="frecuenciaEntrega" class="block text-[11px] font-extrabold text-[#334155] mb-[5px]">FRECUENCIA DE ENTREGA</label>
                        <select id="frecuenciaEntrega" class="w-full py-[9px] px-3 rounded-[10px] border border-[#cbd5e1] text-[13px] outline-none" required>
                            <option value="SEMANAL">SEMANAL</option>
                            <option value="QUINCENAL">QUINCENAL</option>
                            <option value="MENSUAL">MENSUAL</option>
                        </select>
                    </div>
                </div>

                <div class="flex justify-end gap-2.5 mt-[15px]">
                    <button type="button" class="bg-[#94a3b8] text-white border-none py-2 px-5 rounded-[20px] font-bold text-[12px] cursor-pointer" onclick="toggleFormulario()">Cancelar</button>
                    <button type="submit" class="bg-[#22c55e] text-white border-none py-2 px-5 rounded-[20px] font-bold text-[12px] cursor-pointer">Guardar Comedor</button>
                </div>
            </form>
        </div>

        <!-- TABLA DE COMEDORES -->
        <div class="bg-white/85 rounded-[20px] p-2.5 shadow-[0_4px_15px_rgba(0,0,0,0.05)] overflow-x-auto backdrop-blur-[5px]">
            <table class="w-full border-separate border-spacing-y-2.5
                [&_tbody_tr]:bg-[linear-gradient(135deg,#ffffff,#f1f5f9)] [&_tbody_tr]:rounded-[12px] [&_tbody_tr]:transition-[transform,box-shadow] [&_tbody_tr]:duration-200
                [&_tbody_tr:hover]:-translate-y-0.5 [&_tbody_tr:hover]:shadow-[0_4px_10px_rgba(0,0,0,0.05)]
                [&_td]:py-3.5 [&_td]:px-[15px] [&_td]:text-[13px] [&_td]:text-[#334155] [&_td]:align-middle
                [&_td:first-child]:rounded-l-[12px] [&_td:first-child]:font-extrabold [&_td:first-child]:text-[#0f172a]
                [&_td:last-child]:rounded-r-[12px]
                [&_.badge-frecuencia]:py-1.5 [&_.badge-frecuencia]:px-3.5 [&_.badge-frecuencia]:rounded-[20px] [&_.badge-frecuencia]:text-[11px] [&_.badge-frecuencia]:font-extrabold [&_.badge-frecuencia]:inline-block [&_.badge-frecuencia]:text-center
                [&_.badge-semanal]:bg-[#bbf7d0] [&_.badge-semanal]:text-[#166534]
                [&_.badge-quincenal]:bg-[#fef08a] [&_.badge-quincenal]:text-[#854d0e]
                [&_.badge-mensual]:bg-[#e0e7ff] [&_.badge-mensual]:text-[#3730a3]" id="tablaComedores">
                <thead>
                    <tr>
                        <th class="bg-transparent text-[#1e293b] text-[12px] font-extrabold py-3 px-[15px] text-left border-b-2 border-[#cbd5e1]">COMEDOR</th>
                        <th class="bg-transparent text-[#1e293b] text-[12px] font-extrabold py-3 px-[15px] text-left border-b-2 border-[#cbd5e1]">DIRECCIÓN</th>
                        <th class="bg-transparent text-[#1e293b] text-[12px] font-extrabold py-3 px-[15px] text-left border-b-2 border-[#cbd5e1]">BENEFICIARIOS</th>
                        <th class="bg-transparent text-[#1e293b] text-[12px] font-extrabold py-3 px-[15px] text-left border-b-2 border-[#cbd5e1]">FRECUENCIA</th>
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