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
  <title>Crear Canchas</title>
</head>

<body>
  <!-- Start Header/Navigation -->
  
  <!-- End Header/Navigation -->

  <div class="container py-5">
    <h2>Crear Canchas</h2>
    <form action="{{ route('canchas.store') }}" method="post" enctype="multipart/form-data">
      @csrf
      
      <div class="mb-3">
        <input type="file" name="imagen" accept="image/*" id="imagen" class="form-control">
      </div>

      <input type="hidden" id="centro_deportivo_id" name="centro_deportivo_id" value="{{ $centroDeportivo->id }}">
    
      <div class="mb-3">
        <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre de cancha" required>
      </div>
     
      <div class="mb-3">
        <input type="number" id="precio" name="precio" class="form-control" placeholder="Precio $" min="0" required>
      </div>
     
      <div class="mb-3">
        <textarea id="descripcion" name="descripcion" class="form-control" placeholder="Descripción"></textarea>
      </div>
      <div class="mb-3">
        <label for="centro_deportivo_id" class="form-label">Centro Deportivo</label>
        <select class="form-select" id="centro_deportivo_id" name="centro_deportivo_id" required>
            @foreach($centrosDeportivos as $centro)
                <option value="{{ $centro->id }}" {{ old('centro_deportivo_id') == $centro->id ? 'selected' : '' }}>
                    {{ $centro->nombre }}
                </option>
            @endforeach
        </select>
    </div>
      <button type="submit" class="btn btn-primary">Guardar datos</button>
    </form>
    
  <br>
  <br>

  <!-- Start Footer Section -->
  <footer class="footer-section bg-gradient">
    <div class="container relative">

        <div class="sofa-img">
            <img src="{{asset('img/dosjuga-removebg-preview.png')}}" alt="Image" class="img-fluid">
        </div>

        

        <div class="row g-5 mb-5">
            <div class="col-lg-4">
                <div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo">Onclick<span>
                            <div class="hero-img-wrap">
                                <img src="{{asset('img/logo-removebg-preview.png')}} " class="img-fluid"
                                    style="width: 100px;">

                            </div>
                        </span></a>
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
                    <p class="mb-2 text-center text-lg-start">© 2024 Onclick Reservas. Todos los derechos
                        reservados.</p>
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

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('js/tiny-slider.js') }}"></script>
  <script src="{{ asset('js/custom.js') }}"></script>


  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/tiny-slider.js"></script>
  <script src="js/custom.js"></script>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
</body>
</html>
