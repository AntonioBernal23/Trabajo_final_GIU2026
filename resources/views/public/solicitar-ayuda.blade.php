@extends('layouts.app')

@section('title', 'Necesito Ayuda - Banco de Alimentos')

@section('content')
<!-- Hero Section / Encabezado -->
<section class="py-5 text-center">
    <div class="container py-3">
        <h1 class="display-4 fw-bold text-primary mb-3">Estamos para Apoyarte</h1>
        <p class="lead text-secondary mb-0 col-md-9 mx-auto">
            Brindamos asistencia alimentaria digna y nutricia a familias, comedores comunitarios e instituciones que lo necesiten.
        </p>
    </div>
</section>

<!-- ¿A quiénes apoyamos? (Se ajustó padding p-4 p-md-5 y h-100 para evitar texto cortado) -->
<section class="py-4">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark">¿A quiénes apoyamos?</h2>
            <p class="text-muted">Nuestra red de ayuda está destinada a atender a diversos sectores de la comunidad</p>
        </div>
        <div class="row g-4">
            <!-- Familias -->
            <div class="col-md-4">
                <div class="card h-100 border-0 rounded-4 shadow-sm text-center p-4 p-md-5 bg-white">
                    <div class="card-body d-flex flex-column justify-content-center p-0">
                        <div class="fs-1 mb-3">👨‍👩‍👧‍👦</div>
                        <h4 class="card-title fw-bold text-dark mb-3">Familias y Regiones</h4>
                        <p class="card-text text-muted mb-0">
                            Hogares en vulnerabilidad social o personas en situación de pobreza que requieren una despensa básica periódica.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Comedores Comunitarios -->
            <div class="col-md-4">
                <div class="card h-100 border-0 rounded-4 shadow-sm text-center p-4 p-md-5 bg-white">
                    <div class="card-body d-flex flex-column justify-content-center p-0">
                        <div class="fs-1 mb-3">🍲</div>
                        <h4 class="card-title fw-bold text-dark mb-3">Comedores Comunitarios</h4>
                        <p class="card-text text-muted mb-0">
                            Espacios que preparan platillos diarios para niños, adultos mayores o personas en situación de calle.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Instituciones -->
            <div class="col-md-4">
                <div class="card h-100 border-0 rounded-4 shadow-sm text-center p-4 p-md-5 bg-white">
                    <div class="card-body d-flex flex-column justify-content-center p-0">
                        <div class="fs-1 mb-3">🏢</div>
                        <h4 class="card-title fw-bold text-dark mb-3">Asilos y Organizaciones</h4>
                        <p class="card-text text-muted mb-0">
                            Casas hogar, asilos de ancianos y centros de rehabilitación registrados que brindan estancia y alimento.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Requisitos y Proceso Modificado -->
<section class="py-5">
    <div class="container">
        <div class="row g-4 align-items-stretch">
            <!-- Requisitos generales -->
            <div class="col-lg-6">
                <div class="card border-0 rounded-4 shadow-sm p-4 p-md-5 bg-white h-100">
                    <div class="card-body p-0">
                        <h3 class="fw-bold text-primary mb-4">Requisitos Básicos</h3>
                        <ul class="list-unstyled mb-0">
                            <li class="d-flex align-items-start mb-3">
                                <span class="fs-4 me-3 text-success">✔️</span>
                                <div>
                                    <strong>Identificación Oficial Vigente:</strong>
                                    <p class="text-muted small mb-0">INE o identificación con fotografía del titular o representante.</p>
                                </div>
                            </li>
                            <li class="d-flex align-items-start mb-3">
                                <span class="fs-4 me-3 text-success">✔️</span>
                                <div>
                                    <strong>Comprobante de Domicilio:</strong>
                                    <p class="text-muted small mb-0">No mayor a 3 meses de antigüedad (Luz, Agua o Predial).</p>
                                </div>
                            </li>
                            <li class="d-flex align-items-start mb-3">
                                <span class="fs-4 me-3 text-success">✔️</span>
                                <div>
                                    <strong>CURP de los integrantes:</strong>
                                    <p class="text-muted small mb-0">De cada integrante del núcleo familiar (para solicitudes familiares).</p>
                                </div>
                            </li>
                            <li class="d-flex align-items-start">
                                <span class="fs-4 me-3 text-success">✔️</span>
                                <div>
                                    <strong>Estudio Socioeconómico:</strong>
                                    <p class="text-muted small mb-0">Entrevista presencial realizada por nuestro equipo de Trabajo Social.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Proceso de Atención Actualizado (Sin mención de formulario) -->
            <div class="col-lg-6">
                <div class="card border-0 rounded-4 shadow-sm p-4 p-md-5 bg-white h-100">
                    <div class="card-body p-0">
                        <h3 class="fw-bold text-primary mb-4">¿Cómo es el Proceso?</h3>
                        <div class="d-flex mb-4">
                            <div class="badge bg-primary rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0" style="width: 40px; height: 40px; font-size: 1.1rem;">1</div>
                            <div>
                                <h5 class="fw-bold text-dark mb-1">Consulta de Requisitos y Documentos</h5>
                                <p class="text-muted small mb-0">Reúne tu documentación básica oficial (INE, CURP y Comprobante de domicilio).</p>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="badge bg-primary rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0" style="width: 40px; height: 40px; font-size: 1.1rem;">2</div>
                            <div>
                                <h5 class="fw-bold text-dark mb-1">Acude o Llama a Trabajo Social</h5>
                                <p class="text-muted small mb-0">Preséntate en nuestras oficinas o comunícate vía telefónica para agendar tu valoración.</p>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="badge bg-primary rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0" style="width: 40px; height: 40px; font-size: 1.1rem;">3</div>
                            <div>
                                <h5 class="fw-bold text-dark mb-1">Asignación de Apoyo</h5>
                                <p class="text-muted small mb-0">Una vez validada tu información, se asigna tu paquete alimentario o comedor cercano.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Reemplazo del Formulario por un Directorio de Atención Directa -->
<section class="py-5">
    <div class="container">
        <div class="card border-0 rounded-4 shadow-sm p-4 p-md-5 bg-white col-lg-10 mx-auto">
            <div class="card-body text-center p-0">
                <h2 class="fw-bold text-dark mb-2">Canales de Atención Directa</h2>
                <p class="text-muted mb-4">Para iniciar tu trámite de apoyo alimentario, comunícate o acude directamente por los siguientes medios:</p>

                <div class="row g-4 mt-2">
                    <!-- Opción Telefónica -->
                    <div class="col-md-4">
                        <div class="p-3 border rounded-3 bg-light h-100">
                            <div class="fs-2 mb-2">📞</div>
                            <h5 class="fw-bold text-dark">Atención Telefónica</h5>
                            <p class="text-muted small mb-2">(33) 3810-6595</p>
                            <span class="badge bg-secondary">Lun a Vie: 8:00 AM - 4:00 PM</span>
                        </div>
                    </div>
                    <!-- Opción Presencial -->
                    <div class="col-md-4">
                        <div class="p-3 border rounded-3 bg-light h-100">
                            <div class="fs-2 mb-2">📍</div>
                            <h5 class="fw-bold text-dark">Oficina de Trabajo Social</h5>
                            <p class="text-muted small mb-2">Av. Principal #123, Col. Centro</p>
                            <span class="badge bg-secondary">Atención Presencial Directa</span>
                        </div>
                    </div>
                    <!-- Opción WhatsApp -->
                    <div class="col-md-4">
                        <div class="p-3 border rounded-3 bg-light h-100">
                            <div class="fs-2 mb-2">💬</div>
                            <h5 class="fw-bold text-dark">WhatsApp Informativo</h5>
                            <p class="text-muted small mb-3">Respuesta a dudas frecuentes</p>
                            <a href="https://wa.me/523338106595" target="_blank" class="btn btn-success btn-sm rounded-pill px-3 fw-bold">
                                Enviar Mensaje
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Cierre y Redirección Principal a Centros de Ayuda -->
<section class="pb-5 text-center">
    <div class="container">
        <div class="card border-0 rounded-4 shadow-sm p-4 bg-white col-lg-8 mx-auto">
            <div class="card-body">
                <h4 class="fw-bold text-dark mb-2">¿Buscas un comedor comunitario cercano?</h4>
                <p class="text-muted mb-3">Consulta la ubicación y horarios de la red de comedores y puntos de entrega.</p>
                <a href="{{ route('centros') }}" class="btn btn-primary btn-lg rounded-pill px-4 fw-bold">
                    📍 Ver Red de Centros de Ayuda y Comedores
                </a>
            </div>
        </div>
    </div>
</section>
@endsection