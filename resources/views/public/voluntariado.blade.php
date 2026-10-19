@extends('layouts.app')

@section('title', 'Únete como Voluntario - Banco de Alimentos')

@section('content')
<!-- Hero Section / Encabezado -->
<section class="py-5 text-center">
    <div class="container py-3">
        <h1 class="display-4 fw-bold text-success mb-3">Tu Tiempo y Manos Cambian Vidas</h1>
        <p class="lead text-secondary mb-0 col-md-9 mx-auto">
            El voluntariado es el corazón del Banco de Alimentos. Súmate a nuestro equipo y apóyanos en la selección, empaque y distribución de alimentos.
        </p>
    </div>
</section>

<!-- Modalidades de Voluntariado -->
<section class="py-4">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark">¿Cómo puedes colaborar?</h2>
            <p class="text-muted">Tenemos distintas áreas donde tus habilidades y tiempo marcan la diferencia</p>
        </div>
        <div class="row g-4">
            <!-- Selección y Empaque -->
            <div class="col-md-4">
                <div class="card h-100 border-0 rounded-4 shadow-sm text-center p-4 p-md-5 bg-white">
                    <div class="card-body d-flex flex-column justify-content-center p-0">
                        <div class="fs-1 mb-3">📦</div>
                        <h4 class="card-title fw-bold text-dark mb-3">Selección y Almacén</h4>
                        <p class="card-text text-muted mb-0">
                            Clasificación de frutas, verduras y abarrotes en buen estado para armado de paquetes alimentarios en bodega.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Logística y Entregas -->
            <div class="col-md-4">
                <div class="card h-100 border-0 rounded-4 shadow-sm text-center p-4 p-md-5 bg-white">
                    <div class="card-body d-flex flex-column justify-content-center p-0">
                        <div class="fs-1 mb-3">🚚</div>
                        <h4 class="card-title fw-bold text-dark mb-3">Logística y Rutas</h4>
                        <p class="card-text text-muted mb-0">
                            Acompañamiento en la recolección de excedentes en supermercados y entrega en comedores comunitarios.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Servicio Social y Corporativo -->
            <div class="col-md-4">
                <div class="card h-100 border-0 rounded-4 shadow-sm text-center p-4 p-md-5 bg-white">
                    <div class="card-body d-flex flex-column justify-content-center p-0">
                        <div class="fs-1 mb-3">🎓</div>
                        <h4 class="card-title fw-bold text-dark mb-3">Escuelas y Empresas</h4>
                        <p class="card-text text-muted mb-0">
                            Jornadas de voluntariado corporativo, prácticas profesionales y liberación de servicio social universitario.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Beneficios y Pasos para Participar -->
<section class="py-5">
    <div class="container">
        <div class="row g-4 align-items-stretch">
            <!-- Requisitos e Indicaciones -->
            <div class="col-lg-6">
                <div class="card border-0 rounded-4 shadow-sm p-4 p-md-5 bg-white h-100">
                    <div class="card-body p-0">
                        <h3 class="fw-bold text-success mb-4">Requisitos para Participar</h3>
                        <ul class="list-unstyled mb-0">
                            <li class="d-flex align-items-start mb-3">
                                <span class="fs-4 me-3 text-success">✔️</span>
                                <div>
                                    <strong>Edad Mínima:</strong>
                                    <p class="text-muted small mb-0">Ser mayor de 16 años (menores acompañados por un tutor).</p>
                                </div>
                            </li>
                            <li class="d-flex align-items-start mb-3">
                                <span class="fs-4 me-3 text-success">✔️</span>
                                <div>
                                    <strong>Disponibilidad de Tiempo:</strong>
                                    <p class="text-muted small mb-0">Turnos flexibles de 3 a 4 horas (Turno Matutino o Vespertino).</p>
                                </div>
                            </li>
                            <li class="d-flex align-items-start mb-3">
                                <span class="fs-4 me-3 text-success">✔️</span>
                                <div>
                                    <strong>Vestimenta Adecuada:</strong>
                                    <p class="text-muted small mb-0">Pantalón cómodo, playera y calzado cerrado (tenis o botas de trabajo).</p>
                                </div>
                            </li>
                            <li class="d-flex align-items-start">
                                <span class="fs-4 me-3 text-success">✔️</span>
                                <div>
                                    <strong>Actitud de Servicio:</strong>
                                    <p class="text-muted small mb-0">Ganas de colaborar en equipo con entusiasmo y compromiso social.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Proceso de Integración Directa -->
            <div class="col-lg-6">
                <div class="card border-0 rounded-4 shadow-sm p-4 p-md-5 bg-white h-100">
                    <div class="card-body p-0">
                        <h3 class="fw-bold text-success mb-4">Pasos para Integrarte</h3>
                        <div class="d-flex mb-4">
                            <div class="badge bg-success rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0" style="width: 40px; height: 40px; font-size: 1.1rem;">1</div>
                            <div>
                                <h5 class="fw-bold text-dark mb-1">Contacto Directo</h5>
                                <p class="text-muted small mb-0">Comunícate por teléfono o WhatsApp con la coordinación de voluntariado.</p>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="badge bg-success rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0" style="width: 40px; height: 40px; font-size: 1.1rem;">2</div>
                            <div>
                                <h5 class="fw-bold text-dark mb-1">Elección de Turno y Área</h5>
                                <p class="text-muted small mb-0">Selecciona los días y horarios que mejor se adapten a tu agenda.</p>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="badge bg-success rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0" style="width: 40px; height: 40px; font-size: 1.1rem;">3</div>
                            <div>
                                <h5 class="fw-bold text-dark mb-1">Charla Inductiva e Inicio</h5>
                                <p class="text-muted small mb-0">Asiste a tu primera jornada, recibe tu inducción de seguridad y ¡empieza a ayudar!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Canales Informativos de Registro -->
<section class="py-5">
    <div class="container">
        <div class="card border-0 rounded-4 shadow-sm p-4 p-md-5 bg-white col-lg-10 mx-auto">
            <div class="card-body text-center p-0">
                <h2 class="fw-bold text-dark mb-2">Coordinación de Voluntariado</h2>
                <p class="text-muted mb-4">Reserva tu fecha de asistencia o registra a tu grupo escolar/empresarial por estos medios:</p>

                <div class="row g-4 mt-2">
                    <!-- Atención Telefónica -->
                    <div class="col-md-4">
                        <div class="p-3 border rounded-3 bg-light h-100">
                            <div class="fs-2 mb-2">📞</div>
                            <h5 class="fw-bold text-dark">Línea Directa</h5>
                            <p class="text-muted small mb-2">(33) 3810-6595 ext. 104</p>
                            <span class="badge bg-secondary">Lun a Vie: 8:00 AM - 4:00 PM</span>
                        </div>
                    </div>
                    <!-- Correo de Voluntariado -->
                    <div class="col-md-4">
                        <div class="p-3 border rounded-3 bg-light h-100">
                            <div class="fs-2 mb-2">✉️</div>
                            <h5 class="fw-bold text-dark">Correo Electrónico</h5>
                            <p class="text-muted small mb-2">voluntarios@bancodealimentos.org</p>
                            <span class="badge bg-secondary">Respuesta en 24h</span>
                        </div>
                    </div>
                    <!-- WhatsApp Voluntariado -->
                    <div class="col-md-4">
                        <div class="p-3 border rounded-3 bg-light h-100">
                            <div class="fs-2 mb-2">💬</div>
                            <h5 class="fw-bold text-dark">WhatsApp Directo</h5>
                            <p class="text-muted small mb-3">Coordinación de jornadas</p>
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

<!-- Cierre y Navegación Complementaria -->
<section class="pb-5 mb-5 text-center">
    <div class="container">
        <div class="card border-0 rounded-4 shadow-sm p-4 bg-white col-lg-8 mx-auto">
            <div class="card-body">
                <h4 class="fw-bold text-dark mb-2">¿Quieres conocer las normas de inocuidad en el almacén?</h4>
                <p class="text-muted mb-3">Revisa nuestras políticas de manejo e higiene seguro de los alimentos.</p>
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <a href="{{ route('calidad') }}" class="btn btn-outline-primary rounded-pill px-4 fw-bold">🛡️ Calidad y Seguridad</a>
                    <a href="{{ route('impacto') }}" class="btn btn-primary rounded-pill px-4 fw-bold">📊 Ver Nuestro Impacto</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection