<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Inicio</title>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Madimi+One&display=swap" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Agbalumo&family=Madimi+One&family=Protest+Revolution&display=swap" rel="stylesheet">
		<link href="css/estilos.css" type="text/css" rel="stylesheet">
	</head>
	
	<body>
		<header>
			<div id="cabecera">
				<a href="#" id="logo"></a>
				<div id="menu_nav">
					<!--La siguiente línea corresponde al botón del menú. Por defecto estará oculto-->
					<a href="#" class="menu_responsive" id="menu_responsive"></a>
					<ul>
						<li><a href="index.php">Inicio</a></li>
						<li><a href="eventos.php">Eventos</a></li>
						<li><a href="#">Galería</a></li>
						<li><a href="reservas.php">Reservas</a></li>
						<li><a href="#">Contacto</a></li>
					</ul>
				</div>
			</div>
		</header>
		
		<section>
			<div id="contenido">
				<h2>¡La mejor rumba del fin de semana!</h2>
				<div class="evento"></div>
				<button><a href="reservas.php"><h3>RESERVA TU MESA YA</h3></a></button>
			</div>	
		</section>
		
		<footer>

		</footer>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script>
			$(function() {

				var btn_movil = $('#menu_responsive'),
					menu_nav = $('#menu_nav').find('ul');

				// Al dar click agregar/quitar clases que permiten el despliegue del menú
				btn_movil.on('click', function (e) {
					e.preventDefault();

					var el = $(this);

					menu_nav.toggleClass('menu_nav_abierto');
				})

			});
		</script>
	</body>
</html>