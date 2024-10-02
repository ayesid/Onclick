
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
		<title>Nosotros </title>
	</head>

	<body>

		<!-- Start Header/Navigation -->
		<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar" >

			<div class="container" >
				<div class="hero-img-wrap">
					<img src="img/logo_sinfondo.png" class="img-fluid" style="width: 100px;">
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
					</ul>

					<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">

						<li><a class="nav-link" href=""><img src="{{ asset('/images/cart.svg') }}"></a></li>
						<div class="nav-link">
							<form method="POST" action="{{ route('logout') }}">
								@csrf
								<button type="submit" class="nav-link btn btn-link" style="text-decoration: none;">
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
							<div class="intro-excerpt ">
								<h1>Acerca de nosotros</h1>
								<p class="mb-4">Nuestra aplicación está diseñada por estudiantes del tecnologo de analisis y desarrolo de sotfwrae del sena </p>
								<p><a href="{{route('centroDeportivo.listar')}}" class="btn btn-secondary me-2">Reservar</a><a href="{{route('home')}}" class="btn btn-white-outline">Inicio</a></p>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="hero-img-wrap">
								<img src="img/1-removebg-preview.png" class="img-fluid" width="700px"> 
							</div>
						</div>
					</div>
				</div>
			</div> <br> <br> <br>
		<!-- End Hero Section -->

		

		<!-- Start Why Choose Us Section -->
		<div class="why-choose-section">
			<div class="container">
				<div class="row justify-content-between align-items-center">
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
									<p>Seguro y rapido .</p>
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
							<img src="img/1724729894.jpg" alt="Image" class="img-fluid" width="700px" height="700px">
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- End Why Choose Us Section -->

		<!-- Start Team Section -->
		<div class="untree_co-section">
			<div class="container">

				<div class="row mb-5">
					<div class="col-lg-5 mx-auto text-center">
						<h1 class="section-title">Nuestro equipo de desarrollo</h1>
					</div>
				</div>

				<div class="row">

				

					<!-- Start Column 2 -->
					<div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
						<img src="images/yesid.jpg" class="img-fluid mb-5">

						<h3 clas><a href="#"><span class="">Yesid arroyo</span> sanchez</a></h3>
            <span class="d-block position mb-4">Desarrollador de software</span>
            <p>Estudiante del tecnologo en Analisis y desarrollo de sofware del sena</p>

					</div> 
					<!-- End Column 2 -->

					<!-- Start Column 3 -->
					<div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
						<img src="images/heider.webp" class="img-fluid mb-5">
						<h3 clas><a href="#"><span class="">Heider palmett</a></h3>
            <span class="d-block position mb-4">Documentador </span>
            <p>Estudiante del tecnologo en Analisis y desarrollo de sofware del sena</p>
					</div> 
					<!-- End Column 3 -->

					<!-- Start Column 4 -->
					<div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
						<img src="images/yesid.jpg" class="img-fluid mb-5">

						<h3 clas><a href="#"><span class="">Nelson cerrano </span> alba</a></h3>
            <span class="d-block position mb-4">Desarrollador de software</span>
            <p>Estudiante del tecnologo en Analisis y desarrollo de sofware del sena</p>

          
					</div> 
					<!-- End Column 4 -->

					

				</div>
			</div>
		</div>
		<!-- End Team Section -->

		


		<!-- Start Footer Section -->
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
		<!-- End Footer Section -->	


		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/tiny-slider.js"></script>
		<script src="js/custom.js"></script>
	</body>

</html>
