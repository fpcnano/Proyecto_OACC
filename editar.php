<?php

	include("db.php");

	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$query = "SELECT * FROM alumno WHERE cuenta = $id";
		$resultado4 = mysqli_query($conn, $query);

		if (mysqli_num_rows($resultado4) == 1) {
			$row = mysqli_fetch_array($resultado4);
			$id = $row['cuenta'];
			$name = $row['nombre'];
			$apPat = $row['apellido_pat'];
			$apMat = $row['apellido_mat'];
			$email = $row['email'];
			
		}

	}

	if (isset($_POST['update'])) {
		$id = $_GET['id'];
		$Cuenta = $_POST['Cuenta'];
		$Name = $_POST['Name'];
		$ApPat = $_POST['apPat'];
		$ApMat = $_POST['apMat'];
		$Email = $_POST['Email'];

		$query = "UPDATE alumno SET cuenta= '$Cuenta', nombre= '$Name', apellido_pat= '$ApPat', apellido_mat= '$ApMat', email= '$Email' WHERE cuenta= $id";
		mysqli_query($conn, $query);

		$_SESSION['message'] = 'Alumno Actualizado';
		$_SESSION['message_type'] = 'primary';
		header("Location: index.php");

	}

?>

<?php include("includes/header.php"); ?>

<div class="container p-4">
	<div class="row">
		<div class="col-md-4 mx-auto">
			<div class="card card-body">
				<form action="editar.php?id=<?php echo $_GET['id'] ?>" method="POST">
					<div class="form-group">
						<h1>Actualizar Datos</h1>
						<input type="text" name="Cuenta" value="<?php echo $id; ?>" class="form-control" placeholder="Actualizar No. Cuenta">
					</div>
					<div class="form-group">
						<input type="text" name="Name" value="<?php echo $name; ?>" class="form-control" placeholder="Actualizar Nombre">
					</div>
					<div class="form-group">
						<input type="text" name="apPat" value="<?php echo $apPat; ?>" class="form-control" placeholder="Actualizar Apellido Paterno">
					</div>
					<div class="form-group">
						<input type="text" name="apMat" value="<?php echo $apMat; ?>" class="form-control" placeholder="Actualizar Apellido Materno">
					</div>
					<div class="form-group">
						<input type="text" name="Email" value="<?php echo $email; ?>" class="form-control" placeholder="Actualizar Correo Aragón">
					</div>
					<button class="btn btn-success" name="update">
						Actualizar
					</button>
				</form><br>
					<form action="mostrar.php">
						<input type="submit" name="regresar" class="btn btn-success btn_block" value="Cancelar">
					</form>
			</div>
			
		</div>
	</div>
</div>

<?php include("includes/footer.php"); ?>