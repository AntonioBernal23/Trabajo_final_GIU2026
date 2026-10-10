@extends('layouts.app')

@section('content')
<style>
    .contenido-perfil {
        flex: 1;
        width: 100%;
        min-height: calc(100vh - 120px);
        padding: 40px 25px;
        background: linear-gradient(135deg, #f3e9ff, #fff0f7 35%, #eafcff 70%, #dffff9);
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .perfil-wrapper {
        width: 100%;
        max-width: 900px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .header-pestanas {
        font-size: 17px;
        font-weight: 800;
        color: #000;
        margin-bottom: 40px;
        text-align: center;
        letter-spacing: 0.5px;
    }

    .pestana-item {
        cursor: pointer;
        padding: 6px 12px;
        border-radius: 20px;
        transition: all 0.2s ease;
        user-select: none;
    }

    .pestana-item:hover {
        background-color: rgba(0, 0, 0, 0.08);
    }

    .pestana-item.activa {
        background-color: #ccd2da;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .tab-content {
        width: 100%;
        display: none;
        flex-direction: column;
        gap: 25px;
        margin-bottom: 40px;
    }

    .tab-content.activo {
        display: flex;
    }

    .fila-perfil {
        display: flex;
        align-items: center;
        gap: 25px;
        width: 100%;
    }

    .pildora-etiqueta {
        background-color: #ccd2da;
        border-radius: 30px;
        padding: 10px 20px;
        font-size: 13px;
        font-weight: bold;
        color: #000;
        text-align: center;
        width: 220px;
        flex-shrink: 0;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.04);
    }

    .valor-campo {
        flex: 1;
        font-size: 15px;
        font-weight: bold;
        color: #000;
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    .input-estilizado {
        border: 1px solid transparent;
        background: transparent;
        font-size: 15px;
        font-weight: bold;
        color: #000;
        outline: none;
        width: 100%;
        padding: 4px 8px;
        border-radius: 8px;
        transition: background-color 0.2s, border-color 0.2s;
    }

    .input-estilizado:focus, .input-estilizado:hover {
        background-color: rgba(255, 255, 255, 0.6);
        border-color: #b8c0cb;
    }

    .select-estilizado {
        border: none;
        background: transparent;
        font-size: 15px;
        font-weight: bold;
        color: #000;
        cursor: pointer;
        outline: none;
    }

    .checkbox-group {
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    .checkbox-item {
        display: flex;
        align-items: center;
        gap: 10px;
        cursor: pointer;
        font-size: 14px;
    }

    .checkbox-item input {
        width: 18px;
        height: 18px;
        cursor: pointer;
    }

    .boton-guardar {
        background: linear-gradient(135deg, #fff3b0 0%, #ffd6f3 100%);
        border: none;
        border-radius: 30px;
        padding: 16px 55px;
        font-size: 17px;
        font-weight: 800;
        color: #000;
        cursor: pointer;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        transition: transform 0.15s ease, box-shadow 0.15s ease;
    }

    .boton-guardar:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.12);
    }

    @media (max-width: 768px) {
        .fila-perfil {
            flex-direction: column;
            align-items: flex-start;
            gap: 10px;
        }
        .pildora-etiqueta {
            width: 100%;
        }
    }
</style>

<div class="contenido-perfil">
    <div class="perfil-wrapper">
        
        <div class="header-pestanas">
            PESTAÑAS: 
            <span class="pestana-item activa" onclick="cambiarPestana('perfil', this)">[PERFIL]</span> , 
            <span class="pestana-item" onclick="cambiarPestana('usuario', this)">[USUARIO]</span> , 
            <span class="pestana-item" onclick="cambiarPestana('permisos', this)">[PERMISOS]</span> , 
            <span class="pestana-item" onclick="cambiarPestana('notificaciones', this)">[NOTIFICACIONES]</span>
        </div>

        <form id="formPerfil" onsubmit="guardarDatos(event)">
            
            <!-- PESTAÑA 1: PERFIL -->
            <div id="tab-perfil" class="tab-content activo">
                <div class="fila-perfil">
                    <div class="pildora-etiqueta">ICONO DE PERFIL:</div>
                    <div class="valor-campo">
                        <input type="text" class="input-estilizado" value="CARLOS RODRIGUEZ" placeholder="Nombre completo">
                        <select class="select-estilizado">
                            <option selected>[ ROL: ADMINISTRADOR DE INVENTARIO ]</option>
                            <option>[ ROL: SUPERVISOR DE ALMACÉN ]</option>
                            <option>[ ROL: COORDINADOR DE DONACIONES ]</option>
                        </select>
                    </div>
                </div>

                <div class="fila-perfil">
                    <div class="pildora-etiqueta">CORREO ELECTRONICO:</div>
                    <div class="valor-campo">
                        <input type="email" class="input-estilizado" value="CARLOS.ADMIN@BANCOALIMENTOS.ORG">
                    </div>
                </div>

                <div class="fila-perfil">
                    <div class="pildora-etiqueta">NOTIFICACIONES:</div>
                    <div class="valor-campo">
                        <div class="checkbox-group">
                            <label class="checkbox-item">
                                <input type="checkbox" checked> [ RECIBIR AVISOS DE CADUCIDAD POR CORREO ]
                            </label>
                            <label class="checkbox-item">
                                <input type="checkbox" checked> [ RESUMEN DIARIO DE ENTRADAS Y SALIDAS ]
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div id="tab-usuario" class="tab-content">
                <div class="fila-perfil">
                    <div class="pildora-etiqueta">CONTRASEÑA ACTUAL:</div>
                    <div class="valor-campo">
                        <input type="password" class="input-estilizado" value="********" placeholder="Ingresa contraseña actual">
                    </div>
                </div>

                <div class="fila-perfil">
                    <div class="pildora-etiqueta">NUEVA CONTRASEÑA:</div>
                    <div class="valor-campo">
                        <input type="password" class="input-estilizado" placeholder="[ INGRESA NUEVA CONTRASEÑA ]">
                    </div>
                </div>

                <div class="fila-perfil">
                    <div class="pildora-etiqueta">TELEFONO CONTACTO:</div>
                    <div class="valor-campo">
                        <input type="text" class="input-estilizado" value="+52 33 1234 5678">
                    </div>
                </div>
            </div>

            <div id="tab-permisos" class="tab-content">
                <div class="fila-perfil">
                    <div class="pildora-etiqueta">PERMISOS MÓDULOS:</div>
                    <div class="valor-campo">
                        <div class="checkbox-group">
                            <label class="checkbox-item"><input type="checkbox" checked> [ GESTIONAR INVENTARIO Y ALMACÉN ]</label>
                            <label class="checkbox-item"><input type="checkbox" checked> [ APROBAR Y CONFIRMAR DESPACHOS ]</label>
                            <label class="checkbox-item"><input type="checkbox" checked> [ EXPORTAR REPORTES Y ESTADÍSTICAS ]</label>
                            <label class="checkbox-item"><input type="checkbox"> [ REGISTRAR Y ELIMINAR USUARIOS ]</label>
                        </div>
                    </div>
                </div>
            </div>

            <div id="tab-notificaciones" class="tab-content">
                <div class="fila-perfil">
                    <div class="pildora-etiqueta">ALERTAS STOCK BAJO:</div>
                    <div class="valor-campo">
                        <select class="select-estilizado">
                            <option selected>[ NOTIFICAR CUANDO EL STOCK SEA MENOR A 10% ]</option>
                            <option>[ NOTIFICAR CUANDO EL STOCK SEA MENOR A 25% ]</option>
                        </select>
                    </div>
                </div>

                <div class="fila-perfil">
                    <div class="pildora-etiqueta">ALERTAS CADUCIDAD:</div>
                    <div class="valor-campo">
                        <select class="select-estilizado">
                            <option selected>[ AVISAR CON 7 DÍAS DE ANTICIPACIÓN ]</option>
                            <option>[ AVISAR CON 15 DÍAS DE ANTICIPACIÓN ]</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="text-center w-100 mt-2" style="display: flex; justify-content: center;">
                <button type="submit" class="boton-guardar">
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