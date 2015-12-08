<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Derrape Controlado</title>

	<!-- Bootstrap Core CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css')?>" type="text/css">

	<!-- Custom Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?= base_url('assets/font-awesome/css/font-awesome.min.css')?>" type="text/css">

	<!-- Plugin CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/css/animate.min.css')?>" type="text/css">

	<!-- Custom CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/css/creative.css')?>" type="text/css">
	<link href="<?= base_url('assets/css/full-slider.css')?>" rel="stylesheet">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body id="page-top">

<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand page-scroll" href="#page-top"><img src="<?= base_url('assets/img/logo/logo.png')?>"></a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a class="page-scroll" href="#about">Nosotros</a>
				</li>
				<li>
					<a class="page-scroll" href="#services">Servicios</a>
				</li>
				<li>
					<a class="page-scroll" href="#portfolio">Imágenes</a>
				</li>
				<li>
					<a class="page-scroll" href="#contact">Contacto</a>
				</li>
			</ul>
		</div>
		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container-fluid -->
</nav>

<!--header>
    <div class="header-content">
        <div class="header-content-inner">
            <h1>AUTOMOVILISMO ZONAL ACTUAL E HISTÓRICO</h1>
            <hr>
            <p>Derrape controlado es la única revista de automolivismo regional con llega a la zona de influencia, generando un aporte informativo y promocional imprescindible para toda la actividad "tuerca". </p>
            <a href="#about" class="btn btn-primary btn-xl page-scroll">Conocenos</a>
        </div>
    </div>
</header-->

<!-- Full Page Image Background Carousel Header -->
<header id="myCarousel" class="carousel slide">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
		<li data-target="#myCarousel" data-slide-to="3"></li>
	</ol>

	<!-- Wrapper for Slides -->
	<div class="carousel-inner">
		<div class="item active">
			<!-- Set the first background image using inline CSS below. -->
			<div class="fill" style="background-image:<?= base_url('assets/img/slide/SlideDC1.jpg')?>"></div>
			<div class="carousel-caption">

				<h1>DERRAPE CONTROLADO</h1>
				<h2>Motor de ilusiones</h2>

			</div>
		</div>

		<div class="item">
			<!-- Set the second background image using inline CSS below. -->
			<div class="fill" style="background-image:url('./img/slide/SlideDC2.jpg');"></div>

		</div>

		<div class="item">
			<!-- Set the third background image using inline CSS below. -->
			<div class="fill" style="background-image:url('./img/slide/SlideDC3.jpg');"></div>

			<div class="carousel-caption">
				<h1>CONTRATÁ PUBLICIDAD</h1>
				<h3>Gran variedad de espacios publicitarios + Diseño Personalizado</h3>
				<a href="#services" class="btn btn-cojudo wow tada page-scroll" ><img src="<?= base_url('assets/img/boton/BotonReservar.png')?>"></a>
			</div>

		</div>

		<div class="item">
			<!-- Set the third background image using inline CSS below. -->
			<div class="fill" style="background-image:url('./img/slide/SlideDC4.jpg');"></div>
			<div class="carousel-caption">
				<h1>EQUIPO DE TRABAJO</h1>
				<h2>Te invitamos a recorrer las páginas de nuestra revista. Derrape Controlado cita a la pasión, a la emoción, al recuerdo y a creer; que nos sobra oficio y voluntad para volver a palpitar el automovilismo zonal.</h2>
				<a href="#about" class="btn btn-cojudo wow tada page-scroll" ><img src="<?= base_url('assets/img/boton/botonConocenos.png')?>"></a>
			</div>


		</div>



	</div>

	<!-- Controls -->
	<a class="left carousel-control" href="#myCarousel" data-slide="prev">
		<span class="icon-prev"></span>
	</a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next">
		<span class="icon-next"></span>
	</a>

</header>





<section class="bg-primary" id="about">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 text-center">
				<h2 class="section-heading">Acá ni idea que poner!</h2>
				<hr class="light">
				<p class="text-faded">Acá mandar fruta y mas fruta</p>
				<a href="#" class="btn btn-default btn-xl">Pedi publicidad!</a>
			</div>
		</div>
	</div>
</section>

<section id="services">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading">At Your Service</h2>
				<hr class="primary">
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6 text-center">
				<div class="service-box">
					<i class="fa fa-4x fa-diamond wow bounceIn text-primary"></i>
					<h3>Sturdy Templates</h3>
					<p class="text-muted">Our templates are updated regularly so they don't break.</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 text-center">
				<div class="service-box">
					<i class="fa fa-4x fa-paper-plane wow bounceIn text-primary" data-wow-delay=".1s"></i>
					<h3>Ready to Ship</h3>
					<p class="text-muted">You can use this theme as is, or you can make changes!</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 text-center">
				<div class="service-box">
					<i class="fa fa-4x fa-newspaper-o wow bounceIn text-primary" data-wow-delay=".2s"></i>
					<h3>Up to Date</h3>
					<p class="text-muted">We update dependencies to keep things fresh.</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 text-center">
				<div class="service-box">
					<i class="fa fa-4x fa-heart wow bounceIn text-primary" data-wow-delay=".3s"></i>
					<h3>Made with Love</h3>
					<p class="text-muted">You have to make your websites with love these days!</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="no-padding" id="portfolio">
	<div class="container-fluid">
		<div class="row no-gutter">


			<div class="col-lg-4 col-sm-6">
				<a href="#" class="portfolio-box">
					<img src="<?= base_url('assets/img/portfolio/MóduloMedioDCMapa.jpg')?>" class="img-responsive" alt="">
					<div class="portfolio-box-caption">
						<div class="portfolio-box-caption-content">
							<div class="project-category text-faded">
								Publicidad
							</div>
							<div class="project-name">
								Project Name
							</div>
						</div>
					</div>
				</a>
			</div>

			<div class="col-lg-4 col-sm-6">
				<a href="#" class="portfolio-box">
					<img src="<?= base_url('assets/img/portfolio/3.jpg')?>" class="img-responsive" alt="">
					<div class="portfolio-box-caption">
						<div class="portfolio-box-caption-content">
							<div class="project-category text-faded">
								Mapita
							</div>
							<div class="project-name">
								Project Name
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-4 col-sm-6">
				<a href="#" class="portfolio-box">
					<img src="<?= base_url('assets/img/portfolio/4.jpg')?>" class="img-responsive" alt="">
					<div class="portfolio-box-caption">
						<div class="portfolio-box-caption-content">
							<div class="project-category text-faded">
								Secciones
							</div>
							<div class="project-name">
								Project Name
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-4 col-sm-6">
				<a href="#" class="portfolio-box">
					<img src="<?= base_url('assets/img/portfolio/galeria650.jpg')?>" class="img-responsive" alt="">
					<div class="portfolio-box-caption">
						<div class="portfolio-box-caption-content">
							<div class="project-name">
								Galería
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-2">
				<a href="#" class="portfolio-box2">
					<img src="<?= base_url('assets/img/portfolio/galeria1.jpg')?>" class="img-responsive" alt="">
					<div class="portfolio-box2-caption">
						<div class="portfolio-box2-caption-content">
							<div class="project-category text-faded">
								primero cojudo
							</div>
							<div class="project-name">
								Project Name
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-2">
				<a href="#" class="portfolio-box2">
					<img src="<?= base_url('assets/img/portfolio/galeria2.jpg')?>" class="img-responsive" alt="">
					<div class="portfolio-box2-caption">
						<div class="portfolio-box2-caption-content">
							<div class="project-category text-faded">
								segundo cojudo
							</div>
							<div class="project-name">
								Project Name
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-2">
				<a href="#" class="portfolio-box2">
					<img src="<?= base_url('assets/img/portfolio/galeria3.jpg')?>" class="img-responsive" alt="">
					<div class="portfolio-box2-caption">
						<div class="portfolio-box2-caption-content">
							<div class="project-category text-faded">
								tercero cojudo
							</div>
							<div class="project-name">
								Project Name
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-2">
				<a href="#" class="portfolio-box2">
					<img src="<?= base_url('assets/img/portfolio/galeria4.jpg')?>" class="img-responsive" alt="">
					<div class="portfolio-box2-caption">
						<div class="portfolio-box2-caption-content">
							<div class="project-category text-faded">
								cuarto cojudo
							</div>
							<div class="project-name">
								Project Name
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-2">
				<a href="#" class="portfolio-box2">
					<img src="<?= base_url('assets/img/portfolio/galeria5.jpg')?>" class="img-responsive" alt="">
					<div class="portfolio-box2-caption">
						<div class="portfolio-box2-caption-content">
							<div class="project-category text-faded">
								quinto cojudo
							</div>
							<div class="project-name">
								Project Name
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-2">
				<a href="#" class="portfolio-box2">
					<img src="<?= base_url('assets/img/portfolio/galeria6.jpg')?>" class="img-responsive" alt="">
					<div class="portfolio-box2-caption">
						<div class="portfolio-box2-caption-content">
							<div class="project-category text-faded">
								segundo cojudo
							</div>
							<div class="project-name">
								Project Name
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-2">
				<a href="#" class="portfolio-box2">
					<img src="<?= base_url('assets/img/portfolio/galeria7.jpg')?>" class="img-responsive" alt="">
					<div class="portfolio-box2-caption">
						<div class="portfolio-box2-caption-content">
							<div class="project-category text-faded">
								tercero cojudo
							</div>
							<div class="project-name">
								Project Name
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-2">
				<a href="#" class="portfolio-box2">
					<img src="<?= base_url('assets/img/portfolio/galeria8.jpg')?>" class="img-responsive" alt="">
					<div class="portfolio-box2-caption">
						<div class="portfolio-box2-caption-content">
							<div class="project-category text-faded">
								cuarto cojudo
							</div>
							<div class="project-name">
								Project Name
							</div>
						</div>
					</div>
				</a>
			</div>






		</div>
	</div>
</section>

<aside class="bg-dark">
	<div class="container text-center">
		<div class="call-to-action">
			<h2>Free Download at Start Bootstrap!</h2>
			<a href="#" class="btn btn-default btn-xl wow tada">Download Now!</a>
		</div>
	</div>
</aside>

<!--section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h2 class="section-heading">Let's Get In Touch!</h2>
                <hr class="primary">
                <p>Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
            </div>
            <div class="col-lg-4 col-lg-offset-2 text-center">
                <i class="fa fa-phone fa-3x wow bounceIn"></i>
                <p>123-456-6789</p>
            </div>
            <div class="col-lg-4 text-center">
                <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                <p><a href="mailto:your-email@your-domain.com">feedback@startbootstrap.com</a></p>
            </div>
        </div>
    </div>
</section-->


<!-- Contact Section -->
<section class="bg-primary" id="contact">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 text-center">
				<h2 class="section-heading">Contactanos</h2>
				<hr class="light">
				<h3 class="section-subheading">Ingrese sus datos y el mensaje a enviar.</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<form name="sentMessage" id="contactForm" novalidate>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Nombre *" id="name" required data-validation-required-message="Please enter your name.">
								<p class="help-block text-danger"></p>
							</div>
							<div class="form-group">
								<input type="email" class="form-control" placeholder="Email *" id="email" required data-validation-required-message="Please enter your email address.">
								<p class="help-block text-danger"></p>
							</div>
							<div class="form-group">
								<input type="tel" class="form-control" placeholder="Número telefónico *" id="phone" required data-validation-required-message="Please enter your phone number.">
								<p class="help-block text-danger"></p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<textarea class="form-control" placeholder="Mensaje *" id="message" required data-validation-required-message="Please enter a message."></textarea>
								<p class="help-block text-danger"></p>
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="col-lg-12 text-center">
							<div id="success"></div>
							<a href="#" class="btn btn-default btn-xl wow tada">Enviar Mensaje</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>




<!-- jQuery -->
<script src="<?= base_url('assets/js/jquery.js')?>"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?= base_url('assets/js/bootstrap.min.js')?>"></script>

<!-- Plugin JavaScript -->
<script src="<?= base_url('assets/js/jquery.easing.min.js')?>"></script>
<script src="<?= base_url('assets/js/jquery.fittext.js')?>"></script>
<script src="<?= base_url('assets/js/wow.min.js')?>"></script>

<!-- Custom Theme JavaScript -->
<script src="<?= base_url('assets/js/creative.js')?>"></script>

<!-- Script to Activate the Carousel -->
<script>
	$('.carousel').carousel({
		interval: 5000 //changes the speed
	})
</script>

</body>

</html>
