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
        <img src="{{ asset('img/logo-removebg-preview.png') }}" class="img-fluid" style="width: 100px;">
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarsFurni">
        <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0">
          <li><a class="nav-link" href="{{ route('login') }}"><img src={{ asset('/images/user.svg') }}>  Iniciar Sesion  </a></li>
          <li><a class="nav-link" href="{{ route('register') }}">Registrate</a></li>
        </ul>
      </div>
      
    </div>
  </nav>

    <source srcset="sourceset" type="image/svg+xml" />
    <img width="100%" height="100%" src="{{asset('img/cancha_inicio.webp')}} " class="img-fluid" alt="image desc"/>
  
  
        
    </body>
</html>
