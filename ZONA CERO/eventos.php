<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos</title>
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
        <div id="calendario">
            <div class="mes-y-ano">
              <button id="mes-anterior">&lt;</button>
              <h2 id="mes-actual"></h2>
              <button id="mes-siguiente">&gt;</button>
            </div>
            <div id="dias-semana">
              <div class="dia-semana">Dom</div>
              <div class="dia-semana">Lun</div>
              <div class="dia-semana">Mar</div>
              <div class="dia-semana">Mié</div>
              <div class="dia-semana">Jue</div>
              <div class="dia-semana">Vie</div>
              <div class="dia-semana">Sáb</div>
            </div>
            <div id="dias"></div>
        </div>
        <div id="evento">
            <img id="imagen-evento" src="" alt="Imagen del evento">
        </div>
    </section>

    <footer>

    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.9.0/main.min.js"></script>
    <script src="js/eventos.js"></script>
</body>
</html>