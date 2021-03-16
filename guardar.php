<?php

include("abrir_conexion.php");

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];


$query= "INSERT INTO usuarios (nombre, usuario, contrasena, administrador) VALUES ('$name', '$email', '$password', '1')";



if($conexion->query($query) === TRUE){
    echo"Se ha registrado con exito.";
}else{
    echo "incorrecto".$query." ".$conexion->error;
}

$conexion->close();
?>