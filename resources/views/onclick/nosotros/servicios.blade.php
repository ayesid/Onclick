
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="img/logo-removebg-preview.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

		<!-- Bootstrap CSS -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
        <link href="{{ asset('css/tiny-slider.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
		<title>Servicios</title>
	</head>

	<body>

		<!-- Start Header/Navigation -->
		<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar" >

			<div class="container" >
				<div class="hero-img-wrap">
					
				</div>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsFurni">
					<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
						<li><a class="nav-link" href="{{ route('home') }}">Inicio</a></li>
                        <li><a class="nav-link" href="{{ route('listaCentrosDeportivosuser') }}">Centros deportivos</a></li>

						<li><a class="nav-link" href="{{route('Nosotros')}}">Acerca de nosotros</a></li>
						<li><a class="nav-link" href="{{route('Servicios')}}">Servicios</a></li>
					</ul>

					<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">

						<li><a class="nav-link" href="{{ route('Reservas.listar') }}"><img src="{{ asset('/images/cart.svg') }}"></a></li>
						<div class="nav-link">
							<form method="POST" action="{{ route('logout') }}">
								@csrf
								<button type="submit" class=" btn btn-link" style="text-decoration: none;">
									{{ __('Cerrar Sesión') }}
							 </button>
			
							</form>
						</div>
					</ul>
				</div>
			</div>
				
		</nav>
		<!-- End Header/Navigation -->

		<!-- Start Hero Section -->
			<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>Servicios</h1>
								<p class="mb-4">En la aplicación Onclick, ofrecemos una variedad de servicios diseñados para facilitar la reserva y gestión de canchas deportivas, brindando una experiencia completa y conveniente para nuestros usuarios.</p>
								<p><a href="CentrosDeportivos.html" class="btn btn-secondary me-2">Reserva tu cancha</a><a href="index.html" class="btn btn-white-outline">Explorar</a></p>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="hero-img-wrap">
								<img src="{{asset('img/8-removebg-preview.png')}}" class="img-fluid" width="720px">
							</div>
						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->

		

		<!-- Start Why Choose Us Section -->
		<div class="why-choose-section">
			<div class="container">
				
				
				<div class="row my-5">
					<div class="col-6 col-md-6 col-lg-3 mb-4">
						<div class="feature">
							<div class="icon">
								<img src="{{asset('images/truck.svg')}}" alt="Image" class="imf-fluid">
							</div>
							<h3>Reservar  cancha con sus accesorios </h3>
							<p> Ofrecer la posibilidad de alquilar la cancha con su balon, petos, y otros accesorios deportivos directamente desde la app. </p>
						</div>
					</div>

					<div class="col-6 col-md-6 col-lg-3 mb-4">
						<div class="feature">
							<div class="icon">
								<img src="{{asset('images/bag.svg')}}" alt="Image" class="imf-fluid">
							</div>
							<h3>Organización de Torneos </h3>
							<p>Crear una función para organizar torneos entre usuarios de la app, incluyendo un sistema de gestión de equipos, horarios y resultados.</p>
						</div>
					</div>

					<div class="col-6 col-md-6 col-lg-3 mb-4">
						<div class="feature">
							<div class="icon">
								<img src="{{asset('images/support.svg')}}" alt="Image" class="imf-fluid">
							</div>
							<h3>Promociones y Descuentos:</h3>
							<p>Ofrecer descuentos por reservas recurrentes o por reservas en horarios de menor demanda.</p>
						</div>
					</div>

					<div class="col-6 col-md-6 col-lg-3 mb-4">
						<div class="feature">
							<div class="icon">
								<img src="{{asset('images/return.svg')}}" alt="Image" class="imf-fluid">
							</div>
							<h3>Notificaciones y Recordatorios:</h3>
							<p>Enviar notificaciones para recordar a los usuarios sus próximas reservas o cuando haya promociones disponibles.</p>
						</div>
					</div>

					<div class="col-6 col-md-6 col-lg-3 mb-4">
						<div class="feature">
							<div class="icon">
								<img src="{{asset('images/truck.svg')}}" alt="Image" class="imf-fluid">
							</div>
							<h3>Historial de Reservas</h3>
							<p>Un historial donde los usuarios puedan ver todas las reservas pasadas y futuras.</p>
						</div>
					</div>

					

				</div>
			
			</div>
		</div>
		<!-- End Why Choose Us Section -->

		<!-- Start Product Section -->
		<div class="product-section pt-0">
			<div class="container">
				<div class="row">

					<!-- Start Column 1 -->
					<div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
						<h2 class="mb-4 section-title">Eventos y promociones </h2>
						<p class="mb-4">Contamos con Canchas Sintèticas para que disfrutes con tu grupo de amigos. Disponibles para alquiler por horas, torneos y eventos en general. </p>
						<p><a href="CentrosDeportivos.html" class="btn btn-primary">Reservar cancha</a></p>
					</div> 
					<!-- End Column 1 -->

					<!-- Start Column 2 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
						<a class="product-item" href="cart.html">
							<img src="{{asset('img/promocion1.jpg')}}" class="img-fluid product-thumbnail">
							<h3 class="product-title">Promo 1</h3>
							<strong class="product-price">$50%</strong>

							<span class="icon-cross">
								<img src="images/cross.svg" class="img-fluid">
							</span>
						</a>
					</div> 
					<!-- End Column 2 -->

					<!-- Start Column 3 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
						<a class="product-item" href="cart.html">
							<img src="{{asset('img/promo2.jpg')}}" class="img-fluid product-thumbnail">
							<h3 class="product-title">Promo 2</h3>
							<strong class="product-price"> Puntos</strong>

							<span class="icon-cross">
								<img src="images/cross.svg" class="img-fluid">
							</span>
						</a>
					</div>
					<!-- End Column 3 -->

					<!-- Start Column 4 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
						<a class="product-item" href="cart.html">
							<img src="{{asset('img/promo3.jpg')}}" class="img-fluid product-thumbnail">
							<h3 class="product-title">Promo 3</h3>
							<strong class="product-price">Cliente del mes</strong>

							<span class="icon-cross">
								<img src="{{asset('images/cross.svg')}}" class="img-fluid">
							</span>
						</a>
					</div>
					<!-- End Column 4 -->

				</div>
			</div>
		</div>
		<!-- End Product Section -->

		

		

		<!-- Start Footer Section -->
		<footer class="footer-section bg-gradient" >
			<div class="container relative">

				<div class="sofa-img">
					<img src="img/dosjuga-removebg-preview.png" alt="Image" class="img-fluid">
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
