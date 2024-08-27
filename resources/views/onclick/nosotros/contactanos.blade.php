<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="/img/logo-removebg-preview.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

  <!-- Bootstrap CSS -->
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link href="{{ asset('css/tiny-slider.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <title>Contáctanos</title>
</head>

<body>

  <!-- Inicio de la navegación -->
  <nav class="custom-navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Barra de navegación Furni" >

    <div class="container">
      <div class="hero-img-wrap">
        <!-- Imagen o logo puede ir aquí -->
      </div>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsFurni">
        <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
            <li><a class="nav-link" href="{{ route('home') }}">Inicio</a></li>
            <li><a class="nav-link" href="{{ route('centroDeportivo.listar') }}">Centros deportivos</a></li>
            <li><a class="nav-link" href="{{route('Nosotros')}}">Acerca de nosotros</a></li>
            <li><a class="nav-link" href="{{route('Servicios')}}">Servicios</a></li>
            <li><a class="nav-link" href="{{route('Contactanos')}}">Contactanos</a></li>
        </ul>

        <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
          <li><a class="nav-link" href="#"><img src="images/user.svg" alt="Usuario"></a></li>
          <li><a class="nav-link" href="cart.html"><img src="images/cart.svg" alt="Carrito"></a></li>
        </ul>
      </div>
    </div>

  </nav>
  <!-- Fin de la navegación -->

  <!-- Inicio de la sección Hero -->
  <div class="hero">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-5">
          <div class="intro-excerpt">
            <h1>Contáctanos</h1>
            <p class="mb-4">¿Tienes alguna pregunta sobre nuestra app de reservas de canchas sintéticas? Estamos aquí para ayudarte. ¡Conéctate con nosotros!</p>
            <p><a href="" class="btn btn-secondary me-2">Reserva Ahora</a><a href="#" class="btn btn-white-outline">Explorar</a></p>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="hero-img-wrap">
            <img src="img/5-removebg-preview.png" class="img-fluid" alt="Imagen destacada" width="550px">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Fin de la sección Hero -->

  <!-- Inicio del formulario de contacto -->
  <div class="untree_co-section">
    <div class="container">

      <div class="block">
        <div class="row justify-content-center">

          <div class="col-md-8 col-lg-8 pb-4">

            <div class="row mb-5">
              <div class="col-lg-4">
                <div class="service no-shadow align-items-center link horizontal d-flex active" data-aos="fade-left" data-aos-delay="0">
                  <div class="service-icon color-1 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                      <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                    </svg>
                  </div> <!-- /.icon -->
                  <div class="service-contents">
                    <p>Popayan cauca, Colombia </p>
                  </div> <!-- /.service-contents-->
                </div> <!-- /.service -->
              </div>

              <div class="col-lg-4">
                <div class="service no-shadow align-items-center link horizontal d-flex active" data-aos="fade-left" data-aos-delay="0">
                  <div class="service-icon color-1 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                      <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
                    </svg>
                  </div> <!-- /.icon -->
                  <div class="service-contents">
                    <p>onclick@gmail.com</p>
                  </div> <!-- /.service-contents-->
                </div> <!-- /.service -->
              </div>

              <div class="col-lg-4">
                <div class="service no-shadow align-items-center link horizontal d-flex active" data-aos="fade-left" data-aos-delay="0">
                  <div class="service-icon color-1 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                    </svg>
                  </div> <!-- /.icon -->
                  <div class="service-contents">
                    <p>+57 3925 3939</p>
                  </div> <!-- /.service-contents-->
                </div> <!-- /.service -->
              </div>
            </div>

            <form>
              <div class="row">
                <div class="col-6">
                  <div class="form-group">
                    <label class="text-black" for="fname">Nombre</label>
                    <input type="text" class="form-control" id="fname">
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label class="text-black" for="lname">Apellido</label>
                    <input type="text" class="form-control" id="lname">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label class="text-black" for="email">Correo Electrónico</label>
                <input type="email" class="form-control" id="email">
              </div>

              <div class="form-group">
                <label class="text-black" for="message">Mensaje</label>
                <textarea name="" class="form-control" id="message" cols="30" rows="5"></textarea>
              </div>

              <div class="form-group">
                <input type="submit" value="Enviar Mensaje" class="btn btn-primary">
              </div>

            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- Fin del formulario de contacto -->

  <!-- Inicio del pie de página -->
  <footer class="footer-section bg-gradient" >
	<div class="container relative">

		<div class="sofa-img">
			<img src="img/dosjuga-removebg-preview.png" alt="Image" class="img-fluid">
		</div>

		<div class="row">
			<div class="col-lg-8">
			  <div class="subscription-form">
				<h3 class="d-flex align-items-center"><span class="me-1"><img src="images/envelope-outline.svg" alt="Correo" class="img-fluid"></span><span>Subscríbete a nuestro boletín</span></h3>
	
				<form action="#" class="row g-3">
				  <div class="col-auto">
					<input type="text" class="form-control" placeholder="Ingresa tu correo">
				  </div>
				  <div class="col-auto">
					<button class="btn btn-primary">Subscríbete</button>
				  </div>
				</form>
	
			  </div>
			</div>
		  </div>

		<div class="row g-5 mb-5">
			<div class="col-lg-4">
				<div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo">Onclick<span><div class="hero-img-wrap">
					<img src="img/logo-removebg-preview.png " class="img-fluid" style="width: 100px;">
	
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
  <!-- Fin del pie de página -->

  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/tiny-slider.js"></script>
  <script src="js/custom.js"></script>
</body>
</html>
