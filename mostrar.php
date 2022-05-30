<?php 
include("db.php")
?>

<?php
include("includes/header.php")
?>

<div class="col-md-8 mx-auto">
    <table border="3px" style="margin: 50px" align="center" class="table table-bordered">
        <thead>
            <tr>
                <th width="150">Número de Cuenta</th>
                <th width="150">Nombre</th>
                <th width="150">Apellido Paterno</th>
                <th width="150">Apellido Materno</th>
                <th width="150">Correo Institucional</th>
                <th width="150">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $consulta2= "SELECT * FROM alumno";
                $resultado2= mysqli_query($conn,$consulta2);
                while ($row= mysqli_fetch_array($resultado2)) { ?>
                    <tr>
                        <td> <?php echo $row['cuenta'] ?> </td>
                        <td> <?php echo $row['nombre'] ?> </td>
                        <td> <?php echo $row['apellido_pat'] ?> </td>
                        <td> <?php echo $row['apellido_mat'] ?> </td>
                        <td> <?php echo $row['email'] ?> </td>
                        <td>
                            <a href="editar.php?id= <?php echo $row['cuenta'] ?> " class="btn btn-secondary">
                                <i class="fas fa-marker"></i>
                            </a>
                            <a href="eliminar.php?id= <?php echo $row['cuenta'] ?> " class="btn btn-danger">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<div class="container p-4">
        <div class="row">
            <div class="col-md-4">
                <form action="index.php">
                    <input type="submit" name="regresar" class="btn btn-success btn_block" value="Ingresar Nuevo Alumno">
                </form>
            </div>
        </div>
    </div>
</div>