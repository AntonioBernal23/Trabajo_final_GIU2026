@extends('layouts.app')

@section('content')
<style>
    .contenido-almacen {
        flex: 1;
        width: 100%;
        min-height: calc(100vh - 120px);
        padding: 40px 30px;
        background: linear-gradient(135deg, #f3e9ff, #fff0f7 35%, #eafcff 70%, #dffff9);
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .titulo-almacen {
        background-color: #ccd2da;
        border-radius: 30px;
        padding: 12px 40px;
        font-weight: bold;
        font-size: 16px;
        color: #000;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
        margin-bottom: 50px;
        text-align: center;
    }

    .grid-zonas {
        width: 100%;
        max-width: 1100px;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 35px;
    }

    .tarjeta-zona {
        background: linear-gradient(135deg, #fff3b0 0%, #ffd6f3 100%);
        border-radius: 35px;
        padding: 40px 25px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.04);
        min-height: 180px;
    }

    .zona-nombre {
        font-size: 15px;
        font-weight: bold;
        color: #000;
        text-transform: uppercase;
        margin-bottom: 8px;
    }

    .zona-capacidad {
        font-size: 15px;
        font-weight: bold;
        color: #000;
        letter-spacing: 0.5px;
    }

    @media (max-width: 768px) {
        .grid-zonas {
            grid-template-columns: 1fr;
        }
    }
</style>

<div class="contenido-almacen">
    <div class="titulo-almacen">
        [ DISTRIBUCION FISICA DEL ALMACEN CENTRAL ]
    </div>

    <div class="grid-zonas">
        <div class="tarjeta-zona">
            <div class="zona-nombre">ZONA SECA (ABARROTES / GRANOS)</div>
            <div class="zona-capacidad">CAPACIDAD: [!!!!!!!!!!----] 65%</div>
        </div>

        <div class="tarjeta-zona">
            <div class="zona-nombre">CAMARA FRIA 1 (LACTEOS / CARNES)</div>
            <div class="zona-capacidad">CAPACIDAD: [!!!!!!!!!!!!!!!--] 85%</div>
        </div>

        <div class="tarjeta-zona">
            <div class="zona-nombre">CAMARA FRIA 2 (FRUTAS / VERDURAS)</div>
            <div class="zona-capacidad">CAPACIDAD: [!!!!!!---------] 40%</div>
        </div>

        <div class="tarjeta-zona">
            <div class="zona-nombre">AREA DE EMPAQUE Y RECEPCION</div>
            <div class="zona-capacidad">ESTADO: LIBRE / EN OPERACION</div>
        </div>
    </div>
</div>
@endsection