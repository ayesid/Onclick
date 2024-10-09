@extends('admin.layouts.app')
@section('content')
    <div class="container py-5">
        @component('components.card-form', [
            'titulo' => 'Editar Cancha',
            'show' => false,
        ])
              <form action="{{ route('canchas.update', $cancha->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <div class="mb-3">
                    <select class="form-control" id="centro_deportivo_id" name="centro_deportivo_id">
                        <option value="">Seleccione un centro deportivo</option>
                        @foreach ($centrosDeportivos as $centro)
                            <option value="{{ $centro->id }}" {{ $cancha->centro_deportivo_id == $centro->id ? 'selected' : '' }}>
                                {{ $centro->nombre }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre de cancha"
                        value="{{ $cancha->nombre }}" required>
                </div>
                <div class="mb-3">
                    <input type="number" id="precio" name="precio" class="form-control" placeholder="Precio $" 
                        value="{{ $cancha->precio }}" min="0" required>
                </div>
                <div class="mb-3">
                    <input type="file" name="imagen" accept="image/*" id="imagen" class="form-control">
                    @if(isset($cancha->imagen))
                        <p>Imagen actual: <img src="{{ asset('storage/' . $cancha->imagen) }}" width="100" alt="Imagen"></p>
                    @endif
                </div>
                <div class="mb-3">
                    <textarea id="descripcion" name="descripcion" class="form-control" placeholder="Descripción">{{ $cancha->descripcion }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Actualizar datos</button>
            </form>
        @endcomponent
    </div>
@endsection
