@extends('admin.layouts.app')
@section('content')
    <div class="container py-5">
        @component('components.card-form', [
            'titulo' => 'lista Cancha',
            'show' => false,
        ])
<div class="row">
    @foreach ($canchas as $cancha)
        <div class="col-12 col-md-4 mb-4">
            <div class="card h-100">
                <img src="{{ asset('img/' . $cancha->imagen) }}" class="card-img-top" alt="{{ $cancha->nombre }}" width="300px" height="300px">
                <div class="card-body">
                    <p class="card-text">
                        Nombre: {{ $cancha->nombre }}<br>
                        Teléfono: {{ $cancha->telefono }}<br>
                        Precio:{{$cancha->precio}} <br>
                        Descripción: {{ $cancha->descripcion }}<br>
                        Centro Deportivo: {{ $cancha->centro_deportivo_id }}<br>
                    </p>
                </div>
                <div class="card-footer d-flex justify-content-between">
                  
                    <a href="{{ route('canchas.edit', $cancha->id) }}"
                         class="btn btn-warning btn-sm">Editar</a>
                  
                   
                         <form action="{{ route('canchas.destroy', $cancha->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('¿Estás seguro de que quieres eliminar esta cancha?');">Eliminar</button>
                        </form>
                </div>
            </div>
        </div>
    @endforeach
</div>



     </div>
    @endcomponent
    </div>
@endsection
