@extends('layouts.app')

@section('content')
<div class="container my-4">
    <!-- Banner de Título -->
    <div class="bg-light p-3 text-center rounded-pill shadow-sm border mb-4">
        <h4 class="m-0 fw-bold text-uppercase">[ DISTRIBUCION FISICA DEL ALMACEN CENTRAL ]</h4>
    </div>

    <!-- Grid de Zonas -->
    <div class="row g-4">
        <div class="col-md-6">
            <div class="bg-white p-4 rounded-4 shadow-sm border">
                <h5 class="fw-bold mb-3">ZONA SECA (ABARROTES / GRANOS)</h5>
                <p class="mb-2 fw-bold text-secondary">CAPACIDAD: <span class="text-dark">65%</span></p>
                <div class="progress rounded-pill" style="height: 25px;">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 65%;">65%</div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="bg-white p-4 rounded-4 shadow-sm border">
                <h5 class="fw-bold mb-3">CAMARA FRIA 1 (LACTEOS / CARNES)</h5>
                <p class="mb-2 fw-bold text-secondary">CAPACIDAD: <span class="text-dark">85%</span></p>
                <div class="progress rounded-pill" style="height: 25px;">
                    <div class="progress-bar bg-warning text-dark" role="progressbar" style="width: 85%;">85%</div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="bg-white p-4 rounded-4 shadow-sm border">
                <h5 class="fw-bold mb-3">CAMARA FRIA 2 (FRUTAS / VERDURAS)</h5>
                <p class="mb-2 fw-bold text-secondary">CAPACIDAD: <span class="text-dark">40%</span></p>
                <div class="progress rounded-pill" style="height: 25px;">
                    <div class="progress-bar bg-info text-dark" role="progressbar" style="width: 40%;">40%</div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="bg-white p-4 rounded-4 shadow-sm border">
                <h5 class="fw-bold mb-3">AREA DE EMPAQUE Y RECEPCION</h5>
                <p class="mb-2 fw-bold text-secondary">ESTADO: <span class="text-success fw-bold">LIBRE / EN OPERACION</span></p>
                <div class="progress rounded-pill" style="height: 25px;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%;">LIBRE</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
