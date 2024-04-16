<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once 'conexion.php';

    //Recogemos los datos del formulario a través de la supervariable mediante el name
    $dni = $_POST['dni'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $fecha = $_POST['fecha'];
    $pago =$_POST['pago'];

    //Transformamos el formato Año/Mes/Día al formato europeo
    $fecha = date("Y/m/d", strtotime($fecha));

    $sql = "INSERT INTO reservas (dni, nombre, apellidos, email, telefono, fecha, pago) VALUES ('$dni','$nombre','$apellidos','$email','$phone','$fecha','$pago') ";

    if(mysqli_query($conexion, $sql)){
        echo ("Almacenado");
      } else {
        echo("Fallido");
      }
    ?>

    <script>location.href='reservas.php'</script>
</body>
</html>