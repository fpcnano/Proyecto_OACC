<?php

include("conexion.php");

if (isset($_POST['registrar'])) {
	if (strlen($_POST['nocuenta'])>= 1 &&
    strlen($_POST['name'])>=1 &&
    strlen($_POST['apellidopat'])>= 1 &&
    strlen($_POST['apellidomat'])>= 1 &&
    strlen($_POST['email'])>= 1) {
    	$nocuenta= trim($_POST['nocuenta']);
    	$name= trim($_POST['name']);
    	$apellidopat= trim($_POST['apellidopat']);
    	$apellidomat= trim($_POST['apellidomat']);
    	$email= trim($_POST['email']);

    	$consulta= "INSERT INTO alumno(cuenta, nombre, apellido_pat, apellido_mat, email) VALUES ('$nocuenta','$name','$apellidopat','$apellidomat','$email')";
    	$resultado= mysqli_query($conex,$consulta);
    	if ($resultado) {
    		?>
    		<h3 class="ok">Alumno Registrado</h3>
    		<?php
    	}else{
    		?>
    		<h3 class="bad">HA OCURRIDO UN ERROR</h3>
    		<?php
    	}
	}else{
		?>
		<h3 class="bad">Favor de Completar los Campos</h3>
		<?php
	}
}

?>
