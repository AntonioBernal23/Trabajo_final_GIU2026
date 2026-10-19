@extends('layouts.app')

@section('content')

<!-- 1. SECCIÓN HERO (Con botones CTA) -->
<section class="py-5 text-center container">
    <div class="row py-lg-4 justify-content-center">
        <div class="col-lg-8 col-md-10">
            <h1 class="display-4 fw-bold text-dark mb-3">Banco de Alimentos</h1>
            <p class="lead text-secondary mb-4">
                Rescatamos alimentos y nos aseguramos de que lleguen a las comunidades que más lo necesitan. 
                Trabajamos unidos para combatir el hambre y reducir el desperdicio.
            </p>
            
            <!-- BOTONES DE ACCIÓN (CTA) -->
            <div class="d-flex justify-content-center gap-3 mb-4">
                <a href="{{ route('donar') }}" class="btn btn-primary btn-lg rounded-pill px-4 shadow-sm fw-bold">
                    Quiero Donar
                </a>
                <a href="{{ route('solicitar.ayuda') }}" class="btn btn-outline-primary btn-lg rounded-pill px-4 fw-bold">
                    Necesito Ayuda
                </a>
            </div>
        </div>
    </div>
</section>

<!-- 2. TARJETAS DE SERVICIOS (Con nombres humanizados) -->
<section class="py-4 container">
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0 p-3 text-center rounded-4">
                <div class="fs-1 mb-2">🍏</div>
                <h5 class="card-title fw-bold">Rescate de Comida</h5>
                <p class="card-text text-muted small">Recuperamos excedentes comestibles en buen estado directamente de comercios y productores.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0 p-3 text-center rounded-4">
                <div class="fs-1 mb-2">🚚</div>
                <h5 class="card-title fw-bold">Nuestra Red de Apoyo</h5>
                <p class="card-text text-muted small">Entregamos los insumos a comedores comunitarios e instituciones que atienden a personas vulnerables.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0 p-3 text-center rounded-4">
                <div class="fs-1 mb-2">🤝</div>
                <h5 class="card-title fw-bold">Donar Alimentos</h5>
                <p class="card-text text-muted small">Facilitamos que personas y empresas entreguen donaciones de manera rápida y segura.</p>
            </div>
        </div>
    </div>
</section>

<!-- 3. SECCIÓN DE CIFRAS DE IMPACTO (Llena el espacio vertical de la pantalla) -->
<section class="py-5 bg-white shadow-sm mt-5">
    <div class="container text-center">
        <h3 class="fw-bold text-dark mb-4">Nuestro Impacto en Cifras</h3>
        <div class="row g-4">
            <div class="col-md-4">
                <h2 class="display-5 fw-bold text-primary mb-1">+15,000 Kg</h2>
                <p class="text-muted fw-semibold">De alimento rescatado este año</p>
            </div>
            <div class="col-md-4">
                <h2 class="display-5 fw-bold text-primary mb-1">+45</h2>
                <p class="text-muted fw-semibold">Comedores comunitarios apoyados</p>
            </div>
            <div class="col-md-4">
                <h2 class="display-5 fw-bold text-primary mb-1">+1,200</h2>
                <p class="text-muted fw-semibold">Familias beneficiadas</p>
            </div>
        </div>
    </div>
</section>

@endsection