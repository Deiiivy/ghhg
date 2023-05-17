<?php
    print_r($_POST);
    if(!isset($_POST['codigo'])){
        header('Location: index.php?mensaje=error');
    }

    include_once 'model/conexion.php';
    $documento= $_POST["documento"];
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $correo= $_POST["correo"];
    $telefono = $_POST["telefono"];

    $sentencia = $conexion->prepare("UPDATE estudiante SET nombre = ?, apellidos = ?, correo = ?,telefono = ? where documento = ?;");
    $resultado = $sentencia->execute([$nombre, $apellidos, $correo,$telefono, $documento]);

    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=editado');
    } else {
        header('Location: index.php?mensaje=error');
        exit();
    }
    
?>






   

    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=editado');
    } else {
        header('Location: index.php?mensaje=error');
        exit();
    }
    
?>