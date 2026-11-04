@extends('layouts.app')

@section('content')
<style>
    .catalogo-container {
        max-width: 1200px;
        margin: 50px auto;
        padding: 0 20px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .catalogo-title {
        text-align: center;
        color: #1a365d;
        margin-bottom: 40px;
        font-size: 2.2rem;
        font-weight: bold;
    }
    .filtros-container {
        display: flex;
        justify-content: center;
        gap: 15px;
        margin-bottom: 50px;
        flex-wrap: wrap;
    }
    .btn-filtro {
        background-color: transparent;
        border: 2px solid #2563eb;
        color: #2563eb;
        padding: 10px 24px;
        border-radius: 30px;
        cursor: pointer;
        font-weight: 600;
        font-size: 1rem;
        transition: all 0.3s ease;
    }
    .btn-filtro:hover, .btn-filtro.active {
        background-color: #2563eb;
        color: white;
        box-shadow: 0 4px 10px rgba(37, 99, 235, 0.3);
    }
    .productos-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
        gap: 30px;
    }
    .producto-card {
        background: white;
        border-radius: 16px;
        padding: 20px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.06);
        border: 1px solid #f1f5f9;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        transition: transform 0.3s ease;
    }
    .producto-card:hover {
        transform: translateY(-8px);
    }
    .producto-img-container {
        width: 100%;
        height: 160px;
        overflow: hidden;
        border-radius: 12px;
        margin-bottom: 20px;
        background-color: #f8fafc;
    }
    .producto-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .producto-titulo {
        font-size: 1.2rem;
        color: #1e293b;
        margin-bottom: 10px;
        font-weight: 700;
    }
    .producto-desc {
        color: #64748b;
        font-size: 0.9rem;
        line-height: 1.5;
        margin: 0;
    }
    .oculto {
        display: none !important;
    }
</style>

<div class="catalogo-container">
    <h2 class="catalogo-title">Banco de Alimentos - Catálogo de Donaciones</h2>
    
    <div class="filtros-container">
        <button id="btn-todos" class="btn-filtro active">Mostrar Todos</button>
        <button id="btn-despensa" class="btn-filtro" data-categoria="despensa">Despensa Básica</button>
        <button id="btn-perecederos" class="btn-filtro" data-categoria="perecederos">Perecederos</button>
        <button id="btn-lacteos" class="btn-filtro" data-categoria="lacteos">Lácteos</button>
        <button id="btn-enlatados" class="btn-filtro" data-categoria="enlatados">Enlatados</button>
    </div>

    <div class="productos-grid" id="lista-productos">
        <div class="producto-card articulo despensa">
            <div class="producto-img-container">
                <img src="https://images.unsplash.com/photo-1586201375761-83865001e31c?auto=format&fit=crop&w=600&q=80" alt="Arroz y Frijol" class="producto-img">
            </div>
            <h3 class="producto-titulo">Kilo de Arroz y Frijol</h3>
            <p class="producto-desc">Granos básicos esenciales para asegurar la alimentación diaria de las familias.</p>
        </div>

        <div class="producto-card articulo perecederos">
            <div class="producto-img-container">
                <img src="https://images.unsplash.com/photo-1540420773420-3366772f4999?auto=format&fit=crop&w=600&q=80" alt="Vegetales" class="producto-img">
            </div>
            <h3 class="producto-titulo">Caja de Vegetales Frescos</h3>
            <p class="producto-desc">Verduras de calidad rescatadas de comercios, listas para su consumo nutritivo.</p>
        </div>

        <div class="producto-card articulo lacteos">
            <div class="producto-img-container">
                <img src="https://images.unsplash.com/photo-1550583724-b2692b85b150?auto=format&fit=crop&w=600&q=80" alt="Leche" class="producto-img">
            </div>
            <h3 class="producto-titulo">Litro de Leche Entera</h3>
            <p class="producto-desc">Leche fortificada envasada para aportar calcio y energía a los niños.</p>
        </div>

        <div class="producto-card articulo enlatados">
            <div class="producto-img-container">
                <img src="https://images.unsplash.com/photo-1563379091339-03b21ab4a4f8?auto=format&fit=crop&w=600&q=80" alt="Atún" class="producto-img">
            </div>
            <h3 class="producto-titulo">Pack de Atún en Lata</h3>
            <p class="producto-desc">Proteína enlatada de larga duración ideal para despensas comunitarias.</p>
        </div>

        <div class="producto-card articulo despensa">
            <div class="producto-img-container">
                <img src="https://images.unsplash.com/photo-1474979266404-7eaacbcd87c5?auto=format&fit=crop&w=600&q=80" alt="Aceite" class="producto-img">
            </div>
            <h3 class="producto-titulo">Aceite Vegetal (1L)</h3>
            <p class="producto-desc">Botella de aceite de cocina sellada para la preparación de alimentos nutritivos.</p>
        </div>

        <div class="producto-card articulo perecederos">
            <div class="producto-img-container">
                <img src="https://images.unsplash.com/photo-1610832958506-aa56368176cf?auto=format&fit=crop&w=600&q=80" alt="Fruta" class="producto-img">
            </div>
            <h3 class="producto-titulo">Canasta de Fruta Fresca</h3>
            <p class="producto-desc">Frutas de temporada seleccionadas para aportar vitaminas esenciales a la comunidad.</p>
        </div>

        <div class="producto-card articulo lacteos">
            <div class="producto-img-container">
                <img src="https://images.unsplash.com/photo-1486297678162-eb2a19b0a32d?auto=format&fit=crop&w=600&q=80" alt="Queso" class="producto-img">
            </div>
            <h3 class="producto-titulo">Bloque de Queso Fresco</h3>
            <p class="producto-desc">Derivado lácteo rico en proteínas para complementar comidas comunitarias.</p>
        </div>

        <div class="producto-card articulo enlatados">
            <div class="producto-img-container">
                <img src="https://images.unsplash.com/photo-1550989460-0adf9ea622e2?auto=format&fit=crop&w=600&q=80" alt="Salsa" class="producto-img">
            </div>
            <h3 class="producto-titulo">Puré de Tomate y Lentejas</h3>
            <p class="producto-desc">Conservas alimenticias envasadas listas para preparar sopas y guisados.</p>
        </div>

        <div class="producto-card articulo despensa">
            <div class="producto-img-container">
                <img src="https://images.unsplash.com/photo-1509440159596-0249088772ff?auto=format&fit=crop&w=600&q=80" alt="Harina" class="producto-img">
            </div>
            <h3 class="producto-titulo">Saco de Harina de Maíz</h3>
            <p class="producto-desc">Harina nixtamalizada indispensable para la elaboración de tortillas diarias.</p>
        </div>
    </div>
</div>

<script src="{{ asset('js/categorias.js') }}"></script>
@endsection