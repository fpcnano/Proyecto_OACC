<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Estilos/estilos.css">
	<title>Alumnos ICO</title>
</head>
<body>
	<form method="post">
		<h1>Nuevo Alumno</h1>
		<input type="text" name="nocuenta" placeholder="No. Cuenta">
		<input type="text" name="name" placeholder="Nombre">
		<input type="text" name="apellidopat" placeholder="Apellido Paterno">
		<input type="text" name="apellidomat" placeholder="Apellido Materno">
		<input type="text" name="email" placeholder="Correo Aragón">
		<input type="submit" name="registrar" name="btn1">
	</form>
	<form action="mostrar.php">
		<input type="submit" value="Base de Datos" name="btn2">
	</form>

	<?php
	include("registro.php");
	?>

</body>
</html>