<?php
//Creamos las variables de conexión de MySQL
$servidor="localhost";
$usuario="root";
$contrasena="";
$bbdd="reservas";

//Conectamos con el servidor de MySQL
$conexion=mysqli_connect($servidor,$usuario,$contrasena) or die ("Error de conexión");

//Seleccionamos la BBDD
mysqli_select_db($conexion,$bbdd)
?>