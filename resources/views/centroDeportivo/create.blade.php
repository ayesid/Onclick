<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="/img/logo_sinfondo.png">
  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

  <!-- Bootstrap CSS -->
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link href="{{ asset('css/tiny-slider.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <title>Crear Centro Deportivo</title>
</head>

<body>
  <!-- Start Header/Navigation -->
  <nav class="custom-navbar navbar navbar-expand-md navbar-dark bg-dark" aria-label="Furni navigation bar">
    <div class="container">
      <div class="hero-img-wrap">
        <img src="{{asset('img/logo-removebg-preview.png')}}" class="img-fluid" style="width: 100px;">
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarsFurni">
        <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
          <li><a class="nav-link" href="{{ route('home') }}">Inicio</a></li>
          <li><a class="nav-link" href="{{ route('centroDeportivo.listar') }}">Centros Deportivos</a></li>

          <li><a class="nav-link" href="{{route('Nosotros')}}">Acerca De Nosotros</a></li>
          <li><a class="nav-link" href="{{route('Servicios')}}">Servicios</a></li>
                  <li><a class="nav-link" href="{{route('Contactanos')}}">Contactanos</a></li>
        </ul>
        
        <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
       
          <li><a class="nav-link" href="cart.html"><img src="{{asset('images/cart.svg')}}"></a></li>
          <div class="nav-link">
            <form method="POST" action="{{ route('logout') }}">
            @csrf
    
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <button type="submit" class="btn btn-link">Cerrar Sesión</button>
            </form>
          </form>
        </div>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Header/Navigation -->

  <div class="container py-5">
    <h2>Crear Centro Deportivo</h2>
    <form action="{{ route('centroDeportivo.store') }}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="mb-3">
        <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre del centro deportivo" required>
      </div>
      <div class="mb-3">
        <input type="text" id="direccion" name="direccion" class="form-control" placeholder="Dirección" required>
      </div>
      <div class="mb-3">
        <input type="tel" id="telefono" name="telefono" class="form-control" placeholder="Teléfono" required>
      </div>
      <div class="mb-3">
        <input type="number" id="canchas" name="numero_canchas" class="form-control" placeholder="Número de canchas" min="1" required>
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
      <a
        name=""
        id=""
        class="btn btn-primary"
        href="{{ route('centroDeportivo.listar') }}"
        role="button"
        >Centros Deportivos</a
      >
      
    </form>
  </div>
  

  <!-- Start Footer Section -->
  <footer class="footer-section bg-gradient" >
    <div class="container relative">

      <div class="sofa-img">
        <img src="{{asset('img/dosjuga-removebg-preview.png')}}" alt="Image" class="img-fluid">
      </div>

     

      <div class="row g-5 mb-5">
        <div class="col-lg-4">
          <div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo">Onclick<span><div class="hero-img-wrap">
            <img src="{{asset('img/logo-removebg-preview.png')}} " class="img-fluid" style="width: 100px;">
    
          </div></span></a>
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

  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/tiny-slider.js"></script>
  <script src="js/custom.js"></script>
</body>
</html>
