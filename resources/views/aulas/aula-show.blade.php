<x-mi-layout>
    
    <h1>Información del Aula</h1>
    <h2>Aula: {{ $aula->numero }}</h2>

    <form action="{{ route('aula.agregar-mobiliario', $aula) }}" method="POST">
        @csrf
        <label for="mobiliario_id">Agregar Mobiliario</label>
        <select name="mobiliario_id[]" multiple>
            @foreach($mobiliarioDisponible as $mobiliario)
                <option value="{{ $mobiliario->id }}" @selected(false !== array_search($mobiliario->id, $aula->mobiliario->pluck('id')->toArray()))>{{ $mobiliario->mueble }}</option>
            @endforeach
        </select>
        <input type="submit" value="Guardar">
    </form>

    <h4>Listado del Mobiliario del Aula</h4>
    <ul>
    @foreach($aula->mobiliario as $mobiliario)
        <li>{{ $mobiliario->mueble }}</li>
    @endforeach
    </ul>

</x-mi-layout>
