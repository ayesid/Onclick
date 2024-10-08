<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="img/logo_sinfondo.png">
    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />

    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('css/tiny-slider.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.css" rel="stylesheet"> <!-- Agregar CSS de FullCalendar -->
    <title>Centros Deportivos</title>
</head>

<body class="bg-light">
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
                </ul>
                <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                    <li><a class="nav-link" href="{{ route('Reservas.listar') }}"><img src="{{asset('images/cart.svg')}}"></a></li>
                    <div class="nav-link">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-link" style="text-decoration: none;">
                                {{ __('Cerrar Sesión') }}
                            </button>
                        </form>
                    </div>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-5">
      <h1 class="text-center mb-4">Reserva de Canchas Sintéticas: {{ $cancha->nombre }}</h1> <!-- Aquí se muestra el nombre de la cancha -->
      <a href="{{ route('reservas.create', ['cancha_id' => $cancha->id]) }}">
        <img src="{{ asset('img/' . $cancha->imagen) }}" class="card-img-top" alt="{{ $cancha->nombre }}" width="500" height="500">
      </a>
        <!-- Tabla de precios -->
        <div class="card mb-4">
            <div class="card-header">Precios por Hora</div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Horarios</th>
                            <th>Precios</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>6:00 AM - 12:00 PM</td><td>$50.000</td></tr>
                        <tr><td>12:00 PM - 6:00 PM</td><td>$80.000</td></tr>
                        <tr><td>6:00 PM - 11:00 PM</td><td>$100.000</td></tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Calendario de disponibilidad -->
        <div class="card mb-4">
            <div class="card-header">Disponibilidad de la Cancha</div>
            <div class="card-body">
                <div id="calendar" class="w-80">
                </div> 
            </div>
        </div>

        <!-- Formulario de reserva -->
        <div class="card">
            <div class="card-header">Formulario de Reserva</div>
            <div class="card-body">
                <form action="{{ route('reservas.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre completo</label>
                        <input type="text" class="form-control" id="name" name="nombre_cliente" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Número de teléfono</label>
                        <input type="tel" class="form-control" id="phone" name="telefono_cliente" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo electrónico</label>
                        <input type="email" class="form-control" id="email" name="email_cliente" required>
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Fecha y hora de reserva</label>
                        <input type="datetime-local" class="form-control" id="date" name="fecha_reserva" required>
                    </div>
                    <div class="mb-3">
                        <label for="duration" class="form-label">Duración (horas)</label>
                        <select class="form-select" id="duration" name="duracion" required>
                            <option value="1">1 hora</option>
                            <option value="2">2 horas</option>
                            <option value="3">3 horas</option>
                        </select>
                    </div>
                    <input type="hidden" name="cancha_id" value="1"> <!-- Puedes hacer dinámico este valor -->
                    <button type="submit" class="btn btn-primary ">Reservar</button> <br> 
                    <br>
                    

                </form>
            </div>
        </div>
    </div>
    <a href="{{ route('Reservas.listar') }}"><button class="btn btn-primary " style="margin: 50px">Lista de reservas</button></a>

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

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FullCalendar JS -->
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                events: '/reservas/disponibilidad', // Carga de eventos dinámicamente desde el backend
                eventColor: '#FF0000', // Color para indicar reserva
                editable: true // Permite editar eventos
            });
            calendar.render();
        });
    </script>

</body>
</html>
