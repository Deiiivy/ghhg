<?php 
require("./model/conexion.php");
$consulta="select * from estudiante";
$resultado=$conexion->query($consulta);
 while ($row=$resultado->fetch_assoc())
 {
    ?>
 }
<tr>
    <td scope="row">

    </td>
    <td><?php echo $row["docuemnto"]?></td>
    <td><?php echo $row["nombre"]?></td>
    <td><?php echo $row["apellidos"]?></td>
    <td><?php echo $row["correo"]?></td>
    <td><?php echo $row["telefono"]?></td>
</tr>
<td><a class="text-success" href="editar.php?codigo=<?php echo $row["documento"]; ?>"><i class="bi bi-pencil-square"></i></a></td>
<td><a onclick="return confirm('estas seguro de eleminar?');" class="text-danger" href="eliminar.php?codigo=<?php echo $row["documento"];?>"></a></td>
?>
  <td><a onclick="return confirm('Estas seguro de eliminar?');" class="text-danger" href="eliminar.php?codigo=<?php echo $row["documento"]; ?>"><i class="bi bi-trash"></i></a></td>
 </tr>

<?php
 } 

