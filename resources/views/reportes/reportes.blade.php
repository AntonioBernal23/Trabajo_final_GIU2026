@extends('layouts.app')

@section('content')
<div class="contenido-reportes flex-1 w-full min-h-[calc(100vh-120px)] py-10 px-[50px] bg-[linear-gradient(135deg,#f3e9ff,#fff0f7_35%,#eafcff_70%,#dffff9)] flex flex-col items-center">
    <div class="w-full max-w-[1200px] flex justify-between items-center mb-[35px] max-[992px]:flex-col max-[992px]:gap-[15px]">
        <div class="bg-[#ccd2da] rounded-[30px] py-2.5 px-[25px] flex items-center gap-2 font-bold text-[15px] text-black shadow-[0_2px_5px_rgba(0,0,0,0.05)]">
            <span>FILTRO:</span>
            <select id="selectFiltro" class="border-none bg-transparent font-bold text-[15px] cursor-pointer outline-none">
                <option value="mes">[ ULTIMO MES ]</option>
                <option value="trimestre">[ ULTIMO TRIMESTRE ]</option>
                <option value="anio">[ ULTIMO AÑO ]</option>
            </select>
        </div>

        <button class="bg-[#ccd2da] border-none rounded-[30px] py-3 px-[30px] font-bold text-[14px] text-black cursor-pointer transition-colors duration-200 shadow-[0_2px_5px_rgba(0,0,0,0.05)] hover:bg-[#b8c0cb]" onclick="window.print()">
            [ EXPORTAR A PDF ]
        </button>
    </div>

    <div class="w-full max-w-[1200px] flex flex-row justify-between items-center gap-10 max-[992px]:flex-col">

    <div class="flex-1 flex justify-center items-center min-h-[380px]">
            <div class="w-full h-[380px]">
                <canvas id="chartBarras"></canvas>
            </div>
        </div>

        <div class="flex-1 flex justify-center items-center min-h-[380px]">
            <div class="w-full h-[350px]">
                <canvas id="chartPastel"></canvas>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Datos reactivos según la opción seleccionada
        const datosReportes = {
            mes: {
                barras: {
                    labels: ['SEM 1', 'SEM 2', 'SEM 3', 'SEM 4'],
                    data: [120, 150, 110, 180]
                },
                pastel: {
                    labels: ['ENTRADAS 54.5%', 'SALIDAS 45.5%'],
                    data: [54.5, 45.5]
                }
            },
            trimestre: {
                barras: {
                    labels: ['AGOSTO', 'SEPTIEMBRE', 'OCTUBRE'],
                    data: [320, 410, 390]
                },
                pastel: {
                    labels: ['ENTRADAS 62.0%', 'SALIDAS 38.0%'],
                    data: [62.0, 38.0]
                }
            },
            anio: {
                barras: {
                    labels: ['ENE', 'FEB', 'MAR', 'ABR', 'MAY', 'JUN', 'JUL', 'AGO', 'SEP', 'OCT', 'NOV', 'DIC'],
                    data: [80, 100, 50, 120, 70, 68, 110, 45, 95, 78, 115, 150]
                },
                pastel: {
                    labels: ['ENTRADAS 58.3%', 'SALIDAS 41.7%'],
                    data: [58.3, 41.7]
                }
            }
        };

        const ctxBarras = document.getElementById('chartBarras').getContext('2d');
        const chartBarras = new Chart(ctxBarras, {
            type: 'bar',
            data: {
                labels: datosReportes.mes.barras.labels,
                datasets: [{
                    label: 'CANTIDAD DISTRIBUIDA',
                    data: datosReportes.mes.barras.data,
                    backgroundColor: '#4285f4',
                    borderRadius: 2
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'top',
                        labels: { font: { weight: 'bold', size: 11 }, boxWidth: 12 }
                    }
                },
                scales: {
                    y: { beginAtZero: true },
                    x: { ticks: { font: { size: 10, weight: 'bold' } } }
                }
            }
        });

        const ctxPastel = document.getElementById('chartPastel').getContext('2d');
        const chartPastel = new Chart(ctxPastel, {
            type: 'pie',
            data: {
                labels: datosReportes.mes.pastel.labels,
                datasets: [{
                    data: datosReportes.mes.pastel.data,
                    backgroundColor: ['#4285f4', '#a855f7'],
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

        document.getElementById('selectFiltro').addEventListener('change', function(e) {
            const seleccion = e.target.value;
            const nuevosDatos = datosReportes[seleccion];

            chartBarras.data.labels = nuevosDatos.barras.labels;
            chartBarras.data.datasets[0].data = nuevosDatos.barras.data;
            chartBarras.update();

            chartPastel.data.labels = nuevosDatos.pastel.labels;
            chartPastel.data.datasets[0].data = nuevosDatos.pastel.data;
            chartPastel.update();
        });
    });
</script>
@endsection