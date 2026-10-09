@extends('layouts.app')

@section('content')
<div class="container my-4">
    <!-- Pestañas -->
    <div class="bg-light p-3 text-center rounded-pill shadow-sm border mb-4">
        <span class="fw-bold me-2">PESTAÑAS:</span>
        <a href="#" class="btn btn-sm btn-dark rounded-pill px-3 me-1">[PERFIL]</a>
        <a href="#" class="btn btn-sm btn-outline-secondary rounded-pill px-3 me-1">[USUARIO]</a>
        <a href="#" class="btn btn-sm btn-outline-secondary rounded-pill px-3 me-1">[PERMISOS]</a>
        <a href="#" class="btn btn-sm btn-outline-secondary rounded-pill px-3 me-1">[NOTIFICACIONES]</a>
    </div>

    <!-- Panel Central -->
    <div class="bg-white p-4 rounded-4 shadow-sm border mx-auto" style="max-width: 750px;">
        <div class="row align-items-center mb-3">
            <div class="col-md-4">
                <div class="bg-light p-2 rounded-pill text-center border fw-bold">
                    ICONO DE PERFIL:
                </div>
            </div>
            <div class="col-md-8">
                <div class="p-2 border-bottom">
                    <h5 class="mb-0 fw-bold">[ CARLOS RODRIGUEZ ]</h5>
                    <small class="text-muted">[ ROL: ADMINISTRADOR DE INVENTARIO ]</small>
                </div>
            </div>
        </div>

        <div class="row align-items-center mb-3">
            <div class="col-md-4">
                <div class="bg-light p-2 rounded-pill text-center border fw-bold">
                    CORREO ELECTRONICO:
                </div>
            </div>
            <div class="col-md-8">
                <input type="text" class="form-control rounded-pill bg-light border-0" value="[ CARLOS.ADMIN@BANCOALIMENTOS.ORG ]" readonly>
            </div>
        </div>

        <div class="row align-items-center mb-4">
            <div class="col-md-4">
                <div class="bg-light p-2 rounded-pill text-center border fw-bold">
                    NOTIFICACIONES:
                </div>
            </div>
            <div class="col-md-8">
                <input type="text" class="form-control rounded-pill bg-light border-0" value="[ RECIBIR AVISOS DE CADUCIDAD POR CORREO ]" readonly>
            </div>
        </div>

        <div class="text-center mt-4">
            <button class="btn border-0 fw-bold px-5 py-3 rounded-4 text-dark shadow-sm" 
                    style="background-color: #FFBCE6; font-size: 1.2rem;" 
                    onclick="alert('Cambios guardados correctamente')">
                GUARDAR CAMBIOS
            </button>
        </div>
    </div>
</div>
@endsection
