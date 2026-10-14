@extends('layouts.app')

@section('content')
<div class="contenido-perfil flex-1 w-full min-h-[calc(100vh-120px)] py-10 px-[25px] bg-[linear-gradient(135deg,#f3e9ff,#fff0f7_35%,#eafcff_70%,#dffff9)] flex flex-col items-center">
    <div class="w-full max-w-[900px] flex flex-col items-center">
        
        <div class="text-[17px] font-extrabold text-black mb-10 text-center tracking-[0.5px]">
            PESTAÑAS: 
            <span class="pestana-item activa cursor-pointer py-1.5 px-3 rounded-[20px] transition-all duration-200 ease-in-out select-none hover:bg-black/[0.08] [&.activa]:bg-[#ccd2da] [&.activa]:shadow-[0_2px_5px_rgba(0,0,0,0.1)] [&.activa:hover]:bg-[#ccd2da]" onclick="cambiarPestana('perfil', this)">[PERFIL]</span> , 
            <span class="pestana-item cursor-pointer py-1.5 px-3 rounded-[20px] transition-all duration-200 ease-in-out select-none hover:bg-black/[0.08] [&.activa]:bg-[#ccd2da] [&.activa]:shadow-[0_2px_5px_rgba(0,0,0,0.1)] [&.activa:hover]:bg-[#ccd2da]" onclick="cambiarPestana('usuario', this)">[USUARIO]</span> , 
            <span class="pestana-item cursor-pointer py-1.5 px-3 rounded-[20px] transition-all duration-200 ease-in-out select-none hover:bg-black/[0.08] [&.activa]:bg-[#ccd2da] [&.activa]:shadow-[0_2px_5px_rgba(0,0,0,0.1)] [&.activa:hover]:bg-[#ccd2da]" onclick="cambiarPestana('permisos', this)">[PERMISOS]</span> , 
            <span class="pestana-item cursor-pointer py-1.5 px-3 rounded-[20px] transition-all duration-200 ease-in-out select-none hover:bg-black/[0.08] [&.activa]:bg-[#ccd2da] [&.activa]:shadow-[0_2px_5px_rgba(0,0,0,0.1)] [&.activa:hover]:bg-[#ccd2da]" onclick="cambiarPestana('notificaciones', this)">[NOTIFICACIONES]</span>
        </div>

        <form id="formPerfil" onsubmit="guardarDatos(event)">
            
            <!-- PESTAÑA 1: PERFIL -->
            <div id="tab-perfil" class="tab-content activo w-full hidden [&.activo]:flex flex-col gap-[25px] mb-10">
                <div class="flex items-center gap-[25px] w-full max-md:flex-col max-md:items-start max-md:gap-2.5">
                    <div class="bg-[#ccd2da] rounded-[30px] py-2.5 px-5 text-[13px] font-bold text-black text-center w-[220px] shrink-0 shadow-[0_2px_5px_rgba(0,0,0,0.04)] max-md:w-full">ICONO DE PERFIL:</div>
                    <div class="flex-1 text-[15px] font-bold text-black flex flex-col gap-2">
                        <input type="text" class="border border-transparent bg-transparent text-[15px] font-bold text-black outline-none w-full py-1 px-2 rounded-lg transition-[background-color,border-color] duration-200 hover:bg-white/60 hover:border-[#b8c0cb] focus:bg-white/60 focus:border-[#b8c0cb]" value="CARLOS RODRIGUEZ" placeholder="Nombre completo">
                        <select class="border-none bg-transparent text-[15px] font-bold text-black cursor-pointer outline-none">
                            <option selected>[ ROL: ADMINISTRADOR DE INVENTARIO ]</option>
                            <option>[ ROL: SUPERVISOR DE ALMACÉN ]</option>
                            <option>[ ROL: COORDINADOR DE DONACIONES ]</option>
                        </select>
                    </div>
                </div>

                <div class="flex items-center gap-[25px] w-full max-md:flex-col max-md:items-start max-md:gap-2.5">
                    <div class="bg-[#ccd2da] rounded-[30px] py-2.5 px-5 text-[13px] font-bold text-black text-center w-[220px] shrink-0 shadow-[0_2px_5px_rgba(0,0,0,0.04)] max-md:w-full">CORREO ELECTRONICO:</div>
                    <div class="flex-1 text-[15px] font-bold text-black flex flex-col gap-2">
                        <input type="email" class="border border-transparent bg-transparent text-[15px] font-bold text-black outline-none w-full py-1 px-2 rounded-lg transition-[background-color,border-color] duration-200 hover:bg-white/60 hover:border-[#b8c0cb] focus:bg-white/60 focus:border-[#b8c0cb]" value="CARLOS.ADMIN@BANCOALIMENTOS.ORG">
                    </div>
                </div>

                <div class="flex items-center gap-[25px] w-full max-md:flex-col max-md:items-start max-md:gap-2.5">
                    <div class="bg-[#ccd2da] rounded-[30px] py-2.5 px-5 text-[13px] font-bold text-black text-center w-[220px] shrink-0 shadow-[0_2px_5px_rgba(0,0,0,0.04)] max-md:w-full">NOTIFICACIONES:</div>
                    <div class="flex-1 text-[15px] font-bold text-black flex flex-col gap-2">
                        <div class="flex flex-col gap-2">
                            <label class="flex items-center gap-2.5 cursor-pointer text-[14px]">
                                <input type="checkbox" class="w-[18px] h-[18px] cursor-pointer" checked> [ RECIBIR AVISOS DE CADUCIDAD POR CORREO ]
                            </label>
                            <label class="flex items-center gap-2.5 cursor-pointer text-[14px]">
                                <input type="checkbox" class="w-[18px] h-[18px] cursor-pointer" checked> [ RESUMEN DIARIO DE ENTRADAS Y SALIDAS ]
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div id="tab-usuario" class="tab-content w-full hidden [&.activo]:flex flex-col gap-[25px] mb-10">
                <div class="flex items-center gap-[25px] w-full max-md:flex-col max-md:items-start max-md:gap-2.5">
                    <div class="bg-[#ccd2da] rounded-[30px] py-2.5 px-5 text-[13px] font-bold text-black text-center w-[220px] shrink-0 shadow-[0_2px_5px_rgba(0,0,0,0.04)] max-md:w-full">CONTRASEÑA ACTUAL:</div>
                    <div class="flex-1 text-[15px] font-bold text-black flex flex-col gap-2">
                        <input type="password" class="border border-transparent bg-transparent text-[15px] font-bold text-black outline-none w-full py-1 px-2 rounded-lg transition-[background-color,border-color] duration-200 hover:bg-white/60 hover:border-[#b8c0cb] focus:bg-white/60 focus:border-[#b8c0cb]" value="********" placeholder="Ingresa contraseña actual">
                    </div>
                </div>

                <div class="flex items-center gap-[25px] w-full max-md:flex-col max-md:items-start max-md:gap-2.5">
                    <div class="bg-[#ccd2da] rounded-[30px] py-2.5 px-5 text-[13px] font-bold text-black text-center w-[220px] shrink-0 shadow-[0_2px_5px_rgba(0,0,0,0.04)] max-md:w-full">NUEVA CONTRASEÑA:</div>
                    <div class="flex-1 text-[15px] font-bold text-black flex flex-col gap-2">
                        <input type="password" class="border border-transparent bg-transparent text-[15px] font-bold text-black outline-none w-full py-1 px-2 rounded-lg transition-[background-color,border-color] duration-200 hover:bg-white/60 hover:border-[#b8c0cb] focus:bg-white/60 focus:border-[#b8c0cb]" placeholder="[ INGRESA NUEVA CONTRASEÑA ]">
                    </div>
                </div>

                <div class="flex items-center gap-[25px] w-full max-md:flex-col max-md:items-start max-md:gap-2.5">
                    <div class="bg-[#ccd2da] rounded-[30px] py-2.5 px-5 text-[13px] font-bold text-black text-center w-[220px] shrink-0 shadow-[0_2px_5px_rgba(0,0,0,0.04)] max-md:w-full">TELEFONO CONTACTO:</div>
                    <div class="flex-1 text-[15px] font-bold text-black flex flex-col gap-2">
                        <input type="text" class="border border-transparent bg-transparent text-[15px] font-bold text-black outline-none w-full py-1 px-2 rounded-lg transition-[background-color,border-color] duration-200 hover:bg-white/60 hover:border-[#b8c0cb] focus:bg-white/60 focus:border-[#b8c0cb]" value="+52 33 1234 5678">
                    </div>
                </div>
            </div>

            <div id="tab-permisos" class="tab-content w-full hidden [&.activo]:flex flex-col gap-[25px] mb-10">
                <div class="flex items-center gap-[25px] w-full max-md:flex-col max-md:items-start max-md:gap-2.5">
                    <div class="bg-[#ccd2da] rounded-[30px] py-2.5 px-5 text-[13px] font-bold text-black text-center w-[220px] shrink-0 shadow-[0_2px_5px_rgba(0,0,0,0.04)] max-md:w-full">PERMISOS MÓDULOS:</div>
                    <div class="flex-1 text-[15px] font-bold text-black flex flex-col gap-2">
                        <div class="flex flex-col gap-2">
                            <label class="flex items-center gap-2.5 cursor-pointer text-[14px]"><input type="checkbox" class="w-[18px] h-[18px] cursor-pointer" checked> [ GESTIONAR INVENTARIO Y ALMACÉN ]</label>
                            <label class="flex items-center gap-2.5 cursor-pointer text-[14px]"><input type="checkbox" class="w-[18px] h-[18px] cursor-pointer" checked> [ APROBAR Y CONFIRMAR DESPACHOS ]</label>
                            <label class="flex items-center gap-2.5 cursor-pointer text-[14px]"><input type="checkbox" class="w-[18px] h-[18px] cursor-pointer" checked> [ EXPORTAR REPORTES Y ESTADÍSTICAS ]</label>
                            <label class="flex items-center gap-2.5 cursor-pointer text-[14px]"><input type="checkbox" class="w-[18px] h-[18px] cursor-pointer"> [ REGISTRAR Y ELIMINAR USUARIOS ]</label>
                        </div>
                    </div>
                </div>
            </div>

            <div id="tab-notificaciones" class="tab-content w-full hidden [&.activo]:flex flex-col gap-[25px] mb-10">
                <div class="flex items-center gap-[25px] w-full max-md:flex-col max-md:items-start max-md:gap-2.5">
                    <div class="bg-[#ccd2da] rounded-[30px] py-2.5 px-5 text-[13px] font-bold text-black text-center w-[220px] shrink-0 shadow-[0_2px_5px_rgba(0,0,0,0.04)] max-md:w-full">ALERTAS STOCK BAJO:</div>
                    <div class="flex-1 text-[15px] font-bold text-black flex flex-col gap-2">
                        <select class="border-none bg-transparent text-[15px] font-bold text-black cursor-pointer outline-none">
                            <option selected>[ NOTIFICAR CUANDO EL STOCK SEA MENOR A 10% ]</option>
                            <option>[ NOTIFICAR CUANDO EL STOCK SEA MENOR A 25% ]</option>
                        </select>
                    </div>
                </div>

                <div class="flex items-center gap-[25px] w-full max-md:flex-col max-md:items-start max-md:gap-2.5">
                    <div class="bg-[#ccd2da] rounded-[30px] py-2.5 px-5 text-[13px] font-bold text-black text-center w-[220px] shrink-0 shadow-[0_2px_5px_rgba(0,0,0,0.04)] max-md:w-full">ALERTAS CADUCIDAD:</div>
                    <div class="flex-1 text-[15px] font-bold text-black flex flex-col gap-2">
                        <select class="border-none bg-transparent text-[15px] font-bold text-black cursor-pointer outline-none">
                            <option selected>[ AVISAR CON 7 DÍAS DE ANTICIPACIÓN ]</option>
                            <option>[ AVISAR CON 15 DÍAS DE ANTICIPACIÓN ]</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="flex justify-center w-full mt-2">
                <button type="submit" class="bg-[linear-gradient(135deg,#fff3b0_0%,#ffd6f3_100%)] border-none rounded-[30px] py-4 px-[55px] text-[17px] font-extrabold text-black cursor-pointer shadow-[0_4px_12px_rgba(0,0,0,0.08)] transition-[transform,box-shadow] duration-150 ease-in-out hover:-translate-y-0.5 hover:shadow-[0_6px_16px_rgba(0,0,0,0.12)]">
                    GUARDAR CAMBIOS
                </button>
            </div>

        </form>

    </div>
</div>

<script>
    function cambiarPestana(idTab, elemento) {
        document.querySelectorAll('.tab-content').forEach(tab => {
            tab.classList.remove('activo');
        });

        document.querySelectorAll('.pestana-item').forEach(item => {
            item.classList.remove('activa');
        });

        document.getElementById('tab-' + idTab).classList.add('activo');
        elemento.classList.add('activa');
    }

    function guardarDatos(event) {
        event.preventDefault();
        alert('¡Los cambios de la configuración se han guardado exitosamente!');
    }
</script>
@endsection