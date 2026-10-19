@extends('layouts.app')

@section('title', 'Cómo Donar - Banco de Alimentos')

@section('content')
<!-- Hero Section / Encabezado -->
<section class="py-5 text-center">
    <div class="container py-3">
        <h1 class="display-4 fw-bold text-success mb-3">Tu Donación Transforma Vidas</h1>
        <p class="lead text-secondary mb-0 col-md-9 mx-auto">
            Gracias a tus aportaciones podemos rescatar toneladas de alimentos y llevar nutrición digna a miles de familias que lo necesitan.
        </p>
    </div>
</section>

<!-- Formas de Donar (Tarjetas Blancas Flotantes) -->
<section class="py-4">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark">Formas de Apoyar</h2>
            <p class="text-muted">Elige la modalidad de donación que mejor se adapte a ti o a tu empresa</p>
        </div>
        <div class="row g-4">
            <!-- Donación en Especie / Alimentos -->
            <div class="col-md-4">
                <div class="card h-100 border-0 rounded-4 shadow-sm text-center p-4 p-md-5 bg-white">
                    <div class="card-body d-flex flex-column justify-content-center p-0">
                        <div class="fs-1 mb-3">🍎</div>
                        <h4 class="card-title fw-bold text-dark mb-3">Donación en Especie</h4>
                        <p class="card-text text-muted mb-0">
                            Aceptamos alimentos no perecederos, granos, enlatados, frutas y verduras en buen estado directamente en nuestro centro de acopio.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Donación Económica -->
            <div class="col-md-4">
                <div class="card h-100 border-0 rounded-4 shadow-sm text-center p-4 p-md-5 bg-white">
                    <div class="card-body d-flex flex-column justify-content-center p-0">
                        <div class="fs-1 mb-3">💳</div>
                        <h4 class="card-title fw-bold text-dark mb-3">Aportación Económica</h4>
                        <p class="card-text text-muted mb-0">
                            Tus donativos monetarios nos permiten cubrir los costos de logística, combustible y empaque para la distribución del alimento.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Alianzas Empresariales -->
            <div class="col-md-4">
                <div class="card h-100 border-0 rounded-4 shadow-sm text-center p-4 p-md-5 bg-white">
                    <div class="card-body d-flex flex-column justify-content-center p-0">
                        <div class="fs-1 mb-3">🚜</div>
                        <h4 class="card-title fw-bold text-dark mb-3">Rescate Agrícola e Industrial</h4>
                        <p class="card-text text-muted mb-0">
                            Para supermercados, productores y empresas con mermas alimentarias o excedentes de producción aptos para el consumo.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Datos para Donación Económica y Entrega de Alimentos -->
<section class="py-5">
    <div class="container">
        <div class="row g-4 align-items-stretch">
            <!-- Cuentas Bancarias / Transferencia -->
            <div class="col-lg-6">
                <div class="card border-0 rounded-4 shadow-sm p-4 p-md-5 bg-white h-100">
                    <div class="card-body p-0">
                        <h3 class="fw-bold text-success mb-4">💳 Datos Bancarios para Transferencia</h3>
                        <p class="text-muted small mb-4">Puedes realizar tu donativo directamente a nuestras cuentas oficiales:</p>
                        
                        <div class="bg-light p-3 rounded-3 mb-3 border">
                            <strong class="text-dark d-block mb-1">Banco Nacional de México</strong>
                            <p class="small text-muted mb-1"><strong>Cuenta:</strong> 1234-5678-90</p>
                            <p class="small text-muted mb-1"><strong>CLABE Interbancaria:</strong> 012 345 67890123456 7</p>
                            <p class="small text-muted mb-0"><strong>Beneficiario:</strong> Banco de Alimentos Comunitario A.C.</p>
                        </div>

                        <div class="alert alert-success rounded-3 mb-0 small" role="alert">
                            💡 <strong>Deducible de Impuestos:</strong> Expedimos recibos deducibles (CFDI) para todas tus aportaciones monetarias o en especie.
                        </div>
                    </div>
                </div>
            </div>

            <!-- Punto de Acopio de Alimentos -->
            <div class="col-lg-6">
                <div class="card border-0 rounded-4 shadow-sm p-4 p-md-5 bg-white h-100">
                    <div class="card-body p-0 d-flex flex-column justify-content-between">
                        <div>
                            <h3 class="fw-bold text-success mb-4">📦 Recepción de Alimentos en Especie</h3>
                            <p class="text-muted small mb-3">Si deseas llevar despensa o alimentos directos, te esperamos en nuestras instalaciones principales:</p>
                            
                            <ul class="list-unstyled mb-4">
                                <li class="mb-3">
                                    <strong>📍 Dirección de Acopio:</strong>
                                    <p class="text-muted small mb-0">Av. Principal #123, Col. Centro</p>
                                </li>
                                <li class="mb-3">
                                    <strong>⏰ Horario de Recepción:</strong>
                                    <p class="text-muted small mb-0">Lunes a Viernes de 8:00 AM a 4:00 PM</p>
                                </li>
                                <li class="mb-0">
                                    <strong>🍏 Alimentos Prioritarios:</strong>
                                    <p class="text-muted small mb-0">Arroz, frijol, aceite, atún en lata, avena, leche en polvo y artículos de higiene.</p>
                                </li>
                            </ul>
                        </div>
                        
                        <div>
                            <span class="badge bg-secondary w-100 py-2">Recepción sin previa cita durante horario de almacén</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Directorio Informativo y Contacto de Donaciones -->
<section class="py-5">
    <div class="container">
        <div class="card border-0 rounded-4 shadow-sm p-4 p-md-5 bg-white col-lg-10 mx-auto">
            <div class="card-body text-center p-0">
                <h2 class="fw-bold text-dark mb-2">¿Tienes dudas o representas a una Empresa?</h2>
                <p class="text-muted mb-4">Coordina la recolección de excedentes o solicita tu recibo deducible por estos medios:</p>

                <div class="row g-4 mt-2">
                    <!-- Atención Telefónica -->
                    <div class="col-md-4">
                        <div class="p-3 border rounded-3 bg-light h-100">
                            <div class="fs-2 mb-2">📞</div>
                            <h5 class="fw-bold text-dark">Coordinación de Donantes</h5>
                            <p class="text-muted small mb-2">(33) 3810-6595 ext. 102</p>
                            <span class="badge bg-secondary">Lun a Vie: 8:00 AM - 4:00 PM</span>
                        </div>
                    </div>
                    <!-- Correo de Procuración -->
                    <div class="col-md-4">
                        <div class="p-3 border rounded-3 bg-light h-100">
                            <div class="fs-2 mb-2">✉️</div>
                            <h5 class="fw-bold text-dark">Correo Electrónico</h5>
                            <p class="text-muted small mb-2">donaciones@bancodealimentos.org</p>
                            <span class="badge bg-secondary">Respuesta en 24h</span>
                        </div>
                    </div>
                    <!-- WhatsApp Donaciones -->
                    <div class="col-md-4">
                        <div class="p-3 border rounded-3 bg-light h-100">
                            <div class="fs-2 mb-2">💬</div>
                            <h5 class="fw-bold text-dark">WhatsApp Directo</h5>
                            <p class="text-muted small mb-3">Atención inmediata a donantes</p>
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

<!-- Cierre hacia Empresas Aliadas y Voluntariado (Con mb-5 para separación óptima con el Footer) -->
<section class="pb-5 mb-5 text-center">
    <div class="container">
        <div class="card border-0 rounded-4 shadow-sm p-4 bg-white col-lg-8 mx-auto">
            <div class="card-body">
                <h4 class="fw-bold text-dark mb-2">¿Quieres sumarte como aliado o donar tu tiempo?</h4>
                <p class="text-muted mb-3">Conoce a las empresas que hacen esto posible o intégrate a nuestro equipo de voluntarios.</p>
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <a href="{{ route('aliados') }}" class="btn btn-outline-primary rounded-pill px-4 fw-bold">🏢 Empresas Aliadas</a>
                    <a href="{{ route('voluntariado') }}" class="btn btn-primary rounded-pill px-4 fw-bold">🙋‍♂️ Ser Voluntario</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection