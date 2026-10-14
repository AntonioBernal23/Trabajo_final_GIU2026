@extends('layouts.app')

@section('content')
<main class="flex-1 w-full min-h-[calc(100vh-120px)] py-10 px-[50px] bg-[linear-gradient(135deg,#f3e9ff,#fff0f7_35%,#eafcff_70%,#dffff9)] flex items-center justify-center max-md:px-5">
    <div class="w-full max-w-[1100px] flex items-center justify-between gap-10 max-[992px]:flex-col">

        <!-- Indicadores -->
        <section class="flex flex-col gap-[25px] max-[992px]:w-full max-[992px]:items-center">
            <div class="flex items-center gap-5">
                <div class="w-[122px] min-h-[78px] bg-[#cbd5e1] rounded-[28px] flex items-center justify-center text-center text-[15px] font-bold text-black py-3 px-3">
                    Stock total
                </div>
                <span class="text-[16px] font-bold text-[#0a6fd6]" id="stockTotal">12,450 Kg</span>
            </div>

            <a href="{{ route('donaciones.registro') }}" class="flex items-center gap-5 hover:opacity-80 transition">
                <div class="w-[122px] min-h-[78px] bg-[#cbd5e1] rounded-[28px] flex items-center justify-center text-center text-[15px] font-bold text-black py-3 px-3">
                    Donaciones este mes
                </div>
                <span class="text-[16px] font-bold text-[#0a6fd6]" id="donacionesMes">3,200 Kg</span>
            </a>

            <a href="{{ route('caducidad') }}" class="flex items-center gap-5 hover:opacity-80 transition">
                <div class="w-[122px] min-h-[78px] bg-[#cbd5e1] rounded-[28px] flex items-center justify-center text-center text-[15px] font-bold text-black py-3 px-3">
                    Alimentos proximos a vencer
                </div>
                <span class="text-[16px] font-bold text-[#0a6fd6]" id="lotesVencer">15 Lotes</span>
            </a>
        </section>

        <!-- Gráfica de categorías -->
        <aside class="flex-1 w-full max-w-[520px] flex justify-center items-center">
            <div class="w-full h-[360px]">
                <canvas id="chartCategorias"></canvas>
            </div>
        </aside>

    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const ctx = document.getElementById('chartCategorias').getContext('2d');

        new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['GRANOS 34%', 'LACTEOS 14%', 'ENSALADAS 25%', 'FRUTAS 27%'],
                datasets: [{
                    data: [34, 14, 25, 27],
                    backgroundColor: ['#4a7ff7', '#b28df5', '#f4b96b', '#ffdd5c'],
                    borderWidth: 0
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: true,
                        position: 'right',
                        labels: { font: { weight: 'bold', size: 12 } }
                    }
                }
            }
        });
    });
</script>
@endsection