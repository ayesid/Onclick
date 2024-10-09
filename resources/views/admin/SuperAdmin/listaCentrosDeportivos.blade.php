@extends('admin.layouts.app')
@section('content')
    <div class="container py-5">
        @component('components.card-form', [
            'titulo' => 'Lista de Centros Deportivos',
            'show' => false,
        ])
            <div class="row">
                @foreach ($centrosDeportivos as $centroDeportivo)
                    <div class="col-12 col-md-4 mb-4">
                        <div class="card h-100">
                            <img src="{{ asset('img/' . $centroDeportivo->imagen) }}" class="card-img-top" alt="{{ $centroDeportivo->nombre }}" width="300px" height="300px">
                            <div class="card-body">
                                <a href="{{ route('canchas.listar', ['centro_deportivo_id' => $centroDeportivo->id]) }}" class="h4 text-decoration-none text-success">{{ $centroDeportivo->nombre }}</a>
                                <p class="card-text">
                                    Dirección: {{ $centroDeportivo->direccion }}<br>
                                    Teléfono: {{ $centroDeportivo->telefono }}<br>
                                    Número de Canchas: {{ $centroDeportivo->numero_canchas }}<br>
                                    Descripción: {{ $centroDeportivo->descripcion }}<br>
                                    Ubicación: {{ $centroDeportivo->municipio ? $centroDeportivo->municipio->nombre : 'Sin ubicación' }}<br>
                                    Parqueadero: {{ $centroDeportivo->parqueadero }}
                                </p>
                            </div>
                            <div class="card-footer d-flex justify-content-between">
                              
                                <a href="{{ route('centroDeportivo.edit', $centroDeportivo->id) }}" class="btn btn-primary">
                                    Editar
                                </a>
                              
                                <form action="{{ route('centroDeportivo.destroy', $centroDeportivo->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este centro deportivo?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endcomponent
    </div>
@endsection
