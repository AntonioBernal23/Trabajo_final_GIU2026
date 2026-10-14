@extends('layouts.app')

@section('content')
<style>
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(-10px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>

<main class="contenido-donantes flex-1 py-10 px-5 bg-[linear-gradient(135deg,#f3e9ff,#fff0f7_35%,#eafcff_70%,#dffff9)] min-h-[85vh] flex flex-col items-center">
    <div class="w-full max-w-[950px]">

        <!-- Encabezado con Botones Redondeados -->
        <div class="flex justify-between items-center mb-[30px] flex-wrap gap-[15px] max-md:justify-center max-md:text-center">
            <div class="bg-[#cbd5e1] text-[#1e293b] font-extrabold text-[13px] py-2.5 px-[25px] rounded-[30px] tracking-[0.5px]">
                DIRECTORIO DE ALIADOS Y DONANTES
            </div>
            <div class="flex gap-2.5 flex-wrap justify-center">
                <a href="{{ route('donaciones.registro') }}" class="bg-[#35c9ed] text-black font-extrabold text-[13px] py-2.5 px-[25px] rounded-[30px] transition-all duration-200 ease-in-out hover:bg-[#22b9df]">
                    [ + REGISTRAR DONACION ]
                </a>
                <!-- Botón que muestra/oculta el formulario -->
                <button class="bg-[#f87171] text-black font-extrabold text-[13px] py-2.5 px-[25px] rounded-[30px] border-none cursor-pointer transition-all duration-200 ease-in-out hover:bg-[#ef4444] hover:text-white" onclick="toggleFormulario()">
                    [ + REGISTRO DE NUEVO DONANTES ]
                </button>
            </div>
        </div>

        <!-- FORMULARIO DESPLEGABLE (OCULTO INICIALMENTE) -->
        <div class="hidden bg-white rounded-[20px] p-[25px] mb-[30px] shadow-[0_8px_20px_rgba(0,0,0,0.08)] border-2 border-[#35c9ed] animate-[fadeIn_0.3s_ease-in-out]" id="seccionFormulario">
            <div class="text-[16px] font-extrabold text-[#1e293b] mb-5 uppercase border-b-2 border-[#e2e8f0] pb-2.5">Registro de Nuevo Donante</div>
            <form id="formNuevoDonante" onsubmit="guardarDonante(event)">
                <div class="mb-[15px]">
                    <label for="nombreEmpresa" class="block text-[12px] font-extrabold text-[#334155] mb-[5px]">NOMBRE DE LA EMPRESA / ALIADO</label>
                    <input type="text" id="nombreEmpresa" class="w-full py-2.5 px-[15px] rounded-[10px] border border-[#cbd5e1] text-[13px] outline-none focus:border-[#35c9ed]" placeholder="Ej. Distribuidora del Norte" required>
                </div>

                <div class="mb-[15px]">
                    <label for="correoContacto" class="block text-[12px] font-extrabold text-[#334155] mb-[5px]">CORREO DE CONTACTO</label>
                    <input type="email" id="correoContacto" class="w-full py-2.5 px-[15px] rounded-[10px] border border-[#cbd5e1] text-[13px] outline-none focus:border-[#35c9ed]" placeholder="contacto@empresa.com" required>
                </div>

                <div class="mb-[15px]">
                    <label for="aporteKg" class="block text-[12px] font-extrabold text-[#334155] mb-[5px]">APORTE ESTIMADO (EN KG)</label>
                    <input type="number" id="aporteKg" class="w-full py-2.5 px-[15px] rounded-[10px] border border-[#cbd5e1] text-[13px] outline-none focus:border-[#35c9ed]" placeholder="Ej. 1500" min="1" required>
                </div>

                <div class="flex justify-end gap-2.5 mt-5">
                    <button type="button" class="bg-[#94a3b8] text-white border-none py-2 px-5 rounded-[20px] font-bold text-[12px] cursor-pointer" onclick="toggleFormulario()">Cancelar</button>
                    <button type="submit" class="bg-[#22c55e] text-white border-none py-2 px-5 rounded-[20px] font-bold text-[12px] cursor-pointer">Registrar Donante</button>
                </div>
            </form>
        </div>

        <!-- Tarjetas de Donantes en 2 Columnas -->
        <div class="grid grid-cols-2 gap-[25px] mb-10 max-md:grid-cols-1
            [&_.card-donante]:bg-[linear-gradient(135deg,#c6f6d5,#93c5fd)] [&_.card-donante]:rounded-[20px] [&_.card-donante]:py-[25px] [&_.card-donante]:px-5 [&_.card-donante]:text-center [&_.card-donante]:text-[#0f172a] [&_.card-donante]:shadow-[0_4px_10px_rgba(0,0,0,0.05)] [&_.card-donante]:flex [&_.card-donante]:flex-col [&_.card-donante]:justify-center [&_.card-donante]:items-center
            [&_.card-donante_h5]:text-[14px] [&_.card-donante_h5]:font-extrabold [&_.card-donante_h5]:mb-2 [&_.card-donante_h5]:uppercase
            [&_.card-donante_p]:text-[12px] [&_.card-donante_p]:font-bold [&_.card-donante_p]:my-0.5" id="contenedorDonantes">
            <!-- Donante 1 -->
            <div class="card-donante">
                <img src="{{ asset('images/donantes/Mercado-logo.png') }}" alt="Supermercado La Cadena" class="max-h-[55px] max-w-[160px] object-contain mb-3" onerror="this.style.display='none'">
                <h5>SUPERMERCADO LA CADENA</h5>
                <p>CONTACTO: JUAN@EMPACADORA.COM</p>
                <p>APORTE TOTAL: 4,500 KG</p>
            </div>

            <!-- Donante 2 -->
            <div class="card-donante">
                <img src="{{ asset('images/donantes/Agricola-logo.png') }}" alt="Agrícola del Sur" class="max-h-[55px] max-w-[160px] object-contain mb-3" onerror="this.style.display='none'">
                <h5>AGRICOLA DEL SUR</h5>
                <p>CONTACTO: VENTAS@AGROSUR.COM</p>
                <p>APORTE TOTAL: 8,200 KG</p>
            </div>

            <!-- Donante 3 -->
            <div class="card-donante">
                <img src="{{ asset('images/donantes/Empacadora-logo.png') }}" alt="Empacadora Central" class="max-h-[55px] max-w-[160px] object-contain mb-3" onerror="this.style.display='none'">
                <h5>EMPACADORA CENTRAL</h5>
                <p>CONTACTO: CONTATO@EMPACADORA.COM</p>
                <p>APORTE TOTAL: 1,100 KG</p>
            </div>

            <!-- Donante 4 -->
            <div class="card-donante">
                <img src="{{ asset('images/donantes/Fundacion-logo.png') }}" alt="Fundación Compartir" class="max-h-[55px] max-w-[160px] object-contain mb-3" onerror="this.style.display='none'">
                <h5>FUNDACION COMPARTIR</h5>
                <p>CONTACTO: AYUDA@COMPARTIR.COM</p>
                <p>APORTE TOTAL: 950 KG</p>
            </div>
        </div>

        <!-- Requisito Multimedia: Video Institucional -->
        <div class="bg-white/60 rounded-[20px] p-5 backdrop-blur-[5px] mt-5">
            <h4 class="text-[15px] font-extrabold text-[#1e293b] mb-[15px] text-center uppercase">Impacto Institucional de Alianzas</h4>
            <div class="aspect-video w-full rounded overflow-hidden shadow-sm">
                <iframe class="w-full h-full" src="https://www.youtube.com/embed/wfbyHfnDatk" title="Video Institucional Donantes" allowfullscreen></iframe>
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