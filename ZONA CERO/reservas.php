<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Reservas</title>
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
            <div class="form_reservas">
                <form action="reservar.php" method="post">
                    <label for="dni">DNI: </label>
                    <input type="text" name="dni" id="dni" maxlength="9" placeholder="12345678A" required>
                    <label for="nombre">NOMBRE: </label>
                    <input type="text" name="nombre" id="nombre" maxlength="25" required>
                    <label for="apellidos">APELLIDOS: </label>
                    <input type="text" name="apellidos" id="apellidos" maxlength="50" required>
                    <label for="email">CORREO ELECTRÓNICO: </label>
                    <input type="email" name="email" id="email" placeholder="tucorreo@cuenta.com" required>
                    <label for="phone">TELÉFONO: </label>
                    <input type="tel" name="phone" id="phone" maxlength="9" placeholder="666666666" required>
                    <label for="fecha">FECHA de la RESERVA: </label>
                    <input type="date" name="fecha" id="fecha">
                    <label for="elige">ELIGE PAGO: </label>
                    <select name="pago" id="pago">
                        <option value="0">DEPÓSITO (20€)*</option>
                        <option value="1">TOTAL de la RESERVA</option>
                    </select>
                    <button class="guardar" type="submit">RESERVAR</button>
                </form>
            </div>
            <?php
            require_once 'conexion.php';

            //Creamos una variable donde almacenamos la consulta
            $sql = "SELECT * FROM reservas";
            //creamos variable resultado donde almacenamos todos los datos de la consulta que hemos realizado con la variable $sql y la ejecutaamos con mysqli_query
            $resultado = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));
            print ("<h3>Resultado de las reservas</h3>");
            echo "<div id='resultado_reserva'>";
            
            while($x = mysqli_fetch_array($resultado)){
                if($x['pago'] == 0){
                    $pago = "Depósito (20€) *";
                } else {
                    $pago = "TOTAL de la RESERVA";
                }
                echo "<div id='reservas'>"; 
                    echo $x['dni'] . "<br>" . $x['nombre'] . $x['apellidos'] . "<br>" . $x['email'] . "<br>" . $x['telefono'] . "<br>" . $x['fecha'] . "<br>" . $pago;
                    echo "<a href='cancelar.php?id=" . $x['dni'] . "'>
                    <button class='cancelarReserva'>Cancelar Reserva</button></a>";
                echo "</div>";
            }
            echo "</div>"; 
            ?>
        </section>
        <footer>

        </footer>
    </body>
</html>