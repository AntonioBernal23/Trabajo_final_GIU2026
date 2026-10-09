@extends('layouts.app')

@section('content')
<div class="container my-4">
    <!-- Fila Superior: Filtro y Botón -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div class="bg-light p-2 px-4 rounded-pill shadow-sm border">
            <span class="fw-bold me-2">FILTRO:</span>
            <select class="form-select d-inline-block w-auto border-0 bg-transparent fw-bold text-primary">
                <option selected>[ ULTIMO MES ]</option>
                <option>[ ULTIMO TRIMESTRE ]</option>
                <option>[ AÑO 2026 ]</option>
            </select>
        </div>
        
        <div>
            <button class="btn btn-light shadow-sm border rounded-pill px-4 fw-bold text-dark" onclick="alert('Exportando reporte a PDF...')">
                [ BOTON: EXPORTAR A PDF ]
            </button>
        </div>
    </div>

    <!-- Gráficas Representativas (Barras + Pastel) -->
    <div class="row align-items-center">
        <!-- Gráfica de Barras -->
        <div class="col-md-7 mb-4">
            <div class="bg-white p-4 rounded-4 shadow-sm border">
                <div class="text-center mb-2">
                    <span class="badge bg-primary rounded-pill mb-2">● CANTIDAD DISTRIBUIDA</span>
                </div>
                <div class="d-flex align-items-end justify-content-between pt-4 pb-2 border-bottom" style="height: 220px;">
                    <div class="text-center"><div class="bg-primary rounded-top" style="height: 80px; width: 20px;"></div><small class="d-block mt-1">ENERO</small></div>
                    <div class="text-center"><div class="bg-primary rounded-top" style="height: 100px; width: 20px;"></div><small class="d-block mt-1">FEB</small></div>
                    <div class="text-center"><div class="bg-primary rounded-top" style="height: 50px; width: 20px;"></div><small class="d-block mt-1">MAR</small></div>
                    <div class="text-center"><div class="bg-primary rounded-top" style="height: 120px; width: 20px;"></div><small class="d-block mt-1">ABR</small></div>
                    <div class="text-center"><div class="bg-primary rounded-top" style="height: 70px; width: 20px;"></div><small class="d-block mt-1">MAY</small></div>
                    <div class="text-center"><div class="bg-primary rounded-top" style="height: 68px; width: 20px;"></div><small class="d-block mt-1">JUN</small></div>
                    <div class="text-center"><div class="bg-primary rounded-top" style="height: 110px; width: 20px;"></div><small class="d-block mt-1">JUL</small></div>
                    <div class="text-center"><div class="bg-primary rounded-top" style="height: 45px; width: 20px;"></div><small class="d-block mt-1">AGO</small></div>
                    <div class="text-center"><div class="bg-primary rounded-top" style="height: 95px; width: 20px;"></div><small class="d-block mt-1">SEP</small></div>
                    <div class="text-center"><div class="bg-primary rounded-top" style="height: 78px; width: 20px;"></div><small class="d-block mt-1">OCT</small></div>
                    <div class="text-center"><div class="bg-primary rounded-top" style="height: 115px; width: 20px;"></div><small class="d-block mt-1">NOV</small></div>
                    <div class="text-center"><div class="bg-primary rounded-top" style="height: 150px; width: 20px;"></div><small class="d-block mt-1">DIC</small></div>
                </div>
            </div>
        </div>

        <!-- Gráfica Pastel -->
        <div class="col-md-5 mb-4 text-center">
            <div class="bg-white p-4 rounded-4 shadow-sm border position-relative d-flex flex-column align-items-center justify-content-center">
                <div class="rounded-circle shadow-sm my-3 position-relative" 
                     style="width: 220px; height: 220px; background: conic-gradient(#4D82F3 0% 54.5%, #B18CFE 54.5% 100%);">
                </div>
                <div class="d-flex justify-content-around w-100 mt-2">
                    <span class="fw-bold text-primary">ENTRADAS 54.5%</span>
                    <span class="fw-bold" style="color: #8A52F5;">SALIDAS 45.5%</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
