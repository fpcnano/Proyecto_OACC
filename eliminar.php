<?php

	include("db.php");

	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$query = "DELETE FROM alumno WHERE cuenta = $id";
		$resultado3 = mysqli_query($conn, $query);

		if (!$resultado3) {
			die("AH OCURRIDO UN ERROR");
		}

		$_SESSION['message'] = 'Alumno Eliminado';
		$_SESSION['message_type'] = 'danger';
		header("Location: index.php");

	}

?>