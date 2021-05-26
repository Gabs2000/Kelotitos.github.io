<?php
include'abrir_conexion.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Catálogo de Productos</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/skeleton.css">
    <link rel="stylesheet" href="css/custom.css">
</head>
<body>
<header id="header" class="header">
    <div class="container">
        <div class="row">
            <div class="four columns">
                <img src="img/logo.png" id="logo">
            </div>
            <div class="two columns u-pull-right">
                <ul>
                    <li class="submenu">
                            <img src="img/cart.png" id="img-carrito">
                            <div id="carrito">
                                    
                                    <table id="lista-carrito" class="u-full-width">
                                        <thead>
                                            <tr>
                                                <th>Imagen</th>
                                                <th>Nombre</th>
                                                <th>Precio</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                    </table>
                                    <a href="#" id="vaciar-carrito" class="button u-full-width">Vaciar Carrito</a>
                                    <a href="carrito.html" onclick="window.open(this.href)" id="pagar-carrito" class="button u-full-width">Pagar</a>
                            </div>
                    </li>
                </ul>
            </div>
        </div> 
    </div>
    </header>

    

    <div id="lista-cursos" class="container">
       <i> <h1 id="encabezado" class="encabezado">Productos Disponibles</h1> </i>
        <div class="row">

        <?php
        $resultado = $conexion->query("SELECT * FROM cat_productos2;") or die($conexion ->error);
    
        ?>
                <div class="four columns">
                <div class="card">
                    <img src="img/producto01.jpg" class="imagen-curso u-full-width">
                    <div class="info-card">
                        <h4>Elote en Vaso</h4>
                        <p>Tamaño Chico</p>
                        <img src="img/estrellas.png">
                        <p class="precio">$25 <span class="u-pull-right ">$15</span></p>
                        <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="1">Agregar Al Carrito</a>
                    </div>
                </div> <!--.card1-->
            </div>