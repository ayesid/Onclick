@extends('admin.layouts.app')
@section('content')
    <div class="container py-5">
        @component('components.card-form', [
            'titulo' => 'Crear Cancha',
            'show' => false,
        ])
            <form action="{{ route('canchas.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <select class="form-control" id="centro_deportivo_id" name="centro_deportivo_id" required>
                        <option value="">Seleccione un centro deportivo</option>
                        @foreach ($centrosDeportivos as $centro)
                            <option value="{{ $centro->id }}">{{ $centro->nombre }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre de cancha" required>
                </div>
            
                <div class="mb-3">
                    <input type="number" id="precio" name="precio" class="form-control" placeholder="Precio $" min="0" required>
                </div>
                <div class="mb-3">
                    <input type="file" name="imagen" accept="image/*" id="imagen" class="form-control">
                </div>
                <div class="mb-3">
                    <textarea id="descripcion" name="descripcion" class="form-control" placeholder="Descripción"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Guardar datos</button>
            </form>
        @endcomponent
    </div>
@endsection
