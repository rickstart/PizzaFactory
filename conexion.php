<?php
$dbhost="localhost";  // host del MySQL (generalmente localhost)
$dbusuario="pizzafac_admin"; // aqui debes ingresar el nombre de usuario
                      // para acceder a la base
$dbpassword="Alemania1"; // password de acceso para el usuario de la
                      // linea anterior
$db=" pizzafac_pizzafactorydb";        // Seleccionamos la base con la cual trabajar
$conexion = mysql_connect($dbhost, $dbusuario, $dbpassword);
if (!$conexion) 
{ 
	die('Could not connect to MySQL: ' . mysql_error()); 
} 

$format=mysql_select_db($db, $conexion);

?>