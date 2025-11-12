<x-mi-layout>
    <h1>Detalles del Edificio: {{ $edificio->nombre }}</h1>
    <p><strong>Número de Pisos:</strong> {{ $edificio->niveles }}</p>

    <ul>
        @foreach ($edificio->aulas as $aula)
            <li>
                Número: <a href="{{ route('aula.show', $aula) }}">{{ $aula->numero }}</a> || Capacidad: {{ $aula->capacidad }}
                <a href="{{ route('aula.edit', $aula->id) }}" class="btn btn-warning btn-sm">Editar</a>
            </li>
        @endforeach
    </ul>
    
</x-mi-layout>