<?php
$host 	= 'localhost';
$nom 	= 'root';
$pass 	= '';
$db 	= 'empresa';

$conn = mysqli_connect($host, $nom, $pass, $db);

if (!$conn) 
{
  die("Error en la conexión: " . mysqli_connect_error());
}	
?>