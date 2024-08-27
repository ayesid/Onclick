<!-- resources/views/canchas/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $centroDeportivo->nombre }}</h1>
    <div class="row">
        @foreach ($canchas as $cancha)
        <div class="col-12 col-md-4 mb-4">
            <div class="card h-100">
                <a href="#">
                    <img src="{{ asset('img/' . $cancha->imagen) }}" class="card-img-top" alt="{{ $cancha->nombre }}" width="300px" height="300px">
                </a>
                <div class="card-body">
                    <ul class="list-unstyled d-flex justify-content-between">
                        <li>
                            <i class="text-warning fa fa-star"></i>
                            <i class="text-warning fa fa-star"></i>
                            <i class="text-warning fa fa-star"></i>
                            <i class="text-muted fa fa-star"></i>
                            <i class="text-muted fa fa-star"></i>
                        </li>
                    </ul>
                    <a href="#" class="h4 text-decoration-none text-success">{{ $cancha->nombre }}</a>
                    <p class="card-text">
                        Teléfono: {{ $cancha->telefono }}<br>
                        Precio: {{ $cancha->precio }}<br>
                        Descripción: {{ $cancha->descripcion }}<br>
                        Centro Deportivo: {{ $cancha->centroDeportivo->nombre }} <br>
                    </p>
                    <p class="text-muted">Reviews (24)</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
