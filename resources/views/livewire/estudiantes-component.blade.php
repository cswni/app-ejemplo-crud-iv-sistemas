<div>
    <p>Lista de estudiantes</p>
    <table class="w-full">
        <thead>
            <tr>
                <th>No</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Dirección</th>
                <th>Ciudad</th>
                <th>Tareas</th>
            </tr>
        </thead>
   @foreach ($estudiantes as $estudiante)
    <tr class="border-b">
        <td class="border border-gray-300">{{ $loop->iteration }}</td>
        <td class="border border-gray-300">{{ $estudiante->nombres }}</td>
        <td class="border border-gray-300">{{ $estudiante->apellidos }}</td>
        <td class="border border-gray-300">{{ $estudiante->email }}</td>
        <td class="border border-gray-300">{{ $estudiante->telefono }}</td>
        <td class="border border-gray-300">{{ $estudiante->direccion }}</td>
        <td class="border border-gray-300">{{ $estudiante->ciudad }}</td>
        <td class="border border-gray-300">
            <a href="{{ route('estudiantes.editar', $estudiante->id) }}">Editar</a>
            <a href="{{ route('estudiantes.eliminar', $estudiante->id) }}">Eliminar</a>
        </td>
    </tr>
    @endforeach
</table>
</div>
