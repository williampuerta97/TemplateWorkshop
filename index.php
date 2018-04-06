<!DOCTYPE HTML>
<!--
	Horizons by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>William Puerta</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
		</noscript>
		<link rel="stylesheet" href="css/bootstrap.min.css">
	</head>
	<body class="homepage">
		<?php 

		if (isset($_POST['enviar'])) {
			$nombre = $_POST['nombre'];
			$telefono = $_POST['telefono'];
			$correo = $_POST['correo'];
			$asunto = $_POST['asunto'];
			$mensaje = $_POST['mensaje'];
		}
		 ?>
		<!-- Header -->
			<div id="header">
				<div class="container">
						
					<!-- Logo -->
						<h1><a href="#" id="logo">Trabajo sobre Desarrollo Web</a></h1>
					
					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="index.html">Inicio</a></li>
								<li>
									<a href="estudios.html">Estudios</a>
									<ul>
										<li><a href="estudios.html#primaria">Primaria</a></li>
										<li><a href="estudios.html#secundaria">Secundaria</a></li>
										<li><a href="estudios.html#tecnica">Técnica</a></li>
									</ul>
								</li>
								<li><a href="hobbies.html">Hobbies</a></li>
							</ul>
						</nav>


					<!-- Banner -->
						<div id="banner">
							<div class="container">
								<section>
									<header class="major">
										<h2>William Steven Puerta Taquinas</h2>
										<span class="byline"></span>
									</header>
									<a href="#form" class="button alt">Formulario</a>
								</section>			
							</div>
						</div>

				</div>
			</div>

		<!-- Featured -->
			<div class="wrapper style2">
				<section class="container">
					<header class="major">
						<h2>Perfil Profesional</h2>
					</header>
					<div class="row no-collapse-1">
						<section class="4u">
							<a href="#" class="image feature"><img src="images/pic02.jpg" alt=""></a>
							<p><b>Habilidades: </b></p>
							<p class="spacer"></p>
							<p>Resuelve problemas en el menor tiempo posible para así evitar el mal funcionamiento de los equipos de información y la red, previniendo la perdida de producción en esta.</p>
						</section>
						<section class="4u">
							<a href="#" class="image feature"><img src="images/pic03.jpg" alt=""></a>
							<p><b>Experiencia: </b></p>
							<p class="spacer"></p>
							<p>Técnico con 2 años de experiencia en manejo de herramientas para:</p>
							<p class="spacer"></p>
							<p>* Optimización todos los equipos en la empresa.</p>
							<p>* Manejo de cable estructurado.</p>
							<p>* Mantenimiento preventivo.</p>
							<p>* Mantenimiento correctivo.</p>
						</section>
						<section class="4u">
							<a href="#" class="image feature"><img src="images/pic04.jpg" alt=""></a>
							<p><b>Extras: </b></p>
							<p class="spacer"></p>
							<p>* Manejo promedio en el idioma INGLÉS</p>
							<p>* Comunicación activa</p>
							<p>* Trato mutuo con respeto</p>
							</p>
						</section>
	
					</div>
				</section>
			</div>

		<!-- Main -->
			<div id="main" class="wrapper style1">
				<section class="container">
					<header class="major" id="form">
						<h2>Formulario de Contacto</h2>
					</header>
					<div class="row">
					
						<!-- Content -->
							<div class="3u">
								&nbsp;
							</div>
							<div class="6u">
								<form id="formulario" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
									<div>Nombres</div><input value="<?php if(isset($nombre)){echo $nombre;} ?>" id="nombre" type="text" placeholder="eje: William Puerta" name="nombre">
									<div>Teléfono</div><input value="<?php if(isset($telefono)){echo $telefono;} ?>" id="telefono" type="text" placeholder="eje: 317 7576490" name="telefono">
									<div>Correo Electrónico</div><input value="<?php if(isset($correo)){echo $correo;} ?>" id="email" type="text" placeholder="eje: williampuerta1097@gmail.com" name="correo">
									<div>Asunto</div><input value="<?php if(isset($asunto)){echo $asunto;} ?>" id="asunto" type="text" placeholder="Asunto" name="asunto">
									<div>Mensaje</div><textarea  id="mensaje" class="textarea" name="mensaje" id="mensaje" cols="10" rows="3" placeholder="Mensaje"><?php if(isset($mensaje)){echo $mensaje;} ?></textarea>
									<input type="submit" value="Enviar" name="enviar" class="button alt tamano">
									
									<?php include('validar.php'); ?>
								</form>
							</div>
					</div>
				</section>
			</div>

				

					<!-- Copyright -->
						<div class="copyright">
							<!-- Design: <a href="http://templated.co">TEMPLATED</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>) -->
						</div>

				</div>
			</div>
			<!-- Modal -->
				<div class="modal fade" id="message" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Mensaje</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        <b>Nombre:</b><p><?php echo $nombre ?></p>
				        <b>Teléfono: </b><p><?php echo $telefono ?></p>
				        <b>Correo Electrónico: </b><p><?php echo $correo ?></p>
				        <b>Asunto: </b><p><?php echo $asunto ?></p>
				        <b>Mensaje: </b><p><?php echo $mensaje ?></p>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
				      </div>
				    </div>
				  </div>
				</div>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	</body>
</html>