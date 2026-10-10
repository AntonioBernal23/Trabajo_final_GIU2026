@extends('layouts.app')

@section('content')
<style>
    .contenido-reportes {
        flex: 1;
        width: 100%;
        min-height: calc(100vh - 120px);
        padding: 40px 50px;
        background: linear-gradient(135deg, #f3e9ff, #fff0f7 35%, #eafcff 70%, #dffff9);
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .header-acciones {
        width: 100%;
        max-width: 1200px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 35px;
    }

    .pildora-filtro {
        background-color: #ccd2da;
        border-radius: 30px;
        padding: 10px 25px;
        display: flex;
        align-items: center;
        gap: 8px;
        font-weight: bold;
        font-size: 15px;
        color: #000;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
    }

    .select-filtro {
        border: none;
        background: transparent;
        font-weight: bold;
        font-size: 15px;
        cursor: pointer;
        outline: none;
    }

    .boton-pdf {
        background-color: #ccd2da;
        border: none;
        border-radius: 30px;
        padding: 12px 30px;
        font-weight: bold;
        font-size: 14px;
        color: #000;
        cursor: pointer;
        transition: background-color 0.2s;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
    }

    .boton-pdf:hover {
        background-color: #b8c0cb;
    }

    .grid-graficas {
        width: 100%;
        max-width: 1200px;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        gap: 40px;
    }

    .col-grafica {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 380px;
    }

    @media (max-width: 992px) {
        .header-acciones {
            flex-direction: column;
            gap: 15px;
        }
        .grid-graficas {
            flex-direction: column;
        }
    }
</style>

<div class="contenido-reportes">
    <div class="header-acciones">
        <div class="pildora-filtro">
            <span>FILTRO:</span>
            <select id="selectFiltro" class="select-filtro">
                <option value="mes">[ ULTIMO MES ]</option>
                <option value="trimestre">[ ULTIMO TRIMESTRE ]</option>
                <option value="anio">[ ULTIMO AÑO ]</option>
            </select>
        </div>

        <button class="boton-pdf" onclick="window.print()">
            [ EXPORTAR A PDF ]
        </button>
    </div>

    <div class="grid-graficas">

    <div class="col-grafica">
            <div style="width: 100%; height: 380px;">
                <canvas id="chartBarras"></canvas>
            </div>
        </div>

        <div class="col-grafica">
            <div style="width: 100%; height: 350px;">
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