<?php
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

session_start();
$_SESSION['name']= $name;

include("abrir_conexion.php");

$consulta="SELECT*FROM usuarios where nombre='$name' and usuario='$email' and contrasena='$password' and administrador=1";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:index1.html");
}
else{
    echo "<script>alert('El usuario es incorrecto.')</script>";
}

mysqli_free_result($resultado);
mysqli_close($conexion);
?>
    