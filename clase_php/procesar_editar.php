<?php 
include_once'model/conexion.php';

$documento= $_POST["documento"];
$nombre= $_POST["nombre"];
$apellidos= $_POST["apellidos"];
$correo= $_POST["correo"];
$telefono= $_POST["telefono"];

$consulta= "UPDATE estudiante SET nombre= '$nombre',
apellidos= '$apellidos', correo='$correo' ,telefono='$telefono'
WHERE documento= '$documento'";
$resultado=$conexion->query($consulta);
if($resultado){
    echo"se actualizo";
}
if($resultado)
{
    header('location:index.php?mensaje=registrado');

}
else{
    header('location: index.php?mensaje=error');
    exit();
}
?>
