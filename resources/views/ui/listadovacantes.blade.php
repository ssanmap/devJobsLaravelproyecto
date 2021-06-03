<ul class="mt-10 grid grid-cols-1 md:grid-cols-2 gap-8">
    @foreach ($vacantes as $vacante)
        <li class="p-10 border border-gray-300 shadow bg-white">
            <h2 class="text-2xl">{{ $vacante->titulo }}</h2>
            <p class="text-gray-700 font-normal ">
                {{ $vacante->categoria->nombre }}
            </p>
            <p class="text-gray-700 font-normal ">
                <span>Ubicación:</span>
                {{ $vacante->ubicacion->nombre }}
            </p>
            <p class="text-gray-700 font-normal ">
                <span>Experiencia:</span>
                {{ $vacante->experiencia->nombre }}
            </p>
            <a class="mt-2 bg-teal-500 text-gray-100 px-4 py-2 rounded font-bold inline-block"
            href="{{ route('vacantes.show', ['vacante' => $vacante->id]) }}">Ver mas</a>
        </li>

    @endforeach

</ul>
