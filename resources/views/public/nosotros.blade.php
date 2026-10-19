@extends('layouts.app')

@section('title', 'Quiénes Somos - Banco de Alimentos')

@section('content')
<!-- Hero Section / Encabezado Transparente sobre el Degradado -->
<section class="py-5 text-center">
    <div class="container py-3">
        <h1 class="display-4 fw-bold text-success mb-3">Unidos contra el Hambre y el Desperdicio</h1>
        <p class="lead text-secondary mb-0 col-md-9 mx-auto">
            Somos una organización sin fines de lucro dedicada a rescatar alimentos en buen estado para distribuirlos entre familias y comunidades vulnerables.
        </p>
    </div>
</section>

<!-- Sección Historia con la imagen real de tu proyecto -->
<section class="py-4">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-6">
                <h2 class="fw-bold text-success mb-3">Nuestra Historia</h2>
                <p class="text-muted fs-6">
                    Desde nuestro origen, nos hemos comprometido a luchar activamente contra la inseguridad alimentaria. Trabajamos de la mano con agricultores, supermercados, empresas de la industria alimentaria y voluntarios para evitar el desperdicio de comida que aún es apta para el consumo humano.
                </p>
                <p class="text-muted fs-6">
                    A través de nuestra red logística, garantizamos que toneladas de alimentos nutritivos lleguen diariamente a comedores comunitarios, hogares de ancianos y familias que más lo necesitan.
                </p>
            </div>
            <div class="col-lg-6 text-center">
                <img src="{{ asset('images/voluntarios.jpg') }}" alt="Voluntarios trabajando en el Banco de Alimentos" class="img-fluid rounded-4 shadow-sm">
            </div>
        </div>
    </div>
</section>

<!-- Misión, Visión y Valores (Tarjetas blancas flotantes sobre el degradado) -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark">Lo que nos Mueve</h2>
            <p class="text-muted">Nuestros principios fundamentales y rumbo estratégico</p>
        </div>
        <div class="row g-4">
            <!-- Misión -->
            <div class="col-md-4">
                <div class="card h-100 border-0 rounded-4 shadow-sm text-center p-4 bg-white">
                    <div class="card-body">
                        <div class="fs-1 mb-3">🎯</div>
                        <h4 class="card-title fw-bold text-dark mb-3">Misión</h4>
                        <p class="card-text text-muted">
                            Rescatar alimentos aptos para el consumo, reduciendo el desperdicio y proporcionando asistencia alimentaria digna a personas en situación de vulnerabilidad.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Visión -->
            <div class="col-md-4">
                <div class="card h-100 border-0 rounded-4 shadow-sm text-center p-4 bg-white">
                    <div class="card-body">
                        <div class="fs-1 mb-3">👁️</div>
                        <h4 class="card-title fw-bold text-dark mb-3">Visión</h4>
                        <p class="card-text text-muted">
                            Ser una comunidad unida y autosostenible donde ningún alimento comestible se desperdicie y ninguna familia sufra por falta de nutrición básica.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Valores -->
            <div class="col-md-4">
                <div class="card h-100 border-0 rounded-4 shadow-sm text-center p-4 bg-white">
                    <div class="card-body">
                        <div class="fs-1 mb-3">🤝</div>
                        <h4 class="card-title fw-bold text-dark mb-3">Valores</h4>
                        <p class="card-text text-muted">
                            Solidaridad, Transparencia, Compromiso Social, Respeto y Equidad en la distribución justa de recursos.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Llamado a la Acción (Tarjeta flotante blanca en lugar de un bloque oscuro) -->
<section class="py-5">
    <div class="container">
        <div class="card border-0 rounded-4 shadow-sm p-4 p-md-5 bg-white text-center">
            <div class="card-body">
                <h2 class="fw-bold text-dark mb-3">¿Quieres formar parte del cambio?</h2>
                <p class="lead text-muted mb-4 col-md-8 mx-auto">Tu apoyo como voluntario, donante o aliado es fundamental para alimentar a miles de familias.</p>
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <a href="{{ route('donar') }}" class="btn btn-primary btn-lg rounded-pill px-4 fw-bold">Cómo Donar</a>
                    <a href="{{ route('voluntariado') }}" class="btn btn-outline-primary btn-lg rounded-pill px-4 fw-bold">Únete como Voluntario</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection