@extends('layouts.app')

@section('content')
<main class="flex-1 w-full min-h-[calc(100vh-120px)] py-10 px-[70px] bg-[linear-gradient(135deg,#f3e9ff,#fff0f7_35%,#eafcff_70%,#dffff9)] flex flex-col items-center max-md:px-[15px]">

    <div class="w-full max-w-[900px]">

        <!-- Alerta -->
        <div class="w-full max-w-[520px] bg-[#3dd5fb] rounded-[30px] py-2.5 px-5 text-center text-[14px] font-bold text-black mb-[18px] max-md:max-w-full">
            ⚠️ 15 Lotes de alimentos próximos a vencer en &lt; 7 días
        </div>

        <!-- Encabezados -->
        <div class="grid grid-cols-3 gap-6 items-center text-center mb-6 max-md:gap-2">
            <div class="w-full max-w-[190px] mx-auto bg-[linear-gradient(90deg,#009fc2,#75d34b)] rounded-[25px] py-2 px-3 text-[14px] font-bold text-black max-md:text-[11px]">PRODUCTO</div>
            <div class="w-full max-w-[190px] mx-auto bg-[linear-gradient(90deg,#009fc2,#75d34b)] rounded-[25px] py-2 px-3 text-[14px] font-bold text-black max-md:text-[11px]">DIAS DE VENCIMIENTO</div>
            <div class="w-full max-w-[190px] mx-auto bg-[linear-gradient(90deg,#009fc2,#75d34b)] rounded-[25px] py-2 px-3 text-[14px] font-bold text-black max-md:text-[11px]">CANTIDAD</div>
        </div>

        <!-- Filas -->
        <div class="grid grid-cols-3 gap-6 items-center text-center mb-[18px] max-md:gap-2">
            <div class="w-full max-w-[190px] min-h-[82px] mx-auto bg-[#cd6be8] rounded-[28px] flex items-center justify-center text-[14px] font-bold text-black uppercase px-3 max-md:text-[11px]">YOGURT FRESA</div>
            <div class="text-[20px] font-bold text-[#0a6fd6] max-md:text-[13px]">VENCE EN 2 DIAS</div>
            <div class="text-[20px] font-bold text-[#0a6fd6] max-md:text-[13px]">200 UNIDADES</div>
        </div>

        <div class="grid grid-cols-3 gap-6 items-center text-center mb-[18px] max-md:gap-2">
            <div class="w-full max-w-[190px] min-h-[82px] mx-auto bg-[#cd6be8] rounded-[28px] flex items-center justify-center text-[14px] font-bold text-black uppercase px-3 max-md:text-[11px]">PAN DE MOLDE</div>
            <div class="text-[20px] font-bold text-[#0a6fd6] max-md:text-[13px]">VENCE EN 4 DIAS</div>
            <div class="text-[20px] font-bold text-[#0a6fd6] max-md:text-[13px]">80 BOLSAS</div>
        </div>

        <div class="grid grid-cols-3 gap-6 items-center text-center mb-[18px] max-md:gap-2">
            <div class="w-full max-w-[190px] min-h-[82px] mx-auto bg-[#cd6be8] rounded-[28px] flex items-center justify-center text-[14px] font-bold text-black uppercase px-3 max-md:text-[11px]">JUGO DE NARANJA</div>
            <div class="text-[20px] font-bold text-[#0a6fd6] max-md:text-[13px]">VENCE EN 5 DIAS</div>
            <div class="text-[20px] font-bold text-[#0a6fd6] max-md:text-[13px]">150 LITROS</div>
        </div>

    </div>

</main>
@endsection