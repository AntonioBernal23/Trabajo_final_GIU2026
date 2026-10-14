@extends('layouts.app')

@section('content')
<main class="flex-1 w-full min-h-[calc(100vh-120px)] py-10 px-[25px] bg-[linear-gradient(135deg,#f3e9ff,#fff0f7_35%,#eafcff_70%,#dffff9)] flex flex-col items-center max-md:px-[15px]">

    <h1 class="text-[22px] font-extrabold text-black text-center uppercase mb-10 max-md:text-[18px]">
        REGISTRO DE NUEVAS DONACIONES DE ALIMENTOS
    </h1>

    <form id="formDonacion" class="w-full max-w-[850px]" onsubmit="guardarDonacion(event)">

        <!-- Donantes -->
        <div class="flex items-center gap-[25px] mb-[25px] max-md:flex-col max-md:items-start max-md:gap-2.5">
            <label for="donante" class="bg-[#5ee3ee] rounded-[30px] py-2.5 px-5 w-[235px] shrink-0 text-center text-[13px] font-bold text-black max-md:w-full">Donantes:</label>
            <input type="text" id="donante" class="flex-1 w-full bg-transparent border-none outline-none text-[17px] py-1.5 px-2 rounded-lg hover:bg-white/60 focus:bg-white/60" placeholder="[Ejemplo: Supermercado Exito]" required>
        </div>

        <!-- Categoría -->
        <div class="flex items-center gap-[25px] mb-[25px] max-md:flex-col max-md:items-start max-md:gap-2.5">
            <label for="categoria" class="bg-[#ffbe5c] rounded-[30px] py-2.5 px-5 w-[235px] shrink-0 text-center text-[13px] font-bold text-black max-md:w-full">Categoria de alimentos</label>
            <select id="categoria" class="flex-1 w-full bg-transparent border-none outline-none text-[17px] py-1.5 px-2 rounded-lg cursor-pointer hover:bg-white/60 focus:bg-white/60" required>
                <option value="">Seleccionar: Granos/Lacteos/Enlatados</option>
                <option value="Granos">Granos</option>
                <option value="Lacteos">Lácteos</option>
                <option value="Enlatados">Enlatados</option>
                <option value="Frutas">Frutas</option>
                <option value="Ensaladas">Ensaladas</option>
            </select>
        </div>

        <!-- Cantidad -->
        <div class="flex items-center gap-[25px] mb-[25px] max-md:flex-col max-md:items-start max-md:gap-2.5">
            <label for="cantidad" class="bg-[#ff69c0] rounded-[30px] py-2.5 px-5 w-[235px] shrink-0 text-center text-[13px] font-bold text-black max-md:w-full">Cantidad (Kg)</label>
            <input type="number" id="cantidad" class="flex-1 w-full bg-transparent border-none outline-none text-[17px] py-1.5 px-2 rounded-lg hover:bg-white/60 focus:bg-white/60" placeholder="250 KG" min="1" required>
        </div>

        <!-- Fecha de caducidad -->
        <div class="flex items-center gap-[25px] mb-[25px] max-md:flex-col max-md:items-start max-md:gap-2.5">
            <label for="caducidad" class="bg-[#ffdd5c] rounded-[30px] py-2.5 px-5 w-[235px] shrink-0 text-center text-[13px] font-bold text-black max-md:w-full">Fecha de Caducidad:</label>
            <input type="date" id="caducidad" class="flex-1 w-full bg-transparent border-none outline-none text-[17px] py-1.5 px-2 rounded-lg cursor-pointer hover:bg-white/60 focus:bg-white/60" required>
        </div>

        <button type="submit" class="block mx-auto mt-[30px] bg-[#7ddb5a] text-black border-none rounded-[30px] py-[30px] px-[26px] text-[14px] font-bold cursor-pointer hover:bg-[#6cc94a]">
            Guardar Donacion
        </button>

    </form>

</main>

<script>
    function guardarDonacion(event) {
        event.preventDefault();

        let donante = document.getElementById('donante').value;
        let categoria = document.getElementById('categoria').value;
        let cantidad = document.getElementById('cantidad').value;
        let caducidad = document.getElementById('caducidad').value;

        alert(
            "¡Donación registrada exitosamente!\n\n" +
            "Donante: " + donante + "\n" +
            "Categoría: " + categoria + "\n" +
            "Cantidad: " + cantidad + " KG\n" +
            "Caducidad: " + caducidad
        );

        document.getElementById('formDonacion').reset();
    }
</script>
@endsection