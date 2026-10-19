@extends('layouts.app')

@section('title', 'Centros de Ayuda - Banco de Alimentos')

@section('content')
<!-- Hero Section / Encabezado -->
<section class="py-5 text-center">
    <div class="container py-3">
        <h1 class="display-4 fw-bold text-primary mb-3">Red de Centros de Ayuda</h1>
        <p class="lead text-secondary mb-0 col-md-9 mx-auto">
            Consulta la ubicación, horarios y servicios de nuestras oficinas de atención, almacenes de acopio y comedores comunitarios afiliados.
        </p>
    </div>
</section>

<!-- Directorio de Centros (Tarjetas Blancas Flotantes) -->
<section class="py-4">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark">Nuestras Ubicaciones</h2>
            <p class="text-muted">Encuentra el punto de atención o comedor más cercano a tu localidad</p>
        </div>

        <div class="row g-4">
            <!-- Centro 1: Sede Principal -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 rounded-4 shadow-sm p-4 bg-white">
                    <div class="card-body d-flex flex-column justify-content-between p-0">
                        <div>
                            <div class="d-flex align-items-center mb-3">
                                <span class="fs-1 me-3">🏢</span>
                                <div>
                                    <h4 class="fw-bold text-dark mb-0">Oficina Central y Acopio</h4>
                                    <span class="badge bg-primary mt-1">Sede Principal</span>
                                </div>
                            </div>
                            <p class="text-muted small mb-3">
                                Atiende trámites de estudio socioeconómico, recepción de alimentos en especie e informes generales.
                            </p>
                            <ul class="list-unstyled small text-muted mb-4">
                                <li class="mb-2"><strong>📍 Dirección:</strong> Av. Principal #123, Col. Centro</li>
                                <li class="mb-2"><strong>📞 Teléfono:</strong> (33) 3810-6595</li>
                                <li class="mb-2"><strong>⏰ Horario:</strong> Lun a Vie: 8:00 AM - 4:00 PM</li>
                                <li class="mb-0"><strong>🍎 Servicio:</strong> Trabajo Social y Acopio</li>
                            </ul>
                        </div>
                        <a href="https://maps.google.com" target="_blank" class="btn btn-outline-primary btn-sm rounded-pill w-100 fw-bold">
                            📍 Ver en Mapa
                        </a>
                    </div>
                </div>
            </div>

            <!-- Centro 2: Comedor Comunitario Norte -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 rounded-4 shadow-sm p-4 bg-white">
                    <div class="card-body d-flex flex-column justify-content-between p-0">
                        <div>
                            <div class="d-flex align-items-center mb-3">
                                <span class="fs-1 me-3">🍲</span>
                                <div>
                                    <h4 class="fw-bold text-dark mb-0">Comedor Esperanza</h4>
                                    <span class="badge bg-success mt-1">Comedor Comunitario</span>
                                </div>
                            </div>
                            <p class="text-muted small mb-3">
                                Ofrece raciones de alimento caliente preparadas diariamente para familias y adultos mayores de la zona.
                            </p>
                            <ul class="list-unstyled small text-muted mb-4">
                                <li class="mb-2"><strong>📍 Dirección:</strong> Calle Hidalgo #45, Col. San Juan</li>
                                <li class="mb-2"><strong>📞 Teléfono:</strong> (33) 3810-6596</li>
                                <li class="mb-2"><strong>⏰ Horario:</strong> Lun a Sáb: 12:00 PM - 3:00 PM</li>
                                <li class="mb-0"><strong>🍲 Servicio:</strong> Alimentos calientes en sitio</li>
                            </ul>
                        </div>
                        <a href="https://maps.google.com" target="_blank" class="btn btn-outline-primary btn-sm rounded-pill w-100 fw-bold">
                            📍 Ver en Mapa
                        </a>
                    </div>
                </div>
            </div>

            <!-- Centro 3: Módulo de Entrega Sur -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 rounded-4 shadow-sm p-4 bg-white">
                    <div class="card-body d-flex flex-column justify-content-between p-0">
                        <div>
                            <div class="d-flex align-items-center mb-3">
                                <span class="fs-1 me-3">📦</span>
                                <div>
                                    <h4 class="fw-bold text-dark mb-0">Centro Distribución Sur</h4>
                                    <span class="badge bg-info text-dark mt-1">Entrega de Despensas</span>
                                </div>
                            </div>
                            <p class="text-muted small mb-3">
                                Punto de distribución de paquetes alimentarios periódicos para padrones de beneficiarios registrados.
                            </p>
                            <ul class="list-unstyled small text-muted mb-4">
                                <li class="mb-2"><strong>📍 Dirección:</strong> Av. Sur #789, Col. Bellavista</li>
                                <li class="mb-2"><strong>📞 Teléfono:</strong> (33) 3810-6597</li>
                                <li class="mb-2"><strong>⏰ Horario:</strong> Mar y Jue: 9:00 AM - 2:00 PM</li>
                                <li class="mb-0"><strong>📦 Servicio:</strong> Entrega de paquetes básicos</li>
                            </ul>
                        </div>
                        <a href="https://maps.google.com" target="_blank" class="btn btn-outline-primary btn-sm rounded-pill w-100 fw-bold">
                            📍 Ver en Mapa
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Recomendaciones para Beneficiarios -->
<section class="py-5">
    <div class="container">
        <div class="card border-0 rounded-4 shadow-sm p-4 p-md-5 bg-white col-lg-10 mx-auto">
            <div class="card-body p-0">
                <h3 class="fw-bold text-dark mb-3 text-center">Información Importante para Asistir</h3>
                <p class="text-muted text-center mb-4">Te recomendamos tomar en cuenta las siguientes indicaciones antes de acudir a cualquier centro:</p>

                <div class="row g-4 text-start">
                    <div class="col-md-4">
                        <div class="d-flex align-items-start">
                            <span class="fs-3 me-3 text-primary">📄</span>
                            <div>
                                <h6 class="fw-bold text-dark mb-1">Documentación</h6>
                                <p class="text-muted small mb-0">Si vas a realizar tu registro por primera vez, acude con tu INE y comprobante de domicilio impresos.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex align-items-start">
                            <span class="fs-3 me-3 text-primary">⏰</span>
                            <div>
                                <h6 class="fw-bold text-dark mb-1">Horarios de Atención</h6>
                                <p class="text-muted small mb-0">Respeta los horarios de cada centro para asegurar la disponibilidad de alimento o fichas de atención.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex align-items-start">
                            <span class="fs-3 me-3 text-primary">🛍️</span>
                            <div>
                                <h6 class="fw-bold text-dark mb-1">Bolsas o Contenedores</h6>
                                <p class="text-muted small mb-0">Para la entrega de despensas o comida para llevar, se recomienda acudir con bolsas reusables.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Cierre y Navegación Relacionada -->
<section class="pb-5 mb-5 text-center">
    <div class="container">
        <div class="card border-0 rounded-4 shadow-sm p-4 bg-white col-lg-8 mx-auto">
            <div class="card-body">
                <h4 class="fw-bold text-dark mb-2">¿Tienes dudas sobre los requisitos o trámites?</h4>
                <p class="text-muted mb-3">Revisa la sección de requisitos o la lista de preguntas frecuentes para resolver tus dudas.</p>
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <a href="{{ route('solicitar.ayuda') }}" class="btn btn-primary rounded-pill px-4 fw-bold">📋 Requisitos de Ayuda</a>
                    <a href="{{ route('faq') }}" class="btn btn-outline-primary rounded-pill px-4 fw-bold">❓ Preguntas Frecuentes</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection