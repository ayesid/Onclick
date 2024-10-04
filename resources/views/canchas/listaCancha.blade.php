<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="{{ asset('img/logo_sinfondo.png') }}">
  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

  <!-- Bootstrap CSS -->
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link href="{{ asset('css/tiny-slider.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
  <!-- Start Header/Navigation -->
  <nav class="custom-navbar navbar navbar-expand-md navbar-dark bg-dark" aria-label="Furni navigation bar">
    <div class="container">
      <div class="hero-img-wrap">
        <img src="{{ asset('img/logo-removebg-preview.png') }}" class="img-fluid" style="width: 100px;">
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarsFurni">
        <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
          <li><a class="nav-link" href="{{ route('home') }}">Inicio</a></li>
          <li><a class="nav-link" href="{{ route('centroDeportivo.listar') }}">Centros Deportivos</a></li>
          <li><a class="nav-link" href="{{ route('Nosotros') }}">Acerca De Nosotros</a></li>
          <li><a class="nav-link" href="{{ route('Servicios') }}">Servicios</a></li>
        </ul>
        <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
          <li><a class="nav-link" href="{{ route('Reservas.listar') }}"><img src="{{ asset('images/cart.svg') }}" alt="Cart"></a></li>
          <li>
            <form method="POST" action="{{ route('logout') }}">
              @csrf

              <button type="submit" class=" btn btn-link" style="text-decoration: none;">
                {{ __('Cerrar Sesión') }}
                </button>

          </form>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Header/Navigation -->

  <section class="bg-light">
    <div class="container py-5">
      <div class="row text-center py-3">
        <div class="col-lg-6 m-auto">
          @if ($centroDeportivo)
          <h1 class="h2 text-success">{{ $centroDeportivo->nombre }}</h1>
      @else
          <h1 class="h2 text-danger">Centro Deportivo no encontrado</h1>
      @endif
     <h4>Tu mejor opción para reservar canchas sintéticas en Popayán. Fácil, rápido y conveniente.</h4>
        </div>
      </div>
      <h3>Canchas Sintéticas</h3>
<a class="btn btn-primary" href="{{ route('canchas.create', ['centro_deportivo_id' => $centroDeportivo->id]) }}" role="button">Crear Cancha</a>
<div class="row mt-4">
  @foreach ($canchas as $cancha)
    <div class="col-12 col-md-4 mb-4"> <!-- Aquí está la clase col-12 col-md-4 -->
      <div class="card h-100">
        <a href="{{ route('reservas.create', ['cancha_id' => $cancha->id]) }}">
          <img src="{{ asset('img/' . $cancha->imagen) }}" class="card-img-top" alt="{{ $cancha->nombre }}" width="300" height="300">
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
          <a href="{{ route('reservas.create', ['cancha_id' => $cancha->id]) }}" class="h4 text-decoration-none text-success">{{ $cancha->nombre }}</a>
          <p class="card-text">
            Precio: {{ $cancha->precio }}<br>
            Descripción: {{ $cancha->descripcion }}<br>
            Centro Deportivo: {{ $cancha->centroDeportivo->nombre }}<br>
          </p>
          <a href="{{ route('reservas.create', ['cancha_id' => $cancha->id]) }}" >Reservar</a>
        </div>
      </div>
    </div>
  @endforeach
</div>

      </div>

    </div>

  </section>


  <!-- Start Footer Section -->
  <footer class="footer-section bg-gradient">
    <div class="container relative">
      <div class="sofa-img">
        <img src="{{ asset('img/dosjuga-removebg-preview.png') }}" alt="Image" class="img-fluid">
      </div>
     
      <div class="row g-5 mb-5">
        <div class="col-lg-4">
          <div class="mb-4 footer-logo-wrap">
            <a href="#" class="footer-logo">Onclick<span><img src="{{ asset('img/logo-removebg-preview.png') }}" class="img-fluid" style="width: 100px;"></span></a>
          </div>
          <p>Tu mejor opción para reservar canchas sintéticas en Popayán. Fácil, rápido y conveniente.</p>
          <ul class="list-unstyled custom-social">
            <li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
            <li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
            <li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
            <li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
          </ul>
        </div>
        <div class="col-lg-8">
          <div class="row links-wrap">
            <div class="col-6 col-sm-6 col-md-3">
              <ul class="list-unstyled">
                <li><a href="#">Acerca de Nosotros</a></li>
                <li><a href="#">Servicios</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contacto</a></li>
              </ul>
            </div>
            <div class="col-6 col-sm-6 col-md-3">
              <ul class="list-unstyled">
                <li><a href="#">Términos y Condiciones</a></li>
                <li><a href="#">Política de Privacidad</a></li>
                <li><a href="#">Soporte</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="border-top copyright">
        <div class="row pt-4">
          <div class="col-lg-6">
            <p class="mb-2 text-center text-lg-start">© 2024 Onclick Reservas. Todos los derechos reservados.</p>
          </div>
          <div class="col-lg-6 text-center text-lg-end">
            <ul class="list-unstyled d-inline-flex ms-auto">
              <li class="me-4"><a href="#">Términos</a></li>
              <li class="me-4"><a href="#">Privacidad</a></li>
              <li><a href="#">Contacto</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- End Footer Section -->
  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('js/tiny-slider.js') }}"></script>
  <script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>
