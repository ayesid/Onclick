@extends('admin.layouts.app')
@section('content')
    <div class="container py-5">
        @component('components.card-form', [
            'titulo' => 'Crear Cancha',
            'show' => false,
        ])
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Teléfono</th>
                        <th>Precio</th>
                        <th>Descripción</th>
                        <th>Centro Deportivo</th>
                        <th>Imagen</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($canchas as $cancha)
                        <tr>
                            <td>{{ $cancha->nombre }}</td>
                            <td>{{ $cancha->telefono }}</td>
                            <td>${{ number_format($cancha->precio, 2) }}</td>
                            <td>{{ $cancha->descripcion }}</td>
                            <td>{{ $cancha->centroDeportivo->nombre ?? 'No asignado' }}</td>
                            <td>
                                @if ($cancha->imagen)
                                    <img src="{{ asset('storage/' . $cancha->imagen) }}" alt="{{ $cancha->nombre }}"
                                        style="width: 100px; height: auto;">
                                @else
                                    No disponible
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('canchas.edit', $cancha->id) }}" class="btn btn-warning btn-sm">Editar</a>
                                <form action="{{ route('canchas.destroy', $cancha->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('¿Estás seguro de que quieres eliminar esta cancha?');">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endcomponent
    </div>
@endsection
