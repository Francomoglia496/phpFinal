<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Registro de Usuario - Trabajo Final</title>
</head>
<body>

	<?php

	//u355331570_final
	//trabajofinal

	//conectar a la base de datos
	include("conectar.php");

	//recibimos los datos para el metodo POST
	$usuario = $_POST['usuario'];
	$clave = $_POST['clave'];
	$clave2 = $_POST['clave2'];
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$edad = $_POST['edad'];
	$email = $_POST['email'];
	$sitio_web = $_POST['sitio_web'];


	//hacemos la insercion
	
	if ($clave == $clave2){
		
		$sql = mysqli_query($conn, "INSERT INTO usuarios VALUES (0, '$usuario', '$clave', '$nombre', '$apellido', $edad, '$email', 'sitio_web')");

	}else echo ("Error: las contraseñas son diferentes.");


	$consulta = mysqli_query($conn, "SELECT * FROM usuarios WHERE usuario='$usuario' AND clave='$clave' AND nombre='$nombre' AND apellido='$apellido' AND email='email'");

	$datos = mysqli_fetch_array($consulta);

	var_dump($consulta);die;
?>

	
	<div>
		<ul>
		  <li>Usuario: <?php echo $datos['usuario']; ?></li>
		  <li>Contraseña: <?php echo $datos[2]; ?></li>
		  <li>Nombre: <?php echo $datos[3]; ?></li>
		  <li>Apellido: <?php echo $datos[4]; ?></li>
		  <li>Edad: <?php echo $datos[5]; ?></li>
		  <li>Email: <?php echo $datos[6]; ?></li>
		  <li>Sitio Web: <?php echo $datos[7]; ?></li>
		</ul>
	</div>

</body>
</html>