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
            <div class="four columns">
                    <div class="card">
                        <img src="img/snack4.png" class="imagen-curso u-full-width">
                        <div class="info-card">
                            <h4>Elote en Vaso</h4>
                            <p>Tamaño Mediano</p>
                            <img src="img/estrellas.png">
                            <p class="precio">$35  <span class="u-pull-right ">$25</span></p>
                            <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="2">Agregar Al Carrito</a>
                        </div>
                    </div>
            </div><!--.card2-->
            <div class="four columns">
                    <div class="card">
                        <img src="img/3.png" class="imagen-curso u-full-width">
                        <div class="info-card">
                            <h4>Elote en Vaso</h4>
                            <p>Tamaño Grande</p>
                            <img src="img/estrellas.png">
                            <p class="precio">$45  <span class="u-pull-right ">$35</span></p>
                            <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="3">Agregar Al Carrito</a>
                        </div>
                    </div> <!--.card3-->
            </div>

        </div> <!--.row-->
        <div class="row">
            <div class="four columns">
                <div class="card">
                    <img src="img/1.png" class="imagen-curso u-full-width">
                    <div class="info-card">
                        <h4>Elote Entero</h4>
                        <p>Elote preparado con mayonesa,queso y chile.</p>
                        <img src="img/estrellas.png">
                        <p class="precio">$30  <span class="u-pull-right ">$20</span></p>
                        <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="4">Agregar Al Carrito</a>
                    </div>
                </div> <!--.card4-->
            </div>
            <div class="four columns">
                    <div class="card">
                        <img src="img/2.png" class="imagen-curso u-full-width">
                        <div class="info-card">
                            <h4>Elote Entero</h4>
                            <p>Elote asado preparado con salsa y queso blanco.</p>
                            <img src="img/estrellas.png">
                            <p class="precio">$45  <span class="u-pull-right ">$35</span></p>
                            <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="5">Agregar Al Carrito</a>
                        </div>
                    </div> <!--.card5-->
            </div>
            <div class="four columns">
                    <div class="card">
                        <img src="img/snack3.png" class="imagen-curso u-full-width">
                        <div class="info-card">
                            <h4>Elote Entero </h4>
                            <p>Elote preparado con queso y papitas trituradas. </p>
                            <img src="img/estrellas.png">
                            <p class="precio">$50  <span class="u-pull-right ">$45</span></p>
                            <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="6">Agregar Al Carrito</a>
                        </div>
                    </div> <!--.card6-->
            </div>
        </div> <!--.row-->
        <div class="row">
            <div class="four columns">
                <div class="card">
                    <img src="img/producto03.jpg" class="imagen-curso u-full-width">
                    <div class="info-card">
                        <h4>Tostitos Salsa Verde</h4>
                        <p>Con queso, salsa y elote.</p>
                        <img src="img/estrellas.png">
                        <p class="precio">$40  <span class="u-pull-right ">$35</span></p>
                        <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="7">Agregar Al Carrito</a>
                    </div>
                </div> <!--.card7-->
            </div>
            <div class="four columns">
                    <div class="card">
                        <img src="img/producto04.jpg" class="imagen-curso u-full-width">
                        <div class="info-card">
                            <h4>Tostitos Nachos</h4>
                            <p>Con queso, salsa y elote.</p>
                            <img src="img/estrellas.png">
                            <p class="precio">$45  <span class="u-pull-right ">$35</span></p>
                            <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="8">Agregar Al Carrito</a>
                        </div>
                    </div> <!--.card8-->
            </div>
            <div class="four columns">
                    <div class="card">
                        <img src="img/producto05.jpg" class="imagen-curso u-full-width">
                        <div class="info-card">
                            <h4>Tostitos Flaming Hot</h4>
                            <p>Con queso, salsa y elote-</p>
                            <img src="img/estrellas.png">
                            <p class="precio">$48  <span class="u-pull-right ">$35</span></p>
                            <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="9">Agregar Al Carrito</a>
                        </div>
                    </div> <!--.card9-->
            </div>
        </div> <!--.row-->
        <div class="row">
                <div class="four columns">
                    <div class="card">
                        <img src="img/snack1.jpeg" class="imagen-curso u-full-width">
                        <div class="info-card">
                            <h4>Conchitas Preparadas</h4>
                            <p>Con queso, crema, salsa y elote.</p>
                            <img src="img/estrellas.png">
                            <p class="precio">$45  <span class="u-pull-right ">$35</span></p>
                            <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="10">Agregar Al Carrito</a>
                        </div>
                    </div> <!--.card10-->
                </div>
                <div class="four columns">
                        <div class="card">
                            <img src="img/producto08.jpg" class="imagen-curso u-full-width">
                            <div class="info-card">
                                <h4>Agua Embotellada</h4>
                                <p>Marca Ciel</p>
                                <img src="img/estrellas.png">
                                <p class="precio">$20 <span class="u-pull-right ">$15</span></p>
                                <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="11">Agregar Al Carrito</a>
                            </div>
                        </div> <!--.card11-->
                </div>
                <div class="four columns">
                        <div class="card">
                            <img src="img/producto07.jpg" class="imagen-curso u-full-width">
                            <div class="info-card">
                                <h4>Coca Cola</h4>
                                <p>450 ml</p>
                                <img src="img/estrellas.png">
                                <p class="precio">$25 <span class="u-pull-right ">$15</span></p>
                                <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="12">Agregar Al Carrito</a>
                            </div>
                        </div> <!--.card12-->
                </div>
            </div> <!--.row-->
    </div>  

    <footer id="footer" class="footer">
        <div class="container">
            <div class="row">
                            
                    </div>
                    <div class="four columns">
                            <nav id="secundaria" class="menu">
                                <a class="enlace" href="QuienesSomos.html">¿Quienes Somos?</a>
                                <a class="enlace" href="Contacto.html">Ubicación</a>
                                
                            </nav>
                    </div>
            </div>
        </div>
    </footer>

    <script src="js/app.js"></script>

</body>
</html>