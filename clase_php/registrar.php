<?php
if(empty($_POST['oculto']) || empty($_POST["txtdocumento"]) || empty($_POST["txtnombre"])
|| empty($_POST["txtapellidos"]) || empty($_POST["txtcorreo"]) || empty($_POST["txttelefono"])){
    header('location: index.php?mensaje=falta');

}
include_once 'model/conexion.php';
$documento= $_POST["documento"];
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$correo= $_POST["correo"];
$telefono = $_POST["telefono"];

$sentencia ="INSERT INTO estudiante(documento, nombre, apellidos, correo, telefono)
 VALUES ('$documento', '$nombre', '$apellidos', '$correo', '$telefono')";
 $resultado = $conexion ->query($sentencia);

 if($resultado == true){
    header('location:index.php?mensaje=registrado');
 }
 else{
    header('location:index.php?mensaje=error');
    exit();
 }

?>