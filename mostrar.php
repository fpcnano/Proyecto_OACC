<?php

$inc= include("conexion.php");
if ($inc) {
	$consulta2= "SELECT * FROM alumno";
	$resultado2= mysqli_query($conex,$consulta2);
	$count= mysqli_num_rows($resultado2);

	echo "<table border='2' style='margin: 0 auto'
    <tr>
        <th>No. Cuenta</th>
        <th>Nombre</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>Correo</th>
    </tr>";
    if ( $count>0 ){
    //aqui se pintarian los registro de la DB
    while( $row = mysqli_fetch_assoc($resultado2)  ){
     echo "<tr>";
     echo"<td>". $row['cuenta'] ."</td>";
     echo"<td>". $row['nombre'] ."</td>";
     echo"<td>". $row['apellido_pat'] ."</td>";
     echo"<td>". $row['apellido_mat'] ."</td>";
     echo"<td>". $row['email'] ."</td>";
     echo "</tr>";
    }
    echo "</table>";

}else{
    
    
    echo"<h1 style='color:red' >Sin Ningun registro</h1>";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="Estilos/estilos.css">
    <title>Base de Datos</title>
</head>
<body>
    <form action="index.php">
        <input type="submit" value="Ingresar Alumno" name="btn3">
    </form>
</body>
</html>
