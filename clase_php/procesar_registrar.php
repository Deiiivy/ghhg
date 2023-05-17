<?php
require("./model/conexion.php");
$documento = $_POST["documento"];
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];


$sentencia ="INSERT INTO estudiante(documento, nombre, apellidos, correo, telefono) VALUES ('$documento', '$nombre', '$apellidos', '$correo', '$telefono')";

$resultado = $conexion ->query($sentencia);
if($resultado){
    echo"se registro el usuario";
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