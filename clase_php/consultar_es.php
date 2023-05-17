<?php include 'template/home.php'?>

<form method="POST" action="consultar_es.php">
    <input type="text" class="form-control" name="documento" autofocus>
    <input type="submit" class="btn btn-primary" value="buscar" name="buscar">
</form>

<?php
if(isset($_POST["buscar"])){
    include_once "model/conexion.php";
    $documento = $_POST["documento"];
    $consulta = "SELECT * FROM estudiante where
     documento= '$documento '";
     $resultado= $conexion->query($consulta);
     $row = $resultado->fetch_assoc();
?>     

<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <!-- inicio alerta -->

                <h2>Registro estudiantes</h2>
                <!-- fin alerta -->
                <div class="card">
                    <div class="card-header">
                        Lista de estudiantes
                    </div>
                    <div class="p-4">
                        <table class="table align-middle">
                            <thead>
                                <tr>
                                    <th scope="col">Documento</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Apellidos</th>
                                    <th scope="col">Correo</th>
                                    <th scope="col">Telefono</th>
                                   
                                </tr>
                            </thead>
</td>
<td><?php echo $row
["documento"] ?></td>
<td><?php echo $row
["nombre"] ?></td>
<td><?php echo $row
["apellidos"] ?></td>
<td><?php echo $row
["correo"] ?></td>
<td><?php echo $row
["telefono"] ?></td>
</tr>
</table>

                    </div>
</div>
</div>
</div>
</div>
</div>
</div>
<?php

}
?>

