<?php include 'template/header.php' ?>

<?php
require("./model/conexion.php");
$codigo = $_GET['codigo'];
$consulta="select * from estudiante where documento='$codigo'";
$resultado=$conexion->query($consulta);
$row=$resultado->fetch_assoc();
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Editar datos:
                    </div>
        <form  class ="p-4" method="POST" action="editarProceso.php">
            <div class="mb-3">
                <label class="for-label">Documento</label>
                <input type="text" class="form-control" name="documento" value="<?php echo  $row['documento']?>" autofocus>
                <label class="for-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" value="<?php echo  $row['nombre']?>"  autofocus>
                <label class="for-label">Apellidos</label>
                <input type="text" class="form-control" name="apellidos" value="<?php echo  $row['apellidos']?>"  autofocus>
                <label class="for-label">Correo</label>
                <input type="email" class="form-control" name="correo" value="<?php echo  $row['correo']?>"  autofocus>
                <label class="for-label">Telefono</label>
                <input type="text" class="form-control" name="telefono" value="<?php echo  $row['telefono']?>"  autofocus>
              

            </div>
           
            <div class="d-grid">
                <input type="hidden" name="oculto" value="1">
                <input type="submit" class="btn btn-primary" value="Editar">
            </div> 
         </form>
            </div>
        </div>
    </div>
</div>