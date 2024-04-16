<?php
require_once 'conexion.php';

$id = $_GET['id']; //Al pasar el parámetro por medio de un vínculo se usa la supervariable get $_GET

$sql = "DELETE FROM reservas WHERE dni = '" . $id . "'";

if(mysqli_query($conexion, $sql)){
    print ("Borrado");
}
else{
    print ("Fallido");
}

echo "<script>location.href='reservas.php'</script>";

?>