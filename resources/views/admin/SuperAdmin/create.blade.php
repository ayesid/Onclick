@extends('admin.layouts.app')
@section('content')
    <div class="container py-5">
        @component('components.card-form', [
            'titulo' => 'Crear Centro Deportivo',
            'show' => false,
        ])
            <form action="{{ route('centroDeportivo.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <input type="text" id="nombre" name="nombre" class="form-control"
                        placeholder="Nombre del centro deportivo" required>
                </div>
                <div class="mb-3">
                    <input type="text" id="direccion" name="direccion" class="form-control" placeholder="Dirección" required>
                </div>
                <div class="mb-3">
                    <input type="tel" id="telefono" name="telefono" class="form-control" placeholder="Teléfono" required>
                </div>
                <div class="mb-3">
                    <input type="number" id="canchas" name="numero_canchas" class="form-control"
                        placeholder="Número de canchas" min="1" required>
                </div>
                <div class="mb-3">
                    <input type="file" name="imagen" accept="image/*" id="imagen" class="form-control">
                </div>
                <div class="mb-3">
                    <textarea id="descripcion" name="descripcion" class="form-control" placeholder="Descripción"></textarea>
                </div>
                <div class="mb-3">
                    <label for="municipio_id">Ubicación</label>
                    <select id="municipio_id" name="municipio_id" class="form-select" required>
                        <option value="">Seleccione un municipio</option>
                        @foreach ($municipios as $municipio)
                            <option value="{{ $municipio->id }}">{{ $municipio->nombre }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="parqueadero">¿Hay parqueadero disponible?</label>
                    <select id="parqueadero" name="parqueadero" class="form-select" required>
                        <option value="">Seleccione una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Guardar Datos</button>
                <a name="" id="" class="btn btn-primary" href="{{ route('centroDeportivo.listar') }}"
                    role="button">Centros Deportivos</a>

            </form>
        @endcomponent
    </div>
@endsection
