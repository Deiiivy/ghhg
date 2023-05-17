<?php

$estudiante=
$conexion=mysqli_connect("localhost", "root","",
"curso");

if(mysqli_connect_errno())
{
    throw new RuntimeException('mysqli connection
    error:' .mysqli_connect_error());

}
else {
    echo"conexion realizada: "."<br>";
}
?>