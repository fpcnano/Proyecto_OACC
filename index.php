<?php 
include("db.php")
?>

<?php
include("includes/header.php")
?>

	<div class="container p-4">
		<div class="row">
			<div class="col-md-4 mx-auto">

				<?php if (isset($_SESSION['message'])) { ?>
					<div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
  					<?= $_SESSION['message'] ?>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
					</div>
				<?php session_unset();} ?>

				<div class="card card-body">
					<form action="guardar.php" method="POST">
						<div class="form-group">
							<h1>Alumno Nuevo</h1>
							<input type="text" name="nocuenta" class="form-control" placeholder="No. Cuenta" autofocus>
						</div>
						<div class="form-group">
							<input type="text" name="name" class="form-control" placeholder="Nombre" autofocus>
						</div>
						<div class="form-group">
							<input type="text" name="apellidopat" class="form-control" placeholder="Apellido Paterno" autofocus>
						</div>
						<div class="form-group">
							<input type="text" name="apellidomat" class="form-control" placeholder="Apellido Materno" autofocus>
						</div>
						<div class="form-group">
							<input type="text" name="email" class="form-control" placeholder="Correo Aragón" autofocus>
						</div>
						<input type="submit" name="registrar" class="btn btn-success btn_block" value="Ingresar">
					</form><br>
					<form action="mostrar.php">
						<input type="submit" name="mostrar" class="btn btn-success btn_block" value="Mostrar BD">
					</form>
				</div>
			</div>
		</div>
	</div>

<?php
include("includes/footer.php")
?>