@extends('admin.layouts.app')
@section('content')
    <div class="container py-5">
        @component('components.card-form', [
            'titulo' => 'Editar Centro Deportivo',
            'show' => false,
        ])
            <form 
                action="{{ isset($centroDeportivo) ? route('centroDeportivo.update', $centroDeportivo->id) : route('centroDeportivo.store') }}" 
                method="post" 
                enctype="multipart/form-data">
                
                @csrf
                @if (isset($centroDeportivo))
                    @method('PUT')
                @endif
                
                <div class="mb-3">
                    <input type="text" id="nombre" name="nombre" class="form-control"
                        placeholder="Nombre del centro deportivo" 
                        value="{{ old('nombre', $centroDeportivo->nombre ?? '') }}" required>
                </div>
                <div class="mb-3">
                    <input type="text" id="direccion" name="direccion" class="form-control" 
                        placeholder="Dirección" 
                        value="{{ old('direccion', $centroDeportivo->direccion ?? '') }}" required>
                </div>
                <div class="mb-3">
                    <input type="tel" id="telefono" name="telefono" class="form-control" 
                        placeholder="Teléfono" 
                        value="{{ old('telefono', $centroDeportivo->telefono ?? '') }}" required>
                </div>
                <div class="mb-3">
                    <input type="number" id="canchas" name="numero_canchas" class="form-control"
                        placeholder="Número de canchas" 
                        value="{{ old('numero_canchas', $centroDeportivo->numero_canchas ?? 1) }}" min="1" required>
                </div>
                <div class="mb-3">
                    <input type="file" name="imagen" accept="image/*" id="imagen" class="form-control">
                    @if(isset($centroDeportivo->imagen))
                        <p>Imagen actual: <img src="{{ asset('storage/' . $centroDeportivo->imagen) }}" width="100" alt="Imagen"></p>
                    @endif
                </div>
                <div class="mb-3">
                    <textarea id="descripcion" name="descripcion" class="form-control" placeholder="Descripción">{{ old('descripcion', $centroDeportivo->descripcion ?? '') }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="municipio_id">Ubicación</label>
                    <select id="municipio_id" name="municipio_id" class="form-select" required>
                        <option value="">Seleccione un municipio</option>
                        @foreach ($municipios as $municipio)
                            <option value="{{ $municipio->id }}" {{ isset($centroDeportivo) && $centroDeportivo->municipio_id == $municipio->id ? 'selected' : '' }}>
                                {{ $municipio->nombre }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="parqueadero">¿Hay parqueadero disponible?</label>
                    <select id="parqueadero" name="parqueadero" class="form-select" required>
                        <option value="">Seleccione una opción</option>
                        <option value="si" {{ isset($centroDeportivo) && $centroDeportivo->parqueadero == 'si' ? 'selected' : '' }}>Sí</option>
                        <option value="no" {{ isset($centroDeportivo) && $centroDeportivo->parqueadero == 'no' ? 'selected' : '' }}>No</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">{{ isset($centroDeportivo) ? 'Actualizar Datos' : 'Guardar Datos' }}</button>
                <a name="" id="" class="btn btn-primary" href="{{ route('centroDeportivo.listar') }}" role="button">Centros Deportivos</a>
            </form>
        @endcomponent
    </div>
@endsection
