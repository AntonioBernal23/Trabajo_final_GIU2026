@extends('layouts.app')

@section('content')
<div class="contenido-almacen flex-1 w-full min-h-[calc(100vh-120px)] py-10 px-[30px] bg-[linear-gradient(135deg,#f3e9ff,#fff0f7_35%,#eafcff_70%,#dffff9)] flex flex-col items-center">
    <div class="bg-[#ccd2da] rounded-[30px] py-3 px-10 font-bold text-[16px] text-black uppercase tracking-[0.5px] shadow-[0_2px_5px_rgba(0,0,0,0.05)] mb-[50px] text-center">
        [ DISTRIBUCION FISICA DEL ALMACEN CENTRAL ]
    </div>

    <div class="w-full max-w-[1100px] grid grid-cols-2 gap-[35px] max-md:grid-cols-1">
        <div class="bg-[linear-gradient(135deg,#fff3b0_0%,#ffd6f3_100%)] rounded-[35px] py-10 px-[25px] flex flex-col justify-center items-center text-center shadow-[0_4px_15px_rgba(0,0,0,0.04)] min-h-[180px]">
            <div class="text-[15px] font-bold text-black uppercase mb-2">ZONA SECA (ABARROTES / GRANOS)</div>
            <div class="text-[15px] font-bold text-black tracking-[0.5px]">CAPACIDAD: [!!!!!!!!!!----] 65%</div>
        </div>

        <div class="bg-[linear-gradient(135deg,#fff3b0_0%,#ffd6f3_100%)] rounded-[35px] py-10 px-[25px] flex flex-col justify-center items-center text-center shadow-[0_4px_15px_rgba(0,0,0,0.04)] min-h-[180px]">
            <div class="text-[15px] font-bold text-black uppercase mb-2">CAMARA FRIA 1 (LACTEOS / CARNES)</div>
            <div class="text-[15px] font-bold text-black tracking-[0.5px]">CAPACIDAD: [!!!!!!!!!!!!!!!--] 85%</div>
        </div>

        <div class="bg-[linear-gradient(135deg,#fff3b0_0%,#ffd6f3_100%)] rounded-[35px] py-10 px-[25px] flex flex-col justify-center items-center text-center shadow-[0_4px_15px_rgba(0,0,0,0.04)] min-h-[180px]">
            <div class="text-[15px] font-bold text-black uppercase mb-2">CAMARA FRIA 2 (FRUTAS / VERDURAS)</div>
            <div class="text-[15px] font-bold text-black tracking-[0.5px]">CAPACIDAD: [!!!!!!---------] 40%</div>
        </div>

        <div class="bg-[linear-gradient(135deg,#fff3b0_0%,#ffd6f3_100%)] rounded-[35px] py-10 px-[25px] flex flex-col justify-center items-center text-center shadow-[0_4px_15px_rgba(0,0,0,0.04)] min-h-[180px]">
            <div class="text-[15px] font-bold text-black uppercase mb-2">AREA DE EMPAQUE Y RECEPCION</div>
            <div class="text-[15px] font-bold text-black tracking-[0.5px]">ESTADO: LIBRE / EN OPERACION</div>
        </div>
    </div>
</div>
@endsection