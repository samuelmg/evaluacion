<x-layouts.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <h1>Listado de Tareas</h1>
            <ul>
                <li>
                    <a href="{{ route('tarea.create') }}">Crear nueva tarea</a>
                </li>
            </ul>
            <div class="overflow-x-auto">
            <table class="min-w-full divide-y-2 divide-gray-200">
                <thead class="ltr:text-left rtl:text-right">
                    <tr class="*:font-medium *:text-gray-900">
                        <th class="px-3 py-2 whitespace-nowrap">ID</th>
                        <th class="px-3 py-2 whitespace-nowrap">Título</th>
                        <th class="px-3 py-2 whitespace-nowrap">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tareas as $tarea)
                        <tr>
                            <td>{{ $tarea->id }}</td>
                            <td>
                                <a href="{{ route('tarea.show', $tarea->id) }}">
                                    {{ $tarea->titulo }}
                                </a>
                            </td>
                            <td>
                                @can('update', $tarea)
                                    <a class="btn btn-warning" href="{{ route('tarea.edit', $tarea->id) }}">Editar</a>
                                @else
                                    <span class="text-gray-500">No puedes editar</span>
                                @endcan

                                <form action="{{ route('tarea.destroy', $tarea->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>
</x-layouts.app>
