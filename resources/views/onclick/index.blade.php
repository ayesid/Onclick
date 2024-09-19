
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="img/logo_sinfondo.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

		<!-- Bootstrap CSS -->
        <!-- Bootstrap CSS -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
        <link href="{{ asset('css/tiny-slider.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">		
		
	
		

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
          
          <li><a class="nav-link" href=""><img src="{{asset('images/cart.svg')}}"></a></li>
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


		<!-- comienza el carrusel Banner Hero -->
		<div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
			<ol class="carousel-indicators">
				<li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
				<li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
				<li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<div class="container">
						<div class="row p-5">
							<div class="mx-auto col-md-8 col-lg-6 order-lg-last">
								<img class="img-fluid" src="img/9-removebg-preview.png" alt="" width="500px">
							</div>
							<div class="col-lg-6 mb-0 d-flex align-items-center">
								<div class="text-align-left align-self-center">
									<img class="img-fluid" src="img/logo-removebg-preview.png" alt="" width="100px">

									<h1 class="h1 text-success"><b>ONCLICK</b> <br>"Sinteticas a un click"</h1>
									<h3 class="h2">facil y seguro</h3>
									<p>
										Con esta app ahora podras reservar canchas sintéticas de fútbol  
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="container">
						<div class="row p-5">
							<div class="mx-auto col-md-8 col-lg-6 order-lg-last">
								<img class="img-fluid" src="img/1-removebg-preview.png" alt="" style="height: 400px;">
							</div>
							<div class="col-lg-6 mb-0 d-flex align-items-center">
								<div class="text-align-left">
									<h1 class="h1 text-success">Reserva tu cancha sin complicaciones </h1>
									<h3 class="h2">Aqui encontraras todos los centros deportivos mas cercanos y con disponibilidad</h3>
									<p>
										Reserva tu cancha en tu <strong>centro deportivo </strong >de preferencia
										
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="container">
						<div class="row p-5">
							<div class="mx-auto col-md-8 col-lg-6 order-lg-last">
								<img class="img-fluid" src="img/5-removebg-preview.png" alt="" style="height: 400px;"  >
							</div>
							<div class="col-lg-6 mb-0 d-flex align-items-center">
								<div class="text-align-left">
									<h1 class="h1 text-success">Reserva tu cancha rápido, fácil y paga como quieras</h1>
									<h3 class="h2">Solo con Onclick encuentra los mejores precios y promociones </h3>
									<p>
										“Reservamos con Onclick  y nos ahorramos el tener que ir hasta la cancha.”
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel"
				role="button" data-bs-slide="prev">
				<i class="fas fa-chevron-left"></i>
			</a>
			<a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel"
				role="button" data-bs-slide="next">
				<i class="fas fa-chevron-right"></i>
			</a>
		</div>
<!-- fin carrusel Hero Section -->

		


		

		<!-- Start Product Section -->
		<div class="product-section">
			<div class="container">
				<div class="row">

					<!-- Start Column 1 -->
					<div class="col-md-12 col-lg-3 mb-5 mb-lg-0 ">
						<h2 class="mb-4 section-title">Eventos y promociones </h2>
						<p class="mb-4">Contamos con Canchas Sintèticas para que disfrutes con tu grupo de amigos. Disponibles para alquiler por horas, torneos y eventos en general. </p>
						<p><a href="{{ route('centroDeportivo.listar') }}" class="btn btn-primary">Reservar cancha</a></p>
					</div> 
					<!-- End Column 1 -->

					<!-- Start Column 2 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
						<a class="product-item" href="{{route('Servicios')}}">
							<img src="img/promocion1.jpg" class="img-fluid product-thumbnail">
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
						<a class="product-item" href="{{route('Servicios')}}">
							<img src="img/promo2.jpg" class="img-fluid product-thumbnail">
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
						<a class="product-item" href="{{route('Servicios')}}">
							<img src="img/promo3.jpg" class="img-fluid product-thumbnail">
							<h3 class="product-title">Promo 3</h3>
							<strong class="product-price">Cliente del mes</strong>

							<span class="icon-cross">
								<img src="images/cross.svg" class="img-fluid">
							</span>
						</a>
					</div>
					<!-- End Column 4 -->

				</div>
			</div>
		</div>
		<!-- End Product Section -->

		<!-- Start Why Choose Us Section -->
		<div class="why-choose-section">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-lg-6">
						<h2 class="section-title">Por qué elegirnos </h2>
						<p>Nuestra aplicación está diseñada para ser intuitiva y fácil de usar tanto para los usuarios que reservan las canchas como para los administradores de las instalaciones</p>

						<div class="row my-5">
							

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="images/bag.svg" alt="Image" class="imf-fluid">
									</div>
									<h3>Facil de pagar</h3>
									<p>Seguro, facil y rapido .</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="images/support.svg" alt="Image" class="imf-fluid">
									</div>
									<h3>24/7 </h3>
									<p>A cualquier hora del dia puedes reservar</p>
								</div>
							</div>

							

						</div>
					</div>

					<div class="col-lg-5">
						<div class="img-wrap">
							<img src="img/can2.jpg" alt="Image" class="img-fluid" style="width: 600px; height: 400px;">
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- End Why Choose Us Section -->

		<!-- Start We Help Section -->
		<div class="we-help-section">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-lg-7 mb-5 mb-lg-0">
						<div class="imgs-grid">
							<div class="grid grid-1"><img src="img/cancha_inicio.webp" alt="Untree.co" style="width: 500px; height: 500px;"></div>
							<div class="grid grid-2"><img src="img/2.cancha.jfif" alt="Untree.co" ></div>
							<div class="grid grid-3"><img src="img/10-Cancha.jpg" alt="Untree.co" style="width: 400px; height: 300px;"></div>
						</div>
					</div>
					<div class="col-lg-5 ps-lg-5">
						<h2 class="section-title mb-4">"Explora nuestras instalaciones, revisa la disponibilidad en tiempo real y asegura tu espacio para jugar."</h2>
						<p>"Nuestras canchas sintéticas están ubicadas en un entorno seguro y accesible, equipadas con iluminación nocturna para que puedas jugar en cualquier momento del día."</p>

						<ul class="list-unstyled custom-list my-4">
							<li>"Selecciona la fecha y la hora que prefieras, y reserva tu cancha en solo unos clics. Recibirás una confirmación instantánea por correo electrónico."</li>
							<li>"Tarifas competitivas y opciones de pago flexibles disponibles. ¡Reserva ahora y prepárate para disfrutar de tu juego!"</li>
							<li>"Por favor, llega a tiempo para tu reserva y asegúrate de respetar las reglas y normativas de nuestras instalaciones."</li>
							<li>"Cancelaciones y reembolsos: Consulta nuestras políticas de cancelación para obtener información sobre cómo modificar o cancelar tu reserva."</li>
						</ul>
					
					</div>
				</div>
			</div>
		</div>
		<!-- End We Help Section -->

		<!-- Start Popular Product -->
		<div class="popular-product">
			<div class="container">
				<div class="row">

					<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
						<div class="product-item-sm d-flex">
							<div class="thumbnail">
								<img src="img/3-removebg-preview.png" alt="Image" class="img-fluid">
							</div>
							<div class="pt-3">
								<h3>Intuitiva</h3>
								<p>Onclick - Reserva de canchas sintéticas en Popayán de forma intuitiva y rápida.  </p>
								
							</div>
						</div>
					</div>

					<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
						<div class="product-item-sm d-flex">
							<div class="thumbnail">
								<img src="img/jugadorpng-removebg-preview.png" alt="Image" class="img-fluid">
							</div>
							<div class="pt-3">
								<h3>Facil de usar</h3>
								<p>Nuestra app es muy facil y divertida de usar </p>
								
							</div>
						</div>
					</div>

					<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
						<div class="product-item-sm d-flex">
							<div class="thumbnail">
								<img src="img/jugadpng2-removebg-preview.png" alt="Image" class="img-fluid">
							</div>
							<div class="pt-3">
								<h3>Rapida</h3>
								<p>Nuestra app está diseñada para que puedas encontrar y reservar la cancha perfecta en segundos. </p>
								
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- End Popular Product -->



		


		<!-- Start Blog Section -->
		
		<!-- End Blog Section -->	

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
