<?php 
include("conexion.php");
include("usuarios_tabla.php");
$pagina = $_GET['pag'];
$correo = $_GET['correo'];

$querybuscar = mysqli_query($conn, "SELECT * FROM usuarios WHERE correo = '$correo'");
 
while($mostrar = mysqli_fetch_array($querybuscar))
{
	$usunom 	= $mostrar['nom'];
	$usucorreo 	= $mostrar['correo'];
	$usupass 	= $mostrar['pass'];
}
?>
<html>
<body>
<div class="caja_popup2">
<form class="contenedor_popup" method="POST">
<table>
<tr><th colspan="2">Ver usuario</th></tr>
<tr> 
<td><b>Nombre:</b></td>
<td><?php echo $usunom;?></td>
</tr>
			
<tr> 
<td><b>Correo: </b></td>
<td><?php echo $usucorreo;?></td>
</tr>
<tr>

<tr> 
<td><b>Contraseña: </b></td>
<td><?php echo $usupass;?></td>
</tr>
<tr>
				
<td colspan="2">
<?php echo "<a class='BotonesTeam' href=\"usuarios_tabla.php?pag=$pagina\">Regresar</a>";?>
</td>
</tr>
</table>
</form>
</div>
</body>
</html>