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
        gap: 20px;
        margin-bottom: 50px;
        flex-wrap: wrap;
    }
    .grupo-filtro {
        border: 2px solid #2563eb;
        border-radius: 12px;
        padding: 12px 20px;
        min-width: 200px;
    }
    .grupo-filtro legend {
        color: #2563eb;
        font-weight: 700;
        padding: 0 8px;
        font-size: 1rem;
    }
    .grupo-filtro label {
        display: block;
        color: #1e293b;
        margin: 6px 0;
        cursor: pointer;
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

    .buscador-container {
        display: flex;
        justify-content: center;
        margin-bottom: 30px;
    }

    #buscador-productos {
        width: 100%;
        max-width: 500px;
        padding: 14px 18px;
        border: 2px solid #2563eb;
        border-radius: 10px;
        font-size: 16px;
        outline: none;
    }

    #buscador-productos:focus {
        border-color: #1a365d;
    }

    /* Forzar el borde gris inicial */
    .producto-card.border-gray-400 {
        border: 1px solid #9ca3af !important;
    }

    /* Borde rojo cuando JavaScript agrega la clase */
    .producto-card.border-red-500 {
        border: 2px solid #ef4444 !important;
    }
</style>

<div class="catalogo-container">
    <h2 class="catalogo-title">Banco de Alimentos - Catálogo de Donaciones</h2>

    <div class="buscador-container">
        <input
            type="text"
            id="buscador-productos"
            placeholder="Buscar producto por nombre..."
        >
    </div>

    <div class="filtros-container">

        <fieldset class="grupo-filtro">
            <legend>Mostrar</legend>
            <label><input type="checkbox" id="chk-todos" checked> Todos</label>
        </fieldset>

        <fieldset class="grupo-filtro">
            <legend>Tipo de alimento</legend>
            <label><input type="checkbox" class="filtro-check chk-tipo" value="tipo-despensa"> Despensa Básica</label>
            <label><input type="checkbox" class="filtro-check chk-tipo" value="tipo-perecederos"> Perecederos</label>
            <label><input type="checkbox" class="filtro-check chk-tipo" value="tipo-lacteos"> Lácteos</label>
            <label><input type="checkbox" class="filtro-check chk-tipo" value="tipo-enlatados"> Enlatados</label>
        </fieldset>

        <fieldset class="grupo-filtro">
            <legend>Presentación</legend>
            <label><input type="checkbox" class="filtro-check chk-presentacion" value="presentacion-bolsa"> Bolsa / Saco</label>
            <label><input type="checkbox" class="filtro-check chk-presentacion" value="presentacion-caja"> Caja / Canasta</label>
            <label><input type="checkbox" class="filtro-check chk-presentacion" value="presentacion-envase"> Envase / Lata</label>
            <label><input type="checkbox" class="filtro-check chk-presentacion" value="presentacion-pieza"> Pieza / Bloque</label>
        </fieldset>

        <fieldset class="grupo-filtro">
            <legend>Aporte nutricional</legend>
            <label><input type="checkbox" class="filtro-check chk-nutriente" value="nutriente-proteina"> Proteína</label>
            <label><input type="checkbox" class="filtro-check chk-nutriente" value="nutriente-carbohidratos"> Carbohidratos</label>
            <label><input type="checkbox" class="filtro-check chk-nutriente" value="nutriente-grasas"> Grasas</label>
            <label><input type="checkbox" class="filtro-check chk-nutriente" value="nutriente-vitaminas"> Vitaminas</label>
        </fieldset>

    </div>

    <div class="productos-grid" id="lista-productos">
        <div class="producto-card producto-arroz-frijol articulo tipo-despensa presentacion-bolsa nutriente-carbohidratos nutriente-proteina border border-gray-400 rounded-md transition-all duration transition-colors">
            <div class="producto-img-container">
                <img src="https://images.unsplash.com/photo-1586201375761-83865001e31c?auto=format&fit=crop&w=600&q=80" alt="Arroz y Frijol" class="producto-img ransition-transform duration-500">
            </div>
            <h3 class="producto-titulo transition-colors duration-300">Kilo de Arroz y Frijol</h3>
            <p class="producto-desc">Granos básicos esenciales para asegurar la alimentación diaria de las familias.</p>
        </div>

        <div class="producto-card producto-vegetales-frescos articulo tipo-perecederos presentacion-caja nutriente-vitaminas border border-gray-400 rounded-md transition-all duration-300 transition-colors">
            <div class="producto-img-container">
                <img src="https://images.unsplash.com/photo-1540420773420-3366772f4999?auto=format&fit=crop&w=600&q=80" alt="Vegetales" class="producto-img ransition-transform duration-500">
            </div>
            <h3 class="producto-titulo transition-colors duration-300">Caja de Vegetales Frescos</h3>
            <p class="producto-desc">Verduras de calidad rescatadas de comercios, listas para su consumo nutritivo.</p>
        </div>

        <div class="producto-card producto-leche-entera articulo tipo-lacteos presentacion-envase nutriente-proteina nutriente-vitaminas border border-gray-400 rounded-md transition-all duration-300 transition-colors">
            <div class="producto-img-container">
                <img src="https://images.unsplash.com/photo-1550583724-b2692b85b150?auto=format&fit=crop&w=600&q=80" alt="Leche" class="producto-img ransition-transform duration-500">
            </div>
            <h3 class="producto-titulo transition-colors duration-300">Litro de Leche Entera</h3>
            <p class="producto-desc">Leche fortificada envasada para aportar calcio y energía a los niños.</p>
        </div>

        <div class="producto-card producto-atun-lata articulo tipo-enlatados presentacion-envase nutriente-proteina border border-gray-400 rounded-md transition-all duration-300 transition-colors">
            <div class="producto-img-container">
                <img src="https://images.unsplash.com/photo-1563379091339-03b21ab4a4f8?auto=format&fit=crop&w=600&q=80" alt="Atún" class="producto-img ransition-transform duration-500">
            </div>
            <h3 class="producto-titulo transition-colors duration-300">Pack de Atún en Lata</h3>
            <p class="producto-desc">Proteína enlatada de larga duración ideal para despensas comunitarias.</p>
        </div>

        <div class="producto-card producto-aceite-vegetal articulo tipo-despensa presentacion-envase nutriente-grasas border border-gray-400 rounded-md transition-all duration-300 transition-colors">
            <div class="producto-img-container">
                <img src="https://images.unsplash.com/photo-1474979266404-7eaacbcd87c5?auto=format&fit=crop&w=600&q=80" alt="Aceite" class="producto-img ransition-transform duration-500">
            </div>
            <h3 class="producto-titulo transition-colors duration-300">Aceite Vegetal (1L)</h3>
            <p class="producto-desc">Botella de aceite de cocina sellada para la preparación de alimentos nutritivos.</p>
        </div>

        <div class="producto-card producto-fruta-fresca articulo tipo-perecederos presentacion-caja nutriente-vitaminas nutriente-carbohidratos border border-gray-400 rounded-md transition-all duration-300 transition-colors">
            <div class="producto-img-container">
                <img src="https://images.unsplash.com/photo-1610832958506-aa56368176cf?auto=format&fit=crop&w=600&q=80" alt="Fruta" class="producto-img ransition-transform duration-500">
            </div>
            <h3 class="producto-titulo transition-colors duration-300">Canasta de Fruta Fresca</h3>
            <p class="producto-desc">Frutas de temporada seleccionadas para aportar vitaminas esenciales a la comunidad.</p>
        </div>

        <div class="producto-card producto-queso-fresco articulo tipo-lacteos presentacion-pieza nutriente-proteina nutriente-grasas border border-gray-400 rounded-md transition-all duration-300 transition-colors">
            <div class="producto-img-container">
                <img src="https://images.unsplash.com/photo-1486297678162-eb2a19b0a32d?auto=format&fit=crop&w=600&q=80" alt="Queso" class="producto-img ransition-transform duration-500">
            </div>
            <h3 class="producto-titulo transition-colors duration-300">Bloque de Queso Fresco</h3>
            <p class="producto-desc">Derivado lácteo rico en proteínas para complementar comidas comunitarias.</p>
        </div>

        <div class="producto-card producto-pure-tomate-lentejas articulo tipo-enlatados presentacion-envase nutriente-proteina nutriente-vitaminas border border-gray-400 rounded-md transition-all duration-300 transition-colors">
            <div class="producto-img-container">
                <img src="https://images.unsplash.com/photo-1550989460-0adf9ea622e2?auto=format&fit=crop&w=600&q=80" alt="Salsa" class="producto-img ransition-transform duration-500">
            </div>
            <h3 class="producto-titulo transition-colors duration-300">Puré de Tomate y Lentejas</h3>
            <p class="producto-desc">Conservas alimenticias envasadas listas para preparar sopas y guisados.</p>
        </div>

        <div class="producto-card producto-harina-maiz articulo tipo-despensa presentacion-bolsa nutriente-carbohidratos border border-gray-400 rounded-md transition-all duration-300 transition-colors">
            <div class="producto-img-container">
                <img src="https://images.unsplash.com/photo-1509440159596-0249088772ff?auto=format&fit=crop&w=600&q=80" alt="Harina" class="producto-img ransition-transform duration-500">
            </div>
            <h3 class="producto-titulo transition-colors duration-300">Saco de Harina de Maíz</h3>
            <p class="producto-desc">Harina nixtamalizada indispensable para la elaboración de tortillas diarias.</p>
        </div>
    </div>
</div>

<script src="{{ asset('js/categorias.js') }}"></script>
@endsection